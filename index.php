<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Lagu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #8A2387, #E94057, #F27121);
            color: #fff;
            overflow-y: auto;
        }

        .playlist-container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            padding: 10px;
            margin: 5px 0;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            transition: background 0.3s;
            display: flex;
            align-items: center;
        }

        li:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .song-name {
            font-weight: bold;
            font-size: 1.1rem;
        }

        .artist-name {
            font-size: 0.9rem;
            color: #ddd;
        }

        .profile-img {
            width: 60px;
            height: 60px;
            margin-right: 15px;
            border-radius: 5px;
        }

        audio {
            width: 90%;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="playlist-container">
       <h1>Playlist Lagu</h1>
        <ul id="playlist">
            <?php
                $songs = [
                     ["title" => "Bunga Maaf", "artist" => "Artist The Lantis", "file" => "The Lantis - Bunga Maaf (Visualizer).mp3", "image" => "bunga maaf.jfif"],
                ["title" => "Satu Bulan", "artist" => "Artist Bernadya", "file" => "Bernadya - Satu Bulan (Official Music Video).mp3", "image" => "satu bulan.jfif"],
                ["title" => "Nina", "artist" => "Artist Feast", "file" => "Nina - .Feast  Lirik Lagu.mp3", "image" => "maxresdefault.jpg"],
                ["title" => "Tampar", "artist" => "Artist Juicy Luicy", "file" => "Juicy Luicy - Tampar (Official Lyric Video).mp3", "image" => "Tampar.jfif"],
                ["title" => "Lantas", "artist" => "Artist Juicy Luicy", "file" => "Juicy Luicy - Lantas (Official Lyric Video).mp3", "image" => "lantas.jfif"],
                ["title" => "Rumah ke Rumah", "artist" => "Artist Hindia", "file" => "Hindia - Rumah Ke Rumah (Official Lyric & Commentary Video).mp3", "image" => "rumah ke rumah.jfif"],
                ["title" => "Anugerah terindah", "artist" => "Artist Andmesh", "file" => "ANDMESH - ANUGERAH TERINDAH (VIDEO LIRIK) LIRIK LAGU TERBARU.mp3", "image" => "anugerah terindah.jfif"],
                ["title" => "Bertaut", "artist" => "Artist Nadin Amizah", "file" => "Nadin Amizah - Bertaut (Lirik).mp3", "image" => "bertaut.jfif"],
                ["title" => "Sempurna", "artist" => "Artist Andra & The backbone", "file" => "Andra and The Backbone - Sempurna (lyrics).mp3", "image" => "sempurna.jfif"],
                ["title" => "Nanti kita seperti ini", "artist" => "Artist Batas Senja", "file" => "nanti kita seperti ini.mp3", "image" => "nanti kita seperti ini.jfif"],
                ["title" => "Runtuh", "artist" => "Artist Feby putri,Fiersa Besari", "file" => "Runtuh - Feby Putri feat. Fiersa Besari (Official Visualizer).mp3", "image" => "runtuh.jfif"],
                ["title" => "Garam & Madu", "artist" => "Artist Tenxi,Jemsii,Naykilla", "file" => "Tenxi, Naykilla & Jemsii - Garam & Madu (Sakit Dadaku) (Official Music Video).mp3", "image" => "garam dan madu.jfif"],
                ["title" => "Gala bunga Matahari", "artist" => "Artist Sal Priadi", "file" => "Sal Priadi - Gala bunga matahari  Lirik Lagu.mp3", "image" => "gala bunga matahari.jfif"],
                ["title" => "Jiwa yang bersedih", "artist" => "Artist Ghe Indrawari", "file" => "Ghea Indrawari - Jiwa Yang Bersedih (Lirik).mp3", "image" => "jiwa yang bersedih.jfif"],
                ["title" => "Blue", "artist" => "Artist YungKai", "file" => "WhatsApp Audio 2025-01-21 at 13.52.09.mpeg", "image" => "blue.jfif"],
                ["title" => "December", "artist" => "Artist Neck Deep", "file" => "Neck Deep - December.mp3", "image" => "december.jfif"],
                ["title" => "Lampu Kuning", "artist" => "Artist Juicy Luicy", "file" => "Juicy Luicy - Lampu Kuning (Official Lyric Video).mp3", "image" => "lampu kuning.jfif"],
                ["title" => "Terima Kasih", "artist" => "Artist Hal", "file" => "terima kasih.mp3", "image" => "terimakasih.jfif"],
                ["title" => "Perfect", "artist" => "Artist Ed Sheeran", "file" => "Ed Sheeran - Perfect.mp3", "image" => "perfect.jfif"],
                ["title" => "Shinunoga E-Wa", "artist" => "Artist Fujii Kaze", "file" => "Fujii Kaze - Shinunoga E-Wa (Not a MV).mp3", "image" => "shinu no ga.jfif"],
                ["title" => "Kata mereka ini berlebihan", "artist" => "Artist Bernadya", "file" => "Bernadya - Kata Mereka Ini Berlebihan (Official Video).mp3", "image" => "kata mereka ini berlebihan.jfif"],
                ["title" => "i think they call this love", "artist" => "Artist Elliot James Reay", "file" => "Elliot James Reay - I Think They Call This Love (Official Lyric Video).mp3", "image" => "i think.jfif"],
                ["title" => "Ayo Sayang culik aku dong", "artist" => "Artist Nisa Fauzia", "file" => "DJ AYO SAYANG CULIK AKU DONG VIRAL TIKTOK FULL SONG MAMAN FVNDY 2024.mp3", "image" => "ayo sayang culik.jfif"],
                ["title" => "Glue Song", "artist" => " Beabadoobee", "file" => "DJ AYO SAYANG CULIK AKU DONG VIRAL TIKTOK FULL SONG MAMAN FVNDY 2024.mp3", "image" => "ayo sayang culik.jfif"], 
                ];

                foreach ($songs as $index => $song) {
                    echo "<li data-index='$index'>";
                    echo "<img src='" . htmlspecialchars($song['image']) . "' alt='Profile' class='profile-img'>";
                    echo "<div>";
                    echo "<div class='song-name'>" . htmlspecialchars($song['title']) . "</div>";
                    echo "<div class='artist-name'>by " . htmlspecialchars($song['artist']) . "</div>";
                    echo "<audio controls><source src='" . htmlspecialchars($song['file']) . "' type='audio/mp3'>Your browser does not support the audio element.</audio>";
                    echo "</div>";
                    echo "</li>";
                }
            ?>
        </ul>
    </div>

    <script>
        const playlist = document.querySelectorAll('#playlist li');
        let currentAudioIndex = 0;

        // Play next song when the current song ends
        function playNext() {
            const currentAudio = playlist[currentAudioIndex].querySelector('audio');
            currentAudio.pause();
            currentAudio.currentTime = 0;

            currentAudioIndex = (currentAudioIndex + 1) % playlist.length;
            const nextAudio = playlist[currentAudioIndex].querySelector('audio');
            nextAudio.play();
        }

        // Add event listener to all audio elements
        playlist.forEach((item, index) => {
            const audio = item.querySelector('audio');
            audio.addEventListener('ended', playNext);

            // Play selected song and pause others
            audio.addEventListener('play', () => {
                currentAudioIndex = index;
                playlist.forEach((otherItem, otherIndex) => {
                    if (otherIndex !== index) {
                        const otherAudio = otherItem.querySelector('audio');
                        otherAudio.pause();
                        otherAudio.currentTime = 0;
                    }
                });
            });
        });
    </script>
</body>
</html>
