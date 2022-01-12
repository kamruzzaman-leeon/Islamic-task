<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <!-- header part start-->
    <?php include 'header.php'; ?>
    <!-- header part end -->
</head>

<body>
    <div>
        <?php if (!empty($_SESSION)) : ?>

        <center>
            <!-- register data -->
            <div class="container Shadow-lg p-1  mb-2 bg-white rounded">

                <div class="card shadow">
                    <div class="card-header bg-warning text-center  p-4">
                        <h3 class="card-title text-uppercase ">
                            <?php
                                if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                                    echo $_SESSION['useradmin'] . " ";
                                } elseif (isset($_SESSION['client'])) {
                                    echo $_SESSION['userclient'] . " ";
                                } ?>
                            Information
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php

                            if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                                $useradmin = $_SESSION['useradmin'];
                                $sql = "SELECT `fname`, `username`, `email`, `usertype`, `createdate` FROM `user` WHERE `username`='$useradmin' OR `email`='$useradmin'";
                            } elseif (isset($_SESSION['client']) && $_SESSION['client'] == true) {
                                $userclient = $_SESSION['userclient'];
                                $sql = "SELECT `fname`, `username`, `email`, `usertype`, `createdate` FROM `user` WHERE `username`='$userclient' OR `email`='$userclient'";
                            }
                            if ($result = $conn->query($sql)) :
                                if ($result->num_rows > 0) :
                            ?>
                        <div class="box box-primary">
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">

                                        <tr class="bg-dark text-white">

                                            <th class="text-white">Full name</th>
                                            <th class="text-white">Username</th>
                                            <th class="text-white">Email</th>
                                            <th class="text-white">User type</th>
                                            <th class="text-white">Create date</th>
                                            <th class="text-white">Action</th>
                                        </tr>
                                        <?php while ($row = $result->fetch_assoc()) : ?>
                                        <tr>

                                            <td><?php echo $row['fname']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td class="text-muted"><?php echo $row['usertype']; ?></td>
                                            <td class="text-muted"><?php echo $row['createdate']; ?></td>
                                            <td> <a href="profileedit.php">Edit</a>
                                        </tr>
                                        <?php endwhile ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php endif;
                            endif;
                            $conn->close(); ?>

                    </div>
                </div>
            </div>
            <!-- register data end -->

        </center>

        <!-- cookie optout -->
        <?php if (isset($_COOKIE)) : ?>
        <div class="container p-1   mb-2 bg-white rounded ">
            <div class='card '>
                <div class="card-body shadow ">
                    <form action="optout.php" method="post" class="row g-2 ">
                        <div class="col-auto form-check  ">
                            <input type="checkbox" class="form-check-input" name="opt-out" id="optout">
                            <label class="form-check-label">Cookie Opt-out </label>
                        </div>
                        <div class="col-auto">
                            <button type="submit" name="optout" class="btn btn-success" id=optoutsubmit>Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <?php endif ?>

        <!-- password change  -->
        <div class="container p-1   mb-2 bg-white rounded ">

            <for id="changepassword">
                <div class="card">
                    <div class="card-body shadow ">
                
                        <div class="col-auto">
                            <label class="label">Want to password change?</label>
                            <a href="changepassword.php">Yes</a>
                        </div>
                        


                    </div>
                </div>
            </for>
        </div>

    </div>

    <?php else :
            echo "<script>
            alert('Please login First.Login required!');
            window.location.href='login.php';
            </script>";


        endif ?>
    </div>
</body>

</html>
<?php include 'footer.php'; ?>
<script>
$('#optout').change(function() {
    $('#optoutsubmit').prop("disabled", !this.checked);
}).change()

</script>