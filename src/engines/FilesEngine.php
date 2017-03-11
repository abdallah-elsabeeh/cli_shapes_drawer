<?php

namespace engines;

use core\file;
use core\errorsHandler;

/**
 * Description of FilesEngine
 *
 * @author <abdallah elsabeeh>
 */
class FilesEngine extends file
{

    use errorsHandler {
        errorsHandler::__construct as private __ehConstruct;
    }

    public function __construct()
    {
        $this->__ehConstruct();
    }

    public static function json($data, string $filename, string $location = null)
    {
        if (parent::nameValidation($filename)) {
            throw new \Exception("File name is not vaild");
        }
        $json_data = json_encode($data);
        file_put_contents($filename.'.  json', $json_data);
    }
}
