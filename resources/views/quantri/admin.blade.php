<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin - HOME Shoppe</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/assets-admin/css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('public/assets-admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets-admin/css/zabuto_calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets-admin/js/gritter/css/jquery.gritter.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets-admin/lineicons/style.css') }}">    
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('public/assets-admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets-admin/css/style-responsive.css') }}" rel="stylesheet">
    <script src="{{ asset('public/assets-admin/js/chart-master/Chart.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('public/assets-admin/css/admin-app.css') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="{{ route('homepage') }}" class="logo"><b>HOME SHOPPE</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="{{ route('logout') }}">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="{{ asset('public/assets-admin/img/' .Auth::user()->profile_pic) }}" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">{{ Auth::user()->name }}</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="{{ route('admin.dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-user"></i>
                          <span>User management</span>
                      </a>
                      <ul class="sub">
                      	<li><a href="{{ route('admin.userManagement') }}">
                          <i class="fa fa-gear"></i>
                          <span>Manage</span>
                        </a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cubes"></i>
                          <span>Product management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('admin.addProduct') }}">
                            <i class="fa fa-plus-square "></i>
                            <span>Add</span>
                          </a></li>
                          <li>
                            <a  href="{{ route('admin.productManagement') }}">
                            <i class="fa fa-gear"></i>
                            <span>Manage</span>
                            </a>
                          </li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Brand management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('admin.addBrand') }}">
                              <i class="fa fa-plus-square "></i>
                              <span>Add</span>
                            </a>
                          </li>
                          <li>
                            <a  href="{{ route('admin.brandManagement') }}">
                              <i class="fa fa-gear"></i>
                              <span>Manage</span>
                            </a>
                          </li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-circle-o"></i>
                          <span>Type management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('admin.addType') }}">
                              <i class="fa fa-plus-square "></i>
                              <span>Add</span>
                          </a>
                          </li>
                          <li>
                          <a href="{{ route('admin.typeManagement') }}">
                            <i class="fa fa-gear"></i>
                              <span>Manage</span>
                          </a>
                          </li>
                      </ul>
                  </li>
                  <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>
 -->
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">           
                    <div class="row mt">

                    	@include($page)

                   	</div><!-- /row --> 	 			
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  <div class="col-lg-3 ds">
                    <!-- USERS ONLINE SECTION -->
						<h3>GROUP <b>F</b> MEMBERS</h3>
                      <!-- Loop for Members -->
                      @foreach($users as $user)
                      @if($user->is_admin == 1)
                      <div class="desc">
                        <div class="thumb">
                          <img class="img-circle" src="{{ asset('public/assets-admin/img/' .$user->profile_pic) }}" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                          <p><a href="#">{{ $user->name }}</a><br/>
                             <muted>Available</muted>
                          </p>
                        </div>
                      </div>
                      @endif
                      @endforeach
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 -Credited to Alvarez.is - Project of Group F - EC-Class
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('public/assets-admin/js/jquery.js') }}"></script>
    <script src="{{ asset('public/assets-admin/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('public/assets-admin/js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('public/assets-admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('public/assets-admin/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('public/assets-admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets-admin/js/jquery.sparkline.js') }}"></script>


    <!--common script for all pages-->
    <script src="{{ asset('public/assets-admin/js/common-scripts.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('public/assets-admin/js/gritter/js/jquery.gritter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets-admin/js/gritter-conf.js') }}"></script>

    <!--script for this page-->
    <script src="{{ asset('public/assets-admin/js/sparkline-chart.js') }}"></script>    
	<script src="{{ asset('public/assets-admin/js/zabuto_calendar.js') }}"></script>	
	@if($page == 'partials.admin-dashboard')
    @include('partials.admin-popup')
  @endif
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
    <script type="text/javascript" charset="utf-8" async defer>
    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});
</script>
  </body>
</html>