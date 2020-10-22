$(".default_option").click(function(){
    $(".dropdown ul").addClass("active");
  });
  
  $(".dropdown ul li").click(function(){
    var text = $(this).text();
    $(".default_option").text(text);
    $(".dropdown ul").removeClass("active");
  });

  /*function doSearch() {
    event.preventDefault();

    const searchTerm = document.getElementById('searchInput').value;

    const xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function () {
      if (this.readyState === this.DONE) {
        const data = JSON.parse(this.responseText).list;

        const tbody = document.getElementById('resultsTable');

        tbody.innerHTML = '';

        document.getElementById('specialTrick').className = "d-block";

        if (data.length > 0) {
          for (const entry of data) {

          }
        } else {
          alert('No definition, sorry :-(');
        }
      }
    });

    xhr.open("GET", "" + searchTerm);
    xhr.setRequestHeader("x-rapidapi-host", "mashape-community-urban-dictionary.p.rapidapi.com");
    xhr.setRequestHeader("x-rapidapi-key", "d390fbf620msh8215422f9bf4ee1p15e1c2jsnb82fad578e4d");

    xhr.send();
  }

  document.getElementById('search').addEventListener('click', doSearch); */

  document.getElementById('name').addEventListener('click', console.log('peepee'));
  document.getElementById('industry').addEventListener('click', console.log('poopoo'));