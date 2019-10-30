{"filter":false,"title":"index.blade.php","tooltip":"/mynews2/resources/views/admin/news/index.blade.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":52,"column":11},"action":"insert","lines":["@extends('layouts.admin')","@section('title', '登録済みニュースの一覧')","","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <h2>ニュース一覧</h2>","        </div>","        <div class=\"row\">","            <div class=\"col-md-4\">","                <a href=\"{{ action('Admin\\NewsController@add') }}\" role=\"button\" class=\"btn btn-primary\">新規作成</a>","            </div>","            <div class=\"col-md-8\">","                <form action=\"{{ action('Admin\\NewsController@index') }}\" method=\"get\">","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">タイトル</label>","                        <div class=\"col-md-8\">","                            <input type=\"text\" class=\"form-control\" name=\"cond_title\" value=\"{{ $cond_title }}\">","                        </div>","                        <div class=\"col-md-2\">","                            {{ csrf_field() }}","                            <input type=\"submit\" class=\"btn btn-primary\" value=\"検索\">","                        </div>","                    </div>","                </form>","            </div>","        </div>","        <div class=\"row\">","            <div class=\"list-news col-md-12 mx-auto\">","                <div class=\"row\">","                    <table class=\"table table-dark\">","                        <thead>","                            <tr>","                                <th width=\"10%\">ID</th>","                                <th width=\"20%\">タイトル</th>","                                <th width=\"50%\">本文</th>","                            </tr>","                        </thead>","                        <tbody>","                            @foreach($posts as $news)","                                <tr>","                                    <th>{{ $news->id }}</th>","                                    <td>{{ \\Str::limit($news->title, 100) }}</td>","                                    <td>{{ \\Str::limit($news->body, 250) }}</td>","                                </tr>","                            @endforeach","                        </tbody>","                    </table>","                </div>","            </div>","        </div>","    </div>","@endsection"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":52,"column":11},"action":"remove","lines":["@extends('layouts.admin')","@section('title', '登録済みニュースの一覧')","","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <h2>ニュース一覧</h2>","        </div>","        <div class=\"row\">","            <div class=\"col-md-4\">","                <a href=\"{{ action('Admin\\NewsController@add') }}\" role=\"button\" class=\"btn btn-primary\">新規作成</a>","            </div>","            <div class=\"col-md-8\">","                <form action=\"{{ action('Admin\\NewsController@index') }}\" method=\"get\">","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">タイトル</label>","                        <div class=\"col-md-8\">","                            <input type=\"text\" class=\"form-control\" name=\"cond_title\" value=\"{{ $cond_title }}\">","                        </div>","                        <div class=\"col-md-2\">","                            {{ csrf_field() }}","                            <input type=\"submit\" class=\"btn btn-primary\" value=\"検索\">","                        </div>","                    </div>","                </form>","            </div>","        </div>","        <div class=\"row\">","            <div class=\"list-news col-md-12 mx-auto\">","                <div class=\"row\">","                    <table class=\"table table-dark\">","                        <thead>","                            <tr>","                                <th width=\"10%\">ID</th>","                                <th width=\"20%\">タイトル</th>","                                <th width=\"50%\">本文</th>","                            </tr>","                        </thead>","                        <tbody>","                            @foreach($posts as $news)","                                <tr>","                                    <th>{{ $news->id }}</th>","                                    <td>{{ \\Str::limit($news->title, 100) }}</td>","                                    <td>{{ \\Str::limit($news->body, 250) }}</td>","                                </tr>","                            @endforeach","                        </tbody>","                    </table>","                </div>","            </div>","        </div>","    </div>","@endsection"],"id":2},{"start":{"row":0,"column":0},"end":{"row":58,"column":11},"action":"insert","lines":["@extends('layouts.admin')","@section('title', '登録済みニュースの一覧')","","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <h2>ニュース一覧</h2>","        </div>","        <div class=\"row\">","            <div class=\"col-md-4\">","                <a href=\"{{ action('Admin\\NewsController@add') }}\" role=\"button\" class=\"btn btn-primary\">新規作成</a>","            </div>","            <div class=\"col-md-8\">","                <form action=\"{{ action('Admin\\NewsController@index') }}\" method=\"get\">","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">タイトル</label>","                        <div class=\"col-md-8\">","                            <input type=\"text\" class=\"form-control\" name=\"cond_title\" value={{ $cond_title }}>","                        </div>","                        <div class=\"col-md-2\">","                            {{ csrf_field() }}","                            <input type=\"submit\" class=\"btn btn-primary\" value=\"検索\">","                        </div>","                    </div>","                </form>","            </div>","        </div>","        <div class=\"row\">","            <div class=\"admin-news col-md-12 mx-auto\">","                <div class=\"row\">","                    <table class=\"table table-dark\">","                        <thead>","                            <tr>","                                <th width=\"10%\">ID</th>","                                <th width=\"20%\">タイトル</th>","                                <th width=\"50%\">本文</th>","                                <th width=\"10%\">操作</th>","                            </tr>","                        </thead>","                        <tbody>","                            @foreach($posts as $news)","                                <tr>","                                    <th>{{ $news->id }}</th>","                                    <td>{{ str_limit($news->title, 100) }}</td>","                                    <td>{{ str_limit($news->body, 250) }}</td>","                                    <td>","                                        <div>","                                            <a href=\"{{ action('Admin\\NewsController@edit', ['id' => $news->id]) }}\">編集</a>","                                        </div>","                                    </td>","                                </tr>","                            @endforeach","                        </tbody>","                    </table>","                </div>","            </div>","        </div>","    </div>","@endsection"]}],[{"start":{"row":39,"column":24},"end":{"row":52,"column":32},"action":"remove","lines":["<tbody>","                            @foreach($posts as $news)","                                <tr>","                                    <th>{{ $news->id }}</th>","                                    <td>{{ str_limit($news->title, 100) }}</td>","                                    <td>{{ str_limit($news->body, 250) }}</td>","                                    <td>","                                        <div>","                                            <a href=\"{{ action('Admin\\NewsController@edit', ['id' => $news->id]) }}\">編集</a>","                                        </div>","                                    </td>","                                </tr>","                            @endforeach","                        </tbody>"],"id":3},{"start":{"row":39,"column":24},"end":{"row":55,"column":32},"action":"insert","lines":["<tbody>","                            @foreach($posts as $news)","                                <tr>","                                    <th>{{ $news->id }}</th>","                                    <td>{{ str_limit($news->title, 100) }}</td>","                                    <td>{{ str_limit($news->body, 250) }}</td>","                                    <td>","                                        <div>","                                            <a href=\"{{ action('Admin\\NewsController@edit', ['id' => $news->id]) }}\">編集</a>","                                        </div>","                                        <div>","                                            <a href=\"{{ action('Admin\\NewsController@delete', ['id' => $news->id]) }}\">削除</a>","                                        </div>","                                    </td>","                                </tr>","                            @endforeach","                        </tbody>"]}]]},"ace":{"folds":[],"scrolltop":78,"scrollleft":55.5,"selection":{"start":{"row":55,"column":32},"end":{"row":55,"column":32},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1572417916503,"hash":"4d82c4d2737e3dc9fdcf339f726bb31b2be5b490"}