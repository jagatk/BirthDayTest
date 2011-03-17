<?php

    function GetAge($Birthdate)
    {
        // Explode the date into meaningful variables
        list($BirthYear,$BirthMonth,$BirthDay) = explode("-", $Birthdate);
        // Find the differences
        $YearDiff = date("Y") - $BirthYear;
        $MonthDiff = date("m") - $BirthMonth;
        $DayDiff = date("d") - $BirthDay;
        // If the birthday has not occured this year
        if ($DayDiff < 0 || $MonthDiff < 0)
          $YearDiff--;
        return $YearDiff;
    }

    echo "<pre>";
    echo "Birth Date : 1982-10-25 " . "<br>Age : " . GetAge('1982-10-25');
    echo "</pre>";
	
	echo "<pre>";
    echo "Birth Date : 1984-04-26 " . "<br>Age : " . GetAge('1984-04-26');
    echo "</pre>";
?>