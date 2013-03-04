<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lib_view{
    
    function view_action1(){
        
         $data['base']=base_url();
         $data['title']="Первая акция";
         $this->load->view('header',$data);
         $this->load->model("mdl_static_bonus");
         $data['static_bonus_VK']=$this->mdl_static_bonus->getStaticBonusVK();
         $data['static_bonus_Mail']=$this->mdl_static_bonus->getStaticBonusMail();
         $data['static_bonus_Odnoklassniki']=$this->mdl_static_bonus->getStaticBonusOdnoklassniki();
         $this->load->view('action1_view',$data);
        
    }
    
}
