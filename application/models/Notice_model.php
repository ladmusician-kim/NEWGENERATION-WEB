<?php
class Notice_model extends CI_Model {
    function __construct()
    {    	
        parent::__construct();
    }

    function add($data) {
         $input_data = array(
            'title'     =>  $data['title'],
            'content'    =>  $data['content'],
            'created'    =>  date("Y-m-d"),
            'isdeprecated' => FALSE,
            'for_userid' => $this->session->userdata('user_id')
        );

        $this->db->insert('notice', $input_data);
        $result = $this->db->insert_id();

        return $result;
    }

    function get_all_count () {
         return $this->db->count_all_results('notice');
    }
    function get_by_id($notice_id){
        return $this->db->get_where('notice', array('notice_id'=>$notice_id))->row();
    }
    function get_items($sorting, $filter, $page = 1, $per_page = 10) {
        $base_dto = new BASE_DTO;
        
        if ($page === 1) {
            $this->db->limit($per_page);
            
        } else {
            $this->db->limit($per_page, ($page - 1) * $per_page);            
        }

        $this->db->select('*');
        $this->db->from('notice');
        $this->db->join('user', 'user._id = notice.for_userid');

        $result = $this->db->get()->result();

        $base_dto->set_value($result);  
        return $base_dto;
    }
}   