<?php

namespace PO\Lib;

class DB
{
    private $host = "localhost";
    private $port = 3306;
    private $username = "root";
    private $password = "";
    private $dbName = "po-2023-2024";

    private \PDO $connection;

    public function __construct(
        string $host = "",
        int $port = 3306,
        string $username = "",
        string $password = "",
        string $dbName = ""
    )
    {
        if(!empty($host)) {
            $this->host = $host;
        }

        if(!empty($port)) {
            $this->port = $port;
        }

        if(!empty($username)) {
            $this->username = $username;
        }

        if(!empty($password)) {
            $this->password = $password;
        }

        if(!empty($dbName)) {
            $this->dbName = $dbName;
        }

        try {
            $this->connection = new \PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4",
                $this->username,
                $this->password
            );
            // set the PDO error mode to exception
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function insertMenuRecord(string $Category, string $Price, string $Address, string $Bedrooms, string $Bathrooms, string $Area, string $Floor, string $Parking, string $Image): bool
    {
        $sql = "INSERT INTO zoznam(Category, Price, Address, Bedrooms, Bathrooms, Area, Floor, Parking, Image) VALUES ('" . $Category . "', '" . $Price . "', '" . $Address . 
        "','" . $Bedrooms . "','" . $Bathrooms . "','" . $Area . "','" . $Floor . "','" . $Parking . "','" . $Image . "')";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }



    public function getMenuItems(): array
    {
        $sql = "SELECT page_name, url FROM zoznam";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $finalMenu = [];

        foreach ($data as $menuItem) {
            $finalMenu[$menuItem['page_name']] = $menuItem['url'];
        }

        return $finalMenu;
    }

    public function getZoznam(): array
    {
        $sql = "SELECT * FROM zoznam";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function getMenuItem(int $id): array
    {
        $sql = "SELECT * FROM zoznam WHERE id = ".$id;
        $query = $this->connection->query($sql);
        $data = $query->fetch(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function deleteMenuItem(int $id): bool
    {
        $sql = "DELETE FROM zoznam WHERE id = ".$id;
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function updateMenuItem(string $Category = "", string $Price = "", string $Address = "", string $Bedrooms = "", 
    string $Bathrooms = "", string $Area = "", string $Floor = "", string $Parking = "", string $Image = "", int $id): bool
    {

     
        $sql = "UPDATE zoznam SET ";
         
       
        if(!empty($Category)) {
            $sql .= " Category = '" . $Category . "'";
        }

        if(!empty($Price)) {
            $sql .= ", Price = '" . $Price . "'";
            
        }

        if(!empty($Address)) {
            $sql .= ", Address = '" . $Address . "'";
            
        }

        if(!empty($Bedrooms)) {
            $sql .= ", Bedrooms = '" . $Bedrooms . "'";
            
        }

        if(!empty($Bathrooms)) {
            $sql .= ", Bathrooms = '" . $Bathrooms . "'";
            
        }

        if(!empty($Area)) {
            $sql .= ", Area = '" . $Area . "'";
            
        }

        if(!empty($Floor)) {
            $sql .= ", Floor = '" . $Floor . "'";
            
        }

        if(!empty($Parking)) {
            $sql .= ", Parking = '" . $Parking . "'";
            
        }

        if(!empty($Image)) {
            $sql .= ", Image = '" . $Image . "'";
        }
        
        $sql .= " WHERE id = ". $id;

        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }
}