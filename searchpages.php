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
  <div id="pageWrapper">
    <header>
        <div class="container">
            <div class="row">
                <h2>Product <span>Lists</span></h2>
            </div>
            <nav>                      
              <li><a href="./index.php">Create Product</a></li>
              <li><a href="./searchpages.php">Search Product</a></li>
            </nav>
        </div>
    </header>
  <?php
    include('scripts/DbConnection.php');

    $dbh = new DbConnection();
    $conn = $dbh->getConnection();

    $sql = "SELECT id, productName, upc, available_on, brand, color  FROM `product`";

    $stmnt = $conn->prepare($sql); // Prepare the statement for execution
    $stmnt->execute(); // Execute the query, there is no array because we are not submitting the data

    // Fetch the results
    $results = $stmnt->fetchAll(); // Fetch all results we get back 

    $stmnt->closeCursor(); // Closes cursor marker as it finishes searching database 
    $conn = null; // clears the connection
?>
     
   <div id="mainContent">
    <div class="container">
      <br><br>
    <div class="closeBox">
      <button onClick="window.location.href = './searchpages.php';" type='button'>X</button>
    </div>
      <div id="addProductWrapper">
        <form method="POST">
          <fieldset>
            <label for="prodsLabel"><h3>Products</h3></label>
            <hr>
            <div id="searchProd">
              <label for="searchLabel" class="searchLabel">Search</label>
              <input type="submit" name="view" value="view"/> 
              <input type="submit" name="search" value="search"/>
            </div>
            <div class = "productLists">
              <input type="text" name="name"/>
            </div>
            <br>
            <?php

              if(isset($_POST['view'])){
                foreach($results as $result){
                  echo "<li>" . "Name " . $result['productName'] . "<br>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "UPC " . $result['upc'] . "<br>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "Available on " . $result['available_on'] . "<br>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "Properties " . "(" . "Brand: " . $result['brand'] . "  " . "&nbsp;&nbsp;" . "Color: ". $result['color'] . ")" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ."<a href='./updateForm.php?varId=" .$result['id'] . "'>" . "EDIT</a>" . "&nbsp;&nbsp;" ."<a href='scripts/deleteProduct.php?varId=" .$result['id'] . "'>REMOVE</a></li>";
                }
              }
              else if(isset($_POST['search']))   
              {
               foreach($results as $result){
                    if (str_contains($result['productName'], $_POST['name'])){
                    echo "<li>" . "Name " . $result['productName'] . "<br>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "UPC " . $result['upc'] . "<br>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "Available on " . $result['available_on'] . "<br>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "Properties " . "(" . "Brand: " . $result['brand'] . "  " . "&nbsp;&nbsp;" . "Color: ". $result['color'] . ")" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ."<a href='./updateForm.php?varId=" .$result['id'] . "'>" . "EDIT</a>" . "&nbsp;&nbsp;" ."<a href='scripts/deleteProduct.php?varId=" .$result['id'] . "'>REMOVE</a></li>";
                    }
                }
              }
            ?>
          </fieldset>    
        </form>
      </div>
    </div>
    <footer>
      <hr />
      <p>Copyright&copy;2023 Belinda Walker Full Stack Developer. All Rights Reserved</p>
    </footer>
   </div>
  </div>
</body>
</html>

