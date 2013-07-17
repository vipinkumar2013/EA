<?php 
foreach($r as $x)
{
echo "Product Id :".$x['Product']['id']."<br>";
echo "Product Name :".$x['Product']['name']."<br>";
echo "Category Id :".$x['Category'][0]['id']."<br>";
echo "Category Name :".$x['Category'][0]['name']."<br>";
echo "Product Category Name :".$x['Category'][0]['PrCategory']['Category']."<br>";
}
?>
