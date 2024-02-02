<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin login </title>

    <link href="{{ asset('/admin-assets/style.css') }}" rel="stylesheet">


</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="login-container">
                <div class="top-wrap">ADMIN</div>
                <div class="bottom-wrap">
                    <p>
                        <input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder="Email">
                    </p>
                    <p>
                        <input type="password" class="form-control" value="" name="password" placeholder="Password">
                    </p>
                    <input type="submit" value="Login">
                </div>
            </div>
        </div>
    </div>
</body>
</html>