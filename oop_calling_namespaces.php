<?php
include "Html.php";
// namespace Html;
use Html\Table;
use Html\Row;

$table = new Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Row();
$row->numCells = 3;
?>



<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>