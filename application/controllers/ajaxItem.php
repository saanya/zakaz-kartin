<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class AjaxItem extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login'))
        {
            redirect(base_url() . 'auth/index');
            die;
        }
    }
    
    function index(){
       $this->load->model("mdl_item");
       $resultSearch=$this->mdl_item->getItem();
       echo json_encode($resultSearch);
    }
    
}