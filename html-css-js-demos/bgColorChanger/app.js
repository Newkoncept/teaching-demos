let player = document.querySelector(".mpPlayer");
document.body.addEventListener("keydown", singKey);

var alphabets = [
	"a",
	"b",
	"c",
	"d",
	"e",
	"f",
	"g",
	"h",
	"i",
	"j",
	"k",
	"l",
	"m",
	"n",
	"o",
	"p",
	"q",
	"r",
	"s",
	"t",
	"u",
	"v",
	"w",
	"x",
	"y",
	"z",
];
var colors = [
	"aliceblue",
	"aquamarine",
	"blue",
	"darkgrey",
	"cadetBlue",
	"darkred",
	"deeppink",
	"dimgray",
	"dodgerblue",
	"fuchsia",
	"ghostwhite",
	"hotpink",
	"lawngreen",
	"lightpink",
	"tomato",
	"maroon",
	"mediumblue",
	"midnightblue",
	"slategrey",
	"orchid",
	"peru",
	"purple",
	"royalblue",
	"seashell",
	"sienna",
	"teal",
	"black",
];

function singKey(e) {
	var result = keyValidator(e);

	if (result !== undefined) {
		displayBodyColor(result);
		playAudio(result);
	} else {
		displayBodyColor(colors.length - 1);
	}
}

function keyValidator(userKey) {
	var key = userKey.key;
	var num = alphabets.indexOf(key);

	if (alphabets.indexOf(key) !== -1) {
		return num;
	}
}

function displayBodyColor(colorNumber) {
	document.body.style.background = colors[colorNumber];
}

function playAudio(userKey) {
	// player.src = `WALE MOVIES/0${userKey} Track ${userKey}.mp3`;
	// player.volume = 1;
	// player.play();
}
