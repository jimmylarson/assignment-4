<?php

include_once "dbConnect.php";
// database functions ************************************************

function fInsertToDatabase($asin, $title, $price) {
    $myDB = fConnectToDatabase();
    $sql = "INSERT INTO dvdtitles(asin, title, price) VALUES(:asin, :title, :price)";
    $stmt = $myDB->prepare($sql);
    $stmt->bindParam(':asin', $asin);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':price', $price);
    $stmt->execute();
    $myDB = null;
}

function fInsertToDvdActors($fname, $lname) {
    $myDB = fConnectToDatabase();
    $sql = "INSERT INTO dvdActors(fname, lname) VALUES(:fname, :lname)";
    $stmt = $myDB->prepare($sql);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->execute();
    $myDB = null;
}


function fDeleteFromDatabase($asin) {
    $myDB = fConnectToDatabase();
    $sql = "DELETE FROM dvdtitles WHERE asin = :asin";
    $stmt = $myDB->prepare($sql);
    $stmt->bindValue(':asin', $asin);
    $stmt->execute();
    $myDB = null;
    return $stmt->rowCount();
}

function fDeleteFromDvdActors($id) {
    $myDB = fConnectToDatabase();
    $sql = "DELETE FROM dvdActors WHERE actorID = :actorID";
    $stmt = $myDB->prepare($sql);
    $stmt->bindValue(':actorID', $id);
    $stmt->execute();
    $myDB = null;
    return $stmt->rowCount();
}


function fListFromDatabase() {
    $myDB = fConnectToDatabase();
    $sql = "SELECT asin, title, price FROM dvdtitles ORDER BY title";
    $stmt = $myDB->query($sql);
    $myDB = null;
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function fListFromDvdActors() {
    $myDB = fConnectToDatabase();
    $sql = "SELECT actorID, fname, lname FROM dvdActors ORDER BY lname";
    $stmt = $myDB->query($sql);
    $myDB = null;
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
