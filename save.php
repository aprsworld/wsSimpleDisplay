<?
$oparts=parse_url($_SERVER["HTTP_REFERER"]);
$origin=$oparts['scheme'] . "://" . $oparts['host'];
header("Access-Control-Allow-Origin: " . $origin);

printf("data received");
print_r($_POST);
?>
