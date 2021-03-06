<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PinnedThreads extends Migration
{
    public function up()
    {
        Schema::table('forum_threads', function (Blueprint $table) {
            $table->boolean('pinned')->default(false);
        });
    }
}
