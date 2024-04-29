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
        Schema::create('jobsrequests', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("phone", 15);
            $table->enum('role', [
                'Data science',
                'Computer network',
                'Software Engineer',
                'Computer security',
                'Software',
                'Network administrator',
                'Web Developer',
                'Computer Systems Analyst',
                'Network Engineer',
                'Database Administrator',
                'Systems analyst',
                'Technical Support',
                'Information technology consulting',
                'Data analysis',
                'Computer Engineering',
                'Information Security Analysts',
                'Information security',
                'Analyst',
                'Business',
                'IT Technician',
                'Computer Network Architects',
                'Computer scientist',
                'Computer Support Specialists',
                'Architect'
            ]);
            $table->text("message");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobsrequests');
    }
};
