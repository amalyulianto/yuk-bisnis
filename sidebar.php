<style>
    .logo {
        height: 2.2rem;
    }
</style>

<section id="sidebar">
    <a href="index.php" class="brand">
        <!-- <i class='bx bxs-smile'></i> -->
        <h2>YukBisnis!</h2>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="homeline.php?page=home">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="homeline.php?page=topics">
                <i class='bx bxs-chat'></i>
                <span class="text">Discussions</span>
            </a>
        </li>



    </ul>
    <ul class="side-menu">
        <li>

            <?php if ($_SESSION['login_type'] == 1) : ?>
                <a href="homeline.php?page=categories">
                    <i class='bx bxs-category'></i>
                    <span class="text">Manage Categories</span>
                </a> <?php endif; ?>

        </li>
        <li>
            <?php if ($_SESSION['login_type'] == 1) : ?>
                <a href="homeline.php?page=users">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Manage Users</span>
                </a> <?php endif; ?>

        </li>

    </ul>
</section>

<script>
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