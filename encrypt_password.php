<?php
// Replace password with your You+Nissan password
$nissanPassword = 'yourNissanPassword';
$encryptionKey = '88dSp7wWnV3bvv9Z88zEwg';

function encrypt($password, $key) {
    $size = @call_user_func('mcrypt_get_block_size', MCRYPT_BLOWFISH);
    if (empty($size)) {
        $size = @call_user_func('mcrypt_get_block_size', MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    }
    $password = pkcs5_pad($password, $size); 
    $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB), MCRYPT_RAND); 
    $passcrypt = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, $password, MCRYPT_MODE_ECB, $iv); 
    $encode = base64_encode($passcrypt); 
    return $encode;
}
function pkcs5_pad($text, $blocksize) {
    $pad = $blocksize - (strlen($text) % $blocksize);
    return $text . str_repeat(chr($pad), $pad);
}
echo encrypt($nissanPassword, $encryptionKey);
?>
