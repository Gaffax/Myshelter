<?php
    include 'config/setup.php';
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
                <h1 class="page-header">Allowed stuff
                    <small>Insert a new allowed stuff thingie</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
              <form action = <?php echo D_INSERT."/allowed.php";?> method="post">
                <p>
                  <!-- Website -->
                  <label for="name">Name:</label>
                  <input type="text" name="name" id="name">
                </p>
                <p>
                  <!-- Website -->
                  <label for="description">Beskrivelse:</label>
                  <input type="text" name="description" id="description">
                </p>

                <input type="submit" value="Submit">
              </form>
            </div>
        </div>

    </div>
</body>
</html>

<!-- Finishes the page. Must be the last item in the page -->
<?php include 'config/setup_end.php'; ?>
