{"filter":false,"title":"NewsController.php","tooltip":"/mynews2/app/Http/Controllers/Admin/NewsController.php","undoManager":{"mark":88,"position":88,"stack":[[{"start":{"row":14,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["public function create(Request $request)","  {","      // admin/news/createにリダイレクトする","      return redirect('admin/news/create');","  } "],"id":14}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":["/"],"id":15},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":5,"column":36},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":16}],[{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":13},"action":"insert","lines":["use App\\News;"],"id":18}],[{"start":{"row":20,"column":3},"end":{"row":20,"column":4},"action":"remove","lines":[" "],"id":19},{"start":{"row":20,"column":3},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":21,"column":2},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":22,"column":0},"end":{"row":22,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":19,"column":5},"end":{"row":19,"column":6},"action":"insert","lines":["/"],"id":21},{"start":{"row":19,"column":6},"end":{"row":19,"column":7},"action":"insert","lines":["/"]}],[{"start":{"row":17,"column":3},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":22},{"start":{"row":18,"column":0},"end":{"row":18,"column":6},"action":"insert","lines":["      "]}],[{"start":{"row":18,"column":6},"end":{"row":33,"column":45},"action":"insert","lines":["$validatedData = $request->validate([","            'title' => 'required',","            'body' => 'required',","            'image' => 'image',","        ]);","","        $news = new News();","        $news->title = $validatedData['title'];","        $news->body = $validatedData['body'];","","        if (isset($validatedData['image'])) {","            $path = $validatedData['image']->store('images');","            $news->image_path = basename($path);","        }","        $news->save();","        return redirect('admin/news/create');"],"id":23}],[{"start":{"row":34,"column":6},"end":{"row":34,"column":8},"action":"remove","lines":["//"],"id":24},{"start":{"row":35,"column":5},"end":{"row":35,"column":7},"action":"remove","lines":["//"]}],[{"start":{"row":34,"column":7},"end":{"row":34,"column":8},"action":"insert","lines":["/"],"id":25},{"start":{"row":34,"column":8},"end":{"row":34,"column":9},"action":"insert","lines":["/"]}],[{"start":{"row":0,"column":0},"end":{"row":40,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers\\Admin;","","use Illuminate\\Http\\Request;","use App\\Http\\Controllers\\Controller;","","use App\\News;","","class NewsController extends Controller","{","    ","     public function add()","  {","      return view('admin.news.create');","  }","public function create(Request $request)","  {","      $validatedData = $request->validate([","            'title' => 'required',","            'body' => 'required',","            'image' => 'image',","        ]);","","        $news = new News();","        $news->title = $validatedData['title'];","        $news->body = $validatedData['body'];","","        if (isset($validatedData['image'])) {","            $path = $validatedData['image']->store('images');","            $news->image_path = basename($path);","        }","        $news->save();","        return redirect('admin/news/create');","       //admin/news/createにリダイレクトする","      return redirect('admin/news/create');","  }","  ","  ","}",""],"id":26},{"start":{"row":0,"column":0},"end":{"row":51,"column":1},"action":"insert","lines":["<?php","namespace App\\Http\\Controllers\\Admin;","use Illuminate\\Http\\Request;","use App\\Http\\Controllers\\Controller;","use App\\News;","","class NewsController extends Controller","{","  public function add()","  {","      return view('admin.news.create');","  }","","  public function create(Request $request)","  {","      // Varidationを行う","      $this->validate($request, News::$rules);","      $news = new News;","      $form = $request->all();","","      // formに画像があれば、保存する","      if (isset($form['image'])) {","        $path = $request->file('image')->store('public/image');","        $news->image_path = basename($path);","      } else {","          $news->image_path = null;","      }","","      unset($form['_token']);","      unset($form['image']);","      // データベースに保存する","      $news->fill($form);","      $news->save();","","      return redirect('admin/news/create');","  }","","  // 以下を追記","  public function index(Request $request)","  {","      $cond_title = $request->cond_title;","      if ($cond_title != '') {","          // 検索されたら検索結果を取得する","          $posts = News::where('title', $cond_title)->get();","      } else {","          // それ以外はすべてのニュースを取得する","          $posts = News::all();","      }","      return view('admin.news.index', ['posts' => $posts, 'cond_title' => $cond_title]);","  }","","}"]}],[{"start":{"row":37,"column":9},"end":{"row":37,"column":10},"action":"remove","lines":["記"],"id":28},{"start":{"row":37,"column":8},"end":{"row":37,"column":9},"action":"remove","lines":["追"]},{"start":{"row":37,"column":7},"end":{"row":37,"column":8},"action":"remove","lines":["を"]},{"start":{"row":37,"column":6},"end":{"row":37,"column":7},"action":"remove","lines":["下"]},{"start":{"row":37,"column":5},"end":{"row":37,"column":6},"action":"remove","lines":["以"]}],[{"start":{"row":37,"column":4},"end":{"row":37,"column":5},"action":"remove","lines":[" "],"id":29},{"start":{"row":37,"column":3},"end":{"row":37,"column":4},"action":"remove","lines":["/"]},{"start":{"row":37,"column":2},"end":{"row":37,"column":3},"action":"remove","lines":["/"]}],[{"start":{"row":50,"column":0},"end":{"row":51,"column":0},"action":"insert","lines":["",""],"id":30},{"start":{"row":51,"column":0},"end":{"row":52,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":52,"column":0},"end":{"row":52,"column":2},"action":"insert","lines":["  "],"id":31}],[{"start":{"row":52,"column":2},"end":{"row":78,"column":1},"action":"insert","lines":["public function edit(Request $request)","  {","      // News Modelからデータを取得する","      $news = News::find($request->id);","      if (empty($news)) {","        abort(404);    ","      }","      return view('admin.news.edit', ['news_form' => $news]);","  }","","","  public function update(Request $request)","  {","      // Validationをかける","      $this->validate($request, News::$rules);","      // News Modelからデータを取得する","      $news = News::find($request->id);","      // 送信されてきたフォームデータを格納する","      $news_form = $request->all();","      unset($news_form['_token']);","","      // 該当するデータを上書きして保存する","      $news->fill($news_form)->save();","","      return redirect('admin/news');","  }","}"],"id":34}],[{"start":{"row":78,"column":0},"end":{"row":78,"column":1},"action":"remove","lines":["}"],"id":35}],[{"start":{"row":63,"column":1},"end":{"row":78,"column":0},"action":"remove","lines":[" public function update(Request $request)","  {","      // Validationをかける","      $this->validate($request, News::$rules);","      // News Modelからデータを取得する","      $news = News::find($request->id);","      // 送信されてきたフォームデータを格納する","      $news_form = $request->all();","      unset($news_form['_token']);","","      // 該当するデータを上書きして保存する","      $news->fill($news_form)->save();","","      return redirect('admin/news');","  }",""],"id":36},{"start":{"row":63,"column":1},"end":{"row":84,"column":3},"action":"insert","lines":["public function update(Request $request)","  {","      // Validationをかける","      $this->validate($request, News::$rules);","      // News Modelからデータを取得する","      $news = News::find($request->id);","      // 送信されて���たフォームデータを格納する","      $news_form = $request->all();","      if (isset($news_form['image'])) {","        $path = $request->file('image')->store('public/image');","        $news->image_path = basename($path);","        unset($news_form['image']);","      } elseif (isset($request->remove)) {","        $news->image_path = null;","        unset($news_form['remove']);","      }","      unset($news_form['_token']);","      // 該当するデータを上書きして保存する","      $news->fill($news_form)->save();","","      return redirect('admin/news');","  }"]}],[{"start":{"row":84,"column":3},"end":{"row":85,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":85,"column":0},"end":{"row":85,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":85,"column":2},"end":{"row":85,"column":3},"action":"insert","lines":["p"],"id":38},{"start":{"row":85,"column":3},"end":{"row":85,"column":4},"action":"insert","lines":["u"]},{"start":{"row":85,"column":4},"end":{"row":85,"column":5},"action":"insert","lines":["b"]},{"start":{"row":85,"column":5},"end":{"row":85,"column":6},"action":"insert","lines":["l"]},{"start":{"row":85,"column":6},"end":{"row":85,"column":7},"action":"insert","lines":["i"]}],[{"start":{"row":85,"column":7},"end":{"row":85,"column":8},"action":"insert","lines":["c"],"id":39}],[{"start":{"row":85,"column":8},"end":{"row":85,"column":9},"action":"insert","lines":[" "],"id":40}],[{"start":{"row":85,"column":9},"end":{"row":85,"column":10},"action":"insert","lines":["f"],"id":41},{"start":{"row":85,"column":10},"end":{"row":85,"column":11},"action":"insert","lines":["u"]},{"start":{"row":85,"column":11},"end":{"row":85,"column":12},"action":"insert","lines":["n"]},{"start":{"row":85,"column":12},"end":{"row":85,"column":13},"action":"insert","lines":["c"]}],[{"start":{"row":85,"column":13},"end":{"row":85,"column":14},"action":"insert","lines":["t"],"id":42},{"start":{"row":85,"column":14},"end":{"row":85,"column":15},"action":"insert","lines":["i"]},{"start":{"row":85,"column":15},"end":{"row":85,"column":16},"action":"insert","lines":["o"]},{"start":{"row":85,"column":16},"end":{"row":85,"column":17},"action":"insert","lines":["n"]}],[{"start":{"row":85,"column":17},"end":{"row":85,"column":18},"action":"insert","lines":[" "],"id":43},{"start":{"row":85,"column":18},"end":{"row":85,"column":19},"action":"insert","lines":["d"]},{"start":{"row":85,"column":19},"end":{"row":85,"column":20},"action":"insert","lines":["e"]},{"start":{"row":85,"column":20},"end":{"row":85,"column":21},"action":"insert","lines":["k"]}],[{"start":{"row":85,"column":21},"end":{"row":85,"column":22},"action":"insert","lines":["e"],"id":44}],[{"start":{"row":85,"column":21},"end":{"row":85,"column":22},"action":"remove","lines":["e"],"id":45},{"start":{"row":85,"column":20},"end":{"row":85,"column":21},"action":"remove","lines":["k"]}],[{"start":{"row":85,"column":20},"end":{"row":85,"column":21},"action":"insert","lines":["l"],"id":46},{"start":{"row":85,"column":21},"end":{"row":85,"column":22},"action":"insert","lines":["e"]},{"start":{"row":85,"column":22},"end":{"row":85,"column":23},"action":"insert","lines":["t"]},{"start":{"row":85,"column":23},"end":{"row":85,"column":24},"action":"insert","lines":["e"]}],[{"start":{"row":85,"column":24},"end":{"row":85,"column":26},"action":"insert","lines":["()"],"id":47}],[{"start":{"row":85,"column":25},"end":{"row":85,"column":26},"action":"insert","lines":["R"],"id":48}],[{"start":{"row":85,"column":25},"end":{"row":85,"column":26},"action":"remove","lines":["R"],"id":49},{"start":{"row":85,"column":25},"end":{"row":85,"column":32},"action":"insert","lines":["Request"]}],[{"start":{"row":85,"column":32},"end":{"row":85,"column":33},"action":"insert","lines":[" "],"id":50},{"start":{"row":85,"column":33},"end":{"row":85,"column":34},"action":"insert","lines":["$"]}],[{"start":{"row":85,"column":34},"end":{"row":85,"column":35},"action":"insert","lines":["r"],"id":51},{"start":{"row":85,"column":35},"end":{"row":85,"column":36},"action":"insert","lines":["e"]}],[{"start":{"row":85,"column":36},"end":{"row":85,"column":38},"action":"insert","lines":["  "],"id":52}],[{"start":{"row":85,"column":36},"end":{"row":85,"column":38},"action":"remove","lines":["  "],"id":53}],[{"start":{"row":85,"column":36},"end":{"row":85,"column":37},"action":"insert","lines":["q"],"id":54},{"start":{"row":85,"column":37},"end":{"row":85,"column":38},"action":"insert","lines":["u"]}],[{"start":{"row":85,"column":33},"end":{"row":85,"column":38},"action":"remove","lines":["$requ"],"id":55},{"start":{"row":85,"column":33},"end":{"row":85,"column":41},"action":"insert","lines":["$request"]}],[{"start":{"row":85,"column":42},"end":{"row":86,"column":0},"action":"insert","lines":["",""],"id":56},{"start":{"row":86,"column":0},"end":{"row":86,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":86,"column":2},"end":{"row":86,"column":3},"action":"insert","lines":["{"],"id":57}],[{"start":{"row":86,"column":3},"end":{"row":88,"column":3},"action":"insert","lines":["","    ","  }"],"id":58}],[{"start":{"row":87,"column":4},"end":{"row":88,"column":0},"action":"insert","lines":["",""],"id":59},{"start":{"row":88,"column":0},"end":{"row":88,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":88,"column":4},"end":{"row":88,"column":6},"action":"insert","lines":["  "],"id":60}],[{"start":{"row":88,"column":6},"end":{"row":88,"column":7},"action":"insert","lines":["$"],"id":61},{"start":{"row":88,"column":7},"end":{"row":88,"column":8},"action":"insert","lines":["n"]}],[{"start":{"row":88,"column":8},"end":{"row":88,"column":9},"action":"insert","lines":["e"],"id":62},{"start":{"row":88,"column":9},"end":{"row":88,"column":10},"action":"insert","lines":["w"]},{"start":{"row":88,"column":10},"end":{"row":88,"column":11},"action":"insert","lines":["s"]}],[{"start":{"row":88,"column":11},"end":{"row":88,"column":12},"action":"insert","lines":[" "],"id":63},{"start":{"row":88,"column":12},"end":{"row":88,"column":13},"action":"insert","lines":["="]}],[{"start":{"row":88,"column":13},"end":{"row":88,"column":14},"action":"insert","lines":[" "],"id":64}],[{"start":{"row":88,"column":14},"end":{"row":88,"column":15},"action":"insert","lines":["N"],"id":65},{"start":{"row":88,"column":15},"end":{"row":88,"column":16},"action":"insert","lines":["e"]}],[{"start":{"row":88,"column":16},"end":{"row":88,"column":17},"action":"insert","lines":["w"],"id":66},{"start":{"row":88,"column":17},"end":{"row":88,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":88,"column":18},"end":{"row":88,"column":19},"action":"insert","lines":[":"],"id":67}],[{"start":{"row":88,"column":19},"end":{"row":88,"column":20},"action":"insert","lines":[" "],"id":68},{"start":{"row":88,"column":20},"end":{"row":88,"column":21},"action":"insert","lines":[":"]}],[{"start":{"row":88,"column":20},"end":{"row":88,"column":21},"action":"remove","lines":[":"],"id":69},{"start":{"row":88,"column":19},"end":{"row":88,"column":20},"action":"remove","lines":[" "]}],[{"start":{"row":88,"column":19},"end":{"row":88,"column":20},"action":"insert","lines":[":"],"id":70}],[{"start":{"row":88,"column":20},"end":{"row":88,"column":24},"action":"insert","lines":["News"],"id":71}],[{"start":{"row":88,"column":23},"end":{"row":88,"column":24},"action":"remove","lines":["s"],"id":72},{"start":{"row":88,"column":22},"end":{"row":88,"column":23},"action":"remove","lines":["w"]},{"start":{"row":88,"column":21},"end":{"row":88,"column":22},"action":"remove","lines":["e"]},{"start":{"row":88,"column":20},"end":{"row":88,"column":21},"action":"remove","lines":["N"]}],[{"start":{"row":88,"column":20},"end":{"row":88,"column":21},"action":"insert","lines":["f"],"id":73},{"start":{"row":88,"column":21},"end":{"row":88,"column":22},"action":"insert","lines":["i"]},{"start":{"row":88,"column":22},"end":{"row":88,"column":23},"action":"insert","lines":["n"]},{"start":{"row":88,"column":23},"end":{"row":88,"column":24},"action":"insert","lines":["d"]}],[{"start":{"row":88,"column":24},"end":{"row":88,"column":26},"action":"insert","lines":["()"],"id":74}],[{"start":{"row":88,"column":25},"end":{"row":88,"column":26},"action":"insert","lines":["$"],"id":75},{"start":{"row":88,"column":26},"end":{"row":88,"column":27},"action":"insert","lines":["r"]},{"start":{"row":88,"column":27},"end":{"row":88,"column":28},"action":"insert","lines":["e"]}],[{"start":{"row":88,"column":25},"end":{"row":88,"column":28},"action":"remove","lines":["$re"],"id":76},{"start":{"row":88,"column":25},"end":{"row":88,"column":33},"action":"insert","lines":["$request"]}],[{"start":{"row":88,"column":33},"end":{"row":88,"column":34},"action":"insert","lines":["-"],"id":77},{"start":{"row":88,"column":34},"end":{"row":88,"column":35},"action":"insert","lines":[">"]}],[{"start":{"row":88,"column":35},"end":{"row":88,"column":36},"action":"insert","lines":["i"],"id":78},{"start":{"row":88,"column":36},"end":{"row":88,"column":37},"action":"insert","lines":["d"]}],[{"start":{"row":88,"column":38},"end":{"row":88,"column":39},"action":"insert","lines":[";"],"id":79}],[{"start":{"row":88,"column":39},"end":{"row":89,"column":0},"action":"insert","lines":["",""],"id":80},{"start":{"row":89,"column":0},"end":{"row":89,"column":6},"action":"insert","lines":["      "]},{"start":{"row":89,"column":6},"end":{"row":90,"column":0},"action":"insert","lines":["",""]},{"start":{"row":90,"column":0},"end":{"row":90,"column":6},"action":"insert","lines":["      "]}],[{"start":{"row":90,"column":6},"end":{"row":90,"column":7},"action":"insert","lines":["$"],"id":81},{"start":{"row":90,"column":7},"end":{"row":90,"column":8},"action":"insert","lines":["n"]},{"start":{"row":90,"column":8},"end":{"row":90,"column":9},"action":"insert","lines":["e"]},{"start":{"row":90,"column":9},"end":{"row":90,"column":10},"action":"insert","lines":["w"]}],[{"start":{"row":90,"column":10},"end":{"row":90,"column":11},"action":"insert","lines":["s"],"id":82}],[{"start":{"row":90,"column":11},"end":{"row":90,"column":12},"action":"insert","lines":["-"],"id":83},{"start":{"row":90,"column":12},"end":{"row":90,"column":13},"action":"insert","lines":[">"]}],[{"start":{"row":90,"column":13},"end":{"row":90,"column":14},"action":"insert","lines":["d"],"id":84},{"start":{"row":90,"column":14},"end":{"row":90,"column":15},"action":"insert","lines":["e"]},{"start":{"row":90,"column":15},"end":{"row":90,"column":16},"action":"insert","lines":["l"]},{"start":{"row":90,"column":16},"end":{"row":90,"column":17},"action":"insert","lines":["e"]}],[{"start":{"row":90,"column":17},"end":{"row":90,"column":18},"action":"insert","lines":["t"],"id":85},{"start":{"row":90,"column":18},"end":{"row":90,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":90,"column":19},"end":{"row":90,"column":21},"action":"insert","lines":["()"],"id":86}],[{"start":{"row":90,"column":21},"end":{"row":90,"column":22},"action":"insert","lines":[";"],"id":87}],[{"start":{"row":90,"column":22},"end":{"row":91,"column":0},"action":"insert","lines":["",""],"id":88},{"start":{"row":91,"column":0},"end":{"row":91,"column":6},"action":"insert","lines":["      "]},{"start":{"row":91,"column":6},"end":{"row":91,"column":7},"action":"insert","lines":["r"]},{"start":{"row":91,"column":7},"end":{"row":91,"column":8},"action":"insert","lines":["e"]}],[{"start":{"row":91,"column":8},"end":{"row":91,"column":9},"action":"insert","lines":["t"],"id":89},{"start":{"row":91,"column":9},"end":{"row":91,"column":10},"action":"insert","lines":["u"]},{"start":{"row":91,"column":10},"end":{"row":91,"column":11},"action":"insert","lines":["r"]},{"start":{"row":91,"column":11},"end":{"row":91,"column":12},"action":"insert","lines":["n"]}],[{"start":{"row":91,"column":12},"end":{"row":91,"column":13},"action":"insert","lines":[" "],"id":90},{"start":{"row":91,"column":13},"end":{"row":91,"column":14},"action":"insert","lines":["r"]},{"start":{"row":91,"column":14},"end":{"row":91,"column":15},"action":"insert","lines":["e"]}],[{"start":{"row":91,"column":15},"end":{"row":91,"column":16},"action":"insert","lines":["d"],"id":91},{"start":{"row":91,"column":16},"end":{"row":91,"column":17},"action":"insert","lines":["i"]}],[{"start":{"row":91,"column":13},"end":{"row":91,"column":17},"action":"remove","lines":["redi"],"id":92},{"start":{"row":91,"column":13},"end":{"row":91,"column":21},"action":"insert","lines":["redirect"]}],[{"start":{"row":91,"column":21},"end":{"row":91,"column":23},"action":"insert","lines":["()"],"id":93}],[{"start":{"row":91,"column":22},"end":{"row":91,"column":24},"action":"insert","lines":["''"],"id":94}],[{"start":{"row":91,"column":23},"end":{"row":91,"column":24},"action":"insert","lines":["a"],"id":95},{"start":{"row":91,"column":24},"end":{"row":91,"column":25},"action":"insert","lines":["d"]},{"start":{"row":91,"column":25},"end":{"row":91,"column":26},"action":"insert","lines":["m"]},{"start":{"row":91,"column":26},"end":{"row":91,"column":27},"action":"insert","lines":["i"]},{"start":{"row":91,"column":27},"end":{"row":91,"column":28},"action":"insert","lines":["n"]}],[{"start":{"row":91,"column":28},"end":{"row":91,"column":29},"action":"insert","lines":["/"],"id":96},{"start":{"row":91,"column":29},"end":{"row":91,"column":30},"action":"insert","lines":["n"]}],[{"start":{"row":91,"column":30},"end":{"row":91,"column":31},"action":"insert","lines":["e"],"id":97},{"start":{"row":91,"column":31},"end":{"row":91,"column":32},"action":"insert","lines":["w"]},{"start":{"row":91,"column":32},"end":{"row":91,"column":33},"action":"insert","lines":["s"]}],[{"start":{"row":91,"column":33},"end":{"row":91,"column":34},"action":"insert","lines":["/"],"id":98}],[{"start":{"row":91,"column":36},"end":{"row":91,"column":37},"action":"insert","lines":[";"],"id":99}],[{"start":{"row":65,"column":6},"end":{"row":83,"column":36},"action":"remove","lines":["// Validationをかける","      $this->validate($request, News::$rules);","      // News Modelからデータを取得する","      $news = News::find($request->id);","      // 送信されてきたフォームデータを格納する","      $news_form = $request->all();","      if (isset($news_form['image'])) {","        $path = $request->file('image')->store('public/image');","        $news->image_path = basename($path);","        unset($news_form['image']);","      } elseif (isset($request->remove)) {","        $news->image_path = null;","        unset($news_form['remove']);","      }","      unset($news_form['_token']);","      // 該当するデータを上書きして保存する","      $news->fill($news_form)->save();","","      return redirect('admin/news');"],"id":100},{"start":{"row":65,"column":6},"end":{"row":88,"column":38},"action":"insert","lines":["$this->validate($request, News::$rules);","        $news = News::find($request->id);","        $news_form = $request->all();","        if ($request->remove == 'true') {","            $news_form['image_path'] = null;","        } elseif ($request->file('image')) {","            $path = $request->file('image')->store('public/image');","            $news_form['image_path'] = basename($path);","        } else {","            $news_form['image_path'] = $news->image_path;","        }","","        unset($news_form['_token']);","        unset($news_form['image']);","        unset($news_form['remove']);","        $news->fill($news_form)->save();","","        // 以下を追記","        $history = new History;","        $history->news_id = $news->id;","        $history->edited_at = Carbon::now();","        $history->save();","","        return redirect('admin/news/')"]}],[{"start":{"row":88,"column":38},"end":{"row":88,"column":39},"action":"insert","lines":[";"],"id":101}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":18},"action":"insert","lines":["use Carbon\\Carbon;"],"id":102}],[{"start":{"row":5,"column":18},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":103}],[{"start":{"row":4,"column":13},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":104}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":16},"action":"insert","lines":["use App\\History;"],"id":105}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":5,"column":16},"end":{"row":5,"column":16},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1572431614963,"hash":"1635958c3dac0e157e76ce68620fce827bda6801"}