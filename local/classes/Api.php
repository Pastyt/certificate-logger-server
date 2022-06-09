<?php

namespace Classes;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Loader;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Api
{
    public static function getMessage(Request $request, Response $response)
    {
        Loader::includeModule('oreluniver.logger');

        \COreluniverLogger::getMessage($request->getQueryParams());

        return $response->getBody()->write(json_encode(['success' => true]));
    }
}