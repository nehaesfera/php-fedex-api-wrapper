<?php
//Change these values below.

define('FEDEX_ACCOUNT_NUMBER', '604794161');
define('FEDEX_METER_NUMBER', '118972416');
define('FEDEX_KEY', 'bTnxiSVjmvlk8Tvv');
define('FEDEX_PASSWORD', 'MSzps3ptkUFL0olTEl1NXjvb9');


if (!defined('FEDEX_ACCOUNT_NUMBER') || !defined('FEDEX_METER_NUMBER') || !defined('FEDEX_KEY') || !defined('FEDEX_PASSWORD')) {
    die("The constants 'FEDEX_ACCOUNT_NUMBER', 'FEDEX_METER_NUMBER', 'FEDEX_KEY', and 'FEDEX_PASSWORD' need to be defined in: " . realpath(__FILE__));
}
