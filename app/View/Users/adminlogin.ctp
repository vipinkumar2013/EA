
<table align=right>
<tr><td></td>
<td><a href="/cake1/users/add/new">AddNew</a></td><td><a href="/cake1/users/add/edit">Edit</a></td></tr>
</table>
<table width=100%>
<tr>
<td>UserName</td><td>Email</td><td>Action</td>
</tr>
<?php
$i=1;
foreach($userdata as $u)
{
 $id=$u['User']['id'];
 $i++;
?>
<tr>
<td id="nm" class="n"><?php echo $u['User']['name']."<br>"; ?> </td>
<td><?php echo $u['User']['email']."<br>"; ?> </td>
<td><a href="/cake1/Users/adminlogin/act/<?php echo $id; ?>">Activate</a>/<a href="/cake1/Users/adminlogin/deact/<?php echo $id; ?>">Deactivate</a></td>
<td><input type="button" class="c1" value="Edit" id="<?php echo $i; ?>" name="<?php echo $i; ?>"></input></td>

</tr>
<?php
}
?>
</table>
