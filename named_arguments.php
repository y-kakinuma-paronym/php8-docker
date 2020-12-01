<?php
// Named arguments
// https://wiki.php.net/rfc/named_params

$str = "<a href='test'>Test</a>";

// PHP7
// $result = htmlspecialchars($string, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);

// PHP8
// double_encodeの引数のみをデフォルト引数から変更したい場合、引数の名前を指定する
$result = htmlspecialchars($str, double_encode: false);
echo $result . "\n"; // &lt;a href='test'&gt;Test&lt;/a&gt;

?>