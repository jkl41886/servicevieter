<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class WebsiteInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('value');
            $table->integer('file_or_text')->comment("1=>file, 2=>text");
            $table->timestamps();
        });

         // Insert some stuff
        DB::table('website_infos')->insert(
        array(
           [
                'title' => 'Upload Log',
                'value' => '',
                'file_or_text' => 1
           ],
           [
                'title' => 'Upload Favicon',
                'value' => '',
                'file_or_text' => 1
           ],
           [
                'title' => 'Upload Background Image',
                'value' => '',
                'file_or_text' => 1
           ],
           [
                'title' => 'Website Title',
                'value' => '',
                'file_or_text' => 2
           ],
           [
                'title' => 'Facebook Login Details',
                'value' => '',
                'file_or_text' => 2
           ],
           [
                'title' => 'Google Plus Login Details',
                'value' => '',
                'file_or_text' => 2
           ],
           [
                'title' => 'YamiYami Login Details',
                'value' => '',
                'file_or_text' => 2
           ],
           [
                'title' => 'Yekbun Login Details',
                'value' => '',
                'file_or_text' => 2
           ]

         )//End of array

        );  //End of insert


    }//End of up function

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_infos');
    }


}
