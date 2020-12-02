<?php

$success=mkdir("test_dir",0755);
var_dump($success);
///////////////////////////////////
$success=mkdir("my_dir/sub_dir/another_dir",0755,true);
var_dump($success);
///////////////////////////////////////////////////////////////////////
$dir='/tmp';
$files1=scandir($dir);
$files2=scandir($dir,SCANDIR_SORT_NONE);
print_r($files1);
print_r($files2);
////////////////////////////////////////////////////////////////////////////
rmdir('examples');
$file='people.txt';
$text='Mamun\n';
file_put_contents($file,$text,FILE_APPEND);
////////////////////////////////////////////////////

$file=file_get_contents('./people.txt');
/////////////////////////////////////////////////
$content=file_get_contents("http://mamun.com");
var_dump($content);
//////////////////////////////
unlink("./people.txt");
?>