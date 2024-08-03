<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seoproperties', function (Blueprint $table) {
            $table->id();
            $table->enum("pageName",["Home","Resume","About","Project","MyCompany","Contact","MyShowcase"]);
            $table->string("title",1000);
            $table->string("keywords",1000);
            $table->string("description",1000);
            $table->string("og_site_name",1000);
            $table->string("og_url",1000);
            $table->string("og_title",1000);
            $table->string("og_description",1000);
            $table->string("og_image",1000);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seoproperties');
    }
};
