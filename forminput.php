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
                <h1 class="page-header">Portfolio Item
                    <small>Item Subheading</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
              <form action="insert/institution.php" method="post">
                <p>
                  <!-- Institutions navn -->
                  <label for="institution">Institutions navn:</label>
                  <input type="text" name="institution" id="institution">
                </p>
                <p>
                  <!-- Vej name -->
                  <label for="roadname">Vej navn:</label>
                  <input type="text" name="roadname" id="roadname">
                </p>
                <p>
                  <!-- Hus nummer -->
                  <label for="housenumber">Hus nummer:</label>
                  <input type="text" name="housenumber" id="housenumber">
                </p>
                <p>
                  <!-- Etage -->
                  <label for="floor">Etage:</label>
                  <input type="text" name="floor" id="floor">
                </p>
                <p>
                  <!-- Dør -->
                  <label for="door">Dør:</label>
                  <input type="text" name="door" id="door">
                </p>
                <p>
                  <!-- By -->
                  <label for="city">By:</label>
                  <input type="text" name="city" id="city">
                </p>
                <p>
                  <!-- Land -->
                  <label for="country">Land:</label>
                  <input type="text" name="country" id="country">
                </p>
                <p>
                  <!-- Telefon -->
                  <label for="cellphone">Telefon:</label>
                  <input type="text" name="cellphone" id="cellphone">
                </p>
                <p>
                  <!-- Website -->
                  <label for="website">Website:</label>
                  <input type="text" name="email" id="website">
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
