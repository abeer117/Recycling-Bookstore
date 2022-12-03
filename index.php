<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;

        }
    </style>
</head>
<body>
<?php include 'config.php';  //include config
// set dynamic title
$db = new Database();
$db->select('options','site_title',null,null,null,null);
$result = $db->getResult();

if(!empty($result)){
    $title = $result[0]['site_title'];
}else{
    $title = "Shopping Project";
}
// include header
include 'header.php'; ?>

<img src="images/bookstore.jpg" alt="Library" class="center" sizes="100% 100%" >
<?php include 'footer.php'; ?>
</body>
</html>