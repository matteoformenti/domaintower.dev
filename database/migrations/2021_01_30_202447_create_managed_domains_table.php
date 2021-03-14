<?php

use App\Enums\ManagedDomainOperation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagedDomainsTable extends Migration
{
    public function up()
    {
        Schema::create('managed_domains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id');
            $table->string('name')->index();
            $table->string('operation')->index()->default(ManagedDomainOperation::EMPTY());
            $table->string('redirect_url')->nullable()->index();
            $table->unsignedTinyInteger('redirect_code')->nullable()->index();
            $table->foreignId('page_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('managed_domains');
    }
}
