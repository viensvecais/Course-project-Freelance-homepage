<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Include php files</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
h1{
    color: #83177B;
}
.containingDiv{
    border: 1px solid #83177B;
    margin-top: 100px;
    border-radius: 15px; 
}
</style>
</head>
<body>
<?php
include "23.header.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 containingDiv">
            <h1>Include files:</h1>
        </div>  
    </div>
</div>
<?php
include "23.footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</body>
</html>