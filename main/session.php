<?php include_once "includes/head.php" ?>
<?php
if (isset($_GET['status'])) {
    $_SESSION['status'] = 'active';
} else {
    header("Location: consult.php");
}
?>

<!-- General consult payment -->

