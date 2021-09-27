<?php 

//メッセージを保存するファイルのパス設定
define('FILENAME', './message.txt');

//タイムゾーン設定
date_default_timezone_set('Asia/Tokyo');

if(!empty($_POST['btn_submit'])) {

    if($file_handle = fopen( FILENAME,"a")) {

        //書き込み日時を取得
        $current_date = date("Y-m-d H:i:s");

        //書き込むデータを作成
        $data = "'".$_POST['view_name']."','".$_POST['message']."','".$current_date."'\n";

        //書き込み
        fwrite($file_handle,$data);

        //ファイルを閉じる
        fclose($file_handle);
    }
    //var_dump($_POST);
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wan.chibi</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="view_name">名前</label>
            <input id="view_name" type="text" name="view_name" value="">
        </div>
        <div>
            <label for="message">投稿</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <input type="submit" name="btn_submit" value="書き込む">
     </form>

    
</body>
</html>