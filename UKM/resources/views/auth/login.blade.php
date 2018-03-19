<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pengukuran Kinerja UKM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{asset('plugins/lib/modernizr.js')}}"></script>
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/gif">

    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/animate-it/animate.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style-default.css')}}">
    <style>body{ color: #363A5C;}</style>
</head>

<body class="login2">

    <!-- Login Div Start Here -->
    <div class="login animated flipInY" id="logindiv">
        <div class="text-center logo">
            <h3>Pengukuran Kinerja UKM</h3>
        </div>

        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="input-icon">
                    <input type="email" class="form-control" name="email" placeholder="email@example.com">
                </div>
            </div>

            <div class="form-group">
                <div class="input-icon">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>

            <div class="clearfix">
                <button type="submit" class="btn btn-primary pull-right">LOGIN</button>
            </div>

        </form>

    </div>
    <!-- Login Div Ends Here -->
</body>
</html>
