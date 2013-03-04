<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Permission_role{ 
    
//    public function __construct()
//    {
//          echo 1;
//
//    }
    
    public function __construct()
    {
        $CI = & get_instance ();
        //$this->CI::__construct();
        if(!$CI->session->userdata('login'))
        {
            redirect(base_url() . 'auth/index');
            die;
        }

    }
    
     function _getRole()
     {
        return $this->CI->session->userdata('user_role');
     }
    
    public function getAccess($id_module)
    {   
        $CI = & get_instance ();
        $user_role=$CI->_getRole();
        $CI->load->model("mdl_permission");
        $currentModule=$CI->mdl_permission->getCurrentRole($user_role);
        if(isset($currentModule[$user_role][$id_module])){
            return 1;
        }else{
            return 0;
        }
//        return $currentModule[$user_role][$id_module];
//        var_dump($currentModule[$user_role][$id_module]);
//        if(!isset($currentModule[$user_role][$id_module]))
//        {
//            redirect(base_url() . 'auth/index');
//            die;
//        } 
    }
}