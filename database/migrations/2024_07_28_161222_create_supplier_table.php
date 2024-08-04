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
            Schema::create('supplier', function (Blueprint $table) {
                $table->id();
                $table->string('nama_supplier', 150);
                $table->text('alamat');
                $table->string('no_hp', 15);
                $table->foreignId('id_barang')->nullable()->constrained('barang')->onDelete('set null');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('supplier');
        }
    };
