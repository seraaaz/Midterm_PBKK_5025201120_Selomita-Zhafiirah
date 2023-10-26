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
        Schema::create('inventories', function (Blueprint $table) {
            $table->enum('item_type', ['Computers', 'Networking Equipment', 'Storage Devices', 'Accessories', 'Softwares', 'Server Equipments', 
            'Audio Visual Equipments', 'Cables and Adapters', 'Others']);
            $table->string('item_description');
            $table->string('item_defect');
            $table->integer('item_amount');
            $table->string('item_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
