<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{

	/**
     * @Route(
     * "/lucky-number/{slug}",
     * name="lucky-number",
     * methods={"GET","HEAD"},
     * requirements={"slug"="\d+"},
     * defaults={"slug": 1, "title": "Hello world!", "pageName": "Счастливый номер"}
     * )
     */
    public function number(int $slug)
    {
    	//if(!is_numeric($slug)) throw $this->createNotFoundException('Страница не найдена'); - 404
        return $this->render('lucky/number.html.twig', [
            'number' => $slug,
        ]);
    }
}