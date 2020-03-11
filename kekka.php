<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
<body>
<div id="wrapper">
    <main>
        <h1 class="taitoru2">結果は・・・</h1>
        <div class="kekkabox">
        <?php
$hands = ['グー', 'チョキ', 'パー'];

if (isset($_POST['playerHand'])) {
    $playerHand = $_POST['playerHand'];

    $key = array_rand($hands);
    $pcHand = $hands[$key];

    if ($playerHand == $pcHand) {
        $result ='あいこ！
        <img src="img/aiko.png">';
    } elseif ($playerHand == 'グー' && $pcHand == 'チョキ') {
        $result = '勝ち！
        <img src="img/kati.png">';
    } elseif ($playerHand == 'チョキ' && $pcHand == 'パー') {
        $result = '勝ち！
        <img src="img/kati.png">';
    } elseif ($playerHand == 'パー' && $pcHand == 'グー') {
        $result = '勝ち！
        <img src="img/kati.png">';
    } else {
        $result = '負け！
        <img src="img/make.png">';
    }
}?>
            <p class="result-word"><?= $result ?></p>

            あなた：<?= $playerHand ?><br>
            コンピューター：<?= $pcHand ?><br>

            <p class="modoru"><a href="index.php">戻る</a></p>
        </div>
    </main>
</div>
</body>
</html>