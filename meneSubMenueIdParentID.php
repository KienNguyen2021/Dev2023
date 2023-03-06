<?php 

require_once 'function_2.php';  //Import funciton PHP

//require_once 'function.php'; 
// Array 1 dimension :

$menuArr = [
    [
        'id' => 1,
        'title' => 'Home page',
        'link' => '#',
        'parent' => 0
    ],
    [
        'id' => 2,
        'title' => 'Introduction',
        'link' => '#',
        'parent' => 0
        ],

        [
            'id' => 3,
            'title' => 'Services',
            'link' => '#',
            'parent' => 0
            ],
    [
         'id' => 4,
         'title' => 'Website Design',
        'link' => '#',
        'parent' => 3      // Child of Service
    ],

    [
        'id' => 5,
        'title' => 'CEO Services',
        'link' => '#',
        'parent' => 3     // Child of Service
        ],

     [
            'id' => 6,
            'title' => ' Software Services',
            'link' => '#',
            'parent' => 3     // Child of Service
     ],

    [
        'id' => 7,
        'title' => 'Sales Websites',
         'link' => '#',
         'parent' => 4    // Child of Website Design
    ],


    [
        'id' => 8,
        'title' => 'News Page',
         'link' => '#',
         'parent' => 4    // Child of Website Design
    ],

    [
        'id' => 9,
        'title' => ' NEWS',
         'link' => '#',
         'parent' => 0
    ],
    [
        'id' => 10,
        'title' => 'Contact',
         'link' => '#',
         'parent' => 0   
    ]
    ];


  //  $stree = getTreeMenu($menuArr);

//echo '<pre>';

  //  print_r($stree);

//echo '</pre>';

$childCate = GetChildCategories($menuArr, 3);

echo '<pre>';

  print_r($childCate);
echo '</pre>';
    



