<?php
$foo=rand(1,12);
switch($foo)
{
  case 3:
  case 4:
  case 5:
    print("春です<br>");
    break;
  case 6:
    print("梅雨です<br>");
    break;
  case 7:
  case 8:
  case 9:
    print("夏です<br>");
    break;
  case 10:
  case 11:
    print("秋です<br>");
    break;
  case 12:
  case 1:
    print("冬です<br>");
  default:
  print("表示されたらおかしいです<br>");
  break;
}
print("fooの値は($foo)でした");
?>
