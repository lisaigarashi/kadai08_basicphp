<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\read_style.css">
    <title>データ表示</title>
</head>
<body>
<?php
// fopen関数より指定したファイルのよみこみ
$f_handle=fopen('say.csv','r');
// テーブルの見出しの項目のhtmlをechoで表示する
echo '<table border="1">
<tr>
<th calss="popular"><span class="inner">ニックネーム</th>
<th>何について</th>
<th>思う存分ぶっちゃけってください</th>
</tr>';
// fgetcsvでファイルのデータを1行読み込み配列に入れ
// テーブルの1行に表示させる処理を
// while文によりcsvのデータがある分繰り返す
while($yomikomi_csv=fgetcsv($f_handle)){
    echo '<tr>';
    echo '<td>'.$yomikomi_csv[0].'</td>';
    echo '<td>'.$yomikomi_csv[1].'</td>';
    echo '<td>'.$yomikomi_csv[2].'</td>';
    echo '</tr>';
}
echo'<table>';
fclose($f_handle);
echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">前に戻る</a>';

?>
</body>
</html>