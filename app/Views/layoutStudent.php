<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Learning Paths</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="<?= base_url('vendor/spinkit.css')?>"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="<?= base_url('vendor/perfect-scrollbar.css')?>"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="<?= base_url('css/material-icons.css')?>"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="<?= base_url('css/fontawesome.css')?>"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="<?= base_url('css/preloader.css')?>"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="<?= base_url('css/app.css')?>"
              rel="stylesheet">

    </head>

    <body class="layout-compact layout-compact">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Drawer Layout -->

        <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">

                <!-- Header -->

                <!-- Navbar -->

                <div class="navbar navbar-expand pr-0 navbar-light border-bottom-2"
                     id="default-navbar"
                     data-primary>

                    <!-- Navbar Toggler -->

                    <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0"
                            type="button"
                            data-toggle="sidebar">
                        <span class="material-icons">short_text</span>
                    </button>

                    <!-- // END Navbar Toggler -->

                    <!-- Navbar Brand -->

                    <a href="index.html"
                       class="navbar-brand mr-16pt d-lg-none">

                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                            <span class="avatar-title rounded bg-primary"><img src="<?=base_url('images/illustration/student/128/white.svg')?>"
                                     alt="logo"
                                     class="img-fluid" /></span>

                        </span>

                        <span class="d-none d-lg-block">Luma</span>
                    </a>

                    <!-- // END Navbar Brand -->

                    <span class="d-none d-md-flex align-items-center mr-16pt">

                        <span class="avatar avatar-sm mr-12pt">

                            <span class="avatar-title rounded navbar-avatar"><i class="material-icons">opacity</i></span>

                        </span>

                        <small class="flex d-flex flex-column">
                            <strong class="navbar-text-100">Experience IQ</strong>
                            <span class="navbar-text-50">2,300 points</span>
                        </small>
                    </span>

                    <!-- Navbar Search -->

                    <form class="search-form navbar-search d-none d-md-flex mr-16pt"
                          action="index.html">
                        <button class="btn"
                                type="submit"><i class="material-icons">search</i></button>
                        <input type="text"
                               class="form-control"
                               placeholder="Search ...">
                    </form>

                    <!-- // END Navbar Search -->

                    <div class="flex"></div>

                    <!-- Switch Layout -->

                    <a href="../App_Layout/student-paths.html"
                       class="navbar-toggler navbar-toggler-custom align-items-center justify-content-center d-none d-lg-flex"
                       data-toggle="tooltip"
                       data-title="Switch to Vertical App Layout"
                       data-placement="bottom"
                       data-boundary="window">
                        <span class="material-icons">swap_horiz</span>
                    </a>

                    <!-- // END Switch Layout -->

                    <!-- Navbar Menu -->

                    <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">

                        <!-- Notifications dropdown -->
                        <div class="nav-item dropdown dropdown-notifications dropdown-xs-down-full"
                             data-toggle="tooltip"
                             data-title="Messages"
                             data-placement="bottom"
                             data-boundary="window">
                            <button class="nav-link btn-flush dropdown-toggle"
                                    type="button"
                                    data-toggle="dropdown"
                                    data-caret="false">
                                <i class="material-icons icon-24pt">mail_outline</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar
                                     class="position-relative">
                                    <div class="dropdown-header"><strong>Messages</strong></div>
                                    <div class="list-group list-group-flush mb-0">

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 minutes ago</small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <img src="<?=base_url('images/people/110/woman-5.jpg')?>"
                                                         alt="people"
                                                         class="avatar-img rounded-circle">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">Michelle</strong>
                                                    <span class="text-black-70">Clients loved the new design.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 minutes ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <img src="<?=base_url('images/people/110/woman-5.jpg')?>"
                                                         alt="people"
                                                         class="avatar-img rounded-circle">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">Michelle</strong>
                                                    <span class="text-black-70">🔥 Superb job..</span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // END Notifications dropdown -->

                        <!-- Notifications dropdown -->
                        <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full"
                             data-toggle="tooltip"
                             data-title="Notifications"
                             data-placement="bottom"
                             data-boundary="window">
                            <button class="nav-link btn-flush dropdown-toggle"
                                    type="button"
                                    data-toggle="dropdown"
                                    data-caret="false">
                                <i class="material-icons">notifications_none</i>
                                <span class="badge badge-notifications badge-accent">2</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar
                                     class="position-relative">
                                    <div class="dropdown-header"><strong>System notifications</strong></div>
                                    <div class="list-group list-group-flush mb-0">

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">3 minutes ago</small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 hours ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-primary">group_add</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">Adrian. D</strong>
                                                    <span class="text-black-70">Wants to join your private group.</span>
                                                </span>
                                            </span>
                                        </a>

                                        <a href="javascript:void(0);"
                                           class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">1 day ago</small>

                                            </span>
                                            <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-warning">storage</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your deploy was successful.</span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // END Notifications dropdown -->

                        <div class="nav-item dropdown">
                            <a href="#"
                               class="nav-link d-flex align-items-center dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">

                                <span class="avatar avatar-sm mr-8pt2">

                                    <span class="avatar-title rounded-circle bg-primary"><i class="material-icons">account_box</i></span>

                                </span>

                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header"><strong>Account</strong></div>
                                <a class="dropdown-item"
                                   href="edit-account.html">Edit Account</a>
                                <a class="dropdown-item"
                                   href="billing.html">Billing</a>
                                <a class="dropdown-item"
                                   href="billing-history.html">Payments</a>
                                <a class="dropdown-item"
                                   href="login.html">Logout</a>
                            </div>
                        </div>
                    </div>

                    <!-- // END Navbar Menu -->

                </div>

                <!-- // END Navbar -->

                <?= $this->renderSection("contenido"); ?>

                <!-- Footer -->

                <div class="bg-white border-top-2 mt-auto">
                    <div class="container page__container page-section d-flex flex-column">
                        <p class="text-70 brand mb-24pt">
                            <img class="brand-icon"
                                 src="<?=base_url('images/logo/black-70@2x.png')?>"
                                 width="30"
                                 alt="Luma"> SAE
                        </p>
                        <!--<p class="measure-lead-max text-50 small mr-8pt">Luma is a beautifully crafted user interface for modern Education Platforms, including Courses & Tutorials, Video Lessons, Student and Teacher Dashboard, Curriculum Management, Earnings and Reporting, ERP, HR, CMS, Tasks, Projects, eCommerce and more.</p>-->
                        <p class="mb-8pt d-flex">
                            <a href=""
                               class="text-70 text-underline mr-8pt small">Terms</a>
                            <a href=""
                               class="text-70 text-underline small">Privacy policy</a>
                        </p>
                        <p class="text-50 small mt-n1 mb-0">Copyright 2019 &copy; All rights reserved.</p>
                    </div>
                </div>

                <!-- // END Footer -->

            </div>

            <!-- // END drawer-layout__content -->

            <!-- drawer -->
            <div class="mdk-drawer js-mdk-drawer layout-compact__drawer"
                 id="default-drawer">
                <div class="mdk-drawer__content js-sidebar-mini"
                     data-responsive-width="992px"
                     data-layout="compact">

                    <div class="sidebar sidebar-mini sidebar-dark-pickled-bluewood sidebar-left d-flex flex-column">

                        <!-- Brand -->
                        <a href="index.html"
                           class="sidebar-brand p-0 navbar-height d-flex justify-content-center">

                            <span class="avatar avatar-sm ">

                                <span class="avatar-title rounded bg-primary"><img src="<?=base_url('images/illustration/student/128/white.svg')?>"
                                         class="img-fluid"
                                         alt="logo" /></span>

                            </span>

                        </a>

                        <div class="flex d-flex flex-column justify-content-start"
                             data-perfect-scrollbar>
                            <ul class="nav flex-shrink-0 flex-nowrap flex-column sidebar-menu mb-0 sm-item-bordered js-sidebar-mini-tabs"
                                role="tablist">
                                <li class="sidebar-menu-item active"
                                    data-title="Student"
                                    data-placement="right"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_student"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_student"
                                       aria-selected="true">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i>
                                        <span class="sidebar-menu-text">Student</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item"
                                    data-title="Instructor"
                                    data-placement="right"
                                    data-container="body"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_instructor"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_instructor"
                                       aria-selected="false">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">format_shapes</i>
                                        <span class="sidebar-menu-text">Instructor</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item "
                                    data-title="Apps"
                                    data-placement="right"
                                    data-container="body"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_apps"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_apps">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">apps</i>
                                        <span class="sidebar-menu-text">Apps</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item "
                                    data-title="Account"
                                    data-placement="right"
                                    data-container="body"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_account"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_account">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i>
                                        <span class="sidebar-menu-text">Account</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item "
                                    data-title="Messaging"
                                    data-placement="right"
                                    data-container="body"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_messaging"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_messaging">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">message</i>
                                        <span class="sidebar-menu-text">Messaging</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item"
                                    data-title="Components"
                                    data-placement="right"
                                    data-container="body"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_components"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_components">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                        <span class="sidebar-menu-text">Components</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item"
                                    data-title="Layouts"
                                    data-placement="right"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_layouts"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_layouts"
                                       aria-selected="false">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                        <span class="sidebar-menu-text">Layouts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <ul class="nav flex-column sidebar-menu align-items-center mb-12pt js-sidebar-mini-tabs"
                            role="tablist">
                            <li class="sidebar-account"
                                style="width: 40px;">
                                <a href="#sm_account_1"
                                   class="p-4pt d-flex align-items-center justify-content-center"
                                   data-toggle="tab"
                                   role="tab"
                                   aria-controls="sm_account_1"
                                   aria-selected="true">
                                    <img width="32"
                                         height="32"
                                         class="rounded-circle"
                                         src="<?=base_url('images/people/50/guy-3.jpg')?>"
                                         alt="account" />
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div class="sidebar sidebar-light sidebar-left flex sidebar-secondary pt-16pt"
                         data-perfect-scrollbar>

                        <div class="tab-content">

                            <div class="tab-pane"
                                 id="sm_account_1">
                                <div class="sidebar-heading">Account</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account.html">
                                            <span class="sidebar-menu-text">Edit Account</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing.html">Billing</a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing-history.html">Payments</a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane "
                                 id="sm_apps">
                                <div class="sidebar-heading">Apps</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button js-sidebar-collapse"
                                           data-toggle="collapse"
                                           href="#enterprise_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                            Enterprise
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="enterprise_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="erp-dashboard.html">
                                                    <span class="sidebar-menu-text">ERP Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="crm-dashboard.html">
                                                    <span class="sidebar-menu-text">CRM Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="hr-dashboard.html">
                                                    <span class="sidebar-menu-text">HR Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="employees.html">
                                                    <span class="sidebar-menu-text">Employees</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="staff.html">
                                                    <span class="sidebar-menu-text">Staff</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="leaves.html">
                                                    <span class="sidebar-menu-text">Leaves</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button disabled"
                                                   href="departments.html">
                                                    <span class="sidebar-menu-text">Departments</span>
                                                </a>
                                            </li>
                                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="documents.html">
    <span class="sidebar-menu-text">Documents</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="attendance.html">
    <span class="sidebar-menu-text">Attendance</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="recruitment.html">
    <span class="sidebar-menu-text">Recruitment</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="payroll.html">
    <span class="sidebar-menu-text">Payroll</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="training.html">
    <span class="sidebar-menu-text">Training</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="employee-profile.html">
    <span class="sidebar-menu-text">Employee Profile</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="accounting.html">
    <span class="sidebar-menu-text">Accounting</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="inventory.html">
    <span class="sidebar-menu-text">Inventory</span>
  </a>
</li> -->
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#community_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                                            Community
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="community_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="teachers.html">

                                                    <span class="sidebar-menu-text">Browse Teachers</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="student-profile.html">

                                                    <span class="sidebar-menu-text">Student Profile</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="teacher-profile.html">

                                                    <span class="sidebar-menu-text">Teacher Profile</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="blog.html">

                                                    <span class="sidebar-menu-text">Blog</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="blog-post.html">

                                                    <span class="sidebar-menu-text">Blog Post</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="faq.html">
                                                    <span class="sidebar-menu-text">FAQ</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="help-center.html">
                                                    <!--  -->
                                                    <span class="sidebar-menu-text">Help Center</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="discussions.html">
                                                    <span class="sidebar-menu-text">Discussions</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="discussion.html">
                                                    <span class="sidebar-menu-text">Discussion Details</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="discussions-ask.html">
                                                    <span class="sidebar-menu-text">Ask Question</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#productivity_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                            Productivity
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="productivity_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="projects.html">
                                                    <span class="sidebar-menu-text">Projects</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="tasks-board.html">
                                                    <span class="sidebar-menu-text">Tasks Board</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="tasks-list.html">
                                                    <span class="sidebar-menu-text">Tasks List</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button disabled"
                                                   href="kanban.html">
                                                    <span class="sidebar-menu-text">Kanban</span>
                                                </a>
                                            </li>
                                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="task-details.html">
    <span class="sidebar-menu-text">Task Details</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="team-members.html">
    <span class="sidebar-menu-text">Team Members</span>
  </a>
</li> -->
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#cms_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                            CMS
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="cms_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="cms-dashboard.html">
                                                    <span class="sidebar-menu-text">CMS Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="posts.html">
                                                    <span class="sidebar-menu-text">Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#ecommerce_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                                            eCommerce
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="ecommerce_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ecommerce.html">
                                                    <span class="sidebar-menu-text">Shop Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button disabled"
                                                   href="edit-product.html">
                                                    <span class="sidebar-menu-text">Edit Product</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane  fade active show "
                                 id="sm_student">
                                <div class="sidebar-heading">Student</div>
                                <ul class="sidebar-menu">

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="index.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                            <span class="sidebar-menu-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="courses.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                            <span class="sidebar-menu-text">Browse Courses</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="paths.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                            <span class="sidebar-menu-text">Browse Paths</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-dashboard.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                            <span class="sidebar-menu-text">Student Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-my-courses.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                                            <span class="sidebar-menu-text">My Courses</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button"
                                           href="student-paths.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">timeline</span>
                                            <span class="sidebar-menu-text">My Paths</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-path.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">change_history</span>
                                            <span class="sidebar-menu-text">Path Details</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-course.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
                                            <span class="sidebar-menu-text">Course Preview</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-lesson.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">panorama_fish_eye</span>
                                            <span class="sidebar-menu-text">Lesson Preview</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-take-course.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">class</span>
                                            <span class="sidebar-menu-text">Take Course</span>
                                            <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-take-lesson.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                                            <span class="sidebar-menu-text">Take Lesson</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-take-quiz.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
                                            <span class="sidebar-menu-text">Take Quiz</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-quiz-results.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                                            <span class="sidebar-menu-text">My Quizzes</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-quiz-result-details.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">live_help</span>
                                            <span class="sidebar-menu-text">Quiz Result</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-path-assessment.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                                            <span class="sidebar-menu-text">Skill Assessment</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-path-assessment-result.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assignment_turned_in</span>
                                            <span class="sidebar-menu-text">Skill Result</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-pane "
                                 id="sm_instructor">
                                <div class="sidebar-heading">Instructor</div>
                                <ul class="sidebar-menu">

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-dashboard.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                            <span class="sidebar-menu-text">Instructor Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-courses.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                                            <span class="sidebar-menu-text">Manage Courses</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-quizzes.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">help</span>
                                            <span class="sidebar-menu-text">Manage Quizzes</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-earnings.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">trending_up</span>
                                            <span class="sidebar-menu-text">Earnings</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-statement.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">receipt</span>
                                            <span class="sidebar-menu-text">Statement</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-edit-course.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
                                            <span class="sidebar-menu-text">Edit Course</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-edit-quiz.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                                            <span class="sidebar-menu-text">Edit Quiz</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-pane "
                                 id="sm_account">
                                <div class="sidebar-heading">Account</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="pricing.html">
                                            <span class="sidebar-menu-text">Pricing</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="login.html">
                                            <span class="sidebar-menu-text">Login</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="signup.html">
                                            <span class="sidebar-menu-text">Signup</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="signup-payment.html">
                                            <span class="sidebar-menu-text">Payment</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="reset-password.html">
                                            <span class="sidebar-menu-text">Reset Password</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="change-password.html">
                                            <span class="sidebar-menu-text">Change Password</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account.html">
                                            <span class="sidebar-menu-text">Edit Account</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account-profile.html">
                                            <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account-notifications.html">
                                            <span class="sidebar-menu-text">Email Notifications</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account-password.html">
                                            <span class="sidebar-menu-text">Account Password</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing.html">
                                            <span class="sidebar-menu-text">Subscription</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing-upgrade.html">
                                            <span class="sidebar-menu-text">Upgrade Account</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing-payment.html">
                                            <span class="sidebar-menu-text">Payment Information</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing-history.html">
                                            <span class="sidebar-menu-text">Payment History</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing-invoice.html">
                                            <span class="sidebar-menu-text">Invoice</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane "
                                 id="sm_messaging">
                                <div class="sidebar-heading">Messaging</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="messages.html">
                                            <span class="sidebar-menu-text">Messages</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="email.html">
                                            <span class="sidebar-menu-text">Email</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane"
                                 id="sm_components">
                                <div class="sidebar-heading">UI Components</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#components_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                                            Components
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="components_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-buttons.html">
                                                    <span class="sidebar-menu-text">Buttons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-avatars.html">
                                                    <span class="sidebar-menu-text">Avatars</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-forms.html">
                                                    <span class="sidebar-menu-text">Forms</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-loaders.html">
                                                    <span class="sidebar-menu-text">Loaders</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-tables.html">
                                                    <span class="sidebar-menu-text">Tables</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-cards.html">
                                                    <span class="sidebar-menu-text">Cards</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-icons.html">
                                                    <span class="sidebar-menu-text">Icons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-tabs.html">
                                                    <span class="sidebar-menu-text">Tabs</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-alerts.html">
                                                    <span class="sidebar-menu-text">Alerts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-badges.html">
                                                    <span class="sidebar-menu-text">Badges</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-progress.html">
                                                    <span class="sidebar-menu-text">Progress</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-pagination.html">
                                                    <span class="sidebar-menu-text">Pagination</span>
                                                </a>
                                            </li>
                                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-typography.html">
    <span class="sidebar-menu-text">Typography</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-colors.html">
    <span class="sidebar-menu-text">Colors</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-breadcrumb.html">
    <span class="sidebar-menu-text">Breadcrumb</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-accordions.html">
    <span class="sidebar-menu-text">Accordions</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-modals.html">
    <span class="sidebar-menu-text">Modals</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-chips.html">
    <span class="sidebar-menu-text">Chips</span>
  </a>
</li> -->
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button disabled"
                                                   href="">
                                                    <span class="sidebar-menu-text">Disabled</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#plugins_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                                            Plugins
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="plugins_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-charts.html">
                                                    <span class="sidebar-menu-text">Charts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-flatpickr.html">
                                                    <span class="sidebar-menu-text">Flatpickr</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-daterangepicker.html">
                                                    <span class="sidebar-menu-text">Date Range Picker</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-dragula.html">
                                                    <span class="sidebar-menu-text">Dragula</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-dropzone.html">
                                                    <span class="sidebar-menu-text">Dropzone</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-range-sliders.html">
                                                    <span class="sidebar-menu-text">Range Sliders</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-quill.html">
                                                    <span class="sidebar-menu-text">Quill</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-select2.html">
                                                    <span class="sidebar-menu-text">Select2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-nestable.html">
                                                    <span class="sidebar-menu-text">Nestable</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-fancytree.html">
                                                    <span class="sidebar-menu-text">Fancy Tree</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-maps-vector.html">
                                                    <span class="sidebar-menu-text">Vector Maps</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-sweet-alert.html">
                                                    <span class="sidebar-menu-text">Sweet Alert</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-toastr.html">
                                                    <span class="sidebar-menu-text">Toastr</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button disabled"
                                                   href="">
                                                    <span class="sidebar-menu-text">Disabled</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane"
                                 id="sm_layouts">
                                <div class="sidebar-heading">Layouts</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button"
                                           href="../Compact_App_Layout/student-paths.html">
                                            <span class="sidebar-menu-text">Compact</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Mini_App_Layout/student-paths.html">
                                            <span class="sidebar-menu-text">Mini</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Mini_Secondary_Layout/student-paths.html">
                                            <span class="sidebar-menu-text">Mini + Secondary</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../App_Layout/student-paths.html">
                                            <span class="sidebar-menu-text">App</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Boxed_App_Layout/student-paths.html">
                                            <span class="sidebar-menu-text">Boxed</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Sticky_App_Layout/student-paths.html">
                                            <span class="sidebar-menu-text">Sticky</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Fixed_Layout/student-paths.html">
                                            <span class="sidebar-menu-text">Fixed</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- // END drawer -->

        </div>

        <!-- // END Drawer Layout -->

        <!-- jQuery -->
        <script src="<?=base_url('vendor/jquery.min.js')?>"></script>

        <!-- Bootstrap -->
        <script src="<?=base_url('vendor/popper.min.js')?>"></script>
        <script src="<?=base_url('vendor/bootstrap.min.js')?>"></script>

        <!-- Perfect Scrollbar -->
        <script src="<?=base_url('vendor/perfect-scrollbar.min.js')?>"></script>

        <!-- DOM Factory -->
        <script src="<?=base_url('vendor/dom-factory.js')?>"></script>

        <!-- MDK -->
        <script src="<?=base_url('vendor/material-design-kit.js')?>"></script>

        <!-- App JS -->
        <script src="<?=base_url('js/app.js')?>"></script>

        <!-- Preloader -->
        <script src="<?=base_url('js/preloader.js')?>"></script>

        <!-- Sidebar Mini JS -->
        <script src="<?=base_url('js/sidebar-mini.js')?>"></script>
        <script>
            (function() {
                'use strict';
                // ENABLE sidebar menu tabs
                $('.js-sidebar-mini-tabs [data-toggle="tab"]').on('click', function(e) {
                    e.preventDefault()
                    $(this).tab('show')
                })
                $('.js-sidebar-mini-tabs').on('show.bs.tab', function(e) {
                    $('.js-sidebar-mini-tabs > .active').removeClass('active')
                    $(e.target).parent().addClass('active')
                })
            })()
        </script>

    </body>

</html>