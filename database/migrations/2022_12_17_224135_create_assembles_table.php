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
        Schema::create('assembles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->enum('chasis_parts',['Toyota X corolla', 'Mitshubishi Lancer','Mazda Axela']);
            $table->enum('engine_parts',['Diesel', 'Petrol','Octane']);
            $table->enum('air_filter',['Denkermann Air filter', 'BMW 13 71 52 Air filter','Denso Cool gear Air filter']);
            $table->enum('fuel_filter',['Toyota 1724 Element', 'Mazda LF3t-13 Genuine pump and gage','Mitshubishi MB2209 Genuine']);
            $table->enum('drive_belt',['TOYOTA JDM Genuine', 'Mitshubishi 4PK','Mazda Genuine']);
            $table->enum('fuel_injector',['MAZDA p501 Genuine', 'Toyota JDM Genuine','Mitshubishi 1500']);
            $table->enum('fuel_pump',['DENSO 23221 PUMP', 'HKT GIP-502','Mazda LF3T']);
            $table->enum('tensioner_idelers_&_dampers',['Mazda PE&W-15-980', 'Toyota JDM','Mitshubishi Genuine']);
            $table->enum('oil_filter',['Denso COOL gear', 'HKS','JDA T1636']);
            $table->enum('cv_joint',['NKN Genuine Outer CV', 'JDM','Mazda Genuine']);
            $table->enum('wheel_bearings_and_hubs',['Koyo DA', 'KOYO Genuine','Mazda']);
            $table->enum('tranaxle_fluid',['bizol protect', 'Caltex texamatic','Citgo transgard']);
            $table->enum('brake_caliper_&_kits',['Mitshubishi Genuine Front and rear', 'Toyota genuine front and rear','Mazda stock front and rear']);
            $table->enum('brake_pads',['Advics front', 'Bremdo front','Hoda front']);
            $table->enum('brake_shoe',['Toyota Rear brake shoe', 'Mitshubishi Genuine Rear  brake shoe','Mazda rear brake shoe']);
            $table->enum('steering',['Toyota x corolla', 'Mitshubishi lancer','Mazda axella']);
            $table->enum('full_jdm_suspension_kit',['Stock Toyota Axela', 'Stock Mitshubishi Lancer','Genuine Mazda Axela']);
            $table->enum('body_full_kit_price',['Toyota 2006 X corolla full kit', 'Mitshubishi Lancer 2008 full kit','Mazda Axela Full kit']);
            $table->enum('dashboard_and_electronics',['Toyota stock', 'Mazda Stock','Mitshubishi Stock']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assembles');
    }
};
