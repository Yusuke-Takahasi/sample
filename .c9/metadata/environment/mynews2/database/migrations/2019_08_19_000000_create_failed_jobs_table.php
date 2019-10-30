{"filter":false,"title":"2019_08_19_000000_create_failed_jobs_table.php","tooltip":"/mynews2/database/migrations/2019_08_19_000000_create_failed_jobs_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":35,"column":0},"action":"insert","lines":["<?php","","use Illuminate\\Database\\Migrations\\Migration;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Support\\Facades\\Schema;","","class CreateFailedJobsTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('failed_jobs', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->text('connection');","            $table->text('queue');","            $table->longText('payload');","            $table->longText('exception');","            $table->timestamp('failed_at')->useCurrent();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('failed_jobs');","    }","}",""],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":35,"column":0},"end":{"row":35,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1572339751311,"hash":"ca3c5e84971a615f8d60143dc14441c0cff022b0"}