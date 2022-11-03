<?php

$XRapidApiKey           = '4fa86eee60mshde0aec0bd2a1123p1c9e37jsn7f552fe99298'; // get from https://rapidapi.com/Glavier/api/spotify23/

$ClientIdSpotify        = '096d851fcf6e47669a1ed6a14cadd36e'; // get from https://developer.spotify.com/
$ClientSecretSpotify    = '06d18f5b29ea432f911fff20ad332d70'; // get from https://developer.spotify.com/

$Artist = [
    "Fourtwnty",
    "Payung Teduh",
    "Danilla",
    "Jason Ranti",
    "Efek Rumah Kaca",
    "Padi",
    "Armada",
    "Wali",
    "Judika",
    "Gigi",
    "Dere",
    "Budi Doremi",
    "Rizky Febian",
    "Pusakata",
    "Hindia",
    ".Feast",
    "The Panturas",
    "J-Rocks",
    "Nobitasan",
    "Fiersa Besari",
    "Pamungkas",
    "Naif",
    "Dhyo Haw",
    "NaFF",
    "Kangen Band",
    "Sheila On 7",
    "Tipe-X",
    "Souljah",
    "Shaggydog",
    "Momonon",
    "JKT48",
    "Vierra",
    "Kunto Aji",
    "Skinnyfabs",
    "Ardhito Pramono",
    "Daun Jatuh",
    "Tulus",
    "Slank",
    "Ungu",
    "Noah",
    "Peterpan",
    "Bunga Citra Lestari",
    "Afgan",
    "Rossa",
    "Isyana Sarasvati",
    "Jamrud",
    "Amigdala",
    "Stand Here Alone",
    "Float",
    "Iksan Skuter",
    "Last Child",
    "Virgoun",
    "Anji",
    "Seventeen",
    "Kerispatih",
    "Iwan Fals",
    "Dewa 19",
    "Nosstress",
    "Ari Lasso",
    "Drive",
    "Hivi!",
    "Chrisye",
    "Ada Band",
    "Bondan Prakoso",
    "The Changcuters",
    "Andra & The Backbone",
    "Kotak",
    "Repvblik Band",
    "SAMSONS",
    "Blackout",
    "Flanella",
    "Lobow",
    "Once Mekel",
    "D'MASIV",
    "Letto",
    "Nidji",
    "Vagetoz",
    "ST12",
    "Hijau Daun",
    "Goliath",
    "Radja",
    "Yovie & Nuno",
    "Dadali",
    "Cassandra",
    "Sore",
];


/** Function */

function _curl($end_point, $method = 'GET', $header = null, $postdata = null) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $end_point);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	if ($header) curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	if (strtolower($method) == 'post') {
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
	} else if (strtolower($method) == 'delete') {
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
	} else if (strtolower($method) == 'put') {
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
	}
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$chresult = curl_exec($ch);
	curl_close($ch);
	return json_decode($chresult, true);
}

function randomSoal($filter_word) {
	$array = explode("\n", $filter_word);
	$index = rand(0, (count($array) - 4));
	$finalSoal = $array[$index] . " " . $array[$index + 1] . " " . $array[$index + 2];
	if(str_word_count($finalSoal) < 10) {
		return $finalSoal. " " . $array[$index + 3]. " " . $array[$index + 4]. " " . $array[$index + 5];
	}
	return $finalSoal;
}

function randomJawaban($filter_word) {
	$array = explode(" ", $filter_word);
	$index = rand(2, (count($array) - 3));
	if (preg_match('/[\'\-\"^£$%&*()}{@#~?><>,|=_+¬-]/', $array[$index])) {
		return $array[$index + 1];
	}
	return $array[$index];
}

function replaceSpecialChar($char) {
	$filter 	= [ '#', '$', '%', '^', '&', '*', '(', ')', '+', '=', '-', '[', ']', ';', ',', '.', '/', '{', '}', '|', ':', '<', '>', '?', '~', '`', '"', "'" ];
	$finalStr 	= $char;
	if(preg_match('/^[\'\-\"^£$%&*()}{@#~?><>,|=_+¬-]/', $finalStr)) {
		for ($i = 0; $i < count($filter); $i++) {
			$trim = ltrim($char, $filter[$i]);
			if ($trim !== $char) {
				$finalStr = $trim;
			}
		}	
	}

	$searchLastChar = substr($finalStr, -1);
	if (preg_match('/[\'\-\"^£$%&*()}{@#~?><>,|=_+¬-]/', $searchLastChar)) {
		for ($i = 0; $i < count($filter); $i++) {
			$trim = rtrim($finalStr, $filter[$i]);
			if ($trim !== $char) {
				$finalStr = $trim;
			}
		}
	}

	return $finalStr;
}