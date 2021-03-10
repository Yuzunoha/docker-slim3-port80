<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$randomResponse = function (Request $request, Response $response) {
  $data = ['キーだよ' => 'ランダムなレスポンスだよ'];
  return $response->withJson($data, 200, JSON_UNESCAPED_UNICODE);
};
