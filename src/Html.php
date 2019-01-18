<?php

namespace Omega\Renderers;

use Omega\Core\RendererInterface;

class Html implements RendererInterface
{
    private $base;
    public function __construct($base)
    {
        $this->base = $base;
    }

    public function render($id, array $params) : string
    {
        return file_get_contents($this->base . $id . '.html');
    }
}
