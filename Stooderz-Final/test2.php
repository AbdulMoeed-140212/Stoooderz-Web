<?php


$row['courseid']=10;
        echo "<span id=\"courseid-".$row['courseid']." \" >";
        echo " Course ID ".$row["courseid"];
        echo "</span>";
    ?>

    <?php
        echo "<i class=\"glyphicon glyphicon-plus\" id=\"enroll\" data-id=\"courseid-".$row["courseid"]." \"></i>";
        echo "<span>Enroll</span>";

    ?>