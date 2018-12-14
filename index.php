<!--
   _____      _                  _                    ______  
  / ____|    | |      _         | |                  / /___ \ 
 | |     __ _| |_   _| |_       | | ___ _ __  ___   / /  __) |
 | |    / _` | __| |_   _|  _   | |/ _ \ '_ \/ __| < <  |__ < 
 | |___| (_| | |_    |_|   | |__| |  __/ | | \__ \  \ \ ___) |
  \_____\__,_|\__|          \____/ \___|_| |_|___/   \_\____/ 
                                                              
                                                              
-->
<!DOCTYPE html>
<html lang="da-DK">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Cat & Jens ❤️</title>
<link rel="icon" href="https://catogjens.info/emoji_u2665.png">
<meta name="description" content="❤️">
<meta name="theme-color" content="#A81010">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jensz12">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Cat & Jens ❤️">
<meta name="twitter:description" content="❤️">
<meta name="twitter:image:src" content="https://catogjens.info/20180427_164231.jpg">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="manifest" href="/manifest.json">
<link rel="image_src" href="https://catogjens.info/20180427_164231.jpg">
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-POYwD7xcktv3gUeZO5s/9nUbRJG/WOmV6jfEGikMJu77LGYO8Rfs2X7URG822aum" crossorigin="anonymous">
<style>
body {
	background-image: url(https://catogjens.info/20180427_164231.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	background-attachment: fixed;
	font-family: 'Roboto', sans-serif;
	padding-top: 70px;
}
h1 {
  	text-align: center;
	margin-top:0px;
}
.fa-heart {
	color: #A81010;
}
</style>
</head>
<body>
	<main role="main" id="content" class="container">
		<div class="row">
			<article class="col-lg-12 col-md-12">
				<div class="jumbotron">
					<h1> <i class="fas fa-heart" data-toggle="tooltip" data-placement="top" title="25/07/2017" data-toggle="modal" data-target="#exampleModal"></i></h1>
					<h1 id="countdown"></h1>
				</div>
				<div class="jumbotron">
					<div class="embed-responsive embed-responsive-16by9">
  						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Arj8WZJMPIo?showinfo=0&color=white&theme=light&fs=1" allowfullscreen></iframe>
					</div>
				</div>
			</article>
		</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"crossorigin="anonymous"></script>
<script src="https://static.jensz12.com/script/snowstorm.js"></script>
<script>
	var countDownDate = new Date("Dec 21, 2018 12:40:00").getTime();
	var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("countdown").innerHTML = days + " dage " + hours + " timer "
    + minutes + " minutter " + seconds + " sekunder "; 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "❤️";
    }
}, 1000);
</script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>
