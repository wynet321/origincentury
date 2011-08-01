<?php
include 'db.inc';

$db=new Db();
$a=$db->getResultArray("select * from table1;");
echo "1.";
echo $a[0][1];
echo "2.";
echo $db->getResultArrayRowsNum("select * from table1 where id='1000';");
$db->close();

?>

