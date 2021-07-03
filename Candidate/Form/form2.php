<?php include "../connection.php"; ?>
<?php session_start();
$cad_id = $_SESSION['cad_regist_id'];
?>
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
    <style>
        body{
            -webkit-user-select: none;  /* Chrome all / Safari all */
            -moz-user-select: none;     /* Firefox all */
            -ms-user-select: none;      /* IE 10+ */
            user-select: none;          /* Likely future */
        }
    </style>
</head>

<div class="col-xl-12 col-lg-12 col-md-12 " style="padding: 10px; height: 200px;border-bottom: 0.5px solid #F4F6F6;padding-left: 0px; margin-left: 0px;">
    <div class="col-xl-12 col-lg-12 col-md-12 d-inline-flex">
        <div class=" col-lg-2 float-child">
            <div class="container" style=""><img style="height: 200px;padding-bottom: 10px;padding-left: 0px;" src="img/logo1.png"> </div>
        </div>
        <div class="col-xl-8 col-lg-12 col-md-8" style="text-align: center;">
            <div class="container" style="padding-top: 20px;">
                <p style="font-size: 60px;color: #5499C7;font-family: Times New Roman;margin-bottom: 0px;">National Defence Academy</p>
                <p style="font-size: 30px;font-family: Times New Roman;color: #2d4373;"> Union Public Service Commission </p>
            </div>
        </div>
        <div class="col-lg-2 float-child">
            <div class="container" style="200px;"><img style="height: 200px;padding-bottom: 10px;padding-left: 0px;" src="img/img3.png"> </div>
        </div>
    </div>
</div>

<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-10">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12" >
                            <div class="login-form" >
                                <div class="text-center">
                                    <p class="text-center" style="color:#284EFF;font-size: 30px;font-family: Times New Roman;" >
                                        National Defence Academy  Examination - 2021<br>
                                        राष्ट्रीय रक्षा अकादमी परीक्षा  - 2021
                                    </p>
                                </div>
                                <div class="text-justify" style="border: 1px solid black;">
                                    <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 10px;"><br>
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">PART-II REGISTRATION / भाग-II पंजीकरण</h1>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="text-justify" style="border: 1px solid black;">
                                    <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 10px;">
                                        <div class="col-12"><br>
                                            <div class="text-center">

                                            </div><br>
                                            <div class="col-xl-12 col-lg-12 col-md-12" style="padding-left: 4%;padding-right: 4%;"><br>
                                                <form class="form-group" action="" method="post">
                                                    <div class="form-group">
                                                        <input type="text" name="cad_re_id" class="form-control" value="<?php echo $cad_id ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Exam Center Selection I / परीक्षा केंद्र चयन I <span style="color: red">*</span></label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="0" class="selInstruct"> Select</option>
                                                            <option>Agartala</option>
                                                            <option>Bilaspur</option>
                                                            <option>Agra</option>
                                                            <option> Chandigarh</option>
                                                            <option> Ahmedabad</option>
                                                            <option> Chennai</option>
                                                            <option>Aizwal</option>
                                                            <option>Coimbatore</option>
                                                            <option>Aligarh</option>
                                                            <option> Cuttack</option>
                                                            <option> Almora</option>
                                                            <option> Delhi</option>
                                                            <option> Ananthapur</option>
                                                            <option>Dharwad</option>
                                                            <option> Aurangabad</option>
                                                            <option> Dispur</option>
                                                            <option> Bareilly</option>
                                                            <option>Faridabad</option>
                                                            <option> Bengaluru</option>
                                                            <option>Gangtok</option>
                                                            <option> Jorhat</option>
                                                            <option> Garwhal (Srinagar)</option>
                                                            <option> Bhopal</option>
                                                            <option> Gautam Budh Nagar</option>
                                                            <option>Ghaziabad</option>
                                                            <option>Gurgaon</option>
                                                            <option>Gorakhpur</option>
                                                            <option>Gwalior</option>
                                                            <option>Hyderabad</option>
                                                            <option>Imphal</option>
                                                            <option>Indore</option>
                                                            <option>Itanagar</option>
                                                            <option>Jabalpur</option>
                                                            <option> Jaipur</option>
                                                            <option>Jammu</option>
                                                            <option>Jodhpur</option>
                                                            <option> Kochi</option>
                                                            <option>Kohima</option>
                                                            <option> Kolkata</option>
                                                            <option>Kozhikode</option>
                                                            <option>Leh</option>
                                                            <option>Lucknow</option>
                                                            <option>Ludhiana</option>
                                                            <option>Madhurai</option>
                                                            <option>Mysuru</option>
                                                            <option>Mumbai</option>
                                                            <option>Nagpur</option>
                                                            <option>Sambalpur</option>
                                                            <option>Navi Mumbai</option>
                                                            <option>Shillong</option>
                                                            <option>Panaji (Goa)</option>
                                                            <option>Shimla</option>
                                                            <option>Patna</option>
                                                            <option>Port Blair</option>
                                                            <option>Srinagar</option>
                                                            <option>Prayagraj (Allahabad)</option>
                                                            <option>Thane</option>
                                                            <option>Puducherry</option>
                                                            <option>Thiruvananthapuram</option>
                                                            <option>Pune</option>
                                                            <option>Tiruchirapalli</option>
                                                            <option>Raipur</option>
                                                            <option>Tirupati</option>
                                                            <option>Rajkot</option>
                                                            <option>Udaipur</option>
                                                            <option>Ranchi</option>
                                                            <option>Varanasi</option>
                                                            <option>Vellore</option>
                                                            <option>Vijayawada</option>
                                                            <option>Vishakhapatnam</option>
                                                            <option>Warangal</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label >Exam Center Selection II / परीक्षा केंद्र चयन II <span style="color: red">*</span></label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="0" class="selInstruct"> Select</option>
                                                            <option>Agartala</option>
                                                            <option>Bilaspur</option>
                                                            <option>Agra</option>
                                                            <option> Chandigarh</option>
                                                            <option> Ahmedabad</option>
                                                            <option> Chennai</option>
                                                            <option>Aizwal</option>
                                                            <option>Coimbatore</option>
                                                            <option>Aligarh</option>
                                                            <option> Cuttack</option>
                                                            <option> Almora</option>
                                                            <option> Delhi</option>
                                                            <option> Ananthapur</option>
                                                            <option>Dharwad</option>
                                                            <option> Aurangabad</option>
                                                            <option> Dispur</option>
                                                            <option> Bareilly</option>
                                                            <option>Faridabad</option>
                                                            <option> Bengaluru</option>
                                                            <option>Gangtok</option>
                                                            <option> Jorhat</option>
                                                            <option> Garwhal (Srinagar)</option>
                                                            <option> Bhopal</option>
                                                            <option> Gautam Budh Nagar</option>
                                                            <option>Ghaziabad</option>
                                                            <option>Gurgaon</option>
                                                            <option>Gorakhpur</option>
                                                            <option>Gwalior</option>
                                                            <option>Hyderabad</option>
                                                            <option>Imphal</option>
                                                            <option>Indore</option>
                                                            <option>Itanagar</option>
                                                            <option>Jabalpur</option>
                                                            <option> Jaipur</option>
                                                            <option>Jammu</option>
                                                            <option>Jodhpur</option>
                                                            <option> Kochi</option>
                                                            <option>Kohima</option>
                                                            <option> Kolkata</option>
                                                            <option>Kozhikode</option>
                                                            <option>Leh</option>
                                                            <option>Lucknow</option>
                                                            <option>Ludhiana</option>
                                                            <option>Madhurai</option>
                                                            <option>Mysuru</option>
                                                            <option>Mumbai</option>
                                                            <option>Nagpur</option>
                                                            <option>Sambalpur</option>
                                                            <option>Navi Mumbai</option>
                                                            <option>Shillong</option>
                                                            <option>Panaji (Goa)</option>
                                                            <option>Shimla</option>
                                                            <option>Patna</option>
                                                            <option>Port Blair</option>
                                                            <option>Srinagar</option>
                                                            <option>Prayagraj (Allahabad)</option>
                                                            <option>Thane</option>
                                                            <option>Puducherry</option>
                                                            <option>Thiruvananthapuram</option>
                                                            <option>Pune</option>
                                                            <option>Tiruchirapalli</option>
                                                            <option>Raipur</option>
                                                            <option>Tirupati</option>
                                                            <option>Rajkot</option>
                                                            <option>Udaipur</option>
                                                            <option>Ranchi</option>
                                                            <option>Varanasi</option>
                                                            <option>Vellore</option>
                                                            <option>Vijayawada</option>
                                                            <option>Vishakhapatnam</option>
                                                            <option>Warangal</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label >Exam Center Selection III / परीक्षा केंद्र चयन III <span style="color: red">*</span></label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="0" class="selInstruct"> Select</option>
                                                            <option>Agartala</option>
                                                            <option>Bilaspur</option>
                                                            <option>Agra</option>
                                                            <option> Chandigarh</option>
                                                            <option> Ahmedabad</option>
                                                            <option> Chennai</option>
                                                            <option>Aizwal</option>
                                                            <option>Coimbatore</option>
                                                            <option>Aligarh</option>
                                                            <option> Cuttack</option>
                                                            <option> Almora</option>
                                                            <option> Delhi</option>
                                                            <option> Ananthapur</option>
                                                            <option>Dharwad</option>
                                                            <option> Aurangabad</option>
                                                            <option> Dispur</option>
                                                            <option> Bareilly</option>
                                                            <option>Faridabad</option>
                                                            <option> Bengaluru</option>
                                                            <option>Gangtok</option>
                                                            <option> Jorhat</option>
                                                            <option> Garwhal (Srinagar)</option>
                                                            <option> Bhopal</option>
                                                            <option> Gautam Budh Nagar</option>
                                                            <option>Ghaziabad</option>
                                                            <option>Gurgaon</option>
                                                            <option>Gorakhpur</option>
                                                            <option>Gwalior</option>
                                                            <option>Hyderabad</option>
                                                            <option>Imphal</option>
                                                            <option>Indore</option>
                                                            <option>Itanagar</option>
                                                            <option>Jabalpur</option>
                                                            <option> Jaipur</option>
                                                            <option>Jammu</option>
                                                            <option>Jodhpur</option>
                                                            <option> Kochi</option>
                                                            <option>Kohima</option>
                                                            <option> Kolkata</option>
                                                            <option>Kozhikode</option>
                                                            <option>Leh</option>
                                                            <option>Lucknow</option>
                                                            <option>Ludhiana</option>
                                                            <option>Madhurai</option>
                                                            <option>Mysuru</option>
                                                            <option>Mumbai</option>
                                                            <option>Nagpur</option>
                                                            <option>Sambalpur</option>
                                                            <option>Navi Mumbai</option>
                                                            <option>Shillong</option>
                                                            <option>Panaji (Goa)</option>
                                                            <option>Shimla</option>
                                                            <option>Patna</option>
                                                            <option>Port Blair</option>
                                                            <option>Srinagar</option>
                                                            <option>Prayagraj (Allahabad)</option>
                                                            <option>Thane</option>
                                                            <option>Puducherry</option>
                                                            <option>Thiruvananthapuram</option>
                                                            <option>Pune</option>
                                                            <option>Tiruchirapalli</option>
                                                            <option>Raipur</option>
                                                            <option>Tirupati</option>
                                                            <option>Rajkot</option>
                                                            <option>Udaipur</option>
                                                            <option>Ranchi</option>
                                                            <option>Varanasi</option>
                                                            <option>Vellore</option>
                                                            <option>Vijayawada</option>
                                                            <option>Vishakhapatnam</option>
                                                            <option>Warangal</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="text-center">
                                                        <a href="" class="btn btn-primary" style="width: 30%;">Continue / आगे बढ़ें</a>
                                                    </div>
                                                </form><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center"><br>
                                    <font color="red"><strong>All entries in the page are mandatory / पेज में सभी प्रविष्टियां अनिवार्य हैं</strong></font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>

    <?php include "../footer.php"; ?>
