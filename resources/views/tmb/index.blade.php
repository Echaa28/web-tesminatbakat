<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Minat Bakat</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="header">
        <div class="logo-container">
        <img class="logo-image" src="{{ asset('images/ayokerja.png') }}" alt="Ayo Kerja Logo" />
            <div class="logo-text">
                <div class="logo-ayo">Ayo</div>
                <div class="logo-kerja">Kerja.co</div>
            </div>
        </div>
        <button class="quit-test" onclick="quitTest()">QUIT TEST</button>
    </header>
    <div id="popup">
        <div class="content">
            <h3>Arahan Pengerjaan Tes Minat Bakat</h3>
            <p>
                Anda akan diberikan sejumlah pertanyaan. Setiap pertanyaan dilengkapi dengan pilihan jawaban.
                Kemudian Anda memilih salah satu dari pilihan yang tersedia sesuai dengan kepribadian Anda.
            </p>
            <p>
                Dalam tes ini tidak ada jawaban benar ataupun salah. Jawablah sesuai dengan gambaran diri Anda sendiri.
            </p>
            <div class="buttons">
                <button id="start" onclick="startQuiz()">Mulai</button>
                <a href="#" onclick="cancelQuiz()">Lain Kali</a>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Apa hobi Anda?</h2>
        <div class="hobi-container">
            <button>Menulis</button>
            <button>Membaca</button>
            <button>Melukis</button>
            <button>Memasak</button>
            <button>Menyanyi</button>
            <button>Menari</button>
            <button>Traveling</button>
            <button>Musik</button>
            <button>Olahraga</button>
            <button>Fotografi</button>
            <button>Bermain Game</button>
            <button>Bersepeda</button>
        </div>
    </div>
        <div class="container2">
        <h2> Training atau Pelatihan apa yang pernah Anda ikuti?</h2>
        <div class="training-container2">
            <button>Menulis</button>
            <button>Membaca</button>
            <button>Melukis</button>
            <button>Memasak</button>
            <button>Menyanyi</button>
            <button>Menari</button>
            <button>Traveling</button>
            <button>Musik</button>
            <button>Olahraga</button>
            <button>Fotografi</button>
            <button>Bermain Game</button>
            <button>Bersepeda</button>
        </div>
    </div>
    </div>
</div>
        <div class="container2">
        <h2> Training atau Pelatihan apa yang pernah Anda ikuti?</h2>
        <div class="training-container2">
            <button>Menulis</button>
            <button>Membaca</button>
            <button>Melukis</button>
            <button>Memasak</button>
            <button>Menyanyi</button>
            <button>Menari</button>
            <button>Traveling</button>
            <button>Musik</button>
            <button>Olahraga</button>
            <button>Fotografi</button>
            <button>Bermain Game</button>
            <button>Bersepeda</button>
        </div>
        <div class="container3">
        <h2> Prestasi dalam bidang apa yang Anda miliki?</h2>
        <div class="prestasi-container3">
            <button>Menulis</button>
            <button>Membaca</button>
            <button>Melukis</button>
            <button>Memasak</button>
            <button>Menyanyi</button>
            <button>Menari</button>
            <button>Traveling</button>
            <button>Musik</button>
            <button>Olahraga</button>
            <button>Fotografi</button>
            <button>Bermain Game</button>
            <button>Bersepeda</button>
        </div>
    </div>

        <h2 style="margin-top: 40px;">Training atau Pelatihan apa yang pernah Anda ikuti?</h2>
        
        <h2 style="margin-top: 40px;">Training atau Pelatihan apa yang pernah Anda ikuti?</h2>

    </div>

    <script>
        function quitTest() {
            alert("Quitting the test!"); // Add your functionality here
        }
        window.onload = function() {
            document.getElementById('popup').style.display = 'flex';
        }

        function startQuiz() {
            document.getElementById('popup').style.display = 'none';
            document.querySelector('.container').style.display = 'block';
            document.querySelector('.container2').style.display = 'block';
            document.querySelector('.container3').style.display = 'block';
        }

        function cancelQuiz() {
            window.history.back();
        }
    </script>
</body>
</html>
