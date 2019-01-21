
<?php
include "./connect.php";

$result = mysqli_query($connection,'SELECT * FROM Products');
if (!$result) die('Couldn\'t fetch records');
$num_fields=mysqli_num_fields($result);
$headers = array();
for ($i = 0; $i < $num_fields; $i++) {
 //   $headers[] = mysql_field_name($result , $i);
}
$fp = fopen('php://output', 'w');
if ($fp && $result) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="export.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');
    fputcsv($fp, $headers);
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        fputcsv($fp, array_values($row));
    }
    die;
}
