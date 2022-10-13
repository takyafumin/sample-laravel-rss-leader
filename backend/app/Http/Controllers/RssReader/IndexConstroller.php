<?php

namespace App\Http\Controllers\RssReader;

use App\Http\Controllers\Controller;
use App\Http\Responses\RssReader\RssItemResponse;
use Rss\Application\UseCases\SearchUseCase;

/**
 * IndexConstroller
 */
class IndexConstroller extends Controller
{
    /**
     * @param App\Http\Controllers\RssReader\SearchUseCase $useCase UseCase
     */
    public function __construct(
        private SearchUseCase $useCase,
    ) {
    }

    /**
     * index
     *
     * @return string
     */
    public function index()
    {
        $list = $this->useCase->invoke();

        return (new RssItemResponse($list))->toJson();
    }
}
