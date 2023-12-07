<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parentCategories = [
            [
                'name_tm' => 'Esasy wezipeler we işler',
                'name_en' => 'Main tasks and functions',
                'name_ru' => 'Основные задачи и функции',
                'category_id' => null,
            ],
            [
                'name_tm' => 'Kanunçylyk binýady',
                'name_en' => 'Laws',
                'name_ru' => 'Законы',
                'category_id' => null,
            ],
            [
                'name_tm' => 'Halkara hyzmatdaşlyk',
                'name_en' => 'The international cooperation',
                'name_ru' => 'Международное сотрудничество',
                'category_id' => null,
            ],
            [
                'name_tm' => 'Habarlaşmak üçin',
                'name_en' => 'Contacts',
                'name_ru' => 'Контакты',
                'category_id' => null,
            ],
            [
                'name_tm' => '«STANDART, HIL WE HOWPSUZLYK» žurnaly',
                'name_en' => '«STANDARDS, QUALITY AND SAFETY» magazine',
                'name_ru' => 'Журнал «СТАНДАРТЫ, КАЧЕСТВО И БЕЗОПАСНОСТЬ»',
                'category_id' => null,
            ],
            [
                'name_tm' => 'Hyzmatlar',
                'name_en' => 'Services',
                'name_ru' => 'Услуги',
                'category_id' => null,
            ],
            [
                'name_tm' => 'Ölçeg serişdeleriň döwlet sanawy',
                'name_en' => 'State register of measuring instruments',
                'name_ru' => 'Государственный реестр средств измерений',
                'category_id' => null,
            ],
        ];

        $subCategories = [
            // <-- begin:: Esasy wezipeler we işler (Parent Category) id=1 -->
            [
                'name_tm' => '«Türkmenstandartlary» baş döwlet gullugy',
                'name_en' => 'Main State Service «Turkmenstandartary»',
                'name_ru' => 'Главная государственная служба «Туркменстандартлары»',
                'category_id' => 1,
            ],
            [
                'name_tm' => 'Döwlet etalon merkezi',
                'name_en' => 'State Reference Center',
                'name_ru' => 'Государственного эталонный центр',
                'category_id' => 1,
            ],
            [
                'name_tm' => 'Türkmen standartlar maglumat merkezi',
                'name_en' => 'Turkmen standards information center',
                'name_ru' => 'Туркменский информационный центр стандартов',
                'category_id' => 1,
            ],
            // id = 11 Ahal
            [
                'name_tm' => 'Ahal welaýatynyň we Aşgabat şäheriniň döwlet gullugy',
                'name_en' => 'State service «Turkmenstandartlary» Akhal velayat',
                'name_ru' => 'Государственная служба «Туркменстандартлары» Ахалского велаята',
                'category_id' => 1,
            ],
            [
                'name_tm' => 'Balkan welaýatynyň döwlet gullugy',
                'name_en' => 'State service of Balkan Velayat',
                'name_ru' => 'Государственная служба Балканского велаята',
                'category_id' => 1,
            ],
            [
                'name_tm' => 'Mary welaýatynyň döwlet gullugy',
                'name_en' => 'State service of Mary Velayat',
                'name_ru' => 'Государственная служба Марыйского велаята',
                'category_id' => 1,
            ],
            [
                'name_tm' => 'Daşoguz welaýatynyň döwlet gullugy',
                'name_en' => 'State service of Dashoguz Velayat',
                'name_ru' => 'Государственная служба Дашогузского велаята',
                'category_id' => 1,
            ],
            [
                'name_tm' => 'Lebap welaýatynyň döwlet gullugy',
                'name_en' => 'State service of Lebap Velayat',
                'name_ru' => 'Государственная служба Лебапского велаята',
                'category_id' => 1,
            ],
            // <-- end:: Esasy wezipeler we işler (Parent Category) id=1 -->

            // <-- begin:: Kanunçylyk binýady (Parent Category) id=1 -->
            [
                'name_tm' => 'Standartlaşdyrmak hakynda',
                'name_en' => 'About standardization',
                'name_ru' => 'О стандартизации',
                'category_id' => 2,
            ],
            [
                'name_tm' => 'Sertifikatlaşdyrmak hakynda',
                'name_en' => 'About certification',
                'name_ru' => 'О сертификации',
                'category_id' => 2,
            ],
            [
                'name_tm' => 'Ölçegleriň bitewiligini üpjün etmek hakynda',
                'name_en' => 'About ensuring dimensional integrity',
                'name_ru' => 'Об обеспечении целостности измерений',
                'category_id' => 2,
            ],
            [
                'name_tm' => 'Sarp edijileriň hukuklaryny goramak hakynda',
                'name_en' => 'About protecting consumer rights',
                'name_ru' => 'О защите прав потребителей',
                'category_id' => 2,
            ],
            [
                'name_tm' => 'Türkmenistanyň Zähmet Kodeksi',
                'name_en' => 'Labor Code of Turkmenistan',
                'name_ru' => 'Трудовой кодекс Туркменистана',
                'category_id' => 2,
            ],
            // <-- end:: Kanunçylyk binýady (Parent Category) id=2 -->

            // <-- begin:: Ahal welaýatynyň we Aşgabat şäheriniň döwlet gullugy (Sub Category) id=11 -->
            [
                'name_tm' => 'Sertifikatlaşdyryş bölümi',
                'name_en' => 'Certification',
                'name_ru' => 'Отдел сертификации',
                'category_id' => 11,
            ],
            [
                'name_tm' => 'Metrologiýa bölümi',
                'name_en' => 'Department Metrology',
                'name_ru' => 'Отдел метрологии',
                'category_id' => 11,
            ],
            [
                'name_tm' => 'Zähmeti we ýerasty baýlyklary goramak bölümi',
                'name_en' => 'Department Department of Occupational Safety and Resources',
                'name_ru' => 'Отдел по охране труда и недр',
                'category_id' => 11,
            ],
            [
                'name_tm' => 'Döwlet gözegçilik bölümi',
                'name_en' => 'State Supervision Department',
                'name_ru' => 'Отдел государственного надзора',
                'category_id' => 11,
            ],
            [
                'name_tm' => 'Merkezi barlaghana',
                'name_en' => 'Central Laboratory',
                'name_ru' => 'Центральная лаборатория',
                'category_id' => 11,
            ],
            // <-- end:: Ahal welaýatynyň we Aşgabat şäheriniň döwlet gullugy (Sub Category) id=11 -->

            // <-- begin:: Ahal welaýatynyň we Aşgabat şäheriniň döwlet gullugy (Sub Category) id=11 -->
            [
                'name_tm' => 'Defektoskopiýa bölümi',
                'name_en' => 'Defectoscopy',
                'name_ru' => 'Отдел дефектоскопии',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Demir önümleriň synagy bölümi',
                'name_en' => 'Department Metal Products',
                'name_ru' => 'Отдел испытаний металлических изделий',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Nebit önümleri we Awtotigirleri synag ediş bölümi',
                'name_en' => 'Testing Department Petroleum Products and Tires',
                'name_ru' => 'Отдел испытаний нефтепродуктов и автошин',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Mebel önümleriň synag ediş bölümi',
                'name_en' => 'Testing Department Furniture Products',
                'name_ru' => 'Отдел испытаний мебельных изделий',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Gurluşyk önümleriň synaglar bölümi',
                'name_en' => 'Testing Building Products',
                'name_ru' => 'Отдел испытаний строительных изделий',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Radiodozimetriýa bölümi',
                'name_en' => 'Testing Department Radiodosimetry',
                'name_ru' => 'Отдел радиодозиметрии',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Önümleriň fiziki-himiki taýdan seljeriş barlag bölümi',
                'name_en' => 'Department Physical and Chemical Product Analysis',
                'name_ru' => 'Отдел физико-химического анализа продукции',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Ýeňil senagat önümlerini hil taýdan barlaýan bölümi',
                'name_en' => 'Department Light Industry Products Quality Testing Department',
                'name_ru' => 'Отдел проверки качества продукции легкой промышленности',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Aýakgap senagat önümlerini hil taýdan barlaýan bölümi',
                'name_en' => 'Shoes Industry Products Quality',
                'name_ru' => 'Отдел качественной проверки изделий обувной промышленности',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Durmuş elektroenjamlary we radioelektroniki önümleriň synagy bölümi',
                'name_en' => 'Testing Household Electrical Appliances and Radioelectronics',
                'name_ru' => 'Отдел испытаний бытовых электроприборов и изделий радиоэлектроники',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Elektroenjamlaryň izolýasiýa garşylyklaryny barlaýan bölümi',
                'name_en' => 'Testing Department Insulation Resistance Testing Department electrical equipment',
                'name_ru' => 'Отдел проверки сопротивлений изоляции электрооборудования',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Himiki-toksikologiýa bölümi',
                'name_en' => 'Chemical-toxicological department',
                'name_ru' => 'Химико-токсикологический отдел',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Akkumulýatorlar we plastik önümleri synag ediş bölümi',
                'name_en' => 'Batteries and plastic products testing',
                'name_ru' => 'Отдел испытаний аккумуляторов и пластмассовых изделий',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Pagta süýüminiň we pagta önümleriniň hilini kesgitleýän bölümi',
                'name_en' => 'Department for determining the quality of cotton fiber and cotton products',
                'name_ru' => 'Отдел по определению качества хлопка-волокна и продукции из хлопка',
                'category_id' => 25,
            ],
            [
                'name_tm' => 'Iş ýerlerini barlaýan barlaghana bölümi',
                'name_en' => 'Laboratory department for testing workplaces',
                'name_ru' => 'Лабораторный отдел по проверке рабочих мест',
                'category_id' => 25,
            ],
            // <-- end:: Ahal welaýatynyň we Aşgabat şäheriniň döwlet gullugy (Sub Category) id=11 -->

            
            // <-- begin:: Balkan welaýatynyň döwlet gullugy (Sub Category) id=12 -->
            [
                'name_tm' => 'Döwlet gözegçiligi bölümi',
                'name_en' => 'State Supervision Department',
                'name_ru' => 'Отдел государственного надзора',
                'category_id' => 12,
            ],
            [
                'name_tm' => 'Sertifikasiýa bölümi',
                'name_en' => 'Certification',
                'name_ru' => 'Отдел сертификации',
                'category_id' => 12,
            ],
            [
                'name_tm' => 'Metrologiýa bölümi',
                'name_en' => 'Department Metrology',
                'name_ru' => 'Отдел метрологии',
                'category_id' => 12,
            ],
            [
                'name_tm' => 'Zähmeti we ýerasty baýlyklary goramak bölümi',
                'name_en' => 'Department of Occupational Safety and Resources',
                'name_ru' => 'Отдел по охране труда и недр',
                'category_id' => 12,
            ],
            [
                'name_tm' => 'Merkezi barlaghana',
                'name_en' => 'Central Laboratory',
                'name_ru' => 'Центральная лаборатория',
                'category_id' => 12,
            ],
            // <-- end:: Balkan welaýatynyň döwlet gullugy (Sub Category) id=12 -->

            // <-- begin:: Merkezi barlaghana (Sub Category) id=45 -->
            [
                'name_tm' => 'Defektoskopiýa we gurluşyk önümleriniň hiline baha beriş bölümi',
                'name_en' => 'Department of flaw detection and quality assessment of building products',
                'name_ru' => 'Отдел дефектоскопии и оценки качества строительных изделий',
                'category_id' => 45,
            ],
            [
                'name_tm' => 'Nebit we nebit önümleriniň hiline baha beriş bölümi',
                'name_en' => 'Department of quality assessment of oil and petroleum products',
                'name_ru' => 'Отдел оценки качества нефти и нефтепродуктов',
                'category_id' => 45,
            ],
            [
                'name_tm' => 'Dozimetriýa we radiasiýa geçiriş bölümi',
                'name_en' => 'Department of dosimetry and radiation testing',
                'name_ru' => 'Отдел дозиметрии и проверки радиации',
                'category_id' => 45,
            ],
            // <-- end:: Merkezi barlaghana (Sub Category) id=45 -->

            
            // <-- begin:: Mary welaýatynyň döwlet gullugy (Sub Category) id=13 -->
            [
                'name_tm' => 'Sertifikatlaşdyryş bölümi',
                'name_en' => 'Certification',
                'name_ru' => 'Отдел сертификации',
                'category_id' => 13,
            ],
            [
                'name_tm' => 'Metrologiýa bölümi',
                'name_en' => 'Department Metrology',
                'name_ru' => 'Отдел метрологии',
                'category_id' => 13,
            ],
            [
                'name_tm' => 'Zähmeti we ýerasty baýlyklary goramak bölümi',
                'name_en' => 'Department of Occupational Safety and Resources',
                'name_ru' => 'Отдел по охране труда и недр',
                'category_id' => 13,
            ],
            [
                'name_tm' => 'Döwlet gözegçiligi bölümi',
                'name_en' => 'State Supervision Department',
                'name_ru' => 'Отдел государственного надзора',
                'category_id' => 13,
            ],
            [
                'name_tm' => 'Ýolöten, Şatlyk we Baýramaly bölümleri',
                'name_en' => 'Yoloten, Shatlyk and Bairamaly Departments',
                'name_ru' => 'Отделы Ёлотенский, Шатлыкский и Байрамалинский',
                'category_id' => 13,
            ],
            [
                'name_tm' => 'Döwlet synag barlaghanasy',
                'name_en' => 'State Testing Laboratory',
                'name_ru' => 'Государственная испытательная лаборатория',
                'category_id' => 13,
            ],
            // <-- end:: Mary welaýatynyň döwlet gullugy (Sub Category) id=13 -->

            // <-- begin:: Ýolöten, Şatlyk we Baýramaly bölümleri (Sub Category) id=53 -->
            [
                'name_tm' => 'Sertifikatlaşdyryş bölümi',
                'name_en' => 'Certification',
                'name_ru' => 'Отдел сертификации',
                'category_id' => 53,
            ],
            [
                'name_tm' => 'Döwlet gözegçiligi bölümi',
                'name_en' => 'State Supervision Department',
                'name_ru' => 'Отдел государственного надзора',
                'category_id' => 53,
            ],
            [
                'name_tm' => 'Zähmeti we ýerasty baýlyklary goramak bölümi',
                'name_en' => 'Department of Occupational Safety and Resources',
                'name_ru' => 'Отдел по охране труда и недр',
                'category_id' => 53,
            ],
            // <-- end:: Ýolöten, Şatlyk we Baýramaly bölümleri (Sub Category) id=53 -->

            // <-- begin:: Döwlet synag barlaghanasy (Sub Category) id=54 -->
            [
                'name_tm' => 'Aýakgap we senagat önümlerini synagdan geçiriş bölümi',
                'name_en' => 'Footwear and Industrial Product Testing Department',
                'name_ru' => 'Отдел по проведению испытания продукции обувной и текстильной промышленности',
                'category_id' => 54,
            ],
            [
                'name_tm' => 'Defektoskopiýa we toksikologiýa bölümi',
                'name_en' => 'Defectoscopy and Toxicology Department',
                'name_ru' => 'Отделение Дефектоскопии и Токсикологии',
                'category_id' => 54,
            ],
            [
                'name_tm' => 'Elektrotehniki önümlerini synagdan geçiriş bölümi',
                'name_en' => 'Electrotechnical Product Testing Department Physico',
                'name_ru' => 'Отдел по проведению испытания электротехнических изделий',
                'category_id' => 54,
            ],
            [
                'name_tm' => 'Fiziki-himiki synaglary geçiriş bölümi',
                'name_en' => 'Department of Physico-Chemical Testing',
                'name_ru' => 'Отдел физико-химических испытаний',
                'category_id' => 54,
            ],
            [
                'name_tm' => 'Gurluşyk we metal önümlerini synagdan geçiriş bölümi',
                'name_en' => 'Building and Metal Products Testing Department',
                'name_ru' => 'Отдел строительных и металлических изделий',
                'category_id' => 54,
            ],
            [
                'name_tm' => 'Iş ýerlerini barlaýan we awtoulag ätiýaçlyk şaýlaryny synagdan geçiriş bölümi',
                'name_en' => 'Workplace Inspection and Automotive Spare Parts Testing Department ',
                'name_ru' => 'Отдел по проверке рабочих мест и испытанию автомобильных запасных частей',
                'category_id' => 54,
            ],
            [
                'name_tm' => 'Oba hojalyk we pagta süýümi hem-de pagta önümlerini synagdan geçiriş bölümi',
                'name_en' => 'Agricultural and Cotton Fiber and Cotton Products Testing Department',
                'name_ru' => 'Отдел по определению качества хлопка-волокна и продукции из хлопка',
                'category_id' => 54,
            ],
            [
                'name_tm' => 'Radiodozimetriýa ölçegleri geçiriş bölümi',
                'name_en' => 'Radiodosimetry Measurements Transfer Department',
                'name_ru' => 'Отдел по проведению радиодозиметрических измерений',
                'category_id' => 54,
            ],
            [
                'name_tm' => 'Ýeňil-dokma senagat we mebel önümlerini synagdan geçiriş bölümi',
                'name_en' => 'Light Textile Industry and Furniture Products Testing Department',
                'name_ru' => 'Отдел по проведению испытания продукции легкой и текстильной промышленности',
                'category_id' => 54,
            ],
            // <-- end:: Döwlet synag barlaghanasy (Sub Category) id=54 -->

            // <-- begin:: Habarlaşmak üçin (Sub Category) id=4 -->
            [
                'name_tm' => 'Merkezi edarasy',
                'name_en' => 'Central Office',
                'name_ru' => 'Центральный офис',
                'category_id' => 4,
            ],
            [
                'name_tm' => 'Döwlet etalon merkezi',
                'name_en' => 'State Reference Center',
                'name_ru' => 'Государственного эталонный центр',
                'category_id' => 4,
            ],
            [
                'name_tm' => 'Türkmen standartlar maglumat merkezi',
                'name_en' => 'Turkmen standards information center',
                'name_ru' => 'Туркменский информационный центр стандартов',
                'category_id' => 4,
            ],
            [
                'name_tm' => 'Ahal welaýaty',
                'name_en' => 'Ahal Velayat',
                'name_ru' => 'Ахалский велаят',
                'category_id' => 4,
            ],
            [
                'name_tm' => 'Ahal welaýatynyň we Aşgabat şäheriniň «Türkmenstandartlary» döwlet gullugy',
                'name_en' => '«Turkmenstandartary» state service of Ahal Velayat and Ashgabat city',
                'name_ru' => 'Государственная служба «Туркменстандарты» Ахалского велаята и города Ашхабада',
                'category_id' => 70,
            ],
            [
                'name_tm' => 'Ahal welaýatynyň we Aşgabat şäheriniň «Türkmenstandartlary» döwlet gullugynyň Merkezi barlaghanasy',
                'name_en' => 'Central laboratory of Turkmenstandartary state service of Ahal province and Ashgabat city',
                'name_ru' => 'Центральная лаборатория государственной службы «Туркменстандарт» Ахалского велаята и города Ашхабада',
                'category_id' => 70,
            ],
            [
                'name_tm' => 'Balkan welaýaty',
                'name_en' => 'Balkan Velayat',
                'name_ru' => 'Балканский велаят',
                'category_id' => 4,
            ],
            [
                'name_tm' => 'Balkan welaýatynyň «Türkmenstandartlary» döwlet gullugy',
                'name_en' => '"Turkmenstandartary" State Service of the Balkan Velayat',
                'name_ru' => 'Государственная служба «Туркменстандарты» Балканского велаята',
                'category_id' => 73,
            ],
            [
                'name_tm' => 'Balkan welaýatynyň «Türkmenstandartlary» döwlet gullugynyň Merkezi barlaghanasy',
                'name_en' => 'Central laboratory of the state service "Turkmenstandartary" of the Balkan Velayat',
                'name_ru' => 'Центральная лаборатория государственной службы «Туркменстандарты» Балканского велаята',
                'category_id' => 73,
            ],
            [
                'name_tm' => 'Mary welaýaty',
                'name_en' => 'Mary Velayat',
                'name_ru' => 'Марыйский велаят',
                'category_id' => 4,
            ],
            [
                'name_tm' => 'Mary welaýatynyň «Türkmenstandartlary» döwlet gullugy',
                'name_en' => '"Turkmenstandartary" State Service of Mary Velayat',
                'name_ru' => 'Государственная служба «Туркменстандартлары» Марыйского велаята',
                'category_id' => 76,
            ],
            [
                'name_tm' => 'Mary welaýatynyň “Türkmenstandartlary” döwlet gullugynyň Döwlet synag barlaghanasy',
                'name_en' => 'State testing laboratory of "Turkmenstandartary" state service of Mary Velayat',
                'name_ru' => 'Государственная служба «Туркменстандартлары» Марыйского велаята Государственная испытательная лаборатория',
                'category_id' => 76,
            ],
            [
                'name_tm' => 'Daşoguz welaýaty',
                'name_en' => 'Dashoguz Velayat',
                'name_ru' => 'Дашогузский велаят',
                'category_id' => 4,
            ],
            [
                'name_tm' => 'Daşoguz welaýatynyň «Türkmenstandartlary» döwlet gullugy',
                'name_en' => '"Turkmenstandartary" state service of Dashoguz Velayat',
                'name_ru' => 'Государственная служба «Туркменстандартлары» Дашогузского велаята',
                'category_id' => 79,
            ],
            [
                'name_tm' => 'Daşoguz welaýatynyň «Türkmenstandartlary» döwlet gullugynyň Merkezi barlaghanasy',
                'name_en' => 'Central laboratory of the state service "Turkmenstandartary" of Dashoguz Velayat',
                'name_ru' => 'Государственная служба «Туркменстандартлары» Дашогузского велаята Центральная лаборатория',
                'category_id' => 79,
            ],
            [
                'name_tm' => 'Lebap welaýaty',
                'name_en' => 'Lebap Velayat',
                'name_ru' => 'Лебапский велаят',
                'category_id' => 4,
            ],
            [
                'name_tm' => 'Lebap welaýatynyň «Türkmenstandartlary» döwlet gullugy',
                'name_en' => '"Turkmenstandartary" State Service of Lebap Velayat',
                'name_ru' => 'Государственная служба «Туркменстандартлары» Лебапского велаята',
                'category_id' => 82,
            ],
            [
                'name_tm' => 'Lebap welaýatynyň «Türkmenstandartlary» döwlet gullugynyň Synag barlaghanasy',
                'name_en' => 'Testing laboratory of the state service "Turkmenstandartary" of Lebap Velayat',
                'name_ru' => 'Государственная служба «Туркменстандартлары» Лебапского велаята Испытательная лаборатория',
                'category_id' => 82,
            ],
            // <-- end:: Habarlaşmak üçin (Sub Category) id=4 -->

            // <-- begin:: Hyzmatlar (Sub Category) id=6 -->
            [
                'name_tm' => 'Türkmen standartlar maglumat merkeziniň Akkreditasiýa bölümi',
                'name_en' => 'Accreditation Department of Turkmen Standards Information Center',
                'name_ru' => 'Отдел аккредитации Туркменского информационного центра стандартов',
                'category_id' => 6,
            ],
            [
                'name_tm' => 'Türkmen standartlar maglumat merkeziniň Guramaçylyk-metodiki bölümi',
                'name_en' => 'Organizational-Methodological Department of the Turkmen Standards Information Center',
                'name_ru' => 'Организационно-методический отдел Туркменского информационного центра стандартов',
                'category_id' => 6,
            ],
            [
                'name_tm' => 'Türkmen standartlar maglumat merkeziniň Standartlary döwlet gaznasy bölümi',
                'name_en' => 'Department of Standards State Foundation of Turkmen Standards Information Center',
                'name_ru' => 'Отдел государственного фонда стандартов Туркменского информационного центра стандартов',
                'category_id' => 6,
            ],
            // <-- end:: Hyzmatlar (Sub Category) id=6 -->
        ];

        // <-- begin:: Parent Category -->
        foreach ($parentCategories as $parentCategory) 
        {
            Category::create([
                'name_tm' => $parentCategory['name_tm'],
                'name_en' => $parentCategory['name_en'],
                'name_ru' => $parentCategory['name_ru'],
                'category_id' => $parentCategory['category_id'],
            ]); 
        }
        // // <-- end:: Parent Category -->

        // <-- begin:: Sub Category -->
        foreach ($subCategories as $subCategory) 
        {
            Category::create([
                'name_tm' => $subCategory['name_tm'],
                'name_en' => $subCategory['name_en'],
                'name_ru' => $subCategory['name_ru'],
                'category_id' => $subCategory['category_id'],
            ]); 
        }
        // <-- end:: Sub Category -->

    }
}
