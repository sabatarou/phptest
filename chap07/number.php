<?php
$num=15;
$i=2;
while($i<$num)
{
  if($num%$i==0)
  {
    print($num."は素数でありません<br>");
    break;
  }
  $i++;
}
print("素数判定が終了しました");
 ?>
