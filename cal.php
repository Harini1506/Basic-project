<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "welcome to my calc";
if(isset($_POST['cal']))
{
    $txt1=$_POST['n1'];
    $txt2=$_POST['n2'];
    $ans=$_POST['cal'];
    if($ans=="+")
    $res=$txt1+$txt2;

    elseif($ans=="-")
    $res=$txt1-$txt2;

    elseif($ans=="*")
    $res=$txt1*$txt2;

    elseif($ans=="/")
    $res=$txt1/$txt2;
}
?>
    <form method="post" action="">
    <br>
    Number 1:   <input name="n1" value="<?php
    echo $txt1="";?>">
    <br>
    <br>
     Number 2:   <input name="n2" value="<?php
    echo $txt2="";?>">
    <br>
    <br>
     Result:   <input name="res" value="<?php
    echo $res;?>">
    <br>
    <br>
    <input type="submit" name="cal" value="+">
    <input type="submit" name="cal" value="-">
    <input type="submit" name="cal" value="*">
    <input type="submit" name="cal" value="/">
</form>

</body>
</html>