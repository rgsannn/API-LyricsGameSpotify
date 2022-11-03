# API-LyricsGameSpotify
Api ini saya buat pada saat ada tugas besar mata kuliah Aplikasi Teknologi Online tentang penggunaan API. Api yang saya buat adalah tentang tebak lirik, dimana kita harus menebak potongan lirik yang di sediakan secara acak. Untuk lagunya saya mengambil dari top tracks lagu di spotify dengan nama artist yang berbeda. Dan untuk liriknya sendiri saya menggunakan public api dari rapid api. Mohon maaf jika kode nya acak acakkan, selebihnya anda dapat mengubahnya sendiri

## Config
Untuk Api-key silahkan ambil sendiri, tapi jika tidak ingin memakai Api-key sendiri juga tidak apa apa hanya saja jika Api-key nya limit mau tidak mau harus menggunakan Api-key yang baru.

- ### API Yang Dipakai
    - [Spotify Developer](https://developer.spotify.com/) Untuk mengambil top tracks dari artist tertentu

    - [Rapid API Spotify](https://rapidapi.com/Glavier/api/spotify23/) Untuk mengambil track lyricsnya saja

Dibawah ini data Api-key yang sudah terpasang, jika ingin mengubahnya anda dapat mengubahnya [disini](https://github.com/rgsannn/API-LyricsGameSpotify/blob/19540fbf0a8ecb0fefae907fded3255418aed328/config.php#L2).
```
$XRapidApiKey           = '4fa86eee60mshde0aec0bd2a1123p1c9e37jsn7f552fe99298';

$ClientIdSpotify        = '096d851fcf6e47669a1ed6a14cadd36e';
$ClientSecretSpotify    = '06d18f5b29ea432f911fff20ad332d70';
```

## Usage
| End Point | Method | Parameter | Note |
| ------------- | ------------- | ------------- | ------------- |
| /  | GET  |   | Menampilkan data secara acak |
| searchArtist  | GET  | Nama Artist  | Menampilkan data berdasarkan artist tertentu |

## Response
```
{
    "data": [
        {
            "id": "1eblwVFP5H4whVZrYmXQLl",
            "name": "The Panturas",
            "music": {
                "SongId": "3hg1tMeMdz9SUeAwf9dscu",
                "title": "Sunshine",
                "lyrics": "I know that you're not ready to see it goes down\nBut don't worry 'cause it won't forever go\nI know that you still want to see\nThen tomorrow, I'll bring you here with me\n'Cause I know\nWe're running out of time\nTo see it going down today\nYou know, that I'm still holding on your arm\nIt's getting dark\nThere's no light from above, you know\nYou know, that you will always be my sunshine\n'Cause tonight, we'll be fine\nI know, that you're not ready to see it goes down\nBut don't worry 'cause it won't forever go\nI know, that you still want to see\nThen tomorrow, I'll bring you here with me\n'Cause I know\nWe're running out of time\nTo see it going down today\nYou know, that I'm still holding on your arm\nIt's getting dark\nThere's no light from above, you know\nYou know, that you will always be my sunshine\n'Cause tonight, we'll be fine\nWe're running out of time\nTo see it going down today\nYou know, that I'm still holding on your arm\nIt's getting dark\nThere's no light from above, you know\nYou know, that you will always be my sunshine\nWe're running out of time\nTo see it going down today\nYou know, that I'm still holding on your arm\nIt's getting dark\nThere's no light from above, you know\nYou know, that you will always be my sunshine\nWe're running out of time\nTo see it going down today\nYou know, that I'm still holding on your arm\nIt's getting dark\nThere's no light from above, you know\nYou know, that you will always be my sunshine\n'Cause tonight, we'll be fine\n'Cause tonight, we'll be fine\n"
            },
            "games": {
                "q": "There's no light from above, you know You know, that you will always _____ my sunshine 'Cause tonight, we'll be fine",
                "a": "be"
            }
        }
    ]
}
```

## Artist
Untuk artist anda dapat mengubahnya sendiri pada [kode ini](https://github.com/rgsannn/API-LyricsGameSpotify/blob/19540fbf0a8ecb0fefae907fded3255418aed328/config.php#L8) asalkan artist tersebut terdaftar di spotify, berikut beberapa artist yang sudah saya tambahkan :
  - Fourtwnty
  - Payung Teduh
  - Danilla
  - Jason Ranti
  - Efek Rumah Kaca
  - Padi
  - Armada
  - Wali
  - Judika
  - Gigi
  - Dere
  - Budi Doremi
  - Rizky Febian
  - Pusakata
  - Hindia
  - .Feast
  - The Panturas
  - J-Rocks
  - Nobitasan
  - Fiersa Besari
  - Pamungkas
  - Naif
  - Dhyo Haw
  - NaFF
  - Kangen Band
  - Sheila On 7
  - Tipe-X
  - Souljah
  - Shaggydog
  - Momonon
  - JKT48
  - Vierra
  - Kunto Aji
  - Skinnyfabs
  - Ardhito Pramono
  - Daun Jatuh
  - Tulus
  - Slank
  - Ungu
  - Noah
  - Peterpan
  - Bunga Citra Lestari
  - Afgan
  - Rossa
  - Isyana Sarasvati
  - Jamrud
  - Amigdala
  - Stand Here Alone
  - Float
  - Iksan Skuter
  - Last Child
  - Virgoun
  - Anji
  - Seventeen
  - Kerispatih
  - Iwan Fals
  - Dewa 19
  - Nosstress
  - Ari Lasso
  - Drive
  - Hivi!
  - Chrisye
  - Ada Band
  - Bondan Prakoso
  - The Changcuters
  - Andra & The Backbone
  - Kotak
  - Repvblik Band
  - SAMSONS
  - Blackout
  - Flanella
  - Lobow
  - Once Mekel
  - D'MASIV
  - Letto
  - Nidji
  - Vagetoz
  - ST12
  - Hijau Daun
  - Goliath
  - Radja
  - Yovie & Nuno
  - Dadali
  - Cassandra
  - Sore
