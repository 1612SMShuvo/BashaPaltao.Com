
<!DOCTYPE HTML>
<html>
<head>
<title>Add Manager</title>
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
                        <span class="prfil-img"><img src="images/p1.jpg" alt=""> </span> 
                        <div class="user-name">
                          <p>S.M Shuvo</p>
                          <span>Administrator</span>
                        </div>
                        <i class="fa fa-angle-down lnr"></i>
                        <i class="fa fa-angle-up lnr"></i>
                        <div class="clearfix"></div>  
                      </div>  
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                      <li> <a href="{{URL::to('AdminLogin/')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
    <div class="inner-block">
<!--market updates updates-->


<!--mainpage chit-chating-->

<!--climate end here-->
</div>

<div class="signup-page-main">
     <div class="signup-main">    
       <div class="signup-head">
        <h1>Add Manager</h1>
      </div>
      <div class="signup-block">
        <form action="{{url('/addmanager')}}" method="Post">
          {{csrf_field()}}
            <input class="input100" type="text" name="m_id" placeholder="Enter Manager ID" value="m-0" required="">
            <input class="input100" type="text" name="m_name" placeholder="Enter Manager Name" required="">
            <input class="input100" type="text" name="m_email" placeholder="Enter Manager's Email" required="">
            <input class="input100" type="password" name="m_pass" placeholder="Enter Manager Password" required="">
            <input class="input100" type="text" name="m_age" placeholder="Enter Manager's Age" required="">
            <input class="input100" type="text" name="m_phone" placeholder="Enter Manager's Phone Number" required=""><br>Joining date     
            <input class="input100" type="date" name="m_date" placeholder="Enter Join Date" required=""><br>
            <input class="input100" type="text" name="m_post" placeholder="Enter Post" required="">
            <input class="input100" type="text" name="m_area" placeholder="Enter Working Area" required="">
            <input class="input100" type="text" name="free" placeholder="Is he available ?" required="">
            <div class="forgot-top-grids">            
                <div class="clearfix"> 
                </div>
            </div>
            <input type="submit" name="addmanager" value="Add now">                            
        </form>

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

            <li id="menu-comunicacao" ><a href="{{URL::to('/ServiceReq')}}"><i class="fa fa-book nav_icon"></i><span>Service Request</span><span class="fa fa-angle-right" style="float: right"></span></a>
              <ul id="menu-comunicacao-sub" >
                <li id="menu-arquivos" ><a href="{{URL::to('/EditService')}}">Assign Employee</a></li>
                <li id="menu-arquivos" ><a href="{{URL::to('/ServiceDetails')}}">Delete Service Request</a></li>
              </ul>
            </li>

            <li id="menu-comunicacao" ><a href=""><i class="fa fa-book nav_icon"></i><span>Add Employees</span><span class="fa fa-angle-right" style="float: right"></span></a>
              <ul id="menu-academico-sub" >
                <li id="menu-academico-boletim" ><a href="{{URL::to('/ManagerReg')}}">Add Maneger</a></li>
                <li id="menu-academico-avaliacoes" ><a href="{{URL::to('/WorkerReg')}}">Add Worker</a></li>               
              </ul>
            </li>
<!--               <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
 -->            

            
            <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Employee Charts</span><span class="fa fa-angle-right" style="float: right"></span></a>
              <ul id="menu-academico-sub" >
                <li id="menu-academico-boletim" ><a href="{{URL::to('/ManegerDetails')}}">Maneger Details</a></li>
                <li id="menu-academico-avaliacoes" ><a href="{{URL::to('/WorkerDetails')}}">Worker Details</a></li>               
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

