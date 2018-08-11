<!doctype html>

<head><title>Chapter 2 - Examples</title></head>

<body>

<ul>
  <li><a href="index.php">HTML Link</a></li>
  <li><a href="<? php echo 'index.php'; ?>">PHP Link</a></li>
</uL

<? php
  // Course provided Function
  // Defines the Root Name - www.domain.com or localhost.com/myprofile/projects/index
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);
  ?>

<? php
  // Course provided function
  // Function that adds the slash after root name automatically
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path; }
    return WWW_ROOT . $script_path; }
    ?>

<ul>
  <li><a href="index.php?index=1>PHP Link with one Variable</a></li>
  <li><a href="index.php?book2&page3>PHP Link with two Variable</a></li>
</ul>

<? php
  // Super Global Variables - Available in all Scopes and assigned before page processing
  // GET page and echo String Type [ default type ]
  $page = $_GET['page'];
  echo gettype($page);
  
  // GET page_as_int and echo integer from cast
  $page_as_int = (int) $get['page];
  echo gettype($page_as_int);
</body>
</html>
