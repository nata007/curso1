
<style type="text/css">

@import url(http://fonts.googleapis.com/css?family=Exo:100);
* {margin: 0; padding: 0; border: 0 none;}
html, body {height: 100%; width: 100%; font-size: 1rem; font-family: 'Exo', sans-serif; font-weight: 100;}
.cont-slider {
    position: relative;
    height: 100vh;
    max-height: 100vh;
    width: auto;
    min-width: 100vw;
    margin: 0 auto;
    overflow: hidden;
}
.slider {
    animation: deslizante 25s ease-out 0s backwards infinite;
    position: absolute;
    left: 0;
    top: 0;
    width: 500%;
    height: 100%;
}
.slide {
    display: inline-block;
    position: relative;
    width: 20%;
    height: 100%;    
    background-attachment: fixed;
    background-position: center center;
    background-size: cover;
}
.slide span {
    background: rgba(0, 0, 0, 0.3);
    border-radius: 0 5vh 5vh 0;
    color: #FFF;
    position: absolute;
    left: 0;
    top: 40vh;
    font-size: 20vh;
    line-height: 20vh;
    border: 1px solid rgba(255,255,255,.45);
    border-left: 0 none;
}
.uno {
  background-image: url(http://farm9.staticflickr.com/6183/6025120829_4d582707f7_z.jpg);}
.dos {
  background-image: url(http://farm9.staticflickr.com/8064/8179351735_c8c069dc61_z.jpg);}
.tres {
  background-image: url(http://farm9.staticflickr.com/8061/8188068610_70eda46a1f_z.jpg);}
.cuatro {
  background-image: url(http://farm9.staticflickr.com/242/535485602_9328a91e65_z.jpg);}
.cinco {
  background-image: url(http://farm9.staticflickr.com/8488/8175350378_a97be42263_z.jpg);}

@keyframes deslizante {
  0% {left: 0%; }
  15% {left: 0%; }
  20% {left: -100%; }
  35% {left: -100%; }
  40% {left: -200%; }  
  55% {left: -200%; }
  60% {left: -300%; }
  75% {left: -300%; }
  80% {left: -400%; }
  95% {left: -400%; }   
  100% {left: 0; }
}
</style>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- SITE TITLE -->
	<title>Enerco</title>
	</head>
<header class="cont-slider">
    <section class="slider">
      <article class="slide uno"><span>Por Sendas </span></article><!--
      --><article class="slide dos"><span>Veredas y</span></article><!--
      --><article class="slide tres"><span>Carriles del</span></article><!--
      --><article class="slide cuatro"><span>Bosque Css</span></article><!--
      --><article class="slide cinco"><span>con Kseso</span></article>
    </section>
</header>
</html>