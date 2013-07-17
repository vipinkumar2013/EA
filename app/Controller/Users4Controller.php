<?php
class Users4Controller extends AppController {
public $uses=array('Product','Category','Pr_Category');
public $result,$r;
function search(){
$this->layout='mylayout';
/*$id=2;
$result=$this->Product->findById($id); success*/
//$result=$this->Product->findByName('name');
//$result=$this->Product->find('neighbors',array('fields'=>'id','value'=>'3'));
//$result=$this->Product->find('neighbors'); gives the first record
$result=$this->Product->find('all');
pr($result);
$this->set('r',$result);
}
}
?>