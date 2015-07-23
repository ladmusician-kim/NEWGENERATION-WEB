<?php
class User_model extends CI_Model {
    function __construct()
    {    	
        parent::__construct();
    }

    /* read */
    function gets(){
    	return $this->db->query("SELECT * FROM user ORDER BY _id DESC")->result();
    }
    function getbyid($user_id){
    	return $this->db->get_where('user', array('_id'=>$user_id))->row();
    }
    function get_user_by_email($option) {
        return $this->db->get_where('user', array ('email' => $option['email']))->row();

    }
    function add($data) {
         $input_data = array(
            'email'     =>  $data['email'],
            'password'    =>  $data['password'],
            'created'    =>  date("Y-m-d"),
            'isdeprecated' => FALSE,
            'isadmin'   => FALSE
        );

        $this->db->insert('user', $input_data);
        $result = $this->db->insert_id();

        return $result;
    }
}


/*
foreach($users as $use) {
    var_dump($user);
}
*/