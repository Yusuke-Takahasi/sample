{"filter":false,"title":"ProfileController.php","tooltip":"/mynews2/app/Http/Controllers/ProfileController.php","undoManager":{"mark":18,"position":18,"stack":[[{"start":{"row":0,"column":0},"end":{"row":10,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","class ProfileController extends Controller","{","    //","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","use Illuminate\\Support\\Facades\\HTML;","","// 追記","use App\\News;","","class NewsController extends Controller","{","    public function index(Request $request)","    {","        $posts = News::all()->sortByDesc('updated_at');","","        if (count($posts) > 0) {","            $headline = $posts->shift();","        } else {","            $headline = null;","        }","","        // news/index.blade.php ファイルを渡している","        // また View テンプレートに headline、 posts、という変数を渡している","        return view('news.index', ['headline' => $headline, 'posts' => $posts]);","    }","}"]}],[{"start":{"row":26,"column":1},"end":{"row":26,"column":2},"action":"insert","lines":["s"],"id":3}],[{"start":{"row":26,"column":1},"end":{"row":26,"column":2},"action":"remove","lines":["s"],"id":4}],[{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"remove","lines":["s"],"id":5},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"remove","lines":["w"]},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"remove","lines":["e"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"remove","lines":["N"]}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["P"],"id":6},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["r"]},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["o"]}],[{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"insert","lines":["f"],"id":7},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":["i"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["l"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["e"]}],[{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"remove","lines":["s"],"id":8},{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"remove","lines":["w"]},{"start":{"row":10,"column":7},"end":{"row":10,"column":8},"action":"remove","lines":["e"]},{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"remove","lines":["N"]}],[{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"insert","lines":["P"],"id":9},{"start":{"row":10,"column":7},"end":{"row":10,"column":8},"action":"insert","lines":["r"]},{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"insert","lines":["o"]},{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"insert","lines":["f"]}],[{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"insert","lines":["i"],"id":10},{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":["l"]},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"remove","lines":["s"],"id":11},{"start":{"row":14,"column":19},"end":{"row":14,"column":20},"action":"remove","lines":["w"]},{"start":{"row":14,"column":18},"end":{"row":14,"column":19},"action":"remove","lines":["e"]},{"start":{"row":14,"column":17},"end":{"row":14,"column":18},"action":"remove","lines":["N"]}],[{"start":{"row":14,"column":17},"end":{"row":14,"column":18},"action":"insert","lines":["P"],"id":12},{"start":{"row":14,"column":18},"end":{"row":14,"column":19},"action":"insert","lines":["r"]},{"start":{"row":14,"column":19},"end":{"row":14,"column":20},"action":"insert","lines":["o"]},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"insert","lines":["f"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"insert","lines":["o"]}],[{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"remove","lines":["o"],"id":13}],[{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"insert","lines":["i"],"id":14},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":["l"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":17},"end":{"row":14,"column":24},"action":"remove","lines":["Profile"],"id":15},{"start":{"row":14,"column":17},"end":{"row":14,"column":24},"action":"insert","lines":["Profile"]}],[{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"remove","lines":["s"],"id":16},{"start":{"row":24,"column":23},"end":{"row":24,"column":24},"action":"remove","lines":["w"]},{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"remove","lines":["e"]},{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"remove","lines":["n"]}],[{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"insert","lines":["p"],"id":17},{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"insert","lines":["l"]},{"start":{"row":24,"column":23},"end":{"row":24,"column":24},"action":"insert","lines":["o"]},{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"insert","lines":["f"]},{"start":{"row":24,"column":25},"end":{"row":24,"column":26},"action":"insert","lines":["i"]},{"start":{"row":24,"column":26},"end":{"row":24,"column":27},"action":"insert","lines":["l"]}],[{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"insert","lines":["e"],"id":18}],[{"start":{"row":16,"column":8},"end":{"row":20,"column":9},"action":"remove","lines":["if (count($posts) > 0) {","            $headline = $posts->shift();","        } else {","            $headline = null;","        }"],"id":19}],[{"start":{"row":20,"column":38},"end":{"row":20,"column":62},"action":"remove","lines":["'headline' => $headline,"],"id":20}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":16},"end":{"row":9,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1572848869700,"hash":"ad2fef49551cda296e48395ca0c2ca4e31ac2f3f"}