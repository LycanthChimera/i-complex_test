<?php
function addUser($name, $age, $sex)
{
    $pdo = new PDO("mysql:host=localhost;dbname=mvc", "root","");
    $sql = "insert into users (name, age, sex) values (:name, :age, :sex)";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":name", $_POST['name']);
    $statement->bindParam(":age", $_POST['age']);
    $statement->bindParam(":sex", $_POST['sex']);
    $statement->execute();

}

function getUsers()
{
    $pdo = new PDO("mysql:host=localhost;dbname=mvc", "root","");
    $statement = $pdo->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}