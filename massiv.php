<?php
$tools = array(
	"a" => "Zero",
	"b" => "Weapon",
	"c" => "Alpha",
	"d" => "Processor"
);
ksort($tools); //���������� �� ���.
//void ksort(array &$array, [,int $sort_flag])
print_r($tools);
?>