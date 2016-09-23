<?php
$tools = array(
	"a" => "Zero",
	"b" => "Weapon",
	"c" => "Alpha",
	"d" => "Processor"
);
asort($tools);
$tools = array_reverse($tools);
print_r($tools);
?>