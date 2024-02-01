<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('storage/icon/icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('storage/icon/icon.png') }}" type="image/x-icon">
    <title>Search Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

    <style>
        body {
            margin: 0;
            height: 100%;
            background-color: #1a1a1a;
            color: #fff;
            font-family: 'Cursive', sans-serif;
            background-size: cover;
            overflow: hidden;
        }

        .card {
            width: 18rem;
            margin: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s;
            border: 1px solid #fff;
            border-radius: 15px;
            overflow: hidden;
        }

        .card:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .card-img-top {
            max-height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #fff;
        }

        .card-body {
            background-color: #222;
            padding: 20px;
        }

        .card-title,
        .card-text {
            color: #fff;
        }

        .list-group-item {
            background-color: #222;
            border: none;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .list-group-item:hover {
            background-color: #333;
        }

        .badge {
            background-color: #d4af37;
            color: #fff;
            padding: 8px;
            border-radius: 5px;
            margin-right: 5px;
            font-size: 14px;
            font-weight: bold;
        }

        .card-link {
            color: #ffa500;
            text-decoration: none;
            transition: color 0.3s;
        }

        .card-link:hover {
            color: #ffd700;
        }

        .luxurious-container {
            background-color: #4a4a4a;
            padding: 20px;
            border-radius: 10px;
            margin-top: 10px;
            overflow-y: auto;
            max-height: calc(100vh - 40px);
            border: 2px solid #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        p {
            color: #fff;
        }

        html {
            scroll-behavior: smooth;
        }

        .luxurious-container::-webkit-scrollbar {
            width: 10px;
        }

        .luxurious-container::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 5px;
        }

        .list-group-item.active {
            background-color: #555;
        }

        .list-group-item.active:hover {
            background-color: #555;
        }

        .list-group-item.active a {
            color: #ffd700;
            text-decoration: none;
            transition: color 0.3s;
            text-shadow: 0 0 10px #ffd700;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ url('storage/1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Penghargaan untuk seorang mentor" class="badge bg-warning">Mentor</span>
                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Penghargaan untuk seorang leader" class="badge bg-danger">Leader</span>
                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Penghargaan untuk kerja sama tim yang baik" class="badge bg-success">Team
                                work</span>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="row">
                            <div id="list-example" class="list-group">
                                <p class="list-group-item">Daftar isi</p>
                                <a class="list-group-item list-group-item-action" href="#list-item-1">Kesan dan
                                    pesan</a>
                                <a class="list-group-item list-group-item-action" href="#list-item-2">Ucapan
                                    Terimakasih</a>
                                <a class="list-group-item list-group-item-action" href="#list-item-3">Penutup</a>
                                <a class="list-group-item list-group-item-action" href="#list-item-4">Penghargaan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="luxurious-container">
                    <p>Halo $name, <br>
                        terima kasih sudah meluangkan waktu untuk membaca pesan terakhir ini. Saya ingin
                        mengucapkan terima kasih atas dedikasi dan kontribusi $name selama
                        masa magang di PT
                        Javan Cipta Solusi. Ini adalah ungkapan terima kasih saya atas partisipasi $name yang
                        berarti. Saya harap pengalaman ini memberikan kebahagiaan dan kenangan indah untuk
                        $name Selamat membaca dan semoga kesuksesan selalu menyertai $name di masa depan
                    </p>
                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"
                        class="scrollspy-example" tabindex="0">
                        <h4 id="list-item-1">Kesan dan pesan</h4>
                        <p></p>
                        <h4 id="list-item-2">Ucapan Terimakasih</h4>
                        <p></p>
                        <h4 id="list-item-3">Penutup</h4>
                        <p></p>
                        <h4 id="list-item-4">Penghargaan</h4>
                        <p>Terima kasih telah membaca hingga bagian ini. Saya ingin memberikan penghargaan berupa
                            sertifikat sebagai tanda terima kasih. Meskipun saat ini sertifikat ini mungkin belum
                            memiliki nilai formal, namun saya memberikannya sebagai kenangan istimewa antara kita dan
                            sebagai simbol kebermaknaan Anda dalam perjalanan peningkatan ilmu yang luar biasa ini.
                            Silakan tekan tombol download untuk mendapatkan sertifikatnya.</p>
                        <button id="downloadCertificateBtn" class="btn btn-warning mt-3"
                            style="border-radius: 10px; padding: 10px 20px; font-size: 18px;">
                            <i class="fas fa-download" style="margin-right: 10px;"></i> Download Certificate
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a.list-group-item-action').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelectorAll('a.list-group-item-action').forEach(item => {
                        item.classList.remove('active');
                    });
                    this.classList.add('active');
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            document.getElementById('downloadCertificateBtn').addEventListener('click', function() {
                var certificateName = 'tes.pdf';

                var downloadURL = '/download-certificate/' + certificateName;

                window.location.href = downloadURL;
            });
        });
    </script>


</body>

</html>
