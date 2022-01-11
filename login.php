<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <?php include 'header.php'; ?>
    
</head>

<body>
    <?php
        // include 'session.php';

        $invalid="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $sessionuser=mysqli_real_escape_string($conn,$_POST['logininfo']);
            $sessionpassword=mysqli_real_escape_string($conn,$_POST['loginpassword']);
        
            if(isset($_POST['rememberme'])){
                setcookie("logininfo",$sessionuser,time()+60*60*24*30);
                setcookie("loginpassword",$sessionpassword,time()+60*60*24*30);
            }
            
            $sql="SELECT * FROM user where `username` = '$sessionuser' OR `email` ='$sessionuser'";
            $result=mysqli_query($conn,$sql);
            if($result){
                if(mysqli_num_rows($result)>0){
                    $result_fetch=mysqli_fetch_assoc($result);
                    if(password_verify($sessionpassword,$result_fetch['password'])){
                        if($result_fetch['usertype']=='admin'){
                            $_SESSION['admin']=true;
                            $_SESSION['useradmin']=$sessionuser;
                            header('location:index.php');
                            exit;
   
                        }
                        else{
                            $_SESSION['client']=true;
                            $_SESSION['userclient']=$sessionuser;
                            header('location:index.php');
                            exit;
                            
                        }
                    }
                    else{
                        $invalid='<div class="text-danger">Invalid Password</div>';
                    }
                }
                else{
                    $invalid='<div class="text-danger">UserName OR Email not found!</div>';
                }
            }
        }
        
    ?>
    <div class=" p-4 ">
        <center>
            <div class=" Shadow-lg p-1  mb-2 bg-info rounded" style="width: 50vh">

                <div class="shadow card ">
                    <div class="card-content shadow">
                        <div class=" card-header bg-warning text-center  p-4">
                            <h3 class="card-title text-uppercase" id="logincardLabel ">Login | লগইন </h3>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="login_form">

                            <div class="card-body shadow text-right text-start">
                                <div class="form-group py-2 ">
                                    <input type="text" name="logininfo" value="<?php if(isset($_COOKIE['logininfo'])) echo $_COOKIE['logininfo']; ?>" class="form-control" placeholder="Username OR Email" required>

                                   
                                </div>

                                <div class="form-group py-2">
                                    <input type="password" name="loginpassword" value="<?php if(isset($_COOKIE['loginpassword'])) echo $_COOKIE['loginpassword']; ?>" class="form-control" placeholder="Password" required>
                                </div>
                
                                <div class="form-group form-check ">
                                    <input type="checkbox" class="form-check-input" value="<?php if(isset($_COOKIE['logininfo']) && isset($_COOKIE['loginpassword'])) echo "checked" ;?>" name="rememberme">
                                    <label class="form-check-label">Remember Me<span class="text-muted"> [30 days]</span> </label>
                                </div>
                            </div>
                            <?php echo $invalid;?>
                            <div class="shadow card-footer bg-warning text-end p-3">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-primary" onclick="submitForm()">Login</button>
                            </div>
               
                        </form>
                    </div>
                </div>
            </div>
        </center>
    </div>
</body>

<?php include 'footer.php'; ?>

</html>
<script>
    function submitForm(){
        document.reg_form.submit();
        document.reg_form.reset();
    }
</script>