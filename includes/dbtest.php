<?php

class DbTest extends Database{

public function getUsers(){

$sql = "SELECT * FROM users";
$stmt = $this->connect()->query($sql);

while($row=$stmt->fetch()){
echo $row['user_firstname']."<br>";
}
}


///prepared statment for user input
    public function getUsersStmt($firstname,$lastname)
    {

        $sql = "SELECT * FROM users WHERE user_firstname = ? AND user_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
      $names = $stmt->fetchAll();

      foreach($names as $name){
            echo $name['user_dob'] . "<br>";

      }
    }

///insert info into database//VALUES ARE JUST PLACEHOLDERS FOR USER INPUT
    public function setUsersStmt($firstname, $lastname,$dob)
    {

        $sql = "INSERT INTO users(user_firstname ,user_lastname,user_dob) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname,$dob]);

    }
}