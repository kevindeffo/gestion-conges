<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION DES CONGES</title>
    <link rel="shortcut icon" type="image/png" href="../src/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../src/assets/css/styles.min.css" />
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <?php include 'header.php'; ?>
        <?php include 'sidebar.php'; ?>
        <div class="body-wrapper">
            <div class="body-wrapper-inner">
                <div class="container-fluid">
                    <!-- Main Content -->
                    <?php echo $content; ?>
                    <!-- Main Content End -->
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
    <script src="../src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../src/assets/js/sidebarmenu.js"></script>
    <script src="../src/assets/js/app.min.js"></script>
    <script src="../src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../src/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../src/assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>
</html>