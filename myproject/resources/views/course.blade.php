<!DOCTYPE html>
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
    <script src="{{ URL::asset('js/jquery-1.10.2.js')}}"></script>
	
	<!-- Bootstrap Js -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	
	<script src="{{ URL::asset('materialize/js/materialize.min.js') }}"></script>
	
    <!-- Metis Menu Js -->
    <script src="{{ URL::asset('js/jquery.metisMenu.js')}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{ URL::asset('js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{ URL::asset('js/morris/morris.js')}}"></script>
	
	
	<script src="{{ URL::asset('js/easypiechart.js')}}"></script>
	<script src="{{ URL::asset('js/easypiechart-data.js')}}"></script>
	
	 <script src="{{ URL::asset('js/Lightweight-Chart/jquery.chart.js')}}"></script>
	
    <!-- Custom Js -->
    <script src="{{ URL::asset('js/custom-scripts.js')}}"></script> 
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="/student"><i class="large material-icons">insert_chart</i> <strong>MAC MIS</strong></a>
				
		<div id="sideNav" class="waves-effect waves-dark" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
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
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="/student" class="waves-effect waves-dark"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="/details" class="waves-effect waves-dark"><i class="fa fa-desktop"></i>  Details </a>
                    </li>
					<li>
                        <a href="/course" class="active-menu waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> Course</a>
                    </li>
                     <li>
                        <a href="/internship" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Internship(Project)</a>
                    </li>
                    <li>
                        <a href="/job" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Internship(Job)</a>
                    </li>
                    
                    

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                             Course 
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Course</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
            <div id="page-inner"> 
             
                <div class="row"> 
                    
                      
                    <div class="col-md-12 col-sm-12 col-xs-12">                     
                    <div class="card">
                        <div class="card-action">
                           
							
							<br>
							
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.1207" type="text/javascript"></script>
<script type="text/javascript"> 
JotForm.init(function(){ setTimeout(function() 
{ $('input_6').hint('ex: myname@example.com'); }, 20); /*INIT-END*/
}); JotForm.prepareCalculationsOnTheFly([null,
{"name":"internshipDetails","qid":"1","text":"Internship Details Form","type":"control_head"}
,null,null,null,null,{"name":"contactEmail","qid":"6","text":"Contact E-mail","type":"control_email"},
null,null,null,null,null,null,null,{"name":"company","qid":"14","text":"Company","type":"control_textbox"},
null,null,null,null,null,{"name":"submit20","qid":"20","text":"Submit Application",
"type":"control_button"},null,null,{"name":"address","qid":"23","text":"Address",
"type":"control_address"},null,null,null,{"name":"mobileNumber","qid":"27","text"
:"Mobile Number","type":"control_phone"},null,null,null,null,null,null,null,null,
null,null,null,null,null,null,null,null,null,null,null,
{"name":"contactName","qid":"47","text":"Contact Name","type":"control_fullname"},
{"name":"contactPosition","qid":"48","text":"Contact position","type":"control_textbox"},
{"name":"companyWebsite","qid":"49","text":"Company website","type":"control_textbox"}]);
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.1207" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" 
href="https://cdn.jotfor.ms/css/printForm.css?3.3.1207" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.1207" />
<link type="text/css" rel="stylesheet" 
href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?
themeRevisionID=58c6459d9a11c7136a8b4567"/>
<style type="text/css"> 
.form-label-left{ width:150px !important; } 
.form-line{ padding-top:12px; padding-bottom:12px; } 
.form-label-right{ width:150px !important; } 
.form-all{ width:500px; color:#555 !important; 
font-family:"Lucida Grande", "Lucida Sans Unicode", 
"Lucida Sans", Verdana, sans-serif; font-size:14px; } 
.form-radio-item label, .form-checkbox-item label, 
.form-grading-label, .form-header{ color: #555; } </style> <style type="text/css" id="form-designer-style"> /* Injected CSS Code */
/*PREFERENCES STYLE*/ .form-label.form-label-auto 
{ display: block; float: none; text-align: left; } 
.form-line { margin-top: 12px 36px 12px 36px px;
 margin-bottom: 12px 36px 12px 36px px; } 
 .form-all { width: 500px; } .form-label-left, 
 .form-label-right { width: 150px } .form-all 
 { font-family: Lucida Grande, sans-serif; } 
 .form-all .qq-upload-button, .form-all .form-submit-button, 
 .form-all .form-submit-reset, .form-all .form-submit-print 
 { font-family: Lucida Grande, sans-serif; } .form-all 
 .form-pagebreak-back-container, .form-all .form-pagebreak-next-container 
 { font-family: Lucida Grande, sans-serif; } .form-header-group 
 { font-family: Lucida Grande, sans-serif; } 
 .form-label { font-family: Lucida Grande, sans-serif; } 
 .form-all { font-size: 14px } .form-all .qq-upload-button, 
 .form-all .qq-upload-button, .form-all .form-submit-button, 
 .form-all .form-submit-reset, .form-all .form-submit-print 
 { font-size: 14px } .form-all .form-pagebreak-back-container, 
 .form-all .form-pagebreak-next-container { font-size: 14px } 
 .supernova .form-all, .form-all { background-color: 
 rgb(153, 153, 153); border: 1px solid transparent; } 
 .form-all { color: #555; } .form-header-group .form-header { color: #555; } 
 .form-header-group .form-subHeader { color: #555; } 
 .form-label-top, .form-label-left, .form-label-right, 
 .form-html, .form-checkbox-item label, .form-radio-item label { color: #555; }
 .supernova { background-color: undefined; } .supernova body 
 { background: transparent; } .form-textbox, .form-textarea, 
 .form-radio-other-input, .form-checkbox-other-input, .form-captcha input, 
 .form-spinner input { background-color: undefined; } .supernova 
 { height: 100%; background-repeat: repeat; background-attachment: 
 scroll; background-position: center top; } .supernova 
 { background-image: url("//www.jotform.com/images/brushed.png"); } 
 #stage { background-image: url("//www.jotform.com/images/brushed.png"); }
 .form-all { background-image: url("//www.jotform.com/images/brushed.png")
 ; background-repeat: repeat; background-attachment: scroll; 
 background-position: center top; } 
 /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/ /* Injected CSS Code */
 
 
</style> 


<form action="store"  method="post"> 
  {{ csrf_field() }} 

<div class="form-all"> <ul class="form-section page-section">
 <li id="cid_1" class="form-input-wide" data-type="control_head">
 <div class="form-header-group "> <div class="header-text httal htvam">
 <h1 id="header_1" class="form-header" data-component="header"> 
 Course Details Form </h1> <div id="subHeader_1" class="form-subHeader">
 Fill out the form carefully for courses </div> </div> </div> </li> 
 
 <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_14">
 <label class="form-label form-label-top" id="label_14" for="input_14">
 Term </label> <div id="cid_14" class="form-input-wide jf-required"> 
 <input type="text" id="input_14" name="term" data-type="input-textbox"
 class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" /> 
 </div> </li> 
							
 <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_14">
 <label class="form-label form-label-top" id="label_14" for="input_14">
 Year </label> <div id="cid_14" class="form-input-wide jf-required"> 
 <input type="text" id="input_14" name="year" data-type="input-textbox"
 class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" /> 
 </div> </li> 
<li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_14">
 <label class="form-label form-label-top" id="label_14" for="input_14">
 Course 1 </label> <div id="cid_14" class="form-input-wide jf-required"> 
 <input type="text" id="input_14" name="course1" data-type="input-textbox"
 class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" /> 
 </div> </li> 
<li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_14">
 <label class="form-label form-label-top" id="label_14" for="input_14">
 Course 2 </label> <div id="cid_14" class="form-input-wide jf-required"> 
 <input type="text" id="input_14" name="course2" data-type="input-textbox"
 class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" /> 
 </div> </li> 

 <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_14">
 <label class="form-label form-label-top" id="label_14" for="input_14">
 Average CGPA </label> <div id="cid_14" class="form-input-wide jf-required"> 
 <input type="text" id="input_14" name="average_cgpa" data-type="input-textbox"
 class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" /> 
 </div> </li>
 
 <li class="form-line form-line-column form-col-4" data-type="control_button" 
  id="id_20"> <div id="cid_20" class="form-input-wide"> 
  <div style="text-align:left;" class="form-buttons-wrapper"> 
  <button id="input_20" type="submit" class="form-submit-button" 
  data-component="button"> Upload Details </button> </div> </div> </li>

</form>
<script type="text/javascript">JotForm.ownerView=true;</script>

 </div>
                        <div class="card-content">
                            
                    </div>            
                </div>
                      
                
           </div>
                 <!-- /. ROW  -->
				 
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     
 

</body>

</html>
