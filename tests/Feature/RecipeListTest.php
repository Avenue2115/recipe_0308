<?php
/* 
*testしたいときは php artisan testを入力
*
*/
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RecipeListTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function 初回アクセス時はレシピ一覧画面へリダイレクトされることをテスト()
    {
        $response = $this->get('/');
        $response->assertStatus(302);

        $response = $this->get('/recipelist');
        $response->assertStatus(200);

        //トップページにはタイトルとして'Recipe'が見えること
        //これはBrowserTestの方に移動する予定
        $this->visit('/recipelist')
                ->see('Recipe');
    }
}
