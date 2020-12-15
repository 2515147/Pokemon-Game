<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokemon</title>
    <style>

      .hidden {
        display: none;
      }

      .card {

        background-color:#373737 ;

      }
      #encounter_text{
      	height: 30px;
      	text-align: center;
      	padding-top: 15px;
      	margin: auto;
      }

      #sprite_container{
      	height: 405px;
      	width: 225px;
      	padding-top: 50px;
      	padding-bottom: -45px
      	text-align: center;
      	margin: auto;
      }

      button {
      color: #494949;
      text-transform: uppercase;
      border-radius: 25px;
      text-decoration: none;
      background: #ffffff;
      padding: 10px;
      border: 4px solid #494949;
      display: inline-block;
      transition: all 0.4s ease 0s;
      }

      button:hover {
      color: #ffffff;
      border-radius: 25px;
      background: #60a3bc;
      border-color: #60a3bc;
      transition: all 0.4s ease 0s;
      }

      .chosenStyle{
        border: 2px solid red;
      }


    </style>
  </head>

  <body>

  <?php
    if ($_COOKIE['loggedin'] == 'yes'){
  ?>



    <div id="playing">
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
          <a style= "font-size:15pt;"class="nav-link" href="menu/menu.html">Menu Options<span class="sr-only"></span></a>
        </li>
      </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item avatar dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span style="font-size:15pt"id ="welcome_msg" class="navbar-text">
              </span>
              <img style="max-width:50px;" id="profile_pic" src="https://wallpaperaccess.com/full/24936.jpg" class="rounded-circle z-depth-0"
                alt="avatar image">
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
              aria-labelledby="navbarDropdownMenuLink-55">
              <form enctype="multipart/form-data" name="uploadform" id="uploadform">
                <!-- add in a 'file' input field - make sure to give it a 'name' parameter -->
                <button id="submit" class="dropdown-item">Change Profile Picture</button>
                <input type="file" id="filename" name="filename" value="Change Profile Picture">
              </form>
              <div id="results">

              </div>
          </div>
          </li>
        </ul>
      </div>
    </nav>
    <!--/.Navbar -->
      	<div id="encounter_text">

      	</div>
        <!-- sprites will go here -->
		<div id="sprite_container">
      <!-- Card -->
      <div style= "width:225px;height:287px;"class="card promoting-card">
      <!-- Card content -->
      <div class="card-body d-flex flex-row">
      <!-- Content -->
      <div id=card_content>
      </div>
      </div>

      <!-- Card image -->
      <div class="view overlay">
        <img class="card-img-top rounded-0" id="card_container">
      </div>

      <!-- Card content -->
      <div class="card-body">

        <div class="collapse-content">
          <!-- Text -->
        </div>
          <p style="text-align: center" id="pokeTitle"><b></b></p>
          <p id="rarity"></p>
      </div>

    <!-- Card -->

		</div>
  </div>



		<div id="actions_container">
		<button id="explore_btn">Explore</button>
		<button id="catch_btn">Throw Pokeball!</button>
		</div>

<div class="card panels-card">

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark grey lighten-5 d-flex justify-content-between z-depth-1-bottom">

      <div>
          <li class="list-inline-item font-weight-bold text-uppercase">
            quick inventory (Select Ball)
          </li>
      </div>

  </nav>

  <!--/.Navbar-->

    <div style="display:inline-flex;">

      <!-- Grid row -->
      <div class="row">

        <div class="col">
          <div class="card orange lighten-3">
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <p class="mb-0 hour">x left</p>
              </div>
            <hr>
            <div class="card-body pt-0" data-name="pokeball">
              <img src='https://cdn.bulbagarden.net/upload/7/79/Dream_Pok%C3%A9_Ball_Sprite.png'></img>
            </div>
            </div>
          </div>
        </div>

        <div class="col">

          <div class="card orange lighten-3">
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <p class="mb-0 hour">x left</p>
              </div>
            <hr>
            <div class="card-body pt-0" data-name="greatball">
              <img src='https://cdn.bulbagarden.net/upload/b/bf/Dream_Great_Ball_Sprite.png'></img>
            </div>
            </div>
          </div>
        </div>

        <div class="col">

          <div class="card orange lighten-3">
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <p class="mb-0 hour">x left</p>
              </div>
            <hr>
            <div class="card-body pt-0" data-name="ultraball">
              <img src='https://cdn.bulbagarden.net/upload/a/a8/Dream_Ultra_Ball_Sprite.png'></img>
            </div>
            </div>
          </div>
        </div>


        <div class="col">

          <div class="card orange lighten-3">
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <p class="mb-0 hour">x left</p>
              </div>
            <hr>
            <div class="card-body pt-0" data-name="masterball">
              <img src='https://cdn.bulbagarden.net/upload/9/95/Dream_Master_Ball_Sprite.png'></img>
            </div>
            </div>
          </div>
        </div>



        <div class="col">

          <div class="card orange lighten-3">
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <p class="mb-0 hour">100 ₽</p>
              </div>
            <hr>
            <div class="card-body pt-0" data-name="pokecoins">
              <img src='https://www.trukocash.com/img/games/10_resource_1_picture.png'></img>
            </div>
            </div>
          </div>
        </div>

      </div>

      </div>
    </div>


	<!-- bring in jQuery Library -->

	<script
	  src="https://code.jquery.com/jquery-3.5.1.min.js"
	  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	  crossorigin="anonymous"></script>
	<!-- custom code -->
    <script src="pokemon_array.js"></script>
    <script>
		document.body.style.backgroundColor = '#373737'

		document.getElementById("playing").style.color = 'white'
   	  	document.getElementById("playing").style.textAlign = 'center'
   	  	document.getElementById("playing").style.margin = 'auto'

		let playing_panel = document.getElementById("playing")
		let sprite_container = document.getElementById("sprite_container")
    let card_container = document.getElementById("card_container")
		let encounter_text = document.getElementById("encounter_text")
		let explore_button = document.getElementById('explore_btn')
		let catch_button = document.getElementById('catch_btn')

//weight for ball catchrate
 pokeballsDict = {
   'pokeball' : 4,
   'greatball' : 3,
   'ultraball' : 2,
   'masterball' : 1
 }

 let selected_pokeball = "pokeball"

 let all_ball_divs = document.querySelectorAll(".card-body.pt-0")
 for (let i =0; i < all_ball_divs.length-1; i++){
   all_ball_divs[i].onclick = function(event){
     let holder = all_ball_divs[i].dataset.name
     console.log(holder)
     let ajaxHolder;
     $.ajax({
       url: 'pokeballs_process_two.php',
       type: 'POST',
       data: {
         poke_check: holder
       },
       async:false,
       success: function(data, status) {
         ajaxHolder = data;
       },
 error: function(request, data, status){
         console.log("failed")
       }
     })

     console.log(ajaxHolder)
     if (ajaxHolder > 0) {
       selected_pokeball = holder
       console.log("chosen ball is: ", selected_pokeball)
       for(let j = 0; j < all_ball_divs.length-1; j++){
         all_ball_divs[j].classList.remove('chosenStyle')
       }
       all_ball_divs[i].classList.add('chosenStyle')
     }
     else{
       //maybe gray out the ball ?? something to show quantity is 0 visually
       alert("You do not own any " + all_ball_divs[i].dataset.name+"s")
     }
   }
 }

  var cookie_username;

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
  $("#welcome_msg").html('Welcome '+ cookie_username + '!');

  let all_ball_text = document.querySelectorAll(".mb-0.hour")
  getCurr();
  function getCurr() {
    $.ajax({
      // url:'data/chatroom.txt?nocache='+Math.random(),
      url: 'inventory/' + cookie_username + '/pokeballs.txt?nocache='+Math.random(),
      type: 'GET',
      data: {},
      success: function(data, status) {
        // console.log("yooooooooooo look here")
        // console.log(chat_history.value)
        console.log(data)
        let split_items = data.split(",")
        all_ball_text[0].innerHTML = split_items[0] + "x left"
        all_ball_text[1].innerHTML = split_items[1] + "x left"
        all_ball_text[2].innerHTML = split_items[2] + "x left"
        all_ball_text[3].innerHTML = split_items[3] + "x left"
        all_ball_text[4].innerHTML = split_items[4] + " ₽ "
        setTimeout( getCurr, 1000 );
      }
    })
  }


console.log(shiny_pokemon_dict)

    var commons = []
    var legendaries = []
    var shinies = []
    const rarities = [
      ['Common', 100],
      ['Legendary', 1],
      ['Shiny', 1000]
    ]
    console.log(rarities)

    legendaryKeys = ['mew', 'mewtwo', 'articuno', 'moltres', 'zapdos']

    for (var item in pokemonDict) {
      if( legendaryKeys.includes(item) ){
        legendaries.push( [pokemonDict[item][0], item, pokemonDict[item][1]] )
      }
      else{
        commons.push([pokemonDict[item][0], item, pokemonDict[item][1]])
      }
    }
    for (var item in shiny_pokemon_dict){
      shinies.push( [shiny_pokemon_dict[item], item] )
    }
    console.log(legendaries)
    console.log(commons)
    console.log(shinies)

    var choice;

    function weighted_value(){
      let total = 1;
      for (let i = 0; i < rarities.length; i++) {
        total += rarities[i][1];
      }
      let threshold = Math.floor(Math.random() * total);
      console.log("threshold is : ", threshold)
      total = 0;
      for (let i = 0; i < rarities.length; i++) {
      // Add the weight to our running total.
        total += rarities[i][1];
      // If this value falls within the threshold, we're done!
        if (total >= threshold) {
          return rarities[i][0];
          }
        }
    }

		var assets = []
    var selected;
		var encounter = []
    var encounter_name_holder = ""


		catch_button.disabled = true;


		explore_button.addEventListener("click", function(){
      var test_Val = weighted_value();
      console.log(test_Val)
      if(test_Val == 'Common'){
        assets = commons;
        selected ="common"
      }
      else if (test_Val == 'Legendary'){
        assets = legendaries;
        selected ="common"
      }
      else{
        assets = shinies;
        selected = "shiny"
      }
			let i = parseInt( Math.random() * assets.length )
			encounter.push(assets[i][0])

			//add our enounter text
			$("#encounter_text").css({opacity:100});

			let encounter_name = assets[i][1]
      let rarityDiv = document.querySelector("#rarity")
      let titleDiv = document.querySelector("#pokeTitle")
      titleDiv.style.display = "block"
      rarityDiv.style.display = "block"
      encounter_name_holder = encounter_name
      encounter_name = encounter_name.charAt(0).toUpperCase() + encounter_name.slice(1)
			if(assets == shinies){
				encounter_text.innerHTML = "You have encountered a wild Shiny " + encounter_name + "!"
			}
			else{
				encounter_text.innerHTML = "You have encountered a wild " + encounter_name + "!"
			}

      titleDiv.innerHTML = encounter_name
      rarityDiv.innerHTML = "Rarity: "
      console.log("assets: ", assets[i][1])

      // console.log("assets: ", assets[i][0][1])

			// add our encounter sprite
      if(selected == "shiny"){
        for(let x=0; x < assets[i][0][1]; x++){
          rarityDiv.innerHTML += "⭐"
        }
        card_container.src = assets[i][0][0]
      }
      else{
        for(let x=0; x < assets[i][2]; x++){
          rarityDiv.innerHTML += "⭐"
        }
        card_container.src = assets[i][0]
      }
			// add our encounter sprite

      card_container.style.margin = 'auto'
      card_container.style.width = '190px'
      card_container.style.height = '165px'
      $('#card_container').show()

   		catch_button.disabled = false;
			explore_button.disabled = true;


		});


		catch_button.addEventListener("click", function(){
      let winningValue = 1
      let ajaxHolder;
      let ball_rng = pokeballsDict[selected_pokeball]
      let currency_gain = (parseInt( Math.random() * 400)) + 200
      console.log(currency_gain)
      let rng = (parseInt( Math.random() * ball_rng)) + 1
      console.log(rng)

      if(rng!=winningValue){
        currency_gain = 0;
      }

      $.ajax({
        url: 'pokeballs_process.php',
        type: 'POST',
        data: {
          pokeball: selected_pokeball,
          coins: currency_gain
        },
        async:false,
        success: function(data, status) {
          ajaxHolder = data;
          console.log(data);
        },
  error: function(request, data, status){
          console.log("failed")
        }
      })

  //     $.ajax({
  //       url: 'pokeballs_process.php',
  //       type: 'GET',
  //       success: function(data, status) {
  //         ajaxHolder = data;
  //       },
  // error: function(request, data, status){
  //         console.log("failed")
  //       }
  //     })
  //
      if(ajaxHolder == 0){
        selected_pokeball = "pokeball"
      }

      if(selected == "shiny"){
        encounter_name_holder = encounter_name_holder + "*"
      }


      // if(pokeballsDict[selected_pokeball] == 0){
      //   selected_pokeball = "pokeball"
      // }
      if (rng == winningValue){
        encounter_text.innerHTML = "Pokemon sucessfully caught!";
  			$("#encounter_text").animate({opacity:0},1001);
        $.ajax({
          url: 'catch_pokemon.php',
          type: 'POST',
          data: {
            pokemon: encounter_name_holder
          },
          success: function(data, status) {
            console.log(data);
          },
    error: function(request, data, status){
            console.log("failed")
          }
        })
      }
      else{
        encounter_text.innerHTML = "Oh no! It ran away..";
        $("#encounter_text").animate({opacity:0},1001);
      }


			setTimeout(function(){
			    explore_button.disabled = false;
			}, 1000);


			$("#card_container").fadeOut(1000, function(){
        $(this).attr('src',"")
			});

      $("#pokeTitle").fadeOut(1000, function(){
        $(this).attr('src',"")
			});

      $("#rarity").fadeOut(1000, function(){
        $(this).attr('src',"")
			});



      console.log(encounter_name_holder)
			encounter.pop()
      encounter_name_holder = ""
      console.log("popped")
			catch_button.disabled = true;
		});




		// shuffle function if necessary
		function shuffle(array) {
    		for (var i = array.length - 1; i > 0; i--) {
        		var j = Math.floor(Math.random() * (i + 1));
        		var temp = array[i];
        		array[i] = array[j];
        		array[j] = temp;
    	}
    }

      $(document).ready(function() {

        // some DOM refs
        let form = document.getElementById('uploadform')
        let upload = document.getElementById('submit')

        upload.onclick = function(event) {
          event.preventDefault();

          // we have to package up our file uplaod into a FormData object -- this
          // is required due to the fact that we aren't sending standard ASCII
          // strings to the server with this request
          var fd = new FormData();
          var files = $('#filename')[0].files[0];
          fd.append('filename',files);

          // get a ref to our results div
          let r = document.getElementById('results')
          let profile_pic = document.getElementById('profile_pic')

          // now send our AJAX request to the server
          $.ajax({
            url: 'upload_process.php',
            type: 'POST',
            data: fd,
            processData: false,
            contentType: false,
            success: function(data, status) {
              if (data == 'filetype') {
                r.innerHTML = 'Incorrect file type';
              }
              else if (data == 'nofile') {
                r.innerHTML = 'Please select a file';
              }
              else if (data == 'success') {
                r.innerHTML = 'Successful upload'
                update_picture();
              }
            }
          })
          }


        var folder = "inventory/" + cookie_username + '/';
        update_picture();
        function update_picture() {
          $.ajax({
              url : folder,
              success: function (data) {
                  $(data).find("a").attr("href", function (i, val) {
                      if( val.match(/\.(png|jpg)$/) ) {
                          $("#profile_pic").attr( "src", folder + val);
                      }
                  });
              }
          });
        }
      })


    </script>
    <?php
      }
      else{
        header('Location: loginpage.php');
      }
     ?>



  </body>

</html>
