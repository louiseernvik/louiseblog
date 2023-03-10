<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="sub-profile.php">LouiseBlog Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../sub-index.php">Home site</a></li>
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                <?php 
                    if(isset($_SESSION['username'])){
                        echo $_SESSION['username'];
                    }
                ?>    
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="sub-profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar Menu Items -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="sub-profile.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
            </li>
            <li>
                <a href="sub_posts.php?source=sub_add_post">Add Posts</a>
            </li>
        </ul>
    </div>
</nav>