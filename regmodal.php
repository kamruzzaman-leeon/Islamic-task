<!-- Modal -->
<div class="modal fade" id="regmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="regmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-uppercase" id="regmodalLabel">Registration | রেজিস্ট্রেশন </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="needs-validation">
                <div class="modal-body ">
                    <div class="card-body">
                        <div class="form-group py-3">
                            <input type="text" name="fname" class="form-control" placeholder="Full Name" aria-describedby="nameHelp" required>
                            <small id="nameHelp" class="form-text text-muted"> Name must be 3-40 character long.</small>
                            <div class="invalid-feedback">
                                <?php echo $fnameErr;?>
                            </div>
                        </div>

                        <div class="form-group py-3">
                            <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="usernameHelp" required>
                            <small id="usernameHelp" class="form-text text-muted"> Username must be 5-30 character long.
                            </small>
                            <div class="invalid-feedback">
                            <?php echo $usernameErr;?>
                            </div>
                        </div>

                        <div class="form-group py-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" aria-describedby="emailHelp" required>
                            <small id="emailHelp" class="form-text text-muted">Email must be in valid format.</small>
                            <div class="invalid-feedback">
                            <?php echo $emailErr;?>
                            </div>
                        </div>

                        <div class="form-group py-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="passHelp" required>
                            <small id="passHelp" class="form-text text-muted">Password should be a minimum of eight and
                                a maximum of 10 characters, at least one uppercase letter, one lowercase letter, one
                                number, and one special character.</small>
                            <div class="invalid-feedback">
                            <?php echo $passwordErr;?>
                            </div>
                        </div>

                        <div class="form-group py-3">
                            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" aria-describedby="CpassHelp" required>
                            <small id="CpassHelp" class="form-text text-muted"> Retype password</small>
                            <div class="invalid-feedback">
                            <?php echo $confirmpasswordErr;?>
                            </div>
                        </div>

                        <div class="form-group py-3">
                            <select class="form-select" name="usertype" aria-describedby="utHelp" required>
                                <option selected>User type</option>
                                <option value="admin">Admin</option>
                                <option value="client">Client</option>
                            </select>
                            <small id="utHelp" class="form-text text-muted"> Select the user type Admin/Client</small>
                        </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Registration</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php

require('db.php');
$error = array();
$fnameErr = $usernameErr = $emailErr = $passwordErr = $confirmpasswordErr = "";
$fname = $username = $email = $password = $confirmpassword = $usertype = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // full name validation
    if (empty($_POST['fname'])) {
        $fnameErr = "Name is required!";
        $error[] = $fnameErr;
    } else {
        $fname = test_input($_POST['fname']);
        if (!preg_match("/^[a-zA-Z ]{3,40}$/i", $fname)) {
            $nameErr = "Username must be 3-40 alphabetic character long";
            $error[] = $nameErr;
        }
    }

    // username validation
    if (empty($_POST['username'])) {
        $usernameErr = "Username is required!";
        $error[] = $usernameErr;
    } else {
        $username = test_input($_POST['username']);
        if (!preg_match("/^[a-zA-Z ]{5,40}$/i", $username)) {
            $usernameErr = "Username must be 5-30 alphabetic character long";
            $error[] = $usernameErr;
        }
    }

    // email validation

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $error[] = $emailErr;
    } else {
        $email = test_input($_POST["email"]);

        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
            $emailErr = "Invalid email.";
            $error[] = $emailErr;
        }
    }

    //password validation with recheck
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $error[] = $passwordErr;
    } else {
        $password = test_input($_POST["password"]);
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/", $_POST["password"])) {
            $passwordErr = " Minimum of eight and
          a maximum of 10 characters, at least one uppercase letter, one lowercase letter, one
          number, and one special character!";
            $error[] = $passwordErr;
        }
    }
    if (empty($_POST["confirmPassword"])) {
        $confirmpasswordErr = "Password is required";
        $error[] = $confirmpasswordErr;
    } else {
        $confirmpassword = test_input($_POST["confirmPassword"]);
        if ($password != $confirmpassword) {
            $passwordErr = $confirmpasswordErr = "Password not matched";
            $error[] = $confirmpasswordErr;
        }
    }

    $usertype = test_input($_POST['usertype']);
    $created_date = date("Y-m-d H:i:s");
    
    // database insert
    if (count($error)===0) {
      
        require('db.php');
  
        if (!$conn) {
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }
  
  
        $sql = "INSERT INTO `user`(`fname`, `username`, `email`,`password`, `usertype`,`created_date`) VALUES ('$fname','$username','$email','$password','$usertype','$created_date')";
        
        print_r($sql);
  
        if (mysqli_query($conn, $sql)) {
            
            
            echo "hello";
          
          header('location:index.php');
        } else {
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
  
        mysqli_close($conn);
      }
    
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>