<?php 
    $bg = array( 'background-1.jpg', 'background-2.jpg', 'background-3.jpg', 'background-4.jpg', 'background-5.jpg' ); 
    $i= rand(0, count($bg)-1);
    $selectedBg="$bg[$i]" ;
?>

<style type="text/css">
    html {
        background: url("img/<?php echo $selectedBg; ?>") no-repeat;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }
</style>