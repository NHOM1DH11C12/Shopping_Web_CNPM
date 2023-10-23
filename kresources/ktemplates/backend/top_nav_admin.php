<div class="navbar-header " style="padding-left:0px">
    <a class="navbar-brand" href="index.php"><i class="fa fa fa-users-cog"></i>Admin</a>
    <a class="navbar-brand" href="..\index.php">Trang chủ</a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="nav navbar-right top-nav">
    <a href="#" data-toggle="dropdown"><i class="fa fa-user-circle"></i>
        <?php echo user_name(); ?> <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Thoát</a>
        </li>
    </ul>
</div>