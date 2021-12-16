<!-- <link rel="stylesheet" href="css/general.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/queries.css" /> -->

<style>
  .text-description {
    font-size: 2rem;
    line-height: 1.6;
    /* margin-bottom: 4.8rem; */
  }

  .search-box {
    display: inline-block;
    text-decoration: none;
    font-size: 1.5rem;
    padding: 1.6rem 3.2rem;
    border-radius: 9px;
    border: none;
    cursor: pointer;
    transition: all 0.3s;
  }
</style>

<header class="header">
  <nav>
    <i class='bx bx-menu'></i>
    <!-- <a href="#" class="nav-link">Categories</a> -->
    <form id="manage-search">
      <div class="form-input">
        <input type="text" id="find" placeholder="Search..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
        <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
      </div>
    </form>
    <input type="checkbox" id="switch-mode" hidden>
    <label for="switch-mode" class="switch-mode"></label>
    <div class="dropdown mr-4">
      <a href="#" class="main-nav-link dropdown-toggle" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> </a>
      <div class="dropdown-menu" aria-labelledby="account_settings">
        <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i>Manage Account</a>
        <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i>Logout</a>
      </div>
    </div>


    <!-- </nav>
  <a href="index.php">
    <img class="logo" alt="YukBisnis logo" src="img/YukBisnis!.png" />
  </a> -->

    <!-- <nav class="main-nav">
    <ul class="main-nav-list">
      <form id="manage-search">
        <input class="search-box" type="text" placeholder="Search something" id="find" class="form-control" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
      </form>
      <li><a class="main-nav-link" href="homeline.php?page=home">Home</a></li>
      <li><a class="main-nav-link" href="homeline.php?page=categories">Categories</a></li>
      <li>
        <a class="main-nav-link" href="homeline.php?page=topics">Discussions</a>
      </li>

      <div class="dropdown mr-4">
        <a href="#" class="main-nav-link dropdown-toggle" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> </a>
        <div class="dropdown-menu" aria-labelledby="account_settings">
          <a class="dropdown-item text-description" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i>Manage Account</a>
          <a class="text-description dropdown-item regular-text" href="ajax.php?action=logout"><i class="fa fa-power-off"></i>Logout</a>
        </div>
      </div>
      <li><?php if ($_SESSION['login_type'] == 1) : ?>
          <a href="homeline.php?page=users" class="main-nav-link"><span class='icon-field'><i class="fa fa-users"></i></span>Users</a>
        <?php endif; ?>
      </li>
    </ul>
  </nav>

  <button class="btn-mobile-nav">
    <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
    <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
  </button> -->
</header>


<script>
  $('#manage_my_account').click(function() {
    uni_modal("Manage Account", "manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
  $('#find').keypress(function(e) {
    if (e.which == 13) {
      $('#manage-search').submit()
    }
  })
  $('#manage-search').submit(function(e) {
    e.preventDefault()
    location.href = "homeline.php?page=search&keyword=" + $('#find').val()
  })

  const switchMode = document.getElementById('switch-mode');

  switchMode.addEventListener('change', function() {
    if (this.checked) {
      document.body.classList.add('dark');
    } else {
      document.body.classList.remove('dark');
    }
  })
</script>