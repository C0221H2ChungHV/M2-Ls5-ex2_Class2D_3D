<?php
include_once('Point3D.php');
$Test2D = new Point2D(6.5, 7.6);
$Test2D->setXY(1.2, 2.1);
$Test3D = new Point3D(7, 8, 9);
$Test3D->setXYZ(7.1, 8.2, 9.3);
var_dump($Test3D->getXYZ());
echo "<br/>";
var_dump($Test2D->getXY());
echo "<br/>";
echo $Test3D->toString();


