<?php

return [
    'plugin' => [
        'name' => 'User access log',
        'description' => 'Access log of front-end users'
    ],
    'reportwidgets' => [
        'statistics' => [
            'label' => 'Access log statistics',
            'title' => 'Widget title',
            'title_default' => 'Access statistics',
            'title_validation' => 'Title is required',
        ],
        'chartlineaggregated' => [
            'label' => 'Access log statistics in time aggregated',
            'title' => 'Widget title',
            'title_default' => 'Access statistics in time',
            'title_validation' => 'Title is required',
            'days_title' => 'Number of days to display data for',
        ],
    ],
];