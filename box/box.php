<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <title>Pokemon Pc</title>
    <style>

      body{
        background-color: #373737;
        color:white;
        background: url("pc_bg/oshawattpc.png");

      }

      #container{
        display:inline-flex;
        margin:auto;
        width:100%;
        background-color: #373737;
        justify-content: flex-start;
        margin-top:-15px;
      }
    </style>
  </head>
    <body>


    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">
      <a class="navbar-brand" href="#">Pokemon</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
        aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../menu/menu.html">Menu <span class="sr-only"></span></a>
        </li>
      </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item avatar dropdown">
            </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!--/.Navbar -->
    <div id= "container">

  </div>
    <!-- custom application code -->
    <script>

    $(document).ready(function() {
      var cookie_username;
      var pokemon_holder;
      var current_pokemon;

      function getCookie() {
         // Split cookie string and get all individual name=value pairs in an array
         var cookieArr = document.cookie.split(";");
         // Loop through the array elements
         for(var i = 0; i < cookieArr.length; i++) {
             var cookiePair = cookieArr[i].split("=");
             if( cookiePair.includes(" username") ) {
               cookie_username = cookiePair[1]
             }
           }
       }

      getCookie()

      function getAPI() {
          $.ajax({
            url: 'https://pokeapi.co/api/v2/pokemon/' + current_pokemon,
            success: function(data, status) {
              console.log(data);
              if (data.sprites) {
                  if (data.sprites.front_default && typeof(data.sprites.front_default)=="string") {
                    var curr =  document.createElement('img');
                    curr.src = data.sprites.front_default
                    document.querySelector('body').appendChild(curr);
                  }

              }
            },
            error: function(request, data, status)  {
              console.log(data);
            }
          });
        }

        function getAPI2() {
            $.ajax({
              url: 'https://pokeapi.co/api/v2/pokemon/' + current_pokemon,
              success: function(data, status) {
                console.log(data);
                if (data.sprites) {
                    if (data.sprites.front_shiny && typeof(data.sprites.front_shiny)=="string") {
                      var curr =  document.createElement('img');
                      curr.src = data.sprites.front_shiny
                      document.querySelector('body').appendChild(curr);
                    }

                }
              },
              error: function(request, data, status)  {
                console.log(data);
              }
            });
          }

        function getCurr() {
          $.ajax({
            // url:'data/chatroom.txt?nocache='+Math.random(),
            url: '../inventory/' + cookie_username + '/pokemon_inventory.txt?nocache='+Math.random(),
            type: 'GET',
            data: {},
            async:false,
            success: function(data, status) {
              console.log(data)
              pokemon_holder = data.split(",")
              for(let i =0; i < pokemon_holder.length; i++){
                current_pokemon = pokemon_holder[i]
                if(current_pokemon.includes("*")){
                  current_pokemon = current_pokemon.slice(0, -1);
                  getAPI2();
                  console.log("shiny" + current_pokemon)
                }
                else{
                  getAPI();
                }
              }
            }
          })
        }

      getCurr()


    });








    </script>


  </body>
</html>
