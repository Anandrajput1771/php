<?php 
include "connectio.php";

try{
    // $sql = "SELECT * FROM emp";
    $sql = "SELECT * FROM emp WHERE id = :id AND name= :name";
    $stmt= $conn->prepare($sql);

    $stmt->bindParam('id',$id);
    $stmt->bindParam(':name',$name);

    $id = 1;
    $name = "priya";
    $stmt->execute();

    if($stmt->rowCount() > 0){
    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "Id: ".$row['id'] . "Name : ".$row['name']."Age : ".$row['age']."Email : ".$row['email']."Password : ".$row['password']."Re_password ".$row['re_password']."<br/> <br/>";
    }

    // $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //       echo "Id: ".$row['id'] . "Name : ".$row['name']."Age : ".$row['age']."Email : ".$row['email']."Password : ".$row['password']."Re_password ".$row['re_password']."<br/> <br/>";
        
    // $stmt->bindColumn(1,$id);
    // $stmt->bindColumn(2,$name);
    // $stmt->bindColumn(3,$age);
    // $stmt->bindColumn(4,$email);
    // $stmt->bindColumn(5,$phone);
    // $stmt->bindColumn(6,$password);
    // $stmt->bindColumn(7,$re_password);

    
//     while($row = $stmt->fetch(PDO::FETCH_ASSOC))
// {         echo "Id: ". $id . 
//                 "Name : ". $name. 
//                 "Age : ". $age.
//                 "Email : ".$email.
//                 "Phone  : ".$phone.
//                 "Password ".$password.
//                 "Re-password : ".$re_password.
//                 "<br/> <br/>"; }

// echo "<table border='1' cellpadding='10' cellspacing='0'>";
// echo "<tr>
//         <th>Id</th>
//         <th>Name</th>
//         <th>Age</th>
//         <th>Email</th>
//         <th>Phone</th>
//         <th>Password</th>
//         <th>Re-password</th>
//       </tr>";

// while ($stmt->fetch(PDO::FETCH_BOUND)) {
//     echo "<tr>
//             <td>$id</td>
//             <td>$name</td>
//             <td>$age</td> 
//             <td>$email</td>
//             <td>$phone</td>
//             <td>$password</td>
//             <td>$re_password</td>
//           </tr>";
// }

// echo "</table>";


}else{
    echo "fetching failed or error";
}
  

}catch(Exception $e){
    echo "failed ..".$e->getMessage();
}

unset($stmt);
$conn = null;

?>