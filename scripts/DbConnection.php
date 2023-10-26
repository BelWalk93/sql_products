<?php
    // DB Connection Class

    class DbConnection{
        private $DB_HOST = 'localhost'; // DB Host Name
        private $DB_NAME = 'product_db'; // DB Name
        private $DB_USERNAME = 'root'; // DB Username
        private $DB_PASSWORD = ''; // DB Password

        public $dbconn = null; // Default setting, no connection given/set

        public function __construct(){
            

            try{
                $dsn = 'mysql:hostname=' . $this->DB_HOST . ';dbname=' . $this->DB_NAME;
                $option = [];
                $this->dbconn = new PDO($dsn, $this->DB_USERNAME, $this->DB_PASSWORD);
            }catch(PDOException $e){
                echo "There is a problem with the Dataabase connection. Please seek assistance from your Database Administrator";

            }
        }

        public function getConnection(){
            return $this->dbconn;
        }
    }

    new DbConnection();
