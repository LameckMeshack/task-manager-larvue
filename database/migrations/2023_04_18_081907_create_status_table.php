<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Status;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('status', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('name', 50);
            $table->timestamps();
            $table->softDeletes();
        });

        // Insert the required records into the status table
        $statusValues = ['Not Started', 'In Progress', 'Completed'];
        foreach ($statusValues as $value) {
            Status::create(['name' => $value]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status');
    }
};
