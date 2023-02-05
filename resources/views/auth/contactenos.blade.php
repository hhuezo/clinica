<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
    <meta name="author" content="websmirno.site">
    <meta name="format-detection" content="telephone=no">
    <title>Unidad Medica NR </title>
    <!-- Stylesheets -->
    <link href="{{ asset('dentco-html/vendor/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/vendor/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/icons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--Favicon-->
    <link rel="icon" href="{{ asset('dentco-html/images/LOGO.png') }}" type="image/x-icon">
    <link href='https://css.gg/awards.css' rel='stylesheet'>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900') }}" rel="stylesheet">
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk') }}"></script>
    <style type="text/css">
        .h1 {
            font-family: "Poppins", serif;
            line-height: 1em;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .h-decor {
            position: relative;
            display: inline-block;
            height: 3px;
            width: 53px;
            background-color: #2F609E;
        }

        p {
            font-size: 16px;
            line-height: 27px;
            margin-bottom: 27px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="background-color: #e3e9f1; border-radius: 25px;">
                <div class="">
                    <br>
                    <h3 class="h1">Unidad Medica NR</h3>
                    <div class="h-decor"></div>

                    <div class="card-body">
                        <br>
                        <p style="width: 75%;">
                            @if($mailData[0] != '') Paciente: {{$mailData[0]}} <br> @else <br> @endif
                            @if($mailData[1] != '') Correo Electronico: {{$mailData[1]}} <br> @else <br> @endif
                            @if($mailData[2] != '') Teléfono: {{$mailData[2]}} <br> @else <br> @endif

                        </p>
                        <p style="width: 75%;">
                            @if($mailData[3] != '') Mensaje: <br> {{$mailData[3]}} <br> @else <br> @endif
                        </p>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
</body>

</html>