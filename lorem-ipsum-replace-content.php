<?php
/**
 * Plugin Name:       Lorem Ipsum Replace Content
 * Plugin URI:        https://github.com/circlecube/lorem-ipsum-replace-content
 * Description:       Render your content with lorem ipsum, word for word.
 * Version:           0.4
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Evan Mullins
 * Author URI:        https://circlecube.com
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/*

  Copyright 2021 Evan Mullins (evan@circlecube.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
  
*/

class LoremIpsumReplaceContent {

	/**
	 * Constructor
	 */
	function __construct() {
		//Hook up to the init action
		add_action( 'init', array( &$this, 'init_lorem_ipsum_replace_content' ) );
	}
  
	/**
	 * Runs when the plugin is initialized
	 */
	function init_lorem_ipsum_replace_content() {
		add_filter( 'the_content', array( &$this, 'lorem_ipsumize_the_content' ) );    
	}

	function lorem_ipsumize_the_content($content) {
		//add spaces between html elements
		$htmlentities = explode('>
<', $content);
		$content = implode('> <', $htmlentities);

		$source = 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi, in interdum massa nibh nec erat. Quapropter si ea, quae dixi, sole ipso illustriora et clariora sunt. Si omnia dixi hausta e fonte naturae, si tota oratio nostra omnem sibi fidem sensibus confirmat, id est incorruptis atque integris testibus, si infantes pueri. Mutae etiam bestiae paene loquuntur magistra ac duce natura nihil esse prosperum nisi voluptatem, nihil asperum nisi dolorem, de quibus neque depravate iudicant neque corrupte, nonne ei maximam gratiam habere debemus, qui hac exaudita quasi voce naturae sic eam firme graviterque comprehenderit. Ut omnes bene sanos in viam placatae, tranquillae, quietae, beatae vitae deduceret. Qui quod tibi parum videtur eruditus, ea causa est, quod nullam eruditionem esse duxit, nisi quae beatae vitae disciplinam iuvaret. Sunt autem, qui dicant foedus esse quoddam sapientium, ut ne minus amicos quam se ipsos diligant. Quod et posse fieri intellegimus et saepe etiam videmus, et perspicuum est nihil ad iucunde vivendum reperiri posse, quod coniunctione tali sit aptius. Quibus ex omnibus iudicari potest non modo non impediri rationem amicitiae, si summum bonum in voluptate ponatur, sed sine hoc institutionem omnino amicitiae non posse reperiri. Atque ut odia, invidiae, despicationes adversantur voluptatibus, sic amicitiae non modo fautrices fidelissimae, sed etiam effectrices sunt voluptatum tam amicis quam sibi, quibus non solum praesentibus fruuntur, sed etiam spe eriguntur consequentis ac posteri temporis. Quod quia nullo modo sine amicitia firmam et perpetuam iucunditatem vitae tenere possumus neque vero ipsam amicitiam tueri, nisi aeque amicos et nosmet ipsos diligamus, idcirco et hoc ipsum efficitur in amicitia, et amicitia cum voluptate conectitur. Nam et laetamur amicorum laetitia aeque atque nostra et pariter dolemus angoribus. Tribus igitur modis video esse a nostris de amicitia disputatum. Alli cum eas voluptates, quae ad amicos pertinerent, negarent esse per se ipsas tam expetendas, quam nostras expeteremus, quo loco videtur quibusdam stabilitas amicitiae vacillare, tuentur tamen eum locum seque facile, ut mihi videtur, expediunt. Ut enim virtutes, de quibus ante dictum est, sic amicitiam negant posse a voluptate discedere. Nam cum solitudo et vita sine amicis insidiarum et metus plena sit, ratio ipsa monet amicitias comparare, quibus partis confirmatur animus et a spe pariendarum voluptatum seiungi non potest. Nisi autem rerum natura perspecta erit, nullo modo poterimus sensuum iudicia defendere. Quicquid porro animo cernimus, id omne oritur a sensibus, qui si omnes veri erunt, ut Epicuri ratio docet, tum denique poterit aliquid cognosci et percipi. Quos qui tollunt et nihil posse percipi dicunt, li remotis sensibus ne id ipsum quidem expedire possunt, quod disserunt. Praeterea sublata cognitione et scientia tollitur omnis ratio et vitae degendae et rerum gerendarum. Sic e physicis et fortitudo sumitur contra mortis timorem et constantia contra metum religionis et sedatio animi omnium. Rerum occultarum ignoratione sublata et moderatio natura cupiditatum generibusque earum explicatis, et, ut modo docui, cognitionis regula et iudicio ab eadem illa constituto veri a falso distinctio traditur. Quodsi corporis gravioribus morbis vitae iucunditas. Impeditur quanto magis animi morbis impediri necesse est animi autem morbi sunt cupiditates inmensae et inanes divitiarum, gloriae, dominationis, libidinosarum etiam voluptatum. Accedunt aegritudines, molestiae, maerores, qui exedunt animos conficiuntque curis hominum non intellegentium nihil dolendum esse animo, quod sit a dolore corporis praesenti futurove seiunctum. Nec vero quisquam stultus non horum morborum aliquo laborat, nemo igitur est non miser. Neque enim civitas in seditione beata esse potest nec in discordia dominorum domus, quo minus animus a se ipse dissidens secumque discordans gustare partem ullam liquidae voluptatis et liberae potest. Atqui pugnantibus et contrariis studiis consiliisque semper utens nihil quieti videre, nihil tranquilli potest. Sed ut iis bonis erigimur, quae expectamus, sic laetamur iis, quae recordamur. Stulti autem malorum memoria torquentur, sapientes bona praeterita grata recordatione renovata delectant. Est autem situm in nobis ut et adversa quasi perpetua oblivione obruamus et secunda iucunde ac suaviter meminerimus. Sed cum ea, quae praeterierunt, acri animo et attento intuemur, tum fit ut aegritudo sequatur, si illa mala sint, laetitia, si bona. Iam illud quidem perspicuum est, maximam animi aut voluptatem aut molestiam plus aut ad beatam aut ad miseram vitam afferre momenti quam eorum utrumvis, si aeque diu sit in corpore. Non placet autem detracta voluptate aegritudinem statim consequi, nisi in voluptatis locum dolor forte successerit, at contra gaudere nosmet omittendis doloribus, etiamsi voluptas ea, quae sensum moveat, nulla successerit, eoque intellegi potest quanta voluptas sit non dolere. Quodsi ne ipsarum quidem virtutum laus, in qua maxime ceterorum philosophorum exultat oratio, reperire exitum potest, nisi derigatur ad voluptatem. Voluptas autem est sola, quae nos vocet ad se et alliciat suapte natura, non potest esse dubium, quin id sit summum atque extremum bonorum omnium, beateque vivere nihil aliud sit nisi cum voluptate vivere. Quae enim cupiditates a natura proficiscuntur, facile explentur sine ulla iniuria, quae autem inanes sunt, iis parendum non est. Nihil enim desiderabile concupiscunt, plusque in ipsa iniuria detrimenti est quam in iis rebus emolumenti, quae pariuntur iniuria. Itaque ne iustitiam quidem recte quis dixerit per se ipsam optabilem, sed quia iucunditatis vel plurimum afferat. Nam diligi et carum esse iucundum est propterea, quia tutiorem vitam et voluptatem pleniorem efficit. Itaque non ob ea solum incommoda, quae eveniunt inprobis, fugiendam inprobitatem putamus, sed multo etiam magis, quod, cuius in animo versatur, numquam sinit eum respirare, numquam adquiescere. Invitat igitur vera ratio bene sanos ad iustitiam, aequitatem, fidem, neque homini infanti aut inpotenti iniuste facta conducunt, qui nec facile efficere possit, quod conetur, nec optinere. Si effecerit, et opes vel fortunae vel ingenii liberalitati magis conveniunt, qua qui utuntur, benivolentiam sibi conciliant et, quod aptissimum est ad quiete vivendum, caritatem, praesertim cum omnino nulla sit causa peccandi. Multi etiam, ut te consule, ipsi se indicaverunt. Quodsi qui satis sibi contra hominum conscientiam saepti esse et muniti videntur, deorum tamen horrent easque ipsas sollicitudines, quibus eorum animi noctesque diesque exeduntur, a diis inmortalibus supplicii causa importari putant. Quae autem tanta ex improbis factis ad minuendas vitae molestias accessio potest fieri, quanta ad augendas, cum conscientia factorum, tum poena legum odioque civium. Et tamen in quibusdam neque pecuniae modus est neque honoris neque imperii nec libidinum nec epularum nec reliquarum cupiditatum, quas nulla praeda umquam improbe parta minuit, sed potius inflammat, ut coercendi magis quam dedocendi esse videantur. Eadem fortitudinis ratio reperietur. Nam neque laborum perfunctio neque. Moderatio natura cupiditatum generibusque earum explicatis, et, ut modo docui, cognitionis regula et iudicio ab eadem illa constituto veri.';
		$source = explode(' ', $source);
		$source_length = count($source);
		$findme1 = '<';
		$findme2 = '>';
		$findme3 = '</';
		$findme4 = '[';
		$findme5 = ']';
		//shuffle( $source );
		$words = explode(' ', $content);
		$words_length = count($words);
		$html_words = array();
		for ($i=0; $i < $words_length; $i++){
			$html1 = $html2 = $html3 = $html4 = $html5 = false;
			$html1 = strpos($words[$i], $findme1);
			$html2 = strpos($words[$i], $findme2);
			$html3 = strpos($words[$i], $findme3);
			$html4 = strpos($words[$i], $findme4);
			$html5 = strpos($words[$i], $findme5);

			//if doesn't include html entitity replace the word
			if ( $html1 === false ){
				if ( $html4 === false && $html5 === false ) {
					$words[$i] = $source[rand(0, $source_length)];
				}
			}
			//if has html entity
			else{
				//opening html entity because no close found
				if ($html3 === false ){
					//check if empty 'word'
					if (strlen($words[$i]) > $html2 + 1) {
						$htmle = substr( $words[$i], 0, $html2+1);
						$words[$i] = $htmle . $source[rand(0, $source_length)];
					}
				}
				//closing html entity
				else{
					$htmle = substr( $words[$i], $html3, strlen($words[$i]));
					$words[$i] = $source[rand(0, $source_length)] . $htmle;
				}
			}
		}
		$content = implode(' ', $words);

		return $content; 
	}
  
} // end class
new LoremIpsumReplaceContent();

?>
