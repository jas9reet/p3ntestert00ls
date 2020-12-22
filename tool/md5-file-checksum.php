<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MD5 File Checksum - p3ntestert00ls </title>
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

    </style>
</head>
<body>
    
    <?php
      include '../navbar.php';
    ?>

    <canvas id="matrixRain"></canvas>

   

    <h1 style="color: white; text-align: center; "><br><br></h1>

<center>
  <h1>MD5 File Checksum </h1>
      <div class="div">
      <script src="js/main.js"></script>
      <div id="main">
        
        
        <div class="input">
          <div id="droppable-zone">
            <div id="droppable-zone-wrapper">
              <div id="droppable-zone-text"><b>Drop File Here</b></div><br>
            </div>
            <input id="input" type="file" placeholder="Input2" class="droppable-file">
          </div>
        </div>
        <div class="submit"><br>
          <input style="background-color: #05ff12" class="btn" id="execute" type="button" value="Hash" class="btn btn-default">
          <label>
            <input id="auto-update" type="checkbox" value="1" checked="checked">
          </label><br><br>
        </div>
        <div class="output">
          <textarea id="output" placeholder="Output"></textarea>
        </div>
      </div>
        <br>
            <!-- <div>
                 <a href="/p3ntestert00ls/tool/html-encoder.php">
                <button  class="decoder" class="btn btn-default">Encoder</button><br>
                </a>
            </div>  -->
      </div>
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
    </div>
     <script src="https://cdn.jsdelivr.net/gh/emn178/js-md5/build/md5.min.js"></script>
      <script>method = md5;</script>
    </div>

    <?php
      include '../footer.php';
    ?>

</body>
</html> 