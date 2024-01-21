<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPdfFieldsToPressreleasesTable extends Migration {

	/**
	 * Make changes to the table.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pressreleases', function(Blueprint $table) {

			$table->string('pdf_file_name')->nullable();
			$table->integer('pdf_file_size')->nullable();
			$table->string('pdf_content_type')->nullable();
			$table->timestamp('pdf_updated_at')->nullable();

		});

	}

	/**
	 * Revert the changes to the table.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pressreleases', function(Blueprint $table) {

			$table->dropColumn('pdf_file_name');
			$table->dropColumn('pdf_file_size');
			$table->dropColumn('pdf_content_type');
			$table->dropColumn('pdf_updated_at');

		});
	}

}
