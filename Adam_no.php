<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style>
    body {
        background-image: linear-gradient(to right, red, yellow, skyblue, green, orange);

    }
    h1 {
        color: ;
        font-family: Felix Titling;
        text-align: center;
    }
    p {
        text-align: center;
        font-family: DejaVu Sans;
    }
    h2 {
        background-image: linear-gradient(to right, red, yellow, #a60ca6, green, orange);
        text-align: center;
        color: white;
        font-family: Pristina;
    }
    h3 {
        text-align: center;
        font-family: Calibri Light;
    }
    form {
        text-align: center;
        font-family: Felix Titling;
    }
    input[type="number"]::placeholder {
        text-align: center;
        color: black;
    }
    input[type="submit"] {
        color: white;
        font-family: Noto Serif;
    }
    div {
        margin-left: 44%;
        margin-right: 100%;
        width: 170px;
        height: 22px;
        border: 5px solid #42438f;
    }
    span {
        background-image: linear-gradient(to right, yellow, skyblue, green);
        position: center;
    }

</style>
<body>

<h1>What is an Adam Number</h1>
<h2>by Aditya Kumar</h2>
<h3>Adam Numbers are the Numbers which are equal to its - reverse of square root of its square's reverse</h3>
<p>For Reference :</p>
<p>Square of 13 : 169</p>
<p>Reverse of 169 : 961</p>
<p>Square root of 961 : 31</p>
<p>Reverse of 31 : 13</p>
<h3>So, 13 is an Adam Number</h3><br><br>
<form method="post">
    <tr><h1>Enter a number</h1></tr>
    <div><tr><td><input type="number" name="num1" required="" placeholder="Enter Number Here"></td></tr></div><br>
    <tr><td><input type="submit" name="submit" value="CHECK ADAM" style="background-color: #31619f"></td></tr><br><br>
</form>
<?php
$rev = 0;
$res = 0;
if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $square = $num1 * $num1;
    echo '<h3><span style="text-align: center; position: center; font-family: Monotype Corsiva">'."square of $num1 is : $square".'</span></h3>';
    $rev = strrev($square);
    echo '<h3><span style="text-align: center; font-family: Monotype Corsiva">'."reverse of $square is: $rev".'</span></h3>';
    $root = sqrt($rev);
    echo '<h3><span style="text-align: center; font-family: Monotype Corsiva">'."square root of $rev is: $root".'</span></h3>';
    $rev2 = strrev($root);
    echo '<h3><span style="position: center; font-family: Monotype Corsiva">'."reverse of $root is: $rev2".'</span></h3>';
    if($rev2 == $num1) {
        echo '<h1><span style="position: center; font-family: Monotype Corsiva">'."number entered : $num1 is an Adam Number".'</span></h1>';
    }
    else  {
        echo '<h1><span style="position:center; font-family: Monotype Corsiva">'."Number entered : $num1 is not an Adam Number".'</span></h1>';
    }
}
?>
</body>
</html>