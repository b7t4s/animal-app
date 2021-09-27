<?php 

if(!empty($_POST['btn_submit'])) {
    var_dump($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">
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