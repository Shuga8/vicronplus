<?php

use Carbon\Carbon;
use App\Lib\ClientInfo;
use Stichoza\GoogleTranslate\GoogleTranslate;

function pathNameCheck($pathname)
{

    // if ($pathname == config('app.name')) {

    //     return "active-nav";
    // } else {
    //     $pathname = parse_url($pathname, PHP_URL_PATH);

    //     if ($_SERVER['REQUEST_URI'] === $pathname) {
    //         return "active-nav";
    //     } else {
    //         if ($pathname === "") {
    //             return "active-nav";
    //         } else {
    //             return "";
    //         }
    //     }
    // }
}
/**
 * Global Pagination Value
 * @return int
 */
function getPagination()
{
    return 20;
}

function getRealIP()
{
    $ip = $_SERVER["REMOTE_ADDR"];
    //Deep detect ip
    if (filter_var(@$_SERVER['HTTP_FORWARDED'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_FORWARDED'];
    }
    if (filter_var(@$_SERVER['HTTP_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    }
    if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    if (filter_var(@$_SERVER['HTTP_X_REAL_IP'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_X_REAL_IP'];
    }
    if (filter_var(@$_SERVER['HTTP_CF_CONNECTING_IP'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    }
    if ($ip == '::1') {
        $ip = '127.0.0.1';
    }

    return $ip;
}


function getIpInfo()
{
    $ipInfo = ClientInfo::ipInfo();
    return $ipInfo;
}

function osBrowser()
{
    $osBrowser = ClientInfo::osBrowser();
    return $osBrowser;
}

function diffForHumans($date)
{
    $lang = session()->get('lang');
    Carbon::setlocale($lang);
    return Carbon::parse($date)->diffForHumans();
}

function showDateTime($date, $format = 'Y-m-d h:i A')
{
    $lang = session()->get('lang');
    Carbon::setlocale($lang);
    return Carbon::parse($date)->translatedFormat($format);
}

/**
 * Translate passed word from english to universerlly set language
 * @param mixed $word
 * @return string|null
 */
function translate($word)
{
    $tr = new GoogleTranslate();
    $tr->setSource('en');
    $tr->setTarget('fr');

    return  $tr->translate($word);
}
