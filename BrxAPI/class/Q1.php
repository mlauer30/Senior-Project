<?php
    class Q1{

        // Connection
        private $conn;

        // Table
        private $db_table = "Q1";

        // Columns
        public $brxMenuID;
        public $menuItemName;
        public $numberSold;
        public $itemFoodCost;
        public $itemSellPrice;
        public $foodCostPerc;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getQ1(){
            $sqlQuery = "SELECT brxMenuID, menuItemName, numberSold, itemFoodCost, itemSellPrice, foodCostPerc FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // CREATE
        public function createQ1(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        brxMenuID = :brxMenuID,
                        menuItemName = :menuItemName, 
                        numberSold = :numberSold, 
                        itemFoodCost = :itemFoodCost, 
                        itemSellPrice = :itemSellPrice, 
                        foodCostPerc = :foodCostPerc";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->brxMenuID=htmlspecialchars(strip_tags($this->brxMenuID));
            $this->menuItemName=htmlspecialchars(strip_tags($this->menuItemName));
            $this->numberSold=htmlspecialchars(strip_tags($this->numberSold));
            $this->itemFoodCost=htmlspecialchars(strip_tags($this->itemFoodCost));
            $this->itemSellPrice=htmlspecialchars(strip_tags($this->itemSellPrice));
            $this->foodCostPerc=htmlspecialchars(strip_tags($this->foodCostPerc));
        
            // bind data
            $stmt->bindParam(":brxMenuID", $this->brxMenuID);
            $stmt->bindParam(":menuItemName", $this->menuItemName);
            $stmt->bindParam(":numberSold", $this->numberSold);
            $stmt->bindParam(":itemFoodCost", $this->itemFoodCost);
            $stmt->bindParam(":itemSellPrice", $this->itemSellPrice);
            $stmt->bindParam(":foodCostPerc", $this->foodCostPerc);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // UPDATE
        public function getSingleQ1(){
            //echo $id;
            $sqlQuery = "SELECT
                        brxMenuID, 
                        menuItemName, 
                        numberSold, 
                        itemFoodCost, 
                        itemSellPrice, 
                        foodCostPerc
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       brxMenuID = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->brxMenuID);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->menuItemName = $dataRow['menuItemName'];
            $this->numberSold = $dataRow['numberSold'];
            $this->itemFoodCost = $dataRow['itemFoodCost'];
            $this->itemSellPrice = $dataRow['itemSellPrice'];
            $this->foodCostPerc = $dataRow['foodCostPerc'];
        }        

        // UPDATE
        public function updateQ1(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        menuItemName = :menuItemName, 
                        numberSold = :numberSold, 
                        itemFoodCost = :itemFoodCost, 
                        itemSellPrice = :itemSellPrice, 
                        foodCostPerc = :foodCostPerc
                    WHERE 
                        brxMenuID = :brxMenuID";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->menuItemName=htmlspecialchars(strip_tags($this->menuItemName));
            $this->numberSold=htmlspecialchars(strip_tags($this->numberSold));
            $this->itemFoodCost=htmlspecialchars(strip_tags($this->itemFoodCost));
            $this->itemSellPrice=htmlspecialchars(strip_tags($this->itemSellPrice));
            $this->foodCostPerc=htmlspecialchars(strip_tags($this->foodCostPerc));
            $this->brxMenuID=htmlspecialchars(strip_tags($this->brxMenuID));
        
            // bind data
            $stmt->bindParam(":menuItemName", $this->menuItemName);
            $stmt->bindParam(":numberSold", $this->numberSold);
            $stmt->bindParam(":itemFoodCost", $this->itemFoodCost);
            $stmt->bindParam(":itemSellPrice", $this->itemSellPrice);
            $stmt->bindParam(":foodCostPerc", $this->foodCostPerc);
            $stmt->bindParam(":brxMenuID", $this->brxMenuID);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // DELETE
        function deleteQ1(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE brxMenuID = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->brxMenuID=htmlspecialchars(strip_tags($this->brxMenuID));
        
            $stmt->bindParam(1, $this->brxMenuID);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

    }
?>

