<?php 

$titre1961a="NEW FRONTIER";


$texte1961a="
\"We stand today on the edge of a New Frontier — the frontier of the 1960s, the frontier of unknown opportunities and perils, the frontier of unfilled hopes and unfilled threats. ... Beyond that frontier are uncharted areas of science and space, unsolved problems of peace and war, unconquered problems of ignorance and prejudice, unanswered questions of poverty and surplus\"
		 This is the ambitious programme of President Kennedy !
		 Do we have to actually implement it or were these mere campaign promises?
";

$choix11961a="Let us respect our programme! (prestige +25)";
$choix11961atitle="Unlocks events and (costly) reforms, increases contestation";

$choix21961a="Promises only bind those who believe in them…";
$choix21961atitle="Increase contestation";

$titre1961a1="NEW FRONTIER";

$texte1961a1="
The task is tremendous:<br>
- Create a Peace Corps<br>
- Create an Alliance for Progress with South Americabr>
- Ban partially nuclear tests via a treaty<br>
- Reform the labour laws<br>

 The very progressive tone of this programme kindles immense hopes but also worries the most conservative Americans.

";

$titre1961a2="NEW FRONTIER";

$texte1961a2="
Since his election at the White House, the President does not mention anymore his progressive projects.<br>
His advisers are afraid the Democratic electorate would lose patience...<br>

";


// EVT B

$titre1961b="A REVOLUTIONARY THEORIST";


$texte1961b="
The Cuban revolution proved successful and Che Guevara is getting bored with his official duties…<br>
		He theorised another way of making a revolution which diverges from the Trotskyist method: according to him,
		there is no need for a mass organisation. A small group of volunteer rural guerrilla fighters can create the right conditions for the revolution by gradually evolving into an actual people's army.<br>
		After all, this method worked well for Cuba!
";

$choix11961b="This is an interesting theory";
$choix11961btitle="The USSR has an easier time creating guerrillas in the Third World and Marxist guerrillas with the trait Rural are more efficient.";

if($_SESSION['paysjoueur']=="urss")
{
	$choix21961b="Let us create 10 Vietnams!";
	$choix21961btitle="Tension increases; Argentina, Congo, Vietnam, Bolivia and Colombia enter the Soviet sphere of influence. The USSR has an easier time creating guerrillas in the Third World and Marxist guerrillas with the trait Rural are more efficient.";
}

$titre1961b1="A REVOLUTIONARY THEORIST";

$texte1961b1="
This is a simple method: <br>
a small group of militants rallies the peasants little by little, transforming the guerrilla in a mass revolutionary movement.<br>
This is the foco theory, the revolutionary centre from where the revolution must start.<br>
Our analysts are sceptical about the efficiency of this method.
";

$titre1961b2="A REVOLUTIONARY THEORIST";
$texte1961b2="
This is a simple method: <br>
a small group of militants rallies the peasants little by little, transforming the guerrilla in a mass revolutionary movement.<br>
This is the foco theory, the revolutionary centre from where the revolution must start.
<br>All that remains to do is to apply it...
";

// EVT C

$titre1961c="AN ALLIANCE FOR PROGRESS";


$texte1961c="
Communism is now threatening the Americas!<br>
			We should initiate an action and propose the American nations an \"Alliance for Progress\".
			<br> « Therefore I have called on all people of the hemisphere to join in a new Alliance for Progress - Alianza para Progreso - a vast cooperative effort, unparalleled in magnitude and nobility of purpose, to satisfy the basic needs of the American people for homes, work and land, health and schools - techo, trabajo y tierra, salud y escuela.»
			<br>J.F. Kennedy
";

$choix11961c="Let us do it! ($5/month)";
$choix11961ctitle="Improve your relations with the nations of Americas";

$choix21961c="Let us spare no expenses! ($15/month)";
$choix21961ctitle="Improve your relations with the nations of Americas and will support their development";

$choix31961c="We should keep our money.";
$choix31961ctitle="You let the Americas at the mercy of communist subversion";

$titre1961c1="AN ALLIANCE FOR PROGRESS";


$texte1961c1="
Our financial strong arm, the U.S. Agency for International Development, will be the spearhead of our fight for democracy in the world!<br>
Some analysts however noticed that the allocated means will not be up to our claimed ambitions.
";

$titre1961c2="AN ALLIANCE FOR PROGRESS";

$texte1961c2="
Our financial strong arm, the U.S. Agency for International Development, will be the spearhead of our fight for democracy in the world!<br>
This is a true Marshall Plan for the Americas that is implemented here: let us hope it will be as efficient.
";

$titre1961c3="AN ALLIANCE FOR PROGRESS";

$texte1961c3="
Our friends in the Americas will have to be content with words because the American tax-payer dollars are far too valuable to be wasted in adventures abroad.
";

$allianceprogres=": Alliance for Progress";
$allianceprogresdetail="relations improve with the USA";

// EVT D

$titre1961d="THE BAY OF PIGS";

$texte1961d="
 We are ready to oust the revolutionnaries from Cuba!<br>
			 The CIA trained a 1400-men force of Cuban opponents who are ready to land on the island. They should enjoy a strong popular support and sweep the Castroist regime away.<br>
			 Six B-26 bombers with no flag are ready to take off to destroy the Cuban aviation. Our warships are cruising off the coasts of Cuba, which should fall like a ripe fruit.<br>
			 Our own forces should not directly participate in this attack in order to give the illusion of an action led by the Cuban loyalists.
			 Do you want to give the signal for reconquest?
";

$choix11961d="Let us launch the operation! ($5)";
$choix11961dtitle="The Cubans will act on their own.";

$choix21961d="Let our forces participate too! ($10)";
$choix21961dtitle="We must act before Cuba becomes an outpost of Marxism.";

$choix31961d="Let us put this operation on hold.";
$choix31961dtitle="You have a nasty feeling";



$titre1961d1="THE BAY OF PIGS";

$texte1961d1="
 The B-26s take off from Nicaragua and bomb the Cuban aviation on the ground.<br>
 The next day, the Cuban exiles forces land in the Bay of Pigs.
";

$texte1961dechec="<br>But Castro's forces launch a vigorous counterattack, supported by the aeroplanes that escaped the initial bombing.<br>
Landing barges are sunk and B-26s shot down: this is a real disaster.<br>
The people's uprising we were counting on never happened and it became obvious during the evening that the operation was an utter and complete failure!<br>
PRESTIGE -100

";


$texte1961dreussite="<br>Castro's forces launch a vigorous counterattack but fail to achieve any significant progresses without the support of their aviation which was destroyed by the B-26s.<br>
The Cuban exiles managed to proclaim a provisory government from their bridgehead and called the USA for help.<br>
Unfortunately, the people's uprising we were counting on never happened.

";

$titre1961d2="HAVANA LIBRE";

$texte1961d2="
 Our strategists agreed it was too hazardous to let a bunch of Cuban exiles run this operation.<br>
 Their calls for help were used as an excuse to land the Marines.<br>
 Casto's forces, despite a fierce resistance, rapidly had to abandon the Cuban capital.<br>
 A provisory government was established and the democracy restored!<br>
 However, the revolutionaries managed to regroup in the countrysides and the mountains; the first skirmishes with our patrols are already taking place.<br>
 Contrary to our expectations, the population did not welcome us as liberators... The first measures taken by the new government to free the factories and collectivised lands are implemented in a hostile ambiance.
";

$titre1961d3="ANOTHER TIME...";

$texte1961d3="
 Our strategies point out the numerous shortcomings of this unsatisfactory plan and the President wisely decided to adjourn this operation sine die.
";

// EVT E

$titre1961e="BRIGADA DE ASALTO 2506 ";

$texte1961e="
 The Cuban exiles will not be able to keep their bridgehead for a long time.<br>
 Will we answer their call for help?<br>
 Their proclamation of a new democratic government deludes no one and the population give assistance to Castro's revolutionary forces.<br>
 Our strategists disagree:<br>
 Some want the Brigade to make its way through inland and entrench itself in the mountains for a guerrilla war (we would supply them through the airs with parachutings).<br>
The others wants the plan to unfold as planned and send the Marines in Cuba to help the exiles.<br>
The wisest move would however be to ask our navy to evacuate them while this is still possible.
";

$choix11961e="Let us have them entrenching in the mountains";
$choix11961etitle="This will be a long march... Deteriorate your relations with the Brigade 2506";

$choix21961e="Let us evacuate Brigade 2506 (prestige -25)";
$choix21961etitle="We take cognizance of the failure of this operation";

$choix31961e="Let us send the Marines ($10)";
$choix31961etitle="If you want something done right, you have to do it yourself! ";

$titre1961e1="BRIGADA DE ASALTO 2506 ";

$texte1961e1="
 Brigade 2506 starts its long march toward the Santa Clara region, bombers clearing the road.<br>
 Out of the 1400 men of the Brigade, 250 fighters successfully escaped the Cuban troops and took refuge in the Sierra.<br>
 Supplies and ammunations will regularly parachuted to them during the night or delivery by speedboats.<br>
 How long will these desperados be able to hold?<br>

";

$titre1961e2="BRIGADA DE ASALTO 2506 ";

$texte1961e2="
 The intervention of our navy enabled the rescue of 1223 men of the assault brigade.<br>
 The Cuban propaganda is utilising prisoners and wounded men we could not rescue to parade and denounce the blatant interference of the USA in this aggression.<br>
 As a result of this rescue mission, our reputation is at its heighest in the Cuban community in the USA.
";

$titre1961e3="HAVANA LIBRE";

$texte1961e3="
 Our strategists agreed it was too hazardous to let a bunch of Cuban exiles run this operation.<br>
 Their calls for help were used as an excuse to land the Marines.<br>
 Casto's forces, despite a fierce resistance, rapidly had to abandon the Cuban capital.<br>
 A provisory government was established and the democracy restored!<br>
 However, the revolutionaries managed to regroup in the countrysides and the mountains; the first skirmishes with our patrols are already taking place.<br>
 Contrary to our expectations, the population did not welcome us as liberators... The first measures taken by the new government to free the factories and collectivised lands are implemented in a hostile ambiance.
";


// EVT F

$titre1961f="THE BAY OF PIGS";

$texte1961f="
  An imperialist invasion of Cuba was repelled!<br>
			 Cuban exiles trained in a secret CIA camp attempted to land in the Bay of Pigs while B-26 bombers were bombing the Cuban airports.<br>
			 The invaders did not meet the people's support they were hoping for and have been put to flight.<br>
			 Fidel Castro proclaimed the socialist nature of the Cuban revolution.
			 We should definitely support this revolution but how far?
";

$choix11961f="Let us help them to reach true socialism! ($5/month)";
$choix11961ftitle="The Cuban economy becomes collectivist, stability increases, your relations with Cuba improve.";

$choix21961f="Let us support them only with words.";
$choix21961ftitle="Cuba becomes finlandised.";

$titre1961f1="THE BAY OF PIGS";

$texte1961f1="
  Cuba was just welcomed with open arms in the socialist camp.<br>
  How will the United States of America react to this mortification?
 ";

$titre1961f2="THE BAY OF PIGS";

$texte1961f2="
  We know the limits in provoking the USA.<br>
  And Cuba is definitely a red line we cannot cross with impunity...
 ";

// EVT G

$titre1961g="OUR NEW FRONTIER: THE MOON!";

$texte1961g="
  «  I believe that this nation should commit itself to achieving the goal, before this decade is out, of landing a man on the moon and returning him safely to the earth. No single space project in this period will be more impressive to mankind, or more important for the long-range exploration of space; and none will be so difficult or expensive to accomplish. » J.F. Kennedy before a joint session of Congress, May 25, 1961
		<br>What a nice challenge!
		Should we promise this?
";

$choix11961g="Let us promise the Moon!";
$choix11961gtitle="You gain 500 points of prestige if you land on the Moon before December 1969, you lose 500 if you fail to achieve this objective";

$choix21961g="The Moon, for what purpose?";
$choix21961gtitle="Nothing happens";

$titre1961g1="OUR NEW FRONTIER: THE MOON!";

$texte1961g1="
  The NASA immediately sets to work: this dream looks like a feasable task and deadlines can be met.
";

$titre1961g2="OUR NEW FRONTIER: THE MOON!";

$texte1961g2="
  Everybody seems to have forgotten the bits on the \"unexplored fields of science and space\" in the campaign speeches from the President and so much the better!
";

// EVT H

$titre1961h="IT IS TIME TO KEEP OUR WORD";

$texte1961h="
  You should implement your programme!<br>
		Are foreseen (among other measures):<br>
		<ul>
		<li>an accomodation tax credit for the most penniless Americans,</li>
		<li>a council housing construction programme,</li>
		<li>a raise of the unemployment benefit,</li>
		<li>a raise of the allowance for the penniless,</li>
		<li>and food stamps.</li>
		</ul>
";

$choix11961h="Let us provide the adequate means! ($10/month and prestige +100)";
$choix11961htitle="Decreases contestation and costs $10 per month.";

$choix21961h="Let us limit the expenses ($5/month and prestige -50)";
$choix21961htitle="Increases contestation and costs $5 per month.";

$titre1961h1="IT IS TIME TO KEEP OUR WORD";

$texte1961h1="
 The Republicans denounce this socialist shift toward a nation that shows more solidarity.<br>

";

$titre1961h1="IT IS TIME TO KEEP OUR WORD";

$texte1961h1="
 The measures you took managed to displease both the Republicans and the Democrats.<br>
 Your popularity in opinion polls initiates a worrying decline with your traditional electorate.

";

// EVT I

$titre1961i="AN ANTI-FASCIST PROTECTION RAMPART FOR BERLIN";

$texte1961i="
The GDR is subjected to a massive emigration flow toward the FRG. The population drain is estimated at over 3 million people! <br>
Many Berliners are shuttling back and forth between the two zones and the border is more than porous: you can flee to the West simply by taking the metro!<br>
We should put an end to this humiliation by building a wall of defence between the two zones.
";

$choix11961i="Let us build the Berlin Wall (-150 prestige)";
$choix11961ititle="This decision will stop the mass emigration, build the wall, increase tension, deteriorate your relations with the FRG and increase Stalinism";

$choix21961i="They will come back after they discover the true face of capitalism!";
$choix21961ititle="Sharp decrease in Stalinism";

$titre1961i1="AN ANTI-FASCIST PROTECTION RAMPART FOR BERLIN";

$texte1961i1="
 In the night of August 12 to 13, protected by the army and the Volkspolizei, masons sets to work.<br>
 In the West, only Willy Brandt, mayor of the city, reacts:<br>
 \"The Berlin Senate publicly condemns the illegal and inhuman measures being taken by those who are dividing Germany, oppressing East Berlin, and threatening West Berlin…\".<br>
 The city will soon be cut into two watertight parts, sheltering our populations from the pernicious influence of capitalist societies.<br>

 ";

$titre1961i2="A RAMPART? WHAT A SILLY IDEA!";

$texte1961i2="
 Walter Ulbricht, Chairman of the State Council of the GDR, refuted the ludicrous rumours on the construction of a wall:<br>
 « I assume your question means that there are people in West Germany that wish us to mobilise the construction workers of the GDR to erect a wall. I am not aware of such plans. The construction workers of our capital are exclusively dedicated to the construction of flats, and their labour force is fully dedicated to that. No one has the intention of constructing a wall! » 
 <br>
 However, at the current pace of emigration, Walter Ulbricht will soon have no more people to accomodate...
 ";

// EVT J

$titre1961j="THE WALL OF SHAME";

$texte1961j="
  The GDR is subjected to a massive emigration flow toward the FRG. The population drain is estimated at over 3 million people! <br>
			 Many Berliners are shuttling back and forth between the two zones and the border is more than porous: you can flee to the West simply by taking the metro!<br>
			 The Soviets and their German ally dug trenches and uncoiled barbed wire.
			 The construction of a true wall, cutting Berlin in half, begins.

";

$choix11961j="This wall will fall one day…";
$choix11961jtitle="This will stop the mass emigration, build the wall, increase tension, deteriorate your relations with the FRG and increase Stalinism; the Soviets lose 150 prestige points.";

$titre1961j1="THE WALL OF SHAME";

$texte1961j1="
  --> USSR prestige - 150

";

// EVT K

$titre1961k="THE TSAR BOMBA";

$texte1961k="
  In the Arctic circle, we threw the biggest bomb in History: the mighty Tsar Bomba - 50 Mt.
			<br>With the full weight of its 15 Mt power, the American Castle Bravo is quite pathetic.
			<br>USSR is a force to be reckoned with!

";

$choix11961k="Vodka! (Prestige +300)";
$choix11961ktitle="Increase tension and decrease your arm race budget";

$titre1961k1="THE TSAR BOMBA";

$texte1961k1="
  --> DEFCON -2<br>
  --> Prestige +300<br>
  The West now take the Soviet science very seriously.

";

// EVT L

$titre1961l="THE TSAR BOMBA";

$texte1961l="
  In the Arctic circle, the Soviets threw the biggest bomb in History: the Tsar Bomba - 50 Mt.
			<br>With the full weight of its 15 Mt power, our Castle Bravo is quite pathetice.
			<br>This bomb is capable of entirely wiping out an urban area the size of Paris.<br>
			In a world where such a weapon exists, we must further develop our own arsenal!

";

$choix11961l="The Soviets will lead the world to its loss! (USSR prestige +300)";
$choix11961ltitle="Tension increases sharply";

$titre1961l1="THE TSAR BOMBA";

$texte1961l1="
  --> DEFCON -2<br>
  --> USSR Prestige +300<br>
  
";

// EVT M

$titre1961m="WHITE PAPERS";

$texte1961m="
  A team of advisors just came back from Vietnam and reported back on the South Vietnamese situation, highlighting the relevant aid to be provided.<br>
			 This report (the \"White Papers\") advocates for a massive intervention to crush the National Liberation Front (the Việt Cộng).
			 On the other hand, voices are raising in favour of non-interference: they claim there is nothing but blows to gain in Vietnam.<br>
			 What should we do?
";


$choix11961m="Let us spare no expenses! (-$50)";
$choix11961mtitle="Dispatches military advisors and mercenaries in South Vietnam and reinforces the Vietnamese armed forces";

$choix21961m="Let us disptach military advisors";
$choix21961mtitle="Dispatches military advisors";

$choix31961m="Let us avoid setting a foot in this quagmire";
$choix31961mtitle="Increases far right contestation, decreases pacificist contestation";

$titre1961m1="WHITE PAPERS";

$texte1961m1="
  Hawks in Washington eventually secured the presidential agreement to massively support the South-Vietnamese government.<br>
  Officially, the 18,000 military advisors that will supervise the Vietnamese army will not take part in the fighting.<br>
  Complete mercenary armies, not connected to the US government, are assembled and trained while the first cargo shits loaded with heavy armaments reach the shores of South Vietnam. 
";

$titre1961m2="WHITE PAPERS";

$texte1961m2="
 President Kennedy was hesitant, as he usually is, and eventually chose the median option: neither massive intervention nor complete withdrawal; military advisors will be dispatched there to train the South Vietnamese army.
";

$titre1961m3="WHITE PAPERS";

$texte1961m3="
 President Kennedy eventually decided: we will not commit ourselves in an uncertain adventure in Vietnam.<br>
 This capitulation throughout the countryside faced with the communist appetite triggered strong reactions from all anticommunist and far right movements of America. 
";

// EVT N

$titre1961n="TURNING TO THE RIGHT THREE TIMES";

$texte1961n="
  The famine already caused millions of deaths...<br>
  The population lacks everything and planks to make coffins are really scarce.<br>
  It is not that the coffin shortage is really an issue anyway, our people is too busy and too weak to bury the deads.<br>
  In the countrysude, the peasants sometimes even destroyed their own houses to supply the small local blast furnaces.<br>
  Our country is collapsing, it may be time to undertake our self-criticism?

";


$choix11961n="Let us confess our mistakes (budget +$10)";
$choix11961ntitle="Decrease in Maoism, increase in budget and end of the Great Leap Forward";

$choix21961n="The people is happy: you can tell that by the fact it does not revolt!";
$choix21961ntitle="Extremely sharp decrease in Maoism (his opponents actively prepare his fall)";

$titre1961n1="TURNING TO THE RIGHT THREE TIMES";

$texte1961n1="
  
  Liu Shaoqi returned terribly affected from his childhood village.<br>
  The famine reached such a point that the opponents to the Great Leap Forward gathered their courage to denounce the current policy at the last party congress!<br>
  After heated debates, the fiercest proponents of the people's communes had to make their self-criticism.<br>
  Mao, blamed and isolated, got out in the countryside to work on a socialist education movement and write poetry.
  <br><br>
  Working hours are reduced so that the people can restore their strengths back again; the country enters a long convalescence...<br>
  <br>--> New leader: Liu Shaoqi

";

$titre1961n2="PUTSCH IN THE CCP";

$texte1961n2="
  To quote Mao to a French socialist leader: \"I repeat in order to be clearly understood - there is no famine in China.\".<br>
  For that matter, China just refused a million ton of grain from the USSR and the production objectives were revised upwards.<br>

  <br>However...<br><br>   
";


//EVT O

$titre1961o="THE UNIVERSITY OF MEDINE";

$texte1961o="
  The Saudi government has just inaugurated a new university in Medina that should counterbalance the Egyptian university of al-Azhar, too progressive and Nasserist in the eyes of the Saud dynasty. <br>
  Muslim brothers fleeing Egypt are invited to take part in this new adventure and to spread a demanding Islam capable of producing a spiritual antidote to pan-Arab Baathist and Nasserist secular doctrines. <br>
";








?>