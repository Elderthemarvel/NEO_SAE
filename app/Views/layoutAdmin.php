<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CRM Dashboard</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="../../public/vendor/spinkit.css"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="../../public/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="../../public/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="../../public/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="../../public/css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="../../public/css/app.css"
              rel="stylesheet">

    </head>

    <body class="layout-mini layout-mini">

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

                            <span class="avatar-title rounded bg-primary"><img src="../../public/images/illustration/student/128/white.svg"
                                     alt="logo"
                                     class="img-fluid" /></span>

                        </span>

                        <span class="d-none d-lg-block">Luma</span>
                    </a>

                    <!-- // END Navbar Brand -->

                    <span class="d-none d-md-flex align-items-center mr-16pt">

                        <span class="avatar avatar-sm mr-12pt">

                            <span class="avatar-title rounded navbar-avatar"><i class="material-icons">trending_up</i></span>

                        </span>

                        <small class="flex d-flex flex-column">
                            <strong class="navbar-text-100">Earnings</strong>
                            <span class="navbar-text-50">&dollar;12.3k</span>
                        </small>
                    </span>
                    <span class="d-none d-md-flex align-items-center mr-16pt">

                        <span class="avatar avatar-sm mr-12pt">

                            <span class="avatar-title rounded navbar-avatar"><i class="material-icons">receipt</i></span>

                        </span>

                        <small class="flex d-flex flex-column">
                            <strong class="navbar-text-100">Sales</strong>
                            <span class="navbar-text-50">264</span>
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

                    <a href="../App_Layout/crm-dashboard.html"
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
                                                    <img src="../../public/images/people/110/woman-5.jpg"
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
                                                    <img src="../../public/images/people/110/woman-5.jpg"
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

                <!-- // END Header -->

                <div class="pt-32pt">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">CRM Dashboard</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        CRM Dashboard

                                    </li>

                                </ol>

                            </div>
                        </div>

                        <div class="row"
                             role="tablist">
                            <div class="col-auto">
                                <a href=""
                                   class="btn btn-outline-secondary">New Report</a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

                <div class="container page__container">
                    <div class="page-section">

                        <div class="row mb-lg-8pt">
                            <div class="col-lg-8">

                                <div class="page-separator">
                                    <div class="page-separator__text">Overview</div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="card ">
                                            <div class="card-header pb-0 border-0 d-flex">
                                                <div class="flex">
                                                    <div class="h2 mb-0">130</div>
                                                    <p class="card-title">Contacts</p>
                                                </div>
                                                <i class="material-icons text-50">more_horiz</i>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-50 mb-16pt">

                                                    <div class="mb-4pt">
                                                        <p class="d-flex align-items-center mb-0">
                                                            <small class="flex lh-24pt">Customers</small>
                                                            <small class="lh-24pt">70</small>
                                                        </p>
                                                        <div class="progress"
                                                             style="height: 4px;">
                                                            <div class="progress-bar bg-primary"
                                                                 role="progressbar"
                                                                 style="width: 53%;"
                                                                 aria-valuenow="53"
                                                                 aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4pt">
                                                        <p class="d-flex align-items-center mb-0">
                                                            <small class="flex lh-24pt">Leads</small>
                                                            <small class="lh-24pt">21</small>
                                                        </p>
                                                        <div class="progress"
                                                             style="height: 4px;">
                                                            <div class="progress-bar bg-primary"
                                                                 role="progressbar"
                                                                 style="width: 16%;"
                                                                 aria-valuenow="16"
                                                                 aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4pt">
                                                        <p class="d-flex align-items-center mb-0">
                                                            <small class="flex lh-24pt">Opportunities</small>
                                                            <small class="lh-24pt">12</small>
                                                        </p>
                                                        <div class="progress"
                                                             style="height: 4px;">
                                                            <div class="progress-bar bg-primary"
                                                                 role="progressbar"
                                                                 style="width: 9%;"
                                                                 aria-valuenow="9"
                                                                 aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <p class="d-flex align-items-center mb-0">
                                                            <small class="flex lh-24pt">Subscribers</small>
                                                            <small class="lh-24pt">27</small>
                                                        </p>
                                                        <div class="progress"
                                                             style="height: 4px;">
                                                            <div class="progress-bar bg-primary"
                                                                 role="progressbar"
                                                                 style="width: 20%;"
                                                                 aria-valuenow="20"
                                                                 aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="text-center">
                                                    <a href=""
                                                       class="btn btn-sm btn-outline-secondary">View contacts</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="card ">
                                            <div class="card-header pb-0 border-0 d-flex">
                                                <div class="flex">
                                                    <div class="h2 mb-0">53</div>
                                                    <p class="card-title">Companies</p>
                                                </div>
                                                <i class="material-icons text-50">more_horiz</i>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-50 mb-16pt">

                                                    <div class="mb-4pt">
                                                        <p class="d-flex align-items-center mb-0">
                                                            <small class="flex lh-24pt">Customers</small>
                                                            <small class="lh-24pt">20</small>
                                                        </p>
                                                        <div class="progress"
                                                             style="height: 4px;">
                                                            <div class="progress-bar bg-primary"
                                                                 role="progressbar"
                                                                 style="width: 37%;"
                                                                 aria-valuenow="37"
                                                                 aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4pt">
                                                        <p class="d-flex align-items-center mb-0">
                                                            <small class="flex lh-24pt">Leads</small>
                                                            <small class="lh-24pt">12</small>
                                                        </p>
                                                        <div class="progress"
                                                             style="height: 4px;">
                                                            <div class="progress-bar bg-primary"
                                                                 role="progressbar"
                                                                 style="width: 22%;"
                                                                 aria-valuenow="22"
                                                                 aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4pt">
                                                        <p class="d-flex align-items-center mb-0">
                                                            <small class="flex lh-24pt">Opportunities</small>
                                                            <small class="lh-24pt">7</small>
                                                        </p>
                                                        <div class="progress"
                                                             style="height: 4px;">
                                                            <div class="progress-bar bg-primary"
                                                                 role="progressbar"
                                                                 style="width: 13%;"
                                                                 aria-valuenow="13"
                                                                 aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <p class="d-flex align-items-center mb-0">
                                                            <small class="flex lh-24pt">Subscribers</small>
                                                            <small class="lh-24pt">14</small>
                                                        </p>
                                                        <div class="progress"
                                                             style="height: 4px;">
                                                            <div class="progress-bar bg-primary"
                                                                 role="progressbar"
                                                                 style="width: 26%;"
                                                                 aria-valuenow="26"
                                                                 aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="text-center">
                                                    <a href=""
                                                       class="btn btn-sm btn-outline-secondary">View companies</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row card-group-row">
                                    <div class="col-md-6 card-group-row__col">

                                        <div class="card card-group-row__card">
                                            <div class="card-header d-flex">
                                                <div class="flex d-flex align-items-center">
                                                    <div class="h2 mb-0 mr-3">20%</div>
                                                    <div class="flex d-flex flex-column">
                                                        <p class="card-title">Renewals</p>
                                                        <p class="card-subtitle text-50">This month</p>
                                                    </div>
                                                </div>
                                                <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                            </div>
                                            <div class="card-body d-flex flex-column justify-content-center">

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt"><strong>Rend A Car, Frankfurt</strong></small>
                                                        <small class="text-50 lh-24pt">expires in 12 days</small>
                                                    </p>
                                                    <div class="progress"
                                                         style="height: 4px;">
                                                        <div class="progress-bar bg-warning"
                                                             role="progressbar"
                                                             style="width: 20%;"
                                                             aria-valuenow="20"
                                                             aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt"><strong>Rend A Car, Frankfurt</strong></small>
                                                        <small class="text-50 lh-24pt">expires in 30 days</small>
                                                    </p>
                                                    <div class="progress"
                                                         style="height: 4px;">
                                                        <div class="progress-bar bg-accent"
                                                             role="progressbar"
                                                             style="width: 100%;"
                                                             aria-valuenow="100"
                                                             aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 card-group-row__col">

                                        <div class="card card-group-row__card">
                                            <div class="card-header p-0 nav border-0">
                                                <div class="row no-gutters flex"
                                                     role="tablist">
                                                    <div class="col-auto">
                                                        <div class="p-card-header d-flex align-items-center">
                                                            <div class="h2 mb-0 mr-3">20%</div>
                                                            <div class="flex">
                                                                <p class="card-title">Conversion rate</p>
                                                                <div class="d-flex align-items-center">
                                                                    <p class="text-50 mb-0 d-flex align-items-center mr-16pt">
                                                                        <i class="indicator-line rounded bg-gray mr-8pt"></i>
                                                                        <small>Lead</small>
                                                                    </p>
                                                                    <p class="text-50 mb-0 d-flex align-items-center">
                                                                        <i class="indicator-line rounded bg-primary mr-8pt"></i>
                                                                        <small>Cust.</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto ml-sm-auto">
                                                        <div class="p-card-header pl-0"><a href="#"><i class="material-icons text-50">more_horiz</i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body position-relative o-hidden p-0">
                                                <div class="chart z-0"
                                                     style="height: 125px;">
                                                    <canvas id="viewsChart"
                                                            class="chart-canvas js-update-chart-line js-update-chart-line-2nd-accent"
                                                            data-chart-line-border-color="primary,gray"
                                                            data-chart-suffix=" views"
                                                            data-chart-hide-axes="true"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">

                                <div class="page-separator">
                                    <div class="page-separator__text">Schedule</div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="flex">
                                                <strong class="card-title">Today</strong>
                                            </div>
                                            <i class="material-icons text-50">more_horiz</i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-soft-warning mb-0 p-8pt">
                                            <div class="d-flex align-items-start">
                                                <div class="mr-8pt">
                                                    <i class="material-icons">error_outline</i>
                                                </div>
                                                <div class="flex">
                                                    <small class="text-100">Nothing scheduled for today.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="flex">
                                                <strong class="card-title">Upcoming</strong>
                                                <span class="text-20">(2)</span>
                                            </div>
                                            <i class="material-icons text-50">more_horiz</i>
                                        </div>

                                    </div>

                                    <div class="list-group list-group-flush">

                                        <div class="list-group-item d-flex align-items-start p-16pt">
                                            <div class="d-flex flex-column mr-16pt">
                                                <small class="text-uppercase text-50">FEB</small>
                                                <strong class="border-bottom-2 border-bottom-accent">18</strong>
                                            </div>
                                            <div class="flex">
                                                <div><strong>Developers Meeting</strong></div>

                                                <div class="lh-1 mb-16pt"><small class="text-50">Tuesday 17:30 - 18:30</small></div>

                                                <div class="avatar-group mb-16pt">

                                                    <div class="avatar avatar-xs"
                                                         data-toggle="tooltip"
                                                         data-placement="top"
                                                         title="Janell D.">
                                                        <img src="../../public/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">
                                                    </div>

                                                    <div class="avatar avatar-xs"
                                                         data-toggle="tooltip"
                                                         data-placement="top"
                                                         title="Janell D.">
                                                        <img src="../../public/images/256_michael-dam-258165-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">
                                                    </div>

                                                    <div class="avatar avatar-xs"
                                                         data-toggle="tooltip"
                                                         data-placement="top"
                                                         title="Janell D.">
                                                        <img src="../../public/images/256_luke-porter-261779-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">
                                                    </div>

                                                </div>

                                                <p class="mb-0 text-50">Moreover the striking, brilliant and vivid colors are the reason why we are attracted to the posters that we see.</p>

                                            </div>
                                        </div>

                                        <div class="list-group-item d-flex align-items-start p-16pt">
                                            <div class="d-flex flex-column mr-16pt">
                                                <small class="text-uppercase text-50">FEB</small>
                                                <strong class="border-bottom-2 border-bottom-accent">17</strong>
                                            </div>
                                            <div class="flex">
                                                <div><strong>Meeting with Jane B.</strong></div>

                                                <div class="lh-1"><small class="text-50">Tuesday 17:30 - 18:30</small></div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="page-separator">
                            <div class="page-separator__text">Recently added</div>
                        </div>

                        <div class="card mb-0">

                            <div class="table-responsive"
                                 data-toggle="lists"
                                 data-lists-sort-by="js-lists-values-date"
                                 data-lists-sort-desc="true"
                                 data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>

                                <table class="table mb-0 thead-border-top-0 table-nowrap">
                                    <thead>
                                        <tr>

                                            <th style="width: 18px;"
                                                class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-toggle-check-all"
                                                           data-target="#contacts"
                                                           id="customCheckAll_contacts">
                                                    <label class="custom-control-label"
                                                           for="customCheckAll_contacts"><span class="text-hide">Toggle all</span></label>
                                                </div>
                                            </th>

                                            <th>
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-name">Name</a>
                                            </th>

                                            <th style="width: 150px;">
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-company">Company</a>
                                            </th>

                                            <th style="width: 37px;">Tags</th>

                                            <th style="width: 48px;">
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-phone">Phone</a>
                                            </th>

                                            <th style="width: 120px;">
                                                <a href="javascript:void(0)"
                                                   class="sort"
                                                   data-sort="js-lists-values-date">Added</a>
                                            </th>
                                            <th style="width: 24px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list"
                                           id="contacts">

                                        <tr>

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           id="customCheck1_contacts_1">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_contacts_1"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-sm mr-8pt">

                                                        <span class="avatar-title rounded-circle">BN</span>

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Billy Nunez</strong></p>
                                                            <small class="js-lists-values-email text-50">annabell.kris@yahoo.com</small>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-sm mr-8pt">
                                                        <span class="avatar-title rounded bg-warning">FM</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-company"><strong>Frontend Matter Inc.</strong></small>
                                                            <small class="js-lists-values-location text-50">Leuschkefurt</small>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>

                                            <td>

                                                <a href=""
                                                   class="chip chip-outline-secondary">User</a>

                                            </td>

                                            <td>
                                                <small class="js-lists-values-phone text-50">239-721-3649</small>
                                            </td>

                                            <td>
                                                <small class="js-lists-values-date text-50">19 February 2019</small>
                                            </td>
                                            <td class="text-right">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           id="customCheck1_contacts_2">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_contacts_2"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-sm mr-8pt">

                                                        <span class="avatar-title rounded-circle">TP</span>

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Tony Parks</strong></p>
                                                            <small class="js-lists-values-email text-50">vida_glover@gmail.com</small>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-sm mr-8pt">
                                                        <span class="avatar-title rounded bg-accent">HH</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex flex-column">
                                                            <small class="js-lists-values-company"><strong>Huma Huma Inc.</strong></small>
                                                            <small class="js-lists-values-location text-50">Mayerberg</small>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>

                                            <td>

                                                <a href=""
                                                   class="chip chip-outline-secondary">Admin</a>

                                            </td>

                                            <td>
                                                <small class="js-lists-values-phone text-50">169-769-4821</small>
                                            </td>

                                            <td>
                                                <small class="js-lists-values-date text-50">18 February 2019</small>
                                            </td>
                                            <td class="text-right">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                        <tr class="selected">

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           checked=""
                                                           id="customCheck1_contacts_3">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_contacts_3"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-sm mr-8pt">

                                                        <img src="../../public/images/people/110/guy-1.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Gilbert Barrett</strong></p>
                                                            <small class="js-lists-values-email text-50">paolo.zieme@gmail.com</small>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>

                                            </td>

                                            <td>

                                                <a href=""
                                                   class="chip chip-outline-secondary">Admin</a>

                                            </td>

                                            <td>
                                                <small class="js-lists-values-phone text-50">462-060-7408</small>
                                            </td>

                                            <td>
                                                <small class="js-lists-values-date text-50">17 February 2019</small>
                                            </td>
                                            <td class="text-right">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                        <tr class="selected">

                                            <td class="pr-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox"
                                                           class="custom-control-input js-check-selected-row"
                                                           checked=""
                                                           id="customCheck1_contacts_4">
                                                    <label class="custom-control-label"
                                                           for="customCheck1_contacts_4"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media flex-nowrap align-items-center"
                                                     style="white-space: nowrap;">
                                                    <div class="avatar avatar-sm mr-8pt">

                                                        <img src="../../public/images/people/110/guy-2.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle">

                                                    </div>
                                                    <div class="media-body">

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Ollie Wallace</strong></p>
                                                            <small class="js-lists-values-email text-50">lorna_kirlin@nora.biz</small>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>

                                            </td>

                                            <td>

                                                <a href=""
                                                   class="chip chip-outline-secondary">Manager</a>

                                            </td>

                                            <td>
                                                <small class="js-lists-values-phone text-50">285-626-6050</small>
                                            </td>

                                            <td>
                                                <small class="js-lists-values-date text-50">16 February 2019</small>
                                            </td>
                                            <td class="text-right">
                                                <a href=""
                                                   class="text-50"><i class="material-icons">more_vert</i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="card-footer p-8pt">

                                <ul class="pagination justify-content-start pagination-xsm m-0">
                                    <li class="page-item disabled">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Previous">
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_left</span>
                                            <span>Prev</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Page 1">
                                            <span>1</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Page 2">
                                            <span>2</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Next">
                                            <span>Next</span>
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_right</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- <div class="card-body bordet-top text-right">
  15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->

                        </div>

                    </div>
                </div>

                <!-- // END Page Content -->

                <!-- Footer -->

                <div class="bg-white border-top-2 mt-auto">
                    <div class="container page__container page-section d-flex flex-column">
                        <p class="text-70 brand mb-24pt">
                            <img class="brand-icon"
                                 src="../../public/images/logo/black-70@2x.png"
                                 width="30"
                                 alt="Luma"> Luma
                        </p>
                        <p class="measure-lead-max text-50 small mr-8pt">Luma is a beautifully crafted user interface for modern Education Platforms, including Courses & Tutorials, Video Lessons, Student and Teacher Dashboard, Curriculum Management, Earnings and Reporting, ERP, HR, CMS, Tasks, Projects, eCommerce and more.</p>
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
            <div class="mdk-drawer js-mdk-drawer layout-mini__drawer"
                 id="default-drawer">
                <div class="mdk-drawer__content js-sidebar-mini"
                     data-responsive-width="992px"
                     data-layout="mini">

                    <div class="sidebar sidebar-mini sidebar-dark-pickled-bluewood sidebar-left d-flex flex-column">

                        <!-- Brand -->
                        <a href="index.html"
                           class="sidebar-brand p-0 navbar-height d-flex justify-content-center">

                            <span class="avatar avatar-sm ">

                                <span class="avatar-title rounded bg-primary"><img src="../../public/images/illustration/student/128/white.svg"
                                         class="img-fluid"
                                         alt="logo" /></span>

                            </span>

                        </a>

                        <div class="flex d-flex flex-column justify-content-start"
                             data-perfect-scrollbar>
                            <ul class="nav flex-shrink-0 flex-nowrap flex-column sidebar-menu mb-0 js-sidebar-mini-tabs"
                                role="tablist">
                                <li class="sidebar-menu-item"
                                    data-toggle="tooltip"
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
                                    data-toggle="tooltip"
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
                                <li class="sidebar-menu-item  active "
                                    data-toggle="tooltip"
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
                                    data-toggle="tooltip"
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
                                    data-toggle="tooltip"
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
                                    data-toggle="tooltip"
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
                                    data-toggle="tooltip"
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
                                         src="../../public/images/people/50/guy-3.jpg"
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

                            <div class="tab-pane  fade active show "
                                 id="sm_apps">
                                <div class="sidebar-heading">Apps</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item active open">
                                        <a class="sidebar-menu-button js-sidebar-collapse"
                                           data-toggle="collapse"
                                           href="#enterprise_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                            Enterprise
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse show sm-indent"
                                            id="enterprise_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="erp-dashboard.html">
                                                    <span class="sidebar-menu-text">ERP Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item active">
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
                            <div class="tab-pane "
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
                                    <li class="sidebar-menu-item">
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
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Compact_App_Layout/crm-dashboard.html">
                                            <span class="sidebar-menu-text">Compact</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button"
                                           href="../Mini_App_Layout/crm-dashboard.html">
                                            <span class="sidebar-menu-text">Mini</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Mini_Secondary_Layout/crm-dashboard.html">
                                            <span class="sidebar-menu-text">Mini + Secondary</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../App_Layout/crm-dashboard.html">
                                            <span class="sidebar-menu-text">App</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Boxed_App_Layout/crm-dashboard.html">
                                            <span class="sidebar-menu-text">Boxed</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Sticky_App_Layout/crm-dashboard.html">
                                            <span class="sidebar-menu-text">Sticky</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Fixed_Layout/crm-dashboard.html">
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
        <script src="../../public/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="../../public/vendor/popper.min.js"></script>
        <script src="../../public/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="../../public/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="../../public/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="../../public/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="../../public/js/app.js"></script>

        <!-- Preloader -->
        <script src="../../public/js/preloader.js"></script>

        <!-- Global Settings -->
        <script src="../../public/js/settings.js"></script>

        <!-- Moment.js -->
        <script src="../../public/vendor/moment.min.js"></script>
        <script src="../../public/vendor/moment-range.js"></script>

        <!-- Flatpickr -->
        <script src="../../public/vendor/flatpickr/flatpickr.min.js"></script>
        <script src="../../public/js/flatpickr.js"></script>

        <!-- Chart.js -->
        <script src="../../public/vendor/Chart.min.js"></script>
        <script src="../../public/js/chartjs.js"></script>

        <!-- Chart.js Samples -->
        <script src="../../public/js/page.crm-dashboard.js"></script>

        <!-- List.js -->
        <script src="../../public/vendor/list.min.js"></script>
        <script src="../../public/js/list.js"></script>

        <!-- Tables -->
        <script src="../../public/js/toggle-check-all.js"></script>
        <script src="../../public/js/check-selected-row.js"></script>

        <!-- Sidebar Mini JS -->
        <script src="../../public/js/sidebar-mini.js"></script>
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