<?php

class Kecamatan extends ANT_Controller {
	function __construct() {
        parent::__construct();
        if (!$this->auth->logged_in()) {
            redirect('auth');
        }
        $this->data['page'] = "Kecamatan";
    }

    public function index() {
        $this->load->model('kecamatan_model');
        
        $this->data['kecamatan_menu'] = true;
        $crud = new grocery_CRUD();
        $crud->unset_jquery();
        $crud->set_table('kecamatans');
        $crud->set_subject('Kecamatan');
        $crud->columns('id_kecamatan', 'nama_kecamatan');

        $this->data['gc_data'] = $crud->render();

        $this->smarty->display($this->getLayout(), $this->data);
    }
}