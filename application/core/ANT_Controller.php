<?php

class ANT_Controller extends CI_Controller {

    var $data;
    var $user;

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        $this->data = array();
        $this->data['user_active'] = $this->auth->user()->row();
        $this->data['website_name'] = "Quick Count Pilkades Serang";
        $this->data['website_logo'] = "anjing.jpg";
    }

    public function getLayout() {
        return "layout.html";
    }

    public function getUser() {
        return $this->auth->user()->row();
    }
    
    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
