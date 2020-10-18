<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'cards' => [
                [
                    'image_url' => 'https://via.placeholder.com/235x180',
                    'title' => 'Prendre un cours régulier',
                    'body' => 'This is a wider card with supporting tex bellow as a natural lead-in to additionnal content. This content is a little bit longer',
                    'link' => '#',
                ],
                [
                    'image_url' => 'https://via.placeholder.com/235x180',
                    'title' => 'Prendre un cours ponctuel',
                    'body' => 'This is a wider card with supporting tex bellow as a natural lead-in to additionnal content. This content is a little bit longer',
                    'link' => '#',
                ],
                [
                    'image_url' => 'https://via.placeholder.com/235x180',
                    'title' => 'Réserver un stage',
                    'body' => 'This is a wider card with supporting tex bellow as a natural lead-in to additionnal content. This content is a little bit longer',
                    'link' => '#',
                ],
            ]
        ]);
    }
}
