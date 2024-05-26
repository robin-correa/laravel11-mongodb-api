<?php

use Illuminate\Database\Migrations\Migration;
use MongoDB\Laravel\Schema\Blueprint as SchemaBlueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (SchemaBlueprint $collection) {
            $collection->index('name');
            $collection->index('guard_name');
            $collection->timestamps();
        });

        Schema::create('permissions', function (SchemaBlueprint $collection) {
            $collection->index('name');
            $collection->index('guard_name');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('permissions');
        Schema::drop('roles');
    }
};
