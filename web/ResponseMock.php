<?php

$building = [
    'points' => [
        [
            'id' => 1,
            'name' => 'Entrance',
            'type' => 'Hall',
            'relatedPoints' => [2, 4],
            'coordinates' => [
                'x' => 1,
                'y' => 1
            ],
            'floor' => 0
        ],
        [
            'id' => 2,
            'name' => 'Left hall',
            'type' => 'Hall',
            'relatedPoints' => [1, 3],
            'coordinates' => [
                'x' => 0,
                'y' => 0
            ],
            'floor' => 0,
        ],
        [
            'id' => 3,
            'name' => 'First room',
            'type' => 'Room',
            'relatedPoints' => [2],
            'coordinates' => [
                'x' => 0,
                'y' => 1
            ],
            'floor' => 0,
        ],
        [
            'id' => 4,
            'name' => 'Right hall',
            'type' => 'Hall',
            'relatedPoints' => [1, 5],
            'coordinates' => [
                'x' => 2,
                'y' => 0
            ],
            'floor' => 0,
        ],
        [
            'id' => 5,
            'name' => 'Left room',
            'type' => 'Room',
            'relatedPoints' => [4],
            'coordinates' => [
                'x' => 2,
                'y' => 1
            ],
            'floor' => 0,
        ]
    ]
];

$floorPictures = [
  0 => 'https://i.imgur.com/7ZsSf.jpg'
];