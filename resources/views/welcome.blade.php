<!DOCTYPE html>
<html>
<head>
    <title>Pengenalan Angka</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url('img/bg.jpg'); /* Menggunakan gambar mobil.jpg di folder img */
            background-size: cover;
            background-position: center;
        }
        .text-center {
            text-align: center;
            font-family: 'Mochiy Pop One', sans-serif;
            color: rgb(255, 255, 255);;
            font-size: 36px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }
        .button-container {
            text-align: center;
        }
        .button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #00ff00;
            color: #fff;
            font-size: 16px;
            cursor: pointer;

    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap">
</head>
<body>
    <img src="img/img2.png" alt="" class="img-fluid mx-auto d-block" width="450" height="200">

    <div class="button-container">
        <a href="halaman_baru.html"><button class="button">Bahasa Indonesia</button></a>
    </div>

    <div class="header">
        <div class="button-container">
            <button class="button" onclick="fungsiButton2()">Bahasa Inggris</button>
        </div>
    </div>

    <script>
        function fungsiButton2() {
            // Ganti dengan kode yang ingin dijalankan saat tombol 2 ditekan
            alert('Tombol 2 ditekan');
        }
    </script>
</body>
</html>
