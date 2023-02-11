<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>for download file press on down</title>
</head>

<body>
<a href="http://www.exaaaaaaaaaa.com">go</a>
</body>

</html>
header("Content-type: /media/atboo/HDDMAIN/apache2.tar.gz ");
  header("Content-Disposition: attachment; filename='apache2.tar.gz'");
  readfile('apache2.tar.gz');