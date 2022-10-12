<!DOCTYPE html>
<html lang="sv">
    <head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/place.css">
	<title>PHP Date</title>
<script src='https://cdn.jsdelivr.net/npm/@widgetbot/crate@3' async defer>
</script>
    <link rel="stylesheet" href="main.css">
    <style>
        li{
            color: green;
    position:relative;
    display: inline-block;
}

    </style>
    </head>
    <body>
    <h1>Second page</h1>    
    <br>
    <head></head>
    <?php
            $dayAmount = date("t");
            $today = date("d");
            $month = $_GET['month'];
            $year = $_GET['year'];
            $dayYear = date("z");
            $nextMonth = date('Y-m-d', strtotime('+1 month'));
            $ymd = strtotime("$year"."-"."$month"."-"."$i");
            $i = 1;           
            if(null == $year){
                $year = date('Y');
            }
            $currentYear = "$year-$month-$today";
            // if($month == "12"){
            //     echo "<a href='?month=".date("m", strtotime($currentYear.' +1 year'))."'>Next month</a><br>";´
            // }
            echo "<a href='?month=".date("m", strtotime($currentYear.' +1 month'))."'>Next month</a><br>";
            echo "<a  href='?month=".date("m", strtotime($currentYear.' -1 month'))."'>Last month</a>";

        function printDay($i, $dayAmount, $year, $month, $_month, $dayYear, $today){
            echo "<h1>".date('Y M',strtotime($year.'-'.$month.'-1'))."</h1>";
            while($i<= ((int)$dayAmount)){
                $weeknum = $dayYear/7;
                $weekCeil = ceil($weeknum);
                if(date("D", strtotime("$year-$month-$i")) == "Sun"){
                    if($i == $today){
                        echo "<li class='dag weekend'>".date("D", strtotime("$year-$month-$i"))."<br><p class='today'>".date(" $i")."</p> </li>";
                    }
                    else{
                        echo "<li class='dag weekend'>".date("D", strtotime("$year-$month-$i"))."   ".date("$i")." </li>";
                    }
                }
                else if(date("D", strtotime("$year-$month-$i")) == "Mon"){
                    if($i == $today){
                        echo "<li class='dag today'>".date("D", strtotime("$year-$month-$i"))."   ".date("$i")."<p class='week'>week: ".date("W", strtotime($year.'-'.$month.'-'.$i))." </p></li>";
                    }
                    else{
                        echo "<li class='dag weekday'>".date("D", strtotime("$year-$month-$i"))."   ".date("$i")."<p class='week'>week: ".date("W", strtotime($year.'-'.$month.'-'.$i))." </p></li>";
                    }}
                else{
                    if($i == $today){
                        echo "<li class='dag today'>".date("D", strtotime("$year-$month-$i"))."   ".date("$i")."<p class='week'> Today </p></li>";
                    }
                    else{
                        echo "<li class='dag weekday'>".date("D", strtotime("$year-$month-$i"))."   ".date(" $i")." </li>";
                    }
                }
                $i++;
                $dayYear++;
            };
        };
    // echo     "<p>Year: ".date("Y")."</p><br>";
    // echo     date("F")."<br>";
    // echo     "<p> Week number: ".date("W")."</p><br>";
    echo "<ul>".printDay($i, $dayAmount, $year, $month, $_month, $dayYear, $today)."</ul>";
    ?>
</html>
 