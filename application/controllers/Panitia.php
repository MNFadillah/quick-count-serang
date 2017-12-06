<?php

class Panitia extends ANT_Controller {
	function __construct() {
        parent::__construct();
        if (!$this->auth->logged_in()) {
            redirect('auth');
        }
        $this->data['page'] = "Panitia";
    }

    public function index() {
        $this->load->model('panitia_model');
        
        $this->data['panitia_menu'] = true;
        $crud = new grocery_CRUD();
        $crud->unset_jquery();
        $crud->set_table('panitias');
        $crud->set_subject('Panitia');
        $crud->display_as('id_tps', "TPS")->display_as('nama_panitia', 'Nama Panitia');
        $crud->set_relation('id_tps', 'tpss', 'nama_tps');
        $this->data['gc_data'] = $crud->render();
        $this->smarty->display($this->getLayout(), $this->data);
    }
}