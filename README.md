# <font style="color:Aqua">Product Management Tool v1.0</font>




## <font style="color:Aqua">Table of Contents</font>

- [About](#about)
- [Usage](#usage)
- [Installation](#installation)
- [Getting Started](#getting_started)
- [Requirements](#requirements)
- [How To Use The Project](#use_project)
- [Codes Used](#codes_used)
- [Development of Product Management Tool v1.1](#development)
- [Credits](#credits)
- [Contributors](#development)
- [Contact](#contact)

## <font style="color:Aqua">About</font>
PHP and MySQL are open source server side prgramming languages used to create a dynamic website.  PHP and MySQL work togethr to provide fast web page response times.  This purpose of this project allow users to create products and search products. Which is included edit and delete data of products on the listing search page.  There are two pages on this website.  One is Product Create Page and the other is Listing page. This website is built from scratch using PHP and MYSQL. This website uses some very basic styling by using HTML and CSS.  I use XAMPP that allows me to created a local web server for this project.  I use Visual Studio as text editor. 

- HTML, CSS = Front End
- PHP, MYSQL = Back End

## <font style="color:Aqua">Usage</font>
- Visual Studio version 1.83.1
- PHP version 8.1.10
- MySQL version 5.2.0
- XAMPP version 3.3.0
- Apache version 2.4.54(Win64)
- HTML5
- CSS3

## <font style="color:Aqua">Installation</font>

### <font style="color:Aqua">PHP Development</font>
For PHP Developement, you will need:<br>
- XAMPP Software
- Code editor (Visual Studio Code)
<br>

### <font style="color:Aqua">Install Visual Studio Code</font>
1. Download the VS Code from this link https://code.visualstudio.com/download and select your respective operating system. 
2. Open Download setup file and install it.  Follow the installation process. 

### <font style="color:Aqua">Install XAMPP</font>
1. Download to XAMPP link https://www.apachefriends.org/download.html according to your OS. 
2. Open the downloaded setup file.  Follow the setup wizard and install XAMPP. 
3. Run XAMPP after installation.  
4. Start MySQL an Apache server by clicking Start in front of it.  
*Note* I disabled FileZilla, Mercury, and Tomcat during XAMPP installation. 
<br>

Read more information and more understanding on using XAMPP https://phpandmysql.com/extras/installing-xampp/.
<br>
 
I put projects in "C:/xampp/htdocs/".  Then I create new project name folder to work with in "C:/xampp/htdocs/projects".  


### <font style="color:Aqua">Work with VS Code</font> 
1.  Open Visual Studio Code 
2.  Go to File and click on Add Folder to Workspace as "C:/xampp/htdocs/projects" in Visual Studio.
3.  Go to File and click Open Folder.
4.  Click on the projectName folder that you created in "C:/xampp/htdocs/projects".
5.  Created file index.php in Visual Studio.
<br>  

### <font style="color:Aqua">How to Make Root Folder for localhost.</font>

If you want to make root folder for localhost, Make sure you have created  C:\xampp\htdocs\projects.  Open XAMPP Control Panel and Click on Apache - Config and select Apache (httpd.conf) 

<image src="images/xamppcontrolpanel.png" alt="Alt text" style="max-width: 400px; display: inline-block; margin: 0 auto;">
<br>

    Go to C:\xampp\apache\config\httpd.conf
    Open httpd.conf
    Find tag: DocumentRoot: "C:/xampp/htdocs"
    Edit tag to: DocumentRoot "C:/xampp/htdocs/projects"
    Now find tag and change it to < Directory "C:/xampp/htdocs/projects" >
    Restart your Apache

<br>

The <font style="color:Aqua">phpMyAdmin</font> database is located under C:/localhost/Projects/  
<br>

## <font style="color:Aqua">Getting Started</font>

### <font style="color:Aqua">Files From GitHub</font>
1.  Go to "C:/xampp/htdocs/projects" and created folder "products".  
2.  Go to browser and type localhost.  
3.  Notice Index of all the Lists of Project names there. See products in the list.
4. Upload all the files from to Github and place all the folder and files in new folder "C:/xampp/htdocs/projects/products"

### <font style="color:Aqua">Import product_db.SQL From GitHub</font>
Two ways to import product_db.SQL from GitHub.  
1. Open another browser and type localhost and 
2. Click phpMyAdmin
3. Open your database in phpMyAdmin
4. To Import product_db.SQL, go to the "import" tab in phyMyAdmin.  To import data into a specific database or table open the the database or table before going to the "import" tab

OR

1.  You can also import an SQL file directly by dragging an dropping it from gitHub file manager to the phpMyAdmin interface in your web browswer.  

### <font style="color:Aqua">Run products</font>
1. Go to browser and type localhost
2. Click on "products".  
3. You will see Product Create page front of you.  


## <font style="color:Aqua">Requirements</font>
- Id - hidden input in html (Not shown on the page but used ID as Primary Key in MySQL)
- Product Name are used Form Input as text (0-1024 text and UNIQUE in MySQL) **NOTE** DUPLCATE PRODUCT NAME and data will NOT insert into databse
- UPC - Use Form input as text ( 12 varchar and UNIQUE in MYSQl) **NOTE** DUPLICATE UPC and data will NOT enter into the database. 
- available_on - used Form input as Date(Date in MYSQL. Must match Date format in html and MYSQL)
- Property Name - used input as text (char(256) in MySQL)
- Property Value - used input as text (char(256) in MySQL)

## <font style="color:Aqua">How To Use The Project</font>
There are two pages, Create Product page and Search Product page. Create Product allows user to create a product data into the database.  Search Product allows user to view and serach products. In Create Product page. The user will fill out the Product Name, UPC, Available on date, Properties name and Properties Value.  The Product Name can type up to 1024 characters. UPC shall enter as alphnumeric.  Available_on has a calander for user to click on the date that is available on.  Property Name can be use the name of the brand.  Property Values can be use as color or description. 

To create a new product name, click on Create Product button page. The Create Product page, all the fields must be entered or the alert message will alert user that all fields must be completed. Blank fields will not insert into the database. Click on the ADD MORE PROPERTIES button after all fields completed. After ADD MORE PROPERTIES button clicked, you will recieved message that New record created successfully! **NOTE** Any Duplicate Product Name or UPC will not be insert into the database but will show New record created successfully!  

<image src="images/Create Product Page.png" alt="Alt text" style="max-width: 400px; display: inline-block; margin: 0 auto;">

<br><br>


To search or view the lists of Products, click on Search Product button page.  On the Search Product Page, it allows user to click on view button to see all the product lists and user can enter the Product Name and click on search button to view few product lists. The user can click on x button at the top right of the page to clear all the lists.  

<image src="images/Product Lists Page.png" alt="Alt text" style="max-width: 400px; display: inline-block; margin: 0 auto;">
<br><br>

In the Product Lists, there are edit and delete button on each product.  

<image src="images/EditRemoveBtn.png" alt="Alt text" style="max-width: 400px; display: inline-block; margin: 0 auto;">
<br><br>

Delete button will remove a product name and product information from the database.  Edit button will allow user to update data information.  After click on EDIT button, the Update form will show.  The user may change any fields.  Click Update Data button at the right bottom and it will Update data in database. The X button at the top right will return back to Product List page if the user doesn't want any change in database. 

<image src="images/ProductUpdate.png" alt="Alt text" style="max-width: 400px; display: inline-block; margin: 0 auto;">
<br><br>

## <font style="color:Aqua">Codes Used</font>
### <font style="color:Aqua">Creating Product Code Example</font>
The INSERT INTO `product` will give error message if there is any Duplicate Product Name and UPC in the lists.  The Product Name and UPC are UNIQUE in MySQL.  Id is the Primary Key and it was set as AUTO-INCRERMENT in MySQL. The INSERT will check any duplicate Product Name and UPC.  If duplicate found, the error message pops up on the screen. Using INSERT IGNORE INTO `product` will ignore the error message from MySQL and Duplicate Product Name and UPC will not insert into the database.  Product Names and UPCs that is not duplicate will insert into the database.  The next version of Product Manage Tool will be added code to catch the error message from MySQl to display message that the Product Name Or UPC already exists.
<br><br>
<image src="images/CreateCode.png" alt="Alt text" style="max-width: 400px; display: inline-block; margin: 0 auto;">
<br><br>

### <font style="color:Aqua">Update Code Example</font>
In code, it will UPDATE all the fields where it will get the ID from a product.  Id is hidden in the form.  All the fields will update into the database by using ID.  
<br>
<image src="images/UpdateCode.png" alt="Alt text" style="max-width: 400px; display: inline-block; margin: 0 auto;">
<br><br>

### <font style="color:Aqua">Delete Code Example</font>
Once you click on Delete, it will automatically delete data information by using ID.  
<br>
<image src="images/DeleteCode.png" alt="Alt text" style="max-width: 400px; display: inline-block; margin: 0 auto;">
<br><br>

### <font style="color:Aqua">View Code Example</font>
The code will print all the lists from the database with edit and delete link. 
<br>

<image src="images/viewCode.png" alt="Alt text" style="max-width: 400px; display: inline-block; margin: 0 auto;">
<br><br>

### <font style="color:Aqua">Search Code Example</font>
This search code will show few lists of the Product Name with edit and delete link. The first few letters will search product name that compare the ProductName from MySQL and user input.  
<br>
<image src="images/viewCode.png" alt="Alt text" style="max-width: 400px; display: inline-block; margin: 0 auto;">
<br><br>

## <font style="color:Aqua">Development of Product Management Tool v1.1</font>
1. Add code to catch the error message from MySQL to display message that the Product Name Or UPC already exists.

2. Change edit, delete, search, and view to icon link

3. Possible use table inside Product list to make edit and delete link verticle straight. 

4. Add code to ask user to make sure that the user still want to delete Product after click delete button. 
<br><br>

## <font style="color:Aqua">Credits</font>
This project is made possible by the the wonderful people and projects listed in the docuemnt. 
<br><br>

## <font style="color:Aqua">Contributors</font>
Thanks goes to these wonderful people at the Church of the Highland. Thank you all for allowing me to work on this project.  

- Tony Lear
- Developer Team at the Church of the Highland 
<br><br>

## <font style="color:Aqua">Contact</font>
Belinda Walker - <a href="mailto:walkerbelinda93@yahoo.com">walkerbelinda93@yahoo.com</a>
<br>

