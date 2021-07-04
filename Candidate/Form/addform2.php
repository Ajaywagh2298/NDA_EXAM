<?php include "connection.php"; ?>

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
    mysqli_query( $conn,"INSERT INTO candidate_t2 (`id`, `cad_regist_id`, `center_1`, `center_2`, `center_3`) VALUES (NULL,'$_POST[cad_re_id]','$_POST[center1]','$_POST[center2]','$_POST[center3]]')")or die( mysqli_error( $conn ) );



    ?>
    <script type="text/javascript">
        alert( "Registered successfully!" );
        window.location = "uploaddoc.php";
    </script>
    <?php

}
?>
