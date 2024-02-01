<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('card_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('idThanksGiving');
            $table->foreign('idThanksGiving')->references('idDetail')->on('thanksgiving');
            $table->text('description');
            $table->boolean('isMentor')->default(true);
            $table->boolean('isLeader')->default(true);
            $table->boolean('isTeam')->default(true);
            $table->boolean('isArchived')->default(false);
            $table->string('image')->nullable();
            $table->text('textKesan')->nullable();
            $table->text('textThank')->nullable();
            $table->text('textPenutup')->nullable();
            $table->string('filePenghargaan')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_details');
    }
};
