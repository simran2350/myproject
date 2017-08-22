﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MAC Management Information System</title>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('materialize/css/materialize.min.css') }}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ URL::asset('js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ URL::asset('css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ URL::asset('js/Lightweight-Chart/cssCharts.css') }}"> 
	
	<!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{ URL::asset('js/jquery-1.10.2.js') }}"></script>
	
	<!-- Bootstrap Js -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	
	<script src="{{ URL::asset('materialize/js/materialize.min.js') }}"></script>
	
    <!-- Metis Menu Js -->
    <script src="{{ URL::asset('js/jquery.metisMenu.js') }}"></script>
    <!-- Morris Chart Js -->
    <script src="{{ URL::asset('js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ URL::asset('js/morris/morris.js') }}"></script>
	
	
	<script src="{{ URL::asset('js/easypiechart.js') }}"></script>
	<script src="{{ URL::asset('js/easypiechart-data.js')}}"></script>
	
	 <script src="{{ URL::asset('js/Lightweight-Chart/jquery.chart.js')}}"></script>
	
    <!-- Custom Js -->
    <script src="{{ URL::asset('js/custom-scripts.js')}}"></script> 
	
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="/staff"><i class="large material-icons">insert_chart</i> <strong>MAC MIS</strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">

 
<li><a href="{{ route('logout') }}"
       onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
                                            
       <i class="fa fa-sign-out fa-fw"></i> 
	   Logout
	   </a>
	   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
       </form>
</li>
</ul>

   
 
	   <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="/staff"><i class="fa fa-dashboard"></i> Staff Dashboard</a>
                    </li>
					<li>
                        <a class="waves-effect waves-dark" href="/email"><i class="fa fa-dashboard"></i> Email </a>
                    </li>
                    
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Welcome Staff {{ Auth::user()->name }}
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Staff Dashboard</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
            <div id="page-inner">

			
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
						
						</div> 
						 
                    </div>
                    
			
                <!-- /. ROW  --> 
		
			
			 
			 


		
				
				<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="card">
						<div class="card-image">
						 <div ></div>
						</div> 
						<div class="card-action">
						  <b> Student Details </b>
						  <br>
						  <br>
						  <input type="text" name="Enter_country :  " value="Enter_country :  ">
						  <br>
						  <br>
						  <input type="text" name="Enter_year :  " value="Enter_year :  ">
                          <br>
                          <br>
			              
                   
	<ul class="nav navbar-top-links ">
	<li> 
	<a class = "dropdown-button waves-effect waves-dark" href = "" 
	data-activates="dropdown"> 
	Choose Option 
	<i class="material-icons right"> arrow_drop_down 
	</a></li>
	</ul>
				   
	<ul id="dropdown" class="dropdown-content">
    <li>
	<a href="/all">
    <i class="fa fa-user fa-fw"></i> 
	   All Students
	   </a>
	</li>
	
    <li>
	<a href="/withopenjob">
    <i class="fa fa-user fa-fw"></i> 
	   Students with Open job status
	   </a>
	</li>
	
    <li>
	<a href="/sc">
    <i class="fa fa-user fa-fw"></i> 
	   Students from specific country
	   </a>
	</li>
	
    <li>
	<a href="/withjob">
    <i class="fa fa-user fa-fw"></i> 
	   Students with job 
	   </a>
	</li>
	
    <li>
	<a href="/woj">
    <i class="fa fa-user fa-fw"></i> 
	   Students without job
	   </a>
	</li>
	
    <li>
	<a href="/avcgpa">
    <i class="fa fa-user fa-fw"></i> 
	   Students Average CGPA
	   </a>
	</li>
	
    <li>
	<a href="/cjy">
    <i class="fa fa-user fa-fw"></i> 
	   Students with job from a country and particular year
	   </a>
	</li>
	
    <li>
	<a href="/withjobyear">
    <i class="fa fa-user fa-fw"></i> 
	   Students with job and particular year
	   </a>
	</li>
	
    <li>
	<a href="/withoutjobyear">
    <i class="fa fa-user fa-fw"></i> 
	   Students without a job and particular year
	   </a>
	</li>
	
    <li>
	<a href="/employers">
    <i class="fa fa-user fa-fw"></i> 
	   All distinct employers
	   </a>
	</li>
	
	</ul>			   
				   
				   

                    

			  	 


						  </div>
						</div>
		  
					</div>		
					
						
					
				 
			 
				
                <!-- /. ROW  -->

	   
			</div>	
				
				
                
                <!-- /. ROW  -->
			   
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    
                          

</body>

</html>