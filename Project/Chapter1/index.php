<? php
  // Class Example - Demonstrates Require, Include, and being able to re-use code in PHP
  ?>

<? php
  // General Functions
  require_once('../../private/initialize.php'); ?>

<? php
  // Standard Header
  include('../../private/shared/header.php'); ?>

<div id="content">
</div>

<? php
  // Standard Footer
  include('../../private/shared/staff_footer.php'); ?>
  
<? php
  // Example: using DEFINE to shorten path names - Useful for common Folders, Root structure, etc.
  define("SHARED", 'localhost:8080/project/private/shared');
  include(SHARED . '/staff_footer.php');
  ?>
