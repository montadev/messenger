<?php

namespace App\Service\SalesExport;

use App\Interfaces\ExportInterface;
use Exception;

class SalesExportService
{
    /**
     * @var ExportInterface[]
     */
private  $exports;

    public function __construct($exports)
    {
        $this->exports = $exports;
    }

    public function export($type)
    {
        foreach($this->exports as $export) {
            if ($export->supports($type)) {
                return $export->export();
            }
        }

        throw new Exception("Unsupported export type $type");

    }
}
