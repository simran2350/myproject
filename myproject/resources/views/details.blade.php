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
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>
        <ul class="nav navbar-top-links navbar-right"> 
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i>  <i class="material-icons right">arrow_drop_down</i></a></li>
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
                        <a href="/details" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Details </a>
                    </li>
					<li>
                        <a href="/course" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> Course </a>
                    </li>
                     <li>
                        <a href="/internship" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Internship(Project)</a>
                    </li>
                    <li>
                        <a href="/job" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Internship(Job)</a>
                    </li>
                    
                    

                            

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                           Details
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Details</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
            <div id="page-inner"> 
				 
			
			
                 
				<div class="row">
				<div class="col-md-12">
                          <div class="card">
                        <div class="card-action">
                             
							 <br>
		<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript">
		</script>
         <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.1191" type="text/javascript">
		 </script>
 <script type="text/javascript"> JotForm.init(function(){ setTimeout(function() 
 { $('input_6').hint('ex: myname@example.com'); }, 20); 
 /*INIT-END*/
 }); 
JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"Student Registration Form","type":"control_head"}
,null,
{"name":"gender","qid":"3","text":"Gender","type":"control_dropdown"},
{"name":"studentName","qid":"4","text":"Student Name","type":"control_fullname"},null,
{"name":"studentEmail6","qid":"6","text":"Student E-mail","type":"control_email"},null,null,
null,null,null,null,null,null,null,null,null,null,
{"name":"clearFields","qid":"19","text":"Clear Fields","type":"control_button"},
{"name":"submit20","qid":"20","text":"Submit Application","type":"control_button"},null,null,
{"name":"address","qid":"23","text":"Address","type":"control_address"},
{"name":"birthDate24","qid":"24","text":"Birth Date","type":"control_birthdate"},null,null,
{"name":"mobileNumber","qid":"27","text":"Mobile Number","type":"control_phone"},null,null,
null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
{"name":"additionalComments","qid":"45","text":"Additional Comments","type":"control_textarea"}]);
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.1191" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.1191" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.1191" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=58c6459d9a11c7136a8b4567"/>
<style type="text/css"> 
.form-label-left{ width:150px !important; } 
.form-line{ padding-top:12px; padding-bottom:12px; } 
.form-label-right{ width:150px !important; } 
.form-all{ width:500px; color:#555 !important; font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif; font-size:14px; } 
.form-radio-item label, 
.form-checkbox-item label, 
.form-grading-label, 
.form-header{ color: #555; } 
</style> 
<style type="text/css" id="form-designer-style"> /* Injected CSS Code */
.form-label.form-label-auto { display: block; float: none; text-align: left; width: 100%; }
/*PREFERENCES STYLE*/ 
.form-line { margin-top: 12px 36px 12px 36px px; margin-bottom: 12px 36px 12px 36px px; } 
.form-all { width: 500px; } 
.form-label-left, 
.form-label-right { width: 150px } 
.form-all { font-family: Lucida Grande, sans-serif; } 
.form-all .qq-upload-button, 
.form-all .form-submit-button, 
.form-all .form-submit-reset, 
.form-all .form-submit-print { font-family: Lucida Grande, sans-serif; } 
.form-all .form-pagebreak-back-container, 
.form-all .form-pagebreak-next-container { font-family: Lucida Grande, sans-serif; } 
.form-header-group { font-family: Lucida Grande, sans-serif; } 
.form-label { font-family: Lucida Grande, sans-serif; } 
.form-all { font-size: 14px } 
.form-all .qq-upload-button, 
.form-all .qq-upload-button, 
.form-all .form-submit-button, 
.form-all .form-submit-reset, 
.form-all .form-submit-print { font-size: 14px } 
.form-all .form-pagebreak-back-container, 
.form-all .form-pagebreak-next-container { font-size: 14px } 
.supernova .form-all, 
.form-all { background-color: rgb(153, 153, 153); border: 1px solid transparent; } 
.form-all { color: #555; } 
.form-header-group 
.form-header { color: #555; } 
.form-header-group .form-subHeader { color: #555; } 
.form-label-top, .form-label-left, 
.form-label-right, .form-html, 
.form-checkbox-item label, 
.form-radio-item label { color: #555; } 
.supernova { background-color: undefined; } 
.supernova body { background: transparent; } 
.form-textbox, .form-textarea, .form-radio-other-input, 
.form-checkbox-other-input, .form-captcha input, 
.form-spinner input { background-color: undefined; } 
.supernova { height: 100%; background-repeat: repeat; background-attachment: scroll; 
background-position: center top; } 
.supernova { background-image: url("//www.jotform.com/images/brushed.png"); }
 #stage { background-image: url("//www.jotform.com/images/brushed.png"); } 
 .form-all { background-image: url("//www.jotform.com/images/brushed.png"); 
 background-repeat: repeat; background-attachment: 
 scroll; background-position: center top; } 
 /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/ /* Injected CSS Code */
</style> 

<form action="store" method="post" > 
 {{ csrf_field() }}
 
<div class="form-all"> 
<ul class="form-section page-section"> 
<li id="cid_1" class="form-input-wide" data-type="control_head"> 
<div class="form-header-group "> 
<div class="header-text httal htvam"> 
<h1 id="header_1" class="form-header" data-component="header"> Student Details Form </h1> 
<div id="subHeader_1" class="form-subHeader"> Fill out the form carefully for your details </div> 
</div> 
</div> 
</li> 
<li class="form-line" data-type="control_fullname" id="id_4"> 
<label class="form-label form-label-top form-label-auto" id="label_4" for="first_4"> 
Student Name </label> 
<div id="cid_4" class="form-input-wide jf-required"> 
<div data-wrapper-react="true"> 
<span class="form-sub-label-container" style="vertical-align:top;"> 
<input type="text" id="first_4" name="name" 
class="form-textbox" size="10" value="" data-component="first" /> 
<label class="form-sub-label" for="first_4" id="sublabel_first" style="min-height:13px;">
 First Name </label> 
 </span> 
 <span class="form-sub-label-container" style="vertical-align:top;">
 <input type="text" id="middle_4" name="middle_name" 
 class="form-textbox" size="10" value="" data-component="middle" /> 
 <label class="form-sub-label" for="middle_4" id="sublabel_middle" style="min-height:13px;">
 Middle Name </label> 
 </span> 
 <span class="form-sub-label-container" style="vertical-align:top;">
 <input type="text" id="last_4" name="last_name" class="form-textbox" 
 size="15" value="" data-component="last" />
 <label class="form-sub-label" for="last_4" id="sublabel_last" 
 style="min-height:13px;"> Last Name </label> 
 </span> 
 </div> 
 </div> 
 </li> 
 <li class="form-line form-line-column form-col-1" 
 data-type="control_birthdate" id="id_24"> 
 <label class="form-label form-label-top" id="label_24" for="input_24">
 Birth Date </label> 
 <div id="cid_24" class="form-input-wide jf-required"> 
 <div data-wrapper-react="true"> 
 <span class="form-sub-label-container" style="vertical-align:top;"> 
 <input type="text" id="first_4" name="day" 
 class="form-textbox" size="2" value="" data-component="first" /> 
 <label class="form-sub-label" for="first_4" id="sublabel_first" style="min-height:5px;">
 Day </label>
 
 </span>
 <span class="form-sub-label-container" style="vertical-align:top;"> 
 <input type="text" id="middle_4" name="month" 
 class="form-textbox" size="2" value="" data-component="middle" /> 
 <label class="form-sub-label" for="middle_4" id="sublabel_middle" style="min-height:5px;">
 Month </label> 
 </span>
<span class="form-sub-label-container" style="vertical-align:top;"> 
 <input type="text" id="last_4" name="year" 
 class="form-textbox" size="4" value="" data-component="last" /> 
 <label class="form-sub-label" for="last_4" id="sublabel_last" style="min-height:5px;">
 Year </label> 
 </span> 
  
 <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_3"> 
 <label class="form-label form-label-top" id="label_3" for="input_3">
 Gender </label> 
 <div id="cid_3" class="form-input-wide jf-required"> 
 <span class="form-sub-label-container" style="vertical-align:top;"> 
 <input type="text" id="last_4" name="gender" 
 class="form-textbox" size="6" value="" data-component="last" /> 
 <label class="form-sub-label" for="last_4" id="sublabel_last" style="min-height:5px;">
 </li> 
 
 <li class="form-line" data-type="control_address" id="id_23"> 
 <label class="form-label form-label-top form-label-auto" 
 id="label_23" for="input_23undefined"> 
 Address </label> 
 <div id="cid_23" class="form-input-wide jf-required"> 
 <table summary="" class="form-address-table" cellpadding="0" 
 cellspacing="0"> <tbody> <tr> <td colspan="2"> 
 <span class="form-sub-label-container" style="vertical-align:top;">
 <input type="text" id="input_23_addr_line1" 
 name="street_address" class="form-textbox form-address-line" 
 value="" data-component="address_line_1" /> 
 <label class="form-sub-label" for="input_23_addr_line1" 
 id="sublabel_23_addr_line1" style="min-height:13px;"> 
 Street Address </label> </span> </td> </tr> <tr> 
 <td colspan="2"> <span class="form-sub-label-container" 
 style="vertical-align:top;"> 
 <input type="text" id="input_23_addr_line2" name="street_address_2" 
 class="form-textbox form-address-line" size="46" value="" data-component="address_line_2" /> 
 <label class="form-sub-label" for="input_23_addr_line2" 
 id="sublabel_23_addr_line2" style="min-height:13px;"> 
 Street Address Line 2 </label> </span> </td> </tr> <tr> 
 <td width="50%"> <span class="form-sub-label-container" style="vertical-align:top;">
 <input type="text" id="input_23_city" name="city" 
 class="form-textbox form-address-city" size="21" value="" data-component="city" /> 
 <label class="form-sub-label" for="input_23_city" id="sublabel_23_city" 
 style="min-height:13px;"> 
 City </label> </span> </td> <td> 
 <span class="form-sub-label-container" style="vertical-align:top;"> 
 <input type="text" id="input_23_state" name="state_province" 
 class="form-textbox form-address-state" size="22" value="" data-component="state" />
 <label class="form-sub-label" for="input_23_state" id="sublabel_23_state" s
 tyle="min-height:13px;"> State / Province </label> 
 </span> </td> </tr> <tr> <td width="50%"> 
 <span class="form-sub-label-container" style="vertical-align:top;"> 
 <input type="text" id="input_23_postal" name="postal_zip_code" 
 class="form-textbox form-address-postal" size="10" value="" data-component="zip" /> 
 <label class="form-sub-label" for="input_23_postal" id="sublabel_23_postal" 
 style="min-height:13px;"> Postal / Zip Code </label> 
 </span> </td> <td> 
 <span class="form-sub-label-container" style="vertical-align:top;"> 
 <input type="text" id="input_23_country" name="country" 
 class="form-textbox form-address-country" size="15" value="" data-component="zip" /> 
 <label class="form-sub-label" for="input_23_country" id="sublabel_23_country" 
 style="min-height:13px;"> Country </label>
 </span> </td> </tr> </tbody> </table> </div> 
 </li> 
 <li class="form-line form-line-column form-col-1" data-type="control_email" id="id_6"> 
 <label class="form-label form-label-top" id="label_6" for="input_6"> 
 Student E-mail </label> <div id="cid_6" class="form-input-wide jf-required"> 
 <input type="email" id="input_6" name="email" class="form-textbox validate[Email]" 
 size="30" value="" placeholder="ex: myname@example.com" data-component="email" /> </div> </li> 
 
 <li class="form-line form-line-column form-col-2" data-type="control_phone" id="id_27"> 
 <label class="form-label form-label-top" id="label_27" for="input_27_area">
 Mobile Number </label> <div id="cid_27" class="form-input-wide jf-required"> 
 <div data-wrapper-react="true"> <span class="form-sub-label-container" 
 style="vertical-align:top;"> 
 <input type="tel" id="input_27_area" name="area_code" 
 class="form-textbox" size="3" value="" data-component="areaCode" /> 
 <span class="phone-separate"> - </span> <label class="form-sub-label" 
 for="input_27_area" id="sublabel_area" style="min-height:13px;"> Area Code </label> </span>
 <span class="form-sub-label-container" style="vertical-align:top;"> 
 <input type="tel" id="input_27_phone" name="phone_number" 
 class="form-textbox" size="8" value="" data-component="phone" /> 
 <label class="form-sub-label" for="input_27_phone" id="sublabel_phone" style="min-height:13px;">
 Phone Number </label> </span> </div> </div> </li> <li class="form-line" 
 data-type="control_textarea" id="id_45"> 
  </div> </li> 
  <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_3"> 
 <label class="form-label form-label-top" id="label_3" for="input_3">
 Status </label> 
 <div id="cid_3" class="form-input-wide jf-required"> 
 <span class="form-sub-label-container" style="vertical-align:top;"> 
 <input type="text" id="last_4" name="status" 
 class="form-textbox" size="6" value="" data-component="last" /> 
 <label class="form-sub-label" for="last_4" id="sublabel_last" style="min-height:5px;">
 </li>
 
 <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_3"> 
 <label class="form-label form-label-top" id="label_3" for="input_3">
 Curr_past </label> 
 <div id="cid_3" class="form-input-wide jf-required"> 
 <span class="form-sub-label-container" style="vertical-align:top;"> 
 <input type="text" id="last_4" name="curr_past" 
 class="form-textbox" size="6" value="" data-component="last" /> 
 <label class="form-sub-label" for="last_4" id="sublabel_last" style="min-height:5px;">
 </li>
 

 <li class="form-line form-line-column form-col-1" data-type="control_button"
 id="id_20"> <div id="cid_20" class="form-input-wide"> 
 <div style="text-align:left;" class="form-buttons-wrapper"> 
 <button id="input_20" type="submit" class="form-submit-button" 
 data-component="button"> Upload Details </button> </div> </div> </li> 
 
 
</form>

<script type="text/javascript">JotForm.ownerView=true;
</script>
                        </div>
                        
          </div>
				
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     
 

</body>

</html>
