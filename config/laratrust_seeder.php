<?php

return [
    'role_structure' => [
        'admin' => [
            'applicants' => 'r,u,d',
            'reports' => 'c,r,u'
        ],
        'applicant' => [
            'national_id' => 'r,u'
        ],
        'user' => [
            'national_id' => 'c,r'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
