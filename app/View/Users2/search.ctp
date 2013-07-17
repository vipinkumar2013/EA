<?php 
pr($r);
$i=0;
foreach($r as $x)
{
echo "Emp. No. :".$x['emp']['empno']."<br />";
echo "Emp. Name :".$x['emp']['empname']."<br />";
echo "Dept. Name :".$x['dept']['deptname']."<br />";
$i++;
}
?>
