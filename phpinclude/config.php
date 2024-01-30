<?php
// **PREVENTING SESSION HIJACKING**
// Prevents javascript XSS attacks aimed to steal the session ID
ini_set('session.cookie_httponly', 1);

// **PREVENTING SESSION FIXATION**
// Session ID cannot be passed through URLs
ini_set('session.use_only_cookies', 1);

// Uses a secure connection (HTTPS) if possible
ini_set('session.cookie_secure', 1);

header('X-Content-Type-Options: nosniff');
header("X-XSS-Protection: 1; mode=block;");
header("Pragma: no-cache");
header("Cache-Control: no-cache, no-store, must-revalidate, private");
header('X-Frame-Options: SAMEORIGIN');
header("strict-transport-security: max-age=0");	

?>