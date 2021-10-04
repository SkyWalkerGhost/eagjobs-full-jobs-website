<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Language;
use App\Models\Location;
use App\Models\Experience;
use App\Models\VacancyType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categoryArr = [
            'TOP მენეჯმენტი', 'ადამიანური რესურსები', 'ადმინისტრაცია',
            'ავიაცია/აეროპორტი', 'ავტო-მოტო სერვისი', 'არასამთავრობო',
            'ბუღალტერია', 'ფინანსები', 'გაყიდვები', 'დაზღვევა',
            'დასუფთავება', 'ენერგეტიკა', 'ინჟინერია',
            'ინფორმაციული ტექნოლოგიები', 'იურიდიული',
            'კაზინო/აზარტული თამაშები', 'ლოჯისტიკა',
            'ტრანსპორტი', 'მარკეტინგი', 'რეკლამა/PR',
            'განათლება', 'საბანკო', 'საზღვაო', 'სამედიცინო',
            'სამშენებლო', 'უძრავი ქონება', 'სასტუმრო', 'რესტორანი/კვება',
            'საჯარო სამსახური', 'ესთეტიკური მედიცინა', 'სოფლის მეურნეობა',
            'სხვა', 'ტენდერი/კონკურსი', 'ტრენინგ-კურსები', 'ტურიზმი',
            'უსაფრთხოება', 'შესყიდვები', 'წარმოება', 'ხარისხის კონტროლი',
            'გარემოს დაცვა', 'ხელოვნება', 'მედია',
            'ხელოსანი/მონტაჟი', 'სასწავლო პროგრამები',
        ];

        $languageArr = [
            'ქართული',  'ინგლისური', 'რუსული', 'გერმანული',
            'ფრანგული', 'თურქული',  'ესპანური', 'იტალიური',
        ];

        $locationArr = [
            'თბილისი', 'ახალციხე', 'ახალქალაქი', 'ასპინძა', 'ანაკლია',
            'ამბროლაური', 'ადიგენი', 'აგარა', 'აბაშა', 'აბასთუმანი',
            'ახმეტა', 'ქუთაისი', 'რუსთავი', 'ბათუმი', 'ბაკურიანი',
            'ბაღდათი', 'ბოლნისი', 'ბორჯომი', 'გარდაბანი',
            'გორი', 'გუდაური', 'გურჯაანი', 'დედოფლისწყარო',
            'დმანისი', 'დუშეთი', 'ვალე', 'ვანი', 'ზესტაფონი',
            'ზუგდიდი', 'თეთრიწყარო', 'თელავი', 'თერჯოლა',
            'კასპი', 'ლაგოდეხი', 'ლანჩხუთი', 'ლენტეხი',
            'მარნეული', 'მარტვილი', 'მესტია', 'მცხეთა',
            'ნატახტარი', 'ნინოწმინდა', 'ოზურგეთი',
            'ონი', 'საგარეჯო', 'სამტრედია', 'საჩხერე',
            'სენაკი', 'სიღნაღი', 'სოხუმი', 'სურამი', 'სუფსა',
            'ტყიბული', 'ურეკი', 'ფოთი', 'ქარელი',
            'ქობულეთი', 'ყაზბეგი', 'ყვარელი', 'ჩოხატაური',
            'ჩხოროწყუ', 'ცაგერი', 'ცხინვალი', 'წალენჯიხა',
            'წალკა', 'წნორი', 'წყალტუბო', 'ჭიათურა',
            'ხარაგაული', 'ხაშური', 'ხელვაჩაური', 'ხობი',
            'ხონი', 'ხულო', 'ჯვარი', 'სხვა', 'საზღვარგარეთ',
        ];

        $experienceArr = [
            'გამოცდილების გარეშე',
            'ერთ წელზე ნაკლები',
            '1 - 2 წლამდე',
            '2 - 3 წლამდე',
            '3 - 5 წლამდე',
            '5 - 7 წლამდე',
            '7 - 10 წლამდე',
            '10 წელზე მეტი',
        ];

        $vacancyTypeArr = [
            'Standard' => 30,
            'VIP' => 14,
            'GOLD' => 10,
            'PRIME' => 3,
        ];

        $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';


        foreach($categoryArr as $category) {
            
            Category::create([
                'name' => $category
            ]);
        }

        foreach($locationArr as $location) {
            
            location::create([
                'name' => $location
            ]);
        }

        foreach($experienceArr as $experience) {
            
            Experience::create([
                'name' => $experience
            ]);
        }

        foreach($languageArr as $language) {
            
            Language::create([
                'name' => $language
            ]);
        }

        foreach($vacancyTypeArr as $type => $value) {
            
            VacancyType::create([
                'name' => $type,
                'days' => $value,
            ]);
        }
        
    }
}
