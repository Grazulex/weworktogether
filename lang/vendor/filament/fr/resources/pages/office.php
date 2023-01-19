<?php

return [

    'title' => 'Votre bureau',
    'title_plural' => 'Vos bureaux',
    'group' => 'Vos partages & demandes',
    'section' => [
        'home' => [
            'label' => 'Votre maison',
            'description' => 'Information à propos de votre maison',
        ],
        'workspace' => [
            'label' => 'Votre bureau',
            'description' => 'Information à propos de votre bureau',
        ],
        'eatanddrink' => [
            'label' => 'Manger & boire',
            'description' => 'Proposez des facilités pour des repas et des boissons',
        ],
        'relationship' => [
            'label' => 'Relation',
            'description' => 'Pour une bonne coahbition, que vous attendez-vous de votre partenaire ?',
        ],
    ],
    'step' => [
        'location' => [
            'label' => 'Lieu',
            'description' => 'Information à propos du lieu de votre bureau',        
        ],
        'workspace' => [
            'label' => 'Votre bureau',
            'description' => 'Information à propos de votre bureau',
        ],
        'eatanddrink' => [
            'label' => 'Manger & boire',
            'description' => 'Proposez des facilités pour des repas et des boissons',
        ],
        'relationship' => [
            'label' => 'Relation',
            'description' => 'Pour une bonne coahbition, que vous attendez-vous de votre partenaire ?',
        ],
    ],
    'table' => [
        'name' =>  [
            'label' => 'Nom',
        ],
        'places' =>  [
            'label' => 'Places',
        ],
        'status' =>  [
            'label' => 'Statut',
        ],
    ],
    'form' => [
        'name' => [
            'label' => 'Nom',
            'helper' => 'Donnez un nom facile pour tout le monde ("recherche d\'un collège sympa", "pourquoi ne pas être ensemble",..)',
        ],
        'is_free' => [
            'label' => 'Gratuit',
            'helper' => 'Est-ce que se partage est gratuit ?',
        ],
        'description' => [
            'label' => 'Description',
            'helper' => 'Décrivez votre partage',
        ],
        'days' => [
            'label' => 'Jours',
            'helper' => 'Quels jours votre partage est-il disponible ?',
            'options' => [
                'monday' => 'Lundi',
                'tuesday' => 'Mardi',
                'wednesday' => 'Mercredi',
                'thursday' => 'Jeudi',
                'friday' => 'Vendredi',
                'saturday' => 'Samedi',
                'sunday' => 'Dimanche',
            ],
        ],
        'location' => [
            'label' => 'Adresse',
            'helper' => 'Adresse de votre partage. Cette information ne sera pas affichée publiquement.',
        ],
        'places' => [
            'label' => 'Places',
            'helper' => 'Combien de places sont disponibles ?',
        ],
        'have_internet' => [
            'label' => 'Internet',
            'helper' => 'Est-ce que votre partage a une connexion internet ?',
        ],
        'have_desk' => [
            'label' => 'Bureau',
            'helper' => 'Est-ce que vous proposez un bureau et non une table ?',
        ],
        'have_printer' => [
            'label' => 'Imprimante',
            'helper' => 'Est-ce que votre partage a une imprimante ?',
        ],
        'have_scanner' => [
            'label' => 'Scanner',
            'helper' => 'Est-ce que votre partage a un scanner ?',
        ],
        'have_fax' => [
            'label' => 'Fax',
            'helper' => 'Est-ce que votre partage a un fax ?',
        ],
        'have_parking' => [
            'label' => 'Parking',
            'helper' => 'Est-ce que votre partage a un parking ?',
        ],
        'have_meeting_room' => [
            'label' => 'Salle de réunion',
            'helper' => 'Est-ce que votre partage a une salle de réunion ou un autre endroit pour pouvoir travailler seul?',
        ],
        'tranquility' => [
            'label' => 'Tranquille',
            'helper' => 'Est-ce que votre partage est calme ? (présence enfant, bruit,..) Veuillez noter sur une échelle de 1 à 5. 1 = très bruyant, 5 = très calme',
        ],
        'workspace_size' => [
            'label' => 'Taille',
            'helper' => 'Quelle est la taille de votre partage ? Veuiilez noter sur une échelle de 1 à 5. 1 = très petit, 5 = très grand',
        ],
        'give_coffee' => [
            'label' => 'Café',
            'helper' => 'Est-ce que vous proposez du café gratuitement ?',
        ],
        'give_water' => [
            'label' => 'Eau',
            'helper' => 'Est-ce que vous proposez de l\'eau gratuitement ?',
        ],
        'have_fridge' => [
            'label' => 'Réfrigérateur',
            'helper' => 'Est-ce que votre partage a un réfrigérateur ?',
        ],
        'have_microwave' => [
            'label' => 'Micro-ondes',
            'helper' => 'Est-ce que votre partage a un micro-ondes ?',
        ],
        'have_garden' => [
            'label' => 'Jardin',
            'helper' => 'Est-ce que votre partage a un jardin ?',
        ],
        'accept_smoker' => [
            'label' => 'Fumeur',
            'helper' => 'Est-ce que votre partage accepte les fumeurs ?',
        ],
        'accept_languages' => [
            'label' => 'Langues',
            'helper' => 'Quelles langues sont parlées dans votre partage ?',
            'options' => [
                'french' => 'FR',
                'english' => 'EN',
                'german' => 'DE',
                'spanish' => 'ES',
                'italian' => 'IT',
                'dutch' => 'NL',
                'other' => 'Autre',
            ]
        ],
    ]

];
