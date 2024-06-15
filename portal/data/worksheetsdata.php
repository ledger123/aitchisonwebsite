<?php

function getDataArray()
{
    $worksheets = array();


    $worksheets[] =
        ['class' => 'Pre C1', 'date' => '15062024', 'id' => '135',
            'worksheets' => [
                'header' => 'C1', 'link_text' => 'Download Holiday Homework',
                'data' => [
                    array('Caption' => 'C1-9th Holidays Homework 2024', 'FileUrl' => 'data/2024-25/homework/ssd/C1-9th-Holidays-Homework-2024.zip'),
                    array('Caption' => 'C1 Holidays Homework 2024', 'FileUrl' => 'data/2024-25/homework/ssd/C1-Holidays-Homework-2024.zip')
                ]

            ]
        ];

    $worksheets[] =
        ['class' => 'C1', 'date' => '15062024', 'id' => '134',
            'worksheets' => [
                'header' => 'C2', 'link_text' => 'Download Holiday Homework',
                'data' => [
                    array('Caption' => 'C2 Holidays Homework 2024', 'FileUrl' => 'data/2024-25/homework/ssd/C2-Holidays-Homework-2024.zip')
                ]

            ]
        ];


    /*
        $worksheets[] =
            ['class' => 'C2', 'date' => '05062023', 'id' => '133',
                'worksheets' => [
                    'header' => 'C1 (C1 promoted to C2)', 'link_text' => 'Download Holiday Homework',
                    'data' => [
                        array('Caption' => 'Summer Film Challenge', 'FileUrl' => 'data/2023-24/homework/ssd/Senior-School-Summer-Film-Challenge-2023.pdf'),
                        array('Caption' => 'Download Holiday Homework', 'FileUrl' => 'data/2023-24/homework/ssd/c1-holiday-homework-20230605.rar')
                    ]

                ]
            ];

        $worksheets[] =
            ['class' => 'C1', 'date' => '05062023', 'id' => '132',
                'worksheets' => [
                    'header' => 'Pre-C1 (Pre-C1 promoted to C1)', 'link_text' => 'Download Holiday Homework',
                    'data' => [
                        array('Caption' => 'Summer Film Challenge', 'FileUrl' => 'data/2023-24/homework/ssd/Senior-School-Summer-Film-Challenge-2023.pdf'),
                        array('Caption' => 'Download Holiday Homework', 'FileUrl' => 'data/2023-24/homework/ssd/pre-c1-holiday-homework-20230605.rar')
                    ]

                ]
            ];

    */

/*
    $worksheets[] =
        ['class' => 'C2', 'date' => '16062022', 'id' => '131',
            'worksheets' => [
                'header' => 'C1 Holiday Homework', 'link_text' => 'Download Holiday Homework',
                'data' => [
                    array('Caption' => 'Download Holiday Homework', 'FileUrl' => 'data/2022-23/homework/ssd/c1-holiday-homework-20220616.zip')
                ]

            ]
        ];

    $worksheets[] =
        ['class' => 'C1', 'date' => '16062022', 'id' => '130',
            'worksheets' => [
                'header' => 'Pre C1 Holiday Homework', 'link_text' => 'Download Holiday Homework',
                'data' => [
                    array('Caption' => 'Holiday Homework', 'FileUrl' => 'data/2022-23/homework/ssd/pre-c1-holiday-homework-20220616.zip')
                ]

            ]
        ];
*/

    /******************************/

    /*
	$worksheets[] =
        ['class' => 'Pre C1', 'date' => '23062021', 'id' => '127',
            'worksheets' => [
                'header' => 'Summer Vacations Homework', 'link_text' => 'Download Summer Vacations Homework',
                'data' => [
                    array('Caption' => 'Summer Vacations Homework', 'FileUrl' => 'data/2021-22/homework/c1-summer-vacations-homework-20210623.rar')
                ]

            ]
        ];
	$worksheets[] =
        ['class' => 'C1', 'date' => '17072021', 'id' => '128',
            'worksheets' => [
                'header' => 'Summer Vacations Homework', 'link_text' => 'Download Summer Vacations Homework',
                'data' => [
                    array('Caption' => 'Summer Vacations Homework', 'FileUrl' => 'data/2021-22/homework/c1-summer-vacations-homework-20210717.zip')
                ]

            ]
        ];
	$worksheets[] =
        ['class' => 'C2', 'date' => '17072021', 'id' => '129',
            'worksheets' => [
                'header' => 'Summer Vacations Homework', 'link_text' => 'Download Summer Vacations Homework',
                'data' => [
                    array('Caption' => 'Summer Vacations Homework', 'FileUrl' => 'data/2021-22/homework/c2-summer-vacations-homework-20210717.zip')
                ]

            ]
        ];

    */
	/*****************************/

    /*$worksheets[] =
        ['class' => 'Pre C1', 'date' => '18052020', 'id' => '126',
            'worksheets' => [
                'header' => 'Worksheets - Pre C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-accounting-18052020.rar'),
                    array('Caption' => 'Add maths', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-add-maths-18052020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-art-18052020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-biology-18052020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-business-studies-18052020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-chemistry-18052020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-computer-science-18052020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-economics-18052020.rar'),
                    array('Caption' => 'English Language', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-english-language-18052020.rar'),
                    array('Caption' => 'English Literature', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-english-literature-18052020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-french-18052020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-geography-18052020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-german-18052020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-history-18052020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-ict-18052020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-islamiyat-18052020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-maths-18052020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-physics-18052020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-urdu-a-18052020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-urdu-igcse-18052020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/18052020/prec1/prec1-world-history-18052020.rar')
                ]

            ]
        ];

    $worksheets[] =
        ['class' => 'C1', 'date' => '18052020', 'id' => '125',
            'worksheets' => [
                'header' => 'Worksheets - C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-accounting-18052020.rar'),
                    array('Caption' => 'Add maths', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-add-maths-18052020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-art-18052020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-biology-18052020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-business-studies-18052020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-chemistry-18052020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-computer-science-18052020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-economics-18052020.rar'),
                    array('Caption' => 'English Language', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-english-language-18052020.rar'),
                    array('Caption' => 'English Literature', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-english-literature-18052020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-french-18052020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-geography-18052020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-german-18052020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-history-18052020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-ict-18052020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-islamiyat-18052020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-maths-18052020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-physics-18052020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-urdu-a-18052020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-urdu-igcse-18052020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/18052020/c1/c1-world-history-18052020.rar')
                ]

            ]
        ];*/



    $worksheets[] =
        ['class' => 'M1', 'date' => '17052020', 'id' => '124',
            'worksheets' => [
                'header' => 'Solutions Week 39', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'M1 Solution for HW Week 39', 'FileUrl' => 'data/2019-20/worksheets/17052020/m1/m1-solutions-week-39-17052020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'M1', 'date' => '17052020', 'id' => '123',
            'worksheets' => [
                'header' => 'Homework Week 39', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'M1 Homework Week 39', 'FileUrl' => 'data/2019-20/worksheets/17052020/m1/m1-homework-week-39-17052020.rar')
                ]

            ]
        ];



    $worksheets[] =
        ['class' => 'E2', 'date' => '17052020', 'id' => '122',
            'worksheets' => [
                'header' => 'Solutions Week 39', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'E2 Solution for HW Week 39', 'FileUrl' => 'data/2019-20/worksheets/17052020/e2/e2-solutions-week-39-17052020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'E2', 'date' => '17052020', 'id' => '121',
            'worksheets' => [
                'header' => 'Homework Week 39', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'E2 Homework Week 39', 'FileUrl' => 'data/2019-20/worksheets/17052020/e2/e2-homework-week-39-17052020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K1', 'date' => '17052020', 'id' => '120',
            'answers' => [
                'header' => 'Answer Keys Week 6', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 6', 'FileUrl' => 'data/2019-20/worksheets/17052020/js/k1-answer-keys-week-6-17052020.zip')
                ]

            ]
        ];



    $worksheets[] =
        ['class' => 'K2', 'date' => '17052020', 'id' => '119',
            'answers' => [
                'header' => 'Answer Keys Week 6', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 6', 'FileUrl' => 'data/2019-20/worksheets/17052020/js/k2-answer-keys-week-6-17052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K3', 'date' => '17052020', 'id' => '118',
            'answers' => [
                'header' => 'Answer Keys Week 6', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 6', 'FileUrl' => 'data/2019-20/worksheets/17052020/js/k3-answer-keys-week-6-17052020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K4', 'date' => '17052020', 'id' => '117',
            'answers' => [
                'header' => 'Answer Keys Week 6', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 6', 'FileUrl' => 'data/2019-20/worksheets/17052020/js/k4-answer-keys-week-6-17052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K5', 'date' => '17052020', 'id' => '116',
            'answers' => [
                'header' => 'Answer Keys Week 6', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 6', 'FileUrl' => 'data/2019-20/worksheets/17052020/js/k5-answer-keys-week-6-17052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K6', 'date' => '17052020', 'id' => '115',
            'answers' => [
                'header' => 'Answer Keys Week 6', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 6', 'FileUrl' => 'data/2019-20/worksheets/17052020/js/k6-answer-keys-week-6-17052020.zip')
                ]

            ]
        ];


/*
    $worksheets[] =
        ['class' => 'Pre C1', 'date' => '11052020', 'id' => '114',
            'worksheets' => [
                'header' => 'Worksheets - Pre C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-accounting-11052020.rar'),
                    array('Caption' => 'Add Maths', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-add-maths-11052020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-art-11052020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-biology-11052020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-business-studies-11052020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-chemistry-11052020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-computer-science-11052020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-economics-11052020.rar'),
                    array('Caption' => 'English Language', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-english-language-11052020.rar'),
                    array('Caption' => 'English Literature', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-english-literature-11052020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-french-11052020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-geography-11052020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-german-11052020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-history-11052020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-ict-11052020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-islamiyat-11052020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-maths-11052020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-physics-11052020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-urdu-a-11052020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-urdu-igcse-11052020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/11052020/prec1/prec1-world-history-11052020.rar')
                ]

            ]
        ];
*/

    /*$worksheets[] =
        ['class' => 'C1', 'date' => '11052020', 'id' => '113',
            'worksheets' => [
                'header' => 'Worksheets - C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-accounting-11052020.rar'),
                    array('Caption' => 'Add Maths', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-add-maths-11052020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-art-11052020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-biology-11052020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-business-studies-11052020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-chemistry-11052020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-computer-science-11052020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-economics-11052020.rar'),
                    array('Caption' => 'English Language', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-english-language-11052020.rar'),
                    array('Caption' => 'English Literature', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-english-literature-11052020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-french-11052020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-geography-11052020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-german-11052020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-history-11052020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-ict-11052020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-islamiyat-11052020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-maths-11052020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-physics-11052020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-urdu-a-11052020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-urdu-igcse-11052020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/11052020/c1/c1-world-history-11052020.rar')
                ]

            ]
        ];
*/



    $worksheets[] =
        ['class' => 'M1', 'date' => '10052020', 'id' => '112',
            'worksheets' => [
                'header' => 'Solutions Week 38', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'M1 Solution for HW Week 38', 'FileUrl' => 'data/2019-20/worksheets/10052020/m1/m1-solutions-week-38-10052020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'M1', 'date' => '10052020', 'id' => '111',
            'worksheets' => [
                'header' => 'Homework Week 38', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'M1 Homework Week 38', 'FileUrl' => 'data/2019-20/worksheets/10052020/m1/m1-homework-week-38-10052020.rar')
                ]

            ]
        ];




    $worksheets[] =
        ['class' => 'E2', 'date' => '10052020', 'id' => '110',
            'worksheets' => [
                'header' => 'Solutions Week 38', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'E2 Solution for HW Week 38', 'FileUrl' => 'data/2019-20/worksheets/10052020/e2/e2-solutions-week-38-10052020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'E2', 'date' => '10052020', 'id' => '109',
            'worksheets' => [
                'header' => 'Homework Week 38', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'E2 Homework Week 38', 'FileUrl' => 'data/2019-20/worksheets/10052020/e2/e2-homework-week-38-10052020.rar')
                ]

            ]
        ];



    $worksheets[] =
        ['class' => 'K1', 'date' => '09052020', 'id' => '108',
            'answers' => [
                'header' => 'Homework Week 6', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 6', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k1-homework-week-6-09052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K2', 'date' => '09052020', 'id' => '107',
            'answers' => [
                'header' => 'Homework Week 6', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 6', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k2-homework-week-6-09052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K3', 'date' => '09052020', 'id' => '106',
            'answers' => [
                'header' => 'Homework Week 6', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 6', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k3-homework-week-6-09052020.zip')
                ]

            ]
        ];



    $worksheets[] =
        ['class' => 'K4', 'date' => '09052020', 'id' => '105',
            'answers' => [
                'header' => 'Homework Week 6', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 6', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k4-homework-week-6-09052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K5', 'date' => '09052020', 'id' => '104',
            'answers' => [
                'header' => 'Homework Week 6', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 6', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k5-homework-week-6-09052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K6', 'date' => '09052020', 'id' => '103',
            'answers' => [
                'header' => 'Homework Week 6', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 6', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k6-homework-week-6-09052020.zip')
                ]

            ]
        ];




    $worksheets[] =
        ['class' => 'K1', 'date' => '09052020', 'id' => '102',
            'answers' => [
                'header' => 'Answer Keys Week 5', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 5', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k1-answer-keys-week-5-09052020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K2', 'date' => '09052020', 'id' => '101',
            'answers' => [
                'header' => 'Answer Keys Week 5', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 5', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k2-answer-keys-week-5-09052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K3', 'date' => '09052020', 'id' => '100',
            'answers' => [
                'header' => 'Answer Keys Week 5', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 5', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k3-answer-keys-week-5-09052020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K4', 'date' => '09052020', 'id' => '99',
            'answers' => [
                'header' => 'Answer Keys Week 5', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 5', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k4-answer-keys-week-5-09052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K5', 'date' => '09052020', 'id' => '98',
            'answers' => [
                'header' => 'Answer Keys Week 5', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 5', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k5-answer-keys-week-5-09052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K6', 'date' => '09052020', 'id' => '97',
            'answers' => [
                'header' => 'Answer Keys Week 5', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 5', 'FileUrl' => 'data/2019-20/worksheets/09052020/js/k6-answer-keys-week-5-09052020.zip')
                ]

            ]
        ];



    /*$worksheets[] =
        ['class' => 'Pre C1', 'date' => '04052020', 'id' => '96',
            'worksheets' => [
                'header' => 'Worksheets - Pre C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-accounting-04052020.rar'),
                    array('Caption' => 'Add Maths', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-add-maths-04052020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-art-04052020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-biology-04052020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-business-studies-04052020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-chemistry-04052020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-computer-science-04052020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-economics-04052020.rar'),
                    array('Caption' => 'English Language', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-english-language-04052020.rar'),
                    array('Caption' => 'English Literature', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-english-literature-04052020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-french-04052020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-geography-04052020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-german-04052020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-history-04052020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-ict-04052020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-islamiyat-04052020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-maths-04052020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-physics-04052020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-urdu-a-04052020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-urdu-igcse-04052020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/04052020/prec1/prec1-world-history-04052020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'C1', 'date' => '04052020', 'id' => '95',
            'worksheets' => [
                'header' => 'Worksheets - C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-accounting-04052020.rar'),
                    array('Caption' => 'Add Maths', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-add-maths-04052020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-art-04052020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-biology-04052020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-business-studies-04052020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-chemistry-04052020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-computer-science-04052020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-economics-04052020.rar'),
                    array('Caption' => 'English Language', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-english-language-04052020.rar'),
                    array('Caption' => 'English Literature', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-english-literature-04052020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-french-04052020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-geography-04052020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-german-04052020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-history-04052020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-ict-04052020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-islamiyat-04052020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-maths-04052020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-physics-04052020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-urdu-a-04052020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-urdu-igcse-04052020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/04052020/c1/c1-world-history-04052020.rar')
                ]

            ]
        ];*/




    $worksheets[] =
        ['class' => 'M1', 'date' => '02052020', 'id' => '94',
            'worksheets' => [
                'header' => 'Solutions Week 37', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'M1 Solution for HW Week 37', 'FileUrl' => 'data/2019-20/worksheets/02052020/m1/m1-solutions-week-37-02052020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'M1', 'date' => '02052020', 'id' => '93',
            'worksheets' => [
                'header' => 'Homework Week 37', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'M1 Homework Week 37', 'FileUrl' => 'data/2019-20/worksheets/02052020/m1/m1-homework-week-37-02052020.rar')
                ]

            ]
        ];



    $worksheets[] =
        ['class' => 'E2', 'date' => '02052020', 'id' => '92',
            'worksheets' => [
                'header' => 'Solutions Week 37', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'E2 Solution for HW Week 37', 'FileUrl' => 'data/2019-20/worksheets/02052020/e2/e2-solutions-week-37-02052020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'E2', 'date' => '02052020', 'id' => '91',
            'worksheets' => [
                'header' => 'Homework Week 37', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'E2 Homework Week 37', 'FileUrl' => 'data/2019-20/worksheets/02052020/e2/e2-homework-week-37-02052020.rar')
                ]

            ]
        ];




    $worksheets[] =
        ['class' => 'K1', 'date' => '02052020', 'id' => '90',
            'answers' => [
                'header' => 'Homework Week 5', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 5', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k1-homework-week-5-02052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K2', 'date' => '02052020', 'id' => '89',
            'answers' => [
                'header' => 'Homework Week 5', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 5', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k2-homework-week-5-02052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K3', 'date' => '02052020', 'id' => '88',
            'answers' => [
                'header' => 'Homework Week 5', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 5', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k3-homework-week-5-02052020.zip')
                ]

            ]
        ];



    $worksheets[] =
        ['class' => 'K4', 'date' => '02052020', 'id' => '87',
            'answers' => [
                'header' => 'Homework Week 5', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 5', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k4-homework-week-5-02052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K5', 'date' => '02052020', 'id' => '86',
            'answers' => [
                'header' => 'Homework Week 5', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 5', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k5-homework-week-5-02052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K6', 'date' => '02052020', 'id' => '85',
            'answers' => [
                'header' => 'Homework Week 5', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 5', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k6-homework-week-5-02052020.zip')
                ]

            ]
        ];




    $worksheets[] =
        ['class' => 'K1', 'date' => '02052020', 'id' => '84',
            'answers' => [
                'header' => 'Answer Keys Week 4', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 4', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k1-answer-keys-week-4-02052020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K2', 'date' => '02052020', 'id' => '83',
            'answers' => [
                'header' => 'Answer Keys Week 4', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 4', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k2-answer-keys-week-4-02052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K3', 'date' => '02052020', 'id' => '82',
            'answers' => [
                'header' => 'Answer Keys Week 4', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 4', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k3-answer-keys-week-4-02052020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K4', 'date' => '02052020', 'id' => '81',
            'answers' => [
                'header' => 'Answer Keys Week 4', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 4', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k4-answer-keys-week-4-02052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K5', 'date' => '02052020', 'id' => '80',
            'answers' => [
                'header' => 'Answer Keys Week 4', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 4', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k5-answer-keys-week-4-02052020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K6', 'date' => '02052020', 'id' => '79',
            'answers' => [
                'header' => 'Answer Keys Week 4', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 4', 'FileUrl' => 'data/2019-20/worksheets/02052020/js/k6-answer-keys-week-4-02052020.zip')
                ]

            ]
        ];






    /*$worksheets[] =
        ['class' => 'Pre C1', 'date' => '26042020', 'id' => '78',
            'worksheets' => [
                'header' => 'Worksheets - Pre C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-accounting-26042020.rar'),
                    array('Caption' => 'Add Maths', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-add-maths-26042020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-art-26042020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-biology-26042020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-business-studies-26042020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-chemistry-26042020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-computer-science-26042020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-economics-26042020.rar'),
                    array('Caption' => 'English Language', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-english-language-26042020.rar'),
                    array('Caption' => 'English Literature', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-english-literature-26042020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-french-26042020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-geography-26042020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-german-26042020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-history-26042020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-ict-26042020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-islamiyat-26042020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-maths-26042020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-physics-26042020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-urdu-a-26042020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-urdu-igcse-26042020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/26042020/prec1/prec1-world-history-26042020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'C1', 'date' => '26042020', 'id' => '77',
            'worksheets' => [
                'header' => 'Worksheets - C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-accounting-26042020.rar'),
                    array('Caption' => 'Add Maths', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-add-maths-26042020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-art-26042020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-biology-26042020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-business-studies-26042020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-chemistry-26042020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-computer-science-26042020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-economics-26042020.rar'),
                    array('Caption' => 'English Language', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-english-language-26042020.rar'),
                    array('Caption' => 'English Literature', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-english-literature-26042020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-french-26042020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-geography-26042020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-german-26042020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-history-26042020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-ict-26042020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-islamiyat-26042020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-maths-26042020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-physics-26042020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-urdu-a-26042020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-urdu-igcse-26042020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/26042020/c1/c1-world-history-26042020.rar')
                ]

            ]
        ];*/



    $worksheets[] =
        ['class' => 'K1', 'date' => '25042020', 'id' => '76',
            'answers' => [
                'header' => 'Homework Week 4', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 4', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k1-homework-week-4-25042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K2', 'date' => '25042020', 'id' => '75',
            'answers' => [
                'header' => 'Homework Week 4', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 4', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k2-homework-week-4-25042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K3', 'date' => '25042020', 'id' => '74',
            'answers' => [
                'header' => 'Homework Week 4', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 4', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k3-homework-week-4-25042020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K4', 'date' => '25042020', 'id' => '73',
            'answers' => [
                'header' => 'Homework Week 4', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 4', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k4-homework-week-4-25042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K5', 'date' => '25042020', 'id' => '72',
            'answers' => [
                'header' => 'Homework Week 4', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 4', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k5-homework-week-4-25042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K6', 'date' => '25042020', 'id' => '71',
            'answers' => [
                'header' => 'Homework Week 4', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 4', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k6-homework-week-4-25042020.zip')
                ]

            ]
        ];




    $worksheets[] =
        ['class' => 'K1', 'date' => '25042020', 'id' => '70',
            'answers' => [
                'header' => 'Answer Keys Week 3', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 3', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k1-answer-keys-week-3-25042020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K2', 'date' => '25042020', 'id' => '69',
            'answers' => [
                'header' => 'Answer Keys Week 3', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 3', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k2-answer-keys-week-3-25042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K3', 'date' => '25042020', 'id' => '68',
            'answers' => [
                'header' => 'Answer Keys Week 3', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 3', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k3-answer-keys-week-3-25042020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K4', 'date' => '25042020', 'id' => '67',
            'answers' => [
                'header' => 'Answer Keys Week 3', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 3', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k4-answer-keys-week-3-25042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K5', 'date' => '25042020', 'id' => '66',
            'answers' => [
                'header' => 'Answer Keys Week 3', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 3', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k5-answer-keys-week-3-25042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K6', 'date' => '25042020', 'id' => '65',
            'answers' => [
                'header' => 'Answer Keys Week 3', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 3', 'FileUrl' => 'data/2019-20/worksheets/25042020/js/k6-answer-keys-week-3-25042020.zip')
                ]

            ]
        ];










    /////////////////////////////////////


    $worksheets[] =
        ['class' => 'M1', 'date' => '25042020', 'id' => '64',
            'worksheets' => [
                'header' => 'Solutions Week 36', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'M1 Solution for HW Week 36', 'FileUrl' => 'data/2019-20/worksheets/25042020/m1/m1-solutions-week-36-25042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'M1', 'date' => '25042020', 'id' => '63',
            'worksheets' => [
                'header' => 'Homework Week 36', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'M1 Homework Week 36', 'FileUrl' => 'data/2019-20/worksheets/25042020/m1/m1-homework-week-36-25042020.zip')
                ]

            ]
        ];



    $worksheets[] =
        ['class' => 'E2', 'date' => '25042020', 'id' => '62',
            'worksheets' => [
                'header' => 'Solutions Week 36', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'E2 Solution for HW Week 36', 'FileUrl' => 'data/2019-20/worksheets/25042020/e2/e2-solutions-week-36-25042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'E2', 'date' => '25042020', 'id' => '61',
            'worksheets' => [
                'header' => 'Homework Week 36', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'E2 Homework Week 36', 'FileUrl' => 'data/2019-20/worksheets/25042020/e2/e2-homework-week-36-25042020.zip')
                ]

            ]
        ];





    /*$worksheets[] =
        ['class' => 'Pre C1', 'date' => '19042020', 'id' => '60',
            'worksheets' => [
                'header' => 'Worksheets - Pre C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-accounting-19042020.rar'),
                    array('Caption' => 'Add maths', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-add-maths-19042020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-art-19042020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-biology-19042020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-business-studies-19042020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-chemistry-19042020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-computer-science-19042020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-economics-19042020.rar'),
                    array('Caption' => 'English language', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-english-language-19042020.rar'),
                    array('Caption' => 'English literature', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-english-literature-19042020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-french-19042020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-geography-19042020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-german-19042020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-history-19042020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-ict-19042020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-islamiyat-19042020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-maths-19042020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-physics-19042020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-urdua-19042020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-urdu-igcse-19042020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/19042020/prec1/prec1-world-history-19042020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'C1', 'date' => '19042020', 'id' => '59',
            'worksheets' => [
                'header' => 'Worksheets - C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-accounting-19042020.rar'),
                    array('Caption' => 'Add maths', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-add-maths-19042020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-art-19042020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-biology-19042020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-business-studies-19042020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-chemistry-19042020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-computer-science-19042020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-economics-19042020.rar'),
                    array('Caption' => 'English language', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-english-language-19042020.rar'),
                    array('Caption' => 'English literature', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-english-literature-19042020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-french-19042020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-geography-19042020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-german-19042020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-history-19042020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-ict-19042020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-islamiyat-19042020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-maths-19042020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-physics-19042020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-urdua-19042020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-urdu-igcse-19042020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/19042020/c1/c1-world-history-19042020.rar')
                ]

            ]
        ];*/




    $worksheets[] =
        ['class' => 'M1', 'date' => '18042020', 'id' => '58',
            'worksheets' => [
                'header' => 'Solutions Week 35', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'M1 Solution for HW Week 35', 'FileUrl' => 'data/2019-20/worksheets/18042020/m1/m1-solutions-week-35-18042020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'M1', 'date' => '18042020', 'id' => '57',
            'worksheets' => [
                'header' => 'Homework Week 35', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'M1 Homework Week 35', 'FileUrl' => 'data/2019-20/worksheets/18042020/m1/m1-homework-week-35-18042020.rar')
                ]
            ]
        ];



    $worksheets[] =
        ['class' => 'E2', 'date' => '18042020', 'id' => '56',
            'worksheets' => [
                'header' => 'Solutions Week 35', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'E2 Solution for HW Week 35', 'FileUrl' => 'data/2019-20/worksheets/18042020/e2/e2-solutions-week-35-18042020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'E2', 'date' => '18042020', 'id' => '55',
            'worksheets' => [
                'header' => 'Homework Week 35', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'E2 Homework Week 35', 'FileUrl' => 'data/2019-20/worksheets/18042020/e2/e2-homework-week-35-18042020.rar')
                ]

            ]
        ];



    //////////////////////////////////////////


    $worksheets[] =
        ['class' => 'K1', 'date' => '18042020', 'id' => '54',
            'answers' => [
                'header' => 'Homework Week 3', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 3', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k1-homework-week-3-18042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K2', 'date' => '18042020', 'id' => '53',
            'answers' => [
                'header' => 'Homework Week 3', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 3', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k2-homework-week-3-18042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K3', 'date' => '18042020', 'id' => '52',
            'answers' => [
                'header' => 'Homework Week 3', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 3', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k3-homework-week-3-18042020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K4', 'date' => '18042020', 'id' => '51',
            'answers' => [
                'header' => 'Homework Week 3', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 3', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k4-homework-week-3-18042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K5', 'date' => '18042020', 'id' => '50',
            'answers' => [
                'header' => 'Homework Week 3', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 3', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k5-homework-week-3-18042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K6', 'date' => '18042020', 'id' => '49',
            'answers' => [
                'header' => 'Homework Week 3', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 3', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k6-homework-week-3-18042020.zip')
                ]

            ]
        ];




    $worksheets[] =
        ['class' => 'K1', 'date' => '18042020', 'id' => '48',
            'answers' => [
                'header' => 'Answer Keys Week 2', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 2', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k1-answer-keys-week-2-18042020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K2', 'date' => '18042020', 'id' => '47',
            'answers' => [
                'header' => 'Answer Keys Week 2', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 2', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k2-answer-keys-week-2-18042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K3', 'date' => '18042020', 'id' => '46',
            'answers' => [
                'header' => 'Answer Keys Week 2', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 2', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k3-answer-keys-week-2-18042020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K4', 'date' => '18042020', 'id' => '45',
            'answers' => [
                'header' => 'Answer Keys Week 2', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 2', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k4-answer-keys-week-2-18042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K5', 'date' => '18042020', 'id' => '44',
            'answers' => [
                'header' => 'Answer Keys Week 2', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 2', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k5-answer-keys-week-2-18042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K6', 'date' => '18042020', 'id' => '43',
            'answers' => [
                'header' => 'Answer Keys Week 2', 'link_text' => 'Download Answer',
                'data' => [
                    array('Caption' => 'Answer Keys Week 2', 'FileUrl' => 'data/2019-20/worksheets/18042020/js/k6-answer-keys-week-2-18042020.zip')
                ]

            ]
        ];







    $worksheets[] =
        ['class' => 'M1', 'date' => '13042020', 'id' => '42',
            'worksheets' => [
                'header' => 'Solutions Week 34', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'M1 Solution for HW Week 34', 'FileUrl' => 'data/2019-20/worksheets/13042020/m1/m1-solutions-week-34-13042020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'M1', 'date' => '13042020', 'id' => '41',
            'worksheets' => [
                'header' => 'Homework Week 34', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'M1 Homework Week 34', 'FileUrl' => 'data/2019-20/worksheets/13042020/m1/m1-homework-week-34-13042020.rar')
                ]

            ]
        ];



    $worksheets[] =
        ['class' => 'E2', 'date' => '13042020', 'id' => '40',
            'worksheets' => [
                'header' => 'Solutions Week 34', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'E2 Solution for HW Week 34', 'FileUrl' => 'data/2019-20/worksheets/13042020/e2/e2-solutions-week-34-13042020.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'E2', 'date' => '13042020', 'id' => '39',
            'worksheets' => [
                'header' => 'Homework Week 34', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'E2 Homework Week 34', 'FileUrl' => 'data/2019-20/worksheets/13042020/e2/e2-homework-week-34-13042020.rar')
                ]

            ]
        ];



    /*$worksheets[] =
        ['class' => 'Pre C1', 'date' => '12042020', 'id' => '38',
            'worksheets' => [
                'header' => 'Worksheets - Pre C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-accounting-12042020.rar'),
                    array('Caption' => 'Add maths', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-add-maths-12042020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-art-12042020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-biology-12042020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-business-studies-12042020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-chemistry-12042020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-computer-science-12042020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-economics-12042020.rar'),
                    array('Caption' => 'English language', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-english-language-12042020.rar'),
                    array('Caption' => 'English literature', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-english-literature-12042020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-french-12042020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-geography-12042020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-german-12042020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-history-12042020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-ict-12042020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-islamiyat-12042020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-maths-12042020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-physics-12042020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-urdu-a-12042020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-urdu-igcse-12042020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-world-history-12042020.rar'),
                    array('Caption' => 'Download All Subjects', 'FileUrl' => 'data/2019-20/worksheets/12042020/prec1/prec1-all-subjects-12042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'C1', 'date' => '12042020', 'id' => '37',
            'worksheets' => [
                'header' => 'Worksheets - C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-accounting-12042020.rar'),
                    array('Caption' => 'Add Maths', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-add-maths-12042020.rar'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-art-12042020.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-biology-12042020.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-business-studies-12042020.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-chemistry-12042020.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-computer-science-12042020.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-economics-12042020.rar'),
                    array('Caption' => 'English Language', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-english-language-12042020.rar'),
                    array('Caption' => 'English Literature', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-english-literature-12042020.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-french-12042020.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-geography-12042020.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-german-12042020.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-history-12042020.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-ict-12042020.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-islamiyat-12042020.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-maths-12042020.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-physics-12042020.rar'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-urdu-a-12042020.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-urdu-igcse-12042020.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-world-history-12042020.rar'),
                    array('Caption' => 'Download All Subjects', 'FileUrl' => 'data/2019-20/worksheets/12042020/c1/c1-all-subjects-12042020.zip')
                ]

            ]
        ];*/


    $worksheets[] =
        ['class' => 'E2', 'date' => '11042020', 'id' => '36',
            'worksheets' => [
                'header' => 'Solutions Week 33', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'E2 Solution for HW Week 33', 'FileUrl' => 'data/2019-20/worksheets/11042020/e2/e2-solutions-week-33-11042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'M1', 'date' => '11042020', 'id' => '35',
            'worksheets' => [
                'header' => 'Solutions Weeks 33', 'link_text' => 'Download Solutions',
                'data' => [
                    array('Caption' => 'M1 Solution for HW Week 33', 'FileUrl' => 'data/2019-20/worksheets/11042020/m1/m1-solutions-week-33-11042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K1', 'date' => '11042020', 'id' => '34',
            'answers' => [
                'header' => 'Homework Week 2', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 2', 'FileUrl' => 'data/2019-20/worksheets/11042020/js/k1-homework-week-2-11042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K2', 'date' => '11042020', 'id' => '33',
            'answers' => [
                'header' => 'Homework Week 2', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 2', 'FileUrl' => 'data/2019-20/worksheets/11042020/js/k2-homework-week-2-11042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K3', 'date' => '11042020', 'id' => '32',
            'answers' => [
                'header' => 'Homework Week 2', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 2', 'FileUrl' => 'data/2019-20/worksheets/11042020/js/k3-homework-week-2-11042020.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K4', 'date' => '11042020', 'id' => '31',
            'answers' => [
                'header' => 'Homework Week 2', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 2', 'FileUrl' => 'data/2019-20/worksheets/11042020/js/k4-homework-week-2-11042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K5', 'date' => '11042020', 'id' => '30',
            'answers' => [
                'header' => 'Homework Week 2', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 2', 'FileUrl' => 'data/2019-20/worksheets/11042020/js/k5-homework-week-2-11042020.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K6', 'date' => '11042020', 'id' => '29',
            'answers' => [
                'header' => 'Homework Week 2', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 2', 'FileUrl' => 'data/2019-20/worksheets/11042020/js/k6-homework-week-2-11042020.zip')
                ]

            ]
        ];








    $worksheets[] =
        ['class' => 'K4', 'date' => '06042020', 'id' => '28',
            'answers' => [
                'header' => 'Answer Keys Week 1', 'link_text' => 'Download Answers',
                'data' => [
                    array('Caption' => 'Answer Keys Week 1', 'FileUrl' => 'data/2019-20/worksheets/06042020/k4/k4-week-1-answer-keys.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K5', 'date' => '06042020', 'id' => '27',
            'answers' => [
                'header' => 'Answer Keys Week 1', 'link_text' => 'Download Answers',
                'data' => [
                    array('Caption' => 'Answer Keys Week 1', 'FileUrl' => 'data/2019-20/worksheets/06042020/k5/k5-week-1-answer-keys.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K6', 'date' => '06042020', 'id' => '26',
            'answers' => [
                'header' => 'Answer Keys Week 1', 'link_text' => 'Download Answers',
                'data' => [
                    array('Caption' => 'Answer Keys Week 1', 'FileUrl' => 'data/2019-20/worksheets/06042020/k6/k6-week-1-answer-keys.zip')
                ]

            ]
        ];





    $worksheets[] =
        ['class' => 'K1', 'date' => '06042020', 'id' => '25',
            'answers' => [
                'header' => 'Answer Keys Week 1', 'link_text' => 'Download Answers',
                'data' => [
                    array('Caption' => 'Answer Keys Week 1', 'FileUrl' => 'data/2019-20/worksheets/06042020/k1/k1-week-1-answer-keys.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K2', 'date' => '06042020', 'id' => '24',
            'answers' => [
                'header' => 'Answer Keys Week 1', 'link_text' => 'Download Answers',
                'data' => [
                    array('Caption' => 'Answer Keys Week 1', 'FileUrl' => 'data/2019-20/worksheets/06042020/k2/k2-week-1-answer-keys.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'K3', 'date' => '06042020', 'id' => '23',
            'answers' => [
                'header' => 'Answer Keys Week 1', 'link_text' => 'Download Answers',
                'data' => [
                    array('Caption' => 'Answer Keys Week 1', 'FileUrl' => 'data/2019-20/worksheets/06042020/k3/k3-week-1-answer-keys.zip')
                ]

            ]
        ];

    $worksheets[] =
        ['class' => 'E2', 'date' => '05042020', 'id' => '22',
            'worksheets' => [
                'header' => 'Homework Week 33', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 33', 'FileUrl' => 'data/2019-20/worksheets/05042020/e2/e2-homework-week-33.rar')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'M1', 'date' => '05042020', 'id' => '21',
            'worksheets' => [
                'header' => 'Homework Week 33', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'Homework Week 33', 'FileUrl' => 'data/2019-20/worksheets/05042020/m1/m1-homework-week-33.rar')
                ]

            ]
        ];



    $worksheets[] =
        ['class' => 'E2', 'date' => '05042020', 'id' => '20',
            'worksheets' => [
                'header' => 'Solutions Week 30-32', 'link_text' => 'Download Solution',
                'data' => [
                    array('Caption' => 'E2 Solution for HW Week 30-32', 'FileUrl' => 'data/2019-20/worksheets/05042020/e2/e2-solutions-week-30-32.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'M1', 'date' => '05042020', 'id' => '19',
            'worksheets' => [
                'header' => 'Solutions Weeks 30-32', 'link_text' => 'Download Solutions',
                'data' => [
                    array('Caption' => 'M1 Solution for HW Week 30-32', 'FileUrl' => 'data/2019-20/worksheets/05042020/m1/m1-solutions-week-30-32.zip')
                ]

            ]
        ];




    /*$worksheets[] =
        ['class' => 'Pre C1', 'date' => '05042020', 'id' => '18',
            'worksheets' => [
                'header' => 'Worksheets - Pre C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-accounting.rar'),
                    array('Caption' => 'Add Maths', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-add-maths.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-biology.rar'),
                    array('Caption' => 'Business', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-business-studies.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-chemistry.rar'),
                    array('Caption' => 'Computer', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-computer-science.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-economics.zip'),
                    array('Caption' => 'English', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-english.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-french.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-geography.zip'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-german.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-ict.rar'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-maths.zip'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-physics.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-urdu-igcse.zip'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/05042020/prec1/prec1-world-history.zip')
                ]

            ]
        ];


    $worksheets[] =
        ['class' => 'C1', 'date' => '05042020', 'id' => '17',
            'worksheets' => [
                'header' => 'Worksheets - C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-accounting.rar'),
                    array('Caption' => 'Add Maths', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-add-maths.zip'),
                    array('Caption' => 'Art', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-art.rar'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-biology.rar'),
                    array('Caption' => 'Business Studies', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-business-studies.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-chemistry.rar'),
                    array('Caption' => 'Computer Science', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-computer-science.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-economics.zip'),
                    array('Caption' => 'English', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-english.rar'),
                    array('Caption' => 'English Lit', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-english-lit.zip'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-french.zip'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-geography.zip'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-german.zip'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-ict.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-islamiyat.zip'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-maths.rar'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-physics.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-urdu-igcse.zip'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/05042020/c1/c1-world-history.zip')
                ]

            ]
        ];*/













    $worksheets[] =
        ['class' => 'K1', 'date' => '03042020', 'id' => '16',
            'homework' => [
                'header' => 'Homework Week 1', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K1 Homework', 'FileUrl' => 'data/2019-20/worksheets/03042020/k1.zip')]
            ]
        ];

    $worksheets[] =
        ['class' => 'K2', 'date' => '03042020', 'id' => '15',
            'homework' => [
                'header' => 'Homework Week 1', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K2 Homework', 'FileUrl' => 'data/2019-20/worksheets/03042020/k2.zip')]
            ]
        ];

    $worksheets[] =
        ['class' => 'K3', 'date' => '03042020', 'id' => '14',
            'homework' => [
                'header' => 'Homework Week 1', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K3 Homework', 'FileUrl' => 'data/2019-20/worksheets/03042020/k3.zip')]
            ]
        ];

    $worksheets[] =
        ['class' => 'K4', 'date' => '03042020', 'id' => '13',
            'homework' => [
                'header' => 'Homework Week 1', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K4 Homework', 'FileUrl' => 'data/2019-20/worksheets/03042020/k4.zip')]
            ]
        ];

    $worksheets[] =
        ['class' => 'K5', 'date' => '03042020', 'id' => '12',
            'homework' => [
                'header' => 'Homework Week 1', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K5 Homework', 'FileUrl' => 'data/2019-20/worksheets/03042020/k5.zip')]
            ]
        ];

    $worksheets[] =
        ['class' => 'K6', 'date' => '03042020', 'id' => '11',
            'homework' => [
                'header' => 'Homework Week 1', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K6 Homework', 'FileUrl' => 'data/2019-20/worksheets/03042020/k6.zip')]
            ]
        ];



    $worksheets[] =
        ['class' => 'M1', 'date' => '28032020', 'id' => '10',
            'homework' => [
                'header' => 'Homework', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'M1 Homework', 'FileUrl' => 'data/2019-20/homework/m1-homework-worksheets.rar')]
            ],

        ];

    $worksheets[] =
        ['class' => 'E2', 'date' => '28032020', 'id' => '9',
            'homework' => [
                'header' => 'Homework', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'E2 Homework', 'FileUrl' => 'data/2019-20/homework/e2-homework-worksheets.rar')]
            ]
        ];


    $worksheets[] =
        ['class' => 'K1', 'date' => '28032020', 'id' => '8',
            'homework' => [
                'header' => 'Practice Worksheets', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K1 Homework', 'FileUrl' => 'data/2019-20/homework/K1.zip')]
            ]
        ];

    $worksheets[] =
        ['class' => 'K2', 'date' => '28032020', 'id' => '7',
            'homework' => [
                'header' => 'Practice Worksheets', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K2 Homework', 'FileUrl' => 'data/2019-20/homework/K2.zip')]
            ]
        ];

    $worksheets[] =
        ['class' => 'K3', 'date' => '28032020', 'id' => '6',
            'homework' => [
                'header' => 'Practice Worksheets', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K3 Homework', 'FileUrl' => 'data/2019-20/homework/K3.zip')]
            ]
        ];

    $worksheets[] =
        ['class' => 'K4', 'date' => '28032020', 'id' => '5',
            'homework' => [
                'header' => 'Practice Worksheets', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K4 Homework', 'FileUrl' => 'data/2019-20/homework/K4.zip')]
            ]
        ];

    $worksheets[] =
        ['class' => 'K5', 'date' => '28032020', 'id' => '4',
            'homework' => [
                'header' => 'Practice Worksheets', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K5 Homework', 'FileUrl' => 'data/2019-20/homework/K5.zip')]
            ]
        ];

    $worksheets[] =
        ['class' => 'K6', 'date' => '28032020', 'id' => '3',
            'homework' => [
                'header' => 'Practice Worksheets', 'link_text' => 'Download Homework',
                'data' => [
                    array('Caption' => 'K6 Homework', 'FileUrl' => 'data/2019-20/homework/K6.zip')]
            ]
        ];

    /*$worksheets[] =
        ['class' => 'Pre C1', 'date' => '28032020', 'id' => '2',
            'worksheets' => [
                'header' => 'Worksheets - Pre C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-accounting.rar'),
                    array('Caption' => 'Add Maths', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-addmaths.zip'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-biology.rar'),
                    array('Caption' => 'Business', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-business.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-chemistry.rar'),
                    array('Caption' => 'Computer', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-computer.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-economics.rar'),
                    array('Caption' => 'English', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-english.rar'),
                    array('Caption' => 'English Lit', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-english-lit.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-french.rar'),
                    array('Caption' => 'Geography', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-geography.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-german.rar'),
                    array('Caption' => 'History', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-history.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-ict.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-islamiyat.zip'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-maths.zip'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-physics.zip'),
                    array('Caption' => 'Urdu', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-urdu.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-world-history.rar'),
                    array('Caption' => 'Download All Subjects', 'FileUrl' => 'data/2019-20/worksheets/28032020/prec1/prec1-worksheets.zip')
                ]

            ]
        ];

    $worksheets[] =
        ['class' => 'C1', 'date' => '28032020', 'id' => '1',
            'worksheets' => [
                'header' => 'Worksheets - C1', 'link_text' => 'Download Worksheets',
                'data' => [
                    array('Caption' => 'Accounting', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-accounting.rar'),
                    array('Caption' => 'Add Maths', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-add-maths.zip'),
                    array('Caption' => 'Biology', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-biology.rar'),
                    array('Caption' => 'Business', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-business.rar'),
                    array('Caption' => 'Chemistry', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-chemistry.rar'),
                    array('Caption' => 'Computer', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-computer.rar'),
                    array('Caption' => 'Economics', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-economics.rar'),
                    array('Caption' => 'English', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-english.rar'),
                    array('Caption' => 'English Lit', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-english-lit.rar'),
                    array('Caption' => 'French', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-french.rar'),
                    array('Caption' => 'German', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-german.rar'),
                    array('Caption' => 'ICT', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-ict.rar'),
                    array('Caption' => 'Islamiyat', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-islamiyat.zip'),
                    array('Caption' => 'Maths', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-maths.zip'),
                    array('Caption' => 'Physics', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-physics.zip'),
                    array('Caption' => 'Urdu A', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-urdu-a.rar'),
                    array('Caption' => 'Urdu IGCSE', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-urdu-igcse.rar'),
                    array('Caption' => 'World History', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-world-history.rar'),
                    array('Caption' => 'Download All Subjects', 'FileUrl' => 'data/2019-20/worksheets/28032020/c1/c1-worksheet.zip')
                ]

            ]
        ];*/

    return $worksheets;
}

function getWorkSheets( $class ) {

    $data_ = array();
    $worksheets = getDataArray();
    foreach ($worksheets as $row) {
        if( $row['class'] == $class ) {
            $keys = array_keys($row);
            $data_[] = array('class'=>$row['class'], 'date'=>$row['date'], 'id'=>$row['id'], 'header'=>$row[$keys[3]]['header']);
            //var_dump($row);
            //return $row['worksheets'];
        }

    }
    return $data_;
}

function getData( $class, $id ) {


    $data_ = array();
    $worksheets = getDataArray();
    foreach ($worksheets as $row) {

        if($row['class'] == $class && $row['id'] == $id) {
            //var_dump($row);echo "<br>";

            $keys = array_keys($row);
            $data_ = $row[$keys[3]];
            $data_['date'] = $row['date'];
            break;
        }

    }
    return $data_;
}

function dateFormat( $d ) {
    if($d=='')return $d;
    return DateTime::createFromFormat('dmY', $d)->format('d/m/Y');
}

$instruntions =
    '<hr />
<div style="text-align:center;">
<h2 style="text-align: center; font-size: 20px; font-weight: 700;">Instructions for online learning material</h2>
</div>

<p>Please see the Weekly Schedule and Checklist of six lessons for six days a week. Boys are encouraged to work their way through the worksheets, recording their progress on the checklist. Please provide your son with a workstation and monitor the beginning and ending time of his work. Review the expectations and instructions of the school for completing assignments and appropriate behavior on internet-enabled devices.</p>

<p>Moreover, give him help (guarded internet access) for links when needed. Allow him do his work independently and do not worry about the mistakes. His teachers will make up for this later on. In some sheets, self-assessment has been attached to help him be more confident.</p>

<p>To meet the Literacy objectives, English and Urdu Reading Comprehension, Creative Writing, Grammar, Reading for Pleasure, Online Link/Activity and Writing are planned for the students. Mental Mathematics, Mathematics Worksheets, Online Games/Activities are added to cater for students&rsquo; needs related to Numeracy concepts and skills. Science and Social Studies Worksheets, Online Activities/Links are also components of the learning plan. Additionally, Islamiat Worksheets and Recitation of Surahs/Du&rsquo;aas, ICT, Art, Calligraphy Assignments are scheduled to make this all a holistic learning opportunity. All the worksheets are self-explanatory and include resources in the form of sample solutions as well as effective/relevant video links.</p>

<p>Music has been included in the schedule for social development and spatial-temporal skills. Physical Education benefits the mental, psychological, physical and emotional development of the child, including self-discipline and goal-setting so we have also embedded this accordingly. The answer sheets will be uploaded at the end of each week. Please encourage your son to check his answers himself first, particularly if he is in Upper Primary.</p>';

?>