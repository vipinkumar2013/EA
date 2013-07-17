<?php
class User extends AppModel{
/*var $validate = array(
    'email' => array(
      'rule' => 'email'
      )
    );*/
function myVal($res)
	{
		//pr($this->find('all'));
	$t=$this->find('all',array('conditions'=>array('User.email'=>$res['email'])));
	//pr($t);exit;
//$this->User->set($this->data);
//if($this->User->validate())
//{	
if(empty($t))
{
$page="No Such Account";
}
else
if($t[0]['User']['type']==1)
$page='adminlogin';
else
if($t[0]['User']['is_active']==1)
$page='userlogin';	
else
{
$page="Your account has not been activated";
}
return $page;
	}
function ch($t)
{
$data=$this->find('all',array('conditions'=>array('id'=>$t)));
$d=$data[0]['User']['name'];
return $d;
}
}
?>