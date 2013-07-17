<?php 
echo $this->Form->create('Student',array('url'=>array('controller'=>'Users5','action'=>'save')));
echo $this->Form->input('Roll No :',array('name'=>'roll'));
echo $this->Form->input('Name :',array('name'=>'name'));
echo $this->Form->input('Phy Mark :',array('name'=>'phy'));
echo $this->Form->input('Che Mark :',array('name'=>'che'));
echo $this->Form->input('Math mark :',array('name'=>'math'));
echo $this->Form->submit('Submit');
echo $this->Form->end();
echo $this->Form->create('Student',array('url'=>array('controller'=>'Users5','action'=>'update')));
echo $this->Form->button('CalTotal',array('type'=>'submit'));
echo $this->Form->end();
echo $this->Form->create('Student',array('url'=>array('controller'=>'Users5','action'=>'rem')));
echo $this->Form->input('Enter Roll',array('name'=>'d'));
echo $this->Form->button('Delete',array('type'=>'submit'));
echo $this->Form->end();
?>
