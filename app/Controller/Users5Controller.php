<?php
//updateAll function
class Users5Controller extends AppController {
public $uses=array('Student');
public $result,$r,$i;
function input()
{


}
function save()
{
$this->Student->save($this->data);
}
function update(){
$this->layout='mylayout';
/*$this->Product->updateAll(
array('Product.name'=>'"computer"'),
array('Product.id'=>4)
); success */
$result=$this->Student->find('all',array('fields'=>array('phy','che','math')));
//pr($result);
$i=1;
foreach($result as $x)
{
$this->Student->updateAll(
array('Student.tot'=>$x['Student']['phy']+$x['Student']['che']+$x['Student']['math']),
array('Student.roll'=>$i));
$i++;
}
$this->set('r',$result);
}
function rem()
{
$r=$this->data['d'];
pr($r);
$this->Student->deleteAll(array('Student.roll'=>$r),false);
}
}
?>