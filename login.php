<?php

include "db.php";

// todo 1: print de ingevoerde username en wachtwoord op aparte regels. Geef duidelijk aan welk van de twee de username en het wachtwoord is.
echo "User: ".$_POST['username']."<br>";
echo "Wachtwoord: ".$_POST['password']."<br>";

// todo 2: Maak twee variabele aan en sla de ingevoerde username en wachtwoord op in deze variabelen.
$Username=$_POST['username'];
$Password=$_POST['password'];

$myConn = new DB;
$query = "SELECT * FROM user WHERE username='$Username'";

$result = $myConn->executeSQL($query);

// todo 3: vermeldt wat de datatype van variabele $result is. Dit kun je met behulp van een ingebouwde php functie doen.
echo "datatype of the result variable is " .gettype($result);

if (!empty($result)) { 
    echo "<br> Login as $Username <br>";

    // todo 4: let uit wat de ingebouwde php functie print_r() doet en gebruik het om de result-variabele te printen.
    // print_r print de raw array
    print_r($result);
} else {
    echo "<br> Invalid login! <br>";
}

?>