<!DOCTYPE html>
<head>
<title>Ｃ++プログラム呼び出し</title>
</head>
<body>
  <?php
  $cmd="C:\xampp\htdocs\phplesson\test\cpptest\Project1.exe";
  $a=exec($cmd);
   echo $a;
  ?>
</body>
</html>
