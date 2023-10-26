<?php
// This file is for deleting a Product.

include('DbConnection.php');

$dbh = new DbConnection();  // Gets a handle on the Database
$conn = $dbh->getConnection(); // Uses the db connection method, to get a connection

if(isset($_GET['varId'])){
    $id = $_GET['varId'];

    $sql = "DELETE FROM `product` Where id = '$id'";
    
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    if($sql) {
        ?>
        <script type="text/javascript">
        alert("Form has been DELETED");
        window.location.href = "../searchpages.php";
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
        alert("ERROR: DELETED failed");
        window.location.href = "../searchpages.php";
        </script>
        <?php
    }
    $stmnt->closeCursor();
    $conn = null;
}
?>
