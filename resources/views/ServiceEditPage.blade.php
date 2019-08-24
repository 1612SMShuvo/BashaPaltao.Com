
<!DOCTYPE HTML>
<html>
<head>
<title>Edit Service info</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="{{asset('js/jquery-2.1.1.min.js')}}"></script> 
<!--icons-css-->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
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
                      <li> <a href="{{URL::to('/AdminLogin')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
   <div class="market-updates">
      <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-1">
          <div class="col-md-8 market-update-left">
            <h3>83</h3>
            <h4>Registered User</h4>
            <p>Other hand, we denounce</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-file-text-o"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-2">
         <div class="col-md-8 market-update-left">
          <h3>135</h3>
          <h4>Daily Visitors</h4>
          <p>Other hand, we denounce</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-eye"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-3">
          <div class="col-md-8 market-update-left">
            <h3>23</h3>
            <h4>New Messages</h4>
            <p>Other hand, we denounce</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-envelope-o"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
       <div class="clearfix"> </div>
    </div>

<!--mainpage chit-chating-->

<!--climate end here-->
</div>
<div class="signup-page-main">
     <div class="signup-main">    
       <div class="signup-head">

      </div>
      <div class="signup-block">

<center>
        <h1>Edit Service info</h1>

        <form action="{{URL::to('/ServiceUpdate/'.$Showdata->s_id)}}" method="POST">
        {{csrf_field()}}
               <input class="input100" type="text"  value="{{$Showdata->s_id}}">
               <input class="input100" type="text"  value="{{$Showdata->s_name}}">
               <input class="input100" type="text"  value="{{$Showdata->s_phone}}">
               <input class="input100" type="text"  value="{{$Showdata->dscp}}">
               <input class="input100" type="text"  value="{{$Showdata->c_floor}}">
               <input class="input100" type="text"  value="{{$Showdata->n_floor}}">
               <input class="input100" type="text"  value="{{$Showdata->c_add}}">
               <input class="input100" type="text"  value="{{$Showdata->n_add}}">
               
               <input class="input100" type="text" name="cost" value="{{$Showdata->cost}}">
               <input class="input100" type="text" name="m_id" value="{{$Showdata->m_id}}">
               <input class="input100" type="text" name="w_id" value="{{$Showdata->w_id}}">
            
            <input type="submit" name="addinfo In" value="Add Info">
            <a href="{{URL::to('/EditService')}}"><input type="button" name="" value="Cancel"></a>

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

            <li id="menu-comunicacao" ><a href="{{URL::to('/ServiceReq')}}"><i class="fa fa-book nav_icon"></i><span>Service Request</span><span class="fa fa-angle-right" style="float: right"></span></a>
              <ul id="menu-comunicacao-sub" >
                <li id="menu-arquivos" ><a href="{{URL::to('/EditService')}}">Assign Employee</a></li>
                <li id="menu-arquivos" ><a href="{{URL::to('/ServiceDetails')}}">Delete Service Request</a></li>
              </ul>
            </li>

            <li id="menu-comunicacao" ><a href="{{URL::to('/ServiceReq')}}"><i class="fa fa-book nav_icon"></i><span>Add Employees</span><span class="fa fa-angle-right" style="float: right"></span></a>
              <ul id="menu-comunicacao-sub" >
                <li id="menu-arquivos" ><a href="{{URL::to('/ManagerReg')}}">Add Manager</a></li>
                <li id="menu-arquivos" ><a href="{{URL::to('/WorkerReg')}}">Add Worker</a></li>
              </ul>
            </li>
<!--               <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
 -->            

            
            <li><a href=""><i class="fa fa-bar-chart"></i><span>Employee Charts</span><span class="fa fa-angle-right" style="float: right"></span></a>
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
    <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <!--//scrolling js-->
<script src="{{asset('js/bootstrap.js')}}"> </script>
<!-- mother grid end here-->
</body>
</html>                     

