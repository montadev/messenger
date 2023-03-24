<?php

namespace App\MessageHandler;

use App\Message\SmsNotification;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\About;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SmsNotificationHandler implements MessageHandlerInterface
{
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->entityManager = $doctrine->getManager();
    }

    public function __invoke(SmsNotification $message)
    {
        sleep(6);
        $about = new About;
        $about->setName('hichem');
        $this->entityManager->persist($about);
        $this->entityManager->flush();
     
    }
}