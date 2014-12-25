<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud02");

$query = "SELECT * FROM `student` ";

$result = mysqli_query($link, $query);
?>



<table border="2" width="70%">
    <tr>
        <td>id</td>
        <td>First_Name</td>
        <td>Last_Name</td>
    </tr>

    <?php

    foreach($result as $row){


        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['First_Name']?></td>
            <td><?php echo $row['Last_Name']?></td>

            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View</a> |
                <a href=" ">Edit</a> |

                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>
        </tr>


    <?php
    }



    ?>

</table>



