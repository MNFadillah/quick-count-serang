<?php

class Admin extends ANT_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->auth->logged_in()) {
            redirect('auth');
        }
        $this->data['page'] = "Admin";
    }

    public function index() {
        $crud = new grocery_CRUD();
        $crud->unset_jquery();
        $crud->set_table('users');
        $crud->callback_read_field('active', array($this, 'callback_read_active'));
        
        $crud->columns('first_name', 'last_name', 'username', 'email', 'created_on');
        $crud->field_type('password', 'password')
                ->field_type('ip_address', 'invisible')
                ->field_type('salt', 'invisible')
                ->field_type('created_on', 'invisible')
                ->field_type('active','dropdown', array('1' => 'Active', '0' => 'Not Active'));
        
        $crud->display_as('Nama Depan', 'Nama Belakang', 'Username', 'Email', 'Daftar pada');
        
        $crud->unset_add_fields('activation_code', 'forgotten_password_code', 'forgotten_password_time','remember_code', 'last_login');
        $crud->required_fields('email', 'active', 'first_name', 'last_name', 'company', 'phone');
        
        if($crud->getstate() == "edit"){
            $crud->unset_edit_fields('activation_code', 'forgotten_password_code', 'forgotten_password_time','remember_code', 'last_login');
            $crud->field_type('username', 'invisible')
                    ->field_type('password', 'invisible')
                    ->field_type('active','dropdown', array('1' => 'Active', '0' => 'Not Active'))
                    ->field_type('ip_address', 'invisible')
                    ->field_type('salt', 'invisible')
                    ->field_type('created_on', 'invisible');
            $crud->required_fields('email', 'active', 'first_name', 'last_name', 'company', 'phone');
        }else if($crud->getState()=="insert_validation"){
            $crud->set_rules('email', 'Email','valid_email|is_unique[users.email]|required|trim')
                ->set_rules('username', 'Username','is_unique[users.email]|required|trim')
                ->set_rules('password', 'Password','required|min_length[6]')
                ->set_rules('active', 'Active','required')
                ->set_rules('first_name', 'First Name','required|trim')
                ->set_rules('last_name', 'Last Name','required|trim')
                ->set_rules('phone', 'No. Tepon','required');
        }else if($crud->getState()=="update_validation"){
            $crud->set_rules('email', 'Email','valid_email|required|trim')
                ->set_rules('active', 'Active','required')
                ->set_rules('first_name', 'First Name','required|trim')
                ->set_rules('last_name', 'Last Name','required|trim')
                ->set_rules('phone', 'No. Tepon','required');
        }
        
        $crud->set_field_upload('image', 'assets/uploads/images/', 'jpg|jpeg|png');
        
        $crud->callback_insert(array($this, 'add_admin'));
        
        $crud->add_action('Change Password', '', 'admin/change_password', 'ui-icon-image');
        
        $this->data['gc_data'] = $crud->render();

        $this->smarty->display($this->getLayout(), $this->data);
    }
    function add_admin($values){
        $identity_column = $this->config->item('identity','ion_auth');
        $this->data['identity_column'] = $identity_column;
        if($this->form_validation->run()){
            $password = $values['password'];
            $email = strtolower($values['email']);
            $identity = ($identity_column==='email') ? $email : $values['username'];
            $additional_data = array(
                'username' => $values['username'],
                'first_name' => $values['first_name'],
                'last_name' => $values['last_name'],
                'company' => $values['company'],
                'phone' => $values['phone'],
                'created_on' => date('Y-m-d H:i:s')
            );
            
            if($this->auth->register($identity, $password, $email, $additional_data)){
                return true;
            }else{
                return $this->auth->errors();
            }
        }else{
            return false;
        }
    }
    
    function change_password() {
        $crud = new Grocery_CRUD();
        $crud->set_table('users');
        $crud->unset_list();
        $crud->unset_add();
        $crud->unset_back_to_list();

        $crud->fields('password', 'verify_password');
        $crud->field_type('password', 'password')->field_type('verify_password', 'password');

        $crud->required_fields('password', 'verify_password');
        $crud->set_rules('password', 'Password', 'trim|required|matches[verify_password]|min_length[6]');

        $id = (int) $this->uri->segment(3);
        if($id<0){
            redirect('admin');
        }
        
        $crud->callback_update(array($this, 'update_pass'));
        
        try {
            $this->data["gc_data"] = $crud->render();
        } catch (Exception $ex) {
            if ($ex->getCode() == 14) {
                redirect('admin/change_password/index/edit/' . $id);
            }else{
                redirect('admin');
            }
        }

        $this->smarty->display($this->getLayout(), $this->data);
    }
    
    function update_pass($values, $primary_key){
//        die(print_r($values)  . $primary_key);
        $data = array('password' => $values['password']);
        if($this->auth->update($primary_key, $data)){
            return true;
        }else{
            return false;
        }
    }
    
    function callback_read_active($values){
        if($values == 1){
            return 'Active';
        }else{
            return 'Non Active';
        } 
    }
}
