<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('/Assets.links')
    <link rel="stylesheet" href="../Assets/css/style-2.css">
    <title>Class Management System</title>
</head>

<body>
    @include('Assets.sidebar')
    <div class="content">
        <!-- Body Cods will be hear -->
        <form action="/saveChangeStudent" method="get" style="padding-top: 7%">
            @csrf
            <input type="text" name="name" placeholder="Name" value={{$data2->name}}><br><br>
            <input type="text" name="id" placeholder="ID" value={{$data1->id_number}} readonly><br><br>
            <input type="text" name="department" placeholder="Department" value={{$data1->department}}><br><br>
            <input type="text" name="semister" placeholder="Semister" value={{$data1->semister}} readonly><br><br>
            <input type="text" name="father" placeholder="Father" value={{$data1->father}}><br><br>
            <input type="text" name="mother" placeholder="Mother" value={{$data1->mother}}><br><br>
            <input type="text" name="sex" placeholder="Sex" value={{$data1->sex}}><br><br>
            <input type="text" name="address" placeholder="Address" value={{$data1->address}}><br><br>
            <input type="text" name="mobile" placeholder="Mobile" value={{$data1->mobile}}><br><br>

            <button class="btn btn-success">Save</button>
        </form>
    </div>

</body>

</html>