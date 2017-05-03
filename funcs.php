
<?php

  // Returns date string of most recent results from ./results/*
  function mostRecentAnalysis()
  {
    $dates = scandir('results');
    sort($dates);
    return end($dates);
  } 

  // Returns array of results from ./results/*
  function availableAnalysis()
  {
    $dates = scandir('results/');
    rsort($dates);
    return $dates;
  } 

?>
