<?php
require_once ("db.php");
require_once "functionfirst.php";


$connection=createDb();
if(isset($_POST['Create'])){
    CreateData();
}
function CreateData(){
    $bookname=textboxValue("Book_Name");
    $bookpublisher=textboxValue("Book_Publisher");
    $bookprice=textboxValue("Book_Price");
    if ($bookname&&$bookpublisher&&$bookprice){
        $sql="INSERT INTO books(book_name,book_publisher,book_price)VALUES ('$bookname','$bookpublisher','$bookprice')";
        if (mysqli_query($GLOBALS['connection'],$sql)){
            message("success","Data Inserted Success");
        }else{
            echo "data not inserted".mysqli_error($GLOBALS['connection']);
        }
    }else{
        message("error","Please Provide data.");
    }



}
function textboxValue($value){
    $textbox=mysqli_real_escape_string($GLOBALS['connection'],trim($_POST[$value]));
    if (empty($textbox)){
        return false;
    }else{
        return $textbox;
    }

}
function message($style,$msg){
     $ele="<h6 class='$style'>$msg</h6>";
     echo $ele;

}
