<?php

use App\Enums\UserOrganizationRole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->timestamps();
            $table->softDeletes()->index();
        });

        Schema::table('organization_user', function(Blueprint $table) {
            $table->foreignId('organization_id');
            $table->foreignId('user_id');
            $table->string('role')->index()->default(UserOrganizationRole::ADMIN);
            $table->primary(['organization_id', 'user_id'], 'user_organization');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization_user');
        Schema::dropIfExists('organizations');
    }
}
