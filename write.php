<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\write_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
<title>データ登録</title>
</head>
<body class="wrap">
<?php
//文字作成

$name =$_POST["name"];
$what = $_POST["what"];
$memo =$_POST["memo"];
$c=",";
$str=$name.$c.$what.$c.$memo; 
// aaaa,bbbb,cccc

// 変数の中身が空の場合はエラーメッセージを表示
$fields = [$name,$what,$memo];
$errors = [];
foreach ($fields as $field) {
  
    if (empty($field)) {
        $errors[] = '<div class="zen-maru">必須項目に入力してください<br></div>';
    }
}
// 配列の中身を確認するのは以下
// var_dump($errors);
// exit();

// エラーメッセージがあれば表示
if ($errors) {
    foreach ($errors as $error) {
        echo $error;
    }
    echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">前に戻る</a>';
} else {
    // 成功時の処理を記述
    // fileを開き(csv)
    $file = fopen("say.csv", "a");

if ($flile === false) {
    throw new Exception('ファイルを開けませんでした');
}else{
   
  


    // 文字列として記入
    fwrite($file, $str . "\n");
 
    

    
    
    // ファイルを保存して
    fclose($file);
}
    // read.phpへ進む
    header("Location: read.php");
    exit;
}
?>





</body>
</html>