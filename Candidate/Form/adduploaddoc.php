<?php include "connection.php"; ?>
<?php session_start();
$cad_id = $_SESSION['cad_regist_id'];
?>

<?php
if ( isset( $_POST[ "submit" ] ) ) {
    /* $count = 0;
     $res = mysqli_query( $conn, "select * from candidate_t where cad_regist_id='$_POST[cad_regist_id]'" )or die( mysqli_error( $conn ) );
     $count = mysqli_num_rows( $res );

     if ( $count > 0 ) {
         ?>
         <script type="text/javascript">
             alert( "Registration Number already Exist!" );
             window.location.href = window.location.href;
         </script>
         <?php
     } else  {*/

    //Adding fies  with original name

    $mark10 = rand(1000,10000)."=".$_FILES["10_mark"]["name"];
    $mark12 = rand(1000,10000)."=".$_FILES["12_mark"]["name"];
    $domicile = rand(1000,10000)."=".$_FILES["domicile_certificate"]["name"];
    $nationality = rand(1000,10000)."=".$_FILES["nationality_certificate"]["name"];
    $birth = rand(1000,10000)."=".$_FILES["birth_certificate"]["name"];
    $aadhar_card = rand(1000,10000)."=".$_FILES["aadhar_card"]["name"];
    $pan_card = rand(1000,10000)."=".$_FILES["pan_card"]["name"];
    $college = rand(1000,10000)."=".$_FILES["clg_letter"]["name"];
    $risk = rand(1000,10000)."=".$_FILES["risk_certificate"]["name"];
    $app_a = rand(1000,10000)."=".$_FILES["app_a"]["name"];
    $app_c = rand(1000,10000)."=".$_FILES["app_c"]["name"];
    $creamy = rand(1000,10000)."=".$_FILES["creamy_layer_certificate"]["name"];
    $caste = rand(1000,10000)."=".$_FILES["caste_certificate"]["name"];

    //Adding fies  with dublicate name

    $tname1 = $_FILES["10_mark"]["tmp_name"];
    $tname2 = $_FILES["12_mark"]["tmp_name"];
    $tname3 = $_FILES["domicile_certificate"]["tmp_name"];
    $tname4 = $_FILES["nationality_certificate"]["tmp_name"];
    $tname5 = $_FILES["birth_certificate"]["tmp_name"];
    $tname6 = $_FILES["aadhar_card"]["tmp_name"];
    $tname7 = $_FILES["pan_card"]["tmp_name"];
    $tname8 = $_FILES["clg_letter"]["tmp_name"];
    $tname9 = $_FILES["risk_certificate"]["tmp_name"];
    $tname10 = $_FILES["app_a"]["tmp_name"];
    $tname12 = $_FILES["app_c"]["tmp_name"];
    $tname12 = $_FILES["creamy_layer_certificate"]["tmp_name"];
    $tname13 = $_FILES["caste_certificate"]["tmp_name"];


    $upload_file1 ='../Candidate_file/Candidate_10_marksheet_certificate';
    $upload_file2 ='../Candidate_file/Candidate_12_marksheet_certificate';
    $upload_file3 ='../Candidate_file/Candidate_domicile';
    $upload_file4 ='../Candidate_file/Candidate_nationality';
    $upload_file5 ='../Candidate_file/Candidate_birth_certificate';
    $upload_file6 ='../Candidate_file/Candidate_aadhar_card';
    $upload_file7 ='../Candidate_file/Candidate_pan_card';
    $upload_file8 ='../Candidate_file/Candidate_clg_letter';
    $upload_file9 ='../Candidate_file/Candidate_risk_certificate';
    $upload_file10 ='../Candidate_file/Candidate_app_a';
    $upload_file11 ='../Candidate_file/Candidate_app_c';
    $upload_file12 ='../Candidate_file/Candidate_creamy_layer_certificate';
    $upload_file12 ='../Candidate_file/Candidate_caste_certificate';

    move_uploaded_file($tname,$upload_file.'/'.$photo);
    move_uploaded_file($tname2,$upload_file1.'/'.$sign);

    mysqli_query( $conn,"")or die( mysqli_error( $conn ) );



    ?>
    <script type="text/javascript">
        alert( "Form Uploaded successfully!" );
        window.location = "../../index.php";
    </script>
    <?php

}
?>
