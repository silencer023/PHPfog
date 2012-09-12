<?php

/* データ受け取り */
include "includes/catch.php";
/* ユーザエージェント判定 */
include "includes/uaswitch.php";
/* サイト共通設定要素 */
include "includes/settings.php";
/* MySQLデータベースへ接続 */
include "includes/mysql.php";
/* サイト共通記述設定要素 */
include "includes/commons.php";
/* HEADER ( 非表示部) 要素 */
include "includes/header.php";
/* HEADER ( 表示部) 要素 */
include "themes/${theme}/header.php";
/* BODY ( 表示部) 要素 */
include "themes/${theme}/index.php";
/* FOOTER ( 表示部) 要素 */
include "themes/${theme}/footer.php";
/* FOOTER ( 非表示部 ) 要素 */
include "includes/footer.php";

?>
