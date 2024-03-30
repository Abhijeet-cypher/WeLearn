<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contactus.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand me-2" href="index.php">
                <img src="images/logo.png" height="50" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
            </a>

            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.php">About us</a>
                    </li>
                    <li class="nav-item dropdown" data-bs-theme='light'>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Explore
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Free Courses</a></li>
                            <li><a class="dropdown-item" href="#">Top Courses</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Free Webinar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="hirefromus.php">Hire From Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Institute</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contactus.php">Contact Us</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center">
                    <button data-mdb-ripple-init type="button" class="btn btn-outline-light px-3 me-2">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $message = $_POST['message'];


        if (!empty($name) && !empty($number) && !empty($email) && !empty($message)) {

            $host = 'localhost';
            $db = 'new';
            $username = "root";
            $password = "";

            try {
                $conn = new mysqli($host, $username, $password, $db);

                if ($conn->connect_error) {
                    throw new Exception("Connection failed: " . $conn->connect_error);
                }


                $name = $conn->real_escape_string($name);
                $number = $conn->real_escape_string($number);
                $email = $conn->real_escape_string($email);
                $message = $conn->real_escape_string($message);

                $sql = "INSERT INTO message (name, number, email, message)
                        VALUES ('$name', '$number', '$email', '$message')";

                if ($conn->query($sql) === TRUE) {
                    echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congrats!</strong> Form submitted successfully 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    ';
                } else {
                    // throw new Exception("Error: " . $sql . "<br>" . $conn->error);
                    echo '
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Something went wrong
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    ';
                }

                $conn->close();
            } catch (Exception $e) {
                echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong>An error occurred while processing your request. Please try again later.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            }
        } else {
            echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> All Fields are required
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
        }
    }

    ?>

    <div class="form">
        <div class="form-text">
            <h1>Let's build a career together. Get in touch with us</h1>
            <p>Climb the ladder of skill-enabled success by tapping into and learning from the best minds in your area of interest. Fill up the form to get in touch with us!
            </p>
        </div>
        <div class="container form-div">
            <form method="post" action="contactus.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email NUmber</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="number">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="message">
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary px-5"></button>
                </div>
            </form>
        </div>
    </div>



    <div class="contact-cards">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Email Us</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Send us email at : <a href="mailto: tiwariabhijeet27@gmail.com<">welearning@gmail.com</a> </p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contact Us</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Call us at <a href="tel: +918291159565">+91 8291159565 </a></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Address</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Thane 400601, Maharashtra</p>
            </div>
        </div>
    </div>



    <?php include('./view/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>