<?php
session_start();

// セッション作成
$_SESSION["username"] = "hoge";

// セッション削除
unset($_SESSION["username"]);

echo $_SESSION["username"];
