<? php

  // include provides a warning if it can't find the file, but continues to run the script
  include("include.php");
  
  // Include once will check if it's already been included, before adding it
  include_once("include_once.php");
  
  // Just like include, but will throw a Fatal Error if it's not found and will not run the rest of the script
  require("require.php");
  
  // Checks if it's been added before, and will not add it a second time
  require_once("require_once.php");
  
  ?>
