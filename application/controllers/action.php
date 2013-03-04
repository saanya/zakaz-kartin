<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Action extends CI_Controller{ 
    
    public function __construct()
    {
        parent::__construct();
        
         //получим права пользователя
        $this->load->library('permission_role');
        $access=$this->permission_role->getAccess(3);
        
        if(!$this->session->userdata('login') OR $access==0)
        {
            redirect(base_url() . 'auth/index');
            die;
        }
        
        
        
        $user_role=$this->_getRole();
        $this->load->model("mdl_permission");
        $currentModule=$this->mdl_permission->getCurrentRole($user_role);
        if(!isset($currentModule[$user_role][3]))
        {
            redirect(base_url() . 'auth/index');
            die;
        }
    }
     
    function _getRole()
     {
        return $this->session->userdata('user_role');
     }
     
     function _showHeader(){
         $data['login']=$this->session->userdata('login');
         $data['title']="Список акций";
         $data['css'] = array("css/action1.css","css/reset.css","css/jquery-ui-1.8.23.custom.css","css/bootstrap.css");
         
         $user_role=$this->_getRole();
        
         $this->load->model("mdl_permission");
         
         $modules_info=$this->mdl_permission->getModules();
         $data['modules_info']=$modules_info;
         
         $currentModule=$this->mdl_permission->getCurrentRole($user_role);
         $data['currentModule']=$currentModule[$user_role];
         
         $this->load->view('header',$data);
     }
    
     function index()
     {
         $this->_showHeader();
         $this->load->view('action_view');
     }
     

}