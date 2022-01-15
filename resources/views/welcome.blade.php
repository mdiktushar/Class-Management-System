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
            <p>Login or register from here to access.</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form action='user' method="POST">
                    @csrf
                    <div class="form-group padding1">
                        <label>ID Number</label>
                        <input type="text" name="id" class="form-control" placeholder="User Name">
                    </div>
                    <div class="form-group padding1">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="padding1">
                        <button type="submit" class="btn btn-black ">Login</button>
                        <button type="submit" class="btn btn-secondary">Forget Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>