<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password change</title>
    <!-- header part start-->
    <?php include 'header.php'; ?>
    <!-- header part end -->
</head>
<?php if (!empty($_SESSION)) : ?>

    <body>


        <div>
            <?php

            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $oldpasswordErr = $newpasswordErr = $newconfirmpasswordErr = "";
            $oldpassword = $newpassword = $newconfirmpassword = "";
            $error = array();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

            
                $oldpassword = test_input($_POST['oldpassword']);
                
                // if ($conn->connect_error) {
                //     die("ERROR: Could not connect. " . $conn->connect_error);
                // }

                if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                    $useradmin = $_SESSION['useradmin'];
                    $sql = "SELECT `password` FROM `user` WHERE `username`='$useradmin' OR `email`='$useradmin'";
                } elseif (isset($_SESSION['client']) && $_SESSION['client'] == true) {
                    $userclient = $_SESSION['userclient'];
                    $sql = "SELECT `password` FROM `user` WHERE `username`='$userclient' OR `email`='$userclient'";
                }

                $result = $conn->query($sql);
                
                $result_fetch = $result->fetch_assoc();
                $test= $result_fetch['password'];
                // echo $test;
                
                if ((password_verify($oldpassword, $test))==FALSE) {
                    $oldpasswordErr = "<div class='text-danger'>Current password not Correct.<div>";
                    $error[] = $oldpasswordErr;
                }

                if (empty($_POST["newpassword"])) {
                    $newpasswordErr = "<div class='text-danger'>Password is required</div>";
                    $error[] = $newpasswordErr;
                } else {
                    $newpassword = test_input($_POST['newpassword']);
                    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/", $_POST["newpassword"])) {
                        $newpasswordErr = "<div class='text-danger'> Minimum of eight and
                    a maximum of 10 characters, at least one uppercase letter, one lowercase letter, one
                    number, and one special character!</div>";
                        $error[] = $newpasswordErr;
                    }
                }

                if (empty($_POST["newconfirmpassword"])) {
                    $newconfirmpasswordErr = "<div class='text-danger'>Password is required</div>";
                    $error[] = $newconfirmpasswordErr;
                } else {
                    $newconfirmpassword = test_input($_POST["newconfirmpassword"]);
                    if ($newpassword != $newconfirmpassword) {
                        $newpasswordErr = $newconfirmpasswordErr = "<div class='text-danger'>Password not matched</div>";
                        $error[] = $newconfirmpasswordErr;
                    }
                }


                if(count($error)===0){
                    $newpassword=password_hash($newpassword,PASSWORD_DEFAULT);

                    if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                        $useradmin = $_SESSION['useradmin'];
                        $sql = "UPDATE `user` SET `password`='$newpassword'  WHERE `username`='$useradmin' OR `email`='$useradmin'";
                    } elseif (isset($_SESSION['client']) && $_SESSION['client'] == true) {
                        $userclient = $_SESSION['userclient'];
                        $sql = "UPDATE `user` SET `password`='$newpassword' WHERE `username`='$userclient' OR `email`='$userclient'";
                    }
                    $out=$conn->query($sql);

                    if($out){
                        echo"<script>
                        alert('Successfully Password Changed!please login again.');
                        
                         window.location.href='logout.php';
                        </script>";
                    }
                    $conn->close();
                }
               

                // print_r($error);
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
                                if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                                    echo $_SESSION['useradmin'] . " ";
                                } elseif (isset($_SESSION['client'])) {
                                    echo $_SESSION['userclient'] . " ";
                                } ?>
                                Password Change
                            </h3>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="changeP_form">
                            <div class="card-body shadow text-start">

                                <div class="form-group py-3">
                                    <input type="password" name="oldpassword" class="form-control" placeholder="Current Password" aria-describedby="opassHelp" required>
                                    <small id="opassHelp" class="form-text text-muted"> Current password</small>

                                    <?php echo $oldpasswordErr; ?>

                                </div>

                                <div class="form-group py-3">
                                    <input type="password" name="newpassword" class="form-control" placeholder="New Password" aria-describedby="npassHelp" required>
                                    <small id="npassHelp" class="form-text text-muted">Password should be a minimum of
                                        eight and
                                        a maximum of 10 characters, at least one uppercase letter, one lowercase letter,
                                        one
                                        number, and one special character.</small>

                                    <?php echo $newpasswordErr; ?>

                                </div>

                                <div class="form-group py-3">
                                    <input type="password" name="newconfirmpassword" class="form-control" placeholder="Confirm New Password" aria-describedby="nCpassHelp" required>
                                    <small id="nCpassHelp" class="form-text text-muted"> Retype password</small>

                                    <?php echo $newconfirmpasswordErr; ?>

                                </div>
                            </div>
                            <div class="card-footer bg-warning text-end p-3">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-primary" onclick="changesubmitForm()">Change</button>
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
            window.location.href='login.php';
            </script>";


endif ?>
<?php include 'footer.php' ?>

</html>
<script>
    function changesubmitForm() {
        document.changeP_form.submit();
        document.changeP_form.reset();
    }
</script>