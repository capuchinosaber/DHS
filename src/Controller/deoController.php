<?php


namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class DController extends Controller
{
    /**
     * @Route("/", name="index")
     */

    public function index(Request $request)
    {
        $text = "Hello World";
        
        if ( ($request->query->get('action')) == "linkClicked") {
            $text = "Updated Hello World";
        }
        return $this->render('ehs/xam.html.twig', ['text' => $text]);
    }
}