<header class="main-header">

    <!-- Logo -->
    <a href="{{route('pl_admin')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>panel</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Toggle boutton-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Menu de droite -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">0</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Il y a 0 message(s)</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{URL::to('src/admintheme/dist/img/romain.jpg')}}"
                                                 class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Romain Renaudet
                                            <small><i class="fa fa-clock-o"></i> 5 min</small>
                                        </h4>
                                        <p>Il avance ce site ??!</p>
                                    </a>
                                </li><!-- end message -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">Voir tous les messages</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">1</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Vous avez 1 notification</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Akim se réveille
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">Voir plus</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{URL::to('src/admintheme/dist/img/romain.jpg')}}" class="user-image"
                             alt="User Image">
                        <span class="hidden-xs">Romain Renaudet</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{URL::to('src/admintheme/dist/img/romain.jpg')}}" class="img-circle"
                                 alt="User Image">
                            <p>
                                Romain Renaudet
                                <small>Homme à tout faire depuis 2010</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Moodle</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Ozanet</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Scolinfo</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </nav>
</header>