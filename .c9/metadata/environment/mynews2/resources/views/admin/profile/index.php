{"filter":false,"title":"index.php","tooltip":"/mynews2/resources/views/admin/profile/index.php","undoManager":{"mark":64,"position":64,"stack":[[{"start":{"row":0,"column":0},"end":{"row":52,"column":11},"action":"insert","lines":["@extends('layouts.admin')","@section('title', '登録済みニュースの一覧')","","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <h2>ニュース一覧</h2>","        </div>","        <div class=\"row\">","            <div class=\"col-md-4\">","                <a href=\"{{ action('Admin\\NewsController@add') }}\" role=\"button\" class=\"btn btn-primary\">新規作成</a>","            </div>","            <div class=\"col-md-8\">","                <form action=\"{{ action('Admin\\NewsController@index') }}\" method=\"get\">","                    <div class=\"form-group row\">","                        <label class=\"col-md-2\">タイトル</label>","                        <div class=\"col-md-8\">","                            <input type=\"text\" class=\"form-control\" name=\"cond_title\" value=\"{{ $cond_title }}\">","                        </div>","                        <div class=\"col-md-2\">","                            {{ csrf_field() }}","                            <input type=\"submit\" class=\"btn btn-primary\" value=\"検索\">","                        </div>","                    </div>","                </form>","            </div>","        </div>","        <div class=\"row\">","            <div class=\"list-news col-md-12 mx-auto\">","                <div class=\"row\">","                    <table class=\"table table-dark\">","                        <thead>","                            <tr>","                                <th width=\"10%\">ID</th>","                                <th width=\"20%\">タイトル</th>","                                <th width=\"50%\">本文</th>","                            </tr>","                        </thead>","                        <tbody>","                            @foreach($posts as $news)","                                <tr>","                                    <th>{{ $news->id }}</th>","                                    <td>{{ \\Str::limit($news->title, 100) }}</td>","                                    <td>{{ \\Str::limit($news->body, 250) }}</td>","                                </tr>","                            @endforeach","                        </tbody>","                    </table>","                </div>","            </div>","        </div>","    </div>","@endsection"],"id":1}],[{"start":{"row":1,"column":26},"end":{"row":1,"column":27},"action":"remove","lines":["ス"],"id":2}],[{"start":{"row":1,"column":25},"end":{"row":1,"column":26},"action":"remove","lines":["ー"],"id":3},{"start":{"row":1,"column":24},"end":{"row":1,"column":25},"action":"remove","lines":["ュ"]},{"start":{"row":1,"column":23},"end":{"row":1,"column":24},"action":"remove","lines":["ニ"]}],[{"start":{"row":1,"column":23},"end":{"row":1,"column":29},"action":"insert","lines":["プロフィール"],"id":4}],[{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"remove","lines":["ス"],"id":5},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["ー"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":["ュ"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"remove","lines":["ニ"]}],[{"start":{"row":6,"column":16},"end":{"row":6,"column":22},"action":"insert","lines":["プロフィール"],"id":6}],[{"start":{"row":10,"column":45},"end":{"row":10,"column":46},"action":"remove","lines":["s"],"id":7},{"start":{"row":10,"column":44},"end":{"row":10,"column":45},"action":"remove","lines":["w"]},{"start":{"row":10,"column":43},"end":{"row":10,"column":44},"action":"remove","lines":["e"]},{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"remove","lines":["N"]}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"insert","lines":["P"],"id":8}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"remove","lines":["P"],"id":9},{"start":{"row":10,"column":42},"end":{"row":10,"column":49},"action":"insert","lines":["Profile"]}],[{"start":{"row":13,"column":50},"end":{"row":13,"column":51},"action":"remove","lines":["s"],"id":10},{"start":{"row":13,"column":49},"end":{"row":13,"column":50},"action":"remove","lines":["w"]},{"start":{"row":13,"column":48},"end":{"row":13,"column":49},"action":"remove","lines":["e"]},{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"remove","lines":["N"]}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"insert","lines":["P"],"id":11},{"start":{"row":13,"column":48},"end":{"row":13,"column":49},"action":"insert","lines":["r"]},{"start":{"row":13,"column":49},"end":{"row":13,"column":50},"action":"insert","lines":["o"]},{"start":{"row":13,"column":50},"end":{"row":13,"column":51},"action":"insert","lines":["f"]},{"start":{"row":13,"column":51},"end":{"row":13,"column":52},"action":"insert","lines":["i"]}],[{"start":{"row":13,"column":52},"end":{"row":13,"column":53},"action":"insert","lines":["l"],"id":12},{"start":{"row":13,"column":53},"end":{"row":13,"column":54},"action":"insert","lines":["e"]}],[{"start":{"row":13,"column":47},"end":{"row":13,"column":54},"action":"remove","lines":["Profile"],"id":13},{"start":{"row":13,"column":47},"end":{"row":13,"column":54},"action":"insert","lines":["Profile"]}],[{"start":{"row":15,"column":51},"end":{"row":15,"column":52},"action":"remove","lines":["ル"],"id":14},{"start":{"row":15,"column":50},"end":{"row":15,"column":51},"action":"remove","lines":["ト"]},{"start":{"row":15,"column":49},"end":{"row":15,"column":50},"action":"remove","lines":["イ"]},{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"remove","lines":["タ"]}],[{"start":{"row":15,"column":48},"end":{"row":15,"column":50},"action":"insert","lines":["名前"],"id":15}],[{"start":{"row":15,"column":49},"end":{"row":15,"column":50},"action":"remove","lines":["前"],"id":16},{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"remove","lines":["名"]}],[{"start":{"row":15,"column":48},"end":{"row":15,"column":50},"action":"insert","lines":["氏名"],"id":17}],[{"start":{"row":34,"column":51},"end":{"row":34,"column":52},"action":"remove","lines":["ル"],"id":18},{"start":{"row":34,"column":50},"end":{"row":34,"column":51},"action":"remove","lines":["ト"]},{"start":{"row":34,"column":49},"end":{"row":34,"column":50},"action":"remove","lines":["イ"]},{"start":{"row":34,"column":48},"end":{"row":34,"column":49},"action":"remove","lines":["タ"]}],[{"start":{"row":34,"column":48},"end":{"row":34,"column":50},"action":"insert","lines":["氏名"],"id":19}],[{"start":{"row":35,"column":32},"end":{"row":35,"column":33},"action":"insert","lines":["/"],"id":20},{"start":{"row":35,"column":33},"end":{"row":35,"column":34},"action":"insert","lines":["/"]}],[{"start":{"row":35,"column":33},"end":{"row":35,"column":34},"action":"remove","lines":["/"],"id":21},{"start":{"row":35,"column":32},"end":{"row":35,"column":33},"action":"remove","lines":["/"]}],[{"start":{"row":41,"column":47},"end":{"row":41,"column":48},"action":"remove","lines":["s"],"id":22},{"start":{"row":41,"column":46},"end":{"row":41,"column":47},"action":"remove","lines":["w"]},{"start":{"row":41,"column":45},"end":{"row":41,"column":46},"action":"remove","lines":["e"]},{"start":{"row":41,"column":44},"end":{"row":41,"column":45},"action":"remove","lines":["n"]}],[{"start":{"row":41,"column":44},"end":{"row":41,"column":45},"action":"insert","lines":["p"],"id":23},{"start":{"row":41,"column":45},"end":{"row":41,"column":46},"action":"insert","lines":["r"]},{"start":{"row":41,"column":46},"end":{"row":41,"column":47},"action":"insert","lines":["o"]}],[{"start":{"row":41,"column":47},"end":{"row":41,"column":48},"action":"insert","lines":["f"],"id":24},{"start":{"row":41,"column":48},"end":{"row":41,"column":49},"action":"insert","lines":["i"]},{"start":{"row":41,"column":49},"end":{"row":41,"column":50},"action":"insert","lines":["l"]},{"start":{"row":41,"column":50},"end":{"row":41,"column":51},"action":"insert","lines":["e"]}],[{"start":{"row":42,"column":59},"end":{"row":42,"column":60},"action":"remove","lines":["s"],"id":25},{"start":{"row":42,"column":58},"end":{"row":42,"column":59},"action":"remove","lines":["w"]},{"start":{"row":42,"column":57},"end":{"row":42,"column":58},"action":"remove","lines":["e"]},{"start":{"row":42,"column":56},"end":{"row":42,"column":57},"action":"remove","lines":["n"]}],[{"start":{"row":42,"column":56},"end":{"row":42,"column":57},"action":"insert","lines":["p"],"id":26},{"start":{"row":42,"column":57},"end":{"row":42,"column":58},"action":"insert","lines":["r"]},{"start":{"row":42,"column":58},"end":{"row":42,"column":59},"action":"insert","lines":["o"]},{"start":{"row":42,"column":59},"end":{"row":42,"column":60},"action":"insert","lines":["f"]},{"start":{"row":42,"column":60},"end":{"row":42,"column":61},"action":"insert","lines":["i"]},{"start":{"row":42,"column":61},"end":{"row":42,"column":62},"action":"insert","lines":["l"]},{"start":{"row":42,"column":62},"end":{"row":42,"column":63},"action":"insert","lines":["e"]}],[{"start":{"row":42,"column":69},"end":{"row":42,"column":70},"action":"remove","lines":["e"],"id":27},{"start":{"row":42,"column":68},"end":{"row":42,"column":69},"action":"remove","lines":["l"]},{"start":{"row":42,"column":67},"end":{"row":42,"column":68},"action":"remove","lines":["t"]},{"start":{"row":42,"column":66},"end":{"row":42,"column":67},"action":"remove","lines":["i"]},{"start":{"row":42,"column":65},"end":{"row":42,"column":66},"action":"remove","lines":["t"]}],[{"start":{"row":42,"column":65},"end":{"row":42,"column":66},"action":"insert","lines":["n"],"id":28},{"start":{"row":42,"column":66},"end":{"row":42,"column":67},"action":"insert","lines":["a"]},{"start":{"row":42,"column":67},"end":{"row":42,"column":68},"action":"insert","lines":["m"]},{"start":{"row":42,"column":68},"end":{"row":42,"column":69},"action":"insert","lines":["e"]}],[{"start":{"row":43,"column":59},"end":{"row":43,"column":60},"action":"remove","lines":["s"],"id":29},{"start":{"row":43,"column":58},"end":{"row":43,"column":59},"action":"remove","lines":["w"]},{"start":{"row":43,"column":57},"end":{"row":43,"column":58},"action":"remove","lines":["e"]},{"start":{"row":43,"column":56},"end":{"row":43,"column":57},"action":"remove","lines":["n"]}],[{"start":{"row":43,"column":56},"end":{"row":43,"column":57},"action":"insert","lines":["p"],"id":30},{"start":{"row":43,"column":57},"end":{"row":43,"column":58},"action":"insert","lines":["r"]},{"start":{"row":43,"column":58},"end":{"row":43,"column":59},"action":"insert","lines":["o"]},{"start":{"row":43,"column":59},"end":{"row":43,"column":60},"action":"insert","lines":["f"]},{"start":{"row":43,"column":60},"end":{"row":43,"column":61},"action":"insert","lines":["i"]}],[{"start":{"row":43,"column":61},"end":{"row":43,"column":62},"action":"insert","lines":["l"],"id":31},{"start":{"row":43,"column":62},"end":{"row":43,"column":63},"action":"insert","lines":["e"]}],[{"start":{"row":43,"column":68},"end":{"row":43,"column":69},"action":"remove","lines":["y"],"id":32},{"start":{"row":43,"column":67},"end":{"row":43,"column":68},"action":"remove","lines":["d"]},{"start":{"row":43,"column":66},"end":{"row":43,"column":67},"action":"remove","lines":["o"]},{"start":{"row":43,"column":65},"end":{"row":43,"column":66},"action":"remove","lines":["b"]}],[{"start":{"row":43,"column":65},"end":{"row":43,"column":66},"action":"insert","lines":["g"],"id":33},{"start":{"row":43,"column":66},"end":{"row":43,"column":67},"action":"insert","lines":["e"]},{"start":{"row":43,"column":67},"end":{"row":43,"column":68},"action":"insert","lines":["n"]},{"start":{"row":43,"column":68},"end":{"row":43,"column":69},"action":"insert","lines":["d"]}],[{"start":{"row":43,"column":69},"end":{"row":43,"column":70},"action":"insert","lines":["e"],"id":34},{"start":{"row":43,"column":70},"end":{"row":43,"column":71},"action":"insert","lines":["r"]}],[{"start":{"row":35,"column":49},"end":{"row":35,"column":50},"action":"remove","lines":["文"],"id":35},{"start":{"row":35,"column":48},"end":{"row":35,"column":49},"action":"remove","lines":["本"]}],[{"start":{"row":35,"column":48},"end":{"row":35,"column":49},"action":"insert","lines":["s"],"id":36},{"start":{"row":35,"column":49},"end":{"row":35,"column":50},"action":"insert","lines":["e"]},{"start":{"row":35,"column":50},"end":{"row":35,"column":51},"action":"insert","lines":["i"]}],[{"start":{"row":35,"column":50},"end":{"row":35,"column":51},"action":"remove","lines":["i"],"id":37},{"start":{"row":35,"column":49},"end":{"row":35,"column":50},"action":"remove","lines":["e"]},{"start":{"row":35,"column":48},"end":{"row":35,"column":49},"action":"remove","lines":["s"]}],[{"start":{"row":35,"column":48},"end":{"row":35,"column":50},"action":"insert","lines":["性別"],"id":38}],[{"start":{"row":35,"column":55},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":40},{"start":{"row":36,"column":0},"end":{"row":36,"column":32},"action":"insert","lines":["                                "]}],[{"start":{"row":36,"column":32},"end":{"row":37,"column":55},"action":"insert","lines":["<th width=\"20%\">氏名</th>","                                <th width=\"50%\">性別</th>"],"id":41}],[{"start":{"row":34,"column":43},"end":{"row":34,"column":44},"action":"remove","lines":["2"],"id":42}],[{"start":{"row":34,"column":43},"end":{"row":34,"column":44},"action":"insert","lines":["1"],"id":43}],[{"start":{"row":35,"column":43},"end":{"row":35,"column":44},"action":"remove","lines":["5"],"id":44}],[{"start":{"row":35,"column":43},"end":{"row":35,"column":44},"action":"insert","lines":["2"],"id":45}],[{"start":{"row":34,"column":43},"end":{"row":34,"column":44},"action":"remove","lines":["1"],"id":46}],[{"start":{"row":34,"column":43},"end":{"row":34,"column":44},"action":"insert","lines":["2"],"id":47}],[{"start":{"row":37,"column":43},"end":{"row":37,"column":44},"action":"remove","lines":["5"],"id":48}],[{"start":{"row":37,"column":43},"end":{"row":37,"column":44},"action":"insert","lines":["3"],"id":49}],[{"start":{"row":36,"column":49},"end":{"row":36,"column":50},"action":"remove","lines":["名"],"id":50},{"start":{"row":36,"column":48},"end":{"row":36,"column":49},"action":"remove","lines":["氏"]}],[{"start":{"row":36,"column":48},"end":{"row":36,"column":49},"action":"insert","lines":["s"],"id":51},{"start":{"row":36,"column":49},"end":{"row":36,"column":50},"action":"insert","lines":["h"]},{"start":{"row":36,"column":50},"end":{"row":36,"column":51},"action":"insert","lines":["u"]},{"start":{"row":36,"column":51},"end":{"row":36,"column":52},"action":"insert","lines":["m"]},{"start":{"row":36,"column":52},"end":{"row":36,"column":53},"action":"insert","lines":["i"]}],[{"start":{"row":36,"column":52},"end":{"row":36,"column":53},"action":"remove","lines":["i"],"id":52},{"start":{"row":36,"column":51},"end":{"row":36,"column":52},"action":"remove","lines":["m"]},{"start":{"row":36,"column":50},"end":{"row":36,"column":51},"action":"remove","lines":["u"]},{"start":{"row":36,"column":49},"end":{"row":36,"column":50},"action":"remove","lines":["h"]},{"start":{"row":36,"column":48},"end":{"row":36,"column":49},"action":"remove","lines":["s"]}],[{"start":{"row":36,"column":48},"end":{"row":36,"column":50},"action":"insert","lines":["趣味"],"id":53}],[{"start":{"row":37,"column":49},"end":{"row":37,"column":50},"action":"remove","lines":["別"],"id":54},{"start":{"row":37,"column":48},"end":{"row":37,"column":49},"action":"remove","lines":["性"]}],[{"start":{"row":37,"column":48},"end":{"row":37,"column":52},"action":"insert","lines":["自己紹介"],"id":55}],[{"start":{"row":45,"column":85},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":56},{"start":{"row":46,"column":0},"end":{"row":46,"column":36},"action":"insert","lines":["                                    "]}],[{"start":{"row":46,"column":36},"end":{"row":47,"column":85},"action":"insert","lines":["<td>{{ \\Str::limit($profile->name, 100) }}</td>","                                    <td>{{ \\Str::limit($profile->gender, 250) }}</td>"],"id":57}],[{"start":{"row":46,"column":68},"end":{"row":46,"column":69},"action":"remove","lines":["e"],"id":58},{"start":{"row":46,"column":67},"end":{"row":46,"column":68},"action":"remove","lines":["m"]},{"start":{"row":46,"column":66},"end":{"row":46,"column":67},"action":"remove","lines":["a"]},{"start":{"row":46,"column":65},"end":{"row":46,"column":66},"action":"remove","lines":["n"]}],[{"start":{"row":46,"column":65},"end":{"row":46,"column":66},"action":"insert","lines":["h"],"id":59},{"start":{"row":46,"column":66},"end":{"row":46,"column":67},"action":"insert","lines":["o"]},{"start":{"row":46,"column":67},"end":{"row":46,"column":68},"action":"insert","lines":["b"]},{"start":{"row":46,"column":68},"end":{"row":46,"column":69},"action":"insert","lines":["b"]},{"start":{"row":46,"column":69},"end":{"row":46,"column":70},"action":"insert","lines":["y"]}],[{"start":{"row":47,"column":70},"end":{"row":47,"column":71},"action":"remove","lines":["r"],"id":60},{"start":{"row":47,"column":69},"end":{"row":47,"column":70},"action":"remove","lines":["e"]},{"start":{"row":47,"column":68},"end":{"row":47,"column":69},"action":"remove","lines":["d"]},{"start":{"row":47,"column":67},"end":{"row":47,"column":68},"action":"remove","lines":["n"]},{"start":{"row":47,"column":66},"end":{"row":47,"column":67},"action":"remove","lines":["e"]},{"start":{"row":47,"column":65},"end":{"row":47,"column":66},"action":"remove","lines":["g"]}],[{"start":{"row":47,"column":65},"end":{"row":47,"column":66},"action":"insert","lines":["i"],"id":61},{"start":{"row":47,"column":66},"end":{"row":47,"column":67},"action":"insert","lines":["n"]},{"start":{"row":47,"column":67},"end":{"row":47,"column":68},"action":"insert","lines":["t"]},{"start":{"row":47,"column":68},"end":{"row":47,"column":69},"action":"insert","lines":["r"]},{"start":{"row":47,"column":69},"end":{"row":47,"column":70},"action":"insert","lines":["o"]}],[{"start":{"row":47,"column":65},"end":{"row":47,"column":70},"action":"remove","lines":["intro"],"id":62},{"start":{"row":47,"column":65},"end":{"row":47,"column":77},"action":"insert","lines":["introduction"]}],[{"start":{"row":41,"column":51},"end":{"row":41,"column":52},"action":"remove","lines":["s"],"id":63},{"start":{"row":41,"column":50},"end":{"row":41,"column":51},"action":"remove","lines":["w"]},{"start":{"row":41,"column":49},"end":{"row":41,"column":50},"action":"remove","lines":["e"]},{"start":{"row":41,"column":48},"end":{"row":41,"column":49},"action":"remove","lines":["n"]}],[{"start":{"row":41,"column":48},"end":{"row":41,"column":49},"action":"insert","lines":["p"],"id":64},{"start":{"row":41,"column":49},"end":{"row":41,"column":50},"action":"insert","lines":["r"]},{"start":{"row":41,"column":50},"end":{"row":41,"column":51},"action":"insert","lines":["o"]}],[{"start":{"row":41,"column":51},"end":{"row":41,"column":52},"action":"insert","lines":["f"],"id":65},{"start":{"row":41,"column":52},"end":{"row":41,"column":53},"action":"insert","lines":["i"]}],[{"start":{"row":41,"column":53},"end":{"row":41,"column":54},"action":"insert","lines":["l"],"id":66},{"start":{"row":41,"column":54},"end":{"row":41,"column":55},"action":"insert","lines":["e"]},{"start":{"row":41,"column":55},"end":{"row":41,"column":56},"action":"insert","lines":["s"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":41,"column":56},"end":{"row":41,"column":56},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1572425469031,"hash":"4c13c05dcf576320421201a09c039fe51bcbb61c"}