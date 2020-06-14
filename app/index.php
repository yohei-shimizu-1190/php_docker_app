<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>PHPのサンプル</title>
  </head>
  <body>
    <?php
      if(isset($_POST["comment"])){
        $comment = htmlspecialchars($_POST["comment"]);
        print("あなたのコメントは「${comment}」です。");
      } else {
    ?>
      <p>コメントしてください</p>
      <form method="POST" action="index.php">
        <input name="comment" />
        <input type="submit" value="送信する" />
      </form>
    <?php
      }
    ?>
  </body>
</html>