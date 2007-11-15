<?php
/** \file
* \brief Internationalisation file for the Contribution Scores Extension.
*/

$allMessages = array(
	'en' => array( 
		'contributionscores' => 'Contribution Scores',
		'contributionscores-info' => 	"Scores are calculated as follows:\n".
			"*1 point for each unique page edited\n".
			"*Square Root of (Total Edits Made) - (Total Unique Pages) * 2\n".
			"Scores calculated in this manner weight edit diversity over edit volume.  Basically, this score measures".
			" primarily unique pages edited, with consideration for high edit volume - assumed to be a higher quality ".
			"article.",
		'contributionscores-top' => '(Top $1)',
		'contributionscores-days' => 'Last $1 Days',
		'contributionscores-allrevisions' => 'All Revisions'
	),

	'ar' => array(
		'contributionscores' => 'نتائج المساهمات',
		'contributionscores-info' => 'النتائج تحسب كالتالي:
*1 نقطة لكل صفحة فريدة تحرر
*الجذر التربيعي ل(عدد التعديلات الكلية) - (عدد الصفحات الفريدة الكلية) * 2
النتائج المحسوبة بهذه الطريقة توزن انتثار التعديلات على حجم التعديلات.  أساسا، هذه النتيجة تقيس بشكل أساسي الصفحات الفريدة المحررة، مع الأخذ في الاعتبار أحجام التعديل الكبيرة - تفترض أنها تكون مقالة بجودة أعلى.',
		'contributionscores-top' => '(أعلى $1)',
		'contributionscores-days' => 'آخر $1 يوم',
		'contributionscores-allrevisions' => 'كل النسخ',
	),

	'de' => array( 
		'contributionscores'              => 'Benutzerbeiträge bewerten',
		'contributionscores-info'         => "Bewertungsschema:\n".
			"*1 Punkt für jede bearbeitete Seite\n".
			"*Quadratwurzel aller Bearbeitungen - Summe der bearbeiteten Seiten * 2\n".
			"Bewertungen auf dieser Grundlage wichten die Vielfalt der Beiträge höher als das Beitragsvolumen.".
			"article.",
		'contributionscores-top'          => '(Oberste $1)',
		'contributionscores-days'         => 'Letzte $1 Tage',
		'contributionscores-allrevisions' => 'Alle Versionen'
	),

	'el' => array(
		'contributionscores' => 'Αποτελέσματα Συνεισφοράς',
	),

	'es' => array( 
		'contributionscores' => 'Puntuaciones por contribuir',
		'contributionscores-info' => 	"Las puntuaciones son calculadas siguiendo:\n".
			"*1 punto por cada página única editada\n".
			"*Raíz cuadrada de (Ediciones totales efectuadas) - (Páginas totales únicas) x 2\n".
			"Las puntuaciones son calculadas de esta manera considerando la diversidad sobre el volumen de edición.".
			"Básicamente, esta puntuación mide fundamentalmente las páginas únicas editadas, considerando que un alto ".
			"volumen de edición supone que es un artículo de mayor calidad.",
		'contributionscores-top' => '(Top $1)',
		'contributionscores-days' => 'Últimos $1 días',
		'contributionscores-allrevisions' => 'Estadísticas globales'
	),

	'ext' => array(
		'contributionscores-days' => 'Úrtimus $1 dias',
	),

	'fr' => array(
		'contributionscores' => 'Pointage des contributions',
		'contributionscores-info' => 'Le pointage se calcule comme suit :
* 1 point pour chaque page modifiée ;
* racine carrée de (nombre de modifications) - (nombre de pages différentes) * 2.

De cette façon, le pointage calculé préfère la diversité à la quantité. Écrit d\'une autre façon, ce pointage s\'intéresse principalement à montrer le nombre de modifications de pages différentes, puis la quantité totale de modifications.',
		'contributionscores-top' => '(Meilleur $1)',
		'contributionscores-days' => 'Dans {{PLURAL:$1|le dernier jour|les derniers $1 jours}}',
		'contributionscores-allrevisions' => 'Toutes les révisions',
	),

	'gl' => array(
		'contributionscores' => 'Puntuación das Contribucións',
		'contributionscores-info' => 'As puntuacións calcúlanse como segue:
*1 punto por cada páxina única editada
*Raíz cadrada de (Total de Edicións Feitas) - (Total de Páxinas Únicas) * 2
As puntuacións calculadas deste xeito favorecen a diversidade de edicións sobre o volume. Basicamente, esta puntuación mide en principio as páxinas únicas editadas, tendo en conta un volume alto de edicións - co que se asume que é un artigo de calidade superior.',
		'contributionscores-top' => '(Os $1 que máis)',
		'contributionscores-days' => 'Os Últimos $1 Días',
		'contributionscores-allrevisions' => 'Todas as Revisións',
	),

	'hsb' => array(
		'contributionscores' => 'Wuhódnoćenje přinoškow',
		'contributionscores-info' => 'Ličba dypkow so takle wobličuje:
*1 dypk za kóždy wobdźěłanu jednotliwu stronu
*Kwadratny korjeń (wšěch sčinjenych změnow) - (cyłkowna ličba jednotliwych stronow) * 2
Ličba dypkow wuličena na tute wašnje pohódnoća wělakorosć změno wysě hač mnóstwo změnow. Zasadnje tute pohódnoćenje měri w prěnim rjedźe jednotliwe wobdźěłane strony dźiwajo na wysoke mnóstwo změnow - předpokładujo, zo to by nastawk z wyšej kwalitu było.',
		'contributionscores-top' => '(Najlěpše $1)',
		'contributionscores-days' => 'Poslednje $1 dnjow',
		'contributionscores-allrevisions' => 'Wšě změny',
	),

	'it' => array(
		'contributionscores' => 'Punteggi contributi',
		'contributionscores-info' => 'I punteggi sono così calcolati: *1 punto per ogni singola pagina editata *Radice quadrata di (Tutti gli Edit Effettuati) - (Totale Pagine Singole) * 2 I punteggi calcolati in questo modo tengono conto della diversità di edizione nel complesso dei contributi. Di fondo, questo punteggio misura primariamente le pagine singole editate, con debita considerazione per alti volumi di contribuzione - ciò fa presumere una più elevata qualità della voce editata.',
		'contributionscores-top' => '(Ultimi $1)',
		'contributionscores-days' => 'Ultimi $1 giorni',
		'contributionscores-allrevisions' => 'Tutte le revisioni',
	),

	'nl' => array(
		'contributionscores' => 'Bijdragenscores',
		'contributionscores-info' => 'Scores worden als volgt berekend:
*1 punt voor iedere bewerkte pagina
*wortel van (totaal aantal gemaakte bewerkingen) - (totaal aantal unieke pagina\'s) * 2
In scores die op deze wijze berekend worden weegt divers bewerkingsgedrag zwaarder dan bewerkingsvolume. In feite meet deze score voornamelijk het aantal unieke pagina\'s dat is bewerkt, terwijl een groot aantal bewerkingen wel in acht wordt genomen, met de aanname dat het een pagina van een hogere kwaliteit is.',
		'contributionscores-top' => '(Top $1)',#identical but defined
		'contributionscores-days' => 'Laatste $1 dagen',
		'contributionscores-allrevisions' => 'Alle versies',
	),

	'oc' => array(
		'contributionscores' => 'Puntatge de las contribucions',
		'contributionscores-info' => 'Lo puntatge se calcula coma seguís : * 1 punt per cada pagina modificada ; * raiç quadrada de (nombre de modificacions) - (nombre de paginas diferentas) * 2. D\'aqueste biais, lo puntatge calculat preferís la diversitat a la quantitat. Escrich d\'un autre biais, aqueste puntatge s\'interèssa principalament a mostrar lo nombre de modificacions de paginas diferentas, puèi la quantitat totala de modificacions.',
		'contributionscores-top' => '(Melhor $1)',
		'contributionscores-days' => 'Dins {{PLURAL:$1|lo darrièr jorn|los darrièrs $1 jorns}}',
		'contributionscores-allrevisions' => 'Totas las revisions',
	),

	'pl' => array(
		'contributionscores' => 'Test nie udał się! ([[Special:Captcha/help|objaśnienie]])',
		'contributionscores-info' => 'Punkty za edycje',
		'contributionscores-top' => '(Czołowych $1)',
		'contributionscores-days' => 'Ostatnie $1 dni',
		'contributionscores-allrevisions' => 'Wszystkie edycje',
	),

	'pms' => array(
		'contributionscores' => 'Classìfica dla contribussion',
		'contributionscores-info' => 'La classìfica as càlcola parej: 
*1 pont për minca pàgina modificà 
*Rèis quadra ëd (Total dle Modìfiche Faite) - (Total dle Pàgine Ùniche) moltiplicà për 2 
Le classìfiche donca as peulo ten-se ën pèisand an manera diferenta ël nùmer dle modìfiche anvers al volum dle modìfiche mideme. Sta classìfica a l\'amzura dzortut le pàgine ùniche ch\'a ven-o modificà, e ën vorend a-j da n\'euj ëd rësgoard a cole ch\'a l\'han n\'àot volum ëd modìfica, ch\'as pensa ch\'a peula esse na marca ëd qualità dl\'artìcol.',
		'contributionscores-top' => '(Ij $1 mej)',
		'contributionscores-days' => 'Ùltim $1 dì',
		'contributionscores-allrevisions' => 'Tute le revision',
	),

	'yue' => array( 
		'contributionscores' => '貢獻分數',
		'contributionscores-info' => 	"分數會用下面嘅計法去計:\n".
			"*每一個唯一一版編輯過嘅有1分\n".
			"*(總編輯數)嘅平方根 - (總唯一頁數) * 2\n".
			"響呢方面計嘅分數會睇編輯多樣性同編輯量相比。".
			"基本噉講，呢個分數係會依主要嘅唯一編輯過嘅頁，同埋考慮高編輯量 - 假設係一篇高質量嘅文章。",
		'contributionscores-top' => '(最高$1名)',
		'contributionscores-days' => '最近$1日',
		'contributionscores-allrevisions' => '全部修訂'
	),

	'zh-hans' => array( 
		'contributionscores' => '贡献分数',
		'contributionscores-info' => 	"分数会用以下的的计分法去计算:\n".
			"*每一个唯一页面编辑过的有1分\n".
			"*(总编辑数)的平方根 - (总唯一页面数) * 2\n".
			"在这方面计算的分数会参看编辑多的样性跟编辑量相比。".
			"基本说，这个分数是会依主要的唯一编辑过?页面，以及考虑高编辑量 - 假设是一篇高质量的文章。",
		'contributionscores-top' => '(最高$1名)',
		'contributionscores-days' => '最近$1天',
		'contributionscores-allrevisions' => '全部修订'
	),

	'zh-hant' => array( 
		'contributionscores' => '貢獻分數',
		'contributionscores-info' => 	"分數會用以下的的計分法去計算:\n".
			"*每一個唯一頁面編輯過的有1分\n".
			"*(總編輯數)的平方根 - (總唯一頁面數) * 2\n".
			"在這方面計算的分數會參看編輯多的樣性跟編輯量相比。".
			"基本說，這個分數是會依主要的唯一編輯過嘅頁面，以及考慮高編輯量 - 假設是一篇高質量的文章。",
		'contributionscores-top' => '(最高$1名)',
		'contributionscores-days' => '最近$1天',
		'contributionscores-allrevisions' => '全部修訂'
	),
);

$allMessages['zh'] = $allMessages['zh-hans'];
$allMessages['zh-cn'] = $allMessages['zh-hans'];
$allMessages['zh-hk'] = $allMessages['zh-hant'];
$allMessages['zh-sg'] = $allMessages['zh-hans'];
$allMessages['zh-tw'] = $allMessages['zh-hant'];
$allMessages['zh-yue'] = $allMessages['yue'];
