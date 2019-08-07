<!DOCTYPE html >

<html>
<head>
</head>

<body>    

<?php
    $con=mysqli_connect("localhost","root","","zoo");
    $sql="select * from adoption";
    $result=mysqli_query($con,$sql);
    
    echo "<table>";
    while($row=mysqli_fetch_array($result))
    {
        
        echo"<tr><td rowspan=4>";
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['picture'] ).'" height="200" width="500"/>';
        echo "</tr></td>";
        
        echo "<tr><td>";
        echo "<b><i>Animal Code:</b></i> $row[acode] ";
        echo "</td></tr>";
        
         echo "<tr><td>";
        echo "<b><i>Animal Name :</b></i> $row[aname]";
        echo "</td></tr>";
        
         echo "<tr><td>";
        echo "<b><i>Scientific Name :</b></i> $row[sname]";
        echo "</td></tr>";
        
        echo "<tr><td>";
        echo "<b><i>Adoption Scheme :</b></i> $row[ascheme]";
        echo "</td></tr>";
             
        
    }
            
    echo "</table>";
    
    ?>
    
    </div>  
</body>
</html>