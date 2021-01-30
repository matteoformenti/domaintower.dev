<?php

use App\Enums\ManagedDomainOperation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagedDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managed_domains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id');
            $table->string('name')->index();
            $table->string('operation')->index()->default(ManagedDomainOperation::EMPTY());
            $table->text('options')->nullable();
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
        Schema::dropIfExists('managed_domains');
    }
}
