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
          $_SESSION["money"] = 0;
      }
      if (isset($_POST["item"])&&$_SESSION["money"]>=$_POST['item'])
      {
          $_SESSION["money"]-=$_POST['item'];
          echo"商品をを買いました";
          if($_SESSION["money"]<100&&$_SESSION["money"]!=0)
          {
            print($_SESSION["money"]."円お釣りを出しました");
            $_SESSION["money"] =0;
          }
      }
      elseif(isset($_POST["item"])&&$_SESSION["money"]<$_POST['item'])
      {
          print("お金が足りません");
      }
      if (isset($_POST["gold"]))
      {
          $_SESSION["money"]+=$_POST['gold'];
          print("お金を入れました");
      }
      if (isset($_POST["reset"]))
      {
        print($_SESSION["money"]."円お釣りを出しました");
        $_SESSION["money"] =0;
      }
      print("<br>".$_SESSION["money"]."円");
  ?>

  <form method="POST" action="">
    <br>
      <p>商品<p/>
      <button type="submit" name="item" value="100">リアルシルバー</button>
      <button type="submit" name="item" value="110">いのはす</button>
      <button type="submit" name="item" value="150">あたやか</button>
      <button type="submit" name="item" value="120">ペペシ</button>
    <br>
      <p>現金<p/>
      <button type="submit" name="gold" value="10">10円</button>
      <button type="submit" name="gold" value="50">50円</button>
      <button type="submit" name="gold" value="100">100円</button>
      <button type="submit" name="gold" value="500">500円</button>
      <button type="submit" name="gold" value="1000">1000円</button>
    <br>
    <p>お釣り<p/>
      <button type="submit" name="reset">お釣り</button>
  </form>
  </body>
</html>
