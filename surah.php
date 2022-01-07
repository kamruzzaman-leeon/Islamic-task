<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'header.php' ?>

    <title>islamic-task | Al-Quran</title>
</head>

<body>
    <div>
        <!-- surah select & search part start -->
        <div class="container shadow-lg p-3 mb-2 bg-white rounded">

            <section class="content-header">

                <div class="row">
                    <div class="col-md-6 p-2">
                        <div id="custom-search-input">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                                class="input-group col-md-12">
                                <select class="form-select form-control no-border bn" name="surahno">
                                    <option value="999">সূরা নির্বাচন করুন...</option>
                                    <option value="1">1. আল ফাতিহা</option>
                                    <option value="2">2. আল বাকারা</option>
                                    <option value="3">3. আল ইমরান</option>
                                    <option value="4">4. আন নিসা</option>
                                    <option value="5">5. আল মায়িদাহ</option>
                                    <option value="6">6. আল আনআম</option>
                                    <option value="7">7. আল আ'রাফ</option>
                                    <option value="8">8. আল-আনফাল</option>
                                    <option value="9">9. আত তাওবাহ</option>
                                    <option value="10">10. ইউনুস</option>
                                    <option value="11">11. হুদ</option>
                                    <option value="12">12. ইউসূফ</option>
                                    <option value="13">13. রা'দ</option>
                                    <option value="14">14. ইব্রাহীম</option>
                                    <option value="15">15. হিজর</option>
                                    <option value="16">16. নাহল</option>
                                    <option value="17">17. বনী ইসরাঈল</option>
                                    <option value="18">18. কাহফ</option>
                                    <option value="19">19. মারইয়াম</option>
                                    <option value="20">20. ত্বোয়া-হা</option>
                                    <option value="21">21. আম্বিয়া</option>
                                    <option value="22">22. হাজ্জ্ব</option>
                                    <option value="23">23. আল মু'মিনূন</option>
                                    <option value="24">24. আন-নূর</option>
                                    <option value="25">25. আল-ফুরকান</option>
                                    <option value="26">26. আশ-শো'আরা</option>
                                    <option value="27">27. নমল</option>
                                    <option value="28">28. আল কাসাস</option>
                                    <option value="29">29. আল আনকাবুত</option>
                                    <option value="30">30. আর-রূম</option>
                                    <option value="31">31. লোকমান</option>
                                    <option value="32">32. সেজদাহ</option>
                                    <option value="33">33. আল আহযাব</option>
                                    <option value="34">34. সাবা</option>
                                    <option value="35">35. ফাতির</option>
                                    <option value="36">36. ইয়াসীন</option>
                                    <option value="37">37. আস-সাফফাত</option>
                                    <option value="38">38. ছোয়াদ</option>
                                    <option value="39">39. আল-যুমার</option>
                                    <option value="40">40. আল-মু'মিন</option>
                                    <option value="41">41. হা-মীম সেজদাহ</option>
                                    <option value="42">42. আশ-শুরা</option>
                                    <option value="43">43. যুখরুফ</option>
                                    <option value="44">44. আদ দোখান</option>
                                    <option value="45">45. আল জাসিয়া</option>
                                    <option value="46">46. আল আহক্বাফ</option>
                                    <option value="47">47. মুহাম্মদ</option>
                                    <option value="48">48. আল ফাতহ</option>
                                    <option value="49">49. আল হুজরাত</option>
                                    <option value="50">50. ক্বাফ</option>
                                    <option value="51">51. আয-যারিয়াত</option>
                                    <option value="52">52. আত্ব তূর</option>
                                    <option value="53">53. আন-নাজম</option>
                                    <option value="54">54. আল ক্বামার</option>
                                    <option value="55">55. আর রহমান</option>
                                    <option value="56">56. আল ওয়াক্বিয়া</option>
                                    <option value="57">57. আল হাদীদ</option>
                                    <option value="58">58. আল মুজাদালাহ</option>
                                    <option value="59">59. আল হাশর</option>
                                    <option value="60">60. আল মুমতাহিনা</option>
                                    <option value="61">61. আছ-ছফ</option>
                                    <option value="62">62. আল জুমুআহ</option>
                                    <option value="63">63. মুনাফিকুন</option>
                                    <option value="64">64. আত-তাগাবুন</option>
                                    <option value="65">65. আত্ব-ত্বালাক্ব</option>
                                    <option value="66">66. আত-তাহরীম</option>
                                    <option value="67">67. আল মুলক</option>
                                    <option value="68">68. আল কলম</option>
                                    <option value="69">69. আল হাক্বক্বাহ</option>
                                    <option value="70">70. আল মা'আরিজ</option>
                                    <option value="71">71. নূহ</option>
                                    <option value="72">72. আল জিন</option>
                                    <option value="73">73. মুযযামমিল</option>
                                    <option value="74">74. আল মুদ্দাসসির</option>
                                    <option value="75">75. আল ক্বেয়ামাহ</option>
                                    <option value="76">76. আদ-দাহর</option>
                                    <option value="77">77. আল মুরসালাত</option>
                                    <option value="78">78. আন-নাবা</option>
                                    <option value="79">79. আন-নযিআ'ত</option>
                                    <option value="80">80. আবাসা</option>
                                    <option value="81">81. আত-তাকভীর</option>
                                    <option value="82">82. আল ইনফিতার</option>
                                    <option value="83">83. আত-তাতফীফ</option>
                                    <option value="84">84. আল ইনশিক্বাক্ব</option>
                                    <option value="85">85. আল বুরূজ</option>
                                    <option value="86">86. আত্ব-তারিক্ব</option>
                                    <option value="87">87. আল আ'লা</option>
                                    <option value="88">88. আল গাশিয়াহ</option>
                                    <option value="89">89. আল ফজর</option>
                                    <option value="90">90. আল বালাদ</option>
                                    <option value="91">91. আশ-শামস</option>
                                    <option value="92">92. আল লায়ল</option>
                                    <option value="93">93. আদ্ব-দ্বোহা</option>
                                    <option value="94">94. ইনশিরাহ</option>
                                    <option value="95">95. ত্বীন</option>
                                    <option value="96">96. আলাক</option>
                                    <option value="97">97. কদর</option>
                                    <option value="98">98. বাইয়্যিনাহ</option>
                                    <option value="99">99. যিলযাল</option>
                                    <option value="100">100. আদিয়াত</option>
                                    <option value="101">101. কারেয়া</option>
                                    <option value="102">102. তাকাসূর</option>
                                    <option value="103">103. আসর</option>
                                    <option value="104">104. হুমাযাহ</option>
                                    <option value="105">105. আল ফীল</option>
                                    <option value="106">106. কুরাইশ</option>
                                    <option value="107">107. মাঊন</option>
                                    <option value="108">108. কাওসার</option>
                                    <option value="109">109. কাফিরুন</option>
                                    <option value="110">110. আন নাসর</option>
                                    <option value="111">111. লাহাব</option>
                                    <option value="112">112. আল ইখলাস</option>
                                    <option value="113">113. আল ফালাক্ব</option>
                                    <option value="114">114. আন নাস</option>
                                </select>

                                <span class="input-group-btn">
                                    <button class="btn btn-lg" type="submit">
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </span>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 p-2">
                        <div id="custom-search-input">
                            <form method="" action="#" class="input-group col-md-12">
                                <input type="text" name="search" class="form-control no-border input-lg"
                                    placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-lg" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </span>
                            </form>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <div class="container shadow-lg p-3 mb-2 bg-white rounded text-center">
            <div class="ar">
                <tr>
                    بِسْمِ اللّهِ الرَّحْمـَنِ الرَّحِيمِ
                </tr>
            </div>
            <div class="bn">
                <tr>শুরু করছি আল্লাহর নামে যিনি পরম করুণাময়, অতি দয়ালু।</tr>
            </div>
        </div>
        <!-- surah select & search part end -->





        <?php

        $surahno = "999";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (($_POST["surahno"]) != 999) {
                $surahno = $_POST['surahno'];

                $su = file_get_contents("json/surah.json");
                $su_decoded = json_decode($su, true);

                $num = (int)$surahno - 1;

                echo '<div class="container shadow-lg p-2 mb-2 bg-white rounded">
                <section class="content">
                        <!--info row start-->
                    <div class="row">
                           
                        <div class="col-md-6 col-sm-6 col-xs-12">        
                                
                            <div class="info-box info-box-left">
                                    
                                <span class="info-box-icon">' . $surahno . '</span> 
                                <div class="info-box-content">
                                    <span class="info-box-number " style="font-size:1.7em;">' . $su_decoded[$num]['sura_name'] . '</span>
                                    <span class="info-box-number">' . $su_decoded[$num]['eng_name'] . '</span>            
                                </div>
                                        
                            </div>
                                  
                        </div>                                
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="info-box info-box-right ">
                                <span class="info-box-icon"><i class="fa fa-info-circle"></i></span>
                                    <div class="info-box-content">
                                        <span class="progress-description">Meaning: The Opening</span></br>
                                        <span class="progress-description">Total Ayats: <b>' . $su_decoded[$num]['total_ayat'] . '</b></span><br> 
                                        <span class="progress-description">Para: <b>' . $su_decoded[$num]['para'] . '</b></span>
                                    </div>
                                        
                            </div>            
                        </div> 
                    </div>
                                
                    
                    <!--info row end-->
                    
                           
                                         <!--*************************ayat****************************--!>
                    <div class="box box-primary">
                        <div class="box-body no-padding">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <tr><th>#</th><th colspan="4">Ayat</th></tr>';
                $ch = curl_init();
                $url = "http://api.alquran.cloud/v1/surah/{$surahno}/editions/quran-simple,bn.bengali,en.yusufali";


                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $resp = curl_exec($ch);
                if ($e = curl_error($ch)) {
                    echo $e;
                } else {
                    $surah = json_decode($resp, true);

                    for ($i = 0; $i < count($surah['data']['0']['ayahs']); $i++) {
                        $ar_ayah = $surah['data']['0']['ayahs'][$i];
                        echo '<tr><td>' . $i + 1 . '.</td><td colspan="4" class =" pd20 ar "><b>' . $ar_ayah['text'] . '</b></td></tr>';
                        $en_ayah = $surah['data']['1']['ayahs'][$i];
                        echo '<tr><td>' . ' ' . '</td><td class="pd20 bn">' . $en_ayah['text'] . '</td>';
                        $bn_ayah = $surah['data']['2']['ayahs'][$i];
                        echo '<td>' . ' ' . '</td><td class="pd20" >' . $bn_ayah['text'] . '</td></tr>';
                    }
                }

                echo '</tbody>
                            </table>
                        </div>
                    </div>    
                </section>
                
                </div';
            }
        };
        ?>


    </div>

    <?php include 'footer.php'; ?>
</body>

</html>