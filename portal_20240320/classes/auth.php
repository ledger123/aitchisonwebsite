<?php

class Auth {

    // Encrypt value
    function encrypt( $value ) {
        
        $key = '1-265-cipher-29-256';

        $newvalue = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $key ), $value, MCRYPT_MODE_CBC, md5( md5( $key ) ) ) );
        
        return( $newvalue );
    }

    // Decrypt value
    function decrypt( $value ) {
        
        $key = '1-265-cipher-29-256';

        $newvalue = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $key ), base64_decode( $value ), MCRYPT_MODE_CBC, md5( md5( $key ) ) ), "\0");
        
        return( $newvalue );
    }

}
?>