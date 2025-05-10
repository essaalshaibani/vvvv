

<html>
<body>

    <div align="center">
<h1>welcome to the inscar page</h1><br><br>
<form method="POST" action="inscar.php" enctype="multipart/form-data">
<hr>

<h4> name :<br><input type="text" name="name"><br><br>
<h4> cno :<br><input type="text" name="cno"><br><br>
<h4> color :<br><input type="radio" name="color" value="red"><label>red</label>
<input type="radio" name="color" value="blue"><label>blue</label>
<input type="radio" name="color" value="black"><label>black</label>
<input type="radio" name="color" value="pink"><label>pink</label>
<input type="radio" name="color" value="white"><label>white</label><br><br>
<h4> cyilnder :<br>
<select name="cylinder">
<option value="v4">v4</option>
<option value="v6">v6</option>
<option value="v8">v8</option>
<option value="v12">v12</option>
</select><br><br>





<h4> imge :<br><input type="file" name="myfile" value="mm"><br><br>
<br>
<br>
<input type="submit" name="submit" value="insert"><br><br>
<hr>

</form>




<?php
include 'conn.php';

LES["myfile"].["name"],$file_path);
    $sql="insert into cars (name,color,cylinder,imge,cno) values ('$name','$color','$cylinder','$file_path','$cno')";
    
    if(mysqli_query($conn,$sql)){
        echo("car has been inserted");
    }
    else{
    echo"error";
    }
    
    mysqli_close($conn);
    }
    
    
    

















?>