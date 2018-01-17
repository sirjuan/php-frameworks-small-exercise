<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Message;

class AppController extends Controller
{
    const MESSAGE = 'Hello World!';
    const CLICKED_MESSAGE = 'Updated Hello World!';

    public function index(Request $request)
    {
        $message = new Message(self::MESSAGE);

        $action = $request->query->get('action');

        if ($action == 'click')
        {
          $message->setMessage(self::CLICKED_MESSAGE);
        }

        return $this->render('app/app.html.twig', [
          'text' => $message->getMessage()
        ]);

    }

    public function handleClick()
    {

      return $this->redirectToRoute('app', array('action'=> 'click'));
    }

}
