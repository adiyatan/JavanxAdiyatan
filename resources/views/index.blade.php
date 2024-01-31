<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiyatan x Javan Present Loading</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body {
            background-color: #0e0e0e;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        .loading-container {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .loading-text {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
            letter-spacing: 2px;
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

        .loading-span {
            font-size: 20px;
            font-style: italic;
            color: #3498db;
        }

        .loading-bar-container {
            width: 60%;
            height: 20px;
            background-color: #333;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
            animation: glowContainer 2s infinite alternate;
        }

        .loading-bar {
            height: 100%;
            width: 0;
            background-color: #3498db;
            transition: width 1s ease-in-out, background-color 0.5s ease-in-out;
            animation: glowBar 2s infinite alternate;
        }

        #myBar {
            display: none;
        }

        .loading-span {
            font-size: 20px;
            font-style: italic;
            color: #3498db;
        }

        .btn-primary {
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            animation: glowButton 2s infinite alternate;
        }

        @keyframes glowButton {
            from {
                background-color: #007bff;
                box-shadow: 0 0 10px #007bff, 0 0 20px #007bff, 0 0 30px #007bff;
            }

            to {
                background-color: #007bff;
                box-shadow: 0 0 20px #cd7f32, 0 0 30px #cd7f32, 0 0 40px #cd7f32;
            }
        }


        @keyframes glowBar {
            from {
                background-color: #3498db;
                box-shadow: 0 0 10px #3498db, 0 0 20px #3498db, 0 0 30px #3498db;
            }

            to {
                background-color: #cd7f32;
                box-shadow: 0 0 20px #cd7f32, 0 0 30px #cd7f32, 0 0 40px #cd7f32;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="loading-container">
            <div class="loading-text">Adiyatan x Javan</div>
            <span class="loading-span">Mempersembahkan</span>

            <div class="loading-bar-container">
                <div id="myBar" class="loading-bar"></div>
            </div>

            <p id="myP"><span id="demo"></span></p>

            <!-- Tambahkan event onclick untuk memanggil fungsi showLoading() -->
            <button class="btn btn-primary" onclick="showLoading()">Mulai!</button>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        function showLoading() {
            var startButton = document.querySelector('.btn-primary');
            var loadingBar = document.getElementById("myBar");

            // Sembunyikan tombol "Start"
            startButton.style.display = 'none';

            // Tampilkan loading bar
            loadingBar.style.display = 'block';

            var elem = document.getElementById("myBar");
            var width = 0;
            var id = setInterval(frame, 80);

            function frame() {
                if (width >= 180) {
                    window.location.href = "welcome";
                    clearInterval(id);
                } else {
                    width++;
                    console.log(width)
                    elem.style.width = width + '%';

                    // Map width to corresponding label
                    var labels = ["Memeriksa memori", "Memeriksa tugas yang terlambat", "Memeriksa poin", "Memeriksa waktu",
                        "Memeriksa keberanian", "Memeriksa gaji", "Menyalakan Windows", "Memeriksa Taiga",
                        "Melakukan tugas",
                        "Memeriksa kode", "Menyelesaikan tugas", "Selesai"
                    ];

                    var currentLabelIndex = Math.floor(width / (100 / labels.length));
                    var currentLabel = labels[currentLabelIndex];
                    if (currentLabel === undefined) {
                        currentLabel = "Compiling kenangan...";
                    }
                    document.getElementById("demo").innerHTML = currentLabel;
                }
            }
        }
    </script>
</body>

</html>
