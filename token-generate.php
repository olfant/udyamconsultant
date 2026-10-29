<?php
/**
 * Dynamic Security Token Generator Endpoint
 * Generates and returns a fresh CSRF / anti-bot token via JSON.
 */

require_once __DIR__ . '/security-token.php';

header('Content-Type: application/json; charset=UTF-8');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Force-generate a brand new token
$freshToken = get_or_create_buddy_token(true);

echo json_encode([
    'status'     => 'success',
    'token'      => $freshToken,
    'expires_in' => BUDDY_TOKEN_LIFETIME
]);
exit;
