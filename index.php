<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordPress Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
           background: #83a4d4;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #b6fbff, #83a4d4);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #b6fbff, #83a4d4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            font-family: 'Roboto', sans-serif;


        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);

            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            margin-bottom: 30px;
            text-align: center;
            color: #007bff;
            animation: fadeInUp 1s;
        }

        .form-container p {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .result-container {
            margin-top: 30px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .heading , .description  {
            color: #fff;
            animation: fadeInUp 1s;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto form-container">
                <h1 class="text-center heading">WordPress Password Generator</h1>
                 <p class="text-center description">Input your string and generate your strong password.</p>
                <form id="generate">
                    <div class="form-group">
                        <label for="string_c">String</label>
                        <input type="text" class="form-control" id="string_c" placeholder="Enter your string">
                    </div>
                    <div class="form-group">
                        <label for="password_c">Password</label>
                        <input type="text" class="form-control" id="password_c" placeholder="Generated password"
                            readonly>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Generate Password</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 mx-auto form-container">
                <h1 class="text-center heading">Check Password (True/False)</h1>
                <p class="text-center description">Check if a given password matches the specified string.</p>
                <form id="checkpass">
                    <div class="form-group">
                        <label for="string">String</label>
                        <input type="text" class="form-control" id="string" placeholder="Enter your string">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="hasil">Result</label>
                        <input type="text" class="form-control" id="hasil" placeholder="Result" readonly>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Check Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="custom.js"></script>
</body>

</html>
