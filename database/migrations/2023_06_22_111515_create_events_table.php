<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Mostafaznv\Larupload\LaruploadEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id()->unique()->index();
            $table->string('tittle');
            $table->longText('description')->nullable();
            $table->text('faq')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('poster')->nullable();
            $table->string('images')->nullable();
            // $table->upload('video_link', LaruploadEnum::LIGHT_MODE);
            $table->string('video_link')->nullable();
            $table->dateTime('start_date', $precision = 0)->nullable();
            $table->dateTime('end_date', $precision = 0)->nullable();
            $table->time('start_time', $precision = 0)->nullable();
            $table->time('end_time', $precision = 0)->nullable();
            $table->string('repetitive')->nullable();
            $table->boolean('is_featured')->nullable();
            $table->boolean('status')->default(true);
            $table->text('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->unsignedBigInteger('category_id')->nullable()->default(1);
            $table->unsignedBigInteger('user_id')->nullable()->default(1);
            $table->string('add_to_facebook')->nullable();
            $table->string('slug')->nullable();
            $table->string('item_sku')->nullable();
            $table->string('publish')->nullable();
            $table->boolean('is_publishable')->default(true);
            $table->string('merge_schedule')->nullable();
            $table->string('online_location')->nullable();
            $table->string('excerpt')->nullable();
            $table->string('offline_payment_info')->nullable();
            $table->string('youtube_embed')->nullable();
            $table->string('vimeo_embed')->nullable();
            $table->string('event_password')->nullable();
            $table->string('e_admin_commission')->nullable();
            $table->string('short_url')->nullable();
            $table->string('e_soldout')->nullable();
            $table->string('show_reviews')->nullable();
            $table->boolean('is_private')->nullable();
            $table->unsignedBigInteger('currency_id')->default(1);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};