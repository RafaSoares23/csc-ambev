<?php

if ($configDB["User"] === FALSE) {
  $configDB["User"] = "root";
}
if ($configDB["Pass"] === FALSE) {
  $configDB["Pass"] = "";
}
if ($configDB["Host"] === FALSE) {
  $configDB["Host"] = "localhost";
}
if ($configDB["Name"] === FALSE) {
  $configDB["Name"] = "";
}

define("LOADER_CACHE", false);
define("LOADER_CACHE_RESET", false);
