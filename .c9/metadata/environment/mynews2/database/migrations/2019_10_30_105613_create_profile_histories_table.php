{"filter":false,"title":"2019_10_30_105613_create_profile_histories_table.php","tooltip":"/mynews2/database/migrations/2019_10_30_105613_create_profile_histories_table.php","undoManager":{"mark":11,"position":11,"stack":[[{"start":{"row":0,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateProfileHistoriesTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('profile_histories', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('profile_histories');","    }","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":33,"column":1},"action":"insert","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateHistoriesTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('histories', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('news_id');","            $table->string('edited_at');","","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('histories');","    }","}"]}],[{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"remove","lines":["s"],"id":3},{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"remove","lines":["w"]},{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"remove","lines":["e"]},{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"remove","lines":["n"]}],[{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["p"],"id":4},{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["r"]},{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"insert","lines":["o"]},{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["f"]},{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["i"]}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["l"],"id":5},{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["P"],"id":6},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["r"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["o"]}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["f"],"id":7},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["i"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["l"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["e"],"id":8},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":["l"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"remove","lines":["i"]},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":["f"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["o"]},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"remove","lines":["r"]},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"remove","lines":["P"]}],[{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["P"],"id":9},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["r"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["o"]}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["f"],"id":10},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["i"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["l"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"insert","lines":["p"],"id":11},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"insert","lines":["r"]},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"insert","lines":["o"]},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"insert","lines":["f"]},{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"insert","lines":["i"]}],[{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"insert","lines":["l"],"id":12},{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"insert","lines":["e"]}],[{"start":{"row":31,"column":30},"end":{"row":31,"column":39},"action":"remove","lines":["histories"],"id":13},{"start":{"row":31,"column":30},"end":{"row":31,"column":46},"action":"insert","lines":["profilehistories"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":12},"end":{"row":18,"column":40},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1572433679505,"hash":"45c0cb857d245154111dbc1b2ef0ee0e8c98628f"}