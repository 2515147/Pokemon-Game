<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
    <style>
      *{
        background-color: #373737;
        color:white;
      }

      #container{
        display:inline-flex;
        margin:auto;
        width:100%;
        background-color: #373737;
        justify-content: flex-start;
        margin-top:-15px;
      }
        button {
        color: #494949 !important;
        text-transform: uppercase;
        border-radius: 25px;
        text-decoration: none;
        padding: 10px;
        border: 4px solid #494949;
        display: inline-block;
        transition: all 0.4s ease 0s;
        }

        button:hover {
        color: #ffffff !important;
        border-radius: 25px;
        background: #60a3bc !important;
        border-color: #60a3bc !important;
        transition: all 0.4s ease 0s;
        }

        #text{
        	 color: #white;
        	 font-family: 'Helvetica Neue', sans-serif;
        	 font-style: italic; font-weight: 
        	 normal; letter-spacing: normal; 
        	 text-transform: none;
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
    <!--Card-->
    <div class="card" style="width: 12rem;">
      <img style="width: 190px;" class="card-img-top" src="https://cdn.bulbagarden.net/upload/7/79/Dream_Pok%C3%A9_Ball_Sprite.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Pokeballs</h5>
        <div style="display: inline-flex;">
        	<img style = 'width:25px;display:'src="https://cdn.bulbagarden.net/upload/f/f4/Pok%C3%A9Coin.png"></img>
        	<p class="card-text">  100 Pokecoins</p>
    	</div>
        <p style="margin-bottom:40px">A device for catching wild Pokémon. It's thrown like a ball, comfortably encapsulating its target.</p>
        <button class="btn btn-primary" data-amount="1" data-name="pokeball" data-index= "0" data-price="100">Buy 1</button>
        <button class="btn btn-primary" data-amount="10" data-name="pokeball" data-index= "0" data-price="1000">Buy 10</button>
      </div>
    </div>
    <!--/.Card-->

    <!--Card-->
    <div class="card" style="width: 12rem;">
      <img style="width: 190px;" class="card-img-top" src=https://cdn.bulbagarden.net/upload/b/bf/Dream_Great_Ball_Sprite.png alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Greatballs</h5>
        <div style="display: inline-flex;">
        <img style = 'width:25px;display:'src="https://cdn.bulbagarden.net/upload/f/f4/Pok%C3%A9Coin.png"></img>
        <p class="card-text">200 Pokecoins</p>
    	</div>
        <p style="margin-bottom:88px">A high-performance Ball with a higher catch rate than a standard Poké Ball.</p>
        <button class="btn btn-primary" data-amount="1" data-name="greatball" data-index= "1" data-price="200">Buy 1</button>
        <button class="btn btn-primary" data-amount="10" data-name="greatball" data-index= "1" data-price="2000">Buy 10</button>
      </div>
    </div>
    <!--/.Card-->

    <!--Card-->
    <div class="card" style="width: 12rem;">
      <img style="width: 190px;" class="card-img-top" src="https://cdn.bulbagarden.net/upload/a/a8/Dream_Ultra_Ball_Sprite.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Ultraballs</h5>
        <div style="display: inline-flex;">
        	<img style = 'width:25px;display:'src="https://cdn.bulbagarden.net/upload/f/f4/Pok%C3%A9Coin.png"></img>
        	<p class="card-text">500 Pokecoins</p>
    	</div>
        <p style="margin-bottom:63px">An ultra-performance Ball with a higher catch rate than a Great Ball.</p>
        <button class="btn btn-primary" data-amount="1" data-name="ultraball" data-index= "2" data-price="500">Buy 1</button>
        <button class="btn btn-primary" data-amount="10" data-name="ultraball" data-index= "2" data-price="5000">Buy 10</button>
      </div>
    </div>
    <!--/.Card-->

    <!--Card-->
    <div class="card" style="width: 12rem;">
      <img style="width: 190px;" class="card-img-top" src="https://cdn.bulbagarden.net/upload/9/95/Dream_Master_Ball_Sprite.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Masterballs</h5>
        <div style="display: inline-flex;">
        	<img style = 'width:25px;display:'src="https://cdn.bulbagarden.net/upload/f/f4/Pok%C3%A9Coin.png"></img>
        	<p class="card-text">5000 Pokecoins</p>
    	</div>
        <p>The best Poké Ball with the ultimate level of performance. With it, you will catch any wild Pokémon without fail.</p>
        <button class="btn btn-primary" data-amount="1" data-name="masterball" data-index= "3" data-price="5000">Buy 1</button>
        <button class="btn btn-primary" data-amount="10" data-name="masterball" data-index= "3" data-price="50000">Buy 10</button>
      </div>
    </div>
    <!--/.Card-->

    <!--Card-->
    <div class="card" style="width: 12rem;">
      <img style="width: 190px;" class="card-img-top" src="https://img.rankedboost.com/wp-content/uploads/2016/08/Pokemon-Go-Razz-Berry-150x150.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Razz Berries</h5>
        <div style="display: inline-flex;">
        	<img style = 'width:25px;display:'src="https://cdn.bulbagarden.net/upload/f/f4/Pok%C3%A9Coin.png"></img>
        	<p class="card-text">2500 Pokecoins</p>
    	</div>
        <p style="margin-bottom:110px">A berry that increase the capture chance of a wild Pokémon.</p>
        <button class="btn btn-primary" data-amount="1" data-name="razzberries" data-index= "0" data-price="2500">Buy 1</button>
        <button class="btn btn-primary" data-amount="10" data-name="razzberries" data-index= "0" data-price="25000">Buy 10</button>
      </div>
    </div>
    <!--/.Card-->

    <!--Card-->
    <div class="card" style="width: 12rem;">
      <img style="width: 190px;" class="card-img-top" src="https://pokemongohub.net/wp-content/uploads/2017/06/item_0706.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Grazz Berries</h5>
        <div style="display: inline-flex;">
        	<img style = 'width:25px;display:'src="https://cdn.bulbagarden.net/upload/f/f4/Pok%C3%A9Coin.png"></img>
        	<p class="card-text">10000 Pokecoins</p>
    	</div>
        <p style="margin-bottom:85px">An extremely rare berry that increases the encounter rate of legendaries.</p>
        <button class="btn btn-primary" data-amount="1" data-name="grazzberries" data-index= "1" data-price="10000">Buy 1</button>
        <button class="btn btn-primary" data-amount="10" data-name="grazzberries" data-index= "1" data-price="100000">Buy 10</button>
      </div>
    </div>
    <!--/.Card-->


    <!--Card-->
    <div class="card" style="width: 12rem;">
      <img style="width: 190px;" class="card-img-top" src="https://img.rankedboost.com/wp-content/uploads/2016/08/Pinap-Berry-Pokemon-GO.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Pinap Berries</h5>
        <div style="display: inline-flex;">
        	<img style = 'width:25px;display:'src="https://cdn.bulbagarden.net/upload/f/f4/Pok%C3%A9Coin.png"></img>
        	<p class="card-text">2500 Pokecoins</p>
    	</div>
        <p style="margin-bottom:108px">A tropical berry that increases the coin drop rate.</p>
        <button class="btn btn-primary" data-amount="1" data-name="pinapberries" data-index= "2" data-price="2500">Buy 1</button>
        <button class="btn btn-primary" data-amount="10" data-name="pinapberries" data-index= "2" data-price="25000">Buy 10</button>
      </div>
    </div>
    <!--/.Card-->
  </div>
    <div style="margin:auto; text-align: center; font-size: 20pt" id="text">
    </div>
    </body>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"></script>
    <!-- custom code -->
    <script>
        let all_buttons = document.querySelectorAll('.btn.btn-primary')
        console.log(all_buttons)
        for(let i =0; i < all_buttons.length; i++){
          all_buttons[i].onclick = function(){
            let item = all_buttons[i].dataset.name
            let cost = all_buttons[i].dataset.price
            let index = all_buttons[i].dataset.index
            let amount = all_buttons[i].dataset.amount

            $.ajax({
              url: '../shop_process.php',
              type: 'POST',
              data: {
                inv_item : item,
                inv_cost : cost,
                inv_index: index,
                inv_amount: amount
              },
              success: function(data, status) {
                console.log(data);
                $('#text').html("Bought! You now have " + data);
              },
        error: function(request, data, status){
                alert("You do not have enough funds to buy this item")
              }
            })
          }
        }

    </script>
</html>
