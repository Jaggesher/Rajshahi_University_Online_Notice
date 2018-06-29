<?php

if(TRUE){
    $vl=$_POST["Tm"];
    $Tm=substr($vl,1);

    include 'dbconnect.php';

    if($vl[0] == 'G')
        $sql="DELETE FROM general_ntc WHERE ID=".$Tm;
    else if($vl[0] == 'A')
        $sql="DELETE FROM admin_ntc WHERE ID=".$Tm;
    else if($vl[0] == 'H')
        $sql="DELETE FROM hall_ntc WHERE ID=".$Tm;
    else if($vl[0] == 'F')
        $sql="DELETE FROM faculty_ntc WHERE ID=".$Tm;

    if($conn->query($sql)===TRUE){
        echo "OK";
    }else{
        echo "Error_RG =" . $conn->error;
    }
}else{
    echo "You Are Not Logged IN.";
}
?>