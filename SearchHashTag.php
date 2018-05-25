<?php

// twistoauth の読み込み
require 'TwistOAuth.phar';

// 設定したやーつー
$consumer_key = 'xxxxxxxxxxx';
$consumer_secret = 'xxxxxxxxxxx';
$access_token = 'xxxxxxxxxxx';
$access_token_secret = 'xxxxxxxxxxx';

// 検索条件
$query = '#xxxxxxxxxx';
$count = '100';
$lang = 'ja';

$connection = new TwistOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

// ハッシュタグによるツイート検索
$hash_params = ['q' => $query ,'count' => $count, 'lang'=> $ja];
$hash = $connection->get('search/tweets', $hash_params)->statuses;
