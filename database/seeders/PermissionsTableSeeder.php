<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'in_the_press_access',
            ],
            [
                'id'    => 18,
                'title' => 'in_the_new_create',
            ],
            [
                'id'    => 19,
                'title' => 'in_the_new_edit',
            ],
            [
                'id'    => 20,
                'title' => 'in_the_new_show',
            ],
            [
                'id'    => 21,
                'title' => 'in_the_new_delete',
            ],
            [
                'id'    => 22,
                'title' => 'in_the_new_access',
            ],
            [
                'id'    => 23,
                'title' => 'quote_create',
            ],
            [
                'id'    => 24,
                'title' => 'quote_edit',
            ],
            [
                'id'    => 25,
                'title' => 'quote_show',
            ],
            [
                'id'    => 26,
                'title' => 'quote_delete',
            ],
            [
                'id'    => 27,
                'title' => 'quote_access',
            ],
            [
                'id'    => 28,
                'title' => 'in_the_medium_create',
            ],
            [
                'id'    => 29,
                'title' => 'in_the_medium_edit',
            ],
            [
                'id'    => 30,
                'title' => 'in_the_medium_show',
            ],
            [
                'id'    => 31,
                'title' => 'in_the_medium_delete',
            ],
            [
                'id'    => 32,
                'title' => 'in_the_medium_access',
            ],
            [
                'id'    => 33,
                'title' => 'media_resource_create',
            ],
            [
                'id'    => 34,
                'title' => 'media_resource_edit',
            ],
            [
                'id'    => 35,
                'title' => 'media_resource_show',
            ],
            [
                'id'    => 36,
                'title' => 'media_resource_delete',
            ],
            [
                'id'    => 37,
                'title' => 'media_resource_access',
            ],
            [
                'id'    => 38,
                'title' => 'newsletter_email_delete',
            ],
            [
                'id'    => 39,
                'title' => 'newsletter_email_access',
            ],
            [
                'id'    => 40,
                'title' => 'gallery_management_access',
            ],
            [
                'id'    => 41,
                'title' => 'gallery_category_create',
            ],
            [
                'id'    => 42,
                'title' => 'gallery_category_edit',
            ],
            [
                'id'    => 43,
                'title' => 'gallery_category_show',
            ],
            [
                'id'    => 44,
                'title' => 'gallery_category_delete',
            ],
            [
                'id'    => 45,
                'title' => 'gallery_category_access',
            ],
            [
                'id'    => 46,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 47,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 48,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 49,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 50,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 51,
                'title' => 'newsletter_create',
            ],
            [
                'id'    => 52,
                'title' => 'newsletter_edit',
            ],
            [
                'id'    => 53,
                'title' => 'newsletter_show',
            ],
            [
                'id'    => 54,
                'title' => 'newsletter_delete',
            ],
            [
                'id'    => 55,
                'title' => 'newsletter_access',
            ],
            [
                'id'    => 56,
                'title' => 'contact_us_delete',
            ],
            [
                'id'    => 57,
                'title' => 'contact_us_access',
            ],
            [
                'id'    => 58,
                'title' => 'partner_access',
            ],
            [
                'id'    => 59,
                'title' => 'partner_category_create',
            ],
            [
                'id'    => 60,
                'title' => 'partner_category_edit',
            ],
            [
                'id'    => 61,
                'title' => 'partner_category_show',
            ],
            [
                'id'    => 62,
                'title' => 'partner_category_delete',
            ],
            [
                'id'    => 63,
                'title' => 'partner_category_access',
            ],
            [
                'id'    => 64,
                'title' => 'mkwc_partner_create',
            ],
            [
                'id'    => 65,
                'title' => 'mkwc_partner_edit',
            ],
            [
                'id'    => 66,
                'title' => 'mkwc_partner_show',
            ],
            [
                'id'    => 67,
                'title' => 'mkwc_partner_delete',
            ],
            [
                'id'    => 68,
                'title' => 'mkwc_partner_access',
            ],
            [
                'id'    => 69,
                'title' => 'country_create',
            ],
            [
                'id'    => 70,
                'title' => 'country_edit',
            ],
            [
                'id'    => 71,
                'title' => 'country_show',
            ],
            [
                'id'    => 72,
                'title' => 'country_delete',
            ],
            [
                'id'    => 73,
                'title' => 'country_access',
            ],
            [
                'id'    => 74,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
