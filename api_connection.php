<?php

//keys and tokens
$consumer_key= 'LAYZ1iJx04kCV8KFJUQIvokPO';
$consumer_secret = 'dbZBr6U2M96zjKrCcXhTfaGGEV29qcqf1Qs9WE7q4c8NlSzSrS';
$access_token = '935192839444508672-vzQJvRnQLVWtOjJtDyWQCaPx0zlR0JJ';
$access_token_secret = '2aaBfrh37pARTgE1MsrOxFtimRYB0uBGTeCbgPfbJUnmU';

//Include libraries
require 'twitteroauth-master/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

//connect to api

$twitter = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
// $content = $connection->get("account/verify_credentials");
// print_r($content);
//get tweets
if(isset($_GET['search'])){
    $search_query = $_GET['search_query'];
    if(isset($search_query)){
        $tweets = $twitter->get(
            'search/tweets',
            array("q" => ".$search_query.", "result_type" => "recent", "count" => 20, "lang"=>"en")
            );
        foreach($tweets as $tweet){
            foreach($tweet as $t){
                print_r($t->text);
                '<br>';   
                exit;
            }
        }
    }
}

// $tweets = $connection->get(' https://api.twitter.com/1.1/search/tweets.json?q=merhaba&result_type=recent');
// print_r($tweets);
?>
