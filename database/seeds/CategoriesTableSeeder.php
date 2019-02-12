<?php

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $categories = [
      ['id' => '1','parent_id' => NULL,'name' => 'Category 1','created_at' => NULL,'updated_at' => NULL],
      ['id' => '2','parent_id' => NULL,'name' => 'Category 2','created_at' => NULL,'updated_at' => NULL],
      ['id' => '3','parent_id' => '1','name' => 'Category 1.1','created_at' => NULL,'updated_at' => NULL],
      ['id' => '4','parent_id' => '1','name' => 'Category 1.2','created_at' => NULL,'updated_at' => NULL],
      ['id' => '5','parent_id' => '2','name' => 'Category 2.1','created_at' => NULL,'updated_at' => NULL],
      ['id' => '6','parent_id' => '3','name' => 'Category 1.1.1','created_at' => NULL,'updated_at' => NULL],
      ['id' => '7','parent_id' => '6','name' => 'Category 1.1.1.1','created_at' => NULL,'updated_at' => NULL],
    ];

    foreach($categories as $category){
      Category::create($category);
    }

    $this->command->info('=========================================================');
    $this->command->comment(' seed `Category` is successful');
    $this->command->info('=========================================================');
  }
}
