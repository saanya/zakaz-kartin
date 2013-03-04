<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Ajax extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('id_user'))
        {
            redirect(base_url() . 'auth/index');
            die;
        }
    }
    
    function getInfo(){
       
       $sn=$this->input->post('sn');;
       $id=$this->input->post('id');

       $this->load->model("mdl_user");
       $resultSearch=$this->mdl_user->getUserInfoGame($id,$sn);
       
       echo json_encode($resultSearch);
   }
    
}