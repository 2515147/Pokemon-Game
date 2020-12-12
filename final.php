<!doctype html>
<html>
  <head>
    <title>Pokemon</title>
    <style>
      .hidden {
        display: none;
      }

      #encounter_text{
      	height: 30px;
      	text-align: center;
      	padding-top: 15px;
      	margin: auto;
      }

      #sprite_container{
      	height: 225px;
      	width: 225px;
      	padding-top: 50px;
      	padding-bottom: -45px
      	text-align: center;
      	margin: auto;
      }

      #ballSelect{
          border: 1px solid black;
          height: 120px;
          width: 608px;
          margin: auto;
      }

      #ballContainer{
        display:inline-block;
        float: left;
        border: 1px solid blue;
        background-size: 70%;
        background-repeat: no-repeat;
        background-position: center;
        height: 120px;
        width:150px;
      }

    </style>
  </head>

  <body>
  <?php
    if ($_COOKIE['loggedin'] == 'yes'){
  ?>
  <div id="start">
		<b>Pok&eacutemon</b>
        <p>Lorem Ipsum</p>
        <button id="start_btn">Start Game!</button>

    </div>

    <div id="playing" class="hidden">
		Game UI Here
		<br>

      	<div id="encounter_text">
      	</div>
        <!-- sprites will go here -->
		<div id="sprite_container">
		</div>

		<div id="actions_container">
		<button id="explore_btn">Explore</button>
		<button id="catch_btn">Catch!</button>
    <button id="ball_btn">Select Ball</button>
		</div>

    <div id="ballSelect" class = "hidden">
      <div id ="ballContainer" data-name="pokeball" style="background-image: url('../game/pokeballs/pokeball.png');"> </div>
      <div id ="ballContainer" data-name="greatball" style="background-image: url('../game/pokeballs/greatball.png');"> </div>
      <div id ="ballContainer" data-name="ultraball" style="background-image: url('../game/pokeballs/ultraball.png');"> </div>
      <div id ="ballContainer" data-name="masterball" style="background-image: url('../game/pokeballs/masterball.png');"> </div>
    </div>

    	</div>


	<!-- bring in jQuery Library -->

	<script
	  src="https://code.jquery.com/jquery-3.5.1.min.js"
	  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	  crossorigin="anonymous"></script>
	<!-- custom code -->

    <script>
		document.body.style.backgroundColor = '#373737'
		document.getElementById("start").style.color = 'white'
		document.getElementById("start").style.textAlign = 'center'
		document.getElementById("start").style.margin = 'auto'

		document.getElementById("playing").style.color = 'white'
   	  	document.getElementById("playing").style.textAlign = 'center'
   	  	document.getElementById("playing").style.margin = 'auto'

		let start_button = document.getElementById('start_btn')
		let start_panel = document.getElementById("start")
		let playing_panel = document.getElementById("playing")
		let sprite_container = document.getElementById("sprite_container")
		let encounter_text = document.getElementById("encounter_text")
		let explore_button = document.getElementById('explore_btn')
		let catch_button = document.getElementById('catch_btn')

    pokemonDict = { 'bulbasaur': 'https://projectpokemon.org/images/normal-sprite/bulbasaur.gif',
'ivysaur': 'https://projectpokemon.org/images/normal-sprite/ivysaur.gif',
'venusaur': 'https://projectpokemon.org/images/normal-sprite/venusaur.gif',
'charmander': 'https://projectpokemon.org/images/normal-sprite/charmander.gif',
'charmeleon': 'https://projectpokemon.org/images/normal-sprite/charmeleon.gif',
'charizard': 'https://projectpokemon.org/images/normal-sprite/charizard.gif',
'squirtle': 'https://projectpokemon.org/images/normal-sprite/squirtle.gif',
'wartortle': 'https://projectpokemon.org/images/normal-sprite/wartortle.gif',
'blastoise': 'https://projectpokemon.org/images/normal-sprite/blastoise.gif',
'caterpie': 'https://projectpokemon.org/images/normal-sprite/caterpie.gif',
'metapod': 'https://projectpokemon.org/images/normal-sprite/metapod.gif',
'butterfree': 'https://projectpokemon.org/images/normal-sprite/butterfree.gif',
'weedle': 'https://projectpokemon.org/images/normal-sprite/weedle.gif',
'kakuna': 'https://projectpokemon.org/images/normal-sprite/kakuna.gif',
'beedrill': 'https://projectpokemon.org/images/normal-sprite/beedrill.gif',
'pidgey': 'https://projectpokemon.org/images/normal-sprite/pidgey.gif',
'pidgeotto': 'https://projectpokemon.org/images/normal-sprite/pidgeotto.gif',
'pidgeot': 'https://projectpokemon.org/images/normal-sprite/pidgeot.gif',
'rattata': 'https://projectpokemon.org/images/normal-sprite/rattata.gif',
'raticate': 'https://projectpokemon.org/images/normal-sprite/raticate.gif',
'spearow': 'https://projectpokemon.org/images/normal-sprite/spearow.gif',
'fearow': 'https://projectpokemon.org/images/normal-sprite/fearow.gif',
'ekans': 'https://projectpokemon.org/images/normal-sprite/ekans.gif',
'arbok': 'https://projectpokemon.org/images/normal-sprite/arbok.gif',
'pikachu': 'https://projectpokemon.org/images/normal-sprite/pikachu.gif',
'raichu': 'https://projectpokemon.org/images/normal-sprite/raichu.gif',
'sandshrew': 'https://projectpokemon.org/images/normal-sprite/sandshrew.gif',
'sandslash': 'https://projectpokemon.org/images/normal-sprite/sandslash.gif',
'nidoran (female)': 'https://projectpokemon.org/images/normal-sprite/nidoran_f.gif',
'nidorina': 'https://projectpokemon.org/images/normal-sprite/nidorina.gif',
'nidoqueen': 'https://projectpokemon.org/images/normal-sprite/nidoqueen.gif',
'nidoran': 'https://projectpokemon.org/images/normal-sprite/nidoran_m.gif',
'nidorino': 'https://projectpokemon.org/images/normal-sprite/nidorino.gif',
'nidoking': 'https://projectpokemon.org/images/normal-sprite/nidoking.gif',
'clefairy': 'https://projectpokemon.org/images/normal-sprite/clefairy.gif',
'clefable': 'https://projectpokemon.org/images/normal-sprite/clefable.gif',
'vulpix': 'https://projectpokemon.org/images/normal-sprite/vulpix.gif',
'ninetales': 'https://projectpokemon.org/images/normal-sprite/ninetales.gif',
'jigglypuff': 'https://projectpokemon.org/images/normal-sprite/jigglypuff.gif',
'wigglytuff': 'https://projectpokemon.org/images/normal-sprite/wigglytuff.gif',
'zubat': 'https://projectpokemon.org/images/normal-sprite/zubat.gif',
'golbat': 'https://projectpokemon.org/images/normal-sprite/golbat.gif',
'oddish': 'https://projectpokemon.org/images/normal-sprite/oddish.gif',
'gloom': 'https://projectpokemon.org/images/normal-sprite/gloom.gif',
'vileplume': 'https://projectpokemon.org/images/normal-sprite/vileplume.gif',
'paras': 'https://projectpokemon.org/images/normal-sprite/paras.gif',
'parasect': 'https://projectpokemon.org/images/normal-sprite/parasect.gif',
'venonat': 'https://projectpokemon.org/images/normal-sprite/venonat.gif',
'venomoth': 'https://projectpokemon.org/images/normal-sprite/venomoth.gif',
'diglett': 'https://projectpokemon.org/images/normal-sprite/diglett.gif',
'dugtrio': 'https://projectpokemon.org/images/normal-sprite/dugtrio.gif',
'meowth': 'https://projectpokemon.org/images/normal-sprite/meowth.gif',
'persian': 'https://projectpokemon.org/images/normal-sprite/persian.gif',
'psyduck': 'https://projectpokemon.org/images/normal-sprite/psyduck.gif',
'golduck': 'https://projectpokemon.org/images/normal-sprite/golduck.gif',
'mankey': 'https://projectpokemon.org/images/normal-sprite/mankey.gif',
'primeape': 'https://projectpokemon.org/images/normal-sprite/primeape.gif',
'growlithe': 'https://projectpokemon.org/images/normal-sprite/growlithe.gif',
'arcanine': 'https://projectpokemon.org/images/normal-sprite/arcanine.gif',
'poliwag': 'https://projectpokemon.org/images/normal-sprite/poliwag.gif',
'poliwhirl': 'https://projectpokemon.org/images/normal-sprite/poliwhirl.gif',
'poliwrath': 'https://projectpokemon.org/images/normal-sprite/poliwrath.gif',
'abra': 'https://projectpokemon.org/images/normal-sprite/abra.gif',
'kadabra': 'https://projectpokemon.org/images/normal-sprite/kadabra.gif',
'alakazam': 'https://projectpokemon.org/images/normal-sprite/alakazam.gif',
'machop': 'https://projectpokemon.org/images/normal-sprite/machop.gif',
'machoke': 'https://projectpokemon.org/images/normal-sprite/machoke.gif',
'machamp': 'https://projectpokemon.org/images/normal-sprite/machamp.gif',
'bellsprout': 'https://projectpokemon.org/images/normal-sprite/bellsprout.gif',
'weepinbell': 'https://projectpokemon.org/images/normal-sprite/weepinbell.gif',
'victreebel': 'https://projectpokemon.org/images/normal-sprite/victreebel.gif',
'tentacool': 'https://projectpokemon.org/images/normal-sprite/tentacool.gif',
'tentacruel': 'https://projectpokemon.org/images/normal-sprite/tentacruel.gif',
'geodude': 'https://projectpokemon.org/images/normal-sprite/geodude.gif',
'graveler': 'https://projectpokemon.org/images/normal-sprite/graveler.gif',
'golem': 'https://projectpokemon.org/images/normal-sprite/golem.gif',
'ponyta': 'https://projectpokemon.org/images/normal-sprite/ponyta.gif',
'rapidash': 'https://projectpokemon.org/images/normal-sprite/rapidash.gif',
'slowpoke': 'https://projectpokemon.org/images/normal-sprite/slowpoke.gif',
'slowbro': 'https://projectpokemon.org/images/normal-sprite/slowbro.gif',
'magnemite': 'https://projectpokemon.org/images/normal-sprite/magnemite.gif',
'magneton': 'https://projectpokemon.org/images/normal-sprite/magneton.gif',
'farfetchd': 'https://projectpokemon.org/images/normal-sprite/farfetchd.gif',
'doduo': 'https://projectpokemon.org/images/normal-sprite/doduo.gif',
'dodrio': 'https://projectpokemon.org/images/normal-sprite/dodrio.gif',
'seel': 'https://projectpokemon.org/images/normal-sprite/seel.gif',
'dewgong': 'https://projectpokemon.org/images/normal-sprite/dewgong.gif',
'grimer': 'https://projectpokemon.org/images/normal-sprite/grimer.gif',
'muk': 'https://projectpokemon.org/images/normal-sprite/muk.gif',
'shellder': 'https://projectpokemon.org/images/normal-sprite/shellder.gif',
'cloyster': 'https://projectpokemon.org/images/normal-sprite/cloyster.gif',
'gastly': 'https://projectpokemon.org/images/normal-sprite/gastly.gif',
'haunter': 'https://projectpokemon.org/images/normal-sprite/haunter.gif',
'gengar': 'https://projectpokemon.org/images/normal-sprite/gengar.gif',
'onix': 'https://projectpokemon.org/images/normal-sprite/onix.gif',
'drowzee': 'https://projectpokemon.org/images/normal-sprite/drowzee.gif',
'hypno': 'https://projectpokemon.org/images/normal-sprite/hypno.gif',
'krabby': 'https://projectpokemon.org/images/normal-sprite/krabby.gif',
'kingler': 'https://projectpokemon.org/images/normal-sprite/kingler.gif',
'voltorb': 'https://projectpokemon.org/images/normal-sprite/voltorb.gif',
'electrode': 'https://projectpokemon.org/images/normal-sprite/electrode.gif',
'exeggcute': 'https://projectpokemon.org/images/normal-sprite/exeggcute.gif',
'exeggutor': 'https://projectpokemon.org/images/normal-sprite/exeggutor.gif',
'cubone': 'https://projectpokemon.org/images/normal-sprite/cubone.gif',
'marowak': 'https://projectpokemon.org/images/normal-sprite/marowak.gif',
'hitmonlee': 'https://projectpokemon.org/images/normal-sprite/hitmonlee.gif',
'hitmonchan': 'https://projectpokemon.org/images/normal-sprite/hitmonchan.gif',
'lickitung': 'https://projectpokemon.org/images/normal-sprite/lickitung.gif',
'koffing': 'https://projectpokemon.org/images/normal-sprite/koffing.gif',
'weezing': 'https://projectpokemon.org/images/normal-sprite/weezing.gif',
'rhyhorn': 'https://projectpokemon.org/images/normal-sprite/rhyhorn.gif',
'rhydon': 'https://projectpokemon.org/images/normal-sprite/rhydon.gif',
'chansey': 'https://projectpokemon.org/images/normal-sprite/chansey.gif',
'tangela': 'https://projectpokemon.org/images/normal-sprite/tangela.gif',
'kangaskhan': 'https://projectpokemon.org/images/normal-sprite/kangaskhan.gif',
'horsea': 'https://projectpokemon.org/images/normal-sprite/horsea.gif',
'seadra': 'https://projectpokemon.org/images/normal-sprite/seadra.gif',
'goldeen': 'https://projectpokemon.org/images/normal-sprite/goldeen.gif',
'seaking': 'https://projectpokemon.org/images/normal-sprite/seaking.gif',
'staryu': 'https://projectpokemon.org/images/normal-sprite/staryu.gif',
'starmie': 'https://projectpokemon.org/images/normal-sprite/starmie.gif',
'mr.mime': 'https://projectpokemon.org/images/normal-sprite/mr.mime.gif',
'scyther': 'https://projectpokemon.org/images/normal-sprite/scyther.gif',
'jynx': 'https://projectpokemon.org/images/normal-sprite/jynx.gif',
'electabuzz': 'https://projectpokemon.org/images/normal-sprite/electabuzz.gif',
'magmar': 'https://projectpokemon.org/images/normal-sprite/magmar.gif',
'pinsir': 'https://projectpokemon.org/images/normal-sprite/pinsir.gif',
'tauros': 'https://projectpokemon.org/images/normal-sprite/tauros.gif',
'magikarp': 'https://projectpokemon.org/images/normal-sprite/magikarp.gif',
'gyarados': 'https://projectpokemon.org/images/normal-sprite/gyarados.gif',
'lapras': 'https://projectpokemon.org/images/normal-sprite/lapras.gif',
'ditto': 'https://projectpokemon.org/images/normal-sprite/ditto.gif',
'eevee': 'https://projectpokemon.org/images/normal-sprite/eevee.gif',
'vaporeon': 'https://projectpokemon.org/images/normal-sprite/vaporeon.gif',
'jolteon': 'https://projectpokemon.org/images/normal-sprite/jolteon.gif',
'flareon': 'https://projectpokemon.org/images/normal-sprite/flareon.gif',
'porygon': 'https://projectpokemon.org/images/normal-sprite/porygon.gif',
'omanyte': 'https://projectpokemon.org/images/normal-sprite/omanyte.gif',
'omastar': 'https://projectpokemon.org/images/normal-sprite/omastar.gif',
'kabuto': 'https://projectpokemon.org/images/normal-sprite/kabuto.gif',
'kabutops': 'https://projectpokemon.org/images/normal-sprite/kabutops.gif',
'aerodactyl': 'https://projectpokemon.org/images/normal-sprite/aerodactyl.gif',
'snorlax': 'https://projectpokemon.org/images/normal-sprite/snorlax.gif',
'articuno': 'https://projectpokemon.org/images/normal-sprite/articuno.gif',
'zapdos': 'https://projectpokemon.org/images/normal-sprite/zapdos.gif',
'moltres': 'https://projectpokemon.org/images/normal-sprite/moltres.gif',
'dratini': 'https://projectpokemon.org/images/normal-sprite/dratini.gif',
'dragonair': 'https://projectpokemon.org/images/normal-sprite/dragonair.gif',
'dragonite': 'https://projectpokemon.org/images/normal-sprite/dragonite.gif',
'mewtwo': 'https://projectpokemon.org/images/normal-sprite/mewtwo.gif',
'mew': 'https://projectpokemon.org/images/normal-sprite/mew.gif', }

shiny_pokemon_dict = {
  'bulbasaur': 'https://projectpokemon.org/images/shiny-sprite/bulbasaur.gif',
'ivysaur': 'https://projectpokemon.org/images/shiny-sprite/ivysaur.gif',
'venusaur': 'https://projectpokemon.org/images/shiny-sprite/venusaur.gif',
'charmander': 'https://projectpokemon.org/images/shiny-sprite/charmander.gif',
'charmeleon': 'https://projectpokemon.org/images/shiny-sprite/charmeleon.gif',
'charizard': 'https://projectpokemon.org/images/shiny-sprite/charizard.gif',
'squirtle': 'https://projectpokemon.org/images/shiny-sprite/squirtle.gif',
'wartortle': 'https://projectpokemon.org/images/shiny-sprite/wartortle.gif',
'blastoise': 'https://projectpokemon.org/images/shiny-sprite/blastoise.gif',
'caterpie': 'https://projectpokemon.org/images/shiny-sprite/caterpie.gif',
'metapod': 'https://projectpokemon.org/images/shiny-sprite/metapod.gif',
'butterfree': 'https://projectpokemon.org/images/shiny-sprite/butterfree.gif',
'weedle': 'https://projectpokemon.org/images/shiny-sprite/weedle.gif',
'kakuna': 'https://projectpokemon.org/images/shiny-sprite/kakuna.gif',
'beedrill': 'https://projectpokemon.org/images/shiny-sprite/beedrill.gif',
'pidgey': 'https://projectpokemon.org/images/shiny-sprite/pidgey.gif',
'pidgeotto': 'https://projectpokemon.org/images/shiny-sprite/pidgeotto.gif',
'pidgeot': 'https://projectpokemon.org/images/shiny-sprite/pidgeot.gif',
'rattata': 'https://projectpokemon.org/images/shiny-sprite/rattata.gif',
'raticate': 'https://projectpokemon.org/images/shiny-sprite/raticate.gif',
'spearow': 'https://projectpokemon.org/images/shiny-sprite/spearow.gif',
'fearow': 'https://projectpokemon.org/images/shiny-sprite/fearow.gif',
'ekans': 'https://projectpokemon.org/images/shiny-sprite/ekans.gif',
'arbok': 'https://projectpokemon.org/images/shiny-sprite/arbok.gif',
'pikachu': 'https://projectpokemon.org/images/shiny-sprite/pikachu.gif',
'raichu': 'https://projectpokemon.org/images/shiny-sprite/raichu.gif',
'sandshrew': 'https://projectpokemon.org/images/shiny-sprite/sandshrew.gif',
'sandslash': 'https://projectpokemon.org/images/shiny-sprite/sandslash.gif',
'nidoran (female)': 'https://projectpokemon.org/images/shiny-sprite/nidoran_f.gif',
'nidorina': 'https://projectpokemon.org/images/shiny-sprite/nidorina.gif',
'nidoqueen': 'https://projectpokemon.org/images/shiny-sprite/nidoqueen.gif',
'nidoran': 'https://projectpokemon.org/images/shiny-sprite/nidoran_m.gif',
'nidorino': 'https://projectpokemon.org/images/shiny-sprite/nidorino.gif',
'nidoking': 'https://projectpokemon.org/images/shiny-sprite/nidoking.gif',
'clefairy': 'https://projectpokemon.org/images/shiny-sprite/clefairy.gif',
'clefable': 'https://projectpokemon.org/images/shiny-sprite/clefable.gif',
'vulpix': 'https://projectpokemon.org/images/shiny-sprite/vulpix.gif',
'ninetales': 'https://projectpokemon.org/images/shiny-sprite/ninetales.gif',
'jigglypuff': 'https://projectpokemon.org/images/shiny-sprite/jigglypuff.gif',
'wigglytuff': 'https://projectpokemon.org/images/shiny-sprite/wigglytuff.gif',
'zubat': 'https://projectpokemon.org/images/shiny-sprite/zubat.gif',
'golbat': 'https://projectpokemon.org/images/shiny-sprite/golbat.gif',
'oddish': 'https://projectpokemon.org/images/shiny-sprite/oddish.gif',
'gloom': 'https://projectpokemon.org/images/shiny-sprite/gloom.gif',
'vileplume': 'https://projectpokemon.org/images/shiny-sprite/vileplume.gif',
'paras': 'https://projectpokemon.org/images/shiny-sprite/paras.gif',
'parasect': 'https://projectpokemon.org/images/shiny-sprite/parasect.gif',
'venonat': 'https://projectpokemon.org/images/shiny-sprite/venonat.gif',
'venomoth': 'https://projectpokemon.org/images/shiny-sprite/venomoth.gif',
'diglett': 'https://projectpokemon.org/images/shiny-sprite/diglett.gif',
'dugtrio': 'https://projectpokemon.org/images/shiny-sprite/dugtrio.gif',
'meowth': 'https://projectpokemon.org/images/shiny-sprite/meowth.gif',
'persian': 'https://projectpokemon.org/images/shiny-sprite/persian.gif',
'psyduck': 'https://projectpokemon.org/images/shiny-sprite/psyduck.gif',
'golduck': 'https://projectpokemon.org/images/shiny-sprite/golduck.gif',
'mankey': 'https://projectpokemon.org/images/shiny-sprite/mankey.gif',
'primeape': 'https://projectpokemon.org/images/shiny-sprite/primeape.gif',
'growlithe': 'https://projectpokemon.org/images/shiny-sprite/growlithe.gif',
'arcanine': 'https://projectpokemon.org/images/shiny-sprite/arcanine.gif',
'poliwag': 'https://projectpokemon.org/images/shiny-sprite/poliwag.gif',
'poliwhirl': 'https://projectpokemon.org/images/shiny-sprite/poliwhirl.gif',
'poliwrath': 'https://projectpokemon.org/images/shiny-sprite/poliwrath.gif',
'abra': 'https://projectpokemon.org/images/shiny-sprite/abra.gif',
'kadabra': 'https://projectpokemon.org/images/shiny-sprite/kadabra.gif',
'alakazam': 'https://projectpokemon.org/images/shiny-sprite/alakazam.gif',
'machop': 'https://projectpokemon.org/images/shiny-sprite/machop.gif',
'machoke': 'https://projectpokemon.org/images/shiny-sprite/machoke.gif',
'machamp': 'https://projectpokemon.org/images/shiny-sprite/machamp.gif',
'bellsprout': 'https://projectpokemon.org/images/shiny-sprite/bellsprout.gif',
'weepinbell': 'https://projectpokemon.org/images/shiny-sprite/weepinbell.gif',
'victreebel': 'https://projectpokemon.org/images/shiny-sprite/victreebel.gif',
'tentacool': 'https://projectpokemon.org/images/shiny-sprite/tentacool.gif',
'tentacruel': 'https://projectpokemon.org/images/shiny-sprite/tentacruel.gif',
'geodude': 'https://projectpokemon.org/images/shiny-sprite/geodude.gif',
'graveler': 'https://projectpokemon.org/images/shiny-sprite/graveler.gif',
'golem': 'https://projectpokemon.org/images/shiny-sprite/golem.gif',
'ponyta': 'https://projectpokemon.org/images/shiny-sprite/ponyta.gif',
'rapidash': 'https://projectpokemon.org/images/shiny-sprite/rapidash.gif',
'slowpoke': 'https://projectpokemon.org/images/shiny-sprite/slowpoke.gif',
'slowbro': 'https://projectpokemon.org/images/shiny-sprite/slowbro.gif',
'magnemite': 'https://projectpokemon.org/images/shiny-sprite/magnemite.gif',
'magneton': 'https://projectpokemon.org/images/shiny-sprite/magneton.gif',
'farfetchd': 'https://projectpokemon.org/images/shiny-sprite/farfetchd.gif',
'doduo': 'https://projectpokemon.org/images/shiny-sprite/doduo.gif',
'dodrio': 'https://projectpokemon.org/images/shiny-sprite/dodrio.gif',
'seel': 'https://projectpokemon.org/images/shiny-sprite/seel.gif',
'dewgong': 'https://projectpokemon.org/images/shiny-sprite/dewgong.gif',
'grimer': 'https://projectpokemon.org/images/shiny-sprite/grimer.gif',
'muk': 'https://projectpokemon.org/images/shiny-sprite/muk.gif',
'shellder': 'https://projectpokemon.org/images/shiny-sprite/shellder.gif',
'cloyster': 'https://projectpokemon.org/images/shiny-sprite/cloyster.gif',
'gastly': 'https://projectpokemon.org/images/shiny-sprite/gastly.gif',
'haunter': 'https://projectpokemon.org/images/shiny-sprite/haunter.gif',
'gengar': 'https://projectpokemon.org/images/shiny-sprite/gengar.gif',
'onix': 'https://projectpokemon.org/images/shiny-sprite/onix.gif',
'drowzee': 'https://projectpokemon.org/images/shiny-sprite/drowzee.gif',
'hypno': 'https://projectpokemon.org/images/shiny-sprite/hypno.gif',
'krabby': 'https://projectpokemon.org/images/shiny-sprite/krabby.gif',
'kingler': 'https://projectpokemon.org/images/shiny-sprite/kingler.gif',
'voltorb': 'https://projectpokemon.org/images/shiny-sprite/voltorb.gif',
'electrode': 'https://projectpokemon.org/images/shiny-sprite/electrode.gif',
'exeggcute': 'https://projectpokemon.org/images/shiny-sprite/exeggcute.gif',
'exeggutor': 'https://projectpokemon.org/images/shiny-sprite/exeggutor.gif',
'cubone': 'https://projectpokemon.org/images/shiny-sprite/cubone.gif',
'marowak': 'https://projectpokemon.org/images/shiny-sprite/marowak.gif',
'hitmonlee': 'https://projectpokemon.org/images/shiny-sprite/hitmonlee.gif',
'hitmonchan': 'https://projectpokemon.org/images/shiny-sprite/hitmonchan.gif',
'lickitung': 'https://projectpokemon.org/images/shiny-sprite/lickitung.gif',
'koffing': 'https://projectpokemon.org/images/shiny-sprite/koffing.gif',
'weezing': 'https://projectpokemon.org/images/shiny-sprite/weezing.gif',
'rhyhorn': 'https://projectpokemon.org/images/shiny-sprite/rhyhorn.gif',
'rhydon': 'https://projectpokemon.org/images/shiny-sprite/rhydon.gif',
'chansey': 'https://projectpokemon.org/images/shiny-sprite/chansey.gif',
'tangela': 'https://projectpokemon.org/images/shiny-sprite/tangela.gif',
'kangaskhan': 'https://projectpokemon.org/images/shiny-sprite/kangaskhan.gif',
'horsea': 'https://projectpokemon.org/images/shiny-sprite/horsea.gif',
'seadra': 'https://projectpokemon.org/images/shiny-sprite/seadra.gif',
'goldeen': 'https://projectpokemon.org/images/shiny-sprite/goldeen.gif',
'seaking': 'https://projectpokemon.org/images/shiny-sprite/seaking.gif',
'staryu': 'https://projectpokemon.org/images/shiny-sprite/staryu.gif',
'starmie': 'https://projectpokemon.org/images/shiny-sprite/starmie.gif',
'mr._mime': 'https://projectpokemon.org/images/shiny-sprite/mr._mime.gif',
'scyther': 'https://projectpokemon.org/images/shiny-sprite/scyther.gif',
'jynx': 'https://projectpokemon.org/images/shiny-sprite/jynx.gif',
'electabuzz': 'https://projectpokemon.org/images/shiny-sprite/electabuzz.gif',
'magmar': 'https://projectpokemon.org/images/shiny-sprite/magmar.gif',
'pinsir': 'https://projectpokemon.org/images/shiny-sprite/pinsir.gif',
'tauros': 'https://projectpokemon.org/images/shiny-sprite/tauros.gif',
'magikarp': 'https://projectpokemon.org/images/shiny-sprite/magikarp.gif',
'gyarados': 'https://projectpokemon.org/images/shiny-sprite/gyarados.gif',
'lapras': 'https://projectpokemon.org/images/shiny-sprite/lapras.gif',
'ditto': 'https://projectpokemon.org/images/shiny-sprite/ditto.gif',
'eevee': 'https://projectpokemon.org/images/shiny-sprite/eevee.gif',
'vaporeon': 'https://projectpokemon.org/images/shiny-sprite/vaporeon.gif',
'jolteon': 'https://projectpokemon.org/images/shiny-sprite/jolteon.gif',
'flareon': 'https://projectpokemon.org/images/shiny-sprite/flareon.gif',
'porygon': 'https://projectpokemon.org/images/shiny-sprite/porygon.gif',
'omanyte': 'https://projectpokemon.org/images/shiny-sprite/omanyte.gif',
'omastar': 'https://projectpokemon.org/images/shiny-sprite/omastar.gif',
'kabuto': 'https://projectpokemon.org/images/shiny-sprite/kabuto.gif',
'kabutops': 'https://projectpokemon.org/images/shiny-sprite/kabutops.gif',
'aerodactyl': 'https://projectpokemon.org/images/shiny-sprite/aerodactyl.gif',
'snorlax': 'https://projectpokemon.org/images/shiny-sprite/snorlax.gif',
'articuno': 'https://projectpokemon.org/images/shiny-sprite/articuno.gif',
'zapdos': 'https://projectpokemon.org/images/shiny-sprite/zapdos.gif',
'moltres': 'https://projectpokemon.org/images/shiny-sprite/moltres.gif',
'dratini': 'https://projectpokemon.org/images/shiny-sprite/dratini.gif',
'dragonair': 'https://projectpokemon.org/images/shiny-sprite/dragonair.gif',
'dragonite': 'https://projectpokemon.org/images/shiny-sprite/dragonite.gif',
'mewtwo': 'https://projectpokemon.org/images/shiny-sprite/mewtwo.gif',
'mew': 'https://projectpokemon.org/images/shiny-sprite/mew.gif'
}

// berryDict = {'Aguav Berry': 'https://www.serebii.net/itemdex/sprites/pgl/aguavberry.png',
//  'Apicot Berry': 'https://www.serebii.net/itemdex/sprites/pgl/apicotberry.png',
//  'Aspear Berry': 'https://www.serebii.net/itemdex/sprites/pgl/aspearberry.png',
//  'Babiri Berry': 'https://www.serebii.net/itemdex/sprites/pgl/babiriberry.png',
//  'Belue Berry': 'https://www.serebii.net/itemdex/sprites/pgl/belueberry.png',
//  'Bluk Berry': 'https://www.serebii.net/itemdex/sprites/pgl/blukberry.png',
//  'Charti Berry': 'https://www.serebii.net/itemdex/sprites/pgl/chartiberry.png',
//  'Cheri Berry': 'https://www.serebii.net/itemdex/sprites/pgl/cheriberry.png',
//  'Chesto Berry': 'https://www.serebii.net/itemdex/sprites/pgl/chestoberry.png',
//  'Chilan Berry': 'https://www.serebii.net/itemdex/sprites/pgl/chilanberry.png',
//  'Chople Berry': 'https://www.serebii.net/itemdex/sprites/pgl/chopleberry.png',
//  'Coba Berry': 'https://www.serebii.net/itemdex/sprites/pgl/cobaberry.png',
//  'Colbur Berry': 'https://www.serebii.net/itemdex/sprites/pgl/colburberry.png',
//  'Cornn Berry': 'https://www.serebii.net/itemdex/sprites/pgl/cornnberry.png',
//  'Custap Berry': 'https://www.serebii.net/itemdex/sprites/pgl/custapberry.png',
//  'Durin Berry': 'https://www.serebii.net/itemdex/sprites/pgl/durinberry.png',
//  'Enigma Berry': 'https://www.serebii.net/itemdex/sprites/pgl/enigmaberry.png',
//  'Figy Berry': 'https://www.serebii.net/itemdex/sprites/pgl/figyberry.png',
//  'Ganlon Berry': 'https://www.serebii.net/itemdex/sprites/pgl/ganlonberry.png',
//  'Golden Nanab Berry': 'https://www.serebii.net/itemdex/sprites/pgl/goldennanabberry.png',
//  'Golden Pinap Berry': 'https://www.serebii.net/itemdex/sprites/pgl/goldenpinapberry.png',
//  'Golden Razz Berry': 'https://www.serebii.net/itemdex/sprites/pgl/goldenrazzberry.png',
//  'Grepa Berry': 'https://www.serebii.net/itemdex/sprites/pgl/grepaberry.png',
//  'Haban Berry': 'https://www.serebii.net/itemdex/sprites/pgl/habanberry.png',
//  'Hondew Berry': 'https://www.serebii.net/itemdex/sprites/pgl/hondewberry.png',
//  'Iapapa Berry': 'https://www.serebii.net/itemdex/sprites/pgl/iapapaberry.png',
//  'Jaboca Berry': 'https://www.serebii.net/itemdex/sprites/pgl/jabocaberry.png',
//  'Kasib Berry': 'https://www.serebii.net/itemdex/sprites/pgl/kasibberry.png',
//  'Kebia Berry': 'https://www.serebii.net/itemdex/sprites/pgl/kebiaberry.png',
//  'Kee Berry': 'https://www.serebii.net/itemdex/sprites/pgl/keeberry.png',
//  'Kelpsy Berry': 'https://www.serebii.net/itemdex/sprites/pgl/kelpsyberry.png',
//  'Lansat Berry': 'https://www.serebii.net/itemdex/sprites/pgl/lansatberry.png',
//  'Leppa Berry': 'https://www.serebii.net/itemdex/sprites/pgl/leppaberry.png',
//  'Liechi Berry': 'https://www.serebii.net/itemdex/sprites/pgl/liechiberry.png',
//  'Lum Berry': 'https://www.serebii.net/itemdex/sprites/pgl/lumberry.png',
//  'Mago Berry': 'https://www.serebii.net/itemdex/sprites/pgl/magoberry.png',
//  'Magost Berry': 'https://www.serebii.net/itemdex/sprites/pgl/magostberry.png',
//  'Maranga Berry': 'https://www.serebii.net/itemdex/sprites/pgl/marangaberry.png',
//  'Micle Berry': 'https://www.serebii.net/itemdex/sprites/pgl/micleberry.png',
//  'Nanab Berry': 'https://www.serebii.net/itemdex/sprites/pgl/nanabberry.png',
//  'Nomel Berry': 'https://www.serebii.net/itemdex/sprites/pgl/nomelberry.png',
//  'Occa Berry': 'https://www.serebii.net/itemdex/sprites/pgl/occaberry.png',
//  'Oran Berry': 'https://www.serebii.net/itemdex/sprites/pgl/oranberry.png',
//  'Pamtre Berry': 'https://www.serebii.net/itemdex/sprites/pgl/pamtreberry.png',
//  'Passho Berry': 'https://www.serebii.net/itemdex/sprites/pgl/passhoberry.png',
//  'Payapa Berry': 'https://www.serebii.net/itemdex/sprites/pgl/payapaberry.png',
//  'Pecha Berry': 'https://www.serebii.net/itemdex/sprites/pgl/pechaberry.png',
//  'Persim Berry': 'https://www.serebii.net/itemdex/sprites/pgl/persimberry.png',
//  'Petaya Berry': 'https://www.serebii.net/itemdex/sprites/pgl/petayaberry.png',
//  'Pinap Berry': 'https://www.serebii.net/itemdex/sprites/pgl/pinapberry.png',
//  'Pomeg Berry': 'https://www.serebii.net/itemdex/sprites/pgl/pomegberry.png',
//  'Qualot Berry': 'https://www.serebii.net/itemdex/sprites/pgl/qualotberry.png',
//  'Rabuta Berry': 'https://www.serebii.net/itemdex/sprites/pgl/rabutaberry.png',
//  'Rawst Berry': 'https://www.serebii.net/itemdex/sprites/pgl/rawstberry.png',
//  'Razz Berry': 'https://www.serebii.net/itemdex/sprites/pgl/razzberry.png',
//  'Rindo Berry': 'https://www.serebii.net/itemdex/sprites/pgl/rindoberry.png',
//  'Roseli Berry': 'https://www.serebii.net/itemdex/sprites/pgl/roseliberry.png',
//  'Rowap Berry': 'https://www.serebii.net/itemdex/sprites/pgl/rowapberry.png',
//  'Salac Berry': 'https://www.serebii.net/itemdex/sprites/pgl/salacberry.png',
//  'Shuca Berry': 'https://www.serebii.net/itemdex/sprites/pgl/shucaberry.png',
//  'Silver Nanab Berry': 'https://www.serebii.net/itemdex/sprites/pgl/silvernanabberry.png',
//  'Silver Pinap Berry': 'https://www.serebii.net/itemdex/sprites/pgl/silverpinapberry.png',
//  'Silver Razz Berry': 'https://www.serebii.net/itemdex/sprites/pgl/silverrazzberry.png',
//  'Sitrus Berry': 'https://www.serebii.net/itemdex/sprites/pgl/sitrusberry.png',
//  'Spelon Berry': 'https://www.serebii.net/itemdex/sprites/pgl/spelonberry.png',
//  'Starf Berry': 'https://www.serebii.net/itemdex/sprites/pgl/starfberry.png',
//  'Tamato Berry': 'https://www.serebii.net/itemdex/sprites/pgl/tamatoberry.png',
//  'Tanga Berry': 'https://www.serebii.net/itemdex/sprites/pgl/tangaberry.png',
//  'Wacan Berry': 'https://www.serebii.net/itemdex/sprites/pgl/wacanberry.png',
//  'Watmel Berry': 'https://www.serebii.net/itemdex/sprites/pgl/watmelberry.png',
//  'Wepear Berry': 'https://www.serebii.net/itemdex/sprites/pgl/wepearberry.png',
//  'Wiki Berry': 'https://www.serebii.net/itemdex/sprites/pgl/wikiberry.png',
//  'Yache Berry': 'https://www.serebii.net/itemdex/sprites/pgl/yacheberry.png' }

 // repelDict = {
 //   'Repel' : 'https://www.serebii.net/itemdex/sprites/pgl/repel.png',
 //   'Super Repel' : 'https://cdn.bulbagarden.net/upload/d/df/Dream_Super_Repel_Sprite.png',
 //   'Max Repel' : 'https://www.serebii.net/itemdex/sprites/pgl/maxrepel.png'
 // }

//first value in list is weight, second number in list is ball quantity
 pokeballsDict = {
   'pokeball' : 4,
   'greatball' : 3,
   'ultraball' : 2,
   'masterball' : 1
 }

 let selected_pokeball = "pokeball"
 let ballDiv = document.querySelector("#ballSelect")
 let all_ball_divs = document.querySelectorAll("#ballContainer")
 for (let i =0; i < all_ball_divs.length; i++){
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
       ballDiv.classList.add('hidden')
     }
     // else{
     //   //maybe gray out the ball ?? something to show quantity is 0 visually
     // }
   }
 }

console.log(shiny_pokemon_dict)

    var commons = []
    var legendaries = []
    var shinies = []
    const rarities = [
      ['Common', 100],
      ['Legendary', 1],
      ['Shiny', 1]
    ]
    console.log(rarities)

    legendaryKeys = ['mew', 'mewtwo', 'articuno', 'moltres', 'zapdos']

    for (var item in pokemonDict) {
      if( legendaryKeys.includes(item) ){
        legendaries.push( [pokemonDict[item], item] )
      }
      else{
        commons.push([pokemonDict[item], item])
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
		var encounter = []
    var encounter_name_holder = ""

    start_button.onclick = function(event) {
      start_panel.classList.add('hidden')
      playing_panel.classList.remove('hidden')
		}

		catch_button.disabled = true;

    let ballSelector = document.querySelector('#ball_btn');
    console.log(ballSelector)

    ballSelector.onclick = function(event){
      ballDiv.classList.remove('hidden')
      console.log("done")
    }
    // ballSelector.addEventListener("click", function(){
    //   ballSelector.classList.remove('hidden')
    //   console.log("done")
    // })


		explore_button.addEventListener("click", function(){
      var test_Val = weighted_value();
      console.log(test_Val)
      if(test_Val == 'Common'){
        assets = commons;
      }
      else if (test_Val == 'Legendary'){
        assets = legendaries;
      }
      else{
        assets = shinies;
      }
			let i = parseInt( Math.random() * assets.length )
			encounter.push(assets[i][0])

			//add our enounter text
			$("#encounter_text").css({opacity:100});

			let encounter_name = assets[i][1]
      encounter_name_holder = encounter_name
      encounter_name = encounter_name.charAt(0).toUpperCase() + encounter_name.slice(1)
			if(assets == shinies){
				encounter_text.innerHTML = "You have encountered a wild Shiny " + encounter_name + "!"
			}
			else{
				encounter_text.innerHTML = "You have encountered a wild " + encounter_name + "!"
			}


			// add our encounter sprite
            let curr_encounter = document.createElement('img')
            curr_encounter.src = assets[i][0]
            curr_encounter.style.margin = 'auto'
            curr_encounter.style.width = '190px'
            curr_encounter.style.height = '165px'
            sprite_container.appendChild(curr_encounter)
       		catch_button.disabled = false;
			explore_button.disabled = true;


		});


		catch_button.addEventListener("click", function(){
      let winningValue = 1
      let ajaxHolder;
      let ball_rng = pokeballsDict[selected_pokeball]
      let rng = (parseInt( Math.random() * ball_rng)) + 1
      console.log(rng)

      $.ajax({
        url: 'pokeballs_process.php',
        type: 'POST',
        data: {
          pokeball: selected_pokeball
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


			$("#sprite_container img").fadeOut(1000, function(){
    			$(this).remove();
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
    </script>
    <?php
      }
      else{
        header('Location: loginpage.php');
      }
     ?>



  </body>

</html>
