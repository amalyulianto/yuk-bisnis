<meta content="" name="descriptison">
<meta content="" name="keywords">



<!-- Google Fonts -->
<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
<link rel="stylesheet" href="assets/font-awesome/css/all.min.css">


<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="assets/DataTables/datatables.min.css" rel="stylesheet">
<link href="assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
<link href="assets/css/select2.min.css" rel="stylesheet">
<link href="assets/css/PagingStyle.css" rel="stylesheet">
<link rel="icon" href="img/favicon.png" />
<link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
<link rel="manifest" href="manifest.webmanifest" />
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<!-- <link rel="stylesheet" href="css/general.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/queries.css" /> -->

<link rel="stylesheet" href="css/home.css" />

<!-- Template Main CSS File -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" /> -->

<!-- <link href="assets/css/style.css" rel="stylesheet"> -->
<link type="text/css" rel="stylesheet" href="assets/css/jquery-te-1.4.0.css">

<script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>

<script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
<script defer src="js/script.js"></script>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/DataTables/datatables.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="assets/js/select2.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="assets/font-awesome/js/all.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
<script type="text/javascript" src="assets/js/paging.js" charset="utf-8"></script>


<script>
  const menuBar = document.querySelector('#content nav .bx.bx-menu');
  const sidebar = document.getElementById('sidebar');

  menuBar.addEventListener('click', function() {
    sidebar.classList.toggle('hide');
  })

  const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

  allSideMenu.forEach(item => {
    const li = item.parentElement;

    item.addEventListener('click', function() {
      allSideMenu.forEach(i => {
        i.parentElement.classList.remove('active');
      })
      li.classList.add('active');
    })
  });
</script>