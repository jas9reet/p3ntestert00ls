

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> URL Fuzzer - p3ntestert00ls </title>
    <link rel="icon" href="../img/favicon.png"  type="image/png">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>

    <link rel="stylesheet" href="vendor/Treant.css">
    <link rel="stylesheet" href="../css/collapsable.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/glitch.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

    <style type="text/css">
        
        canvas{
          position: fixed;
          z-index: -1;
        }

        body {
              font-family: 'Courier New', monospace;
              font: red;
  /*          text-shadow: 3px 3px 3px grey;
  */          }

    .div {
      background-color: black;
      width: 500px;
      border: 2px solid green;
      padding: 20px;
      margin: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      word-wrap:break-word;
      float: center
    }

        input{
                text-align: center;

                }

        pre{
          color: white;

        } 

    </style>
</head>
<body>
    
    <?php
      include '../navbar.php';
    ?>

    <canvas id="matrixRain"></canvas>

    <h1 style="color: white; text-align: center; "><br><br></h1>


<center>



</center>


    <script src="../vendor/raphael.js"></script>
    <script src="../vendor/Treant.js"></script>
    <script src="../../OTs/main.js"></script>
    
    <script src="../vendor/jquery.min.js"></script>
    <script src="../vendor/jquery.easing.js"></script>
    
        <script type="text/javascript" src="../js/matrix.js"></script>
    <script>
        tree = new Treant( chart_config );
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

   

</body>
</html>
<?php
  
  $file=$_GET['file'];
  $files = "$file";
  $url = $_GET['url'];


$fp = @fopen("url-wordlist/$files", "r") or die("Unable to open file! or find doesn't exist");

while (!feof($fp)){ 
  $keywords[] = fgets($fp);
}

for ($i=0; $i <count($keywords) ; $i++) { 
  $keywords[$i] = str_replace(",","",$keywords[$i]);
  $link = $url."/".trim($keywords[$i]);
  $handle = curl_init($link);
  curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

  /* Get the HTML or whatever is linked in $url. */
  $response = curl_exec($handle);

  /* Check for 404 (file not found). */
  $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
  echo"<div class='div'>";
  if($httpCode == 200) {
      /* Handle 200 here. */
  //     echo '<pre>*** Ajax Request Cancelled *** '.$link.'- HTTP Code:'.$httpCode."\n</pre>";
  // } if($httpCode == 200) {
  //     /* Handle 200 here. */
      
      echo '<pre >*** Success *** '.$link.'- HTTP Code:'.$httpCode."\n</pre>";
  } else if($httpCode == 301) {
      /* Handle 301 here. */
      echo '<pre>*** Moved *** '.$link.'- HTTP Code:'.$httpCode."\n<pre>";
  } else if($httpCode == 302) {
      /* Handle 302 here. */
      echo '<pre>*** Moved *** '.$link.'- HTTP Code:'.$httpCode."\n</pre>";
  } else if($httpCode == 403) {
      /* Handle 403 here. */
      echo '<pre>*** Forbidden *** '.$link.'- HTTP Code:'.$httpCode."\n</pre>";
  } else if($httpCode == 404) {
      /* Handle 404 here. */
      echo '<pre>*** NOT EXIST *** '.$link.'- HTTP Code:'.$httpCode."\n</pre>";
  } else if($httpCode == 503) {
      /* Handle 503 here. */
      echo '<pre>*** 503 Service Unavailable *** '.$link.'- HTTP Code:'.$httpCode."\n</pre>";
  } else {
    echo '<pre>*** Unknown *** '.$link.'- HTTP Code:'.$httpCode."\n</pre>";

  }
  echo"</div>";

  curl_close($handle);
}

?>