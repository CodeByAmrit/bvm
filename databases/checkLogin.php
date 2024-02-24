<?php
require_once 'vendor/autoload.php';

$providerName = $_GET['provider'] ?? '';

if ($providerName === 'github') {
    $provider = new League\OAuth2\Client\Provider\Github([
        'clientId'     => 'YOUR_GITHUB_CLIENT_ID',
        'clientSecret' => 'YOUR_GITHUB_CLIENT_SECRET',
        'redirectUri'  => 'http://localhost/login.php?provider=github',
    ]);
} elseif ($providerName === 'google') {
    $provider = new League\OAuth2\Client\Provider\Google([
        'clientId'     => 'YOUR_GOOGLE_CLIENT_ID',
        'clientSecret' => 'YOUR_GOOGLE_CLIENT_SECRET',
        'redirectUri'  => 'http://localhost/login.php?provider=google',
    ]);
} else {
    die('Invalid provider');
}

if (!empty($_GET['error'])) {
    die('Error: ' . $_GET['error']);
}

if (!isset($_GET['code'])) {
    $authUrl = $provider->getAuthorizationUrl();
    $_SESSION['oauth2state'] = $provider->getState();
    header('Location: ' . $authUrl);
    exit;
} elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
    unset($_SESSION['oauth2state']);
    die('Invalid state');
} else {
    $token = $provider->getAccessToken('authorization_code', ['code' => $_GET['code']]);
    $user = $provider->getResourceOwner($token);
    
    // You can now use $user->getEmail(), $user->getName(), etc. to get user information

    echo 'Login successful!';
}
