<form>
    Name: <input type="text" name="name"><br>
    Phone: <input type="text" name="phone"><br>
    Age: <input type="text" name="age"><br>
    Address: <input type="text" name="address"><br>

    <input type="submit" value="Generate">

</form>

<?php
if(isset($_GET['name'])){
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $age = $_GET['age'];
    $address = $_GET['address'];

    echo "<table border='2'>";
    echo "<tr><td style='background-color: orange'>Name</td><td style='text-align: right'>$name</td></tr>";
    echo "<tr><td style='background-color: orange'>Phone number</td style='text-align: right'><td>$phone</td></tr>";
    echo "<tr><td style='background-color: orange'>Age</td><td style='text-align: right'>$age</td></tr>";
    echo "<tr><td style='background-color: orange'>Address</td><td style='text-align: right'>$address</td></tr>";

    echo "</table>";

}

?>