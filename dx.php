<?
$url='http://sms.webchinese.cn/web_api/?Uid=zycf&Key=e94671dde42dd658212d&smsMob=18612011798&smsText=test 972643 10【左右逢园】';
echo Get($url);
function Get($url)
{
if(function_exists('file_get_contents'))
{
$file_contents = file_get_contents($url);
}
else
{
$ch = curl_init();
$timeout = 5;
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
}
return $file_contents;
}

?>