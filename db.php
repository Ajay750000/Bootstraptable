<?php
function createDb(){
    $servername="localhost";
    $username="root";
    $password="";
    $database="bookstore";

    $connection=mysqli_connect($servername,$username,$password,$database);
    if (!$connection){
        die ("connection failed".mysqli_connect_error());
    }
$sql="create database if not exists bookstore";
    if (mysqli_query($connection,$sql)){
        //echo "Data base created";
        $table="CREATE Table if not exists books(
id int(10) not null auto_increment primary key,
book_name varchar(50) not null,
book_publisher varchar(50),
book_price float
)";
        if (mysqli_query($connection,$table)){
            $connection=mysqli_connect($servername,$username,$password,$database);
            return $connection;
        }else{
            echo"Error while creating table".mysqli_error($connection);
        }

    }else{
        echo "Error while creating database".mysqli_error($connection);
    }

}