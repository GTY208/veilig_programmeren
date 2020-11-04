<?php

include "db.php";

// todo 1: print de ingevoerde username en wachtwoord op aparte regels. Geef duidelijk aan welk van de twee de username en het wachtwoord is.
$username = $_POST["username"];
$password = $_POST["password"];
// todo 2: maak twee variabele aan en sla de ingevoerde username en wachtwoord op in deze variabelen.
//print "username: ". $username . "<br>" ."password: ". $password;

$myConn = new DB;

// todo 3: include de variabele met de username in de onderstaande query, zodat deze alle data kan ophalen voor de ingevoerde username.
$query = "SELECT * FROM user WHERE username = 'username'";

$result = $myConn->executeSQL($query);

// todo 4: vermeldt wat de datatype van variabele $result is. Dit kun je met behulp van een ingebouwde php functie doen.
gettype($result);

if (!empty($result)) {
    echo "<br> Login as $username <br>";
    // het laat info zien van de variable
} else {
    echo "<br> Invalid login! <br>";
}

?>
