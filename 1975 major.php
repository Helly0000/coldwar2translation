<?php

// EVT A

$titre1975a="THE SCRAMBLE!";


$texte1975a="The North-Vietnamese are decided to get done with it and launched a general offensive against the South.
<br>The US Congress is opposed to any supply of exceptional aid to Saigon and the US Presidency, stained by the Watergate scandal, has lost all credit on this issue.<br>
The South will have to face the communist wave on its own: how long will it survive?
";

// EVT B

$titre1975b="THE ANGOLAN CIVIL WAR";

$texte1975b="
The Portuguese revolution opens vast development opportunities in Africa.<br>
				The thaw does not concern the Third World and Africa is mature enough to joint the socialist camp.<br>
				Roles have already been allocated:
				<ul>";

				
if($_SESSION['CU']['accorddefurss']==1)
{
	
	$texte1975b.="The Cubans will provide men,</li>";
}
				
$texte1975b.=	"<li>the Eastern countries will send security experts,</li>
				<li>we will provide advisors, logistics and weapons.</li>
				</ul>
				A war is raging in Angola between the Marxist MPLA and two other movements, the UNITA and the FLNA.<br>
				If South Africa or the USA were to get involved in this conflict, we would create a giant powder keg.<br>";

$choix11975b="Let us not bother with Angola";
$choix11975btitle="No effect?";

$choix21975b="Let us massively support the MPLA. ($50)";
$choix21975btitle="Angola enters your sphere of influence + Cubans arrive in Angola (they are on your side of course) and the MPLA receive a substantial aid + tension increases";
if($_SESSION['CU']['accorddefurss']==1)
{
	$choix31975b="Let us let Cuba go there ($10)";
	$choix31975btitle="Cubans in Angola.";
}

$titre1975b1="THE ANGOLAN CIVIL WAR";

$texte1975b1="
This conflict ticks all the characteristics of a boggy mess capable of lasting over ten years. Better not dip a toe!
";

$titre1975b2="THE ANGOLAN CIVIL WAR";

$texte1975b2="
Africa is a fertile ground for the fight against colonialism and imperialism!<br>
We will stand by our Angolan brothers in all their fights.
";

$titre1975b3="THE ANGOLAN CIVIL WAR";

$texte1975b3="
The Cubans have been pushing us to intervene and we did not feel like curbing their revolutionary zeal.<br>
The Cubans are experienced in guerrilla combat tactics: this war in Angola should be over in no time.
";


// EVT C

$titre1975c="THE ANGOLAN CIVIL WAR";

$texte1975c="
The Portuguese revolution opens vast development opportunities in Africa.<br>
It seems that Moscow does not see the thaw as applying to the Third World.<br>
The CIA is pressing us to intervene in Angola where a civil war rages between the Marxist MPLA and two other movements, the UNITA and the FLNA.<br>
We would not want to see a country rich of natural resources falling into the socialist camp, would we?";

$choix11975c="Let us not bother with Angola";
$choix11975ctitle="The Angolan guerrilla groups will dive into traffickings of all kind and gain the trait Maffia";

$choix21975c="Let us massively support the UNITA and the FLNA. ($50)";
$choix21975ctitle="The guerrilla will be strongly supported and tension will increase";

$titre1975c1="THE ANGOLAN CIVIL WAR";

$texte1975c1="
This conflict ticks all the characteristics of a boggy mess capable of lasting over ten years. Better not dip a toe!<br>
Deprived of American funding, the UNITA turns to the lucrative diamonds and ivory traffickings.
";

$titre1975c2="THE ANGOLAN CIVIL WAR";

$texte1975c2="
The leaders of these guerrillas groups demonstrate a great potential: they realigned their speech on our positions and are ready to fight communism in Angola! 
";

// EVT D

$titre1975d="NO BREAD AND NO GAMES";

$texte1975d="
 Our agriculature cannot cope with the national demand…<br>
The bad harvests are coming one after another and we will have to get our supplies from the international markets.<br>";

if($_SESSION['terresvierges']==1)
{
	$texte1975d.="It seems we are paying today for the unreclaimable mistakes of the Krushchev era.<br>
	<span>
		==> Imports +$15
	</span>";
}
else
{
	$texte1975d.="It seems we are paying today for the unreclaimable mistakes of the Krushchev era.<br>
	<span>
		==> Imports +$5
	</span>";
}


// EVT E

$titre1975e="THE MUMMY";

$texte1975e="
Leonird Brezhnev's health is deteriorating; he suffered a stroke earlier this year.<br>
His physicians declared he is no longer capable of working full time.<br>
Actually, he spends his days watching the television and, sometimes, cannot stand up without help.<br>
He should completely stop working…<br>
However, the bonhomie of this leader and his imaginationless personality are seen by many as a stability factor for the regime: we would not want to see reckless reformers come to power, would we?<br>";

$choix11975e="Let us keep and celebrate Brezhnev";
$choix11975etitle="Your leader is impotent, but the system (despite being plunger in formalin) will keep functioning";

$choix21975e="Let him step down in favour of Andropov";
$choix21975etitle="Make way for the young! ^^: the master of KGB will come to power, tension and Stalinism will increase and the Brezhnevian well-being will come to an end";

$andropov="Yuri Andropov";

$titre1975e1="THE MUMMY";

$texte1975e1="
As long as Brezhnev is capable of standing up and saluting at the annual military parade, we can keep him!";

$titre1975e2="MAKE WAY FOR THE YOUNG!";

$texte1975e2="
The inner circle's keeper and master of KGB Yuri Andropov is tasked to meet the big challenges of the country.<br>
In the West, the chancelleries are already getting worried about a return of the \"hardliners\" in Kremlin...<br>

";















?>