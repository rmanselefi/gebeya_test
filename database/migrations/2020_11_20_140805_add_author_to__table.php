<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthorToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('author')->after('image');
            $table->string('status')->after('image');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            if (Schema::hasColumn('products', 'author')) {
            Schema::table('products', function ($table) {
                $table->dropColumn('author');
            });
        }
        if (Schema::hasColumn('products', 'status')) {
            Schema::table('products', function ($table) {
                $table->dropColumn('status');
            });
        }
        });
    }
}
