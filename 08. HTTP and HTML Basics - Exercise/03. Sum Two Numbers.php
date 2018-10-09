<?php
if(isset($_GET['num1'])) {
    $sum = intval($_GET['num1']) + intval($_GET['num2']);
    echo $_GET['num1']." + ".$_GET['num2']." = ".$sum;
}

?>

<form>
    <div>First Number:</div>
    <input type="number" name="num1" />
    <div>Second Number:</div>
    <input type="number" name="num2" />
    <div><input type="submit" /></div>
</form>

