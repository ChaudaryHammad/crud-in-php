<?php
include "db_connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM `crudtable` WHERE id = $id";

$result = mysqli_query($conn,$sql);
if($result){
    header("Location: index.php?msg=Record Deleted Successfully");

}else{
    echo "Failed: ". mysqli_error($conn);
}


?>