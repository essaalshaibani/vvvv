
<html>
<body>

    <div align="center">
<h1>welcome to the insert page</h1><br><br>
<form method="POST" action="insert.php">
<hr>

<h4>Companie name :<br><input type="text" name="companie">
<br>
<br>
<input type="submit" name="submit" value="insert"><br><br>
<hr>

</form>

</div>
<?php

if(isset($_POST['submit'])){
include 'conn.php';
$companie=$_POST['companie'];
$sql="insert into companies (comp) values ('$companie')";

if(mysqli_query($conn,$sql)){
    echo("car has been inserted");
}
else{
echo"error";
}

mysqli_close($conn);
}

?>


</body>
</html>