<?php
/**
 * Internationalisation file for extension ContributionScores.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

$messages['en'] = array(
	'contributionscores'                 => 'Contribution scores',
	'contributionscores-desc'            => 'Polls the wiki database for highest [[Special:ContributionScores|user contribution volume]]',
	'contributionscores-info'            => "The score primarily measures unique pages edited, with consideration for high edit volume.",
	'contributionscores-top'             => '(Top $1)',
	'contributionscores-days'            => 'Last {{PLURAL:$1|day|$1 days}}',
	'contributionscores-allrevisions'    => 'All time',
	'contributionscores-score'           => 'Score',
	'contributionscores-pages'           => 'Pages',
	'contributionscores-changes'         => 'Changes',
	'contributionscores-username'        => 'Username',
	'contributionscores-invalidusername' => 'Invalid username',
	'contributionscores-invalidmetric'   => 'Invalid metric',
);

/** Message documentation (Message documentation)
 * @author Jon Harald Søby
 * @author JtFuruhata
 * @author Kalan
 * @author Purodha
 * @author Raymond
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'contributionscores' => '{{doc-special|ContributionScores}}',
	'contributionscores-desc' => 'Extension description displayed on [[Special:Version]].',
	'contributionscores-info' => 'see http://svn.wikimedia.org/viewvc/mediawiki/trunk/extensions/ContributionScores/ContributionScores_body.php?view=markup

:COUNT(DISTINCT rev_page) AS page_count
:COUNT(rev_id) AS rev_count
:page_count+SQRT(rev_count-page_count)*2 AS wiki_rank',
	'contributionscores-top' => 'Second part of the headings of [[Special:ContributionScores]]. PLURAL is supported, but not used by the English original message.
{{Identical|Top}}',
	'contributionscores-days' => 'Heading of [[Special:ContributionScores]].',
	'contributionscores-allrevisions' => 'Used as a header of [[Special:ContributionScores]]',
	'contributionscores-score' => 'Used as column header of the table.
{{Related|Contributionscores-score}}',
	'contributionscores-pages' => '{{Related|Contributionscores-score}}
{{Identical|Page}}',
	'contributionscores-changes' => '{{Related|Contributionscores-score}}
{{Identical|Change}}',
	'contributionscores-username' => '{{Related|Contributionscores-score}}
{{Identical|Username}}',
	'contributionscores-invalidusername' => 'Used as error message if the specified username is invalid.

See example: [[Template:User Score]].
This template contains <code><nowiki>{{#cscore:{{PAGENAME}}|score}}</nowiki></code> and its page name is invalid as username.

See also:
* {{msg-mw|Contributionscores-invalidmetric}}',
	'contributionscores-invalidmetric' => 'Used as error message if the specified metric is invalid.

Valid metrics are: score, changes and pages

See also:
* {{msg-mw|Contributionscores-invalidusername}}',
);

/** Afrikaans (Afrikaans)
 * @author Arnobarnard
 * @author Naudefj
 */
$messages['af'] = array(
	'contributionscores' => 'Punte bygedra',
	'contributionscores-desc' => "Gee 'n oorsig van [[Special:ContributionScores|gebruikers met die meeste bydraes]] in die wiki",
	'contributionscores-info' => 'Punte word as volg bereken:
*Een (1) punt vir elke bladsy gewysig
*Wortel van (totale aantal wysigings) - (totale aantal unieke bladsye) * 2
Punte wat op die manier bereken word weeg die verskeidenheid van bladsye gewysig oor die aantal wysigings. Die punte meet hoofsaaklik unieke bladsye gewysig, met inagneming van hoë volume wysigings - wat veronderstel word om van hoër kwaliteit te wees.', # Fuzzy
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => 'Laaste {{PLURAL:$1|dag|$1 dae}}',
	'contributionscores-allrevisions' => 'Alle weergawes', # Fuzzy
	'contributionscores-score' => 'Punte',
	'contributionscores-pages' => 'Bladsye',
	'contributionscores-changes' => 'Wysigings',
	'contributionscores-username' => 'Gebruikersnaam',
	'contributionscores-invalidusername' => 'Ongeldige gebruikersnaam',
	'contributionscores-invalidmetric' => 'Ongeldige eenheid',
);

/** Arabic (العربية)
 * @author Meno25
 * @author Mido
 * @author OsamaK
 * @author ترجمان05
 */
$messages['ar'] = array(
	'contributionscores' => 'نتائج المساهمات',
	'contributionscores-desc' => 'يسحب قاعدة بيانات الويكي لأعلى [[Special:ContributionScores|حجم لمساهمات المستخدم]]',
	'contributionscores-info' => 'تحسب النتيجة بشكل أساسي عن طريق حساب عدد الصفحات التي تم تعديلها، مع الأخذ في الاعتبار كمية التعديلات الكبيرة.',
	'contributionscores-top' => '(أعلى $1)',
	'contributionscores-days' => '{{PLURAL:$1||اليوم الماضي|اليومان الماضيان|ال$1 أيام الماضية|ال$1 يومًا الماضية|ال$1 يوم الماضية}}',
	'contributionscores-allrevisions' => 'كل الوقت',
	'contributionscores-score' => 'النتيجة',
	'contributionscores-pages' => 'الصفحات',
	'contributionscores-changes' => 'تغييرات',
	'contributionscores-username' => 'اسم المستخدم',
	'contributionscores-invalidusername' => 'اسم المستخدم غير صحيح',
	'contributionscores-invalidmetric' => 'المتري غير صحيح',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author 334a
 * @author Basharh
 */
$messages['arc'] = array(
	'contributionscores' => 'ܦܠܛ̈ܐ ܕܫܘܬܦܘܝܬ̈ܐ',
	'contributionscores-days' => '{{PLURAL:$1|ܝܘܡܐ ܐܚܪܝܐ|$1 ܝܘܡܬ̈ܐ ܐܚܪ̈ܝܐ}}',
	'contributionscores-allrevisions' => 'ܟܠ ܙܒܢ̈ܐ',
	'contributionscores-pages' => 'ܦܐܬܬ̈ܐ',
	'contributionscores-changes' => 'ܫܘܚܠܦ̈ܐ',
	'contributionscores-username' => 'ܫܡܐ ܕܡܦܠܚܢܐ',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$messages['arz'] = array(
	'contributionscores' => 'نتائج المساهمات',
	'contributionscores-desc' => 'يسحب قاعدة بيانات الويكى لأعلى [[Special:ContributionScores|حجم لمساهمات المستخدم]]',
	'contributionscores-info' => 'النتائج تحسب كالتالي:
*1 نقطة لكل صفحة فريدة تحرر
*الجذر التربيعى ل(عدد التعديلات الكلية) - (عدد الصفحات الفريدة الكلية) * 2
النتائج المحسوبة بهذه الطريقة توزن انتثار التعديلات على حجم التعديلات.  أساسا، هذه النتيجة تقيس بشكل أساسى الصفحات الفريدة المحررة، مع الأخذ فى الاعتبار أحجام التعديل الكبيرة - تفترض أنها تكون صفحة بجودة أعلى.', # Fuzzy
	'contributionscores-top' => '(أعلى $1)',
	'contributionscores-days' => '{{PLURAL:$1||اليوم الماضي|اليومان الماضيان|ال$1 أيام الماضية|ال$1 يومًا الماضية|ال$1 يوم الماضية}}',
	'contributionscores-allrevisions' => 'كل المراجعات', # Fuzzy
	'contributionscores-score' => 'النتيجة',
	'contributionscores-pages' => 'الصفحات',
	'contributionscores-changes' => 'التغييرات',
	'contributionscores-username' => 'اسم المستخدم',
	'contributionscores-invalidusername' => 'اسم المستخدم غير صحيح',
	'contributionscores-invalidmetric' => 'المترى غير صحيح',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'contributionscores' => 'Puntos de collaboraciones',
	'contributionscores-desc' => 'Peñera la base de datos de la wiki pa ver los mayores [[Special:ContributionScores|volumes de collaboración de los usuarios]]',
	'contributionscores-info' => "Les puntuaciones miden principalmente les ediciones de páxines úniques, teniendo en cuenta un volume d'edición altu.",
	'contributionscores-top' => '(Los $1 mayores)',
	'contributionscores-days' => '{{PLURAL:$1|Últimu día|Los últimos $1 díes}}',
	'contributionscores-allrevisions' => 'De tolos tiempos',
	'contributionscores-score' => 'Puntuación',
	'contributionscores-pages' => 'Páxines',
	'contributionscores-changes' => 'Cambios',
	'contributionscores-username' => "Nome d'usuariu",
	'contributionscores-invalidusername' => "Nome d'usuariu inválidu",
	'contributionscores-invalidmetric' => 'Métrica inválida',
);

/** Kotava (Kotava)
 * @author Sab
 */
$messages['avk'] = array(
	'contributionscores' => 'Weberajorist',
	'contributionscores-top' => '(Taneaf $1)',
	'contributionscores-days' => 'Ironokaf $1 viel', # Fuzzy
	'contributionscores-allrevisions' => 'Betakseem', # Fuzzy
	'contributionscores-score' => 'Jorist',
	'contributionscores-pages' => 'Bu',
	'contributionscores-changes' => 'Betaks',
	'contributionscores-username' => 'Favesikyolt',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'contributionscores-pages' => 'Səhifələr',
	'contributionscores-username' => 'İstifadəçi adı',
);

/** South Azerbaijani (تورکجه)
 * @author Mousa
 */
$messages['azb'] = array(
	'contributionscores' => 'چالیشماق امتیازلاری',
	'contributionscores-desc' => 'ان یوخاری [[Special:ContributionScores|ایستیفاده‌چی چالیشماق حجمی]] اوچون دیتابیس‌دن سوروشار',
	'contributionscores-info' => 'بو امتیاز اؤنجه‌لیکله دَییشدیریلمیش تک صحیفه‌لری ساییر و یوخاری دَییشدیرمک حجمینی ده نظرده آلیر.',
	'contributionscores-top' => '(یوخاری $1)',
	'contributionscores-days' => 'سون {{PLURAL:$1|گون|$1 گون}}',
	'contributionscores-allrevisions' => 'بوتون زامانلار',
	'contributionscores-score' => 'امتیاز',
	'contributionscores-pages' => 'صحیفه‌لر',
	'contributionscores-changes' => 'دَییشمه‌لر',
	'contributionscores-username' => 'آد',
	'contributionscores-invalidusername' => 'گئچرسیز ایستیفاده‌چی آدی',
	'contributionscores-invalidmetric' => 'گئچرسیز مِتریک',
);

/** Bashkir (башҡортса)
 * @author Assele
 * @author Haqmar
 */
$messages['ba'] = array(
	'contributionscores' => 'Индергән өлөштәрҙе баһалау',
	'contributionscores-desc' => 'Мәғлүмәттәр базаһынан [[Special:ContributionScores|иң ҙур өлөш индергән ҡатнашыусыларҙы]] билдәләй',
	'contributionscores-info' => 'Баһа түбәндәге өлөштәрҙе ҡушыу аша иҫәпләнә:
* 1 мәрәй — һәр айырым битте мөхәррирләү өсөн;
* 2 * ( (дөйөм үҙгәртеүҙәр һаны) - (барыһы төрлө биттәр) ) айырмаһының тамыры.
Баһаны иҫәпләгән ваҡытта, шулай итеп, дөйөм үҙгәртеүҙәр һанына ҡарағында үҙгәртеүҙәрҙең төрлөлөгө ҙурыраҡ йоғонто яһай.', # Fuzzy
	'contributionscores-top' => '(Тәүге $1)',
	'contributionscores-days' => 'Һуңғы {{PLURAL:$1|көн|$1 көн}}',
	'contributionscores-allrevisions' => 'Бөтәһе',
	'contributionscores-score' => 'Баһа',
	'contributionscores-pages' => 'Биттәр',
	'contributionscores-changes' => 'Үҙгәртеүҙәр',
	'contributionscores-username' => 'Ҡатнашыусы исеме',
	'contributionscores-invalidusername' => 'Ҡатнашыусы исеме дөрөҫ түгел',
	'contributionscores-invalidmetric' => 'Метрика дөрөҫ түгел',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'contributionscores' => 'Адзнака ўнёску',
	'contributionscores-desc' => 'Вызначае з базы зьвестак [[Special:ContributionScores|удзельнікаў з найбольшай колькасьцю рэдагаваньняў]]',
	'contributionscores-info' => 'Адзнака галоўным чынам вымярае ўнікальныя рэдагаваньні старонак з улікам памеру ўнёску.',
	'contributionscores-top' => '($1 {{PLURAL:$1|найлепшы|найлепшых|найлепшых}})',
	'contributionscores-days' => '{{PLURAL:$1|Апошні $1 дзень|Апошнія $1 дні|Апошнія $1 дзён}}',
	'contributionscores-allrevisions' => 'За ўвесь час',
	'contributionscores-score' => 'Адзнака',
	'contributionscores-pages' => 'Старонак',
	'contributionscores-changes' => 'Зьменаў',
	'contributionscores-username' => 'Імя ўдзельніка',
	'contributionscores-invalidusername' => 'Няслушнае імя ўдзельніка',
	'contributionscores-invalidmetric' => 'Няслушная мэтрыка',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'contributionscores' => 'Потребителска класация',
	'contributionscores-top' => '(Най-добрите $1)',
	'contributionscores-days' => '{{PLURAL:$1|Последния ден|Последните $1 дни}}',
	'contributionscores-allrevisions' => 'Всички редакции', # Fuzzy
	'contributionscores-score' => 'Точки',
	'contributionscores-pages' => 'Страници',
	'contributionscores-changes' => 'Редакции',
	'contributionscores-username' => 'Потребител',
	'contributionscores-invalidusername' => 'Невалидно потребителско име',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'contributionscores' => 'অনুদানের স্কোর',
	'contributionscores-top' => '(সর্বোচ্চ $1)',
	'contributionscores-days' => 'গত {{PLURAL:$1|দিন|$1 দিন}}',
	'contributionscores-allrevisions' => 'সকল সংস্করণ', # Fuzzy
	'contributionscores-score' => 'স্কোর',
	'contributionscores-pages' => 'পাতা',
	'contributionscores-changes' => 'পরিবর্তন',
	'contributionscores-username' => 'ব্যবহারকারী নাম',
	'contributionscores-invalidusername' => 'অগ্রহণযোগ্য ব্যবহারকারী নাম',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'contributionscores' => 'Skor an degasadennoù',
	'contributionscores-desc' => 'Furchal a ra er bank roadennoù evit kavout [[Special:ContributionScores|kementadoù brasañ a zegasadennoù an implijerien]]',
	'contributionscores-info' => "Setu penaos e vez jedet ar poenterezh :
*Ur (1) poent evit pep pajenn kemmet
*Gwrizienn garrez (an niver hollek a gemmoù graet) - (niver a bajennoù disheñvel) * 2
Lakaat a ra ar formulenn-se al liesseurted war wel kentoc'h eget ar c'hementad.
E berr gomzoù e talvez da jediñ an niver a bajennoù disheñvel kemmet en ur sellet a-dostoc'h ouzh ar c'hementadoù bras a gemmoù a seller outo evel pajennoù zo gwelloc'h an danvez anezho.", # Fuzzy
	'contributionscores-top' => '(An $1 uhelañ)',
	'contributionscores-days' => 'E-kerzh an {{PLURAL:$1|devezh|$1 devezh}} diwezhañ',
	'contributionscores-allrevisions' => 'A-viskoazh',
	'contributionscores-score' => 'Skor',
	'contributionscores-pages' => 'Pajennoù',
	'contributionscores-changes' => 'Kemmoù',
	'contributionscores-username' => 'Anv implijer',
	'contributionscores-invalidusername' => 'Anv implijer direizh',
	'contributionscores-invalidmetric' => 'Muzul direizh',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'contributionscores' => 'Rezultat doprinosa',
	'contributionscores-desc' => 'Upit u wiki bazu podataka za najveći [[Special:ContributionScores|količinski korisnički doprinos]]',
	'contributionscores-info' => 'Rezultati se računaju na slijedeći naćin:
*Jedan (1) bod za svaku pojedinu stranicu koja se uredi
*Drugi korijen od (ukupno načinjenih promjena) - (ukupno pojedinih stranica) * 2
Rezultati koji se dobiju na ovaj način naglašavaju raznolikost uređivanja više od količine uređivanja.
U osnovi, ovaj rezultat mjeri naročito broj uređivanja pojedinačnih stranica, sa utjecajem velike količine uređivanja - smatra se da utječe na bolji kvalitet stranice.', # Fuzzy
	'contributionscores-top' => '(Najboljih $1)',
	'contributionscores-days' => '{{PLURAL:$1|Zadnji $1 dan|Zadnja $1 dana|Zadnjih $1 dana}}',
	'contributionscores-allrevisions' => 'Svo vrijeme',
	'contributionscores-score' => 'Rezultat',
	'contributionscores-pages' => 'Stranice',
	'contributionscores-changes' => 'Izmjene',
	'contributionscores-username' => 'Korisničko ime',
	'contributionscores-invalidusername' => 'Nevaljano korisničko ime',
	'contributionscores-invalidmetric' => 'Nevaljana mjera',
);

/** Catalan (català)
 * @author Jordi Roqué
 * @author SMP
 * @author Solde
 */
$messages['ca'] = array(
	'contributionscores' => 'Punts de contribució',
	'contributionscores-desc' => 'Valora les edicions en cerca dels [[Special:ContributionScores|usuaris amb més volum de contribucions]]',
	'contributionscores-info' => "La puntuació es calcula de la manera següent:
* Un punt per cada pàgina diferent editada, més
*El doble de l'arrel quadrada de: el total d'edicions fetes menys el total de pàgines diferents editades.
Aquesta fórmula premia la diversitat d'edicions més que no el seu volum.
Bàsicament, mesura el nombre de pàgines diferents editades, amb consideració per els alts volums d'edició considerats de pàgines de més qualitat.", # Fuzzy
	'contributionscores-top' => '($1 millors)',
	'contributionscores-days' => '{{PLURAL:$1|Últim dia|Últims $1 dies}}',
	'contributionscores-allrevisions' => 'Des de sempre',
	'contributionscores-score' => 'Puntuació',
	'contributionscores-pages' => 'Pàgines',
	'contributionscores-changes' => 'Canvis',
	'contributionscores-username' => "Nom d'usuari",
	'contributionscores-invalidusername' => "Nom d'usuari no vàlid",
	'contributionscores-invalidmetric' => 'Mètrica invàlida',
);

/** Chechen (нохчийн)
 * @author Sasan700
 */
$messages['ce'] = array(
	'contributionscores-top' => '(диканаш $1)',
	'contributionscores-allrevisions' => 'Массо нисдарш', # Fuzzy
	'contributionscores-username' => 'Декъашхон цlе',
);

/** Sorani Kurdish (کوردی)
 * @author Calak
 */
$messages['ckb'] = array(
	'contributionscores-pages' => 'پەڕەکان',
);

/** Czech (česky)
 * @author Li-sung
 * @author Matěj Grabovský
 * @author Mormegil
 */
$messages['cs'] = array(
	'contributionscores' => 'Skóre příspěvků',
	'contributionscores-desc' => 'Zjišťuje největší [[Special:ContributionScores|objem uživatelských příspěvků]] z databáze wiki',
	'contributionscores-info' => 'Skóre se počítá následovně:
* 1 bod za každou jedinečnou stránku, kterou uživatel upravoval
* Odmocnina z (celkem úprav) - (celkem jedinečných stránek) * 2
Skóre vypočítané tímto způsobem upřednostňuje rozmanitost úprav více než počet úprav.
V podstatě toto skóre měří hlavně počet upravovaných jedinečných stránek s přihlédnutím na velký počet úprav, což se pokládá za stránku vyšší kvality.', # Fuzzy
	'contributionscores-top' => '($1 nejvyšších)',
	'contributionscores-days' => '{{PLURAL:$1|Poslední den|Poslední $1 dny|Posledních $1 dnů}}',
	'contributionscores-allrevisions' => 'Celá historie',
	'contributionscores-score' => 'Skóre',
	'contributionscores-pages' => 'Stránky',
	'contributionscores-changes' => 'Změny',
	'contributionscores-username' => 'Uživatelské jméno',
	'contributionscores-invalidusername' => 'Neplatné uživatelské jméno',
	'contributionscores-invalidmetric' => 'Neplatná metrika',
);

/** Church Slavic (словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'contributionscores-pages' => 'страницѧ',
	'contributionscores-username' => 'по́льꙃєватєлꙗ и́мѧ',
);

/** Danish (dansk)
 * @author Byrial
 * @author Christian List
 * @author Kaare
 * @author Peter Alberti
 */
$messages['da'] = array(
	'contributionscores' => 'Bidragspoint',
	'contributionscores-desc' => 'Henter information fra databasen om de brugere som har [[Special:ContributionScores|flest bidrag]]',
	'contributionscores-info' => 'Pointene måler primært unikke sideredigeringer, med hensyntagen til højt antal redigeringer.',
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => 'Sidste {{PLURAL:$1|dag|$1 dage}}',
	'contributionscores-allrevisions' => 'Gennem tiden',
	'contributionscores-score' => 'Point',
	'contributionscores-pages' => 'Sider',
	'contributionscores-changes' => 'Ændringer',
	'contributionscores-username' => 'Brugernavn',
	'contributionscores-invalidusername' => 'Ugyldigt brugernavn',
	'contributionscores-invalidmetric' => 'Ugyldig målemetode',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Merlissimo
 * @author Metalhead64
 * @author Raimond Spekking
 */
$messages['de'] = array(
	'contributionscores' => 'Statistik zu Benutzern',
	'contributionscores-desc' => 'Ergänzt eine [[Special:ContributionScores|Spezialseite]] zum Abfragen der Datenbank des Wikis bezüglich der Benutzer mit den meisten Beiträgen',
	'contributionscores-info' => 'In die Bewertung fließen hauptsächlich einmalig bearbeitete Seiten unter Berücksichtigung einer hohen Bearbeitungszahl ein.',
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => '{{PLURAL:$1|Letzter Tag|Letzte $1 Tage}}',
	'contributionscores-allrevisions' => 'Gesamter Zeitraum',
	'contributionscores-score' => 'Bewertung',
	'contributionscores-pages' => 'Seiten',
	'contributionscores-changes' => 'Änderungen',
	'contributionscores-username' => 'Benutzername',
	'contributionscores-invalidusername' => 'Ungültiger Benutzername',
	'contributionscores-invalidmetric' => 'Ungültige Metrik',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'contributionscores' => 'Skorê iştıraqan',
	'contributionscores-desc' => 'Qandê tewr berz malumat de wiki de  [[Special:ContributionScores|dekerdenanê karberan]] persêno',
	'contributionscores-info' => 'Ebe pawıtışê hecmê tedqiqê berzi ra, puwan raveri pelanê bêemsalanê vurniyayeyan senceno.',
	'contributionscores-top' => '(Tewr Gırde $1)',
	'contributionscores-days' => 'Peyni {{PLURAL:$1|roce|$1 rocan}}',
	'contributionscores-allrevisions' => 'Çaxan de hemi',
	'contributionscores-score' => 'Skor',
	'contributionscores-pages' => 'Peli',
	'contributionscores-changes' => 'Vurnayışi',
	'contributionscores-username' => 'Nameyê karberi',
	'contributionscores-invalidusername' => 'Şahtiyaye namey karberi',
	'contributionscores-invalidmetric' => 'Şahtiyaye metrik',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'contributionscores' => 'Pśinoski pógódnośiś',
	'contributionscores-desc' => 'Napšašujo se wikijoweje datoweje banki za nejwušeju [[Special:ContributionScores|licbu wužywarskich pśinoskow]]',
	'contributionscores-info' => 'Licba dypkow měri w prědnem rěźe raz wobźěłane boki na zakłaźe wusokeje licby změnow.',
	'contributionscores-top' => '({{PLURAL:$1|Nejlěpšy $1|Nejlěpšej $1|Nejlěpše $1|Nejlěpšych $1}})',
	'contributionscores-days' => '{{PLURAL:$1|Slědny $1 źeń|Slědnej $1 dnja|Slědne $1 dny|Slědnych $1 dnjow}}',
	'contributionscores-allrevisions' => 'Ceły cas',
	'contributionscores-score' => 'Pógódnośenje',
	'contributionscores-pages' => 'Boki',
	'contributionscores-changes' => 'Změny',
	'contributionscores-username' => 'Wužywarske mě',
	'contributionscores-invalidusername' => 'Njepłaśiwe wužywarske mě',
	'contributionscores-invalidmetric' => 'Njepłaśiwa metrika',
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Crazymadlover
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'contributionscores' => 'Αποτελέσματα Συνεισφοράς',
	'contributionscores-desc' => 'Εξετάζει την βάση δεδομένων βίκι για τον σημαντικότερο [[Special:ContributionScores|όγκο συνεισφορών χρήστη]]',
	'contributionscores-top' => '(Πρώτοι $1)',
	'contributionscores-days' => 'Τελευταίες {{PLURAL:$1|ημέρα|$1 ημέρες}}',
	'contributionscores-allrevisions' => 'Όλων των εποχών',
	'contributionscores-score' => 'Βαθμολογία',
	'contributionscores-pages' => 'Σελίδες',
	'contributionscores-changes' => 'Αλλαγές',
	'contributionscores-username' => 'Όνομα χρήστη',
	'contributionscores-invalidusername' => 'Μη έγκυρο όνομα χρήστη',
	'contributionscores-invalidmetric' => 'Μη έγκυρη μετρική',
);

/** Esperanto (Esperanto)
 * @author Michawiki
 * @author Yekrats
 */
$messages['eo'] = array(
	'contributionscores' => 'Poentaro de Kontribuoj',
	'contributionscores-desc' => 'Informmendas la vikian datumbazon por la plej [[Special:ContributionScores|oftaj kontribuantoj]]',
	'contributionscores-info' => 'Poentaroj estas donataj jene:
*Unu (1) poento por ĉiu unika paĝo redaktata
*Kvadrata Radiko de (Tutaj Faritaj Redaktoj) - (Tutaj Unikaj Paĝoj) * 2
Poentaroj kalkulitaj laŭ ĉi tiu maniero pezos redaktan diversecon super redaktan volumon.
Baze, ĉi tiu poentaro mezuras ĉefe unikajn paĝojn redaktitajn, kun konsidero por altaj redakto-volumon - supozita esti pli altkvalita paĝo.', # Fuzzy
	'contributionscores-top' => '(Plej alta $1)',
	'contributionscores-days' => '{{PLURAL:$1|Lasta tago|Lastaj $1 tagoj}}',
	'contributionscores-allrevisions' => 'Ĉiame',
	'contributionscores-score' => 'Poentaro',
	'contributionscores-pages' => 'Paĝoj',
	'contributionscores-changes' => 'Ŝanĝoj',
	'contributionscores-username' => 'Salutnomo',
	'contributionscores-invalidusername' => 'Nevalida salutnomo',
	'contributionscores-invalidmetric' => 'Nevalida parametro',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Crazymadlover
 * @author Imre
 * @author Sanbec
 */
$messages['es'] = array(
	'contributionscores' => 'Puntuaciones de contribuciones',
	'contributionscores-desc' => 'Encuesta la base de datos del wiki para el mas alto [[Special:ContributionScores|volumen de contribuciones del usuario]]',
	'contributionscores-info' => 'Básicamente, la puntuación mide las páginas únicas editadas, teniendo en cuenta el alto volumen de ediciones.',
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => 'Últimos {{PLURAL:$1|día|$1 días}}',
	'contributionscores-allrevisions' => 'Todo el tiempo',
	'contributionscores-score' => 'Valoración',
	'contributionscores-pages' => 'Páginas',
	'contributionscores-changes' => 'Cambios',
	'contributionscores-username' => 'Nombre de usuario',
	'contributionscores-invalidusername' => 'Nombre de usuario no válido',
	'contributionscores-invalidmetric' => 'Medida inválida',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'contributionscores' => 'Kaastööpunktid',
	'contributionscores-desc' => 'Teeb viki andmekogust järelepärimise [[Special:ContributionScores|kasutajate kaastööde hulga]] kohta.',
	'contributionscores-info' => 'Need punktid lähtuvad eeskätt erinevate redigeeritud lehekülgede arvust ja võtavad arvesse ka redigeerimiste koguarvu.',
	'contributionscores-top' => '($1 paremat)',
	'contributionscores-days' => '{{PLURAL:$1|Viimane päev|Viimased $1 päeva}}',
	'contributionscores-allrevisions' => 'Kõik aeg',
	'contributionscores-score' => 'Punkte',
	'contributionscores-pages' => 'Lehekülgi',
	'contributionscores-changes' => 'Muudatusi',
	'contributionscores-username' => 'Kasutajanimi',
	'contributionscores-invalidusername' => 'Vigane kasutajanimi',
);

/** Basque (euskara)
 * @author Kobazulo
 */
$messages['eu'] = array(
	'contributionscores-days' => 'Azken {{PLURAL:$1|eguna|$1 egunak}}',
	'contributionscores-pages' => 'Orrialdeak',
	'contributionscores-changes' => 'Aldaketak',
	'contributionscores-username' => 'Erabiltzaile izena',
);

/** Extremaduran (estremeñu)
 * @author Better
 */
$messages['ext'] = array(
	'contributionscores-days' => 'Úrtimus $1 dias', # Fuzzy
);

/** Persian (فارسی)
 * @author Huji
 * @author Mjbmr
 * @author Tofighi
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'contributionscores' => 'امتیاز مشارکت',
	'contributionscores-desc' => 'سرشماری پایگاه داده ویکی برای بالاترین [[Special:ContributionScores|حجم مشارکت کاربر]]',
	'contributionscores-info' => 'امتیازات به شیوه زیر محاسبه می‌شود:
*یک (1) امتیاز برای هر صفحه یکتای ویرایش شده
جذر همه ویرایش‌ها (همه ویرایش‌های انجام‌شده) - (همه صفحه‌ها یکتا) * 2

محاسبه امتیازات در این حالت وزن گوناگونی ویرایشها بر حجم ویرایشها را می سنجد.
براین اساس، این امتیاز میزان صفحه‌ها ویرایش شده را با توجه به حجم ویرایش با فرض صفحه با کیفیت تر می سنجد.', # Fuzzy
	'contributionscores-top' => '($1 برتر)',
	'contributionscores-days' => 'آخرین {{PLURAL:$1|روز|$1 روز}}',
	'contributionscores-allrevisions' => 'تمام وقت',
	'contributionscores-score' => 'امتیاز',
	'contributionscores-pages' => 'صفحه‌ها',
	'contributionscores-changes' => 'تغییرات',
	'contributionscores-username' => 'نام کاربری',
	'contributionscores-invalidusername' => 'نام کاربری نامعتبر',
	'contributionscores-invalidmetric' => 'متریک نامعتبر',
);

/** Finnish (suomi)
 * @author Crt
 * @author Nike
 * @author Str4nd
 */
$messages['fi'] = array(
	'contributionscores' => 'Muokkauspisteet',
	'contributionscores-info' => 'Pisteet lasketaan seuraavalla kaavalla:
* Yksi piste jokaisesta muokatusta sivusta
* Neliöjuuri (muokkausten määrä) - (muokatut sivut) * 2

Näin laskettuna pisteet painottavat monipuolisuutta määrän sijaan. Käytännössä pisteet mittaavat muokattujen sivujen määrää, ottaen huomioon muutosten suuren määrän.', # Fuzzy
	'contributionscores-top' => '(top $1)',
	'contributionscores-days' => '{{PLURAL:$1|Viime päivä|Viimeiset $1 päivää}}',
	'contributionscores-allrevisions' => 'Kaikki muutokset', # Fuzzy
	'contributionscores-score' => 'Pisteet',
	'contributionscores-pages' => 'Sivuja',
	'contributionscores-changes' => 'Muutoksia',
	'contributionscores-username' => 'Käyttäjätunnus',
	'contributionscores-invalidusername' => 'Virheellinen käyttäjätunnus',
);

/** French (français)
 * @author Gomoko
 * @author Grondin
 * @author IAlex
 * @author Peter17
 * @author Sherbrooke
 * @author Urhixidur
 * @author Verdy p
 */
$messages['fr'] = array(
	'contributionscores' => 'Pointage des contributions',
	'contributionscores-desc' => 'Scrute la base de données wiki pour les plus importants [[Special:ContributionScores|volumes de contribution des utilisateurs]]',
	'contributionscores-info' => 'Le score mesure en priorité les pages uniques modifiées, en prenant en compte les gros volumes de modification.',
	'contributionscores-top' => '(Les $1 plus élevés)',
	'contributionscores-days' => 'Dans {{PLURAL:$1|le dernier jour|les derniers $1 jours}}',
	'contributionscores-allrevisions' => 'Tout le temps',
	'contributionscores-score' => 'Pointage',
	'contributionscores-pages' => 'Pages',
	'contributionscores-changes' => 'Changements',
	'contributionscores-username' => 'Nom d’utilisateur',
	'contributionscores-invalidusername' => 'Nom d’utilisateur invalide',
	'contributionscores-invalidmetric' => 'Métrique incorrecte',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'contributionscores' => 'Mârques de les contribucions',
	'contributionscores-top' => '(Les $1 ples hôtes)',
	'contributionscores-days' => 'Dens {{PLURAL:$1|lo jorn passâ|los $1 jorns passâs}}',
	'contributionscores-allrevisions' => 'Tot lo temps',
	'contributionscores-score' => 'Mârca',
	'contributionscores-pages' => 'Pâges',
	'contributionscores-changes' => 'Changements',
	'contributionscores-username' => 'Nom d’utilisator',
	'contributionscores-invalidusername' => 'Nom d’usanciér envalido',
	'contributionscores-invalidmetric' => 'Mètrica fôssa',
);

/** Western Frisian (Frysk)
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'contributionscores-username' => 'Meidoggernamme',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'contributionscores-pages' => 'Leathanaigh',
	'contributionscores-username' => 'Ainm úsáideora',
);

/** Galician (galego)
 * @author Alma
 * @author Toliño
 * @author Xosé
 */
$messages['gl'] = array(
	'contributionscores' => 'Puntuación das contribucións',
	'contributionscores-desc' => 'Escruta a base de datos do wiki para ver os maiores [[Special:ContributionScores|volumes de contribucións dos usuarios]]',
	'contributionscores-info' => 'Basicamente, a puntuación mide as páxinas únicas editadas, tendo en conta o alto volume de edicións.',
	'contributionscores-top' => '(os $1 que máis)',
	'contributionscores-days' => '{{PLURAL:$1|O último día|Os últimos $1 días}}',
	'contributionscores-allrevisions' => 'Desde sempre',
	'contributionscores-score' => 'Puntuación',
	'contributionscores-pages' => 'Páxinas',
	'contributionscores-changes' => 'Cambios',
	'contributionscores-username' => 'Nome de usuario',
	'contributionscores-invalidusername' => 'Nome de usuario inválido',
	'contributionscores-invalidmetric' => 'Métrica inválida',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'contributionscores' => 'Βαθμολογία ἐράνων',
	'contributionscores-top' => '(Κορυφαῖοι $1)',
	'contributionscores-days' => '{{PLURAL:$1|Ὑστάτη ἡμέρα|Ὕσταται $1 ἡμέραι}}',
	'contributionscores-allrevisions' => 'Ἅπασαι αἱ ἀναθεωρήσεις', # Fuzzy
	'contributionscores-score' => 'Βαθμοί',
	'contributionscores-pages' => 'Δέλτοι',
	'contributionscores-changes' => 'Μεταβολαί',
	'contributionscores-username' => 'Ὄνομα χρωμένου',
	'contributionscores-invalidusername' => 'Ἄκυρον ὄνομα χρωμένου',
	'contributionscores-invalidmetric' => 'Ἄκυρος μετρική',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'contributionscores' => 'Aazahl vu dr Benutzerbyyträg',
	'contributionscores-desc' => 'Abfrog vu dr Wiki-Datebank no dr Aazahl vu dr [[Special:ContributionScores|Benutzerbyyträg]]',
	'contributionscores-info' => 'Bewärtigsschema:
*1 Punkt fir jedi bearbeiteti Syte
*Quadratwurzle vu allene (Bearbeitige) - (Summe vu dr bearbeitete Syte) * 2
Bewärtigen uf däre Grundlag gän dr Viifalt vu dr Byyträg e hecher Gwicht wie dr Aazahl vu dr Änderige.', # Fuzzy
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => '{{PLURAL:$1|Letschte Tag|Letschti $1 Täg}}',
	'contributionscores-allrevisions' => 'Ganzer Zitruum',
	'contributionscores-score' => 'Wärt',
	'contributionscores-pages' => 'Syte',
	'contributionscores-changes' => 'Änderige',
	'contributionscores-username' => 'Benutzername',
	'contributionscores-invalidusername' => 'Nit giltige Benutzername',
	'contributionscores-invalidmetric' => 'Nit giltigi Metrik',
);

/** Gujarati (ગુજરાતી)
 * @author Dineshjk
 */
$messages['gu'] = array(
	'contributionscores-pages' => 'પાનાં',
	'contributionscores-username' => 'સભ્ય નામ',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'contributionscores-score' => 'Skensh',
	'contributionscores-pages' => 'Duillagyn',
	'contributionscores-username' => 'Ennym yn ymmydeyr',
);

/** Hakka (Hak-kâ-fa)
 * @author Hakka
 */
$messages['hak'] = array(
	'contributionscores-username' => 'Yung-fu-miàng',
);

/** Hebrew (עברית)
 * @author Agbad
 * @author Amire80
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'contributionscores' => 'ניקוד תורמים',
	'contributionscores-desc' => 'בדיקת בסיס הנתונים של הוויקי למציאת [[Special:ContributionScores|נפח תרומת המשתמשים]] הגבוה ביותר',
	'contributionscores-info' => 'החישוב מתבסס בעיקר על מספר הדפים הייחודיים שנערכו ועל קצב העריכות.',
	'contributionscores-top' => '($1 הגבוהים ביותר)',
	'contributionscores-days' => 'ב{{PLURAL:$1|יום האחרון|יומיים האחרונים|־$1 הימים האחרונים}}',
	'contributionscores-allrevisions' => 'מאז ומתמיד',
	'contributionscores-score' => 'ניקוד',
	'contributionscores-pages' => 'דפים',
	'contributionscores-changes' => 'שינויים',
	'contributionscores-username' => 'שם משתמש',
	'contributionscores-invalidusername' => 'שם משתמש בלתי תקין',
	'contributionscores-invalidmetric' => 'מדידה בלתי תקינה',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Kaustubh
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'contributionscores' => 'योगदान संख्या',
	'contributionscores-desc' => '[[Special:ContributionScores|सदस्य योगदान संख्या]]के अनुसार विकि डाटाबेस दर्शाता हैं',
	'contributionscores-top' => '(पहले $1)',
	'contributionscores-days' => 'आखिरी $1 दिन', # Fuzzy
	'contributionscores-allrevisions' => 'सभी अवतरण', # Fuzzy
	'contributionscores-score' => 'गुण',
	'contributionscores-pages' => 'पृष्ठ',
	'contributionscores-changes' => 'बदलाव',
	'contributionscores-username' => 'सदस्यनाम',
	'contributionscores-invalidusername' => 'अमान्य सदस्यनाम',
);

/** Hiligaynon (Ilonggo)
 * @author Jose77
 */
$messages['hil'] = array(
	'contributionscores-username' => 'Ngalan sang Manog-gamit',
);

/** Croatian (hrvatski)
 * @author Dalibor Bosits
 * @author Ex13
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'contributionscores' => 'Najbolji suradnici',
	'contributionscores-desc' => 'Šalje upit bazi podataka za najveći [[Special:ContributionScores|broj suradničkih doprinosa]]',
	'contributionscores-info' => 'Rezultat se dobiva kao suma slijedećih stavki:
*1 bod za svaku stranicu koju ste uređivali
* (kvadratni) korijen iz (broja ukupnih uređivanja) - (broja stranica koje ste uređivali) * 2

Rezultat dobiven na ovaj način daje veću težinu broju uređivanja različitih stranica nego ukupnom broju uređivanja. U osnovi, ovakav rezultat mjeri prvenstveno broj različitih stranica koje ste uređivali, uzimajući u obzir broj uređivanja, jer veći broj uređivanja na nekom članku daje kvalitetniji članak.', # Fuzzy
	'contributionscores-top' => '(Najboljih $1)',
	'contributionscores-days' => '{{PLURAL:$1|Zadnji dan|Zadnjih $1 dana}}',
	'contributionscores-allrevisions' => 'Sva uređivanja', # Fuzzy
	'contributionscores-score' => 'Rezultat',
	'contributionscores-pages' => 'Stranica',
	'contributionscores-changes' => 'Uređivanja',
	'contributionscores-username' => 'Ime suradnika',
	'contributionscores-invalidusername' => 'Nevaljano suradničko ime',
	'contributionscores-invalidmetric' => 'Nevaljana metrika',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'contributionscores' => 'Wuhódnoćenje přinoškow',
	'contributionscores-desc' => 'Wuslědźi najwyši [[Special:ContributionScores|wobjim wužiwarskich přinoškow]] w datowej bance wikiprojekta',
	'contributionscores-info' => 'Ličba dypkow měri w prěnim rjedźe jónkróć wobdźěłane strony na zakładźe wysokeje ličby změnow.',
	'contributionscores-top' => '(Najlěpšich $1)',
	'contributionscores-days' => '{{PLURAL:$1|Posledni dźeń|Poslednjej $1 dnjej|Poslednje $1 dny|Poslednich $1 dnjow}}',
	'contributionscores-allrevisions' => 'Cyły čas',
	'contributionscores-score' => 'Hódnoćenje',
	'contributionscores-pages' => 'Strony',
	'contributionscores-changes' => 'Změny',
	'contributionscores-username' => 'Wužiwarske mjeno',
	'contributionscores-invalidusername' => 'Njepłaćiwe wužiwarske mjeno',
	'contributionscores-invalidmetric' => 'Njepłaćiwa metrika',
);

/** Haitian (Kreyòl ayisyen)
 * @author Boukman
 * @author Jvm
 */
$messages['ht'] = array(
	'contributionscores' => 'Nòt pou kontribisyon yo',
	'contributionscores-desc' => 'Sonde bazdone wiki a pou pi gwo [[Special:ContributionScores|kantite kontribisyon pa itilizatè]]',
	'contributionscores-info' => 'Nòt yo kalkile konsa:
*Yon (1) pwen pou chak paj inik ki te modifye
*Rasin Kare de (kantite modifikasyon total ki te fè) - (Total Paj Inik) * 2
Se konsa, nòt la bay plis pwa pou divèsite modifikasyon pase kantite modifikasyon yo.
Sa vle di nòt sa la pou mezire paj inik ki te modifye an premye, avèk yon konsiderasyon pou gwo volim modifikasyon – ki konsidere kòm ap bay yon paj ki gen pi bon kalite.', # Fuzzy
	'contributionscores-top' => '(Meyè $1 yo)',
	'contributionscores-days' => 'Denyè {{PLURAL:$1|jou|$1 jou yo}}',
	'contributionscores-allrevisions' => 'Tout revizion yo', # Fuzzy
	'contributionscores-score' => 'Nòt',
	'contributionscores-pages' => 'Paj',
	'contributionscores-changes' => 'Chanjman',
	'contributionscores-username' => 'Non itilizatè',
	'contributionscores-invalidusername' => 'Non itilizatè a pa bon',
	'contributionscores-invalidmetric' => 'Metrik envalid',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Dj
 * @author Glanthor Reviol
 * @author Shirayuki
 */
$messages['hu'] = array(
	'contributionscores' => 'Szerkesztési pontszám',
	'contributionscores-desc' => 'Megjeleníti a [[Special:ContributionScores|szerkesztő közreműködéseinek súlyát]] a wiki adatbázisa alapján',
	'contributionscores-info' => 'A pontszámok az alábbi módon vannak kiszámolva:

* 1 pont minden egyedi lap szerkesztése után
* (az összes szerkesztés) – (az összes egyedi lap) négyzetgyöke × 2

Az így számolt pontszámok a szerkesztés sokszínűségét mutatják a szerkesztés mennyisége helyett. Alapjában véve a pontszám az egyedi szerkesztett lapok számát mutatja, figyelembe véve a nagy szerkesztési számokat – feltételezve a jobb minőségű lapokat.', # Fuzzy
	'contributionscores-top' => '(legjobb $1)',
	'contributionscores-days' => 'Utolsó {{PLURAL:$1|nap|$1 nap}}',
	'contributionscores-allrevisions' => 'Összes szerkesztés',
	'contributionscores-score' => 'Pontszám',
	'contributionscores-pages' => 'Oldalak',
	'contributionscores-changes' => 'Változtatások',
	'contributionscores-username' => 'Felhasználónév',
	'contributionscores-invalidusername' => 'Érvénytelen szerkesztői név',
	'contributionscores-invalidmetric' => 'Érvénytelen mértékrendszer',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'contributionscores' => 'Punctage de contributiones',
	'contributionscores-desc' => 'Consulta le base de datos wiki pro le [[Special:ContributionScores|usatores contribuente le plus]]',
	'contributionscores-info' => 'Le punctages se calcula del modo sequente:
*Un (1) puncto pro cata pagina unic modificate
*Radice quadrate de (total del modificationes facite) - (total del paginas unic) * 2
Le punctages calculate de iste modo privilegia le diversitate super le volumine de modificationes.
Dicite de altere modo, iste punctage mesura primarimente le paginas unic modificate, con consideration pro un alte volumine de modificationes – le qual es presumite a indicar un pagina de alte qualitate.', # Fuzzy
	'contributionscores-top' => '(Le prime $1)',
	'contributionscores-days' => 'Ultime $1 {{PLURAL:$1|die|dies}}',
	'contributionscores-allrevisions' => 'Omne tempore',
	'contributionscores-score' => 'Punctage',
	'contributionscores-pages' => 'Paginas',
	'contributionscores-changes' => 'Modificationes',
	'contributionscores-username' => 'Nomine de usator',
	'contributionscores-invalidusername' => 'Nomine de usator invalide',
	'contributionscores-invalidmetric' => 'Metrica invalide',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 * @author Rex
 */
$messages['id'] = array(
	'contributionscores' => 'Skor kontribusi',
	'contributionscores-desc' => 'Menghitung [[Special:ContributionScores|jumlah kontribusi pengguna]] terbanyak di basis data wiki',
	'contributionscores-info' => 'Skor dihitung dengan cara berikut:
* Satu (1) poin untuk setiap halaman tunggal yang disunting
* Akar kuadrat dari (total suntingan) - (total halaman tunggal) * 2
Skor dihitung dengan cara ini untuk menghasilkan jumlah tertimbang penyuntingan berbanding volume suntingan.
Pada dasarnya, skor ini menghitung jumlah halaman tunggal yang disunting, dengan pertimbangan di mana volume suntingan yang tinggi - diasumsikan sebagai halaman dengan kualitas lebih tinggi.', # Fuzzy
	'contributionscores-top' => '($1 tertinggi)',
	'contributionscores-days' => '{{PLURAL:$1|Hari|$1 hari}} terakhir',
	'contributionscores-allrevisions' => 'Sepanjang masa',
	'contributionscores-score' => 'Skor',
	'contributionscores-pages' => 'Halaman',
	'contributionscores-changes' => 'Perubahan',
	'contributionscores-username' => 'Nama pengguna',
	'contributionscores-invalidusername' => 'Nama pengguna tidak sah',
	'contributionscores-invalidmetric' => 'Metrik tidak sah',
);

/** Interlingue (Interlingue)
 * @author Renan
 */
$messages['ie'] = array(
	'contributionscores' => 'Contes de contribution',
	'contributionscores-desc' => 'Calcula li funde de data del wiki por max alt [[Special:ContributionScores|volúmine de contribution de usator]]',
	'contributionscores-info' => 'Contes es calculat quam seque:
*Un (1) punctu por chascun págine unic redactet
*Fonte de quadrat de (total de redactiones fat) - (total unique pages) * 2
Contes calculat in ti diversitá de redaction in pesa maniere súper de volúmine de redaction.
Basicmen, ti conte mesura primarimen págines unic redactet, che consideration por alt volúmine de redaction - suposit esser un págine de alt qualitá.', # Fuzzy
	'contributionscores-top' => '(Prim $1)',
	'contributionscores-days' => 'Ultim {{PLURAL:$1|die|$1 dies}}',
	'contributionscores-allrevisions' => 'Omni témpor',
	'contributionscores-score' => 'Conte',
	'contributionscores-pages' => 'Págines',
	'contributionscores-changes' => 'Changes',
	'contributionscores-username' => 'Nómine de usator',
	'contributionscores-invalidusername' => 'Nómine de usator ínvalid',
	'contributionscores-invalidmetric' => 'Metric ínvalid',
);

/** Iloko (Ilokano)
 * @author Saluyot
 */
$messages['ilo'] = array(
	'contributionscores' => 'Dagiti Bilang ti Naaramidan',
);

/** Icelandic (íslenska)
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'contributionscores' => 'Framleggjandastig',
	'contributionscores-desc' => 'Kannar wiki-gagnagrunninn eftir mesta [[Special:ContributionScores|magni framlaga notenda]]',
	'contributionscores-info' => 'Stigin eru reiknuð á eftirfarandi hátt:
* Eitt (1) stig fyrir hverja einkvæma síðu sem breytt er
* Ferningsrót (allra breytinga gerðra) - (allra breytinga gerðra á einkvæmum síðum) * 2
Stig reiknuð á þennan hátt íþyngja fjölbreyttni breytinga fremur en magn breytinga.
Í grundvallaratriðum mæla stigin aðallega út breytingar á einkvæmum síðum, með tilliti til hás magns breytinga - sem eru líklegri til að vera vandaðri síður.', # Fuzzy
	'contributionscores-top' => '(Efstu $1)',
	'contributionscores-days' => 'Síðustu $1 dagana', # Fuzzy
	'contributionscores-allrevisions' => 'Allar breytingar', # Fuzzy
	'contributionscores-score' => 'Stigafjöldi',
	'contributionscores-pages' => 'Síður',
	'contributionscores-changes' => 'Breytingar',
	'contributionscores-username' => 'Notandanafn',
);

/** Italian (italiano)
 * @author Beta16
 * @author BrokenArrow
 * @author Darth Kule
 * @author Gianfranco
 * @author Pietrodn
 * @author Rippitippi
 */
$messages['it'] = array(
	'contributionscores' => 'Punteggi contributi',
	'contributionscores-desc' => 'Interroga il database wiki per il più alto [[Special:ContributionScores|volume di contributi utente]]',
	'contributionscores-info' => 'Questo punteggio misura in primo luogo il numero di pagine distinte modificate, valutando anche un alto volume di contributi.',
	'contributionscores-top' => '(Migliori $1)',
	'contributionscores-days' => '{{PLURAL:$1|Ultimo giorno|Ultimi $1 giorni}}',
	'contributionscores-allrevisions' => 'Tutte le revisioni',
	'contributionscores-score' => 'Punteggio',
	'contributionscores-pages' => 'Pagine',
	'contributionscores-changes' => 'Modifiche',
	'contributionscores-username' => 'Nome utente',
	'contributionscores-invalidusername' => 'Nome utente non valido',
	'contributionscores-invalidmetric' => 'Metrica non valida',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author JtFuruhata
 * @author Schu
 * @author Shirayuki
 */
$messages['ja'] = array(
	'contributionscores' => '貢献得点',
	'contributionscores-desc' => 'ウィキデータベースへの[[Special:ContributionScores|貢献度が高い利用者]]の統計',
	'contributionscores-info' => '得点では、編集したページ数を主に評価し、さらに編集回数の多さにも配慮します。',
	'contributionscores-top' => '(上位$1名)',
	'contributionscores-days' => '{{PLURAL:$1|最近1日|最近$1日間}}',
	'contributionscores-allrevisions' => 'すべての期間',
	'contributionscores-score' => '得点',
	'contributionscores-pages' => 'ページ数',
	'contributionscores-changes' => '編集回数',
	'contributionscores-username' => '利用者名',
	'contributionscores-invalidusername' => '無効な利用者名',
	'contributionscores-invalidmetric' => '無効な尺度',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author Pras
 */
$messages['jv'] = array(
	'contributionscores' => 'Skor Kontribusi',
	'contributionscores-desc' => 'Nglakokaké polling (angkèt) ing basis data kanggo [[Special:ContributionScores|volume kontribusi panganggo]]',
	'contributionscores-info' => "Skoré diétung kaya mangkéné:
* Biji siji (1) per kaca unik sing disunting
* Oyot (bs. Indonesia ''akar'') saka (Gunggungé Suntingan) - (Gunggungé Kaca-KAca Unik) * 2
Skor sing diétung miturut cara iki bisa nyerminaké divèrsitas suntingan sadhuwuring volume suntingan.
Sacara dhasar, skor iki utamané ngétung kaca-kaca unik sing disunting, karo mélu nimbangaké volume suntingan dhuwur - diasumsèkaké kwalitas kacané luwih dhuwur.", # Fuzzy
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => '{{PLURAL:$1|dina|$1 dina}} pungkasan',
	'contributionscores-allrevisions' => 'Kabèh Révisi', # Fuzzy
	'contributionscores-score' => 'Skor',
	'contributionscores-pages' => 'Kaca-kaca',
	'contributionscores-changes' => 'Owah-owahan',
	'contributionscores-username' => 'Jeneng panganggo',
	'contributionscores-invalidusername' => 'Jeneng panganggo ora sah',
	'contributionscores-invalidmetric' => 'Metrik ora sah',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'contributionscores-top' => '(საუკეთესო $1)',
	'contributionscores-days' => 'ბოლო {{PLURAL:$1|დღე|$1 დღე}}',
	'contributionscores-allrevisions' => 'ყველა დროის',
	'contributionscores-score' => 'შეფასება',
	'contributionscores-pages' => 'გვერდები',
	'contributionscores-changes' => 'ცვლილებები',
	'contributionscores-username' => 'მომხმარებლის სახელი',
	'contributionscores-invalidusername' => 'არასწორი მომხმარებლის სახელი',
);

/** Kazakh (Arabic script) (قازاقشا (تٴوتە)‏)
 * @author Robby
 */
$messages['kk-arab'] = array(
	'contributionscores' => 'ٷلەس بەرۋ ەسەپتەرٸ',
	'contributionscores-info' => 'ەسەپتەر كەلەسٸ دەي سانالادى:
*1 ۇپاي ٵربٸر تٷزەتٸلگەن بٸرەگەي بەت ٷشٸن
*مىنانىڭ شارشى تٷبٸرٸ (بارلىق ٸستەلٸنگەن تٷزەتۋلەر) ‒ (بارلىق بٸرەگەي بەتتەر) * 2
وسى تٵسٸلمەن سانالعان ەسەپتەر تٷزەتۋ اۋقىمىنداعى ٶڭدەۋ ٵركەلكٸلٸگٸنٸڭ سالماعىن ٶلشەيدٸ. نەگٸزٸندە, بۇل ەسەپ الدىمەن تٷزەتٸلگەن بٸركەلكٸ بەتتەردٸ ٶلشەيدٸ, جوعارعى ٶڭدەۋ اۋقىمىمەن بٸرگە — جوعارى ساپالى بەت جاعدايىمەن ەسەپتەپ.', # Fuzzy
	'contributionscores-top' => '(جوعارعى $1)',
	'contributionscores-days' => 'سوڭعى $1 كٷندە', # Fuzzy
	'contributionscores-allrevisions' => 'بارلىق نۇسقالار', # Fuzzy
	'contributionscores-score' => 'ەسەپ',
	'contributionscores-pages' => 'بەتتەر',
	'contributionscores-changes' => 'ٶزگەرٸستەر',
	'contributionscores-username' => 'قاتىسۋشى اتى',
);

/** Kazakh (Cyrillic script) (қазақша (кирил)‎)
 */
$messages['kk-cyrl'] = array(
	'contributionscores' => 'Үлес беру есептері',
	'contributionscores-info' => 'Есептер келесі дей саналады:
*1 ұпай әрбір түзетілген бірегей бет үшін
*Мынаның шаршы түбірі (Барлық Істелінген Түзетулер) ‒ (Барлық Бірегей Беттер) * 2
Осы тәсілмен саналған есептер түзету ауқымындағы өңдеу әркелкілігінің салмағын өлшейді. Негізінде, бұл есеп алдымен түзетілген біркелкі беттерді өлшейді, жоғарғы өңдеу ауқымымен бірге — жоғары сапалы бет жағдайымен есептеп.', # Fuzzy
	'contributionscores-top' => '(Жоғарғы $1)',
	'contributionscores-days' => 'Соңғы $1 күнде', # Fuzzy
	'contributionscores-allrevisions' => 'Барлық нұсқалар', # Fuzzy
	'contributionscores-score' => 'Есеп',
	'contributionscores-pages' => 'Беттер',
	'contributionscores-changes' => 'Өзгерістер',
	'contributionscores-username' => 'Қатысушы аты',
);

/** Kazakh (Latin script) (qazaqşa (latın)‎)
 */
$messages['kk-latn'] = array(
	'contributionscores' => 'Üles berw esepteri',
	'contributionscores-info' => 'Esepter kelesi deý sanaladı:
*1 upaý ärbir tüzetilgen biregeý bet üşin
*Mınanıñ şarşı tübiri (Barlıq İstelingen Tüzetwler) ‒ (Barlıq Biregeý Better) * 2
Osı täsilmen sanalğan esepter tüzetw awqımındağı öñdew ärkelkiliginiñ salmağın ölşeýdi. Negizinde, bul esep aldımen tüzetilgen birkelki betterdi ölşeýdi, joğarğı öñdew awqımımen birge — joğarı sapalı bet jağdaýımen eseptep.', # Fuzzy
	'contributionscores-top' => '(Joğarğı $1)',
	'contributionscores-days' => 'Soñğı $1 künde', # Fuzzy
	'contributionscores-allrevisions' => 'Barlıq nusqalar', # Fuzzy
	'contributionscores-score' => 'Esep',
	'contributionscores-pages' => 'Better',
	'contributionscores-changes' => 'Özgerister',
	'contributionscores-username' => 'Qatıswşı atı',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'contributionscores' => 'តារាងពិន្ទុ​នៃការរួមចំណែក',
	'contributionscores-top' => '(លើគេទាំង $1 នាក់)',
	'contributionscores-days' => '{{PLURAL:$1|ថ្ងៃ|$1 ថ្ងៃ}}​ចុងក្រោយ',
	'contributionscores-allrevisions' => 'គ្រប់កំណែ', # Fuzzy
	'contributionscores-score' => 'ពិន្ទុ',
	'contributionscores-pages' => 'ទំព័រ​នានា',
	'contributionscores-changes' => 'បំលាស់ប្តូរ​នានា',
	'contributionscores-username' => 'អត្តនាម',
	'contributionscores-invalidusername' => 'អត្តនាមមិនត្រឹមត្រូវ',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 */
$messages['kn'] = array(
	'contributionscores-pages' => 'ಪುಟಗಳು',
);

/** Korean (한국어)
 * @author Shirayuki
 * @author 아라
 */
$messages['ko'] = array(
	'contributionscores' => '기여 점수',
	'contributionscores-desc' => '최고 [[Special:ContributionScores|사용자 기여 값]]에 대한 위키 데이터베이스 투표',
	'contributionscores-info' => '점수는 주로 높은 편집 품질을 고려하여 편집한 고유 문서 수를 측정합니다.',
	'contributionscores-top' => '(상위 $1)',
	'contributionscores-days' => '최근 $1일',
	'contributionscores-allrevisions' => '모든 기간',
	'contributionscores-score' => '점수',
	'contributionscores-pages' => '문서',
	'contributionscores-changes' => '바뀜',
	'contributionscores-username' => '사용자 이름',
	'contributionscores-invalidusername' => '잘못된 사용자 이름',
	'contributionscores-invalidmetric' => '잘못된 통계',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'contributionscores' => 'Metmaacher ier Beidräsch verjlesche',
	'contributionscores-desc' => 'Fingk de Metmaacher met de [[Special:ContributionScores|miihßte Beidrääsch]].',
	'contributionscores-info' => 'En de Houpsaach zälle de einzel ongerscheidlijje veränderte Sigge med enem Zohschlaach för wann vill Änderonge jemaat woodte.',
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => '{{PLURAL:$1|Der lezte Daach|De lezte $1 Daare|Keine lezte Daach}}',
	'contributionscores-allrevisions' => 'De janze Zigg',
	'contributionscores-score' => 'Punkte',
	'contributionscores-pages' => 'Sigge',
	'contributionscores-changes' => 'Änderonge',
	'contributionscores-username' => 'Metmaacher Name',
	'contributionscores-invalidusername' => 'Verkeehte Metmaacher-Name',
	'contributionscores-invalidmetric' => 'Onjöltesch Mohß',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'contributionscores-allrevisions' => 'Hemû dem',
	'contributionscores-pages' => 'Rûpel',
	'contributionscores-username' => 'Navê bikarhêner',
);

/** Cornish (kernowek)
 * @author Kw-Moon
 * @author Nrowe
 */
$messages['kw'] = array(
	'contributionscores-username' => 'Hanow usyer',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 */
$messages['lb'] = array(
	'contributionscores' => 'Bewäertung vun den Ännerungen',
	'contributionscores-desc' => "Ufro un d'Wiki-Datebank no den héichste [[Special:ContributionScores|Benotzerscoren]]",
	'contributionscores-info' => "D'Bewäertung moosst Zuel vu geännerte Säite a consideréiert d'Zuel vun den Ännerungen.",
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => '{{PLURAL:$1|Leschten Dag|Lescht $1 Deeg}}',
	'contributionscores-allrevisions' => 'Vun Ufank un',
	'contributionscores-score' => 'Bewäertung',
	'contributionscores-pages' => 'Säiten',
	'contributionscores-changes' => 'Ännerungen',
	'contributionscores-username' => 'Benotzernumm',
	'contributionscores-invalidusername' => 'Ongëltege Benotzernumm',
	'contributionscores-invalidmetric' => 'Ongëlteg Metrik',
);

/** Limburgish (Limburgs)
 * @author Aelske
 * @author Ooswesthoesbes
 * @author Pahles
 */
$messages['li'] = array(
	'contributionscores' => 'Biedraaghuuegdjes',
	'contributionscores-desc' => "Guuef 'n euverzich van [[Special:ContributionScores|gebroekers mit de meiste biedraag]] inne wiki.",
	'contributionscores-info' => "Huuegdjes waere es vólg beraekendj:
* Ein (1) pöntj veur edere apaart bewèrkdje pazjena
* Wórtel van (totaal aantal gemaakdje bewèrkinger) - (totaal aantal apaarte pazjena's) × 2
I huuegdjes die op dees wies beraekendj waere wäög divers bewèrkingsgedraag zwaorder es bewèrkingsvolume. In feite mèt dees huuegdje veurnamelik 't aantal apaarte pazjena's die zeen bewèrk, wiele 'n grót aantal bewèrkinger waal in ach wuuertj genaome, mit de aannaam det 't 'ne pazjena van 'n huuegere kwaliteit is.", # Fuzzy
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => '{{PLURAL:$1|Lesten daag|Leste $1 daag}}',
	'contributionscores-allrevisions' => 'Alle verzies',
	'contributionscores-score' => 'Puntje',
	'contributionscores-pages' => "Pagina's",
	'contributionscores-changes' => 'Bewèrkinger',
	'contributionscores-username' => 'Gebroeker',
	'contributionscores-invalidusername' => 'Verkierde gebroeker',
	'contributionscores-invalidmetric' => 'Ogeljige einheid',
);

/** Lithuanian (lietuvių)
 * @author Hugo.arg
 */
$messages['lt'] = array(
	'contributionscores-allrevisions' => 'Visos revizijos', # Fuzzy
	'contributionscores-score' => 'Rezultatas',
	'contributionscores-pages' => 'Puslapiai',
	'contributionscores-changes' => 'Pakeitimai',
	'contributionscores-username' => 'Naudotojo vardas',
);

/** Latgalian (latgaļu)
 * @author Dark Eagle
 */
$messages['ltg'] = array(
	'contributionscores-pages' => 'Puslopys',
);

/** Mizo (Mizo ţawng)
 * @author RMizo
 */
$messages['lus'] = array(
	'contributionscores-allrevisions' => 'A vaiin',
	'contributionscores-score' => 'Dawn',
	'contributionscores-pages' => 'Phekte',
	'contributionscores-changes' => 'Tihdanglamte',
	'contributionscores-username' => 'Hmangtuhming',
	'contributionscores-invalidusername' => 'Hmangtuhming dik lo',
	'contributionscores-invalidmetric' => 'Tehphung dik lo',
);

/** Eastern Mari (олык марий)
 * @author Сай
 */
$messages['mhr'] = array(
	'contributionscores-username' => 'Пайдаланышын лӱмжӧ',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'contributionscores' => 'Оцени за придонеси',
	'contributionscores-desc' => 'Презема информации од вики-базата на податоци за најголем [[Special:ContributionScores|број на кориснички придонеси]]',
	'contributionscores-info' => 'Салдото е мерка што изразува уредувања на засебни страници, со оглед на големиот број на уредувања.',
	'contributionscores-top' => '(Најдобри $1)',
	'contributionscores-days' => '{{PLURAL:$1|Последниот ден|Последните $1 дена}}',
	'contributionscores-allrevisions' => 'На сите времиња',
	'contributionscores-score' => 'Оценка',
	'contributionscores-pages' => 'Страници',
	'contributionscores-changes' => 'Измени',
	'contributionscores-username' => 'Корисничко име',
	'contributionscores-invalidusername' => 'Неправилно корисничко име',
	'contributionscores-invalidmetric' => 'Грешна метрика',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'contributionscores-top' => '(ആദ്യത്തെ $1)',
	'contributionscores-days' => 'അവസാന {{PLURAL:$1|ദിവസം|$1 ദിവസങ്ങൾ}}',
	'contributionscores-allrevisions' => 'എല്ലാ പതിപ്പുകളും', # Fuzzy
	'contributionscores-score' => 'സ്കോർ',
	'contributionscores-pages' => 'താളുകൾ',
	'contributionscores-changes' => 'മാറ്റങ്ങൾ',
	'contributionscores-username' => 'ഉപയോക്തൃനാമം',
	'contributionscores-invalidusername' => 'അസാധുവായ ഉപയോക്തൃനാമം',
);

/** Mongolian (монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'contributionscores-username' => 'Хэрэглэгчийн нэр',
);

/** Marathi (मराठी)
 * @author Htt
 * @author Kaustubh
 * @author Mahitgar
 */
$messages['mr'] = array(
	'contributionscores' => 'योगदान संख्या',
	'contributionscores-desc' => '[[Special:ContributionScores|सदस्य योगदान संख्येनुसार]] विकि डाटाबेस दर्शवितो',
	'contributionscores-info' => 'गुण खालीलप्रमाणे मोजले जातील:
*प्रत्येक स्वतंत्र पानासाठी १ गुण
*(एकूण संपादने) - (एकूण स्वतंत्र पाने) * 2 चे वर्गमूळ
अशा प्रकारे मोजलेले गुण हे संपादन विविधतेला संपादन संख्येपेक्षा जास्त महत्व देतात. मुख्यत्वे, हे गुण जास्त संपादन संख्या मोजून स्वतंत्र पानांची संपादने काढतात.', # Fuzzy
	'contributionscores-top' => '(पहिले $1)',
	'contributionscores-days' => '{{PLURAL:$1|शेवटचा दिवस|शेवटचे $1 दिवस}}',
	'contributionscores-allrevisions' => 'सर्व आवर्तने', # Fuzzy
	'contributionscores-score' => 'गुण',
	'contributionscores-pages' => 'पाने',
	'contributionscores-changes' => 'बदल',
	'contributionscores-username' => 'उपयोगकर्तानाव',
	'contributionscores-invalidusername' => 'चुकीचे सदस्यनाव',
	'contributionscores-invalidmetric' => 'चुकीचे मेट्रिक',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Emrrans
 */
$messages['ms'] = array(
	'contributionscores' => 'Skor sumbangan',
	'contributionscores-desc' => 'Mengira [[Special:ContributionScores|jumlah sumbangan pengguna]] yang tertinggi dalam pangkalan data wiki',
	'contributionscores-info' => 'Markah ini terutama sekali mengira halaman-halaman unik yang disunting dengan pertimbangan untuk jumlah suntingan yang tinggi.',
	'contributionscores-top' => '($1 teratas)',
	'contributionscores-days' => '{{PLURAL:$1|hari|$1 hari}} terkini',
	'contributionscores-allrevisions' => 'Sepanjang masa',
	'contributionscores-score' => 'Markah',
	'contributionscores-pages' => 'Halaman',
	'contributionscores-changes' => 'Perubahan',
	'contributionscores-username' => 'Nama pengguna',
	'contributionscores-invalidusername' => 'Nama pengguna tidak sah',
	'contributionscores-invalidmetric' => 'Metrik tidak sah',
);

/** Maltese (Malti)
 * @author Chrisportelli
 * @author Giangian15
 * @author Roderick Mallia
 */
$messages['mt'] = array(
	'contributionscores' => 'Punteġġi tal-kontribuzzjonijiet',
	'contributionscores-desc' => "Tanalizza d-databażi tal-wiki għall-ogħla [[Special:ContributionScores|volum ta' kontributi tal-utenti]]",
	'contributionscores-info' => "Il-punteġġi huma kkalkulati b'dan il-mod:
*Punt (1) għal kull paġna distinta modifikata
*Radiċi kwadrata ta' (modifiki kollha li saru) - (total ta' paġni distinti) * 2
Dan il-metodu ta' kalkolu tal-punteġġi jagħti iktar importanza għad-diversità fil-modifiki milli għan-numru ta' kontribuzzjonijiet. Bażikament, dan il-punteġġ l-ewwel jikkalkola n-numru ta' paġni distinti modifikati, fejn in konsiderazzjoni għall-volum għoli ta' kontribuzzjonijiet - din tassumi li hija paġna ta' kwalità ogħla.", # Fuzzy
	'contributionscores-top' => '(L-Aqwa $1)',
	'contributionscores-days' => 'L-aħħar {{PLURAL:$1|ġurnata|$1 ġranet}}',
	'contributionscores-allrevisions' => "Ta' kull żmien",
	'contributionscores-score' => 'Punteġġ',
	'contributionscores-pages' => 'Paġni',
	'contributionscores-changes' => 'Tibdil',
	'contributionscores-username' => 'Isem tal-utent',
	'contributionscores-invalidusername' => 'Isem tal-utent invalidu',
	'contributionscores-invalidmetric' => 'Metrika invalida',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'contributionscores-days' => 'Меельсе {{PLURAL:$1|чи|$1 чить}}',
	'contributionscores-pages' => 'Лопат',
	'contributionscores-changes' => 'Полавтнемат',
	'contributionscores-username' => 'Теицянь лем',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'contributionscores-changes' => 'Tlapatlaliztli',
	'contributionscores-username' => 'Tlatequitiltilīltōcāitl',
);

/** Norwegian Bokmål (norsk (bokmål)‎)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'contributionscores' => 'Bidragspoeng',
	'contributionscores-desc' => 'Spør wikidatabasen etter det høyeste [[Special:ContributionScores|bidragsvolumet]]',
	'contributionscores-info' => 'Bidragspoeng regnes ut på følgende måte:
* 1 poeng for hver unike side som er redigert
* Kvadratrota av (totalt antall redigeringer) &minus; (unike sider redigert) × 2
Poeng som regnes ut på denne måte vekter redigeringsmangfold høyere enn redigeringsvolum.
Dette betyr i bunn og grunn at dette primært måler hvor mange unike sider som er redigert, med hensyn til høyt redigeringsvolum &ndash; antatt å føre til sider av høyere kvalitet.', # Fuzzy
	'contributionscores-top' => '(Topp $1)',
	'contributionscores-days' => 'Siste {{PLURAL:$1|dagen|$1 dager}}',
	'contributionscores-allrevisions' => 'Gjennom tidene',
	'contributionscores-score' => 'Poeng',
	'contributionscores-pages' => 'Sider',
	'contributionscores-changes' => 'Endringer',
	'contributionscores-username' => 'Brukernavn',
	'contributionscores-invalidusername' => 'Ugyldig brukernavn',
	'contributionscores-invalidmetric' => 'Ugyldig målemetode',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'contributionscores-days' => 'Letzte $1 Daag', # Fuzzy
	'contributionscores-pages' => 'Sieden',
	'contributionscores-changes' => 'Ännern',
	'contributionscores-username' => 'Brukernaam',
);

/** Nepali (नेपाली)
 * @author RajeshPandey
 */
$messages['ne'] = array(
	'contributionscores-username' => 'प्रयोगकर्ता नाम',
);

/** Niuean (ko e vagahau Niuē)
 * @author Jose77
 */
$messages['niu'] = array(
	'contributionscores-username' => 'Matahigoa he tagata',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'contributionscores' => 'Gebruikersstatistieken',
	'contributionscores-desc' => 'Geeft een overzicht van [[Special:ContributionScores|gebruikers met de meeste bijdragen]] in de wiki',
	'contributionscores-info' => "Deze score meet voornamelijk het aantal unieke pagina's dat is bewerkt, terwijl een groot aantal bewerkingen wel in acht wordt genomen.",
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => 'Laatste {{PLURAL:$1|dag|$1 dagen}}',
	'contributionscores-allrevisions' => 'Alle versies',
	'contributionscores-score' => 'Punten',
	'contributionscores-pages' => "Pagina's",
	'contributionscores-changes' => 'Wijzigingen',
	'contributionscores-username' => 'Gebruikersnaam',
	'contributionscores-invalidusername' => 'Ongeldige gebruikersnaam',
	'contributionscores-invalidmetric' => 'Ongeldige eenheid',
);

/** Norwegian Nynorsk (norsk (nynorsk)‎)
 * @author Gunnernett
 * @author Harald Khan
 * @author Jon Harald Søby
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'contributionscores' => 'Bidragspoeng',
	'contributionscores-desc' => 'Spør wikidatabasen etter det høgaste [[Special:ContributionScores|bidragsvolumet]]',
	'contributionscores-info' => 'Bidragspoeng blir rekna ut på følgjande måte:
* eitt poeng for kvar unik sida som har blitt endra
* Kvadratrota av (totalt tal på endringar) &minus; (unike sider endra) × 2
Poeng som blir rekna ut på denne måten set endringsmangfald høgare enn endringsvolum. Dette tyder til sist at dette primært måler kor mange forskjellige sider som har blitt endra, med omsyn til høgt endringsvolum &ndash; anteke å føra til sider av høgare kvalitet.', # Fuzzy
	'contributionscores-top' => '(topp $1)',
	'contributionscores-days' => 'Siste {{PLURAL:$1|dagen|$1 dagane}}',
	'contributionscores-allrevisions' => 'Alle versjonar', # Fuzzy
	'contributionscores-score' => 'Poeng',
	'contributionscores-pages' => 'Sider',
	'contributionscores-changes' => 'Endringar',
	'contributionscores-username' => 'Brukarnamn',
	'contributionscores-invalidusername' => 'Ugyldig brukarnamn',
	'contributionscores-invalidmetric' => 'Ugyldig målemetode',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'contributionscores-pages' => 'Matlakala',
	'contributionscores-changes' => 'Diphetogo',
	'contributionscores-username' => 'Leina la mošomši',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'contributionscores' => 'Puntatge de las contribucions',
	'contributionscores-desc' => 'Espia la banca de donadas wiki pels [[Special:ContributionScores|utilizaires contribuissent mai]]',
	'contributionscores-info' => "Lo puntatge se calcula coma seguís :
* 1 punt per cada pagina modificada
* raiç quadrada de (nombre de modificacions) - (nombre de paginas diferentas)
* 2. D'aqueste biais, lo puntatge calculat preferís la diversitat a la quantitat. Escrich d'un autre biais, aqueste puntatge s'interèssa principalament a far veire lo nombre de modificacions de paginas diferentas, puèi la quantitat totala de modificacions.", # Fuzzy
	'contributionscores-top' => '(Melhor $1)',
	'contributionscores-days' => 'Dins {{PLURAL:$1|lo darrièr jorn|los darrièrs $1 jorns}}',
	'contributionscores-allrevisions' => 'Totas las revisions', # Fuzzy
	'contributionscores-score' => 'Puntatge',
	'contributionscores-pages' => 'Paginas',
	'contributionscores-changes' => 'Modificacions',
	'contributionscores-username' => "Nom d'utilizaire",
	'contributionscores-invalidusername' => "Nom d'utilizaire invalid",
	'contributionscores-invalidmetric' => 'Metria incorrècta',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 * @author Odisha1
 * @author Psubhashish
 */
$messages['or'] = array(
	'contributionscores-allrevisions' => 'ସବୁ ବେଳେ',
	'contributionscores-score' => 'ସ୍କୋର',
	'contributionscores-pages' => 'ପୃଷ୍ଠା',
	'contributionscores-changes' => 'ବଦଳସବୁ',
	'contributionscores-username' => 'ବ୍ୟବହାରକାରୀଙ୍କ ନାମ',
);

/** Ossetic (Ирон)
 * @author Amikeco
 */
$messages['os'] = array(
	'contributionscores-username' => 'Архайæджы ном',
);

/** Pampanga (Kapampangan)
 * @author Katimawan2005
 */
$messages['pam'] = array(
	'contributionscores-top' => '(Pekamatas a $1)',
	'contributionscores-days' => 'Tauling $1 Aldo', # Fuzzy
	'contributionscores-allrevisions' => 'Eganaganang mibayu', # Fuzzy
	'contributionscores-pages' => 'Bulung',
	'contributionscores-changes' => 'Miyalilan',
	'contributionscores-username' => 'Lagyungtalagamit (Username)',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'contributionscores-pages' => 'Bledder',
	'contributionscores-username' => 'Yuuser-Naame',
);

/** Plautdietsch (Plautdietsch)
 * @author Slomox
 */
$messages['pdt'] = array(
	'contributionscores-username' => 'Bruckernome',
);

/** Polish (polski)
 * @author Derbeth
 * @author Equadus
 * @author McMonster
 * @author Sp5uhe
 * @author Wpedzich
 */
$messages['pl'] = array(
	'contributionscores' => 'Punkty za edycje',
	'contributionscores-desc' => 'Wylicza [[Special:ContributionScores|punkty za edycje]] dla użytkowników',
	'contributionscores-info' => 'Punkty za edycje naliczane są następującą metodą:
*1 punkt za każdą edytowaną unikalną stronę
*pierwiastek kwadratowy z (ogólna liczba edycji) - (wszystkich unikalnych stron) * 2
Taki sposób naliczania pozwala wyważyć różnorodność edycji względem liczby edycji. Zasadniczo wynik uzależniony jest od liczby edytowanych unikalnych stron z uwzględnieniem dużej liczby edycji – zakładając wyższą wartość tworzenia nowych artykułów.', # Fuzzy
	'contributionscores-top' => '($1 najlepszych)',
	'contributionscores-days' => '{{PLURAL:$1|Ostatni 1 dzień|Ostatnie $1 dni|Ostatnich $1 dni}}',
	'contributionscores-allrevisions' => 'Cała aktywność',
	'contributionscores-score' => 'Punktów',
	'contributionscores-pages' => 'Stron',
	'contributionscores-changes' => 'Zmian',
	'contributionscores-username' => 'Nazwa użytkownika',
	'contributionscores-invalidusername' => 'Zła nazwa użytkownika',
	'contributionscores-invalidmetric' => 'Nieprawidłowa metryka',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Bèrto 'd Sèra
 * @author Dragonòt
 */
$messages['pms'] = array(
	'contributionscores' => 'Classìfica dla contribussion',
	'contributionscores-desc' => 'Antéroga ël database wiki an sël pì àut [[Special:ContributionScores|volum dij contribù utent]]',
	'contributionscores-info' => 'Ël pontegi a mzura primariament le pàgine ùniche modificà, pijand an cont ij gròss volum ëd modìfiche.',
	'contributionscores-top' => '(Ij $1 mej)',
	'contributionscores-days' => 'Ùltim Last {{PLURAL:$1|di|$1 di}}',
	'contributionscores-allrevisions' => 'Tute le vire',
	'contributionscores-score' => 'Puntegi',
	'contributionscores-pages' => 'Pàgine',
	'contributionscores-changes' => 'Cambi',
	'contributionscores-username' => 'Stranòm',
	'contributionscores-invalidusername' => 'Stranòm pa bon',
	'contributionscores-invalidmetric' => 'Métrica pa bon-a',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'contributionscores-days' => 'وروستۍ {{PLURAL:$1|ورځ|$1 ورځې}}',
	'contributionscores-allrevisions' => 'هر وخت',
	'contributionscores-pages' => 'مخونه',
	'contributionscores-changes' => 'بدلونونه',
	'contributionscores-username' => 'کارن-نوم',
	'contributionscores-invalidusername' => 'ناسم کارن-نوم',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'contributionscores' => 'Pontuação de contribuições',
	'contributionscores-desc' => 'Inquire a base de dados wiki sobre os mais elevados [[Special:ContributionScores|volumes de contribuição dos utilizadores]]',
	'contributionscores-info' => 'As pontuações são calculadas da seguinte forma:
*1 ponto por cada página única editada
*Raiz quadrada de (Total de Edições Feitas) - (Total de Páginas Únicas) * 2
Pontuações calculadas desta forma pesam a diversidade de edições relativamente ao volume de edições. Basicamente, esta pontuação mede primariamente páginas únicas editadas, com consideração por alto volume de edições - assumindo serem páginas de qualidade mais alta.', # Fuzzy
	'contributionscores-top' => '(Primeiros $1)',
	'contributionscores-days' => '{{PLURAL:$1|Último dia|Últimos $1 dias}}',
	'contributionscores-allrevisions' => 'Desde sempre',
	'contributionscores-score' => 'Pontuação',
	'contributionscores-pages' => 'Páginas',
	'contributionscores-changes' => 'Alterações',
	'contributionscores-username' => 'Nome de utilizador',
	'contributionscores-invalidusername' => 'Nome de utilizador inválido',
	'contributionscores-invalidmetric' => 'Métrica inválida',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Brunoy Anastasiya Seryozhenko
 * @author Crazymadlover
 * @author Eduardo.mps
 * @author Giro720
 * @author Luckas
 */
$messages['pt-br'] = array(
	'contributionscores' => 'Pontuações de Contribuições',
	'contributionscores-desc' => 'Inquire a base de dados wiki sobre os mais altos [[Special:ContributionScores|volumes de contribuição dos utilizadores]]',
	'contributionscores-info' => 'As pontuações são calculadas da seguinte forma:
*1 ponto por cada página única editada
*Raiz quadrada de (Total de Edições Feitas) - (Total de Páginas Únicas) * 2
Pontuações calculadas desta forma pesam a diversidade de edições relativamente ao volume de edições. Basicamente, esta pontuação mede primariamente páginas únicas editadas, com consideração pelo alto volume de edições - assumindo serem páginas de qualidade mais alta.', # Fuzzy
	'contributionscores-top' => '(Iniciais $1)',
	'contributionscores-days' => 'Últimos {{PLURAL:$1|día|$1 días}}',
	'contributionscores-allrevisions' => 'Desde sempre',
	'contributionscores-score' => 'Pontuação',
	'contributionscores-pages' => 'Páginas',
	'contributionscores-changes' => 'Mudanças',
	'contributionscores-username' => 'Nome de usuário',
	'contributionscores-invalidusername' => 'Nome de usuário inválido',
	'contributionscores-invalidmetric' => 'Métrica inválida',
);

/** Romanian (română)
 * @author AlexZaim
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'contributionscores' => 'Punctaje contribuții',
	'contributionscores-desc' => 'Interoghează baza de date a wikiului pentru a găsi cel mai mare [[Special:ContributionScores|volum de contribuții ale unui utilizator]]',
	'contributionscores-info' => 'Scorul măsoară în primul rând paginile unic modificate, cu considerație pentru volumul ridicat de modificări.',
	'contributionscores-top' => '(primii $1)',
	'contributionscores-days' => '{{PLURAL:$1|Ultima zi|Ultimele $1 zile}}',
	'contributionscores-allrevisions' => 'Clasamentul tuturor timpurilor',
	'contributionscores-score' => 'Scor',
	'contributionscores-pages' => 'Pagini',
	'contributionscores-changes' => 'Modificări',
	'contributionscores-username' => 'Nume de utilizator',
	'contributionscores-invalidusername' => 'Nume de utilizator incorect',
	'contributionscores-invalidmetric' => 'Metrică incorectă',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'contributionscores' => 'Pundegge de le condrebbute',
	'contributionscores-desc' => "Le sondagge d'u database de Uicchi pe le cchiù ierte [[Special:ContributionScores|volume de condrebbuzione de l'utende]]",
	'contributionscores-info' => "De base, stu pundegge mesure apprime de tutte, le pàggene uneche cangiate, cu 'a conziderazzione pe le volume de cangiaminde ierte.",
	'contributionscores-top' => '(Le Prime $1)',
	'contributionscores-days' => 'Urteme {{PLURAL:$1|sciurne|$1 sciurne}}',
	'contributionscores-allrevisions' => "Tutte 'u tiembe",
	'contributionscores-score' => 'Pundegge',
	'contributionscores-pages' => 'Pàggene',
	'contributionscores-changes' => 'Cangiaminde',
	'contributionscores-username' => "Nome de l'utende",
	'contributionscores-invalidusername' => "Nome de l'utende invalide",
	'contributionscores-invalidmetric' => 'Metriche invalide',
);

/** Faeag Rotuma (Faeag Rotuma)
 * @author Jose77
 */
$messages['rtm'] = array(
	'contributionscores-username' => 'Asa',
);

/** Russian (русский)
 * @author Ahonc
 * @author Kalan
 * @author Ole Yves
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'contributionscores' => 'Оценка вклада',
	'contributionscores-desc' => 'Определяет из базы данных [[Special:ContributionScores|участников с наибольшим числом правок]]',
	'contributionscores-info' => 'Оценка рассчитывается в первую очередь по количеству отредактированных уникальных страниц, с учётом большего объёма редактирования.',
	'contributionscores-top' => '(лучшие $1)',
	'contributionscores-days' => '{{PLURAL:$1|Последний $1 день|Последние $1 дня|Последние $1 дней}}',
	'contributionscores-allrevisions' => 'За всё время',
	'contributionscores-score' => 'Оценка',
	'contributionscores-pages' => 'Страниц',
	'contributionscores-changes' => 'Правок',
	'contributionscores-username' => 'Имя участника',
	'contributionscores-invalidusername' => 'Неправильное имя участника',
	'contributionscores-invalidmetric' => 'Ошибочная метрика',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'contributionscores-score' => 'Оцінка',
	'contributionscores-pages' => 'Сторінкы',
	'contributionscores-changes' => 'Зміны',
	'contributionscores-username' => 'Мено хоснователя',
);

/** Sicilian (sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'contributionscores-pages' => 'Pàggini',
	'contributionscores-changes' => 'Canciamenti',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 */
$messages['si'] = array(
	'contributionscores' => 'දායකත්ව ලකුණු',
	'contributionscores-info' => 'මෙම ලකුණ ප්‍රධාන වශයෙන් ඉහළ සංස්කරණ ධාරිතාවක් සඳහා සංස්කරණය කරනු ලැබූ අසමසම පිටු සමග සලකා බැලීමෙන් මනිනු ලැබේ.',
	'contributionscores-top' => '(ඉහළම $1)',
	'contributionscores-days' => 'අවසන් {{PLURAL:$1|දිනයේ|දින $1}}',
	'contributionscores-allrevisions' => 'හැම වෙලාවෙම',
	'contributionscores-score' => 'ලකුණු',
	'contributionscores-pages' => 'පිටු',
	'contributionscores-changes' => 'වෙනස් කිරීම්',
	'contributionscores-username' => 'පරිශීලක නාමය',
	'contributionscores-invalidusername' => 'වලංගු නොවන පරිශීලක නාමය',
	'contributionscores-invalidmetric' => 'වලංගු නොවන මාත්‍රිකය',
);

/** Slovak (slovenčina)
 * @author Helix84
 * @author Teslaton
 */
$messages['sk'] = array(
	'contributionscores' => 'Skóre príspevkov',
	'contributionscores-desc' => 'Zisťuje naväčší [[Special:ContributionScores|objem používateľských príspevkov]] z databázy wiki',
	'contributionscores-info' => 'Skóre sa počíta nasledovne:
*1 bod za každú jedinečnú stránku, ktorú používateľ upravoval
*Odmocnina z (celkom úprav) - (celkom jedinečných stránok) * 2
Skóre vypočítané týmto spôsobom vážia diverzitu úprav viac ako objem úprav. V podstate toto skóre meria najmä počet upravovaných jedinečných stránok s prihliadnutím na vysoký objem úprav; čo sa pokladá za stránku vyššej kvality.', # Fuzzy
	'contributionscores-top' => '(Najlepších $1)',
	'contributionscores-days' => '{{PLURAL:$1|Posledný $1 deň|Posledné $1 dni|Posledných $1 dní}}',
	'contributionscores-allrevisions' => 'Celá história',
	'contributionscores-score' => 'Skóre',
	'contributionscores-pages' => 'Stránky',
	'contributionscores-changes' => 'Zmeny',
	'contributionscores-username' => 'Používateľské meno',
	'contributionscores-invalidusername' => 'Neplatné používateľské meno',
	'contributionscores-invalidmetric' => 'Neplatná metrika',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'contributionscores' => 'Rezultati prispevkov',
	'contributionscores-desc' => 'V zbirki podatkov wiki poišče največjo [[Special:ContributionScores|količino prispevkov uporabnikov]]',
	'contributionscores-info' => 'Rezultat prvotno meri urejanja različnih strani, z upoštevanjem velike količine urejanj.',
	'contributionscores-top' => '({{PLURAL:$1|Najvišji|Najvišja|Najvišji|Najvišjih}} $1)',
	'contributionscores-days' => '{{PLURAL:$1|Zadnji $1 dan|Zadnja $1 dneva|Zadnji $1 dnevi|Zadnjih $1 dni}}',
	'contributionscores-allrevisions' => 'Vseh časov',
	'contributionscores-score' => 'Rezultat',
	'contributionscores-pages' => 'Strani',
	'contributionscores-changes' => 'Spremembe',
	'contributionscores-username' => 'Uporabniško ime',
	'contributionscores-invalidusername' => 'Neveljavno uporabniško ime',
	'contributionscores-invalidmetric' => 'Neveljavna metrika',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 * @author Sasa Stefanovic
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'contributionscores-top' => '(првих $1)',
	'contributionscores-days' => '{{PLURAL:$1|Последњег дана|Последњих $1 дана}}',
	'contributionscores-allrevisions' => 'Свих времена',
	'contributionscores-score' => 'Оцена',
	'contributionscores-pages' => 'Странице',
	'contributionscores-changes' => 'Измене',
	'contributionscores-username' => 'Корисничко име',
	'contributionscores-invalidusername' => 'Неисправно корисничко име',
	'contributionscores-invalidmetric' => 'Неисправна метрика',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Michaello
 */
$messages['sr-el'] = array(
	'contributionscores-top' => '(prvih $1)',
	'contributionscores-days' => '{{PLURAL:$1|Poslednjeg dana|Poslednjih $1 dana}}',
	'contributionscores-allrevisions' => 'Svih vremena',
	'contributionscores-pages' => 'Stranice',
	'contributionscores-changes' => 'Izmene',
	'contributionscores-username' => 'Korisničko ime',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'contributionscores' => 'Benutserbiedraage ouskätsje',
	'contributionscores-info' => 'Ouskätsskema:
*1 Punkt foar älke beoarbaidede Siede
*Quadroatwuttel fon aal do (Beoarbaidengen) - (Summe fon do beoarbaidede Sieden) * 2
Ouskätsengen ap disse Gruundloage weege ju Fuulfoold fon do Biedraage swarrer as dät Biedraachsvolumen. Disse Ouschätsenge mät do apaate Sieden, man lukt uk wäls ganse Oarbaid in Reekenge.', # Fuzzy
	'contributionscores-top' => '(Buppeste $1)',
	'contributionscores-days' => 'Lääste $1 Deege', # Fuzzy
	'contributionscores-allrevisions' => 'Aal Versione', # Fuzzy
	'contributionscores-score' => 'Skätsenge',
	'contributionscores-pages' => 'Sieden',
	'contributionscores-changes' => 'Annerengen',
	'contributionscores-username' => 'Benutsernoome',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 * @author Kandar
 */
$messages['su'] = array(
	'contributionscores' => 'Peunteun Kontribusi',
	'contributionscores-desc' => 'Jajal pamanggih pangkalan data wiki ngeunaan [[Special:ContributionScores|eusi kontribusi pamaké]] pangpunjulna',
	'contributionscores-info' => 'Peunteun diitung dumasar
*1 peunteun pikeun unggal éditan dina kaca nu unik
*Akar Kuadrat tina (Jumlah Éditan) - (Jumlah Kaca Unik) * 2
Peunteun nu diitung dumasar aturan di luhur ngukur karagaman éditan tina jumlah éditan. Ieu peunteun téh utamana ngukur éditan dina kaca nu unik, kalawan dirojong ku jumlah éditan anu loba - kalawan anggapan kacana jadi leuwih alus.', # Fuzzy
	'contributionscores-top' => '(Punclut $1)',
	'contributionscores-days' => '{{PLURAL:$1|Poé|$1 Poé}} Panungtung',
	'contributionscores-allrevisions' => 'Sadaya Révisi', # Fuzzy
	'contributionscores-score' => 'Peunteun',
	'contributionscores-pages' => 'Kaca',
	'contributionscores-changes' => 'Parobahan',
	'contributionscores-username' => 'Landihan',
	'contributionscores-invalidusername' => 'Pamaké teu cocog',
	'contributionscores-invalidmetric' => 'matrik teu cocog',
);

/** Swedish (svenska)
 * @author Lejonel
 * @author M.M.S.
 * @author Najami
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'contributionscores' => 'Bidragspoäng',
	'contributionscores-desc' => 'Hämtar information från databasen om de användare som gjort [[Special:ContributionScores|flest bidrag]]',
	'contributionscores-info' => 'Poängen beräknar främst redigerade unika sidor, med hänsyn till höga redigeringsvolymer.',
	'contributionscores-top' => '(Topp $1)',
	'contributionscores-days' => 'Senaste {{PLURAL:$1|dagen|$1 dagarna}}',
	'contributionscores-allrevisions' => 'Hela tiden',
	'contributionscores-score' => 'Poäng',
	'contributionscores-pages' => 'Sidor',
	'contributionscores-changes' => 'Ändringar',
	'contributionscores-username' => 'Användarnamn',
	'contributionscores-invalidusername' => 'Ogiltigt användarnamn',
	'contributionscores-invalidmetric' => 'Ogiltig metrisk',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author TRYPPN
 * @author Trengarasu
 * @author Ulmo
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'contributionscores' => 'பங்களிப்புப் புள்ளிகள்',
	'contributionscores-top' => '(முதல் $1)',
	'contributionscores-days' => 'கடைசி {{PLURAL:$1|நாள்|$1 நாட்கள்}}',
	'contributionscores-allrevisions' => 'எல்லா திருத்தங்களும்', # Fuzzy
	'contributionscores-score' => 'புள்ளி',
	'contributionscores-pages' => 'பக்கங்கள்',
	'contributionscores-changes' => 'மாற்றங்கள்',
	'contributionscores-username' => 'பயனர் பெயர்',
	'contributionscores-invalidusername' => 'செல்லாத பயனர்பெயர்',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'contributionscores-top' => '(పై $1)',
	'contributionscores-days' => 'చివరి {{PLURAL:$1|రోజు|$1 రోజులు}}',
	'contributionscores-allrevisions' => 'ఇప్పటివరకూ',
	'contributionscores-score' => 'స్కోరు',
	'contributionscores-pages' => 'పేజీలు',
	'contributionscores-changes' => 'మార్పులు',
	'contributionscores-username' => 'వాడుకరి పేరు',
	'contributionscores-invalidusername' => 'తప్పుడు వాడుకరిపేరు',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'contributionscores-pages' => 'Pájina sira',
	'contributionscores-username' => "Naran uza-na'in",
);

/** Tajik (Cyrillic script) (тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'contributionscores-days' => 'Охирин $1 Рӯз', # Fuzzy
	'contributionscores-allrevisions' => 'Ҳамаи Нусхаҳо', # Fuzzy
	'contributionscores-score' => 'Имтиёз',
	'contributionscores-pages' => 'Саҳифаҳо',
	'contributionscores-changes' => 'Тағйирот',
	'contributionscores-username' => 'Номи корбарӣ',
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'contributionscores-allrevisions' => 'Hamai Nusxaho', # Fuzzy
	'contributionscores-score' => 'Imtijoz',
	'contributionscores-pages' => 'Sahifaho',
	'contributionscores-changes' => 'Taƣjirot',
	'contributionscores-username' => 'Nomi korbarī',
);

/** Thai (ไทย)
 * @author Woraponboonkerd
 */
$messages['th'] = array(
	'contributionscores' => 'คะแนนการแก้ไข',
	'contributionscores-desc' => 'จัดอันดับฐานข้อมูลของวิกิสำหรับ[[Special:ContributionScores|ผู้ใ้ช้ที่มีจำนวนการแก้ไขสูงสุด]]',
	'contributionscores-info' => 'วิธีการคิดคะแนนเป็นดังต่อไปนี้:
* หนึ่ง (1) คะแนนต่อจำนวนหน้าที่เข้าร่วมแก้ไข (ชื่อของหน้าไม่ซ้ำกัน)
* รากที่สองของจำนวนการแก้ไขทั้งหมด - จำนวนหน้าทั้งหมดที่ร่วมแก้ไข * 2
คะแนนจะถูกคิดโดยให้น้ำหนักของการแก้ไขที่หลากหลายมากกว่าจำนวนการแก้ไข
โดยทั่วไป คะแนนนี้ชี้วัดถึงจำนวนหน้าต่างๆ ที่เข้าร่วมแก้ไข โดยคำนึงถึงจำนวนการแก้ไขทั้งหมดด้วย จึงคาดการณ์ได้ว่าจะทำให้มีหน้าที่มีคุณภาพสูงขึ้น', # Fuzzy
	'contributionscores-days' => '$1 {{PLURAL:$1|วัน|วัน}} ที่แล้ว',
	'contributionscores-score' => 'คะแนน',
	'contributionscores-pages' => 'จำนวนหน้า',
	'contributionscores-changes' => 'จำนวนการเปลี่ยนแปลง',
	'contributionscores-username' => 'ชื่อผู้ใช้',
	'contributionscores-invalidusername' => 'ชื่อผู้ใช้ไม่ถูกต้อง',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'contributionscores-username' => 'Ulanyjy ady',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'contributionscores' => 'Mga puntos ng ambag',
	'contributionscores-desc' => 'Tinatarahan ang kalipunan ng dato ng wiki para sa pinakamataas na [[Special:ContributionScores|dami ng ambag ng tagagamit]]',
	'contributionscores-info' => 'Tinutuos ang mga puntos ayon sa sumusunod:
*Isang (1) puntos para sa bawat bukod-tanging pahinang binago
*Pariugat ng (kabuoang bilang ng mga pagbabagong ginawa) - (kabuoang bilang ng bukod-tanging mga pahina) * 2
Tinutuos ang mga puntos sa ganitong paraan: timbang ng pagkakaiba-iba ng pagbabago sa ibabaw ng dami ng pagbabago.
Sa kapayakan, pangunahing sinusukat ng puntos na ito ang binagong natatanging mga pahina, na may pagsasaalang-alang sa mataas na dami ng pagbago - na ipinapalagay bilang isang pahinang may mataas na uri.', # Fuzzy
	'contributionscores-top' => '(Pinakatampok na $1)',
	'contributionscores-days' => 'Huling {{Plural: $1|araw|$1 mga araw}}',
	'contributionscores-allrevisions' => 'Lahat ng panahon',
	'contributionscores-score' => 'Puntos',
	'contributionscores-pages' => 'Mga pahina',
	'contributionscores-changes' => 'Mga pagbabago',
	'contributionscores-username' => 'Pangalan ng tagagamit',
	'contributionscores-invalidusername' => 'Hindi tanggap na pangalan ng tagagamit',
	'contributionscores-invalidmetric' => 'Hindi tanggap na metriko',
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Karduelis
 * @author Mach
 * @author Suelnur
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'contributionscores' => 'Katkı skorları',
	'contributionscores-desc' => 'En yüksek [[Special:ContributionScores|kullanıcı katkı hacmi]] için viki veritabanını sorgular',
	'contributionscores-info' => 'Skorlar aşağıdaki şekilde hesaplanmaktadır:
*Değişiklik yapılan her farklı sayfa için bir (1) puan
*(Yapılan toplam değişiklik) - (toplam farklı sayfa) * 2 işleminin karekökü
Bu şekilde hesaplanan skorlar, değişiklik sayısı ile değişiklik çeşitliliği arasında ağırlık kurmaktadır.
Temel olarak bu skor, yüksek değişiklik sayısının yüksek kaliteli bir sayfa olduğu varsayımıyla değişiklik yapılan farklı sayfa sayısını ölçmektedir.', # Fuzzy
	'contributionscores-top' => '(En yüksek $1)',
	'contributionscores-days' => 'Son $1 {{PLURAL:$1|gün|gün}}',
	'contributionscores-allrevisions' => 'Tüm zamanlar',
	'contributionscores-score' => 'Puan',
	'contributionscores-pages' => 'Sayfalar',
	'contributionscores-changes' => 'Değişiklikler',
	'contributionscores-username' => 'Kullanıcı adı',
	'contributionscores-invalidusername' => 'Geçersiz kullanıcı adı',
	'contributionscores-invalidmetric' => 'Geçersiz metrik',
);

/** Tatar (Cyrillic script) (татарча)
 * @author Ильнар
 */
$messages['tt-cyrl'] = array(
	'contributionscores' => 'Кертем билгеләү',
	'contributionscores-desc' => 'Хәтердән [[Special:ContributionScores|иң зур тәрҗемә ясаучы кулланучыларны]] билгели.',
	'contributionscores-info' => 'Билгеләр кую астагы критерийларга туры килү нәтиҗәсендә билгеләнә:
* 1 Һәрбер аерым бер тәрҗемә өчен билге
* 2 Гомуми тәрҗемәләр һәм һәрбер аерым бит аермасының тамыр асты
Шуның нәтиҗәсендә сезнең тәрҗемәләрегезгә тагын да зуррак билге куела.', # Fuzzy
	'contributionscores-top' => '(Иң әйбәт $1)',
	'contributionscores-days' => '{{PLURAL:$1|Соңгы $1 көн өчен}}',
	'contributionscores-allrevisions' => 'Барлык үзгәртүләр', # Fuzzy
	'contributionscores-score' => 'Билге',
	'contributionscores-pages' => 'Битләр саны',
	'contributionscores-changes' => 'Үзгәртүләр',
	'contributionscores-username' => 'Кулланучы исеме',
	'contributionscores-invalidusername' => 'Кулланучының исеме дөрес түгел',
	'contributionscores-invalidmetric' => 'Ялгыш билгеләү',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Alfredie
 */
$messages['ug-arab'] = array(
	'contributionscores-username' => 'ئىشلەتكۇچى ئىسمى',
);

/** Uyghur (Latin script) (Uyghurche)
 * @author Jose77
 */
$messages['ug-latn'] = array(
	'contributionscores-username' => 'Ishletkuchi ismi',
);

/** Ukrainian (українська)
 * @author AS
 * @author Ahonc
 * @author Prima klasy4na
 * @author Ата
 * @author Тест
 */
$messages['uk'] = array(
	'contributionscores' => 'Оцінка внеску',
	'contributionscores-desc' => 'Визначає з бази даних [[Special:ContributionScores|користувачів з найбільшою кількістю редагувань]]',
	'contributionscores-info' => 'При підрахунку оцінки велика вага надається розмаїттю редагувань, враховується і загальна кількість.',
	'contributionscores-top' => '({{PLURAL:$1|найкращий|найкращих}})',
	'contributionscores-days' => '{{PLURAL:$1|Останній день|Останні $1 дні|Останні $1 днів}}',
	'contributionscores-allrevisions' => 'Весь час',
	'contributionscores-score' => 'Оцінка',
	'contributionscores-pages' => 'Сторінок',
	'contributionscores-changes' => 'Редагувань',
	'contributionscores-username' => "Ім'я користувача",
	'contributionscores-invalidusername' => "Неправильне ім'я користувача",
	'contributionscores-invalidmetric' => 'Неправильна метрика',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'contributionscores-allrevisions' => 'تمام وقت',
	'contributionscores-score' => 'سکور',
	'contributionscores-pages' => 'صفحات',
	'contributionscores-changes' => 'تبدیلیاں',
	'contributionscores-username' => 'صارف کا نام',
	'contributionscores-invalidusername' => 'باطل کے صارف کا نام',
);

/** vèneto (vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'contributionscores' => 'Puntegi contributi',
	'contributionscores-desc' => 'Intèroga el database de la wiki par el pi grando [[Special:ContributionScores|volume de contributi utente]]',
	'contributionscores-info' => 'I punti i vien calcolà come segue:
*Un (1) punto par ogni diversa pagina modificà
*Raìsa quadrata de (Tute le modifiche fate) - (Total de le pagine modificà) * 2
Fasendo i conti in sta maniera pesa piassè la diversità de le modifiche rispeto al nùmaro dei contributi.
In sostansa, sto puntegio el tien conto sopratuto de le diverse pagine modificà, tegnendo in considerazion anca un alto volume de modifiche - che fa pensar a na pi alta qualità de la pagina modificà.', # Fuzzy
	'contributionscores-top' => '(Ultimi $1)',
	'contributionscores-days' => '{{PLURAL:$1|Ultimo zòrno|Ultimi $1 zòrni}}',
	'contributionscores-allrevisions' => 'Tute le revision', # Fuzzy
	'contributionscores-score' => 'Puntegio',
	'contributionscores-pages' => 'Pagine',
	'contributionscores-changes' => 'Canbiamenti',
	'contributionscores-username' => 'Nome utente',
	'contributionscores-invalidusername' => 'Nome utente mia valido',
	'contributionscores-invalidmetric' => 'Metrica mia valida',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'contributionscores' => 'Tondan arvoind',
	'contributionscores-desc' => 'Märičeb [[Special:ContributionScores|kävutajid, kel om enamba redaktiruindad,]] andmuzbazan turbiš',
	'contributionscores-info' => "Arvsanad lugedas nenid luguid ližaten:
*Üks' (1) punkt kaikuččen unikaližen lehtpolen redaktiruindas
*Nellikjur' (Redaktiruindoiden ühthine lugu) - (Unikaližiden lehtpoliden ühthine lugu) * 2
Muga lugeden anttas enamba vedadust redakcijoiden erazvuičendale, mi niiden ühthižele lugule.", # Fuzzy
	'contributionscores-top' => '($1 parembad)',
	'contributionscores-days' => "{{PLURAL:$1|jäl'gmäine päiv|$1 jäl'gmäšt päiväd}}",
	'contributionscores-allrevisions' => 'Kaikes aigas',
	'contributionscores-score' => 'Punktad',
	'contributionscores-pages' => "Lehtpol't",
	'contributionscores-changes' => 'Toižetusid',
	'contributionscores-username' => 'Kävutajannimi',
	'contributionscores-invalidusername' => 'Vär kävutajannimi',
	'contributionscores-invalidmetric' => 'Petuzline metrik',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'contributionscores' => 'Điểm số đóng góp',
	'contributionscores-desc' => 'Truy xuất cơ sở dữ liệu wiki để xem [[Special:ContributionScores|mức đóng góp]] cao nhất của thành viên',
	'contributionscores-info' => 'Điểm số này chủ yếu đo số trang riêng lẻ được sửa đổi, có xét thêm mức độ sửa đổi cao.',
	'contributionscores-top' => '(Tốp $1)',
	'contributionscores-days' => '{{PLURAL:$1|Ngày|$1 ngày}} qua',
	'contributionscores-allrevisions' => 'Từ trước đến nay',
	'contributionscores-score' => 'Điểm số',
	'contributionscores-pages' => 'Trang',
	'contributionscores-changes' => 'Các thay đổi',
	'contributionscores-username' => 'Tên người dùng',
	'contributionscores-invalidusername' => 'Tên người dùng không hợp lệ',
	'contributionscores-invalidmetric' => 'Chuẩn đo không hợp lệ',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'contributionscores-days' => '{{PLURAL:$1|Del|Dels}} lätik $1',
	'contributionscores-allrevisions' => 'Revids valik', # Fuzzy
	'contributionscores-pages' => 'Pads',
	'contributionscores-changes' => 'Votükams',
	'contributionscores-username' => 'Gebananem',
);

/** Walloon (walon)
 * @author Srtxg
 */
$messages['wa'] = array(
	'contributionscores' => 'Ponts des contribouwaedjes',
	'contributionscores-desc' => "Riwaite li båze di dnêyes po les [[Special:ContributionScores|uzeus avou l' meyeu livea d' contribouwaedje]]",
	'contributionscores-info' => "Les ponts sont carculés come shût:
* On (1) pont po tchaeke pådje unike k' on candjmint î a stî fwait
* Li cwårêye raecene di (nombe di candjmints) - (nombe totå di pådjes unikes) * 2

Di cisse manire on dene pus di pontiaedje al varyisté des contribouwaedjes k' a leu cwantité.
Po l' dire pus simplumint, ci pontiaedje ci mezeure copurade li nombe di pådejs diferinnes di candjeyes, et poy seulmint li cwantité di candjmints diferins.", # Fuzzy
	'contributionscores-top' => '(les $1 meyeus)',
	'contributionscores-days' => '{{PLURAL:$1|Sol dierin djoû|So les $1 dierins djoûs}}',
	'contributionscores-allrevisions' => 'Dispoy todi',
	'contributionscores-score' => 'Ponts',
	'contributionscores-pages' => 'Pådjes',
	'contributionscores-changes' => 'Candjmints',
	'contributionscores-username' => "No d' uzeu:",
	'contributionscores-invalidusername' => "No d' uzeu nén valide",
	'contributionscores-invalidmetric' => 'Metrike nén valide',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'contributionscores-days' => '{{PLURAL:$1|לעצטן טאָג|לעצטע $1 טעג}}',
	'contributionscores-pages' => 'בלעטער',
	'contributionscores-username' => 'באַניצער נאָמען',
);

/** Cantonese (粵語)
 * @author PhiLiP
 * @author Shinjiman
 * @author Shirayuki
 */
$messages['yue'] = array(
	'contributionscores' => '貢獻分數',
	'contributionscores-desc' => '根據響wiki數據庫畀出最高嘅[[Special:ContributionScores|用戶貢獻容量]]',
	'contributionscores-info' => '分數會用下面嘅計法去計:
*每一個唯一一版編輯過嘅有1分
*(總編輯數)-(總唯一頁數)嘅平方根 * 2
響呢方面計嘅分數會睇編輯多樣性同編輯量相比。 基本噉講，呢個分數係會依主要嘅唯一編輯過嘅頁，同埋考慮高編輯量 - 假設係一篇高質量嘅文章。', # Fuzzy
	'contributionscores-top' => '(最高$1名)',
	'contributionscores-days' => '最近$1日',
	'contributionscores-allrevisions' => '全部修訂', # Fuzzy
	'contributionscores-score' => '分數',
	'contributionscores-pages' => '版',
	'contributionscores-changes' => '更改',
	'contributionscores-username' => '用戶名',
	'contributionscores-invalidusername' => '無效嘅用戶名',
	'contributionscores-invalidmetric' => '無效嘅公制',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Dimension
 * @author Hydra
 * @author PhiLiP
 * @author Shinjiman
 * @author Shirayuki
 */
$messages['zh-hans'] = array(
	'contributionscores' => '贡献分数',
	'contributionscores-desc' => '根据在wiki数据库中给出最高的[[Special:ContributionScores|用户贡献容量]]',
	'contributionscores-info' => '得分主要考量具有独特性的编辑，同时考虑编辑量。',
	'contributionscores-top' => '（最高$1名）',
	'contributionscores-days' => '最近$1天',
	'contributionscores-allrevisions' => '所有的时间',
	'contributionscores-score' => '分数',
	'contributionscores-pages' => '页面',
	'contributionscores-changes' => '更改',
	'contributionscores-username' => '用户名',
	'contributionscores-invalidusername' => '无效的用户名',
	'contributionscores-invalidmetric' => '无效的公制',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Mark85296341
 * @author PhiLiP
 * @author Shinjiman
 * @author Shirayuki
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'contributionscores' => '貢獻分數',
	'contributionscores-desc' => '根據在wiki資料庫中給出最高的[[Special:ContributionScores|用戶貢獻容量]]',
	'contributionscores-info' => '分數會依主要的唯一編輯過的頁面，以及考慮高編輯量。',
	'contributionscores-top' => '（最多 $1 位）',
	'contributionscores-days' => '最近 {{PLURAL:$1|天|$1 天}}',
	'contributionscores-allrevisions' => '所有的時間',
	'contributionscores-score' => '分數',
	'contributionscores-pages' => '頁面數量',
	'contributionscores-changes' => '更改次數',
	'contributionscores-username' => '使用者名稱',
	'contributionscores-invalidusername' => '無效的使用者名稱',
	'contributionscores-invalidmetric' => '無效的公制',
);
