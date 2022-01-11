<?php 
if(!empty($_POST['optout']))
{
    
    setcookie('logininfo',"",time()-30*30*24*30);
    setcookie('loginpassword',"",time()-30*30*24*30);
    echo 
    "<script>
    alert('Cookie successfully Removed!');
    window.location.href='profile.php';
    </script>";
    
}

