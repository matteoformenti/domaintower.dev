<?php

use App\Enums\UserOrganizationRole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('organization_user', function(Blueprint $table) {
            $table->foreignId('organization_id');
            $table->foreignId('user_id');
            $table->string('role')->index()->default(UserOrganizationRole::ADMIN);
            $table->primary(['organization_id', 'user_id'], 'user_organization');
        });
    }

    public function down()
    {
        Schema::dropIfExists('organization_user');
        Schema::dropIfExists('organizations');
    }
}
