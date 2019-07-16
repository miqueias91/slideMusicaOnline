<?php
  $artist = $_GET['artist'];
  $song = $_GET['song'];
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Slide de Música Online</title>
    <link rel="stylesheet" href="css/reveal.min.css">
    <link rel="stylesheet" href="css/theme/night.css">
  </head>
  <body>
    <div class="reveal">
      <div class="slides">

        <section id='principal'>
          <h1 id='titulo'></h1>
          <h3 id='autor'></h3>
        </section>
    </div>
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="lib/js/head.min.js"></script>
    <script src="js/reveal.min.js"></script>
    <script>
      var key = "5e8ef503810fa95cab986fdbd7605c04";
      jQuery.getJSON(
          "https://api.vagalume.com.br/search.php?art="+"<?=$artist?>"+"&mus="+"<?=$song?>"+"&apikey="+key,
          function (data) {

              // Letra da música
              if (data.type === "song_notfound" || data.type === "notfound") {
                $('#principal').html("<h3>Não encontramos essa música/autor</h3>");
              }
              else{         
                $('#autor').html(data.art.name);
                $('#titulo').html(data.mus[0].name);
                var letraMusica = data.mus[0].text.split("\n\n");

                for (var i = 0; i < letraMusica.length; i++) {
                  var tmpLetra = ""
                  var auxLetra = "";
                  auxLetra = letraMusica[i].split("\n");

                  for (var j = 0; j < auxLetra.length; j++) {
                    tmpLetra += "<p>"+auxLetra[j]+"</p>"
                  }
                  $('.slides').append(
                    "<section>"
                        +""+
                          tmpLetra+
                        ""       
                    +"</section>"
                  );
                }         
              }
          }
      );

    Reveal.initialize({
      autoSlide: 0,
      center: true,
      controls: false,
      mouseWheel: true,
      transition: 'none',
      dependencies: [
        {
          src: 'plugin/zoom-js/zoom.js',
          async: true
        }
      ]
    });
    </script>
  </body>
</html>
