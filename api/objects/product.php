<?php
class Product
{

   // database connection and table name
   private $conn;
   private $table_name = "products";

   // object properties
   public $id;
   public $name;
   public $date;
   public $no_to_be_sold;
   public $max_price;
   public $min_price;

   // constructor with $db as database connection
   public function __construct($db)
   {
      $this->conn = $db;
   }

   // read products
   function read()
   {
      $query = "SELECT * FROM " . $this->table_name;

      // prepare query statement
      $stmt = $this->conn->prepare($query);

      // execute query
      $stmt->execute();

      return $stmt;
   }
}
