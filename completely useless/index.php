<head>
<title>A completely useless generator that's doing nothing but making up some weird stuff</title>
<link rel="Stylesheet" type="text/css" href="style.css"/>
<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
</head>
<div class="background"></div>
<div class="brown"></div>
<?php
$first = array("a totally",
"an unbelievably",
"an incredibly",
"an impossibly",
"a wildly",
"an eerily",
"a completely",
"an extremely",
"an outrageously",
"an abnormally",
"a virtually",
"a partially",
"an excitedly",
"an unimpressively",
"a majestically",
"a miserably",
"a terribly",
"an unexpectedly",
"a horrifyingly",
"an interestingly",
"a foolishly",
"a wonderfully",
"a totally",
"an oddly",
"a seriously",
"a weirdly",
"an unimaginably",
"an unreasonably",
"a surprisingly");

$second = array("happy",
"brave",
"calm",
"delightful",
"eager",
"faithful",
"vacant",
"gentle",
"angry",
"bewildered",
"anxious",
"furious",
"purple",
"historical",
"eccentric",
"well-made",
"nasty",
"scientific",
"popular",
"vintage",
"nervous",
"silent",
"possessive",
"idiotic",
"royal",
"educated",
"ruddy",
"courageous",
"fanatical",
"discreet",
"gluten-free",
"tight",
"witty",
"colorful",
"elite",
"second-hand",
"nuclear",
"segmented",
"blast-ended",
"approved",
"chubby",
"hilarious",
"bitter",
"salty",
"average",
"respected",
"appaling",
"crazy",
"mediocre",
"brand new");

$third = array("tuna fish",
"carpet",
"teapot",
"inner feeling",
"omelette du fromage",
"architectural monument",
"heart attack",
"anime maniac",
"ferris wheel",
"driving license",
"credit card",
"basketball team",
"hate speech",
"interest rate",
"noise pollution",
"sparkling vodka",
"Thanksgiving turkey",
"potted plant",
"pancake",
"erotic toy",
"rubber duck",
"giantess",
"labrador retriever",
"double latte macchiato with crème brulée",
"stalker",
"machine gun",
"first-person shooter",
"right hand",
"jazz singer",
"sonata",
"newspaper",
"gorgonzola",
"aunt Sally",
"newbie wizard",
"pokemon");

//but with
$fourth[0] = array("an octopus' tentacle",
"a will to live",
"no luck",
"suspicious enthusiasm",
"extended consciousness",
"forbidden experiments on humans",
"parallel universes",
"a badass sword",
"the feeling of guilt",
"the grace of God",
"increased CO&#X2082 emission",
"Korean girlsband included",
"a meaning",
"a chance of falling in love",
"sixth sense",
"pope's quotation",
"that specific smell");

//but without
$fourth[1] = array("this strange look",
"you involved",
"its primal clumsiness",
"further interruption",
"bonus items",
"censorship",
"these dirty offers",
"your mother's approval",
"the fear in its eyes",
"any explanation",
"the dark tattoo",
"bigger thighs",
"any offensive spell");

//that makes
$fourth[2] = array("you see things",
"the hardest things seem easy",
"no sense at all",
"no profit at all",
"up so many excuses",
"everything impossible",
"it always awkward",
"you wanna die",
"everything clear",
"it through",
"the world a better place to live",
"you think",
"your day",
"up your mind",
"out this squeky voice when tickled");

//that takes	
$fourth[3] = array("nobody's point",
"seat in the first row",
"nothing for granted",
"after its mother-in-law",
"effect in global warming",
"the last slice of cake");

//that can
$fourth[4] = array("impress you",
"make something out of nothing",
"make America great again",
"do a somersault no-hands",
"clap with its ears",
"ride a unicycle juggling with three cherry pies",
"read your mind",
"introduce communism in the West",
"scream as loud as no one else");

//that
$fourth[5] = array("whispers dirty words to your ears",
"launches next generation rocket",
"keeps complaining all the time",
"visits your grandma when you don't",
"considers the possibility of living after death",
"is interested in necromancy",
"tempts you with that sexy look",
"becomes the object of desire",
"is up to no good",
"lives on its own",
"does the washing up",
"manipulates time");
	
$rest = rand(0, count($fourth)-1);
switch($rest)
{
	case 0:
	$add = 'but with';
	break;
	
	case 1:
	$add = 'but without';
	break;
	
	case 2:
	$add = 'that makes';
	break;
	
	case 3:
	$add = 'that takes';
	break;
	
	case 4:
	$add = 'that can';
	break;
	
	case 5:
	$add = 'that';
	break;
}
?>
<div class="sentence"><a href=".">
<?php
echo $first[rand(0, count($first)-1)].' '.$second[rand(0, count($second)-1)].' '.$third[rand(0, count($third)-1)].' '.$add.' '.$fourth[$rest][rand(0, count($fourth[$rest])-1)];
?>
</a></div>
<div class="stopka">by <a href="mailto:artistide@live.com" class="artistide">artistide</a>, 2017
<?php
if(date("Y") != 2017)
	echo '-'.date("Y");
?>
</div>