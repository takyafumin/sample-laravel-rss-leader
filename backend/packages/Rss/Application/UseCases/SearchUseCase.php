<?php

namespace Rss\Application\UseCases;

use Illuminate\Support\Collection;
use Rss\Application\Queries\SearchQueryInterface;

/**
 * SearchUseCase
 */
class SearchUseCase
{
    /**
     * @param SearchQueryInterface $query Query
     */
    public function __construct(
        private SearchQueryInterface $query
    ) {
    }

    /**
     * @return Collection 検索結果
     */
    public function invoke(): Collection
    {
        return $this->query->get();
    }
}
