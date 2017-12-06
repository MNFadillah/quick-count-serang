<?php

date_default_timezone_set("Asia/Jakarta");

class Users extends ANT_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->auth->logged_in()) {
            redirect('auth');
        }
        $this->data['users_menu'] = true;
        $this->data['page'] = "Users";
    }

    function index() {
        $this->load->model('member_model');
        // $this->member_model->update_by(array('viewed'=>'false'),array('viewed'=>'true'));
        
        $crud = new grocery_CRUD();
        $crud->set_table('members');
        $crud->unset_jquery();
        $crud->columns('name','telp', 'created_at');
        $crud->display_as('name', "Nama")->display_as('telp', 'No. Telpon')->display_as('updated_at', 'Diperbaharui pada')
                ->display_as('created_at', 'Dibuat pada');
        
        
        $crud->add_fields('name', 'password', 'verify_password', 'telp');

        $crud->unset_edit_fields('password', 'verify_password');

        $crud->field_type('password', 'password')->field_type("created_at", "invisible")
                ->field_type("updated_at", "invisible")->field_type('verify_password', 'password');

        if ($crud->getState() == "read") {
            //hide password
            $crud->unset_read_fields('password', 'verify_password');
        } else if ($crud->getState() === "insert_validation") {
            $crud->set_rules('password', 'Password', 'trim|required|matches[verify_password]');
            $crud->set_rules('verify_password', 'Verify Password', 'required');
        }


        $crud->required_fields('name', 'telp', 'password');
        $crud->set_rules('name', 'Nama', 'trim|required')->set_rules("telp", "No. Telpon", "numeric|required");

        $crud->add_action('Change Password', '', 'users/change_password', 'ui-icon-image');

        $crud->callback_before_update(array($this, "formating_date"));
        $crud->callback_before_insert(array($this, "format_pass"));

        $this->data["gc_data"] = $crud->render();
        $this->smarty->display($this->getLayout(), $this->data);
    }

    //fomat date for update_at when data edited
    function formating_date($post_array) {
        $post_array = $this->formating_pass($post_array);
        $post_array['updated_at'] = date('Y-m-d H:i:s');
        return $post_array;
    }

    function format_pass($post_array) {
        unset($post_array['verify_password']);
        if (isset($post_array['password'])) {
            $post_array['password'] = md5($post_array['password']);
        }
        $post_array['session'] = $this->generateRandomString(32);
        // die(print_r($post_array));
        return $post_array;
    }

    function change_password() {
        $crud = new Grocery_CRUD();
        $crud->set_table('members');
        $crud->unset_list();
        $crud->unset_add();
        $crud->unset_back_to_list();

        $crud->fields('password', 'verify_password', 'updated_at');
        $crud->field_type('password', 'password')
                ->field_type("updated_at", "invisible")->field_type('verify_password', 'password');

        $crud->required_fields('password', 'verify_password');
        $crud->set_rules('password', 'Password', 'trim|required|matches[verify_password]');

        $crud->callback_before_update(array($this, 'formating_pass'));

        $id = (int) $this->uri->segment(3);
        try {
            $this->data["gc_data"] = $crud->render();
        } catch (Exception $ex) {
            if ($ex->getCode() == 14) {
                redirect('users/change_password/edit/' . $id);
            }
        }

        $this->smarty->display($this->getLayout(), $this->data);
    }
}
