<?php
    include 'config/setup.php';
    include 'functions/dyntable.php';

    $dbc = dbconnect();
    $page = "Hostel";
 ?>

<!DOCTYPE html>
<html lang=<?php echo D_LANGUAGE; ?>>

<head>

    <?php include D_TEMPLATE.'/htmlmetadata.php'; ?>

    <title>Myshelter | Test site</title>

    <!--Css master page-->
    <?php include 'config/setupcss.php'; ?>

</head>

<body>

    <!-- Navigation -->
    <?php include D_TEMPLATE.'/navigation.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Portfolio Item
                    <small>Item Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Institution list Row -->
        <?php include D_TEMPLATE.'/institutionlist.php'; ?>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <?php include D_TEMPLATE.'/projectexamplesplaceholder.php'; ?>
        <!-- /.row -->

        <!-- Footer -->
        <?php include D_TEMPLATE.'/footer.php'; ?>
        <!-- /.row -->

    </div>
</body>
</html>

<!-- Finishes the page. Must be the last item in the page -->
<?php include 'config/setup_end.php'; ?>
