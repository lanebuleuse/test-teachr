<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LessonsController extends AbstractController
{
    /**
     * @Route("/my-lessons", name="lessons")
     */
    public function index()
    {
        return $this->render('lessons/index.html.twig', [
            // informations from model :
            'lessons' => [
                [
                    'title' => 'Cour régulier de philosophie',
                    'student' => [
                        'name' => 'Thomas'
                    ],
                    'teacher' => [
                        'name' => 'Rodolphe',
                    ],
                    'time_slot' => 'A partir de 14h38',
                    'frequency' => [
                        'when_day' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
                        'start_date' => 'Samedi 3 octobre',
                        'next_lesson_data' => 'Aujourdh\'ui',
                        'duration' => '1h30/Jour',
                    ], 
                ],
                [
                    'title' => 'Cour régulier de mathématiques',
                    'student' => [
                        'name' => 'Thomas'
                    ],
                    'teacher' => [
                        'name' => 'Rodolphe',
                    ],
                    'time_slot' => 'A partir de 14h38',
                    'frequency' => [
                        'when_day' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
                        'start_date' => 'Samedi 3 octobre',
                        'next_lesson_data' => 'Aujourdh\'ui',
                        'duration' => '1h30/Jour',
                    ], 
                ],
                [
                    'title' => 'Cour régulier d\'anglais',
                    'student' => [
                        'name' => 'Thomas'
                    ],
                    'teacher' => [
                        'name' => 'Rodolphe',
                    ],
                    'time_slot' => 'A partir de 14h38',
                    'frequency' => [
                        'when_day' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
                        'start_date' => 'Samedi 3 octobre',
                        'next_lesson_data' => 'Aujourdh\'ui',
                        'duration' => '1h30/Jour',
                    ], 
                ],
                [
                    'title' => 'Cour régulier d\'histoire-géographie',
                    'student' => [
                        'name' => 'Thomas'
                    ],
                    'teacher' => [
                        'name' => 'Rodolphe',
                    ],
                    'time_slot' => 'A partir de 14h38',
                    'frequency' => [
                        'when_day' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
                        'start_date' => 'Samedi 3 octobre',
                        'next_lesson_data' => 'Aujourdh\'ui',
                        'duration' => '1h30/Jour',
                    ], 
                ],
            ],
        ]);
    }
}
