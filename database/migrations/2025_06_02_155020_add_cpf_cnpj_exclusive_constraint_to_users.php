<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('ALTER TABLE users ADD CONSTRAINT cpf_or_cnpj_exclusive CHECK ((cpf IS NOT NULL AND cnpj IS NULL) OR (cpf IS NULL AND cnpj IS NOT NULL));');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE users DROP CONSTRAINT cpf_or_cnpj_exclusive;');
    }
};
