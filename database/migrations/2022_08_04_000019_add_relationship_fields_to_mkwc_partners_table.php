<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMkwcPartnersTable extends Migration
{
    public function up()
    {
        Schema::table('mkwc_partners', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id', 'category_fk_7098596')->references('id')->on('partner_categories');
        });
    }
}
