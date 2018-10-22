<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="http://purepng.com/public/uploads/large/purepng.com-popcornpopcorncorndent-cornflint-corn-1411528651430gpsc3.png" alt="">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Royal Cinema of Sweden</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
               
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
  <?php
    include "navBar.php";
  ?>
  <div class="section">
    <div class="container rubrik">
      <h1 class="header center white-text">Ant man and the Wasp</h1>
      <div class="center">
        <a class="red darken-1 waves-effect waves-light btn-large transparent" href="boka.php">Köp biljett</a>
      </div>
    </div>
  </div>

  <section id="pris">
    <div class="container">
    <div class="video-container">
        <iframe width="853" height="480" src="https://www.youtube.com/embed/pzD9zGcUNrw" frameborder="0" allowfullscreen></iframe>
      </div>
      <h1 class="red-text text-darken-1">Popular now</h1>
      <div class="row">
        <div class="col s3">
          <a target="_blank" href="#"><img alt="gastrogate.png" src="pics/Brexit_Metaphor.jpg" class="z-depth-2"></a>
        </div>
        <div class="col s3">
          <a target="_blank" href="#"><img alt="tripadvisor-icon.png" src="pics/12 Strong.jpg" class="z-depth-2"></a>
        </div>
        <div class="col s3">
          <a target="_blank" href="#"><img alt="yelp.png" src="pics/blade.jpg" class="z-depth-2"></a>
        </div>
        <div class="col s3">
          <a target="_blank" href="#"><img alt="yelp.png" src="pics/The Nun.png" class="z-depth-2"></a>
        </div>    
      </div>
    </div>
  </section>

  
  <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <p class="grey-text text-lighten-4">
              <table class="Tidtabell">
              <tr>
                <th>Dag</th>
                <th>Tid</th>
              </tr>
              <tr>
                <td>Måndag-Torsdag</td>
                <td>12:00-21:00</td>
              </tr>
              <tr>
                <td>Fredag</td>
                <td>16:00-21:00</td>
              </tr>
              <tr>
                <td>Lördag</td>
                <td>17:00-21:00</td>
              </tr>
              <tr>
                <td>Söndag</td>
                <td>17:00-21:00</td>
              </tr>
            </table></p>
          </div>
          <div class="col l4 offset-l2 s12">
            
            <ul>
                  <svg class="svg-icon" viewBox="0 0 20 20">
                          <path d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"></path>
                        </svg>
              <li>Stockholm</li>
              <li>Drottninggatan 28</li>
              <li>111 51 Stockholm</li>
              <br>
              <svg class="svg-icon" viewBox="0 0 20 20">
                      <path d="M17.218,2.268L2.477,8.388C2.13,8.535,2.164,9.05,2.542,9.134L9.33,10.67l1.535,6.787c0.083,0.377,0.602,0.415,0.745,0.065l6.123-14.74C17.866,2.46,17.539,2.134,17.218,2.268 M3.92,8.641l11.772-4.89L9.535,9.909L3.92,8.641z M11.358,16.078l-1.268-5.613l6.157-6.157L11.358,16.078z"></path>
                </svg>
              <li><a href="#">åva@taby.se</a></li>
              <li>08 - 21 13 01</li>
              <br>

            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2014 Copyright
        <a class="grey-text text-lighten-4 right" href="#!">RCOS</a>
        </div>
      </div>
    </footer>
    
</body>
</html>