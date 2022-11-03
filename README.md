# API-LyricsGameSpotify
Api ini saya buat pada saat ada tugas besar mata kuliah Aplikasi Teknologi Online tentang penggunaan API. Api yang saya buat adalah tentang tebak lirik, dimana kita harus menebak potongan lirik yang di sediakan secara acak. Untuk lagunya saya mengambil dari top tracks lagu di spotify dengan nama artist yang berbeda. Dan untuk liriknya sendiri saya menggunakan public api dari rapid api.

Mohon maaf jika kode nya acak acakkan, selebihnya anda dapat mengubahnya sendiri

### Usage
| End Point | Method | Parameter | Note |
| ------------- | ------------- | ------------- | ------------- |
| /  | GET  |   | Menampilkan data secara acak |
| SearchArtist  | GET  | Nama Artist  | Menampilkan data berdasarkan artist tertentu |

### Response
```
{
    "data": [
        {
            "id": "1eblwVFP5H4whVZrYmXQLl",
            "name": "The Panturas",
            "music": {
                "SongId": "3hg1tMeMdz9SUeAwf9dscu",
                "title": "Sunshine",
                "lyricsLanguage": "en",
                "lyrics": "I know that you're not ready to see it goes down\nBut don't worry 'cause it won't forever go\nI know that you still want to see\nThen tomorrow, I'll bring you here with me\n'Cause I know\nWe're running out of time\nTo see it going down today\nYou know, that I'm still holding on your arm\nIt's getting dark\nThere's no light from above, you know\nYou know, that you will always be my sunshine\n'Cause tonight, we'll be fine\nI know, that you're not ready to see it goes down\nBut don't worry 'cause it won't forever go\nI know, that you still want to see\nThen tomorrow, I'll bring you here with me\n'Cause I know\nWe're running out of time\nTo see it going down today\nYou know, that I'm still holding on your arm\nIt's getting dark\nThere's no light from above, you know\nYou know, that you will always be my sunshine\n'Cause tonight, we'll be fine\nWe're running out of time\nTo see it going down today\nYou know, that I'm still holding on your arm\nIt's getting dark\nThere's no light from above, you know\nYou know, that you will always be my sunshine\nWe're running out of time\nTo see it going down today\nYou know, that I'm still holding on your arm\nIt's getting dark\nThere's no light from above, you know\nYou know, that you will always be my sunshine\nWe're running out of time\nTo see it going down today\nYou know, that I'm still holding on your arm\nIt's getting dark\nThere's no light from above, you know\nYou know, that you will always be my sunshine\n'Cause tonight, we'll be fine\n'Cause tonight, we'll be fine\n"
            },
            "game": {
                "soal": "There's no light from above, you know You know, that you will always _____ my sunshine 'Cause tonight, we'll be fine",
                "jawaban": "be"
            }
        }
    ]
}
```

### API Yang Dipakai
- [Spotify Developer](https://developer.spotify.com/) Untuk mengambil top tracks dari artist tertentu

- [Rapid API Spotify](https://rapidapi.com/Glavier/api/spotify23/) Untuk mengambil track lyricsnya saja


### Artist
Untuk artist anda dapat mengubahnya sendiri pada [kode ini](https://github.com/rgsannn/API-LyricsGameSpotify/blob/e0cf3ff6bd0d338c907a0f1f80145fbcf6a51a13/index.php#L85) asalkan artist tersebut terdaftar di spotify, berikut beberapa artist yang sudah saya tambahkan :
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
