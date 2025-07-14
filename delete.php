<?php 
include "connectio.php";


try{
$sql = "DELETE FROM emp WHERE id=3";

// $stmt = $conn->prepare($sql);
// $stmt->bindParam(":id",$id);
// $id = 2;
// $stmt->execute();

$conn->exec($sql);

echo "Delete data successfully";


}catch(PDOException $e){
    echo "failed..".$e->getMessage();
}

?>