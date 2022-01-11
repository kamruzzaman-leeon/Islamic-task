<?php if(isset($_SESSION['admin']) && $_SESSION['admin']==true):?>

<center>

    <div class="container Shadow-lg p-1  mb-2 bg-white rounded">

        <div class="card shadow">
            <div class="card-header bg-warning text-center  p-4">
                <h3 class="card-title text-uppercase ">User Information </h3>
            </div>
            <div class="card-body">
                <?php 
                    $i=1;
                    $sql ="SELECT `fname`, `username`, `email`, `usertype`, `createdate` FROM `user`";
                    if($result = $conn->query($sql)):
                        if($result->num_rows > 0):        
                ?>
                <div class="box box-primary">
                    <div class="box-body no-padding">
                        <table class="table table-striped table-hover">

                            <tr class = "bg-dark text-white">
                                <th class = "text-white">#</th>
                                <th class = "text-white">Full name</th>
                                <th class = "text-white">Username</th>
                                <th class = "text-white">Email</th>
                                <th class = "text-white">User type</th>
                                <th class = "text-white">Create date</th>
                            </tr>
                            <?php while($row=$result->fetch_assoc()):?>
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td><?php echo $row['fname'];?></td>
                                <td><?php echo $row['username'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['usertype'];?></td>
                                <td><?php echo $row['createdate'];?></td>
                            </tr>
                            <?php endwhile?>
                        </table>
                    </div>
                </div>
                <?php endif; endif;$conn->close();?>

            </div>
        </div>
    </div>
</center>

<?php else:
            echo"<script>
            alert('Admin Section!Please login as a Admin or check another page.Thank you.');
            window.location.href='index.php';
            </script>"; 
            

        endif?>