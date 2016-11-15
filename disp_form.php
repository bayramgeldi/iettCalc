<?php

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Toplam Masraf</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<p>Toplam Masraf: 
<?php
$first = $_POST['aktarma'];

//post'tan veri çekemiyor





if($_POST['Akbil'] == 'anon') {
echo $first + 2;
}
else if($_POST['group1'] == 'subtract') {
echo $first - $second;
}
else if($_POST['group1'] == 'times') {
echo $first * $second;
} 
else if($_POST['group1'] == 'divide') {
echo $first / $second;
}
?>
</p> 
</body>
</html>