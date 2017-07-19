<?php
$num=2;
while($num<=100)
{
  $i=2;
  while($i<$num)
  {
    if($num%$i==0)
    {
      print($num."は素数ではありません<br>");
      break 2;
    }
    $i++;
  }
  if($i==$num)
  {
    print($num."は素数です<br>");
  }
  $num++;
}
print("素数判定が終了しました");

 ?>
