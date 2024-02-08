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
                    <form action="{{ route('admin.authenticate')}}" method="post">
                        @csrf
                        <p>
                            <input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder="Email">
                        </p>
                        @error('email')
                            <p class="invalid-error"> {{ $message}}</p>
                        @enderror
                        <p>
                            <input type="password" class="form-control" value="" name="password" placeholder="Password">
                        </p>
                        
                        @error('msg')
                            <p class="invalid-error"> {{ $message}}</p>
                        @enderror

                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>