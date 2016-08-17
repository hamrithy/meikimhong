<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CST | CST Cambodia Technology</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{'assets/bootstrap/css/bootstrap.min.css'}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{'../../assets/dist/css/AdminLTE.min.css'}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{'../../assets/dist/css/skins/_all-skins.min.css'}}">
    <link rel="sortcut icon"  href="{{'assets/dist/img/logocst.jpg'}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">CST</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
                Kimhong Phone Shop
            </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#">
                            <img src="{{'assets/dist/img/kimhong.jpg'}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Mai Kimhong</span>
                        </a>

                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{'assets/dist/img/kimhong.jpg'}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Mai Kimhong</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                            <span>ផ្ទាំងគ្រប់គ្រង</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>រៀបចំ ទិន្ន័យ</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>រៀបចំ អត្រាប្តូរប្រាក់ </a></li>
                    </ul>
                </li>
                <li>
                    <a href="../widgets.html">
                        <i class="fa fa-th"></i> <span>ទំនិញ</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>រៀបចំប្រភេទ ទំនិញ</a></li>
                        <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>រៀបចំកំ រិតតំលៃ  ទំនិញ</a></li>
                        <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>ររៀបចំកំ រិតមុខៃ  ទំនិញ</a></li>
                        <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>ផ្ទេរ  ទំនិញ</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-diamond"></i>
                        <span>អតិថិជន</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> រៀបចំ ប្រភេទអតិថិជន</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> រៀបចំ អតិថិជន</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> រៀបចំ សេវាកម្ម</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> បញ្ជាលក់ជាសេវាកម្ម</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> បញ្ជាលក់ទំនិញ</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> បង្វិលទំនិញចូលពីអតិថិជន់</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>ទទូលប្រាក់សងពីអតិថិជន់</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa  fa-taxi"></i>
                        <span>អ្នកផ្គត់ផ្គត់</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i>ររៀបចំ ប្រភេទអ្នកផ្គត់ផ្គង់</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>រផបចំ អ្នកផ្គត់ផ្គង់</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> បញ្ជាទិញទំនិញ</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> បង្វិលទំនិញចេញ</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> សងប្រាក់ទៅអ្នកផ្គត់ផ្គង់់</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa  fa-user-plus"></i> <span>បុក្គលិក</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i>បញ្ជីបុក្គលិក</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-calculator"></i> <span>គណនេយ្យ</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i> រៀបចំ ប្រភេទចំនាយ</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i> រៀបចំ ប្រភេទចំណូល</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i> តត់ត្រាចំណាយ</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i> តត់ត្រាចំណូល</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-file-text"></i> <span>របាយការណ៍</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href=""><i class="fa fa-chevron-circle-right"></i>ទំនិញ</a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>បញ្ជីឈ្មោះទំនិញ
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>ចំនូនទំនិញក្នុងស្តុក
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>តាមដានដ្លែដើមទំនិញ
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>កែតម្រូវតាមស្តុកជាក់ស្ងែង
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>ផ្ទេរទំនិញចេញ
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>បញ្ជាទិញទំនិញ
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-chevron-circle-right"></i> អតិថិជាន់,លក់,ប្រាក់ជំពាក់</a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>បញ្ជីឈ្មោះអតិថិជន់
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>របាយការណ៏លក់ទំនិញ
                                    </a>
                                </li>
                                <li >
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>សមតុល្យអតិថិជន់
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>អតិថិជន់បងប្រាក់
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li><a href=""><i class="fa fa-chevron-circle-right"></i> បុក្គលិក</a>
                            <ul class="treeview-menu">
                                <li>
                                    <a><i class="fa fa-circle-o"></i>របាយការណ៏ បុក្គលិក </a>
                                    <a><i class="fa fa-circle-o"></i>បុក្គលិកទទូលសេវាកម្ម </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href=""><i class="fa fa-chevron-circle-right"></i> ហិរញ្ញវត្ថុ</a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i>ចំនាយ </a> </li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>ចំណូល </a> </li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>ចំណូលចំណូល </a> </li>
                                <li><a href="#"><i class="fa fa-circle-o"></i>សមតុល្យសាច់ប្រាក់ </a> </li>
                            </ul>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-lock"></i> <span>ប្រព័ន្ធសុវត្តិភាព</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-key"></i> តូនាទីរបស់អ្នកប្រើ</a> </li>
                        <li><a href="#"><i class="fa fa-user"></i> គណនីអ្នកប្រើ</a> </li>
                    </ul>
                </li>

             </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
@yield('content')
            <!-- Default box -->

            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1
        </div>
        <strong>Copyright &copy;2016 <a href="http://cstcambodia.com">CST Cambodia Technology</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{'../../assets/plugins/jQuery/jquery-2.2.3.min.js'}}"></script>
<script src="{{'../../assets/dist/js/veu.min.js'}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{'../../assets/bootstrap/js/bootstrap.min.js'}}"></script>
<!-- SlimScroll -->
<script src="{{'../../assets/plugins/slimScroll/jquery.slimscroll.min.js'}}"></script>
<!-- FastClick -->
<script src="{{'../../assets/plugins/fastclick/fastclick.js'}}"></script>
<!-- AdminLTE App -->
<script src="{{'../../assets/dist/js/app.min.js'}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{'../../assets/dist/js/demo.js'}}"></script>
</body>
</html>
