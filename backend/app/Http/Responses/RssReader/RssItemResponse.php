<?php

namespace App\Http\Responses\RssReader;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

/**
 * RssItemResponse
 *
 * @property LengthAwarePaginator paginator Paginator
 * @property Collection           showList  Show List
 */
class RssItemResponse
{
    private const PER_PAGE = 3;

    /**
     * @param Collection $list       検索結果
     * @param int        $pageNumber ページ番号
     * @param string     $url        URL
     */
    public function __construct(
        private Collection $list,
        private int $pageNumber = 1,
        private string $url = ''
    ) {
        // show list
        $this->showList = $list->forPage($pageNumber, self::PER_PAGE);

        // paginator
        $this->paginator = new LengthAwarePaginator(
            $this->showList,
            $list->count(),
            self::PER_PAGE,
            $pageNumber,
            [
                'path' => $url,
            ]
        );
    }

    /**
     * rowNum
     *
     * @param  int $index index
     * @return int PageNumber
     */
    public function rowNum(int $index)
    {
        return $index  + 1 + (($this->pageNumber -1) * self::PER_PAGE);
    }

    /**
     * toJson
     *
     * @return string|false json
     */
    public function toJson()
    {
        return json_encode(
            $this->list->map(
                function ($item) {
                    return [
                        'title' => $item->title,
                        'link'  => $item->link,
                    ];
                }
            ),
            JSON_UNESCAPED_UNICODE
        );
    }
}
