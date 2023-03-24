<?php
/**
 * Created by PhpStorm.
 * User: ghanmy
 * Date: 01/03/23
 * Time: 05:20 م
 */

namespace App\Interfaces;
use Exception;

interface ExportInterface
{
    /**
     * Function to check whether the implementation supports the $type
     */
    public function supports($type);
    /**
     * This function contains the actual logic
     * @throws Exception - if the payment fails validation
     */
    public function export();
}
