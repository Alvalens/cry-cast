<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Crypto extends Migration
{
    public function up()
    {
        //Biance
        Schema::create('biance', function (Blueprint $table){
            $table->id();
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 30, 10);
        });
        //Bitcoin
        Schema::create('bitcoin', function (Blueprint $table){
            $table->id();
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 30, 10);
        });
        //Dogecoin
        Schema::create('dogecoin', function (Blueprint $table){
            $table->id();
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 30, 10);
        });
        //Etherium
        Schema::create('etherium', function (Blueprint $table){
            $table->id();
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 30, 10);
        });
        //Iota
        Schema::create('iota', function (Blueprint $table){
            $table->id();
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 30, 10);
        });
        //Solana
        Schema::create('iota', function (Blueprint $table){
            $table->id();
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 30, 10);
        });
        //Stellar
        Schema::create('stellar', function (Blueprint $table){
            $table->id();
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 30, 10);
        });
        //Tron
        Schema::create('tron', function (Blueprint $table){
            $table->id();
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 30, 10);
        });
        Schema::create('SMA', function (Blueprint $table){
            $table->float('avg_high',20,10);
            $table->float('avg_low',20,10);
            $table->float('avg_volume',20,10);
        });
        //Naive bayes
        Schema::create('naive_bayes', function (Blueprint $table){
            $table->float('avg_high',20,10);
            $table->float('avg_low',20,10);
            $table->float('avg_volume',20,10);
        });
    }
    public function down()
    {
        Schema::dropIfExists('crypto');
    }
}
