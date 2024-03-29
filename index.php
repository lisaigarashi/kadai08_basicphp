<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">

    <title>データ入力</title>
</head>

<body class="wrap">
    <h1 class="page-title">あなたの弱音を吐こう！！</h1>
    <form action="write.php" method="post">
        <div><label for="nickname">ニックネーム:</label>
            <input type="text" name="name"><br>
        </div>
        <div><label for="whats matter">何について？:</label>
            <input type="text" name="what"><br>
        </div>
        <div><label for="like">お好きに書いちゃってください！:</label>
            <textarea name="memo"></textarea>
        </div>
        <button type="submit" value="送信">送信</button>
    </form>
</body>

</html>