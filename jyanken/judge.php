<?php
$result=false;
if(isset($_POST['choice']))
{
  $janken=array
    (
      'グー',
      'チョキ',
      'パー'
    );
    // エスケープ
    $player=htmlspecialchars($_POST['choice'], ENT_QUOTES, 'UTF-8');
    //相手の手をランダムで決定
    $com=$janken[array_rand($janken)];

    //勝敗判定
    if($player==='グー'&&$com==='チョキ')
    {
      $result='勝ち';
    }
    elseif($player==='チョキ'&&$com==='パー')
    {
      $result='勝ち';
    }
    elseif($player==='パー'&&$com==='チョキ')
    {
      $result='勝ち';
    }
    elseif($player==='グー'&&$com==='グー')
    {
      $result='あいこ';
    }
    elseif($player==='パー'&&$com==='パー')
    {
      $result='あいこ';
    }
    elseif($player==='チョキ'&&$com==='チョキ')
    {
      $result='あいこ';
    }
    elseif($player==='チョキ'&&$com==='グー')
    {
      $result='負け';
    }
    elseif($player==='パー'&&$com==='チョキ')
    {
      $result='負け';
    }
    elseif($player==='チョキ'&&$com='パー')
    {
      $result='負け';
    }
    print("結果<br>");
    print("あなた:".$player);
    print("あいて:".$com);
    print("<br>");
    print($result);
}
 ?>
