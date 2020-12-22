<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tools - p3ntestert00ls </title>
    <link rel="icon" href="img/favicon.png"  type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:400,700'> 
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <link rel="stylesheet" href="vendor/Treant.css">
    <link rel="stylesheet" href="css/collapsable.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--     <link rel="stylesheet" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
 -->
    <style type="text/css">
        
        canvas{
        position: fixed;
        z-index: -1;
      }
      body {
            font-family: 'Courier New', monospace;
          /*text-shadow: 3px 3px 3px grey;*/
          }

          .grid-item{
           text-shadow: 3px 3px 3px black; 
          }


    #leftbox { 
                float:left;  
                width:25%; 
                height:300px; 
            } 
            #middlebox{ 
                float:left;  
                width:50%; 
                height:300px; 
            } 
            #rightbox{ 
                float:right; 
                width:25%; 
                height:300px; 
            } 
            
    </style>

</head>
<body>
    
    <?php
      include 'navbar.php';
    ?>

    <canvas id="matrixRain"></canvas>

    <h1 style="color: white; text-align: center; "><br><br> Tools </h1>

<center>
    <div class="container">

      <div class="grid" style="size: auto" >

        <a href="/p3ntestert00ls/tool/url-encoder.php">
        <div class="grid-item"><img style="height: 100px; width: 100px" src="img/url-encoding.png"><p>URL Encoding</p></div>
        </a>

        <a href="/p3ntestert00ls/tool/html-encoder.php">
        <div class="grid-item"><img style="height: 100px; width: 100px" src="img/html-encoding.png"><p>HTML Encoding</p></div>
        </a>

        <a href="/p3ntestert00ls/tool/base32-encoder.php">
        <div class="grid-item"><img style="height: 100px; width: 100px" src="img/base32-encoding.png"><p>Base32 Encoding</p></div>
        </a>

        <a href="/p3ntestert00ls/tool/base64-encoder.php">
        <div class="grid-item"><img style="height: 100px; width: 100px" src="img/base64-encoding.png"><p>Base64 Encoding</p></div>
        </a>

        <a href="/p3ntestert00ls/tool/subdomain-finder.php">
        <div class="grid-item"><img style="height: 100px; width: 100px" src="img/subdomain-finder.png"><p>Subdomain-Finder</p></div>
        </a>

        <a href="/p3ntestert00ls/tool/whois-lookup.php">
        <div class="grid-item"><img style="height: 100px; width: 100px" src="img/whois-lookup.png"><p>Whois Lookup</p></div>
        </a>


        <a href="/p3ntestert00ls/tool/url-fuzzer.php">
        <div class="grid-item"><img style="height: 100px; width: 100px" src="img/url-fuzzer.png"><p>URl Fuzzer</p></div>
        </a>

        <a href="/p3ntestert00ls/tool/md5-file-checksum.php">
        <div class="grid-item"><img style="height: 100px; width: 100px" src="img/md5.png"><p>MD5 Checksum</p></div>
        </a>

        <a href="/p3ntestert00ls/tool/SHA256-file-checksum.php">
        <div class="grid-item"><img style="height: 100px; width: 100px" src="img/SHA256.png"><p>SHA256 Checksum</p></div>
        </a>

        <a href="/p3ntestert00ls/tool/md5-hash.php">
        <div class="grid-item"><img style="height: 100px; width: 100px" src="img/md5.png"><p>MD5 Hash</p></div>
        </a>

        <a href="/p3ntestert00ls/tool/SHA256-hash.php">
        <div class="grid-item"><img style="height: 100px; width: 100px" src="img/SHA256.png"><p>SHA256 Hash</p></div>
        </a>





      </div>
      
    </div>
</center>

      <!-- Glicth -->

<!-- 
          <?php
            // include 'div.php';
          ?>
 -->

    <div class="chart" id="collapsable-example"></div>
    <script src="vendor/raphael.js"></script>
    <script src="vendor/Treant.js"></script>
    
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/jquery.easing.js"></script>
    
    
    <script type="text/javascript" src="js/matrix.js"></script>
    <script>
        tree = new Treant( chart_config );
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

    <?php
      include 'footer.php';
    ?>

</body>
</html>