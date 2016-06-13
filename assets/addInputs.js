$(document).ready(function () {

    $(".supprimerFormation").hide();

    $(".ajoutFormation").click(function (){
        var form = $(this).closest('form');
        var expList = form.find('.formation');
        // Le nombre des formations déjà présents
        var n = expList.length;
        // Le premier formation que l'on va cloner
        var firstFormation = $(expList[0]);
        // Le dernier formation de la liste
        var lastFormation = $(expList[n-1]);
        // Une formation cloné
        var clonedFormation = firstFormation.clone();

        // Pour chaque input clonés
        clonedFormation.find(':input').each(function() {
            // On vide la valeur
            $(this)
                .filter(':text').val('').end()
            // On change le nom en ajoutant le numero
            $(this).attr('name', $(this).attr('name')+n)
        })

        // On l'ajoute au dom après les autres
        clonedFormation.insertAfter(lastFormation).hide().fadeIn('slow');

        // On ajoute le le lien de suppression
        $(".supprimerFormation").fadeIn("fast");

    });

    $(".supprimerFormation").click(function (){
        var formation = $(".formation:last");
        formation.remove();

        // S'il y a moins de 2 formations (autrement dit un seul) on cache le bouton supprimer.
        if ( $(".formation").length < 2 ) { $(".supprimerFormation").fadeOut("fast"); }

    });
    
    $(".supprimerExp").hide();
    
    $(".ajoutExp").click(function (){
        var form = $(this).closest('form');
        var expList = form.find('.exp');
        // Le nombre des formations déjà présents
        var n = expList.length;
        // Le premier formation que l'on va cloner
        var firstExp = $(expList[0]);
        // Le dernier formation de la liste
        var lastExp = $(expList[n-1]);
        // Une formation cloné
        var clonedExp = firstExp.clone();

        // Pour chaque input clonés
        clonedExp.find(':input').each(function() {
            // On vide la valeur
            $(this)
                .filter(':text').val('').end()
            // On change le nom en ajoutant le numero
            $(this).attr('name', $(this).attr('name')+n)
        })

        // On l'ajoute au dom après les autres
        clonedExp.insertAfter(lastExp).hide().fadeIn('slow');

        // On ajoute le le lien de suppression
        $(".supprimerExp").fadeIn("fast");

    });


    $(".supprimerExp").click(function (){
        var exp = $(".exp:last");
        exp.remove();

        // S'il y a moins de 2 formations (autrement dit un seul) on cache le bouton supprimer.
        if ( $(".exp").length < 2 ) { $(".supprimerExp").fadeOut("fast"); }

    });


    $(".supprimerEquipement").hide();

    $(".ajoutEquipement").click(function (){
        var form = $(this).closest('form');
        var equipementList = form.find('.equipement');
        // Le nombre des formations déjà présents
        var n = equipementList.length;
        // Le premier formation que l'on va cloner
        var firstEquipement = $(equipementList[0]);
        // Le dernier formation de la liste
        var lastEquipement = $(equipementList[n-1]);
        // Une formation cloné
        var clonedEquipement = firstEquipement.clone();

        // Pour chaque input clonés
        clonedEquipement.find(':input').each(function() {
            // On vide la valeur
            $(this)
                .filter(':text').val('').end()
            // On change le nom en ajoutant le numero
            $(this).attr('name', $(this).attr('name')+n)
        })

        // On l'ajoute au dom après les autres
        clonedEquipement.insertAfter(lastEquipement).hide().fadeIn('slow');

        // On ajoute le le lien de suppression
        $(".supprimerEquipement").fadeIn("fast");

    });


    $(".supprimerEquipement").click(function (){
        var equipement = $(".equipement:last");
        equipement.remove();

        // S'il y a moins de 2 formations (autrement dit un seul) on cache le bouton supprimer.
        if ( $(".equipement").length < 2 ) { $(".supprimerEquipement").fadeOut("fast"); }

    });

    $(".supprimerCoequipier").hide();

    $(".ajoutCoequipier").click(function (){
        var form = $(this).closest('form');
        var coequipierList = form.find('.coequipier');
        // Le nombre des formations déjà présents
        var n = coequipierList.length;
        // Le premier formation que l'on va cloner
        var firstCoequipier = $(coequipierList[0]);
        // Le dernier formation de la liste
        var lastCoequipier = $(coequipierList[n-1]);
        // Une formation cloné
        var clonedCoequipier = firstCoequipier.clone();

        // Pour chaque input clonés
        clonedCoequipier.find(':input').each(function() {
            // On vide la valeur
            $(this)
                .filter(':text').val('').end()
            // On change le nom en ajoutant le numero
            $(this).attr('name', $(this).attr('name')+n)
        })

        // On l'ajoute au dom après les autres
        clonedCoequipier.insertAfter(lastCoequipier).hide().fadeIn('slow');

        // On ajoute le le lien de suppression
        $(".supprimerCoequipier").fadeIn("fast");

    });


    $(".supprimerCoequipier").click(function (){
        var coequipier = $(".coequipier:last");
        coequipier.remove();

        // S'il y a moins de 2 formations (autrement dit un seul) on cache le bouton supprimer.
        if ( $(".coequipier").length < 2 ) { $(".supprimerCoequipier").fadeOut("fast"); }

    });


});