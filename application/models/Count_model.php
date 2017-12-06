<?php

class Count_model extends ANT_Model {
	public function __construct() {
        parent::__construct();
    }

    public function getTpsAllCadesByIdDesa($id_desa = 0){
    	$this->db->select("a.*, (select sum(suara) from counts where id_cades = a.id_cades) as jumlah_suara, b.nama_cades, b.foto_cades, b.no_urut");
    	$this->db->join("cadess b", "a.id_cades = b.id_cades", "left");
    	$this->db->join("tpss c", "a.id_tps = c.id_tps", "left");
    	$this->db->where("c.id_desa = $id_desa and b.nama_cades != 'Suara Tidak Sah'");
    	$this->db->order_by("b.no_urut", "ASC");
    	$this->db->group_by("a.id_cades");
    	$this->db->from("counts a");
    	return $this;
    }

    public function getSuaraByIdTps($id_tps = 0){
    	$this->db->select("a.id, a.id_member, a.id_cades, (select sum(suara) from counts where id_cades = a.id_cades and id_tps = c.id_tps) as jumlah_suara, b.nama_cades, b.foto_cades, b.no_urut");
    	$this->db->join("cadess b", "a.id_cades = b.id_cades", "left");
    	$this->db->join("tpss c", "a.id_tps = c.id_tps", "left");
    	$this->db->where("c.id_tps = $id_tps and b.nama_cades != 'Suara Tidak Sah'");
    	$this->db->order_by("b.no_urut", "ASC");
    	$this->db->group_by("a.id_cades");
    	$this->db->from("counts a");
    	return $this;
    }

    public function getTotalSuara($id_desa = 0){
    	$this->db->select("sum(a.suara)");
    	$this->db->join("cadess b", "a.id_cades = b.id_cades", "left");
    	$this->db->join("tpss c", "a.id_tps = c.id_tps", "left");
    	$this->db->where("c.id_desa = $id_desa and b.nama_cades != 'Suara Tidak Sah'");
    	$this->db->from("counts a");
    	return $this;
    }

    function getDataTPS($id_desa = 0){
    	$this->db->select("b.*");
    	$this->db->join("tpss b", "a.id_tps = b.id_tps", "left");
    	$this->db->where("b.id_desa = $id_desa");
    	$this->db->from("counts a");
    	$this->db->group_by("b.id_tps");
    	return $this;
    }

    public function getSuaraTdkSahByIdTps($idTps = 0)
    {	
    	$this->db->select('sum(counts.suara) as jumlah_suara');
    	$this->db->join("cadess b", "counts.id_cades = b.id_cades", "left");
    	$this->db->join("tpss c", "counts.id_tps = c.id_tps", "left");
    	$this->db->where("c.id_tps = $idTps and b.nama_cades = 'Suara Tidak Sah'");
    	// $this->db->from("counts a");
    	$this->db->order_by("b.no_urut", "ASC");
    	return $this;
    }
}