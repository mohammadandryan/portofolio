<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Portofoliyou.com | Home</title>
</head>
<style>
    body {
        background-color: #ffffff;
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;

    }

    html {
        margin: 0;



    }

    .container {
        margin: 20px;
        padding: 20px;
    }


    .bgdark {
        background-color: #212542;
    }

    .text-center {
        text-align: center;
    }

    .text-white {
        color: #ffffff;
    }
    .judul {
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        background-color: #08955A;
        margin: 0;
        padding: 10px;
    }

    h1 {
        margin: 0;
        padding: 0px;
    }

    .labelt {
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        background-color: #084595;
        margin-top: 12px;
        padding: 13px;
    }
    .labelk {
        font-size: 12px;
        font-weight: bold;
        text-align: left;
        background-color: #D79E1B;
        color: #000;
        margin-top: 12px;
        padding: 13px;
    }

    .desc {
        
        width: 60%;
        margin: auto;
    }

    button {
        text-decoration: none;
        border: 0px;
    }

</style>

<body class="bgdark text-white">
<div class="judul">
    <h1>Curriculum Vittae</h1>
</div>
    <div class="container">
        <div class="row mt-4 pt-4 align-items-center justify-content-center">
            {{-- <div class="col-sm-4 pe-5 d-inline-block">
            <img src="{{ asset('img/' . Auth::guard('talentas')->user()->link) }}"
                class="imgprofil rounded-circle card-img-top" alt="...">
        </div> --}}
            <div class="col-sm-6 text-center ps-4 d-inline-block">
                <h1 class="text-center">{{ Auth::guard('talentas')->user()->nama }}</h1>
                <button class="btn labelt bg-bdark text-white mb-2"><b>{{ Auth::guard('talentas')->user()->talent }}</b></button>
                <div class="desc">
                    <p class="">{{ Auth::guard('talentas')->user()->desc }}</p>
                </div>
            </div>
        </div>

        <hr>
        <div class="row mt-3 justify-content-center">
            <div class=" text-center col-sm-10">
                <h1>Tentang Saya</h1>
                <p>Saya Mohammad Andryan, lulusan S1 Teknik Informatika Universitas Negeri Malang tahun 2025. Memiliki
                    pengalaman sebagai Admin Web Asrama Universitas Negeri Malang dengan achievement 25% peningkatan
                    performa
                    web. Saya memiliki minat berkarir menjadi Artificial Intelligence Developer namun sementara ini
                    masih
                    memiliki kemahiran di bidang Full Stack Developer menggunakan Bootstrap dan Laravel</p>
            </div>
        </div>
        <hr>
        <div class="row mb-3 mt-3 justify-content-center">
            <div class="col-sm-4">
                <div class="div mb-3">
                    <button class="btn labelk col btnyellow mt-3 align-self-center text-center">Kemampuan dan
                        Kompetensi</button>
                </div>

                <ul class="mt-3">
                    <li>Bootstrap</li>
                    <li>Laravel</li>
                    <li>MySQL</li>
                    <li>PHP</li>
                    <li>JQuery</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <div class="div mb-3">
                    <button class="btn labelk btnyellow mt-3 align-self-center text-center">Pengalaman Kerja</button>
                </div>
                <ul class="mt-2">
                    <li>2021 | Admin Gudang | CV. Aneka Pangan | Mencatat pemasukan dan pengeluaran stok produk </li>

                </ul>
            </div>
            <div class="col-sm-3">
                <div class="div mb-3">
                    <button class="btn labelk btnyellow mt-3 align-self-center text-center">Riwayat Pendidikan</button>
                </div>
                <ul class="mt-2">
                    <li>2021 - 2025 | S1 Teknik Informatika | Universitas Negeri Malang</li>
                    <li>2017 - 2020 | MIPA |SMAN 1 Leces</li>
                </ul>
            </div>
            <hr>

        </div>
    </div>
    </div>
    <footer class=" bgdark shadow-lg pt-4 pb-4 ">

        <p class="text-center text-light mb-0"><b>  Made with Yourtofolio.com <i
                    class="bi text-danger bi-heart-fill"></i></b></p>
    </footer>
    </div>

</body>

</html>
