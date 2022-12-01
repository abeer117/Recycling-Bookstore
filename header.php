<?php
$db = new Database();
$db->select('options', 'site_name,site_logo,currency_format');
$header = $db->getResult();

$cur_format = '$';
if (!empty($header[0]['currency_format'])) {
    $cur_format = $header[0]['currency_format'];
}
?>
