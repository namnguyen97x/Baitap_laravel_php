<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Application</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
</head>
<body>
<section class="vh-100" style="background-color: #4B515D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card" style="color: #4B515D; border-radius: 35px;">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <h6 class="flex-grow-1">{{ $location }}</h6>
                            <h6>{{ $currentTime }}</h6>
                        </div>
                        <div class="d-flex flex-column text-center mt-5 mb-4">
                            <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;">{{ number_format($tempC, 2) }}°C</h6>
                            <span class="small" style="color: #868B94">{{ $typeWeather }}</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1" style="font-size: 1rem;">
                                <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span class="ms-1">{{ $speedWind }} m/s</span></div>
                                <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i> <span class="ms-1">{{ $humidity }}%</span></div>
                            </div>
                            <div>
                                <img src="{{ $iconWeather }}" width="100px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>
</html>
