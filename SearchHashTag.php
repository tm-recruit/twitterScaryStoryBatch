<?php

// twistoauth の読み込み
require 'TwistOAuth.phar';

// 設定の読み込み
$conf = parse_ini_file('/srv/batch/conf/conf.ini');

// 設定から色々取得
$consumer_key = $conf['consumer_key'];
$consumer_secret = $conf['consumer_secret'];
$access_token = $conf['access_token'];
$access_token_secret = $conf['access_token_secret'];
$query = $conf['hash_tag'];
$count = $conf['get_count'];
$lang = $conf['lang'];

$connection = new TwistOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

// ハッシュタグによるツイート検索
$hash_params = ['q' => $query ,'count' => $count, 'lang'=> $ja];
$hash = $connection->get('search/tweets', $hash_params)->statuses;
