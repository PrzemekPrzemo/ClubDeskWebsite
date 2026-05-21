<?php
if (!defined('ABSPATH') && !defined('CD_SPORTS_DATA_DIRECT')) {
    // Allow include from non-WP contexts (CLI lint) without exiting.
}

return [
    // Sporty drużynowe
    ['name' => 'Piłka nożna',        'fed' => 'PZPN',     'type' => 'drużynowy'],
    ['name' => 'Futsal',             'fed' => 'PZPN',     'type' => 'drużynowy'],
    ['name' => 'Koszykówka',         'fed' => 'PZKosz',   'type' => 'drużynowy'],
    ['name' => 'Siatkówka',          'fed' => 'PZPS',     'type' => 'drużynowy'],
    ['name' => 'Piłka ręczna',       'fed' => 'ZPRP',     'type' => 'drużynowy'],
    ['name' => 'Piłka wodna',        'fed' => 'PZPW',     'type' => 'drużynowy'],
    ['name' => 'Hokej na lodzie',    'fed' => 'PZHL',     'type' => 'drużynowy'],
    ['name' => 'Hokej na trawie',    'fed' => 'PZHT',     'type' => 'drużynowy'],
    ['name' => 'Unihokej',           'fed' => 'PZFloor',  'type' => 'drużynowy'],
    ['name' => 'Rugby',              'fed' => 'PZR',      'type' => 'drużynowy'],
    ['name' => 'Curling',            'fed' => 'PZCurl',   'type' => 'drużynowy'],
    ['name' => 'E-sport',            'fed' => 'PZEsp',    'type' => 'drużynowy'],

    // Sporty indywidualne — sztuki walki
    ['name' => 'Judo',               'fed' => 'PZJudo',   'type' => 'indywidualny'],
    ['name' => 'Karate',             'fed' => 'PZKarate', 'type' => 'indywidualny'],
    ['name' => 'Taekwondo',          'fed' => 'PZTK',     'type' => 'indywidualny'],
    ['name' => 'Aikido',             'fed' => 'PZAikido', 'type' => 'indywidualny'],
    ['name' => 'Boks',               'fed' => 'PZBoks',   'type' => 'indywidualny'],
    ['name' => 'Kickboxing',         'fed' => 'PZKickB',  'type' => 'indywidualny'],
    ['name' => 'MMA',                'fed' => 'PFMMA',    'type' => 'indywidualny'],
    ['name' => 'Zapasy',             'fed' => 'PZZap',    'type' => 'indywidualny'],
    ['name' => 'BJJ',                'fed' => 'PZBJJ',    'type' => 'indywidualny'],
    ['name' => 'Sambo',              'fed' => 'PFSambo',  'type' => 'indywidualny'],
    ['name' => 'Szermierka',         'fed' => 'PZSzerm',  'type' => 'indywidualny'],

    // Sporty indywidualne — atletyczne
    ['name' => 'Lekka atletyka',     'fed' => 'PZLA',     'type' => 'indywidualny'],
    ['name' => 'Pływanie',           'fed' => 'PZP',      'type' => 'indywidualny'],
    ['name' => 'Gimnastyka',         'fed' => 'PZGimn',   'type' => 'indywidualny'],
    ['name' => 'Wioślarstwo',        'fed' => 'PZWiosl',  'type' => 'indywidualny'],
    ['name' => 'Kajakarstwo',        'fed' => 'PZKaj',    'type' => 'indywidualny'],
    ['name' => 'Kolarstwo',          'fed' => 'PZKol',    'type' => 'indywidualny'],
    ['name' => 'Triatlon',           'fed' => 'PTri',     'type' => 'indywidualny'],
    ['name' => 'Wspinaczka',         'fed' => 'PZAlp',    'type' => 'indywidualny'],
    ['name' => 'Podnoszenie ciężarów','fed' => 'PLPC',    'type' => 'indywidualny'],
    ['name' => 'Trójbój siłowy',     'fed' => 'PLPA',     'type' => 'indywidualny'],
    ['name' => 'Strongman',          'fed' => '—',        'type' => 'indywidualny'],

    // Sporty z rakietą
    ['name' => 'Tenis',              'fed' => 'PZT',      'type' => 'indywidualny'],
    ['name' => 'Badminton',          'fed' => 'PZBad',    'type' => 'indywidualny'],
    ['name' => 'Tenis stołowy',      'fed' => 'PZTS',     'type' => 'indywidualny'],
    ['name' => 'Squash',             'fed' => 'PZSquash', 'type' => 'indywidualny'],
    ['name' => 'Padel',              'fed' => 'PadPL',    'type' => 'indywidualny'],

    // Sporty zimowe
    ['name' => 'Narciarstwo alpejskie','fed' => 'PZN',    'type' => 'indywidualny'],
    ['name' => 'Skoki narciarskie',  'fed' => 'PZN',      'type' => 'indywidualny'],
    ['name' => 'Narciarstwo biegowe','fed' => 'PZNB',     'type' => 'indywidualny'],
    ['name' => 'Snowboard',          'fed' => 'PZSnow',   'type' => 'indywidualny'],
    ['name' => 'Biathlon',           'fed' => 'PZBiath',  'type' => 'indywidualny'],
    ['name' => 'Łyżwiarstwo figurowe','fed' => 'PZŁF',    'type' => 'indywidualny'],

    // Studio
    ['name' => 'Joga',               'fed' => '—',        'type' => 'indywidualny'],
    ['name' => 'Pilates',            'fed' => '—',        'type' => 'indywidualny'],
    ['name' => 'Fitness',            'fed' => '—',        'type' => 'indywidualny'],
    ['name' => 'Taniec',             'fed' => 'PZTan',    'type' => 'indywidualny'],

    // Pozostałe
    ['name' => 'Strzelectwo',        'fed' => 'PZSS',     'type' => 'indywidualny'],
    ['name' => 'Łucznictwo',         'fed' => 'PZŁucz',   'type' => 'indywidualny'],
    ['name' => 'Wrotkarstwo',        'fed' => 'PZWrot',   'type' => 'indywidualny'],
    ['name' => 'Żeglarstwo',         'fed' => 'PZŻegl',   'type' => 'indywidualny'],
    ['name' => 'Jeździectwo',        'fed' => 'PZJezd',   'type' => 'indywidualny'],
    ['name' => 'Golf',               'fed' => 'PZGolf',   'type' => 'indywidualny'],
    ['name' => 'Szachy',             'fed' => 'PZSzach',  'type' => 'indywidualny'],
    ['name' => 'Brydż sportowy',     'fed' => 'PZBryd',   'type' => 'indywidualny'],
    ['name' => 'Taniec sportowy',    'fed' => 'PZTaniec', 'type' => 'indywidualny'],
    ['name' => 'CrossFit',           'fed' => 'CrossFit', 'type' => 'indywidualny'],
];
