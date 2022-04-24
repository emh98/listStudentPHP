<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentListController extends AbstractController
{
    /**
     * @Route("/student/list", name="app_student_list")
     */
    public function index(): Response
    {
        return $this->render('student_list/index.html.twig', [
            'controller_name' => 'StudentListController',
        ]);
    }
}
