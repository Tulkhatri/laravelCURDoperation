<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add user form</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h2>Add New User </h2>
                <form action="{{route('addUser')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name">Name:</label>
                        <input type="text" class="form-control"name="userName">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name">Email:</label>
                        <input type="email" class="form-control"name="userEmail">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name">Age:</label>
                        <input type="text" class="form-control" name="userAge">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name">City:</label>
                        <input type="text" class="form-control"name="userCity">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
