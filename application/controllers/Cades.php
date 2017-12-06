<?php

class Cades extends ANT_Controller {
	function __construct() {
        parent::__construct();
        if (!$this->auth->logged_in()) {
            redirect('auth');
        }
        $this->data['page'] = "Calon Kepala Desa";
    }

    public function index() {
        $this->load->model('cades_model');
        
        $this->data['cades_menu'] = true;
        $crud = new grocery_CRUD();
        $crud->unset_jquery();
        $crud->set_table('cadess');
        $crud->set_subject('Calon Kepala Desa');
        $crud->display_as('id_desa', "Desa")->display_as('nama_cades', 'Nama Calon')->display_as('foto_cades', 'Foto Calon')->display_as('alamat_cades', 'Alamat Calon');
        $crud->set_relation('id_desa', 'desas', 'nama_desa');
        $crud->set_field_upload('foto_cades', 'assets/uploads/images', 'jpg|jpeg|png');
        $this->data['gc_data'] = $crud->render();
        $this->smarty->display($this->getLayout(), $this->data);
    }
}