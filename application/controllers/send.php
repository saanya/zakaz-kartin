<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Send extends CI_Controller{
    
     function __construct()
     {
	 parent::__construct();
         $this->load->library('email');
     }
     
     function index()
     {
         
       // $this->email->from('krasavasanya@gmail.com', 'Ваше имя');
        $this->email->to('krasavasanya@gmail.com','mania1992w1@rambler.ru');

        if(!empty($_POST['name']) && !empty($_POST['email'])){
            
            $name=$this->input->post("name");   
            $email=$this->input->post("email");
            $this->email->from( $email, 'Ваше имя');
            
            $skype=$this->input->post("skype");
            $description=$this->input->post("description");
            
        }else{
            $resultSent['result'] ="error";
            echo json_encode($resultSent);
            die();
        }
        
        $imgStr=null;
        if(isset($_POST['img'])){     
            foreach($this->input->post('img') as $key=>$value){
                $imgStr.=" Прикрипленное изображение №:$key - ссылка: ".base_url()."assets/img/articles/".$value."; \r\n";
            }
        }
        
        
        $subject=" Имя: $name ; \r\n Email: $email ; \r\n Skype: $skype ; \r\n Коментарий: $description ; \r\n $imgStr";
        
        
        $this->email->subject('Заказ картины');
        $this->email->message($subject);

        if( $this->email->send() )
            $resultSent['result'] ="success";
        else
            $resultSent['result'] ="error";
        echo json_encode( $resultSent );
//        echo $this->email->print_debugger();
        
         //$this->_showHeader();
         //$this->load->view('order_view');
         //$this->load->view('footer');

     }  
    
}