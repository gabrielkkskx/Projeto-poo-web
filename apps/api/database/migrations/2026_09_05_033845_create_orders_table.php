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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // ID único do pedido
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade'); // ID do cliente associado ao pedido
            $table->decimal('total', 10, 2); // Valor total do pedido
            $table->string('status'); // Status do pedido (e.g., 'pending', 'completed')
            $table->timestamp('paid_at')->nullable(); // Data e hora em que o pedido foi pago (nullable pois o pagamento pode ocorrer após a criação do pedido)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
