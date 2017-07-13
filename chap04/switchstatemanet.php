<?php
$foo=rand(1,10);
switch($foo)
{
case 1:
print("優です<br>");
break;
case 2:
print("良です<br>");
break;
case 3;
print("可です<br>");
break;
default:
print("不可です<br>");
break;
}
if($foo==1)
{
  print("優です<br>");
}
else if($foo==2)
{
  print("良です<br>");
}
else if($foo==3)
{
  print("可です<br>");
}
else
{
  print("不可です<br>");
}
print("fooの値は($foo)でした");
 ?>
