<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('author_id');
            $table->integer('category_id')->nullable();
            $table->string('title');
            $table->string('seo_title')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
            $table->boolean('featured')->default(0);
            $table->integer('views')->default(1);
            $table->string('youtube')->nullable();
            $table->enum('preview', ['IMAGE', 'YOUTUBE'])->default('IMAGE');
            $table->string('original_link')->nullable();
            $table->dateTime('activate_at')->nullable();
            $table->integer('total_like')->default(null);
            $table->softDeletes();
            $table->timestamps();



            $table->foreign('author_id')->references('id')->on('users');
        });

        DB::statement("ALTER TABLE posts ADD COLUMN searchtext TSVECTOR");
        DB::statement("UPDATE posts SET searchtext = to_tsvector('russian', title || '' || body)");
        DB::statement("CREATE INDEX searchtext_gin ON posts USING GIN(searchtext)");
        DB::statement("CREATE TRIGGER ts_searchtext BEFORE INSERT OR UPDATE ON posts FOR EACH ROW EXECUTE PROCEDURE tsvector_update_trigger('searchtext', 'pg_catalog.russian', 'title', 'body')");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP TRIGGER IF EXISTS tsvector_update_trigger ON posts");
        DB::statement("DROP INDEX IF EXISTS searchtext_gin");
        DB::statement("ALTER TABLE posts DROP COLUMN searchtext");
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_author_id_foreign');
        });
        Schema::drop('posts');
    }
}
