<?php 
$ch = curl_init();
$surahno=1;
                
                $url = "https://alquranbd.com/api/hadith/muslim";
                curl_setopt($ch,CURLOPT_URL,$url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER,true );

                $resp =curl_exec($ch);

                if($e = curl_error($ch)){
                    echo $e;
                }
                else{
                    echo"<pre>";
                    $decoded = json_decode($resp,true);
                    print_r($decoded);
                    echo"</pre>";

                }
                curl_close($ch);

                // $su= file_get_contents("json/surah.json");
                // echo"<pre>";
                // $su_decoded= json_decode($su,true);
                // print_r($su_decoded);
                // echo"</pre>";

                

?>