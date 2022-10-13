<?php

namespace App\Http\Responses\RssReader;

use Illuminate\Support\Collection;

/**
 * RssItemResponse
 */
class RssItemResponse
{
    /**
     * @param Collection $list 検索結果
     */
    public function __construct(
        private Collection $list
    ) {
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
                        'title'       => $item->title,
                        'description' => $item->description,
                    ];
                }
            ),
            JSON_UNESCAPED_UNICODE
        );
    }
}
