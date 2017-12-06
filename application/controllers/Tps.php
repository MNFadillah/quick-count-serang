<?php

class Tps extends ANT_Controller {
	function __construct() {
        parent::__construct();
        if (!$this->auth->logged_in()) {
            redirect('auth');
        }
        $this->data['page'] = "Tps";
    }

    public function index() {
        $this->load->model('tps_model');
        
        $this->data['tps_menu'] = true;
        $crud = new grocery_CRUD();
        $crud->unset_jquery();
        $crud->set_table('tpss');
        $crud->set_subject('Tps');
        $crud->set_relation('id_desa', 'desas', 'nama_desa');
        $crud->display_as('id_desa', "Desa")->display_as('nama_tps', 'Nama Tps');
        $this->data['gc_data'] = $crud->render();

        $this->smarty->display($this->getLayout(), $this->data);
    }
}