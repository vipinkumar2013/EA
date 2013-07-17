<?php 
$this->extend('/Users6/common');
echo $this->Form->create('Student',array('url'=>array('controller'=>'Users5','action'=>'update')));
echo $this->Form->button('CalTotal',array('type'=>'submit'));
echo $this->Form->end();
$this->Form->create('Student',array('url'=>array('controller'=>'Users5','action'=>'rem')));
echo $this->Form->input('Enter Roll',array('name'=>'d'));
echo $this->Form->button('Delete',array('type'=>'submit'));
echo $this->Form->end();

?>
