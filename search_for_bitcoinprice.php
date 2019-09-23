<?php
$CurlStart = curl_init();

// Check if the website is available
$url = 'https://www.xe.com/currencyconverter/convert/?Amount=1&From=XBT&To=EUR';
if (!$fp = curl_init($url)) return false;

// Where the value is
// <div class="sc-EHOje lkcPkj">1 EUR = 0.000109772 XBT</div>

//
$content = file_get_contents($url);
$first_step = explode( '<div id="sc-EHOje lkcPkj">' , $content );
$second_step = explode( "</div>" , $first_step[1] );

echo $second_step[0];

/*
curl_setopt ($CurlStart, CURLOPT_URL, $url);
curl_setopt ($CurlStart, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($CurlStart, CURLOPT_REFERER, $url);
curl_setopt ($CurlStart, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; nl; rv:1.9.1.11) Gecko/20100701 Firefox/3.5.11");
curl_setopt ($CurlStart, CURLOPT_HEADER, 1);
curl_setopt ($CurlStart, CURLOPT_FOLLOWLOCATION, true);
$source = curl_exec ($CurlStart);
curl_close ($CurlStart);

$a=preg_match("/>Level:.*.\n.*.>([0-9]*)</",$source,$b);
$Level = $b[1];
echo "Level: $Level";
*/
php?>

