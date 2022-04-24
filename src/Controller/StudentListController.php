<?php

namespace App\Controller;

use App\Entity\Prueba;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentListController extends AbstractController
{
    /**
     * @Route("/", name="list")
     */
    public function index(): Response
    {
        return $this->render('student_list/index.html.twig', [
            'controller_name' => 'StudentListController',
        ]);
    }
    /**
     * @Route("/gdatos", name="gdatos")
     */
    public function getAjax(ManagerRegistry $doctrine)
    {

        $students = $doctrine->getRepository(Prueba::class)->findAll();
        $jsonDStudents = array();
        foreach ($students as $student){
            $temp = array(
                'name' => $student->getName(),
                'lastname' => $student->getLastName()
            );
            $jsonDStudents [] = $temp;
        }

        return new JsonResponse($jsonDStudents);
    }

    /**
     * @Route("/cdatos", name="cdatos")
     */
    public function createStudent(Request $request, ManagerRegistry $doctrine)
    {
        $nameR = $request->get('name');
        $lastnameR = $request->get('lastname');

        $entityManager = $doctrine->getManager();

        $student = new Prueba();
        $student->setName($nameR);
        $student->setLastname($lastnameR);

        $entityManager->persist($student);
        $entityManager->flush();

        return new Response("Estudiante nuevo");
    }
}
