<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $firstname=mysqli_real_escape_string($conn, strip_tags($_POST['firstname']));
    $middlename=mysqli_real_escape_string($conn, strip_tags($_POST['middlename']));
    $surname=mysqli_real_escape_string($conn, strip_tags($_POST['surname']));
    $email=mysqli_real_escape_string($conn, strip_tags($_POST['email']));
    $contact=mysqli_real_escape_string($conn, strip_tags($_POST['contact']));

    $insert_sql= "INSERT INTO crud1 (firstname, middlename, surname, email, contact) VALUES ('$firstname', '$middlename', '$surname', '$email', '$contact')";
    if($result= mysqli_query($conn, $insert_sql)){
        echo "Record  Successfully Added";
        header('location:view.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>
<body>
    <div class="container my-5">
        <h2>PHP CRUD Operation</h2>
        <a href="view.php" class="btn btn-success">View Records</a>
        <form action="index.php" method="post">
            <h2>insert new record (Create)</h2>

            
            <div class="col-md-4 ">
                    <div class="form-group" class="col-md-4">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>

                    <div class="form-group">
                        <label for="middlename" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="middlename">
                    </div>
                    
                    <div class="form-group">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" class="form-control" name="surname">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="number" class="form-control" name="contact">
                    </div>

                    <br>
                        <input type="submit"  value="Create" name="submit" class="btn btn-success ">
                        
                        
                   
                    

                </form>
            </div>
    </div>
</body>
</html>