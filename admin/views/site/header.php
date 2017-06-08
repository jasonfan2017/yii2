<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$session = Yii::$app->session;
$session->set('groupid', '1');
if($session->has('groupid') && $session->get('groupid')=="1" ){
	echo $session->get('groupid');
}
else{echo 222;}
//else {echo "<script type='text/javascript'> window.location.href='login.php';</script>";  }

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Theme</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Bootstrap Core CSS -->
<?=Html::cssFile('../../bootstrap.min.css')?>    

    <!-- MetisMenu CSS -->
<?=Html::cssFile('../../css/metisMenu.min.css')?>

    <!-- Custom CSS -->
<?=Html::cssFile('../../css/sb-admin-2.css')?>

    <!-- Custom Fonts -->
<?=Html::cssFile('../../css/font-awesome.min.css')?>
	    <!-- jQuery -->
<?=Html::jsFile('../../js/jquery.min.js')?>
	
    <!-- Bootstrap Core JavaScript -->
<?=Html::jsFile('../../js/bootstrap.min.js')?>

    <!-- Metis Menu Plugin JavaScript -->
<?=Html::jsFile('../../js/metisMenu.min.js')?>
	
	<!-- Morris Charts JavaScript -->
<?=Html::jsFile('../../js/raphael-min.js')?>
<?=Html::jsFile('../../js/morris.min.js')?>


    <!-- Custom Theme JavaScript -->
<?=Html::jsFile('../../js/sb-admin-2.js')?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?=Html::cssFile('../../css/bootstrap-select.css')?>
<?=Html::cssFile('../../css/datepicker.css')?>
<?=Html::jsFile('../../js/bootstrap-select.js')?>
<?=Html::jsFile('../../js/bootstrap-datepicker.js')?>
<?=Html::cssFile('../../css/bootstrap.min.css')?>


</head>

<body>

    <div id="wrapper" class="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="adminpage">ToAssign</a>

            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" >
                <div class="sidebar-nav navbar-collapse" >
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="adminpage"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#1"><i class="fa fa-users fa-fw"></i> User Action Statistic <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="index.php?r=site/say">Buyer/Seller</a></li>
                                <li><a href="user_action_agents.php">Agents</a></li>
								<li><a href="#1">Builders</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#1"><i class="fa fa-user" aria-hidden="true"></i> Manage Agents<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li><a href="manage_agents.php">Pending</a></li>
                                <li><a href="manage_agents_approved.php">Approved</a></li>
								<li><a href="manage_agents_disapproved.php">Disapproved</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#1"><i class="fa fa-table fa-fw"></i> Manage Properties<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li><a href="manage_property.php">Pending</a></li>
                                <li><a href="manage_property_approved.php">Approved</a></li>
								<li><a href="manage_property_disapproved.php">Disapproved</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="property_status.php"><i class="fa fa-edit fa-fw"></i> Properties Status</a>
                        </li>
                        <li>
                            <a href="#1"><i class="fa fa-file" aria-hidden="true"></i> Manage Historical Reports <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="manage_his_reports_condo.php">Condos</a></li>
                                <li><a href="manage_his_reports_house.php">Houses</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#1"><i class="fa fa-file-text-o" aria-hidden="true"></i> Manage Submission Reports <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="manage_submission.php">Pending</a></li>
                                <li><a href="manage_submission_approved.php">Approved</a></li>
                                <li><a href="manage_submission_disapproved.php">Disapproved</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#1"><i class="fa fa-comment fa-fw"></i> Manage Comments</a>
							 <ul class="nav nav-second-level">
                                <li><a href="manage_comments.php">Unfinished</a></li>
                                <li><a href="manage_comments_finished.php">Finished</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="manage_alerts.php"><i class="fa fa-bell fa-fw"></i> Manage Alerts</a>
                        </li>
						<li>
                            <a href="#1"><i class="fa fa-file-text" aria-hidden="true"></i> Manage Offers <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="manage_offers_online.php">Online</a></li>
                                <li><a href="manage_offers_offline.php">Offline</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#1"><i class="fa fa-user-plus"></i> Work With Agents</a>
                            <ul class="nav nav-second-level">
                                <li><a href="manage_workwith.php">Unfinished</a></li>
                                <li><a href="manage_workwith_finished.php">Finished</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

