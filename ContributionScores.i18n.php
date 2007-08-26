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
);
