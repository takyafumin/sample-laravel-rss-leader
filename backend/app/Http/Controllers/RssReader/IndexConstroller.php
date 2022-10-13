<?php

namespace App\Http\Controllers\RssReader;

use App\Http\Controllers\Controller;
use App\Http\Responses\RssReader\RssItemResponse;
use Illuminate\Http\Request;
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
     */
    public function index(Request $request)
    {
        // parameter
        $page = $request->input('page') ?? 1;
        $url  = $request->url();

        // search
        $list = $this->useCase->invoke();

        // page
        return view(
            'rss-reader.index', [
                'page' => new RssItemResponse($list, $page, $url),
            ]
        );
    }
}
