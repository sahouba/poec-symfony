<?php

namespace App\Controller;
use App\Entity\Trip;
use App\Form\SerachType;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request)
    {
      $trip = new Trip();
      $formSearch = $this->createForm(SerachType::class, $trip);
      $formSearch->handleRequest($request);
        return $this->render('default/index.html.twig', array('formSearch' => $formSearch->createView()));

    }


    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard()
    {
        return $this->render('default/dashboard.html.twig');
    }
}
