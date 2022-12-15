<?php
//require('./config.php');
require (__DIR__.'/oauthconfig.blade.php');
header('location:'.$oauth_authorize_url.'?client_id='.$client_id.'&redirect_uri='.$redirect_uri.'&response_type=code&state='.md5(date('Y-m-d H:i:s')));

