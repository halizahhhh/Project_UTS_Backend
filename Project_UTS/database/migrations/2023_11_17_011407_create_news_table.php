<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Membuat database dari scema yaitu database news
     */
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            #Id Berita
            $table->id();
            #Judul Berita
            $table->string("title");
            #Penulis Berita
            $table->string("author");
            #Deskripsi Berita
            $table->string("description");
            #Konten Berita 
            $table->text("content");
            #URL Berita
            $table->string("url");
            #URL Image Berita
            $table->string("url_image");
            #Publish Berita, kapan berita ini di publish
            $table->datetime("published_at");
            #Category Berita
            $table->string("category");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
