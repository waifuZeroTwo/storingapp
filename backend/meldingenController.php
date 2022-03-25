<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
if(empty($attractie)){
    $errors[] = "vul de attractie-naam in.";
}
$type = $_POST['type'];

$capaciteit = $_POST['capaciteit'];
if (!is_numeric($capaciteit)){
    $errors[] = "Vul voor capaciteit een geldig getal in.";
}

$prioriteit = $_POST['prioriteit'];
if(isset($_POST['prioriteit'])) == 1
{
    $prioriteit = true;
}
else{
    $prioriteit = false;
}
$melder = $_POST['melder'];

$overige_info = $_POST['overige_info'];

echo $attractie . " / " . $type . " / " . $capaciteit . " / " . $prioriteit . " / " . $melder . " / " . $overige_info;

//1. Verbinding
require_once 'conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, type, capaciteit, prioriteit, melder, overige_info) VALUES(:attractie, :type, :capaciteit, :prioriteit, :melder, :overige)";
//3. Prepare
$statement = $conn->prepare($query);
//4. Execute
$statement->execute([
    ":attractie" => $attractie,
    ":type" => $type,
    ":capaciteit" => $capaciteit,
    ":prioriteit" => $prioriteit,
    ":melder" => $melder,
    ":overige" => $overige_info
]);
if (isset($errors)){
    var_dump($errors);
    die();
}
header("location: ../meldingen/index.php?msg=Melding opgeslagen");