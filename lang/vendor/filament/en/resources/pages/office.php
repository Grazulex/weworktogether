<?php

return [

    'title' => 'Your office',
    'title_plural' => 'Your offices',
    'group' => 'Offices & Requests',
    'section' => [
        'home' => [
            'label' => 'Your house',
            'description' => 'Informations about your house',
        ],
        'workspace' => [
            'label' => 'Your office',
            'description' => 'Informations about your office',
        ],
        'eatanddrink' => [
            'label' => 'Food & Drinks',
            'description' => 'Do you have a space and equipment for food and drinks ?',
        ],
        'relationship' => [
            'label' => 'Relationship',
            'description' => 'Describe your ideal coworker',
        ],
    ],
    'step' => [
        'location' => [
            'label' => 'Location',
            'description' => 'Informations about the location of your office (services, transports, takeaway...)',        
        ],
        'workspace' => [
            'label' => 'Your office',
            'description' => 'Informations about your office',
        ],
        'eatanddrink' => [
            'label' => 'Food & Drinks',
            'description' => 'Do you have a space and equipment for food and drinks ?',
        ],
        'relationship' => [
            'label' => 'Relationship',
            'description' => 'Describe your ideal coworker',
        ],
    ],
    'table' => [
        'name' =>  [
            'label' => 'Name',
        ],
        'places' =>  [
            'label' => 'Capacity',
        ],
        'status' =>  [
            'label' => 'Status',
        ],
    ],
    'form' => [
        'name' => [
            'label' => 'Name',
            'helper' => 'Give a name to your office. This will be used as the title of your ad.',
        ],
        'is_free' => [
            'label' => 'Free',
            'helper' => 'Is your space for free?',
        ],
        'description' => [
            'label' => 'Description',
            'helper' => 'Tell a bit more about your office : equipments, location... You can also explain a bit more what you are searching for.',
        ],
        'days' => [
            'label' => 'Days',
            'helper' => 'When is the office available?',
            'options' => [
                'monday' => 'Monday',
                'tuesday' => 'Tuesday',
                'wednesday' => 'Wednesday',
                'thursday' => 'Thursday',
                'friday' => 'Friday',
                'saturday' => 'Saturday',
                'sunday' => 'Sunday',
            ],
        ],
        'location' => [
            'label' => 'Address',
            'helper' => 'What is the address of your office? This will not be displayed on your ad or shared with any third parties.',
        ],
        'places' => [
            'label' => 'Capacity',
            'helper' => 'How many people can you host?',
        ],
        'have_internet' => [
            'label' => 'Internet',
            'helper' => 'If your office connected to the Internet?',
        ],
        'have_desk' => [
            'label' => 'Desk',
            'helper' => 'Do you offer a desk?',
        ],
        'have_printer' => [
            'label' => 'Printer',
            'helper' => 'Do you have a printer?',
        ],
        'have_scanner' => [
            'label' => 'Scanner',
            'helper' => 'Do you have a scanner?',
        ],
        'have_fax' => [
            'label' => 'Fax',
            'helper' => 'Do you have a fax?',
        ],
        'have_parking' => [
            'label' => 'Parking',
            'helper' => 'Do you have a parking space for your coworker?',
        ],
        'have_meeting_room' => [
            'label' => 'Meeting room',
            'helper' => 'Is there a meeting room or a space where people can work alone?',
        ],
        'tranquility' => [
            'label' => 'Quietness',
            'helper' => 'Is your office a quiet place? Please rate from 1 to 5 (1 = very noisy, 5 = very quiet)',
        ],
        'workspace_size' => [
            'label' => 'Size',
            'helper' => 'What is the size of your office? Please rate from 1 to 5 (1 = very small, 5 = very big)',
        ],
        'give_coffee' => [
            'label' => 'Coffee',
            'helper' => 'Do you offer free coffe?',
        ],
        'give_water' => [
            'label' => 'Water',
            'helper' => 'Do you offer free water?',
        ],
        'have_fridge' => [
            'label' => 'Fridge',
            'helper' => 'Do you offer to share a fridge?',
        ],
        'have_microwave' => [
            'label' => 'Microwave',
            'helper' => 'Do you offer to share a microwave?',
        ],
        'have_garden' => [
            'label' => 'Garden',
            'helper' => 'Do you have a garden?',
        ],
        'accept_smoker' => [
            'label' => 'Smoker friendly',
            'helper' => 'Do you have accept smokers in your office?',
        ],
        'accept_languages' => [
            'label' => 'Languages',
            'helper' => 'What languages can you speak with your coworkers?',
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