<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/style-1.css">
    @include('Assets.links')

    <title>Class Management System</title>
</head>

<body>

    <div class="sidenav">
        <div class="login-main-text">
            <h2>Class Management System<br>Forget Password</h2>
            <p>Reset Password of {{$data['name']}}</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <h5>Name: {{$data['name']}}</h5>
                <div class="form-group padding1">
                    <label>Secret Question</label>
                    <p class="form-control">{{$data['secret_question']}} </p>
                </div>
                <form action='/reset-password' method='POST'>
                    @csrf
                    <div class="form-group padding1">
                        <label>Answer</label>
                        <input type="text" name="answer" class="form-control" placeholder="Answer" required>
                    </div>
                    <div class="form-group padding1">
                        <label>ID Number</label>
                        <input type="text" value={{$data['id_number']}} name="id" class="form-control"
                            placeholder="User ID" readonly>
                    </div>
                    <div class="form-group padding1">
                        <label>New Password</label>
                        <input type="password" name="password" class="form-control" placeholder="New Password" required>
                    </div>
                    <div class="form-group padding1">
                        <label>Config Password</label>
                        <input type="password" name="config_password" class="form-control"
                            placeholder="Reenter New Password" required>
                    </div>
                    <div class="padding1">
                        <button type="submit" class="btn btn-black ">Reset Password</button>
                    </div>
                </form>

                <br>
                <a href="{{ url('/') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>

</body>

</html>