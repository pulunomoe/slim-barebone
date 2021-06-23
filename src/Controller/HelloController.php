<?php

namespace Pulunomoe\Controller;

use PDO;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

class HelloController extends Controller
{
	public function __construct(PDO $pdo)
	{
		parent::__construct($pdo);
	}

	public function hello(ServerRequest $request, Response $response, array $args): ResponseInterface
	{
		return $this->render($request, $response, 'hello.twig', [
			'name' => $args['name'] ?? 'world'
		]);
	}
}
