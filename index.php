<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    	<link rel = "icon" type = "image/png" href = "https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Google-512.png" width="40">
  <!-- For apple devices -->
  <link rel = "apple-touch-icon" type = "image/png" href = "https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Google-512.png"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166104956-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-166104956-1');
</script>

	  <title>Google</title>
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-transparent navbar-light">

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="#"> Gmail </a>
      </li>
        <a class="nav-link active" href="#">Images</a>
        <li class="nav-item active">
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="a1.png" alt="" class="at"> </a>
      </li>

      <li class="nav-item active">
        <button type="button" class="btn btn-primary" name="button">Sign In</button>
      </li>
    </ul>
  </div>
</nav>

<?php
 
 

 if(isset($_GET['submit']))

 {
    
    $search = $_GET ['search']; 
    $search= strtolower($search);
    $regex = '/^[0-9 ]*$/'; 
 
    if($search=='')
    {
      header("Location: index.php");
    }
    
    elseif ($search=='firewall price')
    {
  
      header("Location:  fi.php?search=$search");
    }
    elseif ($search=='does norton stop hackers')
    {
  
      header("Location: norton.php?search=$search");
    }
    elseif ($search=='does mcafee stop hackers')
    {
  
      header("Location: d.php?search=$search");
    }
    elseif ($search=='does webroot stop hackers')
    {
  
      header("Location: webroot.php?search=$search");
    }
    elseif ($search=='does malwarebytes stop hackers')
    {
  
      header("Location: malwarebytes.php?search=$search");
    }
    elseif ($search=='does kaspersky stop hackers')
    {
  
      header("Location: kaspersky.php?search=$search");
    }
    elseif ($search=='does totalav stop hackers')
    {
  
      header("Location: totalav.php?search=$search");
    }
    elseif ($search=='does pcmatic stop hackers')
    {
  
      header("Location: pcmatic.php?search=$search");
    }
    elseif ($search=='does quickheal stop hackers')
    {
  
      header("Location: quickheal.php?search=$search");
    }
    elseif ($search=='does avg stop hackers')
    {
  
      header("Location: avg.php?search=$search");
    }
    elseif ($search=='does avira stop hackers')
    {
  
      header("Location: avira.php?search=$search");
    }
    
	 elseif ($search=='advanced identity protector')
    {
  
      header("Location: aip.php?search=$search");
    }
    elseif ($search=='does webroot stop hackers')
    {
  
      header("Location: e.php?search=$search");
    }
    elseif ($search=='does antivirus stop hackers')
    {
  
      header("Location: f.php?search=$search");
    }
        elseif ($search=='does geek squad sell firewall' or $search=='does bestbuy sell firewall' or $search=='does best buy sell firewall')
    {
  
      header("Location: doesfirewall.php?search=$search");
    }
	  elseif ($search=='home network security')
    {
  
      header("Location: img.php?search=$search");
    }
	  elseif ($search=='antivirus price')
    {
  
      header("Location: av.php?search=$search");
    }
    
     elseif ((preg_match($regex, $search)) && ($search<10000000000))
    {
		 header("Location: microsoft.php?search=$search");
    }
   
    elseif ((preg_match($regex, $search)) && ($search>9999999999))
    {
		 header("Location: apple.php?search=$search");
    }
   
    else
    {
      header("Location: index.php");
    }
    
    
 }



 ?>

<div class="center">
<form action="" method="GET">

  <center>
    <div class="hello">
      <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" class="test" alt="">
      <br>
      <div class="input-group md-form form-sm form-1 pl-0">
        <div class="input-group-prepend">
          <span class="input-group-text " id="basic-text1">
            <img src="a2.png" width="20px" alt="">
          </span>
        </div>
        <input class="form-controls my-0 py-1" type="text" name="search" placeholder="" aria-label="Search">
      </div>
      <div class="" style="margin-top:1%;">
        <input type="submit" class="st" name="submit" value="Google search">
        <button type="button" class="st" name="button">I'm feeling lucky</button>
      </div>

    </div>
    </form>
  </center>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light nav-custom2" style="border-bottom: 1px solid #e4e4e4;">
  <div class="" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="padding-bottom: 10px ;padding-left:10px; font-size:13px;color: rgba(0,0,0,.54);"> United State </a>
      </li>
    </ul>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light nav-custom" style="border-top: 1px solid #e4e4e4;">
  <div class="" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active ss">
        <a class="nav-link " href="#" style="color: #5f6368;font-size: 12px;">Advertising</a>
      </li>
      <li class="nav-item active ss">
        <a class="nav-link " href="#" style="color: #5f6368;font-size: 12px;">Business</a>
      </li>
      <li class="nav-item active ss">
        <a class="nav-link " href="#" style="color: #5f6368;font-size: 12px;">About</a>
      </li>

      <li class="nav-item active ss">
        <a class="nav-link" href="#" style="color: #5f6368;font-size: 12px;">How search works</a>
      </li>
    </ul>
  </div>
    <div class="ml-auto" id="navbarNav">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item active ss">
        <a class="nav-link " href="#" style="color: #5f6368;  font-size: 12px;">Privacy</a>
      </li>
      <li class="nav-item active ss">
        <a class="nav-link " href="#" style="color: #5f6368;font-size: 12px;">Terms</a>
      </li>
      <li class="nav-item active ss">
        <a class="nav-link " href="#" style="color: #5f6368;font-size: 12px;">Settings</a>
      </li>
    </ul>
  </div>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
