<!-- /Applications/MAMP/htdocs/contactform/insert.php -->

<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "root");

$sql = "INSERT INTO contactform(name, mail, age, comments) VALUES(?,?,?,?)";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['age']);
$stmt->bindValue(4, $_POST['comments']);

$stmt->execute();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>フォームを作成する</title>
  <link rel="stylesheet" type="text/css" href="styles2.css">
</head>

<body>

  <h1>お問合わせフォーム</h1>

  <div class="confirm">
    <p>
      お問合わせありがとうございました。
      <br>
      3営業日以内に担当者よりご連絡差し上げます。
    </p>
  </div>

</body>

</html>