<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("User_Model");
        $this->load->helper("Function_Helper");
    }
    public function index(){ //display page
        $this->load->view('component/header');
        
        $users = $this->User_Model->get_all();
        $data = array(
            'users'=>$users
        );
        $this->load->view('user/add_user');
        $this->load->view('user/display_all_users',$data);
        // print_r($data);

        // $this->load->view('component/footer');
    }

    public function get_all_users(){
        print_r(json_encode($this->User_Model->get_all()));
    }
    
    public function add_user(){
        // print_r($this->input->post());
        $this->User_Model->add($this->input->post('name'),$this->input->post('email'));
        echo "User Added";
        // redirect('');
    }

    public function delete_user($id){
        $data = $this->User_Model->delete($id);
        print_r("Deleted");
        // redirect('');
    }

    public function update_user_demo($id){ //display page
        $data = array(
            'user'=> $this->User_Model->get_by_id($id)
        );
        $this->load->view('user/update_user',$data);
        // echo "hi";
    }
    public function update_user(){
        $data = $this->User_Model->update($this->input->get('id'),$this->input->get('name'),$this->input->get('email'));
        print_r("Updated");
    }
    public function update_user_js($id,$name,$email){
        $this->User_Model->update($id,$name,$email);
        print_r("Updated");
    }


    public function get_last(){
        $data = $this->User_Model->get_last();
        print_r(json_encode($data));
    }
    






    public function get_all(){
        // $data = $this->User_Model->get_all();
        // print_r($data);
    }
    public function getone($id){
        // $id = 3;
        $data = $this->User_Model->get_by_id($id);
        print_r($data);   
    }
    public function update(){
        // $data = $this->User_Model->update(9,"Sagar Waghmare");
        // print_r("Updated");
    }
    public function delete(){
        // $data = $this->User_Model->delete(9);
        // print_r("Deleted");
    }

}


?>