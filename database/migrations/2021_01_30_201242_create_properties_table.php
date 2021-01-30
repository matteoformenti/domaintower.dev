<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id');
            $table->string('name')->index();
            $table->string('tld')->index();
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
        Schema::dropIfExists('properties');
    }
}
/**
 *
 * proprietà: example.com
 * domini con redirect:
 *              example.com         → example.com
 *              ciao.example.com    → example.com
 *              test.example.com    → example.com
 *              demo.example.com    → example.com
 *              prova.example.com   → example.com
 *              prova.demo.example.com  → example.com
 *
 */