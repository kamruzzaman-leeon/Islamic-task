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
        <div>
            <?php if(!empty($_SESSION)):?>
                
            <?php else:
            echo"<script>
            alert('Please login First.Login required!');
            window.location.href='login.php';
            </script>"; 
            

        endif?>
        </div>
</body>

</html>