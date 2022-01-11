<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['hadithBookName']; ?> </title>
   
    <!-- header part start-->
    <?php include 'header.php';?>
    <!-- header part end -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="colorchange"><i class="fas fa-angle-double-up"></i></span></button>
</head>
<body>
    <div>
        <br>
        <div class="container shadow-lg p-3  mb-2 bg-white rounded">
            <div class=" topic-heading"><?php echo $_GET['hadithBookName']; ?></div>
            <hr class="bold">
        </div>
         <div class="container shadow-lg p-3  mb-2 bg-white rounded">
            <div class="container shadow-lg p-3  mb-2 bg-success text-white rounded fw-bolder text-center">হাদিস অধ্যায় সমূহের তালিকা
                (List of hadith chapters)
            </div>
            <?php 
                $getBookKey= $_GET['bookKey'];
                $ch = curl_init();
                $url_chapter = "https://alquranbd.com/api/hadith/{$getBookKey}";
                curl_setopt($ch,CURLOPT_URL,$url_chapter);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER,true );
            
                $resp =curl_exec($ch);
            
                if($e = curl_error($ch)){
                    echo $e;
                }
                else{
                    
                    $chapters = json_decode($resp,true);
                    
                }
                curl_close($ch);
                 
            
            ?>

            <div class="box box-primary">
                <div class="box-body no-padding">
                    <table class="table table-striped table-hover">
                        <tbody>
                        <tr class=" bg-warning ">
                            <th colspan="2"class="text-center">অধ্যায়ের নাম</th>
                            <th>শুরু-শেষ</span></th>
                            <th>হাদিস সংখ্যা</th>
                            <th>পদক্ষেপ</th>
                        </tr>
                        <?php
                         for($i=0;$i<count($chapters);$i++): 
                            $chapter=$chapters[$i];
                        ?>
                        <tr> 
                            <td><?php echo $chapter['nameBengali']; ?></td>
                            <td><?php echo $chapter['nameEnglish']; ?></td>
                            <td><?php echo $chapter['range_start'] .'-' . $chapter['range_end']; ?></td>
                            <td><?php echo $chapter['hadith_number']; ?></td>
                            <td><a href="hadithPage.php?hadithBookKey=<?php echo $getBookKey;?>&hadithChapter=<?php echo $chapter['chSerial']?>&ChapterName=<?php echo $chapter['nameBengali']?>"  class="btn btn-primary bn">দেখতে চাই</a></td>
                        </tr>
                        <?php endfor ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            
    </div>
<?php include 'footer.php';?>
</body>
</html>