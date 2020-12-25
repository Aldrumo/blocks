<?php

namespace Aldrumo\Blocks\View\Components;

use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Support\Facades\View;
use Illuminate\View\Component;

class Renderer extends Component
{
    /** @var string */
    public $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function render(): ViewContract
    {
        $data = View::getShared();
        $blocks = $data['contentBlocks'] ?? collect([]);
        $content = $blocks->where('slug', $this->key)->first();

        return view(
            'Blocks::components.renderer',
            [
                'key'      => $this->key,
                'content'  => $content !== null ? $content->content : null,
            ]
        );
    }
}
