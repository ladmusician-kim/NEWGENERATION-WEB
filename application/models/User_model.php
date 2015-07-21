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
    function add($data) {
         $input_data = array(
            'email'     =>  $data['email'],
            'password'    =>  $data['password'],
            'created'    =>  date("Y-m-d"),
            'isdeprecated' => FALSE
        );

        $this->db->insert('user', $input_data);
        $result = $this->db->insert_id();

        if ($result > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function get_user_by_email($option) {
        return $this->db->get_where('user', array ('email' => $option['email']))->row();

    }

    /* created */
    function create($data) {
        $post_data = array(
            'label'     =>  $data['label'],
            'number'    =>  $data['num'],
            'created'    =>  date("Y-m-d"),
            'updated'    =>  date("Y-m-d"),
            'eat'    =>  'null',
            'hit'   =>  0
        );
        $this->db->insert('user', $post_data);
        return $this->db->insert_id();
    }
    function countAll() {
        return $this->db->count_all_result('user');
    }
}