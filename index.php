<?php 


if (isset($_GET['unlock'])) {
    unlock();
  }

function unlock(){
    
    echo "door has been unlocked";
    
}

?>  
  <html>
<head>
    <title>Door Unlock</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">
    
   
<style>
.btn3d {
	position: relative;
	left: 40%;
	margin-top: 5%;
    border-radius: 50px;
	transition: all 40ms linear;
    font-size: 150%;
}

.btn3d:active,
.btn3d.active {
	top: 2px;
}
.btn3d.btn-success {
	box-shadow: 0 0 0 1px #31c300 inset, 0 0 0 2px rgba(255, 255, 255, 0.15) inset, 0 8px 0 0 #5eb924, 0 8px 8px 1px rgba(0, 0, 0, 0.5);
	background-color: #78d739;

}

.btn3d.btn-success:active,
.btn3d.btn-success.active {
	box-shadow: 0 0 0 1px #30cd00 inset, 0 0 0 1px rgba(255, 255, 255, 0.15) inset, 0 1px 3px 1px rgba(0, 0, 0, 0.3);
	
	background-color: #78d739;
}



</style>
</head>

<body>
	 

     
 <div class="row">
 

  <div class="col-sm-12">
      
		<button type="button" onclick="image.php?unlock=true" class="btn btn-success btn-lg btn3d">
		<i class="fas fa-unlock-alt"></i>   Unlock </button>
<br>
  </div><br><br>
     
  <div class="col-sm-12">
     
  </div><br>   
   
  <div class="col-sm-6">
      <button type="button" class="btn btn-lg btn-success btn-block">
      <a class="fas fa-camera" id="buttonIcon"></a>Image Capture
      </button><br>
  </div><br>
     
  
 
  <div class="col-sm-6">
  
   <button type="button" onclick="location.href='live.php'" class="btn btn-lg btn-dark btn-block">
   <a class="fas fa-video" id="buttonIcon"></a>     Live Preview
   </button>

   <br>
</div>
     
      
  <div class="col-sm-6">

     <button type="button" onclick="location.href='sms.php'" class="btn  btn-lg btn-warning btn-block">
          <a class="fas fa-file-alt" id="buttonIcon"></a>Log
      </button>

      <br>
  </div>
  
  
  <div class="col-sm-6">

          <button type="submit" onclick="location.href='files.php'" class="btn  btn-lg btn-warning btn-block">
          <a class="fa fa-folder-open" id="buttonIcon"></a>File
      </button>

      <br>
  </div>
  
  <div class="col-sm-6"> 
    
      <button type="button" onclick="location.href='user.php'" class="btn  btn-lg btn-secondary btn-block">
           <a class="fa fa-users" id="buttonIcon"></a>Users
      </button>
     
      <br>
       </div>

  <div class="col-sm-6"> 
   
      <button type="button" onclick="location.href='settings.php'" class="btn btn-lg btn-primary btn-block">
           <a class="fa fa-cog" id="buttonIcon"></a>Settings
      </button>
 
      <br>
      </div>
      
  <div class="col-sm-12"> 
  
      <button type="button" onclick="location.href=''" class="btn btn-lg btn-danger btn-block">
       <i class="fa fa-time" id="buttonIcon"></i>    Logout
      </button>

      <br>
</div>

       
       
   </div>
   
    
    
    
<?php include ("footer.php");    ?>
  