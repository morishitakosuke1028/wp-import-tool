<?php
require_once ('【WPのルートディレクトリ】/wp-load.php');
// ファイル自体をUTF-8に変換
system('nkf --overwrite -w ' . $filepath);
exec('php ' . __DIR__ . '/cgi/csv_import.php  ' . $filepath . ' 【ランダムなキー】 >> ' . __DIR__ . '/cgi/csv_import.log &');


if (is_uploaded_file($_FILES["csv_file"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["csv_file"]["tmp_name"], dirname(__FILE__) . "/csv/" . $_FILES["csv_file"]["name"])) {
    $upload_message = $_FILES["csv_file"]["name"] . "をアップロードしました。";
  } else {
    $upload_message = "ファイルをアップロードできません。";
  }
}
?>