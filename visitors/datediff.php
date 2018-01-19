<?php

	function datediff($doa,$dod)
		{
			// This is a simple script to calculate the difference between two dates
			// and express it in years, months and days
			// // ****************************************************************************


			// configure the base date here
			//$base_day		= 11;		// no leading "0"
			//$base_mon		= 05;		// no leading "0"
			//$base_yr		= 2011;		// use 4 digit years!

			$arrival=explode('-',$doa);
			$base_yr=$arrival[2];
			$base_mon=$arrival[1];
			$base_day=$arrival[0];

			$depart=explode('-',$dod);
			$current_day= $depart[0];
			$current_mon= $depart[1];
			$current_yr	= $depart[2];
			
			// $arrival=explode('-',$doa);
			// echo $base_yr=$arrival[2],"yr";
			// echo $base_mon=$arrival[1];
			// echo $base_day=$arrival[0];

			// $depart=explode('-',$dod);
			// echo $current_day= $depart[0],"curr";
			// echo $current_mon= $depart[1];
			// echo $current_yr	= $depart[2]."ye ";


			// overflow is always caused by max days of $base_mon
			// so we need to know how many days $base_mon had
			$base_mon_max		= date ("t",mktime (0,0,0,$base_mon,$base_day,$base_yr));

			// days left till the end of that month
			$base_day_diff 		= $base_mon_max - $base_day;

			// month left till end of that year
			// substract one to handle overflow correctly
			$base_mon_diff 		= 12 - $base_mon - 1;

			// start on jan 1st of the next year
			$start_day		= 1;
			$start_mon		= 1;
			$start_yr		= $base_yr + 1;

			// difference to that 1st of jan
			$day_diff	= ($current_day - $start_day) + 1; 	// add today
			$mon_diff	= ($current_mon - $start_mon) + 1;	// add current month
			$yr_diff	= ($current_yr - $start_yr);

			// and add the rest of $base_yr
			$day_diff	= $day_diff + $base_day_diff;
			$mon_diff	= $mon_diff + $base_mon_diff;

			// handle overflow of days
			if ($day_diff >= $base_mon_max)
			{
				$day_diff = $day_diff - $base_mon_max;
				$mon_diff = $mon_diff + 1;
			}

			// handle overflow of years
			if ($mon_diff >= 12)
			{
				$mon_diff = $mon_diff - 12;
				$yr_diff = $yr_diff + 1;
			}

			// the results are here:

			// $yr_diff  	--> the years between the two dates
			// $mon_diff 	--> the month between the two dates
			// $day_diff 	--> the days between the two dates

			// ****************************************************************************

			// simple output of the results 
			//print "The difference between <b>".$base_yr."-".$base_mon."-".$base_day."</b> ";
			//print "and <b>".$current_yr."-".$current_mon."-".$current_day."</b> is:";
			//print "<br><br>";

			// this is just to make it look nicer
			$years = "years";
			$days = "days";
			$months= "months";
			if ($yr_diff == "1") $years = "year";
			if ($day_diff == "1") $days = "day";
			if($mon_diff == "1") $months = "month";

			// here we go
			//print $yr_diff." ".$years.", ";
			//print $mon_diff." month and ";
			//print $day_diff." ".$days;

			$period01=$yr_diff."-".$mon_diff."-".$day_diff;

			//echo "inside datediff stay period is $period";
			if($yr_diff!=0 && $mon_diff !=0 && $day_diff!=0)
			$period=$yr_diff." ".$years.",".$mon_diff." ".$months.",". $day_diff." ".$days;
			else
			if($yr_diff!=0 && $mon_diff !=0 && $day_diff==0)
			$period=$yr_diff." ".$years.",".$mon_diff." ".$months;
			else
			if($yr_diff!=0 && $mon_diff ==0 && $day_diff!=0)
			$period=$yr_diff." ".$years.",".$day_diff." ".$days;
			else
			if($yr_diff!=0 && $mon_diff ==0 && $day_diff==0)
			$period=$yr_diff." ".$years;
			else
			if($yr_diff==0 && $mon_diff !=0 && $day_diff!=0)
			$period= $mon_diff." ".$months.",".$day_diff." ".$days;
			else
			if($yr_diff==0 && $mon_diff ==0 && $day_diff!=0)
			$period= $day_diff." ".$days;
			else
			if($yr_diff==0 && $mon_diff !=0 && $day_diff==0)
			$period= $mon_diff." ".$months;

			//echo "inside datediff stay period is $period";

			return array($period, $yr_diff, $mon_diff, $day_diff); 
		}

?>