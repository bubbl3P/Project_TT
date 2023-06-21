<!-- Right Icon menu Sidebar -->
<?php require_once('admin/controllers/shared/statistics.php'); ?>
<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="#search" class="main_search" title="Search..."><i class="zmdi zmdi-search"></i></a></li>
        <?php if ($user_info_nav['role_id'] != 0) : ?>
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" title="App" data-toggle="dropdown"
                   role="button"><i class="zmdi zmdi-apps"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideUp2">
                    <li class="header">App Sortcute</li>
                    <li class="body">
                        <ul class="menu app_sortcut list-unstyled">
                            <li>
                                <a href="admin.php?controller=media">
                                    <div class="icon-circle mb-2 bg-blue"><i class="zmdi zmdi-camera"></i></div>
                                    <p class="mb-0"> All Photos</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle mb-2 bg-amber"><i class="zmdi zmdi-translate"></i></div>
                                    <p class="mb-0">Translate</p>
                                </a>
                            </li>
                            <li>
                                <a href="events.html">
                                    <div class="icon-circle mb-2 bg-green"><i class="zmdi zmdi-calendar"></i></div>
                                    <p class="mb-0">Calendar</p>
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <div class="icon-circle mb-2 bg-purple"><i class="zmdi zmdi-account-calendar"></i>
                                    </div>
                                    <p class="mb-0">Contacts</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle mb-2 bg-red"><i class="zmdi zmdi-tag"></i></div>
                                    <p class="mb-0">News</p>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle mb-2 bg-grey"><i class="zmdi zmdi-map"></i></div>
                                    <p class="mb-0">Maps</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" title="Notifications" data-toggle="dropdown"
                   role="button"><i class="zmdi zmdi-notifications"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideUp2">
                    <li class="header">Notifications</li>
                    <li class="footer"><a href="javascript:void(0);">View All Notifications</a></li>
                </ul>
            </li>
        <?php endif; ?>
        <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i
                    class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li><a href="admin.php?controller=home&amp;action=logout" class="mega-menu" title="Log Out"><i
                    class="zmdi zmdi-power"></i></a></li>
    </ul>
</div>