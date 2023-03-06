<?php 

require_once 'function_1.php';  //Import funciton PHP

//require_once 'function.php'; 

$customerArr = [
    [
    'title' => 'home page',
    'link' => '#'
    ],
    [
      'title' => 'Introduction',
      'link' => '#'
    ],
     [
        'title' => 'Service',
        'link' => '#',
         'sub' => [
                
                     [
                        'title' => 'Website Design',
                         'link' => '#',
                         'sub' => [
                          [
                            'title' => ' Websites for sales',
                            'link' => '#'
                          ],

                          [
                            'title' => ' Websites for schools',
                            'link' => '#'
                          ],
                          
                          [
                            'title' => ' Websites for government',
                            'link' => '#'
                          ],

                         ]
                    ],
                    
                    [
                    'title' => 'CEO Services',
                    'link' => '#'
                    ],
                    
                    [
                    'title' => 'Software',
                    'link' => '#',
                    'sub' =>[

                          [
                           'title' => "Sales Management",
                           'link'  => '#'
                          ],
                          [
                            'title' => "Customer Management",
                            'link'  => '#'
                          ]

                          ]
                    ]
                ]
            ],

            [

                'title' => "News",
                'link'  =>'#'
            ],

            [
                
                'title' => "Career",
                'link'  =>'#'
           ]      
    ];

    echo '<pre>';

    print_r($customerArr);

'</pre>';

buildMenu($customerArr);

?>

<!--<ul class ="menu">-->

   <li><a href="#"> Home page </a></li>
    <li><a href="#"> Introduction </a></li>
    <li><a href="#"> Services </a></li>

   <ul class ="sub-menu">
       <ul class ="sub-menu">

             <li><a href="#"> Website Design </a></li>
         <li><a href="#"> CEO Services </a></li>
           <li><a href="#"> Software</a></li>

            <ul class ="sub-menu">

                  <li><a href="#"> Sales Management </a></li>
                 <li><a href="#"> Customer Management </a></li>
                 <li><a href="#"> Service </a></li>
            </ul>

       </ul>

      <li><a href="#"> News </a></li>
      <li><a href="#"> Service </a></li>
 </ul>