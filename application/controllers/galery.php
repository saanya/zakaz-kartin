<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galery extends CI_Controller{ 
    
    public function __construct()
    {
        
        parent::__construct();

    }
     
     
     function _showHeader(){
         
         $data['title']="Галерея";
         
         $data['css'] = array("css/reset.css","css/jquery-ui-1.8.23.custom.css","css/bootstrap.css","css/jquery.fancybox-1.3.4.css","css/photo.css");
         
         $data['js'] = array("js/jquery.min.js","js/bootstrap.js","js/photo.js","js/jquery.fancybox-1.3.4.js","js/jquery.mousewheel-3.0.4.pack.js");
         
         $data['description'] = " Рисую картины на заказ, купить готовую картину, примеры выполненых работ";
         
         $data['keywords'] = "картины, заказ, купить, рисовать, маслом, примеры, работ";
         
         $this->load->view('header',$data);
     }
    
     function index()
     {
         $this->_showHeader();
         $this->load->view('photo_view');
         $this->load->view('footer');

     }   
}