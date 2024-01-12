<?php

namespace PHPMaker2024\prj_membership;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use PHPMaker2024\prj_membership\Attributes\Delete;
use PHPMaker2024\prj_membership\Attributes\Get;
use PHPMaker2024\prj_membership\Attributes\Map;
use PHPMaker2024\prj_membership\Attributes\Options;
use PHPMaker2024\prj_membership\Attributes\Patch;
use PHPMaker2024\prj_membership\Attributes\Post;
use PHPMaker2024\prj_membership\Attributes\Put;

/**
 * home controller
 */
class HomeController extends ControllerBase
{
    // custom
    #[Map(["GET", "POST", "OPTIONS"], "/home[/{params:.*}]", [PermissionMiddleware::class], "custom.home")]
    public function custom(Request $request, Response $response, array $args): Response
    {
        return $this->runPage($request, $response, $args, "Home");
    }
}
