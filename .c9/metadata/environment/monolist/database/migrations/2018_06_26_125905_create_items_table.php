{"filter":false,"title":"2018_06_26_125905_create_items_table.php","tooltip":"/monolist/database/migrations/2018_06_26_125905_create_items_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":13,"column":4},"end":{"row":29,"column":5},"action":"remove","lines":["public function up()","    {","        Schema::create('items', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('items');","    }"],"id":4},{"start":{"row":13,"column":4},"end":{"row":28,"column":5},"action":"insert","lines":[" public function up()","    {","        Schema::create('items', function (Blueprint $table) {","            $table->increments('id');","            $table->string('code');","            $table->string('name');","            $table->string('url');","            $table->string('image_url');","            $table->timestamps();","        });","    }","","    public function down()","    {","        Schema::dropIfExists('items');","    }"]}]]},"ace":{"folds":[],"scrolltop":43.20000076293945,"scrollleft":0,"selection":{"start":{"row":30,"column":0},"end":{"row":30,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":49,"mode":"ace/mode/php"}},"timestamp":1529985779524,"hash":"2b33fabb45cd826420d51ccd971dba9fecb0c4ca"}