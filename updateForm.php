<?php
    include('scripts/DbConnection.php');
   // include('scripts/updateProduct.php');

    $dbh = new DbConnection();
    $conn = $dbh->getConnection();
  
  $sql = "SELECT * FROM `product`";
    
    $stmnt = $conn->prepare($sql); // Prepare the statement for execution
    $stmnt->execute(); // Execute the query, there is no array because we are not submitting the data

    // Fetch the results
    $results = $stmnt->fetchAll(); // Fetch all results we get back 

    $stmnt->closeCursor(); // jCloses cursor marker as it finishes searching database 
    $conn = null; // clears the connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<?php


$varID = $_GET['varId'];  //Value will be Id from Edit button 

$prodID = "";
$prodName = "";
$prodUPC = "";
$prodAvailable = "";
$brand = "";
$color = "";

foreach($results as $result){
  if ($result['id'] == $varID){
    $prodID = $result['id'];
    $prodName = $result['productName'];
    $prodUPC = $result['upc'];
    $prodAvailable = $result['available_on'];
    $brand = $result['brand'];
    $color = $result['color'];
  }
}
?>
<div id="pageWrapper">
  <header>
      <div class="container">
              <h2>Update <span>Data</span></h2>
      </div>
  </header>
   <div id="mainContent">
    <br><br>
    <div class="closeBox">
    <button onClick="window.location.href = './searchpages.php';" type='button'>X</button>
    </div>
    <div class="container">
      <div id="addProductWrapper">
        <form action="scripts/updateProduct.php" method="POST">
          <fieldset>
            <label for="prodLabel"><h3>Product</h3></label>
            <hr>
            <input type="hidden"
             name="id"
             id="id"
             value="<?php echo $prodID ?>">
            <input type="text"
              name="productName"
              id="productName"
              value="<?php echo $prodName ?>"/>
              <br>
              <hr>
            <input type="text"
              name="upc"
              id="upc"
              value="<?php echo $prodUPC ?>"/>
              <br>
            <div class=combine>
              <label for="availdate">Available On</label>
              <br>
              <input type="date" 
              name="availdate"
              id="availdate" 
              value="<?php echo $prodAvailable ?>"/>
            </div>
            <label for="proplabel"><h3>Properties</h3></label>
            <hr>
            <div class="propInfo">
              <div class="propName">
                <label for="propNamelabel">Property Name</label>
                <br>
                <input type="text" name="propName" id="propNametxt" value="<?php echo $brand ?>">
              </div>
              <div class="propVal">
                <label for="propVallabel">Property Value</label>
                <br>
                <input type="text" name="propColor" id="propValtxt" value="<?php echo $color ?>">
              </div>
            </div>
            <hr>
            <div class="groupBtns">
                <input type="submit" name="update" value="Update Data">
            </div>
          </fieldset>    
        </form>
      </div>
    </div>
   </div>
   <footer>
      <hr />
      <p>Copyright&copy;2023 Belinda Walker Full Stack Developer. All Rights Reserved</p>
    </footer>   
  </div>
</body>
</html>
<?php
?>
<?php
