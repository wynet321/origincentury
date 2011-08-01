<?php
include 'newdb.php';

$db=new Db();
#$a=$db->getResultArray("select * from table1;");
echo $db->getResultArrayRowsNum("select * from table1 where id='1000';");
$db->close();

?>

