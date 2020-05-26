<?php return [
    'plugin' => [
        'name' => 'Teams & Partners',
        'description' => 'A simple plugin which provides an Our Team section for you to show off your employees.',
    ],
    'models' => [
        'employee' => [
            'name' => 'Name of Team Member',
            'job_role' => 'Job Role',
            'employeephoto' => 'Upload Image',
            'facebook_link' => 'Facebook',
            'twitter_link' => 'Twitter',
            'instagram_link' => 'Instagram',
            'linkedin_link' => 'Linkedin',
        ],
        'team' => [
            'name' => 'Name of Team'
        ],
        'theme' => [
            'name' => 'Theme Name',
            'name_colour' => 'Name Colour',
            'job_colour' => 'Job Role Colour',
            'social_colour' => 'Social Media Icons Colour',
            'overlay_colour' => 'Overlay Colour',
        ],
    ],
    'comments' => [
        'team' => [
            'name' => 'This name can be a particular department, certain members or can be made up of everyone.'
        ],
        'employee' => [
            'employeephoto' => 'Ensure your image is 350px x 526px'
        ],
    ],
    'columns' => [
        'employee' => [
            'name' => 'Name of Team Member',
            'image' => 'Employee Image',
        ],
        'team' => [
            'name' => 'Team Name',
        ],
        'theme' => [
            'name' => 'Theme Name',
        ],
    ],
    'nav' => [
        'main' => 'Teams & Partners',
        'theme' => 'Theme',
        'team' => 'Team',
    ],
    'placeholder' => [
        'employee' => [
            'twitter' => 'e.g. twitter.com/username',
            'facebook' => 'e.g. facebook.com/username',
            'instagram' => 'e.g. instagram.com/username',
            'linkedin' => 'e.g. linkedin.com/username',
        ],
    ],
    'permissions' => [
        'ourteam-main' => 'Manage Our Team Plugin',
        'ourteam-team' => 'Manage Team',
        'ourteam-theme' => 'Manage Theme',
    ]
];