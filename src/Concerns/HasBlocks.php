<?php

namespace Aldrumo\Blocks\Concerns;

use Aldrumo\Blocks\Models\Block;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasBlocks
{
    public function blocks(): MorphMany
    {
        return $this->morphyMany(
            Block::class,
            'item'
        );
    }
}
