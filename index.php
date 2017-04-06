<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hopkin's Application Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-blue">
        <a class="navbar-brand" href="http://www.hopkinscollege.com">        
            <img src="http://www.hopkinscollege.com/images/logo.png" class="logo_large" />
        </a>        
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="page-wrap">
                <form method="post" id="applicant-form" name="form">
                    <input type="hidden" name="token" value="<?php echo $newToken; ?>">
                    <!--Course Details-->
                    <div class="row heading">
                        <label class="col-sm-12 col-form-label">Course Details</label>
                    </div>

                    <div class="grid_bg">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Course</label>
                            <div class="col-sm-10">
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked1" name="typeofcourse" id="mba" value="MBA" type="radio" class="custom-control-input typeofcourse">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">MBA</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked1" name="typeofcourse" id="bba" value="BBA" type="radio" class="custom-control-input typeofcourse">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">BBA</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked1" name="typeofcourse" id="bca" value="BCA" type="radio" class="custom-control-input typeofcourse">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">BCA</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked1" name="typeofcourse" id="ba" value="BA" type="radio" class="custom-control-input typeofcourse">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">BA</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked1" name="typeofcourse" id="puc" value="PUC" type="radio" class="custom-control-input typeofcourse">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">PUC</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Specialization</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="specialization">
                            </div>
                        </div>
                    </div>

                    <!--Applicant Details-->
                    <div class="row heading">
                        <label class="col-sm-12 col-form-label">Applicant Details</label>
                    </div>

                    <div class="grid_bg">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="name" minlength="2" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">DOB</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control datepicker" id="dob" required>
                            </div>
                            <label class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-4">
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked1" value="Male" name="gender" type="radio" class="custom-control-input gender">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Male</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked1" value="Female" name="gender" type="radio" class="custom-control-input gender">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Female</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Phone No</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <label class="col-sm-2 col-form-label">Blood Group</label>
                            <div class="col-sm-4">
                                <select name="bloodgroup" >
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Applicant Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Father's Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="fathername" name="fathername">
                            </div>
                            <label class="col-sm-2 col-form-label">Contact No</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="fatherno" name="fatherno">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Father's Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="fatheremail" name="fatheremail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mother's Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="mothername" name="mothername">
                            </div>
                            <label class="col-sm-2 col-form-label">Contact No</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="motherno" name="motherno">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mother's Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="motheremail" name="motheremail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Landline No</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Landline">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Permanent Address</label>
                            <div class="col-sm-4">
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                            <label class="col-sm-2 col-form-label">Zip Code</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="zipcode">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Photo Upload</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="photo">                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <img id="app_photo" src="images/default.jpg" alt="your image" />
                            </div>                            
                        </div>
                    </div>

                    <!--Academic Details-->
                    <div class="row heading">
                        <label class="col-sm-12 col-form-label">Academic Details</label>
                    </div>

                    <div class="grid_bg">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Degree</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Academic Record</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Blood">
                            </div>
                            <label class="col-sm-2 col-form-label">Exam Passed</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Board / University</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                            <label class="col-sm-2 col-form-label">Register Number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Percentage / GPA</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                            <label class="col-sm-2 col-form-label">Year of Passing</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                        </div>
                                                
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">PUC</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Academic Record</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Blood">
                            </div>
                            <label class="col-sm-2 col-form-label">Exam Passed</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Board / University</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                            <label class="col-sm-2 col-form-label">Register Number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Percentage / GPA</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                            <label class="col-sm-2 col-form-label">Year of Passing</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">SSLC</label>
                        </div>                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Academic Record</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Blood">
                            </div>
                            <label class="col-sm-2 col-form-label">Exam Passed</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Board / University</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                            <label class="col-sm-2 col-form-label">Register Number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Percentage / GPA</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                            <label class="col-sm-2 col-form-label">Year of Passing</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Email">
                            </div>
                        </div>                                                
                    </div>

                    <!--Fee Details-->
                    <div class="row heading">
                        <label class="col-sm-12 col-form-label">Fee Details</label>
                    </div>

                    <div class="grid_bg form-group">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Registration Fees</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Blood">
                            </div>
                            <label class="col-sm-2 col-form-label">Paid By Cheque</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Blood">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">DD</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Blood">
                            </div>
                            <label class="col-sm-2 col-form-label">Cash</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Cash">
                            </div>
                        </div>
                    </div>

                    <!--Fee Details-->
                    <div class="row heading">
                        <label class="col-sm-12 col-form-label">Declaration</label>
                    </div>

                    <div class="grid_bg form-group">
                        <div class="row">
                            <ul class="declaration">
                                <li>
                                    I undertake to abide by the rules and regulations of St Hopkins College as prescribed From time to time. If i am found to have violated at any point                                 
                                    in time, any of the prescribed Rules and regulations then the college is free to initiate appropriate disciplinary action against me.
                                </li>
                                <li>
                                    I shall also stand responsible for the good conduct and behavior of my ward and I shall ensure that he/she attends classes, tests regularly during 
                                    the period of his/her Study in the college.
                                </li>
                                <li>
                                    I shall be responsible for the payment of all fees and shall not ask refund of fee, Paid in case of dis-continuation of the course or cancellation 
                                    of my ward.
                                </li>
                                <li>
                                    I have read and understood the full requirements of the program, eligibility Criteria, terms and conditions, and other important information
                                </li>
                            </ul>
                        </div>                        
                    </div>
                    
                    <div class="form-group text-center">
                        <label class="form-check-label">
                            <input type="checkbox" id="agree" class="form-check-input">I Agree all the conditions
                        </label>
                    </div>

                    <div class="form-group row justify-content-md-center">
                        <button class="btn btn-primary" type="submit" id="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.1.1.slim.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>    
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>