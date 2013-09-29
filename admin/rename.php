<?php
function rmdirr($dirname)
{
// Sanity check
if (!file_exists($dirname)) {
return false;
}

// Simple delete for a file
if (is_file($dirname)) {
return unlink($dirname);
}

// Loop through the folder
$dir = dir($dirname);
while (false !== $entry = $dir->read()) {
// Skip pointers
if ($entry == '.' || $entry == '..') {
continue;
}

// Recurse
rmdirr("$dirname/$entry");
}

// Clean up
$dir->close();
return rmdir($dirname);
}
 
rmdirr("../../RoboticsWebsite");
//rename the folder
rename("../../RoboticsWebsite-master", "../../RoboticsWebsite");
//and, we are done!
echo "Success! The site should have been updated, but you should go look and make sure.";
?>