
<!DOCTYPE HTML>
<html>
<head>
<title>Service Details</title>
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
                        <span class="prfil-img"> </span> 
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
                      <li> <a href="{{URL::to('ClientLogin/')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
<div class="chit-chat-layer1">

     <div class="clearfix"></div>
<!--climate end here-->
</div>


<center>
        <h1>Service Details</h1>
    @php
      $message=Session::get('message');
      if($message){
      echo '<div class="mess">' .$message.'</div>';
    }
    @endphp
      <table border="4" cellspacing="10" cellpadding="20" style="color: black">
        <thead>
            <tr>
                <th>Service ID</th>
                <th>Client Name</th>
                <th>Client Phone</th>
                <th>Description</th>
                <th>Current Floor</th>    
                <th>New Floor</th>
                <th>Pickup Address</th>
                <th>New Address</th>
                <th>Total Cost</th>
                <th>Manager's ID</th>
                <th>Worker's IDs</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>    
           @foreach($Showdata as $v_dat)
              <tr>
                <td style="font-size: 15px">{{$v_dat->s_id}}</td>
                <td style="font-size: 15px">{{$v_dat->s_name}}</td>
                <td style="font-size: 15px">{{$v_dat->s_phone}}</td>
                <td style="font-size: 15px">{{$v_dat->dscp}}</td>
                <td style="font-size: 15px">{{$v_dat->c_floor}}</td>
                <td style="font-size: 15px">{{$v_dat->n_floor}}</td>
                <td style="font-size: 15px">{{$v_dat->c_add}}</td>
                <td style="font-size: 15px">{{$v_dat->n_add}}</td>
                <td style="font-size: 15px">{{$v_dat->cost}}</td>
                <td style="font-size: 15px">{{$v_dat->m_id}}</td>
                <td style="font-size: 15px">{{$v_dat->w_id}}</td>
                <td><a href="{{URL::to('/RemoveService/'.$v_dat->s_id)}}"><button>Cancel Request</button></a></td>
              </tr>
           @endforeach
        </tbody>
</table><br><br><br></br>
</center>

    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
</div>
<!--inner block end here-->
<!--copy rights start here-->
<!-- <div class="copyrights">
   <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>  --> 
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
          <center>
            <li id="menu-comunicacao" ><i class="fa fa-book nav_icon"></i><span>Service Request</span><span class="fa fa-angle-right" style="float: right"></span>
              <ul id="menu-comunicacao-sub" >
                <li id="menu-arquivos" ><a href="{{URL::to('/Service')}}">Add service request</a></li>
                <li id="menu-arquivos" ><a href="{{URL::to('/ClientShow')}}">view Request</a></li>
              </ul>
            </li></center>
<!--  --></ul>

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

