<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // General
            ['key' => 'general.site_name',        'value' => 'MAS EduCare',                        'type' => 'text',     'group' => 'general', 'label' => 'Site Name'],
            ['key' => 'general.tagline',           'value' => 'আপনার জাপান যাত্রার বিশ্বস্ত সঙ্গী', 'type' => 'text',     'group' => 'general', 'label' => 'Tagline'],
            ['key' => 'general.logo',              'value' => '',                                   'type' => 'image',    'group' => 'general', 'label' => 'Logo'],
            ['key' => 'general.footer_logo',       'value' => '',                                   'type' => 'image',    'group' => 'general', 'label' => 'Footer Logo'],
            ['key' => 'general.address',           'value' => 'Mirpur-10, Dhaka, Bangladesh',       'type' => 'textarea', 'group' => 'general', 'label' => 'Address'],
            ['key' => 'general.phone',             'value' => '+880 1867-888667',                   'type' => 'text',     'group' => 'general', 'label' => 'Phone'],
            ['key' => 'general.email',             'value' => 'info@maseducare.com',                'type' => 'text',     'group' => 'general', 'label' => 'Email'],
            ['key' => 'general.office_hours',      'value' => 'শনি – বৃহস্পতি: সকাল ৯টা – রাত ৮টা', 'type' => 'text',   'group' => 'general', 'label' => 'Office Hours'],
            ['key' => 'general.facebook_url',      'value' => 'https://facebook.com/maseducare',    'type' => 'text',     'group' => 'general', 'label' => 'Facebook URL'],
            ['key' => 'general.youtube_url',       'value' => '',                                   'type' => 'text',     'group' => 'general', 'label' => 'YouTube URL'],
            ['key' => 'general.whatsapp_number',   'value' => '8801867888667',                      'type' => 'text',     'group' => 'general', 'label' => 'WhatsApp Number'],

            // Hero
            ['key' => 'hero.headline',             'value' => 'জাপানে আপনার স্বপ্নের দরজা খুলুন',  'type' => 'text',     'group' => 'hero', 'label' => 'Hero Headline'],
            ['key' => 'hero.subheadline',          'value' => 'N5 ও N4 JLPT প্রস্তুতি, ভিসা প্রক্রিয়া এবং স্কুল ইন্টারভিউ প্রশিক্ষণ — একটি বিশ্বস্ত প্রতিষ্ঠানে', 'type' => 'textarea', 'group' => 'hero', 'label' => 'Hero Subheadline'],
            ['key' => 'hero.background_image',     'value' => '',                                   'type' => 'image',    'group' => 'hero', 'label' => 'Hero Background Image'],
            ['key' => 'hero.cta_primary_text',     'value' => 'কোর্সে ভর্তি হন',                   'type' => 'text',     'group' => 'hero', 'label' => 'CTA Primary Text'],
            ['key' => 'hero.cta_secondary_text',   'value' => 'ভিসা প্রক্রিয়া জানুন',              'type' => 'text',     'group' => 'hero', 'label' => 'CTA Secondary Text'],

            // About / Founder
            ['key' => 'about.founder_name',        'value' => 'মোঃ আব্দুল মান্নান',                'type' => 'text',     'group' => 'about', 'label' => 'Founder Name'],
            ['key' => 'about.founder_title',       'value' => 'Founder & Director, MAS EduCare',   'type' => 'text',     'group' => 'about', 'label' => 'Founder Title'],
            ['key' => 'about.founder_photo',       'value' => '',                                   'type' => 'image',    'group' => 'about', 'label' => 'Founder Photo'],
            ['key' => 'about.founder_quote',       'value' => 'প্রতিটি শিক্ষার্থীর সাফল্যই আমাদের সাফল্য।', 'type' => 'textarea', 'group' => 'about', 'label' => 'Founder Quote'],
            ['key' => 'about.founder_bio',         'value' => 'MAS EduCare-এর প্রতিষ্ঠাতা হিসেবে, আমি বিশ্বাস করি প্রতিটি বাংলাদেশী তরুণের জাপানে সুযোগ রয়েছে। আমাদের প্রতিষ্ঠান শুধু ভাষা শেখায় না — আমরা একটি সম্পূর্ণ যাত্রার পথিকৃৎ।', 'type' => 'textarea', 'group' => 'about', 'label' => 'Founder Bio'],
            ['key' => 'about.institute_story',     'value' => 'MAS EduCare ২০১৮ সালে মিরপুর-১০, ঢাকায় প্রতিষ্ঠিত হয়। আমাদের লক্ষ্য ছিল বাংলাদেশী তরুণদের জাপানে কাজ ও পড়াশোনার সুযোগ করে দেওয়া। প্রতিষ্ঠার পর থেকে আমরা ৫০০+ শিক্ষার্থীকে জাপানের পথে পাঠিয়েছি।', 'type' => 'textarea', 'group' => 'about', 'label' => 'Institute Story'],

            // SEO
            ['key' => 'seo.meta_title',            'value' => 'MAS EduCare — Japanese Language Center Bangladesh', 'type' => 'text',  'group' => 'seo', 'label' => 'Meta Title'],
            ['key' => 'seo.meta_description',      'value' => 'Learn Japanese (N5/N4), get visa support, and school interview coaching at MAS EduCare — Mirpur-10, Dhaka.', 'type' => 'textarea', 'group' => 'seo', 'label' => 'Meta Description'],
            ['key' => 'seo.og_image',              'value' => '',                                   'type' => 'image',    'group' => 'seo', 'label' => 'OG Share Image'],

            // Courses
            ['key' => 'courses.n5_description',    'value' => 'একদম শূন্য থেকে শুরু করুন। হিরাগানা, কাতাকানা, বেসিক কাঞ্জি ও ব্যাকরণ শিখুন। JLPT N5 ও NAT-Test পরীক্ষার জন্য সম্পূর্ণ প্রস্তুতি নিন।', 'type' => 'textarea', 'group' => 'courses', 'label' => 'N5 Description'],
            ['key' => 'courses.n5_duration',       'value' => '৩ মাস',                             'type' => 'text',     'group' => 'courses', 'label' => 'N5 Duration'],
            ['key' => 'courses.n5_fee',            'value' => '৮,০০০ টাকা/মাস',                   'type' => 'text',     'group' => 'courses', 'label' => 'N5 Fee'],
            ['key' => 'courses.n4_description',    'value' => 'N5 সম্পন্নদের জন্য উপযুক্ত। উন্নত ব্যাকরণ, পড়া ও শোনার দক্ষতা বাড়ান। JLPT N4 পরীক্ষার জন্য নিবিড় প্রস্তুতি নিন।', 'type' => 'textarea', 'group' => 'courses', 'label' => 'N4 Description'],
            ['key' => 'courses.n4_duration',       'value' => '৪ মাস',                             'type' => 'text',     'group' => 'courses', 'label' => 'N4 Duration'],
            ['key' => 'courses.n4_fee',            'value' => '৯,০০০ টাকা/মাস',                   'type' => 'text',     'group' => 'courses', 'label' => 'N4 Fee'],
            ['key' => 'courses.schedule_info',     'value' => 'সপ্তাহে ৫ দিন। সকাল ব্যাচ: ৯টা–১১টা | বিকাল ব্যাচ: ৪টা–৬টা | সন্ধ্যা ব্যাচ: ৭টা–৯টা।', 'type' => 'textarea', 'group' => 'courses', 'label' => 'Schedule Info'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }
    }
}
