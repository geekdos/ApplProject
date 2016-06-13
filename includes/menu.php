<!-- START X-NAVIGATION VERTICAL -->
<ul class="x-navigation x-navigation-horizontal">
    <li class="xn-logo">
        <a href="http://www.irc.ma/" target="_blank">Appl Project</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-openable">
        <a href="index.php"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>
    </li>
    <li class="xn-openable">
        <a href="inscriptionCandidate.php"><span class="fa fa-pencil"></span> <span class="xn-text">Inscription</span></a>
    </li>
    <!-- POWER OFF -->
    <li class="xn-openable pull-right">
        <?php if (!isset($_SESSION['id'])){ ?>
            <a href="loginPage.php"><span class="fa fa-sign-in"></span> Se connecter</a>
        <?php }else { ?>
            <a href="../scripts/logout.php?dec" ><span class="fa fa-sign-out"></span> Se Déconnecter</a>
        <?php }?>
    </li>
    <!-- END POWER OFF -->
</ul>
<!-- END X-NAVIGATION VERTICAL -->