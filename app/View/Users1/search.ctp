<?php 
pr($r);
foreach($r as $x)
{
echo "Id :".$x['Product']['id']."<br />";
echo "Product Name :".$x['Product']['name']."<br />";
echo "Category :".$x['Category']['name']."<br />";
}
?>
