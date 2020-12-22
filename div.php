<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>
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
/*          text-shadow: 3px 3px 3px grey;
*/          }


html, body {
  min-height: 50%;
  height: 50%;
}

.box {
  width: 33%;
  position: relative;
  height: 100%;
} 

.glitch {
  font-size: 50px;
  line-height: 1;
  font-family: 'Poppins', sans-serif;
  font-weight: 700;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  margin: 0;
  text-decoration: none;
  color: #fff;
}
.glitch:before, .glitch:after {
  display: block;
  content: 'MD5';
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  opacity: .8;
}
.glitch:after {
  color: #f0f;
  z-index: -2;
}
.glitch:before {
  color: #0ff;
  z-index: -1;
}
.glitch:hover:before {
  -webkit-animation: glitch-left 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
          animation: glitch-left 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
}
.glitch:hover:after {
  animation: glitch-left-2 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) reverse both infinite;
}

}
@keyframes glitch-left {
  0% {
    -webkit-transform: translate(0);
            transform: translate(0);
  }
  33% {
    -webkit-transform: translate(-5px, 3px);
            transform: translate(-5px, 3px);
  }
  66% {
    -webkit-transform: translate(5px, -3px);
            transform: translate(5px, -3px);
  }
  to {
    -webkit-transform: translate(0);
            transform: translate(0);
  }
}
@-webkit-keyframes glitch-left-2 {
  0% {
    -webkit-transform: translate(0);
            transform: translate(0);
  }
  33% {
    -webkit-transform: translate(-5px, -3px);
            transform: translate(-5px, -3px);
  }
  66% {
    -webkit-transform: translate(5px, 2px);
            transform: translate(5px, 2px);
  }
  to {
    -webkit-transform: translate(0);
            transform: translate(0);
  }
}
@keyframes glitch-left-2 {
  0% {
    -webkit-transform: translate(0);
            transform: translate(0);
  }
  33% {
    -webkit-transform: translate(-5px, -3px);
            transform: translate(-5px, -3px);
  }
  66% {
    -webkit-transform: translate(5px, 2px);
            transform: translate(5px, 2px);
  }
  to {
    -webkit-transform: translate(0);
            transform: translate(0);
  }
}

    #leftbox { 
                float:left;  
                width:25%; 
                height:200px; 
            } 
            #middlebox{ 
                float:left;  
                width:50%; 
                height:200px; 
            } 
            #rightbox{ 
                float:right; 
                width:25%; 
                height:200px; 
            } 
            
    </style>

</head>
<body>
    

    <canvas id="matrixRain"></canvas>
<!-- <div class="container-fluid">
  
  <h1 class="my-4 font-weight-bold"></h1>

  <div class="grid">
    <div class="grid-item "></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item "></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item "></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    
  </div>
  
</div> -->


<center>

<div id = "boxes"> 

    <div id = "leftbox"> 
 
      <div class="box">
      <a href="#" class="glitch">MD5</a>
      </div>

    </div>  
              
    <div id = "middlebox"> 
               
      <div class="box">
      <a href="#" class="glitch">10</a>
      </div>

    </div> 
              
    <div id = "rightbox"> 
   
        <div class="box">
          <a href="#" class="glitch">10</a>
        </div>
    
    </div>

</div> 

<br>

<div id = "boxes"> 

    <div id = "leftbox"> 
 
      <div class="box">
      <a href="#" class="glitch">MD5</a>
      </div>

    </div>  
              
    <div id = "middlebox"> 
               
      <div class="box">
      <a href="#" class="glitch">10</a>
      </div>

    </div> 
              
    <div id = "rightbox"> 
   
        <div class="box">
          <a href="#" class="glitch">10</a>
        </div>
    
    </div>

</div> 

<br>

<div id = "boxes"> 

    <div id = "leftbox"> 
 
      <div class="box">
      <a href="#" class="glitch">10</a>
      </div>

    </div>  
              
    <div id = "middlebox"> 
               
      <div class="box">
      <a href="#" class="glitch">10</a>
      </div>

    </div> 
              
    <div id = "rightbox"> 
   
        <div class="box">
          <a href="#" class="glitch">10</a>
        </div>
    
    </div>


</center>


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


</body>
</html>