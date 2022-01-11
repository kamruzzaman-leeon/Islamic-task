<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <?php include 'header.php'; ?>
</head>

<body>
    <?php

    
    $error = array();
    $fnameErr = $usernameErr = $emailErr = $passwordErr = $confirmpasswordErr =$usertypeErr= "";
    $fname = $username = $email = $password = $confirmpassword = $usertype = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // full name validation
        if (empty($_POST['fname'])) {
            $fnameErr = "<div class='text-danger'>Name is required!</div>";
            $error[] = $fnameErr;
        } else {
            $fname = test_input($_POST['fname']);
            if (!preg_match("/^[a-zA-Z ]{3,40}$/i", $fname)) {
                $fnameErr = "<div class='text-danger'>Username must be 3-40 alphabetic character long</div>";
                $error[] = $fnameErr;
            }
        }

        // username validation
        if (empty($_POST['username'])) {
            $usernameErr = "<div class='text-danger'>Username is required!";
            $error[] = $usernameErr;
        } else {
            $username = test_input($_POST['username']);
            if (!preg_match("/^[a-zA-Z0-9 ]{5,40}$/i", $username)) {
                $usernameErr = "<div class='text-danger'>Username must be 5-30 digit and alphabetic character long</div>";
                $error[] = $usernameErr;
            }
        }

        // email validation

        if (empty($_POST["email"])) {
            $emailErr = "<div class='text-danger'>Email is required</div>";
            $error[] = $emailErr;
        } else {
            $email = test_input($_POST["email"]);

            if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
                $emailErr = "<div class='text-danger'>Invalid email.</div>";
                $error[] = $emailErr;
            }
        }

        //password validation with recheck
        if (empty($_POST["password"])) {
            $passwordErr = "<div class='text-danger'>Password is required</div>";
            $error[] = $passwordErr;
        } else {
            $password = test_input($_POST["password"]);
            if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/", $_POST["password"])) {
                $passwordErr = "<div class='text-danger'> Minimum of eight and
          a maximum of 10 characters, at least one uppercase letter, one lowercase letter, one
          number, and one special character!</div>";
                $error[] = $passwordErr;
            }
        }
        if (empty($_POST["confirmpassword"])) {
            $confirmpasswordErr = "<div class='text-danger'>Password is required</div>";
            $error[] = $confirmpasswordErr;
        } else {
            $confirmpassword = test_input($_POST["confirmpassword"]);
            if ($password != $confirmpassword) {
                $passwordErr = $confirmpasswordErr = "<div class='text-danger'>Password not matched</div>";
                $error[] = $confirmpasswordErr;
            }
        }

       

        if (isset($_POST['usertype'])) {
            $usertype = test_input($_POST['usertype']);
        } else{
            $usertypeErr="<div class='text-danger'>please select the correct user type</div>";
        }


        // database insert
        if (count($error) === 0) {

            require('db.php');

            if (!$conn) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $createdate=date("Y-m-d H:i:s");

            $exist_user ="SELECT * FROM user where `username`= '$username' OR `email` = '$email'";
            $exist = mysqli_query($conn,$exist_user);
            if($exist)
            {
                if(mysqli_num_rows($exist)>0){
                    $result_fetch=mysqli_fetch_assoc($exist);
                    if($result_fetch['username']==$username){
                        echo"
                        <script>
                        alert('$result_fetch[username] - Username already taken!');
                        window.location.href='registration.php';
                        </script>";
                    }
                    else{
                        echo"
                        <script>
                        alert('$result_fetch[email] - Email already taken');
                        window.location.href='registration.php';
                        </script>";
                    }
                }
            
                else{
                    $password=password_hash($password,PASSWORD_DEFAULT);

                    $sql = "INSERT INTO `user` (`fname`, `username`, `email`,`password`, `usertype`,`createdate`) VALUES ('$fname','$username','$email','$password','$usertype','$createdate')";

                    if (mysqli_query($conn, $sql)) {

                        echo 
                        "<script>
                        alert('Registration Successfully Complete!');
                        window.location.href='login.php';
                        </script>";

                    } 
                    else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
                }
                mysqli_close($conn);
            }                   
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
    <div class=" p-4 ">
        <center>
            <div class=" Shadow-lg p-1  mb-2 bg-info rounded" style="width: 55vh">

                <div class="card shadow">
                    <div class="card-content shadow">
                        <div class="card-header bg-warning text-center  p-4">
                            <h3 class="card-title text-uppercase" id="regcardLabel ">Registration | রেজিস্ট্রেশন </h3>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="reg_form">

                            <div class="card-body shadow text-right text-start">
                                <div class="form-group py-3 ">
                                    <input type="text" name="fname" class="form-control" placeholder="Full Name"
                                        aria-describedby="nameHelp" required>
                                    <small id="nameHelp" class="form-text text-muted "> Name must be 3-40 character
                                        long.</small>
                                    <?php echo $fnameErr; ?>
                                </div>

                                <div class="form-group py-3">
                                    <input type="text" name="username" class="form-control" placeholder="Username"
                                        aria-describedby="usernameHelp" required>
                                    <small id="usernameHelp" class="form-text text-muted"> Username must be 5-30
                                        character long.
                                    </small>

                                    <?php echo $usernameErr; ?>

                                </div>

                                <div class="form-group py-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        aria-describedby="emailHelp" required>
                                    <small id="emailHelp" class="form-text text-muted">Email must be in valid
                                        format.</small>

                                    <?php echo $emailErr; ?>

                                </div>

                                <div class="form-group py-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        aria-describedby="passHelp" required>
                                    <small id="passHelp" class="form-text text-muted">Password should be a minimum of
                                        eight and
                                        a maximum of 10 characters, at least one uppercase letter, one lowercase letter,
                                        one
                                        number, and one special character.</small>

                                    <?php echo $passwordErr; ?>

                                </div>

                                <div class="form-group py-3">
                                    <input type="password" name="confirmpassword" class="form-control"
                                        placeholder="Confirm Password" aria-describedby="CpassHelp" required>
                                    <small id="CpassHelp" class="form-text text-muted"> Retype password</small>

                                    <?php echo $confirmpasswordErr; ?>

                                </div>

                                <div class="form-group py-3">
                                    <select class="form-select" name="usertype" aria-describedby="utHelp" required>
                                        <option selected>User type</option>
                                        <option value="admin">Admin</option>
                                        <option value="client">Client</option>
                                    </select>
                                    <small id="utHelp" class="form-text text-muted"> Select the user type
                                        Admin/Client</small>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer bg-warning text-end p-3">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary"  onclick="submitForm()">Registration</button>
                    </div>
                </div>
                </form>
            </div>
    </div>
    </div>


    </div>
    </center>
</body>

<?php include 'footer.php'; ?>

</html>
<script>
    function submitForm(){
        document.reg_form.submit();
        document.reg_form.reset();
    }
</script>