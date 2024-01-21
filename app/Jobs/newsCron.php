<?php

function scrapMediaNews() {
    //get_curl_data('http://test.webqom.com/webscraper/grabAllDataCron');
    get_curl_data(Config::get('app.media_news') . 'webscraper/grabAllDataCron');
    //Write log OR in Database
}

function sendMail() {
    get_curl_data(Config::get('app.media_news') . 'webscraper/sendMail');
}

function sendTestMail() {
    get_curl_data(Config::get('app.media_news') . 'webscraper/sendTestMail');
}

function get_curl_data($url) {

    $ua = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36';
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url); // The URL to fetch. This can also be set when initializing a session with curl_init().
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // The number of seconds to wait while trying to connect.
    curl_setopt($ch, CURLOPT_USERAGENT, $ua); // The contents of the "User-Agent: " header to be used in a HTTP request.
    curl_setopt($ch, CURLOPT_FAILONERROR, TRUE); // To fail silently if the HTTP code returned is greater than or equal to 400.
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); // To follow any "Location: " header that the server sends as part of the HTTP header.
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // To automatically set the Referer: field in requests where it follows a Location: redirect.
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); // The maximum number of seconds to allow cURL functions to execute.
    curl_setopt($ch, CURLOPT_MAXREDIRS, 1); // The maximum number of redirects
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // for https - To blindly accept any server certificate, without doing any verification as to which CA signed it, and whether or not that CA is trusted.

    $result = trim(curl_exec($ch));

    curl_close($ch);

    return $result;
}

//Test Msil
//sendTestMail();

//Scrap Media Content
scrapMediaNews();
