<?php
include "includes/ad_header.php";

$source = '';
$includeFile = '';

if (isset($_GET['source']) && !empty($_GET['source'])) {
    $source = $_GET['source'];
}

switch ($source) {
    case 'add_user';
        $includeFile = 'includes/add_user.php';
        break;
    case 'edit_user';
        $includeFile = 'includes/edit_user.php';
        break;
    default:
        $includeFile = 'includes/view_all_users.php';
}
?>

<div id="wrapper">
    <!-- Navigation -->
    <?php include "includes/ad_navigation.php" ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        All Users
                    </h1>

                    <?php include $includeFile; ?>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/script2.js"></script>

</body>

</html>