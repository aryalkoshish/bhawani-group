<header class="main-header">
    <!-- Logo -->
    <a href="{{route('home')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>BG</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Bhawani</b>Group</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('public/cd-admin/dist/img/avatar.png')}}" class="user-image" alt="User">
                        <span class="hidden-xs">Bhawani Group</span>

                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('public/cd-admin/dist/img/avatar.png')}}"class="img-circle" alt="User">

                            <p>
                            
                                User Name
                                <small>Role</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            
                           
                             <div class="pull-right">
                                <a href="{{route('logout')}}" class="btn btn-danger btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     
     
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            
            <li class="treeview">
                <a href="{{route('showabout')}}">
                    <i class="fa fa-info-circle"></i><span>About</span>
                </a>             
            </li>
            <li class="treeview">
                <a href="{{route('view.testmonial')}}">
                   <i class="fa fa-files-o"></i><span>Testmonials</span>                 
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('view.article')}}">
                   <i class="fa fa-file-text-o"></i><span>Article</span>   
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('viewservice')}}">
                   <i class="fa fa-cogs"></i><span>Service</span>   
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('view.carousel')}}">
                    <i class="fa fa-camera"></i> <span>Carousel</span>  
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('viewdesign')}}">
                    <i class="fa fa-tachometer"></i><span>Design</span>  
                </a>
            </li>   
            <li class="treeview">
                <a href="{{route('view.team')}}">
                    <i class="fa fa-user-plus"></i> <span>Teams</span>  
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('viewclient')}}">
                    <i class="fa fa-user"></i><span>Client</span>  
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('viewcontact')}}">
                    <i class="fa fa-phone-square"></i><span>Contact</span>  
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('viewreplies')}}">
                    <i class="fa fa-envelope-o"></i> <span>Replies</span>  
                </a>
            </li>


        </ul>
        </section>
        <!-- /.sidebar -->
    </aside>