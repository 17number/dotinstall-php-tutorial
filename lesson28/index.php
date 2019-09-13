<?php
$err = false;
$username = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username"];
  if (strlen($username) > 8) {
    $err = true;
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="username" placeholder="user name" value="<?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?>">
    <input type="submit" value="check!">
    <?php if ($err) { echo "Name is too long"; } ?>
  </form>
</body>
</html>
