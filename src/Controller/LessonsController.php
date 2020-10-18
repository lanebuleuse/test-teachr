<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LessonRepository;

class LessonsController extends AbstractController
{
    /**
     * @Route("/my-lessons", name="lessons")
     */
    public function index(LessonRepository $repository)
    {
        return $this->render('lessons/index.html.twig', [
            'lessons' => $repository->findAll(),
        ]);
        
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
                    'frequency' => [
                        'when_day' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
                        'start_date' => new \DateTime(),
                        'next_lesson_date' => 'aujourd\'hui',
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
                    'frequency' => [
                        'when_day' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
                        'start_date' => new \DateTime(),
                        'next_lesson_date' => 'aujourd\'hui',
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
                    'frequency' => [
                        'when_day' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
                        'start_date' => new \DateTime(),
                        'next_lesson_date' => 'aujourd\'hui',
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
                    'frequency' => [
                        'when_day' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
                        'start_date' => new \DateTime(),
                        'next_lesson_date' => 'aujourd\'hui',
                        'duration' => '1h30/Jour',
                    ], 
                ],
            ],
        ]);
    }
}
