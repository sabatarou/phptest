<?php
$foo=rand(-10,10);
if($foo==0)
{
  print("fooの値は0です<br>");
}else
{
  if($foo>0)
  {
    print("fooは正の数です");
  }
  else
  {
    print("fooは負の数です");
  }
}
