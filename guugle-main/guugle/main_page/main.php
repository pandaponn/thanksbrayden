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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>guugle</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="search.css">
</head>
<style>
  body {
    background-image: url("img/bg_6.jpg");
    background-repeat: repeat;
    background-size: cover;
  }
  .box_bookings {
  /*width: 60%;*/
  width: fit-content;
  height:fit-content;
  margin: 10px auto 120px;
  background-color: black;
  padding: 0 20px 0px;
  border-radius: 6px;
  box-shadow: 0 5px 7px rgba(0,0,0,0.5);
  }
  .footer{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black; 
    color: white; 
    font-size: small;
  } 
  hr {
    background-color: white;
  }
    .profile_pic {
  height: 160px;
  width: 160px;
  border-radius: 50%;
  border: 3px solid #272133;
  margin-top: 20px;
  box-shadow: 0 5px 7px rgba(0,0,0,0.5);
  }

  .card{
    box-shadow: 0 5px 7px rgba(0,0,0,0.5);
  }
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav fixed-top">
    <!-- Changed link to main.php --> 
    <a href="main.php" class="navbar-brand">
      <!-- <img src="" style="width: 100px; height: auto;"> -->
      Phris Coskitt</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamburger">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="hamburger">
      <!-- Search -->
      <form class="form-inline my-2 my-lg-0 ml-auto" action="result.php" method="POST">
        <input class="form-control form-control-sm" type="text" placeholder="Search" aria-label="Search" name="searchItem">
        <button class="btn btn-link" name="doSearch" type="submit"><i class="fas fa-search text-white" aria-hidden="true"></i></button>
      </form>
      
      <ul class="navbar-nav">
        <li class="nav-item">
            <a href="main.php" class="nav-link">Main</a>
        </li>
        <li class="nav-item">
            <a href="user_profile.php" class="nav-link">Profile</a>
        </li>
        <li class="nav-item">
          <a href="../../../server/helper/logout.php" class="nav-link" onclick="window.open('https://www.linkedin.com/m/logout/')">Log Out</a>  
        </li>
      </ul>
    </div>
  </nav>
  
  <div class="container animate__animated animate__fadeIn">
    <!-- <div id='recommendation' class="py-5 text-center" style=''>
      <h2 class='mt-5'>Our Recommendations</h2>
      <p class="lead"> Welcome to Guugle! To get you started, these are some of our recommendations we picked out for you to start you on your interview journey!</p>
    </div> -->
    <div id='booking' class="py-5 text-center" style=''>
      <h2 class='mt-5'>Bookings</h2>
      <p class="lead">These are your current interview bookings.</p>
    </div>
    <!-- <div id='recommendations' class="row card-deck" style='display: none;'>
    </div> -->
    <div class="row">
      <div class="col-sm-6">
        <div id='bookings' class="row box_bookings" style=''>
          <table id='details' class = 'table table-hover table-borderless' style="margin-top: 10px; color: white;">
            <thead>
              <tr style="border-bottom: 2px solid orange;">
                <th scope="col">Interviewer</th>
                <th scope="col">Details</th>
                <th scope="col">Interview Type</th>
                <th></th>
              </tr>
            </thead>
          </table>
        </div>
        
          <div class="text-center" style=''>
            <h5>Recommendations</h5>
          </div>
          <div class='box_bookings text-white' id='recommendations'>
          </div>
      </div>

      <div id='upNext' class="col-sm-6" style=''>
        <div class="box_bookings" style="color: white; padding: 20px;">
          <p style="text-align: center;">Up Next</p>
          <p style="border-bottom: 2px solid orange;" id="nextBookingDate1">Friday, 13 Nov</p>
          <p id="nextBooking1">
            Mock Interview w/ Phris, 5pm <br>
            Mock Interview w/ Chris, 6pm <br>
            Informational Interview w/ Ben, 8pm
          </p>
          <p style="border-bottom: 2px solid orange;" id="nextBookingDate2">Monday, 16 Nov</p>
          <p id="nextBooking2">
            Mock Interview w/ Mok, 7pm
          </p>
        </div>
      </div>
      
    </div>
    <!-- <div class="text-center" style=''>
      <h5>Recommendations</h5>
    </div>
    <div class='box_bookings text-white' id='recommendations'>
    </div> -->
  </div>
  <br>
  <br>
  <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          Are you sure you want to delete this booking?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          <button id='confirmDelete' type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
    
  <!-- Footer -->
  <div class="text-center py-2 footer">© 2020 Copyright: 
        <a href="https://www.linkedin.com/in/zhi-hao-lim/" target="blank">Guugle</a> 
  </div>
  
  <script>
    var interviewers = {};
    var bookings = {};

    //Retrieve Recommendations
    function getRandom(arr, n) {
    var result = new Array(n),
        len = arr.length,
        taken = new Array(len);
    while (n--) {
        var x = Math.floor(Math.random() * len);
        result[n] = arr[x in taken ? taken[x] : x];
        taken[x] = --len in taken ? taken[len] : len;
    }
    return result;
    }

    function getRecommendations(){
      result = getRandom(interviewers, 3)
      for (item of result){
        var name = item['fname'] + ' ' + item['lname'];
        var img = item['img'];
        var company = item['company'];
        var about = item['about'];
        var id = item['id'];
        var job = item['job'];
        var industry = item['industry'];
        

        recommendations.innerHTML += `
        <div class="fir-image-figure" style='padding-top: 20px;'>
          <img class="fir-author-image fir-clickcircle" src="${img}">
          
          <figcaption>
          <div class="fig-author-figure-title" style="font-weight:900;">${name}</div>
          <div class="fig-author-figure-title">${job}, ${company}</div>
          <div class="fig-author-figure-title">${industry}</div>
          </figcaption>        
      
          <form action="profile.php" method="POST">
          
          <button class="btn btn-sm" style="justify-content:right; margin-left:50px;" value="${id}" name="interviewer_id"><i class="fa fa-user" style="color: white;"></i></button>
          </form>
        </div>
        <div style="border-bottom: 2px solid orange;">
        </div>
        `;
      }
    }

    // Retrieve Interviewers
    function getInterviewers(){
      const request = new XMLHttpRequest();
      request.onreadystatechange = function(){
          if (this.readyState == 4 && this.status==200){
              let data = JSON.parse(this.responseText).interviewers;
              interviewers = data;

              // Retrieve Bookings
              function getBookings(){
              const request = new XMLHttpRequest;
              request.onreadystatechange = function(){
                  if (this.readyState == 4 && this.status == 200){
                      let data = JSON.parse(this.responseText).bookings
                      if (data.length != 0){
                        bookings = data;
                        console.log(bookings);
                        // document.getElementById('recommendation').style = 'display: none';
                        // document.getElementById('recommendations').style = 'display: none';
                        // document.getElementById('booking').style = '';
                        // document.getElementById('bookings').style = '';
                        // document.getElementById('upNext').style = '';

                        for (booking of data){
                          var interviewer_id = booking['interviewer_id']
                          var timeslot = booking['timeslots']
                          var interview_type = booking['interview_type']
                          for (interviewer of interviewers){
                            var id = interviewer['id']
                            if (interviewer_id == id){
                              var name = interviewer['fname'] + ' ' + interviewer['lname'];
                              var delete_id = 'delete' + booking['interviewer_id'] + booking['timeslots'];
                              var tr = document.createElement('tr');
                              var td1 = document.createElement('td');
                              var td2 = document.createElement('td');
                              var td3 = document.createElement('td');
                              var td4 = document.createElement('td');

                              td1.appendChild(document.createTextNode(name))
                              td1.setAttribute("scope", "row")
                              tr.appendChild(td1)

                              td2.appendChild(document.createTextNode(timeslot))
                              tr.appendChild(td2)

                              td3.appendChild(document.createTextNode(interview_type))
                              tr.appendChild(td3)

                              td4.innerHTML = `<button value="${delete_id}" class="open-deleteBooking btn btn-sm" type='button' data-toggle="modal" data-target="#confirm"><i class="fa fa-trash" style="color: white"></i></button>`
                              tr.appendChild(td4)
                              
                              document.getElementById('details').appendChild(tr)
                         
                            }
                          }
                        }
                      }getRecommendations();
                  }
              }
              request.open("GET", "../../../server/helper/getBookings.php", true);
              request.send();
              }
              getBookings();
              // END Retrieval of Bookings

          }
      }
      request.open("GET", "../../../server/helper/getInterviewers.php", true);
      request.send();
    }
    getInterviewers();
    // END Retrieval of Interviewers
    
    //confirmation delete
    $(document).on("click", '.open-deleteBooking', function () {
      var delete_id = this.value;
      document.getElementById('confirmDelete').value = delete_id;
    });
    document.getElementById('confirmDelete').addEventListener('click', deleteInterview)

    function deleteInterview(){
      var id = this.value;
      for (booking of bookings){
        var delete_id = 'delete' + booking['interviewer_id'] + booking['timeslots'];
        if (delete_id == id){
          var interviewer_id = booking['interviewer_id']
          var timeslots = booking['timeslots']
          var user_id = booking['user_id']
        }
      }
      const request = new XMLHttpRequest;
        request.onreadystatechange = function(){
          if (this.readyState == 4 && this.status == 200){
            location.reload();
          }
        }
        request.open("GET", `../../../server/helper/deleteBooking.php?interviewer_id=${interviewer_id}&timeslots=${timeslots}&user_id=${user_id}`, true);
        request.send();
      }
      //END of delete

  </script>
</body>
</html>
