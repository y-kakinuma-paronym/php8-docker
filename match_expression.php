<?php
// Match expression
// https://wiki.php.net/rfc/match_expression_v2

switch (1) {
    case 0:
        $result = "Foo\n";
        break;
    case 1:
        $result = "Bar\n";
        break;
    case 2:
        $result = "Baz\n";
        break;
}
echo $result; // Bar

/**
 * switchとの違い
 * ・一致した結果を変数に代入することが可能
 * ・一致は一つのみをサポート。breakなどは必要なし
 * ・一致は厳密な比較
 */

echo match(1) {
    0 => "Foo\n",
    1 => "Bar\n",
    2 => "Baz\n"
};
// Bar

echo match (8.0) {
    '8.0' => "Oh no!",
    8.0 => "This is what I expected",
};
// This is what I expected
// ↑厳密な比較のため

?>