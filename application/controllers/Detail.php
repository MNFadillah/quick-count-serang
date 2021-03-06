<?php

class Detail extends ANT_Controller {
	function __construct() {
        parent::__construct();
    }
    public function index($id_desa = 0){
    	$this->id(0);
    }
    public function id($id_desa)
    {
        $desaData = $this->desa_m->get_by(array('id_desa'=>$id_desa));
        // print_r($desaData);
        $dataAll = $this->count_m->getTpsAllCadesByIdDesa($id_desa)->get_all();
        $total = 0;
        foreach ($dataAll as $key => $value) {
            $total = $total + $value->jumlah_suara;
        }
        foreach ($dataAll as $key => $value) {
            $dataAll[$key]->presentase = $value->jumlah_suara/$total * 100;
            $dataAll[$key]->nama_cades = htmlspecialchars(str_replace("'", '`', $value->nama_cades));
        }
        // print_r($dataAll);
        $dataTps = $this->count_m->getDataTPS($id_desa)->get_all();
        // $dataSuaraTidakSah = $this->count_m->getSuaraTdkSahByIdTps($id_tps)

        foreach ($dataTps as $key => $value) {
            $dataCades = $this->count_m->getSuaraByIdTps($value->id_tps)->get_all();
            $dataTps[$key]->dataCades = $this->count_m->getSuaraByIdTps($value->id_tps)->get_all();
            $jumlahSuaraTidakSah = $this->count_m->getSuaraTdkSahByIdTps($value->id_tps)->get_all();
            if($jumlahSuaraTidakSah!= null && $jumlahSuaraTidakSah!= ''){
                $dataTps[$key]->jumlahSuaraTidakSah = $this->count_m->getSuaraTdkSahByIdTps($value->id_tps)->get_all()[0]->jumlah_suara;
            }else{
                $jumlahSuaraTidakSah = 0;
            }
            // print_r($dataTps[$key]->jumlahSuaraTidakSah);
            // die();
        }
        // echo $this->db->last_query();
        $i = 0;
        $totalArray = array();
        foreach ($dataTps as $key => $value) {
            $total = 0;
            foreach ($value->dataCades as $key2 => $value2) {
                $total = $total+=$value2->jumlah_suara;
            }
            $totalArray[$i] = $total;
            $i++;
        }
        $i = 0;
        foreach ($dataTps as $key => $value) {
            foreach ($value->dataCades as $key2 => $value2) {
                $dataTps[$key]->dataCades[$key2]->presentase = $value2->jumlah_suara/$totalArray[$i]*100;
            }
            $i++;
        }

        $this->data["dataDesa"] = $desaData;
        $this->data["dataTps"] = $dataTps;
        $this->data["dataAll"] = $dataAll;
        $this->data["jumlahCades"] = $this->count_m->getTpsAllCadesByIdDesa($id_desa)->count_all();
        $this->data["dataAllEncoded"] = json_encode($dataAll);
        $this->smarty->display('pages/detail.html', $this->data);
    }
}