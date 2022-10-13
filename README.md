LaravelでRSSリーダーを作成するサンプル
====================

LaravelでRSSリーダーを作成するサンプルです。


<!-- @import "[TOC]" {cmd="toc" depthFrom=1 depthTo=6 orderedList=false} -->

<!-- code_chunk_output -->

- [環境](#環境)
- [使い方](#使い方)

<!-- /code_chunk_output -->


## 環境

| ミドルウェア | バージョン |
| ------------ | ---------- |
| Laravel      | 9          |
| PHP          | 8.1.10     |
| composer     | 2.1.14     |
| Node.js      | v18.9.0    |
| npm          | 8.19.1     |


## 使い方

`git clone`してライブラリインストール、リソースバンドルした後、サーバ起動してください。
`http://localhost:8000/rss`にアクセスすると, YahooニュースのRSSが表示されます。


```bash
cd backend

# ライブラリインストール
composer install
npm ci

# リソースバンドル
npm run build

# サーバ起動
php artisan serve
```