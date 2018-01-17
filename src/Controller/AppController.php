<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{

    public function index(Request $request)
    {
        $action = $request->query->get('action');

        return $this->render('app/app.html.twig', [
          'text' => $action == 'click' ? 'Updated Hello World!' : 'Hello World!'
        ]);

    }

    public function handleClick()
    {
      return $this->redirectToRoute('app', array('action'=> 'click'));
    }

}
