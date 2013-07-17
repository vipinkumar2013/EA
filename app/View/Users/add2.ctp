<?php 

echo $this->Form->create('User',array('url'=>array('controller'=>'Users','action'=>'display2')));
echo $this->Form->input("Name",array('name'=>'name','id'=>'name'));
//echo $this->Form->input("Email Id",array('name'=>'email','id'=>'email'));
//echo $this->Form->input("Password",array('name'=>'pwd','id'=>'pwd'));
echo $this->Form->submit("UPDATE");
echo $this->Form->end();

?>




