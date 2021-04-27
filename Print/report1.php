<?php
    include('../head.php');
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="report.css" type="text/css" rel="stylesheet">
</head>

<body>
     <br> <br>
    <center>
        <div class="container">

<div class="title">
                <header>
                    <h1>
                        <img  src="1.png" alt="logo" style="float: left; margin-left: 20px;"> School Form 1 School Register for Senior High School (SF1-SHS)
                        <img  src="2.png" alt="deped"  style="float: right; margin-right: 20px;">
                    </h1>
                </header>
                </div>        
                <br>  <br><hr>
                <div>
                    <label>School Name: </label>
                    <input type="text" placeholder="School Name">
                    <label>School ID: </label>
                    <input type="text" placeholder="School ID">
                    <label>District: </label>
                    <input type="text" placeholder="District">
                    <label>Division: </label>
                    <input type="text" placeholder="Division">
                    <label>Region: </label>
                    <input type="text" placeholder="Region">
                </div>
                <br>
                <div>
                    <label>Semester: </label>
                    <input type="text" placeholder="Semester">
                    <label>School Year: </label>
                    <input type="text" placeholder="School Year">
                    <label>Grade Level: </label>
                    <input type="text" placeholder="Grade Level">
                    <label>Track and Strand: </label>
                    <input type="text" placeholder="Track and Strand">
                </div>
                <br>
                <div>
                    <label>Section: </label>
                    <input type="text" placeholder="Section">
                    <label>Course (for TVL Only): </label>
                    <input type="text" placeholder="Course (for TVL Only)">
                </div>
                <br>
                <hr>
                <!--    ////// QUERY  /////    -->
                <?php
                          $q_studinfo ="SELECT * from student_info WHERE ts_id=1 AND s_year=11";
                          $q_studinfo_res = $dbc->query($q_studinfo);

                ?>
<table>
            <tbody style="text-align: center;">
                <tr>

                    <td rowspan="2"><strong>LRN</strong></td>
                    <td rowspan="2"><strong>NAME</strong></td>
                    <td rowspan="2"><strong>GENDER</strong></td>
                    <td rowspan="2"><strong>BIRTH DATE</strong></td>
                    <td rowspan="2"><strong>AGE</strong></td>
                    <td rowspan="2"><strong>RELIGION</strong></td>
                    <td colspan="4"><strong>COMPLETE ADDRESS</strong></td>
                    <td colspan="2"><strong>PARENT</strong></td>
                    <td colspan="2"><strong>GUARDIAN</strong></td>
                    <td rowspan="2"><strong>CONTACT NUMBER</strong></td>
                    <td rowspan="2"><strong>REMARKS</strong></td>
                </tr>
                <tr>.
                    <td>HOUSE NUMBER</td>
                    <td>BARANGAY</td>
                    <td>MUNICIPALITY/CITY</td>
                    <td>PROVINCE</td>
                    <td>FATHER'S NAME</td>
                    <td>MOTHER'S MAIDEN NAME</td>
                    <td>NAME</td>
                    <td>RELATIONSHIP</td>
                </tr>
                 <?php
                    $datenow=date('Y-m-d');
                    foreach($q_studinfo_res as $item_data){
                          $lrns = $item_data['lrn'];
                          $lname = $item_data['last_name'];
                          $fname = $item_data['first_name'];
                          $mname = $item_data['middle_name'];
                          $gender = $item_data['gender'];
                          $birthday = $item_data['birthday'];
                        //  $age = $datenow-$birthday;
                          $_age = floor((time() - strtotime($birthday))/31556926);
                          $religion = $item_data['religion'];
                          $s_year = $item_data['s_year'];
                ?>
                <tr>
                   
                    <td><?php echo $lrns?></td>
                    <td><?php echo $lname?> <?php echo $fname?> <?php echo $mname?></td>
                    <td><?php echo $gender?></td>
                    <td><?php echo $birthday?></td>
                    <td><?php echo $_age?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


                    <?php
                }
                    ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr  style="background-color: lightgray">
                    <td></td>
                    <td colspan="15" align="left"><strong>TOTAL MALE </strong></td>
                </tr>

                </tr>
                <br>
                <tr>
                    <td rowspan="2"><strong>LRN</strong></td>
                    <td rowspan="2"><strong>NAME</strong></td>
                    <td rowspan="2"><strong>GENDER</strong></td>
                    <td rowspan="2"><strong>BIRTH DATE</strong></td>
                    <td rowspan="2"><strong>AGE</strong></td>
                    <td rowspan="2"><strong>RELIGION</strong></td>
                    <td colspan="4"><strong>COMPLETE ADDRESS</strong></td>
                    <td colspan="2"><strong>PARENT</strong></td>
                    <td colspan="2"><strong>GUARDIAN</strong></td>
                    <td rowspan="2"><strong>CONTACT NUMBERM</strong></td>
                    <td rowspan="2"><strong>REMARKS</strong></td>
                </tr>
                <tr>
                    <td>HOUSE NUMBER</td>
                    <td>BARANGAY</td>
                    <td>MUNICIPALITY/CITY</td>
                    <td>PROVINCE</td>
                    <td>FATHER'S NAME</td>
                    <td>MOTHER'S MAIDEN NAME</td>
                    <td>NAME</td>
                    <td>RELATIONSHIP</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="background-color: lightgray">
                    <td></td>
                    <td colspan="15" align="left" > <strong>TOTAL FEMALE</strong></td>
                </tr>
                <tr  style="background-color: lightgray">
                    <td></td>
                    <td colspan="15" align="left"> <strong>COMBINE</strong></td>
                </tr>
                </tr>
                <tr>

                    <td colspan="16" align="left"> <strong>Legend List Code of Indicators under REMARKS column</strong></td>
                </tr>
                </tr>

                <td>Indicator</td>
                <td>Code</td>
                <td>Required Infomation</td>
                <td>Indicator</td>
                <td>Code</td>
                <td>Required Information</td>
                <td rowspan="5"  style="background-color: lightgray"></td>
                <td rowspan="2">REGISTERED</td>
                <td rowspan="2">Beginning of the Semester</td>
                <td rowspan="2">End of the Semeste</td>
                <td rowspan="5" style="background-color: lightgray"></td>
                <td>Prepared By: </td>
                <td colspan="4"></td>
                </tr>
                <tr>
                    <td rowspan="2">Transferred Out</td>
                    <td rowspan="2">T/O</td>
                    <td rowspan="4">Name of School, Date of 1st Attendance and <br> Date of Last Attendance if Transferred Out</td>
                    <td>CCT Recipient</td>
                    <td> CCT </td>
                    <td>CCT Control/Reference number & Effectivity Date</td>
                    <td colspan="5"  style="background-color: lightgray"></td>
                </tr>
                <tr>
                    <td>Balik Aral</td>
                    <td>B/A</td>
                    <td>Name Of School last Attended & Year</td>
                    <td>MALE</td>
                    <td></td>
                    <td></td>
                    <td colspan="5"  style="background-color: lightgray"></td>
                </tr>
                <tr>
                    <td rowspan="2">Tranferred In</td>
                    <td rowspan="2">T/I</td>
                    <td>Learning With Exceptionality</td>
                    <td>LWE</td>
                    <td>Specify Exceptionality of the Learner</td>
                    <td>FEMALE</td>
                    <td ></td>
                    <td></td>
                    <td colspan="5"><br><br><hr> Signature Of Adviser Over Printed Name </td>
                </tr>
                <tr>
                    <td>Accelerated</td>
                    <td>ACL</td>
                    <td> Specify Level & Effectivity Date</td>
                    <td>TOTAL</td>
                    <td></td>
                    <td></td>
                    <td colspan="2">Beginning of the Semester Date</td>
                    <td  style="background-color: lightgray"></td>
                    <td colspan="2"> End of the semester Date:</td>
                    <br>
                </tr>
            </tbody>
        </table>
</div>
        </div>
    </center>
</body>

</html>