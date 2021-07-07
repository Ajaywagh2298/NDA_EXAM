<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body id="page-top">
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <div class="sidebar-brand-icon" style="background: white;padding-bottom: 0px;margin-bottom: 0px;" >
                <img src="img/logo1.png" style="width: 100%;height:100%;">
            </div>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link d-inline-flex" href="">
                <div class="col-1">
                <i class="fas fa-user-shield" style="padding-top: 10px;font-size: 20px;"></i>
                </div>
                <div class="col-12 text-center">
                <span style="font-family: Courier;font-size: 100%">Ajay Rajendra Wagh</span>
                </div></a>
            <a class="nav-link d-inline-flex" href="">
                <div class="col-12 text-center">
                    <span style="font-family: Courier;font-size: 100%">Rank</span>
                </div></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">

        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
               aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-user-graduate"></i>
                <span>Student</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Student Details</h6>
                    <a class="collapse-item" href="students.php">New Student</a>
                    <a class="collapse-item" href="viewstudentrecord.php">View List</a>
                    <a class="collapse-item" href="viewstudentsedit1.php">Edit Student</a>
                    <a class="collapse-item" href="csvstudents.php">Import / Export Data</a>
                    <a class="collapse-item" href="reports_students.php">Report</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
               aria-controls="collapseForm">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Teacher</span>
            </a>
            <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Teacher Details</h6>
                    <a class="collapse-item" href="teacher.php">New Teacher</a>
                    <a class="collapse-item" href="viewteacher.php">View List</a>
                    <a class="collapse-item" href="edit_teacher.php">Edit Teacher</a>
                    <a class="collapse-item" href="teacher_reports.php">Report</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
               aria-controls="collapseTable">
                <i class="fas fa-user-friends"></i>
                <span>Staff Members</span>
            </a>
            <div id="collapseTable" class="collapse"  data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Staff Details</h6>
                    <a class="collapse-item" href="staff.php">New Staff Member</a>
                    <a class="collapse-item" href="viewstaff.php">View List</a>
                    <a class="collapse-item" href="edit_staff.php">Edit Staff</a>
                    <a class="collapse-item" href="staff_reports.php">Reports</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
               aria-controls="collapseTable">
                <i class="fas fa-book-open"></i>
                <span>Courses</span>
            </a>
            <div id="collapsePage" class="collapse"  data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Courses Details</h6>
                    <a class="collapse-item" href="course.php">New Courses</a>
                    <a class="collapse-item" href="editcourse.php">Edit Courses</a>
                    <a class="collapse-item" href="csvtesting.php">Import / Export Data</a>
                    <a class="collapse-item" href="deletecourse.php">Delete</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCor" aria-expanded="true"
               aria-controls="collapseTable">
                <i class="fas fa-braille"></i>
                <span>Department</span>
            </a>
            <div id="collapseCor" class="collapse"  data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Department Details</h6>
                    <a class="collapse-item" href="departments.php">New Department</a>
                    <a class="collapse-item" href="editdepartments.php">Edit Department</a>
                    <a class="collapse-item" href="csvdepartments.php">Import / Export CSV</a>
                    <a class="collapse-item" href="deletedepartment.php">Delete</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseExam" aria-expanded="true"
               aria-controls="collapseTable">
                <i class="fas fa-pen-nib"></i>
                <span>Exams</span>
            </a>
            <div id="collapseExam" class="collapse"  data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Exams Details</h6>
                    <a class="collapse-item" href="markstep1.php">Choose Class</a>
                    <a class="collapse-item" href="markstep3.php">Enter Marks</a>
                    <a class="collapse-item" href="markstep7.php">Print Transcript</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHost" aria-expanded="true"
               aria-controls="collapseTable">
                <i class="fas fa-hotel"></i>
                <span>Hostel</span>
            </a>
            <div id="collapseHost" class="collapse"  data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Hostel Details</h6>
                    <a class="collapse-item" href="hostel.php">New Room</a>
                    <a class="collapse-item" href="">Manage Room</a>
                    <a class="collapse-item" href="">Assign Room</a>
                    <a class="collapse-item" href="">Delete Room</a>
                    <a class="collapse-item" href="">View Occupants</a>
                    <a class="collapse-item" href="">Search</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCor" aria-expanded="true"
               aria-controls="collapseTable">
                <i class="fas fa-sms"></i>
                <span>Message</span>
            </a>
            <div id="collapseCor" class="collapse"  data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">SMS</h6>
                    <a class="collapse-item" href="sms.php">Type Contacts</a>
                    <a class="collapse-item" href="">Upload CSV File</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider">


        <hr class="sidebar-divider">

    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
            <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" style="background: #2C3E50 ;">
                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                                           aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow">

                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- Topbar -->

            <!-- Container Fluid-->
            <div class="container-fluid" id="container-wrapper">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>