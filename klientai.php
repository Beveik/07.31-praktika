<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="klientai.php" method="get">
<input type="text" name="vardas" value="name">
<input type="text" name="pavarde" value="surname">
<input type="text" name="asmKodas" value="code">
<input type="text" name="prData" value="date">
<input type="text" name="adresas" value="adress">
<input type="text" name="elPastas" value="email">
<button type="submit" name="prideti">Pridėti klientą</button>
<br>
    </form>



<?php
// 3. Susikurti asociatyvų masyvą "Klientai".
// Kintamieji:vardas, pavarde, asmens kodas, prisijungimo data, adresas, elpastas.
// Masyve turi būti 200 klientų. Duomenis užpildyti savo nuožiūra.
// Visą "Klientai" objektų masyvą atvaizduoti lentelėje <table>.
// Visas klientų masyvas saugomas COOKIE.
// Papildomai: Sukurti galimybę pridėti klientą į masyvą bei ištrinti.


$klientuMasyvas = array (
array (),
);

for($i=0; $i<10; $i++){
    $masyvas= array(
    "vardas".$i, 
    "pavarde".$i, 
    "asmKodas".$i, 
    "prData".$i, 
    "adresas".$i, 
    "elPastas".$i);

    array_push($klientuMasyvas, $masyvas);
   
    // setcookie("masyvas", implode("|", $masyvas[$i]), time()+3600, "/");
    
    // var_dump ( $klientuMasyvas);
    }

    function pridetiKlienta($bababababa) {

    if (isset($_GET["vardas"]) && !empty($_GET["vardas"]) && isset($_GET["pavarde"]) && !empty($_GET["pavarde"]) && isset($_GET["asmKodas"]) && !empty($_GET["asmKodas"]) && isset($_GET["prData"]) && !empty($_GET["prData"])&& isset($_GET["adresas"]) && !empty($_GET["adresas"]) && isset($_GET["elPastas"]) && !empty($_GET["elPastas"])      )
    {   $vardas=$_GET["vardas"];
        $pavarde=$_GET["pavarde"];
        $asmKodas=$_GET["asmKodas"];
        $prData=$_GET["prData"];
        $adresas=$_GET["adresas"];
        $elPastas=$_GET["elPastas"];

        $naujasKlientas= array (         
            $vardas,
            $pavarde,
            $asmKodas,
            $prData,
            $adresas,
            $elPastas);
// echo $naujasKlientas;
            array_push($bababababa, $naujasKlientas);
            return $bababababa;
    }
    else {
        echo "Langeliai tušti";
    }
     
}

function nupiesiam_lenta($mamamaam){
    echo "<table>";
    for ($j=0; $j<count($mamamaam); $j++){
    echo "<tr>";
    for ($i=0; $i<count($mamamaam[$j]); $i++){
        echo "<td>";
        echo $mamamaam[$j][$i]."<br>";
        
        echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

setcookie("mamamaam", implode("|", $mamamaam), time()+3600, "/");
}

// 
if (isset($_GET["prideti"])){
    $klientuMasyvas = pridetiKlienta($klientuMasyvas);
    nupiesiam_lenta($klientuMasyvas);

}


?>
</body>
</html>