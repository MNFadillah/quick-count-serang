<?php

class Dashboard extends ANT_Controller {

    function __construct() {
        parent::__construct();
        $this->data["dashboard_menu"] = "true";
    }

    public function index() {
        if (!$this->auth->logged_in()) {
            // redirect them to the login page
            redirect('auth', 'refresh');
        } else {
            $this->data['page'] = "Dashboard";
            

            $this->data['kecamatanCount'] = $this->kecamatan_m->count_all();
            $this->data['desaCount'] = $this->desa_m->count_all();
            $this->data['cadesCount'] = $this->cades_m->count_all();
            $this->data['panitiaCount'] = $this->panitia_m->count_all();
            $this->data['qcCount'] = $this->count_m->count_all();
            
            $this->data["main_content"] = $this->smarty->view("dashboard/index.html", $this->data, true);
            $this->smarty->display($this->getLayout(), $this->data);
        }
    }

}
