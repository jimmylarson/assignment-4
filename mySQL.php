<?php

include_once "dbConnect.php";
// database functions ************************************************

function fInsertToDatabase($asin, $title, $price) {
    $myDB = fConnectToDatabase();
    $sql = "INSERT INTO DvdTitles(asin, title, price) VALUES(:asin, :title, :price)";
    $stmt = $myDB->prepare($sql);
    $stmt->bindParam(':asin', $asin);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':price', $price);
    $stmt->execute();
    $myDB = null;
}

function fInsertToDvdActors($fname, $lname) {
    $myDB = fConnectToDatabase();
    $sql = "INSERT INTO DvdActors(fname, lname) VALUES(:fname, :lname)";
    $stmt = $myDB->prepare($sql);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->execute();
    $myDB = null;
}

function fInsertToTitlesActors($title, $fname, $lname) {
    $myDB = fConnectToDatabase();
    $sql = "INSERT INTO TitlesActors(asin, actorID) " .
            "SELECT T.asin AS asin, A.actorID " .
            "FROM DvdTitles T, DvdActors A " .
            "WHERE T.title = :title AND A.fname = :fname AND A.lname = :lname";
    $stmt = $myDB->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->execute();
    $myDB = null;
}

function fDeleteFromDatabase($asin) {
    $myDB = fConnectToDatabase();
    $sql = "DELETE FROM DvdTitles WHERE asin = :asin";
    $stmt = $myDB->prepare($sql);
    $stmt->bindValue(':asin', $asin);
    $stmt->execute();
    $myDB = null;
    return $stmt->rowCount();
}

function fDeleteFromDvdActors($id) {
    $myDB = fConnectToDatabase();
    $sql = "DELETE FROM DvdActors WHERE actorID = :actorID";
    $stmt = $myDB->prepare($sql);
    $stmt->bindValue(':actorID', $id);
    $stmt->execute();
    $myDB = null;
    return $stmt->rowCount();
}

function fDeleteFromTitlesActors($asin, $actorID) {
    $myDB = fConnectToDatabase();
    $sql = "DELETE FROM TitlesActors WHERE asin = :asin AND actorID = :actorID";
    $stmt = $myDB->prepare($sql);
    $stmt->bindValue(':asin', $asin);
    $stmt->bindValue(':actorID', $actorID);
    $stmt->execute();
    $myDB = null;
    return $stmt->rowCount();
}

function fListFromDatabase() {
    $myDB = fConnectToDatabase();
    $sql = "SELECT asin, title, price FROM DvdTitles ORDER BY title";
    $stmt = $myDB->query($sql);
    $myDB = null;
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function fListFromDvdActors() {
    $myDB = fConnectToDatabase();
    $sql = "SELECT actorID, fname, lname FROM DvdActors ORDER BY lname";
    $stmt = $myDB->query($sql);
    $myDB = null;
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function fListFromTitlesActors() {
    $myDB = fConnectToDatabase();
    $sql = "SELECT asin, actorID FROM TitlesActors ORDER BY asin, actorID";
    $stmt = $myDB->query($sql);
    $myDB = null;
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function fUpdateToTitlesActors($title, $fname, $lname) {
    /*
    $myDB = fConnectToDatabase();
    $sql = "INSERT INTO TitlesActors(asin, actorID) " .
        "SELECT T.asin AS asin, A.actorID " .
        "FROM DvdTitles T, DvdActors A " .
        "WHERE T.title = :title AND A.fname = :fname AND A.lname = :lname";
    $stmt = $myDB->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->execute();
    */
    $myDB = null;
}


?>
