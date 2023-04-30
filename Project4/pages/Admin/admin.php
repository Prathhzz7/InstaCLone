<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Start Google Fonts API-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <!--End Google Fonts API-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
    <!--Start page's custom stylesheet-->
    <link rel="stylesheet" type="text/css" href='../Admin/admin.css'>
    <!--End page's custom stylesheet-->
    <title>Admin dashboard</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4 d-sm-block">
            <div class="container">
                <a class="navbar-brand" href="#">Share2go</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <!--Fetch admin username here-->
                            <!--Link to profile page-->
                            <a class="nav-link" href="#"><span><i class="fa-solid fa-user"></i></span>Profile</a>
                        </li>
                        <li class="nav-item">
                            <!--Link to post page-->
                            <!--End session here-->
                            <a class="nav-link" href="#"><button id="write-post-btn" class="btn main-button main-text">
                                    <p>Logout</p>
                                </button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container my-3">
            <h2 class="admin-table-header mb-2">Reports Table</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">post_id</th>
                        <th scope="col">post_user</th>
                        <th scope="col">user_id</th>
                        <th scope="col">post_text</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <th scope="col"><button type="button" class="btn btn-danger">delete post</button></th>
                        <th scope="col"><button type="button" class="btn btn-danger">delete user</button></th>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <th scope="col"><button type="button" class="btn btn-danger">delete post</button></th>
                        <th scope="col"><button type="button" class="btn btn-danger">delete user</button></th>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <th scope="col"><button type="button" class="btn btn-danger">delete post</button></th>
                        <th scope="col"><button type="button" class="btn btn-danger">delete user</button></th>
                    </tr>
            </table>
        </div>
    </main>
    <!--Scripts-->
    <!--Start jQuery-->
    <script src="../../assets/jquery/jquery-3.6.0.min.js"></script>
    <!--End jQuery-->
    <!--Start Popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!--End Popper-->
    <!--Start Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!--End Bootstrap-->
    <script src="./admin.js"></script>
</body>

</html>