<?php
$rodytiZinutes = true;
// konstantos
define('DB_NAME', 'projektas');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

$prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($prisijungimas && $rodytiZinutes) {
    // echo "Prisjungem prie duomenu bazes: " . DB_NAME . " sekmingai";
} elseif ($rodytiZinutes) {
    echo "Nepavyko prisijungti prie duomenu bazes: " . mysqli_connect_error();
}
function getPrisijungimas () {
    global $prisijungimas;
    return $prisijungimas;
}

// paprastas
function getPreke($nr) {
    $manoSQL = "SELECT * FROM visosprekes WHERE id=$nr";
    // gryzta objektas, ne masyvas
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    // is $rezultatai objekto paiimam duomenis i Array(Masyva)
    $rezultataiMasyvas = mysqli_fetch_assoc($rezultatai);
// print_r($rezultataiMasyvas);
    return $rezultataiMasyvas;
}
function getImg($nr) {
    $manoSQL1 = "SELECT img.name FROM visosprekes INNER JOIN img ON img.prekesid = visosprekes.id WHERE img.prekesid=$nr";
    $rezultatai1 = mysqli_query( getPrisijungimas(), $manoSQL1);
    $rezultataiMasyvas1 = mysqli_fetch_assoc($rezultatai1);
    // print_r($rezultataiMasyvas1);
    return $rezultataiMasyvas1;
}

function getPrekes() {
    $manoSQL= "SELECT * FROM visosprekes";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}
function getImgs() {
    $manoSQL= "SELECT * FROM img";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}
