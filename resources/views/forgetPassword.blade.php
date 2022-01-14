<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('Assets.links')

    <title>Student Management System</title>
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
                <form>
                    <div class="form-group padding1">
                        <label>University ID</label>
                        <input type="text" class="form-control" placeholder="User Name">
                    </div>
                    <div class="form-group padding1">
                        <label>Useremail</label>
                        <input type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="padding1">
                        <button type="submit" class="btn btn-black ">Send Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>