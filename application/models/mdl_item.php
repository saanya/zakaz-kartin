<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mdl_item extends CI_Model{
    private $DB2;
    
    function __construct()
    {
        parent::__construct();
        $this->DB2 = $this->load->database('db2', TRUE, TRUE);
    }
    function getItem(){
            $item="SELECT * FROM items WHERE id='".(int)$_POST['idItem']."'";
            $query = $this->DB2->query($item);
            if ($query->num_rows() > 0)
            {
                foreach ($query->result_array() as $row)
                {
                    $result['result']['description']=$row['description'];
                    $result['result']['url']=$row['url'];
                    $result['result']['old_price']=$row['briliantText'];
                    $result['result']['id']=$row['id'];
                }
            }else{
                    $result['result']['info']=0;
            }            
            return $result;
    }
    
    function getListItem(){
        $item="SELECT * FROM items  WHERE type_item=1 OR type_item=2 OR type_item=3";
        $query = $this->DB2->query($item);
        if ($query->num_rows() > 0)
        {
            $i=0;
            foreach ($query->result_array() as $row)
            {
                $result[$i]['name']=$row['info'];
                $result[$i]['id']=$row['id'];
                $i++;
            }     
        }else{
                $result=array();
        }            
        return $result;
    }
    
 //   function addAction4(){
}