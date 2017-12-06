<?php

class Desa extends ANT_Controller {
	function __construct() {
        parent::__construct();
        if (!$this->auth->logged_in()) {
            redirect('auth');
        }
        $this->data['page'] = "Desa";
    }

    public function index() {
        $this->load->model('desa_model');
        
        $this->data['desa_menu'] = true;
        $crud = new grocery_CRUD();
        $crud->unset_jquery();
        $crud->set_table('desas');
        $crud->set_subject('Desa');
        $crud->display_as('id_kecamatan', "Kecamatan")->display_as('nama_desa', 'Desa')->display_as('penduduk_l', 'Penduduk Pria')->display_as('penduduk_p', 'Penduduk Wanita')->display_as('dpt_l','DPT Pria')->display_as('dpt_p','DPT Perempuan');
        $crud->set_relation('id_kecamatan', 'kecamatans', 'nama_kecamatan');
        $this->data['gc_data'] = $crud->render();

        $this->smarty->display($this->getLayout(), $this->data);
    }
}