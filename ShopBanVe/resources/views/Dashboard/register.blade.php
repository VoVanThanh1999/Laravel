<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Register</title>
</head>
<body>
    <div id="logreg-forms">
        <form action="{{ route('register.create') }}" class="form-signin" method="POST">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign up</h1>
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

            <div class="form-group">
                <label>Name</label>
                <input type="text" id="" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Full Name" >
                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" id="" name="email" value="{{ old('password') }}" class="form-control" placeholder="Enter Email Address" >
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" id="" name="password" class="form-control" placeholder="Enter Password" required="">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>

            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign up</button>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <a href="{{ route('login') }}" >I already have an account, Sign in</a>
            {{-- <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button> --}}
            </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
</body>
</html>