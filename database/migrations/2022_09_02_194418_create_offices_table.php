<?php

use App\Enums\StatusEnum;
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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->string('status')->default(StatusEnum::VALIDATION->value);
            $table->longText('location');

            $table->integer('places')->default(1);
            $table->json('days')->nullable();
            $table->boolean('is_free')->default(false);

            $table->boolean('have_desk')->default(false);
            $table->boolean('have_printer')->default(false);
            $table->boolean('have_scanner')->default(false);
            $table->boolean('have_fax')->default(false);
            $table->boolean('have_internet')->default(true);
            $table->boolean('have_meeting_room')->default(false);
            $table->boolean('have_parking')->default(true);
            $table->boolean('have_kitchen')->default(false);

            $table->integer('tranquility')->default(3);
            $table->integer('workspace')->default(3);

            $table->integer('give_coffee')->default(true);
            $table->integer('give_water')->default(true);
            $table->integer('have_fridge')->default(true);
            $table->integer('have_microwave')->default(true);
            $table->integer('have_garden')->default(true);

            $table->integer('accept_smoking')->default(true);

            $table->json('accept_languages')->nullable();

            $table->timestamp('verified_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
};
