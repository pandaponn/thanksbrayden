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
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <!-- Changed link to main.php --> 
            <a href="main.php" class="nav-link">Main</a>
        </li>
        <li class="nav-item">
          <!-- Weijie, added href to profile.php-->
            <a href="profile.php" class="nav-link">Professionals</a>
        </li>
        <li class="nav-item">
            <a href="user_profile.php" class="nav-link">Profile</a>
        </li>
        <!-- Log Out fxn but does not work-->
        <li class="nav-item">
          <a href="../../../server/helper/logout.php" class="nav-link">Log Out</a>  
      </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="py-5 text-center">
      <h2 class='mt-5'>Our Recommendations</h2>
      <p class="lead"> Welcome to Guugle! To get you started, these are some of our recommendations we picked out for you to start you on your interview journey!</p>
    </div>
    <div class="row">
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
    <div class = row>
      <div class = 'col-sm-5'>
        <hr class="mb-4">
      </div>
      <div class = 'col-sm-2'>
        <p class ='h5 text-center text-muted font-weight-light'>Or</p>
      </div>
      <div class = 'col-sm-5'>
        <hr class="mb-4">
      </div>
    </div>
    <div class = "row">
      <div class="col-md">
        <!-- The display was style='display:;' :-->
        <div class="py-5 text-center">
          <h5>Search for an interviewer yourself</h5>
          <p class="lead">If you already have someone in mind or just wanting to browse to see which of our interviewers would suit your needs, just use our search function to find the right professional for you.</p>
        </div>
      </div>
    </div>
    <div class = 'row'>
      <div class="col-md-12 search-container">
        <div class="wrapper mb-5">
          <div class="search_box">
            <div class="dropdown">
                <div class="default_option">Name</div>  
                <ul>
                  <li>Name</li>
                  <li>Industry</li>
                </ul>
            </div>
            <form>
              <div class='search_field form-check-inline'>
                <input id="searchItem" type='text' class='mt-2 form-control' placeholder="Search for Interviewer" >
    
                <button id='doSearch' class='btn btn-primary ml-1 mt-2' type='button'><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>
      </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div id='results' class='card-columns'>
    </div>


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
    var search_category = 'name';
    $(".default_option").click(function(){
      $(".dropdown ul").addClass("active");
    });

    $(".dropdown ul li").click(function(){
      var text = $(this).text();
      $(".default_option").text(text);
      $(".dropdown ul").removeClass("active");
      if (text == 'Industry'){
        search_category = 'industry';
        document.getElementById('searchItem').placeholder = 'Search by Industry';
      }else{
        search_category = 'name';
        document.getElementById('searchItem').placeholder = 'Search for Interviewer';
      }
    });
    var interviewers = {};
    function getInterviewers(){
    const request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if (this.readyState == 4 && this.status==200){
            let data = JSON.parse(this.responseText).interviewers;
            interviewers = data;
            console.log(interviewers);
        }
    }
    request.open("GET", "../../../server/helper/getInterviewers.php", true);
    request.send();
  }
  
function doSearch(){
  document.getElementById('results').innerHTML = '';
  const search = document.getElementById('searchItem').value.toLowerCase();
  console.log(search)
  if (search ==''){
    alert('Please enter a valid name/industry')
  };
  if (search_category == 'name'){
    for (interviewer of interviewers){
      var fname = interviewer['fname'].toLowerCase();
      var lname = interviewer['lname'].toLowerCase();
      if (fname.includes(search) || lname.includes(search)){

        var name = interviewer['fname'] + ' ' + interviewer['lname'];
        var img = interviewer['img'];
        var company = interviewer['company'];
        var about = interviewer['about'];
        var id = interviewer['id'];

        const card = document.createElement('div');
        const image = document.createElement('img');
        const cardBody = document.createElement('div');
        const cardTitle = document.createElement('h5');
        const cardTop = document.createElement('p');
        const cardBottom = document.createElement('p');
        const cardButton = document.createElement('button');

        card.className = 'card';

        image.className = 'card-img-top';
        image.src = img;

        cardBody.className = 'card-body';

        cardTitle.className = 'card-title';
        cardTitle.appendChild(document.createTextNode(name));

        cardTop.className = 'card-text font-weight-bold';

        cardTop.appendChild(document.createTextNode(company));

        cardBottom.className = 'card-text text-muted font-italic';
        cardBottom.appendChild(document.createTextNode(about));

        var form = document.createElement('form');
        form.method = 'POST';
        form.action = 'profile.php';

        var valueAttri = document.createAttribute('value');
        valueAttri.value = id;
        cardButton.className = 'btn btn-primary';
        cardButton.name = 'interviewer_id';
        cardButton.type = 'submit';
        cardButton.setAttributeNode(valueAttri);
        cardButton.appendChild(document.createTextNode('Book Now!'));

        form.appendChild(cardButton);

        cardBody.appendChild(cardTitle);
        cardBody.appendChild(cardTop);
        cardBody.appendChild(cardBottom);
        cardBody.appendChild(form);

        card.appendChild(image);
        card.appendChild(cardBody);

        document.getElementById('results').appendChild(card);
      };
    };
  }
    else if (search_category == 'industry'){
      for (interviewer of interviewers){
        var industry = interviewer['industry'].toLowerCase();
        if (industry.includes(search)){
          var name = interviewer['fname'] + ' ' + interviewer['lname'];
          var img = interviewer['img'];
          var company = interviewer['company'];
          var about = interviewer['about'];
          var id = interviewer['id'];
  
          const card = document.createElement('div');
          const image = document.createElement('img');
          const cardBody = document.createElement('div');
          const cardTitle = document.createElement('h5');
          const cardTop = document.createElement('p');
          const cardBottom = document.createElement('p');
          const cardButton = document.createElement('button');
  
          card.className = 'card';
  
          image.className = 'card-img-top';
          image.src = img;
  
          cardBody.className = 'card-body';
  
          cardTitle.className = 'card-title';
          cardTitle.appendChild(document.createTextNode(name));
  
          cardTop.className = 'card-text font-weight-bold';
  
          cardTop.appendChild(document.createTextNode(company));
  
          cardBottom.className = 'card-text text-muted font-italic';
          cardBottom.appendChild(document.createTextNode(about));
  
          var form = document.createElement('form');
          form.method = 'POST';
          form.action = 'profile.php';

          var valueAttri = document.createAttribute('value');
          valueAttri.value = id;
          cardButton.className = 'btn btn-primary';
          cardButton.name = 'interviewer_id';
          cardButton.type = 'submit';
          cardButton.setAttributeNode(valueAttri);
          cardButton.appendChild(document.createTextNode('Book Now!'));

          form.appendChild(cardButton);

          cardBody.appendChild(cardTitle);
          cardBody.appendChild(cardTop);
          cardBody.appendChild(cardBottom);
          cardBody.appendChild(form);

  
          card.appendChild(image);
          card.appendChild(cardBody);
  
          document.getElementById('results').appendChild(card);
        };
      };
    };
  };
    document.getElementById('doSearch').addEventListener('click', doSearch);
    getInterviewers();
  </script>
</body>
</html>

