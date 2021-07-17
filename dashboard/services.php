<?php
include ('../path.php');
include (ROOT_PATH . "/app/controllers/users.php");
include (ROOT_PATH . '/app/controllers/services.php');


$id = $_SESSION['id'];
$image_preview = selectOne('users',['id' => $id]);



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Details || <?php echo $_SESSION['first_name']; ?>.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../assets/css/main.css" rel="stylesheet">
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="../assets/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/jquery-ui.css">
    <script src="../assets/js/jquery-1.12.4.js"></script>
    <script src="../assets/js/jquery-ui.js"></script>
    </head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow bg-arielle-smile header-text-dark">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <?php if ($_SESSION['admin']): ?>
                        <li class="btn-group nav-item">
                            <a href="#" class="nav-link">3
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                    <?php endif; ?>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" height="42" class="rounded-circle" src="../assets/images/face-0.jpg" alt="<?php echo $_SESSION['first_name']; ?>">
                                            <i class="fa fa-angle-down ml-2 opacity-9"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <a href="#" style="text-decoration: none;"><button type="button" tabindex="0" class="dropdown-item">User Account</button></a>
                                        <a href="#" style="text-decoration: none;"><button type="button" tabindex="0" class="dropdown-item">Settings</button></a>
                                        <h6 tabindex="-1" class="dropdown-header"> Actions </h6>
                                        <a href="#" style="text-decoration: none;"><button type="button" tabindex="0" class="dropdown-item">Connections</button></a>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <a href="<?php echo BASE_URL . '/logout.php' ?>" style="text-decoration: none;"><button type="button" tabindex="0" class="dropdown-item" style="color: tomato;">Logout</button></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading">
                                    <?php echo $_SESSION['first_name'] . " ". $_SESSION['second_name']; ?>
                                </div>
                                <div class="widget-subheading">
                                        <p> Welcome <?php echo $_SESSION['first_name'] ?></p>
                                    

                                </div>
                            </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <span class="badge badge-pill badge-success">Online</span>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboard</li>
                                <li>
                                    <a href="<?php echo BASE_URL . '/dashboard/dashboard.php'  ?>" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Content Management</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-user"></i>
                                        Manage Pages
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                <ul>
                                <li>
                                    <a href="<?php echo BASE_URL . '/dashboard/aboutus.php'  ?>">
                                        <i class="metismenu-icon"></i>
                                       About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL . '/dashboard/pricing.php'  ?>">
                                        <i class="metismenu-icon">
                                        </i>Pricing
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL . '/dashboard/services.php'  ?>">
                                        <i class="metismenu-icon">
                                        </i>Services
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL . '/dashboard/portfolio.php'  ?>">
                                        <i class="metismenu-icon">
                                        </i>Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL . '/dashboard/testimonials.php'  ?>">
                                        <i class="metismenu-icon">
                                        </i>Testimonials
                                    </a>
                                </li>

                                <?php if ($_SESSION['admin']): ?>

                                    <li>
                                        <a href="<?php echo BASE_URL . '/dashboard/create.php'  ?>">
                                            <i class="metismenu-icon">
                                            </i>Add new user
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo BASE_URL . '/dashboard/index.php'  ?>">
                                            <i class="metismenu-icon">
                                            </i>  View system users.
                                        </a>
                                    </li>
                                <?php endif; ?>
                                </ul>
                            </li>
                                <li class="app-sidebar__heading">Activity</li>
                                <li>
                                    <a href="<?php echo BASE_URL . '/dashboard/messages/index.php'  ?>">
                                        <i class="metismenu-icon pe-7s-print"></i>
                                        Messages
                                        </a>
                                </li>
                                <li class="app-sidebar__heading">System</li>
                                <li>
                                    <a href="<?php echo BASE_URL . '/dashboard/settings/index.php'  ?>">
                                        <i class="metismenu-icon pe-7s-config"></i>
                                        System Settings
                                    </a>
                                </li>
                                
                                <li class="app-sidebar__heading"> Logout </li>
                                <li>
                                    <a href="<?php echo BASE_URL . '/logout.php' ?>" style="color:tomato;">
                                        <i class="metismenu-icon pe-7s-next-2"></i>
                                            Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div> Dashboard
                                        <div class="page-title-subheading">
                                        <?php if (isset($_SESSION['msg'])):?>
                                            <?php include(ROOT_PATH . "/app/includes/messages.php");?>
                                        <?php else:?>
                                            <nav class aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                            <li class="active breadcrumb-item" aria-current="page">Home | <b>About Us</b></li>
                                            </ol>
                                            </nav>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Dashboard" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Options
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>            
                        

<div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="" method="POST" enctype="multipart/form-data">
                        <?php include (ROOT_PATH . "/app/helpers/formErrors.php")?>

	                        <div class="form-group">
	                        	<label for="post_title">About Us Title</label>
	                        	<textarea  class="form-control" name="recording" id="" cols="30" rows="10"><?php echo $services_recording;  ?></textarea>
	                        </div>

	                        <div class="form-group">
	                        	<label for="post_subtitles">About Us subtitles</label>
	                        	<textarea  class="form-control" name="subtitle" id="" cols="30" rows="10"><?php echo  $services_mixing; ?></textarea>
	                        </div>

	                        <div class="input-group">
			
                                </select>
                                	</div>

                                	<div class="form-group">
                                		<label for="post_content">About Us Content</label>
                                		<textarea  class="form-control" name="content" id="" cols="30" rows="10"><?php  echo $services_booking;  ?>
                                		</textarea>
                                	</div>

                                	<button type="submit" name="update" class="btn btn-primary" value="Update Post">Update</button>
                                </form>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>

                                <script src="js/jquery.js"></script>


                                    <script src="js/bootstrap.min.js"></script>

                                </body>

                              </html>




                        
                    </div>
                       </div>
        </div>
    </div>
    

<script type="text/javascript" src="../assets/js/main.js"></script>
<!-- <script>
$(document).ready(function(){

setInterval(function(){
 update_last_activity();
}, 3000);
home


function update_last_activity()
{
 $.ajax({
  url:"../app/controllers/update_last_activity.php",
  success:function()
  {

  }
 })
}
});
</script> -->

<!-- <div id="toast-container" class=toast-top-right>
<div class="toast toast-success" aria-live="polite" style>
<button type="button" class="toast-close-button" role="button" id="cleartoasts"> X </button>
<div class="toast-message"> SUCCESS </div>
</div>
</div> -->
</body>
</html>

