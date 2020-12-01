<?php
// Nullsafe operator
// https://wiki.php.net/rfc/nullsafe_operator

class Session
{
    public $user = null;
}

$session = new Session();

/**
 * nullsafe演算子「?」を用いることでチェーン内の1つの要素で評価が失敗すると、
 * チェーン全体の実行が中断され、nullを返す
 */
$country = $session->user?->getAddress()?->country;
var_dump($country) // null

?>