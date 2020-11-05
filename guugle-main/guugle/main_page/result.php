<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Search Result</title>
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
            <input class="form-control form-control-sm" type="text" placeholder="Search" aria-label="Search" name="searchItem" id="searchItem">
            <button class="btn btn-link" id="doSearch" name="doSearch" type="submit"><i class="fas fa-search text-white" aria-hidden="true"></i></button>
        </form>
        
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="main.php" class="nav-link">Main</a>
            </li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link">Professionals</a>
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

    <!-- Search Results -->
    <div id="search_results" style="margin-top: 70px;">
        <!-- <div class="fir-image-figure">
            <a class="fir-imageover" rel="noopener" target="_blank" href="#">
            <img class="fir-author-image fir-clickcircle" src="img/liyin.jpg">
            </a>

            <figcaption>
            <div class="fig-author-figure-title">Ling Li Yin</div>
            <div class="fig-author-figure-title">Engineer at Google</div>
            <div class="fig-author-figure-title">Information Technology</div>
            
            </figcaption>
            <button class="btn btn-dark btn-sm" style="margin-left: 15px;">Book now</button>
        </div> -->
    </div>
</body>
</html>


<script type='text/javascript'>
    let search = '<?php echo $_POST['searchItem']; ?>'.toLowerCase();
    console.log(search);

    function getInterviewers(){
    const request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if (this.readyState == 4 && this.status==200){
            let data = JSON.parse(this.responseText).interviewers;
            interviewers = data;
        for (interviewer of data){
            var industry = interviewer['industry'].toLowerCase();
            var fname = interviewer['fname'].toLowerCase();
            var lname = interviewer['lname'].toLowerCase();
            if (fname.includes(search) || lname.includes(search) || industry.includes(search)){

                var name = interviewer['fname'] + ' ' + interviewer['lname'];
                var img = interviewer['img'];
                var company = interviewer['company'];
                var about = interviewer['about'];
                var id = interviewer['id'];
                var job = interviewer['job'];
                var industry = interviewer['industry'];

                search_results.innerHTML += `
                <div class="fir-image-figure">
                <img class="fir-author-image fir-clickcircle" src="${img}">

                <figcaption>
                <div class="fig-author-figure-title">${name}</div>
                <div class="fig-author-figure-title">${job}, ${company}</div>
                <div class="fig-author-figure-title">${industry}</div>
                </figcaption>

                <form action="profile.php" method="POST">
                <button class="btn btn-dark btn-sm" style="margin-left: 15px;" value="${id}" name="interviewer_id">Book now</button>
                </form>
                </div>
                `;

                // const card = document.createElement('div');
                // const image = document.createElement('img');
                // const cardBody = document.createElement('div');
                // const cardTitle = document.createElement('h5');
                // const cardTop = document.createElement('p');
                // const cardBottom = document.createElement('p');
                // const cardButton = document.createElement('button');

                // card.className = 'card';

                // image.className = 'card-img-top';
                // image.src = img;

                // cardBody.className = 'card-body';

                // cardTitle.className = 'card-title';
                // cardTitle.appendChild(document.createTextNode(name));

                // cardTop.className = 'card-text font-weight-bold';

                // cardTop.appendChild(document.createTextNode(company));

                // cardBottom.className = 'card-text text-muted font-italic';
                // cardBottom.appendChild(document.createTextNode(about));

                // var form = document.createElement('form');
                // form.method = 'POST';
                // form.action = 'profile.php';

                // var valueAttri = document.createAttribute('value');
                // valueAttri.value = id;
                // cardButton.className = 'btn btn-primary';
                // cardButton.name = 'interviewer_id';
                // cardButton.type = 'submit';
                // cardButton.setAttributeNode(valueAttri);
                // cardButton.appendChild(document.createTextNode('Book Now!'));

                // form.appendChild(cardButton);

                // cardBody.appendChild(cardTitle);
                // cardBody.appendChild(cardTop);
                // cardBody.appendChild(cardBottom);
                // cardBody.appendChild(form);

                // card.appendChild(image);
                // card.appendChild(cardBody);

                // document.getElementById('results').appendChild(card);
            };
        };
        if (document.getElementById('search_results').innerHTML == ''){
        alert("Sorry, we couldn't find the interviewer you were looking for.");
        };
            
        }
    }
    request.open("GET", "../../../server/helper/getInterviewers.php", true);
    request.send();
    };
    getInterviewers();

</script>
    
    