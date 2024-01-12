<?php

namespace PHPMaker2024\prj_membership;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use PHPMaker2024\prj_membership\Attributes\Delete;
use PHPMaker2024\prj_membership\Attributes\Get;
use PHPMaker2024\prj_membership\Attributes\Map;
use PHPMaker2024\prj_membership\Attributes\Options;
use PHPMaker2024\prj_membership\Attributes\Patch;
use PHPMaker2024\prj_membership\Attributes\Post;
use PHPMaker2024\prj_membership\Attributes\Put;

class UserlevelsController extends ControllerBase
{
    // list
    #[Map(["GET","POST","OPTIONS"], "/userlevelslist[/{UserLevelID}]", [PermissionMiddleware::class], "list.userlevels")]
    public function list(Request $request, Response $response, array $args): Response
    {
        return $this->runPage($request, $response, $args, "UserlevelsList");
    }

    // add
    #[Map(["GET","POST","OPTIONS"], "/userlevelsadd[/{UserLevelID}]", [PermissionMiddleware::class], "add.userlevels")]
    public function add(Request $request, Response $response, array $args): Response
    {
        return $this->runPage($request, $response, $args, "UserlevelsAdd");
    }

    // view
    #[Map(["GET","POST","OPTIONS"], "/userlevelsview[/{UserLevelID}]", [PermissionMiddleware::class], "view.userlevels")]
    public function view(Request $request, Response $response, array $args): Response
    {
        return $this->runPage($request, $response, $args, "UserlevelsView");
    }

    // edit
    #[Map(["GET","POST","OPTIONS"], "/userlevelsedit[/{UserLevelID}]", [PermissionMiddleware::class], "edit.userlevels")]
    public function edit(Request $request, Response $response, array $args): Response
    {
        return $this->runPage($request, $response, $args, "UserlevelsEdit");
    }

    // delete
    #[Map(["GET","POST","OPTIONS"], "/userlevelsdelete[/{UserLevelID}]", [PermissionMiddleware::class], "delete.userlevels")]
    public function delete(Request $request, Response $response, array $args): Response
    {
        return $this->runPage($request, $response, $args, "UserlevelsDelete");
    }
}
