
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['ChapterName']; ?></title>
   
    <!-- header part start-->
    <?php include 'header.php'?>
    <!-- header part end -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="colorchange"><i
                class="fas fa-angle-double-up"></i></span></button>
</head>

<body>

    <div>
        <br>

        <div class="container shadow-lg p-3  mb-2 bg-white rounded">
            <div class=" topic-heading"><?php echo $_GET['ChapterName']; ?></div>
            <hr class="bold">
        </div>


        <div class="container shadow-lg p-3  mb-2 bg-white rounded">
            <div class="container shadow-lg p-3  mb-2 bg-warning rounded fw-bolder text-center">
                <div class=" text-center">
                    হাদিস সমূহের তালিকা (List of hadith)
                </div>
            </div>
            <?php 
                $gethadithBookKey= $_GET['hadithBookKey'];
                $gethadithChapter=$_GET['hadithChapter'];
                $ch = curl_init();
                $url_page = "https://alquranbd.com/api/hadith/{$gethadithBookKey}/{$gethadithChapter}";
                curl_setopt($ch,CURLOPT_URL,$url_page);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER,true );
            
                $resp =curl_exec($ch);
            
                if($e = curl_error($ch)){
                    echo $e;
                }
                else{
                    
                    $pages = json_decode($resp,true);
                    
                }
                curl_close($ch); 
            ?>
            <div class="row">
                <?php for($i=0;$i<count($pages);$i++): 
                    $hadithpage=$pages[$i];
                ?>

                <div class=" col-lg-4 col-md-6 col-sm-12 d-flex ">

                    <div class="shadow card flex-fill m-2 p-2">
                        <div class="card-body  ">
                            <h5 class="card-title bn justifysentence"><?php echo $hadithpage['topicName'];?></h5>
                            <p class="card-text fw-bold">
                                <?php echo $hadithpage['rabiNameBn'].' '.$hadithpage['rabiNameEn'] ;?></p>
                            <p class="card-text"> <?php echo" হাদিস নংঃ ".$hadithpage['hadithNo']; ?></p>
                        </div>
                        <div class="card-footer">
                            <!-- .card-footer -->
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop-<?php echo $i;?>">দেখতে চাই</button>


                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop-<?php echo $i;?>" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content p-2 m-2">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">
                                                <p class="bn fw-bold">
                                                    <?php echo $hadithpage['topicName']. ' - '.$hadithpage['rabiNameBn'];?>
                                                </p>
                                                <p class="text-muted"> <?php echo" হাদিস নংঃ ".$hadithpage['hadithNo']; ?></p>

                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="ar"><?php echo $hadithpage['hadithArabic'];?></p>
                                            <hr>
                                            <p class="bn justifysentence"><?php echo $hadithpage['hadithBengali'];?></p>
                                            <hr>
                                            <p class="bn justifysentence"><?php echo $hadithpage['hadithEnglish'];?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .card-footer -->
                    </div>


                </div>
                <?php endfor ?>

            </div>

        </div>

    </div>
    <?php include 'footer.php';?>
</body>

</html>