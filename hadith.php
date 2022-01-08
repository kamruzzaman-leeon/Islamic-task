<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'header.php' ?>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="colorchange"><i class="fas fa-angle-double-up"></i></span></button>
    <title> হাদিস </title>
</head>

<body>
    <div>
        <br>
        <div class="container shadow-lg p-3  mb-2 bg-white rounded">
            <div class=" topic-heading">হাদিস</div>
            <hr class="bold">
        </div>
        <!-- surah select & search part start -->
        <div class="container shadow-lg p-3  mb-2 bg-white rounded">
            <div class="container shadow-lg p-3  mb-2 bg-white rounded fw-bolder text-center">হাদিস গ্রন্থসমূহের তালিকা
                (List of hadith books)</div>
            <?php 
                $ch = curl_init();
                $url_hadith = "https://alquranbd.com/api/hadith";
                curl_setopt($ch,CURLOPT_URL,$url_hadith);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER,true );
            
                $resp =curl_exec($ch);
            
                if($e = curl_error($ch)){
                    echo $e;
                }
                else{
                    
                    $hadiths = json_decode($resp,true);
                }
                curl_close($ch);
                 
            
            ?>
            <div class="row">
                <?php for($i=0;$i<count($hadiths);$i++): 
                    $hadithbook=$hadiths[$i];
                    if(!empty($hadithbook['book_key'])){
                    ?>

                <div class=" col-lg-4 col-md-6 col-sm-12 ">
                   
                    <div class=" shadow card m-2 p-2">
                        <div class="card-body">
                            <h5 class="card-title bn"><?php echo $hadithbook['nameBengali'];?></h5>
                            <p class="card-text fw-bold"><?php echo $hadithbook['nameEnglish'];?></p>
                            <p class="card-text"> <?php echo" অধ্যায় সংখ্যাঃ ".$hadithbook['section_number'] ?> </p>
                            <p class="card-text"> <?php echo" হাদিস সংখ্যাঃ ".$hadithbook['hadith_number'] ?> </p>
                            <p class="card-text"> <?php echo" পরিচিতিঃ ".$hadithbook['book_key'] ?> </p>
                            
                            <a href="hadithChapter.php?bookKey=<?php echo $hadithbook['book_key'];?>&hadithBookName=<?php echo $hadithbook['nameBengali'];?> " class="btn btn-outline-success bn">দেখতে চাই</a>
                            
                        </div>
                    </div>
                </div>
                <?php  } ;?>
                <?php endfor ?>
                
            </div>
        </div>
    </div>
    <?php include'footer.php'?>
</body>

</html>