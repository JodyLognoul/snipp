<?php

use Illuminate\Database\Migrations\Migration;

class AddColumnNamespaceToSnippetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('snippets', function ($table) {
            $table->string('namespace')->default('snipp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('snippets', function ($table) {
            $table->dropColumn('namespace');
        });
    }
}
