<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;


class ToolsController extends Controller
{
    public function pulse() : Response
    {
        return Inertia::render( 'Tools', [ 'service' => 'pulse', 'url' => redirect()->to( config( 'pulse.path' ) )->getTargetUrl() ] );
    }

    public function telescope() : Response
    {
        return Inertia::render( 'Tools', [ 'service' => 'telescope', 'url' => redirect()->to( config( 'telescope.path' ) )->getTargetUrl() ] );
    }
}
