<?Php
session_start ();
function generatecaptchacode ($length=6) {
$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$charactersLength = strlen($characters);
$randomString='';
for ($i=0;$i< $length; $i++){
$randomString .= $characters[rand (0, $charactersLength-1)];
}
return $randomString;
}
echo "Captcha code is: ". generatecaptchacode();
?>