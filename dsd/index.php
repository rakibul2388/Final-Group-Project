<!doctype html>
<html lang="en">

<?php
include_once("connection.php");

session_start();
$session = isset($_SESSION['email']);


if(isset($_POST['send-us-button'])){
    $name = $_POST['send-name'];
    $email = $_POST['send-email'];
    $description = $_POST['send-description'];

    if (empty($name) || empty($email) || empty($description)) {

        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if (empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if (empty($description)) {
          echo "<font color='red'>Description field is empty.</font><br/>";
        }
       
    } else {
        $query = "INSERT INTO userfeedback(name,email,description) VALUES('$name','$email','$description')";
        $result = mysqli_query($mysqli, $query);
        if ($result == true) {
            header("Location: index.php");
        } else {
            echo "you have a error";
        }
    }
    
}


?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="./img/logo.PNG">
    <title> DSD </title>
    <script src="https://kit.fontawesome.com/26d4a64054.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" id="home">
        <a class="navbar-brand font-weight-bold pl-5" href="#"> <img src="./img/logo.PNG" height="50px" width="50px "
                style="border-radius: 50%" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item pr-5">
                    <a class="nav-link  font-weight-bold" href="#home">Home</a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link  font-weight-bold" href="#services"> Services </a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link  font-weight-bold" href="#blog"> Blog </a>

                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link  font-weight-bold" href="#contact"> Contacts </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <section class="Home">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-sm-12 col-12">

                    <h1 class="text-white">YOUR SMILE <br>
                        OUR <span style="color: rgb(248, 70, 129);"> PASSION </span> <br>
                        YOUR LIFE </h1>
                    <button id="log-in_btn-id" onclick="location.href = 'login.php';" name="log-in-button" class="login btn btn-success mt-5 px-5"> Login </button>
                    <button id="register_btn-id" onclick="location.href = 'signup.php';"  name="sign-up-button" class="signUp btn btn-success mt-5 px-5"> Sign Up </button>
                </div>
            </div>
        </div>

        <?php
if($session == true){
    ?>
    <script type='text/javascript'>
    document.getElementById("log-in_btn-id").style.display = "none";
    document.getElementById("register_btn-id").style.display = "none";
    document.getElementById("logout_btn_id").style.display = "inline";
    
    </script>
    <?php
}
?>

    </section>

    <section class="About" id="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <img src="./img/secound.jpg" class="img-fluid" style="border-radius: 40px;" alt="">

                </div>
                <div class="col-lg-6 text-center">
                    <h1 class="py-5 text-center" style="color: palevioletred;"> About Us </h1>
                    <p class="text-center pl-5"> The purpose of this website is to help people that they can go right
                        doctor
                        for their disease. The DSD should be easy to use . We know that there are different doctors for
                        every disease,
                        So the DSD should be helpful for the users who do not know which doctor they should need to go
                        ..</p>
                    <button onclick="location.href = 'readmore.html';"  class="btn text-white mt-5" style="background-color: palevioletred;"> Read More </button>
                </div>
            </div>
        </div>
    </section>

    <section class="doctor" id="doctor">
        <div class="container py-5 text-center">
            <h1 class="pt-5"> Our Doctors </h1>
            <hr>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card py-3">
                        <div class="card-head">
                            <p class="font-weight-bold"> Habib <br><small> DMC </small></p>
                            <img src="./img/Habib.jpg" class="img-fluid" alt="">
                            <p class="pt-3"> Specalist of Medicine </p>
                            <button class="btn" style="color: blue"><a href="https://www.facebook.com/alhabib.sarker.5"><i class="fab fa-facebook-f"></i></a></button>
                            <button class="btn" style="color: blue"><i class="fab fa-twitter"></i></button>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3">
                    <div class="card py-3">
                        <div class="card-head">
                            <p class="font-weight-bold"> Harun <br><small> RMC </small></p>
                            <img src="./img/harun.jpg" class="img-fluid" alt="">
                            <p class="pt-3"> Specalist of cardiologist </p>
                            <button class="btn" style="color: blue"><a href="https://www.facebook.com/alhabib.sarker.5"><i class="fab fa-facebook-f"></i></a></button>
                            <button class="btn" style="color: blue"><i class="fab fa-twitter"></i></button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="card py-3">
                        <div class="card-head">
                            <p class="font-weight-bold"> Shazzad <br><small> JMC </small></p>
                            <img src="./img/shazzad.jpg" class="img-fluid" alt="">
                            <p class="pt-3"> Specalist of Sexual Medicine </p>
                            <button class="btn" style="color: blue"><a href="https://www.facebook.com/alhabib.sarker.5"><i class="fab fa-facebook-f"></i></a></button>
                            <button class="btn" style="color: blue"><i class="fab fa-twitter"></i></button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="card py-3">
                        <div class="card-head">
                            <p class="font-weight-bold"> Shakil <br><small> KYAMC </small></p>
                            <img src="./img/Shakil.jpg" class="img-fluid" alt="">
                            <p class="pt-3"> Specalist of Pathologists </p>
                            <button class="btn" style="color: blue"><a href="https://www.facebook.com/alhabib.sarker.5"><i class="fab fa-facebook-f"></i></a></button>
                            <button class="btn" style="color: blue"><i class="fab fa-twitter"></i></button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 mt-5">
                    <div class="card py-3">
                        <div class="card-head">
                            <p class="font-weight-bold"> Sayma <br><small> RMC </small></p>
                            <img src="./img/sayma.jpeg" class="img-fluid" alt="">
                            <p class="pt-3"> Specalist Of gynaecologist </p>
                            <button class="btn" style="color: blue"><a href="https://www.facebook.com/alhabib.sarker.5"><i class="fab fa-facebook-f"></i></a></button>
                            <button class="btn" style="color: blue"><i class="fab fa-twitter"></i></button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 mt-5">
                    <div class="card py-3">
                        <div class="card-head">
                            <p class="font-weight-bold"> Shahriyar <br><small> RMC </small></p>
                            <img src="./img/shahriar.jpg" class="img-fluid" alt="">
                            <p class="pt-3"> Specalist of Oncologists </p>
                            <button class="btn" style="color: blue"><a href="https://www.facebook.com/alhabib.sarker.5"><i class="fab fa-facebook-f"></i></a></button>
                            <button class="btn" style="color: blue"><i class="fab fa-twitter"></i></button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 mt-5">
                    <div class="card py-3">
                        <div class="card-head">
                            <p class="font-weight-bold"> Rakibul Islam <br><small> DMC </small></p>
                            <img src="./img/rakib.jpeg" class="img-fluid" alt="">
                            <p class="pt-3"> Specalist of Cardiologist </p>
                            <button class="btn" style="color: blue"><a href="https://www.facebook.com/alhabib.sarker.5"><i class="fab fa-facebook-f"></i></a></button>
                            <button class="btn" style="color: blue"><i class="fab fa-twitter"></i></button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 mt-5">
                    <div class="card py-3">
                        <div class="card-head">
                            <p class="font-weight-bold"> Freddi Highmore <br><small> RMC </small></p>
                            <img src="./img/freddie.jpg" class="img-fluid" alt="">
                            <p class="pt-3"> Surgical Resident </p>
                            <button class="btn" style="color: blue"><a href="https://www.facebook.com/alhabib.sarker.5"><i class="fab fa-facebook-f"></i></a></button>
                            <button class="btn" style="color: blue"><i class="fab fa-twitter"></i></button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <section class="service" id="services">
        <div class="container text-center py-5">
            <h1> Our Services </h1>
            <hr>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <span><i class="fas fa-user-nurse"></i></span>
                    <h2 class="font-weight-light"><a href="nurse.html"> Team Of Nurses </a> </h2>
                    <p> Ready to serve our Nurses 24 hours a day </p>
                </div>
                <div class="col-lg-4 mb-3">
                    <span><i class="fas fa-briefcase-medical"></i></span>
                    <h2 class="font-weight-light"><a href="#"> Aid Boxes </a> </h2>
                    <p> We have immediate treatment here using Aid Box </p>
                </div>
                <div class="col-lg-4 mb-3">
                    <span><i class="fas fa-syringe"></i></span>
                    <h2 class="font-weight-light"><a href="#"> Better Treatment </a> </h2>
                    <p> Our Doctors always try to Better Treatment </p>
                </div>
                <div class="col-lg-4 ">
                    <span><i class="fas fa-microscope"></i></span>
                    <h2 class="font-weight-light"><a href="#"> Disease Recovery </a> </h2>
                    <p> Our Doctors always suggest qualityfull Medicine for treatment </p>
                </div>
                <div class="col-lg-4 ">
                    <span><i class="fas fa-stethoscope"></i></span>
                    <h2 class="font-weight-light"><a href="#"> Check up Time </a> </h2>
                    <p> Our Doctors are available for Check-up 10.00 AM - 2.00 PM </p>
                </div>
                <div class="col-lg-4 ">
                    <span><i class="fas fa-ambulance"></i></span>
                    <h2 class="font-weight-light"><a href="#"> Active Emergency </a> </h2>
                    <p> We have 24 hours Emergency facility </p>
                </div>
            </div>
        </div>
    </section>


    <section class="blog" id="blog">
        <div class="container text-center py-5">
            <h1> Latest From Blog </h1>
            <hr>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-head">
                            <img src="./img/third.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="card-body">
                            <p class="font-weight-bold"><u><a href="#"> Attitude of Our Doctor </a></u></p>
                            <p>The doctor tries to understand what I am feeling and experiencing,
                                physically and emotionally, and communicates that understanding to me. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-head">
                            <img src="./img/four.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="card-body">
                            <p class="font-weight-bold"><u><a href="#"> Collaboration With Team </a></u></p>
                            <p>Team collaboration is a communication and that emphasizes teamwork,
                                innovative thinking and equal participation to achieve objectives. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-head">
                            <img src="./img/five.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="card-body">
                            <p class="font-weight-bold"><u><a href="#"> Working on new ideas </a></u></p>
                            <p>Here are some ways to encourage new ideas in your workplace: Talk with your
                                team about the importance of new ideas and reward others when they share them. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-head">
                            <img src="./img/six.jpg" class="img-fluid" alt="">

                        </div>
                        <div class="card-body">
                            <p class="font-weight-bold"><u><a href="#"> Setisfiction Of our Beloved </a></u></p>
                            <p> Satisfaction of patients is very important to us.
                                so,our doctors always traying to keep happy our patient. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="call" id="call">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-lg-4">
                    <span><i class="fas fa-phone"></i></span>
                    <h5><a href="#"> Give Us A Short Call </a></h5>
                </div>
                <div class="col-lg-4">
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <h5><a href="#"> Search Us On Google </a></h5>
                </div>
                <div class="col-lg-4">
                    <span><i class="fas fa-envelope-square"></i></span>
                    <h5><a href="#"> healthdoctor@gmail.com </a></h5>
                </div>
            </div>
        </div>
    </section>


    <section class="contact" id="contact">
        <div class="container text-white py-5">
            <h1 class="text-center"> Contact Us</h1>
            <div class="row">
                <div class="col-lg-5">
                    <form class="form-group" method="POST">
                        Name
                        <input name="send-name" type="text" class="form-control mb-3"
                            style="background-color: rgba(0, 0, 0, 0) !important;color: white;"
                            placeholder="Enter Your Name">
                        Email
                        <input name="send-email" type="email" class="form-control mb-3"
                            style="background-color: rgba(0, 0, 0, 0) !important;color: white;"
                            placeholder="Enter Your Email">
                        Discription
                        <input name="send-description" type="text" class="form-control mb-3"
                            style="background-color: rgba(0, 0, 0, 0) !important;color: white;"
                            placeholder="Please Enter your valuable comments.">
                        <button name="send-us-button" class="btn bg-white px-5 my-5 float-right"> Send Us </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: aliceblue; text-align: center;">
        <div class = "logOut">
            <button id="logout_btn_id" style="display: none;" name="logOut" class="btn bg-success px-5 my-5" onclick="location.href = 'logout.php';"> Log Out </button>
        </div>
        <?php
if($session == true){
    ?>
    <script type='text/javascript'>
    document.getElementById("logout_btn_id").style.display = "inline";
    
    </script>
    <?php
}
?>
    </section>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>