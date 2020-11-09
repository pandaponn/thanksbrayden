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
    <title>guugle</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="search.css">
</head>
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
  
  <div class="container">
    <div id='recommendation' class="py-5 text-center" style=''>
      <h2 class='mt-5'>Our Recommendations</h2>
      <p class="lead"> Welcome to Guugle! To get you started, these are some of our recommendations we picked out for you to start you on your interview journey!</p>
    </div>
    <div id='booking' class="py-5 text-center" style='display: none'>
      <h2 class='mt-5'>Bookings</h2>
      <p class="lead"> Welcome back to Guugle! These are your current interview bookings.</p>
    </div>
    <div id='recommendations' class="row" style=''>
      <div class='col-md-4'>
        <figure class="snip1336">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample87.jpg" alt="sample87" />
          <figcaption>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample4.jpg" alt="profile-sample4" class="profile" />
            <h2>Hans Down<span>Engineer</span></h2>
            <p>I'm looking for something that can deliver a 50-pound payload of snow on a small feminine target. Can you suggest something? Hello...? </p>
            <a href="#" class="follow">Follow</a>
            <a href="#" class="info">More Info</a>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="snip1336 hover"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample74.jpg" alt="sample74" />
          <figcaption>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample2.jpg" alt="profile-sample2" class="profile" />
            <h2>Wisteria Widget<span>Photographer</span></h2>
            <p>Calvin: I'm a genius, but I'm a misunderstood genius. Hobbes: What's misunderstood about you? Calvin: Nobody thinks I'm a genius.</p>
            <a href="#" class="follow">Follow</a>
            <a href="#" class="info">More Info</a>
          </figcaption>
        </figure>
      </div>
      <div class='col-md-4'>
        <figure class="snip1336"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample69.jpg" alt="sample69" />
          <figcaption>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample5.jpg" alt="profile-sample5" class="profile" />
            <h2>Desmond Eagle<span>Accountant</span></h2>
            <p>If you want to stay dad you've got to polish your image. I think the image we need to create for you is "repentant but learning".</p>
            <a href="#" class="follow">Follow</a>
            <a href="#" class="info">More Info</a>
          </figcaption>
        </figure>
      </div>
    </div>
    <div id='bookings' class="row" style='display: none'>
      <table id='details' class = 'table'>
        <thead>
          <tr>
          <th>Interviewer</th>
          <th>Details</th>
          <th>Delete</th>
          </tr>
        </thead>
      </table>
    </div>

        <hr class="mb-4">

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2020 Guugle</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>
  
  <script>
    var interviewers = {};
    var bookings = {};

    // Retrieve Interviewers
    function getInterviewers(){
      const request = new XMLHttpRequest();
      request.onreadystatechange = function(){
          if (this.readyState == 4 && this.status==200){
              let data = JSON.parse(this.responseText).interviewers;
              interviewers = data;
              console.log(interviewers);

              // Retrieve Bookings
              function getBookings(){
              const request = new XMLHttpRequest;
              request.onreadystatechange = function(){
                  if (this.readyState == 4 && this.status == 200){
                      let data = JSON.parse(this.responseText).bookings
                      if (data.length != 0){
                        bookings = data;
                        console.log(bookings);
                        document.getElementById('recommendation').style = 'display: none';
                        document.getElementById('recommendations').style = 'display: none';
                        document.getElementById('booking').style = '';
                        document.getElementById('bookings').style = '';

                        var tbody = document.createElement('tbody')

                        for (booking of data){
                          var interviewer_id = booking['interviewer_id']
                          var timeslot = booking['timeslots']
                          for (interviewer of interviewers){
                            var id = interviewer['id']
                            if (interviewer_id == id){
                              var name = interviewer['fname'] + ' ' + interviewer['lname'];
                              var tr = document.createElement('tr')
                              var td1 = document.createElement('td')
                              var td2 = document.createElement('td')
                              var td3 = document.createElement('td')

                              td1.appendChild(document.createTextNode(name))
                              tr.appendChild(td1)

                              td2.appendChild(document.createTextNode(timeslot))
                              tr.appendChild(td2)

                              td3.innerHTML = `<button id='delete' value="${booking['user_id']}" class="btn btn-dark btn-sm" type='button'>Delete Booking</button>`
                              tr.appendChild(td3)

                              tbody.appendChild(tr)
                            }
                          }
                        }
                        document.getElementById('details').appendChild(tbody)
                        document.getElementById('delete').addEventListener('click', deleteInterview);
                      }
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


    function deleteInterview(){
      var id = this.value;
      console.log(id)
      for (booking of bookings){
        if (booking['user_id'] == id){
          var interviewer_id = booking['interviewer_id']
          var timeslots = booking['timeslots']
          var user_id = booking['user_id']
          console.log('timeslots')
        }
      }
      const request = new XMLHttpRequest;
        request.onreadystatechange = function(){
          if (this.readyState == 4 && this.status == 200){
            console.log('peepee')
            location.reload();
          }
        }
        request.open("GET", `../../../server/helper/deleteBooking.php?interviewer_id=${interviewer_id}&timeslots=${timeslots}&user_id=${user_id}`, true);
        request.send();
      }

  </script>
</body>
</html>
