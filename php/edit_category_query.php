<!-- ابراهيم محمد فاتح بن رمضان -->
<!-- 2023/07/03 -->
<!-- Updating the category table with the new data -->
<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once "functions.php";
$conn = db_connection();
extract($_POST, EXTR_PREFIX_ALL, 'var');

$sql = "UPDATE category SET budget=$var_budget, budget_limit=$var_budget_limit, category_name='$var_category_name', reminder = '$var_reminder' WHERE category_id='$var_category_id';";
$conn->query($sql);
if (!$conn->query($sql))
{
    die ("error excuting query");
}
else 
{
    header("location:categories.php");
}

?>
