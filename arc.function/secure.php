<?php
/**
 * Created by PhpStorm.
 * User: IT
 * Date: 11/13/2017
 * Time: 3:33 PM
 */
    class secure
    {
       function encryptIt( $pure_string ) {
            $key = '345fasdozdfasfoq345SDFDdfg';
            $iv = 23;
            $dirty = array("+", "/", "=");
            $clean = array("_p_", "_s_", "_e_");
            $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
            $_SESSION['iv'] = mcrypt_create_iv($iv_size, MCRYPT_RAND);
            $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
            $encrypted_string = base64_encode($encrypted_string);
            return str_replace($dirty, $clean, $encrypted_string);
        }

         function decryptIt( $encrypted_string ) {
            $key = '345fasdozdfasfoq345SDFDdfg';
            $iv = 23;
            $dirty = array("+", "/", "=");
            $clean = array("_p_", "_s_", "_e_");
            $string = base64_decode(str_replace($clean, $dirty, $encrypted_string));
            $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $key,$string, MCRYPT_MODE_ECB, $iv);
            return $decrypted_string;
        }


}