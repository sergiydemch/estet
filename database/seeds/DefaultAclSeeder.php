<?php

use Illuminate\Database\Seeder;
use \App\Modules\Langs\Models\Translation;
use App\Modules\Langs\Models\Locale;
use \App\Modules\Acl\Models\Permission;

class DefaultAclSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perms = Permission::all()->pluck('id', 'name');

        $new_perms = [
            'api/users',
            'api/users/{*}',
            'api/users/{own}',
            'api/users/add',
            'api/users/{*}/update',
            'api/users/{own}/update',
            'api/users/{*}/delete',
            'api/users/{own}/delete',
            'api/users/{own}/delete',
            'api/users/{*}/property/{*}/change',
            'api/users/{own}/property/{*}/change',
            'api/users/{*}/roles/{*}/detach',
            'api/users/{*}/roles/{*}/attach',
            'api/users/{*}/perissions/{*}/detach',
            'api/users/{*}/permissions/{*}/attach',

            'api/roles',
            'api/roles/add',
            'api/roles/{*}/update',
            'api/roles/{*}/delete',
            'api/roles/{*}/perissions/{*}/detach',
            'api/roles/{*}/perissions/{*}/attach',

            'api/permissions',
            'api/permissions/add',
            'api/permissions/{*}/update',
            'api/permissions/{*}/delete',
        ];

        foreach ($new_perms as $item){
            if( ! in_array($item, array_keys($perms)) ){
                Permission::create([
                    'name' => $item,
                    'display_name' => $item,
                    'description' => 'Can use '.$item,
                ]);
            }
        }

        $etalon = Locale::where('abbr', 'etl')->first();
        if( ! $etalon ){
            $etalon = new Locale();
            $etalon->abbr = 'etl';
            $etalon->name = 'Etalon';
            $etalon->status = 1;
            $etalon->save();
        }



        $translation_item = Translation::where([
            'locale_id' => $etalon->id,
            'fullkey' => 'test__test__test',
        ])->first();

        if( ! $translation_item ){
            $translation_item = new Translation();
            $translation_item->locale_id = $etalon->id;
            $translation_item->section = 'test';
            $translation_item->type = 'test';
            $translation_item->key = 'test';
            $translation_item->value = 'Тест';
            $translation_item->fullkey = 'test__test__test';
            $translation_item->save();
        }
    }
}
