<?php

namespace Aldrumo\Blocks\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Renderer extends Component
{
    /** @var string */
    public $key;

    /** @var string|null */
    public $content;

    public function __construct(string $key, ?string $content = null)
    {
        $this->key = $key;
        $this->content = $content;
    }

    public function render(): View
    {
        return view(
            'Blocks::components.renderer',
            [
                'key'      => $this->key,
                'content'  => $this->content,
            ]
        );
    }
}
