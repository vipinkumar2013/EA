<?php
echo $this->Form->create('Student',array('url'=>array('controller'=>'Users5','action'=>'save')));
echo $this->Form->input('Roll No :',array('name'=>'roll'));
echo $this->Form->input('Name :',array('name'=>'name'));
echo $this->Form->input('Phy Mark :',array('name'=>'phy'));
echo $this->Form->input('Che Mark :',array('name'=>'che'));
echo $this->Form->input('Math mark :',array('name'=>'math'));
echo $this->Form->submit('Submit');
echo $this->Form->end();
?>
