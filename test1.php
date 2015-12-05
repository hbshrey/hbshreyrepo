<?php

function getRandomNumber($len = "15")
{
    $better_token = $code = sprintf("%0" . $len . "d", mt_rand(1, str_pad("", $len, "9")));
    ;
    return $better_token;
}

function gen_num($len)
{
    $rand = '';
    while (!(isset($rand[$len - 1]))) {
        $rand .= mt_rand(0, 9);
    }
    return substr($rand, 0, $len);
}
$t1 = time();
for ($i = 0; $i <= 1000; $i++) {
    $codes[] = gen_num(16);
}
$t2 = time();
echo $t2 - $t1;
echo "<pre>";
print_r($codes);

$t1 = time();
for ($i = 0; $i <= 1000; $i++) {
    $codes1[] = getRandomNumber(16);
}
$t2 = time();
echo $t2 - $t1;
echo "<pre>";
print_r($codes1);
print_r($codes1);
