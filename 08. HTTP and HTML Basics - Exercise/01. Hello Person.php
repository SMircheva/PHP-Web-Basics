<html>

<form>
    Name: <input type="text" name="person">
    <input type="submit" value="Submit" />
</form>

<?php

if(isset($_GET['person'])){
    echo "Hello, " . htmlspecialchars($_GET['person']) . "!";
}
?>


</html>