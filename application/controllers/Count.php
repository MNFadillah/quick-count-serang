<?php

class Count extends ANT_Controller {
	function __construct() {
        parent::__construct();
        if (!$this->auth->logged_in()) {
            redirect('auth');
        }
        $this->data['page'] = "Quick Count";
    }

    public function index() {
        $this->load->model('count_model');
        
        $this->data['count_menu'] = true;
        $crud = new grocery_CRUD();
        $crud->unset_jquery();
        $crud->set_table('counts');
        $crud->set_subject('Hasil Quick Count');
        $crud->display_as('id_tps', "TPS")->display_as('id_member', 'Saksi')->display_as('id_cades', 'Calon')->display_as('suara', 'Jumlah Suara');
        $crud->set_relation('id_tps', 'tpss', 'nama_tps');
        $crud->set_relation('id_member', 'members', 'name');
        $crud->set_relation('id_cades','cadess', 'nama_cades');
        $crud->set_field_upload('foto_cades', 'assets/uploads/images', 'jpg|jpeg|png');
        $this->data['gc_data'] = $crud->render();
        $this->smarty->display($this->getLayout(), $this->data);
    }
}