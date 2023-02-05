<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('partner_id')->nullable()->references('partner_id')->on('partners');
            $table->foreignId('category_id')->nullable()->references('id')->on('categories');
            $table->foreignId('sub_category_id')->nullable()->references('id')->on('sub_categories');
            $table->string('business_name')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('logo')->nullable();
            $table->string('display_img')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('website')->nullable();
            $table->longText('map_src')->nullable();
            $table->string('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('business_email')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('business_address')->nullable();
            $table->string('business_city')->nullable();
            $table->string('business_pin')->nullable();
            $table->string('business_state')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_phone')->nullable();
            $table->string('contact_person_alt_phone')->nullable();
            $table->string('contact_person_email')->nullable();
            $table->string('is_approved')->default(0);
            $table->string('is_active')->default(1);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
};
