<?php
class Emp extends AppModel{

	public $belongsTo=array(
	'dept'=>array(
	'classname'=>'dept',
	'foreignKey'=>false,
	'conditions'=>array('emp.deptno = dept.deptno')
	)
	); 
}
?>