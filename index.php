<?php
set_time_limit(240);
header('Content-Type: application/json');
require 'vendor/autoload.php';
require 'config.php';

$session = new SpotifyWebAPI\Session(
    $ClientIdSpotify, // Client ID
    $ClientSecretSpotify, // Client Secret
);

$session->requestCredentialsToken();
$ApiSpotify = new SpotifyWebAPI\SpotifyWebAPI();
$ApiSpotify->setAccessToken($session->getAccessToken());
$ApiSpotify->setOptions([
    'return_assoc' => true,
]);

if(isset($_GET['searchArtist'])) {
    $Search = $_GET['searchArtist'];
    for($i = 0; $i < count($Artist); $i++) {
        if(strtolower($Artist[$i]) == strtolower($Search)) {
            $ArtistSearch = [$Artist[$i]];
            break;
        }
    }
    $Artist = isset($ArtistSearch) ? $ArtistSearch : null;
}

if($Artist == null) {
    print_r(json_encode(['data' => 'not found'], JSON_PRETTY_PRINT));
} else {
    $index      = rand(0, (count($Artist)-1));
    $Search     = $ApiSpotify->search($Artist[$index], 'artist', ['limit' => 2, 'market' => 'ID'])['artists']['items'];
    $artistId   = $Search['0']['id'];
    $artistName = $Search['0']['name'];
    if($Artist[$index] !== $artistName) {
        $artistId   = $Search['1']['id'];
        $artistName = $Search['1']['name'];
    }
    
    $TopTracks  = $ApiSpotify->getArtistTopTracks($artistId, ['market' => 'ID']);
    $indexMusic = rand(0, (count($TopTracks['tracks'])-1));
    $SongId     = $TopTracks['tracks'][$indexMusic]['id'];
    $Name       = $TopTracks['tracks'][$indexMusic]['name'];
    $LyricsStr  = null;
    $Language   = null;
    $GetMusic   = _curl('https://spotify23.p.rapidapi.com/track_lyrics/?id='.$SongId, 'GET', [
        "X-RapidAPI-Host: spotify23.p.rapidapi.com",
        "X-RapidAPI-Key: {$XRapidApiKey}" // X-RapidAPI-Key
    ]);
    
    if(isset($GetMusic['lyrics'])) {
        $Lyrics     = $GetMusic['lyrics']['lines'];
        $Language   = $GetMusic['lyrics']['language'];
    
        $LyricsStr = '';
        for($o = 0; $o < count($Lyrics); $o++) {
            $LyricsStr .= str_replace(["\u266a", "♪"], "", $Lyrics[$o]['words'])."\n";
        }
    }
    
    $LyricsStr  = str_replace("\n\n", "\n", $LyricsStr);
    $Soal       = randomSoal($LyricsStr);
    $Jawaban    = replaceSpecialChar(randomJawaban($Soal));
    $Replace    = '_____';
    $Soal       = preg_replace("/\b{$Jawaban}\b/", $Replace, $Soal, 1);
    $data[]     = [
        'id' => $artistId,
        'name' => $artistName,
        'music' => [
            'SongId' => $SongId,
            'title' => $Name,
            'lyrics' => $LyricsStr
        ],
        'games' => [
            'q' => $Soal,
            'a' => $Jawaban
        ]
    ];
    
    print_r(json_encode(['data' => $data], JSON_PRETTY_PRINT));
}
