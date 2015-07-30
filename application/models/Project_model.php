<?php
class Project_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function add($data) {
        $input_data = array(
            'title'     =>  $data['title'],
            'content'    =>  $data['content'],
            'created'    =>  date("Y-m-d"),
            'start_date'    =>  $data['start_date'],
            'end_date'    =>  $data['end_date'],
            'create_userid' => $this->session->userdata('user_id'),
            'admin_userid' => $data['admin_userid'],
            'isdeprecated' => FALSE,
        );

        $this->db->insert('project', $input_data);
        $result = $this->db->insert_id();

        return $result;
    }

    function get_all_count () {
        return $this->db->count_all_results('project');
    }
    function get_by_id($project_id){
        return $this->db->get_where('project', array('_projectid'=>$project_id))->row();
    }
    function get_items($sorting, $filter, $page = 1, $per_page = 10) {
        $base_dto = new BASE_DTO;

        if ($page === 1) {
            $this->db->limit($per_page);

        } else {
            $this->db->limit($per_page, ($page - 1) * $per_page);
        }

        $this->db->select('*');
        $this->db->from('project');
        $this->db->join('user', 'user._id = project.admin_userid');

        $result = $this->db->get()->result();

        $base_dto->set_value($result);
        return $base_dto;
    }
}   