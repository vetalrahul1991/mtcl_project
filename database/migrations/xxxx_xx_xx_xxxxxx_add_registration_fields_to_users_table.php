<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegistrationFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable()->after('id');
            $table->string('middle_name')->nullable()->after('first_name');
            $table->string('surname')->nullable()->after('middle_name');
            $table->string('mobile_number')->nullable()->unique()->after('surname');
            $table->date('date_of_birth')->nullable()->after('mobile_number');
            $table->string('district')->nullable()->after('date_of_birth');
            $table->string('city')->nullable()->after('district');
           // $table->string('zone')->nullable()->after('city');
            $table->string('playing_role')->nullable()->after('city');
            $table->string('batting_handedness')->nullable()->after('playing_role');
            $table->string('preferred_bowling_style')->nullable()->after('batting_handedness');
            $table->string('preferred_batting_order')->nullable()->after('preferred_bowling_style');
            $table->string('payment_screenshot')->nullable()->after('preferred_batting_order');
            $table->tinyInteger('status')->default(1)->after('payment_screenshot');

            });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'first_name',
                'middle_name',
                'surname',
                'mobile_number',
                'date_of_birth',
                'district',
                'city',
                'zone',
                'playing_role',
                'batting_handedness',
                'preferred_bowling_style',
                'preferred_batting_order',
                'payment_screenshot',
            ]);
        });
    }
}
