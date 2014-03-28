<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>Autoamecah</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
       

        <link rel="stylesheet" href="css/styles.css">
     <?php include ("conexion.php"); session_start(); ?>
     
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    </head>
    <body class="commonForm">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- ==================== TOP MENU ==================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="brand" href="#"><strong class="brandBold"><img src="img/logo.png"></a>
                    <div class="nav pull-right">
                        <form class="navbar-form">
                            <div class="input-append">
                                <input class="inp-mini inp-dark span2" type="text" placeholder="search...">
                                <span class="add-on add-on-first add-on-mini add-on-dark" id="search"><i class="icon-search"></i></span>
                                <div class="collapsibleContent">
                                    <a href="#tasksContent" class="sidebar"><span class="add-on add-on-middle add-on-mini add-on-dark" id="tasks"><i class="icon-tasks"></i><span class="notifyCircle cyan">3</span></span></a>
                                    <a href="#notificationsContent" class="sidebar"><span class="add-on add-on-middle add-on-mini add-on-dark" id="notifications"><i class="icon-bell-alt"></i><span class="notifyCircle orange">9</span></span></a>
                                    <a href="#messagesContent" class="sidebar"><span class="add-on add-on-middle add-on-mini add-on-dark" id="messages"><i class="icon-comments-alt"></i><span class="notifyCircle red">12</span></span></a>
                                    <a href="#settingsContent" class="sidebar"><span class="add-on add-on-middle add-on-mini add-on-dark" id="settings"><i class="icon-cog"></i></span></a>
                                    <a href="#profileContent" class="sidebar"><span class="add-on add-on-mini add-on-dark" id="profile"><i class="icon-user"></i><span class="username">Ing. Imrich Kamarel</span></span></a>
                                </div>
                                <a href="#collapsedSidebarContent" class="collapseHolder sidebar"><span class="add-on add-on-mini add-on-dark"><i class="icon-sort-down"></i></span></a>
                            </div>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- ==================== END OF TOP MENU ==================== -->

        <!-- ==================== SIDEBAR ==================== -->
        <div class="hiddenContent">
            <!-- ==================== SIDEBAR COLLAPSED ==================== -->
            <div id="collapsedSidebarContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <ul class="collapsedSidebarMenu">
                        <li><a href="#tasksContent" class="sidebar">Tasks <div class="notifyCircle cyan">3</div><i class="icon-chevron-sign-right"></i></a></li>
                        <li><a href="#notificationsContent" class="sidebar">Notifications <div class="notifyCircle orange">9</div><i class="icon-chevron-sign-right"></i></a></li>
                        <li><a href="#messagesContent" class="sidebar">Messages <div class="notifyCircle red">12</div><i class="icon-chevron-sign-right"></i></a></li>
                        <li><a href="#settingsContent" class="sidebar">Settings<i class="icon-chevron-sign-right"></i></a></li>
                        <li><a href="#profileContent" class="sidebar">Ing. Imrich Kamarel<i class="icon-chevron-sign-right"></i></a></li>
                        <li class="sublevel"><a href="#">edit profile<i class="icon-user"></i></a></li>
                        <li class="sublevel"><a href="#">change password<i class="icon-lock"></i></a></li>
                        <li class="sublevel"><a href="#">logout<i class="icon-off"></i></a></li>
                    </ul>
                </div>   
            </div>
            <!-- ==================== END OF SIDEBAR COLLAPSED ==================== -->
            <!-- ==================== SIDEBAR TASKS ==================== -->
            <div id="tasksContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <a href="#collapsedSidebarContent" class="showCollapsedSidebarMenu"><i class="icon-chevron-sign-left"></i><h1> Tasks</h1></a>
                    <h1>Tasks</h1>
                    <div class="sidebarInfo">
                        <div class="progressTasks"><span class="label">11</span> tasks in progress</div>
                        <div class="newTasks"><span class="label cyan">3</span> new tasks</div>
                    </div>
                    <ul class="tasksList">
                        <li class="new">
                            <h3>Update database</h3>
                            <span class="taskProgress">0%</span>
                            <div class="progress progress-striped active">
                              <div class="bar"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority red">High priority</div>
                                <div class="tag status cyan">New task</div>
                            </div>    
                        </li>
                        <li class="new">
                            <h3>Clean CSS</h3>
                            <span class="taskProgress">0%</span>
                            <div class="progress progress-striped active">
                              <div class="bar"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority orange">Normal priority</div>
                                <div class="tag status cyan">New task</div>
                            </div>  
                        </li> 
                        <li class="new">
                            <h3>Clean JavaScript</h3>
                            <span class="taskProgress">0%</span>
                            <div class="progress progress-striped active">
                              <div class="bar"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority green">Low priority</div>
                                <div class="tag status cyan">New task</div>
                            </div> 
                        </li> 
                        <li>
                            <h3>Make a backup</h3>
                            <span class="taskProgress">75%</span>
                            <div class="progress progress-striped active">
                              <div class="bar" style="width: 75%;"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority green">Low priority</div>
                            </div> 
                        </li> 
                        <li>
                            <h3>Clean HTML</h3>
                            <span class="taskProgress">50%</span>
                            <div class="progress progress-striped active">
                              <div class="bar" style="width: 50%;"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority red">High priority</div>
                            </div> 
                        </li> 
                        <li>
                            <h3>Make a coffee</h3>
                            <span class="taskProgress">25%</span>
                            <div class="progress progress-striped active">
                              <div class="bar" style="width: 25%;"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority orange">Normal priority</div>
                            </div> 
                        </li> 
                        <li>
                            <h3>THEKAMAREL project</h3>
                            <span class="taskProgress">100%</span>
                            <div class="progress progress-striped">
                              <div class="bar" style="width: 100%;"></div>
                            </div>
                            <div class="appendedTags">
                                <div class="tag priority red">High priority</div>
                                <div class="tag status grey">Finished task</div>
                            </div> 
                        </li>   
                    </ul>
                    <button class="btn btn-primary">View all</button>
                </div>   
            </div>
            <!-- ==================== END OF SIDEBAR TASKS ==================== -->

            <!-- ==================== SIDEBAR NOTIFICATIONS ==================== -->
            <div id="notificationsContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <a href="#collapsedSidebarContent" class="showCollapsedSidebarMenu"><i class="icon-chevron-sign-left"></i><h1> Notifications</h1></a>
                    <h1>Notifications</h1>
                    <div class="sidebarInfo">
                        <div><span class="label">32</span> notifications</div>
                        <div><span class="label orange">9</span> new notifications</div>
                    </div>
                    <ul class="notificationsList">
                        <li class="new first">
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">1 minute ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">3 minutes ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-comments"></i> New comment</div>
                            <span class="notificationDate">15 minutes ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-shopping-cart"></i> New order</div>
                            <span class="notificationDate">23 minutes ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-shopping-cart"></i> Order cancelled</div>
                            <span class="notificationDate">1 hour ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-comments"></i> New comment</div>
                            <span class="notificationDate">1 hour ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">3 hours ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">5 hours ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li class="new">
                            <div><i class="icon-user"></i> User account cancelled</div>
                            <span class="notificationDate">6 hours ago <span class="pull-right notificationStatus">new</span></span>
                        </li>
                        <li>
                            <div><i class="icon-comments"></i> New comment</div>
                            <span class="notificationDate">10 hour ago</span>
                        </li>
                        <li>
                            <div><i class="icon-shopping-cart"></i> New order</div>
                            <span class="notificationDate">23 hours ago</span>
                        </li>
                        <li>
                            <div><i class="icon-comments"></i> New comment</div>
                            <span class="notificationDate">yesterday</span>
                        </li>
                        <li>
                            <div><i class="icon-shopping-cart"></i> New order</div>
                            <span class="notificationDate">yesterday</span>
                        </li>
                        <li>
                            <div><i class="icon-shopping-cart"></i> Order cancelled</div>
                            <span class="notificationDate">yesterday</span>
                        </li>
                        <li>
                            <div><i class="icon-comments"></i> New comment</div>
                            <span class="notificationDate">01.03.2013</span>
                        </li>
                        <li>
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">01.03.2013</span>
                        </li>
                        <li>
                            <div><i class="icon-user"></i> New user registered</div>
                            <span class="notificationDate">02.03.2013</span>
                        </li>
                        <li>
                            <div><i class="icon-user"></i> User account cancelled</div>
                            <span class="notificationDate">02.03.2013</span>
                        </li>
                        <li>
                            <div><i class="icon-shopping-cart"></i> New order</div>
                            <span class="notificationDate">02.03.2013</span>
                        </li>
                        <li>
                            <div><i class="icon-shopping-cart"></i> Order cancelled</div>
                            <span class="notificationDate">03.03.2013</span>
                        </li>
                    </ul>
                    <button class="btn btn-primary">View all</button>
                </div>      
            </div>
            <!-- ==================== END OF SIDEBAR NOTIFICATIONS ==================== -->

            <!-- ==================== SIDEBAR MESSAGES ==================== -->
            <div id="messagesContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <a href="#collapsedSidebarContent" class="showCollapsedSidebarMenu"><i class="icon-chevron-sign-left"></i><h1> Messages</h1></a>
                    <h1>Messages</h1>
                    <div class="sidebarInfo">
                        <div><span class="label">128</span> messages</div>
                        <div><span class="label red">12</span> unreaded messages</div>
                    </div>
                    <ul class="messagesList">
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="img/rimmer-avatar.jpg" alt=""></div>
                            <h3>Arnold Karlsberg</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="img/homer-avatar.jpg" alt=""></div>
                            <h3>John Doe</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="img/peter-avatar.jpg" alt=""></div>
                            <h3>Peter Kay</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="img/zoidberg-avatar.jpg" alt=""></div>
                            <h3>George McCain</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="img/peter-avatar.jpg" alt=""></div>
                            <h3>Peter Kay</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                        <li class="unreaded">
                            <div class="messageAvatar"><img src="img/rimmer-avatar.jpg" alt=""></div>
                            <h3>Arnold Karlsberg</h3>
                            <span class="messageDate">05.03.2013 17:55 <span class="pull-right messageStatus">unreaded</span></span> 
                            <div class="messageContent">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad..."</div>
                        </li>
                    </ul>
                    <button class="btn btn-primary">View all</button>
                </div>  
            </div>
            <!-- ==================== END OF SIDEBAR MESSAGES ==================== -->

            <!-- ==================== SIDEBAR SETTINGS ==================== -->
            <div id="settingsContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <a href="#collapsedSidebarContent" class="showCollapsedSidebarMenu"><i class="icon-chevron-sign-left"></i><h1> Settings</h1></a>
                    <h1>Settings</h1>
                    <ul class="settingsList">
                        <li>
                            <div class="settingSlider">
                                <i class="icon-leaf"></i><h3> Slider</h3>
                                <div class="sl1"></div>
                            </div>
                        </li>
                        <li>
                            <div class="settingSlider">
                                <i class="icon-leaf"></i><h3> RangeSlider</h3>
                                <div class="sl2"></div>
                            </div>
                        </li>
                        <li>
                            <div class="settingToggler">
                                <i class="icon-leaf"></i><h3> Toggler</h3>
                                <label class="checkbox toggle well" onclick="">
                                    <input id="toggler" type="checkbox" checked />
                                    <span class="slider-selection"></span>
                                    <span class="toggleStatus">
                                        <span><i class="icon-ok toggleOn"></i></span>
                                        <span><i class="icon-remove toggleOff"></i></span>
                                    </span>

                                    <a class="btn btn-primary slide-button"></a>
                                </label>
                            </div>
                        </li>

                        <li class="fontSize">
                            <h2>Font Size</h2>
                            <div class="fontSizeBlock fontSizeSmall active"><span>A</span></div>
                            <div class="fontSizeBlock fontSizeMedium"><span>A</span></div>
                            <div class="fontSizeBlock fontSizeBig"><span>A</span></div>
                        </li>

                        <li class="fontStyle">
                            <h2>Font Style</h2>
                            <div class="fontStyleBlock fontStyleSansSerif active"><span>Aa</span></div>
                            <div class="fontStyleBlock fontStyleSerif"><span>Aa</span></div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ==================== END OF SIDEBAR SETTINGS ==================== -->

            <!-- ==================== SIDEBAR PROFILE ==================== -->
            <div id="profileContent">
                <div class="sidebarDivider"></div>
                <div class="sidebarContent">
                    <a href="#collapsedSidebarContent" class="showCollapsedSidebarMenu"><i class="icon-chevron-sign-left"></i><h1> My account</h1></a>
                    <h1>My account</h1>
                    <div class="profileBlock">
                        <div class="profilePhoto">
                            <div class="usernameHolder">Ing. Imrich Kamarel</div>
                        </div>
                        <div class="profileInfo">
                            <p><i class="icon-map-marker"></i> Piestany, SK</p>
                            <p><i class="icon-envelope-alt"></i> ici.kamarel@tattek.com</p>
                            <p><i class="icon-globe"></i> tattek.com</p>
                            <p class="aboutMe">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <footer>
                            <div class="profileSettingBlock editProfile"><i class="icon-user"></i>edit profile</div>
                            <div class="profileSettingBlock changePassword"><i class="icon-lock"></i>change password</div>
                            <div class="profileSettingBlock logout"><i class="icon-off"></i>logout</div>
                        </footer>
                    </div>
                </div>
            </div>
            <!-- ==================== END OF SIDEBAR PROFILE ==================== -->

        </div>
        <!-- ==================== END OF SIDEBAR ==================== -->

        <!-- ==================== MAIN MENU ==================== -->
        <div class="mainmenu">
            <div class="container-fluid">
                <ul class="nav">
                    <li class="collapseMenu"><a href="#"><i class="icon-double-angle-left"></i>hide menu<i class="icon-double-angle-right deCollapse"></i></a></li>
                    <li class="divider-vertical firstDivider"></li>
                    <li class="left-side" id="dashboard"><a href="index.html"><i class="icon-dashboard"></i> TITULO</a></li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown active">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="formElements"><i class="icon-list"></i> TITULO <span class="label label-pressed">3</span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="common-form.html">COMMON ELEMENTS</a></li>
                            <li><a tabindex="-1" href="validation-form.html">VALIDATION</a></li>
                            <li><a tabindex="-1" href="form-wizard.html">WIZARD</a></li>
                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="interface"><i class="icon-pencil"></i> TITULO <span class="label label-pressed">2</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="interface.html">TITULO</a></li>
                            <li><a tabindex="-1" href="typography.html">TITULO</a></li>
                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li id="buttonsIcons"><a href="buttons.html"><i class="icon-tint"></i> TITULO</a></li>
                    <li class="divider-vertical"></li>
                    <li id="gridLayout"><a href="grid.html"><i class="icon-th"></i> TITULO</a></li>
                    <li class="divider-vertical"></li>
                    <li id="tables"><a href="tables.html"><i class="icon-th-large"></i> TITULO</a></li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="samplePages"><i class="icon-globe"></i> TITULO <span class="label label-pressed">6</span></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="login.html">TITULO</a></li>
                            <li><a tabindex="-1" href="calendar.html">TITULO</a></li>
                            <li><a tabindex="-1" href="404.html">TITULO</a></li>
                            <li><a tabindex="-1" href="gallery.html">GTITULO</a></li>
                            <li class="dropdown-submenu">
                                <a href="#">MAIL</a>
                                <ul class="dropdown-menu">
                                    <li><a href="mail.html">Vertical View</a></li>
                                    <li><a href="mail-horizontal.html">Horizontal View</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">MAPS</a>
                                <ul class="dropdown-menu">
                                    <li><a href="vectormaps.html">Vector Maps</a></li>
                                    <li><a href="gmaps.html">Google Maps</a></li>
                                </ul>
                            </li>                            <li class="dropdown-submenu">
                                <a href="#">TITULO</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Second level link</a></li>
                                    <li><a href="#">Second level link</a></li>
                                    <li><a href="#">Second level link</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="#">THIRD LEVEL</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Second level link</a></li>
                                            <li><a href="#">Second level link</a></li>
                                            <li><a href="#">Second level link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li><a href="widgets.html" id="widgets"><i class="icon-play-circle"></i> TITULO</a></li>
                    <li class="divider-vertical"></li>
                    <li class="right-side" id="chartsGraphs"><a href="charts.html"><i class="icon-bar-chart"></i> TITULO </a></li>
                    <li class="divider-vertical"></li>
                </ul>
           </div>
        </div>
        <!-- ==================== END OF MAIN MENU ==================== -->

        <!-- ==================== DROPDOWN MENU FOR MOREOPTIONS ICON (hidden state) ==================== -->
        <ul class="dropdown-menu" id="moreOptionsMenu">
            <li class="dropdown-submenu">
                <a href="#">More options</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Second level link</a></li>
                    <li><a href="#">Second level link</a></li>
                    <li><a href="#">Second level link</a></li>
                    <li><a href="#">Second level link</a></li>
                    <li><a href="#">Second level link</a></li>
                </ul>
            </li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
        </ul>
        <!-- ==================== END OF DROPDOWN MENU ==================== -->

        <!-- ==================== PAGE CONTENT ==================== -->
        <div class="content">
            <!-- ==================== TITLE LINE FOR HEADLINE ==================== -->
            <div class="titleLine">
                <div class="container-fluid">
                    <div class="titleIcon"><i class="icon-list"></i></div>
                    <ul class="titleLineHeading">
                        <li class="heading"><h1>Form Elements</h1></li>
                    </ul>
                    <ul class="titleLineOnRight pull-right">
                        <li>
                            <span class="usersBar">100,235,549,222,639,335,800</span>
                            <h2 class="cyanText">1254<span class="greyText">users</span></h2>
                        </li>
                        <li>
                            <span class="visitsBar">20,35,10,80,52,34,74,99,45,68</span>
                            <h2 class="redText">758<span class="greyText">visits</span></h2>
                        </li>
                        <li>
                            <span class="ordersBar">254,159,480,531,214,984,671</span>
                            <h2 class="greenText">3541<span class="greyText">orders</span></h2>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ==================== END OF TITLE LINE ==================== -->
            <!-- ==================== BREADCRUMBS / DATETIME ==================== -->
            <ul class="breadcrumb">
                <li><i class="icon-home"></i><a href="index.html"> Home</a> <span class="divider"><i class="icon-angle-right"></i></span></li>
                <li>Form Elements <span class="divider"><i class="icon-angle-right"></i></span></li>
                <li class="active">Common Form Elements</li>
                <li class="moveDown pull-right">
                    <span class="time"></span>
                    <span class="date"></span>
                </li>    
            </ul>
            <!-- ==================== END OF BREADCRUMBS / DATETIME ==================== -->

            <!-- ==================== WIDGETS CONTAINER ==================== -->
            <div class="container-fluid">

                <!-- ==================== COMMON ELEMENTS ROW ==================== -->
                <div class="row-fluid">

                    <div class="span12">
                     
                       <!-- ==================== OTHER ELEMENTS HEADLINE ==================== -->
                        <div class="containerHeadline">
                            <i class="icon-list"></i><h2>Other Elements</h2>
                            <div class="controlButton pull-right"><i class="icon-remove removeElement"></i></div>
                            <div class="controlButton pull-right"><i class="icon-caret-down minimizeElement"></i></div>
                        </div>
                        <!-- ==================== END OF OTHER ELEMENTS HEADLINE ==================== -->
                        <!-- ==================== OTHER ELEMENTS FLOATING BOX ==================== -->
                        <div class="floatingBox">
                            <div class="container-fluid">
                                <form id="form_get_doc" class="form-horizontal contentForm" method="post">

                                <div id="div-send" class="div-hide"> 
               	                   <div class="control-group aprovado">
                                        <label class="control-label origen-label">origen</label>
                                        <div class="controls ctrl-origen">
                                        	<i class="icon-male"></i> 
                                        </div>
                                    </div>
                                   </div> 

                                        <div class="control-group">
                                        <label class="control-label">¿Quien recibe?</label>
                                        <div id="status-add-empl"   class="controls">
                                        <select  name="recibir">
                                             <option value="" selected>--Nombre del personal--</option>
                          <?php
                            $sql= mysql_query("SELECT * FROM `Empledos_Afhonda` ORDER BY `nombre-empl` ASC " ,$con); 
                            while($row = mysql_fetch_array($sql)){
                            ?>                
                            <option id="clave-empl" value="<?=$row['nombre-empl']?>"><?=$row['nombre-empl']?></option>
                            <?php } ?>    	
                                        </select>
                                            <a href="#" id="btn-add-empl"   class="btn btn-danger" ><i class="icon-male"></i> Agregar nuevo personal</a>
                                        </div>
                                    </div>
                                    
                                                                          
               <div id="div-add-empl" class="div-hide"> 
               	        <div class="control-group">
                                        <label class="control-label">Nuevo empleado</label>
                                        <div class="controls">
                                          <input id="nombre_empl" type="text" name="nombre_empl" class="span10">
                                        </div>
                                        <label class="control-label">Puesto laboral</label>
                                        <div class="controls">
                                          <input id="puesto_empl" type="text" name="puesto_empl" class="span10">
                                          <a href="#" id="send-add-empl"   class="btn btn-danger" ><i class="icon-plus"></i> Agregar </a>
                                        </div>
                                        <br>
                                        
                                        
                        <div id="aprovado_recibido" >
                        
                        </div>
                        
                        

                                         
                                    </div>
                               </div>
                               
                               
                               
                           
                                        <div class="control-group">
                                        <label class="control-label">Origen del documento</label>
                                        <div class="controls">
                                        <select name="origen_doc" id="uniqueSelect_origen">
                                        	    <option value="" selected>--Selecione su origen--</option>
                                                <option id="origen1" value="Grupo/Integrante" >Grupo/Integrante</option>
                                                <option id="origen2" value="Contrato inicial" >Contrato inicial</option>
                                                <option id="origen3" value="Proveedor" >Proveedor</option>
                                                <option id="origen4" value="Ins. no gubernamentales">Ins. no gubernamentales</option>
                                                <option id="origen5" value="Dependencias gubernamentales">Dependencias gubernamentales</option>
                                                <option id="origen6" value="Distribuidores afhonda">Distribuidores afhonda</option>
                                                <option id="origen7" value="Otros origenes de datos">Otros origenes de datos</option>
                                        </select>
                                        </div>
                                        </div>
                                        
                                   <div id="div-origen" class="div-hide"> 
               	                   <div class="control-group">
                                        <label class="control-label origen-label"></label>
                                        <div class="controls ctrl-origen">
                                        </div>
                                        <label class="control-label" id="status"></label>
                                    </div>
                               </div>

                                    <div class="control-group">
                                        <label class="control-label">Grupo de datos</label>
                                        <div class="controls">
                                        <select name="grupo_datos" id="uniqueSelect_gps_docs">
                                        	<option value="" selected>--Selecione su origen--</option>
                            <?php
                            $sql= mysql_query("SELECT * FROM `Grupo_Documentos` ORDER BY `Nombre_gp` ASC " ,$con); 
                            while($row = mysql_fetch_array($sql)){
                            ?>   
                                      <option id="clave-empl" value="<?=$row['id_gp_doc']?>"><?=$row['nombre_gp']?></option>
                            <?php } ?> 
                                               
                                        </select>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                       <div id="div-gps-dcos" class="div-hide">
     
                        </div>
                        
         

                                        <div class="control-group">
                                        <label class="control-label"> Selecione su archivo concepto </label>
                                        <div id="status-add-concep" class="controls">
                                        <select name="concepto">
                                        	<option value="" selected>--Lista de documetación--</option>
                            <?php
                            $sql= mysql_query("SELECT * FROM `Conceptos` ORDER BY `no-conceptos` ASC " ,$con); 
                            while($row = mysql_fetch_array($sql)){
                            ?>                
                            <option id="clave-empl" value="<?=$row['no-conceptos']?>"><?=$row['no-conceptos']?></option>
                            <?php } ?>    	
                                        </select>
                                            <a href="#" id="btn-add-concep"   class="btn btn-danger" ><i class="icon-folder-close"></i> Agregar nuevo concepto</a>
                                        </div>
                                    </div>
                                    
                                                                          
                        <div id="div-add-concep" class="div-hide"> 
               	        <div class="control-group">
                                        <label class="control-label">Concepto</label>
                                        <div class="controls">
                                          <input type="text" name="no_conceptos" class="span10">
                                          <a href="#" id="send-add-concep"   class="btn btn-danger" ><i class="icon-plus"></i> Agregar </a>
                                        </div>
                                        <label class="control-label" id="status"></label>
                                    </div>
                                        <div id="aprovado_concepto" >
                        
                        </div>
                               </div>
                                        
                                    	
                                    <div class="control-group">
                                        <label class="control-label">Entregado a :</label>
                                        <div id="status-add-ent" class="controls">
                                        <select name="entrega">
                            <?php
                            $sql= mysql_query("SELECT * FROM `Empledos_Afhonda` ORDER BY `nombre-empl` ASC " ,$con); 
                            while($row = mysql_fetch_array($sql)){
                            ?>                
                            <option id="clave-empl" value="<?=$row['nombre-empl']?>"><?=$row['nombre-empl']?></option>
                            <?php } ?>    	
                                        </select>
                                            <a href="#" id="btn-add-entregas"   class="btn btn-danger" ><i class="icon-male"></i> Agregar nuevo personal</a>
                                       
                                        </div>
                                    </div>
                                    
                                                                          
               <div id="div-add-entregas" class="div-hide"> 
               	        <div class="control-group">
                                        <label class="control-label">Nuevo empleado</label>
                                        <div class="controls">
                                          <input type="text" name="nombre-empl" class="span10">
                                        </div>
                                        <label class="control-label">Puesto laboral</label>
                                        <div class="controls">
                                          <input type="text" name="puesto-empl" class="span10">
                                          <a href="#" id="send-add-ent"   class="btn btn-danger"><i class="icon-plus"></i> Agregar </a>
                                        </div>
                                        <label class="control-label" id="status"></label>
                                    </div>
                                     <div id="aprovado_ent" ></div>
                               </div>

                 
                                    
                    
                          
                                    
                                            <div class="control-group">
                                        <label class="control-label">Observaciones entrega:</label>
                                        <div class="controls">
                                          <textarea name="obs_entrega" class="span10"></textarea>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="control-group">
                                        <label class="control-label">Observaciones recepción:</label>
                                        <div class="controls">
                                          <textarea name="obs_recepcion" class="span10"></textarea>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                    	 <div class="controls">
                                         <button id="btn-send" class="btn btn-large btn-danger" type="button">Capturar</button>
                                         </div>
                                    </div>
                                    
                                   
                               <!--    <div class="control-group">
                                        <label class="control-label">Colorpicker HEX field</label>
                                        <div class="controls">
                                          <input id="hexColorPicker" type="text" class="span10">
                                        </div>
                                        </div> 
                                    <div class="control-group">
                                        <label class="control-label">Colorpickex RGB field</label>
                                        <div class="controls">
                                          <input id="rgbColorPicker" type="text" class="span10">
                                        </div>
                                    </div>
                           
                                    <div class="control-group">
                                        <label class="control-label">Checkbox inputs</label>
                                        <div class="controls">
                                            <input id="demo_box_1" class="css-checkbox" type="checkbox" checked/>
                                            <label for="demo_box_1" class="css-label">First checkbox input</label>
                                            <input id="demo_box_2" class="css-checkbox" type="checkbox"/>
                                            <label for="demo_box_2" class="css-label">Second checkbox input</label>
                                            <input id="demo_box_3" class="css-checkbox" type="checkbox"/>
                                            <label for="demo_box_3" class="css-label">Third checkbox input</label>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Radio inputs</label>
                                        <div class="controls">
                                            <input id="demo_box_4" class="css-radio" name="myRadio" type="radio" checked/>
                                            <label for="demo_box_4" class="css-label radio">First radio input</label>
                                            <input id="demo_box_5" class="css-radio" name="myRadio" type="radio"/>
                                            <label for="demo_box_5" class="css-label radio">Second radio input</label>
                                            <input id="demo_box_6" class="css-radio" name="myRadio" type="radio"/>
                                            <label for="demo_box_6" class="css-label radio">Third radio input</label>
                                        </div>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                        <!-- ==================== END OF OTHER ELEMENTS FLOATING BOX ==================== -->
                    </div>
                </div>
                <!-- ==================== END OF COMMON ELEMENTS ROW ==================== -->

            </div>
            <!-- ==================== END OF WIDGETS CONTAINER ==================== -->
        </div>
        <!-- ==================== END OF PAGE CONTENT ==================== -->
        
        
        
      
        <script src="js/vendor/bootstrap-slider.js"></script>                   <!-- bootstrap slider plugin -->
        <script src="js/vendor/jquery.sparkline.min.js"></script>               <!-- small charts plugin -->
        <script src="js/vendor/bootstrap-multiselect.js"></script>              <!-- multiselect plugin -->
        <script src="js/vendor/bootstrap-datepicker.js"></script>               <!-- datepicker plugin -->
        <script src="js/vendor/bootstrap-colorpicker.js"></script>              <!-- colorpicker plugin -->

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/thekamarel.min.js"></script>                            <!-- main project js file -->
        
        

      
        <script src="js/vendor/jquery.tablesorter.min.js"></script>             <!-- tablesorter plugin -->
        
        <!-- tablesorter plugin / widgets extension <script src="js/vendor/jquery.tablesorter.widgets.min.js"></script> -->
        <!-- tablesorter plugin / pager extension <script src="js/vendor/jquery.tablesorter.pager.min.js"></script>  -->

        <script src="js/vendor/bootstrap-editable.min.js"></script>             <!-- editable fields plugin -->
        

                <script>
        // add parser through the tablesorter addParser method
        $.tablesorter.addParser({
            id: 'checkbox',
            is: function(s) {
                return false;
            },
            format: function(s, table, cell, cellIndex) {
                var $t = $(table), $c = $(cell), c,

                // resort the table after the checkbox status has changed
                resort = false;

                if (!$t.hasClass('hasCheckbox')) {
                    $t
                    .addClass('hasCheckbox')
                    // make checkbox in header set all others
                    .find('thead th:eq(' + cellIndex + ') input[type=checkbox]')
                    .bind('change', function(){
                        c = this.checked;
                        $t.find('tbody tr:visible td:nth-child(' + (cellIndex + 1) + ') input').each(function(){
                          this.checked = c;
                          $(this).trigger('change');
                        });
                    })
                    .bind('mouseup', function(){
                        return false;
                    });
                    $t.find('tbody tr').each(function(){
                        $(this).find('td:eq(' + cellIndex + ')').find('input[type=checkbox]').bind('change', function(){
                            $t.trigger('updateCell', [$(this).closest('td')[0], resort]);
                        });
                    });
                }
                // return 1 for true, 2 for false, so true sorts before false
                c = ($c.find('input[type=checkbox]')[0].checked) ? 1 : 2;
                $c.closest('tr')[ c === 1 ? 'addClass' : 'removeClass' ]('checked');
                return c;
            },
            type: 'numeric'
        });

        $(function() {
            $('#tablesorterDemo').tablesorter({
                sortList: [[1,0]],
                widgets: ['zebra', 'stickyHeaders'],
                headers: {
                    0: {
                        sorter: 'checkbox'
                    },
                }
            });

            /*=============================================================================================
                 ============================== LOAD TABLESORTER PAGER SETTINGS ===============================
                 =============================================================================================*/


                /*=============================================================================================
                 ======================================= LOAD TABLESORTER =====================================
                 =============================================================================================*/

                $("#membersTable").tablesorter({

                    headers: {
                        0: { sorter: false, filter: false },
                        1: { sorter: 'text' },
                        2: { sorter: 'shortDate' },
                        3: { sorter: 'text' },
                        4: { sorter: 'text' },
                        5: { sorter: false, filter: false }
                    },

                    dateFormat: 'uk',

                    // sort on the first column and third column in ascending order
                    sortList: [[1,0]],

                    // hidden filter input/selects will resize the columns, so try to minimize the change
                    widthFixed : true,

                    // initialize zebra striping and filter widgets
                    widgets: ["zebra", "filter"],

                    widgetOptions : {

                        // If there are child rows in the table (rows with class name from "cssChildRow" option)
                        // and this option is true and a match is found anywhere in the child row, then it will make that row
                        // visible; default is false
                        filter_childRows : false,

                        // if true, a filter will be added to the top of each table column;
                        // disabled by using -> headers: { 1: { filter: false } } OR add class="filter-false"
                        // if you set this to false, make sure you perform a search using the second method below
                        filter_columnFilters : true,

                        // css class applied to the table row containing the filters & the inputs within that row
                        filter_cssFilter : 'tablesorter-filter',

                        // add custom filter functions using this option
                        // see the filter widget custom demo for more specifics on how to use this option
                        filter_functions : null,

                        // if true, filters are collapsed initially, but can be revealed by hovering over the grey bar immediately
                        // below the header row. Additionally, tabbing through the document will open the filter row when an input gets focus
                        filter_hideFilters : true,

                        // Set this option to false to make the searches case sensitive
                        filter_ignoreCase : true,

                        // Delay in milliseconds before the filter widget starts searching; This option prevents searching for
                        // every character while typing and should make searching large tables faster.
                        filter_searchDelay : 300,

                        // Set this option to true to use the filter to find text from the start of the column
                        // So typing in "a" will find "albert" but not "frank", both have a's; default is false
                        filter_startsWith : false,

                        // Filter using parsed content for ALL columns
                        // be careful on using this on date columns as the date is parsed and stored as time in seconds
                        filter_useParsedData : false

                    }

                })

                /*=============================================================================================
                 ================================== LOAD PAGER TO TABLESORTER =================================
                 =============================================================================================*/
                
          


                /*=============================================================================================
                 ================================ SEARCH FUNCTION FOR WHOLE TABLE =============================
                 =============================================================================================*/

                // Write on keyup event of keyword input element
                $("#memberSearch").keyup(function(){
                    // When value of the input is not blank
                    if( $(this).val() != "")
                    {
                        // Show only matching TR, hide rest of them
                        $("#membersTable tbody>tr").hide();
                        $("#membersTable td:contains-ci('" + $(this).val() + "')").parent("tr").show();
                    }
                    else
                    {
                        // When there is no input or clean again, show everything back
                        $("#membersTable tbody>tr").show();
                    }
                });

                /*=============================================================================================
                 ======================== ADD ROLLER GRIP TO TABLESORTER HIDEME ROW ===========================
                 =============================================================================================*/

                $('.tablesorter-filter-row td:first').append('<div class="tableFilterRoller"></div>');

                /*=============================================================================================
                 ======================= ADD MOREOPTIONS ICON TO HIDDEN ROW WITH FILTERS ======================
                 =============================================================================================*/

                $('.tablesorter-filter-row td').not(':first').not(':last').append('<i class="icon-play-circle moreOptions pull-right"></i>');

                /*=============================================================================================
                 ================================ TABLE ROW INFO / EDIT / DELETE ICON ACTIONS =================
                 =============================================================================================*/


                var showMemberIcon = $('i.info').parent(),
                    editMemberIcon = $('i.edit').parent(),
                    deleteMemberIcon = $('i.delete').parent();

                $(showMemberIcon).tooltip({
                    title: 'View member profile'
                });

                $(editMemberIcon).tooltip({
                    title: 'Edit member profile'
                });

                $(deleteMemberIcon).tooltip({
                    title: 'Delete member'
                });

                $('i.info, i.edit, i.delete').parent().hover(function () {
                    $(this).children().stop().animate({
                        opacity: 1
                    }, 200);
                }, function() {
                    $(this).children().stop().animate({
                        opacity: .7
                    }, 200);
                });

                /*=============================================================================================
                 ===================================== SET FIELDS EDITABLE ====================================
                 =============================================================================================*/

                $('#membersTable a.username').editable({
                    type: 'text',
                    name: 'username',
                    url: '/post',
                    title: 'Enter username',
                    placement: 'right'
                });

                $('#membersTable a.registrationDate').editable({
                    type: 'date',
                    viewformat: 'dd/mm/yyyy',
                    name: 'registrationDate',
                    url: '/post',
                    title: 'Enter date of registration'
                });

                $('#membersTable a.memberGroup').editable({
                    type: 'select',
                    source: [{value: 1, text: 'admin'}, {value: 2, text: 'editor'}, {value: 3, text: 'author'}, {value: 4, text: 'user'}, {value: 5, text: 'second technician'}],
                    name: 'memberGroup',
                    url: '/post',
                    title: 'Choose a role'
                }).click(function(){
                    $(this).next().find('select').multiselect();
                });

                $('#membersTable a.memberStatus').editable({
                    type: 'select',
                    source: [{value: 'active', text: 'active'}, {value: 'inactive', text: 'inactive'}, {value: 'banned', text: 'banned'}, {value: 'pending', text: 'pending'}],
                    name: 'memberStatus',
                    url: '/post',
                    title: 'Choose a status',
                    success: function (){
                        var label = $(this).parent() // define variable for link parent
                        selectVal = $(this).next().find('select').val(); // define variable for selected value


                        $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                    }
                }).click(function(){
                    $(this).next().find('select').multiselect();
                });
        });
        </script>
 
 
        
        
        <script>
        $(function () {

            $('#uniqueSelect').multiselect();
            $('#uniqueSelect_origen').multiselect();
            $('#uniqueSelect_entrega').multiselect();
            $('#uniqueSelect_hora').multiselect();
            $('#uniqueSelect_minuto').multiselect();

            $('#multipleSelect').multiselect({
                buttonText: function(options, select) {
                    if (options.length == 0) {
                        return 'None selected <b class="caret"></b>';
                    }
                    else if (options.length > 1) {
                        return options.length + ' selected <b class="caret"></b>';
                    }
                    else {
                        var selected = '';
                        options.each(function() {
                            selected += $(this).text() + ', ';
                        });
                        return selected.substr(0, selected.length -2) + ' <b class="caret"></b>';
                    }
                },
            });

            $('#datepickerField').datepicker();

            $('#hexColorPicker').colorpicker();

            $('#rgbColorPicker').colorpicker({
                format: 'rgb'
            });

            $( "#fileselectbutton" ).click(function(e){
                $( "#inputFile" ).trigger("click");
            });  

            $( "#inputFile" ).change(function(e){
                var val = $(this).val();
                var file = val.split(/[\\/]/);
                $( "#filename" ).val(file[file.length-1]);
            });
            
            
            

        })
        
        </script>
        
        
        <script>
        $("select#uniqueSelect_gps_docs").change(function(){
        			
        $('#div-gps-dcos').show("slow");			
		
		var select_gps_docs = $("select#uniqueSelect_gps_docs option:selected").val();
		
		
		     $('#div-gps-dcos').html('<div class="load"><p class="text-loader">Insertando nuevo documento</p><img src="img/loading.GIF"/></div>');
     var dataString = $('#form_get_doc').serialize();
       // alert('Datos serializados: '+dataString);
        $.ajax({
            type: "POST",
            url: "get_doc.php?gps_dcos="+select_gps_docs ,
            data: dataString,
            success: function(data) { $('#div-gps-dcos').fadeIn(1000).html(data) }            
              });


	    });
        </script>


        <script>
        $("select#uniqueSelect_origen").change(function(){
        			
        $('#div-origen').show("slow");			
		
		var select_origen = $("select#uniqueSelect_origen option:selected").val();

		switch (select_origen)
{
	
case "Grupo/Integrante":

  $('.origen-label').html("");  
  $('.ctrl-origen').html(""); 

  $('.origen-label').append("Grupo/Integrante");
  $('.ctrl-origen').append('<input type="text" name="numero-ori-docto" class="span10">');
  
  
  break;
  
  
case "Contrato inicial":

  
  $('.origen-label').html("");  
  $('.ctrl-origen').html(""); 
  
   $('.origen-label').append("Contrato inicial"); 
   $('.ctrl-origen').append('<input type="text" name="numero-ori-docto" class="span10">');

  
  break;
  
case "Proveedor":

  $('.origen-label').html("");  
  $('.ctrl-origen').html(""); 
  
  $('.origen-label').append("Proveedor"); 
  $('.ctrl-origen').append('<input type="text" name="numero-ori-docto" class="span10">');
  
  break;
  
  
case "Ins. no gubernamentales":

  $('.origen-label').html("");  
  $('.ctrl-origen').html(""); 

  $('.origen-label').append("Ins. no gubernamentales"); 
  $('.ctrl-origen').append('<input type="text" name="numero-ori-docto" class="span10">');
  
  break; 
  
  
  

case "Dependencias gubernamentales":

  $('.origen-label').html("");  
  $('.ctrl-origen').html(""); 

  $('.origen-label').append("Dependencias gubernamentales"); 
  $('.ctrl-origen').append('<input type="text" name="numero-ori-docto" class="span10">');


  break; 
  
   
case "Distribuidores afhonda":

  $('.origen-label').html("");  
  $('.ctrl-origen').html(""); 

  $('.origen-label').append("Distribuidores afhonda"); 
  $('.ctrl-origen').append('<input type="text" name="numero-ori-docto" class="span10">');


  break; 



case "Otros origenes de datos":

  $('.origen-label').html("");  
  $('.ctrl-origen').html(""); 
  
  $('.origen-label').append("Otros origenes de datos"); 
  $('.ctrl-origen').append('<input type="text" name="numero-ori-docto" class="span10">');
  
  break;   

  
  default:
 $('#div-origen').hide("slow") ;	
  
}
		

		return;
	});
        </script>
        
        
        
                <script>
        
$(function() {
	
     $( "#send-add-empl" ).click(function(e) {
   	 e.preventDefault();
     $('#status-add-empl').html('<div class="load"><p class="text-loader">Insertando nuevo documento</p><img src="img/ajax-loader-small.gif"/></div>');
     var dataString = $('#form_get_doc').serialize();
       // alert('Datos serializados: '+dataString);
        $.ajax({
            type: "POST",
            url: "get_doc.php?send_add_empl=1",
            data: dataString,
            success: function(data) { $('#status-add-empl').fadeIn(1000).html(data) }            
              });
              
              
              
              
               $("#nombre_empl").val(""); 
               $("#puesto_empl").val("");

              $('#aprovado_recibido').append('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>información guardada correctamente</strong></div>'); 
             
              setTimeout(function() {  $('#aprovado_recibido').fadeOut(); }, 9000);
              
        });
        
        
        
             $( "#send-add-concep" ).click(function(e) {
   	 e.preventDefault();
     $('#status-add-concep').html('<div class="load"><p class="text-loader">Insertando nuevo documento</p><img src="img/ajax-loader-small.gif"/></div>');
     var dataString = $('#form_get_doc').serialize();
       // alert('Datos serializados: '+dataString);
        $.ajax({
            type: "POST",
            url: "get_doc.php?send_add_concep=1",
            data: dataString,
            success: function(data) { $('#status-add-concep').fadeIn(1000).html(data) }            
              });
              
               $('#aprovado_concepto').append('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Concepto guardado correctamente</strong></div>'); 
             
               $("#nombre_empl").val(""); 
               $("#puesto_empl").val("");
             
              setTimeout(function() {  $('#aprovado_concepto').fadeOut(); }, 9000);
        });
        
             $( "#send-add-ent" ).click(function(e) {
   	 e.preventDefault();
     $('#status-add-ent').html('<div class="load"><p class="text-loader">Insertando nuevo documento</p><img src="img/ajax-loader-small.gif"/></div>');
     var dataString = $('#form_get_doc').serialize();
       // alert('Datos serializados: '+dataString);
        $.ajax({
            type: "POST",
            url: "get_doc.php?send_add_empl=1",
            data: dataString,
            success: function(data) { $('#status-add-ent').fadeIn(1000).html(data) }            
              });
              
              
              
              
               $("#nombre_empl").val(""); 
               $("#puesto_empl").val("");

              $('#aprovado_ent').append('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>información guardada correctamente</strong></div>'); 
             
              setTimeout(function() {  $('#aprovado_ent').fadeOut(); }, 9000);
              
        });
        
   
  $( "#btn-send" ).click(function(e) {
  	
 console.log( window.arreglo_s );
 alert(window.arreglo_s);
  	
   	 e.preventDefault();
   	 $('#div-send').show("slow");	
     $('#div-send').html('<div class="load"><p class="text-loader">Insertando nuevo documento</p><img src="img/loading.GIF"/></div>');
     var dataString = $('#form_get_doc').serialize() + '&array='+window.arreglo_s ;
      alert('Datos serializados: '+dataString);
        $.ajax({
            type: "POST",
            url: "get_doc_send.php?send=1",
            data: dataString,
            success: function(data) { $('#div-send').fadeIn(1000).html(data) }            
              });
        });
        
    

        
/*           
     $( "#btn-send" ).click(function(e) {
 	
   	 e.preventDefault();
   	 
   	// $(window.top).find('#form_get_doc_s');
   	 
   	 //$( "#div-gps-dcos" ).contents().find(arreglo_status);
   	 
   	// console.log( arreglo_status );
   	 

     var dataString = $('#form_get_doc').serialize() + '&' + $.param(arreglo_status);
    $('#div-send').show("slow");	
     $('#div-send').html('<div class="load"><p class="text-loader">Insertando nuevo documento</p><img src="img/loading.GIF"/></div>');
    // alert('Datos serializados: '+dataString);
     
   
        $.ajax({
                 
            type: "POST",
            url: "get_doc.php?send=1",
            data: {array:arreglo_status} ,
          
            success: function(data) { $('#div-send').fadeIn(1000).html(data) }   
                     
              });
        });
        
        */


$("#btn-add-empl" ).click(function() {
$('#div-add-empl').toggle("slow") ;
});

$("#btn-add-concep" ).click(function() {
$('#div-add-concep').toggle("slow") ;
});

$( "#btn-add-entregas" ).click(function() {
$('#div-add-entregas').toggle("slow") ;
});



});
       </script>
    </body>
</html>

