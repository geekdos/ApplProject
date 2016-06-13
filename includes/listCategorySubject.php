<?php foreach ($categorie->getAllCategories() as $values): ?>
    <div class="col-md-4">
        <!-- LINKED LIST GROUP-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= $values['nom_categorie']; ?></h3>
            </div>
            <div class="panel-body">
                <div class="list-group border-bottom">
                    <?php foreach ($sujet->getAllSubjectCat($values['id_categorie']) as $values1): ?>
                        <?php if (isset($_SESSION['id'])) {?>
                            <?= "<a href='addProjet.php?id_subjet=".$values1['id_sujet']."' class='btn btn-link'>" ?>
                            <?= $values1['nom_sujet']; ?>
                            </a>
                        <?php }else{?>
                            <?= "<a href='candidat/addProjet.php?id_subjet=".$values1['id_sujet']."' class='list-group-item'>" ?>
                            <?= $values1['nom_sujet']; ?>
                            </a>
                        <?php }?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- END LINKED LIST GROUP-->
    </div>
<?php endforeach; ?>