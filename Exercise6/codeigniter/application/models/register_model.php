<?php
class register_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_users($user_id = FALSE)
    {
        if ($user_id === FALSE)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('user_id' => $user_id));
        return $query->row_array();
    }

    public function get_user_by_id($user_id = 0)
    {
        if ($user_id === 0)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('user_id' => $user_id));
        return $query->row_array();
    }


    public function set_news($id = 0)
    {
        $this->load->helper('url');

        $user_id = url_title($this->input->post('id'), 'dash', TRUE);

        $data = array(
            'name' => $this->input->post('name'),
            'nickname' => $this->input->post('nickname'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'homead' => $this->input->post('homead'),
            'gender' => $this->input->post('gender'),
            'comment' => $this->input->post('comment')
        );

        if ($id == 0) {
            return $this->db->insert('users', $data);
        } else {
            $this->db->where('user_id', $id);
            return $this->db->update('users', $data);
        }
    }

    public function delete_news($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->delete('users');
    }
}
