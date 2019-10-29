{"filter":false,"title":"edit.blade.php","tooltip":"/mynews2/resources/views/admin/profile/edit.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":41,"column":11},"action":"insert","lines":["@extends('layouts.admin')","@section('title', 'ニュースの新規作成')","","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <div class=\"col-md-8 mx-auto\">","                <h2>ニュース新規作成</h2>","                <form action=\"{{ action('Admin\\NewsController@create') }}\" method=\"post\" enctype=\"multipart/form-data\">","","                    @if (count($errors) > 0)","                        <ul>","                            @foreach($errors->all() as $e)","                                <li>{{ $e }}</li>","                            @endforeach","                        </ul>","                    @endif","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">タイトル</label>","                        <div class=\"col-md-10\">","                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ old('title') }}\">","                        </div>","                    </div>","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">本文</label>","                        <div class=\"col-md-10\">","                            <textarea class=\"form-control\" name=\"body\" rows=\"20\">{{ old('body') }}</textarea>","                        </div>","                    </div>","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">画像</label>","                        <div class=\"col-md-10\">","                            <input type=\"file\" class=\"form-control-file\" name=\"image\">","                        </div>","                    </div>","                    {{ csrf_field() }}","                    <input type=\"submit\" class=\"btn btn-primary\" value=\"更新\">","                </form>","            </div>","        </div>","    </div>","@endsection"],"id":1}]]},"ace":{"folds":[],"scrolltop":348,"scrollleft":0,"selection":{"start":{"row":41,"column":11},"end":{"row":41,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":20,"state":"start","mode":"ace/mode/php"}},"timestamp":1572326772061,"hash":"4bd11e3aeacfc7c84559dc4504f5f8907236dc1e"}