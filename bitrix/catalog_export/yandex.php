<? $disableReferers = false;
if (!isset($_GET["referer1"]) || strlen($_GET["referer1"])<=0) $_GET["referer1"] = "yandext";
$strReferer1 = htmlspecialchars($_GET["referer1"]);
if (!isset($_GET["referer2"]) || strlen($_GET["referer2"]) <= 0) $_GET["referer2"] = "";
$strReferer2 = htmlspecialchars($_GET["referer2"]);
header("Content-Type: text/xml; charset=windows-1251");
echo "<"."?xml version=\"1.0\" encoding=\"windows-1251\"?".">"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2018-03-14 19:14">
<shop>
<name>Интернет-магазин</name>
<company>стикс.рф</company>
<url>https://styx-online.ru</url>
<platform>1C-Bitrix</platform>
<currencies>
<currency id="RUB" rate="1" />
<currency id="USD" rate="64.81" />
<currency id="EUR" rate="71.71" />
<currency id="UAH" rate="2.604" />
<currency id="BYN" rate="32.34" />
</currencies>
<categories>
<category id="260">Масла и сопутствующие  товары</category>
<category id="261" parentId="260">Эфирные масла и литература</category>
<category id="262" parentId="260">Смеси эфирных масел</category>
<category id="273" parentId="260">Базовые масла</category>
<category id="274" parentId="260">Для массажа</category>
<category id="275" parentId="260">Аромалампы</category>
<category id="276" parentId="260">Аромакулоны</category>
<category id="263">Волосы</category>
<category id="264" parentId="263">Шампуни</category>
<category id="265" parentId="263">Бальзамы, маски и спреи для волос</category>
<category id="266">Лицо</category>
<category id="277" parentId="266">Крема и гели</category>
<category id="278" parentId="266">Зрелая кожа 30+</category>
<category id="279" parentId="266">Сыворотки</category>
<category id="280" parentId="266">Очищение и умывание</category>
<category id="281" parentId="266">Проблемная кожа</category>
<category id="282" parentId="266">Маски и пилинги</category>
<category id="283" parentId="266">Концентраты  и ампулы</category>
<category id="284" parentId="266">Для массажа</category>
<category id="285" parentId="266">Для век и губ</category>
<category id="286" parentId="266">Для и после загара</category>
<category id="287" parentId="266">Тональные средства</category>
<category id="267">Тело</category>
<category id="288" parentId="267">Крема и молочко</category>
<category id="289" parentId="267">Антицеллюлитный уход</category>
<category id="290" parentId="267">Спорт</category>
<category id="291" parentId="267">Маски</category>
<category id="292" parentId="267">Пилинги</category>
<category id="293" parentId="267">Для массажа</category>
<category id="294" parentId="267">Для ванны и душа</category>
<category id="295" parentId="267">Для и после загара</category>
<category id="296" parentId="267">Парфюм,дезодорант</category>
<category id="297" parentId="267">Уход для рук и ног</category>
<category id="298" parentId="267">Коррекция фигуры</category>
<category id="269">Косметологам</category>
<category id="299" parentId="269">Aroma Derm лицо</category>
<category id="300" parentId="269">Aroma Derm тело</category>
<category id="336" parentId="269">Программы по уходу за телом</category>
<category id="338" parentId="269">Расходные материалы</category>
<category id="270">Серии</category>
<category id="271" parentId="270">Вербена</category>
<category id="272" parentId="270">Омоложение</category>
<category id="301" parentId="270">Азиатика</category>
<category id="302" parentId="270">Детокс</category>
<category id="303" parentId="270">Для малышей</category>
<category id="304" parentId="270">Зеленый чай</category>
<category id="305" parentId="270">Кармасутра</category>
<category id="306" parentId="270">На Кобыльем молоке (Alpin Derm)</category>
<category id="307" parentId="270">На Козьем молоке( Alpin Derm)</category>
<category id="309" parentId="270">Травяной Сад</category>
<category id="310" parentId="270">Розовый Сад</category>
<category id="311" parentId="270">Чайное Дерево</category>
<category id="312" parentId="270">Чин-Мин</category>
<category id="313" parentId="270">Целебная Грязь (MOOR)</category>
<category id="314" parentId="270">Энергия Водорослей</category>
<category id="316" parentId="270">Для мужчин</category>
<category id="317" parentId="270">Aroma Derm лицо</category>
<category id="318" parentId="270">Aroma Derm тело</category>
<category id="100000338">Основной раздел каталога</category>
</categories>
<offers>
<offer id="750" available="true">
<url>https://styx-online.ru/catalog/aziatika_/gel_antikuperoznyy_s_tsentelloy_aziatskoy_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5660</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/26e/26e5a1358bbb26e7ca6e07d4fb93e60e.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ АНТИКУПЕРОЗНЫЙ С ЦЕНТЕЛЛОЙ АЗИАТСКОЙ , 400 мл</name>
<description>ГЕЛЬ АНТИКУПЕРОЗНЫЙ С ЦЕНТЕЛЛОЙ АЗИАТСКОЙ , 400 мл</description>
<param name="Артикул">83074</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Купероз, Отечная, Пигментация</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Варикоз, Отечная кожа, Пигментация, Сосудистый рисунок</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Расширение вен</param>
<param name="Состав">Конский каштан, полевой хвощ, липовый цвет, макадамия, календула, авокадо, ростки пшеницы, жожоба, масло моркови, кипарис.</param>
<param name="Способ применения">Применяется в процедурах влажных и сухих обертываний, а также в домашних условиях для ухода за участками кожи, пораженных куперозом.</param>
</offer>
<offer id="752" available="true">
<url>https://styx-online.ru/catalog/aromakulony/aromakulon_talisman_iz_naturalnogo_kamnya_ametist/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>210</price>
<currencyId>RUB</currencyId>
<categoryId>276</categoryId>
<picture>https://styx-online.ru/upload/iblock/aa4/aa4c3ee7158c52deeebd3d84d05fac65.jpg</picture>
<vendor></vendor>
<name>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;АМЕТИСТ&quot;</name>
<description>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;АМЕТИСТ&quot;</description>
<param name="Артикул">33385</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="753" available="true">
<url>https://styx-online.ru/catalog/aromakulony/aromakulon_talisman_iz_naturalnogo_kamnya_gematit/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>210</price>
<currencyId>RUB</currencyId>
<categoryId>276</categoryId>
<picture>https://styx-online.ru/upload/iblock/414/41441e49d7b90a7ad70f58dcd4d35397.jpg</picture>
<vendor></vendor>
<name>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;ГЕМАТИТ&quot;</name>
<description>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;ГЕМАТИТ&quot;</description>
<param name="Артикул">33386</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="754" available="true">
<url>https://styx-online.ru/catalog/aromakulony/aromakulon_talisman_iz_naturalnogo_kamnya_nefrit/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>210</price>
<currencyId>RUB</currencyId>
<categoryId>276</categoryId>
<picture>https://styx-online.ru/upload/iblock/b46/b46e216ab5c1c094b79e48fc129ba61e.jpg</picture>
<vendor></vendor>
<name>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;НЕФРИТ&quot;</name>
<description>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;НЕФРИТ&quot;</description>
<param name="Артикул">33387</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="755" available="true">
<url>https://styx-online.ru/catalog/aromakulony/aromakulon_talisman_iz_naturalnogo_kamnya_rozovyy_kvarts/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>210</price>
<currencyId>RUB</currencyId>
<categoryId>276</categoryId>
<picture>https://styx-online.ru/upload/iblock/42e/42e92915f92b9ff590933789904d4c94.jpg</picture>
<vendor></vendor>
<name>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;РОЗОВЫЙ КВАРЦ&quot;</name>
<description>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;РОЗОВЫЙ КВАРЦ&quot;</description>
<param name="Артикул">33388</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="756" available="true">
<url>https://styx-online.ru/catalog/aromakulony/aromakulon_talisman_iz_naturalnogo_kamnya_sapfirin/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>210</price>
<currencyId>RUB</currencyId>
<categoryId>276</categoryId>
<picture>https://styx-online.ru/upload/iblock/be0/be099558d41c091cb316ffcbd17b576a.jpg</picture>
<vendor></vendor>
<name>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;САПФИРИН&quot;</name>
<description>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;САПФИРИН&quot;</description>
<param name="Артикул">33389</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="757" available="true">
<url>https://styx-online.ru/catalog/aromakulony/aromakulon_talisman_iz_naturalnogo_kamnya_khrizopraz/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>210</price>
<currencyId>RUB</currencyId>
<categoryId>276</categoryId>
<picture>https://styx-online.ru/upload/iblock/14c/14cadcd91fe49e64b75246bf7cc60459.jpg</picture>
<vendor></vendor>
<name>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;ХРИЗОПРАЗ&quot;</name>
<description>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;ХРИЗОПРАЗ&quot;</description>
<param name="Артикул">33390</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="758" available="true">
<url>https://styx-online.ru/catalog/aromakulony/aromakulon_talisman_iz_naturalnogo_kamnya_yashma/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>210</price>
<currencyId>RUB</currencyId>
<categoryId>276</categoryId>
<picture>https://styx-online.ru/upload/iblock/0bc/0bc563fcd089d9d4587b7dc06bf3f00b.jpg</picture>
<vendor></vendor>
<name>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;ЯШМА&quot;</name>
<description>АРОМАКУЛОН ТАЛИСМАН ИЗ НАТУРАЛЬНОГО КАМНЯ &quot;ЯШМА&quot;</description>
<param name="Артикул">33391</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="760" available="true">
<url>https://styx-online.ru/catalog/aromakulony/aromamedalon_galstuk_kole_yuzhnaya_amerika_/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>350</price>
<currencyId>RUB</currencyId>
<categoryId>276</categoryId>
<picture>https://styx-online.ru/upload/iblock/86a/86a2a9e7eeb9d35fdd44385323a5e77a.jpg</picture>
<vendor></vendor>
<name>АРОМАМЕДАЛЬОН &quot;ГАЛСТУК-КОЛЬЕ ЮЖНАЯ АМЕРИКА&quot;</name>
<description>АРОМАМЕДАЛЬОН &quot;ГАЛСТУК-КОЛЬЕ ЮЖНАЯ АМЕРИКА&quot;</description>
<param name="Артикул">8182</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="762" available="true">
<url>https://styx-online.ru/catalog/ochishchenie_i_umyvanie_/molochko_ochishchayushchee_dlya_problemnoy_kozhi_detoks_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2240</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/78e/78e9920715b1af17ec814e572c2279c9.jpg</picture>
<vendor></vendor>
<name>МОЛОЧКО ОЧИЩАЮЩЕЕ ДЛЯ ПРОБЛЕМНОЙ КОЖИ ДЕТОКС , 200 мл</name>
<description>МОЛОЧКО ОЧИЩАЮЩЕЕ ДЛЯ ПРОБЛЕМНОЙ КОЖИ ДЕТОКС , 200 мл</description>
<param name="Артикул">85484</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комедоны (засорение пор , черные точки), Пористый рельеф кожи, Постакне, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Молочко</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Алоэ вера, глюконолактон, макадамия, жожоба, лечебная грязь, чайное дерево, лемонграсс, харвен (дегидроуксусная кислота)</param>
<param name="Способ применения">Ежедневное очищение проблемной кожи, еженедельные очищающие маски на пористые участки.</param>
</offer>
<offer id="763" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/universalnyy_lipoliticheskiy_krem_detoks_den_noch_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3540</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/aa0/aa06766e984bd2981cb9d86d1d52c642.jpg</picture>
<vendor></vendor>
<name>УНИВЕРСАЛЬНЫЙ ЛИПОЛИТИЧЕСКИЙ КРЕМ ДЕТОКС ( день-ночь ) , 150 мл</name>
<description>УНИВЕРСАЛЬНЫЙ ЛИПОЛИТИЧЕСКИЙ КРЕМ ДЕТОКС ( день-ночь ) , 150 мл</description>
<param name="Артикул">85473</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комедоны (засорение пор , черные точки), Отечная, Пористый рельеф кожи, Постакне, Потеря эластичности, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло календулы, жожоба, макадамии, экстракт зеленого чая, лечебная грязь, жемчужный экстракт, авокадо, лаванда, ромашка голубая, чайное дерево.</param>
<param name="Способ применения">Применяется для ежедневного ухода за проблемной кожей: наносится утром и вечером поверх серума соответствующего типа.</param>
</offer>
<offer id="765" available="true">
<url>https://styx-online.ru/catalog/raskhodnye_materialy_1/prostynya_2000kh2000mm_dlya_ob_tsvet_prozrachnyy_up_20sht_/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1360</price>
<currencyId>RUB</currencyId>
<categoryId>338</categoryId>
<picture>https://styx-online.ru/upload/iblock/d1c/d1ce531f572a54ddf7be6a6bf2c9a65e.png</picture>
<vendor></vendor>
<name>ПРОСТЫНЯ 2000х2000мм для об. цвет-ПРОЗРАЧНЫЙ (уп.20шт.)</name>
<description>ПРОСТЫНЯ 2000х2000мм для об. цвет-ПРОЗРАЧНЫЙ (уп.20шт.)</description>
<param name="Артикул">0302-2016</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="766" available="true">
<url>https://styx-online.ru/catalog/ukhod_dlya_ruk_i_nog_/krem_dlya_ruk_maslo_shi_70_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>297</categoryId>
<picture>https://styx-online.ru/upload/iblock/343/3434f4badd9765455be94dca041ccdf9.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ РУК &quot;МАСЛО ШИ&quot; , 70 мл</name>
<description>КРЕМ ДЛЯ РУК &quot;МАСЛО ШИ&quot; , 70 мл</description>
<param name="Артикул">18050</param>
<param name="Вес/объем">70</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло ши, сои, миндаля, ксантан, мёд, экстракт ванили, экстракт розмарина лекарственного, кумарин, эфирное масло жасмина и иланга. 

?</param>
<param name="Способ применения">Применять по необходимости. 

?
Для достижения и сохранения аристократического, здорового вида кожи рук рекомендовано регулярное использование.
?</param>
</offer>
<offer id="768" available="true">
<url>https://styx-online.ru/catalog/dlya_i_posle_zagara/krem_dukhi_dlya_tela_aloe_vera_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1590</price>
<currencyId>RUB</currencyId>
<categoryId>296</categoryId>
<picture>https://styx-online.ru/upload/iblock/18e/18e5c35b3ca123765459f9d11f8f4cf3.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДУХИ ДЛЯ ТЕЛА &quot;АЛОЭ ВЕРА&quot; , 200 мл</name>
<description>КРЕМ ДУХИ ДЛЯ ТЕЛА &quot;АЛОЭ ВЕРА&quot; , 200 мл</description>
<param name="Артикул">18084</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла ши (каритэ), сои, оливы, жожоба, макадамии, сок алоэ, эфирные масла петитгрейна, герани, туберозы.

</param>
<param name="Способ применения">Равномерно наносить на кожу тела после приёма душа.</param>
</offer>
<offer id="769" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/tualetnaya_voda_styx_men_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4250</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/ad8/ad83b43ff0db13d5a1dd681f1f191f68.jpg</picture>
<vendor></vendor>
<name>ТУАЛЕТНАЯ ВОДА &quot;STYX MEN&quot;, 100 мл</name>
<description>ТУАЛЕТНАЯ ВОДА &quot;STYX MEN&quot;, 100 мл</description>
<param name="Артикул">18742</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Спиртовая основа, эфирные масла и фарнезолы.</param>
<param name="Способ применения">Наносить на области эрогенных зон, не допускать попадания в глаза.

Не использовать вблизи открытого огня.</param>
</offer>
<offer id="771" available="true">
<url>https://styx-online.ru/catalog/krema_i_molochko_/krem_dukhi_dlya_tela_solanta_solantha_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1590</price>
<currencyId>RUB</currencyId>
<categoryId>296</categoryId>
<picture>https://styx-online.ru/upload/iblock/63d/63d7beab5013e9b68e32f7029df23a2d.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДУХИ ДЛЯ ТЕЛА &quot;СОЛАНТА&quot; (Solantha) , 200 мл</name>
<description>КРЕМ ДУХИ ДЛЯ ТЕЛА &quot;СОЛАНТА&quot; (Solantha) , 200 мл</description>
<param name="Артикул">18124</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Сквален, масло ши, сои, оливы, макадамии, жожоба, глюконолактон, жожоба, эфирное масло иланг-иланг.

</param>
<param name="Способ применения">Подходит для ежедневного применения после душа, после занятия спортом, массажа. 

?
Небольшое количество крема нанести на всё тело массажными движениями.
? </param>
</offer>
<offer id="773" available="true">
<url>https://styx-online.ru/catalog/sport/skrab_gel_dlya_dusha_s_alpiyskimi_travami_alpin_derm_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1590</price>
<currencyId>RUB</currencyId>
<categoryId>307</categoryId>
<picture>https://styx-online.ru/upload/iblock/929/9299e55c63d9659fed7f57919a2f0a53.png</picture>
<vendor></vendor>
<name>СКРАБ-ГЕЛЬ ДЛЯ ДУША С АЛЬПИЙСКИМИ ТРАВАМИ ALPIN DERM , 150 мл</name>
<description>СКРАБ-ГЕЛЬ ДЛЯ ДУША С АЛЬПИЙСКИМИ ТРАВАМИ ALPIN DERM , 150 мл</description>
<param name="Артикул">17323</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Гликозид кокосового  масла, измельченные абрикосовые ядрышки, экстракт горной арники, эфирные масла дикой мяты, розмарина</param>
<param name="Способ применения">Нанести на влажную кожу , слегка отскрабировать роговые чeшуйки и смыть водой .</param>
</offer>
<offer id="781" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/nochnoy_krem_zelenyy_chay_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1860</price>
<currencyId>RUB</currencyId>
<categoryId>304</categoryId>
<picture>https://styx-online.ru/upload/iblock/298/29843b01cb53e0fd8f7b5854bb78cca7.jpg</picture>
<vendor></vendor>
<name>НОЧНОЙ КРЕМ ЗЕЛЕНЫЙ ЧАЙ , 50 мл</name>
<description>НОЧНОЙ КРЕМ ЗЕЛЕНЫЙ ЧАЙ , 50 мл</description>
<param name="Артикул">86041</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Комбинированная, Обезвоженная, Потеря эластичности, Раздражение,воспаления( после пилинга), Сухая, Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло жожоба, масло макадамии, витамины A, E, F, экстракт зеленого чая, женьшень, манго, огуречный сок, липовый цвет.</param>
<param name="Способ применения">Нанести на лицо и шею.</param>
</offer>
<offer id="782" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/dnevnoy_krem_zelenyy_chay_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1550</price>
<currencyId>RUB</currencyId>
<categoryId>304</categoryId>
<picture>https://styx-online.ru/upload/iblock/130/1305724f7c1ce5bd3b42bad2eb337997.jpg</picture>
<vendor></vendor>
<name>ДНЕВНОЙ КРЕМ ЗЕЛЕНЫЙ ЧАЙ , 50 мл</name>
<description>ДНЕВНОЙ КРЕМ ЗЕЛЕНЫЙ ЧАЙ , 50 мл</description>
<param name="Артикул">86031</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Обезвоженная, Раздражение,воспаления( после пилинга), Сухая, Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Глицерин, масло жожоба, цветков календулы, макадамии, авокадо, виноградных косточек экстракты зелёного чая, женьшеня, гинкго билоба.</param>
<param name="Способ применения">Наносить утром ежедневно на всё лицо и шею.</param>
</offer>
<offer id="783" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_lifting_dnevnoy_omolozhenie_anti_age_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4690</price>
<currencyId>RUB</currencyId>
<categoryId>278</categoryId>
<picture>https://styx-online.ru/upload/iblock/012/012e772541da6e0d0e96f052cd93f93b.jpg</picture>
<vendor></vendor>
<name>КРЕМ ЛИФТИНГ ДНЕВНОЙ ОМОЛОЖЕНИЕ (ANTI AGE) , 50 мл.</name>
<description>КРЕМ ЛИФТИНГ ДНЕВНОЙ ОМОЛОЖЕНИЕ (ANTI AGE) , 50 мл.</description>
<param name="Артикул">86611</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Комбинированная, Нормальная, Обезвоженная, Потеря эластичности, Сухая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло макадамии, календулы, жожоба, экстракты&amp;nbsp;гамамелиса, киви, гибискуса и икры, витамины, анти-эйдж формула&amp;nbsp;
STYX-naturcosmetic.</param>
<param name="Способ применения">жедневно по утрам наносить небольшое количество на всё&amp;nbsp;лицо и шею.</param>
</offer>
<offer id="785" available="true">
<url>https://styx-online.ru/catalog/raskhodnye_materialy_1/pompa_dozator_dlya_kremov_500_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>800</price>
<currencyId>RUB</currencyId>
<categoryId>338</categoryId>
<picture>https://styx-online.ru/upload/iblock/e9e/e9eaf168f0bfb63c036217e87d5526a8.png</picture>
<vendor></vendor>
<name>ПОМПА ДОЗАТОР ДЛЯ КРЕМОВ 500 мл</name>
<description>ПОМПА ДОЗАТОР ДЛЯ КРЕМОВ 500 мл</description>
<param name="Артикул">146</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="786" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/pompa_dozator_dlya_masel_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>390</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/a30/a3097925718a7141da9d36de332a82e0.png</picture>
<vendor></vendor>
<name>ПОМПА ДОЗАТОР ДЛЯ МАСЕЛ 1000 мл</name>
<description>ПОМПА ДОЗАТОР ДЛЯ МАСЕЛ 1000 мл</description>
<param name="Артикул">145</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="788" available="true">
<url>https://styx-online.ru/catalog/ukhod_dlya_ruk_i_nog_/krem_dlya_nog_osvezhayushchiy_kartofelnyy_balzam_70_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1065</price>
<currencyId>RUB</currencyId>
<categoryId>297</categoryId>
<picture>https://styx-online.ru/upload/iblock/d42/d4295f6c558ef77f1c0e700c4e0a0c38.png</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ НОГ ОСВЕЖАЮЩИЙ &quot;КАРТОФЕЛЬНЫЙ БАЛЬЗАМ&quot; ,70 мл</name>
<description>КРЕМ ДЛЯ НОГ ОСВЕЖАЮЩИЙ &quot;КАРТОФЕЛЬНЫЙ БАЛЬЗАМ&quot; ,70 мл</description>
<param name="Артикул">18220</param>
<param name="Вес/объем"></param>
<param name="Картинки">https://styx-online.ru/upload/iblock/91b/91b8737821d50cbcc7d70042944dd775.jpg</param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"> масла макадамии, ши, ростков пшеницы, календулы, жожоба, экстракт клубней картофеля, шалфея, эфирные масла гвоздики, корицы, мяты, фарнезол (вытяжка из герани, нероли, иланг-иланга).</param>
<param name="Способ применения">Нанесите необходимое количество крема на чистую кожу ног. ? Оставить до полного впитывания. ?</param>
</offer>
<offer id="790" available="true">
<url>https://styx-online.ru/catalog/krema_i_molochko_/krem_dukhi_dlya_tela_kokos_i_vanil_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1590</price>
<currencyId>RUB</currencyId>
<categoryId>295</categoryId>
<picture>https://styx-online.ru/upload/iblock/f0e/f0ee54d5cf008ebe2bc18bbf45738e2f.png</picture>
<vendor></vendor>
<name>КРЕМ ДУХИ ДЛЯ ТЕЛА &quot;КОКОС И ВАНИЛЬ&quot; , 200 мл</name>
<description>КРЕМ ДУХИ ДЛЯ ТЕЛА &quot;КОКОС И ВАНИЛЬ&quot; , 200 мл</description>
<param name="Артикул">18134</param>
<param name="Вес/объем"></param>
<param name="Картинки">https://styx-online.ru/upload/iblock/68b/68b9ddffb87f9d6e93b887123537689c.jpg</param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Состав: масло кокоса, макадамии, жожоба, ши, сок алоэ-вера, экстракт ванили, ксантан, глюконолактон, кумарин, ароматические спирты.

</param>
<param name="Способ применения">Равномерно наносить на кожу тела после приёма душа.</param>
</offer>
<offer id="792" available="true">
<url>https://styx-online.ru/catalog/dlya_vek_i_gub_/gel_lifting_dlya_vek_s_ikroy_omolozhenie_anti_age_30_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4430</price>
<currencyId>RUB</currencyId>
<categoryId>285</categoryId>
<picture>https://styx-online.ru/upload/iblock/169/169fd1cd08ae672e908b3ced91e4ce52.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ЛИФТИНГ ДЛЯ ВЕК С ИКРОЙ ОМОЛОЖЕНИЕ (ANTI AGE) , 30 мл.</name>
<description>ГЕЛЬ ЛИФТИНГ ДЛЯ ВЕК С ИКРОЙ , ОМОЛОЖЕНИЕ (ANTI AGE) , 30 мл.</description>
<param name="Артикул">86637</param>
<param name="Вес/объем">30</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК">Интенсивное увлажнение, Мешки под глазами, Морщины, Темные круги</param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Ростки пшеницы, виноградная косточка, жожоба, ши, алоэ вера, вытяжка лососевой икры, эхинацея, молочная сыворотка, анти-эйдж формула STYX naturcosmetic.</param>
<param name="Способ применения">Ежедневно утром и вечером наносить тонким слоем на зону вокруг глаз (в том числе и на подвижное веко), сочетая с основным уходом этой линии (дневным и ночным кремом).</param>
</offer>
<offer id="793" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_lifting_nochnoy_omolozhenie_anti_age_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5310</price>
<currencyId>RUB</currencyId>
<categoryId>278</categoryId>
<picture>https://styx-online.ru/upload/iblock/645/6457318ceec4ec23622b3a610de0248b.jpg</picture>
<vendor></vendor>
<name>КРЕМ ЛИФТИНГ НОЧНОЙ ОМОЛОЖЕНИЕ (ANTI AGE) , 50 мл.</name>
<description>КРЕМ ЛИФТИНГ НОЧНОЙ ОМОЛОЖЕНИЕ (ANTI AGE) , 50 мл.</description>
<param name="Артикул">86621</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Купероз, Нормальная, Отечная, Пигментация, Потеря эластичности, Сухая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло жожоба, календулы, макадамии, семян моркови, экстракт икры и морских водорослей, алоэ вера, витамины, анти-эйдж формула STYX</param>
<param name="Способ применения">Нанести на ночь на всё лицо и область шеи.</param>
</offer>
<offer id="794" available="true">
<url>https://styx-online.ru/catalog/zelenyy_chay_/tonik_vitaminnyy_zelenyy_chay_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1420</price>
<currencyId>RUB</currencyId>
<categoryId>304</categoryId>
<picture>https://styx-online.ru/upload/iblock/130/13079baa97f8ead0fc133fe39c05ca70.png</picture>
<vendor></vendor>
<name>ТОНИК ВИТАМИННЫЙ ЗЕЛЕНЫЙ ЧАЙ , 200 мл</name>
<description>ТОНИК ВИТАМИННЫЙ ЗЕЛЕНЫЙ ЧАЙ , 200 мл</description>
<param name="Артикул">86024</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Комбинированная, Обезвоженная, Раздражение,воспаления( после пилинга), Сухая, Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Лосьон-тоник</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">экстракт зеленого чая, ромашки, ананаса, лимона, манго, киви, эфирные масла лаванда, иссоп и жасмин.
</param>
<param name="Способ применения"> ежедневно наносить на лицо, шею и декольте после умывания. По необходимости делать компресс 
(1/1 с холодной водой)
</param>
</offer>
<offer id="798" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/obnovlyayushchiy_sos_applikator_detoks_8_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/a24/a240036373ae62a11affc7ae41816b62.jpg</picture>
<vendor></vendor>
<name>ОБНОВЛЯЮЩИЙ SOS АППЛИКАТОР ДЕТОКС , 8 мл</name>
<description>ОБНОВЛЯЮЩИЙ SOS АППЛИКАТОР ДЕТОКС , 8 мл</description>
<param name="Артикул">85419</param>
<param name="Вес/объем">8</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракт гинкго билоба, масло календулы, масло сои, экстракт зелёного чая, киви, ананаса, эфирное масло жасмина, шалфея, лаванды.
</param>
<param name="Способ применения">Наносится непосредственно на воспалительные (или экстрагированные) элементы.</param>
</offer>
<offer id="799" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/ochishchayushchiy_sos_applikator_detoks_8_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/c01/c01ad8a12c3f2da5acb980034ceb60be.jpg</picture>
<vendor></vendor>
<name>ОЧИЩАЮЩИЙ SOS АППЛИКАТОР ДЕТОКС , 8 мл</name>
<description>ОЧИЩАЮЩИЙ SOS АППЛИКАТОР ДЕТОКС , 8 мл</description>
<param name="Артикул">85409</param>
<param name="Вес/объем">8</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Бензилникотинат, мята перечная, эвкалипт, корица, гвоздика, чайное дерево, ветивер. </param>
<param name="Способ применения">Наносится для локального воздействия на элемент воспаления (травмы).</param>
</offer>
<offer id="800" available="true">
<url>https://styx-online.ru/catalog/syvorotki/syvorotka_dlya_ochishcheniya_por_detoks_30_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/ad2/ad298ca862218f0d04009098a5ba7e24.jpg</picture>
<vendor></vendor>
<name>СЫВОРОТКА ДЛЯ ОЧИЩЕНИЯ ПОР ДЕТОКС , 30 мл</name>
<description>СЫВОРОТКА ДЛЯ ОЧИЩЕНИЯ ПОР ДЕТОКС , 30 мл</description>
<param name="Артикул">85447</param>
<param name="Вес/объем">30</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комедоны (засорение пор , черные точки), Пористый рельеф кожи, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Сыворотка</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Бетаин, глюконолактон, кобылье молоко, экстракт икры лосося, кипарис, экстракт ананаса, можжевельник, экстракт каррагена, экстракт плюща, экстракт ячменя, апельсин сладкий, гиалуроновая кислота, жасмин.</param>
<param name="Способ применения">Применяется как подложка под маски, кремы, пилинги.</param>
</offer>
<offer id="801" available="true">
<url>https://styx-online.ru/catalog/raskhodnye_materialy_1/pompa_dozator_dlya_kremov_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>660</price>
<currencyId>RUB</currencyId>
<categoryId>338</categoryId>
<picture>https://styx-online.ru/upload/iblock/6ce/6cec410dac9c760dcff7d995d134a952.png</picture>
<vendor></vendor>
<name>ПОМПА ДОЗАТОР ДЛЯ КРЕМОВ 1000 мл</name>
<description>ПОМПА ДОЗАТОР ДЛЯ КРЕМОВ 1000 мл</description>
<param name="Артикул">141</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="805" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/gel_lifting_normal_straffungsgel_normal_150ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2360</price>
<currencyId>RUB</currencyId>
<categoryId>298</categoryId>
<picture>https://styx-online.ru/upload/iblock/e99/e99b62aa996319a4f5e5c0f47c5d0ffd.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ЛИФТИНГ НОРМАЛ (Straffungsgel normal) , 150мл</name>
<description>ГЕЛЬ ЛИФТИНГ НОРМАЛ (Straffungsgel normal) , 150мл</description>
<param name="Артикул">071</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Соя, алоэ вера, гингко, эхинацея, шиповник, фукус, гамамелис, витамин Е, никотиновая кислота.</param>
<param name="Способ применения">В программах коррекции фигуры, а также в домашних условиях для активизации обмена веществ (наносить 1-2 раза в день).

Для усиления эффекта рекомендуется применение под пленку.</param>
</offer>
<offer id="808" available="true">
<url>https://styx-online.ru/catalog/raskhodnye_materialy_1/prostynya_15g_m2_v_rulone_s_perforatsiey_shir_800_100m_50sht/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>600</price>
<currencyId>RUB</currencyId>
<categoryId>338</categoryId>
<picture>https://styx-online.ru/upload/iblock/05d/05d314af4ca5a210388e259180edeaae.jpg</picture>
<vendor></vendor>
<name>ПРОСТЫНЯ 15г/м2 В РУЛОНЕ С ПЕРФОРАЦИЕЙ шир.800 (100м/50шт)</name>
<description>ПРОСТЫНЯ 15г/м2 В РУЛОНЕ С ПЕРФОРАЦИЕЙ шир.800 (100м/50шт)</description>
<param name="Артикул">0302-2017</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="810" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_vodorosli_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4814.4</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/9c2/9c24d170a61960a5938382876d284562.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ВОДОРОСЛИ , 400 мл</name>
<description>ЛОСЬОН ВОДОРОСЛИ , 400 мл</description>
<param name="Артикул">82039</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Детокс, очищение от шлаков, Контроль аппетита, Отёки</param>
<param name="Состав">Талая вода, экстракты фукуса, календулы, хмеля, луговых трав, эфирное масло апельсина, трех видов мяты, гвоздики, ветивера.</param>
<param name="Способ применения">Для&amp;nbsp; профессионального использования в процедурах &quot;виски-пеленаний&quot;
 </param>
</offer>
<offer id="835" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_tsentella_intensiv_400ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5416.2</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/34e/34ef4e157bca36252b6ab6b3d46957e2.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ЦЕНТЕЛЛА ИНТЕНСИВ , 400мл</name>
<description>ЛОСЬОН ЦЕНТЕЛЛА ИНТЕНСИВ , 400мл</description>
<param name="Артикул">82069</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты: центеллы азиатской, плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, морские водоросли, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца), никотиновая кислота.</param>
<param name="Способ применения">Для  профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="837" available="true">
<url>https://styx-online.ru/catalog/dlya_i_posle_zagara/gel_universalnyy_zazhivlyayushchiy_aloe_vera_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2120</price>
<currencyId>RUB</currencyId>
<categoryId>295</categoryId>
<picture>https://styx-online.ru/upload/iblock/154/154b4e372e93eb3e40988441cfca3813.png</picture>
<vendor></vendor>
<name>ГЕЛЬ УНИВЕРСАЛЬНЫЙ ЗАЖИВЛЯЮЩИЙ &quot;АЛОЭ ВЕРА&quot; , 50 мл</name>
<description>ГЕЛЬ УНИВЕРСАЛЬНЫЙ ЗАЖИВЛЯЮЩИЙ &quot;АЛОЭ ВЕРА&quot; , 50 мл</description>
<param name="Артикул">85501</param>
<param name="Вес/объем"></param>
<param name="Картинки">https://styx-online.ru/upload/iblock/23b/23b57ba9423f8fb86da26d6bc2a62ee6.png</param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">&amp;nbsp;Сок алоэ 88%, вода, ксантан, экстракт ирландского мха, фарнезол (эфирные масла лаванды, иланга, нероли)</param>
<param name="Способ применения">&amp;nbsp;Тонким слоем наносить на проблемные участки кожи лица и тела. При острой проблеме чем чаще, тем лучше (от 3 до 10 раз в день).</param>
</offer>
<offer id="839" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_roza_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>29910</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/5b2/5b287d2b7499ad9c65ae6bf0d5daf11c.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО РОЗА, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО РОЗА, 10 мл</description>
<param name="Артикул">5411</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска</param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Сухая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Сосудистый рисунок, Чувствительная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК">Темные круги</param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Головная боль, Головокружения, Депрессии, Нормализация пищеварения</param>
<param name="Состав">100% эфирное масло &amp;nbsp;розы. &amp;nbsp;(сырье -Болгария)</param>
<param name="Способ применения">Масло анфлеражное, абсолютное масло. Ввиду его высокой концентрации требуется разбавление маслом жожоба соответственно 1:5 и использование разбавленной смеси.
 
 &amp;nbsp;&amp;nbsp;
 Ингаляции: горячие (3 - 5 мин) - 1 к.; холодные - 3 - 5 мин;&amp;nbsp;
 
 Аромакурительницы: 2 - 3 к. на 15 кв.м;&amp;nbsp;
 
 Аромамедальоны: 1 к.;&amp;nbsp;
 
 Полоскания: 1 к. с 0,5 ч. л. эмульгатора (сода, соль, мед) на стакан теплой воды;&amp;nbsp;
 
 При головной боли: смешать 3 к. розы и 10 к. базисного масла, нанести на область лба, проекции сонных артерий, затылочные бугры, височные ямки, помассировать (провести процедуру 2 - 3 раза с перерывом 10-15 мин);&amp;nbsp;
 
 Ванны: общие – 2 - 3 к.; теплые сидячие – 1 - 2 к.;&amp;nbsp;
 
 Массаж, растирания: 5 - 6 к. на 10 мл транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные - на область травмы, боли, воспаления, ожога (4 к. на 10 мл масла); холодный обезболивающий, успокаивающий компресс (2 к. на 500 мл): намочить и отжать мягкую ткань, прикладывать к области боли (лоб – при головной боли, грудная клетка - при сердцебиениях и т. д), ожога, при гипертонии можно протирать все тело или делать обертывания;&amp;nbsp;
 
 Капли в нос, в ухо: 3 - 4 к. на 2 - 3 ч. л. масла зверобоя, закапывать по 3 - 4 к. в каждое отверстие с периодичностью 1 раз в 1,5 - 2 ч;&amp;nbsp;
 
 Обогащение косметических средств: 4 - 5 к. на 5 мл основы;&amp;nbsp;
 
 Локальные аппликации: 3 - 4 к. смешать с 10 к масла зверобоя или виноградных косточек, наносить на элемент воспаления;&amp;nbsp;
 
 При лечении ожогов: на пораженную область наносить смесь 5 к. розы с 20 к. масла виноградных косточек или макадамии;&amp;nbsp;
 
 Косметический лед: 3 - 4 к. смешать с медом или косметическими сливками (1 ч. л.), развести в 200 мл воды и порционно заморозить.&amp;nbsp;
 
 Протирать лицо, шею, область декольте утром и вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в мед, варенье (4 - 5 к. на 100 мл), применять по 1 ч. л. смеси 1 - 4 раза в день. Запивать кефиром, ряженкой, мацони, айраном, соком с мякотью;&amp;nbsp;
 
 Аромарасчесывание: наносить на зубцы расчески.&amp;nbsp;
 
 
 
&amp;nbsp;</param>
</offer>
<offer id="840" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_roza_1_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3450</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/f9a/f9a943407853a5ca3fbee379f9b906c7.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО РОЗА, 1 мл</name>
<description>ЭФИРНОЕ МАСЛО РОЗА, 1 мл</description>
<param name="Артикул">541</param>
<param name="Вес/объем">1</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска</param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Сухая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Сосудистый рисунок, Сухая кожа, Шелушение</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК">Темные круги</param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Головная боль, Головокружения, Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло розы (сырье -Болгария)</param>
<param name="Способ применения">Масло анфлеражное, абсолютное масло. Ввиду его высокой концентрации требуется разбавление маслом жожоба соответственно 1:5 и использование разбавленной смеси.
 &amp;nbsp; &amp;nbsp;
 Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 3–5&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 2–3 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 При головной боли: смешать 3 к&amp;nbsp;розы и&amp;nbsp;10 к&amp;nbsp;базисного масла, нанести на&amp;nbsp;область лба, проекции сонных артерий, затылочные бугры, височные ямки, помассировать (провести процедуру 2–3 раза с&amp;nbsp;перерывом 10–15&amp;nbsp;мин);&amp;nbsp;
 
 Массаж, растирания: 5–6 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травмы, боли, воспаления, ожога (4 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла); холодный обезболивающий, успокаивающий компресс (2 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл): намочить и&amp;nbsp;отжать мягкую ткань, прикладывать к&amp;nbsp;области боли (лоб&amp;nbsp;— при головной боли, грудная клетка&amp;nbsp;— при сердцебиениях и т. д.), ожога, при гипертонии можно протирать все тело или делать обертывания;&amp;nbsp;
 
 Капли в&amp;nbsp;нос, в&amp;nbsp;ухо: 3–4 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждое отверстие с&amp;nbsp;периодичностью 1 раз в&amp;nbsp;1,5–2 часа;&amp;nbsp;
 
 Обогащение косметических средств: 4–5 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Локальные аппликации: 3–4 к&amp;nbsp;смешать с&amp;nbsp;10 к&amp;nbsp;масла зверобоя или виноградных косточек, наносить на&amp;nbsp;элемент воспаления;&amp;nbsp;
 
 При лечении ожогов: на&amp;nbsp;пораженную область наносить смесь 5 к&amp;nbsp;розы с&amp;nbsp;20 к&amp;nbsp;масла виноградных косточек или макадамии;&amp;nbsp;
 
 Косметический лед: 3–4 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать кефиром, ряженкой, мацони, айраном, соком с&amp;nbsp;мякотью;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
 
 
 &amp;nbsp;
 </param>
</offer>
<offer id="842" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_sandal_1_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1860</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/841/8414504d70eb1d81704666f4e416962e.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО САНДАЛ, 1 мл</name>
<description>ЭФИРНОЕ МАСЛО САНДАЛ, 1 мл</description>
<param name="Артикул">520</param>
<param name="Вес/объем">1</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Сухая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Сухая кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Бессонница, Детокс, очищение от шлаков, Расширение вен, Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло «Сандал»&amp;nbsp;</param>
<param name="Способ применения">Ингаляции: горячие (7–10&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 3–4&amp;nbsp;мин;&amp;nbsp;
 Аромакурительницы: 5–8 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м?;&amp;nbsp;
 Аромамедальоны: 1 к;&amp;nbsp;
 Полоскания: 2 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 Ванны: общие&amp;nbsp;— 6–7 к; теплые сидячие&amp;nbsp;— 3–5 к;&amp;nbsp;
 Массаж, растирания: 2–6 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Эротический массаж и&amp;nbsp;интим-косметика: 10 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, боли (3 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;базисного масла);&amp;nbsp;
 
 Примочки: 5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;теплой или холодной воды, смочить салфетку, отжать, прикладывать на&amp;nbsp;участки вокруг глаз (при отеках, синяках под глазами, морщинках), области раздражения. Можно использовать как омолаживающий компресс;&amp;nbsp;
 
 Косметические маски: 5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;масла жожоба, ростков пшеницы, виноградных косточек;&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 1 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Косметический лед: 5 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (5–7 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками. Обогащение вина: 3–5 к&amp;nbsp;на&amp;nbsp;750&amp;nbsp;мл;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
 </param>
</offer>
<offer id="843" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_sandal_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>14870</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/d5b/d5b7d9a13502e1eef81b8a50f82aff83.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО САНДАЛ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО САНДАЛ, 10 мл</description>
<param name="Артикул">15440</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">100% эфирное масло «Сандал»&amp;nbsp;
 
 </param>
<param name="Способ применения">Ингаляции: горячие (7–10&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 3–4&amp;nbsp;мин;&amp;nbsp;
 Аромакурительницы: 5–8 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 Аромамедальоны: 1 к;&amp;nbsp;
 Полоскания: 2 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 Ванны: общие&amp;nbsp;— 6–7 к; теплые сидячие&amp;nbsp;— 3–5 к;&amp;nbsp;
 Массаж, растирания: 2–6 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Эротический массаж и&amp;nbsp;интим-косметика: 10 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, боли (3 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;базисного масла);&amp;nbsp;
 
 Примочки: 5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;теплой или холодной воды, смочить салфетку, отжать, прикладывать на&amp;nbsp;участки вокруг глаз (при отеках, синяках под глазами, морщинках), области раздражения. Можно использовать как омолаживающий компресс;&amp;nbsp;
 
 Косметические маски: 5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;масла жожоба, ростков пшеницы, виноградных косточек;&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 1 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Косметический лед: 5 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (5–7 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками. Обогащение вина: 3–5 к&amp;nbsp;на&amp;nbsp;750&amp;nbsp;мл;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="844" available="true">
<url>https://styx-online.ru/catalog/aromalampy_/termolampa_aromaderm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>500</price>
<currencyId>RUB</currencyId>
<categoryId>275</categoryId>
<picture>https://styx-online.ru/upload/iblock/c3d/c3d2189f3f2aee2e12b540b426b712f4.jpg</picture>
<vendor></vendor>
<name>ТЕРМОЛАМПА &quot;АРОМАДЕРМ&quot;</name>
<description>ТЕРМОЛАМПА &quot;АРОМАДЕРМ&quot;</description>
<param name="Артикул">33370</param>
<param name="Вес/объем">302</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="845" available="true">
<url>https://styx-online.ru/catalog/aromalampy_/aromalampa_kioto_/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1060</price>
<currencyId>RUB</currencyId>
<categoryId>275</categoryId>
<picture>https://styx-online.ru/upload/iblock/137/137156f58c6bac3efcc198303cecc1a5.jpg</picture>
<vendor></vendor>
<name>АРОМАЛАМПА &quot;КИОТО&quot;</name>
<description>АРОМАЛАМПА &quot;КИОТО&quot;</description>
<param name="Артикул">33384</param>
<param name="Вес/объем">430</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="847" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/tsellogel_ekstra_supersilnyy_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2700</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/b31/b31197812a893e4f6b82aeb02fab95e9.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ ЭКСТРА СУПЕРСИЛЬНЫЙ , 150 мл</name>
<description>ЦЕЛЛОГЕЛЬ ЭКСТРА СУПЕРСИЛЬНЫЙ , 150 мл</description>
<param name="Артикул">81043</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ</param>
<param name="Состав">Экстракты: плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, морских водорослей, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца, розы), никотиновая кислота.
 </param>
<param name="Способ применения">Только для профессионального использования: для кожи 3–4 типа в технике термообёртываний (горячих).&amp;nbsp;
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна).&amp;nbsp;
 
 После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.
 </param>
</offer>
<offer id="848" available="true">
<url>https://styx-online.ru/catalog/dlya_i_posle_zagara/krem_aloe_okhlazhdayushchiy_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2360</price>
<currencyId>RUB</currencyId>
<categoryId>298</categoryId>
<picture>https://styx-online.ru/upload/iblock/329/32961f09a1c54f4908914ec2eb3bb9fe.png</picture>
<vendor></vendor>
<name>КРЕМ АЛОЭ ОХЛАЖДАЮЩИЙ , 150 мл</name>
<description>КРЕМ АЛОЭ ОХЛАЖДАЮЩИЙ , 150 мл</description>
<param name="Артикул">83013</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Алоэ, глицерин, масла календулы, авокадо, макадамии, сои, эфирные масла лаванды, герани, иссопа, ромашки голубой.</param>
<param name="Способ применения">Подходит для ежедневного домашнего ухода за телом, а также в качестве защитного средства для чувствительных зон перед нанесением агрессивных термоактивных препаратов.           
? </param>
</offer>
<offer id="849" available="true">
<url>https://styx-online.ru/catalog/smesi_efirnykh_masel/smes_efirnykh_masel_noch_lyubvi_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/76d/76dd9d5654a4b881e8933c9792d27871.jpg</picture>
<vendor></vendor>
<name>СМЕСЬ ЭФИРНЫХ МАСЕЛ НОЧЬ ЛЮБВИ, 10 мл</name>
<description>СМЕСЬ ЭФИРНЫХ МАСЕЛ НОЧЬ ЛЮБВИ, 10 мл</description>
<param name="Артикул">16120</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Сухие</param>
<param name="ДЛЯ ЛИЦА">Сухая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Эфирные масла горького апельсина (бигардии), иланг-иланга, пальмарозы, ветивера, чёрного перца.</param>
<param name="Способ применения">Методы применения композиции 100 % эфирных масел аналогичны методам применения 100 % «моно» эфирных масел.&amp;nbsp;
 Методов применения много (около 30), вот самые основные и популярные:&amp;nbsp;
 
 • Внутреннее употребление
 1-2 капли эфирной композиции смешать с 1 ч. л. эмульгатора (базовое масло холодного отжима, мёд, молоко, варенье, печенье, сахар и т. д.), запивать стаканом воды. 1-2 раза в день.
 
 • Кулинарное применение&amp;nbsp;
 Использовать для ароматизации чая (5-7 капель на 100 г сухой заварки); для ароматизации вина (5-7 капель на бутылку вина, растворять эфирное масло в данном случае с помощью эмульгатора – мёда или сахара); в качестве пикантной добавки и приправы в еду (1-4 капли в зависимости от блюда).
 
 &amp;nbsp;• Ванны&amp;nbsp;
 Смешать 6-10 капель эфирной композиции с 30-60 г/мл эмульгатора (соль, сода, мёд, агар-агар, пена для ванн, сливки, молоко, крахмал и т. п.), после чего добавить смесь в воду. Температурный режим ванны подбирать индивидуально! Следует помнить, что ванны с водой, имеющей температуру тела (36-37 С), не имеют противопоказаний!&amp;nbsp;
 
 • Ингаляции – вдыхание летучих веществ через нос и рот.&amp;nbsp;
 Холодные ингаляции: аромакурительницы – в верхнюю чашу аромалампы налить тёплую воду, добавить эфирное масло из расчёта 5 капель на 15 кв. м., в нижний ярус поставить зажжённую свечу. Время ингаляции 20 минут - 4 ч, увеличивать его постепенно. Аромамедальоны – 2-3 капли эфирного масла капнуть в отверстие в медальоне и носить на себе необходимое время; нанести 1-2 капли эфирного масла на ладони, растереть и сделать 15-20 глубоких вдохов.
 
 Горячие ингаляции: в посуду с широким горлом налить кипяток. Накрыть голову полотенцем и после этого добавить не более 2 капель эфирного масла или композиции в кипяток. Глубоко вдыхать аромат в течении 3-10 минут. Во время ингаляции ВСЕГДА закрывать глаза!&amp;nbsp;
 
 • Бани, сауны – поставить рядом с источником тепла термостойкий сосуд (50-100 мл) с широким горлышком, наполненный водой с добавлением эфирного масла или композиции (до 10 капель на 15 кв. м.), этой смесью также можно окропить деревянные лавки и стены. Непосредственно на раскалённые камни наносить эфирные масла нельзя!&amp;nbsp;
 
 • Массаж – для приготовления массажной смеси следует исходить из дозировки 3-5 капель на 10 мл основы. Желательно всегда подогревать готовое массажное масло.&amp;nbsp;
 
 &amp;nbsp;• Обёртывания – в ёмкость (2-3 л) налить тёплую воду и добавить в неё 15 капель эфирного масла или композиции эфирных масел, после чего смочить в ароматической воде простыню или полотенце, и завернуть себя во влажную ткань. Время процедуры – 2-5 минут.&amp;nbsp;
 
 А также: ополаскивания, воздействие на биоактивные зоны, клизмирование, ванночки, компрессы, рефлексомассаж, растирания, полоскания, капли, тампонада, спринцевание, примочки, аппликации, ароматическая соль, умывание, расчёсывание, дезинфекция дома, моющие средства, пятновыводители, ароматизация гардероба, репеллентные или инсектицидные средства, уход за домашними животными.</param>
</offer>
<offer id="850" available="true">
<url>https://styx-online.ru/catalog/smesi_efirnykh_masel/smes_efirnykh_masel_ot_khrapa_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/3ac/3accd11683c0432404328d935ee12178.jpg</picture>
<vendor></vendor>
<name>СМЕСЬ ЭФИРНЫХ МАСЕЛ ОТ ХРАПА, 10 мл</name>
<description>СМЕСЬ ЭФИРНЫХ МАСЕЛ ОТ ХРАПА, 10 мл</description>
<param name="Артикул">16110</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Отечная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Бессонница, Головная боль, При кашле</param>
<param name="Состав">Эфирные масла мяты, лаванды, эвкалипта, розмарина, чабреца.</param>
<param name="Способ применения">Методы применения композиции 100 % эфирных масел аналогичны методам применения 100 % «моно» эфирных масел.&amp;nbsp;
 Методов применения много (около 30), вот самые основные и популярные:&amp;nbsp;
 
 • Внутреннее употребление
 1-2 капли эфирной композиции смешать с 1 ч. л. эмульгатора (базовое масло холодного отжима, мёд, молоко, варенье, печенье, сахар и т. д.), запивать стаканом воды. 1-2 раза в день.
 
 • Кулинарное применение&amp;nbsp;
 Использовать для ароматизации чая (5-7 капель на 100 г сухой заварки); для ароматизации вина (5-7 капель на бутылку вина, растворять эфирное масло в данном случае с помощью эмульгатора – мёда или сахара); в качестве пикантной добавки и приправы в еду (1-4 капли в зависимости от блюда).
 
 &amp;nbsp;• Ванны&amp;nbsp;
 Смешать 6-10 капель эфирной композиции с 30-60 г/мл эмульгатора (соль, сода, мёд, агар-агар, пена для ванн, сливки, молоко, крахмал и т. п.), после чего добавить смесь в воду. Температурный режим ванны подбирать индивидуально! Следует помнить, что ванны с водой, имеющей температуру тела (36-37 С), не имеют противопоказаний!&amp;nbsp;
 
 • Ингаляции – вдыхание летучих веществ через нос и рот.&amp;nbsp;
 Холодные ингаляции: аромакурительницы – в верхнюю чашу аромалампы налить тёплую воду, добавить эфирное масло из расчёта 5 капель на 15 кв. м., в нижний ярус поставить зажжённую свечу. Время ингаляции 20 минут - 4 ч, увеличивать его постепенно. Аромамедальоны – 2-3 капли эфирного масла капнуть в отверстие в медальоне и носить на себе необходимое время; нанести 1-2 капли эфирного масла на ладони, растереть и сделать 15-20 глубоких вдохов.
 
 Горячие ингаляции: в посуду с широким горлом налить кипяток. Накрыть голову полотенцем и после этого добавить не более 2 капель эфирного масла или композиции в кипяток. Глубоко вдыхать аромат в течении 3-10 минут. Во время ингаляции ВСЕГДА закрывать глаза!&amp;nbsp;
 
 • Бани, сауны – поставить рядом с источником тепла термостойкий сосуд (50-100 мл) с широким горлышком, наполненный водой с добавлением эфирного масла или композиции (до 10 капель на 15 кв. м.), этой смесью также можно окропить деревянные лавки и стены. Непосредственно на раскалённые камни наносить эфирные масла нельзя!&amp;nbsp;
 
 • Массаж – для приготовления массажной смеси следует исходить из дозировки 3-5 капель на 10 мл основы. Желательно всегда подогревать готовое массажное масло.&amp;nbsp;
 
 &amp;nbsp;• Обёртывания – в ёмкость (2-3 л) налить тёплую воду и добавить в неё 15 капель эфирного масла или композиции эфирных масел, после чего смочить в ароматической воде простыню или полотенце, и завернуть себя во влажную ткань. Время процедуры – 2-5 минут.&amp;nbsp;
 
 А также: ополаскивания, воздействие на биоактивные зоны, клизмирование, ванночки, компрессы, рефлексомассаж, растирания, полоскания, капли, тампонада, спринцевание, примочки, аппликации, ароматическая соль, умывание, расчёсывание, дезинфекция дома, моющие средства, пятновыводители, ароматизация гардероба, репеллентные или инсектицидные средства, уход за домашними животными.</param>
</offer>
<offer id="851" available="true">
<url>https://styx-online.ru/catalog/smesi_efirnykh_masel/smes_efirnykh_masel_romeo_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/1a0/1a05cbceac616e25c4225d4d37dc437b.jpg</picture>
<vendor></vendor>
<name>СМЕСЬ ЭФИРНЫХ МАСЕЛ РОМЕО, 10 мл</name>
<description>СМЕСЬ ЭФИРНЫХ МАСЕЛ РОМЕО, 10 мл</description>
<param name="Артикул">16140</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Окрашенные, От выпадения</param>
<param name="ДЛЯ ЛИЦА">30+, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Апатия</param>
<param name="Состав">Эфирные масла пачули, бигардии, сандала, перца, ветивера, мускатного ореха.</param>
<param name="Способ применения">Методы применения композиции 100 % эфирных масел аналогичны методам применения 100 % «моно» эфирных масел.&amp;nbsp;
 Методов применения много (около 30), вот самые основные и популярные:&amp;nbsp;
 
 • Внутреннее употребление
 1-2 капли эфирной композиции смешать с 1 ч. л. эмульгатора (базовое масло холодного отжима, мёд, молоко, варенье, печенье, сахар и т. д.), запивать стаканом воды. 1-2 раза в день.
 
 • Кулинарное применение&amp;nbsp;
 Использовать для ароматизации чая (5-7 капель на 100 г сухой заварки); для ароматизации вина (5-7 капель на бутылку вина, растворять эфирное масло в данном случае с помощью эмульгатора – мёда или сахара); в качестве пикантной добавки и приправы в еду (1-4 капли в зависимости от блюда).
 
 &amp;nbsp;• Ванны&amp;nbsp;
 Смешать 6-10 капель эфирной композиции с 30-60 г/мл эмульгатора (соль, сода, мёд, агар-агар, пена для ванн, сливки, молоко, крахмал и т. п.), после чего добавить смесь в воду. Температурный режим ванны подбирать индивидуально! Следует помнить, что ванны с водой, имеющей температуру тела (36-37 С), не имеют противопоказаний!&amp;nbsp;
 
 • Ингаляции – вдыхание летучих веществ через нос и рот.&amp;nbsp;
 Холодные ингаляции: аромакурительницы – в верхнюю чашу аромалампы налить тёплую воду, добавить эфирное масло из расчёта 5 капель на 15 кв. м., в нижний ярус поставить зажжённую свечу. Время ингаляции 20 минут - 4 ч, увеличивать его постепенно. Аромамедальоны – 2-3 капли эфирного масла капнуть в отверстие в медальоне и носить на себе необходимое время; нанести 1-2 капли эфирного масла на ладони, растереть и сделать 15-20 глубоких вдохов.
 
 Горячие ингаляции: в посуду с широким горлом налить кипяток. Накрыть голову полотенцем и после этого добавить не более 2 капель эфирного масла или композиции в кипяток. Глубоко вдыхать аромат в течении 3-10 минут. Во время ингаляции ВСЕГДА закрывать глаза!&amp;nbsp;
 
 • Бани, сауны – поставить рядом с источником тепла термостойкий сосуд (50-100 мл) с широким горлышком, наполненный водой с добавлением эфирного масла или композиции (до 10 капель на 15 кв. м.), этой смесью также можно окропить деревянные лавки и стены. Непосредственно на раскалённые камни наносить эфирные масла нельзя!&amp;nbsp;
 
 • Массаж – для приготовления массажной смеси следует исходить из дозировки 3-5 капель на 10 мл основы. Желательно всегда подогревать готовое массажное масло.&amp;nbsp;
 
 &amp;nbsp;• Обёртывания – в ёмкость (2-3 л) налить тёплую воду и добавить в неё 15 капель эфирного масла или композиции эфирных масел, после чего смочить в ароматической воде простыню или полотенце, и завернуть себя во влажную ткань. Время процедуры – 2-5 минут.&amp;nbsp;
 
 А также: ополаскивания, воздействие на биоактивные зоны, клизмирование, ванночки, компрессы, рефлексомассаж, растирания, полоскания, капли, тампонада, спринцевание, примочки, аппликации, ароматическая соль, умывание, расчёсывание, дезинфекция дома, моющие средства, пятновыводители, ароматизация гардероба, репеллентные или инсектицидные средства, уход за домашними животными.</param>
</offer>
<offer id="852" available="true">
<url>https://styx-online.ru/catalog/smesi_efirnykh_masel/smes_efirnykh_masel_svet_dushi_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>https://styx-online.ru/upload/iblock/11d/11d6ef76c4e8e352e7dc5240e6b78c8a.jpg</picture>
<vendor></vendor>
<name>СМЕСЬ ЭФИРНЫХ МАСЕЛ СВЕТ ДУШИ, 10 мл</name>
<description>СМЕСЬ ЭФИРНЫХ МАСЕЛ СВЕТ ДУШИ, 10 мл</description>
<param name="Артикул">16150</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Окрашенные, Поврежденные, Пористые</param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Детокс, очищение от шлаков</param>
<param name="Состав">Эфирные масла апельсина, ели, ладана, лаванды, цитронеллы.</param>
<param name="Способ применения">Методы применения композиции 100 % эфирных масел аналогичны методам применения 100 % «моно» эфирных масел.&amp;nbsp;
 Методов применения много (около 30), вот самые основные и популярные:&amp;nbsp;
 
 • Внутреннее употребление
 1-2 капли эфирной композиции смешать с 1 ч. л. эмульгатора (базовое масло холодного отжима, мёд, молоко, варенье, печенье, сахар и т. д.), запивать стаканом воды. 1-2 раза в день.
 
 • Кулинарное применение&amp;nbsp;
 Использовать для ароматизации чая (5-7 капель на 100 г сухой заварки); для ароматизации вина (5-7 капель на бутылку вина, растворять эфирное масло в данном случае с помощью эмульгатора – мёда или сахара); в качестве пикантной добавки и приправы в еду (1-4 капли в зависимости от блюда).
 
 &amp;nbsp;• Ванны&amp;nbsp;
 Смешать 6-10 капель эфирной композиции с 30-60 г/мл эмульгатора (соль, сода, мёд, агар-агар, пена для ванн, сливки, молоко, крахмал и т. п.), после чего добавить смесь в воду. Температурный режим ванны подбирать индивидуально! Следует помнить, что ванны с водой, имеющей температуру тела (36-37 С), не имеют противопоказаний!&amp;nbsp;
 
 • Ингаляции – вдыхание летучих веществ через нос и рот.&amp;nbsp;
 Холодные ингаляции: аромакурительницы – в верхнюю чашу аромалампы налить тёплую воду, добавить эфирное масло из расчёта 5 капель на 15 кв. м., в нижний ярус поставить зажжённую свечу. Время ингаляции 20 минут - 4 ч, увеличивать его постепенно. Аромамедальоны – 2-3 капли эфирного масла капнуть в отверстие в медальоне и носить на себе необходимое время; нанести 1-2 капли эфирного масла на ладони, растереть и сделать 15-20 глубоких вдохов.
 
 Горячие ингаляции: в посуду с широким горлом налить кипяток. Накрыть голову полотенцем и после этого добавить не более 2 капель эфирного масла или композиции в кипяток. Глубоко вдыхать аромат в течении 3-10 минут. Во время ингаляции ВСЕГДА закрывать глаза!&amp;nbsp;
 
 • Бани, сауны – поставить рядом с источником тепла термостойкий сосуд (50-100 мл) с широким горлышком, наполненный водой с добавлением эфирного масла или композиции (до 10 капель на 15 кв. м.), этой смесью также можно окропить деревянные лавки и стены. Непосредственно на раскалённые камни наносить эфирные масла нельзя!&amp;nbsp;
 
 • Массаж – для приготовления массажной смеси следует исходить из дозировки 3-5 капель на 10 мл основы. Желательно всегда подогревать готовое массажное масло.&amp;nbsp;
 
 &amp;nbsp;• Обёртывания – в ёмкость (2-3 л) налить тёплую воду и добавить в неё 15 капель эфирного масла или композиции эфирных масел, после чего смочить в ароматической воде простыню или полотенце, и завернуть себя во влажную ткань. Время процедуры – 2-5 минут.&amp;nbsp;
 
 А также: ополаскивания, воздействие на биоактивные зоны, клизмирование, ванночки, компрессы, рефлексомассаж, растирания, полоскания, капли, тампонада, спринцевание, примочки, аппликации, ароматическая соль, умывание, расчёсывание, дезинфекция дома, моющие средства, пятновыводители, ароматизация гардероба, репеллентные или инсектицидные средства, уход за домашними животными.</param>
</offer>
<offer id="854" available="true">
<url>https://styx-online.ru/catalog/smesi_efirnykh_masel/smes_efirnykh_masel_fortuna_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>https://styx-online.ru/upload/iblock/930/930ae78f57bc95461599d5a8d4de25f5.jpg</picture>
<vendor></vendor>
<name>СМЕСЬ ЭФИРНЫХ МАСЕЛ ФОРТУНА, 10 мл</name>
<description>СМЕСЬ ЭФИРНЫХ МАСЕЛ ФОРТУНА, 10 мл</description>
<param name="Артикул">16130</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся, От выпадения, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Укусы насекомых</param>
<param name="Состав">Эфирные масла иланг-иланга, розового дерева, сандала, базилика, гвоздики.&amp;nbsp;
 </param>
<param name="Способ применения">Методы применения композиции 100 % эфирных масел аналогичны методам применения 100 % «моно» эфирных масел.&amp;nbsp;
 Методов применения много (около 30), вот самые основные и популярные:&amp;nbsp;
 
 • Внутреннее употребление
 1-2 капли эфирной композиции смешать с 1 ч. л. эмульгатора (базовое масло холодного отжима, мёд, молоко, варенье, печенье, сахар и т. д.), запивать стаканом воды. 1-2 раза в день.
 
 • Кулинарное применение&amp;nbsp;
 Использовать для ароматизации чая (5-7 капель на 100 г сухой заварки); для ароматизации вина (5-7 капель на бутылку вина, растворять эфирное масло в данном случае с помощью эмульгатора – мёда или сахара); в качестве пикантной добавки и приправы в еду (1-4 капли в зависимости от блюда).
 
 &amp;nbsp;• Ванны&amp;nbsp;
 Смешать 6-10 капель эфирной композиции с 30-60 г/мл эмульгатора (соль, сода, мёд, агар-агар, пена для ванн, сливки, молоко, крахмал и т. п.), после чего добавить смесь в воду. Температурный режим ванны подбирать индивидуально! Следует помнить, что ванны с водой, имеющей температуру тела (36-37 С), не имеют противопоказаний!&amp;nbsp;
 
 • Ингаляции – вдыхание летучих веществ через нос и рот.&amp;nbsp;
 Холодные ингаляции: аромакурительницы – в верхнюю чашу аромалампы налить тёплую воду, добавить эфирное масло из расчёта 5 капель на 15 кв. м., в нижний ярус поставить зажжённую свечу. Время ингаляции 20 минут - 4 ч, увеличивать его постепенно. Аромамедальоны – 2-3 капли эфирного масла капнуть в отверстие в медальоне и носить на себе необходимое время; нанести 1-2 капли эфирного масла на ладони, растереть и сделать 15-20 глубоких вдохов.
 
 Горячие ингаляции: в посуду с широким горлом налить кипяток. Накрыть голову полотенцем и после этого добавить не более 2 капель эфирного масла или композиции в кипяток. Глубоко вдыхать аромат в течении 3-10 минут. Во время ингаляции ВСЕГДА закрывать глаза!&amp;nbsp;
 
 • Бани, сауны – поставить рядом с источником тепла термостойкий сосуд (50-100 мл) с широким горлышком, наполненный водой с добавлением эфирного масла или композиции (до 10 капель на 15 кв. м.), этой смесью также можно окропить деревянные лавки и стены. Непосредственно на раскалённые камни наносить эфирные масла нельзя!&amp;nbsp;
 
 • Массаж – для приготовления массажной смеси следует исходить из дозировки 3-5 капель на 10 мл основы. Желательно всегда подогревать готовое массажное масло.&amp;nbsp;
 
 &amp;nbsp;• Обёртывания – в ёмкость (2-3 л) налить тёплую воду и добавить в неё 15 капель эфирного масла или композиции эфирных масел, после чего смочить в ароматической воде простыню или полотенце, и завернуть себя во влажную ткань. Время процедуры – 2-5 минут.&amp;nbsp;
 
 А также: ополаскивания, воздействие на биоактивные зоны, клизмирование, ванночки, компрессы, рефлексомассаж, растирания, полоскания, капли, тампонада, спринцевание, примочки, аппликации, ароматическая соль, умывание, расчёсывание, дезинфекция дома, моющие средства, пятновыводители, ароматизация гардероба, репеллентные или инсектицидные средства, уход за домашними животными.</param>
</offer>
<offer id="855" available="true">
<url>https://styx-online.ru/catalog/balzamy_maski_i_sprei_dlya_volos/balzam_dlya_volos_restavriruyushchiy_khenna_bestsvetnyy_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>840</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/15d/15d16dd1fd2d64123c06956ff849da58.jpg</picture>
<vendor></vendor>
<name>БАЛЬЗАМ ДЛЯ ВОЛОС РЕСТАВРИРУЮЩИЙ ХЕННА БЕСЦВЕТНЫЙ , 150 мл.</name>
<description>БАЛЬЗАМ ДЛЯ ВОЛОС РЕСТАВРИРУЮЩИЙ ХЕННА БЕСЦВЕТНЫЙ , 150 мл.</description>
<param name="Артикул">14523</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Ломкие, секущиеся, От выпадения, Поврежденные, Пористые, Сухие</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Настои хны, солодки, шиповника; выжимки сои, корзинок подсолнечника, хмеля; пчелиный и&amp;nbsp;пальмовый воск; смола сосны и&amp;nbsp;кедра; ланолин; масла макадамии, миндальное, конопляное, репейное; вытяжки из&amp;nbsp;пшеничных, соевых и&amp;nbsp;ржаных семян; эфирные масла апельсина, герани, сосны, лаванды, ромашки.</param>
<param name="Способ применения">Нанести на влажные волосы на 2-5 минут, смыть теплой водой.
 
 Возможно использование как маски для волос, нанести на очищенные волосы на 30 минут. &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;
 
 </param>
</offer>
<offer id="857" available="true">
<url>https://styx-online.ru/catalog/dlya_vanny_i_dusha_/gel_dlya_dusha_mandarin_apelsin_250_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>294</categoryId>
<picture>https://styx-online.ru/upload/iblock/f64/f6489fda45f5e722357cb3f14763ca53.png</picture>
<vendor></vendor>
<name>ГЕЛЬ ДЛЯ ДУША &quot;МАНДАРИН АПЕЛЬСИН&quot; ,  250 мл</name>
<description>ГЕЛЬ ДЛЯ ДУША &quot;МАНДАРИН АПЕЛЬСИН&quot; ,  250 мл</description>
<param name="Артикул">18095</param>
<param name="Вес/объем">200</param>
<param name="Картинки">https://styx-online.ru/upload/iblock/004/00408424e7fab5b68c6f13e28b78900a.jpg</param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), масло жожоба, виноградных косточек, 
эфирные масла мандарина и апельсина.</param>
<param name="Способ применения">Небольшое количество геля для душа распределить по всему телу легкими массажными движениями, после чего тщательно смыть теплой водой.</param>
</offer>
<offer id="858" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/mylo_myata_toniziruyushchee_100_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>400</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/222/2226e746b378525f77752b84ee225ff7.jpg</picture>
<vendor></vendor>
<name>МЫЛО &quot;МЯТА&quot; ТОНИЗИРУЮЩЕЕ , 100 г</name>
<description>МЫЛО &quot;МЯТА&quot; ТОНИЗИРУЮЩЕЕ , 100 г</description>
<param name="Артикул">416</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Зрелая, Купероз, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">омыленные растительные масла , соя, зверобой, мыльнянка, зола, сапонины, сорбин, водоросли, алоэ, эфирные масла- мята, петит грейн.</param>
<param name="Способ применения">Нанесите необходимое количество мыла на влажную кожу, вспеньте, равномерно распределите мягкими массирующими движениями, после чего тщательно смойте средство водой.  </param>
</offer>
<offer id="859" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/tsellogel_ekstra_supersilnyy_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5357.2</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/fc9/fc96ebc5a8d267994b901d0bf87f8b2a.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ ЭКСТРА СУПЕРСИЛЬНЫЙ , 400 мл</name>
<description>ЦЕЛЛОГЕЛЬ ЭКСТРА СУПЕРСИЛЬНЫЙ , 400 мл</description>
<param name="Артикул">81044</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ</param>
<param name="Состав">Экстракты: плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, морских водорослей, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца, розы), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 3–4 типа в технике термообёртываний (горячих).
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна).
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="860" available="true">
<url>https://styx-online.ru/catalog/tonalnye_sredstva_/krem_tonalnyy_svetlyy_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/2d6/2d6c8ac1d297e184ed863766a8fb0925.jpg</picture>
<vendor></vendor>
<name>КРЕМ ТОНАЛЬНЫЙ СВЕТЛЫЙ  , 50 мл</name>
<description>КРЕМ ТОНАЛЬНЫЙ СВЕТЛЫЙ  , 50 мл</description>
<param name="Артикул">181</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Содержит ценные растительные масла (макадамия, жожоба, оливка, ростки пшеницы), сок алоэ, пектины, сапонины, эфирные масла с охлаждающим успокаивающим акцентом действия (лаванда, жасмин, иссоп), защищающие кожу от развития театральных дерматитов, светоотражающие частички натурального перламутра, растительные (хлорофилл, каротиноиды, хиноны) и геоорганические (розовая, голубая глина) пигменты. 

?
ВАЖНО! Поскольку крем содержит исключительно природные пигменты, большую часть которых получают из растений, оттенки препарата могут незначительно варьироваться. Это связано с тем, что цветовая насыщенность пигментов растений может изменяться каждый урожайный год в зависимости от климатических условий.
?

?

? Посмотреть сертификат</param>
<param name="Способ применения">После очищения, тонизации и нанесения дневного крема небольшое количество препарата равномерно распределить по коже с помощью пальцев или гримерного спонжа, сочетая темные (подскуловая, височная зоны, черты, которые хотелось бы зрительно уменьшить или отдалить) и светлые (скулы, спинка носа, параорбитальная зона, черты, которые хотелось бы зрительно приблизить, сделать более выпуклыми) оттенки тональных средств. 

?
Обязательно растушевывать переходы между двумя оттенками, чтобы не было резкой границы.
?</param>
</offer>
<offer id="861" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/sol_dlya_vann_ochishchenie_ot_shlakov_1000_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2480</price>
<currencyId>RUB</currencyId>
<categoryId>294</categoryId>
<picture>https://styx-online.ru/upload/iblock/b57/b575bbf308619052e6acca84cf1a66f2.jpg</picture>
<vendor></vendor>
<name>СОЛЬ ДЛЯ ВАНН &quot;ОЧИЩЕНИЕ ОТ ШЛАКОВ&quot; , 1000 г</name>
<description>СОЛЬ ДЛЯ ВАНН &quot;ОЧИЩЕНИЕ ОТ ШЛАКОВ&quot; , 1000 г</description>
<param name="Артикул">83246</param>
<param name="Вес/объем">2</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">соль мертвого моря, бромиды, сульфаты, спирулина, эфирные масла - лаванды, кипариса.
?</param>
<param name="Способ применения">Эфирные соли применяют как для приема ванн, так и в качестве солевого пилинга (обогащение растительных масел и косметики для лица, тела, волос).</param>
</offer>
<offer id="862" available="true">
<url>https://styx-online.ru/catalog/shampuni/shampun_bazisnyy_dlya_individualnogo_smeshivaniya_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>660</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/b3d/b3da117724873e4e59167380aa26f378.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ &quot;БАЗИСНЫЙ&quot; ДЛЯ ИНДИВИДУАЛЬНОГО СМЕШИВАНИЯ , 200 мл</name>
<description>ШАМПУНЬ &quot;БАЗИСНЫЙ&quot; ДЛЯ ИНДИВИДУАЛЬНОГО СМЕШИВАНИЯ , 200 мл</description>
<param name="Артикул">14474</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для брюнеток, Для объема, Жирные, Жирные у корней / Сухие на кончиках, Ломкие, секущиеся, Нормальные, Окрашенные, От выпадения, Перхоть, Поврежденные, Пористые, Сухие, Чувствительная кожа головы</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Вода, глицерин, поваренная соль, экстракт кокоса.</param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену.
 
 Оставить на несколько минут, после чего смыть теплой водой.&amp;nbsp;
 
 Для получения максимального результата рекомендуется после использования шампуня наносить подходящий бальзам для волос.&amp;nbsp;
 
 Подходит для ежедневного применения. Возможно использовать для детей с рождения, но для совсем малышей, что бы не было слезок при попадании шампуня рекомендуем&amp;nbsp;детский шампунь.
 </param>
</offer>
<offer id="866" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_verbena_1_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2040</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/604/60496d73070c42618e4b692f61fbe39b.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ВЕРБЕНА, 1 мл</name>
<description>ЭФИРНОЕ МАСЛО ВЕРБЕНА, 1 мл</description>
<param name="Артикул">579</param>
<param name="Вес/объем">1</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">От выпадения, Перхоть, Поврежденные, Сухие</param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для загара, Потеря эластичности кожи, Потливость</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК">Интенсивное увлажнение, Мешки под глазами, Морщины, Темные круги</param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ">Потливость (гипергидроз)</param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Апатия, Вегетососудистая дистония, Головная боль, Головокружения, Депрессии, Детокс, очищение от шлаков, Нормализация пищеварения, Отёки, Пиодермии, Потливость, Слабость, утомляемость, Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло Вербена.

	 Получение&amp;nbsp;эфирного масла Вербена:&amp;nbsp;водно-паровая дистилляция Aloysia triphylla (Verbena triphylla, Lippia citriodora) (сем. вербеновых).


	 Эфирное масло Вербена:&amp;nbsp;прозрачное, насыщенное, текучее, летучее, с желтоватым или лимонным оттенком.
</param>
<param name="Способ применения">Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода,&amp;nbsp;Аромалампы: 2–3 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 1–2&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 2–3 к; теплые сидячие&amp;nbsp;— 1–2 к;&amp;nbsp;
 
 Массаж, растирания: 2–6 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, боли (3 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 1 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Косметический лед: 1 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (3–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Можно добавлять 1 к&amp;nbsp;в&amp;nbsp;утренний йогурт (не&amp;nbsp;менее 100 г). Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками.;&amp;nbsp;
 
Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески</param>
</offer>
<offer id="868" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/osnova_tkanevaya_pod_gipsovyy_modellyazh_omolozhenie_anti_age_30_5_kh_400_sm_/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2120</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/a0a/a0a7fa0bfe5e4ebf51dd4a2631633f11.png</picture>
<vendor></vendor>
<name>ОСНОВА ТКАНЕВАЯ ПОД ГИПСОВЫЙ МОДЕЛЛЯЖ ОМОЛОЖЕНИЕ (ANTI AGE) 30,5 х 400 см </name>
<description>ОСНОВА ТКАНЕВАЯ ПОД ГИПСОВЫЙ МОДЕЛЛЯЖ ОМОЛОЖЕНИЕ (ANTI AGE) 30,5 х 400 см </description>
<param name="Артикул">87053</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Нетканный материал - 100% целлюлоза  ( древесина )</param>
<param name="Способ применения">Перед процедурой , вырезанный чуть шире контура лица , кусок ткани прикладывают к предварительно нанесённым на кожу лица препаратам , чтобы сверху укрыть толстым слоем гипсового модельяжа .</param>
</offer>
<offer id="871" available="true">
<url>https://styx-online.ru/catalog/raskhodnye_materialy_1/nozh_dlya_plenki/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>400</price>
<currencyId>RUB</currencyId>
<categoryId>338</categoryId>
<picture>https://styx-online.ru/upload/iblock/a58/a58ba389d63367e816eb794a26a952ea.png</picture>
<vendor></vendor>
<name>НОЖ ДЛЯ ПЛЕНКИ</name>
<description>НОЖ ДЛЯ ПЛЕНКИ</description>
<param name="Артикул">87004</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="875" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/mylo_mandarin_apesin_vitaminiziruyushchee_100_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>570</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/b6c/b6c9ac4e330d9478aa52f3d4fd9aecad.jpg</picture>
<vendor></vendor>
<name>МЫЛО &quot;МАНДАРИН-АПЕЬСИН&quot; ВИТАМИНИЗИРУЮЩЕЕ , 100 г</name>
<description>МЫЛО &quot;МАНДАРИН-АПЕЬСИН&quot; ВИТАМИНИЗИРУЮЩЕЕ , 100 г</description>
<param name="Артикул">12302</param>
<param name="Вес/объем">80</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Зрелая, Комбинированная, Комедоны (засорение пор , черные точки), Потеря эластичности, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="876" available="true">
<url>https://styx-online.ru/catalog/ochishchenie_i_umyvanie_/mylo_verbena_80_gr/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>280</categoryId>
<picture>https://styx-online.ru/upload/iblock/d7f/d7fc345ba4dadac47b67a89c4798afcb.jpg</picture>
<vendor></vendor>
<name>МЫЛО ВЕРБЕНА , 80 гр</name>
<description>МЫЛО ВЕРБЕНА , 80 гр</description>
<param name="Артикул">12452</param>
<param name="Вес/объем">80</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комбинированная, Пористый рельеф кожи, Потеря эластичности</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Натуральные живительные масла, водоросли, натуральный мёд, алоэ-вера, эфирное масло пачули и вербены.

?
</param>
<param name="Способ применения">Ежедневно использовать 2 раза в день, во время утреннего и вечернего умывания. Идеально очищает от макияжа. 

?
1-2 раза в неделю использовать в качестве очищающей маски.
?

?
Приготовить пену из мыла и небольшого количества воды, добавить 1-3 капли эфирного масла по проблеме и желанию. Нанести на лицо. 
?

?
Оптимально провести по мыльной пенке легкий массаж пальцами или щеточкой, оставить на 2-4 мин, после смыть водой.
?</param>
</offer>
<offer id="878" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha__1/maslo_vinogradnye_kostochki_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/21f/21f7f23d20a55a6acca064dfe516c6c4.jpg</picture>
<vendor></vendor>
<name>МАСЛО ВИНОГРАДНЫЕ КОСТОЧКИ, 100 мл</name>
<description>МАСЛО ВИНОГРАДНЫЕ КОСТОЧКИ, 100 мл</description>
<param name="Артикул">777</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Пористый рельеф кожи, Потеря эластичности</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Потеря эластичности кожи, Стрии, растяжки, Сухая кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">100% масло виноградных косточек холодного отжима.
 
Фармакологический состав масла: органические кислоты, глюкозу, фруктозу, соли калия, натрия, кальция, железа, витамины: С, В, А, энзимы, биофлавоноиды, проантоцианиднов, фитонциды, танины.</param>
<param name="Способ применения">Использовать для ухода за кожей лица, тела, волос и ногтей, как в чистом виде, так и с обогащением эфирными маслами по необходимости/проблеме.
 
 Идеальная основа (эмульгатор) для работы с эфирными маслами. Может применяться для массажа, масок, аппликаций, смазываний, компрессов, а также для обогащения готовых косметических средств.
 
Для внутреннего употребления: принимать в чистом виде или с добавлением эфирных масел; можно использовать в&amp;nbsp;кулинарии.</param>
</offer>
<offer id="879" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha__1/maslo_mindal_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>750</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/045/04567e4f1fb028b24f020e62543f2e1d.jpg</picture>
<vendor></vendor>
<name>МАСЛО МИНДАЛЬ, 100 мл</name>
<description>МАСЛО МИНДАЛЬ, 100 мл</description>
<param name="Артикул">773</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Потеря эластичности кожи, Сухая кожа, Целлюлит, Шелушение</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">100%&amp;nbsp;масло миндаля холодного отжима.&amp;nbsp;
 
 Фармакологический состав масла: жирные кислоты, включая глицериды олеиновой кислоты, азотистые вещества, сквален, эмульсин, линолевая кислота, алейроновые аминокислоты, витамины группы В, токоферолы, каротины, минеральные вещества, гликозид амигдалин.</param>
<param name="Способ применения">Использовать для ухода за кожей лица, тела, волос и ногтей, как в чистом виде, так и с обогащением эфирными маслами по необходимости/проблеме.&amp;nbsp;
 
 Идеальная основа (эмульгатор) для работы с эфирными маслами, можно использовать в кулинарии. Может применяться для массажа, масок, аппликаций, смазываний, компрессов, а также для обогащения готовых косметических средств.&amp;nbsp;
 
 Для внутреннего употребления: принимать в чистом виде или с добавлением эфирных масел.
 Смесь масла с мёдом (1:1) применяют при истощении, упадке сил, онемении рук или ног и судорогах. Издревле подогретое&amp;nbsp;
 миндальное масло закапывали в больное ухо (затем закрывая слуховой проход турундой — узким марлевым тампоном) при шуме&amp;nbsp;
в ушах, серных пробках, а также при снижении слуха после простуды и насморка.</param>
</offer>
<offer id="880" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha__1/maslo_zhozhoba_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2300</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/8b5/8b59b5278e5ecbe31f2598e0086311b6.jpg</picture>
<vendor></vendor>
<name>МАСЛО ЖОЖОБА, 100 мл</name>
<description>МАСЛО ЖОЖОБА, 100 мл</description>
<param name="Артикул">770</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Зрелая, Потеря эластичности</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Потеря эластичности кожи, Стрии, растяжки</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК">Морщины</param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">100% масло жожоба холодного отжима.
 
Фармакологический состав масла: цетилпальмитат, эфиры цетилового спирта, аминокислоты, восковые эфиры, незаменимые жирные кислоты (пальмитиновая, олеиновая, арахидоновая, линолевая, линоленовая, каприновая, миристиновая, эруковая), провитамины А, С, РР, токоферолы.</param>
<param name="Способ применения">Использовать для ухода за кожей лица, тела, волос и ногтей, как в чистом виде, так и с обогащением эфирными маслами по необходимости/проблеме.
 
 Идеальная основа (эмульгатор) для работы с эфирными маслами.
 
 Может применяться для массажа, масок, аппликаций, смазываний, компрессов, также для обогащения готовых косметических средств.
 
Для внутреннего употребления: принимать в чистом виде или с добавлением эфирных масел.</param>
</offer>
<offer id="881" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_lavanda_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1150</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/144/144e7a360759eb3cfe7f68c0840c1fbf.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ЛАВАНДА, 10  мл</name>
<description>ЭФИРНОЕ МАСЛО ЛАВАНДА, 10  мл</description>
<param name="Артикул">507</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся, От выпадения, Перхоть, Сухие, Чувствительная кожа головы</param>
<param name="ДЛЯ ЛИЦА">Купероз, Отечная, Раздражение,воспаления( после пилинга), Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Отечная кожа, Сосудистый рисунок, Чувствительная кожа, Шелушение</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Проблемы с ногтями, Раздражения, воспаления</param>
<param name="ДЛЯ НОГ">Раздражения, воспаления</param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Герпес, Головная боль, Дерматиты, Детокс, очищение от шлаков, Невралгии, Ожоги, Укусы насекомых</param>
<param name="Состав">100% эфирное масло «Лаванда»</param>
<param name="Способ применения">Аромакурительницы: 5–7 к на 15 м; 

Ингаляции: горячие (3–5 мин) — 1 к; холодные: 2–3 мин; 

Аромамедальоны: 1 к; 

В сауне и бане: 4–6 к лаванды на 1 сеанс; 

Полоскания: 1 к с 0,5 ч.л. эмульгатора (сода, соль, мед) на стакан теплой воды; 

Ванны: общие — 5–8 к; теплые сидячие — 2–3 к; 

Массаж: 5–7 к на 10 мл транспортной основы; 

Компрессы: теплые масляные — на область травм, воспаления, боли (7 к на 10 мл масла); 

Капли в нос: 4 к на 2–3 ч.л. масла зверобоя, закапывать по 3–4 капли в каждую ноздрю 1 раз в 60–90 мин; 

Обогащение косметических средств: 3–4 к на 5 мл основы; 

Интим-косметика: 15–17 к добавить в 30 мл базисного масла (виноградные косточки, жожоба, макадамия), наносить на интимную зону после приема душа; 

Примочки: 15 к смешать с 30 мл кипяченой воды, намочить и отжать тампон, прикладывать к области воспаления, травмы, ожога; 

Промывание ран: 2% раствор лаванды (30 капель эмульгировать 0,5 ч.л. соды и развести в 100 мл чистой воды); 

Спринцевания: 7 к нанести на ? ч.л. соды, развести в теплой кипяченой воде (300 мл), провести промывание; 

Косметический лед: 5–6 к смешать с медом или косметическими сливками (1 ч.л.), развести в 200 мл воды и порционно заморозить. Протирать лицо, шею, область декольте утром и вечером; 

Внутреннее употребление: добавка в мед, варенье (4–5 к на 100 мл), применять 
по 1 ч.л. смеси 1–4 раза в день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками; 

Репеллент: 15 к смешать с 50 мл базисного масла, молочка для тела или тоника, наносить равномерно на открытые участки тела; 

Освежающее втирание: смешать 50 мл водки с 15 к лаванды, смочить салфетку, протирать тело и зоны повышенного потоотделения; 

Аромарасчесывание: наносить на зубцы расчески.
</param>
</offer>
<offer id="882" available="true">
<url>https://styx-online.ru/catalog/tonalnye_sredstva_/krem_tonalnyy_tyemnyy_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/8a8/8a838b70ccd428d0a49ec47e4da5fc5b.jpg</picture>
<vendor></vendor>
<name>КРЕМ ТОНАЛЬНЫЙ ТЁМНЫЙ , 50 мл</name>
<description>КРЕМ ТОНАЛЬНЫЙ ТЁМНЫЙ , 50 мл</description>
<param name="Артикул">182</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Содержит ценные растительные масла (макадамия, жожоба, оливка, ростки пшеницы), сок алоэ, пектины, сапонины, эфирные масла с охлаждающим, успокаивающим акцентом действия (лаванда, жасмин, иссоп), защищающие кожу от развития театральных дерматитов, светоотражающие частички натурального перламутра, растительные (хлорофилл, каротиноиды, хиноны) и геоорганические (розовая, голубая глина) пигменты. 

?
ВАЖНО! Поскольку крем содержит исключительно природные пигменты, большую часть которых получают из растений, оттенки препарата могут незначительно варьироваться. Это связано с тем, что цветовая насыщенность пигментов растений может изменяться каждый урожайный год в зависимости от климатических условий.
?

?

? Посмотреть сертификат</param>
<param name="Способ применения">После очищения, тонизации и нанесения дневного крема небольшое количество препарата равномерно распределить по коже с помощью пальцев или гримерного спонжа, сочетая тёмные (подскуловая, височная зоны, черты, которые хотелось бы зрительно уменьшить или отдалить) и светлые (скулы, спинка носа, параорбитальная зона, черты, которые хотелось бы зрительно приблизить, сделать более выпуклыми) оттенки тональных средств. 

?
Обязательно растушевывать переходы между двумя оттенками, чтобы не было резкой границы.
?</param>
</offer>
<offer id="883" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_evkalipt_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>530</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/916/916dbdd68f9ce6a362521cb02256239b.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ЭВКАЛИПТ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ЭВКАЛИПТ, 10 мл</description>
<param name="Артикул">503</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">От выпадения, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Жирная кожа, Проблемная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Ожоги, При кашле, При простуде</param>
<param name="Состав">100% эфирное масло эвкалипта.</param>
<param name="Способ применения">Ингаляции: горячие - 3-5 минут (1 капля эфирного масла эвкалипта); холодные - 2-3 минуты.&amp;nbsp;
 
 
 Аромакурительницы: 5-6 капель на 15 кв. м.&amp;nbsp;
 
 Аромамедальоны: 1 капля.&amp;nbsp;
 
 В сауне и бане: 3-5 капель эвкалипта на 1 сеанс.&amp;nbsp;
 
 
 Полоскания: 2 капли с 1/2 чайной ложки эмульгатора (сода, соль, мёд) на стакан тёплой воды.&amp;nbsp;
 
 Ванны: общие – 4-6 капель; тёплые сидячие – 2-3 капли.&amp;nbsp;
 
 Массаж: 4-7 капель на 10 мл транспортной основы;&amp;nbsp;&amp;nbsp;
 
 Противопростудные растирания: 15 капель эфирного масла смешать с 30 мл базового масла, растирать грудную клетку детей и взрослых.&amp;nbsp;
 
 Компрессы: тёплые масляные - на область травм, воспалений, боли (5 капель на 10 мл масла).&amp;nbsp;
 
 Влажные тонизирующие обёртывания: 5 капель на 500 мл воды, намочить и отжать простыню, обернуть тело 3-4 раза.&amp;nbsp;
 Освежающее втирание: смешать 50 мл водки с 15 каплями эфирного масла эвкалипта, смочить салфетку, протирать тело и зоны повышенного потоотделения.&amp;nbsp;
 
 Капли в нос: 4 капли на 2-3 чайной ложки масла зверобоя, закапывать по 3-4 капли в каждую ноздрю 1 раз в 60-90 минут.&amp;nbsp;
 
 Обогащение косметических средств: 2-5 капли на 5 мл основы.&amp;nbsp;
 
 Примочки: 15 капель смешать с 30 мл кипячёной воды, намочить и отжать тампон, прикладывать к области нагноения на 3-5 минут.&amp;nbsp;
 
 Промывание ран: 2% раствор эфирного масла эвкалипта (30 капель эмульгировать 1/2 чайной ложкой соды и развести в 100 мл чистой воды).&amp;nbsp;
 
 Косметический лёд: 2 капли смешать с мёдом или косметическими сливками (1 чайная ложка), развести в 200 мл воды и порционно заморозить. Протирать лицо, шею, область декольте утром и вечером.&amp;nbsp;
 Маски для волос: 7-8 капель смешать с глиной, бальзамом, маслом макадамии (5-7 мл), нанести на кожу головы (по проборам), тепло укутать, оставить на 10-15 минут.&amp;nbsp;
 
 Дезодорант: 5-7 капель на 100 мл тоника, лосьона или воды пропитать ватный тампон, протирать участки, склонные к повышенному потоотделению.&amp;nbsp;
 
 Внутреннее употребление: добавка в мёд, варенье (4-5 капель на 100 мл), применять по 1 чайной ложке смеси 1-4 раза в день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками.&amp;nbsp;
 
 Репеллент: 15 капель смешать с 50 мл базового масла, молочка для тела или тоника, наносить равномерно на открытые участки тела.&amp;nbsp;
 
 
 Аромарасчёсывание: наносить на зубцы расчёски.&amp;nbsp;&amp;nbsp;
 не имеют противопоказаний!&amp;nbsp;&amp;nbsp;
 
&amp;nbsp;</param>
</offer>
<offer id="898" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_chaynoe_derevo_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>970</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/408/4081d39f43518b4e10bb1bc95e82ab6b.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ЧАЙНОЕ ДЕРЕВО, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ЧАЙНОЕ ДЕРЕВО, 10 мл</description>
<param name="Артикул">555</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">От выпадения, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Жирная, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Проблемная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">При простуде</param>
<param name="Состав">
 100% эфирное масло «Чайное дерево»&amp;nbsp;
</param>
<param name="Способ применения">Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 5–8 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 4–6 к&amp;nbsp;чайного дерева на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 2 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 5–7 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж: 5–8 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Противопростудные растирания: 20 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;базисного масла, растирать грудную клетку детей и&amp;nbsp;взрослых;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, воспалений, боли (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 5 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Тампонада уха: 5–6 к&amp;nbsp;смешать с&amp;nbsp;10–12 к&amp;nbsp;базисного масла (ростки пшеницы, зверобой, черный тмин), смочить ватный фитилек и&amp;nbsp;глубоко вложить в&amp;nbsp;наружный слуховой проход. Остатки смеси нанести на&amp;nbsp;область вокруг уха и&amp;nbsp;наложить согревающую повязку;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Примочки: 15 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;кипяченой воды, намочить и&amp;nbsp;отжать тампон, прикладывать к&amp;nbsp;области нагноения на&amp;nbsp;3–5&amp;nbsp;мин;&amp;nbsp;
 
 Промывание ран: 2% раствор чайного дерева (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Освежающее втирание: смешать 50&amp;nbsp;мл&amp;nbsp;водки с&amp;nbsp;15 к&amp;nbsp;чайного дерева, смочить салфетку, протирать тело и&amp;nbsp;зоны повышенного потоотделения;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="901" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_koriandr_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>890</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/703/703b74ad8caa950549d4eb7b9ae3c272.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО КОРИАНДР, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО КОРИАНДР, 10 мл</description>
<param name="Артикул">551</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Жирная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Боли в мышцах и суставах, Нормализация пищеварения, При метеоризме</param>
<param name="Состав">100% эфирное масло «Кориандр»&amp;nbsp;</param>
<param name="Способ применения">Аромакурительницы: 3–5 к&amp;nbsp;на&amp;nbsp;20&amp;nbsp;м;&amp;nbsp;
 
 Ингаляции: горячие (5–7&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 5–7&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1–3 к;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 2–3 к; горячие сидячие -2-3 к; горячие ножные&amp;nbsp;— 1–2 к;&amp;nbsp;
 
 Массаж, растирания: 5–7 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Обогащение косметических средств: 1 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (1 к&amp;nbsp;на&amp;nbsp;15 гр).
 
Меры предосторожности и субъективные ощущения: Проверять аромат на индивидуальную переносимость.

Хранение: в защищенном от прямых солнечных лучей прохладном месте. Беречь от детей и открытого огня. Срок хранения при соблюдении герметичности упаковки – более 5 лет.</param>
</offer>
<offer id="908" available="true">
<url>https://styx-online.ru/catalog/raskhodnye_materialy_1/metodichka_litso/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>338</categoryId>
<picture>https://styx-online.ru/upload/iblock/34d/34d680d48047bae874b72335ca9eefea.png</picture>
<vendor></vendor>
<name>Методичка &quot;ЛИЦО&quot;</name>
<description>Методичка &quot;ЛИЦО&quot;</description>
<param name="Артикул">99914</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="909" available="true">
<url>https://styx-online.ru/catalog/raskhodnye_materialy_1/metodichka_telo/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>250</price>
<currencyId>RUB</currencyId>
<categoryId>338</categoryId>
<picture>https://styx-online.ru/upload/iblock/8e4/8e4ff2442a6eb6bdd510131fc0221d8b.png</picture>
<vendor></vendor>
<name>Методичка &quot;ТЕЛО&quot;</name>
<description>Методичка &quot;ТЕЛО&quot;</description>
<param name="Артикул">99915</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="911" available="true">
<url>https://styx-online.ru/catalog/ochishchenie_i_umyvanie_/loson_tonik_termoaktivnyy_dlya_problemnoy_kozhi_detoks_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1680</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/b1e/b1edea4a48ba07e84093e88eb0a75cfe.png</picture>
<vendor></vendor>
<name>ЛОСЬОН ТОНИК ТЕРМОАКТИВНЫЙ ДЛЯ ПРОБЛЕМНОЙ КОЖИ ДЕТОКС , 200 мл</name>
<description>ЛОСЬОН ТОНИК ТЕРМОАКТИВНЫЙ ДЛЯ ПРОБЛЕМНОЙ КОЖИ ДЕТОКС , 200 мл</description>
<param name="Артикул">85494</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комедоны (засорение пор , черные точки), Пористый рельеф кожи, Постакне, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Лосьон-тоник</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Чайное дерево, алоэ вера, лаванда, дистиллят гамамелиса, лимон, герань, экстракт календулы.

</param>
<param name="Способ применения">Применяется в салонных процедурах после каждого этапа воздействия на проблемную кожу

 в домашнем уходе — для ежедневной антибактериальной терапии зон локализации высыпаний.

</param>
</offer>
<offer id="912" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/termoaktivnaya_enzimno_gryazevaya_piling_maska_dlya_glubokogo_ochishcheniya_por_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3540</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/b55/b55f127d29a8cf6f97a232ae69c01571.png</picture>
<vendor></vendor>
<name>ТЕРМОАКТИВНАЯ ЭНЗИМНО-ГРЯЗЕВАЯ ПИЛИНГ-МАСКА ДЛЯ ГЛУБОКОГО ОЧИЩЕНИЯ ПОР , 150 мл</name>
<description>ТЕРМОАКТИВНАЯ ЭНЗИМНО-ГРЯЗЕВАЯ ПИЛИНГ-МАСКА ДЛЯ ГЛУБОКОГО ОЧИЩЕНИЯ ПОР , 150 мл</description>
<param name="Артикул">85463</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Жирная, Комбинированная, Комедоны (засорение пор , черные точки), Нормальная, Обезвоженная, Отечная, Пористый рельеф кожи, Постакне, Потеря эластичности, Проблемная, Сухая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска, Пилинг</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лечебная грязь, глобулы жожоба, соевый лецитин, масло жожоба, алоэ вера, лаванда, иссоп, можжевельник, жасмин сосна.</param>
<param name="Способ применения">Нанести на кожу лица на 15 минут, провести массаж. Остатки смыть теплой водой.</param>
</offer>
<offer id="913" available="true">
<url>https://styx-online.ru/catalog/syvorotki/dnevnaya_syvorotka_dlya_litsa_detoks_30_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/7d0/7d047f81255fc130912f83877fc92e30.png</picture>
<vendor></vendor>
<name>ДНЕВНАЯ СЫВОРОТКА ДЛЯ ЛИЦА ДЕТОКС , 30 мл</name>
<description>ДНЕВНАЯ СЫВОРОТКА ДЛЯ ЛИЦА ДЕТОКС , 30 мл</description>
<param name="Артикул">85427</param>
<param name="Вес/объем">30</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комбинированная, Комедоны (засорение пор , черные точки), Отечная, Пигментация, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Сыворотка</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Жожоба, экстракт меда, авокадо, иссоп, экстракт ананаса, витамины А, F, Е, жасмин, гидроксипролин, сосна, гвоздика, жожоба.</param>
<param name="Способ применения">Наносится под универсальный день/ночь липолитический крем.</param>
</offer>
<offer id="914" available="true">
<url>https://styx-online.ru/catalog/syvorotki/nochnaya_syvorotka_dlya_litsa_detoks_30_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1125</price>
<oldprice>1500</oldprice>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/566/56691732506e77e93a4c493ffd11e39c.png</picture>
<vendor></vendor>
<name>НОЧНАЯ СЫВОРОТКА ДЛЯ ЛИЦА ДЕТОКС , 30 мл</name>
<description>НОЧНАЯ СЫВОРОТКА ДЛЯ ЛИЦА ДЕТОКС , 30 мл</description>
<param name="Артикул">85437</param>
<param name="Вес/объем">30</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комедоны (засорение пор , черные точки), Пористый рельеф кожи, Постакне, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Сыворотка</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Жожоба, экстракт меда, авокадо, экстракт ананаса, витамины A, F, E, дипальмитол гидроксипролин, каяпут, герань, корица.</param>
<param name="Способ применения">Наносится как низкомолекулярная терапевтическая подложка под универсальный (день-ночь) липолитический крем.</param>
</offer>
<offer id="915" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/piling_protivovospalitelnyy_dlya_problemnoy_i_zhirnoy_kozhi_detoks_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3540</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/507/507211078345279630c275edbb3872a1.png</picture>
<vendor></vendor>
<name>ПИЛИНГ ПРОТИВОВОСПАЛИТЕЛЬНЫЙ ДЛЯ ПРОБЛЕМНОЙ И ЖИРНОЙ КОЖИ ДЕТОКС , 150 мл</name>
<description>ПИЛИНГ ПРОТИВОВОСПАЛИТЕЛЬНЫЙ ДЛЯ ПРОБЛЕМНОЙ И ЖИРНОЙ КОЖИ ДЕТОКС , 150 мл</description>
<param name="Артикул">85453</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комедоны (засорение пор , черные точки), Пористый рельеф кожи, Постакне, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Пилинг</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Оливковое масло, оливковые косточки, масло жожоба, масло макадамии, экстракт центеллы, кипарис, можжевельник, никотиновая кислота, корица, карбомер, гвоздика, кумарин, сосна.</param>
<param name="Способ применения">Нанести на всё лицо, исключая область вокруг глаз, провести лимфодренажный массаж, остатки удалить влажными спонжами.</param>
</offer>
<offer id="916" available="true">
<url>https://styx-online.ru/catalog/balzamy_maski_i_sprei_dlya_volos/balzam_dlya_volos_restavriruyushchiy_verbena_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1460</price>
<currencyId>RUB</currencyId>
<categoryId>271</categoryId>
<picture>https://styx-online.ru/upload/iblock/3c9/3c958782e1b32b3ea52cb99e8c2128a5.jpg</picture>
<vendor></vendor>
<name>БАЛЬЗАМ ДЛЯ ВОЛОС РЕСТАВРИРУЮЩИЙ ВЕРБЕНА , 150 мл</name>
<description>БАЛЬЗАМ ДЛЯ ВОЛОС РЕСТАВРИРУЮЩИЙ ВЕРБЕНА , 150 мл</description>
<param name="Артикул">12423</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для брюнеток, Для объема, Окрашенные, Поврежденные, Сухие, Чувствительная кожа головы</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла жожоба, миндаля, абрикоса, календулы, макадамии, льна, выжимки петрушки, зародышей пшеницы, картофеля, конопли, семян фенхеля, экстракты хмеля, мяты, ромашки, эфирные масла вербены, шизандры.</param>
<param name="Способ применения">Небольшое количество нанести на влажные волосы лёгкими поглаживающими движениями. Оставить на 3-5 минут, смыть тёплой водой.
 
 Возможно использование как маски для волос, нанести на очищенные волосы на 30 минут. </param>
</offer>
<offer id="917" available="true">
<url>https://styx-online.ru/catalog/dlya_vanny_i_dusha_/gel_dlya_dusha_verbena_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1190</price>
<currencyId>RUB</currencyId>
<categoryId>294</categoryId>
<picture>https://styx-online.ru/upload/iblock/293/293ac416b1d2704f831398b744c9e457.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ДЛЯ ДУША ВЕРБЕНА , 200 мл</name>
<description>ГЕЛЬ ДЛЯ ДУША ВЕРБЕНА , 200 мл</description>
<param name="Артикул">12404</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Нормальная кожа, Потеря эластичности кожи, Сухая кожа</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (омыленное масло кокоса), эфирные масла вербены, герани, шизандры.
</param>
<param name="Способ применения">Небольшое количество геля для душа распределить по всему телу лёгкими массажными движениями, после чего тщательно смыть тёплой водой.</param>
</offer>
<offer id="918" available="true">
<url>https://styx-online.ru/catalog/shampuni/shampun_dlya_volos_verbena_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1190</price>
<currencyId>RUB</currencyId>
<categoryId>271</categoryId>
<picture>https://styx-online.ru/upload/iblock/420/420b9fa661441bd298df3f96aa2762e2.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ ДЛЯ ВОЛОС ВЕРБЕНА , 200 мл</name>
<description>ШАМПУНЬ ДЛЯ ВОЛОС ВЕРБЕНА , 200 мл</description>
<param name="Артикул">12434</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для брюнеток, Для объема, Ломкие, секущиеся, Нормальные, Окрашенные, Поврежденные, Пористые, Сухие</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), сок водорослей, эфирные масла вербены, герани, лимонника, экстракт лимонной травы и ирландского мха.&amp;nbsp;</param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. 
 
 Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену. 
 
 Оставить на несколько минут, после чего смыть тёплой водой.&amp;nbsp;
 
 Для получения максимального результата рекомендуется после использования шампуня наносить бальзам для волос «Вербена».&amp;nbsp;
 
Подходит для ежедневного применения. Возможно использовать для детей с рождения, но для совсем малышей, что бы не было слезок при попадании шампуня рекомендуем&amp;nbsp;детский шампунь.</param>
</offer>
<offer id="931" available="true">
<url>https://styx-online.ru/catalog/aromalampy_/aromalampa_sputnik_saturna_/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>420</price>
<currencyId>RUB</currencyId>
<categoryId>275</categoryId>
<picture>https://styx-online.ru/upload/iblock/7a6/7a68c528177349e9ca982c86fe4b3f82.jpg</picture>
<vendor></vendor>
<name>АРОМАЛАМПА &quot;СПУТНИК САТУРНА&quot;</name>
<description>АРОМАЛАМПА &quot;СПУТНИК САТУРНА&quot;</description>
<param name="Артикул">33381</param>
<param name="Вес/объем">540</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="932" available="true">
<url>https://styx-online.ru/catalog/balzamy_maski_i_sprei_dlya_volos/balzam_dlya_volos_melissa_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>840</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/cc5/cc583f31a12825b6763a2b01fa905c84.jpg</picture>
<vendor></vendor>
<name>БАЛЬЗАМ ДЛЯ ВОЛОС МЕЛИССА , 150 мл</name>
<description>БАЛЬЗАМ ДЛЯ ВОЛОС МЕЛИССА , 150 мл</description>
<param name="Артикул">14483</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блондинок, Для брюнеток, Жирные, Жирные у корней / Сухие на кончиках, Ломкие, секущиеся, От выпадения, Перхоть, Сухие, Чувствительная кожа головы</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Растительные масла жожоба, миндаля, абрикоса, календулы, макадамии, льна; выжимки петрушки, зародышей пшеницы, картофеля, конопли, семян фенхеля; экстракты хмеля, мяты, ромашки, хны; ланолин; пчелиный и&amp;nbsp;пальмовый воск; смолы сосны, пихты; эфирные масла розмарина, мяты, лимона, розового дерева.</param>
<param name="Способ применения">Нанести на влажные волосы на 2-5 минут, смыть теплой водой.
 
Возможно использование как маски для волос, нанести на очищенные волосы на 30 минут.</param>
</offer>
<offer id="933" available="true">
<url>https://styx-online.ru/catalog/dlya_vanny_i_dusha_/gel_dlya_dusha_aloe_vera_250_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>294</categoryId>
<picture>https://styx-online.ru/upload/iblock/8fe/8fefe67f080fa1ddec8c48e0dde0b156.png</picture>
<vendor></vendor>
<name>ГЕЛЬ ДЛЯ ДУША &quot;АЛОЭ ВЕРА&quot; , 250 мл</name>
<description>ГЕЛЬ ДЛЯ ДУША &quot;АЛОЭ ВЕРА&quot; , 250 мл</description>
<param name="Артикул">18085</param>
<param name="Вес/объем">200</param>
<param name="Картинки">https://styx-online.ru/upload/iblock/bda/bda14fcca823a0ee0d2f93c87a5154bd.jpg</param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), гель алоэ, сок алоэ, эфирные масла.
 </param>
<param name="Способ применения">Небольшое количество геля для душа распределить по всему телу легкими массажными движениями, после чего тщательно смыть теплой водой.</param>
</offer>
<offer id="938" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/gel_dlya_dusha_intim_250_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1460</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/088/088bcb0e069b8ac9e8011164b29bc69b.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ДЛЯ ДУША &quot;ИНТИМ&quot; , 250 мл</name>
<description>ГЕЛЬ ДЛЯ ДУША &quot;ИНТИМ&quot; , 250 мл</description>
<param name="Артикул">9100</param>
<param name="Вес/объем">250</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Вода, омыленное масло кокоса, экстракт алоэ, эфирные масла - чайное дерево , апельсин</param>
<param name="Способ применения">Небольшое количество геля для душа распределить по всему телу лёгкими массажными движениями, после чего тщательно смыть тёплой водой.         
</param>
</offer>
<offer id="939" available="true">
<url>https://styx-online.ru/catalog/karmasutra_/pena_dlya_vanny_kamasutra_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1150</price>
<currencyId>RUB</currencyId>
<categoryId>305</categoryId>
<picture>https://styx-online.ru/upload/iblock/b62/b623ae6411b947347d6782913252b290.jpg</picture>
<vendor></vendor>
<name>ПЕНА ДЛЯ ВАННЫ &quot;КАМАСУТРА&quot;, 200 мл</name>
<description>ПЕНА ДЛЯ ВАННЫ &quot;КАМАСУТРА&quot;, 200 мл</description>
<param name="Артикул">120</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для ванны, Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), базисные масла макадамии, 
виноградных косточек, эфирные масла розы, иланг-иланга, жасмина, сандала, корицы, ладана, базилика, ветивера, 
пачули, бергамота и лиметта. </param>
<param name="Способ применения">Добавить 30-40 мл пены в наполненную теплой водой ванну. 
</param>
</offer>
<offer id="940" available="true">
<url>https://styx-online.ru/catalog/ukhod_dlya_ruk_i_nog_/krem_dlya_ruk_kartofelnyy_balzam_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1240</price>
<currencyId>RUB</currencyId>
<categoryId>297</categoryId>
<picture>https://styx-online.ru/upload/iblock/400/40042d21a1a30e4b0e302e242178fb13.jpg</picture>
<vendor></vendor>
<name>Крем Для Рук &quot;Картофельный Бальзам&quot;,  50 мл</name>
<description>Крем для рук &quot;Картофельный бальзам&quot; регенерирует и заживляет кожу рук, устраняя дерматиты и трещины.
 
 Старинная рецептура питания, обновления и защиты кожи делает ее мягкой, нежной и здоровой при любой работе. 
 
 Обладает высокой успокаивающей и регенерирующей активностью, устраняя раздражение, покраснение, отёчность, жжение и шелушение кожи. 
 
 Препятствует образованию рубцов, трещин, сухости. Предотвращает развитие кератоза. 
 
 Ногти становятся здоровыми, крепкими, исчезает бугристость и ребристость. 
 
 Результат заметен с первых дней применения. 
 Подходит для всех типов кожи, даже очень чувствительной и склонной к аллергии.
 
 
 
 
 </description>
<param name="Артикул">9930</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"> сок картофеля, масло карите, жожоба, ромашки, календулы, моркови, эфирных масел лаванды, мирры.</param>
<param name="Способ применения">Применять по необходимости. ? Для достижения и сохранения аристократического, здорового вида кожи рук рекомендовано регулярное использование. ?
</param>
</offer>
<offer id="941" available="true">
<url>https://styx-online.ru/catalog/ukhod_dlya_ruk_i_nog_/krem_dlya_ruk_kalendula_70_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/1c4/1c4d43b122e52bc842da624b6a54daf4.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ РУК &quot;КАЛЕНДУЛА&quot; , 70 мл</name>
<description>КРЕМ ДЛЯ РУК &quot;КАЛЕНДУЛА&quot; , 70 мл</description>
<param name="Артикул">14220</param>
<param name="Вес/объем">70</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Проблемы с ногтями, Сухая, обезвоженная кожа</param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло жожоба, виноградных косточек, календулы, экстракт подорожника, петрушки, мёд, алоэ, соя-лецитин, эфирные масла герани, голубой ромашки, розмарина. 

?</param>
<param name="Способ применения">Применять по необходимости. 

?
Для достижения и сохранения аристократического, здорового вида кожи рук рекомендовано регулярное использование.
?</param>
</offer>
<offer id="942" available="true">
<url>https://styx-online.ru/catalog/krema_i_molochko_/krem_dukhi_dlya_tela_maslo_shi_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1590</price>
<currencyId>RUB</currencyId>
<categoryId>296</categoryId>
<picture>https://styx-online.ru/upload/iblock/d9d/d9d9825c7a7ad716385b1f17a4d27cdb.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДУХИ ДЛЯ ТЕЛА &quot;МАСЛО ШИ&quot; , 200 мл</name>
<description>КРЕМ ДУХИ ДЛЯ ТЕЛА &quot;МАСЛО ШИ&quot; , 200 мл</description>
<param name="Артикул">1020</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Сквалан, масло каритэ (ши), жожоба, макадамии, оливы, эфирное масло иланг-иланга, масло какао.</param>
<param name="Способ применения">Наносить на тело после душа или процедур коррекции фигуры (как корсет) легкими массирующими движениями. Дать впитаться.         

</param>
</offer>
<offer id="943" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_dlya_litsa_zhozhoba_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1950</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/cc5/cc503d584a8712ec117f7e3eeff99243.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ ЛИЦА &quot;ЖОЖОБА&quot;, 50 мл</name>
<description>КРЕМ ДЛЯ ЛИЦА &quot;ЖОЖОБА&quot;, 50 мл</description>
<param name="Артикул">190</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Нормальная, Потеря эластичности, Сухая, Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК">Интенсивное увлажнение, Морщины</param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло жожоба, авокадо, ростков пшеницы, репея, петрушки, конопли, экстракты клевера, девясила, мальвы, эфирное масло ладана, петитгрейна и лиммета.&amp;nbsp;</param>
<param name="Способ применения">Нежнейшая сывороточная текстура подходит для ежедневного ухода.
 
 Можно использовать как защитный крем на день, так и как восстанавливающий на ночь.
 
Небольшое количество крема распределить мягкими массирующими движениями по всему лицу после умывания.</param>
</offer>
<offer id="945" available="true">
<url>https://styx-online.ru/catalog/travyanoy_sad_/krem_dlya_sukhoy_kozhi_litsa_romashka_kalendula_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/357/35717b8e67a8f493c14cee17d1b111c9.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ СУХОЙ КОЖИ ЛИЦА &quot;РОМАШКА-КАЛЕНДУЛА&quot;, 50 мл</name>
<description>КРЕМ ДЛЯ СУХОЙ КОЖИ ЛИЦА &quot;РОМАШКА-КАЛЕНДУЛА&quot;, 50 мл</description>
<param name="Артикул">170</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Раздражение,воспаления( после пилинга), Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло авокадо, календулы, ростки пшеницы, эфирное масло ромашки, сандала, герани, экстракт ромашки, водные вытяжки фиалки и цикория. 

</param>
<param name="Способ применения">Подходит для ежедневного ухода как защитный крем на день, так и как восстанавливающий на ночь. 

Небольшое количество крема распределить мягкими массирующими движениями по всему лицу после умывания. 

Для достижения более быстрого и пролонгированного действия рекомендуем использовать с тоником для сухой кожи &quot;Ромашка - календула&quot; из линии «Травяной сад».</param>
</offer>
<offer id="946" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_dlya_normalnoy_kozhi_litsa_avokado_arnika_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/c97/c9729b7c40eeaf9e8b135cdb7a4783b7.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ НОРМАЛЬНОЙ КОЖИ ЛИЦА &quot;АВОКАДО-АРНИКА&quot; , 50 мл</name>
<description>КРЕМ ДЛЯ НОРМАЛЬНОЙ КОЖИ ЛИЦА &quot;АВОКАДО-АРНИКА&quot; , 50 мл</description>
<param name="Артикул">150</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Нормальная, Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло календулы, авокадо, ростков пшеницы, сок алоэ, экстракты арники и дубового мха, эфирное масло иланг-иланга, имбиря, лимона, пчелиный воск. 
 </param>
<param name="Способ применения">Подходит для ежедневного ухода как защитный крем на день, так и как восстанавливающий на ночь. 
 
 Небольшое количество крема распределить мягкими массирующими движениями по всему лицу после умывания. 
 
 Для достижения более быстрого и пролонгированного действия рекомендуем использовать с тоником для нормальной кожи &quot;Авокадо&quot; из линии «Травяной сад». </param>
</offer>
<offer id="947" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_dlya_ustaloy_kozhi_litsa_yogurt_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>997.5</price>
<oldprice>1330</oldprice>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/e7e/e7e10ece97002aff154211c25c7c3c30.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ УСТАЛОЙ КОЖИ ЛИЦА &quot;ЙОГУРТ&quot; , 50 мл</name>
<description>КРЕМ ДЛЯ УСТАЛОЙ КОЖИ ЛИЦА &quot;ЙОГУРТ&quot; , 50 мл</description>
<param name="Артикул">180</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Купероз, Пористый рельеф кожи, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло сои, авокадо, ростки пшеницы, экстракт календулы, пчелиный воск, йогурт, молочная сыворотка, эфирное масло розового дерева, цитронеллы, герани.</param>
<param name="Способ применения">Нежнейшая сывороточная текстура подходит для ежедневного ухода.
 
 Можно использовать как защитный крем на день, так и как восстанавливающий на ночь.
 
Небольшое количество крема распределить мягкими массирующими движениями по всему лицу после умывания.</param>
</offer>
<offer id="949" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_maska_dlya_litsa_aloe_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>277</categoryId>
<picture>https://styx-online.ru/upload/iblock/afc/afc7d81c5bb28dfd470f58a09726e280.jpg</picture>
<vendor></vendor>
<name>КРЕМ МАСКА ДЛЯ ЛИЦА &quot;АЛОЭ&quot; , 50 мл</name>
<description>КРЕМ МАСКА ДЛЯ ЛИЦА &quot;АЛОЭ&quot; , 50 мл</description>
<param name="Артикул">603</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Нормальная, Потеря эластичности, Сухая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло ши, цветков календулы, жожоба, глицерин, сок алоэ, эфирное масло лимона. </param>
<param name="Способ применения">Необходимое количество маски наносить на предварительно очищенную кожу лица (включая область вокруг глаз), равномерно распределить мягкими массирующими движениями до полного впитывания. 

Смывать крем-маску не требуется.
</param>
</offer>
<offer id="950" available="true">
<url>https://styx-online.ru/catalog/ochishchenie_i_umyvanie_/loson_tonik_lavandovaya_voda_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/9bc/9bc2430795e52fbc472a8aedb3c04f97.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ТОНИК &quot;ЛАВАНДОВАЯ ВОДА&quot; , 100 мл</name>
<description>ЛОСЬОН ТОНИК &quot;ЛАВАНДОВАЯ ВОДА&quot; , 100 мл</description>
<param name="Артикул">5004</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Раздражение,воспаления( после пилинга), Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Лосьон-тоник</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Дистиллят соцветий французской лаванды, талая вода.</param>
<param name="Способ применения">Мягкими движениями нанесите необходимое количество тоника на предварительно очищенную кожу лица, включая кожу контура глаз, при помощи ватного диска.           

</param>
</offer>
<offer id="951" available="true">
<url>https://styx-online.ru/catalog/balzamy_maski_i_sprei_dlya_volos/maska_dlya_volos_aloe_vera_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1027.5</price>
<oldprice>1370</oldprice>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/160/16068f97c313ab4a81ee50339a8bc50b.jpg</picture>
<vendor></vendor>
<name>МАСКА ДЛЯ ВОЛОС АЛОЭ ВЕРА , 100 мл</name>
<description>МАСКА ДЛЯ ВОЛОС АЛОЭ ВЕРА , 100 мл</description>
<param name="Артикул">14492</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для брюнеток, Жирные у корней / Сухие на кончиках, Ломкие, секущиеся, Окрашенные, От выпадения, Поврежденные, Пористые, Сухие, Чувствительная кожа головы</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">
	 Вытяжка из алое вера, вода из альпийских источников, экстракты ромашки и ростков пшеницы.

 
</param>
<param name="Способ применения">Нанести на очищенные волосы на 30 минут, смыть водой.</param>
</offer>
<offer id="952" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha__1/maslo_avokado_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1190</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/97a/97a700596f422ed1130a6889113ffdaf.jpg</picture>
<vendor></vendor>
<name>МАСЛО АВОКАДО, 100 мл</name>
<description>МАСЛО АВОКАДО, 100 мл</description>
<param name="Артикул">771</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Поврежденные, Сухие</param>
<param name="ДЛЯ ЛИЦА">Обезвоженная, Сухая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Чувствительная кожа, Шелушение</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Проблемы с ногтями</param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">100%&amp;nbsp;масло авокадо холодного отжима.&amp;nbsp;
 
 Фармакологический состав масла: витамины А, В, С, Е, бета-каротин, лютеин, магний, медь, железо и калий, богато жирными кислотами пальмитиновой и пальмитинолеиновой группы.&amp;nbsp;
 </param>
<param name="Способ применения">Использовать для ухода за кожей лица, тела, волос и ногтей, как в чистом виде, так и с обогащением эфирными маслами по необходимости/проблеме.&amp;nbsp;
 
 Идеальная основа (эмульгатор) для работы с эфирными маслами. Может применяться для массажа, масок, аппликаций, смазываний, компрессов, а также для обогащения готовых косметических средств.&amp;nbsp;
 
 Для внутреннего употребления: принимать в чистом виде или с добавлением эфирных масел; можно использовать в&amp;nbsp;
кулинарии.</param>
</offer>
<offer id="954" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha__1/maslo_makadamiya_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1770</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/c7b/c7b6a76bd0d10aac742be242f0ff5630.jpg</picture>
<vendor></vendor>
<name>МАСЛО МАКАДАМИЯ, 100 мл</name>
<description>МАСЛО МАКАДАМИЯ, 100 мл</description>
<param name="Артикул">776</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся, Сухие</param>
<param name="ДЛЯ ЛИЦА">Зрелая, Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для загара, Для массажа, Чувствительная кожа</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">100%&amp;nbsp;ореха макадамии холодного отжима.&amp;nbsp;
 
 Фармакологический состав масла: пальмитиновая кислота (21% — такой высокой концентрации этого ценного природного вещества не встречается ни в одном другом растительном масле), триглицериды циклических непредельных (миристиловая, миристолеиновая, пальмитолеиновая, стеариновая) кислот — 75%, провитамины А, Е, F, кальций.
 
 </param>
<param name="Способ применения">Использовать для ухода за кожей лица, тела, волос и ногтей, как в чистом виде, так и с обогащением эфирными маслами по необходимости/проблеме.&amp;nbsp;
 
 Идеальная основа (эмульгатор) для работы с эфирными маслами, можно использовать в кулинарии. Может применяться для массажа, масок, аппликаций, смазываний, компрессов, а также для обогащения готовых косметических средств.&amp;nbsp;
 
Для внутреннего употребления: принимать в чистом виде или с добавлением эфирных масел.</param>
</offer>
<offer id="955" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha_/maslo_massazhnoe_37_trav_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1150</price>
<currencyId>RUB</currencyId>
<categoryId>293</categoryId>
<picture>https://styx-online.ru/upload/iblock/1ec/1eca439c7caba1bf5c47358b201e70a7.jpg</picture>
<vendor></vendor>
<name>МАСЛО МАССАЖНОЕ &quot;37 ТРАВ&quot;, 100 мл</name>
<description>МАСЛО МАССАЖНОЕ &quot;37 ТРАВ&quot;, 100 мл</description>
<param name="Артикул">1034</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Сосудистый рисунок</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Отёки, При простуде, Слабость, утомляемость, Улучшение кровообращения</param>
<param name="Состав">Масла макадамии, жожоба, сои, ростков пшеницы, календулы, кунжута, миндаля и 37 эфирных масел, в т. ч. базилика, ромашки, мяты, шизандры, шалфея.</param>
<param name="Способ применения">Подходит для использования по телу и лицу, как для профессионального массажа любой техники, так и для домашнего использования (к примеру, это отличная замена крему для тела после душа или замена ночного крема для лица).
 
Расход для массажа по лицу – 10 мл, по телу – 15-20 мл. Перед использованием необходимо разогреть либо в аромалампе, либо на водяной бане, - это активизирует действие массажного масла.</param>
</offer>
<offer id="956" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/maslo_massazhnoe_antitsellyulit_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1150</price>
<currencyId>RUB</currencyId>
<categoryId>293</categoryId>
<picture>https://styx-online.ru/upload/iblock/5db/5dbf73dd1f372fa64f871cfdbfa36061.jpg</picture>
<vendor></vendor>
<name>МАСЛО МАССАЖНОЕ &quot;АНТИЦЕЛЛЮЛИТ&quot;, 100 мл</name>
<description>МАСЛО МАССАЖНОЕ &quot;АНТИЦЕЛЛЮЛИТ&quot;, 100 мл</description>
<param name="Артикул">1035</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Лишний вес, Отечная кожа, Потеря эластичности кожи, Стрии, растяжки, Целлюлит</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла макадамии, жожоба, сои, ростков пшеницы, календулы, кунжута, миндаля, эфирные масла душицы, кипариса, апельсина, мяты, можжевельника, розмарина, корицы.</param>
<param name="Способ применения">Подходит для использования по телу - как для профессионального массажа любой техники, так и для домашнего использования (к примеру, это отличная замена крему для тела после душа).
 
Расход для массажа по телу – 15-20 мл. Перед использованием необходимо разогреть либо в аромалампе, либо на водяной бане, - это активизирует действие массажного масла.</param>
</offer>
<offer id="957" available="true">
<url>https://styx-online.ru/catalog/sport/maslo_massazhnoe_sportsmen_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1150</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/7ae/7ae10d02dee1f4d19779b08166eb4ef5.jpg</picture>
<vendor></vendor>
<name>МАСЛО МАССАЖНОЕ &quot;СПОРТСМЕН&quot;, 100 мл</name>
<description>МАСЛО МАССАЖНОЕ &quot;СПОРТСМЕН&quot;, 100 мл</description>
<param name="Артикул">1033</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла макадамии, жожоба, сои, ростков пшеницы, календулы, кунжута, миндаля, эфирные масла гвоздики, перечной мяты, розмарина, корицы, чайного дерева, эвкалипта.</param>
<param name="Способ применения">Подходит для использования по телу, как для профессионального массажа любой техники, так и для домашнего использования (к примеру, это отличная замена крему для тела после душа).
 
 Расход для массажа по телу – 15-20 мл. Перед использованием необходимо разогреть либо в аромалампе, либо на водяной бане, - это активизирует действие массажного масла.</param>
</offer>
<offer id="958" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha__1/maslo_rostki_pshenitsy_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1190</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/3cf/3cf5b0d4adb0b338fc0c04a0c913cc55.jpg</picture>
<vendor></vendor>
<name>МАСЛО РОСТКИ ПШЕНИЦЫ, 100 мл</name>
<description>МАСЛО РОСТКИ ПШЕНИЦЫ, 100 мл</description>
<param name="Артикул">772</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Купероз, Потеря эластичности</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Пигментация, После загара, Потеря эластичности кожи, Сосудистый рисунок, Стрии, растяжки, Шелушение</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">100%&amp;nbsp;масло ростков пшеницы холодного отжима.&amp;nbsp;
 
 Фармакологический состав масла: витамины В, РР, Е (токоферолов содержится более 42%), каротин, соли натрия, кальция, фосфора, железа, магния, аминокислоты, хлорофилл, лецитин, полиненасыщенные жирные кислоты (альфа-линоленовая — омега-3, линолевая, гамма-линоленовая — омега-6), растительные энзимы.
 </param>
<param name="Способ применения">Использовать для ухода за кожей лица, тела, волос и ногтей, как в чистом виде, так и с обогащением эфирными маслами по необходимости/проблеме.&amp;nbsp;
 
 Идеальная основа (эмульгатор) для работы с эфирными маслами, можно использовать в кулинарии. Может применяться для массажа, масок, аппликаций, смазываний, компрессов, а также для обогащения готовых косметических средств.&amp;nbsp;
 
Для внутреннего употребления: принимать в чистом виде или с добавлением эфирных масел.</param>
</offer>
<offer id="959" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha__1/maslo_chyernyy_tmin_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2660</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/6f5/6f5c01ec2ee929143da748aa1d734cc8.jpg</picture>
<vendor></vendor>
<name>МАСЛО ЧЁРНЫЙ ТМИН, 100 мл</name>
<description>МАСЛО ЧЁРНЫЙ ТМИН, 100 мл</description>
<param name="Артикул">775</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комедоны (засорение пор , черные точки), Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Аллергические дерматиты, Для массажа, Лишний вес</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Нейродермиты</param>
<param name="Состав">100%&amp;nbsp;масло чёрного тмина холодного отжима.&amp;nbsp;
 
 Фармакологический состав масла: включает более 100 действующих веществ и около 50 катализаторов обменных процессов: насыщенные и ненасыщенные жирные кислоты (арахидоновая, дигомолиноленовая), липаза, токоферолы, провитамины А, группы В, Р, эфирное масло, алкалоиды (в частности дамасценин), циклооксигеназа, ацетилхолины, катехины, цитокинины, энзимы.
 
</param>
<param name="Способ применения">Использовать для ухода за кожей лица, тела, волос и ногтей, как в чистом виде, так и с обогащением эфирными маслами по необходимости/проблеме.&amp;nbsp;
 
 Идеальная основа (эмульгатор) для работы с эфирными маслами, можно использовать в кулинарии. Может применяться для массажа, масок, аппликаций, смазываний, компрессов, а также для обогащения готовых косметических средств.&amp;nbsp;
 
 Для внутреннего употребления: принимать в чистом виде или с добавлением эфирных масел.
Масло чёрного тмина обычно принимают курсом (от 3-х&amp;nbsp;до 6-ти&amp;nbsp;месяцев). Взрослая дозировка: по 20 капель (1 чайная ложка) утром натощак и вечером через 1,5 часа после еды. Для детей до 16 лет дозировка составляет 5 капель на каждые 4 года жизни. Заканчивать курс следует постепенно, снижая&amp;nbsp;дозировку, уменьшая её&amp;nbsp;на 1-2 капли каждый день.</param>
</offer>
<offer id="965" available="true">
<url>https://styx-online.ru/catalog/travyanoy_sad_/piling_maska_dlya_litsa_zhozhoba_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1460</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/ae9/ae94edac68185da44edfbae2bb8ac032.png</picture>
<vendor></vendor>
<name>ПИЛИНГ МАСКА ДЛЯ ЛИЦА &quot;ЖОЖОБА&quot;, 50 мл</name>
<description>ПИЛИНГ МАСКА ДЛЯ ЛИЦА &quot;ЖОЖОБА&quot;, 50 мл</description>
<param name="Артикул">191</param>
<param name="Вес/объем">50</param>
<param name="Картинки">https://styx-online.ru/upload/iblock/8c5/8c5c68113342eff3d236a4557ccaf0ab.jpg</param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Зрелая, Потеря эластичности, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска, Пилинг</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло и глобулы жожоба, глицерин, молочная сыворотка. 
</param>
<param name="Способ применения">Нанести на очищенную кожу толстым слоем (желательно предварительно подогреть на водяной бане), оставить на 3-5 минут, после чего по маске – пилингу провести массаж. Не забывать прорабатывать зону вокруг глаз и губ. 

Частота использования: жирная кожа – 1-2 раза в неделю, нормальная/комбинированная кожа – 1 раз в неделю, сухая/гиперчувствительная кожа – 1 раз в 10 дней.</param>
</offer>
<offer id="966" available="true">
<url>https://styx-online.ru/catalog/ochishchenie_i_umyvanie_/loson_tonik_rozovaya_voda_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/c0b/c0b25a425bc68603a31c24c3776aaa97.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ТОНИК &quot;РОЗОВАЯ ВОДА&quot; , 100 мл</name>
<description>ЛОСЬОН ТОНИК &quot;РОЗОВАЯ ВОДА&quot; , 100 мл</description>
<param name="Артикул">5003</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Купероз, Потеря эластичности, Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Лосьон-тоник</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Дистиллят лепестков дамасской розы, талая вода.
?</param>
<param name="Способ применения">Применяют в компрессах для глаз (устраняет отеки, тени) и как лосьон для укрепления волос и ликвидации перхоти.</param>
</offer>
<offer id="969" available="true">
<url>https://styx-online.ru/catalog/balzamy_maski_i_sprei_dlya_volos/sprey_dlya_ukladki_volos_mandarin_melisa_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>862.5</price>
<oldprice>1150</oldprice>
<currencyId>RUB</currencyId>
<categoryId>265</categoryId>
<picture>https://styx-online.ru/upload/iblock/6a6/6a6773a4fafc8ef8591fdf7607a0715e.jpg</picture>
<vendor></vendor>
<name>СПРЕЙ ДЛЯ УКЛАДКИ ВОЛОС МАНДАРИН-МЕЛИСА , 100 мл</name>
<description>СПРЕЙ ДЛЯ УКЛАДКИ ВОЛОС МАНДАРИН-МЕЛИСА , 100 мл</description>
<param name="Артикул">12504</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для брюнеток, Для объема</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Эфирные масла мандарина, мелиссы.
Талая вода.</param>
<param name="Способ применения">Нанести по всей длине волос.</param>
</offer>
<offer id="970" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/shampun_khenna_bestsvetnyy_ot_vypadeniya_volos_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/ff1/ff1e247cd4cfd1f1bae0892a0cca7efe.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ &quot;ХЕННА&quot; БЕСЦВЕТНЫЙ ОТ ВЫПАДЕНИЯ ВОЛОС , 200 мл</name>
<description>ШАМПУНЬ &quot;ХЕННА&quot; БЕСЦВЕТНЫЙ ОТ ВЫПАДЕНИЯ ВОЛОС , 200 мл</description>
<param name="Артикул">14504</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для объема, Ломкие, секущиеся, От выпадения, Поврежденные, Пористые, Сухие</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), морская соль, экстракт хенны, эфирное масло пачули.&amp;nbsp;</param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену.
 
 Оставить на несколько минут, после чего смыть тёплой водой.&amp;nbsp;
 
 Для получения максимального результата рекомендуется после использования шампуня наносить подходящий бальзам для волос.&amp;nbsp;
 
 Подходит для ежедневного применения. Возможно использовать для детей с рождения, но для совсем малышей, что бы не было слезок при попадании шампуня рекомендуем&amp;nbsp;детский шампунь.
 </param>
</offer>
<offer id="976" available="true">
<url>https://styx-online.ru/catalog/shampuni/shampun_arnika_otrubi_dlya_sukhikh_i_khrupkikh_volos_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/7d8/7d85ce60dd7938abd4b1b4ac0177cb40.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ &quot;АРНИКА ОТРУБИ&quot; ДЛЯ СУХИХ И ХРУПКИХ ВОЛОС , 200 мл</name>
<description>ШАМПУНЬ &quot;АРНИКА ОТРУБИ&quot; ДЛЯ СУХИХ И ХРУПКИХ ВОЛОС , 200 мл</description>
<param name="Артикул">402</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для брюнеток, Окрашенные, Поврежденные, Пористые, Сухие</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), морская соль, экстракты цветков липы, арники, хны, эфирные масла герани и цитронеллы.
</param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену.
 
 Оставить на несколько минут, после чего смыть тёплой водой.&amp;nbsp;
 
 Для получения максимального результата рекомендуется после использования шампуня наносить подходящий бальзам для волос.&amp;nbsp;
 
 Подходит для ежедневного применения. Возможно использовать для детей с рождения, но для совсем малышей, что бы не было слезок при попадании шампуня рекомендуем&amp;nbsp;детский шампунь.
 </param>
</offer>
<offer id="977" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/shampun_yogurt_dlya_ezhednevnogo_ukhoda_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/522/52249b1b6d4980c6e04a6c256b755f15.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ &quot;ЙОГУРТ&quot; ДЛЯ ЕЖЕДНЕВНОГО УХОДА , 200 мл</name>
<description>ШАМПУНЬ &quot;ЙОГУРТ&quot; ДЛЯ ЕЖЕДНЕВНОГО УХОДА , 200 мл</description>
<param name="Артикул">14454</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для брюнеток, Жирные у корней / Сухие на кончиках, Нормальные, Сухие</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), морская соль, йогурт, экстракт хенны, эфирные масла мяты, иланг-илага, герани, лаванды.</param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену.
 
 Оставить на несколько минут, после чего смыть теплой водой.&amp;nbsp;
 
 Для получения максимального результата рекомендуется после использования шампуня наносить подходящий бальзам для волос.&amp;nbsp;
 
 Подходит для ежедневного применения. Возможно использовать для детей с рождения, но для совсем малышей, что бы не было слезок при попадании шампуня рекомендуем&amp;nbsp;детский шампунь.
 </param>
</offer>
<offer id="978" available="true">
<url>https://styx-online.ru/catalog/shampuni/shampun_krapiva_khmel_dlya_normalnykh_i_sukhikh_volos_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/2bf/2bf1e89b132be0c0f738f1a54656b519.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ &quot;КРАПИВА ХМЕЛЬ&quot; ДЛЯ НОРМАЛЬНЫХ И СУХИХ ВОЛОС , 200 мл</name>
<description>ШАМПУНЬ &quot;КРАПИВА ХМЕЛЬ&quot; ДЛЯ НОРМАЛЬНЫХ И СУХИХ ВОЛОС , 200 мл</description>
<param name="Артикул">400</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для брюнеток, Для объема, Нормальные, Окрашенные, От выпадения, Сухие</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), морская соль, экстракты хмеля и крапивы, глицерин, эфирные масла сандала, апельсина, иланг-иланга.
 
 </param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену.
 
 Оставить на несколько минут, после чего смыть теплой водой.&amp;nbsp;
 
 Для получения максимального результата рекомендуется после использования шампуня наносить подходящий бальзам для волос.&amp;nbsp;
 
 Подходит для ежедневного применения. Возможно использовать для детей с рождения, но для совсем малышей, что бы не было слезок при попадании шампуня рекомендуем&amp;nbsp;детский шампунь.
 </param>
</offer>
<offer id="979" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/shampun_khvoshch_dlya_zhirnykh_i_smeshannykh_volos_s_seboreey_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>765</price>
<oldprice>1020</oldprice>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/793/7936526bf598c8f30d37dd3ff9e8f360.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ &quot;ХВОЩ&quot; ДЛЯ ЖИРНЫХ И СМЕШАННЫХ ВОЛОС С СЕБОРЕЕЙ ,  200 мл</name>
<description>ШАМПУНЬ &quot;ХВОЩ&quot; ДЛЯ ЖИРНЫХ И СМЕШАННЫХ ВОЛОС С СЕБОРЕЕЙ ,  200 мл</description>
<param name="Артикул">403</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блондинок, Для брюнеток, Жирные, Жирные у корней / Сухие на кончиках, От выпадения, Перхоть, Чувствительная кожа головы</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), морская соль, глицерин, экстракт хенны, зелёного чая, хвоща, коры дуба, белой ивы, ростков пшеницы, хмеля, эфирное масло розмарина.</param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену.
 
 Оставить на несколько минут, после чего смыть тёплой водой.&amp;nbsp;
 
 Для получения максимального результата рекомендуется после использования шампуня наносить подходящий бальзам для волос.&amp;nbsp;
 
 Подходит для ежедневного применения. Возможно использовать для детей с рождения, но для совсем малышей, что бы не было слезок при попадании шампуня рекомендуем&amp;nbsp;детский шампунь.
 </param>
</offer>
<offer id="981" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_apelsin_gorkiy_bigardiya_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1150</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/dde/dde4efa0747442c52f0bd67a10e3b28f.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО АПЕЛЬСИН ГОРЬКИЙ (БИГАРДИЯ), 10 мл</name>
<description>ЭФИРНОЕ МАСЛО АПЕЛЬСИН ГОРЬКИЙ (БИГАРДИЯ), 10 мл</description>
<param name="Артикул">554</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся</param>
<param name="ДЛЯ ЛИЦА">Жирная, Комбинированная, Пористый рельеф кожи</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Апатия, Вегетососудистая дистония, Детокс, очищение от шлаков, Жаропонижающее, Кровоточивость десен (парадонтоз), Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло Апельсин Горький (Бигардия).
 

	 Получение&amp;nbsp;эфирного масла Бигардия:&amp;nbsp;прессинг и центрифугирование кожуры плодов Citrus bigaradia / Citrus aurantium var. amora (сем. рутовых).

 Эфирное масло Бигардия:&amp;nbsp;легкое, текучее, летучее, желтого, желто-охристого и оранжевого цвета.
 </param>
<param name="Способ применения">Методы применения и средние дозировки:
 
 Аромакурительницы: 6-10 к на 15 м2;
 Ингаляции: горячие (5-7 мин) - 2-3 к; холодные: 5-7 мин;
 В сауне и бане: 5-7 к бигардии на 1 сеанс;
 Аромамедальоны: 1-3 к;
 Косметический лед: 5 к смешать с 1 ч.л. меда, растворить в 200 мл воды, заморозить, протирать лицо, шею, зону декольте;
 Полоскания: 2-3 к с 0,5 ч.л. эмульгатора (сода, соль, мед) на стакан теплой воды;
 Аппликации на десны: 5 к смешать с маслом зверобоя или черного тмина (1 ч.л.), наносить на больные десны 2-4 раза в день;
 Капли в нос: 1-3 к на 2 ч.л. масла зверобоя, закапывать по 3-4 капли в каждую ноздрю 1 раз в 60-90 мин;
 Ванны: общие - 3-5 к; горячие и холодные сидячие –3-6 к © горячие ножные – 3-4 к;
 Массаж, растирания: 5-10 к на 10 мл транспортной основы;
 Компрессы: теплые масляные (10 к на 10 мл масла);
 Обертывания: 10 к бигардии добавить в 500 мл теплой воды, смочить простыню, обернуть тело на 2-3 мин, повторить 2-3 раза;
 Обогащение косметических средств: 5-6 к на 5 мл основы;
 Внутреннее употребление: добавка в чай, кисломолочные продукты, выпечку, салаты, соки (1 к), применять 1-4 раза в день. Запивать большим количеством жидкости;
Аромарасчесывание: наносить на зубцы расчески.</param>
</offer>
<offer id="983" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_bergamot_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1330</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/a31/a31b2abd249262097a270e10c47cb4b0.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО БЕРГАМОТ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО БЕРГАМОТ, 10 мл</description>
<param name="Артикул">502</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные, Ломкие, секущиеся, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Жирная, Пористый рельеф кожи, Раздражение,воспаления( после пилинга)</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для загара</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Раздражения, воспаления</param>
<param name="ДЛЯ НОГ">Потливость (гипергидроз), Раздражения, воспаления</param>
<param name="ЗДОРОВЬЕ">Бессонница, Герпес, Жаропонижающее, При насморке, При простуде, Противовирусное</param>
<param name="Состав">100% эфирное масло Бергамот.
 
 Получение&amp;nbsp;эфирного масла Бергамот:&amp;nbsp;прессинг и центрифугирование плодов Citrus bergamia, Citrus aurantium (сем. рутовых).

 Эфирное масло Бергамот:&amp;nbsp;легкое, текучее, летучее, с желтоватым и зеленоватым оттенком.
 </param>
<param name="Способ применения">
	Аромакурительницы: 6–10 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м?
	Ингаляции: горячие (5–7&amp;nbsp;мин)&amp;nbsp;— 2–3 к; холодные: 5–7&amp;nbsp;мин;
	В&amp;nbsp;сауне и&amp;nbsp;бане: 5–7 к&amp;nbsp;бергамота на&amp;nbsp;1 сеанс;
	Аромамедальоны: 1–3 к;
	Косметический лед: 5 к&amp;nbsp;бергамота смешать с&amp;nbsp;1 ч.л. меда, растворить в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды, заморозить, протирать лицо, шею, зону декольте;
	Полоскания: 2–3 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;
	Аппликации на&amp;nbsp;десны: 5 к&amp;nbsp;смешать с&amp;nbsp;маслом зверобоя или черного тмина (1 ч.л.), наносить на&amp;nbsp;больные десны 2–4 раза в&amp;nbsp;день;
	Капли в&amp;nbsp;нос: 1–3 к&amp;nbsp;на&amp;nbsp;2 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;
	Ванны: общие&amp;nbsp;— 3–5 к; горячие и&amp;nbsp;холодные сидячие -3-6&amp;nbsp;к; горячие ножные&amp;nbsp;— 3–4 к;
	Массаж, растирания: 5–10 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;
	Эротический массаж и&amp;nbsp;интим-косметика: 10 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);
	Компрессы: теплые масляные (10 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла); холодный жаропонижающий компресс (10 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл): намочить и&amp;nbsp;отжать мягкую&amp;nbsp;х/б&amp;nbsp;ткань, прикладывать к икроножным мышцам, лбу, протирать все тело;
	Спринцевания: 3–5 к&amp;nbsp;на&amp;nbsp;0,5 ч.л. соды растворить в&amp;nbsp;200–300&amp;nbsp;мл&amp;nbsp;теплой воды;
	Обертывания: 10 к&amp;nbsp;бергамота добавить в&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;теплой воды, смочить простыню, обернуть тело на&amp;nbsp;2–3&amp;nbsp;мин, повторить 2–3 раза;
	Обогащение косметических средств: 5–6 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;
	Внутреннее употребление: добавка в&amp;nbsp;чай, кисломолочные продукты, выпечку, салаты, соки (1 к), применять 1–4 раза в&amp;nbsp;день. Запивать большим количеством жидкости;
	Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
</param>
</offer>
<offer id="984" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_vetiver_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1550</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/5dd/5ddb6525220fde051ec638c2766a62c9.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ВЕТИВЕР, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ВЕТИВЕР, 10 мл</description>
<param name="Артикул">548</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Жирные у корней / Сухие на кончиках, Ломкие, секущиеся, От выпадения</param>
<param name="ДЛЯ ЛИЦА">30+, Пористый рельеф кожи, Проблемная, Раздражение,воспаления( после пилинга), Сухая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Лишний вес, Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Раздражения, воспаления</param>
<param name="ДЛЯ НОГ">Потливость (гипергидроз), Раздражения, воспаления</param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Антисептическое, Бессонница, Депрессии, Нормализация пищеварения</param>
<param name="Состав">100% эфирное масло Ветивер.

 Получение&amp;nbsp;эфирного масла Ветивер:&amp;nbsp;водно-паровая дистилляция корней Vetiveria zizanioides (сем. ветивериевых).

 Эфирное масло Ветивер:&amp;nbsp;плотное, насыщенное, тяжелое, вязкое, янтарно-смолистого и чайного цвета.
 </param>
<param name="Способ применения">Методы применения и средние дозировки:
 
 &amp;nbsp;Аромакурительницы: 6-10 к на 15 м2;&amp;nbsp;
 
 &amp;nbsp; Ингаляции: горячие (5-7 мин) - 2-3 к; холодные: 5-7 мин;&amp;nbsp;
 
 &amp;nbsp; В сауне и бане: 5-7 к бигардии на 1 сеанс;&amp;nbsp;
 
 &amp;nbsp; Аромамедальоны: 1-3 к;&amp;nbsp;
 
 &amp;nbsp; Косметический лед: 5 к смешать с 1 ч.л. меда, растворить в 200 мл воды, заморозить, протирать лицо, шею, зону декольте;&amp;nbsp;
 
 &amp;nbsp; Полоскания: 2-3 к с 0,5 ч.л. эмульгатора (сода, соль, мед) на стакан теплой воды;&amp;nbsp;
 
 &amp;nbsp; Аппликации на десны: 5 к смешать с маслом зверобоя или черного тмина (1 ч.л.), наносить на больные десны 2-4 раза в день;&amp;nbsp;
 
 &amp;nbsp; Капли в нос: 1-3 к на 2 ч.л. масла зверобоя, закапывать по 3-4 капли в каждую ноздрю 1 раз в 60-90 мин;&amp;nbsp;
 
 &amp;nbsp; Ванны: общие - 3-5 к; горячие и холодные сидячие –3-6 к © горячие ножные – 3-4 к;&amp;nbsp;
 
 &amp;nbsp; Массаж, растирания: 5-10 к на 10 мл транспортной основы;&amp;nbsp;
 
 &amp;nbsp; Компрессы: теплые масляные (10 к на 10 мл масла);&amp;nbsp;
 
 &amp;nbsp; Обертывания: 10 к бигардии добавить в 500 мл теплой воды, смочить простыню,&amp;nbsp;
 обернуть тело на 2-3 мин, повторить 2-3 раза;&amp;nbsp;
 
 &amp;nbsp; Обогащение косметических средств: 5-6 к на 5 мл основы;&amp;nbsp;
 
 &amp;nbsp; Внутреннее употребление: добавка в чай, кисломолочные продукты, выпечку, салаты, соки (1 к), применять 1-4 раза в день. Запивать большим количеством жидкости;&amp;nbsp;
 
 Аромарасчесывание: наносить на зубцы расчески.
 </param>
</offer>
<offer id="985" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_greypfrut_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/de1/de1b3ae6d8ecab33bd59785046c852cb.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ГРЕЙПФРУТ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ГРЕЙПФРУТ, 10 мл</description>
<param name="Артикул">516</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные</param>
<param name="ДЛЯ ЛИЦА">Жирная, Комбинированная, Отечная, Пигментация</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Лишний вес, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Депрессии, Детокс, очищение от шлаков, Желчегонное, Контроль аппетита, Нормализация пищеварения, Отёки</param>
<param name="Состав">100% эфирное масло Грейпфрут.
 

	 Получение&amp;nbsp;эфирного&amp;nbsp;масла Грейпфрут:&amp;nbsp;прессинг и центрифугирование плодов Citrus paradisi Macfayden (сем. рутовых).


	 Эфирное масло&amp;nbsp;Герань:&amp;nbsp;плотное, текучее, летучее, с легким соломенно-зеленоватым оттенком.
</param>
<param name="Способ применения">Аромалампы: 8–10 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м?;&amp;nbsp;
 
 Ингаляции: горячие (5–7&amp;nbsp;мин)&amp;nbsp;— 2–3 к; холодные: 3–5&amp;nbsp;мин;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 5–7 к&amp;nbsp;на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Аромамедальоны: 1–3 к;&amp;nbsp;
 
 Косметический лед: 5 к&amp;nbsp;грейпфрута смешать с&amp;nbsp;1 ч.л. меда (косметических сливок, тоника, молочка), растворить в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды, заморозить, протирать лицо, шею, зону декольте;&amp;nbsp;
 
 Полоскания: 2–3 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Аппликации на&amp;nbsp;десны: 7–9 к&amp;nbsp;смешать с&amp;nbsp;маслом зверобоя или черного тмина (1 ч.л.), наносить на&amp;nbsp;больные десны 2–4 раза в&amp;nbsp;день;&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 1–3 к&amp;nbsp;на&amp;nbsp;2 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 5–7 к; горячие и&amp;nbsp;холодные сидячие -3-6 к; горячие ножные&amp;nbsp;— 3–4 к;&amp;nbsp;
 
 Массаж, растирания: 5–10 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Эротический массаж и&amp;nbsp;интим-косметика: 10 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);&amp;nbsp;
 
 Компрессы: теплые масляные (10 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла); холодный жаропонижающий компресс (10 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл): намочить и&amp;nbsp;отжать мягкую х/б&amp;nbsp;ткань, прикладывать к&amp;nbsp;икроножным мышцам, лбу, протирать все тело;&amp;nbsp;
 
 Спринцевания: 3–5 к&amp;nbsp;на&amp;nbsp;0,5 ч.л. соды растворить в&amp;nbsp;200–300&amp;nbsp;мл&amp;nbsp;теплой воды;&amp;nbsp;
 
 Обертывания: 10 к&amp;nbsp;грейпфрута добавить в&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;теплой воды, смочить простыню, обернуть тело на&amp;nbsp;2–3&amp;nbsp;мин, повторить 2–3 раза;&amp;nbsp;
 
 Обогащение косметических средств: 5–6 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;
&amp;nbsp;</param>
</offer>
<offer id="986" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_el_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/65f/65f027ee0863e1c0af602bbcc719efba.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ЕЛЬ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ЕЛЬ, 10 мл</description>
<param name="Артикул">504</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">От выпадения, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">При кашле, Травмы и ссадины</param>
<param name="Состав">100% эфирное масло Ель.
 
 Получение&amp;nbsp;эфирного&amp;nbsp;масла Ель:&amp;nbsp;водно-паровая дистилляция хвои Abies picea (сем. хвойных).
 
 Эфирное масло Ель:&amp;nbsp;легкое, текучее, летучее, бесцветное или с легким зеленоватым оттенком.&amp;nbsp;
 </param>
<param name="Способ применения">Аромакурительницы: 2–5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 4–6 к&amp;nbsp;ели на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 3–5 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Противопростудные растирания: 20 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;базисного масла, растирать грудную клетку детей и&amp;nbsp;взрослых;&amp;nbsp;
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, воспалений, боли (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 2 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Примочки: 15 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;кипяченой воды, намочить и&amp;nbsp;отжать тампон, прикладывать к&amp;nbsp;области нагноения на&amp;nbsp;3–5&amp;nbsp;мин;&amp;nbsp;
 
 Промывание ран: 2% раствор ели (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Освежающее втирание: смешать 50&amp;nbsp;мл&amp;nbsp;водки с&amp;nbsp;15 к&amp;nbsp;ели, смочить салфетку, протирать тело и&amp;nbsp;зоны повышенного потоотделения.;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="987" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_imbir_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/b15/b15b53798472dc6114d1e25c8585d13b.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ИМБИРЬ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ИМБИРЬ, 10 мл</description>
<param name="Артикул">531</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные, Жирные у корней / Сухие на кончиках, Ломкие, секущиеся, От выпадения</param>
<param name="ДЛЯ ЛИЦА">Жирная, Комбинированная, Комедоны (засорение пор , черные точки), Отечная, Пористый рельеф кожи, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Жирная кожа, Потеря эластичности кожи, Проблемная кожа, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Апатия, Боли в мышцах и суставах, Герпес, Головная боль, Метеозависимость, Невралгии, Нормализация пищеварения, Отёки, При насморке, При простуде, Слабость, утомляемость, Улучшение кровообращения, Улучшение потенции</param>
<param name="Состав">100% эфирное масло Имбиря.
 Получение&amp;nbsp;эфирного масла&amp;nbsp;Имбирь:&amp;nbsp;водно-паровая дистилляция корней Zingiber officinalis (сем. имбирных).
 </param>
<param name="Способ применения">Аромакурительницы: 3-7 к на 15 м2;&amp;nbsp;
 Ингаляции: горячие (3-5 мин) - 1 к; холодные: 2-4 мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 Полоскания: 1 к с 0,5 ч.л. эмульгатора (сода, соль, мед) на стакан теплой воды;&amp;nbsp;
 
 Ванны: общие – 3-5 к; теплые сидячие – 2-3 к;&amp;nbsp;
 
 Массаж, растирания: 5-6 к на 10 мл транспортной основы;&amp;nbsp;
 
 Эротический массаж и интим-косметика: 5 к на 15 мл основы (масло макадамии, жожоба);&amp;nbsp;
 
 Компрессы: теплые масляные - на область болей, спазмов, воспаления (7-8 к на 10 мл масла);&amp;nbsp;
 
 Антицеллюлитные обертывания: 10 к добавить на 2 ст. ложки морской соли, растворить в 500 мл горячей воды, намочить и отжать простыню, обернуть тело на 5-10 мин;&amp;nbsp;
 
 Обогащение косметических средств: 3-5 к на 5 мл основы;&amp;nbsp;
 
 Омолаживающие тонизирующие маски: 2-4 к на 5 мл масла жожоба или виноградных косточек;&amp;nbsp;
 
 Маски для волос: 10 к на 15 мл основы (бальзам, масло макадамии), нанести по проборам, сделать теплую повязку на 15-20 мин;&amp;nbsp;
 
 Косметический лед: 4-6 к смешать с медом или косметическими сливками (1 ч.л.), развести в 200 мл воды и порционно заморозить. Протирать лицо, шею, область декольте утром и вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в мед, варенье (4-5 к на 100 мл), применять по 1 ч.л. смеси 1-4 раза в день. Запивать зеленым чаем, соком;&amp;nbsp;
 
 Аромарасчесывание: наносить на зубцы расчески.&amp;nbsp;
 
 ПРЕДОСТОРОЖНОСТИ ПРИМЕНЕНИЯ эфирного масла имбиря: никогда не принимать внутрь натощак. Соблюдать осторожность при использовании во время беременности и в геронтологической практике.
 
 </param>
</offer>
<offer id="988" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_kayaput_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/d65/d650906f9325172322584e51a3fd2157.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО КАЯПУТ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО КАЯПУТ, 10 мл</description>
<param name="Артикул">530</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные у корней / Сухие на кончиках, От выпадения, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Жирная, Комедоны (засорение пор , черные точки), Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Жирная кожа, Отечная кожа, Проблемная кожа</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Антисептическое, Дерматиты, Нормализация пищеварения, При зубной боли, При простуде, Травмы и ссадины</param>
<param name="Состав">100% эфирное масло Каяпут.
Получение&amp;nbsp;эфирного масла&amp;nbsp;Каяпут:&amp;nbsp;водно-паровая дистилляция листьев Malaeuca Leucadendron, Melaleuca cajeputi Roxb (сем. миртовых).&amp;nbsp;</param>
<param name="Способ применения">
 Аромакурительницы: 5–7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Ингаляции: горячие (5–7&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 4–6 к&amp;nbsp;каяпута на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 5–7 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж: 6–7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Противопростудные растирания: 20 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;базисного масла, растирать грудную клетку детей и&amp;nbsp;взрослых;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, воспалений, боли (10 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 3 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Тампонада: при отите пропитать маслом зверобоя тампон для уха, нанести 1 к&amp;nbsp;каяпута, отжать, глубоко заложить в&amp;nbsp;наружный слуховой проход;&amp;nbsp;
 
 Обогащение косметических средств: 4–7 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Примочки: 15 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;кипяченой воды, намочить и&amp;nbsp;отжать тампон, прикладывать к&amp;nbsp;области травмы на&amp;nbsp;3–5&amp;nbsp;мин;&amp;nbsp;
 
 Промывание ран: 2% раствор каяпута (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками. При боли в&amp;nbsp;горле принимать по&amp;nbsp;1 к&amp;nbsp;на&amp;nbsp;бисквите или печенье, длительно жевать (повторять каждый час);&amp;nbsp;
 
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Освежающее втирание: смешать 50&amp;nbsp;мл&amp;nbsp;водки с&amp;nbsp;15 к&amp;nbsp;каяпута, смочить салфетку, протирать тело и&amp;nbsp;зоны повышенного потоотделения;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="989" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_kedr_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>530</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/33e/33eedc3741baa494b7eea46c092f7027.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО КЕДР, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО КЕДР, 10 мл</description>
<param name="Артикул">562</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся, От выпадения, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Жирная, Комедоны (засорение пор , черные точки), Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Проблемная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Нормализация пищеварения, При простуде, Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло Кедр.

	 Получение&amp;nbsp;эфирного масла&amp;nbsp;Кедр:&amp;nbsp;длительная водно-паровая дистилляция древесины Juniperus virginiana (сем. сосновых).

Эфирное масло Кедр:&amp;nbsp;бесцветная, вязкая жидкость, в которой на холоде допустимо образование игольчатых кристаллов кедрола.&amp;nbsp;</param>
<param name="Способ применения">
 Аромакурительницы: 5–7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 4–6 к&amp;nbsp;кедра на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 
 Ванны: общие&amp;nbsp;— 5–8 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Противопростудные растирания: 20 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;базисного масла, растирать грудную клетку детей и&amp;nbsp;взрослых;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, воспаления, боли (7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 4 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обогащение косметических средств: 3–4 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Примочки: 15 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;кипяченой воды, намочить и&amp;nbsp;отжать тампон, прикладывать к&amp;nbsp;области воспаления;&amp;nbsp;
 
 Промывание ран: 2% раствор кедра (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Маски от&amp;nbsp;трещин: 20 к&amp;nbsp;смешать с&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла авокадо, нанести на&amp;nbsp;проблемные участки густым слоем, покрыть пленкой или парафином, тепло укутать, оставить на&amp;nbsp;10–15&amp;nbsp;мин;&amp;nbsp;
 
 Косметический лед: 3 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Освежающее втирание: смешать 50&amp;nbsp;мл&amp;nbsp;водки с&amp;nbsp;15 к&amp;nbsp;кедра, смочить салфетку, протирать тело и&amp;nbsp;зоны повышенного потоотделения;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески;
&amp;nbsp;</param>
</offer>
<offer id="990" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_koritsa_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1950</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/3e0/3e00d8ffed04748d73d85ec6774c9a5e.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО КОРИЦА, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО КОРИЦА, 10 мл</description>
<param name="Артикул">523</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Постакне, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Лишний вес</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Головокружения, При простуде, Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло «Корица»</param>
<param name="Способ применения">Аромакурительницы: 2–3 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 2–3 к&amp;nbsp;корицы на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 2–4 к; теплые сидячие&amp;nbsp;— 1–2 к;&amp;nbsp;
 
 Массаж, растирания: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, боли (3 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Лифтинг-компресс: 5–6 к&amp;nbsp;корицы нанести на&amp;nbsp;1 ч.л. морской соли, растворить в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;теплой воды, намочить и&amp;nbsp;отжать бандаж, туго обернуть подчелюстную зону на&amp;nbsp;5–7&amp;nbsp;мин;&amp;nbsp;
 
 Эротический массаж и&amp;nbsp;интим-косметика: 4 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Локальные аппликации на&amp;nbsp;трофические язвы: 15 к&amp;nbsp;смешать с&amp;nbsp;5 к&amp;nbsp;масла зверобоя или черного тмина, наносить ватной палочкой строго на&amp;nbsp;область некроза;&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="991" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_ladan_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2390</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/96d/96d2f89fefbfa1d7012f26d76a1a8728.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ЛАДАН, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ЛАДАН, 10 мл</description>
<param name="Артикул">557</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные у корней / Сухие на кончиках, Ломкие, секущиеся, От выпадения, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Отечная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Сухая кожа, Шелушение</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Бессонница, Депрессии, Отёки, При насморке, При простуде</param>
<param name="Состав">100% эфирное масло «Ладан»&amp;nbsp;
 </param>
<param name="Способ применения">Аромакурительницы: 4–6 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 1–2&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 3–5 к; теплые сидячие&amp;nbsp;— 1–2 к;&amp;nbsp;
 
 Массаж: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Эротический массаж и&amp;nbsp;интим-косметика: 3 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область боли, спазм (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Омолаживающие и&amp;nbsp;регенерирующие маски: 3–5 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;масла жожоба или виноградных косточек;&amp;nbsp;
 
 Скорая помощь при раздражении кожи, ожогах: аппликации чистым маслом на&amp;nbsp;участки покраснения и&amp;nbsp;жжения;&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (1 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл) применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать зеленым чаем, соком;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="992" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_limett_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>710</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/9d0/9d0ab0afe0ce66b48d7ee1667897c420.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ЛИМЕТТ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ЛИМЕТТ, 10 мл</description>
<param name="Артикул">553</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные</param>
<param name="ДЛЯ ЛИЦА">Жирная, Потеря эластичности, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Жирная кожа, Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Детокс, очищение от шлаков, Желчегонное, Нормализация пищеварения</param>
<param name="Состав">100% эфирное масло лиметта.&amp;nbsp;</param>
<param name="Способ применения">ПРИМЕНЕНИЕ эфирного масла ЛИМЕТТ:&amp;nbsp;
 
 Ингаляции: горячие – 1 - 2 к. (6 - 10 мин), холодные – 5 - 7 мин;&amp;nbsp;
 
 Аромакурительницы: 5 - 7 к. на 15 кв. м;&amp;nbsp;
 
 Аромамедальоны: 1 - 3 к.;&amp;nbsp;
 
 Распаривание лица: 3 - 4 к., распаривать 3 - 5 мин;&amp;nbsp;
 
 Ванны: общие – 6 - 8 к.; сидячие - 2 - 3 к.; для ног - 3 - 4 к.;&amp;nbsp;
 
 Полоскания: 2 - 4 к. на 200 мл теплой воды;&amp;nbsp;
 
 Массаж: 4 - 7 к. на 10 мл базисного масла;&amp;nbsp;
 
 Маски: для волос: 5 - 7 к. смешать с глиной, бальзамом, маслом макадамии (5 - 7 мл), нанести на кожу головы (по проборам), тепло укутать, оставить на 10 - 15 мин; для лица: 2 - 3 к. на 5 мл основы (масло виноградных косточек, ростков пшеницы, маски из глины, спирулины), равномерно нанести на лицо (на зоны расширенных пор - более толстым слоем), оставить на 5 мин;&amp;nbsp;
 
 Влажные обертывания: 10 к. на 500 мл воды, намочить и отжать простыню, обернуть тело 3 - 4 раза;&amp;nbsp;
 
 Компрессы: масляные – 7-8 к на 5 мл основы o теплые и холодные водные - 5-7 к на 200 мл воды, намочить и отжать гигроскопичную ткань, прикладывать ко лбу, икроножным мышцам (при гипертермии), на лицо, области колик, болей;&amp;nbsp;
 
 Обогащение косметики: 7 к. на 15 г основы;&amp;nbsp;
 
 Косметический лед: 3 - 5 к. добавить в 100 мл воды, залить в форму, заморозить. Протирать лицо, шею, зону декольте;&amp;nbsp;
 
 Дезодорант: 10 - 12 к на 100 мл тоника, лосьона или воды, пропитать ватный тампон, протирать участки, склонные к повышенному потоотделению;&amp;nbsp;
 
 Прием внутрь: 5 - 7 к. смешать с 50 мл меда, варенья, масла, принимать по 0,5 ч. л. смеси утром и вечером. Запивать соком, кефиром, чаем. Идеально подходит для обогащения сухофруктов;&amp;nbsp;
 
 Аромарасчесывание: наносить в чистом виде (или 1:1 с маслом макадамии) на зубцы расчески, расчесывать волосы, начиная с кончиков&amp;nbsp;
 
 ПРЕДОСТОРОЖНОСТИ ПРИМЕНЕНИЯ эфирного масла ЛИМЕТТ: не наносить на кожу перед контактом с активным солнцем.
 
 
 </param>
</offer>
<offer id="993" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_limon_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>660</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/415/4157d8b068f5b79702177911eb2002e5.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ЛИМОН, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ЛИМОН, 10 мл</description>
<param name="Артикул">538</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блондинок, Ломкие, секущиеся, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Жирная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Варикоз, Жирная кожа, Лишний вес, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Проблемы с ногтями</param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Антисептическое, При геморрое, Расширение вен</param>
<param name="Состав">100% эфирное масло «Лимон»&amp;nbsp;</param>
<param name="Способ применения">Ингаляции: горячие&amp;nbsp;— 1–2 к&amp;nbsp;(6–10&amp;nbsp;мин), o&amp;nbsp;холодные&amp;nbsp;— 5–7&amp;nbsp;мин;
 
 Аромакурительницы: 5–7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1–3 к;&amp;nbsp;
 
 Распаривание лица: 3–4 к, распаривать 3–5&amp;nbsp;мин;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 6–8 к; сидячие&amp;nbsp;— 2–3 к; для ног&amp;nbsp;— 3–4 к;&amp;nbsp;
 
 Полоскания: 2–4 к&amp;nbsp;на&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;теплой воды;&amp;nbsp;
 
 Массаж: 4–7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;базисного масла;&amp;nbsp;
 
 Маски: для волос: 5–7 к&amp;nbsp;смешать с&amp;nbsp;глиной, бальзамом, маслом макадамии (5–7&amp;nbsp;мл), нанести на&amp;nbsp;кожу головы (по&amp;nbsp;проборам), тепло укутать, оставить на&amp;nbsp;10–15&amp;nbsp;мин; для лица: 2–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы (масло виноградных косточек, ростков пшеницы, маски из&amp;nbsp;глины, спирулины), равномерно нанести на&amp;nbsp;лицо (на&amp;nbsp;зоны расширенных пор&amp;nbsp;— более толстым слоем), оставить на&amp;nbsp;5&amp;nbsp;мин;&amp;nbsp;
 
 Влажные обертывания: 10 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;воды, намочить и&amp;nbsp;отжать простыню, обернуть тело 3–4 раза;&amp;nbsp;
 
 Компрессы: масляные&amp;nbsp;— 7–8 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы o&amp;nbsp;теплые и&amp;nbsp;холодные водные&amp;nbsp;— 5–7 к&amp;nbsp;на&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды, намочить и&amp;nbsp;отжать гигроскопичную ткань, прикладывать ко&amp;nbsp;лбу, икроножным мышцам (при гипертермии), на&amp;nbsp;лицо, области колик, болей;&amp;nbsp;
 
 Обогащение косметики: 7 к&amp;nbsp;на&amp;nbsp;15 г&amp;nbsp;основы;&amp;nbsp;
 
 Косметический лед: 3–5 к&amp;nbsp;добавить в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;воды, залить в&amp;nbsp;форму, заморозить.&amp;nbsp;
 Протирать лицо, шею, зону декольте;&amp;nbsp;
 
 Дезодорант: 10–12 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;тоника, лосьона или воды, пропитать ватный тампон, протирать участки, склонные к&amp;nbsp;повышенному потоотделению;
 
 Аппликации для отбеливания кожи: 10 к лимона на 10 к базисного масла и 1 ч.л влажной глины, наносить локально на область гиперпигментации;
 
 &amp;nbsp;Прием внутрь: 5-7 к смешать с 50 мл меда, варенья, масла, принимать по 0,5 ч.л. смеси утром и вечером. Запивать соком, кефиром, чаем;
 
 Аромарасчесывание: наносить в чистом виде (или 1:1 с маслом макадамии) на зубцы расчески, расчесывать волосы, начиная с кончиков.
 
 Меры предосторожности: фототоксично – не наносить на кожу перед контактом с активным солнцем. При нанесении на кожу вызывает покалывание, жжение, гиперемию в течение 3-5 мин. Реакция естественна.
 
 Правила хранения: в защищенном от прямых солнечных лучей прохладном месте. Срок хранения при соблюдении герметичности упаковки – до 3 лет.
 
 </param>
</offer>
<offer id="994" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_mirra_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3270</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/1f6/1f64e54c4a00df817b7265aedbbbdb6b.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО МИРРА, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО МИРРА, 10 мл</description>
<param name="Артикул">574</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся, От выпадения</param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Стрии, растяжки</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Кровоточивость десен (парадонтоз), Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло «Мирра»&amp;nbsp;</param>
<param name="Способ применения">Ингаляции: горячие (5–6&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 7–8&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 3–5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 Полоскания: 2 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 5–6 к; теплые сидячие&amp;nbsp;— 3–5 к;&amp;nbsp;
 
 Массаж, растирания: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Эротический массаж и&amp;nbsp;интим-косметика: 10 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, боли (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Регенерирующая «повязка»: аппликации чистым маслом мирры на&amp;nbsp;область травм, трофических язв;&amp;nbsp;
 
 Обогащение косметических средств: 4–5 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Рассасывание рубцов и&amp;nbsp;стрий: аппликации на&amp;nbsp;гребень рубцовой ткани чистым маслом мирры;&amp;nbsp;
 
 Косметический лед: 5 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (5–7 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="995" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_neroli_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1680</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/cb9/cb988720e0d2c982873b5157fc03d51b.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО НЕРОЛИ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО НЕРОЛИ, 10 мл</description>
<param name="Артикул">527</param>
<param name="Вес/объем">10</param>
<param name="Картинки">https://styx-online.ru/upload/iblock/0da/0daba7bc68abdb443cba33d25f47c186.jpg, https://styx-online.ru/upload/iblock/181/1810f5702ce9eee4e8888d97bd5b19d7.png</param>
<param name="ДЛЯ ВОЛОС">Для блеска, Ломкие, секущиеся, Поврежденные</param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Купероз, Сухая, Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Сосудистый рисунок, Стрии, растяжки, Сухая кожа, Чувствительная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Герпес, Нормализация пищеварения, Отёки</param>
<param name="Состав">100% эфирное масло «Нероли»&amp;nbsp;</param>
<param name="Способ применения">Ингаляции: горячие (5–7&amp;nbsp;мин)&amp;nbsp;— 1–2 к; холодные&amp;nbsp;— 3–4&amp;nbsp;мин; Аромакурительницы: 5–7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м?;&amp;nbsp;
 Аромамедальоны: 1–2 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 4–6 к&amp;nbsp;нероли на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 1–2 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды; Капли в&amp;nbsp;нос: 4–7 к&amp;nbsp;на&amp;nbsp;2 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 к&amp;nbsp;в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 3–7 к; горячие сидячие 5–7 к; горячие ножные 3–4 к;&amp;nbsp;Аппликации для отбеливания кожи: 10 к лимона на 10 к базисного масла и 1 ч.л влажной глины, наносить локально на область гиперпигментации;
 
 &amp;nbsp;Прием внутрь: 5-7 к смешать с 50 мл меда, варенья, масла, принимать по 0,5 ч.л. смеси утром и вечером. Запивать соком, кефиром, чаем;
 
 Аромарасчесывание: наносить в чистом виде (или 1:1 с маслом макадамии) на зубцы расчески, расчесывать волосы, начиная с кончиков.
 
 Меры предосторожности: фототоксично – не наносить на кожу перед контактом с активным солнцем. При нанесении на кожу вызывает покалывание, жжение, гиперемию в течение 3-5 мин. Реакция естественна.
 
 Правила хранения: в защищенном от прямых солнечных лучей прохладном месте. Срок хранения при соблюдении герметичности упаковки – до 3 лет.
 
 Массаж, растирания: 5–8 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область боли и&amp;nbsp;колик (7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла); холодные водные&amp;nbsp;— на&amp;nbsp;икроножные мышцы, лоб при жаре (7–8 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;воды); Спринцевание: 3 к&amp;nbsp;нанести на&amp;nbsp;? ч. ложки соды и&amp;nbsp;растворить в&amp;nbsp;100–200&amp;nbsp;мл&amp;nbsp;теплой кипяченой воды;&amp;nbsp;
 
 Косметический лед: 5 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить.&amp;nbsp;Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Обогащение косметических средств: 3–4 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;микстуру, мед, варенье (3–4 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Можно добавлять в&amp;nbsp;соусы. Запивать большим количеством жидкости; 
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="997" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_palmaroza_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>840</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/7bf/7bf65e2073a271bdd3272737b5b4fa8f.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ПАЛЬМАРОЗА, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ПАЛЬМАРОЗА, 10 мл</description>
<param name="Артикул">578</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Жирная, Раздражение,воспаления( после пилинга)</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Жирная кожа, Проблемная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Головная боль, При климаксе</param>
<param name="Состав">100% эфирное масло пальмарозы.</param>
<param name="Способ применения">Применение эфирного масла Пальмароза&amp;nbsp;
 
 
 Ингаляции: 5-7 минут (1-2 капли эфирного масла пальмарозы).&amp;nbsp;
 
 
 Аромакурительницы: 3-6 капель на 15 кв. м.&amp;nbsp;&amp;nbsp;
 
 Аромамедальоны: 1-3 капли.&amp;nbsp;
 
 Полоскания: 2-3 капли с 1/2 чайной ложки эмульгатора (сода, соль, мёд) на стакан тёплой воды.&amp;nbsp;
 
 Ванны: общие - 4-7 капель; горячие сидячие – 5-7 капель; горячие ножные – 3-4 капель.&amp;nbsp;&amp;nbsp;
 
 Массаж, растирания: 3-7 капель на 10 мл транспортной основы.&amp;nbsp;
 
 Компрессы: тёплые масляные - на область трофической язвы, пролежня (20 капель эфирного масла пальмарозы на 40 капель масла зверобоя, чёрного тмина, ростков пшеницы).&amp;nbsp;
 
 Аппликации: чистым эфирным маслом на область трофического дефицита.&amp;nbsp;
 
 
 Обогащение косметических средств: 3-4 капли на 5 мл основы.&amp;nbsp;
 
 Спринцевание: 3 капли нанести на 1/2 чайной ложки соды и растворить в 100-200 мл тёплой кипяченой воды.&amp;nbsp;
 
 Микроклизмы: 7-8 капель на 2 столовые ложки масла зверобоя или ростков пшеницы, при помощи маленькой груши ввести в задний проход (при геморрое) и полежать на левом боку 3-5 мин.&amp;nbsp;
 
 Освежающее втирание: смешать 50 мл водки с 15 каплями пальмарозы, смочить салфетку, протирать все тело и зоны повышенного потоотделения.&amp;nbsp;
 
 Внутреннее употребление: добавка в мёд, варенье, сладкие соусы (3-4 капли на 100 мл), применять по 1 чайной ложке смеси 1-4 раза в день.&amp;nbsp;
 Запивать большим количеством жидкости. Можно 1 каплю наносить на курагу (принимать 2 раза в день).&amp;nbsp;
 
 
 </param>
</offer>
<offer id="998" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_petitgreyn_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>660</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/10f/10f2df9d0f884c14e1031a1338d6eb5d.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ПЕТИТГРЕЙН, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ПЕТИТГРЕЙН, 10 мл</description>
<param name="Артикул">546</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">От выпадения, Чувствительная кожа головы</param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для загара, Потеря эластичности кожи, Потливость, Сухая кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ">Потливость (гипергидроз)</param>
<param name="ЗДОРОВЬЕ">Головная боль, Детокс, очищение от шлаков, Отёки</param>
<param name="Состав">100% Эфирное масло Петитгрейн</param>
<param name="Способ применения">Ингаляции: горячие (5-7 мин) - 2-3 к; холодные - 5-7 мин;
 
 Аромакурительницы: 6-10 к на 15 м2 ;&amp;nbsp;
 
 В сауне и бане: 5-7 к петит грейн на 1 сеанс;
 
 Аромамедальоны: 1-3 к;
 
 Косметический лед: 5 к петит грейн смешать с 1 ч.л. меда, растворить в 200 мл воды, заморозить, протирать лицо, шею, зону декольте;
 
 Полоскания: 2-3 к с 0,5 ч.л. эмульгатора (сода, соль, мед) на стакан теплой воды;&amp;nbsp;
 
 Аппликации на десны: 5 к смешать с маслом зверобоя или черного тмина (1 ч.л.), наносить на больные десны 2-4 раза в день;&amp;nbsp;
 
 Капли в нос: 1-3 к на 2 ч.л. масла зверобоя, закапывать по 3-4 капли в каждую ноздрю 1 раз в 60-90 мин;
 
 Ванны: общие - 3-5 к; горячие и холодные сидячие –3-6 к;&amp;nbsp; горячие ножные – 3-4 к;&amp;nbsp;
 
 Массаж, растирания: 5-10 к на 10 мл транспортной основы;
 
 Компрессы: теплые масляные (10 к на 10 мл масла);
 
 Обертывания: 10 к петит грейн добавить в 500 мл теплой воды, смочить простыню, обернуть тело на 2-3 мин, повторить 2-3 раза;
 
 Обогащение косметических средств: 5-6&amp;nbsp; к на 5 мл основы;
 
 Внутреннее употребление: добавка в чай, кисломолочные продукты, выпечку, салаты, соки (1 к), применять 1-4 раза в день. Запивать большим количеством жидкости;
 
 Освежающее втирание: смешать 50 мл водки с 20 к петит грейн, смочить салфетку, протирать все тело и зоны повышенного потоотделения;
 
 Аромарасчесывание: наносить на зубцы расчески.
 </param>
</offer>
<offer id="999" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_rozmarin_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>660</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/563/563f3c4484dd11ae96b1abe0ed7c8b7c.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО РОЗМАРИН, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО РОЗМАРИН, 10 мл</description>
<param name="Артикул">511</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные, Ломкие, секущиеся, От выпадения, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Жирная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Варикоз, Жирная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Вегетососудистая дистония, При геморрое, Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло «Розмарин»&amp;nbsp;</param>
<param name="Способ применения">Ингаляции: горячие (4–5&amp;nbsp;мин)&amp;nbsp;— 1–2 к; холодные&amp;nbsp;— 3–4&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 3–7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1–2 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 5–7 к&amp;nbsp;розмарина на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 1–2 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 3–4 к&amp;nbsp;на&amp;nbsp;2 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 к&amp;nbsp;в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 4–7 к; горячие сидячие -5-7 к; горячие ножные&amp;nbsp;— 3–4 к;&amp;nbsp;
 
 Массаж, растирания: 5–8 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область боли и&amp;nbsp;колик (7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла); холодные водные&amp;nbsp;— на&amp;nbsp;икроножные мышцы, лоб при жаре (7–8 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;воды);&amp;nbsp;
 
 Обогащение косметических средств: 3–4 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;микстуру, мед, варенье (3–4 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды во&amp;nbsp;избежание раздражения слизистой оболочки желудка. Добавка в&amp;nbsp;соусы;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="1000" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_rozovoe_derevo_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/d71/d716b1df7ac0e909868f476a524fe943.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО РОЗОВОЕ ДЕРЕВО, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО РОЗОВОЕ ДЕРЕВО, 10 мл</description>
<param name="Артикул">510</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Проблемная, Сухая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Сосудистый рисунок, Сухая кожа, Чувствительная кожа, Шелушение</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Головная боль, Детокс, очищение от шлаков</param>
<param name="Состав">
 100% эфирное масло «Розовое дерево»&amp;nbsp;
 
 
 </param>
<param name="Способ применения">Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 3–5&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 5–7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 Полоскания: 3 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 При головной боли: смешать 7 к&amp;nbsp;розового дерева и&amp;nbsp;10 к&amp;nbsp;базисного масла, нанести на&amp;nbsp;область лба, проекции сонных артерий, затылочные бугры, височные ямки, помассировать (провести процедуру 2–3 раза с&amp;nbsp;перерывом в&amp;nbsp;10–15&amp;nbsp;мин);&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 5–6 к; теплые сидячие&amp;nbsp;— 3–4 к;&amp;nbsp;
 
 Массаж, растирания: 8–10 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные на&amp;nbsp;область травмы, боли, воспаления, ожога (5–6 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла); холодный обезболивающий, успокаивающий компресс (5 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл): намочить и&amp;nbsp;отжать мягкую ткань, прикладывать к&amp;nbsp;области боли (лоб&amp;nbsp;— при головной боли, грудная клетка&amp;nbsp;— при сердцебиениях и т. д.), ожога. При гипертонии можно протирать все тело или делать обертывания;&amp;nbsp;
 
 Обогащение косметических средств: 5–7 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Локальные аппликации: 3–4 к&amp;nbsp;смешать с&amp;nbsp;10 к&amp;nbsp;масла зверобоя или виноградных косточек, наносить на&amp;nbsp;элемент воспаления;&amp;nbsp;
 
 Косметический лед: 5–7 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать кефиром, ряженкой, мацони, айраном, соком с&amp;nbsp;мякотью;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
 </param>
</offer>
<offer id="1001" available="true">
<url>https://styx-online.ru/catalog/smesi_efirnykh_masel/smes_efirnykh_masel_sauna_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/ddf/ddf0f7488dd0c1721cdcf37caff7eda7.jpg</picture>
<vendor></vendor>
<name>СМЕСЬ ЭФИРНЫХ МАСЕЛ САУНА, 10 мл</name>
<description>СМЕСЬ ЭФИРНЫХ МАСЕЛ САУНА, 10 мл</description>
<param name="Артикул">568</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Отечная кожа, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Детокс, очищение от шлаков</param>
<param name="Состав">Эфирные масла апельсина, можжевельника, шишек ели, мяты, сосны.&amp;nbsp;
 </param>
<param name="Способ применения">Методы применения композиции 100 % эфирных масел аналогичны методам применения 100 % «моно» эфирных масел.&amp;nbsp;
 Методов применения много (около 30), вот самые основные и популярные:&amp;nbsp;
 
 • Внутреннее употребление
 1-2 капли эфирной композиции смешать с 1 ч. л. эмульгатора (базовое масло холодного отжима, мёд, молоко, варенье, печенье, сахар и т. д.), запивать стаканом воды. 1-2 раза в день.
 
 • Кулинарное применение&amp;nbsp;
 Использовать для ароматизации чая (5-7 капель на 100 г сухой заварки); для ароматизации вина (5-7 капель на бутылку вина, растворять эфирное масло в данном случае с помощью эмульгатора – мёда или сахара); в качестве пикантной добавки и приправы в еду (1-4 капли в зависимости от блюда).
 
 &amp;nbsp;• Ванны&amp;nbsp;
 Смешать 6-10 капель эфирной композиции с 30-60 г/мл эмульгатора (соль, сода, мёд, агар-агар, пена для ванн, сливки, молоко, крахмал и т. п.), после чего добавить смесь в воду. Температурный режим ванны подбирать индивидуально! Следует помнить, что ванны с водой, имеющей температуру тела (36-37 С), не имеют противопоказаний!&amp;nbsp;
 
 • Ингаляции – вдыхание летучих веществ через нос и рот.&amp;nbsp;
 Холодные ингаляции: аромакурительницы – в верхнюю чашу аромалампы налить тёплую воду, добавить эфирное масло из расчёта 5 капель на 15 кв. м., в нижний ярус поставить зажжённую свечу. Время ингаляции 20 минут - 4 ч, увеличивать его постепенно. Аромамедальоны – 2-3 капли эфирного масла капнуть в отверстие в медальоне и носить на себе необходимое время; нанести 1-2 капли эфирного масла на ладони, растереть и сделать 15-20 глубоких вдохов.
 
 Горячие ингаляции: в посуду с широким горлом налить кипяток. Накрыть голову полотенцем и после этого добавить не более 2 капель эфирного масла или композиции в кипяток. Глубоко вдыхать аромат в течении 3-10 минут. Во время ингаляции ВСЕГДА закрывать глаза!&amp;nbsp;
 
 • Бани, сауны – поставить рядом с источником тепла термостойкий сосуд (50-100 мл) с широким горлышком, наполненный водой с добавлением эфирного масла или композиции (до 10 капель на 15 кв. м.), этой смесью также можно окропить деревянные лавки и стены. Непосредственно на раскалённые камни наносить эфирные масла нельзя!&amp;nbsp;
 
 • Массаж – для приготовления массажной смеси следует исходить из дозировки 3-5 капель на 10 мл основы. Желательно всегда подогревать готовое массажное масло.&amp;nbsp;
 
 &amp;nbsp;• Обёртывания – в ёмкость (2-3 л) налить тёплую воду и добавить в неё 15 капель эфирного масла или композиции эфирных масел, после чего смочить в ароматической воде простыню или полотенце, и завернуть себя во влажную ткань. Время процедуры – 2-5 минут.&amp;nbsp;
 
 А также: ополаскивания, воздействие на биоактивные зоны, клизмирование, ванночки, компрессы, рефлексомассаж, растирания, полоскания, капли, тампонада, спринцевание, примочки, аппликации, ароматическая соль, умывание, расчёсывание, дезинфекция дома, моющие средства, пятновыводители, ароматизация гардероба, репеллентные или инсектицидные средства, уход за домашними животными.</param>
</offer>
<offer id="1002" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_tsitronella_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>490</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/855/8553298d5018b80d1e6c6ce2bce6490c.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ЦИТРОНЕЛЛА, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ЦИТРОНЕЛЛА, 10 мл</description>
<param name="Артикул">514</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска</param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Пористый рельеф кожи, Проблемная, Сухая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Лишний вес, Потеря эластичности кожи, Стрии, растяжки</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Вегетососудистая дистония, Детокс, очищение от шлаков</param>
<param name="Состав">100% эфирное масло цитронеллы.&amp;nbsp;</param>
<param name="Способ применения">Применение эфирного масла цитронеллы:&amp;nbsp;
 
 Ингаляции: горячие (3 - 5 мин) - 1 к.; холодные - 2 - 3 мин;&amp;nbsp;
 
 Аромакурительницы: 2 - 5 к. на 15 кв. м;&amp;nbsp;
 
 Аромамедальоны: 1 к.; В сауне и бане: 3 - 5 к. цитронеллы на 1 сеанс;&amp;nbsp;
 
 Полоскания: 1 к. с 0,5 ч. л. эмульгатора (сода, соль, мед) на стакан теплой воды;&amp;nbsp;
 
 Тампонада: нанести на увлажненный ватный тампон 1 - 2 к., прикладывать к больному зубу на 3 - 5 мин;&amp;nbsp;
 
 Тампонада уха: смешать 2 к. эфирного масла с 5 к. растительного масла, смочить турунду, отжать, глубоко затампонировать наружный слуховой проход;&amp;nbsp;
 
 Ванны: общие – 2 - 4 к.; теплые сидячие – 1 - 3 к.;&amp;nbsp;
 
 Массаж, растирания: 3 - 5 к. на 10 мл транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные - на область травм, боли (5 к. на 10 мл базисного масла);&amp;nbsp;
 
 Эротический массаж и интим-косметика: 10 к. на 15 мл основы (масло макадамии, жожоба);&amp;nbsp;
 
 Капли в нос: 2 к. на 2 - 3 ч. л. масла зверобоя, закапывать по 3 - 4 к. в каждую ноздрю 1 раз в 60 - 90 мин;&amp;nbsp;
 
 Обогащение косметических средств: 1 - 3 к. на 5 мл основы;&amp;nbsp;
 
 Локальные аппликации: 5 к. смешать с 10 к. масла зверобоя или черного тмина, наносить ватной палочкой на элемент воспаления;&amp;nbsp;
 
 Косметический лед: 2 к. смешать с медом или косметическими сливками (1 ч. л.), развести в 200 мл воды и порционно заморозить. Протирать лицо, шею, область декольте утром и вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в мед, варенье (4 - 5 к. на 100 мл), применять по 1 ч. л. смеси 1 - 4 раза в день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Репеллент: 15 к. смешать с 50 мл базисного масла, молочка для тела или тоника, наносить равномерно на открытые участки тела;&amp;nbsp;
 
 Аромарасчесывание: наносить на зубцы расчески.
 
 
 </param>
</offer>
<offer id="1004" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_shalfey_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1060</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/c61/c618eb61b2ae36a29462bd491b48fb4c.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ШАЛФЕЙ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ШАЛФЕЙ, 10 мл</description>
<param name="Артикул">512</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся, От выпадения</param>
<param name="ДЛЯ ЛИЦА">Комедоны (засорение пор , черные точки), Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потливость, Проблемная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ">Потливость (гипергидроз)</param>
<param name="ЗДОРОВЬЕ">Кровоточивость десен (парадонтоз), Потливость, При простуде</param>
<param name="Состав">100% эфирное масло «Шалфей»&amp;nbsp;</param>
<param name="Способ применения">Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 3–5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 3–5 к&amp;nbsp;шалфея на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 2 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 4–6 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж: 3–8 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Противопростудные растирания: 20 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;базисного масла, растирать грудную клетку детей и&amp;nbsp;взрослых;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, воспалений, боли (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 3 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обертывания: 10 к&amp;nbsp;добавить в&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;теплой воды, смочить простыню, обернуть тело на&amp;nbsp;2–3&amp;nbsp;мин, повторить 2–3 раза;&amp;nbsp;
 
 Примочки: 15 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;кипяченой воды, намочить и&amp;nbsp;отжать тампон, прикладывать к&amp;nbsp;области нагноения на&amp;nbsp;3–5&amp;nbsp;мин;&amp;nbsp;
 
 Промывание ран: 2% раствор шалфея (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Маски для волос: 7–8 к&amp;nbsp;смешать с&amp;nbsp;глиной, бальзамом, маслом макадамии (5–7&amp;nbsp;мл), нанести на&amp;nbsp;кожу головы (по&amp;nbsp;проборам), тепло укутать, оставить на&amp;nbsp;10–15&amp;nbsp;мин;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Освежающее втирание: смешать 50&amp;nbsp;мл&amp;nbsp;водки с&amp;nbsp;15 к&amp;nbsp;шалфея, смочить салфетку, протирать тело и&amp;nbsp;зоны повышенного потоотделения;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески
&amp;nbsp;</param>
</offer>
<offer id="1005" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_shizandra_limonnik_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/8bc/8bccac2cc10ff6863944c0da55d9d7c6.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ШИЗАНДРА (ЛИМОННИК), 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ШИЗАНДРА (ЛИМОННИК), 10 мл</description>
<param name="Артикул">532</param>
<param name="Вес/объем">10</param>
<param name="Картинки">https://styx-online.ru/upload/iblock/457/4572f17b96dbb1b897e64b6bd709ca47.jpg, https://styx-online.ru/upload/iblock/fc4/fc4f722b79984d0564d0b560ce56fdec.png</param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комедоны (засорение пор , черные точки), Пористый рельеф кожи</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Лишний вес, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Контроль аппетита, Расширение вен, Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло шизандры (лимонника).&amp;nbsp;</param>
<param name="Способ применения">Применение эфирного масла шизандры:&amp;nbsp;
 
 Ингаляции: горячие – 1 - 2 к. (5 - 6 мин); холодные – 5 - 7 мин;&amp;nbsp;
 
 Аромакурительницы: 2 - 4 к. на 15 кв. м;&amp;nbsp;
 
 Аромамедальоны: 1 - 3 к.;&amp;nbsp;
 
 В сауне и бане: 2 - 3 к. эфирного масла шизандры на 1 сеанс;&amp;nbsp;
 
 Ванны: общие – 2 - 5 к.; сидячие - 1 - 2 к.; для ног - 3 - 4 к.;&amp;nbsp;
 
 Массаж, растирания: 2 - 5 к. на 10 мл базисного масла;&amp;nbsp;
 
 Рефлексомассаж: 3 к. смешать с маслом макадамии, авокадо и др. (4 - 5 к.), наносить на теменную, височную, затылочную области, ладони при страхах, усталости, для эмоциональной мобилизации (перед экзаменом, совершением серьезного шага;&amp;nbsp;
 
 Компрессы: масляные – 7 - 8 к. на 5 мл основы, прикладывать к области боли, ишемии, видимого сосудистого рисунка; водные - 5 - 7 к. на 200 мл воды, намочить и отжать гигроскопичную ткань, приложить к области видимого сосудистого рисунка, на лоб, икроножные мышцы при гипертермии;&amp;nbsp;
 
 Обогащение косметики: 3 - 4 к. на 15 мл основы;&amp;nbsp;
 
 Косметический лед: 2 - 3 к. добавить в 100 мл воды, залить в форму, заморозить. Протирать лицо, шею, зону декольте;&amp;nbsp;
 
 Дезодорант: 5 - 7 к. на 100 мл тоника, лосьона или воды, пропитать ватный тампон, протирать участки, склонные к повышенному потоотделению;&amp;nbsp;
 
 Прием внутрь: 5 - 7 к. смешать с 50 мл меда, варенья, масла, принимать по 0,5 ч. л. смеси утром и вечером. Запивать соком, кефиром, чаем; При симптомах алкогольного опьянения или похмелья нанести на щепотку соли 1 к. эфирного масла шизандры, размешать соль в 200 мл кефира или томатного сока и выпить.&amp;nbsp;
 
 Общие методы применения эфирных масел:
 
 Методов применения много (около 30), вот самые основные и популярные:
 
 • Внутреннее употребление: 1 - 2 к. эфирного масла смешать с 1 ч. л. эмульгатора (базисное масло холодного отжима, мед, молоко, варенье, печенье, сахар и т. д.), запивать стаканом воды (1 - 2 раза в день).
 
 • Кулинарное применение: использовать для ароматизации чая (5 - 7 к. на 100 гр сухой заварки); для ароматизации вина (5 - 7 к. на бутылку вина, растворять эфирное масло в данном случае с помощью эмульгатора мед или сахар); в качестве пикантной добавки и приправы в еду (1 - 4 к. в зависимости от блюда)
 
 • Ванны. Смешать 6 - 10 к. эфирного масла с 30 - 60 гр/мл эмульгатора (соль, сода, мед, агар-агар, пена для ванн, сливки, молоко, крахмал и т. д.), после чего добавить смесь в воду. Температурный режим ванны подбирать индивидуально!
 
 Следует помнить, что ванны с водой, имеющей температуру тела (36 - 37 С), не имеют противопоказаний!
 
 • Ингаляции. Вдыхание летучих веществ через нос и рот.
 
 Холодные: аромакурительницы – в верхнюю чашу аромалампы налить теплую воду, добавить эфирное масло из расчета 5 к. на 15 кв. м., в нижний ярус поставить зажжённую свечу. Время ингаляции 20 мин - 4 ч. Увеличивать его постепенно;
 
 аромамедальоны – 2 - 3 к. эфирного масла капнуть в отверстие в медальоне и носить на себе необходимое время;
 
 нанести 1 - 2 к. эфирного масла на ладони, растереть и сделать 15 - 20 глубоких вдохов.
 
 Горячие: в посуду с широким горлом налить кипяток. Накрыть голову полотенцем и после этого добавить не более 2 к. эфирного масла в кипяток. Глубоко вдыхать аромат в течение 3 - 10 мин.
 
 Во время ингаляции ВСЕГДА закрывать глаза!
 
 • Бани, сауны – поставить рядом с источником тепла термостойкий сосуд (50 - 100 мл) с широким горлышком, наполненный водой с добавлением эфирного масла (до 10 к. на 15 кв. м.), этой смесью также можно окропить деревянные лавки и стены.
 
 Непосредственно на раскаленные камни наносит эфирные масла нельзя!
 
 • Массаж – для приготовления массажной смеси следует исходить из дозировки 3 - 5 к. эфирного масла на 10 мл основы. Желательно всегда подогревать готовое массажное масло.
 
 • Обертывания – в емкость (2 - 3 л) налить теплую воду и добавить в нее 15 к. эфирного масла, после чего смочить в ароматической воде простыню или полотенце, и завернуть себя во влажную ткань. Время процедуры 2 - 5 мин.
 
 А также: ополаскивания, воздействие на биоактивные зоны, клизмирование, ванночки, компрессы, рефлексомассаж, растирания, полоскания, капли, тампонада, спринцевание, примочки, аппликации, ароматическая соль, умывание, расчесывание, дезинфекция дома, моющие средства, пятновыводители, шкаф, репеллентные или антиинсектицидные средства, уход за домашними животными.</param>
</offer>
<offer id="1006" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_zhasmin_1_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2480</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/814/814b5b7629a3e37958c4b76080e9b6d0.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ЖАСМИН, 1 мл</name>
<description>ЭФИРНОЕ МАСЛО ЖАСМИН, 1 мл</description>
<param name="Артикул">539</param>
<param name="Вес/объем">1</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Сухие, Чувствительная кожа головы</param>
<param name="ДЛЯ ЛИЦА">Обезвоженная, Раздражение,воспаления( после пилинга), Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Сухая кожа, Чувствительная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Сухая, обезвоженная кожа</param>
<param name="ДЛЯ НОГ">Раздражения, воспаления</param>
<param name="ЗДОРОВЬЕ">Бессонница, Депрессии, Ожоги</param>
<param name="Состав">100% эфирное масло Жасмин.
 

	 Получение&amp;nbsp;эфирного масла Жасмин:&amp;nbsp;анфлераж и экстракция Jasminum officinale (сем. гидрангиевых, или маслиновых).

Эфирное масло Жасмин:&amp;nbsp;густое, плотное, вязкое, летучее, цвета чая и кофе.</param>
<param name="Способ применения">
 Аромакурительницы: 2–3 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 1–2&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 2–4 к; теплые сидячие&amp;nbsp;— 1–2 к;&amp;nbsp;
 
 Массаж: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Эротический массаж и&amp;nbsp;интим-косметика: 3 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область боли (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Омолаживающие и&amp;nbsp;регенерирующие маски: 3–5 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;масла жожоба или виноградных косточек;&amp;nbsp;
 
 Скорая помощь при раздражении кожи, ожогах: аппликации чистым маслом на&amp;nbsp;участки покраснения и&amp;nbsp;жжения;&amp;nbsp;
 
 Промывание ран: 2% раствор жасмина (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (1 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать зеленым чаем, соком;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="1007" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_levzeya_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/d5f/d5fd9115d57a13836244fbe6bb463303.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ЛЕВЗЕЯ,10 мл</name>
<description>ЭФИРНОЕ МАСЛО ЛЕВЗЕЯ,10 мл</description>
<param name="Артикул">15590</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Пигментация, Постакне, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Жирная кожа, Проблемная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Апатия, Депрессии, Невралгии, Обезболивающее, При простуде</param>
<param name="Состав">100% эфирное масло «Левзея»&amp;nbsp;</param>
<param name="Способ применения">Аромакурительницы: 4–5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Ингаляции: горячие&amp;nbsp;— 1–2 к&amp;nbsp;(5–6&amp;nbsp;мин); холодные&amp;nbsp;— 5–7&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1–3 к;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 4–7 к; сидячие: 2–3 к; для ног: 3–4 к;&amp;nbsp;
 
 Массаж, растирания: 4–7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;базисного масла;&amp;nbsp;
 
 Рефлексомассаж: 3 к&amp;nbsp;смешать с&amp;nbsp;маслом макадамии, авокадо и&amp;nbsp;др. (4–5 к), наносить на&amp;nbsp;теменную, височную, затылочную области, ладони при страхах, усталости, для эмоциональной мобилизации (перед экзаменом, совершением серьезного шага)&amp;nbsp;
 
 Влажные обертывания: 10 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;воды, намочить и&amp;nbsp;отжать простыню, обернуть тело 3–4 раза;&amp;nbsp;
 
 Компрессы: масляные (7–8 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы)&amp;nbsp;— прикладывать на&amp;nbsp;область нейродермита, боли o&amp;nbsp;водные (5–7 к&amp;nbsp;на&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды)&amp;nbsp;— намочить и&amp;nbsp;отжать гигроскопичную ткань, приложить к&amp;nbsp;области колик, боли, кожных реакций;&amp;nbsp;
 
 Обогащение косметики: 7 к&amp;nbsp;на&amp;nbsp;15 г&amp;nbsp;основы;&amp;nbsp;
 
 Косметический лед: 4–5 к&amp;nbsp;добавить в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;воды, залить в&amp;nbsp;форму, заморозить.&amp;nbsp;
 Протирать лицо, шею, зону декольте;&amp;nbsp;
 
 Дезодорант: 10–12 к&amp;nbsp;добавить в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;тоника, лосьона или воды, пропитать ватный тампон, протирать участки, склонные к&amp;nbsp;повышенному потоотделению;&amp;nbsp;
 
 Прием внутрь: 5–7 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;меда, варенья, масла, принимать по&amp;nbsp;0,5 ч.л. смеси утром и&amp;nbsp;вечером. Запивать соком, кефиром, чаем;&amp;nbsp;
 
 При симптомах алкогольного опьянения или похмелья: нанести на&amp;nbsp;щепотку соли 1 к&amp;nbsp;левзеи, размешать соль в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;кефира или томатного сока и&amp;nbsp;выпить;&amp;nbsp;
 
 Аромарасчесывание: наносить в&amp;nbsp;чистом виде (или 1:1 с&amp;nbsp;маслом макадамии) на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="1009" available="true">
<url>https://styx-online.ru/catalog/aromalampy_/aromalampa_vostochnyy_chay/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>640</price>
<currencyId>RUB</currencyId>
<categoryId>275</categoryId>
<picture>https://styx-online.ru/upload/iblock/d0f/d0f232e8062d80ffc2c100df62c80f52.jpg</picture>
<vendor></vendor>
<name>АРОМАЛАМПА &quot;ВОСТОЧНЫЙ ЧАЙ&quot;</name>
<description>АРОМАЛАМПА &quot;ВОСТОЧНЫЙ ЧАЙ&quot;</description>
<param name="Артикул">33338</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1010" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha__1/maslo_massazhnoe_dlya_litsa_i_tela_kamasutra_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1657.5</price>
<oldprice>2210</oldprice>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>https://styx-online.ru/upload/iblock/2ea/2ea2b434b6065816a5939884f4b5e326.jpg</picture>
<vendor></vendor>
<name>МАСЛО МАССАЖНОЕ ДЛЯ ЛИЦА И ТЕЛА &quot;КАМАСУТРА&quot;, 200 мл</name>
<description>МАСЛО МАССАЖНОЕ ДЛЯ ЛИЦА И ТЕЛА &quot;КАМАСУТРА&quot;, 200 мл</description>
<param name="Артикул">122</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Потеря эластичности, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло виноградных косточек, макадамии, жожоба, эфирные масла розы, иланг-иланга, жасмина, сандала, корицы, ладана, базилика, ветивера, пачули, бергамота и лиметта.</param>
<param name="Способ применения">Подходит для ежедневного ухода за лицом и телом.
 
 Активно используется в профессиональной косметологии в качестве массажного средства.
 
 В качестве маски для лица: нанести на лицо, зону вокруг глаз, шею и декольте разогретое масло массажными движениями на очищенную кожу. Оставить на 15-20 минут, снять остатки масла ватным диском или салфеткой.
 
В качестве средства по уходу за телом: нанести на кожу массажными движениями до полного впитывания.</param>
</offer>
<offer id="1011" available="true">
<url>https://styx-online.ru/catalog/travyanoy_sad_/krem_dlya_zhirnoy_kozhi_litsa_zveroboy_gamamelis_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1280</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/ff4/ff4aff8a5189471368b15ee51cca1173.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ ЖИРНОЙ КОЖИ ЛИЦА &quot;ЗВЕРОБОЙ-ГАМАМЕЛИС&quot; , 50 мл</name>
<description>КРЕМ ДЛЯ ЖИРНОЙ КОЖИ ЛИЦА &quot;ЗВЕРОБОЙ-ГАМАМЕЛИС&quot; , 50 мл</description>
<param name="Артикул">160</param>
<param name="Вес/объем">50</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комбинированная, Комедоны (засорение пор , черные точки), Обезвоженная, Пористый рельеф кожи</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло календулы, авокадо, ростков пшеницы, экстракты зверобоя, гамамелиса, экстракты хмеля, череды, липы, эфирное масло ромашки.
</param>
<param name="Способ применения">Подходит для ежедневного ухода в качестве ночного крема. 

Небольшое количество крема распределить мягкими массирующими движениями по всему лицу после умывания. 
Для достижения более быстрого и пролонгированного действия рекомендуем использовать с тоником для жирной кожи &quot;Зверобой - гамамелис&quot; из линии «Травяной сад».</param>
</offer>
<offer id="1012" available="true">
<url>https://styx-online.ru/catalog/dlya_i_posle_zagara/loson_dlya_zagara_solar_aktiv_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1190</price>
<currencyId>RUB</currencyId>
<categoryId>295</categoryId>
<picture>https://styx-online.ru/upload/iblock/ce0/ce0cacb4dd335ef085f7ca64b072d258.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ДЛЯ ЗАГАРА СОЛАР АКТИВ , 100 мл</name>
<description>ЛОСЬОН ДЛЯ ЗАГАРА СОЛАР АКТИВ , 100 мл</description>
<param name="Артикул">119</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для загара</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло зверобоя, абрикосовых косточек, сок кактуса, экстракт водорослей, юглон (вытяжка из грецкого ореха – является природным автозагаром), витамины, эфирное масло ветивер. 
</param>
<param name="Способ применения">Перед посещением солярия равномерно нанести препарать на всю поверхность тела и лица с помощью спрея.</param>
</offer>
<offer id="1013" available="true">
<url>https://styx-online.ru/catalog/dlya_i_posle_zagara/maslo_dlya_zagara_f3_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>970</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/4ab/4ab45667e4fac4b9b6907202abc1a337.jpg</picture>
<vendor></vendor>
<name>МАСЛО ДЛЯ ЗАГАРА Ф3 , 100 мл</name>
<description>МАСЛО ДЛЯ ЗАГАРА Ф3 , 100 мл</description>
<param name="Артикул">409</param>
<param name="Вес/объем">226</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для загара</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло сои, жожоба, макадамии, экстракты календулы и зверобоя.</param>
<param name="Способ применения">Нанести перед выходом на открытое солнце. 

Обновлять каждый час пребывания на пляже.
</param>
</offer>
<offer id="1014" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/mylo_kalendula_dlya_poriistoy_kozhi_100_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>400</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/342/3421b4e7c33c2fc8ee92676b83c14475.jpg</picture>
<vendor></vendor>
<name>МЫЛО &quot;КАЛЕНДУЛА&quot; ДЛЯ ПОРИИСТОЙ КОЖИ , 100 г</name>
<description>МЫЛО &quot;КАЛЕНДУЛА&quot; ДЛЯ ПОРИИСТОЙ КОЖИ , 100 г</description>
<param name="Артикул">414</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комедоны (засорение пор , черные точки), Пористый рельеф кожи, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Растительные масла, водоросли, мед, алоэ, экстракт и включения соцветий календулы, эфирные масла лимона и розового дерева.
?
</param>
<param name="Способ применения">Ежедневно использовать 2 раза в день, во время утреннего и вечернего умывания. Идеально очищает от макияжа.  

1-2 раза в неделю использовать в качестве очищающей маски.

Приготовить пену из мыла и небольшого количества воды, добавить 1-3 капли эфирного масла по проблеме и желанию. Нанести на лицо. 

Оптимально провести по мыльной пенке легкий массаж пальцами или щеточкой, оставить на 2-4 мин, после смыть водой. </param>
</offer>
<offer id="1015" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/mylo_sosna_dlya_problemnoy_kozhi_100_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>400</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/be6/be635c67193e7baf361dbba9717b17d7.jpg</picture>
<vendor></vendor>
<name>МЫЛО &quot;СОСНА&quot; ДЛЯ ПРОБЛЕМНОЙ КОЖИ , 100 г</name>
<description>МЫЛО &quot;СОСНА&quot; ДЛЯ ПРОБЛЕМНОЙ КОЖИ , 100 г</description>
<param name="Артикул">463</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комедоны (засорение пор , черные точки), Пористый рельеф кожи, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракт сосновой хвои, растительная мыльная масса, эфирные масла каяпута и сосновой древесины. 
?</param>
<param name="Способ применения">Нанесите необходимое количество мыла влажную кожу, вспеньте и равномерно распределите по поверхности тела. Смойте средство теплой водой. </param>
</offer>
<offer id="1016" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/mylo_shalfey_dezodorirushchee_100_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>400</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/c77/c77e3dd3b8f08ad9978ac5e0947b52d0.jpg</picture>
<vendor></vendor>
<name>МЫЛО &quot;ШАЛФЕЙ&quot; ДЕЗОДОРИРУЩЕЕ ,  100 г</name>
<description>МЫЛО &quot;ШАЛФЕЙ&quot; ДЕЗОДОРИРУЩЕЕ ,  100 г</description>
<param name="Артикул">413</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Эфирное масло пальмарозы, эфирное масло шалфея, выжимки из шалфея, растительная мыльная основа. 
?
</param>
<param name="Способ применения">Нанесите необходимое количество мыла влажную кожу, вспеньте и равномерно распределите по поверхности тела. Смойте средство теплой водой. </param>
</offer>
<offer id="1017" available="true">
<url>https://styx-online.ru/catalog/ochishchenie_i_umyvanie_/loson_tonik_avokado_dlya_normalnoy_kozhi_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/405/405d7fc75f62fe520cdaa0cee0310e1a.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ТОНИК &quot;АВОКАДО&quot; ДЛЯ НОРМАЛЬНОЙ КОЖИ , 100 мл</name>
<description>ЛОСЬОН ТОНИК &quot;АВОКАДО&quot; ДЛЯ НОРМАЛЬНОЙ КОЖИ , 100 мл</description>
<param name="Артикул">250</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комбинированная, Купероз, Нормальная, Отечная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Лосьон-тоник</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Замороженные подземные минеральные воды, эмульгированные масла жожоба, макадамии, пшеничных зародышей; настой берёзовых листьев, мальвы череды; выжимки из авокадо и алоэ; эфирные масла ромашки, розы, ели, петит грейна.
?</param>
<param name="Способ применения">Мягкими движениями нанесите необходимое количество тоника на предварительно очищенную кожу лица, включая кожу контура глаз, при помощи ватного диска.  </param>
</offer>
<offer id="1018" available="true">
<url>https://styx-online.ru/catalog/ochishchenie_i_umyvanie_/loson_tonik_romashka_kalendula_dlya_sukhoy_kozhi_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/be1/be151da52ac4f2a8af55f376504aeec9.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ТОНИК &quot;РОМАШКА КАЛЕНДУЛА&quot; ДЛЯ СУХОЙ КОЖИ , 100 мл</name>
<description>ЛОСЬОН ТОНИК &quot;РОМАШКА КАЛЕНДУЛА&quot; ДЛЯ СУХОЙ КОЖИ , 100 мл</description>
<param name="Артикул">270</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Лосьон-тоник</param>
<param name="ДЛЯ ВЕК">Мешки под глазами, Темные круги</param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Эмульгированные масла жожоба, макадамии, зародышей пшеницы; экстакты ромашки и календулы; берёзовый, лимонный и картофельный сок; настой берёзовых листьев и крапивы; выжимки из алоэ; эфирные масла ромашки, герани, лаванды.
?</param>
<param name="Способ применения">Мягкими движениями нанесите необходимое количество тоника на предварительно очищенную кожу лица, включая кожу контура глаз, при помощи ватного диска. </param>
</offer>
<offer id="1019" available="true">
<url>https://styx-online.ru/catalog/ochishchenie_i_umyvanie_/loson_tonik_zveroboy_gamamelis_dlya_zhirnoy_kozhi_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/23d/23d105cac003439976b56b7337f5e9ab.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ТОНИК &quot;ЗВЕРОБОЙ ГАМАМЕЛИС&quot; ДЛЯ ЖИРНОЙ КОЖИ , 100 мл</name>
<description>ЛОСЬОН ТОНИК &quot;ЗВЕРОБОЙ ГАМАМЕЛИС&quot; ДЛЯ ЖИРНОЙ КОЖИ , 100 мл</description>
<param name="Артикул">260</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комедоны (засорение пор , черные точки), Пористый рельеф кожи</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Лосьон-тоник</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Эмульгированные масла жожоба, макадамии, зародышей пшеницы; настои берёзовых листьев, зверобоя, гамамелиса; берёзовый, лимонный и картофельный сок; выжимки из алоэ; эфирные масла бергамота, можжевельника, сосны.
?
</param>
<param name="Способ применения">Мягкими движениями нанесите необходимое количество тоника на предварительно очищенную кожу лица, включая кожу контура глаз, при помощи ватного диска. </param>
</offer>
<offer id="1020" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_bazilik_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1150</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/baf/baf6dedf6ce879915bd46f7e09a23ace.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО БАЗИЛИК, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО БАЗИЛИК, 10 мл</description>
<param name="Артикул">513</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся, От выпадения</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Раздражения, воспаления</param>
<param name="ДЛЯ НОГ">Раздражения, воспаления</param>
<param name="ЗДОРОВЬЕ">Обезболивающее, При зубной боли, При насморке, При простуде, Укусы насекомых</param>
<param name="Состав">100% эфирное масло Базилик.
 
 Получение эфирного масла Базилик: водно-паровая дистилляция из Ocimum basilicum (сем. яснотковые).
 
Эфирное масло Базилик: легкое, текучее, бесцветное или слегка голубоватое.</param>
<param name="Способ применения">Аромакурительницы: 3–7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м?;&amp;nbsp;
 
 Ингаляции: горячие (4–5&amp;nbsp;мин)&amp;nbsp;— 1–2 к; холодные: 3–4&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1–2 к;&amp;nbsp;
 
 Полоскания: 1–2 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 3–4 к&amp;nbsp;на&amp;nbsp;2 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 к&amp;nbsp;в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 4–7 к; горячие сидячие&amp;nbsp;— 5–7 к; горячие ножные&amp;nbsp;— 3–4 к;&amp;nbsp;
 
 Массаж, растирания: 5–8 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область боли и&amp;nbsp;колик (7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла); холодные водные&amp;nbsp;— на&amp;nbsp;икроножные мышцы, лоб при жаре (7–8 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;воды);&amp;nbsp;
 
 Обогащение косметических средств: 3–4 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;микстуру, мед, варенье (3–4 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды во&amp;nbsp;избежание раздражения слизистой оболочки желудка;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
 </param>
</offer>
<offer id="1021" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_gvozdika_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>490</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/661/661b37362954599aeb02f580f8b4abc0.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ГВОЗДИКА, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ГВОЗДИКА, 10 мл</description>
<param name="Артикул">524</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные, Жирные у корней / Сухие на кончиках</param>
<param name="ДЛЯ ЛИЦА">Жирная, Комбинированная, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Жирная кожа, Проблемная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Антисептическое, Дерматиты, Кровоточивость десен (парадонтоз), Невралгии, Нормализация пищеварения, При зубной боли, При метеоризме, Укусы насекомых</param>
<param name="Состав">100% эфирное масло Гвоздика.
 

	 Получение&amp;nbsp;эфирного масла Гвоздика:&amp;nbsp;водно-паровая дистилляция бутонов Eugenia caryophyllata (сем. миртовых).


	 Эфирное масло Гвоздика:&amp;nbsp;легкое, текучее, летучее, бесцветное.

 &amp;nbsp;
 </param>
<param name="Способ применения">Аромакурительницы: 2–5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 
 Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Тампонада: нанести на&amp;nbsp;увлажненный ватный тампон 1–2 к, прикладывать к&amp;nbsp;больному зубу на&amp;nbsp;3–5&amp;nbsp;мин;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 3–5 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж, растирания: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные на&amp;nbsp;область травм, боли (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Эротический массаж и&amp;nbsp;интим-косметика: 10 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 2 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Локальные аппликации: 5 к&amp;nbsp;смешать с&amp;nbsp;10 к&amp;nbsp;масла зверобоя или черного тмина, наносить ватной палочкой строго на&amp;nbsp;элемент воспаления;&amp;nbsp;
 
 Промывание ран: 2% раствор гвоздики (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
 </param>
</offer>
<offer id="1022" available="true">
<url>https://styx-online.ru/catalog/smesi_efirnykh_masel/smes_efirnykh_masel_dlya_avtomobilista_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/a1a/a1ad37a8f1ef19e3b69ba51d36652060.jpg</picture>
<vendor></vendor>
<name>СМЕСЬ ЭФИРНЫХ МАСЕЛ ДЛЯ АВТОМОБИЛИСТА, 10 мл</name>
<description>СМЕСЬ ЭФИРНЫХ МАСЕЛ ДЛЯ АВТОМОБИЛИСТА, 10 мл</description>
<param name="Артикул">564</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные</param>
<param name="ДЛЯ ЛИЦА">Жирная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Головная боль</param>
<param name="Состав">Эфирные масла шизандры (лимонника), герани, лимона, розмарина, фенхеля.</param>
<param name="Способ применения">Методы применения композиции 100 % эфирных масел аналогичны методам применения 100 % «моно» эфирных масел.&amp;nbsp;
 Методов применения много (около 30), вот самые основные и популярные:&amp;nbsp;
 
 • Внутреннее употребление
 1-2 капли эфирной композиции смешать с 1 ч. л. эмульгатора (базовое масло холодного отжима, мёд, молоко, варенье, печенье, сахар и т. д.), запивать стаканом воды. 1-2 раза в день.
 
 • Кулинарное применение&amp;nbsp;
 Использовать для ароматизации чая (5-7 капель на 100 г сухой заварки); для ароматизации вина (5-7 капель на бутылку вина, растворять эфирное масло в данном случае с помощью эмульгатора – мёда или сахара); в качестве пикантной добавки и приправы в еду (1-4 капли в зависимости от блюда).
 
 &amp;nbsp;• Ванны&amp;nbsp;
 Смешать 6-10 капель эфирной композиции с 30-60 г/мл эмульгатора (соль, сода, мёд, агар-агар, пена для ванн, сливки, молоко, крахмал и т. п.), после чего добавить смесь в воду. Температурный режим ванны подбирать индивидуально! Следует помнить, что ванны с водой, имеющей температуру тела (36-37 С), не имеют противопоказаний!&amp;nbsp;
 
 • Ингаляции – вдыхание летучих веществ через нос и рот.&amp;nbsp;
 Холодные ингаляции: аромакурительницы – в верхнюю чашу аромалампы налить тёплую воду, добавить эфирное масло из расчёта 5 капель на 15 кв. м., в нижний ярус поставить зажжённую свечу. Время ингаляции 20 минут - 4 ч, увеличивать его постепенно. Аромамедальоны – 2-3 капли эфирного масла капнуть в отверстие в медальоне и носить на себе необходимое время; нанести 1-2 капли эфирного масла на ладони, растереть и сделать 15-20 глубоких вдохов.
 
 Горячие ингаляции: в посуду с широким горлом налить кипяток. Накрыть голову полотенцем и после этого добавить не более 2 капель эфирного масла или композиции в кипяток. Глубоко вдыхать аромат в течении 3-10 минут. Во время ингаляции ВСЕГДА закрывать глаза!&amp;nbsp;
 
 • Бани, сауны – поставить рядом с источником тепла термостойкий сосуд (50-100 мл) с широким горлышком, наполненный водой с добавлением эфирного масла или композиции (до 10 капель на 15 кв. м.), этой смесью также можно окропить деревянные лавки и стены. Непосредственно на раскалённые камни наносить эфирные масла нельзя!&amp;nbsp;
 
 • Массаж – для приготовления массажной смеси следует исходить из дозировки 3-5 капель на 10 мл основы. Желательно всегда подогревать готовое массажное масло.&amp;nbsp;
 
 &amp;nbsp;• Обёртывания – в ёмкость (2-3 л) налить тёплую воду и добавить в неё 15 капель эфирного масла или композиции эфирных масел, после чего смочить в ароматической воде простыню или полотенце, и завернуть себя во влажную ткань. Время процедуры – 2-5 минут.&amp;nbsp;
 
 А также: ополаскивания, воздействие на биоактивные зоны, клизмирование, ванночки, компрессы, рефлексомассаж, растирания, полоскания, капли, тампонада, спринцевание, примочки, аппликации, ароматическая соль, умывание, расчёсывание, дезинфекция дома, моющие средства, пятновыводители, ароматизация гардероба, репеллентные или инсектицидные средства, уход за домашними животными.</param>
</offer>
<offer id="1023" available="true">
<url>https://styx-online.ru/catalog/smesi_efirnykh_masel/smes_efirnykh_masel_magicheskaya_lyubov_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>https://styx-online.ru/upload/iblock/f93/f93bbdf9a685df4a0da42851bc8ee7f3.jpg</picture>
<vendor></vendor>
<name>СМЕСЬ ЭФИРНЫХ МАСЕЛ МАГИЧЕСКАЯ ЛЮБОВЬ, 10 мл</name>
<description>СМЕСЬ ЭФИРНЫХ МАСЕЛ МАГИЧЕСКАЯ ЛЮБОВЬ, 10 мл</description>
<param name="Артикул">566</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Ломкие, секущиеся, Окрашенные, Пористые, Сухие</param>
<param name="ДЛЯ ЛИЦА">30+, Купероз, Сухая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Апатия</param>
<param name="Состав">Эфирные масла иланг-иланга, нероли, пачули, лиметта, розы.
 </param>
<param name="Способ применения">Методы применения композиции 100 % эфирных масел аналогичны методам применения 100 % «моно» эфирных масел.&amp;nbsp;
 Методов применения много (около 30), вот самые основные и популярные:&amp;nbsp;
 
 • Внутреннее употребление
 1-2 капли эфирной композиции смешать с 1 ч. л. эмульгатора (базовое масло холодного отжима, мёд, молоко, варенье, печенье, сахар и т. д.), запивать стаканом воды. 1-2 раза в день.
 
 • Кулинарное применение&amp;nbsp;
 Использовать для ароматизации чая (5-7 капель на 100 г сухой заварки); для ароматизации вина (5-7 капель на бутылку вина, растворять эфирное масло в данном случае с помощью эмульгатора – мёда или сахара); в качестве пикантной добавки и приправы в еду (1-4 капли в зависимости от блюда).
 
 &amp;nbsp;• Ванны&amp;nbsp;
 Смешать 6-10 капель эфирной композиции с 30-60 г/мл эмульгатора (соль, сода, мёд, агар-агар, пена для ванн, сливки, молоко, крахмал и т. п.), после чего добавить смесь в воду. Температурный режим ванны подбирать индивидуально! Следует помнить, что ванны с водой, имеющей температуру тела (36-37 С), не имеют противопоказаний!&amp;nbsp;
 
 • Ингаляции – вдыхание летучих веществ через нос и рот.&amp;nbsp;
 Холодные ингаляции: аромакурительницы – в верхнюю чашу аромалампы налить тёплую воду, добавить эфирное масло из расчёта 5 капель на 15 кв. м., в нижний ярус поставить зажжённую свечу. Время ингаляции 20 минут - 4 ч, увеличивать его постепенно. Аромамедальоны – 2-3 капли эфирного масла капнуть в отверстие в медальоне и носить на себе необходимое время; нанести 1-2 капли эфирного масла на ладони, растереть и сделать 15-20 глубоких вдохов.
 
 Горячие ингаляции: в посуду с широким горлом налить кипяток. Накрыть голову полотенцем и после этого добавить не более 2 капель эфирного масла или композиции в кипяток. Глубоко вдыхать аромат в течении 3-10 минут. Во время ингаляции ВСЕГДА закрывать глаза!&amp;nbsp;
 
 • Бани, сауны – поставить рядом с источником тепла термостойкий сосуд (50-100 мл) с широким горлышком, наполненный водой с добавлением эфирного масла или композиции (до 10 капель на 15 кв. м.), этой смесью также можно окропить деревянные лавки и стены. Непосредственно на раскалённые камни наносить эфирные масла нельзя!&amp;nbsp;
 
 • Массаж – для приготовления массажной смеси следует исходить из дозировки 3-5 капель на 10 мл основы. Желательно всегда подогревать готовое массажное масло.&amp;nbsp;
 
 &amp;nbsp;• Обёртывания – в ёмкость (2-3 л) налить тёплую воду и добавить в неё 15 капель эфирного масла или композиции эфирных масел, после чего смочить в ароматической воде простыню или полотенце, и завернуть себя во влажную ткань. Время процедуры – 2-5 минут.&amp;nbsp;
 
 А также: ополаскивания, воздействие на биоактивные зоны, клизмирование, ванночки, компрессы, рефлексомассаж, растирания, полоскания, капли, тампонада, спринцевание, примочки, аппликации, ароматическая соль, умывание, расчёсывание, дезинфекция дома, моющие средства, пятновыводители, ароматизация гардероба, репеллентные или инсектицидные средства, уход за домашними животными.</param>
</offer>
<offer id="1024" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_mirt_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1110</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/f65/f655650a6d35953350e2caa78cc448b7.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО МИРТ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО МИРТ, 10 мл</description>
<param name="Артикул">577</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">От выпадения</param>
<param name="ДЛЯ ЛИЦА">Жирная, Комедоны (засорение пор , черные точки), Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Варикоз, Для ванны</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Вегетососудистая дистония, При геморрое, Расширение вен</param>
<param name="Состав">100% эфирное масло «Мирт»&amp;nbsp;</param>
<param name="Способ применения">Ингаляции: горячие (5–7&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 4–7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 3–5 к&amp;nbsp;мирта на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 3–5 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж, растирания: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Противопростудные растирания: 20 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;базисного масла, растирать грудную клетку детей и&amp;nbsp;взрослых;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, воспалений, боли (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 2 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Примочки: 15 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;кипяченой воды, намочить и&amp;nbsp;отжать тампон, прикладывать к&amp;nbsp;области воспаления на&amp;nbsp;3–5&amp;nbsp;мин;&amp;nbsp;
 
 Промывание ран: 2% раствор мирта (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Микроклизмы: 7–8 к&amp;nbsp;на&amp;nbsp;2 ст. л. масла зверобоя или ростков пшеницы, при помощи маленькой груши ввести в&amp;nbsp;задний проход (при геморрое) и&amp;nbsp;полежать на&amp;nbsp;левом боку 3–5&amp;nbsp;мин;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Освежающее втирание: смешать 50&amp;nbsp;мл&amp;nbsp;водки с&amp;nbsp;15 к&amp;nbsp;мирта, смочить салфетку, протирать тело и&amp;nbsp;зоны повышенного потоотделения;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="1025" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_mozhzhevelnik_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1420</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/375/375f62bf495350a2201045763d0cd574.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО МОЖЖЕВЕЛЬНИК, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО МОЖЖЕВЕЛЬНИК, 10 мл</description>
<param name="Артикул">525</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Проблемная, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для ванны, Лишний вес, Отечная кожа, Потеря эластичности кожи, Проблемная кожа, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Детокс, очищение от шлаков, Желчегонное, Нормализация пищеварения, Отёки</param>
<param name="Состав">100% эфирное масло можжевельника.&amp;nbsp;
 </param>
<param name="Способ применения">ПРИМЕНЕНИЕ эфирного масла МОЖЖЕВЕЛЬНИКА:&amp;nbsp;
 
 Ингаляции: горячие (5 - 7 мин) - 1 - 2 к.; холодные - 3 - 4 мин;&amp;nbsp;
 
 Аромакурительницы: 5 - 7 к. на 15 кв. м;&amp;nbsp;
 
 Аромамедальоны: 1 - 2 к.;&amp;nbsp;
 
 В сауне и бане: 4 - 6 к. можжевельника на 1 сеанс;&amp;nbsp;
 
 Полоскания: 1 - 2 к. с 0,5 ч. л. эмульгатора (сода, соль, мед) на стакан теплой воды;&amp;nbsp;&amp;nbsp;
 
 Капли в нос: 4 - 7 к. на 2 ч. л. масла зверобоя, закапывать по 3 - 4 к. в каждую ноздрю 1 раз в 60 - 90 мин;&amp;nbsp;
 
 Ванны: общие - 3-7 к.; горячие сидячие – 5 - 7 к.; горячие ножные – 3 - 4 к;&amp;nbsp;
 
 Массаж, растирания: 5 - 8 к. на 10 мл транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные - на область боли и колик (7 к. на 10 мл масла); холодные водные - на икроножные мышцы, лоб при жаре (7 - 8 к. на 500 мл воды);&amp;nbsp;
 
 Спринцевание: 3 к. нанести на 1/2 ч. л. соды и растворить в 100-200 мл теплой кипяченой воды;&amp;nbsp;
 
 Косметический лед: 5 к. смешать с медом или косметическими сливками (1 ч. л.), развести в 200 мл воды и порционно заморозить.&amp;nbsp;
 
 Протирать лицо, шею, область декольте утром и вечером;&amp;nbsp;
 
 Обогащение косметических средств: 3 - 4 к. на 5 мл основы;&amp;nbsp;
 
 Внутреннее употребление: добавка в микстуру, мед, варенье (3 - 4 к. на 100 мл), применять по 1 ч. л. смеси 1 - 4 раза в день. Можно добавлять в соусы. Запивать большим количеством жидкости ;&amp;nbsp;
 
 Аромарасчесывание: наносить на зубцы расчески.&amp;nbsp;
 
 ПРЕДОСТОРОЖНОСТИ ПРИМЕНЕНИЯ эфирного масла МОЖЖЕВЕЛЬНИКА: не применять при острой почечной патологии (гломерулонефрит, пиелонефрит, почечная недостаточность). При гипертонической болезни высоких степеней и пожилым людям применять с осторожностью. Не применять при беременности. Не применять непрерывно более 4-х недель.&amp;nbsp;
 
 </param>
</offer>
<offer id="1026" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_muskatnyy_orekh_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/2c0/2c03ccaaf05ea91649e58d6f7b0865f8.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО МУСКАТНЫЙ ОРЕХ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО МУСКАТНЫЙ ОРЕХ, 10 мл</description>
<param name="Артикул">533</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся, От выпадения</param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Невралгии, Обезболивающее, При климаксе</param>
<param name="Состав">100% эфирное масло «Мускатный орех»
</param>
<param name="Способ применения">Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 3–5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 2–5 к&amp;nbsp;муската на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 2–3 к; теплые сидячие&amp;nbsp;— 1–3 к;&amp;nbsp;
 
 Массаж, растирания: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, боли (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Эротический массаж и&amp;nbsp;интим-косметика: 10 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);&amp;nbsp;
 
 Кровоостанавливающая тампонада носа: на&amp;nbsp;смоченную в&amp;nbsp;воде или масле турунду нанести 2–3 к&amp;nbsp;муската, отжать досуха, плотно затампонировать;&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 2 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Локальные аппликации: 5 к&amp;nbsp;смешать с&amp;nbsp;10 к&amp;nbsp;масла зверобоя или черного тмина, наносить ватной палочкой строго на&amp;nbsp;элемент воспаления;&amp;nbsp;
 
 Промывание ран: 2% раствор мускатного ореха (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Маски для волос: 5–7 к&amp;nbsp;смешать с&amp;nbsp;глиной, бальзамом, маслом макадамии (5–7&amp;nbsp;мл), нанести на&amp;nbsp;кожу головы (по&amp;nbsp;проборам), тепло укутать, оставить на&amp;nbsp;10–15&amp;nbsp;мин;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками. Можно применять как добавку в&amp;nbsp;соусы к&amp;nbsp;различным блюдам;&amp;nbsp;
 
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="1027" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_nayoli_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>890</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/550/5501ee01386fb874c4ebe2b9ce6c1c6e.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО НАЙОЛИ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО НАЙОЛИ, 10 мл</description>
<param name="Артикул">534</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комедоны (засорение пор , черные точки), Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Проблемная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Антисептическое, При насморке, При простуде</param>
<param name="Состав">
 100% эфирное масло «Найоли»&amp;nbsp;
 </param>
<param name="Способ применения">Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 5–8 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 4–6 к&amp;nbsp;найоли на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 2 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 5–7 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж: 5–8 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Противопростудные растирания: 20 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;базисного масла, растирать грудную клетку детей и&amp;nbsp;взрослых;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, воспалений, боли (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 5 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Тампонада уха: 5–6 к&amp;nbsp;смешать с&amp;nbsp;10–12 к&amp;nbsp;базисного масла (ростки пшеницы, зверобой, черный тмин), смочить ватный фитилек и&amp;nbsp;глубоко вложить в&amp;nbsp;наружный слуховой проход. Остатки смеси нанести на&amp;nbsp;область вокруг уха и&amp;nbsp;наложить согревающую повязку;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Примочки: 15 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;кипяченой воды, намочить и&amp;nbsp;отжать тампон, прикладывать к&amp;nbsp;области нагноения на&amp;nbsp;3–5&amp;nbsp;мин;&amp;nbsp;
 
 Промывание ран: 2% раствор найоли (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Освежающее втирание: смешать 50&amp;nbsp;мл&amp;nbsp;водки с&amp;nbsp;15 к&amp;nbsp;найоли, смочить салфетку, протирать тело и&amp;nbsp;зоны повышенного потоотделения;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="1029" available="true">
<url>https://styx-online.ru/catalog/smesi_efirnykh_masel/smes_efirnykh_masel_svezhiy_vozdukh_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>262</categoryId>
<picture>https://styx-online.ru/upload/iblock/907/907af48885ebeb135d8e51feff88da22.jpg</picture>
<vendor></vendor>
<name>СМЕСЬ ЭФИРНЫХ МАСЕЛ СВЕЖИЙ ВОЗДУХ, 10 мл</name>
<description>СМЕСЬ ЭФИРНЫХ МАСЕЛ СВЕЖИЙ ВОЗДУХ, 10 мл</description>
<param name="Артикул">567</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся</param>
<param name="ДЛЯ ЛИЦА">Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Проблемная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Бессонница</param>
<param name="Состав">Эфирные масла лаванды, пихты, чайного дерева, мяты, лиметта.
 </param>
<param name="Способ применения">Методы применения композиции 100 % эфирных масел аналогичны методам применения 100 % «моно» эфирных масел.&amp;nbsp;
 Методов применения много (около 30), вот самые основные и популярные:&amp;nbsp;
 
 • Внутреннее употребление
 1-2 капли эфирной композиции смешать с 1 ч. л. эмульгатора (базовое масло холодного отжима, мёд, молоко, варенье, печенье, сахар и т. д.), запивать стаканом воды. 1-2 раза в день.
 
 • Кулинарное применение&amp;nbsp;
 Использовать для ароматизации чая (5-7 капель на 100 г сухой заварки); для ароматизации вина (5-7 капель на бутылку вина, растворять эфирное масло в данном случае с помощью эмульгатора – мёда или сахара); в качестве пикантной добавки и приправы в еду (1-4 капли в зависимости от блюда).
 
 &amp;nbsp;• Ванны&amp;nbsp;
 Смешать 6-10 капель эфирной композиции с 30-60 г/мл эмульгатора (соль, сода, мёд, агар-агар, пена для ванн, сливки, молоко, крахмал и т. п.), после чего добавить смесь в воду. Температурный режим ванны подбирать индивидуально! Следует помнить, что ванны с водой, имеющей температуру тела (36-37 С), не имеют противопоказаний!&amp;nbsp;
 
 • Ингаляции – вдыхание летучих веществ через нос и рот.&amp;nbsp;
 Холодные ингаляции: аромакурительницы – в верхнюю чашу аромалампы налить тёплую воду, добавить эфирное масло из расчёта 5 капель на 15 кв. м., в нижний ярус поставить зажжённую свечу. Время ингаляции 20 минут - 4 ч, увеличивать его постепенно. Аромамедальоны – 2-3 капли эфирного масла капнуть в отверстие в медальоне и носить на себе необходимое время; нанести 1-2 капли эфирного масла на ладони, растереть и сделать 15-20 глубоких вдохов.
 
 Горячие ингаляции: в посуду с широким горлом налить кипяток. Накрыть голову полотенцем и после этого добавить не более 2 капель эфирного масла или композиции в кипяток. Глубоко вдыхать аромат в течении 3-10 минут. Во время ингаляции ВСЕГДА закрывать глаза!&amp;nbsp;
 
 • Бани, сауны – поставить рядом с источником тепла термостойкий сосуд (50-100 мл) с широким горлышком, наполненный водой с добавлением эфирного масла или композиции (до 10 капель на 15 кв. м.), этой смесью также можно окропить деревянные лавки и стены. Непосредственно на раскалённые камни наносить эфирные масла нельзя!&amp;nbsp;
 
 • Массаж – для приготовления массажной смеси следует исходить из дозировки 3-5 капель на 10 мл основы. Желательно всегда подогревать готовое массажное масло.&amp;nbsp;
 
 &amp;nbsp;• Обёртывания – в ёмкость (2-3 л) налить тёплую воду и добавить в неё 15 капель эфирного масла или композиции эфирных масел, после чего смочить в ароматической воде простыню или полотенце, и завернуть себя во влажную ткань. Время процедуры – 2-5 минут.&amp;nbsp;
 
 А также: ополаскивания, воздействие на биоактивные зоны, клизмирование, ванночки, компрессы, рефлексомассаж, растирания, полоскания, капли, тампонада, спринцевание, примочки, аппликации, ароматическая соль, умывание, расчёсывание, дезинфекция дома, моющие средства, пятновыводители, ароматизация гардероба, репеллентные или инсектицидные средства, уход за домашними животными.</param>
</offer>
<offer id="1030" available="true">
<url>https://styx-online.ru/catalog/smesi_efirnykh_masel/smes_efirnykh_masel_erotika_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/e62/e62d9eb4101b77ce463b7874c414ddda.jpg</picture>
<vendor></vendor>
<name>СМЕСЬ ЭФИРНЫХ МАСЕЛ ЭРОТИКА, 10 мл</name>
<description>СМЕСЬ ЭФИРНЫХ МАСЕЛ ЭРОТИКА, 10 мл</description>
<param name="Артикул">565</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Сухие</param>
<param name="ДЛЯ ЛИЦА">30+, Сухая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Улучшение кровообращения</param>
<param name="Состав">Эфирные масла корицы, иланг-иланга, вербены, мускатного ореха, ветивера, имбиря.
 </param>
<param name="Способ применения">Методы применения композиции 100 % эфирных масел аналогичны методам применения 100 % «моно» эфирных масел.&amp;nbsp;
 Методов применения много (около 30), вот самые основные и популярные:&amp;nbsp;
 
 • Внутреннее употребление
 1-2 капли эфирной композиции смешать с 1 ч. л. эмульгатора (базовое масло холодного отжима, мёд, молоко, варенье, печенье, сахар и т. д.), запивать стаканом воды. 1-2 раза в день.
 
 • Кулинарное применение&amp;nbsp;
 Использовать для ароматизации чая (5-7 капель на 100 г сухой заварки); для ароматизации вина (5-7 капель на бутылку вина, растворять эфирное масло в данном случае с помощью эмульгатора – мёда или сахара); в качестве пикантной добавки и приправы в еду (1-4 капли в зависимости от блюда).
 
 &amp;nbsp;• Ванны&amp;nbsp;
 Смешать 6-10 капель эфирной композиции с 30-60 г/мл эмульгатора (соль, сода, мёд, агар-агар, пена для ванн, сливки, молоко, крахмал и т. п.), после чего добавить смесь в воду. Температурный режим ванны подбирать индивидуально! Следует помнить, что ванны с водой, имеющей температуру тела (36-37 С), не имеют противопоказаний!&amp;nbsp;
 
 • Ингаляции – вдыхание летучих веществ через нос и рот.&amp;nbsp;
 Холодные ингаляции: аромакурительницы – в верхнюю чашу аромалампы налить тёплую воду, добавить эфирное масло из расчёта 5 капель на 15 кв. м., в нижний ярус поставить зажжённую свечу. Время ингаляции 20 минут - 4 ч, увеличивать его постепенно. Аромамедальоны – 2-3 капли эфирного масла капнуть в отверстие в медальоне и носить на себе необходимое время; нанести 1-2 капли эфирного масла на ладони, растереть и сделать 15-20 глубоких вдохов.
 
 Горячие ингаляции: в посуду с широким горлом налить кипяток. Накрыть голову полотенцем и после этого добавить не более 2 капель эфирного масла или композиции в кипяток. Глубоко вдыхать аромат в течении 3-10 минут. Во время ингаляции ВСЕГДА закрывать глаза!&amp;nbsp;
 
 • Бани, сауны – поставить рядом с источником тепла термостойкий сосуд (50-100 мл) с широким горлышком, наполненный водой с добавлением эфирного масла или композиции (до 10 капель на 15 кв. м.), этой смесью также можно окропить деревянные лавки и стены. Непосредственно на раскалённые камни наносить эфирные масла нельзя!&amp;nbsp;
 
 • Массаж – для приготовления массажной смеси следует исходить из дозировки 3-5 капель на 10 мл основы. Желательно всегда подогревать готовое массажное масло.&amp;nbsp;
 
 &amp;nbsp;• Обёртывания – в ёмкость (2-3 л) налить тёплую воду и добавить в неё 15 капель эфирного масла или композиции эфирных масел, после чего смочить в ароматической воде простыню или полотенце, и завернуть себя во влажную ткань. Время процедуры – 2-5 минут.&amp;nbsp;
 
 А также: ополаскивания, воздействие на биоактивные зоны, клизмирование, ванночки, компрессы, рефлексомассаж, растирания, полоскания, капли, тампонада, спринцевание, примочки, аппликации, ароматическая соль, умывание, расчёсывание, дезинфекция дома, моющие средства, пятновыводители, ароматизация гардероба, репеллентные или инсектицидные средства, уход за домашними животными.</param>
</offer>
<offer id="1032" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_romashka_golubaya_1_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1060</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/dbc/dbc11e4f52a4456c7553e2caa8391402.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО РОМАШКА ГОЛУБАЯ, 1 мл</name>
<description>ЭФИРНОЕ МАСЛО РОМАШКА ГОЛУБАЯ, 1 мл</description>
<param name="Артикул">537</param>
<param name="Вес/объем">1</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, От выпадения, Чувствительная кожа головы</param>
<param name="ДЛЯ ЛИЦА">30+, Раздражение,воспаления( после пилинга), Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Сухая кожа, Чувствительная кожа, Шелушение</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Бессонница, Герпес, Дерматиты, Нейродермиты, Ожоги, При простуде, Укусы насекомых</param>
<param name="Состав">100% эфирное масло «Ромашка голубая»&amp;nbsp;</param>
<param name="Способ применения">Ингаляции: горячие (5–7&amp;nbsp;мин)&amp;nbsp;— 1–2 к; холодные&amp;nbsp;— 5–7&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 3–4 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1–3 к;&amp;nbsp;
 
 Полоскания: 2–3 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 4–7 к; горячие сидячие&amp;nbsp;— 5–7 к; горячие ножные&amp;nbsp;— 3–4 к;&amp;nbsp;
 
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 2–4 к&amp;nbsp;ромашки голубой на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 3–4 к&amp;nbsp;на&amp;nbsp;2 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 к&amp;nbsp;в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Массаж, растирания: 3–7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные на&amp;nbsp;область трофической язвы, боли, артрита (15–20 к&amp;nbsp;на&amp;nbsp;40 к&amp;nbsp;масла зверобоя, черного тмина, ростков пшеницы);&amp;nbsp;
 
 Аппликации: чистым маслом на&amp;nbsp;область, пораженную герпесом;&amp;nbsp;
 
 Обогащение косметических средств: 5–6 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Спринцевание: 3–4 к&amp;nbsp;нанести на&amp;nbsp;? ч. ложки соды и&amp;nbsp;растворить в&amp;nbsp;100–200&amp;nbsp;мл&amp;nbsp;теплой кипяченой воды;&amp;nbsp;
 
 Микроклизмы: 2–4 к&amp;nbsp;на&amp;nbsp;1 ст. л. масла зверобоя или ростков пшеницы, при помощи маленькой груши ввести в&amp;nbsp;задний проход (при геморрое) и&amp;nbsp;полежать на&amp;nbsp;левом боку 3–5&amp;nbsp;мин;&amp;nbsp;
 
 Освежающее втирание: смешать 50&amp;nbsp;мл&amp;nbsp;водки с&amp;nbsp;3 к&amp;nbsp;ромашки голубой, смочить салфетку, протирать все тело и&amp;nbsp;зоны повышенного потоотделения;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье, сладкие соусы (4–6 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством жидкости. Можно 1 к&amp;nbsp;ромашки голубой наносить на&amp;nbsp;курагу (принимать 2 раза в&amp;nbsp;день). Теплый вечерний седативный чай: 1/3 стакана черного чая с&amp;nbsp;1/3 капли голубой ромашки принимать на&amp;nbsp;ночь для предупреждения приступов бессонницы и&amp;nbsp;удушья.
&amp;nbsp;</param>
</offer>
<offer id="1033" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_apelsin_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/559/559c1ba2db3af7c149284a2cc126034c.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО АПЕЛЬСИН, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО АПЕЛЬСИН, 10 мл</description>
<param name="Артикул">508</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для загара, Сухая кожа, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Вегетососудистая дистония, Детокс, очищение от шлаков, Интоксикация, Кровоточивость десен (парадонтоз), Нормализация пищеварения</param>
<param name="Состав">100% эфирное масло Апельсин.
 

	 Получение&amp;nbsp;эфирного масла Апельсин:&amp;nbsp;прессинг и центрифугирование кожуры плодов Citrus sinensis / Citrus aurantium var. Dilcis (сем. рутовых).

 Эфирное масло Апельсин:&amp;nbsp;легкое, текучее, летучее, желтоватого и оранжеватого оттенка.
 </param>
<param name="Способ применения">
	Аромакурительницы: 6–10 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м?
	Ингаляции: горячие (5–7&amp;nbsp;мин)&amp;nbsp;— 2–3 к; холодные: 5–7&amp;nbsp;мин;
	В&amp;nbsp;сауне и&amp;nbsp;бане: 5–7 к&amp;nbsp;апельсина на&amp;nbsp;1 сеанс;
	Аромамедальоны: 1–3 к;
	Косметический лед: 5 к&amp;nbsp;апельсина смешать с&amp;nbsp;1 ч.л. меда, растворить в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды, заморозить, протирать лицо, шею, зону декольте;
	Полоскания: 2–3 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) растворить в&amp;nbsp;стакане теплой воды;
	Аппликации на&amp;nbsp;десны: 5 к&amp;nbsp;апельсина смешать с&amp;nbsp;маслом зверобоя или черного тмина (1 ч.л.), наносить на&amp;nbsp;больные десны 2–4 раза в&amp;nbsp;день;
	Капли в&amp;nbsp;нос: 1–3 к&amp;nbsp;на&amp;nbsp;2 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;
	Ванны: общие&amp;nbsp;— 3–5 к; горячие и&amp;nbsp;холодные сидячие -3-6&amp;nbsp;к; горячие ножные&amp;nbsp;— 3–4 к;
	Массаж, растирания: 5–10 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;
	Компрессы: теплые масляные (10 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);
	Обертывания: 10 к&amp;nbsp;апельсина добавить в&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;теплой воды, смочить простыню, обернуть тело на&amp;nbsp;2–3&amp;nbsp;мин, повторить 2–3 раза;
	Обогащение косметических средств: 5–6 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;
	Внутреннее употребление: добавка в&amp;nbsp;чай, кисломолочные продукты, выпечку, салаты, соки (1 к), применять 1–4 раза в&amp;nbsp;день. Запивать большим количеством жидкости;
	
	
 
	Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
</param>
</offer>
<offer id="1034" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_dushitsa_oregano_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1370</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/d89/d8951c50447a175a88c230ccadaefdb2.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ДУШИЦА (ОРЕГАНО), 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ДУШИЦА (ОРЕГАНО), 10 мл</description>
<param name="Артикул">535</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Детокс, очищение от шлаков, При климаксе, При простуде</param>
<param name="Состав">100% эфирное масло Душица.
 
 Получение эфирного масла Душица: водно-паровая дистилляция Origanum vulgare (сем.губоцветных, или яснотковых).
 
 Эфирное масло Душица: легкое, текучее, с легким чайным оттенком.
 
 Содержание карвакрола* от 45% до 68%.
 

	 &amp;nbsp;*Карвакрол&amp;nbsp;(фенол) является природным антибиотком, при этом он уничтожает ТОЛЬКО бактерии-паразиты, чем и заслужил такое внимание со стороны медицины. Карвакрол&amp;nbsp;&amp;nbsp;сильнее стрептомицина, пенициллина и ещё 16 антибиотиков. При этом патогенная микрофлора поражается на 97-100%.
</param>
<param name="Способ применения">NB! Перед применением проверять аромат на индивидуальную переносимость.
 Аромакурительницы: 3-5 к на 15 кв м;
 Ингаляции: горячие (4-5 мин) — 1-2 к; холодные: 3-5 мин;
 Аромамедальоны: 1-2 к;
 Полоскания: 1-2 к с 0,5 ч.л. эмульгатора (сода, соль, мед) на стакан теплой воды;
 Капли в нос: 3-4 к на 2 ч.л. масла зверобоя, закапывать по 3-4 к в каждую ноздрю 1 раз в 60-90 мин;
 Тампонада: мизерный ватный тампон пропитать оригано, отжать досуха и поместить в дупло зуба;
 Ванны: общие — 4-5 к; горячие сидячие –5-7 к;горячие ножные – 3-4 к;
 Массаж, растирания: 5-7 к на 10 мл транспортной основы;
 Компрессы: теплые масляные — на область боли и колик (4-5 к на 10 мл масла); холодные водные — на икроножные мышцы, лоб при жаре (7-8 к на 500 мл воды);
 Обогащение косметических средств: 3-5 к на 5 мл основы;
 Внутреннее употребление: добавка в микстуру, мед, варенье (3-4 к на 100 мл), применять по 1 ч.л. смеси 1-4 раза в день. Запивать большим количеством подкисленной воды во избежание раздражения слизистой оболочки желудка;
Аромарасчесывание: наносить на зубцы расчески.</param>
</offer>
<offer id="1035" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_ilang_ilang_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2040</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/4cf/4cf893ff86a44f8a1f12602d08949d88.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ИЛАНГ-ИЛАНГ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ИЛАНГ-ИЛАНГ, 10 мл</description>
<param name="Артикул">521</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Ломкие, секущиеся, Окрашенные</param>
<param name="ДЛЯ ЛИЦА">30+, Пористый рельеф кожи, Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">После загара, Потеря эластичности кожи, Чувствительная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Проблемы с ногтями</param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Апатия, Вегетососудистая дистония, Головная боль, Дерматиты, Контроль аппетита, При климаксе, Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло Иланг-Иланг.
Получение эфирного масла Иланг-Иланг: водно-паровая дистилляция цветов  Cananga odorata var. genuine/Unona odorantissimum (сем. аноновых).</param>
<param name="Способ применения">
 Аромакурительницы: 3–7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м?;&amp;nbsp;
 
 Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 2–4&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 4–7 к; теплые сидячие&amp;nbsp;— 2–4 к;&amp;nbsp;
 
 Массаж: 5–6 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Эротический массаж и&amp;nbsp;интим-косметика: 7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область болей, спазмов, колик (7–8 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Обогащение косметических средств: 5–6 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Омолаживающие и&amp;nbsp;регенерирующие маски: 3–5 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;масла жожоба или виноградных косточек;&amp;nbsp;
 
 Компресс при раздражении кожи, климатических дерматитах: теплые водные компрессы (на&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;теплой воды 3–4 к&amp;nbsp;иланга)&amp;nbsp;— пропитать, отжать многослойную марлю, на&amp;nbsp;3–5&amp;nbsp;мин приложить к&amp;nbsp;проблемной области;&amp;nbsp;
 
 Косметический лед: 4–6 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, зону декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать зеленым чаем, соком;&amp;nbsp;
 
 Полировка ногтей: наносить на&amp;nbsp;кутикулу и&amp;nbsp;ногтевую пластину в&amp;nbsp;чистом виде, втирать (для укрепления с&amp;nbsp;ногтей необязательно смывать лак);&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
 </param>
</offer>
<offer id="1036" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_issop_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3360</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/109/109b33739835410feaab32b7c9a5bcf1.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ИССОП, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ИССОП, 10 мл</description>
<param name="Артикул">580</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Отечная, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Чувствительная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Раздражения, воспаления</param>
<param name="ДЛЯ НОГ">Раздражения, воспаления</param>
<param name="ЗДОРОВЬЕ">Гиперемия кожи, Дерматиты, Детокс, очищение от шлаков, Метеозависимость, Нормализация пищеварения, Отёки, При кашле, Растяжение связок, ушибы, Травмы и ссадины</param>
<param name="Состав">100% эфирное масло Иссоп.
Получение эфирного масла Иссоп: водно-паровая дистилляция Hyssopus officinalis (сем. губоцветных, или яснотковых)</param>
<param name="Способ применения">
 Аромакурительницы: 3–7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 2–4&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Капли в&amp;nbsp;нос: при вазомоторном рините 4 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 3–5 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж, растирания: 5–6 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область боли, спазмов, воспаления, раздражения (7–8 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Компрессы: холодные водные&amp;nbsp;— на&amp;nbsp;область травмы (10 к&amp;nbsp;на&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;воды);&amp;nbsp;
 
 Аппликации чистым маслом: для рассасывания рубцов;&amp;nbsp;
 
 Обогащение косметических средств: 5–6 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Cool-маски (после косметических манипуляций и&amp;nbsp;при стрессовых реакциях кожи): 3–5 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;масла макадамии, зверобоя, виноградных косточек или жожоба;&amp;nbsp;
 
 Косметический лед: 4–6 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;соусы, растительное масло (черный тмин), мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день.&amp;nbsp;
 Запивать зеленым чаем, соком, кефиром, йогуртом.
&amp;nbsp;</param>
</offer>
<offer id="1037" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_kiparis_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>890</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/a44/a44fcf6f7ad1831f184d53d064ebec1b.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО КИПАРИС, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО КИПАРИС, 10 мл</description>
<param name="Артикул">547</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные, Ломкие, секущиеся, Нормальные</param>
<param name="ДЛЯ ЛИЦА">Купероз</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Варикоз, Потливость, Сосудистый рисунок</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ">Потливость (гипергидроз)</param>
<param name="ЗДОРОВЬЕ">При геморрое, При климаксе, Расширение вен, Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло «Кипарис»&amp;nbsp;
</param>
<param name="Способ применения">Аромакурительницы: 5–7 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 4–6 к&amp;nbsp;кипариса на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 5–8 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Противопростудные растирания: 20 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;базисного масла, растирать грудную клетку детей и&amp;nbsp;взрослых;&amp;nbsp;
 
 Компрессы: теплые масляные на&amp;nbsp;— область травм, воспаления, боли (7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 4 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обогащение косметических средств: 3–4 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Примочки: 15 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;кипяченой воды, намочить и&amp;nbsp;отжать тампон, прикладывать к&amp;nbsp;области воспаления;&amp;nbsp;
 
 Промывание ран: 2% раствор кипариса (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Микроклизмы: при обострении геморроя 7–8 к&amp;nbsp;смешать с&amp;nbsp;10–15&amp;nbsp;мл&amp;nbsp;масла зверобоя, ввести в&amp;nbsp;прямую кишку, немного полежать на&amp;nbsp;животе;&amp;nbsp;
 
 Косметический лед: 3 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Освежающее втирание: смешать 50&amp;nbsp;мл&amp;nbsp;водки с&amp;nbsp;15 к&amp;nbsp;кипариса, смочить салфетку, протирать тело и&amp;nbsp;зоны повышенного потоотделения;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески;
&amp;nbsp;</param>
</offer>
<offer id="1038" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_mayoran_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1110</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/535/5359e70c390a05e3efa4bc1efc6e3c51.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО МАЙОРАН, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО МАЙОРАН, 10 мл</description>
<param name="Артикул">517</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Отечная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Отечная кожа, Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Бессонница, При кашле, При насморке, При простуде, Расширение вен</param>
<param name="Состав">100% эфирное масло «Майоран»,&amp;nbsp; содержание карвакрола до 15%. 
 
 &amp;nbsp;*Карвакрол&amp;nbsp;(фенол) является природным антибиотком, при этом он уничтожает ТОЛЬКО бактерии-паразиты, чем и заслужил такое внимание со стороны медицины. Карвакрол&amp;nbsp;&amp;nbsp;сильнее стрептомицина, пенициллина и ещё 16 антибиотиков. При этом патогенная микрофлора поражается на 97-100%.
 </param>
<param name="Способ применения">Ингаляции: горячие&amp;nbsp;— 1–2 к&amp;nbsp;(6–10&amp;nbsp;мин); холодные&amp;nbsp;— 5–7&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 3–5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1–3 к;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 4–6 к; сидячие&amp;nbsp;— 2–3 к; для ног&amp;nbsp;— 10–12 к;&amp;nbsp;
 
 Противокератозные компрессы: 15 к&amp;nbsp;майорана пропитать 0,5 ч.л. морской соли, нанести на&amp;nbsp;ватную салфетку и&amp;nbsp;приложить к&amp;nbsp;мозолю или натоптышу, плотно прибинтовав на&amp;nbsp;30–40&amp;nbsp;мин, повторять ежедневно 10–12 раз;&amp;nbsp;
 
 Полоскания: 2–4 к&amp;nbsp;на&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;теплой воды;&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 7 к&amp;nbsp;на&amp;nbsp;2 ст. л. масла зверобоя, закапывать по&amp;nbsp;5–10 к&amp;nbsp;в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Массаж: 4–7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;базисного масла;&amp;nbsp;
 
 Маски: для волос: 5–7 к&amp;nbsp;смешать с&amp;nbsp;глиной, бальзамом, маслом макадамии (5–7&amp;nbsp;мл), нанести на&amp;nbsp;кожу головы (по&amp;nbsp;проборам), тепло укутать, оставить на&amp;nbsp;10–15 мин; для лица: 2–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы (масло виноградных косточек, ростков пшеницы, маски из&amp;nbsp;глины, спирулины), равномерно нанести на&amp;nbsp;лицо (на&amp;nbsp;зоны расширенных пор&amp;nbsp;— более толстым слоем), оставить на&amp;nbsp;5&amp;nbsp;мин;&amp;nbsp;
 
 Влажные обертывания: 10 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;воды, намочить и&amp;nbsp;отжать простыню, обернуть тело 3–4 раза;&amp;nbsp;
 
 Компрессы: масляные&amp;nbsp;— 7–8 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы; теплые и&amp;nbsp;холодные водные&amp;nbsp;— 5–7 к&amp;nbsp;на&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды, намочить и&amp;nbsp;отжать гигроскопичную ткань, прикладывать ко&amp;nbsp;лбу, икроножным мышцам (при гипертермии), на&amp;nbsp;лицо, области колик, болей;&amp;nbsp;
 
 Обогащение косметики: 5–8 к&amp;nbsp;на&amp;nbsp;15 г&amp;nbsp;основы;&amp;nbsp;
 
 Косметический лед: 2–4 к&amp;nbsp;добавить в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;воды, залить в&amp;nbsp;форму, заморозить.&amp;nbsp;
 
 Протирать лицо, шею, зону декольте;&amp;nbsp;
 
 Прием внутрь: 5–7 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;меда, варенья, майонеза, соуса, принимать по&amp;nbsp;0,5 ч.л. смеси утром и&amp;nbsp;вечером, можно добавлять в&amp;nbsp;блюда из&amp;nbsp;овощей, мяса, рыбы, птицы. Запивать соком, кефиром, чаем.
&amp;nbsp;</param>
</offer>
<offer id="1039" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_mandarin_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>970</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/f7f/f7f8e8832873b8ce0c97c67b69e21877.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО МАНДАРИН, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО МАНДАРИН, 10 мл</description>
<param name="Артикул">522</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для загара, Лишний вес, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Желчегонное, Кровоточивость десен (парадонтоз), Нормализация пищеварения, Слабость, утомляемость</param>
<param name="Состав">100% эфирное масло мандарина.&amp;nbsp;</param>
<param name="Способ применения">ПРИМЕНЕНИЕ эфирного масла МАНДАРИНА:&amp;nbsp;
 
 Ингаляции: горячие – 1 - 2 к. (6-10 мин); холодные – 5 - 7 мин;&amp;nbsp;
 
 Аромакурительницы: 5 - 8 к. на 15 кв. м;&amp;nbsp;
 
 Аромамедальоны: 1 - 3 к.;&amp;nbsp;
 
 Ванны: общие – 4 - 7 к.; сидячие - 2 - 3 к.; для ног - 3 - 4 к.;&amp;nbsp;
 
 Полоскания: 2 - 4 к. на 200 мл теплой воды;&amp;nbsp;
 
 Аппликации на десны: смешать 5 - 7 к. мандарина с маслом зверобоя (1:4), наносить 2 раза в день;&amp;nbsp;
 
 Капли в нос: 7 к на 2 ст. л масла зверобоя, закапывать по 5-10 к. в каждую ноздрю с периодичностью в 2 - 3 ч;&amp;nbsp;
 
 Массаж: 7 - 10 к. на 10 мл базисного масла;&amp;nbsp;
 
 Маски: для волос: 5 - 7 к. смешать с глиной, бальзамом, маслом макадамии (5 - 7 мл), нанести на кожу головы (по проборам), тепло укутать, оставить на 10 - 15 мин; для лица: 2 - 3 к. на 5 мл основы (масло виноградных косточек, ростков пшеницы, глина, спирулина), равномерно нанести на лицо (на зоны расширенных пор - более толстым слоем), оставить на 5 мин;&amp;nbsp;
 
 Влажные обертывания: 10 к. на 500 мл воды, намочить и отжать простыню, обернуть тело 3 - 4 раза;&amp;nbsp;
 
 Компрессы: масляные – 7 - 8 к. на 5 мл основы; теплые и холодные водные - 5 - 7 к. на 200 мл воды, намочить и отжать гигроскопичную ткань, прикладывать ко лбу, икроножным мышцам (при гипертермии), на лицо, области колик, болей;&amp;nbsp;
 
 Обогащение косметики: 5 - 8 к. на 15 г основы;&amp;nbsp;
 
 Дезодорант: 10 - 12 к. на 100 мл тоника, лосьона или воды, пропитать ватный тампон, протирать участки, склонные к повышенному потоотделению;&amp;nbsp;
 
 Косметический лед: 5 - 7 к. добавить в 100 мл воды, залить в форму, заморозить. Протирать лицо, шею, зону декольте;&amp;nbsp;
 
 Аппликации для отбеливания кожи: 10 к. мандарина на 10 к. базисного масла и 1 ч. л. влажной глины, наносить локально на область гиперпигментации;&amp;nbsp;
 
 Прием внутрь: 5 - 7 к. смешать с 50 мл меда, варенья, масла, принимать по 0,5 ч. л. смеси утром и вечером. Запивать соком, кефиром, чаем.;&amp;nbsp;
 
 Аромарасчесывание: наносить в чистом виде (или 1:1 с маслом макадамии) на зубцы расчески, расчесывать волосы, начиная с кончиков.&amp;nbsp;
 
 ПРЕДОСТОРОЖНОСТИ ПРИМЕНЕНИЯ эфирного масла мандарина: не наносить на кожу перед контактом с активным солнцем.&amp;nbsp;
 
 
 
 
 </param>
</offer>
<offer id="1040" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_myata_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>800</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/f69/f696da40d634a0e3eccf5f548b43c698.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО МЯТА, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО МЯТА, 10 мл</description>
<param name="Артикул">509</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Отечная, Проблемная, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для ванны, Мышечная боль, Отечная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Боли в мышцах и суставах, Желчегонное, Нормализация пищеварения, При метеоризме</param>
<param name="Состав">100% эфирное масло «Мята»&amp;nbsp;&amp;nbsp;
</param>
<param name="Способ применения">Ингаляции: горячие&amp;nbsp;— 2 к&amp;nbsp;(6–10&amp;nbsp;мин); холодные&amp;nbsp;— 5–7&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 4–6 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 2 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 2–4 к&amp;nbsp;мяты на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 4–6 к; сидячие&amp;nbsp;— 2–4 к; для ног&amp;nbsp;— 6–10 к;&amp;nbsp;
 
 Массаж, растирания: 6–8 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;базисного масла;&amp;nbsp;
 
 Маски для лица: 2–4 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы (масло виноградных косточек, ростков пшеницы, глина, спирулина), равномерно нанести на&amp;nbsp;лицо и&amp;nbsp;оставить на&amp;nbsp;5&amp;nbsp;мин;&amp;nbsp;
 
 Влажные обертывания: 10 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;воды, намочить и&amp;nbsp;отжать простыню, обернуть тело 3–4 раза;&amp;nbsp;
 
 Компрессы: масляные&amp;nbsp;— 6–8 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы; теплые и&amp;nbsp;холодные водные&amp;nbsp;— 4–6 к&amp;nbsp;на&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды, намочить и&amp;nbsp;отжать гигроскопичную ткань, прикладывать ко&amp;nbsp;лбу, икроножным мышцам (при гипертермии), на&amp;nbsp;лицо, области колик, болей;&amp;nbsp;
 
 Косметический лед: 4 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Обогащение косметики: 4–6 к&amp;nbsp;на&amp;nbsp;15 г&amp;nbsp;основы;&amp;nbsp;
 
 Прием внутрь: 8–10 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;меда, варенья, майонеза, соуса, принимать по&amp;nbsp;0,5 ч.л. смеси утром и&amp;nbsp;вечером, можно добавлять в&amp;nbsp;блюда из&amp;nbsp;овощей, мяса, рыбы, птицы. Запивать соком, кефиром, чаем.
&amp;nbsp;</param>
</offer>
<offer id="1041" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_sosna_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1110</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/3d9/3d97d7c64c5e0efbade529b40146ac36.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО СОСНА, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО СОСНА, 10 мл</description>
<param name="Артикул">506</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся, От выпадения, Поврежденные</param>
<param name="ДЛЯ ЛИЦА">Комбинированная, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для ванны, Проблемная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Отёки, При кашле, При простуде, Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло «Сосна»</param>
<param name="Способ применения">Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 2–5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 4–6 к&amp;nbsp;сосны на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 3–5 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Противопростудные растирания: 20 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;базисного масла, растирать грудную клетку детей и&amp;nbsp;взрослых;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, воспалений, боли (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;базисного масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 2 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Примочки: 15 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;кипяченой воды, намочить и&amp;nbsp;отжать тампон, прикладывать к&amp;nbsp;области нагноения на&amp;nbsp;3–5&amp;nbsp;мин;&amp;nbsp;
 
 Промывание ран: 2% раствор сосны (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Аппликации: чистым маслом на&amp;nbsp;участок травмы и&amp;nbsp;кровотечения;&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Освежающее втирание: смешать 50&amp;nbsp;мл&amp;nbsp;водки с&amp;nbsp;15 к&amp;nbsp;ели, смочить салфетку, протирать тело и&amp;nbsp;зоны повышенного потоотделения;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="1042" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_fenkhel_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>660</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/a96/a96dbf4c37d97506e95cea3404e56eb3.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ФЕНХЕЛЬ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ФЕНХЕЛЬ, 10 мл</description>
<param name="Артикул">540</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Лишний вес, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Кровоточивость десен (парадонтоз), Нормализация пищеварения, Отёки</param>
<param name="Состав">100% эфирное масло «Фенхель»</param>
<param name="Способ применения">Ингаляции: горячие (5–7&amp;nbsp;мин)&amp;nbsp;— 1–2 к; холодные&amp;nbsp;— 5–7&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 4–6 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1–3 к;&amp;nbsp;
 
 Полоскания: 2–3 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 2 к&amp;nbsp;на&amp;nbsp;2 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 4–7 к; горячие сидячие&amp;nbsp;— 5–7 к; горячие ножные&amp;nbsp;— 3–4 к;&amp;nbsp;
 
 Массаж, растирания: 3–7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область боли и&amp;nbsp;колик (7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;базисного масла); холодные водные&amp;nbsp;— на&amp;nbsp;икроножные мышцы, лоб при жаре (7–8 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;воды);&amp;nbsp;
 
 Обогащение косметических средств: 3–4 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;микстуру, мед, варенье (3–4 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды во&amp;nbsp;избежание раздражения слизистой оболочки желудка;
&amp;nbsp;</param>
</offer>
<offer id="1043" available="true">
<url>https://styx-online.ru/catalog/aromalampy_/aromalampa_venetsiya_/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>420</price>
<currencyId>RUB</currencyId>
<categoryId>275</categoryId>
<picture>https://styx-online.ru/upload/iblock/b9f/b9fe5e1d1a580a0d0da7786ce84e16f5.jpg</picture>
<vendor></vendor>
<name>АРОМАЛАМПА &quot;ВЕНЕЦИЯ&quot;</name>
<description>АРОМАЛАМПА &quot;ВЕНЕЦИЯ&quot;</description>
<param name="Артикул">33311</param>
<param name="Вес/объем">222</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1044" available="true">
<url>https://styx-online.ru/catalog/aromalampy_/aromalampa_galereya_/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>740</price>
<currencyId>RUB</currencyId>
<categoryId>275</categoryId>
<picture>https://styx-online.ru/upload/iblock/e4f/e4f401ec9f21cc06eb73f80fc74698b5.png</picture>
<vendor></vendor>
<name>АРОМАЛАМПА &quot;ГАЛЕРЕЯ&quot;</name>
<description>АРОМАЛАМПА &quot;ГАЛЕРЕЯ&quot;</description>
<param name="Артикул">33304</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1045" available="true">
<url>https://styx-online.ru/catalog/aromalampy_/aromalampa_russkiy_chay_/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>850</price>
<currencyId>RUB</currencyId>
<categoryId>275</categoryId>
<picture>https://styx-online.ru/upload/iblock/699/6993bab3202f12354347646eba744a71.jpeg</picture>
<vendor></vendor>
<name>АРОМАЛАМПА &quot;РУССКИЙ ЧАЙ&quot;</name>
<description>АРОМАЛАМПА &quot;РУССКИЙ ЧАЙ&quot;</description>
<param name="Артикул">33337</param>
<param name="Вес/объем">480</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1046" available="true">
<url>https://styx-online.ru/catalog/balzamy_maski_i_sprei_dlya_volos/balzam_dlya_volos_restavriruyushchiy_khenna_krasnyy_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>840</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/4c5/4c5a5c77a6931d7b29d3b56f3cabfd78.jpg</picture>
<vendor></vendor>
<name>БАЛЬЗАМ ДЛЯ ВОЛОС РЕСТАВРИРУЮЩИЙ ХЕННА КРАСНЫЙ , 150  мл</name>
<description>БАЛЬЗАМ ДЛЯ ВОЛОС РЕСТАВРИРУЮЩИЙ ХЕННА КРАСНЫЙ , 150  мл</description>
<param name="Артикул">14533</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для брюнеток, Ломкие, секущиеся, Окрашенные, От выпадения, Поврежденные, Пористые, Сухие</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Вода, масло кокоса, масло ростков пшеницы, хна, алоэ, эфирные масла</param>
<param name="Способ применения">Нанести на влажные волосы на 2-5 минут, смыть теплой водой.
 
 Возможно использование как маски для волос, нанести на очищенные волосы на 30 минут. &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;
 
 </param>
</offer>
<offer id="1048" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/maslo_massazhnoe_zhiznennyy_tonus_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1150</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/e65/e65ee20b87a2e88cae7842e34d98d9e6.png</picture>
<vendor></vendor>
<name>МАСЛО МАССАЖНОЕ &quot;ЖИЗНЕННЫЙ ТОНУС&quot;, 100 мл</name>
<description>МАСЛО МАССАЖНОЕ &quot;ЖИЗНЕННЫЙ ТОНУС&quot;, 100 мл</description>
<param name="Артикул">1032</param>
<param name="Вес/объем">100</param>
<param name="Картинки">https://styx-online.ru/upload/iblock/bbb/bbb14fdae08ff6e8f1601e39af7e40ba.jpg</param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла макадамии, жожоба, сои, ростков пшеницы, календулы, кунжута, миндаля, эфирные масла апельсина, бергамота, можжевельника, кедра, лимонника, корицы.</param>
<param name="Способ применения">Подходит для использования по телу и лицу, как для профессионального массажа любой техники, так и для домашнего использования (к примеру это отличная замена крему для тела после душа или замена ночному крему для лица).
 
Расход для массажа по лицу – 10 мл, по телу – 15-20 мл. Перед использованием необходимо разогреть либо в аромалампе, либо на водяной бане, - это активизирует действие массажного масла.</param>
</offer>
<offer id="1049" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/maslo_massazhnoe_s_rozmarinom_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>840</price>
<currencyId>RUB</currencyId>
<categoryId>298</categoryId>
<picture>https://styx-online.ru/upload/iblock/b44/b4426887144528a01c165861d6e16dec.jpg</picture>
<vendor></vendor>
<name>МАСЛО МАССАЖНОЕ &quot;С РОЗМАРИНОМ&quot;, 100 мл</name>
<description>МАСЛО МАССАЖНОЕ &quot;С РОЗМАРИНОМ&quot;, 100 мл</description>
<param name="Артикул">410</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла макадамии, жожоба, сои, ростков пшеницы, календулы, кунжута, миндаля, эфирные масла розмарина, шалфея, эвкалипта.</param>
<param name="Способ применения">Подходит для использования по телу, как для профессионального массажа любой техники, так и для домашнего использования (к примеру, это отличная замена крему для тела после душа). Расход для массажа по телу – 15-20 мл.
 
Перед использованием необходимо разогреть либо в аромалампе, либо на водяной бане - это активизирует действие массажного масла.</param>
</offer>
<offer id="1052" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/shampun_khenna_krasnyy_ot_vypadeniya_volos_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/9e5/9e5babf2e78f9c1aa48d43dbc0390dc1.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ &quot;ХЕННА&quot; КРАСНЫЙ ОТ ВЫПАДЕНИЯ ВОЛОС , 200 мл</name>
<description>ШАМПУНЬ &quot;ХЕННА&quot; КРАСНЫЙ ОТ ВЫПАДЕНИЯ ВОЛОС , 200 мл</description>
<param name="Артикул">14514</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для брюнеток, Для объема, Ломкие, секущиеся, От выпадения, Поврежденные, Пористые, Сухие</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), морская соль, экстракт хенны, зелёного чая, эфирное масло пачули.&amp;nbsp;
 
 </param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену.
 
 Оставить на несколько минут, после чего смыть тёплой водой.&amp;nbsp;
 
 Для получения максимального результата рекомендуется после использования шампуня наносить подходящий бальзам для волос.&amp;nbsp;
 
 Подходит для ежедневного применения. Возможно использовать для детей с рождения, но для совсем малышей, что бы не было слезок при попадании шампуня рекомендуем&amp;nbsp;детский шампунь.
 </param>
</offer>
<offer id="1053" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/shampun_bereza_lipa_dlya_zhirnykh_volos_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/3ef/3efc8fd707a946f105b010d90789d202.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ &quot;БЕРЕЗА ЛИПА&quot; ДЛЯ ЖИРНЫХ ВОЛОС , 200 мл</name>
<description>ШАМПУНЬ &quot;БЕРЕЗА ЛИПА&quot; ДЛЯ ЖИРНЫХ ВОЛОС , 200 мл</description>
<param name="Артикул">401</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блондинок, Для брюнеток, Жирные, Жирные у корней / Сухие на кончиках, От выпадения, Чувствительная кожа головы</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Омыленное кокосовое масло , морская соль, биотин, экстракт хенны, берёзы, цветков липы, зелёного чая, эфирное масло бергамота, шалфея, герани, грейпфрута.</param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену.
 
 Оставить на несколько минут, после чего смыть теплой водой.&amp;nbsp;
 
 Для получения максимального результата рекомендуется после использования шампуня наносить подходящий бальзам для волос.&amp;nbsp;
 
 Подходит для ежедневного применения. Возможно использовать для детей с рождения, но для совсем малышей, что бы не было слезок при попадании шампуня рекомендуем&amp;nbsp;детский шампунь.
 </param>
</offer>
<offer id="1054" available="true">
<url>https://styx-online.ru/catalog/shampuni/shampun_myed_propolis_regeneriruyushchiy_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>309</categoryId>
<picture>https://styx-online.ru/upload/iblock/089/089124ca855ff95d68b401d1c8b726ea.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ &quot;МЁД ПРОПОЛИС&quot; РЕГЕНЕРИРУЮЩИЙ , 200 мл</name>
<description>ШАМПУНЬ &quot;МЁД ПРОПОЛИС&quot; РЕГЕНЕРИРУЮЩИЙ , 200 мл</description>
<param name="Артикул">14464</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блондинок, Для брюнеток, Для объема, Ломкие, секущиеся, Нормальные, Окрашенные, От выпадения, Пористые, Сухие</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Омыленное масло кокоса, мед, прополис.</param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. 
 
 Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену. 
 
 Оставить на несколько минут, после чего смыть тёплой водой.&amp;nbsp;
 
 Подходит для ежедневного применения. Возможно использовать для детей с рождения, но для совсем малышей, что бы не было слезок при попадании шампуня рекомендуем&amp;nbsp;детский шампунь.
 </param>
</offer>
<offer id="1055" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_anis_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>490</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/062/062384fb59f83e89fa713b9c69b1fced.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО АНИС, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО АНИС, 10 мл</description>
<param name="Артикул">501</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Зрелая, Обезвоженная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Сухая, обезвоженная кожа</param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Антисептическое, Головокружения, Желчегонное, Нормализация пищеварения, При кашле</param>
<param name="Состав">100% эфирное масло Аниса.&amp;nbsp;

 Получение&amp;nbsp;эфирного масла Анис&amp;nbsp;:&amp;nbsp;водно-паровая дистилляция из Pimpinella anisum (сем. зонтичных).
 
 Эфирное масло Анис:&amp;nbsp;легкое, текучее, бесцветное или слегка желтоватое.
</param>
<param name="Способ применения">
	Аромакурительницы: 4–6 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м?
	Ингаляции: горячие (5–7&amp;nbsp;мин)&amp;nbsp;— 1–2 к; холодные: 5–7&amp;nbsp;мин;
	Аромамедальоны: 1–3 к;
	Полоскания: 2–3 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;
	Капли в&amp;nbsp;нос: 2 к&amp;nbsp;на&amp;nbsp;2 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;
	Ванны: общие&amp;nbsp;— 4–7 к; горячие сидячие -5-7&amp;nbsp;к; горячие ножные&amp;nbsp;— 3–4 к;
	Массаж, растирания: 3–7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;
	Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область боли и&amp;nbsp;колик (7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла); холодные водные&amp;nbsp;— на&amp;nbsp;икроножные мышцы, лоб при жаре (7–8 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл&amp;nbsp;воды);
	Обогащение косметических средств: 3–4 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;
	Внутреннее употребление: добавка в&amp;nbsp;микстуру, мед, варенье (3–4 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды во&amp;nbsp;избежание раздражения слизистой оболочки желудка.
</param>
</offer>
<offer id="1056" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_geran_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2040</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/c1a/c1a03b00fa2821cfe927fa4fe8961536.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ГЕРАНЬ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ГЕРАНЬ, 10 мл</description>
<param name="Артикул">505</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Купероз, Отечная, Пористый рельеф кожи, Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Отечная кожа, Потеря эластичности кожи, Сосудистый рисунок, Стрии, растяжки, Сухая кожа, Целлюлит, Чувствительная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК">Сухая, обезвоженная кожа</param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Герпес, Головная боль, Депрессии, Невралгии, Нейродермиты, Ожоги, Отёки, При климаксе, При простуде, Улучшение кровообращения</param>
<param name="Состав">100% эфирное масло Герань.
 

	 Получение&amp;nbsp;эфирного масла Герань:&amp;nbsp;водно-паровая дистилляция Pelargonium graveolens (Pelargonium roseum)&amp;nbsp; (сем. гераниевых).


	 Эфирное масло&amp;nbsp;Герань:&amp;nbsp;плотное, текучее, летучее, с легким соломенно-зеленоватым оттенком.
</param>
<param name="Способ применения">
	&amp;nbsp; Аромакурительницы: 3–5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
	 &amp;nbsp; Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные: 7–10&amp;nbsp;мин;&amp;nbsp;
 
	 &amp;nbsp; Аромамедальоны: 1 к;&amp;nbsp;
 
	 &amp;nbsp; Полоскания: 2 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
	 &amp;nbsp; При головной боли: масло в&amp;nbsp;чистом виде нанести на&amp;nbsp;область лба, проекции сонных артерий, затылочные бугры, височные ямки, помассировать (провести процедуру&amp;nbsp;
	 2–3 раза с&amp;nbsp;перерывом 10–15&amp;nbsp;мин);&amp;nbsp;
 
	 &amp;nbsp; Ванны: общие&amp;nbsp;— 4–6 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
	 &amp;nbsp; Массаж, растирания: 5–10 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
	 &amp;nbsp; Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травмы, боли, воспаления (7 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;масла); холодный обезболивающий, успокаивающий компресс (10 к&amp;nbsp;на&amp;nbsp;500&amp;nbsp;мл):
	 намочить и&amp;nbsp;отжать мягкую ткань, прикладывать к&amp;nbsp;области боли (лоб&amp;nbsp;— при головной боли, грудная клетка&amp;nbsp;— при сердцебиениях и т. д.), при гипертонии можно протирать все тело или делать обертывания;&amp;nbsp;
 
	 &amp;nbsp; Капли в&amp;nbsp;нос, в&amp;nbsp;ухо: 7 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждое отверстие с&amp;nbsp;периодичностью 1 раз в&amp;nbsp;1,5–2 часа;&amp;nbsp;
 
	 &amp;nbsp; Обогащение косметических средств: 4–6 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
	 &amp;nbsp; Локальные аппликации: 5 к&amp;nbsp;смешать с&amp;nbsp;10 к&amp;nbsp;масла зверобоя или черного тмина, наносить на&amp;nbsp;элемент воспаления;&amp;nbsp;
 
	 &amp;nbsp; При лечении ожогов и&amp;nbsp;обморожений: на&amp;nbsp;пораженную область наносить чистое гераниевое масло;&amp;nbsp;
	 Косметический лед: 4 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
	 &amp;nbsp; Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать кефиром, ряженкой, мацони, айраном, соком с&amp;nbsp;мякотью;&amp;nbsp;
 
	 &amp;nbsp; Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
	 &amp;nbsp; Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески;
	 &amp;nbsp;
 
</param>
</offer>
<offer id="1057" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_melissa_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>890</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/562/56283d40f7cc62725bfe6da2cbbd5b57.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО МЕЛИССА, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО МЕЛИССА, 10 мл</description>
<param name="Артикул">518</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Жирная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Бессонница, Желчегонное, Невралгии, Расширение вен, Укусы насекомых</param>
<param name="Состав">100% эфирное масло мелиссы.&amp;nbsp;</param>
<param name="Способ применения">ПРИМЕНЕНИЕ эфирного масла мелисса:&amp;nbsp;
 
 Ингаляции: горячие – 1 - 2 к. (6 - 10 мин); холодные – 5 - 7 мин;&amp;nbsp;
 
 Аромакурительницы: 3 - 5 к. на 15 кв. м;&amp;nbsp;
 
 Аромамедальоны: 1 - 3 к.;&amp;nbsp;
 
 В сауне и бане: 3 - 4 к. мелиссы на 1 сеанс;&amp;nbsp;
 
 Ванны: общие – 4 - 6 к.; сидячие - 2 - 3 к.; для ног - 10 - 12 к.;&amp;nbsp;
 
 Массаж, растирания: 3 - 5 к. на 10 мл базисного масла;&amp;nbsp;
 
 Маски: для волос: 5 - 7 к. смешать с глиной, бальзамом, маслом макадамии (5 - 7 мл), нанести на кожу головы (по проборам), тепло укутать, оставить на 10 - 15 мин; для лица: 2 - 3 к. на 5 мл основы (масло виноградных косточек, ростков пшеницы, глина, спирулина), равномерно нанести на лицо (на зоны расширенных пор - более толстым слоем), оставить на 5 мин;&amp;nbsp;
 
 Влажные обертывания: 10 к. на 500 мл воды, намочить и отжать простыню, обернуть тело 3 - 4 раза;&amp;nbsp;
 
 Компрессы: масляные – 7 - 8 к. на 5 мл основы; теплые и холодные водные - 5 - 7 к. на 200 мл воды, намочить и отжать гигроскопичную ткань, прикладывать ко лбу, икроножным мышцам (при гипертермии), на лицо, области колик, болей;&amp;nbsp;
 
 Промывание ран: 2% раствор мелиссы (30 к. эмульгировать 0,5 ч. л. соды и развести в 100 мл чистой воды);&amp;nbsp;
 
 Косметический лед: 2 к. смешать с медом, или косметическими сливками (1 ч. л.), развести в 200 мл воды и порционно заморозить.&amp;nbsp;
 Протирать лицо, шею, область декольте утром и вечером.;&amp;nbsp;&amp;nbsp;&amp;nbsp;
 
 Обогащение косметики: 5 - 8 к. на 15 г основы;&amp;nbsp;
 
 Прием внутрь: 5 - 7 к. смешать с 50 мл меда, варенья, майонеза, соуса, принимать по 0,5 ч. л. смеси утром и вечером, можно добавлять в блюда из овощей, мяса, рыбы, птицы. Запивать соком, кефиром, чаем.&amp;nbsp;
 
 ПРЕДОСТОРОЖНОСТИ ПРИМЕНЕНИЯ эфирного масла мелисса: не применять в первой половине беременности. Не применять непрерывно более 3-х недель. Нежелательно совмещать применение мелиссы и работу, связанную с нагрузкой на голосовые связки (возможна кратковременная охриплость голоса).&amp;nbsp;
 
 
 
 
 </param>
</offer>
<offer id="1058" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_pachuli_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1020</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/ec2/ec20ef8ee6df32214c6cf48130e26bca.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ПАЧУЛИ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ПАЧУЛИ, 10 мл</description>
<param name="Артикул">519</param>
<param name="Вес/объем">10</param>
<param name="Картинки">https://styx-online.ru/upload/iblock/d8c/d8c93b8f17fa246450e1bbba2c3d5c8e.jpg, https://styx-online.ru/upload/iblock/0d0/0d002d1f5ea642206efc4241c9cfad57.png</param>
<param name="ДЛЯ ВОЛОС">Для блеска, Перхоть, Сухие</param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Сухая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Сухая кожа, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Герпес, При геморрое</param>
<param name="Состав">100% эфирное масло «Пачули»&amp;nbsp;
</param>
<param name="Способ применения">Ингаляции: горячие (7–10&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 3–4&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 5–8 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 Полоскания: 2 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды;&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 6–7 к; теплые сидячие&amp;nbsp;— 3–5 к;&amp;nbsp;
 
 Массаж, растирания: 2–6 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Эротический массаж и&amp;nbsp;интим-косметика: 10 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;мл&amp;nbsp;основы (масло макадамии, жожоба);&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, боли (3 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;базисного масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 1 к&amp;nbsp;на&amp;nbsp;2–3 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Косметический лед: 5 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (5–7 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="1059" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/efirnoe_maslo_shishki_eli_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>970</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/04c/04c6b268983ec5a135219fa49a5640a4.jpg</picture>
<vendor></vendor>
<name>ЭФИРНОЕ МАСЛО ШИШКИ ЕЛИ, 10 мл</name>
<description>ЭФИРНОЕ МАСЛО ШИШКИ ЕЛИ, 10 мл</description>
<param name="Артикул">556</param>
<param name="Вес/объем">10</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Ломкие, секущиеся, От выпадения, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Жирная, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Потливость</param>
<param name="Состав">100% эфирное масло «Шишки ели»&amp;nbsp;</param>
<param name="Способ применения">Ингаляции: горячие (3–5&amp;nbsp;мин)&amp;nbsp;— 1 к; холодные&amp;nbsp;— 2–3&amp;nbsp;мин;&amp;nbsp;
 
 Аромакурительницы: 2–5 к&amp;nbsp;на&amp;nbsp;15&amp;nbsp;м;&amp;nbsp;
 
 Аромамедальоны: 1 к;&amp;nbsp;
 
 В&amp;nbsp;сауне и&amp;nbsp;бане: 4–6 к&amp;nbsp;шалфея на&amp;nbsp;1 сеанс;&amp;nbsp;
 
 Полоскания: 1 к&amp;nbsp;с&amp;nbsp;0,5 ч.л. эмульгатора (сода, соль, мед) на&amp;nbsp;стакан теплой воды&amp;nbsp;
 
 Ванны: общие&amp;nbsp;— 3–5 к; теплые сидячие&amp;nbsp;— 2–3 к;&amp;nbsp;
 
 Массаж: 3–5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;транспортной основы;&amp;nbsp;
 
 Противопростудные растирания: 20 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;базисного масла, растирать грудную клетку детей и&amp;nbsp;взрослых;&amp;nbsp;
 
 Компрессы: теплые масляные&amp;nbsp;— на&amp;nbsp;область травм, воспалений, боли (5 к&amp;nbsp;на&amp;nbsp;10&amp;nbsp;мл&amp;nbsp;базисного масла);&amp;nbsp;
 
 Капли в&amp;nbsp;нос: 5–6 к&amp;nbsp;на&amp;nbsp;2 ч.л. масла зверобоя, закапывать по&amp;nbsp;3–4 капли в&amp;nbsp;каждую ноздрю 1 раз в&amp;nbsp;60–90&amp;nbsp;мин;&amp;nbsp;
 
 Обогащение косметических средств: 1–3 к&amp;nbsp;на&amp;nbsp;5&amp;nbsp;мл&amp;nbsp;основы;&amp;nbsp;
 
 Примочки: 15 к&amp;nbsp;смешать с&amp;nbsp;30&amp;nbsp;мл&amp;nbsp;кипяченой воды, намочить и&amp;nbsp;отжать тампон, прикладывать к&amp;nbsp;области нагноения на&amp;nbsp;3–5&amp;nbsp;мин;&amp;nbsp;
 
 Промывание ран: 2% раствор шишек ели (30 капель эмульгировать 0,5 ч.л. соды и&amp;nbsp;развести в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;чистой воды);&amp;nbsp;
 
 Лечение ран: смешать 30 к&amp;nbsp;с&amp;nbsp;1 ч.л. разогретого пчелиного воска и&amp;nbsp;1 ч.л. масла зверобоя, прикладывать к&amp;nbsp;больному месту (перед применением подогревать);&amp;nbsp;
 
 Аппликации: чистым маслом на&amp;nbsp;участок травмы и&amp;nbsp;кровотечения;&amp;nbsp;
 
 Косметический лед: 2 к&amp;nbsp;смешать с&amp;nbsp;медом или косметическими сливками (1 ч.л.), развести в&amp;nbsp;200&amp;nbsp;мл&amp;nbsp;воды и&amp;nbsp;порционно заморозить. Протирать лицо, шею, область декольте утром и&amp;nbsp;вечером;&amp;nbsp;
 
 Внутреннее употребление: добавка в&amp;nbsp;мед, варенье (4–5 к&amp;nbsp;на&amp;nbsp;100&amp;nbsp;мл), применять по&amp;nbsp;1 ч.л. смеси 1–4 раза в&amp;nbsp;день. Запивать большим количеством подкисленной воды, кисломолочными продуктами, соками;&amp;nbsp;
 
 Противокашлевая микстура: смешать 2 к&amp;nbsp;шишек ели с&amp;nbsp;1 ч.л. меда и&amp;nbsp;1 ч.л. растительного масла, растворить смесь в&amp;nbsp;100&amp;nbsp;мл&amp;nbsp;горячего молока. Принимать в&amp;nbsp;течение дня по&amp;nbsp;20–30&amp;nbsp;мл&amp;nbsp;для лечения бронхитов, бронхиальной астмы, фаринголарингитов;&amp;nbsp;
 
 Репеллент: 15 к&amp;nbsp;смешать с&amp;nbsp;50&amp;nbsp;мл&amp;nbsp;базисного масла, молочка для тела или тоника, наносить равномерно на&amp;nbsp;открытые участки тела;&amp;nbsp;
 
 Освежающее втирание: смешать 50&amp;nbsp;мл&amp;nbsp;водки с&amp;nbsp;15 к&amp;nbsp;шишек ели, смочить салфетку, протирать тело и&amp;nbsp;зоны повышенного потоотделения;&amp;nbsp;
 
 Аромарасчесывание: наносить на&amp;nbsp;зубцы расчески.
&amp;nbsp;</param>
</offer>
<offer id="1060" available="true">
<url>https://styx-online.ru/catalog/efirnye_masla_i_literatura/kniga_aromalogiya_quantum_satis/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>380</price>
<currencyId>RUB</currencyId>
<categoryId>261</categoryId>
<picture>https://styx-online.ru/upload/iblock/1c7/1c7bd4dd8a9a3621b59f750cdb1b122c.jpg</picture>
<vendor></vendor>
<name>КНИГА &quot;АРОМАЛОГИЯ: QUANTUM SATIS&quot;</name>
<description>КНИГА &quot;АРОМАЛОГИЯ: QUANTUM SATIS&quot;</description>
<param name="Артикул">4005</param>
<param name="Вес/объем">736</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1062" available="true">
<url>https://styx-online.ru/catalog/dlya_vek_i_gub_/lifting_gel_dlya_vek_verbena_ot_tyemnykh_krugov_30_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2210</price>
<currencyId>RUB</currencyId>
<categoryId>285</categoryId>
<picture>https://styx-online.ru/upload/iblock/9d6/9d6e8cc06fbaca55aa726a5c0eba0571.jpg</picture>
<vendor></vendor>
<name>ЛИФТИНГ ГЕЛЬ ДЛЯ ВЕК ВЕРБЕНА ОТ ТЁМНЫХ КРУГОВ , 30 мл</name>
<description>ЛИФТИНГ ГЕЛЬ ДЛЯ ВЕК ВЕРБЕНА ОТ ТЁМНЫХ КРУГОВ , 30 мл</description>
<param name="Артикул">12467</param>
<param name="Вес/объем">30</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК">Мешки под глазами, Темные круги</param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Cок и экстракт бурых водорослей, масло жожоба, макадамии, эфирное масло и масляный экстракт вербены, лемонграсса, голубой ромашки, сквален. </param>
<param name="Способ применения">Ежедневный утренний и вечерний уход. 

?
После нанесения возникает чувство лёгкого тепла и покалывания (3-7 минут), обусловленное началом работы входящих в состав эфирных масел.
?</param>
</offer>
<offer id="1064" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_aziya_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11560</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/db2/db24d15c2bd2c85b04a0bc78c5ffb6e0.png</picture>
<vendor></vendor>
<name>ЛОСЬОН АЗИЯ , 1000 мл</name>
<description>ЛОСЬОН АЗИЯ , 1000 мл</description>
<param name="Артикул">0431</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Аллергические дерматиты, Для обертываний, Лишний вес, Отечная кожа, Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Талая вода, экстракты гинкго билоба, женьшеня, эхинацеи, зелёного чая, эфирное масло апельсина, иланг-иланга.</param>
<param name="Способ применения">Для  профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="1067" available="true">
<url>https://styx-online.ru/catalog/parfyum_dezodorant_/parfyumernaya_voda_la_nuit_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4070</price>
<currencyId>RUB</currencyId>
<categoryId>296</categoryId>
<picture>https://styx-online.ru/upload/iblock/eb4/eb4311d3d34a69c49e7a1d0d2068216c.jpg</picture>
<vendor></vendor>
<name>ПАРФЮМЕРНАЯ ВОДА &quot;LA NUIT&quot;, 100 мл</name>
<description>ПАРФЮМЕРНАЯ ВОДА &quot;LA NUIT&quot;, 100 мл</description>
<param name="Артикул">18732</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Спирт, эфирное масло жасмина, нарцисса. 
</param>
<param name="Способ применения">Наносить на пульсирующие зоны тела по желанию. 

Можно смешивать по своему вкусу с другими парфюмерными водами STYX.</param>
</offer>
<offer id="1068" available="true">
<url>https://styx-online.ru/catalog/parfyum_dezodorant_/parfyuernaya_voda_la_jeunesse_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4070</price>
<currencyId>RUB</currencyId>
<categoryId>296</categoryId>
<picture>https://styx-online.ru/upload/iblock/2c7/2c7e4a0f8641f4343791c9a335ee4297.jpg</picture>
<vendor></vendor>
<name>ПАРФЮЕРНАЯ ВОДА &quot;LA  JEUNESSE&quot; , 100 мл</name>
<description>ПАРФЮЕРНАЯ ВОДА &quot;LA  JEUNESSE&quot; , 100 мл</description>
<param name="Артикул">18702</param>
<param name="Вес/объем">100</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Спирт, эфирное масло лимона, цитронеллы, мандарина, апельсина. </param>
<param name="Способ применения">Наносить на пульсирующие зоны тела по желанию. 

Можно смешивать по своему вкусу с другими парфюмерными водами STYX.</param>
</offer>
<offer id="1069" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_vodorosli_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2830</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/a6e/a6e7715860fe35990540eeb3f567f6b5.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ВОДОРОСЛИ , 200 мл</name>
<description>ЛОСЬОН ВОДОРОСЛИ , 200 мл</description>
<param name="Артикул">82034</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Отечная кожа, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Детокс, очищение от шлаков, Контроль аппетита, Отёки</param>
<param name="Состав">Талая вода, экстракты фукуса, календулы, хмеля, луговых трав, эфирное масло апельсина, трех видов мяты, гвоздики, ветивера.</param>
<param name="Способ применения">Для  профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="1070" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_led_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2830</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/c36/c360d7329d8e53533b610eaa2166463f.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ЛЕД , 200 мл</name>
<description>ЛОСЬОН ЛЕД , 200 мл</description>
<param name="Артикул">82014</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Аллергические дерматиты, Варикоз, Для обертываний, Лишний вес, Отечная кожа, Сосудистый рисунок, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Отёки, Расширение вен</param>
<param name="Состав">Талая вода, экстракты конского каштана, хвоща, одуванчика, арники, ментол; эфирные масла мяты кудрявой и перечной, эвкалипта, мелиссы.</param>
<param name="Способ применения">Для&amp;nbsp; профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="1072" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_neroli_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2830</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/ad0/ad07f4f4c0267661a9f85ae60c32fc1b.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН НЕРОЛИ , 200 мл</name>
<description>ЛОСЬОН НЕРОЛИ , 200 мл</description>
<param name="Артикул">82044</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Потеря эластичности кожи, Стрии, растяжки, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Талая вода, экстракты морских водорослей, крапивы, одуванчика и ореха колы, эфирное масло гвоздики, нероли, апельсина горького (бигардии).</param>
<param name="Способ применения">Для  профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="1073" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_tsentella_intensiv_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3190</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/16b/16bbc84db4afc22966d5e18c3cb70745.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ЦЕНТЕЛЛА ИНТЕНСИВ , 200 мл</name>
<description>ЛОСЬОН ЦЕНТЕЛЛА ИНТЕНСИВ , 200 мл</description>
<param name="Артикул">82064</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Сосудистый рисунок, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Детокс, очищение от шлаков, Контроль аппетита</param>
<param name="Состав">Талая вода, экстракты зелёного чая, центеллы, колы блестящей, эфирное масло мяты, мелиссы, кипариса, никотиновая кислота.
 </param>
<param name="Способ применения">Для  профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="1075" available="true">
<url>https://styx-online.ru/catalog/ukhod_dlya_ruk_i_nog_/gel_venoznyy_venen_gel_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3190</price>
<currencyId>RUB</currencyId>
<categoryId>298</categoryId>
<picture>https://styx-online.ru/upload/iblock/799/799646772f294b588a9a3111ee73db09.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ВЕНОЗНЫЙ (Venen gel) , 150 мл</name>
<description>ГЕЛЬ ВЕНОЗНЫЙ (Venen gel) , 150 мл</description>
<param name="Артикул">83163</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты мальвы, конского каштана, одуванчика, хвоща, эфирные масла эвкалипта, мяты, розмарина, чабреца, масло сои, ментол.  
? </param>
<param name="Способ применения">Применяется в профессиональных процедурах (виски-пеленания, сухие термообёртывания) и в домашнем уходе для пролонгации эффекта после процедуры или в качестве ежедневного домашнего ухода.  
Домашний уход: тонким слоем наносить на ноги и зоны видимости вен (сосудов, капилляров) 1-2 раза в день.  

По необходимости можно увеличить количество нанесений до 5 раз в день, для снятия ощущения усталости.

? </param>
</offer>
<offer id="1076" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/gel_zhar_kholod_cool_hot_gel_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2600</price>
<currencyId>RUB</currencyId>
<categoryId>298</categoryId>
<picture>https://styx-online.ru/upload/iblock/63c/63c4f024ae93a814facbbf5b60c249f6.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ЖАР ХОЛОД (Cool &amp; Hot gel) , 150 мл</name>
<description>ГЕЛЬ ЖАР ХОЛОД (Cool &amp; Hot gel) , 150 мл</description>
<param name="Артикул">83063</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракт конского каштана, водоросли, никотиновая кислота, токоферол, масла жожоба и сои, эфирные масла розмарина, лаванды, корицы, мяты перечной и эвкалипта, ментол.
</param>
<param name="Способ применения">Экстракт конского каштана, водоросли, никотиновая кислота, токоферол, масла жожоба и сои, эфирные масла розмарина, лаванды, корицы, мяты перечной и эвкалипта, ментол.
 
 
 Рекомендуется также для ультразвукового фонофореза при борьбе с высокими степенями целлюлита, локальными жировыми отложениями, ожирением, стриями. 
 
 
 
 В домашних условиях применяется 1 - 2 раза в день для борьбы с избыточными жировыми отложениями, снижением обмена веществ и стабилизации результатов коррекции фигуры.
 
 Для усиления эффекта рекомендуется применение под пленку.</param>
</offer>
<offer id="1077" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/gel_koritsa_zell_aktiv_gel_zimt_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2360</price>
<currencyId>RUB</currencyId>
<categoryId>298</categoryId>
<picture>https://styx-online.ru/upload/iblock/980/980cdd0db690d9a57aa0219700d95b56.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ КОРИЦА (Zell Aktiv Gel Zimt) , 150 мл</name>
<description>ГЕЛЬ КОРИЦА (Zell Aktiv Gel Zimt) , 150 мл</description>
<param name="Артикул">83123</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Алоэ, береза, эктракты огурца, масла сои, жожоба, эфирные масла чабреца, корицы, никотиновая кислота.

?
</param>
<param name="Способ применения">В домашних условиях для борьбы с лишним весом наносят локально 1-2 раза в день, избегая участков с видимым сосудистым рисунком. 

 Для усиления эффекта рекомендуется применение под пленку.</param>
</offer>
<offer id="1078" available="true">
<url>https://styx-online.ru/catalog/ukhod_dlya_ruk_i_nog_/gel_svezhest_cool_gel_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2360</price>
<currencyId>RUB</currencyId>
<categoryId>298</categoryId>
<picture>https://styx-online.ru/upload/iblock/88d/88d5b5fcfd30e39d1002219fb115ee64.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ СВЕЖЕСТЬ (Cool gel) , 150 мл</name>
<description>ГЕЛЬ СВЕЖЕСТЬ (Cool gel) , 150 мл</description>
<param name="Артикул">83053</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Эфирные масла мяты, эвкалипт, розмарина, лаванды, нероли, розы, ментол, камфора.</param>
<param name="Способ применения">Применяется в профессиональных процедурах (виски-пеленания, сухие термообёртывания) и в домашнем уходе для пролонгации эффекта после процедуры или в качестве ежедневного домашнего уода. 
 
 
Домашний уход: тонким слоем наносить на ноги и зоны видимости вен (сосудов, капилляров) 1-2 раза в день.</param>
</offer>
<offer id="1079" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/gel_lifting_forte_straffungsgel_forte_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2360</price>
<currencyId>RUB</currencyId>
<categoryId>298</categoryId>
<picture>https://styx-online.ru/upload/iblock/f99/f99608ea397e31591f112c16a52f31fe.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ЛИФТИНГ ФОРТЕ (Straffungsgel forte) , 150 мл</name>
<description>ГЕЛЬ ЛИФТИНГ ФОРТЕ (Straffungsgel forte) , 150 мл</description>
<param name="Артикул">83133</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Потеря эластичности кожи</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Алоэ вера, соя, гамамелис, фукус, гинкго, эхинацея, шиповник, огурец, никотиновая кислота.</param>
<param name="Способ применения">Как лифтинговый корсет в программах коррекции фигуры
 
 В домашних условиях для активизации обмена веществ(наносить 1-2 раза в день)
 
Для усиления эффекта рекомендуется применение под пленку.</param>
</offer>
<offer id="1080" available="true">
<url>https://styx-online.ru/catalog/krema_i_molochko_/krem_lifting_ikra_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13920</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/6e3/6e3d42b78cfe41d5765d64ee401d0126.jpg</picture>
<vendor></vendor>
<name>КРЕМ ЛИФТИНГ ИКРА , 1000 мл</name>
<description>КРЕМ ЛИФТИНГ ИКРА , 1000 мл</description>
<param name="Артикул">0821</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Потеря эластичности кожи, Стрии, растяжки</param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Икра лосося, сок алоэ, масла макадамии, сои, жожоба, виноградных косточек, эфирные масла семян моркови, горького апельсина, петитгрейна, розового дерева, лимона. </param>
<param name="Способ применения">Подходит для ежедневного домашнего ухода за телом. 
 
&amp;nbsp;Рекомендован для использования в период беременности.</param>
</offer>
<offer id="1081" available="true">
<url>https://styx-online.ru/catalog/dlya_i_posle_zagara_1/krem_lifting_ikra_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3300</price>
<currencyId>RUB</currencyId>
<categoryId>298</categoryId>
<picture>https://styx-online.ru/upload/iblock/3f3/3f32536102ac9ff015eb52834c913eec.jpg</picture>
<vendor></vendor>
<name>КРЕМ ЛИФТИНГ ИКРА , 150 мл</name>
<description>КРЕМ ЛИФТИНГ ИКРА , 150 мл</description>
<param name="Артикул">082</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Икра лосося, алоэ вера, масла макадамии, сои, жожоба, виноградных косточек, моркови, эфирные масла горького апельсина, петит грейн, розового дерева, лимона.</param>
<param name="Способ применения">Применяется после сухих и влажных антицеллюлитных обертываний, в домашних условиях-для лифтинга кожи.</param>
</offer>
<offer id="1082" available="true">
<url>https://styx-online.ru/catalog/korrektsiya_figury_/krem_aloe_okhlazhdayushchiy_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11680</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/9bd/9bd6f5dc29e0955fe5a3dbf376e2ff01.jpg</picture>
<vendor></vendor>
<name>КРЕМ АЛОЭ ОХЛАЖДАЮЩИЙ , 1000 мл</name>
<description>КРЕМ АЛОЭ ОХЛАЖДАЮЩИЙ , 1000 мл</description>
<param name="Артикул">83016</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Отечная кожа, После загара, Потеря эластичности кожи, Сухая кожа, Чувствительная кожа, Шелушение</param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Алоэ, глицерин, масла календулы, авокадо, макадамии, сои, эфирные масла лаванды, герани, иссопа, ромашки голубой.</param>
<param name="Способ применения">Подходит для ежедневного домашнего ухода за телом, а также в качестве защитного средства для чувствительных зон перед нанесением агрессивных термоактивных препаратов.           
? </param>
</offer>
<offer id="1083" available="true">
<url>https://styx-online.ru/catalog/krema_i_molochko_/krem_liftingovyy_vodorosli_algen_creme_forte_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12390</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/581/5817f5b61ff9c3f5a288a59dadb52f48.jpg</picture>
<vendor></vendor>
<name>КРЕМ ЛИФТИНГОВЫЙ &quot;ВОДОРОСЛИ&quot; (Algen Creme Forte) , 1000 мл</name>
<description>КРЕМ ЛИФТИНГОВЫЙ &quot;ВОДОРОСЛИ&quot; (Algen Creme Forte) , 1000 мл</description>
<param name="Артикул">83116</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Для обертываний, Лишний вес, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Улучшение кровообращения</param>
<param name="Состав">Водоросли, никотиновая кислота, токоферолы, экстракт огурца, масла макадамии, жожоба, сои, эфирное масло муската и петитгрейна.</param>
<param name="Способ применения">Наносить лёгкими массажными движениями на всё тело (кроме груди) или локально на проблемные зоны 1-2 раза в день.
 
 
 Может применяться как в качестве самостоятельного домашнего антицеллюлитного ухода, так и в качестве пролонгирующего липолитического средства после процедур коррекции фигуры.</param>
</offer>
<offer id="1085" available="true">
<url>https://styx-online.ru/catalog/krema_i_molochko_/krem_konturnyy_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12390</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/9a0/9a0608bb1b90535e2c763688cf3c9398.jpg</picture>
<vendor></vendor>
<name>КРЕМ КОНТУРНЫЙ , 1000 мл</name>
<description>КРЕМ КОНТУРНЫЙ , 1000 мл</description>
<param name="Артикул">83046</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Для обертываний, Лишний вес, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО">Термокрем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла жожоба, макадамии, лимонный сок, эктсракт центеллы азиатской, водоросли, морская соль, молочная сыворотка, соли серебра, эфирные масла горького апельсина, мандарина, лайма, петитгрейна. </param>
<param name="Способ применения">В домашних условиях для борьбы с лишним весом и дряблостью кожи, наносят на всё тело или локально на проблемные зоны 1-2 раза в день, избегая участков с видимым сосудистым рисунком и бюста. 
 
&amp;nbsp;Не применять на участках кожи, открытых действию УФ-излучения, менее чем за час до контакта с открытым солнцем.</param>
</offer>
<offer id="1087" available="true">
<url>https://styx-online.ru/catalog/dlya_i_posle_zagara/krem_lifting_gidratant_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2740</price>
<currencyId>RUB</currencyId>
<categoryId>298</categoryId>
<picture>https://styx-online.ru/upload/iblock/449/4491e718900d637d9861c717744a3eba.jpg</picture>
<vendor></vendor>
<name>КРЕМ ЛИФТИНГ ГИДРАТАНТ , 150 мл</name>
<description>КРЕМ ЛИФТИНГ ГИДРАТАНТ , 150 мл</description>
<param name="Артикул">83143</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Макадамия, календула, ши, ростки пшеницы, авокадо, алоэ, ирландский мох, лецитин, морская соль, ромашка, иланг-иланг, лиметт, мирра.</param>
<param name="Способ применения">Для повышения упругости кожи как после сухих или влажных обертываний
 
В домашних условиях-для омолаживающего и регенерирующего ухода за кожей.</param>
</offer>
<offer id="1088" available="true">
<url>https://styx-online.ru/catalog/aziatika_/gel_antikuperoznyy_s_tsentelloy_aziatskoy_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2360</price>
<currencyId>RUB</currencyId>
<categoryId>301</categoryId>
<picture>https://styx-online.ru/upload/iblock/c0b/c0b20fa1cea47d6c3b190b6a4414c31a.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ АНТИКУПЕРОЗНЫЙ С ЦЕНТЕЛЛОЙ АЗИАТСКОЙ , 150 мл</name>
<description>ГЕЛЬ АНТИКУПЕРОЗНЫЙ С ЦЕНТЕЛЛОЙ АЗИАТСКОЙ , 150 мл</description>
<param name="Артикул">83073</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Купероз, Отечная, Раздражение,воспаления( после пилинга), Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Конский каштан, полевой хвощ, липовый цвет, макадамия, календула, авокадо, ростки пшеницы, жожоба, масло моркови, кипарис.</param>
<param name="Способ применения">Небольшое количество геля для душа распределить по всему телу лёгкими массажными движениями, после чего тщательно смыть тёплой водой.</param>
</offer>
<offer id="1089" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/aromamaslo_antitsellyulit_ekstra_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3300</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/537/537550df90bd6b56de2fea730f4da1cf.jpg</picture>
<vendor></vendor>
<name>АРОМАМАСЛО АНТИЦЕЛЛЮЛИТ ЭКСТРА , 200 мл</name>
<description>АРОМАМАСЛО АНТИЦЕЛЛЮЛИТ ЭКСТРА , 200 мл</description>
<param name="Артикул">82124</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Целлюлит</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Улучшение кровообращения</param>
<param name="Состав">Масло клещевины, соя, макадамия, ростки пшеницы, календула, смородина, розмарин, гвоздика, апельсин, 
перечная мята.</param>
<param name="Способ применения">Подогреть перед использованием. Использовать в качестве массажного средства для тела. В программах 
антицеллюлитного массажа перед использованием аромамасла, рекомендуется на проблемные зоны нанести тонким слоем 
липолитический гель («жар-холод»/ «корица») для достижения более мощного и быстрого эффекта. </param>
</offer>
<offer id="1090" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/aromamaslo_neroli_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3300</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/160/160c0724a7977fe581c5ef67ecbade50.jpg</picture>
<vendor></vendor>
<name>АРОМАМАСЛО НЕРОЛИ , 200 мл</name>
<description>АРОМАМАСЛО НЕРОЛИ , 200 мл</description>
<param name="Артикул">82164</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Для обертываний, Лишний вес, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Улучшение кровообращения</param>
<param name="Состав">Масло клещевины, соя, макадамия, ростки пшеницы, календула, смородина, клещевина, апельсин, бергамот, нероли.</param>
<param name="Способ применения">Подогреть перед использованием. Использовать в качестве массажного средства для тела. В программах&amp;nbsp;
 антицеллюлитного массажа перед использованием аромамасла, рекомендуется на проблемные зоны нанести тонким слоем&amp;nbsp;
 липолитический гель («жар-холод»/ «корица») для достижения более мощного и быстрого эффекта.&amp;nbsp;
 
</param>
</offer>
<offer id="1091" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/aromamaslo_limon_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3300</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/7b6/7b6139b5e8d60d03ab5629ac3d4dae4b.jpg</picture>
<vendor></vendor>
<name>АРОМАМАСЛО ЛИМОН , 200 мл</name>
<description>АРОМАМАСЛО ЛИМОН , 200 мл</description>
<param name="Артикул">82154</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Для обертываний, Потеря эластичности кожи, Сосудистый рисунок, Стрии, растяжки</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Детокс, очищение от шлаков</param>
<param name="Состав">
	МАСЛО КЛЕЩЕВИНЫ, СОЯ, МАКАДАМИЯ, РОСТКИ ПШЕНИЦЫ, КАЛЕНДУЛА, СМОРОДИНА, МЕЛИССА, МАНДАРИН, ЛИМОН, ЛЕМОНГРАСС.
</param>
<param name="Способ применения">Подогреть перед использованием. Использовать в качестве массажного средства для тела. В программах 
 антицеллюлитного массажа перед использованием аромамасла, рекомендуется на проблемные зоны нанести тонким слоем 
липолитический гель («жар-холод»/ «корица») для достижения более мощного и быстрого эффекта.</param>
</offer>
<offer id="1092" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/aromamaslo_roza_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3300</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/653/653679c893b59cca99434146290895b6.jpg</picture>
<vendor></vendor>
<name>АРОМАМАСЛО РОЗА , 200 мл</name>
<description>АРОМАМАСЛО РОЗА , 200 мл</description>
<param name="Артикул">82144</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Для обертываний, Лишний вес, Потеря эластичности кожи, Стрии, растяжки, Целлюлит</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Улучшение кровообращения</param>
<param name="Состав">Масло клещевины, соя, макадамия, ростки пшеницы, календула, смородина, роза.
 
</param>
<param name="Способ применения">Подогреть перед использованием. Использовать в качестве массажного средства для тела. В программах&amp;nbsp;
 антицеллюлитного массажа перед использованием аромамасла, рекомендуется на проблемные зоны нанести тонким слоем&amp;nbsp;
 липолитический гель («жар-холод»/ «корица») для достижения более мощного и быстрого эффекта.&amp;nbsp;
</param>
</offer>
<offer id="1093" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/aromamaslo_rozmarin_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3300</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/e39/e3981a81e91dee256e938a30d562d276.jpg</picture>
<vendor></vendor>
<name>АРОМАМАСЛО РОЗМАРИН , 200 мл</name>
<description>АРОМАМАСЛО РОЗМАРИН , 200 мл</description>
<param name="Артикул">82114</param>
<param name="Вес/объем">200</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Для обертываний, Лишний вес, Целлюлит</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Боли в мышцах и суставах, Детокс, очищение от шлаков</param>
<param name="Состав">Масло клещевины, сои, макадамии, ростков пшеницы, календулы, смородины, эфирное масло розмарина, эвкалипта.</param>
<param name="Способ применения">Подогреть перед использованием.&amp;nbsp;
 
 Можно использовать в качестве массажного средства для тела.&amp;nbsp;
 
В программах антицеллюлитного массажа перед использованием аромамасла&amp;nbsp;рекомендуется на проблемные зоны нанести тонким слоем липолитический гель («Жар-Холод»,&amp;nbsp;«Корица») для достижения более мощного и быстрого эффекта.</param>
</offer>
<offer id="1095" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/tsellogel_strong_silnyy_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2300</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/dd3/dd3b145cac116eee32c4dd5c2c1a5e04.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ СТРОНГ СИЛЬНЫЙ , 150 мл</name>
<description>ЦЕЛЛОГЕЛЬ СТРОНГ СИЛЬНЫЙ , 150 мл</description>
<param name="Артикул">81033</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Потеря эластичности кожи, Стрии, растяжки, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты: плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, морских водорослей, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца, розы), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 2–4 типа в технике термообёртываний (горячих).&amp;nbsp;
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна).&amp;nbsp;
 
 После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.
 </param>
</offer>
<offer id="1096" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/tsellogel_tsentella_i_flerdoranzh_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2800</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/264/264e5b2e9c2d57eac04c8c486ca474cf.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ ЦЕНТЕЛЛА И ФЛЕРДОРАНЖ , 150 мл</name>
<description>ЦЕЛЛОГЕЛЬ ЦЕНТЕЛЛА И ФЛЕРДОРАНЖ , 150 мл</description>
<param name="Артикул">81053</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты: центеллы азиатской, плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, морские водоросли, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 1–4 типа в технике термообёртываний (горячих).
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна).
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1097" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/tsellogel_medium_sredniy_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2200</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/bde/bdeb3c63d3c0b1cba41e42c5ff10279c.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ МЕДИУМ СРЕДНИЙ , 150 мл</name>
<description>ЦЕЛЛОГЕЛЬ МЕДИУМ СРЕДНИЙ , 150 мл</description>
<param name="Артикул">81023</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Отечная кожа, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ</param>
<param name="Состав">Экстракты: плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, морских водорослей, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца, розы), никотиновая кислота.
</param>
<param name="Способ применения">Только для профессионального использования: для кожи 1–3 типа в технике термообёртываний (горячих). 
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна). 
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1098" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/tsellogel_soft_myagkiy_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2100</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/5d1/5d199265585d3e3d22fc22ef6830fc32.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ СОФТ МЯГКИЙ , 150 мл</name>
<description>ЦЕЛЛОГЕЛЬ СОФТ МЯГКИЙ , 150 мл</description>
<param name="Артикул">81013</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Отечная кожа, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты: плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, морских водорослей, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца, розы), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 1–2 типа в технике термообёртываний (горячих). 
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна). 
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1099" available="true">
<url>https://styx-online.ru/catalog/dlya_vanny_i_dusha_/sol_kholodnaya_1000_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8380</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/d0f/d0fe2bd3c345eaf8286e68f3400c5f2d.jpg</picture>
<vendor></vendor>
<name>СОЛЬ ХОЛОДНАЯ , 1000 г</name>
<description>СОЛЬ ХОЛОДНАЯ , 1000 г</description>
<param name="Артикул">82076</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Варикоз, Для ванны, Для обертываний, Лишний вес, Отечная кожа, Проблемная кожа, Сосудистый рисунок</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Соль Мёртвого моря, молочная сыворотка, эфирное масло розмарина, нероли, мяты, петитгрейна; экстракты конского каштана, плюща, фукуса; ментол.         
? </param>
<param name="Способ применения">Для компресса - 0,5-3 чайной ложки соли растворить в 200 мл тёплой воды, для ванн - 0,5-2 чайной ложки на ванну. 

Принимать ванну с холодной солью 15-20 минут, после чего, для скорейшего достижения результата, нанести на всё тело (за исключением груди) жиросжигающий или лифтинговый препарат. 

В качестве мощного антицеллюлитного средства применять для солевого обёртывания: нанести на влажную кожу тела &quot;проблемных&quot; зон, обмотать пищевой плёнкой для парникового эффекта, по возможности, для усиления результата, укрыть термоодеялом. Время проведения процедуры - 20 - 30 минут.
?
?</param>
</offer>
<offer id="1100" available="true">
<url>https://styx-online.ru/catalog/dlya_vanny_i_dusha_/sol_kholodnaya_150_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2010</price>
<currencyId>RUB</currencyId>
<categoryId>294</categoryId>
<picture>https://styx-online.ru/upload/iblock/59c/59c8f5df3cc5ff29e0b48dc4aa9f33cb.jpg</picture>
<vendor></vendor>
<name>СОЛЬ ХОЛОДНАЯ , 150 г</name>
<description>СОЛЬ ХОЛОДНАЯ , 150 г</description>
<param name="Артикул">82073</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для ванны, Лишний вес, Отечная кожа, Проблемная кожа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Дерматиты, Детокс, очищение от шлаков, Расширение вен</param>
<param name="Состав">Соль Мёртвого моря, молочная сыворотка, эфирное масло розмарина, нероли, мяты, петитгрейна; экстракты конского каштана, плюща, фукуса; ментол.</param>
<param name="Способ применения">Для компресса - 0,5-3 чайной ложки соли растворить в 200 мл тёплой воды, для ванн - 0,5-2 чайной ложки на ванну. 

Принимать ванну с холодной солью 15-20 минут, после чего, для скорейшего достижения результата, нанести на всё тело (за исключением груди) жиросжигающий или лифтинговый препарат. 

В качестве мощного антицеллюлитного средства применять для солевого обёртывания: нанести на влажную кожу тела &quot;проблемных&quot; зон, обмотать пищевой плёнкой для парникового эффекта, по возможности, для усиления результата, укрыть термоодеялом. Время проведения процедуры - 20 - 30 минут.</param>
</offer>
<offer id="1101" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/sol_goryachaya_1000_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8380</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/d6b/d6b7682225803282dc027f1ee4b8c236.png</picture>
<vendor></vendor>
<name>СОЛЬ ГОРЯЧАЯ , 1000 г</name>
<description>СОЛЬ ГОРЯЧАЯ , 1000 г</description>
<param name="Артикул">82086</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для ванны, Для обертываний, Лишний вес, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Соль Мертвого моря, молочная сыворотка, розмарин, конский каштан, хмель, плющ, фукус, нероли, гвоздика, апельсин, корица, никотиновая кислота.
?
?</param>
<param name="Способ применения">Для компресса используется 0,2 чайной ложки препарата, а для приема ванн-0,5 чайной ложки.</param>
</offer>
<offer id="1102" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/sol_goryachaya_150_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2010</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/c4b/c4b6fd3363d18bbfd5932a06e1b2c22d.jpg</picture>
<vendor></vendor>
<name>СОЛЬ ГОРЯЧАЯ , 150 г</name>
<description>СОЛЬ ГОРЯЧАЯ , 150 г</description>
<param name="Артикул">82083</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Соль Мёртвого моря, молочная сыворотка, эфирное масло розмарина, нероли, гвоздики, апельсина, корицы, экстракты конского каштана, плюща, фукуса, хмеля, никотиновая кислота.</param>
<param name="Способ применения">Для компресса - 0,5-3 ч. л. соли растворить в 200 мл тёплой воды, для ванн - 0,5-2 ч. л. на ванну. 

Принимать ванну с горячей солью 15-20 мин, после чего, 
для скорейшего достижения результата, нанести на всё тело (за исключением груди) жиросжигающий или лифтинговый препарат.</param>
</offer>
<offer id="1106" available="true">
<url>https://styx-online.ru/catalog/pilingi/mylnye_khlopya_700_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1770</price>
<currencyId>RUB</currencyId>
<categoryId>292</categoryId>
<picture>https://styx-online.ru/upload/iblock/2bf/2bf175514175184364f34ecd588b4bfc.jpg</picture>
<vendor></vendor>
<name>МЫЛЬНЫЕ ХЛОПЬЯ , 700 мл</name>
<description>МЫЛЬНЫЕ ХЛОПЬЯ , 700 мл</description>
<param name="Артикул">83366</param>
<param name="Вес/объем">700</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Растительное и животное сырье (пальмовое масло, ланолин, мыльнянка, водоросли, яблоки, свекла, молоко)&amp;nbsp;
 </param>
<param name="Способ применения">Мыльный пилинг прост в исполнении и приятен в ощущениях. 

Засыпав мыльные хлопья (10–15 шт.) в специальные перчатки для массажа и пилинга, смочить их в емкости с довольно горячей (до 50 °С) водой, взбить мыльную пену (трением ладоней), после чего начать интенсивно массировать кожу.&amp;nbsp;
 </param>
</offer>
<offer id="1107" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha_/massazhnoe_maslo_37_trav_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9090</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/26c/26c3001d66e7c94da1dcd6554f300721.jpg</picture>
<vendor></vendor>
<name>МАССАЖНОЕ МАСЛО 37 ТРАВ , 1000 мл</name>
<description>МАССАЖНОЕ МАСЛО 37 ТРАВ , 1000 мл</description>
<param name="Артикул">84156</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Сосудистый рисунок</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Отёки, Слабость, утомляемость, Улучшение кровообращения</param>
<param name="Состав">Масла макадамии, жожоба, сои, ростков пшеницы, календулы, кунжута, миндаля и 37 эфирных масел, в т. ч. базилика, ромашки, мяты, шизандры, шалфея.</param>
<param name="Способ применения">Подходит для использования по телу и лицу, как для профессионального массажа любой техники, так и для домашнего использования (к примеру, это отличная замена крему для тела после душа или замена ночного крема для лица).
 
 Расход для массажа по лицу – 10 мл, по телу – 15-20 мл. 
 
Перед использованием необходимо разогреть либо в аромалампе, либо на водяной бане - это активизирует действие массажного масла.</param>
</offer>
<offer id="1108" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/massazhnoe_maslo_antitsellyulit_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9090</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/81b/81b7fab4d8329ef9b8279e6da45d9e10.png</picture>
<vendor></vendor>
<name>МАССАЖНОЕ МАСЛО АНТИЦЕЛЛЮЛИТ , 1000 мл</name>
<description>МАССАЖНОЕ МАСЛО АНТИЦЕЛЛЮЛИТ , 1000 мл</description>
<param name="Артикул">84176</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Лишний вес, Отечная кожа, Потеря эластичности кожи, Сосудистый рисунок, Стрии, растяжки, Целлюлит</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла макадамии, жожоба, сои, ростков пшеницы, календулы, кунжута, миндаля, эфирные масла душицы, кипариса, апельсина, мяты, можжевельника, розмарина, корицы.</param>
<param name="Способ применения">Подходит для использования по телу - как для профессионального массажа любой техники, так и для домашнего использования (к примеру, это отличная замена крему для тела после душа).
 
 Расход для массажа по телу – 15-20 мл. 
 
Перед использованием необходимо разогреть либо в аромалампе, либо на водяной бане&amp;nbsp;- это активизирует действие массажного масла.</param>
</offer>
<offer id="1115" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha_/maslo_neytralnoe_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3890</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/541/5411b9d9f16023b1534142bb5bed0951.jpg</picture>
<vendor></vendor>
<name>МАСЛО НЕЙТРАЛЬНОЕ , 1000 мл</name>
<description>МАСЛО НЕЙТРАЛЬНОЕ , 1000 мл</description>
<param name="Артикул">84396</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло сои, макадамии, рапса, витамин E.</param>
<param name="Способ применения">Эффективно при ангиопатиях и варикозном расширении вен. 
 
 Легкое мочегонное и лимфодренажное действие обеспечивают устранение отечности, выведение из тканей застойных и токсические продуктов. 
 
Онкопротекторный акцент составляющих масла обеспечивает защиту организма от новообразований.</param>
</offer>
<offer id="1116" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha_/maslo_vinogradnye_kostochki_profi_1000_ml_/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4720</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/641/64158997fa786eee7317ff814517d345.jpg</picture>
<vendor></vendor>
<name>МАСЛО ВИНОГРАДНЫЕ КОСТОЧКИ ПРОФИ , 1000 мл    </name>
<description>МАСЛО ВИНОГРАДНЫЕ КОСТОЧКИ ПРОФИ , 1000 мл    </description>
<param name="Артикул">84386</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Потеря эластичности кожи, Целлюлит, Шелушение</param>
<param name="СРЕДСТВО">Масло</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ</param>
<param name="Состав">Масло виноградных косточек, сои, витамин Е.</param>
<param name="Способ применения">Использовать для ухода за кожей лица, тела, волос и ногтей, как в чистом виде, так и с обогащением эфирными маслами по необходимости/проблеме.&amp;nbsp;
 
 Идеальная основа (эмульгатор) для работы с эфирными маслами. Может применяться для массажа, масок, аппликаций, смазываний, компрессов, а также для обогащения готовых косметических средств.&amp;nbsp;
 
 Для внутреннего употребления: принимать в чистом виде или с добавлением эфирных масел; можно использовать в кулинарии. &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;
 &amp;nbsp;
 </param>
</offer>
<offer id="1117" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha_/maslo_vinogradnye_kostochki_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>9440</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/406/406b3822d43b4527391bc77f6b43aaec.jpg</picture>
<vendor></vendor>
<name>МАСЛО ВИНОГРАДНЫЕ КОСТОЧКИ , 1000 мл</name>
<description>МАСЛО ВИНОГРАДНЫЕ КОСТОЧКИ , 1000 мл</description>
<param name="Артикул">1581</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Пористый рельеф кожи, Потеря эластичности</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло виноградных косточек 100%.</param>
<param name="Способ применения">Масло из Виноградных косточек используется как в чистом виде, так и в качестве активной биологической добавки в косметические средства.
 
Например, масло добавляют в косметические средства, предназначенные для поврежденных, ломких и тонких волос, в продукты, созданные для ухода за морщинистой и поврежденной кожей, в крема для рук и для зоны вокруг глаз, средства для тела.</param>
</offer>
<offer id="1119" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/krem_dlya_massazha_neytralnyy_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1180</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/e47/e47f662e36155ff5e7080a858e1b50c9.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ МАССАЖА НЕЙТРАЛЬНЫЙ , 150 мл</name>
<description>КРЕМ ДЛЯ МАССАЖА НЕЙТРАЛЬНЫЙ , 150 мл</description>
<param name="Артикул">84013</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла кокоса, сои, ростков пшеницы, миндаля, прямая суспензия водорослей, вытяжка из тростника. </param>
<param name="Способ применения">Использовать для любых техник массажа. 

Необходимое количество крема для одного массажа по лицу - 10-15 мл, по телу – 15-20 мл</param>
</offer>
<offer id="1120" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha_/krem_dlya_massazha_sogrevayushchiy_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8020</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/64e/64e419c06208ca061d0ed7e57c5b4f7b.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ МАССАЖА СОГРЕВАЮЩИЙ , 1000 мл</name>
<description>КРЕМ ДЛЯ МАССАЖА СОГРЕВАЮЩИЙ , 1000 мл</description>
<param name="Артикул">84026</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла кокоса, сои, ростков пшеницы, миндаля, прямая суспензия водорослей, вытяжка из тростника, эфирные масла 2-х видов перца (чёрного и кайенского), 3-х видов мяты, камфора.&amp;nbsp;
 </param>
<param name="Способ применения">Использовать для любых техник массажа по телу – 15-20 мл или локально на зону сосредоточения боли – 5-7 мл.</param>
</offer>
<offer id="1121" available="true">
<url>https://styx-online.ru/catalog/dlya_muzhchin_/krem_dlya_massazha_sogrevayushchiy_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1420</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/040/04008b532b50158426f29d340e608b3d.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ МАССАЖА СОГРЕВАЮЩИЙ , 150 мл</name>
<description>КРЕМ ДЛЯ МАССАЖА СОГРЕВАЮЩИЙ , 150 мл</description>
<param name="Артикул">84023</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла кокоса, сои, ростков пшеницы, миндаля, прямая суспензия водорослей, вытяжка из тростника, эфирные масла 2-х видов перца (чёрного и кайенского), 3-х видов мяты, камфора. 
</param>
<param name="Способ применения">Использовать для любых техник массажа по телу – 15-20 мл или локально на зону сосредоточения боли – 5-7 мл.</param>
</offer>
<offer id="1122" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha_/krem_dlya_massazha_sogrevayushchiy_ekstra_silnyy_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8020</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/626/6264b9c9cad6d02daf5c388612290844.png</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ МАССАЖА СОГРЕВАЮЩИЙ ЭКСТРА-СИЛЬНЫЙ , 1000 мл</name>
<description>КРЕМ ДЛЯ МАССАЖА СОГРЕВАЮЩИЙ ЭКСТРА-СИЛЬНЫЙ , 1000 мл</description>
<param name="Артикул">84036</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Мышечная боль, Целлюлит</param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Отёки, Улучшение кровообращения</param>
<param name="Состав">Масла кокоса, сои, ростков пшеницы, миндаля, прямая суспензия водорослей, вытяжка из тростника, никотиновая кислота, перец, камфора.&amp;nbsp;</param>
<param name="Способ применения">Использовать для любых техник массажа по телу – 15-20 мл или локально на зону сосредоточения боли – 5-7 мл.</param>
</offer>
<offer id="1124" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha__2/gel_dlya_massazha_chin_min_chin_min_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3070</price>
<currencyId>RUB</currencyId>
<categoryId>312</categoryId>
<picture>https://styx-online.ru/upload/iblock/7c7/7c7784b1b2fe9c991649699893f2b80e.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ДЛЯ МАССАЖА ЧИН МИН (CHIN MIN) , 150 мл</name>
<description>ГЕЛЬ ДЛЯ МАССАЖА ЧИН МИН (CHIN MIN) , 150 мл</description>
<param name="Артикул">84043</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Мышечная боль</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">5 видов эфирного масла мяты, 3 вида - корицы, чайного дерева, каяпута, найоли, розмарина, мандарина, петитгрейна, иссопа.</param>
<param name="Способ применения">Кашель, простуда — растирания грудной клетки; профилактика варикоза и купероза — регулярно наносить на проблемные участки; профилактика целлюлита — наносить массажными движениями на живот, бедра, ягодицы; тугоподвижность суставов, крепатура — локальные растирания. </param>
</offer>
<offer id="1125" available="true">
<url>https://styx-online.ru/catalog/dlya_massazha__2/krem_mnogofunktsionalnyy_alpin_derm_koze_moloko_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3540</price>
<currencyId>RUB</currencyId>
<categoryId>307</categoryId>
<picture>https://styx-online.ru/upload/iblock/bc6/bc6370e12c9192692762bdd009f76ed6.jpg</picture>
<vendor></vendor>
<name>КРЕМ МНОГОФУНКЦИОНАЛЬНЫЙ ALPIN DERM (Козье Молоко) , 150 мл</name>
<description>КРЕМ МНОГОФУНКЦИОНАЛЬНЫЙ ALPIN DERM (Козье Молоко) , 150 мл</description>
<param name="Артикул">84053</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Мышечная боль</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло козьего молока, макадамии, цветков календулы, пчелиный воск, эфирное масло розмарина, ромашки, карликовой сосны, экстракт арники.
</param>
<param name="Способ применения">Многофункциональная аптечка на все случаи жизни. 

Использовать для снятия симптомов по необходимости или ежедневно, в зависимости от решаемой проблемы.</param>
</offer>
<offer id="1128" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/kontsentrat_dlya_zreloy_kozhi_20_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>770</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/544/544ab92013aab8f88f22d259e34395ec.jpg</picture>
<vendor></vendor>
<name>Концентрат Для Зрелой кожи, 20 мл</name>
<description>Придает коже свежий, отдохнувший вид, великолепный однородный цвет, легкий румянец и матовость.

Оказывает мощное антиоксидантное, регенерирующее, витаминизирующее и увлажняющее действие, разглаживает сетчатые и глубокие морщинки, обеспечивает лифтинг овала лица.

Стимулирует микроциркуляцию и лимфодренаж, укрепляет стенки сосудов, устраняет видимый сосудистый рисунок и &quot;мешки&quot;под глазами.

Активизирует метаболизм, в том числе процессы синтеза коллагена и обновления клеток кожи. Предотвращает развитие кератозов.

Применяется в регенерирующих и очищающих программах ухода за зрелой кожей, в anti-age-программах ухода за кожей, а также для создания эффекта «праздничного лица».</description>
<param name="Артикул">85170</param>
<param name="Вес/объем">20</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло жожоба, виноградных косточек, макадамии, суспензия фукуса, эфирные масла герани, розы Дамасской.</param>
<param name="Способ применения">Концентратом обогащают 3-15 мл основы-косметического средства (масок, массажных масел, кремов), в пропорции от 5 до 20 капель.</param>
</offer>
<offer id="1129" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/kontsentrat_dlya_poristykh_zon_20_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>770</price>
<currencyId>RUB</currencyId>
<categoryId>283</categoryId>
<picture>https://styx-online.ru/upload/iblock/54d/54d48f5dc19e013a8e3c405d0a9eb0ce.jpg</picture>
<vendor></vendor>
<name>КОНЦЕНТРАТ ДЛЯ ПОРИСТЫХ ЗОН , 20 мл</name>
<description>КОНЦЕНТРАТ ДЛЯ ПОРИСТЫХ ЗОН , 20 мл</description>
<param name="Артикул">85150</param>
<param name="Вес/объем">20</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Концентрат</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло зверобоя, авокадо, макадамии, суспензия фукуса, эфирные масла герани, лаванды.</param>
<param name="Способ применения">Концентратом обогащают 3-15 мл основы-косметического средства (масок, массажных масел, кремов)- в пропорции от 5 до 20 капель.         

</param>
</offer>
<offer id="1130" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/kontsentrat_dlya_sukhoy_kozhi_20_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>770</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/997/997c29ea21a51714a7ab5624532f0454.jpg</picture>
<vendor></vendor>
<name>Концентрат Для Сухой кожи, 20 мл</name>
<description>Устраняет раздражение, покраснение, шелушение кожи, воспалительные реакции при повреждении кожи, климатических и нейрогенных дерматитах и стрессовых реакциях.

Оказывает ангиотоническое действие, устраняя видимый сосудистый рисунок и тени под глазами.

Активно увлажняет, регенерирует, смягчает, успокаивает, охлаждает кожу, оказывает лимфодренажное, детоксическое, эпителизующее,  антиоксидантное, омолаживающее действие.

Применяется в регенерирующих и очищающих программах для сухой, чувствительной, капризной кожи, а также показан для обогащения косметики при сухих дерматитах,травмах и стрессовых реакциях кожи, при хейлитах и ангулитах.


 </description>
<param name="Артикул">85140</param>
<param name="Вес/объем">20</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масла жожоба, макадамии, клещевины, авокадо, чёрного тмина, сок фукуса, эфирные масла горького апельсина, жасмина, семян моркови, энзимы, поливитаминная формула.</param>
<param name="Способ применения">Есть два варианта использования: локально, непосредственно наносить на проблемную зону, и добавляя в кремы и маски для акцентирования на конкретной проблеме. </param>
</offer>
<offer id="1131" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/kontsentrat_dlya_problemnoy_kozhi_20_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>830</price>
<currencyId>RUB</currencyId>
<categoryId>283</categoryId>
<picture>https://styx-online.ru/upload/iblock/187/1878f90f1abf3b4d31e903311cda9ce9.jpg</picture>
<vendor></vendor>
<name>КОНЦЕНТРАТ ДЛЯ ПРОБЛЕМНОЙ КОЖИ , 20 мл</name>
<description>КОНЦЕНТРАТ ДЛЯ ПРОБЛЕМНОЙ КОЖИ , 20 мл</description>
<param name="Артикул">85160</param>
<param name="Вес/объем">20</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло зверобоя, черного тмина, макадамии, суспензия фукуса, экстракт гамамелиса, эфирные масла шалфея, чабреца, лаванды, герани, розового дерева, лимона.</param>
<param name="Способ применения">Концентратом обогащают 3-15 мл основы-косметического средства (масок, массажных масел, кремов)- в пропорции от 5 до 20 капель.         

</param>
</offer>
<offer id="1136" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/ampuly_gamamelis_30_ml_3_ml_10_sht/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3540</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/6b4/6b4095b37fa43e9dc50d7af07968c509.jpg</picture>
<vendor></vendor>
<name>АМПУЛЫ ГАМАМЕЛИС , 30 мл (3 мл*10 шт)</name>
<description>АМПУЛЫ ГАМАМЕЛИС , 30 мл (3 мл*10 шт)</description>
<param name="Артикул">85228</param>
<param name="Вес/объем">30</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Жирные, Перхоть</param>
<param name="ДЛЯ ЛИЦА">Жирная, Пористый рельеф кожи, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Концентрат</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Гамамелис, огуречный сок, мочевина, молочная сыворотка, водоросли.</param>
<param name="Способ применения">Используется в качестве биоактиватора под маски и кремы, после надлома ампулы на чистую, сухую кожу наносят 1\2 ампулы под маску, а по завершении процедуры вторую часть препарата используют под средство завершающего ухода. </param>
</offer>
<offer id="1137" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/maska_okhlazhdayushchaya_spirulina_i_serebryanaya_glina_cool_peel_off_mask_333_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7080</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/537/5373eff4f08aed535806d104a768636c.jpg</picture>
<vendor></vendor>
<name>МАСКА ОХЛАЖДАЮЩАЯ СПИРУЛИНА И СЕРЕБРЯНАЯ ГЛИНА (Cool Peel Off Mask) , 333 г</name>
<description>МАСКА ОХЛАЖДАЮЩАЯ СПИРУЛИНА И СЕРЕБРЯНАЯ ГЛИНА (Cool Peel Off Mask) , 333 г</description>
<param name="Артикул">86366</param>
<param name="Вес/объем">333</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Раздражение,воспаления( после пилинга), Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Порошок сухой спирулины, бета-каротин, сульфат и карбонат кальция, гипс, сера, серебряная глина, эфирные масла мяты перечной, мяты кудрявой и мяты водяной.</param>
<param name="Способ применения">Выложить в емкость 15-30 мл маски и добавить 5-10 мл горячей воды, размешать до однородной консистенции.

Маску наносят плотным слоем (10-15 мл) на кожу лица, включая область вокруг глаз, шею и декольте на 10 минут.</param>
</offer>
<offer id="1138" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/maska_sogrevayushchaya_spirulina_spirulina_peel_off_mask_333_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10620</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/258/258d2a433daa4e7242f4ff4e4cedf7fe.jpg</picture>
<vendor></vendor>
<name>МАСКА СОГРЕВАЮЩАЯ СПИРУЛИНА (Spirulina Peel Off Mask) , 333 г</name>
<description>МАСКА СОГРЕВАЮЩАЯ СПИРУЛИНА (Spirulina Peel Off Mask) , 333 г</description>
<param name="Артикул">86346</param>
<param name="Вес/объем">333</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Зрелая, Потеря эластичности</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"> Cпирулина, содержащая 2000 биологически активных веществ (протеины, незаменимые аминокислоты, иммуноглобулины, минералы, витамины, гамма-линоленовая, линолевая и олеиновая кислоты, каротиноиды, фикоцианин, хлорофилл, ксантофилл, холинэстераза, альгинаты, муренин, цитокинины) </param>
<param name="Способ применения">Перед нанесением альгинатной маски кожу необходимо тщательно очистить. При нанесении маски на лицо снять макияж и нанести на брови и ресницы немного жирного крема. Под маску можно нанести дополнительное средство. Это может быть сыворотка, эмульсия, смесь эфирных масел. После того, как нанесенное средство впитается, накладывается альгинатная маска. Порошок альгинатной маски непосредственно перед примепнение нреобходимо развести водой комнатной темпратуры в соотношении 1:1. Замешивать альгинатную маску важно без комочков и наносить быстро, чтобы она не успела застыть. По своей консистенции маска должна напоминать густую сметану. Через 30 минут она легко снимается в виде мягкого пластичного слепка, повторяющего контуры лица или тела. Снять ее нужно одним движением снизу от подбородка вверх ко лбу. Волосы, ресницы и брови не приклеиваются к маске, поэтому снятие не представляет проблем. 
?
?</param>
</offer>
<offer id="1140" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/maska_sogrevayushchaya_serebryanaya_glina_i_sapropel_150_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2600</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/59a/59a9451bb5e32abd40f60eebcb956694.jpg</picture>
<vendor></vendor>
<name>МАСКА СОГРЕВАЮЩАЯ СЕРЕБРЯНАЯ ГЛИНА И САПРОПЕЛЬ , 150 г</name>
<description>МАСКА СОГРЕВАЮЩАЯ СЕРЕБРЯНАЯ ГЛИНА И САПРОПЕЛЬ , 150 г</description>
<param name="Артикул">85123</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Пористый рельеф кожи, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Сапропель, голубая глина, масло жожоба, ростков пшеницы, моркови, авокадо, эфирные масла иланг-иланга, розового дерева, мирта, жасмина.</param>
<param name="Способ применения">Выложить в емкость 15-30 мл маски и добавить 5-10 мл горячей воды, размешать до однородной консистенции.

Маску наносят плотным слоем (10-15 мл) на кожу лица, включая параорбитальные области, шею и декольте на 10 минут.
</param>
</offer>
<offer id="1142" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/maska_okhlazhdayushchaya_serebryanaya_glina_i_aloe_150_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2600</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/76e/76e6bf8eabbdd96c9f79894fda129b20.jpg</picture>
<vendor></vendor>
<name>МАСКА ОХЛАЖДАЮЩАЯ СЕРЕБРЯНАЯ ГЛИНА И АЛОЭ , 150 г</name>
<description>МАСКА ОХЛАЖДАЮЩАЯ СЕРЕБРЯНАЯ ГЛИНА И АЛОЭ , 150 г</description>
<param name="Артикул">85113</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Серебряная глина, масло ростков пшеницы, масло жожоба, масло сои, сок алоэ вера, эфирные масла петит грейн, лаванды, мирта, жасмина.</param>
<param name="Способ применения">Выложить в емкость 15-30 мл маски и добавить 5-10 мл горячей воды, размешать до однородной консистенции.

Маску наносят плотным слоем (10-15 мл) на кожу лица, включая параорбитальные области, шею и декольте на 10 минут.


</param>
</offer>
<offer id="1143" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/maska_tselebnaya_gryaz_vyravnivayushchaya_150_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3190</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/b55/b5527feb4f6c3dea4c1ef64755113555.png</picture>
<vendor></vendor>
<name>МАСКА ЦЕЛЕБНАЯ ГРЯЗЬ ВЫРАВНИВАЮЩАЯ , 150 г</name>
<description>МАСКА ЦЕЛЕБНАЯ ГРЯЗЬ ВЫРАВНИВАЮЩАЯ , 150 г</description>
<param name="Артикул">85133</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комедоны (засорение пор , черные точки), Купероз, Отечная, Пористый рельеф кожи, Постакне, Потеря эластичности, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Целебная грязь (сульфидный ил), суспензия водорослей, сок алоэ, масла жожоба и зверобоя, эфирное масло мирта.</param>
<param name="Способ применения">Перед использованием маску подогреть на водяной бане до температуры 40-50 градусов. 
 
Нанести плотным слоем на очищенную кожу лица, при этом на участках воспалительных элементов слой маски может быть более плотным. 
 
Поверх маски для усиления эффекта наложить полиэтиленовую пленку (для создания парникового эффекта). Время выдержки маски в домашних условиях - 30 минут. 
 
Перед смыванием оптимально провести по маске лёгкий или интенсивный отшелушивающий массаж лица (для удаления ороговелостей эпидермиса). 
 
Для достижения наилучшего результата рекомендуется использовать в сочетании другими средствами из данной линии (молочком, тоником, дневным и ночным кремом).</param>
</offer>
<offer id="1144" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/dnevnoy_krem_zelenyy_chay_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2710</price>
<currencyId>RUB</currencyId>
<categoryId>304</categoryId>
<picture>https://styx-online.ru/upload/iblock/a53/a539435d39dcdf2a2a7c19e5f0fb1c5c.jpg</picture>
<vendor></vendor>
<name>ДНЕВНОЙ КРЕМ ЗЕЛЕНЫЙ ЧАЙ , 150 мл</name>
<description>ДНЕВНОЙ КРЕМ ЗЕЛЕНЫЙ ЧАЙ , 150 мл</description>
<param name="Артикул">86033</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Обезвоженная, Раздражение,воспаления( после пилинга), Сухая, Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Глицерин, масло жожоба, цветков календулы, макадамии, авокадо, виноградных косточек экстракты зелёного чая, женьшеня, гинкго билоба.</param>
<param name="Способ применения">Наносить утром ежедневно на всё лицо и шею.</param>
</offer>
<offer id="1145" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/nochnoy_krem_zelenyy_chay_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3300</price>
<currencyId>RUB</currencyId>
<categoryId>304</categoryId>
<picture>https://styx-online.ru/upload/iblock/c3d/c3de3eb4981da84edc14501bf5942763.jpg</picture>
<vendor></vendor>
<name>НОЧНОЙ КРЕМ ЗЕЛЕНЫЙ ЧАЙ , 150 мл</name>
<description>НОЧНОЙ КРЕМ ЗЕЛЕНЫЙ ЧАЙ , 150 мл</description>
<param name="Артикул">86043</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Комбинированная, Обезвоженная, Потеря эластичности, Раздражение,воспаления( после пилинга), Сухая, Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло жожоба, масло макадамии, витамины A, E, F, экстракт зеленого чая, женьшень, манго, огуречный сок, липовый цвет.</param>
<param name="Способ применения">Нанести на лицо и шею.</param>
</offer>
<offer id="1148" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/krem_maska_intensivnaya_zelenyy_chay_i_gingo_biloba_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2710</price>
<currencyId>RUB</currencyId>
<categoryId>282</categoryId>
<picture>https://styx-online.ru/upload/iblock/fa7/fa7d5ae55df753fe8236d366e9cbd414.jpg</picture>
<vendor></vendor>
<name>КРЕМ МАСКА ИНТЕНСИВНАЯ ЗЕЛЕНЫЙ ЧАЙ И ГИНГО БИЛОБА , 150 мл</name>
<description>КРЕМ МАСКА ИНТЕНСИВНАЯ ЗЕЛЕНЫЙ ЧАЙ И ГИНГО БИЛОБА , 150 мл</description>
<param name="Артикул">86073</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Комбинированная, Обезвоженная, Потеря эластичности, Раздражение,воспаления( после пилинга), Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем, Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">экстракт зеленого чая, календула, соя, ростки пшеницы, гинкго билоба, манго, киви, ананас, витамины А, Е, F.</param>
<param name="Способ применения"> нанести на лицо, шею и декольте 10-15 мл маски, промассировать, оставить на 15  мин и смыть.  
</param>
</offer>
<offer id="1150" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/krem_maska_energeticheskaya_zelenyy_chay_i_ekhinatseya_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3070</price>
<currencyId>RUB</currencyId>
<categoryId>282</categoryId>
<picture>https://styx-online.ru/upload/iblock/60a/60a6df9d4b23432d068867290f0d25d1.jpg</picture>
<vendor></vendor>
<name>КРЕМ МАСКА ЭНЕРГЕТИЧЕСКАЯ ЗЕЛЕНЫЙ ЧАЙ И ЭХИНАЦЕЯ , 150 мл</name>
<description>КРЕМ МАСКА ЭНЕРГЕТИЧЕСКАЯ ЗЕЛЕНЫЙ ЧАЙ И ЭХИНАЦЕЯ , 150 мл</description>
<param name="Артикул">86083</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Комбинированная, Обезвоженная, Пигментация, Потеря эластичности, Раздражение,воспаления( после пилинга), Сухая, Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем, Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Макадамия, соя, авокадо, зеленый чай, эхинацея, медвежьи ушки, огуречный сок.</param>
<param name="Способ применения">Нанести на лицо, шею и зону декольте 10-15 мл маски, промассировать, оставить на 15 мин, затем - смыть.</param>
</offer>
<offer id="1152" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/gel_maska_sosudoukreplyayushchaya_zelenyy_chay_s_gibiskusom_i_aloe_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2710</price>
<currencyId>RUB</currencyId>
<categoryId>282</categoryId>
<picture>https://styx-online.ru/upload/iblock/31b/31bf50598d8edb96f68d68c8eccc8140.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ МАСКА СОСУДОУКРЕПЛЯЮЩАЯ ЗЕЛЕНЫЙ ЧАЙ С ГИБИСКУСОМ И АЛОЭ , 150 мл</name>
<description>ГЕЛЬ МАСКА СОСУДОУКРЕПЛЯЮЩАЯ ЗЕЛЕНЫЙ ЧАЙ С ГИБИСКУСОМ И АЛОЭ , 150 мл</description>
<param name="Артикул">86063</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Купероз, Нормальная, Обезвоженная, Раздражение,воспаления( после пилинга), Сухая, Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Гель, Маска</param>
<param name="ДЛЯ ВЕК">Темные круги</param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Алоэ, жожоба, макадамия, соя, фруктовые кислоты, гибискус, витамины A, E, F.</param>
<param name="Способ применения">Наносить плотным слоем (10-15 мл) на кожу лица, включая и параорбитальные области, шею и декольте на 10 минут. </param>
</offer>
<offer id="1154" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/maska_dlya_litsa_alginatnaya_shokolad_333_gr/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>8380</price>
<currencyId>RUB</currencyId>
<categoryId>299</categoryId>
<picture>https://styx-online.ru/upload/iblock/0af/0afcaa0ff77c2b9632940ff6b8cca666.png</picture>
<vendor></vendor>
<name>МАСКА ДЛЯ ЛИЦА АЛЬГИНАТНАЯ ШОКОЛАД , 333 гр.</name>
<description>МАСКА ДЛЯ ЛИЦА АЛЬГИНАТНАЯ ШОКОЛАД , 333 гр.</description>
<param name="Артикул">85026</param>
<param name="Вес/объем">1 000</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Спирулина, какао-пудра, порошок, зеленых и бурых водорослей, эфирные масла корицы, иланг-иланга и ванили.</param>
<param name="Способ применения">Смешать 30г порошка с 50-70 мл. холодной воды.

Оставить на 15 минут, удалить, смочив края.</param>
</offer>
<offer id="1155" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/krem_piling_dlya_litsa_nezhnost_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2480</price>
<currencyId>RUB</currencyId>
<categoryId>282</categoryId>
<picture>https://styx-online.ru/upload/iblock/792/792e8643f0e337b8d53f52a4da2b9df4.jpg</picture>
<vendor></vendor>
<name>КРЕМ ПИЛИНГ ДЛЯ ЛИЦА НЕЖНОСТЬ , 150 мл</name>
<description>КРЕМ ПИЛИНГ ДЛЯ ЛИЦА НЕЖНОСТЬ , 150 мл</description>
<param name="Артикул">85313</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Пористый рельеф кожи</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Пилинг</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло календулы, жожоба, какао, ши, сок водорослей, экстракт мальвы, гамамелис, миндальные и пшеничные отруби, 
гуарана, морской песок, эфирное масло моркови, иланг-иланга.</param>
<param name="Способ применения">Наносится толстым слоем на лицо, шею и декольте. Промассировать, уделяя особое внимание проблемным зонам 
(лоб, крылья носа, подбородок), после чего смыть.
</param>
</offer>
<offer id="1157" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/krem_piling_dlya_litsa_zelenyy_chay_i_orekh_leshchiny_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3660</price>
<currencyId>RUB</currencyId>
<categoryId>282</categoryId>
<picture>https://styx-online.ru/upload/iblock/d53/d53c61fcffb1b31d45205863ddc5cc8d.jpg</picture>
<vendor></vendor>
<name>КРЕМ ПИЛИНГ ДЛЯ ЛИЦА ЗЕЛЕНЫЙ ЧАЙ И ОРЕХ ЛЕЩИНЫ , 150 мл</name>
<description>КРЕМ ПИЛИНГ ДЛЯ ЛИЦА ЗЕЛЕНЫЙ ЧАЙ И ОРЕХ ЛЕЩИНЫ , 150 мл</description>
<param name="Артикул">86053</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло лещины американской (лесной орех), масло виноградных косточек, экстракт зелёного чая, камелии китайской, женьшеня.
</param>
<param name="Способ применения">Равномерно нанести пилинг на увлажнённую кожу, избегая попадания на участки вокруг глаз, провести 3–5-минутную вапоризацию (или инфракрасное распаривание лица), на 6–7-й минуте провести очищающий мануальный массаж по пилингу и тщательно смыть тёплой водой.</param>
</offer>
<offer id="1158" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/gel_piling_dlya_litsa_abrikos_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3300</price>
<currencyId>RUB</currencyId>
<categoryId>282</categoryId>
<picture>https://styx-online.ru/upload/iblock/ed8/ed82e3dcb61e72b4eff376eb69496075.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ПИЛИНГ ДЛЯ ЛИЦА АБРИКОС , 150 мл</name>
<description>ГЕЛЬ ПИЛИНГ ДЛЯ ЛИЦА АБРИКОС , 150 мл</description>
<param name="Артикул">86163</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Нормальная, Сухая, Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Пилинг</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Календула, ши, оливковое масло, гинкго билоба, измельченные ядрышки абрикосовых косточек.</param>
<param name="Способ применения">Толстым слоем нанести на лицо, шею и зону декольте, оставить на 5-7 минут. Смыть водой.</param>
</offer>
<offer id="1159" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/gel_piling_dlya_litsa_olivkovaya_kostochka_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3660</price>
<currencyId>RUB</currencyId>
<categoryId>282</categoryId>
<picture>https://styx-online.ru/upload/iblock/570/5704e729075b77db65d2eaa84b576722.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ПИЛИНГ ДЛЯ ЛИЦА ОЛИВКОВАЯ КОСТОЧКА , 150 мл</name>
<description>ГЕЛЬ ПИЛИНГ ДЛЯ ЛИЦА ОЛИВКОВАЯ КОСТОЧКА , 150 мл</description>
<param name="Артикул">86153</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комбинированная, Пористый рельеф кожи, Постакне</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Пилинг</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Календула, ши, оливковое масло, гинкго билоба, дробленые оливковые косточки.</param>
<param name="Способ применения">Толстым слоем нанести на лицо, шею и зону декольте, оставить на 5-7 минут. Смыть водой. </param>
</offer>
<offer id="1161" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_lifting_dnevnoy_omolozhenie_anti_age_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6960</price>
<currencyId>RUB</currencyId>
<categoryId>278</categoryId>
<picture>https://styx-online.ru/upload/iblock/b49/b494a1797a830d7b70d894a8a6d20028.jpg</picture>
<vendor></vendor>
<name>КРЕМ ЛИФТИНГ ДНЕВНОЙ  ОМОЛОЖЕНИЕ (ANTI AGE) , 150 мл.</name>
<description>КРЕМ ЛИФТИНГ ДНЕВНОЙ  ОМОЛОЖЕНИЕ (ANTI AGE) , 150 мл.</description>
<param name="Артикул">86213</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Комбинированная, Нормальная, Потеря эластичности, Сухая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло макадамии, календулы, жожоба, экстракты&amp;nbsp;гамамелиса, киви, гибискуса и икры, витамины, анти-эйдж формула&amp;nbsp;
STYX-naturcosmetic.</param>
<param name="Способ применения">Ежедневно по утрам наносить небольшое количество на все лицо и шею.</param>
</offer>
<offer id="1162" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_nochnoy_lifting_omolozhenie_anti_age_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>6840</price>
<currencyId>RUB</currencyId>
<categoryId>278</categoryId>
<picture>https://styx-online.ru/upload/iblock/f9f/f9f2ea4c6cfa1ef0956e19ce3bc45169.jpg</picture>
<vendor></vendor>
<name>КРЕМ НОЧНОЙ  ЛИФТИНГ ОМОЛОЖЕНИЕ (ANTI AGE) , 150 мл.</name>
<description>КРЕМ НОЧНОЙ  ЛИФТИНГ ОМОЛОЖЕНИЕ (ANTI AGE) , 150 мл.</description>
<param name="Артикул">86223</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Купероз, Отечная, Пигментация, Потеря эластичности, Сухая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло жожоба, календулы, макадамии, &amp;nbsp;семян моркови, экстракты икры и морских водорослей, алоэ вера, витамины,&amp;nbsp;
 анти-эйдж формула STYX-naturcosmetic.
</param>
<param name="Способ применения">Ежедневно на ночь наносить небольшое количество на все лицо и шею.</param>
</offer>
<offer id="1164" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/gel_maska_dlya_litsa_vitaminizatsiya_i_lifting_omolozhenie_anti_age_500_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12860</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/2a5/2a5892a2e749091668ddf1e5fddf6c84.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ МАСКА ДЛЯ ЛИЦА ВИТАМИНИЗАЦИЯ И ЛИФТИНГ ОМОЛОЖЕНИЕ (ANTI AGE) , 500 мл.</name>
<description>ГЕЛЬ МАСКА ДЛЯ ЛИЦА ВИТАМИНИЗАЦИЯ И ЛИФТИНГ ОМОЛОЖЕНИЕ (ANTI AGE) , 500 мл.</description>
<param name="Артикул">86275</param>
<param name="Вес/объем">500</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Зрелая, Пористый рельеф кожи, Потеря эластичности, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло макадамии, тыквы, авокадо, жожоба, витамины, фолиевая кислота, экстракты фукуса, ананаса, киви, анти-эйдж формула STYX Naturcosmetic.
</param>
<param name="Способ применения">Нанести на лицо, шею и декольте 10-15 мл маски, промассировать, оставить на 15 минут и смыть.</param>
</offer>
<offer id="1166" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/gel_maska_dlya_litsa_enzimnaya_ananas_omolozhenie_anti_age_500_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5900</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/cbe/cbec8df0e902a994b0b4c099464d6081.png</picture>
<vendor></vendor>
<name>ГЕЛЬ МАСКА ДЛЯ ЛИЦА ЭНЗИМНАЯ АНАНАС ОМОЛОЖЕНИЕ (ANTI AGE) , 500 мл.</name>
<description>ГЕЛЬ МАСКА ДЛЯ ЛИЦА ЭНЗИМНАЯ АНАНАС ОМОЛОЖЕНИЕ (ANTI AGE) , 500 мл.</description>
<param name="Артикул">86255</param>
<param name="Вес/объем">500</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Жирная, Зрелая, Комедоны (засорение пор , черные точки), Пористый рельеф кожи, Потеря эластичности, Проблемная, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло авокадо, жожоба, сок и экстракт ананаса, витамины, анти-эйдж формула STYX.</param>
<param name="Способ применения">Наносить равномерным слоем на кожу (исключая область вокруг глаз) на 10 минут.</param>
</offer>
<offer id="1167" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/krem_maska_lifting_omolozhenie_anti_age_150_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4425</price>
<oldprice>5900</oldprice>
<currencyId>RUB</currencyId>
<categoryId>278</categoryId>
<picture>https://styx-online.ru/upload/iblock/d58/d580f94f932ec93d46505aead70e77aa.jpg</picture>
<vendor></vendor>
<name>КРЕМ МАСКА ЛИФТИНГ ОМОЛОЖЕНИЕ (ANTI AGE) , 150 мл.</name>
<description>КРЕМ МАСКА ЛИФТИНГ ОМОЛОЖЕНИЕ (ANTI AGE) , 150 мл.</description>
<param name="Артикул">86233</param>
<param name="Вес/объем">150</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Потеря эластичности</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло жожоба, ростков пшеницы, макадамии, ши, какао, авокадо, дипалмитол гидропролан, витамины, экстракты гинкго билоба, фукуса, тимьяна, анти-эйдж формула STYX.</param>
<param name="Способ применения">Наносить эту маску лучше руками, поскольку она является идеальной основой для пластического массажа, во время которого активно абсорбируется кожей.

 После применения смывать маску не обязательно: достаточно протереть кожу тоником.</param>
</offer>
<offer id="1168" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/termoaktivnaya_maska_dlya_litsa_gipsovyy_modellyazh_omolozhenie_anti_age_900_gr_150_gr_6_sht/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>7320</price>
<currencyId>RUB</currencyId>
<categoryId>317</categoryId>
<picture>https://styx-online.ru/upload/iblock/9ad/9ad6bee9e9c70f036868d0291fb84c25.jpg</picture>
<vendor></vendor>
<name>ТЕРМОАКТИВНАЯ МАСКА ДЛЯ ЛИЦА ГИПСОВЫЙ МОДЕЛЛЯЖ ОМОЛОЖЕНИЕ (ANTI AGE) , 900 гр (150 гр*6 шт)</name>
<description>ТЕРМОАКТИВНАЯ МАСКА ДЛЯ ЛИЦА ГИПСОВЫЙ МОДЕЛЛЯЖ ОМОЛОЖЕНИЕ (ANTI AGE) , 900 гр (150 гр*6 шт)</description>
<param name="Артикул">86293</param>
<param name="Вес/объем">900</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Комедоны (засорение пор , черные точки), Отечная, Пористый рельеф кожи, Потеря эластичности, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Дегидратированый природный гипс Ca[SO4]*2H2O (водный сульфат кальция)</param>
<param name="Способ применения">Смешать порошок со 100 мл. холодной воды, интенсивно размешать.
 
 Нанести поверх специальной ткани на лицо (включая рот, глаза и подбородок).
 
Снять спустя 20 минут,снять, протереть лицо тоником.</param>
</offer>
<offer id="1170" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_led_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4814.4</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/efb/efbdf1505ad8fbc1fe567292d1825768.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ЛЕД , 400 мл</name>
<description>ЛОСЬОН ЛЕД , 400 мл</description>
<param name="Артикул">82019</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Аллергические дерматиты, Варикоз, Для обертываний, Лишний вес, Отечная кожа, Сосудистый рисунок, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Отёки, Расширение вен</param>
<param name="Состав">Талая вода, экстракты конского каштана, хвоща, одуванчика, арники, ментол; эфирные масла мяты кудрявой и перечной, эвкалипта, мелиссы.</param>
<param name="Способ применения">Для&amp;nbsp; профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="1171" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/tsellogel_tsentella_i_flerdoranzh_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4543</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/d99/d9911c5d131e75039042156e451c494a.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ ЦЕНТЕЛЛА И ФЛЕРДОРАНЖ , 400 мл</name>
<description>ЦЕЛЛОГЕЛЬ ЦЕНТЕЛЛА И ФЛЕРДОРАНЖ , 400 мл</description>
<param name="Артикул">81054</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты: центеллы азиатской, плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, морские водоросли, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 1–4 типа в технике термообёртываний (горячих).
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна).
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1173" available="true">
<url>https://styx-online.ru/catalog/ukhod_dlya_ruk_i_nog_/gel_svezhest_cool_gel_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5357.2</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/329/3295b902b0ac1fcbb22fdf6af4415879.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ СВЕЖЕСТЬ (Cool gel) , 400 мл</name>
<description>ГЕЛЬ СВЕЖЕСТЬ (Cool gel) , 400 мл</description>
<param name="Артикул">83054</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Варикоз, Для обертываний, Отечная кожа</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Эфирные масла мяты, эвкалипт, розмарина, лаванды, нероли, розы, ментол, камфора. .
</param>
<param name="Способ применения">Применяется в профессиональных процедурах (виски-пеленания, сухие термообёртывания) и в домашнем уходе для пролонгации эффекта после процедуры или в качестве ежедневного домашнего уода. 
 
 
 Домашний уход: тонким слоем наносить на ноги и зоны видимости вен (сосудов, капилляров) 1-2 раза в день. </param>
</offer>
<offer id="1177" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/tsellogel_strong_silnyy_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4283.4</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/e63/e63118772c099c90effed9648160f85f.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ СТРОНГ СИЛЬНЫЙ , 400 мл</name>
<description>ЦЕЛЛОГЕЛЬ СТРОНГ СИЛЬНЫЙ , 400 мл</description>
<param name="Артикул">81034</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Потеря эластичности кожи, Стрии, растяжки, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты: плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, морских водорослей, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца, розы), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 2–4 типа в технике термообёртываний (горячих).
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна).
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1178" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/gel_koritsa_zell_aktiv_gel_zimt_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5357.2</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/83c/83cbd27b8886a120b0f9991dcaa14f1e.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ КОРИЦА (Zell Aktiv Gel Zimt) , 400 мл</name>
<description>ГЕЛЬ КОРИЦА (Zell Aktiv Gel Zimt) , 400 мл</description>
<param name="Артикул">83124</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Алоэ, береза, эктракты огурца, масла сои, жожоба, эфирные масла чабреца, корицы, никотиновая кислота.</param>
<param name="Способ применения">В домашних условиях для борьбы с лишним весом наносят локально 1-2 раза в день, избегая участков с видимым сосудистым рисунком.</param>
</offer>
<offer id="1179" available="true">
<url>https://styx-online.ru/catalog/ukhod_dlya_ruk_i_nog_/gel_venoznyy_venen_gel_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5357.2</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/0a4/0a4c0ecf465ad0499c9e847947f548a9.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ВЕНОЗНЫЙ (Venen gel) , 400 мл</name>
<description>ГЕЛЬ ВЕНОЗНЫЙ (Venen gel) , 400 мл</description>
<param name="Артикул">83084</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Варикоз</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты мальвы, конского каштана, одуванчика, хвоща, эфирные масла эвкалипта, мяты, розмарина, чабреца, масло сои, ментол.
 
</param>
<param name="Способ применения">Применяется в профессиональных процедурах (виски-пеленания, сухие термообёртывания) и в домашнем уходе для пролонгации эффекта после процедуры или в качестве ежедневного домашнего ухода.&amp;nbsp;
 
 
 Домашний уход: тонким слоем наносить на ноги и зоны видимости вен (сосудов, капилляров) 1-2 раза в день.&amp;nbsp;
 


?</param>
</offer>
<offer id="1181" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/gel_lifting_forte_straffungsgel_forte_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5357.2</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/9bb/9bbbdcebb0115a08d62b93187a1670a6.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ЛИФТИНГ ФОРТЕ (Straffungsgel forte) , 400 мл</name>
<description>ГЕЛЬ ЛИФТИНГ ФОРТЕ (Straffungsgel forte) , 400 мл</description>
<param name="Артикул">83134</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Потеря эластичности кожи</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Алоэ вера, соя, гамамелис, фукус, гинкго, эхинацея, шиповник, огурец, никотиновая кислота.</param>
<param name="Способ применения">Как лифтинговый корсет в программах коррекции фигуры
 
 В домашних условиях для активизации обмена веществ(наносить 1-2 раза в день)
 
Для усиления эффекта рекомендуется применение под пленку.&amp;nbsp;</param>
</offer>
<offer id="1182" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/tsellogel_soft_myagkiy_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4283.4</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/9a6/9a668e9114324a68191accf2adc909b2.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ СОФТ МЯГКИЙ , 400 мл</name>
<description>ЦЕЛЛОГЕЛЬ СОФТ МЯГКИЙ , 400 мл</description>
<param name="Артикул">81014</param>
<param name="Вес/объем">400</param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Отечная кожа, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты: плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, морских водорослей, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца, розы), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 1–2 типа в технике термообёртываний (горячих). 
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна). 
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1235" available="true">
<url>https://styx-online.ru/catalog/sport/gel_sportivnyy_s_arnikoy_alpin_derm/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1590</price>
<currencyId>RUB</currencyId>
<categoryId>290</categoryId>
<picture>https://styx-online.ru/upload/iblock/c7c/c7cb50aa3fa4b351460b4ac3123c4152.png</picture>
<vendor></vendor>
<name>ГЕЛЬ СПОРТИВНЫЙ С АРНИКОЙ , ALPIN DERM</name>
<description>ГЕЛЬ СПОРТИВНЫЙ С АРНИКОЙ , ALPIN DERM</description>
<param name="Артикул">17303</param>
<param name="Вес/объем"></param>
<param name="Картинки">https://styx-online.ru/upload/iblock/a57/a57f72c01806c5b4244316a3ab2d2961.jpg</param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"> Экстракт горной арники, эфирные масла дикой мяты, розмарина, лимона, бензилникотинат (перец, гвоздика, корица).</param>
<param name="Способ применения">Наносить на кожу массирующими движениями.</param>
</offer>
<offer id="1238" available="true">
<url>https://styx-online.ru/catalog/sport/okhlazhdayushchiy_sport_sprey_chin_min_chin_min_100ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1330</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/5af/5af9156f4e322c72d122d2ddaa196cfa.jpg</picture>
<vendor></vendor>
<name>ОХЛАЖДАЮЩИЙ СПОРТ СПРЕЙ ЧИН МИН (CHIN MIN) , 100мл</name>
<description>ОХЛАЖДАЮЩИЙ СПОРТ СПРЕЙ ЧИН МИН (CHIN MIN) , 100мл</description>
<param name="Артикул">18332</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Мышечная боль</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Боли в мышцах и суставах, Вегетососудистая дистония, При простуде, Слабость, утомляемость</param>
<param name="Состав">Рецептурная основа препарата построена на канонах восточной медицины, которую отличает множественность терапевтических параллелей действия (обезболивающее, спазмолитическое, бактерицидное, противовирусное, противовоспалительное, жаропонижающее, сосудоукрепляющее, иммуномодулирующее). 
 
Основные действующие компоненты: 5 видов эфирного масла мяты, 3 вида - корицы, чайного дерева, каяпута, найоли, розмарина, мандарина, петитгрейна, иссопа, глюконолактон, пантенол, ксантан.</param>
<param name="Способ применения">Распылять на области локализации отёков, болей, тяжести. 
 
Избегать попадания в глаза и на открытые раны.</param>
</offer>
<offer id="1239" available="true">
<url>https://styx-online.ru/catalog/sport/sogrevayushchiy_sport_flyuid_chin_min_chin_min_100ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1150</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/3bb/3bb3bdfb1800b09fef22812194cd8111.jpg</picture>
<vendor></vendor>
<name>СОГРЕВАЮЩИЙ СПОРТ ФЛЮИД ЧИН МИН (CHIN MIN) , 100мл</name>
<description>СОГРЕВАЮЩИЙ СПОРТ ФЛЮИД ЧИН МИН (CHIN MIN) , 100мл</description>
<param name="Артикул">18322</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Мышечная боль</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Боли в мышцах и суставах, При простуде, Улучшение кровообращения</param>
<param name="Состав">Получаемый из кокосового масла триглицерид каприловый кислоты (антикомедоногенный компонент, эмульгирующий жиры и эфирные масла, выполняющий в эмульсии функцию пластичного эмолента, обуславливающего ее равномерное распределение по всей поверхности кожи), смешанный с тремя видами растительных масел. 

Первое — жожоба — мощнейший антиоксидант, anti-age компонент, восстанавливающий тургор и тонус соединительной ткани. 

Второе — календула — кератолитик, ликвидирующий симптомы огрубения эпидермиса. 

И третье — ши (карите) — поставщик метаболитов, необходимых клеткам для восстановления и обновления. 

Теперь пара слов об эфирной формуле, состоящей из мяты полевой (улучшение микроциркуляции, стимуляция лимфодренажа, детоксикация, кислородообмен), розмарина (стимуляция обмена веществ, тканевого метаболизма, миотоническое, разогревающее), цитрусовых — мандарин, грейпфрут, апельсин</param>
<param name="Способ применения">За 1–2 минуты нанести в мизерном количестве на кожу в проекции тренируемых мышц.</param>
</offer>
<offer id="1243" available="true">
<url>https://styx-online.ru/catalog/dlya_vanny_i_dusha_/detskaya_pena_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1060</price>
<currencyId>RUB</currencyId>
<categoryId>303</categoryId>
<picture>https://styx-online.ru/upload/iblock/965/965faac354e71c154d63a03b0a628c7e.jpg</picture>
<vendor></vendor>
<name>ДЕТСКАЯ ПЕНА , 200 мл.</name>
<description>ДЕТСКАЯ ПЕНА , 200 мл.</description>
<param name="Артикул">2400</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (омыленное масло кокоса), морская соль, экстракт ростков пшеницы, глицерин, экстракт ромашки и цветочные эфирные масла. 
</param>
<param name="Способ применения">Подходит для ежедневного приёма ванн, мытья лица, тела и волос.
 
Использовать с самого рождения!
? </param>
</offer>
<offer id="1245" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_dlya_litsa_korrektiruyushchiy_rozovyy_sad_30_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1530</price>
<oldprice>2040</oldprice>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/f4c/f4c8000032240a7d46247e288a57b785.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ ЛИЦА КОРРЕКТИРУЮЩИЙ &quot;РОЗОВЫЙ САД&quot; , 30 мл</name>
<description>КРЕМ ДЛЯ ЛИЦА КОРРЕКТИРУЮЩИЙ &quot;РОЗОВЫЙ САД&quot; , 30 мл</description>
<param name="Артикул">11157</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Комбинированная, Купероз, Нормальная, Потеря эластичности, Сухая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Цветочная пыльца, мелкая пудра из хинного дерева и натурального перламутра, протеины ростков пшеницы, диоксид титана, розовая вода, эфирные масла розы, лимона и петит грейна, масло ши, календулы, экстракт яблока.
 </param>
<param name="Способ применения">Наносится тонким слоем после основного ухода на всё лицо, глаза и декольте.</param>
</offer>
<offer id="1246" available="true">
<url>https://styx-online.ru/catalog/dlya_vek_i_gub_/krem_dlya_vek_na_kozem_moloke_alpin_derm_30_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3560</price>
<currencyId>RUB</currencyId>
<categoryId>307</categoryId>
<picture>https://styx-online.ru/upload/iblock/712/71294cc806eca0e8b48adaab3e9b5ed1.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ ВЕК НА КОЗЬЕМ МОЛОКЕ ALPIN DERM , 30 мл</name>
<description>КРЕМ ДЛЯ ВЕК НА КОЗЬЕМ МОЛОКЕ ALPIN DERM , 30 мл</description>
<param name="Артикул">17347</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК">Мешки под глазами, Морщины, Темные круги</param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракт водорослей и донника.</param>
<param name="Способ применения">Наносить утром и вечером на область вокруг глаз.</param>
</offer>
<offer id="1247" available="true">
<url>https://styx-online.ru/catalog/chin_min_/loson_mnogofunktsionalnyy_chin_min_chin_min_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1860</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/d82/d82903982cc9a5bff7889e65fa5444e4.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН МНОГОФУНКЦИОНАЛЬНЫЙ ЧИН МИН (CHIN MIN) , 100 мл</name>
<description>ЛОСЬОН МНОГОФУНКЦИОНАЛЬНЫЙ ЧИН МИН (CHIN MIN) , 100 мл</description>
<param name="Артикул">18312</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Боли в мышцах и суставах, Головная боль, При простуде, Растяжение связок, ушибы</param>
<param name="Состав">Рецептурная основа препарата построена на канонах восточной медицины, которую отличает множественность терапевтических параллелей действия (обезболивающее, спазмолитическое, бактерицидное, противовирусное, противовоспалительное, жаропонижающее, сосудоукрепляющее, иммуномодулирующее).&amp;nbsp;
 
 Основные действующие компоненты: виноградный спирт, эфирные масла корицы (3 вида), гвоздики, мяты (3 вида), эвкалипта и чайного дерева.
</param>
<param name="Способ применения">В чистом виде - локально на ссадины, раны, укусы насекомых, при головной боли -&amp;nbsp;на виски.
 
 Ингаляции холодные&amp;nbsp;(1-3 капли растереть на ладошках и сделать несколько глубоких вдохов) – помогает быстро взбодриться при усталости, сонливости, пониженном давлении, похмельном синдроме.&amp;nbsp;
 
 Ингаляции&amp;nbsp;горячие&amp;nbsp;(5-10 капель добавить в горячую воду, подышать над паром) – помогает при простуде, заложенности носа, боли в горле и кашле.&amp;nbsp;
 
 Также для борьбы с проявлениями простуды можно 2-7 капель лосьона добавить в чашку горячего чая, сначала подышать паром, а потом выпить.&amp;nbsp;
 
 Приём ванны (10-30 капель лосьона на ванну) – прием прохладной ванны создает «встряску» организму: избавляет от похмельного синдрома, помогает быстрее проснуться, устраняет отёчность, дарит прилив сил; приём горячей ванны помогает не разболеться при первых признаках простуды и гриппа, расслабляет мышцы, снимает мышечное «похмелье» после занятий спортом, восстанавливает иммунитет.&amp;nbsp;
 
 1 капля на стакан воды или чая на некоторое время избавляет от запаха алкоголя и табака.&amp;nbsp;
 
 5-20 капель на 15 мл транспортной основы для массажа. Обезболивающее, противовоспалительное действие.&amp;nbsp;
 
 3-7 капель на 1 л воды – ополаскивание волос. Дарит ощущение свежести и легкого «холодка» в корнях волос, придает объём, стимулирует рост волос, избавляет от жирной себореи.&amp;nbsp;
 
 Добавка в косметику для ухода за проблемной кожей (1-3 капли на 10 мл средства для ухода за кожей).
 
Применяют для освежающего умывания&amp;nbsp;(3-7 капель лосьона&amp;nbsp;на 1 л воды).</param>
</offer>
<offer id="1248" available="true">
<url>https://styx-online.ru/catalog/chin_min_/loson_mnogofunktsionalnyy_chin_min_chin_min_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>400</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/2fa/2fa6c1c2b12e02ad0b2badf5a6af2fb8.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН МНОГОФУНКЦИОНАЛЬНЫЙ ЧИН МИН (CHIN MIN) , 10 мл</name>
<description>ЛОСЬОН МНОГОФУНКЦИОНАЛЬНЫЙ ЧИН МИН (CHIN MIN) , 10 мл</description>
<param name="Артикул">18310</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Боли в мышцах и суставах, Головная боль, При насморке, При простуде, Растяжение связок, ушибы</param>
<param name="Состав">виноградный спирт, эфирные масла корицы (три вида), гвоздики, мяты (три вида), эвкалипта и чайного дерева.
</param>
<param name="Способ применения">Применяется в различных массажных техниках, для ванн и обогащения косметических препаратов. 
</param>
</offer>
<offer id="1249" available="true">
<url>https://styx-online.ru/catalog/chin_min_/rassasyvayushchiy_gel_dlya_massazha_chin_min_chin_min_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1060</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/950/9508a14822b8e74e8f18160cc510f862.jpg</picture>
<vendor></vendor>
<name>РАССАСЫВАЮЩИЙ ГЕЛЬ ДЛЯ МАССАЖА ЧИН МИН (CHIN MIN) , 50 мл</name>
<description>РАССАСЫВАЮЩИЙ ГЕЛЬ ДЛЯ МАССАЖА ЧИН МИН (CHIN MIN) , 50 мл</description>
<param name="Артикул">18301</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Мышечная боль</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Боли в мышцах и суставах, Невралгии</param>
<param name="Состав">Рецептурная основа препарата построена на канонах восточной медицины, которую отличает множественность терапевтических параллелей действия (обезболивающее, спазмолитическое, бактерицидное, противовирусное, противовоспалительное, жаропонижающее, сосудоукрепляющее, иммуномодулирующее). 
 
Основные действующие компоненты: 5 видов эфирного масла мяты, 3 вида - корицы, чайного дерева, каяпута, найоли, розмарина, мандарина, петитгрейна, иссопа, глюконолактон, пантенол, ксантан.</param>
<param name="Способ применения">Интенсивно втирая в кожу и разминая ткани, нанести на области боли, травмы, тугоподвижности. После нанесения тщательно вымыть руки тёплой водой с мылом.
 
В массажных практиках бальзам наносится как терапевтическая основа под массажное масло или крем.</param>
</offer>
<offer id="1250" available="true">
<url>https://styx-online.ru/catalog/balzamy_maski_i_sprei_dlya_volos/balzam_dlya_volos_regeneriruyushchiy_na_kozem_moloke_alpin_derm_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1110</price>
<currencyId>RUB</currencyId>
<categoryId>307</categoryId>
<picture>https://styx-online.ru/upload/iblock/522/5224144070cabff09c504864a022945f.jpg</picture>
<vendor></vendor>
<name>БАЛЬЗАМ ДЛЯ ВОЛОС РЕГЕНЕРИРУЮЩИЙ НА КОЗЬЕМ МОЛОКЕ ALPIN DERM , 200 мл.</name>
<description>БАЛЬЗАМ ДЛЯ ВОЛОС РЕГЕНЕРИРУЮЩИЙ НА КОЗЬЕМ МОЛОКЕ ALPIN DERM , 200 мл.</description>
<param name="Артикул">17244</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для брюнеток, Жирные у корней / Сухие на кончиках, Ломкие, секущиеся, Окрашенные, Поврежденные, Пористые, Сухие</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Козье молоко, календула, алоэ вера, экстракт ростков пшеницы, морская соль, экстракт водорослей, экстракт тысячелистника, экстракт женьшеня, экстракт донника, цветы луговых трав Австрии: овсяница, райграс, клевер, ромашка.
 
 </param>
<param name="Способ применения">Нанести на влажные волосы на 2-5 минут, смыть теплой водой.
 
 Возможно использование как маски для волос, нанести на очищенные волосы на 30 минут. &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;
 </param>
</offer>
<offer id="1257" available="true">
<url>https://styx-online.ru/catalog/parfyum_dezodorant_/parfyumernaya_voda_rose_garden_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>4070</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/a9c/a9c3f56ac8a1eebcbba636d1832eb1d3.jpg</picture>
<vendor></vendor>
<name>ПАРФЮМЕРНАЯ  ВОДА &quot;ROSE GARDEN&quot;, 100 мл.</name>
<description>ПАРФЮМЕРНАЯ  ВОДА &quot;ROSE GARDEN&quot;, 100 мл.</description>
<param name="Артикул">11202</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Спирт, розовая вода, эфирное масло дамасской розы и цитрусовых. 
</param>
<param name="Способ применения">Наносить на пульсирующие зоны тела по желанию. 

?
Можно смешивать по своему вкусу с другими парфюмерными водами STYX.
?</param>
</offer>
<offer id="1260" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/balzam_dlya_gub_rozovyy_sad_10_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>840</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/a42/a42bb43f4effbffbe7f5be2b47913bfc.jpg</picture>
<vendor></vendor>
<name>БАЛЬЗАМ ДЛЯ ГУБ &quot;РОЗОВЫЙ САД&quot; , 10 мл</name>
<description>БАЛЬЗАМ ДЛЯ ГУБ &quot;РОЗОВЫЙ САД&quot; , 10 мл</description>
<param name="Артикул">1068</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло макадамии, жожоба, какао, моркови, экстракт тростника, эфирное масло дамасской розы.



</param>
<param name="Способ применения">Наносится тонким слоем на губы по необходимости или как основу под помаду.</param>
</offer>
<offer id="1261" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/gel_gidro_intensiv_uvlazhnyayushchiy_rozovyy_sad_30_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2920</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/dd9/dd97f5ae169259229cb7bed0fcaee338.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ГИДРО ИНТЕНСИВ УВЛАЖНЯЮЩИЙ &quot;РОЗОВЫЙ САД&quot;, 30 мл</name>
<description>ГЕЛЬ ГИДРО ИНТЕНСИВ УВЛАЖНЯЮЩИЙ &quot;РОЗОВЫЙ САД&quot;, 30 мл</description>
<param name="Артикул">1045</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">30+, Зрелая, Комбинированная, Купероз, Обезвоженная, Потеря эластичности, Сухая, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло жожоба, ростков&amp;nbsp;пшеницы, макадамии, сквалан, эфирное масло дамасской розы.&amp;nbsp;
 
 </param>
<param name="Способ применения">Наносится ежедневно тонким слоем под основной уход в качестве увлажняющей сыворотки.
 
 На все лицо, включая область вокруг глаз.
</param>
</offer>
<offer id="1263" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/gel_lifting_dlya_vek_rozovyy_sad_30_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3540</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/3d9/3d951b95e9a40aedcb61da631375f4bf.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ЛИФТИНГ ДЛЯ ВЕК &quot;РОЗОВЫЙ САД&quot; , 30 мл</name>
<description>ГЕЛЬ ЛИФТИНГ ДЛЯ ВЕК &quot;РОЗОВЫЙ САД&quot; , 30 мл</description>
<param name="Артикул">11037</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК">Интенсивное увлажнение, Мешки под глазами, Морщины</param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Пчелиное маточное молочко, эфирное масло розы дамасской, экстракт мальвы, масла жожоба, макадамии, сои, витамины.

</param>
<param name="Способ применения">Ежедневно утром и вечером наносить тонким слоем на зону вокруг глаз (в том числе и на подвижное веко), сочетая с основным уходом этой линии (дневным и ночным кремом).
 
* Если при нажатии на дозатор средство не появилось , переверните пузырек и скрепкой или другим тонким предметом не сильно надавите на отверстие на дне пузырька . После этого снова нажмите на дозатор .</param>
</offer>
<offer id="1265" available="true">
<url>https://styx-online.ru/catalog/krema_i_molochko_/molochko_dlya_tela_rozovyy_sad_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1680</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/628/62839b565e23f88020701e4865bb40bb.jpg</picture>
<vendor></vendor>
<name>МОЛОЧКО ДЛЯ ТЕЛА &quot;РОЗОВЫЙ САД&quot; , 200 мл</name>
<description>МОЛОЧКО ДЛЯ ТЕЛА &quot;РОЗОВЫЙ САД&quot; , 200 мл</description>
<param name="Артикул">1069</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Аллергические дерматиты, Пигментация, Потеря эластичности кожи, Сосудистый рисунок</param>
<param name="СРЕДСТВО">Молочко</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Розовая вода, масло жожоба, макадамии, гель алоэ, эфирное масло дамасской розы. 
</param>
<param name="Способ применения">Небольшое количество наносится на всё тело после душа. 

Подходит для ежедневного применения.
? </param>
</offer>
<offer id="1266" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_dlya_litsa_korolevskoe_zhele_rozovyy_sad_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3540</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/8d0/8d01763ae06c59fc2db28666b2df9c22.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ ЛИЦА КОРОЛЕВСКОЕ ЖЕЛЕ &quot;РОЗОВЫЙ САД&quot; , 50 мл</name>
<description>КРЕМ ДЛЯ ЛИЦА КОРОЛЕВСКОЕ ЖЕЛЕ &quot;РОЗОВЫЙ САД&quot; , 50 мл</description>
<param name="Артикул">1044</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Зрелая, Потеря эластичности, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Пчелиное маточное молочко, эфирное масло розы, масло жожоба, макадамии.</param>
<param name="Способ применения">Подходит для ежедневного как дневного, так и ночного основного ухода.
 
 Наносить тонким слоем после очищения и тонизации.
 
Для достижения наилучшего эффекта рекомендовано использовать поверх гидроинтенсивного геля «Розовый сад».</param>
</offer>
<offer id="1267" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_dlya_litsa_dnevnoy_rozovyy_sad_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2920</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/924/924973b8d480cdd17215c3376fc594e8.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ ЛИЦА ДНЕВНОЙ &quot;РОЗОВЫЙ САД&quot; , 50 мл</name>
<description>КРЕМ ДЛЯ ЛИЦА ДНЕВНОЙ &quot;РОЗОВЫЙ САД&quot; , 50 мл</description>
<param name="Артикул">11001</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Зрелая, Потеря эластичности, Уставшая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Эфирное масло и дистиллят дамасской розы, гель алоэ, пчелиный воск, масла ростков пшеницы и авокадо, эфирные масла герани, гвоздики, нероли. 
</param>
<param name="Способ применения">Ежедневный основной утренний уход. 

Наносить тонким слоем на лицо и зону декольте, после очищения и тонизации.
? </param>
</offer>
<offer id="1268" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_dlya_litsa_nochnoy_rozovyy_sad_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2920</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/019/019a9bc5c70b52953810d01d4aa11055.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ ЛИЦА НОЧНОЙ &quot;РОЗОВЫЙ САД&quot; , 50 мл</name>
<description>КРЕМ ДЛЯ ЛИЦА НОЧНОЙ &quot;РОЗОВЫЙ САД&quot; , 50 мл</description>
<param name="Артикул">11011</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Зрелая, Потеря эластичности, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло жожоба, оливы, макадамии, виноградных косточек, твёрдое масло ши, экстракты мальвы, календулы, ромашки, гель алоэ, эфирные масла розы дамасской, герани, гвоздики, нероли.</param>
<param name="Способ применения">Ежедневный основной ночной уход.
 
Наносить тонким слоем на лицо и зону декольте, после очищения и тонизации.</param>
</offer>
<offer id="1269" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/maska_dlya_litsa_lifting_s_vodoroslyami_rozovyy_sad_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2660</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/751/751cdb9c72d6b77f4ec2073844f50244.jpg</picture>
<vendor></vendor>
<name>МАСКА ДЛЯ ЛИЦА ЛИФТИНГ С ВОДОРОСЛЯМИ &quot;РОЗОВЫЙ САД&quot; , 50 мл</name>
<description>МАСКА ДЛЯ ЛИЦА ЛИФТИНГ С ВОДОРОСЛЯМИ &quot;РОЗОВЫЙ САД&quot; , 50 мл</description>
<param name="Артикул">11021</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Зрелая, Купероз, Отечная, Потеря эластичности, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Дистиллят дамасской розы, масло календулы, макадамии, экстракт водорослей, пчелиное маточное молочко, эфирные масла дамасской розы. </param>
<param name="Способ применения">Использовать 2-3 раза в неделю или по необходимости. 

Для устранения симптоматики (при отёках) наносить плотным слоем, через 15-20 минут смыть водой и нанести основной уход.
? </param>
</offer>
<offer id="1270" available="true">
<url>https://styx-online.ru/catalog/shampuni/shampun_dlya_volos_rozovyy_sad_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1190</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/a1e/a1ee999b6bfcc381a2e1808373b05434.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ ДЛЯ ВОЛОС &quot;РОЗОВЫЙ САД&quot;, 200 мл</name>
<description>ШАМПУНЬ ДЛЯ ВОЛОС &quot;РОЗОВЫЙ САД&quot;, 200 мл</description>
<param name="Артикул">1071</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для объема, Ломкие, секущиеся, Окрашенные, От выпадения, Поврежденные, Сухие</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), розовая вода, экстракт хны, красных водорослей, эфирное масло дамасской розы.</param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену.
 
 Оставить на несколько минут, после чего смыть тёплой водой.&amp;nbsp;
 Подходит для ежедневного применения. Возможно использовать для детей с рождения, но для совсем малышей, что бы не было слезок при попадании шампуня рекомендуем&amp;nbsp;детский шампунь.
&amp;nbsp;</param>
</offer>
<offer id="1271" available="true">
<url>https://styx-online.ru/catalog/ukhod_dlya_ruk_i_nog_/gel_dlya_nog_okhladayushchiy_chaynoe_dereo_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>930</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/309/3098fe88e692741db2e2f219cc510439.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ДЛЯ НОГ ОХЛАДАЮЩИЙ &quot;ЧАЙНОЕ ДЕРЕО&quot;, 50 мл</name>
<description>ГЕЛЬ ДЛЯ НОГ ОХЛАДАЮЩИЙ &quot;ЧАЙНОЕ ДЕРЕО&quot;, 50 мл</description>
<param name="Артикул">12331</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ">Потливость (гипергидроз), Раздражения, воспаления</param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракт чайного дерева, водорослей, вытяжки из петрушки, конопли, майорана и алое, эссенции шалфея, мяты, розмарина, настой тысячелистника и масло льна, эфирные масла чайного дерева, ромашки, шалфея и лаванды.

?</param>
<param name="Способ применения">Нанесите необходимое количество геля на чистую кожу ног. 

?
Оставить до полного впитывания.
?</param>
</offer>
<offer id="1272" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_mnogofunktsionalnyy_na_kozem_moloke_alpin_derm_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1590</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/052/052fb0c0e78095930713cdeb2141f9d8.jpg</picture>
<vendor></vendor>
<name>КРЕМ МНОГОФУНКЦИОНАЛЬНЫЙ НА КОЗЬЕМ МОЛОКЕ ALPIN DERM , 50 мл</name>
<description>КРЕМ МНОГОФУНКЦИОНАЛЬНЫЙ НА КОЗЬЕМ МОЛОКЕ ALPIN DERM , 50 мл</description>
<param name="Артикул">424</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для массажа, Мышечная боль</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Масло козьего молока, макадамии, цветков календулы, пчелиный воск, эфирное масло розмарина, ромашки, карликовой сосны, экстракт арники.
 </param>
<param name="Способ применения">Многофункциональная аптечка на все случаи жизни.&amp;nbsp;
 
Использовать для снятия симптомов по необходимости или&amp;nbsp;ежедневно, в зависимости от решаемой проблемы.</param>
</offer>
<offer id="1273" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_dlya_problemnoy_kozhi_chaynoe_derevo_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1770</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/d0a/d0a1937516b6b7fe5f0077f27710db1d.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ ПРОБЛЕМНОЙ КОЖИ &quot;ЧАЙНОЕ ДЕРЕВО&quot; , 50 мл</name>
<description>КРЕМ ДЛЯ ПРОБЛЕМНОЙ КОЖИ &quot;ЧАЙНОЕ ДЕРЕВО&quot; , 50 мл</description>
<param name="Артикул">12311</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комедоны (засорение пор , черные точки), Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Глицерин, масло конопли, ростков пшеницы, авокадо, календулы, экстракт шалфея, эфирные масла чайного дерева, лаванды.
</param>
<param name="Способ применения">Подходит для ежедневного использования в качестве дневного и ночного крема для проблемной кожи. 
 
 Также можно использовать симптоматически до 4-5 раз в день на ярко выраженные проблемные зоны.</param>
</offer>
<offer id="1274" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/mylo_dlya_zreloy_kozhi_litsa_rozovyy_sad_80_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>660</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/12e/12ea1a8cbb5bd83fad5fc0a6b5cd83ff.jpg</picture>
<vendor></vendor>
<name>МЫЛО ДЛЯ ЗРЕЛОЙ КОЖИ ЛИЦА &quot;РОЗОВЫЙ САД&quot; , 80 г</name>
<description>МЫЛО ДЛЯ ЗРЕЛОЙ КОЖИ ЛИЦА &quot;РОЗОВЫЙ САД&quot; , 80 г</description>
<param name="Артикул">11132</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Зрелая, Потеря эластичности, Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Водоросли, натуральный пчелиный мёд, экстракт алоэ, розовые лепестки, эфирное масло герани и розы.</param>
<param name="Способ применения">Ежедневно использовать 2 раза в день, во время утреннего и вечернего умывания. Идеально очищает от макияжа. 

1-2 раза в неделю использовать в качестве очищающей маски. Приготовить пену из мыла и небольшого количества воды, добавить 1-3 капли эфирного масла по проблеме и желанию. Нанести на лицо. 

Оптимально провести по мыльной пенке лёгкий массаж пальцами или щеточкой, оставить на 2-4 мин, после смыть водой.
</param>
</offer>
<offer id="1275" available="true">
<url>https://styx-online.ru/catalog/ochishchenie_i_umyvanie_/mylo_chaynoe_derevo_protivovospalitelnoe_100_g/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>580</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/eef/eef9e1d169b6837e023d8750cf6ede21.jpg</picture>
<vendor></vendor>
<name>МЫЛО &quot;ЧАЙНОЕ ДЕРЕВО&quot; ПРОТИВОВОСПАЛИТЕЛЬНОЕ , 100 г</name>
<description>МЫЛО &quot;ЧАЙНОЕ ДЕРЕВО&quot; ПРОТИВОВОСПАЛИТЕЛЬНОЕ , 100 г</description>
<param name="Артикул">464</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комедоны (засорение пор , черные точки), Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракт и эфирное масло чайного дерева, растительная мыльная масса, масло герани. </param>
<param name="Способ применения">Ежедневно использовать 2 раза в день, во время утреннего и вечернего умывания. Идеально очищает от макияжа. 

?
1-2 раза в неделю использовать в качестве очищающей маски. Приготовить пену из мыла и небольшого количества воды, добавить 1-3 капли эфирного масла по проблеме и желанию. Нанести на лицо. 
?</param>
</offer>
<offer id="1276" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_dlya_litsa_tselebnaya_gryaz_dnevnoy_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>313</categoryId>
<picture>https://styx-online.ru/upload/iblock/001/001f08006e4c2ca2904fd9461d42315d.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ ЛИЦА ЦЕЛЕБНАЯ ГРЯЗЬ ДНЕВНОЙ , 50 мл</name>
<description>КРЕМ ДЛЯ ЛИЦА ЦЕЛЕБНАЯ ГРЯЗЬ ДНЕВНОЙ , 50 мл</description>
<param name="Артикул">750</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комбинированная, Комедоны (засорение пор , черные точки), Купероз, Пористый рельеф кожи, Постакне, Потеря эластичности, Проблемная, Раздражение,воспаления( после пилинга)</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Целебная грязь (сульфидный ил), масло жожоба, макадамии, календулы, экстракт камелии и плодов авокадо, эфирные масла мирта и можжевельника.&amp;nbsp;</param>
<param name="Способ применения">Небольшое количество крема ежедневно по утрам наносить лёгкими массирующими движениями на предварительно очищенную кожу лица и шеи.&amp;nbsp;
 Крем прекрасно подойдет в качестве лечебной основы под декоративную косметику.&amp;nbsp;
 
 Для достижения наилучшего результата рекомендуется использовать в сочетании другими средствами из данной линии (молочком, тоником, ночным кремом и выравнивающей маской).</param>
</offer>
<offer id="1277" available="true">
<url>https://styx-online.ru/catalog/krema_i_geli_/krem_dlya_litsa_tselebnaya_gryaz_nochnoy_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2120</price>
<currencyId>RUB</currencyId>
<categoryId>313</categoryId>
<picture>https://styx-online.ru/upload/iblock/bd3/bd3120033d590a2755f53c1ab41dcb93.jpg</picture>
<vendor></vendor>
<name>КРЕМ ДЛЯ ЛИЦА ЦЕЛЕБНАЯ ГРЯЗЬ НОЧНОЙ , 50 мл</name>
<description>КРЕМ ДЛЯ ЛИЦА ЦЕЛЕБНАЯ ГРЯЗЬ НОЧНОЙ , 50 мл</description>
<param name="Артикул">751</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Комбинированная, Комедоны (засорение пор , черные точки), Купероз, Пористый рельеф кожи, Постакне, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Крем</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Целебная грязь (сульфидный ил), масло жожоба, макадамии, календулы, каритэ, экстракт камелии и плодов авокадо, сесквиолеат, эхинацея, мальва, шалфей, ростки пшеницы, столистная роза, эфирные масла сосны, пихты, шишек ели.&amp;nbsp;</param>
<param name="Способ применения">Небольшое количество крема ежедневно по вечерам наносить лёгкими массирующими движениями на предварительно очищенную кожу лица и шеи.&amp;nbsp;
 Полное восстановление кожи лица во время сна.&amp;nbsp;
 
 Для достижения наилучшего результата рекомендуется использовать в сочетании другими средствами из данной линии (молочком, тоником, ночным кремом и выравнивающей маской).</param>
</offer>
<offer id="1278" available="true">
<url>https://styx-online.ru/catalog/maski_i_pilingi_/maska_dlya_litsa_tselebnaya_gryaz_vyravnivayushchaya_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1500</price>
<currencyId>RUB</currencyId>
<categoryId>313</categoryId>
<picture>https://styx-online.ru/upload/iblock/053/0530c59e466bd4b1c98ee5dc0ee6c97d.jpg</picture>
<vendor></vendor>
<name>МАСКА ДЛЯ ЛИЦА ЦЕЛЕБНАЯ ГРЯЗЬ ВЫРАВНИВАЮЩАЯ , 50 мл</name>
<description>МАСКА ДЛЯ ЛИЦА ЦЕЛЕБНАЯ ГРЯЗЬ ВЫРАВНИВАЮЩАЯ , 50 мл</description>
<param name="Артикул">752</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Купероз, Отечная, Пористый рельеф кожи, Постакне, Потеря эластичности, Проблемная, Уставшая</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Маска</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Целебная грязь (сульфидный ил), суспензия водорослей, сок алоэ, масла жожоба и зверобоя, эфирное масло мирта.</param>
<param name="Способ применения">Перед использованием маску подогреть на водяной бане до температуры 40-50 градусов. 
 
 Нанести плотным слоем на очищенную кожу лица, при этом на участках воспалительных элементов слой маски может быть более плотным. 
 
Поверх маски для усиления эффекта наложить полиэтиленовую пленку (для создания парникового эффекта). Время выдержки маски в домашних условиях - 30 минут. 
 
Перед смыванием оптимально провести по маске лёгкий или интенсивный отшелушивающий массаж лица (для удаления ороговелостей эпидермиса). 
 
Для достижения наилучшего результата рекомендуется использовать в сочетании другими средствами из данной линии (молочком, тоником, дневным и ночным кремом).</param>
</offer>
<offer id="1279" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/molochko_ochishchayushchee_protiv_komedono_tselebnaya_gryaz_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1110</price>
<currencyId>RUB</currencyId>
<categoryId>313</categoryId>
<picture>https://styx-online.ru/upload/iblock/930/930188aa0d273bb0c7ea2161c8368439.jpg</picture>
<vendor></vendor>
<name>МОЛОЧКО ОЧИЩАЮЩЕЕ ПРОТИВ КОМЕДОНО ЦЕЛЕБНАЯ ГРЯЗЬ , 100 мл</name>
<description>МОЛОЧКО ОЧИЩАЮЩЕЕ ПРОТИВ КОМЕДОНО ЦЕЛЕБНАЯ ГРЯЗЬ , 100 мл</description>
<param name="Артикул">753</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комедоны (засорение пор , черные точки), Обезвоженная, Пористый рельеф кожи, Постакне</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Молочко</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Жидкая фаза целебной грязи (сульфидный ил), сок алоэ, растительные масла (какао, ши), молочная сыворотка, экстракт арники, овёс, сок лимона, киви, эфирные масла мирта, грейпфрута, шишек ели.

?
</param>
<param name="Способ применения">Ежедневное применение для очищение кожи лица и глаз (демакияж) 
 
 2-3 раза в неделю в качестве очищающей маски. Наносить плотным слоем в разогретом виде на 15-20 минут периодически массируя, далее смыть водой и нанести основной уход. 
 
 Для достижения наилучшего результата рекомендуется использовать в сочетании другими средствами из данной линии (тоником, дневным и ночным кремом и выравнивающей маской).</param>
</offer>
<offer id="1280" available="true">
<url>https://styx-online.ru/catalog/ochishchenie_i_umyvanie_/tonik_kosmeticheskiy_tselebnaya_gryaz_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1190</price>
<currencyId>RUB</currencyId>
<categoryId>313</categoryId>
<picture>https://styx-online.ru/upload/iblock/3c3/3c3bb80d55c1bd99d51d152569e350e9.jpg</picture>
<vendor></vendor>
<name>ТОНИК КОСМЕТИЧЕСКИЙ ЦЕЛЕБНАЯ ГРЯЗЬ , 100 мл</name>
<description>ТОНИК КОСМЕТИЧЕСКИЙ ЦЕЛЕБНАЯ ГРЯЗЬ , 100 мл</description>
<param name="Артикул">754</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комедоны (засорение пор , черные точки), Купероз, Отечная, Пористый рельеф кожи</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Лосьон-тоник</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Жидкая фаза целебной грязи (сульфидный ил), сок алоэ, масло жожоба, макадамии, календулы, экстракт арники, гинкго билоба, тысячелистника, эфирные масла мирта, грейпфрута, шишек ели. 

?
</param>
<param name="Способ применения">Ежедневное применение для увлажнения и тонизации кожи лица и глаз после контакта с водой и до нанесения основного ухода. 
 
 Компрессы. 1/1 разбавить с прохладной водой, пропитать салфетку (для лица) или ватный диск (для глаз) и оставить на лице на 3-5 мин. 
 
 Для достижения наилучшего результата рекомендуется использовать в сочетании другими средствами из данной линии (молочком, дневным и ночным кремом и выравнивающей маской).</param>
</offer>
<offer id="1281" available="true">
<url>https://styx-online.ru/catalog/shampuni/shampun_dlya_zhirnykh_volos_chaynoe_derevo_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1150</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/96c/96c4dad2c186cb11c7c6f5c394805032.jpg</picture>
<vendor></vendor>
<name>ШАМПУНЬ ДЛЯ ЖИРНЫХ ВОЛОС &quot;ЧАЙНОЕ ДЕРЕВО&quot; , 200 мл</name>
<description>ШАМПУНЬ ДЛЯ ЖИРНЫХ ВОЛОС &quot;ЧАЙНОЕ ДЕРЕВО&quot; , 200 мл</description>
<param name="Артикул">12324</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС">Для блеска, Для блондинок, Для брюнеток, Жирные, Перхоть</param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (натуральное моющее вещество из кокосового масла), морская соль, эфирные масла чайного дерева, шалфея, бей, мирта.</param>
<param name="Способ применения">Небольшое количество шампуня наносить на хорошо смоченные волосы. 
 
 Аккуратными массажными движениями распределить его по всей поверхности головы и волос, уделяя особое внимание корневой части и их кончикам, взбить пену. Оставить на несколько минут, после чего смыть тёплой водой.&amp;nbsp;
 
 Для получения максимального результата рекомендуется после использования шампуня наносить подходящий бальзам для волос.
 
 Подходит для ежедневного применения.</param>
</offer>
<offer id="1282" available="true">
<url>https://styx-online.ru/catalog/dlya_vanny_i_dusha_/gel_dlya_dusha_chaynoe_derevo_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1150</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/80c/80c9bb48f7914977c425a8421ffb648b.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ДЛЯ ДУША &quot;ЧАЙНОЕ ДЕРЕВО&quot; , 200 мл</name>
<description>ГЕЛЬ ДЛЯ ДУША &quot;ЧАЙНОЕ ДЕРЕВО&quot; , 200 мл</description>
<param name="Артикул">12364</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Жирная кожа, Проблемная кожа</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Лаурет сульфат натрия (омыленное масло кокоса), экстракт шалфея, календулы, эфирные масла чайного дерева, шизандры, шалфея.

</param>
<param name="Способ применения">Небольшое количество геля для душа распределить по всему телу лёгкими массажными движениями, после чего тщательно смыть тёплой водой.</param>
</offer>
<offer id="1284" available="true">
<url>https://styx-online.ru/catalog/ochishchenie_i_umyvanie_/tonik_dlya_litsa_chaynoe_derevo_protivovospalitelnyy_100_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1590</price>
<currencyId>RUB</currencyId>
<categoryId>316</categoryId>
<picture>https://styx-online.ru/upload/iblock/69e/69e08f8b559f856252659acb1460da41.jpg</picture>
<vendor></vendor>
<name>ТОНИК ДЛЯ ЛИЦА &quot;ЧАЙНОЕ ДЕРЕВО&quot; ПРОТИВОВОСПАЛИТЕЛЬНЫЙ, 100 мл</name>
<description>ТОНИК ДЛЯ ЛИЦА &quot;ЧАЙНОЕ ДЕРЕВО&quot; ПРОТИВОВОСПАЛИТЕЛЬНЫЙ, 100 мл</description>
<param name="Артикул">12342</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Жирная, Проблемная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Лосьон-тоник</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Альпийская вода, экстракт чайного дерева.</param>
<param name="Способ применения">Протирать кожу лица утром и вечером.</param>
</offer>
<offer id="1286" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/tonik_dlya_litsa_rozovyy_sad_200_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1680</price>
<currencyId>RUB</currencyId>
<categoryId>310</categoryId>
<picture>https://styx-online.ru/upload/iblock/c0a/c0ac564c09fba22aa926dcff7c21b8d4.jpg</picture>
<vendor></vendor>
<name>ТОНИК ДЛЯ ЛИЦА &quot;РОЗОВЫЙ САД&quot; , 200 мл</name>
<description>ТОНИК ДЛЯ ЛИЦА &quot;РОЗОВЫЙ САД&quot; , 200 мл</description>
<param name="Артикул">11064</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА">Комбинированная, Отечная, Потеря эластичности, Раздражение,воспаления( после пилинга), Сухая, Чувствительная</param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО">Лосьон-тоник</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Талая альпийская вода, эфирное масло дамасской розы.</param>
<param name="Способ применения">Ежедневно использовать для увлажнения и освежения кожи лица после каждого контакта с водой и перед применением последующих средств ухода. 
По необходимости (или для профилактики 1-2 раза в неделю) использовать в качестве компресса для лица и/или глаз. Тоник разбавить прохладной водой в пропорции 1:1, пропитать салфетку или ватный диск и наложить на лицо (глаза) на 3-5 минут. 
Для достижения наилучшего результата рекомендуется использовать в сочетании другими средствами из данной линии (сливками, дневным и ночным кремом и т. д.).
</param>
</offer>
<offer id="1537" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_vodorosli_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11328</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/5da/5daa9e4de585f15507c4c4402471717f.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ВОДОРОСЛИ , 1000 мл</name>
<description>ЛОСЬОН ВОДОРОСЛИ , 1000 мл</description>
<param name="Артикул">82036</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Отечная кожа, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ, Детокс, очищение от шлаков, Контроль аппетита, Отёки</param>
<param name="Состав">Талая вода, экстракты фукуса, календулы, хмеля, луговых трав, эфирное масло апельсина, трех видов мяты, гвоздики, ветивера.</param>
<param name="Способ применения">Для&amp;nbsp; профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="1538" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_neroli_1000ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11328</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/663/6635a4dda005989fc7858a733d05ce6a.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН НЕРОЛИ , 1000мл</name>
<description>ЛОСЬОН НЕРОЛИ , 1000мл</description>
<param name="Артикул">82046</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Потеря эластичности кожи, Стрии, растяжки, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Талая вода, экстракты морских водорослей, крапивы, одуванчика и ореха колы, эфирное масло гвоздики, нероли, апельсина горького (бигардии).</param>
<param name="Способ применения">Для  профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="1539" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_lepestki_rozy_1000ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11328</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/0ce/0ce8c24fd1fabffa4e9f9dd00b1b24c7.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ЛЕПЕСТКИ РОЗЫ , 1000мл</name>
<description>ЛОСЬОН ЛЕПЕСТКИ РОЗЫ , 1000мл</description>
<param name="Артикул">82056</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Лишний вес, Потеря эластичности кожи</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ</param>
<param name="Состав">Талая вода, экстракты фукуса, одуванчика, крапивы, розмарина, розовая вода, ментол, эфирные масла гвоздики, мяты, розы.</param>
<param name="Способ применения">Для&amp;nbsp; профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="1540" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_tsentella_intensiv_1000ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12684</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/250/25024136f04dd3bebaa73979d1eedbf3.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ЦЕНТЕЛЛА ИНТЕНСИВ , 1000мл</name>
<description>ЛОСЬОН ЦЕНТЕЛЛА ИНТЕНСИВ , 1000мл</description>
<param name="Артикул">82066</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты: центеллы азиатской, плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, морские водоросли, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца), никотиновая кислота.</param>
<param name="Способ применения">Для  профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="1541" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/gel_svezhest_cool_gel_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12590</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/e2a/e2a91bf0966bc57ac569643e7d73740d.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ СВЕЖЕСТЬ (Cool gel) , 1000 мл</name>
<description>ГЕЛЬ СВЕЖЕСТЬ (Cool gel) , 1000 мл</description>
<param name="Артикул">83056</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Эфирные масла мяты, эвкалипт, розмарина, лаванды, нероли, розы, ментол, камфора.</param>
<param name="Способ применения">Применяется в профессиональных процедурах (виски-пеленания, сухие термообёртывания) и в домашнем уходе для пролонгации эффекта после процедуры или в качестве ежедневного домашнего уода. 
 
 
Домашний уход: тонким слоем наносить на ноги и зоны видимости вен (сосудов, капилляров) 1-2 раза в день.</param>
</offer>
<offer id="1542" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/gel_zhar_kholod_cool_hot_gel_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>13841.4</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/9e3/9e3964d5e4ab2d9a36b72b842c0c5e6d.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ЖАР-ХОЛОД (Cool &amp; Hot gel) , 1000 мл</name>
<description>ГЕЛЬ ЖАР-ХОЛОД (Cool &amp; Hot gel) , 1000 мл</description>
<param name="Артикул">83066</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракт конского каштана, водоросли, никотиновая кислота, токоферол, масла жожоба и сои, эфирные масла розмарина, лаванды, корицы, мяты перечной и эвкалипта, ментол.
 
 </param>
<param name="Способ применения">В домашних условиях применяется 1 - 2 раза в день для борьбы с избыточными жировыми отложениями, снижением обмена веществ и стабилизации результатов коррекции фигуры.

 Рекомендуется также для ультразвукового фонофореза при борьбе с высокими степенями целлюлита, локальными жировыми отложениями, ожирением, стриями.&amp;nbsp;
 &amp;nbsp; &amp;nbsp;
 Для усиления эффекта рекомендуется применение под пленку.
 </param>
</offer>
<offer id="1544" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/gel_koritsa_zell_aktiv_gel_zimt_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12590.6</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/d28/d282af6f35758f1d95e85ea658777ad7.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ КОРИЦА (Zell Aktiv Gel Zimt) , 1000 мл</name>
<description>ГЕЛЬ КОРИЦА (Zell Aktiv Gel Zimt) , 1000 мл</description>
<param name="Артикул">83126</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Алоэ, береза, эктракты огурца, масла сои, жожоба, эфирные масла чабреца, корицы, никотиновая кислота.</param>
<param name="Способ применения">В домашних условиях для борьбы с лишним весом наносят локально 1-2 раза в день, избегая участков с видимым сосудистым рисунком.</param>
</offer>
<offer id="1545" available="true">
<url>https://styx-online.ru/catalog/antitsellyulitnyy_ukhod/gel_lifting_forte_straffungsgel_forte_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12590.6</price>
<currencyId>RUB</currencyId>
<categoryId>289</categoryId>
<picture>https://styx-online.ru/upload/iblock/e90/e905a5d1fc841b298669e9f0e57aea52.jpg</picture>
<vendor></vendor>
<name>ГЕЛЬ ЛИФТИНГ ФОРТЕ (Straffungsgel forte) , 1000 мл</name>
<description>ГЕЛЬ ЛИФТИНГ ФОРТЕ (Straffungsgel forte) , 1000 мл</description>
<param name="Артикул">83136</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Алоэ вера, соя, гамамелис, фукус, гинкго, эхинацея, шиповник, огурец, никотиновая кислота.</param>
<param name="Способ применения">Как лифтинговый корсет в программах коррекции фигуры
 
 В домашних условиях для активизации обмена веществ(наносить 1-2 раза в день)
 
Для усиления эффекта рекомендуется применение под пленку.</param>
</offer>
<offer id="1546" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/tsellogel_soft_myagkiy_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10077.2</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/9b0/9b01e091b41b133fd38f3046bb1873bb.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ СОФТ МЯГКИЙ , 1000 мл</name>
<description>ЦЕЛЛОГЕЛЬ СОФТ МЯГКИЙ , 1000 мл</description>
<param name="Артикул">81016</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Отечная кожа, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты: плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, морских водорослей, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца, розы), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 1–2 типа в технике термообёртываний (горячих). 
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна). 
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1547" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/tsellogel_medium_sredniy_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10077.2</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/00d/00d1899c026bf44d46f4f9abe01a3320.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ МЕДИУМ СРЕДНИЙ , 1000 мл</name>
<description>ЦЕЛЛОГЕЛЬ МЕДИУМ СРЕДНИЙ , 1000 мл</description>
<param name="Артикул">81026</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Отечная кожа, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ</param>
<param name="Состав">Экстракты: плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, морских водорослей, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца, розы), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 1–3 типа в технике термообёртываний (горячих). 
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна). 
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1548" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/tsellogel_strong_silnyy_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10077.2</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/a65/a6543c4524513aa5603bc27b785b0ee9.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ СТРОНГ СИЛЬНЫЙ , 1000 мл</name>
<description>ЦЕЛЛОГЕЛЬ СТРОНГ СИЛЬНЫЙ , 1000 мл</description>
<param name="Артикул">81036</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Потеря эластичности кожи, Стрии, растяжки, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты: плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, морских водорослей, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца, розы), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 2–4 типа в технике термообёртываний (горячих).
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна).
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1549" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/tsellogel_ekstra_supersilnyy_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>12590.6</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/8b8/8b8bcb3efd23c6e496072650c5f6693c.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ ЭКСТРА СУПЕРСИЛЬНЫЙ , 1000 мл</name>
<description>ЦЕЛЛОГЕЛЬ ЭКСТРА СУПЕРСИЛЬНЫЙ , 1000 мл</description>
<param name="Артикул">81046</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Для обертываний, Лишний вес, Потеря эластичности кожи, Целлюлит</param>
<param name="СРЕДСТВО">Гель</param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Активизация обмена веществ</param>
<param name="Состав">Экстракты: плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, морских водорослей, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца, розы), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 3–4 типа в технике термообёртываний (горячих).
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна).
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1550" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/tsellogel_tsentella_i_flerdoranzh_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>10702.6</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/6cf/6cf26d2f0375effae07de7cb511d9679.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ ЦЕНТЕЛЛА И ФЛЕРДОРАНЖ , 1000 мл</name>
<description>ЦЕЛЛОГЕЛЬ ЦЕНТЕЛЛА И ФЛЕРДОРАНЖ , 1000 мл</description>
<param name="Артикул">81056</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Экстракты: центеллы азиатской, плюща, крапивы, липы, эхинацеи, ореха колы, подорожника, свёклы, тростника, спаржи, конского каштана, алоэ, хмеля, одуванчика, лопуха, витамины, пектины, сапонины, полисахариды, молочная сыворотка, соль Мёртвого моря, морские водоросли, масла: макадамии, сои, жожоба, календулы, зверобоя, виноградных косточек, моркови, смородины, 37 эфирных масел (в том числе эфирное масло розмарина, эвкалипта, корицы, мяты, герани, можжевельника, душицы, кипариса, нероли, вербены, перца), никотиновая кислота.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 1–4 типа в технике термообёртываний (горячих).
 
Используется СТРОГО при условии разогревания (термоодеяло или сауна).
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1552" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/loson_led_1000_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>11328</price>
<currencyId>RUB</currencyId>
<categoryId>318</categoryId>
<picture>https://styx-online.ru/upload/iblock/3fd/3fd65ce359f331a09dd3a05db9c66688.jpg</picture>
<vendor></vendor>
<name>ЛОСЬОН ЛЕД , 1000 мл</name>
<description>ЛОСЬОН ЛЕД , 1000 мл</description>
<param name="Артикул">82016</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА">Аллергические дерматиты, Варикоз, Для обертываний, Лишний вес, Отечная кожа, Сосудистый рисунок, Целлюлит</param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ">Отёки, Расширение вен</param>
<param name="Состав">Талая вода, экстракты конского каштана, хвоща, одуванчика, арники, ментол; эфирные масла мяты кудрявой и перечной, эвкалипта, мелиссы.</param>
<param name="Способ применения">Для  профессионального использования в процедурах &quot;виски-пеленаний&quot;</param>
</offer>
<offer id="1581" available="true">
<url>https://styx-online.ru/catalog/aroma_derm_telo_/tsellogel_lifting_ikra_i_neroli_400_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5428.54</price>
<currencyId>RUB</currencyId>
<categoryId>300</categoryId>
<picture>https://styx-online.ru/upload/iblock/029/0295a7a782d0da2676435691f65f2ac0.jpg</picture>
<vendor></vendor>
<name>ЦЕЛЛОГЕЛЬ ЛИФТИНГ ИКРА И НЕРОЛИ , 400 мл</name>
<description>ЦЕЛЛОГЕЛЬ ЛИФТИНГ ИКРА И НЕРОЛИ , 400 мл</description>
<param name="Артикул">0354</param>
<param name="Вес/объем"></param>
<param name="Картинки">https://styx-online.ru/upload/iblock/ecb/ecbd36a74dcd059da0ac8ba40153f712.jpg, https://styx-online.ru/upload/iblock/c93/c938ec2c6d30916d9f4aad8696d61df7.jpg</param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Вода, экстракт икры, подорожник, каштан, агар-агар, морская соль.</param>
<param name="Способ применения">Только для профессионального использования: для кожи 1–3 типа в технике термообёртываний (горячих).&amp;nbsp;
 
 Используется СТРОГО при условии разогревания (термоодеяло или сауна).&amp;nbsp;
 
После процедуры нанести терапевтический «корсет» по показаниям или послепроцедурный крем.</param>
</offer>
<offer id="1674" available="true">
<url>https://styx-online.ru/catalog/problemnaya_kozha/shokolad_styx_/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>350</price>
<currencyId>RUB</currencyId>
<categoryId>313</categoryId>
<picture>https://styx-online.ru/upload/iblock/30a/30a8bfe05e7907ca8386004d3a9f78e7.png</picture>
<vendor></vendor>
<name>ШОКОЛАД STYX</name>
<description>ШОКОЛАД STYX</description>
<param name="Артикул">100</param>
<param name="Вес/объем"></param>
<param name="Картинки">https://styx-online.ru/upload/iblock/2ff/2ff8e9fb979d070e7f584af2b4955a75.jpg, https://styx-online.ru/upload/iblock/c15/c156aa04b0bdd16422d982947e88416e.jpg</param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1705" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/bio_maska_revitalizatsiya_s_edelveysom_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2740</price>
<currencyId>RUB</currencyId>
<categoryId>306</categoryId>
<picture>https://styx-online.ru/upload/iblock/662/6620d6611151690f2096abbf57ccdf30.png</picture>
<vendor></vendor>
<name>БИО-МАСКА “РЕВИТАЛИЗАЦИЯ» С ЭДЕЛЬВЕЙСОМ , 50 мл</name>
<description>БИО-МАСКА “РЕВИТАЛИЗАЦИЯ» С ЭДЕЛЬВЕЙСОМ , 50 мл</description>
<param name="Артикул">17431</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Вода, экстракт календулы, масло жожоба, молоко кобылицы,&amp;nbsp; экстракт римской ромашки, экстракт эдельвейса альпийского, экстракт алоэ.
 </param>
<param name="Способ применения">Наносить густым слоем на лицо, шею и декольте на 20 минут, затем смыть водой (при синдроме хронической усталости можно оставлять маску на ночь).
</param>
</offer>
<offer id="1707" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/bio_skrab_obnovlenie_s_edelveysom_50_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>2480</price>
<currencyId>RUB</currencyId>
<categoryId>306</categoryId>
<picture>https://styx-online.ru/upload/iblock/11c/11cb641f831cee6249c9fbdbe49bb1ce.png</picture>
<vendor></vendor>
<name>БИО-СКРАБ «ОБНОВЛЕНИЕ» С ЭДЕЛЬВЕЙСОМ , 50 мл</name>
<description>БИО-СКРАБ «ОБНОВЛЕНИЕ» С ЭДЕЛЬВЕЙСОМ , 50 мл</description>
<param name="Артикул">17421</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Вода, сок алоэ, кобылье молоко, экстракт корня горечавки, экстракт эдельвейса альпийского,
 экстракт римской ромашки, гидрогенизированный воск жожоба.
 </param>
<param name="Способ применения">2-3 раза в неделю наносить на слегка распаренное лицо на 5-10 минут, после чего кончиками влажных пальцев тщательно отскабировать кожу и смыть теплой водой.
</param>
</offer>
<offer id="1708" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/bio_syvorotka_gidratant_s_edelveysom_30_ml/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3890</price>
<currencyId>RUB</currencyId>
<categoryId>306</categoryId>
<picture>https://styx-online.ru/upload/iblock/6c8/6c8e11150a9bfe732f5209774ee9e4d1.png</picture>
<vendor></vendor>
<name>БИО-СЫВОРОТКА «ГИДРАТАНТ» С ЭДЕЛЬВЕЙСОМ , 30 мл</name>
<description>БИО-СЫВОРОТКА «ГИДРАТАНТ» С ЭДЕЛЬВЕЙСОМ , 30 мл</description>
<param name="Артикул">17467</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Вода, молоко кобылицы, экстракт тысячелистника, ирландский мох, экстракт корня горечавки, экстракт донника, экстракт эдельвейса альпийского.</param>
<param name="Способ применения">Наносить на кожу лица, включая зону вокруг глаз, 1-2 раза в день под дневной/ночной крем.
</param>
</offer>
<offer id="1709" available="true">
<url>https://styx-online.ru/catalog/zrelaya_kozha_30/alpinderm_edelveys_bio_flyuid_dlya_litsa_matiruyushchiy_50_ml_/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>3100</price>
<currencyId>RUB</currencyId>
<categoryId>306</categoryId>
<picture>https://styx-online.ru/upload/iblock/a89/a893cb70155c9662de2d2134a714d626.jpg</picture>
<vendor></vendor>
<name>АЛЬПИНДЕРМ-ЭДЕЛЬВЕЙС БИО-ФЛЮИД ДЛЯ ЛИЦА МАТИРУЮЩИЙ , 50 мл 							</name>
<description>АЛЬПИНДЕРМ-ЭДЕЛЬВЕЙС БИО-ФЛЮИД ДЛЯ ЛИЦА МАТИРУЮЩИЙ , 50 мл 							</description>
<param name="Артикул">17441			</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав">Вода, сок листьев алоэ, масло макадамии, масло ши, молоко кобылицы, экстракт эдельвейса
 альпийского, экстракт донника.
</param>
<param name="Способ применения">Наносить на лицо (включая зону вокруг глаз) и шею 1-2 раза в день.</param>
</offer>
<offer id="1713" available="true">
<url>https://styx-online.ru/catalog/programmy_po_ukhodu_za_telom/programma_detoks_viski_pelenaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1</price>
<currencyId>RUB</currencyId>
<categoryId>336</categoryId>
<picture>https://styx-online.ru/upload/iblock/dd5/dd5d2b863b5ec0179e805add70787ce0.jpg</picture>
<vendor></vendor>
<name>ПРОГРАММА ДЕТОКС-ВИСКИ ПЕЛЕНАНИЯ</name>
<description>ПРОГРАММА ДЕТОКС-ВИСКИ ПЕЛЕНАНИЯ</description>
<param name="Артикул">101</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1714" available="true">
<url>https://styx-online.ru/catalog/programmy_po_ukhodu_za_telom/programma_protiv_otekov_viski_pelenaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1</price>
<currencyId>RUB</currencyId>
<categoryId>336</categoryId>
<picture>https://styx-online.ru/upload/iblock/12d/12d113e328458387a81dfcc8e80bfb8e.jpg</picture>
<vendor></vendor>
<name>ПРОГРАММА ПРОТИВ ОТЕКОВ-ВИСКИ ПЕЛЕНАНИЯ</name>
<description>ПРОГРАММА ПРОТИВ ОТЕКОВ-ВИСКИ ПЕЛЕНАНИЯ</description>
<param name="Артикул">102</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1715" available="true">
<url>https://styx-online.ru/catalog/programmy_po_ukhodu_za_telom/programma_lifting_viski_pelenaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1</price>
<currencyId>RUB</currencyId>
<categoryId>336</categoryId>
<picture>https://styx-online.ru/upload/iblock/f30/f30aac626a4dba715ce3102e4ac9a406.jpg</picture>
<vendor></vendor>
<name>ПРОГРАММА ЛИФТИНГ-ВИСКИ ПЕЛЕНАНИЯ</name>
<description>ПРОГРАММА ЛИФТИНГ-ВИСКИ ПЕЛЕНАНИЯ</description>
<param name="Артикул">103</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1738" available="true">
<url>https://styx-online.ru/catalog/programmy_po_ukhodu_za_telom/programma_zhiroszhiganiya_viski_pelenaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1</price>
<currencyId>RUB</currencyId>
<categoryId>336</categoryId>
<picture>https://styx-online.ru/upload/iblock/d62/d62a46855d4e325d0e3e5540d9370e50.jpg</picture>
<vendor></vendor>
<name>ПРОГРАММА ЖИРОСЖИГАНИЯ-ВИСКИ ПЕЛЕНАНИЯ</name>
<description>ПРОГРАММА ЖИРОСЖИГАНИЯ-ВИСКИ ПЕЛЕНАНИЯ</description>
<param name="Артикул">104</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1739" available="true">
<url>https://styx-online.ru/catalog/programmy_po_ukhodu_za_telom/programma_soblaznitelnyy_byust_viski_pelenaniya/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1</price>
<currencyId>RUB</currencyId>
<categoryId>336</categoryId>
<picture>https://styx-online.ru/upload/iblock/1de/1de6767edc7c91033c4ded8fe11422ba.jpg</picture>
<vendor></vendor>
<name>ПРОГРАММА СОБЛАЗНИТЕЛЬНЫЙ БЮСТ-ВИСКИ ПЕЛЕНАНИЯ</name>
<description>ПРОГРАММА СОБЛАЗНИТЕЛЬНЫЙ БЮСТ-ВИСКИ ПЕЛЕНАНИЯ</description>
<param name="Артикул">105</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1742" available="true">
<url>https://styx-online.ru/catalog/programmy_po_ukhodu_za_telom/programma_protiv_otekov_cello_gel/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1</price>
<currencyId>RUB</currencyId>
<categoryId>336</categoryId>
<picture>https://styx-online.ru/upload/iblock/b94/b94589a288d04c6bff56ec683ff3bc7f.jpg</picture>
<vendor></vendor>
<name>ПРОГРАММА ПРОТИВ ОТЕКОВ CELLO - GEL</name>
<description>ПРОГРАММА ПРОТИВ ОТЕКОВ CELLO - GEL</description>
<param name="Артикул">106</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1743" available="true">
<url>https://styx-online.ru/catalog/programmy_po_ukhodu_za_telom/programma_lifting_cello_gel/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1</price>
<currencyId>RUB</currencyId>
<categoryId>336</categoryId>
<picture>https://styx-online.ru/upload/iblock/982/98243e252b1413b5905017dae8ed4c37.jpg</picture>
<vendor></vendor>
<name>ПРОГРАММА ЛИФТИНГ CELLO - GEL</name>
<description>ПРОГРАММА ЛИФТИНГ CELLO - GEL</description>
<param name="Артикул">107</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1744" available="true">
<url>https://styx-online.ru/catalog/programmy_po_ukhodu_za_telom/programma_detoks_cello_gel/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1</price>
<currencyId>RUB</currencyId>
<categoryId>336</categoryId>
<picture>https://styx-online.ru/upload/iblock/8b5/8b5e5af5685e812f56b7b9e7d6d5e135.jpg</picture>
<vendor></vendor>
<name>ПРОГРАММА ДЕТОКС CELLO - GEL</name>
<description>ПРОГРАММА ДЕТОКС CELLO - GEL</description>
<param name="Артикул">108</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1745" available="true">
<url>https://styx-online.ru/catalog/programmy_po_ukhodu_za_telom/programma_zhiroszhiganiya_cello_gel/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>1</price>
<currencyId>RUB</currencyId>
<categoryId>336</categoryId>
<picture>https://styx-online.ru/upload/iblock/57d/57dd113d1048164c0c57e1a77df182f9.jpg</picture>
<vendor></vendor>
<name>ПРОГРАММА ЖИРОСЖИГАНИЯ CELLO - GEL</name>
<description>ПРОГРАММА ЖИРОСЖИГАНИЯ CELLO - GEL</description>
<param name="Артикул">109</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1751" available="true">
<url>https://styx-online.ru/catalog/raskhodnye_materialy_1/trusy_muzhskie_bikini/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20</price>
<currencyId>RUB</currencyId>
<categoryId>338</categoryId>
<picture>https://styx-online.ru/upload/iblock/9f2/9f2917fd2a4da8e00b5787d416a35149.jpg</picture>
<vendor></vendor>
<name>ТРУСЫ МУЖСКИЕ БИКИНИ</name>
<description>ТРУСЫ МУЖСКИЕ БИКИНИ</description>
<param name="Артикул">999</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1752" available="true">
<url>https://styx-online.ru/catalog/raskhodnye_materialy_1/tapochki_zhenskie_otkrytye/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>60</price>
<currencyId>RUB</currencyId>
<categoryId>338</categoryId>
<picture>https://styx-online.ru/upload/iblock/695/6957357dbe8ba62fa50aac2daacc8cc2.jpg</picture>
<vendor></vendor>
<name>ТАПОЧКИ ЖЕНСКИЕ ОТКРЫТЫЕ</name>
<description>ТАПОЧКИ ЖЕНСКИЕ ОТКРЫТЫЕ</description>
<param name="Артикул">1000</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1753" available="true">
<url>https://styx-online.ru/catalog/raskhodnye_materialy_1/svecha_dlya_aromalampy/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>5</price>
<currencyId>RUB</currencyId>
<categoryId>338</categoryId>
<picture>https://styx-online.ru/upload/iblock/8ab/8ab3be62f671ee31c6eefde0b68751aa.png</picture>
<vendor></vendor>
<name>СВЕЧА ДЛЯ АРОМАЛАМПЫ</name>
<description>СВЕЧА ДЛЯ АРОМАЛАМПЫ</description>
<param name="Артикул">22775</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
<offer id="1754" available="true">
<url>https://styx-online.ru/catalog/raskhodnye_materialy_1/trusiki_zhenskie/?r1=<?=$strReferer1; ?>&amp;r2=<?=$strReferer2; ?></url>
<price>20</price>
<currencyId>RUB</currencyId>
<categoryId>338</categoryId>
<picture>https://styx-online.ru/upload/iblock/7d8/7d8e341f1243ec2396bd263cd833f95c.jpg</picture>
<vendor></vendor>
<name>ТРУСИКИ ЖЕНСКИЕ</name>
<description>ТРУСИКИ ЖЕНСКИЕ</description>
<param name="Артикул">998</param>
<param name="Вес/объем"></param>
<param name="Картинки"></param>
<param name="ДЛЯ ВОЛОС"></param>
<param name="ДЛЯ ЛИЦА"></param>
<param name="Характеристики"></param>
<param name="ДЛЯ ТЕЛА"></param>
<param name="СРЕДСТВО"></param>
<param name="ДЛЯ ВЕК"></param>
<param name="ДЛЯ РУК"></param>
<param name="ДЛЯ НОГ"></param>
<param name="ЗДОРОВЬЕ"></param>
<param name="Состав"></param>
<param name="Способ применения"></param>
</offer>
</offers>
</shop>
</yml_catalog>
