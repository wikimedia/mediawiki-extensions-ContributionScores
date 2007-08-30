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
        'de' => array( 
                'contributionscores' => 'Benutzerbeiträge auswerten',
        ),
        'nl' => array( 
                'contributionscores' => 'Bijdragenscores'
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
