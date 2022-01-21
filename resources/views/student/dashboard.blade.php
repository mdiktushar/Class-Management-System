<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Assets.links')
    <!-- <link rel="stylesheet" href="Assets/css/style-2.css"> -->
    <title>Class Management System</title>
</head>

<body>
    @include('Assets.sidebar')
    <div class="content">
        <!-- Body Cods will be hear -->
        <div class="container profile_context">
            <img src="https://st1.bollywoodlife.com/data/topics/image/7/17237/27c829ce467384376cc8168f196df30d_225X300_1.jpg"
                alt="profile image" width="150" height="200">
            <br>
            <br>
            Name: {{$user->name}} <p></p>
            ID: {{$data->id_number}}<p></p>
            Father: {{$data->father}}<p></p>
            Mother: {{$data->mother}}<p></p>
            Sex: {{$data->sex}}<p></p>
            Department: {{$data->department}} <p></p>
            Semister: {{$data->semister}}<p></p>
            Address: {{$data->address}}<p></p>
            Mobile: {{$data->mobile}}<p></p>
        </div>
    </div>

</body>

</html>