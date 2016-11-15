<!DOCTYPE html>
<html>
<head>
	<title>IETT kart gideri hesaplama hesaplama</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<h1>Akbil türünü seçiniz:</h1>

		<!-- <div><img src="images/anonim-karttur.png"><br>Anonim Kart</div>
		<div><img src="images/mavi-kartlartur.png"><br>Mavi Kart</div>
		<div><img src="images/indirimli-karttur.png"><br>İndirimli Kart</div>
		<div><img src="images/ucretsiz-karttur.png"><br>Ücretsiz Kart</div> -->
<form method="post" attribute="post" action="disp_form.php">
<div id="hepsi">
<label class="radio">
<div class="img">
<input type="radio" name="Akbil" value="Anon" />
    <img src="images/anonim-karttur.png" alt="Anonim Kart" width="300" height="200">
  	<div class="desc">Anonim Kart</div>
</div>
</label>

<label class="radio">
<div class="img">
<input type="radio" name="Akbil" value="mavi" />
  <img src="images/mavi-kartlartur.png" alt="Mavi Kart" width="600" height="200">
  <div class="desc">Mavi Kart</div>
</div>
</label>

<label class="radio">
<div class="img">
<input type="radio" name="Akbil" value="indr" />
    <img src="images/indirimli-karttur.png" alt="İndirimli Kart" width="600" height="200">
  
  <div class="desc">İndirimli Kart</div>
</div>
</label>

<label class="radio">
<div class="img">
<input type="radio" name="Akbil" value="ucr" />
    <img src="images/ucretsiz-karttur.png" alt="Ücretsiz Kart" width="600" height="200">
  
  <div class="desc">Ücretsiz Kart</div>
</div>
</div>
</label>

<p class="aktarma">Aktarma sayısı:<br/>
<input type="text" id="aktarma" name="aktarma"> <br>
<button type="submit" name="answer" id="answer" value="answer">Calculate</button>

</p>

<p></p>



</form>
</body>
</html>