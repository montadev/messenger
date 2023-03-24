<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Messenger\MessageBusInterface;
use App\Message\SmsNotification;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(MessageBusInterface $bus): Response
    {

        $bus->dispatch(new SmsNotification('Look! I created a message!'));

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
