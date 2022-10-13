<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>RSS Reader</title>
    </head>
    <body>
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                    <h2>RSS Reader</h2>
                    <table class="table-auto w-full text-left whitespace-no-wrap">
                        <thead>
                            <tr>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">No</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">タイトル</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">リンク</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($page->showList as $item)
                            <tr>
                                <td class="px-4 py-3">{{ $page->rowNum($loop->index) }}</td>
                                <td class="px-4 py-3">{{ $item->title }}</td>
                                <td class="px-4 py-3"><a target="_blank" href="{{ $item->link }}">リンク</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $page->paginator->links('pagination::tailwind') }}
                </div>
            </div>
        </section>
    </body>
</html>
