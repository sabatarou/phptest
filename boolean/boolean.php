<?php
//==は,boolean型を表すを返す演算子
$version="1.23";
($version=="1.23")?print("バージョンは1.23です<br>"):print("バージョンは1.23ではありません<br>");
$show_line=true;
if($show_line)
{
  echo "<hr>",var_dump($show_line),"線が表示されます","<br>";
}
$show_line=false;
if(!$show_line)
{
  echo var_dump($show_line),"線は表示されません";
}

 ?>
