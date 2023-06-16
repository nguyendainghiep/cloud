<?php
        $Connect = mysqli_connect("pfw0ltdr46khxib3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","fwu9no04dbu312al","chppz80ot7o0ybtf","ina709owwfh27bn1") or die ("Lỗi".mysqli_error($Connect));
        //$Connect = mysqli_connect("mysql://fwu9no04dbu312al:chppz80ot7o0ybtf@pfw0ltdr46khxib3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/ina709owwfh27bn1")
        mysqli_query($Connect,'SET NAME "utf8"')
        //mysqli_close($Connect)
?>