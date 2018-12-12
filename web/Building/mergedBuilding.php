<?php

$mergedBuilding = [
    'points' => [
        [
            'id' => 1001,
            'name' => 'Кабинет 144',
            'type' => 'Room',
            'relatedPoints' => [1002],
            'coordinates' => [
                'x' => 335,
                'y' => 70
            ],
            'floor' => 1
        ],
        [
            'id' => 1002,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1001, 1003, 1004],
            'coordinates' => [
                'x' => 455,
                'y' => 70
            ],
            'floor' => 1
        ],
        [
            'id' => 1003,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [1002,2011],
            'coordinates' => [
                'x' => 585,
                'y' => 70
            ],
            'floor' => 1
        ],
        [
            'id' => 1004,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1002, 1005, 1006, 1007],
            'coordinates' => [
                'x' => 455,
                'y' => 175
            ],
            'floor' => 1
        ],
        [
            'id' => 1005,
            'name' => 'Кабинет 142',
            'type' => 'Room',
            'relatedPoints' => [1004],
            'coordinates' => [
                'x' => 335,
                'y' => 175
            ],
            'floor' => 1
        ],
        [
            'id' => 1006,
            'name' => 'Кабинет 123',
            'type' => 'Room',
            'relatedPoints' => [1004],
            'coordinates' => [
                'x' => 585,
                'y' => 175
            ],
            'floor' => 1
        ],
        [
            'id' => 1007,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1004, 1008, 1009],
            'coordinates' => [
                'x' => 455,
                'y' => 255
            ],
            'floor' => 1
        ],
        [
            'id' => 1008,
            'name' => 'Кабинет 140А',
            'type' => 'Room',
            'relatedPoints' => [1007],
            'coordinates' => [
                'x' => 335,
                'y' => 225
            ],
            'floor' => 1
        ],
        [
            'id' => 1009,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1007, 1010, 1011],
            'coordinates' => [
                'x' => 455,
                'y' => 400
            ],
            'floor' => 1
        ],
        [
            'id' => 1010,
            'name' => 'Кабинет 140',
            'type' => 'Room',
            'relatedPoints' => [1009],
            'coordinates' => [
                'x' => 335,
                'y' => 400
            ],
            'floor' => 1
        ],
        [
            'id' => 1011,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1009, 1012, 1013, 1014],
            'coordinates' => [
                'x' => 455,
                'y' => 520
            ],
            'floor' => 1
        ],
        [
            'id' => 1012,
            'name' => 'Кабинет 138',
            'type' => 'Room',
            'relatedPoints' => [1011],
            'coordinates' => [
                'x' => 335,
                'y' => 520
            ],
            'floor' => 1
        ],
        [
            'id' => 1013,
            'name' => 'Кабинет 121',
            'type' => 'Room',
            'relatedPoints' => [1011],
            'coordinates' => [
                'x' => 585,
                'y' => 520
            ],
            'floor' => 1
        ],
        [
            'id' => 1014,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1011, 1015, 1016, 1017],
            'coordinates' => [
                'x' => 455,
                'y' => 635
            ],
            'floor' => 1
        ],
        [
            'id' => 1015,
            'name' => 'Кабинет 138А',
            'type' => 'Room',
            'relatedPoints' => [1014],
            'coordinates' => [
                'x' => 335,
                'y' => 635
            ],
            'floor' => 1
        ],
        [
            'id' => 1016,
            'name' => 'Кабинет 119',
            'type' => 'Room',
            'relatedPoints' => [1014],
            'coordinates' => [
                'x' => 585,
                'y' => 635
            ],
            'floor' => 1
        ],
        [
            'id' => 1017,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1014, 1018, 1019, 1020],
            'coordinates' => [
                'x' => 455,
                'y' => 760
            ],
            'floor' => 1
        ],
        [
            'id' => 1018,
            'name' => 'Кабинет 136',
            'type' => 'Room',
            'relatedPoints' => [1017],
            'coordinates' => [
                'x' => 335,
                'y' => 760
            ],
            'floor' => 1
        ],
        [
            'id' => 1019,
            'name' => 'Кабинет 117',
            'type' => 'Room',
            'relatedPoints' => [1017],
            'coordinates' => [
                'x' => 585,
                'y' => 760
            ],
            'floor' => 1
        ],
        [
            'id' => 1020,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1017, 1021, 1022, 1023],
            'coordinates' => [
                'x' => 455,
                'y' => 1000
            ],
            'floor' => 1
        ],
        [
            'id' => 1021,
            'name' => 'Кабинет 136А',
            'type' => 'Room',
            'relatedPoints' => [1020],
            'coordinates' => [
                'x' => 335,
                'y' => 1000
            ],
            'floor' => 1
        ],
        [
            'id' => 1022,
            'name' => 'Кабинет 117А',
            'type' => 'Room',
            'relatedPoints' => [1020],
            'coordinates' => [
                'x' => 585,
                'y' => 1000
            ],
            'floor' => 1
        ],
        [
            'id' => 1023,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1020, 1024, 1025],
            'coordinates' => [
                'x' => 455,
                'y' => 1110
            ],
            'floor' => 1
        ],
        [
            'id' => 1024,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [1023,2034],
            'coordinates' => [
                'x' => 635,
                'y' => 1110
            ],
            'floor' => 1
        ],
        [
            'id' => 1025,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1023, 1026, 1028, 1029],
            'coordinates' => [
                'x' => 475,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1026,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1025, 1027],
            'coordinates' => [
                'x' => 345,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1027,
            'name' => 'Кабинет 130',
            'type' => 'Room',
            'relatedPoints' => [1026],
            'coordinates' => [
                'x' => 345,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1028,
            'name' => 'Кабинет 130А',
            'type' => 'Room',
            'relatedPoints' => [1026],
            'coordinates' => [
                'x' => 480,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1029,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1025, 1030, 1031],
            'coordinates' => [
                'x' => 650,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1030,
            'name' => 'Кабинет 128А',
            'type' => 'Room',
            'relatedPoints' => [1029],
            'coordinates' => [
                'x' => 650,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1031,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1029, 1032, 1033],
            'coordinates' => [
                'x' => 765,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1032,
            'name' => 'Кабинет 128',
            'type' => 'Room',
            'relatedPoints' => [1031],
            'coordinates' => [
                'x' => 765,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1033,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1031, 1034, 1035],
            'coordinates' => [
                'x' => 890,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1034,
            'name' => 'Кабинет 126',
            'type' => 'Room',
            'relatedPoints' => [1033],
            'coordinates' => [
                'x' => 890,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1035,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1033, 1036, 1037],
            'coordinates' => [
                'x' => 1025,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1036,
            'name' => 'Женский туалет',
            'type' => 'Room',
            'relatedPoints' => [1035],
            'coordinates' => [
                'x' => 1025,
                'y' => 1125
            ],
            'floor' => 1
        ],
        [
            'id' => 1037,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1035, 1038, 1039, 1040],
            'coordinates' => [
                'x' => 1130,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1038,
            'name' => 'Кабинет 122',
            'type' => 'Room',
            'relatedPoints' => [1037],
            'coordinates' => [
                'x' => 1130,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1039,
            'name' => 'Кабинет 111',
            'type' => 'Room',
            'relatedPoints' => [1037],
            'coordinates' => [
                'x' => 1130,
                'y' => 1125
            ],
            'floor' => 1
        ],
        [
            'id' => 1040,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1037, 1041, 1042, 1043],
            'coordinates' => [
                'x' => 1300,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1041,
            'name' => 'Кабинет 120А',
            'type' => 'Room',
            'relatedPoints' => [1040],
            'coordinates' => [
                'x' => 1325,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1042,
            'name' => 'Кабинет 109',
            'type' => 'Room',
            'relatedPoints' => [1040],
            'coordinates' => [
                'x' => 1285,
                'y' => 1125
            ],
            'floor' => 1
        ],
        [
            'id' => 1043,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1040, 1044, 1045, 1046],
            'coordinates' => [
                'x' => 1420,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1044,
            'name' => 'Кабинет 120',
            'type' => 'Room',
            'relatedPoints' => [1043],
            'coordinates' => [
                'x' => 1420,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1045,
            'name' => 'Кабинет 109А',
            'type' => 'Room',
            'relatedPoints' => [1045],
            'coordinates' => [
                'x' => 1420,
                'y' => 1125
            ],
            'floor' => 1
        ],
        [
            'id' => 1046,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1043, 1047, 1050],
            'coordinates' => [
                'x' => 1665,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1047,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1046, 1048, 1081],
            'coordinates' => [
                'x' => 1665,
                'y' => 1085
            ],
            'floor' => 1
        ],
        [
            'id' => 1048,
            'name' => 'Вход в первый корпус',
            'type' => 'Room',
            'relatedPoints' => [1047, 1049, 1050],
            'coordinates' => [
                'x' => 1905,
                'y' => 970
            ],
            'floor' => 1
        ],
        [
            'id' => 1049,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1048, 1051, 1082],
            'coordinates' => [
                'x' => 2160,
                'y' => 990
            ],
            'floor' => 1
        ],
        [
            'id' => 1050,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1046, 1048, 1051, 1052],
            'coordinates' => [
                'x' => 1905,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1051,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1049, 1050, 1058],
            'coordinates' => [
                'x' => 2160,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1052,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1050, 1053, 1054],
            'coordinates' => [
                'x' => 1925,
                'y' => 1410
            ],
            'floor' => 1
        ],
        [
            'id' => 1053,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [1052, 1055, 2045],
            'coordinates' => [
                'x' => 1775,
                'y' => 1410
            ],
            'floor' => 1
        ],
        [
            'id' => 1054,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [1052, 1057, 2046],
            'coordinates' => [
                'x' => 2090,
                'y' => 1410
            ],
            'floor' => 1
        ],
        [
            'id' => 1055,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [1053, 1056],
            'coordinates' => [
                'x' => 1775,
                'y' => 1570
            ],
            'floor' => 1
        ],
        [
            'id' => 1056,
            'name' => 'Гардероб',
            'type' => 'Room',
            'relatedPoints' => [1055, 1057],
            'coordinates' => [
                'x' => 1925,
                'y' => 1570
            ],
            'floor' => 1
        ],
        [
            'id' => 1057,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [1056, 1054],
            'coordinates' => [
                'x' => 2090,
                'y' => 1570
            ],
            'floor' => 1
        ],
        [
            'id' => 1058,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1051, 1059, 1060, 1061],
            'coordinates' => [
                'x' => 2390,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1059,
            'name' => 'Кабинет 118',
            'type' => 'Room',
            'relatedPoints' => [1058],
            'coordinates' => [
                'x' => 2375,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1060,
            'name' => 'Кабинет 107',
            'type' => 'Room',
            'relatedPoints' => [1058],
            'coordinates' => [
                'x' => 2410,
                'y' => 1125
            ],
            'floor' => 1
        ],
        [
            'id' => 1061,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1058, 1062, 1063],
            'coordinates' => [
                'x' => 2510,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1062,
            'name' => 'Кабинет 116А',
            'type' => 'Room',
            'relatedPoints' => [1061],
            'coordinates' => [
                'x' => 2510,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1063,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1061, 1064, 1065, 1066],
            'coordinates' => [
                'x' => 2610,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1064,
            'name' => 'Кабинет 116',
            'type' => 'Room',
            'relatedPoints' => [1063],
            'coordinates' => [
                'x' => 2630,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1065,
            'name' => 'Кабинет 107-I',
            'type' => 'Room',
            'relatedPoints' => [1063],
            'coordinates' => [
                'x' => 2600,
                'y' => 1125
            ],
            'floor' => 1
        ],
        [
            'id' => 1066,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1063, 1067, 1068, 1069],
            'coordinates' => [
                'x' => 2745,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1067,
            'name' => 'Кабинет 114',
            'type' => 'Room',
            'relatedPoints' => [1066],
            'coordinates' => [
                'x' => 2730,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1068,
            'name' => 'Кабинет 105',
            'type' => 'Room',
            'relatedPoints' => [1066],
            'coordinates' => [
                'x' => 2750,
                'y' => 1125
            ],
            'floor' => 1
        ],
        [
            'id' => 1069,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1066, 1070, 1071, 1072],
            'coordinates' => [
                'x' => 2860,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1070,
            'name' => 'Кабинет 112',
            'type' => 'Room',
            'relatedPoints' => [1069],
            'coordinates' => [
                'x' => 2870,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1071,
            'name' => 'Кабинет 105А',
            'type' => 'Room',
            'relatedPoints' => [1069],
            'coordinates' => [
                'x' => 2835,
                'y' => 1125
            ],
            'floor' => 1
        ],
        [
            'id' => 1072,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1069, 1073, 1074],
            'coordinates' => [
                'x' => 3000,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1073,
            'name' => 'Кабинет 110',
            'type' => 'Room',
            'relatedPoints' => [1072],
            'coordinates' => [
                'x' => 3000,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1074,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1072, 1075, 1076],
            'coordinates' => [
                'x' => 3095,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1075,
            'name' => 'Кабинет 108',
            'type' => 'Room',
            'relatedPoints' => [1074],
            'coordinates' => [
                'x' => 3095,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1076,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [1074, 1077, 1078, 1079],
            'coordinates' => [
                'x' => 3205,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1077,
            'name' => 'Кабинет 108А',
            'type' => 'Room',
            'relatedPoints' => [1076],
            'coordinates' => [
                'x' => 3205,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1078,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [1076, 2060],
            'coordinates' => [
                'x' => 3235,
                'y' => 1125
            ],
            'floor' => 1
        ],
        [
            'id' => 1079,
            'name' => 'Кабинет 104',
            'type' => 'Room',
            'relatedPoints' => [1076, 1080],
            'coordinates' => [
                'x' => 3540,
                'y' => 1235
            ],
            'floor' => 1
        ],
        [
            'id' => 1080,
            'name' => 'Кабинет 106',
            'type' => 'Room',
            'relatedPoints' => [1079],
            'coordinates' => [
                'x' => 3540,
                'y' => 1375
            ],
            'floor' => 1
        ],
        [
            'id' => 1081,
            'name' => 'Вахта',
            'type' => 'Room',
            'relatedPoints' => [1047],
            'coordinates' => [
                'x' => 1540,
                'y' => 1085
            ],
            'floor' => 1
        ],
        [
            'id' => 1082,
            'name' => 'Типография',
            'type' => 'Room',
            'relatedPoints' => [1049],
            'coordinates' => [
                'x' => 2305,
                'y' => 990
            ],
            'floor' => 1
        ],
        [
            'id' => 2001,
            'name' => 'Кабинет 246',
            'type' => 'Room',
            'relatedPoints' => [2012],
            'coordinates' => [
                'x' => 343,
                'y' => 55
            ],
            'floor' => 2
        ],
        [
            'id' => 2002,
            'name' => 'Кабинет 244',
            'type' => 'Room',
            'relatedPoints' => [2013],
            'coordinates' => [
                'x' => 343,
                'y' => 139
            ],
            'floor' => 2
        ],
        [
            'id' => 2003,
            'name' => 'Кабинет 242А',
            'type' => 'Room',
            'relatedPoints' => [2014],
            'coordinates' => [
                'x' => 343,
                'y' => 257
            ],
            'floor' => 2
        ],
        [
            'id' => 2004,
            'name' => 'Кабинет 242',
            'type' => 'Room',
            'relatedPoints' => [2015],
            'coordinates' => [
                'x' => 343,
                'y' => 495
            ],
            'floor' => 2
        ],
        [
            'id' => 2005,
            'name' => 'Кабинет 246',
            'type' => 'Room',
            'relatedPoints' => [2017],
            'coordinates' => [
                'x' => 343,
                'y' => 745
            ],
            'floor' => 2
        ],
        [
            'id' => 2006,
            'name' => 'Кабинет 235',
            'type' => 'Room',
            'relatedPoints' => [2013],
            'coordinates' => [
                'x' => 609,
                'y' => 145
            ],
            'floor' => 2
        ],
        [
            'id' => 2007,
            'name' => 'Кабинет 233А',
            'type' => 'Room',
            'relatedPoints' => [2014],
            'coordinates' => [
                'x' => 609,
                'y' => 255
            ],
            'floor' => 2
        ],
        [
            'id' => 2008,
            'name' => 'Кабинет 233',
            'type' => 'Room',
            'relatedPoints' => [2016],
            'coordinates' => [
                'x' => 609,
                'y' => 605
            ],
            'floor' => 2
        ],
        [
            'id' => 2009,
            'name' => 'Кабинет 231',
            'type' => 'Room',
            'relatedPoints' => [2017],
            'coordinates' => [
                'x' => 609,
                'y' => 741
            ],
            'floor' => 2
        ],
        [
            'id' => 2010,
            'name' => 'Кабинет 229',
            'type' => 'Room',
            'relatedPoints' => [2018],
            'coordinates' => [
                'x' => 609,
                'y' => 995
            ],
            'floor' => 2
        ],
        [
            'id' => 2011,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [2012, 1003, 3003],
            'coordinates' => [
                'x' => 651,
                'y' => 51
            ],
            'floor' => 2
        ],
        [
            'id' => 2012,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2001, 2011, 2013],
            'coordinates' => [
                'x' => 475,
                'y' => 61
            ],
            'floor' => 2
        ],
        [
            'id' => 2013,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2012, 2002, 2006, 2014],
            'coordinates' => [
                'x' => 475,
                'y' => 139
            ],
            'floor' => 2
        ],
        [
            'id' => 2014,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2013, 2003, 2007, 2015],
            'coordinates' => [
                'x' => 475,
                'y' => 257
            ],
            'floor' => 2
        ],
        [
            'id' => 2015,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2014, 2004, 2016],
            'coordinates' => [
                'x' => 475,
                'y' => 489
            ],
            'floor' => 2
        ],
        [
            'id' => 2016,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2015, 2008, 2017],
            'coordinates' => [
                'x' => 475,
                'y' => 597
            ],
            'floor' => 2
        ],
        [
            'id' => 2017,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2016, 2005, 2009, 2018],
            'coordinates' => [
                'x' => 475,
                'y' => 139
            ],
            'floor' => 2
        ],
        [
            'id' => 2018,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2017, 2010, 2019],
            'coordinates' => [
                'x' => 475,
                'y' => 997
            ],
            'floor' => 2
        ],
        [
            'id' => 2019,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2018, 2020, 2034],
            'coordinates' => [
                'x' => 475,
                'y' => 1121
            ],
            'floor' => 2
        ],
        [
            'id' => 2020,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2019, 2021, 2027],
            'coordinates' => [
                'x' => 319,
                'y' => 1239
            ],
            'floor' => 2
        ],
        [
            'id' => 2021,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2020, 2023, 2025, 2022],
            'coordinates' => [
                'x' => 319,
                'y' => 1367
            ],
            'floor' => 2
        ],
        [
            'id' => 2022,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2021, 2024, 2026],
            'coordinates' => [
                'x' => 319,
                'y' => 1480
            ],
            'floor' => 2
        ],
        [
            'id' => 2023,
            'name' => 'Кабинет 236',
            'type' => 'Room',
            'relatedPoints' => [2021],
            'coordinates' => [
                'x' => 183,
                'y' => 1365
            ],
            'floor' => 2
        ],
        [
            'id' => 2024,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2022],
            'coordinates' => [
                'x' => 319,
                'y' => 1737
            ],
            'floor' => 2
        ],
        [
            'id' => 2025,
            'name' => 'Кабинет 236А',
            'type' => 'Room',
            'relatedPoints' => [2021],
            'coordinates' => [
                'x' => 475,
                'y' => 1357
            ],
            'floor' => 2
        ],
        [
            'id' => 2026,
            'name' => 'Кабинет 225',
            'type' => 'Room',
            'relatedPoints' => [2022],
            'coordinates' => [
                'x' => 475,
                'y' => 1483
            ],
            'floor' => 2
        ],
        [
            'id' => 2027,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2020, 2028, 2039],
            'coordinates' => [
                'x' => 649,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2028,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2027, 2029, 2040],
            'coordinates' => [
                'x' => 785,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2029,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2028, 2030, 2041, 2035],
            'coordinates' => [
                'x' => 1007,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2030,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2029, 2031, 2042, 2036],
            'coordinates' => [
                'x' => 1140,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2031,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2030, 2032, 2043, 2037],
            'coordinates' => [
                'x' => 1252,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2032,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2031, 2033, 2044],
            'coordinates' => [
                'x' => 1424,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2033,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2032, 2047, 2038],
            'coordinates' => [
                'x' => 1525,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2034,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [2019, 1024, 3021],
            'coordinates' => [
                'x' => 716,
                'y' => 1123
            ],
            'floor' => 2
        ],
        [
            'id' => 2035,
            'name' => 'Мужской туалет',
            'type' => 'Room',
            'relatedPoints' => [2029],
            'coordinates' => [
                'x' => 1022,
                'y' => 1123
            ],
            'floor' => 2
        ],
        [
            'id' => 2036,
            'name' => 'Кабинет 217',
            'type' => 'Room',
            'relatedPoints' => [2030],
            'coordinates' => [
                'x' => 1124,
                'y' => 1123
            ],
            'floor' => 2
        ],
        [
            'id' => 2037,
            'name' => 'Кабинет 215',
            'type' => 'Room',
            'relatedPoints' => [2031],
            'coordinates' => [
                'x' => 1284,
                'y' => 1123
            ],
            'floor' => 2
        ],
        [
            'id' => 2038,
            'name' => 'Кабинет 213',
            'type' => 'Room',
            'relatedPoints' => [2033],
            'coordinates' => [
                'x' => 1528,
                'y' => 1123
            ],
            'floor' => 2
        ],
        [
            'id' => 2039,
            'name' => 'Кабинет 234',
            'type' => 'Room',
            'relatedPoints' => [2027],
            'coordinates' => [
                'x' => 652,
                'y' => 1361
            ],
            'floor' => 2
        ],
        [
            'id' => 2040,
            'name' => 'Кабинет 232',
            'type' => 'Room',
            'relatedPoints' => [2028],
            'coordinates' => [
                'x' => 784,
                'y' => 1361
            ],
            'floor' => 2
        ],
        [
            'id' => 2041,
            'name' => 'Кабинет 226',
            'type' => 'Room',
            'relatedPoints' => [2029],
            'coordinates' => [
                'x' => 1004,
                'y' => 1361
            ],
            'floor' => 2
        ],
        [
            'id' => 2042,
            'name' => 'Кабинет 224',
            'type' => 'Room',
            'relatedPoints' => [2030],
            'coordinates' => [
                'x' => 1138,
                'y' => 1361
            ],
            'floor' => 2
        ],
        [
            'id' => 2043,
            'name' => 'Кабинет 222',
            'type' => 'Room',
            'relatedPoints' => [2031],
            'coordinates' => [
                'x' => 1244,
                'y' => 1361
            ],
            'floor' => 2
        ],
        [
            'id' => 2044,
            'name' => 'Кабинет 220',
            'type' => 'Room',
            'relatedPoints' => [2032],
            'coordinates' => [
                'x' => 1420,
                'y' => 1361
            ],
            'floor' => 2
        ],
        [
            'id' => 2045,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [2048, 1053, 3048],
            'coordinates' => [
                'x' => 1747,
                'y' => 1420
            ],
            'floor' => 2
        ],
        [
            'id' => 2046,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [2048, 1054, 3049],
            'coordinates' => [
                'x' => 2075,
                'y' => 1420
            ],
            'floor' => 2
        ],
        [
            'id' => 2047,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2033, 2048, 2049],
            'coordinates' => [
                'x' => 1923,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2048,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2045, 2046, 2047],
            'coordinates' => [
                'x' => 1923,
                'y' => 1420
            ],
            'floor' => 2
        ],
        [
            'id' => 2049,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2047, 2050, 2056],
            'coordinates' => [
                'x' => 2285,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2050,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2049, 2051, 2061],
            'coordinates' => [
                'x' => 2379,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2051,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2050, 2052, 2062, 2057],
            'coordinates' => [
                'x' => 2606,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2052,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2051, 2053, 2063, 2058],
            'coordinates' => [
                'x' => 2732,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2053,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2052, 2054, 2059],
            'coordinates' => [
                'x' => 2834,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2054,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2053, 2055, 2064],
            'coordinates' => [
                'x' => 3000,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2055,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2054, 2070, 2065],
            'coordinates' => [
                'x' => 3210,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2056,
            'name' => 'Кабинет 211',
            'type' => 'Room',
            'relatedPoints' => [2049],
            'coordinates' => [
                'x' => 2292,
                'y' => 1095
            ],
            'floor' => 2
        ],
        [
            'id' => 2057,
            'name' => 'Кабинет 209',
            'type' => 'Room',
            'relatedPoints' => [2051],
            'coordinates' => [
                'x' => 2594,
                'y' => 1095
            ],
            'floor' => 2
        ],
        [
            'id' => 2058,
            'name' => 'Кабинет 207',
            'type' => 'Room',
            'relatedPoints' => [2052],
            'coordinates' => [
                'x' => 2740,
                'y' => 1120
            ],
            'floor' => 2
        ],
        [
            'id' => 2059,
            'name' => 'Женский туалет',
            'type' => 'Room',
            'relatedPoints' => [2053],
            'coordinates' => [
                'x' => 2834,
                'y' => 1120
            ],
            'floor' => 2
        ],
        [
            'id' => 2060,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [2071, 1078, 3069],
            'coordinates' => [
                'x' => 3148,
                'y' => 1095
            ],
            'floor' => 2
        ],
        [
            'id' => 2061,
            'name' => 'Кабинет 218',
            'type' => 'Room',
            'relatedPoints' => [2050],
            'coordinates' => [
                'x' => 2374,
                'y' => 1375
            ],
            'floor' => 2
        ],
        [
            'id' => 2062,
            'name' => 'Кабинет 216',
            'type' => 'Room',
            'relatedPoints' => [2051],
            'coordinates' => [
                'x' => 2628,
                'y' => 1375
            ],
            'floor' => 2
        ],
        [
            'id' => 2063,
            'name' => 'Кабинет 214',
            'type' => 'Room',
            'relatedPoints' => [2052],
            'coordinates' => [
                'x' => 2736,
                'y' => 1375
            ],
            'floor' => 2
        ],
        [
            'id' => 2064,
            'name' => 'Кабинет 212',
            'type' => 'Room',
            'relatedPoints' => [2054],
            'coordinates' => [
                'x' => 2996,
                'y' => 1375
            ],
            'floor' => 2
        ],
        [
            'id' => 2065,
            'name' => 'Кабинет 210',
            'type' => 'Room',
            'relatedPoints' => [2055],
            'coordinates' => [
                'x' => 3206,
                'y' => 1375
            ],
            'floor' => 2
        ],
        [
            'id' => 2066,
            'name' => 'Кабинет 208Б',
            'type' => 'Room',
            'relatedPoints' => [2069],
            'coordinates' => [
                'x' => 3390,
                'y' => 1365
            ],
            'floor' => 2
        ],
        [
            'id' => 2067,
            'name' => 'Кабинет 208А',
            'type' => 'Room',
            'relatedPoints' => [2069],
            'coordinates' => [
                'x' => 3540,
                'y' => 1540
            ],
            'floor' => 2
        ],
        [
            'id' => 2068,
            'name' => 'Кабинет 208',
            'type' => 'Room',
            'relatedPoints' => [2069],
            'coordinates' => [
                'x' => 3675,
                'y' => 1365
            ],
            'floor' => 2
        ],
        [
            'id' => 2069,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2066, 2067, 2068, 2070],
            'coordinates' => [
                'x' => 3540,
                'y' => 1365
            ],
            'floor' => 2
        ],
        [
            'id' => 2070,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2069, 2055, 2071],
            'coordinates' => [
                'x' => 3456,
                'y' => 1250
            ],
            'floor' => 2
        ],
        [
            'id' => 2071,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2060, 2070, 2072],
            'coordinates' => [
                'x' => 3380,
                'y' => 1095
            ],
            'floor' => 2
        ],
        [
            'id' => 2072,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2071, 2082, 2083, 2073],
            'coordinates' => [
                'x' => 3380,
                'y' => 980
            ],
            'floor' => 2
        ],
        [
            'id' => 2073,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2072, 2080, 2081, 2074],
            'coordinates' => [
                'x' => 3380,
                'y' => 735
            ],
            'floor' => 2
        ],
        [
            'id' => 2074,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2073, 2078, 2079, 2075],
            'coordinates' => [
                'x' => 3380,
                'y' => 620
            ],
            'floor' => 2
        ],
        [
            'id' => 2075,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [2074, 2077, 2076],
            'coordinates' => [
                'x' => 3380,
                'y' => 325
            ],
            'floor' => 2
        ],
        [
            'id' => 2076,
            'name' => 'Кабинет 201',
            'type' => 'Room',
            'relatedPoints' => [2075],
            'coordinates' => [
                'x' => 3380,
                'y' => 180
            ],
            'floor' => 2
        ],
        [
            'id' => 2077,
            'name' => 'Кабинет 203Б',
            'type' => 'Room',
            'relatedPoints' => [2075],
            'coordinates' => [
                'x' => 3250,
                'y' => 325
            ],
            'floor' => 2
        ],
        [
            'id' => 2078,
            'name' => 'Кабинет 203А',
            'type' => 'Room',
            'relatedPoints' => [2074],
            'coordinates' => [
                'x' => 3250,
                'y' => 620
            ],
            'floor' => 2
        ],
        [
            'id' => 2079,
            'name' => 'Кабинет 204',
            'type' => 'Room',
            'relatedPoints' => [2074],
            'coordinates' => [
                'x' => 3535,
                'y' => 620
            ],
            'floor' => 2
        ],
        [
            'id' => 2080,
            'name' => 'Кабинет 205А',
            'type' => 'Room',
            'relatedPoints' => [2073],
            'coordinates' => [
                'x' => 3250,
                'y' => 735
            ],
            'floor' => 2
        ],
        [
            'id' => 2081,
            'name' => 'Кабинет 206А',
            'type' => 'Room',
            'relatedPoints' => [2073],
            'coordinates' => [
                'x' => 3535,
                'y' => 735
            ],
            'floor' => 2
        ],
        [
            'id' => 2082,
            'name' => 'Кабинет 205',
            'type' => 'Room',
            'relatedPoints' => [2072],
            'coordinates' => [
                'x' => 3250,
                'y' => 980
            ],
            'floor' => 2
        ],
        [
            'id' => 2083,
            'name' => 'Кабинет 206',
            'type' => 'Room',
            'relatedPoints' => [2083],
            'coordinates' => [
                'x' => 3535,
                'y' => 980
            ],
            'floor' => 2
        ],
        [
            'id' => 3001,
            'name' => 'Кабинет 344',
            'type' => 'Room',
            'relatedPoints' => [3002],
            'coordinates' => [
                'x' => 290,
                'y' => 70
            ],
            'floor' => 3
        ],
        [
            'id' => 3002,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3001, 3003, 3004],
            'coordinates' => [
                'x' => 470,
                'y' => 70
            ],
            'floor' => 3
        ],
        [
            'id' => 3003,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [3002, 2011],
            'coordinates' => [
                'x' => 650,
                'y' => 70
            ],
            'floor' => 3
        ],
        [
            'id' => 3004,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3002, 3005, 3006],
            'coordinates' => [
                'x' => 470,
                'y' => 210
            ],
            'floor' => 3
        ],
        [
            'id' => 3005,
            'name' => 'Кабинет 346',
            'type' => 'Room',
            'relatedPoints' => [3004],
            'coordinates' => [
                'x' => 290,
                'y' => 210
            ],
            'floor' => 3
        ],
        [
            'id' => 3006,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3004, 3007, 3008],
            'coordinates' => [
                'x' => 470,
                'y' => 295
            ],
            'floor' => 3
        ],
        [
            'id' => 3007,
            'name' => 'Кабинет 329',
            'type' => 'Room',
            'relatedPoints' => [3006],
            'coordinates' => [
                'x' => 650,
                'y' => 295
            ],
            'floor' => 3
        ],
        [
            'id' => 3008,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3006, 3009, 3010, 3011],
            'coordinates' => [
                'x' => 470,
                'y' => 405
            ],
            'floor' => 3
        ],
        [
            'id' => 3009,
            'name' => 'Кабинет 342А',
            'type' => 'Room',
            'relatedPoints' => [3008],
            'coordinates' => [
                'x' => 290,
                'y' => 405
            ],
            'floor' => 3
        ],
        [
            'id' => 3010,
            'name' => 'Кабинет 327',
            'type' => 'Room',
            'relatedPoints' => [3008],
            'coordinates' => [
                'x' => 650,
                'y' => 405
            ],
            'floor' => 3
        ],
        [
            'id' => 3011,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3008, 3012, 3014],
            'coordinates' => [
                'x' => 470,
                'y' => 635
            ],
            'floor' => 3
        ],
        [
            'id' => 3012,
            'name' => 'Кабинет 342',
            'type' => 'Room',
            'relatedPoints' => [3011],
            'coordinates' => [
                'x' => 290,
                'y' => 640
            ],
            'floor' => 3
        ],
        [
            'id' => 3014,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3011, 3015, 3016],
            'coordinates' => [
                'x' => 470,
                'y' => 770
            ],
            'floor' => 3
        ],
        [
            'id' => 3015,
            'name' => 'Кабинет 340',
            'type' => 'Room',
            'relatedPoints' => [3014],
            'coordinates' => [
                'x' => 290,
                'y' => 770
            ],
            'floor' => 3
        ],
        [
            'id' => 3016,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3014, 3017, 3018, 3019],
            'coordinates' => [
                'x' => 470,
                'y' => 1000
            ],
            'floor' => 3
        ],
        [
            'id' => 3017,
            'name' => 'Кабинет 340А',
            'type' => 'Room',
            'relatedPoints' => [3016],
            'coordinates' => [
                'x' => 290,
                'y' => 1000
            ],
            'floor' => 3
        ],
        [
            'id' => 3018,
            'name' => 'Кабинет 325',
            'type' => 'Room',
            'relatedPoints' => [3016],
            'coordinates' => [
                'x' => 650,
                'y' => 1000
            ],
            'floor' => 3
        ],
        [
            'id' => 3019,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3016, 3020, 3021, 3022],
            'coordinates' => [
                'x' => 470,
                'y' => 1120
            ],
            'floor' => 3
        ],
        [
            'id' => 3020,
            'name' => 'Кабинет 340Б',
            'type' => 'Room',
            'relatedPoints' => [3019],
            'coordinates' => [
                'x' => 290,
                'y' => 1120
            ],
            'floor' => 3
        ],
        [
            'id' => 3021,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [3019, 2034, 4019],
            'coordinates' => [
                'x' => 700,
                'y' => 1120
            ],
            'floor' => 3
        ],
        [
            'id' => 3022,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3019, 3023, 3028],
            'coordinates' => [
                'x' => 470,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3023,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3022, 3024],
            'coordinates' => [
                'x' => 320,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3024,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3023, 3025, 3026, 3027],
            'coordinates' => [
                'x' => 320,
                'y' => 1360
            ],
            'floor' => 3
        ],
        [
            'id' => 3025,
            'name' => 'Кабинет 338',
            'type' => 'Room',
            'relatedPoints' => [3024],
            'coordinates' => [
                'x' => 140,
                'y' => 1360
            ],
            'floor' => 3
        ],
        [
            'id' => 3026,
            'name' => 'Тайная комната',
            'type' => 'Room',
            'relatedPoints' => [3024],
            'coordinates' => [
                'x' => 320,
                'y' => 1600
            ],
            'floor' => 3
        ],
        [
            'id' => 3027,
            'name' => 'Кабинет 338',
            'type' => 'Room',
            'relatedPoints' => [3024],
            'coordinates' => [
                'x' => 140,
                'y' => 1360
            ],
            'floor' => 3
        ],
        [
            'id' => 3028,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3022, 3029, 3030],
            'coordinates' => [
                'x' => 655,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3029,
            'name' => 'Кабинет 336',
            'type' => 'Room',
            'relatedPoints' => [3028],
            'coordinates' => [
                'x' => 655,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3030,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3028, 3031, 3032],
            'coordinates' => [
                'x' => 775,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3031,
            'name' => 'Кабинет 334',
            'type' => 'Room',
            'relatedPoints' => [3030],
            'coordinates' => [
                'x' => 655,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3032,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3030, 3033, 3034],
            'coordinates' => [
                'x' => 900,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3033,
            'name' => 'Кабинет 332',
            'type' => 'Room',
            'relatedPoints' => [3032],
            'coordinates' => [
                'x' => 655,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3034,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3032, 3035, 3036],
            'coordinates' => [
                'x' => 1020,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3035,
            'name' => 'Мужской туалет',
            'type' => 'Room',
            'relatedPoints' => [3034],
            'coordinates' => [
                'x' => 655,
                'y' => 1130
            ],
            'floor' => 3
        ],
        [
            'id' => 3036,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3034, 3037, 3038],
            'coordinates' => [
                'x' => 1215,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3037,
            'name' => 'Кабинет 330',
            'type' => 'Room',
            'relatedPoints' => [3036],
            'coordinates' => [
                'x' => 1215,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3038,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3036, 3039, 3040],
            'coordinates' => [
                'x' => 1285,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3039,
            'name' => 'Столовая',
            'type' => 'Room',
            'relatedPoints' => [3038],
            'coordinates' => [
                'x' => 1285,
                'y' => 1060
            ],
            'floor' => 3
        ],
        [
            'id' => 3040,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3038, 3041, 3042],
            'coordinates' => [
                'x' => 1415,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3041,
            'name' => 'Кабинет 326',
            'type' => 'Room',
            'relatedPoints' => [3040],
            'coordinates' => [
                'x' => 1415,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3042,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3040, 3043, 3044],
            'coordinates' => [
                'x' => 1530,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3043,
            'name' => 'Кабинет 317',
            'type' => 'Room',
            'relatedPoints' => [3042],
            'coordinates' => [
                'x' => 1530,
                'y' => 1060
            ],
            'floor' => 3
        ],
        [
            'id' => 3044,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3042, 3045, 3046],
            'coordinates' => [
                'x' => 1670,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3045,
            'name' => 'Кабинет 315',
            'type' => 'Room',
            'relatedPoints' => [3044],
            'coordinates' => [
                'x' => 1670,
                'y' => 1000
            ],
            'floor' => 3
        ],
        [
            'id' => 3046,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3044, 3050, 3047],
            'coordinates' => [
                'x' => 1910,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3047,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3046, 3048, 3049],
            'coordinates' => [
                'x' => 1910,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3048,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [3047, 2045, 4034],
            'coordinates' => [
                'x' => 1750,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3049,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [3047, 2046, 4035],
            'coordinates' => [
                'x' => 2070,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3050,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3046, 3051, 3052],
            'coordinates' => [
                'x' => 1940,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3051,
            'name' => 'Кабинет 313',
            'type' => 'Room',
            'relatedPoints' => [3050],
            'coordinates' => [
                'x' => 1940,
                'y' => 1000
            ],
            'floor' => 3
        ],
        [
            'id' => 3052,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3050, 3053, 3054],
            'coordinates' => [
                'x' => 2145,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3053,
            'name' => 'Кабинет 313А',
            'type' => 'Room',
            'relatedPoints' => [3052],
            'coordinates' => [
                'x' => 2145,
                'y' => 1000
            ],
            'floor' => 3
        ],
        [
            'id' => 3054,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3052, 3055, 3056],
            'coordinates' => [
                'x' => 2285,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3055,
            'name' => 'Столовая',
            'type' => 'Room',
            'relatedPoints' => [3054],
            'coordinates' => [
                'x' => 2285,
                'y' => 1060
            ],
            'floor' => 3
        ],
        [
            'id' => 3056,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3054, 3057, 3058],
            'coordinates' => [
                'x' => 2410,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3057,
            'name' => 'Кабинет 324',
            'type' => 'Room',
            'relatedPoints' => [3056],
            'coordinates' => [
                'x' => 2410,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3058,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3056, 3059, 3060],
            'coordinates' => [
                'x' => 2615,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3059,
            'name' => 'Кабинет 322',
            'type' => 'Room',
            'relatedPoints' => [3058],
            'coordinates' => [
                'x' => 2615,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3060,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3058, 3061, 3062],
            'coordinates' => [
                'x' => 2725,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3061,
            'name' => 'Кабинет 320',
            'type' => 'Room',
            'relatedPoints' => [3060],
            'coordinates' => [
                'x' => 2725,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3062,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3060, 3063, 3064, 3065],
            'coordinates' => [
                'x' => 2845,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3063,
            'name' => 'Женский туалет',
            'type' => 'Room',
            'relatedPoints' => [3062],
            'coordinates' => [
                'x' => 2845,
                'y' => 1130
            ],
            'floor' => 3
        ],
        [
            'id' => 3064,
            'name' => 'Кабинет 318',
            'type' => 'Room',
            'relatedPoints' => [3062],
            'coordinates' => [
                'x' => 2845,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3065,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3062, 3066, 3067],
            'coordinates' => [
                'x' => 3175,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3066,
            'name' => 'Кабинет 316',
            'type' => 'Room',
            'relatedPoints' => [3065],
            'coordinates' => [
                'x' => 3175,
                'y' => 1400
            ],
            'floor' => 3
        ],
        [
            'id' => 3067,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3065, 3068, 3088],
            'coordinates' => [
                'x' => 3375,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3068,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3067, 3069, 3070],
            'coordinates' => [
                'x' => 3375,
                'y' => 1120
            ],
            'floor' => 3
        ],
        [
            'id' => 3069,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [3068, 2060, 4047],
            'coordinates' => [
                'x' => 3115,
                'y' => 1120
            ],
            'floor' => 3
        ],
        [
            'id' => 3070,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3068, 3071, 3072, 3073],
            'coordinates' => [
                'x' => 3375,
                'y' => 980
            ],
            'floor' => 3
        ],
        [
            'id' => 3071,
            'name' => 'Кабинет 305',
            'type' => 'Room',
            'relatedPoints' => [3070],
            'coordinates' => [
                'x' => 3200,
                'y' => 980
            ],
            'floor' => 3
        ],
        [
            'id' => 3072,
            'name' => 'Кабинет 308А',
            'type' => 'Room',
            'relatedPoints' => [3070],
            'coordinates' => [
                'x' => 3560,
                'y' => 980
            ],
            'floor' => 3
        ],
        [
            'id' => 3073,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3070, 3074, 3075, 3076],
            'coordinates' => [
                'x' => 3375,
                'y' => 740
            ],
            'floor' => 3
        ],
        [
            'id' => 3074,
            'name' => 'Кабинет 305А',
            'type' => 'Room',
            'relatedPoints' => [3073],
            'coordinates' => [
                'x' => 3200,
                'y' => 740
            ],
            'floor' => 3
        ],
        [
            'id' => 3075,
            'name' => 'Кабинет 308',
            'type' => 'Room',
            'relatedPoints' => [3073],
            'coordinates' => [
                'x' => 3560,
                'y' => 740
            ],
            'floor' => 3
        ],
        [
            'id' => 3076,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3073, 3077, 3078, 3079],
            'coordinates' => [
                'x' => 3375,
                'y' => 615
            ],
            'floor' => 3
        ],
        [
            'id' => 3077,
            'name' => 'Кабинет 303',
            'type' => 'Room',
            'relatedPoints' => [3076],
            'coordinates' => [
                'x' => 3200,
                'y' => 615
            ],
            'floor' => 3
        ],
        [
            'id' => 3078,
            'name' => 'Кабинет 306А',
            'type' => 'Room',
            'relatedPoints' => [3076],
            'coordinates' => [
                'x' => 3560,
                'y' => 615
            ],
            'floor' => 3
        ],
        [
            'id' => 3079,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3076, 3080, 3081, 3082],
            'coordinates' => [
                'x' => 3375,
                'y' => 335
            ],
            'floor' => 3
        ],
        [
            'id' => 3080,
            'name' => 'Кабинет 301',
            'type' => 'Room',
            'relatedPoints' => [3079],
            'coordinates' => [
                'x' => 3200,
                'y' => 335
            ],
            'floor' => 3
        ],
        [
            'id' => 3081,
            'name' => 'Кабинет 306',
            'type' => 'Room',
            'relatedPoints' => [3079],
            'coordinates' => [
                'x' => 3560,
                'y' => 335
            ],
            'floor' => 3
        ],
        [
            'id' => 3082,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3079, 3083, 3084],
            'coordinates' => [
                'x' => 3375,
                'y' => 175
            ],
            'floor' => 3
        ],
        [
            'id' => 3083,
            'name' => 'Кабинет 304',
            'type' => 'Room',
            'relatedPoints' => [3082],
            'coordinates' => [
                'x' => 3560,
                'y' => 175
            ],
            'floor' => 3
        ],
        [
            'id' => 3084,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3082, 3085, 3086],
            'coordinates' => [
                'x' => 3375,
                'y' => 135
            ],
            'floor' => 3
        ],
        [
            'id' => 3085,
            'name' => 'Кабинет 301А',
            'type' => 'Room',
            'relatedPoints' => [3084],
            'coordinates' => [
                'x' => 3200,
                'y' => 135
            ],
            'floor' => 3
        ],
        [
            'id' => 3086,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3084, 3087],
            'coordinates' => [
                'x' => 3375,
                'y' => 70
            ],
            'floor' => 3
        ],
        [
            'id' => 3087,
            'name' => 'Кабинет 302',
            'type' => 'Room',
            'relatedPoints' => [3086],
            'coordinates' => [
                'x' => 3560,
                'y' => 70
            ],
            'floor' => 3
        ],
        [
            'id' => 3088,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3067, 3089],
            'coordinates' => [
                'x' => 3540,
                'y' => 1255
            ],
            'floor' => 3
        ],
        [
            'id' => 3089,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3087, 3090, 3091, 3092],
            'coordinates' => [
                'x' => 3540,
                'y' => 1360
            ],
            'floor' => 3
        ],
        [
            'id' => 3090,
            'name' => 'Кабинет 307',
            'type' => 'Room',
            'relatedPoints' => [3089],
            'coordinates' => [
                'x' => 3375,
                'y' => 1360
            ],
            'floor' => 3
        ],
        [
            'id' => 3091,
            'name' => 'Кабинет 310',
            'type' => 'Room',
            'relatedPoints' => [3089],
            'coordinates' => [
                'x' => 3715,
                'y' => 1360
            ],
            'floor' => 3
        ],
        [
            'id' => 3092,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3089, 3093, 3094],
            'coordinates' => [
                'x' => 3540,
                'y' => 1555
            ],
            'floor' => 3
        ],
        [
            'id' => 3093,
            'name' => 'Кабинет 312В',
            'type' => 'Room',
            'relatedPoints' => [3092],
            'coordinates' => [
                'x' => 3715,
                'y' => 1555
            ],
            'floor' => 3
        ],
        [
            'id' => 3094,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [3092, 3095, 3096],
            'coordinates' => [
                'x' => 3540,
                'y' => 1675
            ],
            'floor' => 3
        ],
        [
            'id' => 3095,
            'name' => 'Кабинет 312А',
            'type' => 'Room',
            'relatedPoints' => [3094],
            'coordinates' => [
                'x' => 3375,
                'y' => 1675
            ],
            'floor' => 3
        ],
        [
            'id' => 3096,
            'name' => 'Кабинет 312Б',
            'type' => 'Room',
            'relatedPoints' => [3094],
            'coordinates' => [
                'x' => 3715,
                'y' => 1675
            ],
            'floor' => 3
        ],
        [
            'id' => 4001,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4002,4011],
            'coordinates' => [
                'x' => 323,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4002,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4001,4003,4013,4004],
            'coordinates' => [
                'x' => 440,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4003,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4012,4002,4019],
            'coordinates' => [
                'x' => 470,
                'y' => 1130
            ],
            'floor' => 4
        ],
        [
            'id' => 4004,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4002,4005,4014],
            'coordinates' => [
                'x' => 655,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4005,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4004,4006,4015],
            'coordinates' => [
                'x' => 888,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4006,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4005,4007,4020],
            'coordinates' => [
                'x' => 1020,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4007,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4006,4008,4021,4016],
            'coordinates' => [
                'x' => 1120,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4008,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4007,4009,4017],
            'coordinates' => [
                'x' => 1225,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4009,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4008,4010,4018],
            'coordinates' => [
                'x' => 1410,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4010,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4009,4027,4022],
            'coordinates' => [
                'x' => 1525,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4011,
            'name' => 'Кабинет 427',
            'type' => 'Room',
            'relatedPoints' => [4001],
            'coordinates' => [
                'x' => 323,
                'y' => 1150
            ],
            'floor' => 4
        ],
        [
            'id' => 4012,
            'name' => 'Кабинет 425',
            'type' => 'Room',
            'relatedPoints' => [4003],
            'coordinates' => [
                'x' => 470,
                'y' => 1000
            ],
            'floor' => 4
        ],
        [
            'id' => 4013,
            'name' => 'Кабинет 426',
            'type' => 'Room',
            'relatedPoints' => [4002],
            'coordinates' => [
                'x' => 440,
                'y' => 1365
            ],
            'floor' => 4
        ],
        [
            'id' => 4014,
            'name' => 'Кабинет 424',
            'type' => 'Room',
            'relatedPoints' => [4004],
            'coordinates' => [
                'x' => 655,
                'y' => 1365
            ],
            'floor' => 4
        ],
        [
            'id' => 4015,
            'name' => 'Кабинет 422',
            'type' => 'Room',
            'relatedPoints' => [4005],
            'coordinates' => [
                'x' => 888,
                'y' => 1365
            ],
            'floor' => 4
        ],
        [
            'id' => 4016,
            'name' => 'Кабинет 420',
            'type' => 'Room',
            'relatedPoints' => [4007],
            'coordinates' => [
                'x' => 1120,
                'y' => 1365
            ],
            'floor' => 4
        ],
        [
            'id' => 4017,
            'name' => 'Кабинет 418А',
            'type' => 'Room',
            'relatedPoints' => [4008],
            'coordinates' => [
                'x' => 1225,
                'y' => 1365
            ],
            'floor' => 4
        ],
        [
            'id' => 4018,
            'name' => 'Кабинет 418',
            'type' => 'Room',
            'relatedPoints' => [4009],
            'coordinates' => [
                'x' => 1410,
                'y' => 1365
            ],
            'floor' => 4
        ],
        [
            'id' => 4019,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [4003, 3021, 5009],
            'coordinates' => [
                'x' => 715,
                'y' => 1130
            ],
            'floor' => 4
        ],
        [
            'id' => 4020,
            'name' => 'Мужской туалет',
            'type' => 'Room',
            'relatedPoints' => [4006],
            'coordinates' => [
                'x' => 1020,
                'y' => 1130
            ],
            'floor' => 4
        ],
        [
            'id' => 4021,
            'name' => 'Кабинет 411',
            'type' => 'Room',
            'relatedPoints' => [4007],
            'coordinates' => [
                'x' => 1120,
                'y' => 1130
            ],
            'floor' => 4
        ],
        [
            'id' => 4022,
            'name' => 'Кабинет 407',
            'type' => 'Room',
            'relatedPoints' => [4010],
            'coordinates' => [
                'x' => 1525,
                'y' => 1130
            ],
            'floor' => 4
        ],
        [
            'id' => 4023,
            'name' => 'Кабинет 405',
            'type' => 'Room',
            'relatedPoints' => [4028],
            'coordinates' => [
                'x' => 1655,
                'y' => 1050
            ],
            'floor' => 4
        ],
        [
            'id' => 4024,
            'name' => 'Кабинет 403',
            'type' => 'Room',
            'relatedPoints' => [4029],
            'coordinates' => [
                'x' => 1920,
                'y' => 1050
            ],
            'floor' => 4
        ],
        [
            'id' => 4025,
            'name' => 'Кабинет 403А',
            'type' => 'Room',
            'relatedPoints' => [4030],
            'coordinates' => [
                'x' => 2045,
                'y' => 1050
            ],
            'floor' => 4
        ],
        [
            'id' => 4026,
            'name' => 'Кабинет 401А',
            'type' => 'Room',
            'relatedPoints' => [4031],
            'coordinates' => [
                'x' => 2145,
                'y' => 1050
            ],
            'floor' => 4
        ],
        [
            'id' => 4027,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4010,4028],
            'coordinates' => [
                'x' => 1655,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4028,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4027,4023,4029],
            'coordinates' => [
                'x' => 1655,
                'y' => 1150
            ],
            'floor' => 4
        ],
        [
            'id' => 4029,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4028,4024,4030,4033],
            'coordinates' => [
                'x' => 1920,
                'y' => 1150
            ],
            'floor' => 4
        ],
        [
            'id' => 4030,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4029,4025,4031],
            'coordinates' => [
                'x' => 2045,
                'y' => 1150
            ],
            'floor' => 4
        ],
        [
            'id' => 4031,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4030,4026,4032],
            'coordinates' => [
                'x' => 2145,
                'y' => 1150
            ],
            'floor' => 4
        ],
        [
            'id' => 4032,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4031,4036],
            'coordinates' => [
                'x' => 2145,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4033,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4034,4035,4029],
            'coordinates' => [
                'x' => 1920,
                'y' => 1415
            ],
            'floor' => 4
        ],
        [
            'id' => 4034,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [4033, 3048, 5022],
            'coordinates' => [
                'x' => 1770,
                'y' => 1415
            ],
            'floor' => 4
        ],
        [
            'id' => 4035,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [4033, 3049, 5023],
            'coordinates' => [
                'x' => 2090,
                'y' => 1415
            ],
            'floor' => 4
        ],
        [
            'id' => 4036,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4032,4037,4045],
            'coordinates' => [
                'x' => 2285,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4037,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4036,4038,4048],
            'coordinates' => [
                'x' => 2370,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4038,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4037,4039,4049],
            'coordinates' => [
                'x' => 2620,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4039,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4038,4040,4050],
            'coordinates' => [
                'x' => 2725,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4040,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4039,4041,4046,4051],
            'coordinates' => [
                'x' => 2845,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4041,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4040,4042,4052],
            'coordinates' => [
                'x' => 3000,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4042,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4041,4043,4053],
            'coordinates' => [
                'x' => 3200,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4043,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4042,4054,4044],
            'coordinates' => [
                'x' => 3420,
                'y' => 1250
            ],
            'floor' => 4
        ],
        [
            'id' => 4044,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [4043,4047,4055],
            'coordinates' => [
                'x' => 3420,
                'y' => 1120
            ],
            'floor' => 4
        ],
        [
            'id' => 4045,
            'name' => 'Кабинет 401',
            'type' => 'Room',
            'relatedPoints' => [4036],
            'coordinates' => [
                'x' => 2285,
                'y' => 1120
            ],
            'floor' => 4
        ],
        [
            'id' => 4046,
            'name' => 'Женский туалет',
            'type' => 'Room',
            'relatedPoints' => [4040],
            'coordinates' => [
                'x' => 2830,
                'y' => 1120
            ],
            'floor' => 4
        ],
        [
            'id' => 4047,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [4044, 3069, 5031],
            'coordinates' => [
                'x' => 3140,
                'y' => 1120
            ],
            'floor' => 4
        ],
        [
            'id' => 4048,
            'name' => 'Кабинет 416',
            'type' => 'Room',
            'relatedPoints' => [4037],
            'coordinates' => [
                'x' => 2370,
                'y' => 1350
            ],
            'floor' => 4
        ],
        [
            'id' => 4049,
            'name' => 'Кабинет 412',
            'type' => 'Room',
            'relatedPoints' => [4038],
            'coordinates' => [
                'x' => 2620,
                'y' => 1350
            ],
            'floor' => 4
        ],
        [
            'id' => 4050,
            'name' => 'Кабинет 410',
            'type' => 'Room',
            'relatedPoints' => [4039],
            'coordinates' => [
                'x' => 2725,
                'y' => 1350
            ],
            'floor' => 4
        ],
        [
            'id' => 4051,
            'name' => 'Кабинет 406',
            'type' => 'Room',
            'relatedPoints' => [4040],
            'coordinates' => [
                'x' => 2865,
                'y' => 1350
            ],
            'floor' => 4
        ],
        [
            'id' => 4052,
            'name' => 'Кабинет 404',
            'type' => 'Room',
            'relatedPoints' => [4041],
            'coordinates' => [
                'x' => 3000,
                'y' => 1350
            ],
            'floor' => 4
        ],
        [
            'id' => 4053,
            'name' => 'Кабинет 402A',
            'type' => 'Room',
            'relatedPoints' => [4042],
            'coordinates' => [
                'x' => 3200,
                'y' => 1350
            ],
            'floor' => 4
        ],
        [
            'id' => 4054,
            'name' => 'Кабинет 402',
            'type' => 'Room',
            'relatedPoints' => [4043],
            'coordinates' => [
                'x' => 3420,
                'y' => 1350
            ],
            'floor' => 4
        ],
        [
            'id' => 4055,
            'name' => 'Актовый зал',
            'type' => 'Room',
            'relatedPoints' => [4044],
            'coordinates' => [
                'x' => 3420,
                'y' => 900
            ],
            'floor' => 4
        ],
        [
            'id' => 5001,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5002, 5009],
            'coordinates' => [
                'x' => 620,
                'y' => 1245
            ],
            'floor' => 5
        ],
        [
            'id' => 5002,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5001, 5003, 5014],
            'coordinates' => [
                'x' => 883,
                'y' => 1245
            ],
            'floor' => 5
        ],
        [
            'id' => 5003,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5002, 5010, 5004],
            'coordinates' => [
                'x' => 1015,
                'y' => 1235
            ],
            'floor' => 5
        ],
        [
            'id' => 5004,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5003, 5005, 5011, 5015],
            'coordinates' => [
                'x' => 1125,
                'y' => 1235
            ],
            'floor' => 5
        ],
        [
            'id' => 5005,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5004, 5006, 5016],
            'coordinates' => [
                'x' => 1225,
                'y' => 1235
            ],
            'floor' => 5
        ],
        [
            'id' => 5006,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5005, 5007, 5012],
            'coordinates' => [
                'x' => 1285,
                'y' => 1235
            ],
            'floor' => 5
        ],
        [
            'id' => 5007,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5006, 5008, 5017],
            'coordinates' => [
                'x' => 1400,
                'y' => 1235
            ],
            'floor' => 5
        ],
        [
            'id' => 5008,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5007, 5018, 5013],
            'coordinates' => [
                'x' => 1520,
                'y' => 1235
            ],
            'floor' => 5
        ],
        [
            'id' => 5009,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [5001, 4019],
            'coordinates' => [
                'x' => 725,
                'y' => 1120
            ],
            'floor' => 5
        ],
        [
            'id' => 5010,
            'name' => 'Кабинет 515',
            'type' => 'Room',
            'relatedPoints' => [5003],
            'coordinates' => [
                'x' => 1015,
                'y' => 1120
            ],
            'floor' => 5
        ],
        [
            'id' => 5011,
            'name' => 'Кабинет 513',
            'type' => 'Room',
            'relatedPoints' => [5004],
            'coordinates' => [
                'x' => 1125,
                'y' => 1120
            ],
            'floor' => 5
        ],
        [
            'id' => 5012,
            'name' => 'Кабинет 511В2',
            'type' => 'Room',
            'relatedPoints' => [5006],
            'coordinates' => [
                'x' => 1280,
                'y' => 1120
            ],
            'floor' => 5
        ],
        [
            'id' => 5013,
            'name' => 'Кабинет 511АБ',
            'type' => 'Room',
            'relatedPoints' => [5008],
            'coordinates' => [
                'x' => 1520,
                'y' => 1120
            ],
            'floor' => 5
        ],
        [
            'id' => 5014,
            'name' => 'Кабинет 520',
            'type' => 'Room',
            'relatedPoints' => [5002],
            'coordinates' => [
                'x' => 883,
                'y' => 1380
            ],
            'floor' => 5
        ],
        [
            'id' => 5015,
            'name' => 'Кабинет 516',
            'type' => 'Room',
            'relatedPoints' => [5004],
            'coordinates' => [
                'x' => 1115,
                'y' => 1380
            ],
            'floor' => 5
        ],
        [
            'id' => 5016,
            'name' => 'Кабинет 514',
            'type' => 'Room',
            'relatedPoints' => [5005],
            'coordinates' => [
                'x' => 1225,
                'y' => 1380
            ],
            'floor' => 5
        ],
        [
            'id' => 5017,
            'name' => 'Кабинет 512',
            'type' => 'Room',
            'relatedPoints' => [5007],
            'coordinates' => [
                'x' => 1400,
                'y' => 1380
            ],
            'floor' => 5
        ],
        [
            'id' => 5018,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5008, 5019, 5024],
            'coordinates' => [
                'x' => 1650,
                'y' => 1200
            ],
            'floor' => 5
        ],
        [
            'id' => 5019,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5018, 5025, 5020, 5021],
            'coordinates' => [
                'x' => 1915,
                'y' => 1200
            ],
            'floor' => 5
        ],
        [
            'id' => 5020,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5019, 5026, 5032],
            'coordinates' => [
                'x' => 2160,
                'y' => 1200
            ],
            'floor' => 5
        ],
        [
            'id' => 5021,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5022, 5023, 5019],
            'coordinates' => [
                'x' => 1915,
                'y' => 1400
            ],
            'floor' => 5
        ],
        [
            'id' => 5022,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [5021, 4034],
            'coordinates' => [
                'x' => 1765,
                'y' => 1400
            ],
            'floor' => 5
        ],
        [
            'id' => 5023,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [5021, 4035],
            'coordinates' => [
                'x' => 2090,
                'y' => 1400
            ],
            'floor' => 5
        ],
        [
            'id' => 5024,
            'name' => 'Кабинет 509',
            'type' => 'Room',
            'relatedPoints' => [5018],
            'coordinates' => [
                'x' => 1650,
                'y' => 1040
            ],
            'floor' => 5
        ],
        [
            'id' => 5025,
            'name' => 'Кабинет 507А',
            'type' => 'Room',
            'relatedPoints' => [5019],
            'coordinates' => [
                'x' => 1920,
                'y' => 1040
            ],
            'floor' => 5
        ],
        [
            'id' => 5026,
            'name' => 'Кабинет 507',
            'type' => 'Room',
            'relatedPoints' => [5020],
            'coordinates' => [
                'x' => 2160,
                'y' => 1040
            ],
            'floor' => 5
        ],
        [
            'id' => 5027,
            'name' => 'Кабинет 505',
            'type' => 'Room',
            'relatedPoints' => [5032],
            'coordinates' => [
                'x' => 2288,
                'y' => 1120
            ],
            'floor' => 5
        ],
        [
            'id' => 5028,
            'name' => 'Кабинет 503А',
            'type' => 'Room',
            'relatedPoints' => [5034],
            'coordinates' => [
                'x' => 2600,
                'y' => 1120
            ],
            'floor' => 5
        ],
        [
            'id' => 5029,
            'name' => 'Кабинет 503',
            'type' => 'Room',
            'relatedPoints' => [5035],
            'coordinates' => [
                'x' => 2740,
                'y' => 1120
            ],
            'floor' => 5
        ],
        [
            'id' => 5030,
            'name' => 'Кабинет 501А',
            'type' => 'Room',
            'relatedPoints' => [5036],
            'coordinates' => [
                'x' => 2830,
                'y' => 1120
            ],
            'floor' => 5
        ],
        [
            'id' => 5031,
            'name' => '',
            'type' => 'Ladder',
            'relatedPoints' => [5038, 4047],
            'coordinates' => [
                'x' => 3140,
                'y' => 1120
            ],
            'floor' => 5
        ],
        [
            'id' => 5032,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5020, 5033, 5027],
            'coordinates' => [
                'x' => 2288,
                'y' => 1250
            ],
            'floor' => 5
        ],
        [
            'id' => 5033,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5032, 5034, 5039],
            'coordinates' => [
                'x' => 2366,
                'y' => 1250
            ],
            'floor' => 5
        ],
        [
            'id' => 5034,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5033, 5035, 5028, 5040],
            'coordinates' => [
                'x' => 2600,
                'y' => 1250
            ],
            'floor' => 5
        ],
        [
            'id' => 5035,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5034, 5036, 5029],
            'coordinates' => [
                'x' => 2735,
                'y' => 1250
            ],
            'floor' => 5
        ],
        [
            'id' => 5036,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5035, 5037, 5030, 5041],
            'coordinates' => [
                'x' => 2840,
                'y' => 1250
            ],
            'floor' => 5
        ],
        [
            'id' => 5037,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5036, 5038, 5042],
            'coordinates' => [
                'x' => 2980,
                'y' => 1250
            ],
            'floor' => 5
        ],
        [
            'id' => 5038,
            'name' => '',
            'type' => 'Corridor',
            'relatedPoints' => [5037, 5043, 5031],
            'coordinates' => [
                'x' => 3225,
                'y' => 1250
            ],
            'floor' => 5
        ],
        [
            'id' => 5039,
            'name' => 'Кабинет 508',
            'type' => 'Room',
            'relatedPoints' => [5033],
            'coordinates' => [
                'x' => 2365,
                'y' => 1375
            ],
            'floor' => 5
        ],
        [
            'id' => 5040,
            'name' => 'Кабинет 506',
            'type' => 'Room',
            'relatedPoints' => [5034],
            'coordinates' => [
                'x' => 2620,
                'y' => 1375
            ],
            'floor' => 5
        ],
        [
            'id' => 5041,
            'name' => 'Кабинет 504',
            'type' => 'Room',
            'relatedPoints' => [5036],
            'coordinates' => [
                'x' => 2860,
                'y' => 1375
            ],
            'floor' => 5
        ],
        [
            'id' => 5042,
            'name' => 'Кабинет 502',
            'type' => 'Room',
            'relatedPoints' => [5037],
            'coordinates' => [
                'x' => 2990,
                'y' => 1375
            ],
            'floor' => 5
        ],
        [
            'id' => 5043,
            'name' => 'Кабинет 500',
            'type' => 'Room',
            'relatedPoints' => [5038],
            'coordinates' => [
                'x' => 3200,
                'y' => 1375
            ],
            'floor' => 5
        ],
    ]
];