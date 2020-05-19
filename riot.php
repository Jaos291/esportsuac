<?php
//  Include all required files (installation via Composer is required)
require_once __DIR__  . "/vendor/autoload.php";

use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\LeagueAPI\Definitions\Region;

//  Initialize the library
$api = new LeagueAPI([
	//  Your API key, you can get one at https://developer.riotgames.com/
	LeagueAPI::SET_KEY    => RGAPI-e049485e-1e57-4b99-803b-0d9d41dd8044,
	//  Target region (you can change it during lifetime of the library instance)
	LeagueAPI::SET_REGION => Region::LATIN_AMERICA_NORTH,
]);

$summoner = $api->getSummonerByName('I am TheKronnY');

echo $summoner->id;             //  KnNZNuEVZ5rZry3I...
echo $summoner->puuid;          //  rNmb6Rq8CQUqOHzM...
echo $summoner->name;           //  I am TheKronnY
echo $summoner->summonerLevel;  //  69

//print_r($summoner->getData());  //  Or array of all the data
/* Array
 * (
 *     [id] => KnNZNuEVZ5rZry3IyWwYSVuikRe0y3qTWSkr1wxcmV5CLJ8
 *     [accountId] => tGSPHbasiCOgRM_MuovMKfXw7oh6pfXmGiPDnXcxJDohrQ
 *     [puuid] => rNmb6Rq8CQUqOHzMsFihMCUy4Pd201vDaRW9djAoJ9se7myXrDprvng9neCanq7yGNmz7B3Wri4Elw
 *     [name] => I am TheKronnY
 *     [profileIconId] => 3180
 *     [revisionDate] => 1543438015000
 *     [summonerLevel] => 69
 * )
 */
 ?>
