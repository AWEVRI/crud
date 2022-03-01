<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
    
    <div class="container">
    <a href="index.php" class="btn btn-success my-5">Add Record</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select_sql="SELECT * FROM crud1";
                if($result=mysqli_query($conn, $select_sql)){
                    while($rows=mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                            <td>$rows[id]</td>
                            <td>$rows[firstname]</td>
                            <td>$rows[middlename]</td>
                            <td>$rows[surname]</td>
                            <td>$rows[email]</td>
                            <td>$rows[contact]</td>
                            <td><a href='edit.php?editid=$rows[id]' class='btn btn-primary'>Edit</a></td>
                            <td><a href='delete.php?deleteid=$rows[id]' class='btn btn-danger'>Delete</a></td>
                        </tr>
                        
                        ";
                    }
                }

                

                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>