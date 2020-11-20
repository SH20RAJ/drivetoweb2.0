<?php
if(isset($_GET['id'])) {
$id = $_GET['id'];
echo file_get_contents('https://drive.google.com/u/4/uc?id='.$id.'&export=download');
}   else {
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive to Web Hosting</title>
</head>
<body>
    <form action="" method="get">
     <input type="text" placeholder="Enter File ID " name="id">
     <button type="submit">View</button>
    </form>
    <style>
    input , button {
        background : aqua ;
        font-size : 25px ;
        border : none ;
        outline : none ;
        padding : 4px ;
    }
    </style>
</body>
</html>';

}

?>

