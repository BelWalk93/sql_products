<?php
// This file is for updating Product information. 

include('DbConnection.php');

$dbh = new DbConnection();  // Gets a handle on the Database
$conn = $dbh->getConnection(); // Uses the db connection method, to get a connection

    $id = $_POST['id'];
    $productName = $_POST['productName'];
    $upc = $_POST['upc'];
    $availdate = $_POST['availdate'];
    $brand = $_POST['propName'];
    $color = $_POST['propColor'];
    
        $sql = "UPDATE `product` SET productName = '$productName', upc = '$upc', available_on = '$availdate', brand = '$brand', color = '$color' Where id = '$id'";
        
        $stmnt = $conn->prepare($sql);
        $stmnt->execute();
    
        if($sql) {
            ?>
            <script type="text/javascript">
            alert("Form has been updated");
            window.location.href = "../searchpages.php";
            </script>
            <?php
        }else{
            ?>
            <script type="text/javascript">
            alert("ERROR: Updated failed");
            window.location.href = "../searchpages.php";
            </script>
            <?php
        }
        $stmnt->closeCursor();
        $conn = null;

?>