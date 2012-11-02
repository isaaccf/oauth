<?php
require_once 'gapi/Google_Client.php';
require_once 'gapi/contrib/Google_Oauth2Service.php';

session_start();

$client = new Google_Client();
$client->setApplicationName($apiConfig['application_name']);
// Visit https://code.google.com/apis/console?api=plus to generate your
// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.
$client->setClientId($apiConfig['oauth2_client_id']);
$client->setClientSecret($apiConfig['oauth2_client_secret']);
$client->setRedirectUri($apiConfig['oauth2_redirect_uri']);
//$client->setDeveloperKey('insert_your_developer_key');
$oauth2 = new Google_Oauth2Service($client);

?>
