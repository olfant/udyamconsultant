<?php
/**
 * Security Token (CSRF / Anti-Bot Token) Handler
 * Prevents automated form submissions, cURL loops, and replay attacks.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!defined('BUDDY_TOKEN_NAME')) {
    define('BUDDY_TOKEN_NAME', 'lets-play_buddy');
}
if (!defined('BUDDY_TOKEN_SESSION_KEY')) {
    define('BUDDY_TOKEN_SESSION_KEY', 'lets_play_buddy_token');
}
if (!defined('BUDDY_TOKEN_TIME_KEY')) {
    define('BUDDY_TOKEN_TIME_KEY', 'lets_play_buddy_time');
}
if (!defined('BUDDY_TOKEN_LIFETIME')) {
    define('BUDDY_TOKEN_LIFETIME', 600); // 10 minutes in seconds
}

/**
 * Generates a cryptographically secure alphanumeric token
 *
 * @param int $length
 * @return string
 */
if (!function_exists('generate_buddy_token')) {
    function generate_buddy_token($length = 128) {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charsLen = strlen($chars);
        try {
            $bytes = random_bytes($length);
        } catch (Exception $e) {
            $bytes = openssl_random_pseudo_bytes($length);
        }
        $token = '';
        for ($i = 0; $i < $length; $i++) {
            $token .= $chars[ord($bytes[$i]) % $charsLen];
        }
        return $token;
    }
}

/**
 * Returns the active token or generates a new one if missing or expired
 *
 * @param bool $force_new
 * @return string
 */
if (!function_exists('get_or_create_buddy_token')) {
    function get_or_create_buddy_token($force_new = false) {
        $now = time();
        if (
            $force_new ||
            empty($_SESSION[BUDDY_TOKEN_SESSION_KEY]) ||
            empty($_SESSION[BUDDY_TOKEN_TIME_KEY]) ||
            ($now - (int)$_SESSION[BUDDY_TOKEN_TIME_KEY] > BUDDY_TOKEN_LIFETIME)
        ) {
            $_SESSION[BUDDY_TOKEN_SESSION_KEY] = generate_buddy_token(128);
            $_SESSION[BUDDY_TOKEN_TIME_KEY] = $now;
        }
        return $_SESSION[BUDDY_TOKEN_SESSION_KEY];
    }
}

/**
 * Validates the submitted token against the session
 * Consumes the token upon successful validation so it cannot be reused in a loop
 *
 * @return array ['status' => bool, 'message' => string]
 */
if (!function_exists('verify_buddy_token')) {
    function verify_buddy_token() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return ['status' => true, 'message' => ''];
        }

        $submitted_token = isset($_POST[BUDDY_TOKEN_NAME]) ? trim($_POST[BUDDY_TOKEN_NAME]) : '';
        $session_token   = isset($_SESSION[BUDDY_TOKEN_SESSION_KEY]) ? $_SESSION[BUDDY_TOKEN_SESSION_KEY] : '';
        $token_time      = isset($_SESSION[BUDDY_TOKEN_TIME_KEY]) ? (int)$_SESSION[BUDDY_TOKEN_TIME_KEY] : 0;
        $now             = time();

        // 1. Check if token was submitted and exists in session
        if (empty($submitted_token) || empty($session_token)) {
            return [
                'status'  => false,
                'message' => 'Security token missing or invalid! Please refresh the page and try again.'
            ];
        }

        // 2. Check token match
        if (!hash_equals($session_token, $submitted_token)) {
            return [
                'status'  => false,
                'message' => 'Invalid security token! Please refresh the page and try again.'
            ];
        }

        // 3. Check expiration (10 minutes)
        if (($now - $token_time) > BUDDY_TOKEN_LIFETIME) {
            unset($_SESSION[BUDDY_TOKEN_SESSION_KEY]);
            unset($_SESSION[BUDDY_TOKEN_TIME_KEY]);
            return [
                'status'  => false,
                'message' => 'Security token has expired (10 minutes limit). Please refresh the page and submit again.'
            ];
        }

        // 4. Token is valid! Consume token and captcha immediately to prevent loop replay attacks
        unset($_SESSION[BUDDY_TOKEN_SESSION_KEY]);
        unset($_SESSION[BUDDY_TOKEN_TIME_KEY]);
        if (isset($_SESSION['vercode'])) {
            unset($_SESSION['vercode']);
        }

        return ['status' => true, 'message' => 'Token verified successfully.'];
    }
}
