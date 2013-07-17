<script type="text/javascript">
function validate(){
validator = $("#RegisterRegisterForm").validate({
rules: {
			"data[Register][name]": {required : true,email:true},
			"data[Register][password]": {required:true,minlength:6,maxlength:15},
			"data[Register][cpassword]": {required:true,minlength:6,maxlength:15},
		},	
		messages: {
			"data[Register][name]": {
				required:"<br><font color='#FF0000' size='3'>Please enter name.</font>",
			},
			"data[Register][password]": {
				required:"<br><font color='#FF0000' size='3'>Please enter password.</font>",
				minlength:"<br><font color='#FF0000' size='3'>Password should be between 6 - 15 characters!</font>",
				maxlength:"<br><font color='#FF0000' size='3'>Password should be within 15 characters.</font>"		 
			},
			"data[Register][cpassword]": {
				required:"<br><font color='#FF0000' size='3'>Please enter confirm password.</font>",
				minlength:"<br><font color='#FF0000' size='3'>Password should be between 6 - 15 characters!</font>",
				maxlength:"<br><font color='#FF0000' size='3'>Password should be within 15 characters.</font>"		 
			},
		}
	});
	return validator.form();
}
</script>
<?php echo $this->extend('/Users/login');?>
<?php echo $this->Form->create('Register', array('url'=>array('controller'=>'users','action'=>'register')));?>
<table cellspacing="10" align="center" style="padding-top:58px;" >
<tr>
<td>Name:</td>
<td><?php  echo $this->Form->input('name',array('type'=>'text','label'=>false,'maxlength'=>'45','size'=>'29'));?>
</td>
</tr>
<tr>
<td>Password:</td>
<td><?php  echo $this->Form->input('password',array('type'=>'password','label'=>false,'maxlength'=>'45','size'=>'29'));?></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><?php  echo $this->Form->input('cpassword',array('type'=>'password','label'=>false,'maxlength'=>'45','size'=>'29'));?></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name='submit' id='submit' value='Submit' onclick="validate()"></td>
</tr>
</table>
<?php echo $this->Form->end(); ?>

