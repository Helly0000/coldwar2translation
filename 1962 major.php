<?php 

$titre1962a="LET US EXCLUDE CUBA FROM THE OAS!";


$texte1962a="

	Cuba clearly does not belong anymore to the Organisation of American States.<br>
	The very purpose of this organisation is to defend democracy and human rights, fight corruption and increase exchanges between the American countries.<br>
	The exclusion of Cuba is envisaged but certain States, like Mexico will not follow us.
	Should we punish Mexico for this act of rebellion?
";

$choix11962a="Let us exclude Cuba and close our borders to the Mexican workers!";
$choix11962atitle="Deteriorates your relations with Cuba and Mexico; (re)activates the Dulles doctrine.";

$choix21962a="Let us just exclude Cuba";
$choix21962atitle="No effect";

$choix31962a="Let us exclude all dictatorships! (Prestige +100)";
$choix31962atitle="Deteriorates your relations with all the American dictatorships and cancels the Dulles doctrine (if active).";

$titre1962a1="CUBA EXCLUDED FROM THE OAS!";

$texte1962a1="
Using the intervention of a non-American power in the region (the USSR) as a justification, the exclusion of Cuba was approved by 14 votes against 1 (Cuba's, whose else could it have been?).
Some countries abstained: Argentina, Bolivia, Brazil, Chile, Ecuador and Mexico. 
<br>Our threats seems to have paid.
";

$titre1962a2="CUBA EXCLUDED FROM THE OAS!";

$texte1962a2="
Using the intervention of a non-American power in the region (the USSR) as a justification, the exclusion of Cuba was approved by 14 votes against 1 (Cuba's, whose else could it have been?).
Some countries abstained: Argentina, Bolivia, Brazil, Chile, Ecuador and Mexico. 
That is a job well done!
";

$titre1962a3="LET US EXCLUDE ALL DICTATORSHIPS!";

$texte1962a3="
Your position is, to put it nicely, divisive... and ended up totally blocking the OAS.<br>
This virtuous stance poses the USA as the universal defenders of democracy, refusing trivial real politik approaches.<br>
The Deparment of State is nonetheless appalled by the result of this position: the American continent is more divided than ever.<br>
-->(Please look at the map to see with which countries your relations deteriorates)
";

$paysfache=" OAS meeting: relations with the USA deteriorate";
$paysfachedetail="deterioration of relations by two rungs and emergence of a pro-American opposition";

// EVT B

$titre1962b="OPERATION MONGOOSE";


$texte1962b="

	Fidel Castro is still in power…<br>
			General Edward Lansdale presented us his project to topple the communists and install a friendly government in Cuba.
			We cannot let this island be used as a bridgehead for other revolutions in South America.<br>
			Operation Mongoose contains over 30 different plans to prepare the fall of the Cuban regime by the end of this year.<br>
			A powder to make Castro's beard fall is even under study, as well as the possibility to booby-trap his cigars.<br>
			Should we support this plan?
";

$choix11962b="AYE! Whatever it takes! ($10)";
$choix11962btitle="The prestige points value of Cuba increases to 50 and Cuba is embargoed";

$choix21962b="A embargo will be sufficient ($10)";
$choix21962btitle="Cuba is embargoed";

$choix31962b="Let us turn over a new leaf";
$choix31962btitle="Cuba enters the Soviet sphere of influence";

$titre1962b1="OPERATION MONGOOSE";


$texte1962b1="

	A 2,500-men organisation is set to work full time on the operation.<br>
	If we managed to meet the deadlines, the Cuban government should fall by October 1962.
";

$titre1962b2="OPERATION MONGOOSE";


$texte1962b2="

	Executive Order 3447 is implemented to establish a total trade « embargo » between the United States of America and Cuba.<br>
	Deprived from all resouces, the despised Cuban government should fall like ripe fruit.
";

$titre1962b3="OPERATION MONGOOSE";


$texte1962b3="

	The trade between Cuba and the Eastern Ccountries and the rest of Latin America continue with renewed vigour, enabling the Cuban government to tighten its control of the country.<br>
	In Havana, the Soviet advisors are everywhere, including in cigar factories and sugar cane plantations.
";

// EVT C

$titre1962c="OPERATION ANADYR";


$texte1962c="

	Fidel Castro is still in power…<br>
			Our secret services let us know that the imperialists are planning a counterrevolutionary marine assault in Cuba for the end of this year.<br>
			Reinforcing the military capacity of the Cubans to defend the island is now urgent.
			Of course, a Soviet presence so close to the USA will raise international tension.<br>
	
";

if($_SESSION['TR']['missilesusa']==1)
{
	$texte1962c.="
	Our defence minister, Rodion Malinovsky, thinks we should take advantage of this situation to deploy nuclear ballistic missiles in Cuba.<br> The Americans already deployed their Jupiter ballistic missiles in Turkey, which can reach our territory in 10 minutes.<br>
	We should restore the balance.";
}


$choix11962c="Let us dispatch equipment and advisors ($10)";
$choix11962ctitle="Dispatches equipment and advisors";

$choix21962c="Let us dispatch troops and deploys nuclear ballistic missiles ($25)";
$choix21962ctitle="Cuba enters the Soviet sphere of influence and you dispatches troops and deploys nuclear ballistic missiles (your earn the connected prestige) ";

$choix31962c="Let us send a support message";
$choix31962ctitle="Nothing happens";

$titre1962c1="OPERATION ANADYR";

$texte1962c1="

	Five cargo ships filled with weapons just left the seaport of Baltiysk.<br>
	They will be escorted by Soviet warships in order to break through the imperialist blockade.<br>
	The Cuban army will soon be the best equipped army in the Caribeans!
	<br>--> Cuban armed forces +5

";

$titre1962c2="OPERATION ANADYR";

$texte1962c2="

	The leadership of the party just approved the sending of a 50,874 men force plus tons of military equipment.
	85 transport ships will be mobilised to move this force which entails a mecanised infantry division and 4 motorised infantry regiments supported by tanks.<br>
	A MiGs 21 fighters squadron will also take off for Cuba.<br>
	80 tactical nuclear warheads as well as many strategic ballistic missiles will supplement the system, making Cuba an impregnable fortress.

";

$titre1962c3="OPERATION ANADYR";

$texte1962c3="

	We warned the Cubans about the American preparations.

";

// EVT D

$titre1962d="ROBERT MCNAMARA";


$texte1962d="

Our Secretary of Defence, Robert McNamara, would like us to equip ourselves with a land army capable of rivalising with the Soviets.<br>
In his view, the use of the nuclear weapons must be first and foremost a deterrent. We must strengthen our conventional forces.
McNamara suggests to increase our military staff to 2,8 millions men.<br>
Some of our generals like Curtis LeMay think instead that we should use our nuclear superiority.
Each of these policy choice demands significant investment… What should we do?

";

$choix11962d="Let us stick with the Truman doctrine";
$choix11962dtitle="Bonus to economic aid actions";

$choix21962d="Let us further build our army! (budget +$15, arms race $10)";
$choix21962dtitle="Increases tension, increases total budget and arms race budget, cancels the Truman doctrine";

$choix31962d="Let us favour the nuclear approach";
$choix31962dtitle="Increases tension, immediate gain in R&D, you gain a bonus in nuclear showdowns, cancels the Truman doctrine";

$titre1962d1="THE TRUMAN DOCTRINE";


$texte1962d1="

The President, hesitant as he is used to, did not clearly chose one of the proposed options.<br>
Let us hope that the US Army will not suffer in the future from this American indecisiveness.

";


$titre1962d2="ROBERT MCNAMARA";

$texte1962d2="
The President supported Robert McNamara's advice: the balance of terror is guaranteed, our army will mostly be involved in conventional conflicts.<br>
The US army is clearly no match for the Soviet armed forces yet: within a few years, we will transform it into a formidable instrument capable of facing the Red Army on the battlefields.
";

$titre1962d3="CURTIS LEMAY";

$texte1962d3="
The President agreed with Curtis Lemay's position, against Robert McNamara's views.<br>
A nuclear war is inevitable but we can win it by striking first.<br>
Our army must actively prepare for this day.
<br>--> +10% of immediate gain in nuclear R&D
";

// EVT E

$titre1962e="CRISIS IN CUBA";


$texte1962e="
One of our U2 aeroplanes took unambiguous pictures of Cuba: the Soviets deployed nuclear ballistic missiles on the island!
		<br>Our secret services also detected four Soviet nuclear submarines off the coasts of Cuba!<br>
		We know from an informed Soviet mole that we have a headstart on the Soviets in case of nuclear conflict: they have few ballistics missiles and these are quite unreliable.
		Some of our generals advocate for the plain and simple bombing of these nuclear facilities.
		Our Secretary of Defence McNamara is in favour of tightening the blockade and engage negotiations.
";

if($_SESSION['TR']['missilesusa']==1)
{
	$texte1962e.="<br>We could for instance withdraw our ballistic missiles in Turkey in exchange for the Soviet withdrawal from Cuba…";
}

$choix11962e="Let us bomb the facilities to be in a favourable position";
$choix11962etitle="A nuclear showdown, with significant risks to worsen, is triggered but the Soviets will not benefit from the Cuban ballistic missiles bonus.";

$choix21962e="Let us demand the Soviet withdrawal";
$choix21962etitle="Triggers a nuclear showdown";

if($_SESSION['TR']['missilesusa']==1)
{
	$choix31962e="Let us negotiate, missiles against missiles";
	$choix31962etitle="Decreases tension and withdraws ballistic missiles from Cuba and Turkey";
}
else
{
	$choix31962e="Let it go... (prestige -150)";
	$choix31962etitle="Cuba enters the Soviet sphere of influence";
}

$titre1962e1="CRISIS IN CUBA";


$texte1962e1="
A nuclear showdown broke out between the two superpowers after the US Air Force bombed the Soviet ballistic missiles facilities on the island of Cuba.
";

$titre1962e2="CRISIS IN CUBA";


$texte1962e2="
A nuclear showdown broke out between the two superpowers after the USSR deployed ballistic missiles facilities on the island of Cuba.
";

if($_SESSION['TR']['missilesusa']==1)
{
	$titre1962e3="CRISIS IN CUBA";
	$texte1962e3="
	We eventually found a common ground and the removal of both camp's ballistic missiles from Cuba and Turkey was decided.<br>
	Will this double gesture initiate a durable era of Détente between the two blocs?
	";
}
else
{
	$titre1962e3="CRISIS IN CUBA";
	$texte1962e3="
	America will have to get used living with the threat of Soviet missiles pointed at its territory from the Cuban soil.<br>
	This will be an easy task for the ordinary citizen because we refrained from informing our public opinion of the very existence of these ballistic missiles.
	";
}

//  EVT F

$titre1962f="CRISIS IN CUBA";


$texte1962f="
The Americans discovered our ballistic missiles facilities in Cuba!
		<br>We have more cargo ships heading toward the island that will have to break through the blockade in order to deliver their cargo.<br>
		Kennedy summons us to stop the ongoing operations!<br>
		We know that a traitor informed the imperialists about the weaknesses of our nuclear armament.<br>
		The missiles already deployed on the island are partly offsetting our disadvantage.
";

if($_SESSION['TR']['missilesusa']==1)
{
	$texte1962f.="<br>This is a golden opportunity to pressure the Americans to remove their ballistic missiles from Turkey.";
}

$texte1962f.="<br>What should we do?";

$choix11962f="Let us break the blockade!";
$choix11962ftitle="Triggers a nuclear showdown";

$choix21962f="Let us withdraw (USA prestige +150) ";
$choix21962ftitle="The United States of America gain 150 prestige points and Cuba becomes finlandised";

if($_SESSION['TR']['missilesusa']==1)
{
	$choix31962f="Let us negotiate, missiles against missiles";
	$choix31962ftitle="Decreases tension and withdraws ballistic missiles from Cuba and Turkey";
}

$titre1962f1="CRISIS IN CUBA";


$texte1962f1="
A nuclear showdown broke out between the two superpowers after the USSR broke through the blockade and deployed ballistic missiles facilities on the island of Cuba.
";

$titre1962f2="CRISIS IN CUBA";
$texte1962f2="
Cuba is a casus belli for the USA and the Politburo preferred to remove the Soviet ballistic missiles from Cuba in order to avoid a World War 3.<br>
";

$titre1962f3="CRISIS IN CUBA";
$texte1962f3="
	We eventually found a common ground and the removal of both camp's ballistic missiles from Cuba and Turkey was decided.<br>
	Will this double gesture initiate a durable era of Détente between the two blocs?
";

// EVT G

$titre1962g="THE SINO-INDIAN WAR";


$texte1962g="
The Chinese are incontrollable…<br>
				After having annexed Tibet, they engaged hostilities with India to modify their common border.
				The PLA occupies the Aksai Chin and Arunachal Pradesh territories, two extremely montainous areas.<br>
				The Indian State which was busy getting closer to China did not see that coming…<br>
				Should we continue supporting such an impredictable partner?
";

$choix11962g="Let us clearly support India";
$choix11962gtitle="Improves your relations with India and deteriorates your relations with China; this decision will trigger the Sino-Soviet split";


$choix21962g="Gardons le silence";
$choix21962gtitle="Nothing happens";

$choix31962g="Let us clearly support China";
$choix31962gtitle="Improves your relations with China and deteriorates your relations with India";

$titre1962g1="THE SINO-INDIAN WAR";


$texte1962g1="
The conflict takes place along a 2,500km border, at a very high altitude (sometimes higher than 5,000m).<br>
The Indian garrisons are shaken and caught completely unprepared by this Chinese attack.<br>
The Politburo clearly denounced this invasion and cut off diplomatic relations with People's China.<br>
Chairman Mao's aura will emerge tarnished from this war.
";

$titre1962g2="THE SINO-INDIAN WAR";


$texte1962g2="
The conflict takes place along a 2,500km border, at a very high altitude (sometimes higher than 5,000m).<br>
The Indian garrisons are shaken and caught completely unprepared by this Chinese attack.<br>
The Politburo made no comment in order no to divide the socialist camp, at the risk of making us look like complicit in this invasion.<br>
Whatever the outcome may be, Chairman Mao's aura will emerge tarnished from this war.
";

$titre1962g3="THE SINO-INDIAN WAR";


$texte1962g3="
The conflict takes place along a 2,500km border, at a very high altitude (sometimes higher than 5,000m).<br>
The Indian garrisons are shaken and caught completely unprepared by this Chinese attack.<br>
The Politburo clearly supported China in its territorial claims.<br>
In the West, some already see a new Korean war laying ahead: this conflict can however not be anything more than a limited border war in an area that does not physically enables mass fighting.<br>
Whatever the outcome may be, Chairman Mao's aura will emerge tarnished from this war.
";

// EVT H

$titre1962h="A BOOK";


$texte1962h="
Aleksandr Tvardovsky, director of the <i>Novy Mir</i> magazine, is moving heaven and earth to publish a novel currently in the focus of censorship.<br>
				This novel, <i>One Day in the Life of Ivan Denisovich</i>, written by Aleksandr Solzhenitsyn, describes a typical day in gulag.<br>
				This novel takes place in the 1950s: the Stalin era is now bygone and this book is safe for the political regime.<br>
				We could perhaps authorise its publication…
";

$choix11962h="Let the censorship proceed as usual";
$choix11962htitle="Nothing happens";


$choix21962h="Let us publish it!";
$choix21962htitle="Sharp decrease in Stalinism";

$titre1962h1="A BOOK";


$texte1962h1="
Nobody will ever read this polemical novel...
";

$titre1962h2="A BOOK";


$texte1962h2="
Thanks to the agreement of the Politburo and Nikita Krushchev's committed support, the novel is eventually published in the Novy Mir magazine.<br>
« Why can't you understand? The stars fall down now and then. The gaps have to be filled. » pp 90-91<br>
Let us hope nobody will see this book as a metaphor of the Soviet Union...

";


// EVT I

$titre1962i="DUEL OF THE FATES";

$texte1962i="
  India discovered we extended our roads network in areas that are still claim by our two countries.<br>
  The Aksai Chin territory is claimed by India but these claims on obviously Chinese territories date back to borders from the time of the British Empire, making them de facto null and void.<br>
  The Indians refused our wishes for negotiations and are actively preparing for war.<br>
  India clearly supports the Tibetan insurgents: our strategic interest dictates us to close this border and control these regions.<br>
  The Indian Army reinforced its garrisons and agressively patrols the borders, which is the source of regular engagements with the People's Liberation Army.<br>

";

$choix11962i="We cannot stand this anymore, let us chase away the Indians! ($10)";
$choix11962ititle="Your troops are better prepared, you should win (Your relations with India will of course collapse)";

$choix21962i="Let us invade India for a complete victory ($25)";
$choix21962ititle="This will be a logistic nightmare but the relief is the same for the Indians (Your relations with India will of course collapse and DEFCON is set to 1)";

$choix31962i="Let us unilaterally withdraw our troops from these areas (Prestige -25)";
$choix31962ititle="Reinforces the stability of India and the strength of the Tibetan bandits";


$titre1962i1="FIGHTING IN AKSAI CHIN";

$texte1962i1="
  

";

$victoireakaichin1="
VICTORY!<br>
The ratio of power is clearly in favour of the People's Liberation Army.<br>
  Our troops are used to the climate and the roads network we built makes logitics easier for us.<br>
  We are also 8 time more than the Indians.<br>
  As a result, it is with great ease that we chased the Indians away from the contested territories, despite fierce resistance in some places.<br>
  The Indian troops, isolated and scattered along the frontline, are beaten position by position.<br>
  Once our victory was solid and unquestionable, we reopened peace talks with India.<br>
  Aksai Chin is ours thanks to our brave soldiers. However, as magnanimity is the sign of great conquerors, we evacuated some other territories we were occupying.<br>
--> Prestige +50";

$defaiteakaichin="
WE LOST FACE!<br>
Despite the ratio of power that seemed clearly in our favour, our assaults could not overcome the Indian fortified positions.<br>
The Indian Army proved itself a worthy heir of the British colonial army traditions.<br>
The Indian counterattack drove us out of Aksai Chin and Arunachal Pradesh.<br>
What a humiliation! 
The poorness of our armament and military logistics led us to this utter failure.<br>
We perhaps should have devoted more effort to becoming a military superpower...
--> Prestige -100;

";



$titre1962i2="THE GATE OF INDIA IS OPEN!";

$texte1962i2="The ratio of power is clearly in favour of the People's Liberation Army.<br>
  Our troops are used to the climate and the roads network we built makes logitics easier for us.<br>
  It is with great ease that we chased the Indians away from the contested territories, despite fierce resistance in some places.<br>
  Aksai Chin is ours thanks to our brave soldiers, our army continues its attack deeply in the Indian core territory.


";

$titre1962i3="A WISE RETREAT";

$texte1962i3=" 
What is the point of fighting for some lost rocks at 5,000m hight altitude?<br>
Our retreat enabled the restart of discussions with the Indians on boundary delineation.<br>
However, our patrols let us know that Indians are not playing by the rules and moved their outposts forward by 80km...
<br>--> Prestige -25
";















?>