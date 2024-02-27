<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{

    public function index(){}

    public function get_all(){
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function get_by_id($id){
        $query = $this->db->get_where('users',array('id'=>$id));
        return $query->result_array();
    }

    public function delete($id){
        $data = array(
            'id'=>$id
        );
        $this->db->delete('users',$data);
    }

    public function add($name,$email){
        $data = array(
            'name'=>$name,
            'email'=>$email,
        );
        $this->db->insert('users',$data);
    }

    public function update($id,$name,$email){
        $array = array(
            'name' => $name,
            'email' => $email,
        );
        $this->db->set($array);
        $this->db->where('id', $id);
        $this->db->update('users');
    }


    public function get_last(){
        
        $this->db->order_by("id","DESC");
        $this->db->limit(1);
        $query = $this->db->get('users');
        return $query->result_array();
    }

}
?>