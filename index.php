<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
  <main>
        <h1 class="taitoru">じゃんけんゲーム！出す手を選んでね！</h1>
        
        <div class="form-box">
            <form action="kekka.php" method="post">
                <label>
                  <img src="img/guu.jpg">
                    <input type="radio" title="playerHand" name="playerHand" value="グー" checked>グー
                </label>
                <label>
                <img src="img/choki.jpg">
                    <input type="radio" title="playerHand" name="playerHand" value="チョキ">チョキ
                </label>
                <label>
                <img src="img/paa.jpg">
                    <input type="radio" title="playerHand" name="playerHand" value="パー">パー
                </label>
                <button type="submit" class="kekka">結果発表！</button>
            </form>
       
    </main>


    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>
