<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <title>Admin Area | Single Company Setup</title>

    <?php include 'includes/style.php'; ?>
    Performance
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <?php include 'includes/header.php'; ?>
        <?php include 'includes/sidebar.php'; ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content">

                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Settings</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href=""><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Adminstration
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Single company setup</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="me-2 mb-2">
                        <div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
                            <a href="" class="btn btn-icon btn-sm me-1"><i class="ti ti-list-tree"></i></a>
                            <a href="" class="btn btn-icon btn-sm active bg-primary text-white"><i class="ti ti-layout-grid"></i></a>
                        </div>
                    </div>
                    <div class="me-2 mb-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                <i class="ti ti-file-export me-1"></i>Export
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_company" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Company</a>
                    </div>
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div> -->
                </div>
                <!-- /Breadcrumb -->



                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Single company setup
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <span class="fs-18 fw-bold text-dark mb-4">Basic information</span>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap text-wrap col-md-2">Company Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Industry Type</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Business Type</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Company Logo</label>
                                    <div class="col-md-10">
                                        <input type="file" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-1">About company</label>
                                    <div class="col-md-11">
                                        <textarea name="" id="" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Website</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Phone Number</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row mt-4">
                            <span class="fs-18 fw-bold text-dark mb-4">Business & Legal Details</span>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Company Registration No.</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>




                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Currency References</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Tax Identification No. (TIN) </label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="card-header"> </div>



                        <div class="row mt-4">
                            <span class="fs-18 fw-bold text-dark mb-4">Head office adress</span>

                            <div class="col-lg-12 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-1">Address </label>
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>




                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">City</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">State</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Country</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Postal Code</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Time Zone</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>



                        <div class="card-header"> </div>


                        <div class="row mt-4">
                            <span class="fs-18 fw-bold text-dark mb-4">Owners & Partners Information</span>
                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Ownership type</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Owner name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Phone number</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Ownership%</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Role in the company</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <a href="#" class="btn btn-primary ">Add Partners</a>
                            </div>
                        </div>



                        <div class="card-header"> </div>


                        <div class="row mt-4">
                            <span class="fs-18 fw-bold text-dark mb-4">Group Branches</span>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Branch name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Branch code</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-1">Address</label>
                                    <div class="col-md-11">
                                        <textarea type="text" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">City</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">State</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Country</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Postal Code</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" placeholder=""></input>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Phone number</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" placeholder=""></input>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Assign branch manager</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder=""></input>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Add Departments</label>
                                    <div class="col-md-10">
                                        <a href="#" class="text-primary"><i class="fa-solid fa-plus"></i> Add Departments </a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 mb-2">
                                <a href="#" class="btn btn-primary ">Add more branches</a>
                            </div>

                        </div>

                        <div class="card-header"> </div>


                        <div class="row mt-4">
                            <span class="fs-18 fw-bold text-dark mb-4">Super Admin</span>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Primary Super Admin Name </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Primary Super Admin Email </label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Primary Super Admin No. </label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="card-header"> </div>


                        <div class="row mt-4">
                            <span class="fs-18 fw-bold text-dark mb-4"> Admin</span>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Secondary Admin Name </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Secondary Admin Email </label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Secondary Admin Contact No. </label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-2">Limited Permission level</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>Yes</option>
                                            <option>No</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <span class="fs-16 fw-bold text-dark py-3">Limited Access Settings (Permissions)</span>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-3">Employee Management</label>
                                    <div class="col-md-9">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Can Add Employees
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Can Edit Employee Details
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Can Remove Employees
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-3">Payroll & Salary Management</label>
                                    <div class="col-md-9">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Can View Payroll
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Can Process Salaries
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Can Edit Salary Structures
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-3">Leaves & Attendance</label>
                                    <div class="col-md-9">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Can Approve/Reject Leave Requests
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Can Modify Attendance Records
                                            </label>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-3">Company Policies & Settings</label>
                                    <div class="col-md-9">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Can Edit Leave & Attendance Policies
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio">Can Modify Work Shifts
                                            </label>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row align-items-center">
                                    <label class="form-label text-wrap col-md-3">User Access & Roles</label>
                                    <div class="col-md-9">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio"> Can Add/Remove Other Admins
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="radio">Can Change Employee Access Levels
                                            </label>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="card-header mb-4"> </div>

                        <div class="d-flex justify-content-end ">
                            <button type="button" class="btn btn-white me-2">Cancel</button>
                            <button type="button" class="btn btn-primary me-2">Save</button>
                        </div>
                    </div>
                </div>




            </div>
            <!-- /Page Wrapper -->
            <?php include 'includes/footer.php'; ?>
        </div>
        <!-- Page Wrapper -->


    </div>
    <!-- /Main Wrapper -->




    <?php include 'includes/script.php'; ?>
    <script>
        function selectGender(id) {
            document.querySelectorAll('.gender-option').forEach(option => {
                option.classList.remove('selected');
            });
            document.getElementById(id).classList.add('selected');
        }
    </script>
</body>

</html>