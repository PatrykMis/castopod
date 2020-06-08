<?php
/**
 * From https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
 * (cc) Creative Commons Attribution-ShareAlike 3.0
 * 2020-06-07
 */
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LanguageSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            array('code'=>'aa','name'=>'Afar','native_name'=>'Afaraf'),
            array('code'=>'ab','name'=>'Abkhazian','native_name'=>'аҧсуа бызшәа, аҧсшәа'),
            array('code'=>'ae','name'=>'Avestan','native_name'=>'avesta'),
            array('code'=>'af','name'=>'Afrikaans','native_name'=>'Afrikaans'),
            array('code'=>'ak','name'=>'Akan','native_name'=>'Akan'),
            array('code'=>'am','name'=>'Amharic','native_name'=>'አማርኛ'),
            array('code'=>'an','name'=>'Aragonese','native_name'=>'aragonés'),
            array('code'=>'ar','name'=>'Arabic','native_name'=>'العربية'),
            array('code'=>'as','name'=>'Assamese','native_name'=>'অসমীয়া'),
            array('code'=>'av','name'=>'Avaric','native_name'=>'авар мацӀ, магӀарул мацӀ'),
            array('code'=>'ay','name'=>'Aymara','native_name'=>'aymar aru'),
            array('code'=>'az','name'=>'Azerbaijani','native_name'=>'azərbaycan dili'),
            array('code'=>'ba','name'=>'Bashkir','native_name'=>'башҡорт теле'),
            array('code'=>'be','name'=>'Belarusian','native_name'=>'беларуская мова'),
            array('code'=>'bg','name'=>'Bulgarian','native_name'=>'български език'),
            array('code'=>'bh','name'=>'Bihari languages','native_name'=>'भोजपुरी'),
            array('code'=>'bi','name'=>'Bislama','native_name'=>'Bislama'),
            array('code'=>'bm','name'=>'Bambara','native_name'=>'bamanankan'),
            array('code'=>'bn','name'=>'Bengali','native_name'=>'বাংলা'),
            array('code'=>'bo','name'=>'Tibetan','native_name'=>'བོད་ཡིག'),
            array('code'=>'br','name'=>'Breton','native_name'=>'brezhoneg'),
            array('code'=>'bs','name'=>'Bosnian','native_name'=>'bosanski jezik'),
            array('code'=>'ca','name'=>'Catalan, Valencian','native_name'=>'català, valencià'),
            array('code'=>'ce','name'=>'Chechen','native_name'=>'нохчийн мотт'),
            array('code'=>'ch','name'=>'Chamorro','native_name'=>'Chamoru'),
            array('code'=>'co','name'=>'Corsican','native_name'=>'corsu, lingua corsa'),
            array('code'=>'cr','name'=>'Cree','native_name'=>'ᓀᐦᐃᔭᐍᐏᐣ'),
            array('code'=>'cs','name'=>'Czech','native_name'=>'čeština, český jazyk'),
            array('code'=>'cu','name'=>'Church Slavic, Old Slavonic, Church Slavonic, Old Bulgarian, Old Church Slavonic','native_name'=>'ѩзыкъ словѣньскъ'),
            array('code'=>'cv','name'=>'Chuvash','native_name'=>'чӑваш чӗлхи'),
            array('code'=>'cy','name'=>'Welsh','native_name'=>'Cymraeg'),
            array('code'=>'da','name'=>'Danish','native_name'=>'dansk'),
            array('code'=>'de','name'=>'German','native_name'=>'Deutsch'),
            array('code'=>'dv','name'=>'Divehi, Dhivehi, Maldivian','native_name'=>'ދިވެހި'),
            array('code'=>'dz','name'=>'Dzongkha','native_name'=>'རྫོང་ཁ'),
            array('code'=>'ee','name'=>'Ewe','native_name'=>'Eʋegbe'),
            array('code'=>'el','name'=>'Greek, Modern (1453–)','native_name'=>'ελληνικά'),
            array('code'=>'en','name'=>'English','native_name'=>'English'),
            array('code'=>'eo','name'=>'Esperanto','native_name'=>'Esperanto'),
            array('code'=>'es','name'=>'Spanish, Castilian','native_name'=>'Español'),
            array('code'=>'et','name'=>'Estonian','native_name'=>'eesti, eesti keel'),
            array('code'=>'eu','name'=>'Basque','native_name'=>'euskara, euskera'),
            array('code'=>'fa','name'=>'Persian','native_name'=>'فارسی'),
            array('code'=>'ff','name'=>'Fulah','native_name'=>'Fulfulde, Pulaar, Pular'),
            array('code'=>'fi','name'=>'Finnish','native_name'=>'suomi, suomen kieli'),
            array('code'=>'fj','name'=>'Fijian','native_name'=>'vosa Vakaviti'),
            array('code'=>'fo','name'=>'Faroese','native_name'=>'føroyskt'),
            array('code'=>'fr','name'=>'French','native_name'=>'français, langue française'),
            array('code'=>'fy','name'=>'Western Frisian','native_name'=>'Frysk'),
            array('code'=>'ga','name'=>'Irish','native_name'=>'Gaeilge'),
            array('code'=>'gd','name'=>'Gaelic, Scottish Gaelic','native_name'=>'Gàidhlig'),
            array('code'=>'gl','name'=>'Galician','native_name'=>'Galego'),
            array('code'=>'gn','name'=>'Guarani','native_name'=>'Avañe\'ẽ'),
            array('code'=>'gu','name'=>'Gujarati','native_name'=>'ગુજરાતી'),
            array('code'=>'gv','name'=>'Manx','native_name'=>'Gaelg, Gailck'),
            array('code'=>'ha','name'=>'Hausa','native_name'=>'(Hausa) هَوُسَ'),
            array('code'=>'he','name'=>'Hebrew','native_name'=>'עברית'),
            array('code'=>'hi','name'=>'Hindi','native_name'=>'हिन्दी, हिंदी'),
            array('code'=>'ho','name'=>'Hiri Motu','native_name'=>'Hiri Motu'),
            array('code'=>'hr','name'=>'Croatian','native_name'=>'hrvatski jezik'),
            array('code'=>'ht','name'=>'Haitian, Haitian Creole','native_name'=>'Kreyòl ayisyen'),
            array('code'=>'hu','name'=>'Hungarian','native_name'=>'magyar'),
            array('code'=>'hy','name'=>'Armenian','native_name'=>'Հայերեն'),
            array('code'=>'hz','name'=>'Herero','native_name'=>'Otjiherero'),
            array('code'=>'ia','name'=>'Interlingua (International Auxiliary Language Association)','native_name'=>'Interlingua'),
            array('code'=>'id','name'=>'Indonesian','native_name'=>'Bahasa Indonesia'),
            array('code'=>'ie','name'=>'Interlingue, Occidental','native_name'=>'(originally:) Occidental, (after WWII:) Interlingue'),
            array('code'=>'ig','name'=>'Igbo','native_name'=>'Asụsụ Igbo'),
            array('code'=>'ii','name'=>'Sichuan Yi, Nuosu','native_name'=>'ꆈꌠ꒿ Nuosuhxop'),
            array('code'=>'ik','name'=>'Inupiaq','native_name'=>'Iñupiaq, Iñupiatun'),
            array('code'=>'io','name'=>'Ido','native_name'=>'Ido'),
            array('code'=>'is','name'=>'Icelandic','native_name'=>'Íslenska'),
            array('code'=>'it','name'=>'Italian','native_name'=>'Italiano'),
            array('code'=>'iu','name'=>'Inuktitut','native_name'=>'ᐃᓄᒃᑎᑐᑦ'),
            array('code'=>'ja','name'=>'Japanese','native_name'=>'日本語 (にほんご)'),
            array('code'=>'jv','name'=>'Javanese','native_name'=>'ꦧꦱꦗꦮ, Basa Jawa'),
            array('code'=>'ka','name'=>'Georgian','native_name'=>'ქართული'),
            array('code'=>'kg','name'=>'Kongo','native_name'=>'Kikongo'),
            array('code'=>'ki','name'=>'Kikuyu, Gikuyu','native_name'=>'Gĩkũyũ'),
            array('code'=>'kj','name'=>'Kuanyama, Kwanyama','native_name'=>'Kuanyama'),
            array('code'=>'kk','name'=>'Kazakh','native_name'=>'қазақ тілі'),
            array('code'=>'kl','name'=>'Kalaallisut, Greenlandic','native_name'=>'kalaallisut, kalaallit oqaasii'),
            array('code'=>'km','name'=>'Central Khmer','native_name'=>'ខ្មែរ, ខេមរភាសា, ភាសាខ្មែរ'),
            array('code'=>'kn','name'=>'Kannada','native_name'=>'ಕನ್ನಡ'),
            array('code'=>'ko','name'=>'Korean','native_name'=>'한국어'),
            array('code'=>'kr','name'=>'Kanuri','native_name'=>'Kanuri'),
            array('code'=>'ks','name'=>'Kashmiri','native_name'=>'कश्मीरी, كشميري‎'),
            array('code'=>'ku','name'=>'Kurdish','native_name'=>'Kurdî, کوردی‎'),
            array('code'=>'kv','name'=>'Komi','native_name'=>'коми кыв'),
            array('code'=>'kw','name'=>'Cornish','native_name'=>'Kernewek'),
            array('code'=>'ky','name'=>'Kirghiz, Kyrgyz','native_name'=>'Кыргызча, Кыргыз тили'),
            array('code'=>'la','name'=>'Latin','native_name'=>'latine, lingua latina'),
            array('code'=>'lb','name'=>'Luxembourgish, Letzeburgesch','native_name'=>'Lëtzebuergesch'),
            array('code'=>'lg','name'=>'Ganda','native_name'=>'Luganda'),
            array('code'=>'li','name'=>'Limburgan, Limburger, Limburgish','native_name'=>'Limburgs'),
            array('code'=>'ln','name'=>'Lingala','native_name'=>'Lingála'),
            array('code'=>'lo','name'=>'Lao','native_name'=>'ພາສາລາວ'),
            array('code'=>'lt','name'=>'Lithuanian','native_name'=>'lietuvių kalba'),
            array('code'=>'lu','name'=>'Luba-Katanga','native_name'=>'Kiluba'),
            array('code'=>'lv','name'=>'Latvian','native_name'=>'latviešu valoda'),
            array('code'=>'mg','name'=>'Malagasy','native_name'=>'fiteny malagasy'),
            array('code'=>'mh','name'=>'Marshallese','native_name'=>'Kajin M̧ajeļ'),
            array('code'=>'mi','name'=>'Maori','native_name'=>'te reo Māori'),
            array('code'=>'mk','name'=>'Macedonian','native_name'=>'македонски јазик'),
            array('code'=>'ml','name'=>'Malayalam','native_name'=>'മലയാളം'),
            array('code'=>'mn','name'=>'Mongolian','native_name'=>'Монгол хэл'),
            array('code'=>'mr','name'=>'Marathi','native_name'=>'मराठी'),
            array('code'=>'ms','name'=>'Malay','native_name'=>'Bahasa Melayu, بهاس ملايو‎'),
            array('code'=>'mt','name'=>'Maltese','native_name'=>'Malti'),
            array('code'=>'my','name'=>'Burmese','native_name'=>'ဗမာစာ'),
            array('code'=>'na','name'=>'Nauru','native_name'=>'Dorerin Naoero'),
            array('code'=>'nb','name'=>'Norwegian Bokmål','native_name'=>'Norsk Bokmål'),
            array('code'=>'nd','name'=>'North Ndebele','native_name'=>'isiNdebele'),
            array('code'=>'ne','name'=>'Nepali','native_name'=>'नेपाली'),
            array('code'=>'ng','name'=>'Ndonga','native_name'=>'Owambo'),
            array('code'=>'nl','name'=>'Dutch, Flemish','native_name'=>'Nederlands, Vlaams'),
            array('code'=>'nn','name'=>'Norwegian Nynorsk','native_name'=>'Norsk Nynorsk'),
            array('code'=>'no','name'=>'Norwegian','native_name'=>'Norsk'),
            array('code'=>'nr','name'=>'South Ndebele','native_name'=>'isiNdebele'),
            array('code'=>'nv','name'=>'Navajo, Navaho','native_name'=>'Diné bizaad'),
            array('code'=>'ny','name'=>'Chichewa, Chewa, Nyanja','native_name'=>'chiCheŵa, chinyanja'),
            array('code'=>'oc','name'=>'Occitan','native_name'=>'occitan, lenga d’òc'),
            array('code'=>'oj','name'=>'Ojibwa','native_name'=>'ᐊᓂᔑᓈᐯᒧᐎᓐ'),
            array('code'=>'om','name'=>'Oromo','native_name'=>'Afaan Oromoo'),
            array('code'=>'or','name'=>'Oriya','native_name'=>'ଓଡ଼ିଆ'),
            array('code'=>'os','name'=>'Ossetian, Ossetic','native_name'=>'ирон æвзаг'),
            array('code'=>'pa','name'=>'Punjabi, Panjabi','native_name'=>'ਪੰਜਾਬੀ, پنجابی‎'),
            array('code'=>'pi','name'=>'Pali','native_name'=>'पालि, पाळि'),
            array('code'=>'pl','name'=>'Polish','native_name'=>'język polski, polszczyzna'),
            array('code'=>'ps','name'=>'Pashto, Pushto','native_name'=>'پښتو'),
            array('code'=>'pt','name'=>'Portuguese','native_name'=>'Português'),
            array('code'=>'qu','name'=>'Quechua','native_name'=>'Runa Simi, Kichwa'),
            array('code'=>'rm','name'=>'Romansh','native_name'=>'Rumantsch Grischun'),
            array('code'=>'rn','name'=>'Rundi','native_name'=>'Ikirundi'),
            array('code'=>'ro','name'=>'Romanian, Moldavian, Moldovan','native_name'=>'Română'),
            array('code'=>'ru','name'=>'Russian','native_name'=>'русский'),
            array('code'=>'rw','name'=>'Kinyarwanda','native_name'=>'Ikinyarwanda'),
            array('code'=>'sa','name'=>'Sanskrit','native_name'=>'संस्कृतम्'),
            array('code'=>'sc','name'=>'Sardinian','native_name'=>'sardu'),
            array('code'=>'sd','name'=>'Sindhi','native_name'=>'सिन्धी, سنڌي، سندھی‎'),
            array('code'=>'se','name'=>'Northern Sami','native_name'=>'Davvisámegiella'),
            array('code'=>'sg','name'=>'Sango','native_name'=>'yângâ tî sängö'),
            array('code'=>'si','name'=>'Sinhala, Sinhalese','native_name'=>'සිංහල'),
            array('code'=>'sk','name'=>'Slovak','native_name'=>'Slovenčina, Slovenský Jazyk'),
            array('code'=>'sl','name'=>'Slovenian','native_name'=>'Slovenski Jezik, Slovenščina'),
            array('code'=>'sm','name'=>'Samoan','native_name'=>'gagana fa\'a Samoa'),
            array('code'=>'sn','name'=>'Shona','native_name'=>'chiShona'),
            array('code'=>'so','name'=>'Somali','native_name'=>'Soomaaliga, af Soomaali'),
            array('code'=>'sq','name'=>'Albanian','native_name'=>'Shqip'),
            array('code'=>'sr','name'=>'Serbian','native_name'=>'српски језик'),
            array('code'=>'ss','name'=>'Swati','native_name'=>'SiSwati'),
            array('code'=>'st','name'=>'Southern Sotho','native_name'=>'Sesotho'),
            array('code'=>'su','name'=>'Sundanese','native_name'=>'Basa Sunda'),
            array('code'=>'sv','name'=>'Swedish','native_name'=>'Svenska'),
            array('code'=>'sw','name'=>'Swahili','native_name'=>'Kiswahili'),
            array('code'=>'ta','name'=>'Tamil','native_name'=>'தமிழ்'),
            array('code'=>'te','name'=>'Telugu','native_name'=>'తెలుగు'),
            array('code'=>'tg','name'=>'Tajik','native_name'=>'тоҷикӣ, toçikī, تاجیکی‎'),
            array('code'=>'th','name'=>'Thai','native_name'=>'ไทย'),
            array('code'=>'ti','name'=>'Tigrinya','native_name'=>'ትግርኛ'),
            array('code'=>'tk','name'=>'Turkmen','native_name'=>'Türkmen, Түркмен'),
            array('code'=>'tl','name'=>'Tagalog','native_name'=>'Wikang Tagalog'),
            array('code'=>'tn','name'=>'Tswana','native_name'=>'Setswana'),
            array('code'=>'to','name'=>'Tonga (Tonga Islands)','native_name'=>'Faka Tonga'),
            array('code'=>'tr','name'=>'Turkish','native_name'=>'Türkçe'),
            array('code'=>'ts','name'=>'Tsonga','native_name'=>'Xitsonga'),
            array('code'=>'tt','name'=>'Tatar','native_name'=>'татар теле, tatar tele'),
            array('code'=>'tw','name'=>'Twi','native_name'=>'Twi'),
            array('code'=>'ty','name'=>'Tahitian','native_name'=>'Reo Tahiti'),
            array('code'=>'ug','name'=>'Uighur, Uyghur','native_name'=>'ئۇيغۇرچە‎, Uyghurche'),
            array('code'=>'uk','name'=>'Ukrainian','native_name'=>'Українська'),
            array('code'=>'ur','name'=>'Urdu','native_name'=>'اردو'),
            array('code'=>'uz','name'=>'Uzbek','native_name'=>'Oʻzbek, Ўзбек, أۇزبېك‎'),
            array('code'=>'ve','name'=>'Venda','native_name'=>'Tshivenḓa'),
            array('code'=>'vi','name'=>'Vietnamese','native_name'=>'Tiếng Việt'),
            array('code'=>'vo','name'=>'Volapük','native_name'=>'Volapük'),
            array('code'=>'wa','name'=>'Walloon','native_name'=>'Walon'),
            array('code'=>'wo','name'=>'Wolof','native_name'=>'Wollof'),
            array('code'=>'xh','name'=>'Xhosa','native_name'=>'isiXhosa'),
            array('code'=>'yi','name'=>'Yiddish','native_name'=>'ייִדיש'),
            array('code'=>'yo','name'=>'Yoruba','native_name'=>'Yorùbá'),
            array('code'=>'za','name'=>'Zhuang, Chuang','native_name'=>'Saɯ cueŋƅ, Saw cuengh'),
            array('code'=>'zh','name'=>'Chinese','native_name'=>'中文 (Zhōngwén), 汉语, 漢語'),
            array('code'=>'zu','name'=>'Zulu','native_name'=>'isiZulu'),
        );

        $this->db->table('languages')->insertBatch($data);
    }
}