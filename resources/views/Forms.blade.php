<!-- resources/views/form.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Responsive Form</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="form-container">
        
        <div class="header">
            <!-- Logo and contact info -->
            
            <div class="header-con">
                <img src="{{ asset('images/LOGO.png') }}" class="logos" alt="Logo">
                <div class="contact-info">
                    <img src="{{ asset('images/mail.png') }}" class="logo1" alt="Logo">
                    <div class="contact-text">
                        <span class="text-1">support@adecom.edu.ng</span>
                        <span class="text-2">enquiries@adecom.edu.ng</span>
                    </div>
                    <img src="{{ asset('images/phone.png') }}" class="logo2" alt="Logo">
                    <div class="contact-text">
                        <span class="text-3">+2348000001000</span>
                        <span class="text-4">+2347000000000</span>
                    </div>
                </div>
            </div>
        </div>
            <p class="main-text">Online Application for National Diploma Post UTME Full-time</p>
            <span class="background-square2"></span>
            <span class="background-square"></span>
            <p class="l_txt">2020.All rights reserved|Developed by TECHIT</p>
            <div class="forme">

            <form>
            <div class="form-box">
                    <div class="course">
                        <p class="header-txt">Course Details</p>
                    </div>
                    <div class="rows">
                        <div class="input-row">
                            <label for="jambNumber">JAMB Number</label>
                            <input type="text" id="jambNumber" name="jambNumber" required placeholder="Enter your JAMB Number">
                        </div>
                        <div class="input-row">
                            <label for="jambYear">JAMB Year</label>
                            <select class="jamb" id="jambYear" name="jambYear" required>
                                <!-- Change your existing first option like this -->
                                <option value="" disabled selected required>Select JAMB Year</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="input-row">
                            <label for="proposedCourse">Proposed Course of Study</label>
                            <input type="text" id="proposedCourse" name="proposedCourse" required placeholder="Enter your proposed course">
                        </div>
                    </div>


                    <div class="personal">
                        <p class="header-txt">Personal Details</p>
                    </div>

                    <!-- ... (previous HTML code) -->

                    <div class="rows">
                        <div class="input-row">
                            <label for="surname">Surname</label>
                            <input type="text" id="surname" name="surname" required placeholder="Enter Surname">
                        </div>
                        <div class="input-row">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" name="firstName" required placeholder="First Name">
                        </div>
                        <div class="input-row">
                            <label for="middleName">Middle Name</label>
                            <input type="text" id="middleName" name="middleName" required placeholder="Enter Middle Name">
                        </div>
                    </div>

                    <div class="rows">
                        <div class="input-row">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required placeholder="Enter Email Address">
                        </div>
                        <div class="input-row">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="" disabled selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="preferNotToSay">Prefer not to say</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="input-row">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="tel" id="phoneNumber" name="phoneNumber" required placeholder="Enter Phone Number">
                        </div>
                    </div>

                    <div class="rows">
                        <div class="input-row">
                            <label for="nationality">Nationality</label>
                            <select id="nationality" name="nationality" required>
                                <option value="" disabled selected>Select Nationality</option>
                                <option value="Nigeria">Nigeria</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="input-row">
                            <label for="state">State</label>
                            <select id="state" name="state" required>
                                <option value="" disabled selected>Select State</option>
                                <option value="Lagos">Lagos</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="input-row">
                            <label for="homeAddress">Permanent Home Address</label>
                            <input type="text" id="homeAddress" name="homeAddress" required placeholder="Permanent Home Address">
                        </div>
                    </div>


                    <div class="rows">
                        <div class="input-row">
                            <label for="sponsorFullname">Fullname of Sponsor</label>
                            <input type="text" id="sponsorFullname" name="sponsorFullname" required placeholder="Enter sponsor's fullname">
                        </div>
                        <div class="input-row">
                            <label for="sponsorEmail">Email Address Of Sponsor</label>
                            <input type="email" id="sponsorEmail" name="sponsorEmail" required placeholder="Enter sponsor's email address">
                        </div>
                        <div class="input-row">
                            <label for="relationship">Relationship</label>
                            <input type="text" id="relationship" name="relationship" required placeholder="Enter your relationship with sponsor">
                        </div>
                    </div>

                    <div class="rows">
                        <div class="input-row">
                            <label for="religion">Religion</label>
                            <input type="text" id="religion" name="religion" required placeholder="Enter your religion">
                        </div>
                        <div class="input-row">
                            <label for="maritalStatus">Marital Status</label>
                            <input type="text" id="maritalStatus" name="maritalStatus" required placeholder="Enter your marital status">
                        </div>
                        <div class="input-row">
                            <label for="spouseBirthday">Date Of Birth</label>
                            <div class="birthday-select">
                                <select class="birthday-day" id="spouseBirthdayDay" name="spouseBirthdayDay" required>
                                    <option value="" disabled selected>Day</option>
                                    <!-- Add options for days (1 to 31) -->
                                </select>
                                <select class="birthday-month" id="spouseBirthdayMonth" name="spouseBirthdayMonth" required>
                                    <option value="" disabled selected>Month</option>
                                    <!-- Add options for months (January to December) -->
                                </select>
                                <select class="birthday-year" id="spouseBirthdayYear" name="spouseBirthdayYear" required>
                                    <option value="" disabled selected>Year</option>
                                    <!-- Add options for years -->
                                </select>
                            </div>
                        </div>

                    </div>


                    <div class="personal">
                        <p class="header-txt">Examinations Taken</p>
                    </div>
                    <div class="rows">
                        <div class="input-row">
                            <label for="examType">Examination Type</label>
                            <select id="examType" name="examType" required>
                                <option value="" disabled selected>Select Examination Type</option>
                                <option value="JAMB">JAMB</option>
                                <option value="WAEC">WAEC</option>
                                <option value="NECO">NECO</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="input-row">
                            <label for="examYear">Exam Year</label>
                            <select class="box" id="examYear" name="examYear" required>
                                <option value="" disabled selected>Select Exam Year</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <!-- Add more options as needed -->
                                
                            </select>
                        </div>
                        <div class="input-row">
                            <label for="examNumber">Exam No</label>
                            <input type="text" id="examNumber" name="examNumber" required placeholder="Enter your exam number">
                        </div>
                    </div>


                    <div class="personaL">
                        <p class="head-txt">First Sitting</p>
                    </div>
                    <div class="rows">
                        <div class="input-row">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required placeholder="Enter the subject">
                        </div>
                        <div class="input-row" id="grade">
                            <label id="l-grade" for="grade">Grade</label>
                            <input type="text" name="grade" required placeholder="Enter the grade">
                        </div>

                        <div class="input-row" id="grade">
                            <button class="add-button">
                                <img src="{{ asset('images/gala_add.png') }}" class="logo3" alt="Add Subject">
                                Add Subject
                            </button>
                        </div>
                        
                    </div>
                    <div class="submit-button">
                        <button type="submit">Submit Application</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
