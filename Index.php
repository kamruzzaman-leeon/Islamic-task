<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- header part start-->
    <?php include 'header.php'; ?>
    <!-- header part end -->
    <title>islamic-task | Home</title>
</head>

<body>
    <br>
    <div>
    <?php if(isset($_SESSION['admin']) && $_SESSION['admin']==true): include 'adminindex.php';?>
       
    <?php else: ?>
        <!-- carousel start -->
        <section>
            <div class="container main  p-1 mb-1 bg-white rounded">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/carousel/11.jpg" class="d-block w-100" alt="kalemataiyeba">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>লা ইলাহা ইল্লাল্লাহ</h4>
                                <p>"আল্লাহ ছাড়া কোনো সত্য মাবুদ বা উপাস্য নেই।"</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="image/carousel/12.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>লাইলাতুল কদরের দোয়া</h4>
                                <p class="bn">‘আল্লাহুম্মা ইন্নাকা আফুয়্যুন; তুহিব্বুল আফওয়া; ফাফু আন্নি।’</p>
                                <p class="bn">অর্থ : হে আল্লাহ! আপনি ক্ষমাশীল; ক্ষমা করতে ভালোবাসেন; অতএব আমাকে ক্ষমা
                                    করে দিন।<br> (মুসনাদে আহমাদ, ইবনে মাজাহ, তিরমিজি, মিশকাত)</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="image/carousel/13.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>আল্লাহ তায়ালা ইরশাদ ফরমান </h4>
                                <p class="bn">হে নবী আপনি বলে দিন, যে ব্যক্তি (কুরআন-সুন্নাহ তথা শরীয়াতের বিধান) জানে আর
                                    যে জানে না, তারা কি উভয়ে সমান গতে পারে? তার মানে কখনই সমান হতে পারে না।</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </section>
        <!-- ./caousel end-->
        <br>
        <!-- embed video start -->
        <div class="container  text-justify  bg-white rounded">
            <div class="row shadow ">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card no-border ">
                       <div class="card-body">
                            <div class="iframe-container">
                                <iframe width="620" height="420" src="https://www.youtube.com/embed/wLJpvvcchOI?autoplay=1&mute=1"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card no-border">
                        <div class="card-body ">
                            <h5 class="card-title fw-bolder bn">কুরআন হাদিসের আলোকে জ্ঞান অর্জনের গুরুত্ব</h5>
                            <p class="card-text justifysentence">বিশ্বজাহানের প্রতিপালক মহান আল্লাহ সুবহানাহু ওয়া তায়ালা মানব জাতিকে
                                তাদের পার্থিব জীবনে সঠিক পথনির্দেশনা প্রদানের লক্ষ্যে যুগে যুগে অসংখ্য নাবী-রাসূল প্রেরণ
                                করেছেন। প্রেরিত পুরুষ নাবী-রাসূলদের নিকট আল্লাহ তাআ'লা হেদায়েতের যে বাণী পাঠিয়েছেন তাকে
                                বলা হয় ওহী। যুগে যুগে প্রেরিত নাবী-রাসূলদের মধ্য থেকে সর্বশেষ ও সর্বশ্রেষ্ঠ নাবী এবং
                                রাসূল হলেন বিশ্বনাবী মুহাম্মাদুর রাসূলুল্লাহ সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম। তাঁর উপর
                                অবতারিত কিতাব কুরআনূল কারীম গোটা মানবজাতির জন্য পূর্ণাঙ্গ জীবন বিধান। আর রাসূলে কারীম
                                সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম এর যবান নি:সৃত বাণীকে বলা হয় সুন্নাহ বা হাদীস। ওহী বলতে
                                কুরআন ও সুন্নাহ দু'টোকেই বুঝানো হয়ে থাকে। কুরআন ও সুন্নাহর অনুসরণের মধ্যেই নিহিত রয়েছে
                                মানব জাতির জন্য দুনিয়া ও আখিরাতে কল্যাণ, মুক্তি ও সফলতা। তাই কুরআন-সূন্নাহর জ্ঞান অর্জন
                                করা প্রতিটি মুসলিম নর-নারীর উপর ফরজ করে দেওয়া হয়েছে। কারণ, একমাত্র ওহীভিত্তিক
                                জ্ঞানার্জনের মাধ্যমেই ইসলামী শরীয়ার হালাল-হারাম, করনীয় ও বর্জনীয় বিষয় জানা সম্ভব হতে
                                পারে। কোন পথে চললে আমাদের জন্য রয়েছে কল্যাণ ও সফলতা, আর কোন পথে রয়েছে ব্যর্থতা এবং
                                আল্লাহর পক্ষ থেকে নির্ধারিত রয়েছে শাস্তি ও লাঞ্চনা, তা সুস্পষ্টরূপে বর্ণিত হয়েছে। অতএব
                                দুনিয়া ও আখিরাতে শান্তি ও মুক্তি পেতে হলে কুরআন-সুন্নাহর অনুসরণের বিকল্প কোন পথ নেই। আর
                                কুরআন-সুন্নাহর অনুসরণ কুরতে হলে উহার জ্ঞান অর্জন করতে হবে। তাই কুরআন-সুন্নাহর আলোকে
                                দ্বীনী ইলম শিক্ষার গুরুত্ব ও ফজিলাত সম্পর্কে আলোকপাত করার চেষ্টা করবো ইনশাআল্লাহ।
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- embed video end -->
    <?php endif;?>
        <br>

        
       

    </div>
    <?php include 'footer.php';?>
</body>

</html>