<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="">
<!--&#91;if lt IE 9&#93;>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<!&#91;endif&#93;-->
<link rel="shortcut icon" href="">
</head>
<body>
<h1>Hello open paas!</h1>
<h2>Server IP
<?php
echo $_SERVER["SERVER_ADDR"]
?></h2>
<h2>Server PORT
<?php
echo $_ENV["PORT"]
?></h2>
<h2>PHP PORT
<?php
echo $_SERVER["SERVER_PORT"]
?></h2>

</body>
</html>
