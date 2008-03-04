<?php
#coding: utf-8
/**
 * Internationalisation file for extension ContributionScores.
 *
 * @addtogroup Extensions
*/

$messages = array();

$messages['en'] = array(
	'contributionscores' => 'Contribution Scores',
	'contributionscores-desc' => 'Polls wiki database for highest [[Special:ContributionScores|user contribution volume]]',
	'contributionscores-info' => "Scores are calculated as follows:
*1 point for each unique page edited
*Square Root of (Total Edits Made) - (Total Unique Pages) * 2
Scores calculated in this manner weight edit diversity over edit volume.  Basically, this score measures primarily unique pages edited, with consideration for high edit volume - assumed to be a higher quality page.",
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => 'Last $1 Days',
	'contributionscores-allrevisions' => 'All Revisions',
	'contributionscores-score' => 'Score',
	'contributionscores-pages' => 'Pages',
	'contributionscores-changes' => 'Changes',
	'contributionscores-username' => 'Username',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'contributionscores'              => 'نتائج المساهمات',
	'contributionscores-desc'         => 'يسحب قاعدة بيانات الويكي لأعلى [[Special:ContributionScores|حجم لمساهمات المستخدم]]',
	'contributionscores-info'         => 'النتائج تحسب كالتالي:
*1 نقطة لكل صفحة فريدة تحرر
*الجذر التربيعي ل(عدد التعديلات الكلية) - (عدد الصفحات الفريدة الكلية) * 2
النتائج المحسوبة بهذه الطريقة توزن انتثار التعديلات على حجم التعديلات.  أساسا، هذه النتيجة تقيس بشكل أساسي الصفحات الفريدة المحررة، مع الأخذ في الاعتبار أحجام التعديل الكبيرة - تفترض أنها تكون صفحة بجودة أعلى.',
	'contributionscores-top'          => '(أعلى $1)',
	'contributionscores-days'         => 'آخر $1 يوم',
	'contributionscores-allrevisions' => 'كل النسخ',
	'contributionscores-score'        => 'النتيجة',
	'contributionscores-pages'        => 'الصفحات',
	'contributionscores-changes'      => 'التغييرات',
	'contributionscores-username'     => 'اسم المستخدم',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'contributionscores-top'      => '(Най-добрите $1)',
	'contributionscores-days'     => 'Последните $1 дни',
	'contributionscores-score'    => 'Точки',
	'contributionscores-pages'    => 'Страници',
	'contributionscores-changes'  => 'Редакции',
	'contributionscores-username' => 'Потребител',
);

/** Czech (Česky)
 * @author Matěj Grabovský
 */
$messages['cs'] = array(
	'contributionscores-desc'         => 'Zjišťuje největší [[Special:ContributionScores|objem uživatelských příspěvků]] z databáze wiki',
	'contributionscores-top'          => '(Nejlepších $1)',
	'contributionscores-days'         => '{{plural:$1|Poslední den|Poslední $1 dny|Poseldních $1 dnů}}',
	'contributionscores-allrevisions' => 'Všechny revize',
	'contributionscores-score'        => 'Skóre',
	'contributionscores-pages'        => 'Stránky',
	'contributionscores-changes'      => 'Změny',
	'contributionscores-username'     => 'Uživatelské jméno',
);

/** Danish (Dansk)
 * @author M.M.S.
 */
$messages['da'] = array(
	'contributionscores-pages'    => 'Sider',
	'contributionscores-username' => 'Brugernavn',
);

/** German (Deutsch)
 * @author Raimond Spekking
*/
$messages['de'] = array(
	'contributionscores'              => 'Benutzerbeiträge bewerten',
	'contributionscores-desc'         => 'Abfrage der Wiki-Datenbank nach der Anzahl der [[Special:ContributionScores|Benutzerbeiträge]]',
	'contributionscores-info'         => "Bewertungsschema:
*1 Punkt für jede bearbeitete Seite
*Quadratwurzel aller (Bearbeitungen) - (Summe der bearbeiteten Seiten) * 2
Bewertungen auf dieser Grundlage wichten die Vielfalt der Beiträge höher als das Beitragsvolumen.",
	'contributionscores-top'          => '(Top $1)',
	'contributionscores-days'         => 'Letzte $1 Tage',
	'contributionscores-allrevisions' => 'Alle Versionen',
	'contributionscores-score'        => 'Bewertung',
	'contributionscores-pages'        => 'Seiten',
	'contributionscores-changes'      => 'Änderungen',
	'contributionscores-username'     => 'Benutzername',
);

/** Greek (Ελληνικά)
 * @author Consta
 */
$messages['el'] = array(
	'contributionscores'          => 'Αποτελέσματα Συνεισφοράς',
	'contributionscores-top'      => '(Πρώτοι $1)',
	'contributionscores-days'     => 'Τελευταίες $1 Ημέρες',
	'contributionscores-score'    => 'Βαθμολογία',
	'contributionscores-pages'    => 'Σελίδες',
	'contributionscores-changes'  => 'Αλλαγές',
	'contributionscores-username' => 'Όνομα χρήστη',
);

$messages['es'] = array(
	'contributionscores' => 'Puntuaciones por contribuir',
	'contributionscores-info' => "Las puntuaciones son calculadas siguiendo:
*1 punto por cada página única editada
*Raíz cuadrada de (Ediciones totales efectuadas) - (Páginas totales únicas) x 2
Las puntuaciones son calculadas de esta manera considerando la diversidad sobre el volumen de edición. Básicamente, esta puntuación mide fundamentalmente las páginas únicas editadas, considerando que un alto volumen de edición supone que es un artículo de mayor calidad.",
	'contributionscores-top' => '(Top $1)',
	'contributionscores-days' => 'Últimos $1 días',
	'contributionscores-allrevisions' => 'Estadísticas globales'
);

$messages['ext'] = array(
	'contributionscores-days' => 'Úrtimus $1 dias',
);

/** Finnish (Suomi)
 * @author Nike
 */
$messages['fi'] = array(
	'contributionscores'              => 'Muokkauspisteet',
	'contributionscores-info'         => 'Pisteet lasketaan seuraavalla kaavalla:
* Yksi piste jokaisesta muokatusta sivusta
* Neliöjuuri (muokkausten määrä) - (muokatut sivut) * 2

Näin laskettuna pisteet painottavat monipuolisuutta määrän sijaan. Käytännössä pisteet mittaavat muokattujen sivujen määrää, ottaen huomioon muutosten suuren määrän.',
	'contributionscores-top'          => '(top $1)',
	'contributionscores-days'         => '$1 päivän ajalta',
	'contributionscores-allrevisions' => 'Kaikki muutokset',
	'contributionscores-score'        => 'Pisteet',
	'contributionscores-pages'        => 'Sivuja',
	'contributionscores-changes'      => 'Muutoksia',
	'contributionscores-username'     => 'Käyttäjä',
);

/** French (Français)
 * @author Sherbrooke
 * @author Urhixidur
 * @author Grondin
 */
$messages['fr'] = array(
	'contributionscores'              => 'Pointage des contributions',
	'contributionscores-desc'         => 'Scrute la base de données wiki pour les [[Special:ContributionScores|utilisateurs contribuant le plus]]',
	'contributionscores-info'         => 'Les pointages sont calculés de la manière suivante :
* 1 point pour chaque page modifiée ;
* racine carrée de (nombre de modifications) - (nombre de pages différentes) * 2.

De cette façon, les pointages ainsi calculés privilégient la diversité par rapport à la quantité. Écrits d’une autre façon, ils s’intéressent principalement à indiquer le nombre de modifications des pages différentes, puis leur nombre total.',
	'contributionscores-top'          => '(Les $1 meilleures)',
	'contributionscores-days'         => 'Dans {{PLURAL:$1|le dernier jour|les derniers $1 jours}}',
	'contributionscores-allrevisions' => 'Toutes les révisions',
	'contributionscores-score'        => 'Pointage',
	'contributionscores-pages'        => 'Pages',
	'contributionscores-changes'      => 'Modifications',
	'contributionscores-username'     => 'Pseudonyme',
);

/** Galician (Galego)
 * @author Xosé
 * @author Alma
 */
$messages['gl'] = array(
	'contributionscores'              => 'Puntuación das Contribucións',
	'contributionscores-info'         => 'As puntuacións calcúlanse como segue:
*1 punto por cada páxina única editada
*Raíz cadrada de (Total de Edicións Feitas) - (Total de Páxinas Únicas) * 2
As puntuacións calculadas deste xeito favorecen a diversidade de edicións sobre o volume. Basicamente, esta puntuación mide en principio as páxinas únicas editadas, tendo en conta un volume alto de edicións - co que se asume que é unha páxina de calidade superior.',
	'contributionscores-top'          => '(Os $1 que máis)',
	'contributionscores-days'         => 'Os Últimos $1 Días',
	'contributionscores-allrevisions' => 'Todas as Revisións',
	'contributionscores-score'        => 'Puntuación',
	'contributionscores-pages'        => 'Páxinas',
	'contributionscores-changes'      => 'Cambios',
	'contributionscores-username'     => 'Nome de usuario',
);

/** Croatian (Hrvatski)
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'contributionscores'              => 'Najbolji suradnici',
	'contributionscores-info'         => 'Rezultat se dobiva kao suma slijedećih stavki:
*1 bod za svaku stranicu koju ste uređivali
* (kvadratni) korijen iz (broja ukupnih uređivanja) - (broja stranica koje ste uređivali) * 2

Rezultat dobiven na ovaj način daje veću težinu broju uređivanja različitih stranica nego ukupnom broju uređivanja. U osnovi, ovakav rezultat mjeri prvenstveno broj različitih stranica koje ste uređivali, uzimajući u obzir broj uređivanja, jer veći broj uređivanja na nekom članku daje kvalitetniji članak.',
	'contributionscores-top'          => '(Najboljih $1)',
	'contributionscores-days'         => 'Zadnjih $1 dana',
	'contributionscores-allrevisions' => 'Sva uređivanja',
	'contributionscores-score'        => 'Rezultat',
	'contributionscores-pages'        => 'Stranica',
	'contributionscores-changes'      => 'Uređivanja',
	'contributionscores-username'     => 'Ime suradnika',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'contributionscores'              => 'Wuhódnoćenje přinoškow',
	'contributionscores-desc'         => 'Wuslědźi najwyši [[Special:ContributionScores|wobjim wužiwarskich přinoškow]] w datowej bance wikiprojekta',
	'contributionscores-info'         => 'Ličba dypkow so takle wobličuje:
*1 dypk za kóždy wobdźěłanu jednotliwu stronu
*Kwadratny korjeń (wšěch sčinjenych změnow) - (cyłkowna ličba jednotliwych stronow) * 2
Ličba dypkow wuličena na tute wašnje pohódnoća wělakorosć změno wysě hač mnóstwo změnow. Zasadnje tute pohódnoćenje měri w prěnim rjedźe jednotliwe wobdźěłane strony dźiwajo na wysoke mnóstwo změnow - předpokładujo, zo to by nastawk z wyšej kwalitu było.',
	'contributionscores-top'          => '(Najlěpše $1)',
	'contributionscores-days'         => 'Poslednje $1 dnjow',
	'contributionscores-allrevisions' => 'Wšě změny',
	'contributionscores-score'        => 'Hódnoćenje',
	'contributionscores-pages'        => 'Strony',
	'contributionscores-changes'      => 'Změny',
	'contributionscores-username'     => 'Wužiwarske mjeno',
);

/** Hungarian (Magyar)
 * @author Bdanee
 */
$messages['hu'] = array(
	'contributionscores'              => 'Szerkesztési pontszám',
	'contributionscores-info'         => 'A pontszámok az alábbi módon vannak kiszámolva:
*1 pont minden egyedi lap szerkesztése után
*(Az összes szerkesztés) - (Az összes egyedi lap) * 2 négyzetgyöke
Az így számolt pontszámok a szerkesztés sokszínűségét mutatják a szerkesztés mennyisége helyett. Alapjában véve a pontszám az egyedi szerkesztett lapok számát mutatja, figyelembe véve a nagy szerkesztési számokat – feltételezve a jobb minőségű lapokat.',
	'contributionscores-top'          => '(legjobb $1)',
	'contributionscores-days'         => 'Utolsó $1 nap',
	'contributionscores-allrevisions' => 'Összes szerkesztés',
	'contributionscores-score'        => 'Pontszám',
	'contributionscores-pages'        => 'Oldalak',
	'contributionscores-changes'      => 'Változtatások',
	'contributionscores-username'     => 'Felhasználó',
);

/** Icelandic (Íslenska)
 * @author SPQRobin
 */
$messages['is'] = array(
	'contributionscores-pages'    => 'Síður',
	'contributionscores-username' => 'Notandanafn',
);

/** Italian (Italiano)
 * @author Gianfranco
 * @author BrokenArrow
 */
$messages['it'] = array(
	'contributionscores'              => 'Punteggi contributi',
	'contributionscores-info'         => 'I punteggi vengono calcolati in questo modo: 
*1 punto per ciascuna pagina distinta modificata 
*Radice quadrata di (Tutte le modifiche effettuate) - (Totale pagine distinte) * 2 
Questo metodo di calcolo dei punteggi tiene in maggior conto la diversità delle modifiche rispetto al numero dei contributi. Di fondo, questo punteggio misura in primo luogo il numero di pagine distinte modificate, valutando anche un eventuale alto volume di contributi - ciò fa presumere una più elevata qualità della pagina modificata.',
	'contributionscores-top'          => '(Ultimi $1)',
	'contributionscores-days'         => 'Ultimi $1 giorni',
	'contributionscores-allrevisions' => 'Tutte le revisioni',
);

/** Japanese (日本語)
 * @author JtFuruhata
 */
$messages['ja'] = array(
	'contributionscores'              => '貢献スコア',
	'contributionscores-desc'         => 'ウィキデータベースへの[[Special:ContributionScores|貢献度が高い利用者]]の統計',
	'contributionscores-info'         => "スコアは以下のように計算されます:
*編集したページ毎に、1ポイント
*[(変更回数) - (ページ数)]の平方根 * 2

:''スコア = (ページ数) + SQRT((変更回数)-(ページ数))*2''

この計算式では、編集量よりも編集の多様性が重要視されます。スコアは、編集したページ数を基礎に、高いクォリティのページを維持するため多くの編集を行うことにも配慮した評価となっています。",
	'contributionscores-top'          => '（上位$1名）',
	'contributionscores-days'         => '最近の$1日間',
	'contributionscores-allrevisions' => '全履歴',
	'contributionscores-score'        => 'スコア',
	'contributionscores-pages'        => 'ページ数',
	'contributionscores-changes'      => '変更回数',
	'contributionscores-username'     => '利用者名',
);

$messages['kk-arab'] = array(
	'contributionscores' => 'ٷلەس بەرۋ ەسەپتەرٸ',
	'contributionscores-info' => "ەسەپتەر كەلەسٸ دەي سانالادى:
*1 ۇپاي ٵربٸر تٷزەتٸلگەن بٸرەگەي بەت ٷشٸن
*مىنانىڭ شارشى تٷبٸرٸ (بارلىق ٸستەلٸنگەن تٷزەتۋلەر) ‒ (بارلىق بٸرەگەي بەتتەر) * 2
وسى تٵسٸلمەن سانالعان ەسەپتەر تٷزەتۋ اۋقىمىنداعى ٶڭدەۋ ٵركەلكٸلٸگٸنٸڭ سالماعىن ٶلشەيدٸ. نەگٸزٸندە, بۇل ەسەپ الدىمەن تٷزەتٸلگەن بٸركەلكٸ بەتتەردٸ ٶلشەيدٸ, جوعارعى ٶڭدەۋ اۋقىمىمەن بٸرگە — جوعارى ساپالى بەت جاعدايىمەن ەسەپتەپ.",
	'contributionscores-top' => '(جوعارعى $1)',
	'contributionscores-days' => 'سوڭعى $1 كٷندە',
	'contributionscores-allrevisions' => 'بارلىق نۇسقالار',
	'contributionscores-score' => 'ەسەپ',
	'contributionscores-pages' => 'بەتتەر',
	'contributionscores-changes' => 'ٶزگەرٸستەر',
	'contributionscores-username' => 'قاتىسۋشى اتى',
);
$messages['kk-cyrl'] = array(
	'contributionscores' => 'Үлес беру есептері',
	'contributionscores-info' => "Есептер келесі дей саналады:
*1 ұпай әрбір түзетілген бірегей бет үшін
*Мынаның шаршы түбірі (Барлық Істелінген Түзетулер) ‒ (Барлық Бірегей Беттер) * 2
Осы тәсілмен саналған есептер түзету ауқымындағы өңдеу әркелкілігінің салмағын өлшейді. Негізінде, бұл есеп алдымен түзетілген біркелкі беттерді өлшейді, жоғарғы өңдеу ауқымымен бірге — жоғары сапалы бет жағдайымен есептеп.",
	'contributionscores-top' => '(Жоғарғы $1)',
	'contributionscores-days' => 'Соңғы $1 күнде',
	'contributionscores-allrevisions' => 'Барлық нұсқалар',
	'contributionscores-score' => 'Есеп',
	'contributionscores-pages' => 'Беттер',
	'contributionscores-changes' => 'Өзгерістер',
	'contributionscores-username' => 'Қатысушы аты',
);
$messages['kk-latn'] = array(
	'contributionscores' => 'Üles berw esepteri',
	'contributionscores-info' => "Esepter kelesi deý sanaladı:
*1 upaý ärbir tüzetilgen biregeý bet üşin
*Mınanıñ şarşı tübiri (Barlıq İstelingen Tüzetwler) ‒ (Barlıq Biregeý Better) * 2
Osı täsilmen sanalğan esepter tüzetw awqımındağı öñdew ärkelkiliginiñ salmağın ölşeýdi. Negizinde, bul esep aldımen tüzetilgen birkelki betterdi ölşeýdi, joğarğı öñdew awqımımen birge — joğarı sapalı bet jağdaýımen eseptep.",
	'contributionscores-top' => '(Joğarğı $1)',
	'contributionscores-days' => 'Soñğı $1 künde',
	'contributionscores-allrevisions' => 'Barlıq nusqalar',
	'contributionscores-score' => 'Esep',
	'contributionscores-pages' => 'Better',
	'contributionscores-changes' => 'Özgerister',
	'contributionscores-username' => 'Qatıswşı atı',
);
/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'contributionscores-top'          => '(Top $1)',
	'contributionscores-days'         => '{{PLURAL:$1|Leschten Dag|Lescht $1 Deeg}}',
	'contributionscores-allrevisions' => 'All Versiounen',
	'contributionscores-pages'        => 'Säiten',
	'contributionscores-changes'      => 'Ännerungen',
	'contributionscores-username'     => 'Benotzernumm',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 */
$messages['km'] = array(
	'contributionscores'              => 'តារាងពិន្ទុ នៃការរួមចំណែក',
	'contributionscores-top'          => '(កំពូល $1)',
	'contributionscores-days'         => '$1 ថ្ងៃ ចុងក្រោយ',
	'contributionscores-allrevisions' => 'គ្រប់កំណែ',
	'contributionscores-score'        => 'ពិន្ទុ',
	'contributionscores-pages'        => 'ទំព័រ នានា',
	'contributionscores-changes'      => 'បំលាស់ប្តូរ នានា',
	'contributionscores-username'     => 'ឈ្មោះអ្នកប្រើប្រាស់',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'contributionscores'              => 'Bewertung vun den Ännerungen',
	'contributionscores-info'         => "D'Bewertunge ginn esou gerechent:
* 1 Punkt fir all geännert Säit;
* D'Quadrawuerzel vun (allen Ännerungen) - (Zuel vun de geännerte Säiten) * 2.

Op déi Manéier gëtt der Zuel vun de geännerte Säiten méi eng Grouss Bedeitung zougedeelt, wéi der Zuel vun den Ännerungen.",
	'contributionscores-top'          => '(Top $1)',
	'contributionscores-days'         => '{{PLURAL:$1|Leschten Dag|Lescht $1 Deeg}}',
	'contributionscores-allrevisions' => 'All Versiounen',
	'contributionscores-score'        => 'Bewertung',
	'contributionscores-pages'        => 'Säiten',
	'contributionscores-changes'      => 'Ännerungen',
	'contributionscores-username'     => 'Benotzernumm',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'contributionscores-pages'    => 'Sieden',
	'contributionscores-username' => 'Brukernaam',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'contributionscores'              => 'Bijdragenscores',
	'contributionscores-desc'         => 'Geeft een overzicht van [[Special:ContributionScores|gebruikers met de meeste bijdragen]] in de wiki',
	'contributionscores-info'         => "Scores worden als volgt berekend:
*1 punt voor iedere bewerkte pagina
*wortel van (totaal aantal gemaakte bewerkingen) - (totaal aantal unieke pagina's) * 2
In scores die op deze wijze berekend worden weegt divers bewerkingsgedrag zwaarder dan bewerkingsvolume. In feite meet deze score voornamelijk het aantal unieke pagina's dat is bewerkt, terwijl een groot aantal bewerkingen wel in acht wordt genomen, met de aanname dat het een pagina van een hogere kwaliteit is.",
	'contributionscores-top'          => '(Top $1)',
	'contributionscores-days'         => 'Laatste $1 dagen',
	'contributionscores-allrevisions' => 'Alle versies',
	'contributionscores-score'        => 'Punten',
	'contributionscores-pages'        => "Pagina's",
	'contributionscores-changes'      => 'Bewerkingen',
	'contributionscores-username'     => 'Gebruiker',
);

/** Norwegian (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'contributionscores'              => 'Bidragspoeng',
	'contributionscores-desc'         => 'Spør wikidatabasen etter det høyeste [[Special:ContributionScores|bidragsvolumet]]',
	'contributionscores-info'         => 'Bidragspoeng regnes ut på følgende måte:
* 1 poeng for hver unike side som er redigert
* Kvadratrota av (totalt antall redigeringer) &minus; (unike sider redigert) × 2
Poeng som regnes ut på denne måte veier redigeringsmangfold høyere enn redigeringsvolum. Dette betyr i bunn og grunn at dette primært måler hvor mange forskjellige sider som er redigert, med hensyn til høyt redigeringsvolum &ndash; antatt å føre til sider av høyere kvalitet.',
	'contributionscores-top'          => '(Topp $1)',
	'contributionscores-days'         => 'Siste $1 dager',
	'contributionscores-allrevisions' => 'Alle revisjoner',
	'contributionscores-score'        => 'Poeng',
	'contributionscores-pages'        => 'Sider',
	'contributionscores-changes'      => 'Endringer',
	'contributionscores-username'     => 'Brukernavn',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'contributionscores-pages'    => 'Matlakala',
	'contributionscores-changes'  => 'Diphetogo',
	'contributionscores-username' => 'Leina la mošomši',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'contributionscores'              => 'Puntatge de las contribucions',
	'contributionscores-desc'         => 'Espia la banca de donadas wiki pels [[Special:ContributionScores|utilizaires contribuissent mai]]',
	'contributionscores-info'         => "Lo puntatge se calcula coma seguís : 
* 1 punt per cada pagina modificada
* raiç quadrada de (nombre de modificacions) - (nombre de paginas diferentas)
* 2. D'aqueste biais, lo puntatge calculat preferís la diversitat a la quantitat. Escrich d'un autre biais, aqueste puntatge s'interèssa principalament a mostrar lo nombre de modificacions de paginas diferentas, puèi la quantitat totala de modificacions.",
	'contributionscores-top'          => '(Melhor $1)',
	'contributionscores-days'         => 'Dins {{PLURAL:$1|lo darrièr jorn|los darrièrs $1 jorns}}',
	'contributionscores-allrevisions' => 'Totas las revisions',
	'contributionscores-score'        => 'Puntatge',
	'contributionscores-pages'        => 'Paginas',
	'contributionscores-changes'      => 'Modificacions',
	'contributionscores-username'     => "Nom d'utilizaire",
);

/** Polish (Polski)
 * @author Derbeth
 * @author Equadus
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'contributionscores'              => 'Punktów za edycje',
	'contributionscores-info'         => 'Punkty za edycje naliczane są następującą metodą:
*1 punkt za każdą edytowaną unikalną stronę
*pierwiastek kwadratowy z (ogólna liczba edycji) - (wszystkich unikalnych stron) * 2
Taki sposób naliczania pozwala wyważyć różnorodność edycji względem ilości edycji. Zasadniczo wynik uzależniony jest od ilości edytowanych unikalnych stron z uwzględnieniem dużej ilości edycji - zakładając wyższą wartość tworzenia nowych artykułów.',
	'contributionscores-top'          => '(Czołowych $1)',
	'contributionscores-days'         => 'Ostatnie $1 dni',
	'contributionscores-allrevisions' => 'Wszystkie edycje',
	'contributionscores-pages'        => 'Strony',
	'contributionscores-changes'      => 'Zmiany',
);

/** Piemontèis (Piemontèis)
 * @author Bèrto 'd Sèra
 */
$messages['pms'] = array(
	'contributionscores'              => 'Classìfica dla contribussion',
	'contributionscores-info'         => "La classìfica as càlcola parej: 
*1 pont për minca pàgina modificà 
*Rèis quadra ëd (Total dle Modìfiche Faite) - (Total dle Pàgine Ùniche) moltiplicà për 2 
Le classìfiche donca as peulo ten-se ën pèisand an manera diferenta ël nùmer dle modìfiche anvers al volum dle modìfiche mideme. Sta classìfica a l'amzura dzortut le pàgine ùniche ch'a ven-o modificà, e ën vorend a-j da n'euj ëd rësgoard a cole ch'a l'han n'àot volum ëd modìfica, ch'as pensa ch'a peula esse na marca ëd qualità dl'artìcol.",
	'contributionscores-top'          => '(Ij $1 mej)',
	'contributionscores-days'         => 'Ùltim $1 dì',
	'contributionscores-allrevisions' => 'Tute le revision',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'contributionscores-days'     => 'وروستۍ $1 ورځې',
	'contributionscores-pages'    => 'مخونه',
	'contributionscores-changes'  => 'بدلونونه',
	'contributionscores-username' => 'کارن-نوم',
);

/** Portuguese (Português)
 * @author Malafaya
 */
$messages['pt'] = array(
	'contributionscores'              => 'Pontuações de Contribuições',
	'contributionscores-desc'         => 'Inquire a base de dados wiki sobre os [[{{ns:special}}:ContributionScores|volumes de contribuições de utilizadores]] mais altos',
	'contributionscores-info'         => 'As pontuações são calculadas da seguinte forma:
*1 ponto por cada página única editada
*Raiz quadrada de (Total de Edições Feitas) - (Total de Páginas Únicas) * 2
Pontuações calculadas desta forma pesam a diversidade de edições relativamente ao volume de edições. Basicamente, esta pontuação mede primariamente páginas únicas editadas, com consideração por alto volume de edições - assumindo serem páginas de qualidade mais alta.',
	'contributionscores-top'          => '(Primeiros $1)',
	'contributionscores-days'         => 'Últimos $1 Dias',
	'contributionscores-allrevisions' => 'Todas As Revisões',
	'contributionscores-score'        => 'Pontuação',
	'contributionscores-pages'        => 'Páginas',
	'contributionscores-changes'      => 'Alterações',
	'contributionscores-username'     => 'Nome de utilizador',
);

/** Russian (Русский)
 * @author .:Ajvol:.
 * @author Kalan
 */
$messages['ru'] = array(
	'contributionscores'              => 'Оценка вклада',
	'contributionscores-desc'         => 'Определяет из базы данных [[Special:ContributionScores|участников с наибольшим числом правок]]',
	'contributionscores-info'         => 'Оценка рассчитывается сложением следующих слагаемых:
* 1 очко за редактирование каждой уникальной страницы;
* 2 * квадратный корень из разности: (общее количество правок) - (всего уникальных страниц).
При подсчёте оценки, таким образом, разнообразию правок придаётся больший вес, чем общему количеству правок.',
	'contributionscores-top'          => '(лучшие $1)',
	'contributionscores-days'         => 'Последние $1 дней',
	'contributionscores-allrevisions' => 'Все правки',
	'contributionscores-score'        => 'Оценка',
	'contributionscores-pages'        => 'Страниц',
	'contributionscores-changes'      => 'Правок',
	'contributionscores-username'     => 'Имя участника',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'contributionscores'              => 'Skóre príspevkov',
	'contributionscores-desc'         => 'Zisťuje naväčší [[Special:ContributionScores|objem používateľských príspevkov]] z databázy wiki',
	'contributionscores-info'         => 'Skóre sa počíta nasledovne:
*1 bod za každú jedinečnú stránku, ktorú používateľ upravoval
*Odmocnina z (celkom úprav) - (celkom jedinečných stránok) * 2
Skóre vypočítané týmto spôsobom vážia diverzitu úprav viac ako objem úprav. V podstate toto skóre meria najmä počet upravovaných jedinečných stránok s prihliadnutím na vysoký objem úprav; čo sa pokladá za stránku vyššej kvality.',
	'contributionscores-top'          => '(Najlepších $1)',
	'contributionscores-days'         => 'Posledných $1 dní',
	'contributionscores-allrevisions' => 'Všetky revízie',
	'contributionscores-score'        => 'Skóre',
	'contributionscores-pages'        => 'Stránky',
	'contributionscores-changes'      => 'Zmeny',
	'contributionscores-username'     => 'Používateľské meno',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'contributionscores'              => 'Benutserbiedraage ouschätsje',
	'contributionscores-info'         => 'Ouschätsschema:
*1 Punkt foar älke beoarbaidede Siede
*Quadroatwuttel fon aal do (Beoarbaidengen) - (Summe fon do beoarbaidede Sieden) * 2 
Ouschätsengen ap disse Gruundloage weege ju Fuulfoold fon do Biedraage swarrer as dät Biedraachsvolumen. Disse Ouschätsenge mät do apaate Sieden, man lukt uk wäls ganse Oarbaid in Reekenge.',
	'contributionscores-top'          => '(Buppeste $1)',
	'contributionscores-days'         => 'Lääste $1 Deege',
	'contributionscores-allrevisions' => 'Aal Versione',
	'contributionscores-score'        => 'Schätsenge',
	'contributionscores-pages'        => 'Sieden',
	'contributionscores-changes'      => 'Annerengen',
	'contributionscores-username'     => 'Benutsernoome',
);

/** Swedish (Svenska)
 * @author Lejonel
 */
$messages['sv'] = array(
	'contributionscores'              => 'Bidragspoäng',
	'contributionscores-desc'         => 'Hämtar information från databasen om de användare som gjort [[Special:ContributionScores|flest bidrag]]',
	'contributionscores-info'         => 'Poängen beräknas på följande vis:
* 1 poäng för varje unik sida som redigerats
* kvadratroten av (antal gjorda redigeringar) - (antal unika sidor) * 2
När poängen beräknas på detta sätt, så väger bidrag spridda över många olika sidor tyngre än många redigeringar på färre sidor. Det betyder att poängen huvudsakligen mäter hur många unika sidor som har redigerats, med hänsyn tagen till det totala antalet redigeringar som gjorts – eftersom många redigeringar antas ge sidor av högre kvalitet.',
	'contributionscores-top'          => '(Topp $1)',
	'contributionscores-days'         => 'Senaste $1 dagarna',
	'contributionscores-allrevisions' => 'Alla redigeringar',
	'contributionscores-score'        => 'Poäng',
	'contributionscores-pages'        => 'Sidor',
	'contributionscores-changes'      => 'Ändringar',
	'contributionscores-username'     => 'Användarnamn',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'contributionscores-top'          => '(పై $1)',
	'contributionscores-days'         => 'చివరి $1 రోజులు',
	'contributionscores-allrevisions' => 'అన్ని కూర్పులు',
	'contributionscores-score'        => 'స్కోరు',
	'contributionscores-pages'        => 'పేజీలు',
	'contributionscores-changes'      => 'మార్పులు',
	'contributionscores-username'     => 'వాడుకరిపేరు',
);

/** Turkish (Türkçe)
 * @author Karduelis
 */
$messages['tr'] = array(
	'contributionscores-username' => 'Kullanıcı',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'contributionscores-score'    => 'Điểm số',
	'contributionscores-username' => 'Tên hiệu',
);

/** Volapük (Volapük)
 * @author Malafaya
 */
$messages['vo'] = array(
	'contributionscores-days'     => 'Dels Lätik $1',
	'contributionscores-pages'    => 'Pads',
	'contributionscores-changes'  => 'Votükams',
	'contributionscores-username' => 'Gebananem',
);

$messages['yue'] = array(
	'contributionscores' => '貢獻分數',
	'contributionscores-info' => '分數會用下面嘅計法去計:
*每一個唯一一版編輯過嘅有1分
*(總編輯數)嘅平方根 - (總唯一頁數) * 2
響呢方面計嘅分數會睇編輯多樣性同編輯量相比。 基本噉講，呢個分數係會依主要嘅唯一編輯過嘅頁，同埋考慮高編輯量 - 假設係一篇高質量嘅文章。',
	'contributionscores-top' => '(最高$1名)',
	'contributionscores-days' => '最近$1日',
	'contributionscores-allrevisions' => '全部修訂',
	'contributionscores-score' => '分數',
	'contributionscores-pages' => '版',
	'contributionscores-changes' => '更改',
	'contributionscores-username' => '用戶名',
);

$messages['zh-hans'] = array(
	'contributionscores' => '贡献分数',
	'contributionscores-info' => '分数会用以下的的计分法去计算:
*每一个唯一页面编辑过的有1分
*(总编辑数)的平方根 - (总唯一页面数) * 2
在这方面计算的分数会参看编辑多的样性跟编辑量相比。 基本说，这个分数是会依主要的唯一编辑过?页面，以及考虑高编辑量 - 假设是一篇高质量的文章。',
	'contributionscores-top' => '(最高$1名)',
	'contributionscores-days' => '最近$1天',
	'contributionscores-allrevisions' => '全部修订',
	'contributionscores-score' => '分数',
	'contributionscores-pages' => '页面',
	'contributionscores-changes' => '更改',
	'contributionscores-username' => '用户名',
);

$messages['zh-hant'] = array(
	'contributionscores' => '貢獻分數',
	'contributionscores-info' => '分數會用以下的的計分法去計算:
*每一個唯一頁面編輯過的有1分
*(總編輯數)的平方根 - (總唯一頁面數) * 2
在這方面計算的分數會參看編輯多的樣性跟編輯量相比。 基本說，這個分數是會依主要的唯一編輯過嘅頁面，以及考慮高編輯量 - 假設是一篇高質量的文章。',
	'contributionscores-top' => '(最高$1名)',
	'contributionscores-days' => '最近$1天',
	'contributionscores-allrevisions' => '全部修訂',
	'contributionscores-score' => '分數',
	'contributionscores-pages' => '頁面',
	'contributionscores-changes' => '更改',
	'contributionscores-username' => '用戶名',
);

