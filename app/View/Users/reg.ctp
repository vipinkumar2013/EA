<?php 
echo $this->Form->create('users',array('url'=>array('controller'=>'Users','action'=>'display')));
echo $this->Form->input("Name",array('name'=>'name'));
echo $this->Form->input("Email Id",array('name'=>'email'));
echo $this->Form->input("Password",array('name'=>'pwd','type'=>'password'));
echo $this->Form->input("Retype Password",array('name'=>'rpwd','type'=>'password'));
echo $this->Form->submit("submit");
?>
