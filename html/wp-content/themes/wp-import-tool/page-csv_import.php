<?php
	$file = new SplFileObject($filepath); 
  $file->setFlags(SplFileObject::READ_CSV);
  $i = 0;
  // ファイル取得
  foreach ($file as $key => $line) {
    // ヘッダを読込
    if ( $i === 0 ) {
      $csv_heads = $line;
      $csv_heads_key = array_flip($csv_heads);  // ←ここがポイント！！
      $head_count = count($csv_heads);
      $i ++;
      continue;
    }
    
    print $line[$csv_heads_key['station_name']];  // 函館
    print $line[$csv_heads_key['add']];  // 北海道函館市若松町１２-１３

    $i++;
  }
?>
<form id="form" class="form_wrap" action="/csv_import_run/" method="POST" enctype="multipart/form-data">
	<input type="file" name="csv_file">
	<input type="hidden" name="key" value="【ランダムなキー】">
	<input type="submit" value="csvインポート実行!!">
</form>