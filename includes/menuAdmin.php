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
        <a href="#"><span class="fa fa-angle-down"></span> Evaluateur</a>
        <ul>
            <li><a href="addEvaluateur.php"><span class="fa fa-plus"></span> Ajouter</a></li>
            <li><a href="afecterEva.php"><span class="fa fa-link"></span> Affecter</a></li>
            <li><a href="listEvaluator.php"><span class="fa fa-list"></span> Liste</a></li>
        </ul>
    </li>
    <li class="xn-openable">
        <a href="#"><span class="fa fa-angle-down"></span> Categories</a>
        <ul>
            <li><a href="addCategorie.php"><span class="fa fa-plus"></span> Ajouter</a></li>
            <li><a href="listCategorie.php"><span class="fa fa-list"></span> Lister</a></li>
        </ul>
    </li>
    <li class="xn-openable">
        <a href="addSujet.php"><span class="fa fa-plus"></span> Ajouter Sujet</a>
    </li>
    <li class="xn-openable">
        <a href="listProjet.php"><span class="fa fa-list"></span> Projets</a>
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
    <li class="xn-openable pull-right last">
        <a href="#"><span class="fa fa-plus"></span> Profil</a>
        <ul>
            <li><a href="showProfil.php"><i class="fa fa-eye"></i> Afficher</a></li>
            <li><a href="editeProfil"><i class="fa fa-cloud"></i> Modifier</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../scripts/logout.php?dec"><i class="fa fa-sign-out"></i> Se déconnecté</a></li>
        </ul>
    </li>
</ul>
<!-- END X-NAVIGATION VERTICAL -->