<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller{ 
    
    public function __construct() {
        
        parent::__construct();
        
    }
    
    function _showHeader(){
         
         $data['title']="Галерея";
         
         $data['css'] = array("css/reset.css","css/jquery-ui-1.8.23.custom.css","css/bootstrap.css","css/photo.css","css/jquery.fancybox-1.3.4.css");
         
         $data['js'] = array("js/jquery.min.js","js/jquery-ui.min.js","js/bootstrap.js","js/photo.js");
         
         $data['description'] = " Рисую картины на заказ, контакты";
         
         $data['keywords'] = "картины, заказ, рисовать, маслом, контакты";
         
         $this->load->view('header',$data);
     }
    
     function index()
     {
         
         $this->_showHeader();
         $this->load->view('contact_view');
         $this->load->view('footer');

     } 
    
}

?>