<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->foreign("nama")->references("nama")->on("antrians");
            $table->unsignedBigInteger("antrians_id");
            $table->foreign("antrian_id")->references("id")->on("antrians");
            $table->smallinteger("jumlah cuci");
            $table->smallinteger("harga");
            $table->smallinteger("total");
            $table->smallinteger("Pembayaran");
            $table->smallinteger("kembali");
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
        Schema::dropIfExists('pembayarans');
    }
}
