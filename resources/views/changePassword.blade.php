<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Assets.links')
    <link rel="stylesheet" href="..Assets/css/style-2.css">
    <title>{{$id}}</title>
</head>

<body>

    <div style="padding:15%">
        @if(session('message1'))
        <div class="alert alert-success">{{session('message1')}}</div>
        @elseif(session('message2'))
        <div class="alert alert-danger">{{session('message2')}}</div>
        @endif
        <form action="{{url('passordChange-page')}}" method="post">
            @csrf
            <input type="text" name=id value={{$id}} hidden>
            <div class="form-group padding1">
                <label>Current Password Password</label>
                <input type="password" name="current_password" class="form-control" required>
            </div>
            <br>
            <div class="form-group padding1">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" required>
            </div>
            <br>
            <div class="form-group padding1">
                <label>Conferm Password</label>
                <input type="password" name="password_conferm" class="form-control" required>
            </div>
            <br>
            <div class="padding1">
                <button type="submit" style="color: rgb(228, 228, 228);" class="btn btn-success">Go</button>
            </div>
        </form>
        <br><br>
        <button id="back-login" class="btn btn-secondary ">Back</button>
    </div>

</body>

</html>