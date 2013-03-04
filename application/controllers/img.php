<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Img extends CI_Controller{ 
    
    public function __construct()
    {
        
        parent::__construct();

    }
     
     
     function _showHeader(){
         
         $data['title']="Работа с изображениями";
         
         $data['css'] = array("css/imgareaselect-animated.css","css/reset.css","css/jquery-ui-1.8.23.custom.css","css/bootstrap.css");
         
         $data['js'] = array("js/jquery.min.js","js/jquery.imgareaselect.js","js/jquery.imgareaselect.min.js","js/jquery.imgareaselect.pack.js","js/my.js");
         
         $this->load->view('header',$data);
     }
    
     function index()
     {
         $this->_showHeader();
         $this->load->view('img_view');

     }   
}