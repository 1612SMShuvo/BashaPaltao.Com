
<!DOCTYPE HTML>
<html>
<head>
<title>Client</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body> 
  
<div class="page-container">  
   <div class="left-content">
     <div class="mother-grid-inner">
            <!--header start here-->
        <div class="header-main">
          <div class="header-left">
              <div class="logo-name">
                   <a href="index.html"> <h1>বাসাপাল্টাও.কম</h1> 
                  <!--<img id="logo" src="" alt="Logo"/>--> 
                  </a>                
              </div>

              
             </div>

        </div>
<!--heder end here-->
<!-- script-for sticky-nav -->
    <script>
    $(document).ready(function() {
       var navoffeset=$(".header-main").offset().top;
       $(window).scroll(function(){
        var scrollpos=$(window).scrollTop(); 
        if(scrollpos >=navoffeset){
          $(".header-main").addClass("fixed");
        }else{
          $(".header-main").removeClass("fixed");
        }
       });
       
    });
    </script>
    <!-- /script-for sticky-nav -->
<!--inner block start here-->

<!--mainpage chit-chating-->
<div class="chit-chat-layer1">

     <div class="clearfix"></div>

<div class="login-page">
    <div class="login-main">    
       <div class="login-head">
        <h1>Login</h1>
      </div>
      <div class="login-block">
        <form action="{{URL::to('/Clientlogin')}}" method="post">
            {{ csrf_field() }}
                  @if(session()->has('Message'))
                    <div style="background-color: red; padding: 25px; color:black; font-size:18px">{{ session()->get('Message') }}</div><br>
                  @endif
          <input type="text" name="c_email" placeholder="Email" required="">
          <input type="password" name="c_pass" class="lock" placeholder="Password">

          <input type="submit" name="Sign In" value="Login">
          <h3>Not a member?<a href="{{URL::to('/ClientReg')}}"> Sign up now</a></h3>        

        </form>

      </div>
      </div>
</div>
</div>

<!--inner block end here-->
<!--copy rights start here-->
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
   <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>  
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
        <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> <!-- 
            <img id="logo" src="" alt="Logo"/>  -->
        </a> </div>     
        <div class="menu">
          <ul id="menu" >
            <li id="menu-home" ><i><a href="{{URL::to('/')}}"><i class="fa fa-tachometer"><span>Home</span></i></a></i></li>

            <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Log In</span><span class="fa fa-angle-right" style="float: right"></span></a>
              <ul id="menu-academico-sub" >
                 <li id="menu-academico-boletim" ><a href="{{URL::to('/AdminLogin')}}">Admin</a></li>
                <li id="menu-academico-avaliacoes" ><a href="{{URL::to('/ClientLogin')}}">Client</a></li>
                 <li id="menu-academico-avaliacoes" ><a href="{{URL::to('/ManagerLogin')}}">Manager</a></li>               
              </ul>
            </li>
            
</ul>

        </div>
   </div>
  <div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     