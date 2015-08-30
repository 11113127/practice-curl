<?php
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_URL, "www.yahoo.com.tw");
// curl_setopt($ch, CURLOPT_HEADER, false);
// curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
// $output = curl_exec($ch);
// curl_close($ch);
// echo $output;

$url = "http://localhost/test.php";
// echo file_get_contents($url);


// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $output = curl_exec($ch);
// curl_close($ch);
 
// echo $output;


/**
 * PHP 傳送 POST 請求
 *上面第 6 行用 CURLOPT_POST 宣告啟用 POST 內容, 而第 7 行用到 http_build_query 函式, 將陣列內容轉換成類似 GET 變數的格式, 即 abc=123&def=456。
 *有種情況是表單禁止用 PHP 等程式傳送, 那便需要用 CURL 自訂 user agent, 只要在 curl_exec 前入這行就可以了:
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array("abc"=>"123", "def"=>"456"))); 
// curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0');
$output = curl_exec($ch); 
curl_close($ch);
 
// echo $output;
?>