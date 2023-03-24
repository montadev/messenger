<?php
/**
 * Created by Ghanmy.
 * User: ghanmy
 * Date: 01/03/23
 * Time: 05:30 م
 */

namespace App\Service\SalesExport;
use App\Interfaces\ExportInterface;
use Exception;
use Symfony\Contracts\Translation\TranslatorInterface;


class CsvExportByTypeRechargeNormalService implements ExportInterface
{



    /**
     * Function to check whether the implementation supports the $type
     */
    public function supports($type)
    {
        return $type === 'recharge-normal';
    }

    /**
     * This function contains the actual logic
     * @throws Exception - if the payment fails validation
     */
    public function export()
    {
        return 'CsvExportByTypeRechargeNormalService';
    }
}
