<?php

return [

    'title' => 'Votre demande',
    'title_plural' => 'Vos demandes',
    'group' => 'Vos partages & demandes',
    'form' => [
        'name' => [
            'label' => 'Nom',
            'helper' => 'Donnez un nom facile pour votre recherche ("recherche d\'un collège sympa", "pourquoi ne pas être ensemble",..)',
        ],
        'description' => [
            'label' => 'Description',
            'helper' => 'Décrivez votre recherche',
        ],
        'distance' => [
            'label' => 'Distance (km)',
            'helper' => 'Quelle distance êtes-vous prêt à parcourir ?',
        ],
        'location' => [
            'label' => 'Adresse',
            'helper' => 'Votre adresse pour calculer la distance avec les eventuels bureaux. Cette information ne sera pas affichée publiquement.',
        ],
    ],
    'table' => [
        'name' =>  [
            'label' => 'Nom',
        ],
        'offices' =>  [
            'label' => 'Quantité de bureaux trouvés',
        ],
        'status' =>  [
            'label' => 'Statut',
        ],
        'actions' =>  [
            'view' => [
                'label' => 'Voir les bureaux',
            ], 
        ],
    ],

];
