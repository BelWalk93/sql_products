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
              <h2>Product <span>Create</span></h2>
          </div>
          <nav>                      
            <li><a href="./index.php">Create Product</a></li>
            <li><a href="./searchpages.php">Search Product</a></li>    
          </nav>
      </div>
    </header>
   <div id="mainContent">
    <div class="container">
      <div id="addProductWrapper">
        <form method="POST" action="scripts/addProduct.php">
          <fieldset>
            <label for="prodLabel"><h3>Product</h3></label>
            <hr>
            <input type="hidden"
             name="id"
             id="id">
            <input type="text"
              name="productName"
              id="productName"
              placeHolder="Name"/>
              <br>
              <hr>
            <input type="text"
              name="upc"
              id="upc"
              placeholder="UPC"/>
              <br>
            <div class=combine>
              <label for="availdate">Available On</label>
              <br>
              <input type="date" id="availdate" name="availdate" value="2023-10-19"/>
            </div>
            <label for="proplabel"><h3>Properties</h3></label>
            <hr>
            <div class="propInfo">
              <div class="propName">
                <label for="propNamelabel">Property Name</label>
                <br>
                <input type="text" name="propNametxt" id="propNametxt">
              </div>
              <div class="propVal">
                <label for="propVallabel">Property Value</label>
                <br>
                <input type="text" name="propValtxt" id="propValtxt">
              </div>
            </div>
            <hr>
            <div id="bottomBtn">
              <button class="addBtn">ADD MORE PROPERTIES</button>
            </div>
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