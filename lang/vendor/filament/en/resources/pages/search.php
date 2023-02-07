<?php

return [

    'title' => 'Your request',
    'title_plural' => 'Your requests',
    'group' => 'Your office and requests',
    'form' => [
        'name' => [
            'label' => 'Name',
            'helper' => 'Give a name to your office. This will be used as the title of your ad.',
        ],
        'description' => [
            'label' => 'Description',
            'helper' => 'Describe what you are searching for.',
        ],
        'distance' => [
            'label' => 'Distance (km)',
            'helper' => 'How far are you willing to travel?',
        ],
        'location' => [
            'label' => 'Address',
            'helper' => 'What is the address of your office? This will not be displayed on your ad or shared with any third parties.',
        ],
    ],
    'table' => [
        'name' =>  [
            'label' => 'Name',
        ],
        'offices' =>  [
            'label' => 'Number of offices found',
        ],
        'status' =>  [
            'label' => 'Status',
        ],
        'actions' =>  [
            'view' => [
                'label' => 'See offices',
            ], 
        ],
    ],

];