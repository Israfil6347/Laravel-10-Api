<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


/**========================================================================
 * ?                                ABOUT
 * @author         :  Md Israfil
 * @email          :  6347israfil@gmail.com
 * @repo           :
 * @createdOn      :  12/05/2023
 * @updatedBy      :  Md israfil
 * @updatedAt      :  12/05/2023
 * @description     :
 *========================================================================**/


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu_name');
            $table->string('link_to')->nullable();
            $table->string('icon')->nullable();
            $table->integer('parent_id')->default(0);
            $table->boolean('admin_menu')->default(false);
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('menus');
    }
};
