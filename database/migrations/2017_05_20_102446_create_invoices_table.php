<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('product_id');
            $table->string('company_name');
            $table->string('invoice_no');
            $table->string('client_name');
            $table->string('client_address');
            $table->string('client_contact');
            $table->date('invoice_date');
            $table->enum('status', ['Paid', 'Unpaid', 'Other',]);
            $table->string('quantity');
            $table->string('price');
            $table->string('sub_total');

            $table->softDeletes();
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
        Schema::dropIfExists('invoices');
    }
}
