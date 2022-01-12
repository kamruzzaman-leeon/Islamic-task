<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile edit</title>
    <!-- header part start-->
    <?php include 'header.php'; ?>
    <!-- header part end -->
</head>
<?php if (!empty($_SESSION)) : ?>

    <body>
        <div>
            <?php
            $error = array();
            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $fnameErr = $usernameErr = $emailErr = "";
            if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                $useradmin = $_SESSION['useradmin'];
                $sql = "SELECT `fname` FROM `user` WHERE `username`='$useradmin' OR `email`='$useradmin'";
            } elseif (isset($_SESSION['client']) && $_SESSION['client'] == true) {
                $userclient = $_SESSION['userclient'];
                $sql = "SELECT `fname` FROM `user` WHERE `username`='$userclient' OR `email`='$userclient'";
            }

            $result = $conn->query($sql);

            $result_fetch = $result->fetch_assoc();
            $fname = $result_fetch['fname'];
            // $username = $result_fetch['username'];
            // $email = $result_fetch['email'];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {


                echo $fname;

                $fname = test_input($_POST['fname']);
                if (!preg_match("/^[a-zA-Z ]{3,40}$/i", $fname)) {
                    $fnameErr = "<div class='text-danger'>Username must be 3-40 alphabetic character long</div>";
                    $error[] = $fnameErr;
                }


                // username validation

                // $username = test_input($_POST['username']);
                // if (!preg_match("/^[a-zA-Z0-9 ]{5,40}$/i", $username)) {
                //     $usernameErr = "<div class='text-danger'>Username must be 5-30 digit and alphabetic character long</div>";
                //     $error[] = $usernameErr;
                // }


                // // email validation


                // $email = test_input($_POST["email"]);

                // if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
                //     $emailErr = "<div class='text-danger'>Invalid email.</div>";
                //     $error[] = $emailErr;
                // }

                if (count($error) === 0) {
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                        $useradmin = $_SESSION['useradmin'];
                        $sql = "UPDATE `user` SET `fname`='$fname'  WHERE `username`='$useradmin' OR `email`='$useradmin'";
                    } elseif (isset($_SESSION['client']) && $_SESSION['client'] == true) {
                        $userclient = $_SESSION['userclient'];
                        $sql = "UPDATE `user` SET `fname`='$fname' WHERE `username`='$userclient' OR `email`='$userclient'";
                    }
                    
                }
                $out=$conn->query($sql);
                if($out){
                    
                    echo"<script>
                    alert('Successfully Profile update!');
                    
                     window.location.href='profile.php';
                    </script>";
                }
                $conn->close();
            }

            ?>
            <center>
                <!-- changing password data -->
                <br>
                <div class="container Shadow-lg p-1  mb-2 bg-white rounded " style="width: 55vh;">

                    <div class="card shadow">
                        <div class="card-header bg-warning text-center  p-4">
                            <h3 class="card-title text-uppercase ">
                                <?php
                                // if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                                //     echo $_SESSION['useradmin'] . " ";
                                // } elseif (isset($_SESSION['client'])) {
                                //     echo $_SESSION['userclient'] . " ";
                                // } 
                                ?>
                                Profile update
                            </h3>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="editform">


                            <div class="card-body shadow text-right text-start">
                                <div class="form-group py-3 ">
                                    <label for="fname">Full name</label>
                                    <input type="text" name="fname" class="form-control" placeholder="Full Name" aria-describedby="nameHelp" value="<?php echo $fname; ?>">
                                    <small id="nameHelp" class="form-text text-muted "> Name must be 3-40 character
                                        long.</small>
                                    <?php echo $fnameErr; ?>
                                </div>

                                <!-- <div class="form-group py-3">
                                    <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="usernameHelp" value="<?php // echo $username; ?>">
                                    <small id="usernameHelp" class="form-text text-muted"> Username must be 5-30
                                        character long.
                                    </small>

                                    <?php // echo $usernameErr; ?>

                                </div>
                                <div class="form-group py-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email" aria-describedby="emailHelp" value="<?php // echo $email; ?>">
                                    <small id="emailHelp" class="form-text text-muted">Email must be in valid
                                        format.</small>

                                    <?php// echo $emailErr; ?>

                                </div> -->


                            </div>
                            <div class="card-footer bg-warning text-end p-3">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-primary" onclick="editclickForm()">Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </center>
        </div>



    </body>

<?php else :
    echo "<script>
alert('Please login First.Login required!');
window.location.href = 'login.php';
</script>";


endif ?>
<?php include 'footer.php' ?>

</html>
<script>
    function changesubmitForm() {
        document.editForm.submit();
        document.editForm.reset();
    }
</script>