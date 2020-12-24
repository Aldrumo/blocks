<?php

namespace Aldrumo\Blocks\Concerns;

use Aldrumo\Blocks\Models\Block;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Collection;

trait HasBlocks
{
    public function blocks(): MorphMany
    {
        return $this->morphMany(
            Block::class,
            'item'
        );
    }

    public function saveBlocks(Collection $blocks)
    {
        $this->blocks()->delete();

        $toSave = $blocks->map(
            function ($block) {
                return new Block([
                    'slug' => $block['slug'],
                    'content' => $block['content'],
                ]);
            }
        );

        $this->blocks()
            ->saveMany($toSave);
    }
}
