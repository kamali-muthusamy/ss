<?php include "config.php";?>
<DOCTYPE html>
<html lang="en">
<head>
        <title>webpage design </title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
    <div class="container">
        <form method="post">
        <div class="form-box login">
        <h3>  STUDENT LOGIN</h3>

            <form action="#">
        <br>

            <div class="input-box">
                <lable>first name </lable>
                <input name="firstname"type="text"> </input>
            </div>
            <br>
            <div class="input-box">
            <lable>last name </lable>
                <input name="lastname"type="text"> </input>
            </div>
            <br>
            <div class="input-box">
            <lable>age</lable>
                <input name="age"type="text"> </input>
            </div>
            <br>
            <div class="input-box">
            <lable>mobile number</lable>
                <input name="phonenumber"type="text"> </input>
            </div>
            <br>
            <div class="input-box">
            <lable>email id</lable>
                <input name="emailid"type="text"> </input>
            </div>

            <br>
            <button type ="submit" name="add">add</button>
            <br>
            
    </div>
    </form>
    <?php
    if(isset($_POST["add"])){
        $first=$_POST["firstname"];
        $last=$_POST["lastname"];
        $age=$_POST["age"];
        $phone=$_POST["phonenumber"];
        $email=$_POST["emailid"];
        $sql="INSERT INTO  staff(id,firstname,lastname,age,phonenumber,emailid) VALUES (null,'$first','$last','$age','$phone','$email')";
        if($con->query($sql))
        {
          echo "submitted";
        }
        else{
            echo "not submitted";
        }
    }
    ?>
    <tbody>
    <?php
$sql="select * from staff";
$res=$con->query($sql);

while($row=$res->fetch_assoc()){
    $id=$row["id"];
    $first=$row["firstname"];
    $last=$row["lastname"];
    $age=$row["age"];
    $phone=$row["phonenumber"];
    $email=$row["emailid"];

?>


<?php } ?>
</tbody>

</table>





</body>
</html>
    