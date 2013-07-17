<?php
class Users1Controller extends AppController {
public $uses=array('Product','Category','PrCategory');
public $result,$r;
function search(){
$this->layout='mylayout';
$result=$this->Product->find('all');
//pr($result);
$this->set('r',$result);
}
}
?>