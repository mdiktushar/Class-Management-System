<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('Assets.links')

    <title>Class Management System</title>
</head>

<body>

    <div class="sidenav">
        <div class="login-main-text">
            <h2>Class Management System<br> Login Page</h2>
            <p id='p1'>Login from here to access.</p>
            <p id='p2'>Forget Password...!</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <div id="login-form">
                    <form action='user' method="POST">
                        @csrf
                        <div class="form-group padding1">
                            <label>ID Number</label>
                            <input type="text" name="id" class="form-control" placeholder="User ID" required>
                        </div>
                        <div class="form-group padding1">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="padding1">
                            <button type="submit" class="btn btn-black ">Login</button>
                        </div>
                    </form>
                    <br>
                    <button id="forget-button" type="" class="btn btn-secondary">Forget Password</button>
                </div>


                <div id="forget-form">
                    <form action="forget-password" method="POST">
                        @csrf
                        <div class="form-group padding1">
                            <label>ID Number</label>
                            <input type="text" name="id" class="form-control" placeholder="User ID" required>
                        </div>
                        <div class="padding1">
                            <button type="submit" class="btn btn-black ">Go</button>
                        </div>
                    </form>
                    <br>
                    <button id="back-login" class="btn btn-secondary ">Back</button>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="/Assets/js/script-1.js"></script>

</html>