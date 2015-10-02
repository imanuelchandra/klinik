<?php
 
function usia($usia) {     
    $year = date("Y", strtotime($usia));
    $month = date("m", strtotime($usia));
    $day = date("d", strtotime($usia));
    $birthday = strtotime($year.'-'.$month.'-'.$day);
    $current_time = time();
    $curr['month'] = date('n', $current_time);
    $curr['lastmonth'] = $curr['month'] - 1;
    $curr['year'] = date('Y', $current_time);
    $curr['lastyear'] = $curr['year'] - 1;
    $curr['day'] = date('j', $current_time);

    $diff = $current_time - $birthday;
    $age['years'] = intval($diff/31556926);
    $diff = $diff - (31556926 * $age['years']);
    if($curr['month'] > $month) {
    	$age['months'] = $curr['month'] - $month;
    if($curr['day'] < $day) {
    	$age['months']--;
    	$month_temp = strtotime($curr['year'].'-'.$curr['lastmonth'].'-'.$day);
    } else {
    	$month_temp = strtotime($curr['year'].'-'.$curr['month'].'-'.$day);
    }
    	$diff = $current_time - $month_temp;
    } elseif($curr['month'] == $month) {
    if($curr['day'] >= $day) {
    	$age['months'] = 0;
    } else {
    	$age['months'] = 11;
    	$month_temp = strtotime($curr['year'].'-'.$curr['lastmonth'].'-'.$day);
    	$diff = $current_time - $month_temp;
    }
    } else {
    	$age['months'] = $curr['month'] - $month + 12;
    if($curr['day'] < $day) {
    	$age['months']--;
    	$month_temp = strtotime($curr['year'].'-'.$curr['lastmonth'].'-'.$day);
    } else {
    	$month_temp = strtotime($curr['year'].'-'.$curr['month'].'-'.$day);
    }
    	$diff = $current_time - $month_temp;
    }

    $age['days'] = intval($diff/86400);
    $diff = $diff - (86400 * $age['days']);

    $age['hours'] = intval($diff/3600);
    $diff = $diff - (3600 * $age['hours']);

    $age['minutes'] = intval($diff/60);
    $diff = $diff - (60 * $age['minutes']);

    $age['seconds'] = $diff;

    return $age['years'];

}