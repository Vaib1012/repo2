<?php

    include 'connection.php';
    $conn= OpenCon();


    $sql="SELECT * FROM school;";
       
    $res=$conn->query($sql);
    $i=0;

    while($row = $res->fetch_assoc()){
        echo "  <tr>
          <td>".$row['school_name']."</td>
          <td class='city'>".$row['city']."</td>
        </tr>";
    }
?>