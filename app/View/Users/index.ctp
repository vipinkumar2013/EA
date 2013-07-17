<?php echo $this->Form->create('user',array('url'=>array('controller'=>'Users','action'=>'login'))); ?>
<table style="width:100%;border:0px">
<tr><td>
<?php echo $this->Form->input('Email Id', array('name'=>'email'));?></td></tr>
<tr><td><?php echo $this->Form->input('Password',array('type'=>'password', 'name'=>'pwd'))?></td></tr>
<tr><td><?php echo $this->Form->input('UserType',array('name'=>'type','options'=>array(
'1'=>'admin','2'=>'user')))?></td></tr>
<tr><td><?php echo $this->Form->submit('login');
echo $this->Form->end(); ?></td></tr>
<tr><td>New user : <a href="Users/reg">register</a></td></tr>
</table>