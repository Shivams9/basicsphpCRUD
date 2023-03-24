<?php
//Ascending order sorting - sort()
$cars=array("volvo","Bmw","Toyota");
sort($cars);

//Descending order  sorting - rsort()
$cars=array("Volvo", "Bmw", "Toyota");
rsort($cars);

//Ascending order in terms of value - asort()
$age=array("Mac"=>"22","Rob"=>"27","Duke"=>"37");
asort($age);

//Acscending order according to key - ksort()
$age=array("Mac"=>"22","Rob"=>"27","Duke"=>"37");
ksort($age);


//Descending value - arsort()
$age= array("Mac"=>"22","Rob"=>"27","Duke"=>"37");
arsort($age);
 
//Descending Key - krsort()
$age =array("Mac"=>"22","Rob"=>"27","Duke"=>"37");
krsort($age);

?>