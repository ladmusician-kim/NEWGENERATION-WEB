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