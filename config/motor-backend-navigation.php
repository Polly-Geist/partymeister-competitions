<?php

return [
    'items' => [
        120 => [
            'slug'        => 'partymeister-competitions',
            'name'        => 'partymeister-competitions::backend/global.competitions',
            'icon'        => 'fa fa-home',
            'route'       => null,
            'roles'       => [ 'SuperAdmin' ],
            'permissions' => [ 'partymeister-competitions.read' ],
            'items'       => [
                100 => [ // <-- !!! replace 170 with your own sort position !!!
                    'slug' => 'competitions',
                    'name'  => 'partymeister-competitions::backend/competitions.competitions',
                    'icon'  => 'fa fa-plus',
                    'route' => 'backend.competitions.index',
                    'roles'       => [ 'SuperAdmin' ],
                    'permissions' => [ 'competitions.read' ],
                ],
                110 => [ // <-- !!! replace 893 with your own sort position !!!
                    'slug' => 'option_groups',
                    'name'  => 'partymeister-competitions::backend/option_groups.option_groups',
                    'icon'  => 'fa fa-plus',
                    'route' => 'backend.option_groups.index',
                    'roles'       => [ 'SuperAdmin' ],
                    'permissions' => [ 'option_groups.read' ],
                ],
                120 => [ // <-- !!! replace 318 with your own sort position !!!
                    'slug' => 'competition_types',
                    'name'  => 'partymeister-competitions::backend/competition_types.competition_types',
                    'icon'  => 'fa fa-plus',
                    'route' => 'backend.competition_types.index',
                    'roles'       => [ 'SuperAdmin' ],
                    'permissions' => [ 'competition_types.read' ],
                ],
                130 => [ // <-- !!! replace 929 with your own sort position !!!
                    'slug' => 'vote_categories',
                    'name'  => 'partymeister-competitions::backend/vote_categories.vote_categories',
                    'icon'  => 'fa fa-plus',
                    'route' => 'backend.vote_categories.index',
                    'roles'       => [ 'SuperAdmin' ],
                    'permissions' => [ 'vote_categories.read' ],
                ],
            ]
        ],
    ]
];