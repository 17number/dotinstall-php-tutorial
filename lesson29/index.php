<?php
// ブラウザが閉じるまで
setcookie("username", "fuga");

// 1時間後まで
// setcookie("username", "fuga", time() + 60 * 60);

// cookie の削除
setcookie("username", "fuga", time() - 60);

// cookie の参照
echo $_COOKIE["username"];
