this is a sample
<?php
echo "Simple Interest";
?>

<html>
<body>
<form action="" method="post">
<input type="text" name="txtn"/>
<input type="submit" name="txtsub"/>

</form>
<?php
if(isset($_POST['txtsub']))
{
$a=$_POST['txtn'];
echo "the text is $a";
}

