<?php

class Member_model extends ANT_Model {

	public $before_create = array( 'timestamps' );
	// public $protected_attributes = array('password');

	public function __construct()
	{
		parent::__construct();
	}

	public function select($fields)
	{
		$this->db->select($fields);
		return $row = $this->get_all();
	}

	protected function timestamps($member)
        {
            $member['created_at'] = $member['updated_at'] = date('Y-m-d H:i:s');
            return $member;
        }
        
        public function addPoint($id, $point){
            $memberData = $this->get($id);
            $oldpoint = $memberData->point;
            $newpoint = $oldpoint + $point;
            $this->update($id, array('point'=>$newpoint));
        }
}