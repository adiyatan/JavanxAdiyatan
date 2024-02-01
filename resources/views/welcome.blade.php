<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('storage/icon/icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('storage/icon/icon.png') }}" type="image/x-icon">
    <title>Introduction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        body {
            margin: 0;
            height: 100%;
            background-color: #000;
            color: #fff;
            font-family: 'Cursive', sans-serif;
            background-image: url('public/storage/1.png');
            /* Ganti dengan path yang sesuai */
            background-size: cover;
            overflow: hidden;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #text1 {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
            line-height: 1.4;
            display: inline-block;
            animation: glow 2s infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px silver, 0 0 20px silver, 0 0 30px silver;
            }

            to {
                text-shadow: 0 0 20px #cd7f32, 0 0 30px #cd7f32, 0 0 40px #cd7f32;
            }
        }

        .button-container {
            margin-top: 20px;
            display: none;
        }

        .glow-gold,
        .glow-silver {
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 1em;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .glow-gold {
            background: linear-gradient(to right, #ffd700, #ffa500);
            color: #fff;
        }

        .glow-silver {
            background: linear-gradient(to right, #c0c0c0, #808080);
            color: #fff;
        }

        .glow-gold:hover,
        .glow-silver:hover {
            filter: brightness(1.2);
        }

        .toast-body {
            background-color: #333;
            color: #fff;
        }

        .btn-primary {
            background-color: #ffa500;
        }

        .btn-secondary {
            background-color: #808080;
        }

        .offcanvas-header {
            background-color: #333;
            color: #fff;
        }

        .offcanvas-body {
            background-color: #333;
            color: #fff;
        }

        .accordion-item {
            background-color: #333;
            color: #fff;
            border: 1px solid #555;
        }

        .accordion-button {
            background-color: #555;
            color: #fff;
        }

        .accordion-button:hover {
            background-color: #777;
        }

        .accordion-body {
            background-color: #444;
            color: #fff;
            border-top: 1px solid #555;
        }

        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            pointer-events: none;
        }

        #overlay:hover {
            display: none;
        }

        .swal2-popup {
            font-family: 'Cursive', sans-serif;
            background-color: #333;
            color: #fff;
        }

        .swal2-title {
            color: #ffa500;
        }

        .swal2-content {
            color: #fff;
        }

        .swal2-actions .btn-primary {
            background-color: #ffa500;
        }

        .swal2-actions .btn-secondary {
            background-color: #808080;
        }
    </style>
</head>

<body>

    <div id="overlay">

    </div>
    <div class="container">
        <h2 id="text1"></h2>
        <div class="button-container" id="buttonContainer">
            <button class="glow-gold" onclick="buttonClick('gold')">Thanksgiving</button>
            <button class="glow-silver" onclick="buttonClick('silver')">Story</button>
        </div>
    </div>
    <div class="toast position-absolute end-0 bottom-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            Bingung pilih yang mana? tekan tombol "Show" untuk penjelasan tombol
            <div class="mt-2 pt-2 border-top">
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Show</button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
        aria-labelledby="offcanvasWithBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Instructions</h5>
            <button type="button" class="btn-close text-reset light" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="translationToggle" onchange="toggleTranslation()">
                <label class="form-check-label" for="translationToggle">Translate to Indonesia</label>

            </div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Thanksgiving button
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body" id="textThanks">
                            This button will take you to a page of final tributes to people I have interacted with,
                            provided assistance, and so on. There, there are messages of gratitude, greetings, and a
                            small surprise as an expression of thanks for the contribution and support that has been
                            given
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            Story button
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body" id="textStory">
                            This button will take you to a page that tells about Adiyatan internship journey at PT Java
                            Cipta Solusi
                        </div>
                    </div>
                </div>
            </div>
            <p id="textRecom">I recommend pressing the story button first</p>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var overlay = document.getElementById('overlay');

            overlay.addEventListener('mouseenter', function() {
                overlay.style.display = 'none';
            });
        });
    </script>

    <script>
        var love = setInterval(function() {
            var r_num = Math.floor(Math.random() * 40) + 1;
            var r_size = Math.floor(Math.random() * 65) + 10;
            var r_left = Math.floor(Math.random() * 100) + 1;
            var r_bg = Math.floor(Math.random() * 25) + 100;
            var r_time = Math.floor(Math.random() * 5) + 5;
        }, 500);

        var i = 0;
        var txt1 =
            "Sebuah perjalanan telah dimulai > Tantangan datang... > Kebahagiaan dan kesedihan telah berlalu.. > Izinkan saya mempersembahkan > == A Farewell == < by adiyatan";
        var speed = 100;
        typeWriter();

        function typeWriter() {
            if (i < txt1.length) {
                if (txt1.charAt(i) == '<')
                    document.getElementById("text1").innerHTML += '</br>';
                else if (txt1.charAt(i) == '>')
                    document.getElementById("text1").innerHTML = '';
                else if (txt1.charAt(i) == '|') {
                    // Redirect to a link (modify as needed)
                    location.href =
                        "https://www.canva.com/design/DAFP1OVEgk4/As6SZx1Jkj8KYDnQunftnA/view?utm_content=DAFP1OVEgk4&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton";
                } else
                    document.getElementById("text1").innerHTML += txt1.charAt(i);
                i++;
                if (i == txt1.length) {
                    // Add your additional actions when the typing is complete
                    showButtons();
                } else {
                    setTimeout(typeWriter, speed);
                }
            }
        }

        var originalText = {
            offcanvasWithBackdropLabel: "Instructions",
            textThanks: "This button will take you to a page of final tributes to people I have interacted with, provided assistance, and so on. There, there are messages of gratitude, greetings, and a small surprise as an expression of thanks for the contribution and support that has been given",
            textStory: "This button will take you to a page that tells about Adiyatan internship journey at PT Java Cipta Solusi",
            textRecom: "I recommend pressing the story button first"
        };

        function toggleTranslation() {
            var checkbox = document.getElementById("translationToggle");
            var idToToggle = checkbox.checked ? "id" : "eng";

            // Lakukan apa pun yang Anda inginkan dengan idToToggle
            console.log("Nilai id yang akan diubah: " + idToToggle);

            if (idToToggle === "id") {
                document.getElementById("offcanvasWithBackdropLabel").innerText = "instruksi";
                document.getElementById("textThanks").innerText =
                    "Tombol ini akan membawa Anda ke halaman penghormatan terakhir kepada orang-orang yang pernah berinteraksi dengan saya, memberikan bantuan, dan sebagainya. Di sana terdapat pesan ucapan terima kasih, salam, dan kejutan kecil sebagai ungkapan terima kasih atas kontribusi dan dukungan yang telah diberikan.";
                document.getElementById("textStory").innerText =
                    "Tombol ini akan membawa Anda ke halaman yang menceritakan tentang perjalanan magang Adiyatan di PT Java Cipta Solusi";
                document.getElementById("textRecom").innerText = "Saya sarankan menekan tombol cerita terlebih dahulu";
            } else {
                document.getElementById("offcanvasWithBackdropLabel").innerText = originalText.offcanvasWithBackdropLabel;
                document.getElementById("textThanks").innerText = originalText.textThanks;
                document.getElementById("textStory").innerText = originalText.textStory;
                document.getElementById("textRecom").innerText = originalText.textRecom;
            }
        }

        function showButtons() {
            var buttonContainer = document.getElementById('buttonContainer');
            buttonContainer.style.opacity = 0;
            buttonContainer.style.display = 'block';
            fadeIn(buttonContainer);

            showToast();
        }

        function showToast() {
            var toastElement = document.querySelector('.toast');
            var toastInstance = new bootstrap.Toast(toastElement, {
                autohide: false,
                delay: 5000,
                animation: true,
                position: 'bottom-end'
            });

            toastElement.querySelector('.toast-body').style.backgroundColor = '#333'; // Background color
            toastElement.querySelector('.btn-primary').style.backgroundColor = '#ffa500'; // Button color
            toastElement.querySelector('.btn-secondary').style.backgroundColor = '#808080'; // Button color

            toastInstance._element.style.bottom = '0';
            toastInstance._element.style.right = '0';

            toastInstance.show();
        }

        function fadeIn(element) {
            var opacity = 0;
            var timer = setInterval(function() {
                if (opacity >= 1) {
                    clearInterval(timer);
                }
                element.style.opacity = opacity;
                opacity += 0.1;
            }, 50);
        }

        function buttonClick(type) {
            if (type === 'gold') {
                Swal.fire({
                    title: 'Apakah Anda sudah melihat story?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Terima kasih sudah membaca story!',
                            text: 'Anda akan dipindahkan ke halaman thanksgiving.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location.href = '/thanksgiving';
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire({
                            title: 'Apakah Anda berkenan membuka story?',
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonText: 'Ya',
                            cancelButtonText: 'Tidak'
                        }).then((secondaryResult) => {
                            if (secondaryResult.isConfirmed) {
                                Swal.fire({
                                    title: 'Terima kasih sudah mau membaca!',
                                    text: 'Anda akan dipindahkan ke halaman story dengan tab baru. Setelah membaca, silakan kembali ke sini.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    window.open('/story', '_blank');
                                    Swal.fire({
                                        title: 'Terima kasih sudah membaca story!',
                                        text: 'Anda akan dipindahkan ke halaman thanksgiving.',
                                        icon: 'success',
                                        confirmButtonText: 'OK'
                                    }).then(() => {
                                        window.location.href = '/thanksgiving';
                                    });
                                });
                            } else {
                                Swal.fire({
                                    title: 'Memindahkan Anda ke halaman thanksgiving',
                                    icon: 'info'
                                }).then(() => {
                                    window.location.href = '/thanksgiving';
                                });
                            }
                        });
                    }
                });
            } else if (type === 'silver') {
                // Replace this alert with your desired action for the 'silver' button
                Swal.fire({
                    title: 'Button clicked: silver',
                    icon: 'info'
                });
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
