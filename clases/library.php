<?php
require "clases.php";
include('conect.php');

$rw = mysqli_query($con, "SELECT * FROM articles WHERE class LIKE 'block' ");

$sidemodules = array();
while ($row = mysqli_fetch_row($rw)) {
    $m = new Modul;
    $m->title = $row[0];
    $m->img = $row[3];
    $m->content = $row[1];
    $m->class = $row[2];
    $sidemodules[] = $m;
}

$rw = mysqli_query($con, "SELECT * FROM articles WHERE class LIKE 'main' ");

$mainModules = array();
while ($row = mysqli_fetch_row($rw)) {
    $m = new Modul;
    $m->title = $row[0];
    $m->img = $row[3];
    $m->content = $row[1];
    $m->class = $row[2];
    $mainModules[] = $m;
}

mysqli_close($con);
