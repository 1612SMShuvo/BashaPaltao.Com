
<!DOCTYPE HTML>
<html>
<head>
<title>Service</title>
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

              <div class="clearfix"> </div>
             </div>
             <div class="header-right">
              <div class="profile_details">   
                <ul>
                  <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <div class="profile_img"> 
                        <span class="prfil-img"><img src="images/mess.jpg" alt=""> </span> 
                        <div class="user-name">
                          <p>Client</p>
                          <span>User</span>
                        </div>
                        <i class="fa fa-angle-down lnr"></i>
                        <i class="fa fa-angle-up lnr"></i>
                        <div class="clearfix"></div>  
                      </div>  
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                      <li> <a href="{{URL::to('/ClientLogin')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
                    </ul>
                  </li>
                </ul>
              </div>


              <!--notification menu end -->

              <div class="clearfix"> </div>       
            </div>
             <div class="clearfix"> </div>  
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

<div class="signup-page-main">
     <div class="signup-main">    
       <div class="signup-head">

      </div>
      <div class="signup-block">

<center>
        <h1>Service Request</h1>

      <form action="{{URL::to('/AddService')}}" method="POST">
        @csrf
               <input class="input100" type="text" name="s_id" placeholder="Service ID">
               <input class="input100" type="text" name="s_name" placeholder="Client name" value="">
               <input class="input100" type="text" name="s_phone" placeholder="Client phone no." value="">
               <input class="input100" type="text" name="dscp" placeholder="Furniture description" value="">
               <input class="input100" type="text" name="c_floor" placeholder="Current Appertment floor" value="">
               <input class="input100" type="text" name="n_floor" placeholder="Next Appertment floor" value="">
               <input class="input100" type="text" name="c_add" placeholder="Current Appertment address" value="">
               <input class="input100" type="text" name="n_add" placeholder="Next Appertment address" value="">
               
            <input type="submit" name="addinfo" value="Add Request"><br>
<button ><a href="{{URL::to('/ClientShow')}}">Cancel</a></button>
            </div>
      </form>              
</center>

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

            <li id="menu-comunicacao" ><a href="{{URL::to('/ClientShow')}}"><i class="fa fa-book nav_icon"></i><span>Service Request</span><span class="fa fa-angle-right" style="float: right"></span>
              <ul id="menu-comunicacao-sub" >
                <li id="menu-arquivos" ><a href="{{URL::to('/Service')}}">Add service request</a></li>
                <li id="menu-arquivos" ><a href="{{URL::to('/ClientShow')}}">view Request</a></li>
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

