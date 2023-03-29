<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class crypto extends Migration
{
    public function up()
    {
        //Binance
        Schema::create('binance', function (Blueprint $table){
            $table->id();
            $table->date('date');
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 20, 2);
        });
        //Bitcoin
        Schema::create('bitcoin', function (Blueprint $table){
            $table->id();
            $table->date('date');
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 20, 2);
        });
        //Dogecoin
        Schema::create('dogecoin', function (Blueprint $table){
            $table->id();
            $table->date('date');
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 20, 2);
        });
        //Etherium
        Schema::create('etherium', function (Blueprint $table){
            $table->id();
            $table->date('date');
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 20, 2);
        });
        //Iota
        Schema::create('iota', function (Blueprint $table){
            $table->id();
            $table->date('date');
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 20, 2);
        });
        //Solana
        Schema::create('solana', function (Blueprint $table){
            $table->id();
            $table->date('date');
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 20, 2);
        });
        //Stellar
        Schema::create('stellar', function (Blueprint $table){
            $table->id();
            $table->date('date');
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 20, 2);
        });
        //Tron
        Schema::create('tron', function (Blueprint $table){
            $table->id();
            $table->date('date');
            $table->float('high', 20, 10);
            $table->float('low' , 20, 10);
            $table->float('volume', 20, 2);
        });
        //mencari rata-rata
        Schema::create('AverageAll', function (Blueprint $table){
            $table->float('avg_high',20,10);
            $table->float('avg_low',20,10);
            $table->float('avg_volume',20, 2);
        });
        //mencari Simple Moving Average
        Schema::create('SMA', function (Blueprint $table){
            $table->id();
            $table->float('sma_high',20,10);
            $table->float('sma_low',20,10);
            $table->float('sma_volume',20 ,2);
        });
        //mencari Simple Moving Average
        Schema::create('Bullish_Berrish', function (Blueprint $table){
            $table->id();
            $table->boolean('Status');
            $table->string('Komen');
        });
        //Threshold naive bayes
        Schema::create('threshold', function (Blueprint $table){
            $table->date('date');
            $table->float('hold_high',20,10);
            $table->float('hold_low',20,10);
            $table->float('hold_volume',20,2);
        });
        // create table bayes
        Schema::create('bayes', function (Blueprint $table){
            $table->id();
            // date
            $table->date('date');
            // format bool
            $table->boolean('high');
            $table->boolean('low');
            $table->boolean('volume');
            // harga bool
            $table->boolean('harga');


        });
    }
    public function down()
    {
        Schema::dropIfExists('binance');
        Schema::dropIfExists('bitcoin');
        Schema::dropIfExists('dogecoin');
        Schema::dropIfExists('etherium');
        Schema::dropIfExists('iota');
        Schema::dropIfExists('solana');
        Schema::dropIfExists('stellar');
        Schema::dropIfExists('tron');
        Schema::dropIfExists('AverageAll');
        Schema::dropIfExists('SMA');
        Schema::dropIfExists('Bullish_Berrish');
        Schema::dropIfExists('threshold');
        Schema::dropIfExists('naive_bayes');
    }
}
