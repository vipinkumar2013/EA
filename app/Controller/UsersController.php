<?php
class UsersController extends AppController {
//public $helpers=array('html');
public $uses=array('User');
public $result,$t,$userdata;

function index(){
$this->layout='mylayout';
}
function login(){ 
	$this->layout='mylayout';
	$this->set('result',$this->data);
	$result=$this->data;
	if($result['email']==''||$result['pwd']=='')
	{
	$this->redirect('index');
	exit;
	}
	$r=$this->User->myVal($result);
	
	if($r=='adminlogin')
	$this->redirect('adminlogin/x/9');
	else if($r=='userlogin')
	$this->redirect('userlogin');
	else
	echo $r;
	
/*	$t=$this->User->find('all',array('conditions'=>array('User.email'=>$this->data['email'])));
//$this->User->set($this->data);
//if($this->User->validate())
//{	
if($t[0]['User']['type']==1)
$this->redirect('adminlogin');
else
if($t[0]['User']['is_active']==1)
$this->redirect('userlogin');	
else
{
//$this->redirect('login');
echo "Your account has not been activated";
}*/
//}
}
function adminlogin($status,$id){ 

	$this->layout='layout1';
$r=$this->User->find('all',array('conditions'=>array('type'=>2)));
$this->set('userdata',$r);
$userdata=$this->User->find('all',array('conditions'=>array('type'=>2)));
//pr($userdata);
if($status=="act")
{
$this->User->updateAll(array('User.is_active'=>1),array('User.id'=>$id));
}
if($status=="deact")
{
$this->User->updateAll(array('User.is_active'=>0),array('User.id'=>$id));
}
}
function userlogin(){ 
	$this->layout='layout2';
	
}
function reg(){ 
	 $this->layout='mylayout';	
	}
function display1(){
 //pr($this->data);
 $mydata=$this->data;
 $mydata['pwd']=md5(end(explode('@',$mydata['email'])).rand());
 
 $this->User->save($mydata);
   }
   function display2(){
 //pr($this->data);
 $mydata=$this->data;
 $this->User->updateAll(array('User.name'=>$mydata['name']),array('User.id'=>$mydata['id']));
   }
function add($str){
 
	 $this->layout='mylayout';	
	 if($str=="new")
	 {
	 $this->render(add1);
	 }
	 else
	 if($str=="edit")
	 {
	 $this->render(add2);
	 }
	}
function edit($id){ 

	 $this->layout='mylayout';	
	 
	}
function search(){
$this->layout='mylayout';
//$result=$this->User->find('all',array('conditions'=>array('User.id'=>2))); success
//$result=$this->User->find('all',array('conditions'=>array('User.id NOT'=>2)));success
//$result=$this->User->find('all',array('conditions'=>array('User.id'=>2,'password NOT'=>'')));
//$result=$this->User->find('first');
//$result=$this->User->find('list'); //Retrieves all ids
//$result=$this->User->find('neighbors',array('conditions'=>array('User.id'=>3)));
//$result=$this->User->find('all',array('conditions'=>array('OR'=>array('User.id'=>3,'User.id'=>2)))); TO BE CHECKED
//$result=$this->User->find('list',array('condition'=>array('User.id >'=>3))); same as find('list')
//$result=$this->User->find('count'); success
//$result=$this->User->find();
pr($result);
$this->set('r',$result);
}
function change(){ 
$this->set("t",$this->request['data']['i']);
$t=$this->request['data']['i'];
$result=$this->User->ch($t);
echo $result;exit;

	}
}
?>