<?php   
$logStat = "1" ;// link this to a variable for logged in status
    // 1 for log in 
    // 2 for log out
$string ="Loged in";
$color = "darkgreen";
$bcolor = "greenyellow";
    
if($logStat==1)
{
    $string ="Loged in";
    $color = "darkgreen";
    $bcolor = "greenyellow";
}
else
{
    $string ="Loged Out";
    $color = "#004080";
    $bcolor = "#99ccff";
}
echo'    <div id = "logedInPopUp" style="font-size:1.3em;position: fixed;top:130px;z-index:1;width:200px;background-color: '.$bcolor.';     color:'.$color.'; text-align: center;left: 50%; margin-left: -100px;border-radius: 0px 0px 10px 10px;">'.$string.'</div><script>
        $(document).ready(
            function(){
                $("#logedInPopUp").fadeIn();
                setTimeout(function(){$("#logedInPopUp").fadeOut();}, 2000);
            }
        );
</script>
     ';   
?>