<?php
class Users2Controller extends AppController {
public $uses=array('emp','dept');
public $result,$r;
function search(){
$this->layout='mylayout';
$result=$this->emp->find('all');
//pr($result);
$this->set('r',$result);
}
}
?>