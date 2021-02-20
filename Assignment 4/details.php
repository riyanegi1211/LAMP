<?php
    include('config.php');

?>

<?php
    $sql= "SELECT * FROM `users`";
    $result= mysqli_query($conn, $sql);

    if($result->num_rows>0)
    {
        ?>
        <html>
            <head>
                <title>
                    User Details
                </title>
            </head>
            <body>
                <table border="2px">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>City</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row= $result->fetch_assoc())
                        { ?>
                            <tr>
                                <td><?php  echo $row['ID']?></td>
                                <td><?php  echo $row['Username']?></td>
                                <td><?php  echo $row['Email']?></td>
                                <td><?php  echo $row['Gender']?></td>
                                <td><?php  echo $row['City']?></td>
                                <td><a href="edit.php?id=<?php echo $row['ID'];?>" >
                                <input type="button" value="Edit"></a></td>
                                <td><a href="delete.php?id=<?php echo $row['ID'];?>">
                                <input type="button" value="Delete"></td>
                            </tr>
                        <?php
                        }    ?>            
                    
                    </tbody>
                </table>
            </body>
        </html>
    <?php
    }

?>