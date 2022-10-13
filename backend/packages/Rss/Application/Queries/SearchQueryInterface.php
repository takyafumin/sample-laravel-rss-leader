<?php

namespace Rss\Application\Queries;

use Illuminate\Support\Collection;

/**
 * SearchQuery Interface
 */
interface SearchQueryInterface
{
    /**
     * @return Collection 検索結果
     */
    public function get(): Collection;
}
