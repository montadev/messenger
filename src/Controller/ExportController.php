<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SalesExport\SalesExportService;

class ExportController extends AbstractController
{
    


    #[Route('/export', name: 'app_export')]
    public function index(SalesExportService $salesExportService): Response
    {
        //selon type va exécuter la methode qui convient
       // khouya hichem
        dump($salesExportService->export('dealer'));
        dump($salesExportService->export('recharge-normal'));
        dump($salesExportService->export('recharge-etoile'));

        return $this->render('export/index.html.twig', [
            'controller_name' => 'ExportController',
        ]);
    }
}
