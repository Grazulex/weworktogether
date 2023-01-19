<?php

return [

    'title' => 'Uw aanvraag',
    'title_plural' => 'Jullie aanvragen',
    'group' => 'uw delen & verzoeken',
    'form' => [
        'name' => [
            'label' => 'Naam',
            'helper' => 'Geef een makkelijke naam voor iedereen ("zoek een leuke school", "waarom niet samen",..)'
        ],
        'description' => [
            'label' => 'Beschrijving',
            'helper' => 'Beschrijf uw aanvraag',
        ],
        'distance' => [
            'label' => 'Afstand',
            'helper' => 'Hoe ver bent u bereid te reizen?',
        ],
        'location' => [
            'label' => 'Locatie',
            'helper' => 'Uw locatie om de afstand te berekenen met de eventuele bureaus. Deze informatie wordt niet openbaar weergegeven.',
        ],
    ],
    'table' => [
        'name' =>  [
            'label' => 'Naam',
        ],
        'offices' =>  [
            'label' => 'Bureaus',
        ],
        'status' =>  [
            'label' => 'Status',
        ],
        'actions' =>  [
            'view' => [
                'label' => 'Bekijk bureaus',
            ], 
        ],
    ],

];
