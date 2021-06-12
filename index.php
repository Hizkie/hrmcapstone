<?php
  
$servername = "us-cdbr-east-04.cleardb.com";
$username = "b91b0e97d3fc91";
$password = "272ee3c6";
$dbname = "heroku_1cbb536cadb09c1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sno, DepartmentName, Designations FROM department";
$result = $conn->query($sql);

?>
<html>
	jj
    <head>
                <title> &lsaquo; WPHRM</title>
        <link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="WPHRM &raquo; Feed" href="https://wphrm.com/demo/feed/" />
<link rel="alternate" type="application/rss+xml" title="WPHRM &raquo; Comments Feed" href="https://wphrm.com/demo/comments/feed/" />
		
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wphrm-font-awesome-css-css'  href='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wphrm-bootstrap-switch-css-css'  href='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/css/bootstrap-switch.css' type='text/css' media='all' />
<link rel='stylesheet' id='wphrm-bootstrap-min-css-css'  href='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wphrm-datepicker3-css-css'  href='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/css/datepicker3.css' type='text/css' media='all' />
<link rel='stylesheet' id='wphrm-css-css'  href='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/css/wphrm.css' type='text/css' media='all' />
<link rel='stylesheet' id='wphrm-fullcalendar-css-css'  href='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/css/fullcalendar.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wphrm-front-dashboard-custom-grid-css-css'  href='https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/css/wphrm-front-dashboard-custom-grid.css' type='text/css' media='all' />
<link rel='stylesheet' id='wphrm-front-dashboard-css-css'  href='https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/css/wphrm-front-dashboard.css' type='text/css' media='all' />
<script type='text/javascript' src='https://wphrm.com/demo/wp-includes/js/jquery/jquery.js' id='jquery-core-js'></script>

</script>
<script type='text/javascript' src='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/js/bootstrap-datepicker.js' id='wphrm-bootstrap-datepicker-js-js'></script>
<script type='text/javascript' src='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/js/jquery.validate.min.js' id='wphrm-jquery-validate-js-js'></script>

<script type='text/javascript' src='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/js/bootstrap.min.js' id='wphrm-bootstrap-min-js-js'></script>
<script type='text/javascript' id='wphrm-jquery-dataTables-min-js-js-extra'>
/* <![CDATA[ */
var WPHRMJS = {"sSearch":"Search:","sSortAscending":": activate to sort column ascending","sSortDescending":": activate to sort column descending","sFirst":"First","sLast":"Last","sNext":"Next:","sPrevious":"Previous","sEmptyTable":"No data available in table","sInfo":"Showing ","of":"of","to":"to","entries":"entries","sInfoEmpty":"Showing 0 to 0 of 0 entries","totalentries":"total entries","filteredfrom":"filtered from","sLoadingRecords":"Loading...","sProcessing":"Processing...","sZeroRecords":"No matching records found"};
/* ]]> */
</script>
<script type='text/javascript' src='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/js/jquery.dataTables.min.js' id='wphrm-jquery-dataTables-min-js-js'></script>
<script type='text/javascript' src='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/js/bootstrap-switch.js' id='wphrm-bootstrap-switch-js-js'></script>

<script type='text/javascript' id='wphrm-custom-js-js-extra'>
/* <![CDATA[ */
var WPHRMCustomJS = {"customlebal":"Custom Label","customvalue":"Custom Value","ajaxurl":"https:\/\/wphrm.com\/demo\/wp-admin\/admin-ajax.php","records":"Records:","Deletemsg":"Are you sure you want to delete?","occasion":"*Must enter the Occasion","designationName":"Designation Name","departmentName":"Department Name","bankfieldlabel":"Bank Field Label","personalfieldlabel":"Personal Field Label","fileError":"Please select a database xml file.","otherfieldlabel":"Other Field Label","documentfieldlabel":"Document Field Label","salaryfieldlabel":"Salary Field Label","earninglabel":"Earning Label","deductionlabel":"Deduction Label","sortAscending":": activate to sort column ascending","sortDescending":": activate to sort column descending","emptyTable":"No data available","info":"Showing _START_ to _END_ of _TOTAL_ entries","infoEmpty":"No entries found","infoFiltered":"filtered1 from _MAX_ total entries","lengthMenu":"Show _MENU_ entries","search":"Search:","zeroRecords":"No matching records found","Only":"Only","fileType":"filetypes are allowed.","resetSlip":"Salary Slip Details Successfully Reset.","Date":"Date"};
/* ]]> */
</script>
<script type='text/javascript' src='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/js/wphrm.js' id='wphrm-custom-js-js'></script>

<script type='text/javascript' src='https://wphrm.com/demo/wp-content/plugins/wphrm/assets/js/attendance_calendar.js' id='wphrm-attendance-calenader-js-js'></script>


<link rel="https://api.w.org/" href="https://wphrm.com/demo/wp-json/" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wphrm.com/demo/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://wphrm.com/demo/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.5.5" />
<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><style type="text/css" media="print">#wpadminbar { display:none; }</style>
	<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
	<link rel="icon" href="https://wphrm.com/demo/wp-content/uploads/favicon.png" sizes="32x32" />
<link rel="icon" href="https://wphrm.com/demo/wp-content/uploads/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://wphrm.com/demo/wp-content/uploads/favicon.png" />
<meta name="msapplication-TileImage" content="https://wphrm.com/demo/wp-content/uploads/favicon.png" />
<style type="text/css">
body{
  font-family: Hind, sans-serif;
}
.sow-headline,h1 a,h1,h2 a,h2,h3 a,h3,h4 a,h4,h5 a,h5,h6 a,h6,p.title,.button-base a,
.footer-box .widget-title {
 font-family: Montserrat, sans-serif;
}
.sow-headline,h1 a,h1,h2 a,h2,h3 a,h3,h4 a,h4,h5 a,h5,h6 a,h6,p.title,.button-base a,
.blog-content .title-data a,.title-data a.blogTitle,.main-sidebar h5 {
  color: #282828}
#cssmenu {
  font-family: Montserrat, sans-serif;
}
h1, .h1{
  font-size: 42px;
}
h2,.h2{
  font-size: 36px;
}
h3,.h3{
  font-size: 30px;
}
h4,.h4,.title-data a h1,.title-data a.blogTitle{
  font-size: 24px;
}
h5,.h5{
  font-size: 20px;
}
h6,.h6{
  font-size: 16px;
}
p, span, li, a,.package-header h4 span,.main-sidebar ul li a{
  font-size: 14px;
}
#cssmenu ul li a{
  font-size: 14px;
}
body{
  background: #ffffff;
}
body, p, time,ul, li{
  color:#424242;
}
/* Preloader */
        
.preloader-block .preloader-custom-gif, .preloader-block .preloader-gif{  background: url(https://wphrm.com/demo/wp-content/uploads/oval.svg); background-repeat: no-repeat; }
/* end Preloader */
/*WPDigiPro Color System*/
.site-title,
.site-description,
#cssmenu > ul > li > a,
#cssmenu ul ul li a,
.themesnav #cssmenu>ul>li.current_page_item>a:after,.themesnav #cssmenu>ul>li>a:after{
  color: #ffffff;
}
#cssmenu #menu-button.menu-opened::after,
#cssmenu #menu-button.menu-opened::before,
#cssmenu #menu-button::before,
#cssmenu #menu-button::after{
  border-color: #ffffff;
}
#cssmenu > ul > li:hover > a, #cssmenu > ul > li:hover > a, #cssmenu > ul > li.active > a, #cssmenu ul ul li:hover > a, #cssmenu ul ul li a:hover,
.themesnav #cssmenu>ul>li.current_page_item:hover>a:after,.themesnav #cssmenu>ul>li:hover>a:after {
  color: #ffffff;
}
.themesnav #cssmenu.style1>ul>li.current_page_item>a:before,
.themesnav #cssmenu.style1>ul>li>a:before{
  border-color: #ffffff;
}
.fixed-header #cssmenu.style1>ul>li.current_page_item>a:before, .fixed-header #cssmenu.style1>ul>li>a:before,
.headerChange #cssmenu.style1>ul>li.current_page_item>a:before, .headerChange #cssmenu.style1>ul>li>a:before{
  border-color: #ffffff;
}
.themesnav #cssmenu.style2 > ul > li:hover > a:before,
.themesnav #cssmenu.style3 > ul > li:hover > a:before{
  background: #ffffff;
}
.fixed-header #cssmenu > ul > li:hover > a,
.fixed-header #cssmenu > ul > li:hover > a,
.fixed-header #cssmenu > ul > li.active > a,
.fixed-header #cssmenu ul ul li:hover > a,
.fixed-header #cssmenu ul ul li a:hover{
  color: #ffffff;
}
.fixed-header #cssmenu.style1>ul>li.current_page_item:hover>a:after,.fixed-header #cssmenu.style1>ul>li:hover>a:after{
  border-color: #ffffff;
}
.headerChange #cssmenu.style3 > ul > li:hover > a:before,
.fixed-header #cssmenu.style3 > ul > li:hover > a:before
/*.fixed-header #cssmenu.style3 > ul > li > a:before,
.fixed-header #cssmenu.style4 > ul > li > a:hover*/{
  background: #ffffff;
}
.fixed-header #cssmenu #menu-button.menu-opened::after,
.fixed-header #cssmenu #menu-button.menu-opened::before,
.fixed-header #cssmenu #menu-button::before,
.fixed-header #cssmenu #menu-button::after,
.fixed-header #cssmenu.style2 > ul > li:hover > a:before{
  border-color: #ffffff;
}
a:hover,a:hover h3,.blog-content a.btn-light:hover,.title-data a.blogTitle:hover,.title-data a:hover h1,.page-numbers.current{
  color: #0e76bc;
}
.comment .comment-reply-link, .comment-reply-title small a,.button.openModal,.blog-content a.btn-light:hover,
.blog-style-two .page-numbers.current, .blog-style-two .page-numbers:hover {
  color: #0e76bc;
  border-color: #0e76bc;
}
.comment .comment-reply-link:hover, .comment-reply-title small a:hover,.button.openModal:hover{
  background: #0e76bc;
}
a.readMore:hover{
  color: #0e76bc;
  border-color: #0e76bc;
}
#cssmenu .submenu-button::after,
#cssmenu .submenu-button::before {
  background-color: #ffffff;
}
.themesnav{
  background-color: transparent;
}
.themesnav #cssmenu ul ul li a{
  background: #ffffff;
}
.header-logo .custom-logo, .header-logo .logo-dark,
.themesnav.headerChange .logo-light{
  max-height: 45px}
.home-fixed-class {
  background: ;
}
.fixed-header{
  background: ;
}
.fixed-header #cssmenu ul ul li a{
  background: ;
}
.navbar-fixed-top.fixed-header{
  background-color: #ffffff;
}
.fixed-header .site-title,.fixed-header .site-description,.fixed-header #cssmenu > ul > li > a,.fixed-header #cssmenu ul ul li a,
.fixed-header #cssmenu>ul>li.current_page_item>a:after,.fixed-header #cssmenu>ul>li>a:after{
  color: #000;
}
.page-numbers.current,.leave_form input:focus, .leave_form input:hover, .leave_form textarea:focus, .leave_form textarea:hover,.comment-form input:focus, .comment-form textarea:focus,
.search-field:hover:focus,.page-numbers:hover,.btn-default:focus, .btn-default:hover, .button.blog_read:focus, .button.blog_read:hover{
  border-color: #0e76bc}
.footer-box1{
  background: #f7f7f7;
}
.footer-box1 div,.footer-box1 .widget-title,.footer-box1 p,.footer-box1 div,.footer-box1 h1,.footer-box1 h2,.footer-box1 h3,.footer-box1 h4,.footer-box1 h5,.footer-box1 h6 {
  color: #2c3e55 !important;
}
.footer-box1 .footer-widget ul li a,.footer-widget .tagcloud a,.footer-box1 .footer-widget a.social_icons{
  color:#2c3e55;
}
.footer-box1 .footer-widget ul li a:hover,.footer-box1 .footer-widget a.social_icons:hover{
  color:#0e76bc;
}
.footer-box1 .tagcloud > a:hover{
  background:;
}
.under-footer{
  background:;
}
.themesnav.headerChange,.themesnav.headerChange #cssmenu ul ul li a{
  background: #ffffff;
}
.themesnav.headerChange #cssmenu #menu-button::before,
.themesnav.headerChange #cssmenu ul ul li a,
.themesnav.headerChange #cssmenu #menu-button::after{
  border-color: #000000;
}
.themesnav.headerChange #cssmenu ul ul li a,
.themesnav.headerChange #cssmenu > ul > li > a,.themesnav.headerChange #cssmenu ul ul li a,
.themesnav.headerChange #cssmenu>ul>li.current_page_item>a:after,.themesnav.headerChange #cssmenu>ul>li>a:after{
  color: #000000;
}
.themesnav.headerChange #cssmenu ul ul li:hover a,
.themesnav.headerChange #cssmenu > ul > li:hover > a,.themesnav.headerChange #cssmenu ul ul li:hover a,
.fixed-header #cssmenu>ul>li.current_page_item:hover>a:after,.fixed-header #cssmenu>ul>li:hover>a:after,
.themesnav.headerChange #cssmenu>ul>li.current_page_item:hover>a:after,.themesnav.headerChange #cssmenu>ul>li:hover>a:after{
  color: #000000;
}
.themesnav.headerChange #cssmenu ul ul li a{
  border-color: #00000;
}
.footer-wrap{
  background: #e1e1e1;
}
.footer-box{
  background:#f7f7f7;
}
.footer-box div,.footer-box .widget-title,.footer-box p,.footer-box div,.footer-box h1,.footer-box h2,.footer-box h3,.footer-box h4,.footer-box h5,.footer-box h6,
.footer-box .footer-widget ul li,.footer-box .calendar_wrap caption {
  color: #000000 !important;
}
.footer-box .footer-widget ul li a,.footer-widget .tagcloud a,.footer-box a,.footer-box td a,
.footer-box .widget-title a{
  color:#000000;
}
.footer-box a:hover,
.footer-box .widget-title a:hover{
  color:#0e76bc;
}
.footer-box .footer-widget ul li a:hover, .footer-widget .tagcloud a:hover{
  color:#0e76bc;
}
.footer-box .tagcloud>a{
  border-color: #0e76bc;
}
.footer-box .tagcloud > a:hover{
  background:#0e76bc;
  color :#0e76bc;
}
.footer-wrap .copyright p,.footer-wrap, .footer-wrap p{
  color: #000;
}
.footer-wrap a,.footer-wrap.style2 .footer-nav ul li a{
  color: #000;
}
.footer-wrap .copyright a:hover,.footer-wrap a:hover,.footer-wrap.style2 .footer-nav ul li a:hover,.footer-wrap.style2 .copyright a:hover,.footer-wrap.style1 .copyright a:hover{
  color: #5164cf;
}
.portfolio-item:hover .hover-effect{
  background: rgba(44,62,85,0.7)}
.back-to-top a,
.btn-default:focus, .btn-default:hover, .button.blog_read:focus, .button.blog_read:hover,
.main-sidebar .tagcloud>a:hover{
  background: }
.sow-contact-form .sow-submit-styled input[type="submit"].sow-submit,
input[type="submit"],.contact-me.darkForm input[type=submit],
.contact-me.lightForm input[type=submit], button[type=submit],
input[type=submit],#commentform input[type=submit], .comment .comment-reply-link {
  width: ;
  font-size: ;
  padding-left: ;
  padding-top: ;
  padding-right: ;
  padding-bottom: ;
  border-width: ;
  border-style: solid;
  border-color: #0e76bc;
  border-radius: ;
  color: #0e76bc;
  text-shadow: 0 0 0 rgba(0,0,0,0);
  max-width: 100%;
  text-align: center;
  line-height: 1;
}
.sow-contact-form .sow-submit-styled input[type="submit"]:hover.sow-submit, input[type="submit"]:hover,.contact-me.darkForm input[type=submit]:hover, .contact-me.lightForm input[type=submit]:hover, button[type=submit]:hover, input[type=submit]:hover,#commentform input[type=submit]:hover{
  background: #0e76bc}
@media only screen and (max-width:1024px) {
    #cssmenu ul{
    background: rgb(255,255,255);
  }
  .site-title, .site-description, #cssmenu > ul > li > a, #cssmenu ul ul li a{
    color: #000  }
  #cssmenu > ul > li:hover > a, #cssmenu > ul > li:hover > a, #cssmenu > ul > li.active > a, #cssmenu ul ul li:hover > a, #cssmenu ul ul li a:hover {
    color: #ffffff;
  }
  .themesnav #cssmenu ul ul li a,.fixed-header #cssmenu ul ul li a{
    background: transparent;
  }
  .themesnav #cssmenu.style1>ul>li.current_page_item>a:before, .themesnav #cssmenu.style1>ul>li>a:before{
    border-color: transparent;
  }
}
.heading-image {
  background: #0e76bc;
}
.button-base a {
    padding: 15px;
    border: 2px solid #fff;
    color: #fff;
    width: 100%;
    border-radius: 4px;
}
.button-base a:hover {
    border: 2px solid transparent;
    color: #000;
    background-color: #fff
}

.header-logo {
    display: none;
}</style>
                <META NAME="ROBOTS" CONTENT="FOLLOW, INDEX">
    </head>
    
            <style> ul.nav-init li{ display: none; }  ul.nav-init li.logout{  display: block; }  html { margin-top:0px !important; } .menuWrapper{background: url('http://wphrm.com/demo/wp-content/uploads/abstract-logo-2.png');    background-size: cover;}</style>
    <div class="homeWrapper">
        <div class="sideMenu">
            <div class="menuWrapper"> 
                <div class="logo mainLogo">
                    <a href="https://wphrm.com/demo/dashboard">
                        <img class="img-responsive" src="capstone.ico">
                    </a>
                </div>

                  <ul class="nav nav-init" style="display: none;">
                        <li class="dashboard ">
                            <a href="https://wphrm.com/demo/dashboard">
                                <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-dashboard.png" class="img-responsive">
                                <p>Dashboard</p>
                            </a>
                        </li>                            <li class="department active">
                                <a href="https://wphrm.com/demo/department">
                                    <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-department.png" class="img-responsive">
                                    <p>Department</p>
                                </a>
                            </li>
                                                        <li class="employees ">
                                <a href="employee_list.html">
                                    <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-account.png" class="img-responsive">
                                    <p>Employees</p>
                                </a>
                            </li>
                                                    <li class="holidays ">
                                <a href="https://wphrm.com/demo/holidays">
                                    <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-holidays.png" class="img-responsive">
                                    <p>Holidays</p>
                                </a>
                            </li>
                                                    <li class="attendances ">
                                <a href="https://wphrm.com/demo/attendances">
                                    <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-attendance.png" class="img-responsive">
                                    <p>Attendance</p>
                                </a>
                            </li>
                                                    <li class="leave ">
                                <a href="https://wphrm.com/demo/leave">
                                    <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-leave.png" class="img-responsive">
                                    <p>Leave</p>
                                </a>
                            </li>
                                                        <li class="salary ">
                                    <a href="https://wphrm.com/demo/salary-list">
                                        <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-salary.png" class="img-responsive">
                                        <p>Salary</p>
                                    </a>
                                </li> 
                                                            <li class="notices ">
                                <a href="https://wphrm.com/demo/notices">
                                    <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-notices.png" class="img-responsive">
                                    <p>Notices</p>
                                </a>
                            </li>
                            <li class="policies ">
                                <a href="https://wphrm.com/demo/policies">
                                    <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-department.png" class="img-responsive">
                                    <p>Policies</p>
                                </a>
                            </li>
                                                    <li class="financials ">
                                <a href="https://wphrm.com/demo/financials-report">
                                    <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-financemanagement.png" class="img-responsive">
                                    <p>Finance Management</p>
                                </a>
                            </li> 
                                                <li class="notification ">
                            <a href="https://wphrm.com/demo/notification">
                                <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-notification.png" class="img-responsive">
                                <p>Notification</p>
                            </a>
                        </li>
                                                    <li class="settings ">
                                <a href="https://wphrm.com/demo/settings">
                                    <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-settings.png" class="img-responsive">
                                    <p>Settings</p>
                                </a>
                            </li> 
                                                <li class="logout"><a href="https://wphrm.com/demo/wp-login.php?action=logout&amp;redirect_to=https%3A%2F%2Fwphrm.com%2Fdemo&amp;_wpnonce=284af88c4c">
                                <img src="https://wphrm.com/demo/wp-content/plugins/wphrm-frontend/assets/images/wphrm-logout.png" class="img-responsive">
                                <p>Log out</p>
                            </a>
                        </li>                
                    </ul>
                    
            </div>

        </div>
        <script>
            jQuery(document).ready(function () {
                var data = '["dashboard","department","employees","attendances","holidays","salary","leave","notices","notification","policies"]';
               
                 var news = JSON.parse(data);
                jQuery.each(news, function (i,val) {
                    jQuery("."+val).show();
                });
                 jQuery(".nav-init").show();
                
            });
        </script>
        <div class="mainBody">
<!-- BEGIN PAGE HEADER-->
<div class="preloader">
<span class="preloader-custom-gif"></span>
</div>
<div id="add_static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">



    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                <h4 class="modal-title"><strong><i class="fa fa-plus"></i>Add Department</strong></h4>
            </div>
            <div class="modal-body">
                <div class="portlet-body form">
                    <div class="alert alert-success display-hide" id="wphrmDepartmentInfo_success"><i class='fa fa-check-square' aria-hidden='true'></i> Department has been successfully added.                        <button class="close" data-close="alert"></button>
                    </div>
                    <div class="alert alert-danger display-hide" id="wphrmDepartmentInfo_error">
                        <button class="close" data-close="alert"></button>
                    </div>
                    <!-- BEGIN FORM-->
                    <form method="POST"  action="insert_department.php" accept-charset="UTF-8" class="form-horizontal department_frm" id="edit_form">
                        <div class="form-body">
                            <div class="form-group">
                                <div class="col-md-9 col-xs-12">
                                    <input class="form-control form-control-inline " name="departmentName" id="department_name" type="text" value="" placeholder="Department Name" />
                                </div>
								<div class="col-md-2 col-xs-12">
									  <button type="button" id="plusButtonDepartment" class="btn btn-sm green form-control-inline margin-bottom-zero wphrm-department-popup-add-more">
										<i class="fa fa-plus"></i>Add More</button>
                                  </div>
                            </div>
                        </div>
                        <div id="insertBeforeDepartment"></div>
                            
                        <div class="form-group margin-bottom-zero">
                                <div class="col-md-10"> 
                                <input type="submit" value="submit">         
                                <button type="submit"  class="btn blue margin-right-fifteen"><i class="fa fa-plus"></i>Add Department</button>
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="btn default"><i class="fa fa-times"></i>Cancel</button>
                             </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>
<div id="edit_static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                <h4 class="modal-title"><strong><i class="fa fa-edit"></i>Rename Department</strong></h4>
            </div>
            <div class="modal-body">
                <div class="portlet-body form">
                    <div class="alert alert-success display-hide" id="wphrm_Edepartment_info_success"><i class='fa fa-check-square' aria-hidden='true'></i> Department has been successfully updated.                        <button class="close" data-close="alert"></button>
                    </div>
                    <div class="alert alert-danger display-hide" id="wphrm_Edepartment_info_error">
                        <button class="close" data-close="alert"></button>
                    </div>
                    <!-- BEGIN FORM-->
                    <form method="POST"  accept-charset="UTF-8" class="form-horizontal wphrm_edit_department" id="edit_form">
                        <div class="form-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input class="form-control form-control-inline " name="editdepartment_name" id="editdepartment_name" type="text" value="" placeholder="Department Name" />
                                </div>
                            </div>
                        </div>
                          <div class="form-group">
                                <div class="col-md-12">                                    
                                    <button type="submit"  class="btn blue"><i class="fa fa-edit"></i>RenameDepartment</button>
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="btn default"><i class="fa fa-times"></i>Cancel</button>
                              </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>


<div id="deleteModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="alert alert-success display-hide" id="WPHRMCustomDelete_success"><i class='fa fa-check-square' aria-hidden='true'></i> Department has been successfully updated.                <button class="close" data-close="alert"></button>
            </div>
            <div class="alert alert-danger display-hide" id="WPHRMCustomDelete_error">
                <button class="close" data-close="alert"></button>
            </div>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body" id="info"><p>Are you sure you want to delete?</p></div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn red" id="delete"><i class="fa fa-trash"></i>Delete</button>
                <button type="button" data-dismiss="modal" aria-hidden="true" class="btn default"><i class="fa fa-times"></i>Cancel</button>
            </div>
        </div>
    </div>
</div>

 <form method="POST"  action="insert_department.php" accept-charset="UTF-8" class="form-horizontal department_frm" id="edit_form">
                        <div class="form-body">
                            <div class="form-group">
                                <div class="col-md-9 col-xs-12">
                                    <input class="form-control form-control-inline " name="departmentName" id="department_name" type="text" value="" placeholder="Department Name" />
                                </div>
                <div class="col-md-2 col-xs-12">
                    <button type="button" id="plusButtonDepartment" class="btn btn-sm green form-control-inline margin-bottom-zero wphrm-department-popup-add-more">
                    <i class="fa fa-plus"></i>Add More</button>
                                  </div>
                            </div>
                        </div>
                        <div id="insertBeforeDepartment"></div>
                            
                        <div class="form-group margin-bottom-zero">
                                <div class="col-md-10"> 
                                <input type="submit" value="submit">         
                                <button type="submit"  class="btn blue margin-right-fifteen"><i class="fa fa-plus"></i>Add Department</button>
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="btn default"><i class="fa fa-times"></i>Cancel</button>
                             </div>
                        </div>
                    </form>
                    <!-- END FORM-->
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="contentWrapper">
    <div class="wphrmContainer">
        <div class="row">
        <!-- mobile menu start -->
                  <div class="col-md-12 col-sm-12 " style="float: inherit;">
            <div class="wphrm-responsive-menu">
                <div class="wphrm-logo-main-init">
                    <a class="wphrm-logo-link-init" href="https://wphrm.com/demo/dashboard">
                        <img class="" src="http://wphrm.com/demo/wp-content/uploads/abstract-logo-1.png">
                    </a>
                </div>
                <div class="mune-icone-open-and-close">
                    <div class="mobile-menu-button">
                        <div class="bar-one"></div>
                        <div class="bar-two"></div>
                        <div class="bar-three"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu end -->
                <!-- mobile menu end -->
            <div class="col-md-12 col-sm-12">
                <div class="productCard">Departments</div>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li><a href="https://wphrm.com/demo/dashboard"><i class="fa fa-home"></i>Home<i class="fa fa-angle-right"></i></a></li>
            <li>Departments</li>
        </ul>
    </div>

    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <a class="btn green " href="#add_static" data-toggle="modal"><i class="fa fa-plus"></i>Add New Department</a>
            <div class="portlet box blue calendar">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-list"></i>List of Departments                    </div>
                </div>
                <div class="portlet-body">
					<div class="table-responsive">
                    <table class="wphrmtable table table-striped table-bordered table-hover" id="wphrmDataTable">
                      <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Department Name</th>
                                <th >Designations</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                             <?php if ($result->num_rows > 0) {
                              // output data of each row
                                while($row = $result->fetch_assoc()) {
                                      ?>

                                     <td><?php
                                      echo $row["sno"] ?> </td>
                                    <td><?php
                                      echo $row["DepartmentName"] ?> </td>
                                    <td><?php
                                      echo $row["Designations"] ?> </td>
                                    
                                    <?php
                                     }
                                    } else {
                                              echo "0 results";
                                            }
                                                $conn->close();

                                    ?>

                                        
                                        <td>
                                            <a class="purple color" href="https://wphrm.com/demo/designation?departmentID=159&department_name=EntrepriseB">
                                                <i class="fa fa-list"></i>
                                            </a>
                                            <a class="blue color" data-toggle="modal" href="#edit_static" onclick="departmentEdit(159,'EntrepriseB')">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="red color" href="javascript:;" onclick="WPHRMCustomDelete(159, 'wphrm_department', 'departmentID')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                        </tbody>
                    </table>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- END PAGE CONTENT-->
