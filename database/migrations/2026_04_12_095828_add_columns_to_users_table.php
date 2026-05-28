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
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('warga')->after('email');
            $table->string('nik')->nullable()->after('role');
            $table->string('no_kk')->nullable()->after('nik');
            $table->string('no_telepon')->nullable()->after('no_kk');
            $table->text('alamat')->nullable()->after('no_telepon');
            $table->string('status_verifikasi')->default('unverified')->after('alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'nik', 'no_kk', 'no_telepon', 'alamat', 'status_verifikasi']);
        });
    }
};
