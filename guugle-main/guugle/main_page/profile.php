<?php
// Ensures that user has successfully logged in and has a full profile with us!
session_start();
if (!isset($_SESSION["id"]) || !isset($_SESSION["login"])  ){
  header("Location: ../home_page/login.html");
  exit();
}

?>

<script type='text/javascript'>
const id = '<?php echo $_SESSION["id"]?>';
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../parallax.js-1.5.0/parallax.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav fixed-top">
        <!-- changed to main.php -->
        <a href="main.php" class="navbar-brand">
            <!-- image throws error -->
            <!--<img src=''style="width: 100px; height: auto;">-->
            Phris Coskitt</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamburger">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="hamburger">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="main.php" class="nav-link">Main</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Calendar</a>
                </li>
                <li class="nav-item">
                    <!-- changed to profile.php --> 
                    <a href="profile.php" class="nav-link">Professionals</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Profile</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- <div class="container">
        <div class="header-img">
            <img src="profile_img/ferrari1.jpg" alt="ferrari_bg" style="width: 100%; height: auto;">
            <div class="circle">
                <img src="profile_img/zh.jpeg" alt="avatar" class="image">
            </div>
        </div>
    </div> -->

    <div class="box container-fluid">
        <div class="profile">
            <img src="" style="height: 150px; width: 150px;" id="user_img">
        </div>
        <!-- <h2 style="margin-top: -20px;" id="name"><span id="fname">Phris</span> <span id="lname">Coskitt</span></h2>
        <h4><span id="job">Assistant Professor of Information Systems</span>, <span id="company">SMU</span></h4> -->
        <h2 style="margin-top: -20px;" id="name"><span id="fname"></span> <span id="lname"></span></h2>
        <h4><span id="job"></span>, <span id="company"></span></h4>
        
        <!-- Booking -->
        <button class="btn btn-dark" type="button" style="margin-top: 40px;" id="book" data-toggle="modal" data-target="#booking_menu">
            Book an interview!
        </button>
        
        <div class="modal fade" id="booking_menu" tabindex="-1" role="dialog" aria-labelledby="booking_menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Book an interview with Phris!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../../../server/helper/addBooking.php" method="POST" class="form">
                    <div class="modal-body">
                        <div id="booking_form" style="margin-top: 10px;">
                          <!-- Replace with actual timeslots from database later -->
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              30/10/20, 4:00pm
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                08/11/20, 9:00am
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                                11/11/20, 12:00pm
                            </label>
                        </div> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-dark" id="info_submit">Informational Interview</button>
                            <button type="button" class="btn btn-dark" data-dismiss="modal" id="mock_submit">Mock Interview</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        


        <!-- Interviewer's Info -->
        <div style="width: 80%;" class="mx-auto">
            <div class="row" style="margin-top: 80px;">
                <div class="col-sm-6">
                    <span class="fas fa-info-circle"></span>  About:
                </div>
                <div class="col-sm-6 text-left" id="about">
                    <!-- I am a faculty member in the School of Information Systems at Singapore Management University, where I am part of the Research Lab for Intelligent Software Engineering (RISE). -->
                </div>
            </div>
            <hr class="my-4">

            <div class="row">
                <div class="col-sm-6">
                    <span class="fas fa-envelope"></span> Email:
                </div>
                <div class="col-sm-6 text-left">
                    <!-- <a href="#" id="email">cposkitt@smu.edu.sg</a> -->
                    <a href="#" id="email"></a>
                </div>
            </div>
            <hr class="my-4">
            
            <div class="row">
                <div class="col-sm-6">
                    <span class="fas fa-briefcase"></span>  Experience:
                </div>
                <div class="col-sm-6 text-left">
                    <ul style="padding-left: 10px;" id="experience">
                        <!-- <li>Assistant Professor of Information Systems (Education), School of Information Systems, SMU, Jan 2020 -
                            Present</li>    
                        <li>Lecturer & Research Fellow, Singapore University of Technology and Design, Singapore, Jan 2018 - Jan
                            2020</li>
                        <li>Research Fellow, Singapore University of Technology and Design, Singapore, Mar 2016 - Jan 2018</li>
                        <li>Postdoctoral Research Scientist, ETH Zurich, Switzerland, Jan 2013 - Jan 2016</li> -->
                    </ul>
                </div>
            </div>
            <hr class="my-4">

            <div class="row">
                <div class="col-sm-6">
                    <span class="fas fa-graduation-cap"></span>  Education:
                </div>
                <div class="col-sm-6 text-left">
                    <ul style="padding-left: 10px;" id="education">
                        <!-- <li>PhD, University of York, 2014</li>
                        <li>Bachelors of Science, University of York, 2009</li> -->
                    </ul>
                </div>
            </div>
        </div>

        <form action="../../../server/helper/getBookings.php" method="POST" class="form">
            <button type="button" id="retrievebookings">Retrieve Bookings</button>
        </form>
        

    </div>

    <script type="text/javascript">
        function getInterviewers(){
            const request = new XMLHttpRequest;
            request.onreadystatechange = function(){
                if (this.readyState == 4 && this.status==200){
                    let data = JSON.parse(this.responseText).interviewers;
                    console.log(data);

                    // Interviewer's Info
                    let user_img = document.getElementById('user_img');
                    let fname = document.getElementById('fname');
                    let lname = document.getElementById('lname');
                    let job = document.getElementById('job');
                    let company = document.getElementById('company');
                    let about = document.getElementById('about');
                    let email = document.getElementById('email');
                    let experience = document.getElementById('experience');
                    let education = document.getElementById('education');
                    
                    user_img.setAttribute("src", data[0].img);
                    fname.innerHTML = data[0].fname;
                    lname.innerHTML = data[0].lname;
                    job.innerHTML = data[0].job;
                    company.innerHTML = data[0].company;
                    about.innerHTML = data[0].about;
                    email.innerHTML = data[0].email;

                    let expArray = JSON.parse(data[0].experience).experience;
                    for (exp of expArray){
                        experience.innerHTML += `
                        <li>
                            ${exp}
                        </li> 
                    `;
                    }

                    let eduArray = JSON.parse(data[0].education).education;
                    for (edu of eduArray){
                        education.innerHTML += `
                        <li>
                            ${edu}
                        </li> 
                    `;
                    }

                    // Booking
                    let bookings = document.getElementById('booking_form');
                    let timeslots = JSON.parse(data[0].timeslots).timeslots;

                    // Need to add unique name & id for these, preferably using interviewer's id
                    for(timeslot of timeslots){
                        bookings.innerHTML += `
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio_timeslot" id="${data[0].id}" value="${timeslot}">
                            ${timeslot}
                        </div>
                        `;
                    }
                }
            }
            request.open("GET", "../../../server/helper/getInterviewers.php", true);
            request.send();
        }
        getInterviewers();


        // Test code to get bookings
        document.getElementById('retrievebookings').addEventListener('click', getBookings);

        function getBookings(){
            const request = new XMLHttpRequest;
            request.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200){
                    console.log(JSON.parse(this.responseText));
                }
            }
            request.open("GET", "../../../server/helper/getBookings.php", true);
            request.send();
        }
    </script>

</body>
</html>


