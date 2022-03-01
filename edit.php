<?php include 'connect.php';

//$id=$_GET['editid'];
if(isset($_POST['edit_submit'])){
    $edit_firstname=mysqli_real_escape_string($conn, strip_tags($_POST['edit_firstname']));
    $edit_middlename=mysqli_real_escape_string($conn, strip_tags($_POST['edit_middlename']));
    $edit_surname=mysqli_real_escape_string($conn, strip_tags($_POST['edit_surname']));
    $edit_email=mysqli_real_escape_string($conn, strip_tags($_POST['edit_email']));
    $edit_contact=mysqli_real_escape_string($conn, strip_tags($_POST['edit_contact']));

    $update_sql="UPDATE crud1 set  firstname='$edit_firstname', middlename='$edit_middlename', surname='$edit_surname', email='$edit_email', contact='$edit_contact'";
    if($results=mysqli_query($conn, $update_sql)){
        header('location:view.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<body>
<div class="container">
        <h2>PHP CRUD Operation</h2>
        <form action="edit.php" method="post">
            <h2>Edit new record (Update)</h2>
            
            <div class="col-md-4 my-5">
                    <?php
                    if(isset($_GET['editid'])){
                        $select_sql="SELECT * FROM crud1 WHERE id='$_GET[editid]'";
                        if($results=mysqli_query($conn, $select_sql)){
                            while($rows=mysqli_fetch_assoc($results)){
                                $id=$rows['id'];
                                $firstname=$rows['firstname'];
                                $middlename=$rows['middlename'];
                                $surname=$rows['surname'];
                                $email=$rows['email'];
                                $contact=$rows['contact'];
                            }
                        }
                    }
                    ?>
                    <div class="form-group" class="col-md-4">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" value="<?php echo $firstname ?>" name="edit_firstname">
                    </div>

                    <div class="form-group">
                        <label for="middlename" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" value="<?php echo $middlename ?>" name="edit_middlename">
                    </div>
                    
                    <div class="form-group">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" class="form-control" value="<?php echo $surname ?>" name="edit_surname">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" value="<?php echo $email ?>" name="edit_email">
                    </div>

                    <div class="form-group">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="number" class="form-control" value="<?php echo $contact ?>" name="edit_contact">
                    </div>

                    
                        <br>
                        
                        <input type="submit"  value="Update" name="edit_submit" class="btn btn-primary">
                   
                    

                </form>
            </div>
    </div>
</body>
</html>