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
        $.ajax({
          url: 'https://pokeapi.co/api/v2/pokemon/eevee',
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



      }); // end jQuery document ready function




    </script>


  </body>
</html>
