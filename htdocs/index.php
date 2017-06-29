<?php

include_once "../dbConnect.php";
include_once "../mySQL.php";


/*
echo "inserting records into dvdtitles...<br><br>";
fInsertToDatabase("B0000399WI", "The Shawshank Redemption", "16.73");
fInsertToDatabase("B0001NBNB6", "The Godfather (Widescreen Edition)", "12.00");
fInsertToDatabase("B06XNRW1VQ", "The Godfather Part II", "7.50");
fInsertToDatabase("B002LII6PK", "The Dark Knight", "9.88");
fInsertToDatabase("B0010YSD7W", "12 Angry Men", "10.56");

echo "contents of dvdtitles:<br><br>";
$dataset = fListFromDatabase();
foreach ($dataset as $row => $link) {
    echo $link['asin'] . "&nbsp;&nbsp;" . $link['title'] . "&nbsp;&nbsp;$" . $link['price'] . "<br><img src=http://images.amazon.com/images/P/" . $link['asin'] . ".01.MZZZZZZZ.jpg /> <br><br>";
}
*/


/*
echo "inserting records into dvdActors...<br><br>";
fInsertToDvdActors("Tim", "Robbins");
fInsertToDvdActors("Morgan", "Freeman");
fInsertToDvdActors("Marlon", "Brando");
fInsertToDvdActors("Al", "Pacino");
fInsertToDvdActors("Robert", "De Niro");
fInsertToDvdActors("Robert", "Duvall");
fInsertToDvdActors("Christian", "Bale");
fInsertToDvdActors("Heath", "Ledger");
fInsertToDvdActors("Henry", "Fonda");
fInsertToDvdActors("Lee J", "Cobb");

echo "contents of dvdActors:<br><br>";
$dataset = fListFromDvdActors();
foreach ($dataset as $row => $link) {
    echo $link['fname'] . "&nbsp;&nbsp;" . $link['lname'] . "&nbsp;&nbsp;#" . $link['actorID'] . "<br><br>";
}

$count = 0;
echo "<br>";
echo "deleting records from dvdActors:&nbsp;";
foreach ($dataset as $row => $link) {
    //echo "calling: fDeleteFromDvdActors(" . $link['actorID'] . ")<br>";
    $count += fDeleteFromDvdActors($link['actorID']);
}
echo "deleted&nbsp;" . $count . "&nbsp;rows<br>";
*/



echo "inserting records into TitlesActors...<br><br>";
fInsertToTitlesActors("The Shawshank Redemption","Tim", "Robbins");
fInsertToTitlesActors("The Shawshank Redemption","Morgan", "Freeman");
fInsertToTitlesActors("The Godfather (Widescreen Edition)","Marlon", "Brando");
fInsertToTitlesActors("The Godfather (Widescreen Edition)","Al", "Pacino");
fInsertToTitlesActors("The Godfather Part II","Robert", "De Niro");
fInsertToTitlesActors("The Godfather Part II","Robert", "Duvall");
fInsertToTitlesActors("The Dark Knight","Christian", "Bale");
fInsertToTitlesActors("The Dark Knight","Heath", "Ledger");
fInsertToTitlesActors("12 Angry Men","Henry", "Fonda");
fInsertToTitlesActors("12 Angry Men","Lee J", "Cobb");


$count = 0;
echo "<br>";
echo "deleting records from TitlesActors:&nbsp;";
foreach ($dataset as $row => $link) {
    $count += fDeleteFromTitleActors($link['actorID']);
}
echo "deleted&nbsp;" . $count . "&nbsp;rows<br>";
*/



?>

<html>
    <head>
        <title>James Larson</title>
    </head>
    <body>
    </body>
</html>