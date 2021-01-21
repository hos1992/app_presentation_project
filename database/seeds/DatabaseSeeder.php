<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Admin;
use App\Page;
use App\PageSection;
use App\PageSectionAttachment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = [
            'name' => 'Hosny Adeeb',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ];
        Admin::updateOrCreate(['email' => $superAdmin['email']], $superAdmin);


        $homePage = [
            'define' => 'HOME',
            'title_en' => 'Home Page',
            'title_ar' => 'الصفحة الرئيسية',
        ];
        $homePageObj = Page::firstOrCreate($homePage);

        /**
         * About us section
         */
        $sectionAbout = [
            'page_id' => $homePageObj->id,
            'define' => 'ABOUT',
            'title_en' => 'About us',
            'title_ar' => 'من نحن',
            'data' => json_encode([
                'content_ar' => 'محتوى عربى',
                'content_en' => 'English content'
            ]),
        ];
        $sectionAboutObj = PageSection::updateOrCreate(['define' => 'ABOUT'], $sectionAbout);
        PageSectionAttachment::updateOrCreate(['section_id' => $sectionAboutObj->id], [
            'section_id' => $sectionAboutObj->id,
            'url' => '/uploads/sections/default.png'
        ]);


        /**
         * How it works section
         */
        $sectionHowItWorks = [
            'page_id' => $homePageObj->id,
            'define' => 'HOW_IT_WORKS',
            'title_en' => 'How It Works',
            'title_ar' => 'كيف تعمل',
            'data' => json_encode([
                'excerpt_ar' => 'وصف مختصر بالعربية',
                'excerpt_en' => 'short description in english',
                'steps' => [
                    1 => [
                        'icon' => 'icon-tools-2',
                        'title_ar' => 'تسجيل فيديو',
                        'title_en' => 'Record a video',
                        'excerpt_ar' => 'وصف مختصر بالعربية',
                        'excerpt_en' => 'short description in english',
                    ],

                    2 => [
                        'icon' => 'icon-tools',
                        'title_ar' => 'تقدم للوظائف',
                        'title_en' => 'Apply for jobs',
                        'excerpt_ar' => 'وصف مختصر بالعربية',
                        'excerpt_en' => 'short description in english',
                    ],

                    3 => [
                        'icon' => 'icon-layers',
                        'title_ar' => 'القبول بالوظيفة',
                        'title_en' => 'Job acceptance',
                        'excerpt_ar' => 'وصف مختصر بالعربية',
                        'excerpt_en' => 'short description in english',
                    ],
                ]
            ]),
        ];
        PageSection::updateOrCreate(['define' => 'HOW_IT_WORKS'], $sectionHowItWorks);

        /**
         * OUR ADVANTAGES SECTION
         */
        $sectionOurAdvantage = [
            'page_id' => $homePageObj->id,
            'define' => 'OUR_ADVANTAGE',
            'title_en' => 'Our Advantages',
            'title_ar' => 'مميزاتنا',
            'data' => json_encode([
                'excerpt_ar' => 'وصف مختصر بالعربية',
                'excerpt_en' => 'short description in english',
                'list' => [
                    ['ar' => 'محتوى عربى 1', 'en' => 'english content 1'],
                    ['ar' => 'محتوى عربى 2', 'en' => 'english content 2'],
                    ['ar' => 'محتوى عربى 3', 'en' => 'english content 3'],
                    ['ar' => 'محتوى عربى 4', 'en' => 'english content 4'],
                ]
            ]),
        ];
        $sectionOurAdvantageObj = PageSection::updateOrCreate(['define' => 'OUR_ADVANTAGE'], $sectionOurAdvantage);
        PageSectionAttachment::updateOrCreate(['section_id' => $sectionOurAdvantageObj->id], [
            'section_id' => $sectionOurAdvantageObj->id,
            'url' => '/uploads/sections/default.png'
        ]);


        /**
         * SCREENSHOTS SECTION
         */
        $sectionScreenshots = [
            'page_id' => $homePageObj->id,
            'define' => 'SCREENSHOTS',
            'title_en' => 'Screenshots',
            'title_ar' => 'شاشات التطبيق',
            'data' => json_encode([
                'excerpt_ar' => 'وصف مختصر بالعربية',
                'excerpt_en' => 'short description in english',
            ]),
        ];
        $sectionScreenshotsObj = PageSection::updateOrCreate(['define' => 'SCREENSHOTS'], $sectionScreenshots);
        PageSectionAttachment::firstOrCreate([
            'section_id' => $sectionScreenshotsObj->id,
            'url' => '/uploads/sections/default.png'
        ]);
        PageSectionAttachment::firstOrCreate([
            'section_id' => $sectionScreenshotsObj->id,
            'url' => '/uploads/sections/default.png'
        ]);
        PageSectionAttachment::firstOrCreate([
            'section_id' => $sectionScreenshotsObj->id,
            'url' => '/uploads/sections/default.png'
        ]);

    }
}
