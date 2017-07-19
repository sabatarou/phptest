<!Doctype HTML>
<html>
 <head>
  <meta charset=utf-8>
  <title>自動販売機</title>
</head>
  <body>
    <?php
      session_start();
      if (!isset($_SESSION["money"]))
      {
          $_SESSION["money"] = 1000;
      }
      if (isset($_POST["gold"])&&$_SESSION["money"]>=100)
      {
          $_SESSION["money"]-=100;
          echo"エナジーゴールドを買いました";
      }
      else if (isset($_POST["noguti"]))
      {
          $_SESSION["money"] += 1000;
          echo"野口英世を入れました";
      }
      else if (isset($_POST["reset"]))
      {
        print($_SESSION["money"]."円お釣りを出しました");
          $_SESSION["money"] =0;

      }
      print("<br>");
      print($_SESSION["money"]);
  ?>

  <form method="POST" action="">
      <input type="submit" name="gold" value="エナジーゴールド">
      <br>
      <input type="submit" name="noguti" value="野口 英世ボタン">
      <br>
      <input type="submit" name="reset" value="おつり返却">
  </form>
  </body>
</html>
