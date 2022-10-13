<?php

namespace Rss\Application\Dtos;

/**
 * RssItem
 *
 * @property string title
 * @property string description
 */
class RssItem
{
    /**
     * @param string      $title       タイトル
     * @param string|null $description 詳細
     */
    public function __construct(
        private string $title,
        private ?string $description,
    ) {
    }

    /**
     * @param  string $name プロパティ名
     * @return mixed
     */
    public function __get(string $name): mixed
    {
        return $this->{$name};
    }
}
