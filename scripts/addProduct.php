<?php
// This file is for Adding Product information. 

include('DbConnection.php');

$dbh = new DbConnection();  // Gets a handle on the Database
$conn = $dbh->getConnection(); // Uses the db connection method, to get a connection
$sql = "SELECT id, productName, upc, available_on, brand, color  FROM `product`";

$stmnt = $conn->prepare($sql); // Prepare the statement for execution
$stmnt->execute(); // Execute the query, there is no array because we are not submitting the data

// Fetch the results
$results = $stmnt->fetchAll(); // Fetch all results we get back 

$stmnt->closeCursor(); // Closes cursor marker as it finishes searching database 
$conn = null; // clears the connection

$id = $_POST['id'];
$productName = $_POST['productName'];  // Get Product Name from the form submission
$upc = $_POST['upc'];
$availdate = $_POST['availdate'];
$propNametxt = $_POST['propNametxt'];
$propValtxt = $_POST['propValtxt'];
    
if(empty($_POST['productName']) || empty($_POST['upc']) || empty($_POST['availdate']) || empty($_POST['propNametxt']) || empty($_POST['propValtxt'])){
    ?>
    <script type="text/javascript">
    alert("ERROR: Unable to create record!! Must completed all fields! ");
    window.location.href = "../index.php";
    </script>
    <?php
}
else
{
 //   foreach($results as $result)
   // {
    /*    if ($result['productName'] = $productName || $result['upc'] = $upc)
        {
            ?>
            <script type="text/javascript">
                alert("Product Name or UPC already Exists! Please enter UNIQUE Name and UPC!");
                window.location.href = "../index.php";
            </script>
            <?php
        }
        else
        {*/

           $connsql = new mysqli("localhost", "root", "", "product_db");

           $mysql = "INSERT IGNORE INTO `product` (id, productName, upc, available_on, brand, color) 
           VALUES('0', '$productName', '$upc', '$availdate', '$propNametxt', '$propValtxt')";
            
                if($connsql->query($mysql) === TRUE)  {
                    ?>
                    <script type="text/javascript">
                        alert("New record created successfully! NOTICE: DUPLICATE WILL NOT creaea in a record! Check in Search Prodcut to view prodcut listings!");
                        window.location.href = "../index.php";
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script type="text/javascript">
                        alert("ERROR: Unable to create record!!");
                        window.location.href = "../index.php";
                    </script>
                    <?php
                }            
           $connsql->close();
        //}
}

?>
