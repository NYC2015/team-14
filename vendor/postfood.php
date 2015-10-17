<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="postfood.html"><i class="fa fa-fw fa-dashboard"></i> Post Food!</a>
                    </li>
                    <li>
                        <a href="reservations.html"><i class="fa fa-fw fa-dashboard"></i> Reservations</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Post Food
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Post Food
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="containe">
                    <form role="form" method='post'>
                    <div class="form-group col-lg-6">
                        <label>What's it called?</label>
                        <input class="form-control" value="name" name="name" type="text" placeholder="Banana, bread, milk, etc.">
                    </div>

                    <div class="form-group col-lg-6">
                        <label>What kind?</label>
                        <select name="type" class="form-control">
                            <option name="type" type="text" value="Fruit">Fruit</option>
                            <option name="type" type="text" value="Dairy">Diary</option>
                            <option name="type" type="text" value="Vegetable">Vegetable</option>
                            <option name="type" type="text" value="Grain">Grain</option>
                            <option name="type" type="text" value="Meat">Meat</option>
                        </select>
                    </div>

                    <div class="form-group col-lg-6">
                        <label>How much (in pounds)?</label>
                        <input class="form-control" name="weight" type="number">
                    </div>
                    
                    <div class="form-group col-lg-6">
                        <label>Expiration date/time?</label>
                        <div class="input-append date form_datetime" data-date="2015-10-16T05:25:07Z" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input1">
                            <input name = "date" class="form-control" type="text" value="" readonly>
                            <span class="add-on"><i class="icon-remove"></i></span>
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        <input type="hidden" id="dtp_input1" value="" /><br/>
                    </div>
                    <div class="row">
                    </div>
					<center>
					<button type="submit" name="submit" class="btn btn-primary">Post!</button>
				</center>
                </div>
				</form>
				<?php 
				if(isset($_POST['submit'])) {
					#Connecting to Local Server
					$dbc = mysqli_connect('ec2-54-82-98-78.compute-1.amazonaws.com:3306', 'root', 'code4good', 'endhunger_db');
					mysqli_set_charset($dbc, 'utf8');
					
					$whichweight = $_POST["weight"];
					$whichtype = $_POST["type"];
					$whichname = $_POST["name"];
					$whichdate = $_POST["date"];
					
					$q = 'INSERT INTO food(weight, type, name, date) VALUES(' . $whichweight . ", '" . $whichtype . "', '" . $whichname . "'," . $whichdate . ")";
					echo $q;
					$r = mysqli_query($dbc, $q);
				}
				?>
                <div class="col-lg-12">
                        <h2>Active posts</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Food</th>
                                        <th>Qty.</th>
                                        <th>Type</th>
                                        <th>Exp. Time</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Banana</td>
                                        <td>12</td>
                                        <td>Fruit</td>
                                        <td>10/17/2015 - 10:30pm</td>
                                        <td><i class="fa fa-times"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Apple</td>
                                        <td>15</td>
                                        <td>Fruit</td>
                                        <td>10/17/2015 - 10:30pm</td>
                                        <td><i class="fa fa-times"></i></td>

                                    </tr>
                                    <tr>
                                        <td>Watermellon</td>
                                        <td>30</td>
                                        <td>Fruit</td>
                                        <td>10/17/2015 - 10:30pm</td>
                                        <td><i class="fa fa-times"></i></td>

                                    </tr>
                                    <tr>
                                        <td>Milk</td>
                                        <td>10</td>
                                        <td>Diary</td>
                                        <td>10/17/2015 - 10:30pm</td>
                                        <td><i class="fa fa-times"></i></td>

                                    </tr>
                                    <tr>
                                        <td>Bread</td>
                                        <td>30</td>
                                        <td>Grain</td>
                                        <td>10/17/2015 - 10:30pm</td>
                                        <td><i class="fa fa-times"></i></td>

                                    </tr>
                                    <tr>
                                        <td>Berries</td>
                                        <td>14</td>
                                        <td>Fruit</td>
                                        <td>10/17/2015 - 10:30pm</td>
                                        <td><i class="fa fa-times"></i></td>

                                    </tr>
                                    <tr>
                                        <td>Cake</td>
                                        <td>10</td>
                                        <td>Bakery</td>
                                        <td>10/17/2015 - 10:30pm</td>
                                        <td><i class="fa fa-times"></i></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/moment.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $('.form_datetime').datetimepicker({
            weekStart: 7,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
    </script>

</body>

</html>
