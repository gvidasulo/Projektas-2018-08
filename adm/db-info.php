<?php
define('DB_NAME', 'projektas');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

$prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

function getPrisijungimas () {
    global $prisijungimas;
    return $prisijungimas;
}


function getPrekes() {
    $manoSQL= "SELECT * FROM visosprekes";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}

function prekeUpdate($id, $link, $name, $price, $kiekis, $pozicija) {
    $id = mysqli_real_escape_string( getPrisijungimas(), $id);
    $link = mysqli_real_escape_string( getPrisijungimas(), $link);
    $name = mysqli_real_escape_string( getPrisijungimas(), $name);
    $price = mysqli_real_escape_string( getPrisijungimas(), $price);
    $kiekis = mysqli_real_escape_string( getPrisijungimas(), $kiekis);
    $pozicija = mysqli_real_escape_string( getPrisijungimas(), $pozicija);
    $manoSQL = "UPDATE visosprekes SET link='$link', name='$name', price='$price', kiekis='$kiekis', pozicija='$pozicija' WHERE id='$id'";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko <br>" . mysqli_error();
    }
}

function deletePreke($id) {
    $id = mysqli_real_escape_string( getPrisijungimas(), $id);
    $manoSQL = "DELETE FROM visosprekes WHERE id=$id";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko pasalinti<br>";
    }
}

function createPreke($link, $name, $price, $kiekis, $pozicija) {
    // Saugumas: uzkoduoja spec. simbolius "" '' \n \t < >
    $link = mysqli_real_escape_string( getPrisijungimas(), $link);
    $name = mysqli_real_escape_string( getPrisijungimas(), $name);
    $price = mysqli_real_escape_string( getPrisijungimas(), $price);
    $kiekis = mysqli_real_escape_string( getPrisijungimas(), $kiekis);
    $pozicija = mysqli_real_escape_string( getPrisijungimas(), $pozicija);
    $manoSQL = "INSERT INTO visosprekes VALUES (NULL, '$link', '$name', '$price', '$kiekis', '$pozicija')";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if ($arPavyko == false) {
        echo "ERROR: Nepavyko sukurti naujos prekes<br>";
    }
}

// images
function getImgs() {
    $manoSQL= "SELECT * FROM img";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
    return $rezultatai;
}

function createImg($name, $pozicija, $prekesid) {
    // Saugumas: uzkoduoja spec. simbolius "" '' \n \t < >
    $name = mysqli_real_escape_string( getPrisijungimas(), $name);
    $pozicija = mysqli_real_escape_string( getPrisijungimas(), $pozicija);
    $prekesid = mysqli_real_escape_string( getPrisijungimas(), $prekesid);
    $manoSQL = "INSERT INTO img VALUES (NULL, '$name', '$pozicija', '$prekesid')";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if ($arPavyko == false) {
        echo "ERROR: Nepavyko sukurti naujos prekes<br>";
    }
}

function imgUpdate($id, $name, $pozicija, $prekesid) {
    $id = mysqli_real_escape_string( getPrisijungimas(), $id);
    $name = mysqli_real_escape_string( getPrisijungimas(), $name);
    $pozicija = mysqli_real_escape_string( getPrisijungimas(), $pozicija);
    $prekesid = mysqli_real_escape_string( getPrisijungimas(), $prekesid);
    $manoSQL = "UPDATE img SET name='$name', pozicija='$pozicija', prekesid='$prekesid' WHERE id='$id'";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko <br>" . mysqli_error();
    }
}

function deleteImg($id) {
    $id = mysqli_real_escape_string( getPrisijungimas(), $id);
    $manoSQL = "DELETE FROM img WHERE id=$id";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko pasalinti<br>";
    }
}
