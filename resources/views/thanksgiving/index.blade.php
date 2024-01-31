<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Search Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <style>
        body {
            margin: 0;
            height: 100%;
            background-color: #000;
            color: #fff;
            font-family: 'Cursive', sans-serif;
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

        #searchInput {
            padding: 10px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            width: 300px;
            margin-right: 10px;
        }

        #searchButton {
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
            background: linear-gradient(to right, #ffd700, #ffa500);
            color: #fff;
        }

        #searchButton:hover {
            filter: brightness(1.2);
        }

        #recommendationsContainer {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .recommendation {
            padding: 10px;
            border: 1px solid #fff;
            border-radius: 5px;
            margin: 0 10px 10px 0;
            background-color: #333;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .recommendation:hover {
            background-color: #444;
            transform: scale(1.05);
        }

        .btn-primary {
            background-color: #ffa500;
        }

        .btn-secondary {
            background-color: #808080;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Cari nama mu</h2>
        <div>
            <input type="text" id="searchInput" placeholder="Masukkan nama lengkapmu"
                oninput="showRecommendations()">
            <button id="searchButton" onclick="searchClicked()">Cari</button>
        </div>
        <div id="recommendationsContainer"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        var addedRecommendations = [];

        function showRecommendations() {
            var searchInput = $('#searchInput').val();
            var recommendationsContainer = $('#recommendationsContainer');

            recommendationsContainer.html('');
            addedRecommendations = [];

            if (/[^a-zA-Z0-9\s]/.test(searchInput)) {
                recommendationsContainer.html('<p>Hey, jangan hack web ini!</p>');
                return;
            }

            if (searchInput.length > 0) {
                $.ajax({
                    url: '/thanksgiving/get-recommendations',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        searchInput: searchInput,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        if (data.length > 0) {
                            $.each(data, function(index, recommendation) {
                                var recommendationElement = $('<div class="recommendation"></div>');
                                recommendationElement.text(recommendation.name);
                                recommendationsContainer.append(recommendationElement);
                            });
                        } else {
                            recommendationsContainer.html('<p>Tidak ada entri yang ditemukan untuk input: ' +
                                searchInput +
                                '</p>');
                        }
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            } else {
                recommendationsContainer.html('<p>Tolong ketikan nama dengan benar</p>');
            }
        }

        function searchClicked() {
            var searchInput = $('#searchInput').val();
            alert("Performing search for: " + searchInput);
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>
