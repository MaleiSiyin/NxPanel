<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Website belongTo a Domain
        // Domains hasOne Website
        // Website belongsTo Template
        // Template hasMany Websites
        Schema::create('websites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('domain_id')->unsigned();
            $table->bigInteger('template_id')->unsigned();
            $table->bigInteger('ip_id')->unsigned();
            $table->bigInteger('service_id')->unsigned();
            $table->string('description')->nullable();
            $table->integer('disk_quota')->default(0); // 0 = unlimited
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webs');
    }
}
