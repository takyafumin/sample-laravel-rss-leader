<?php

namespace App\Infra\Repositories\Queries;

use Illuminate\Support\Collection;
use Rss\Application\Dtos\RssItem;
use Rss\Application\Queries\SearchQueryInterface;
use Vedmant\FeedReader\Facades\FeedReader;

/**
 * SearchQuery
 */
class SearchQuery implements SearchQueryInterface
{
    /**
     * @var string URL:RSS
     */
    private const URL_RSS = 'https://news.yahoo.co.jp/rss/topics/it.xml';

    /**
     * @return Collection 検索結果
     */
    public function get(): Collection
    {
        $feed = FeedReader::read(self::URL_RSS);

        $list = [];
        foreach($feed->get_items() as $item) {
            $list[] = new RssItem(
                $item->get_title(),
                $item->get_description(),
            );
        }

        return collect($list);
    }
}

