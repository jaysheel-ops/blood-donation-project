<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Project</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <?php
    $con = new mysqli("localhost", "root", "", "blood_donation");
    if ($con->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    if ($result = mysqli_query($con, "SELECT * FROM addresses")) {
        $rows = mysqli_fetch_all($result);
        echo print_r($result);
    }



    mysqli_close($con);
    ?>

    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <div class="container">
                <a class="navbar-brand text-bg-dark" href="index.php">Blood Donations</a>
            </div>

            <ul class="nav justify-content-end d-flex flex-nowrap">
                <li class="nav-item">
                    <a class="nav-link text-bg-dark active" aria-current="page" href="donate.php">Donate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-bg-dark" href="request.php">Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-bg-dark" href="signin.php">SignIn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-bg-dark" href="signup.php">SignUp</a>
                </li>

            </ul>
        </div>
    </nav>

    <main>
        <div class="container body-container">
            <div class="row this-row justify-content-center">
                <h3 class="w-25 p-2 bg-danger bg-gradient rounded-5 m-4 text-center">Sign Up</h3>
            </div>


        </div>

        <div class="container body-container">
            <div class="row justify-content-center">
                <form action="submit.php" method="post" class="row g-3 m-4">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Email</label>
                        <input type="email" name="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Username</label>
                        <input type="username" name="username" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4">
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" name="state" class="form-select state-value">
                            <option selected disabled>Choose...</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Punjab">Punjab</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">City</label>
                        <select id="inputCity" name="city" class="form-select city-value">
                            <option selected disabled>Choose...</option>

                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Area</label>
                        <select id="inputArea" name="area" class="form-select area-value disabled">
                            <option selected disabled>Choose...</option>
                        </select>
                    </div>

                    <div class="col-12 my-4 justify-content-center text-center">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>



    </main>

    <script src="js/bootstrap.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>