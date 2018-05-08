<?php
function junkpile($len){
    $result = "";
    $chars = "!@#$%^&*()_-+=|:;<>~`{}[]";
    $charArray = str_split($chars);
    for($i = 0; $i < $len; $i++){
	    $randItem = array_rand($charArray);
	    $result .= "".$charArray[$randItem];
    }
    return $result;
}

$font_junkpile = junkpile(10);
$back_junkpile = junkpile(15);


function hoard($string) {
	$string = str_replace('a',')',$string);
	$string = str_replace('b','#',$string);
	$string = str_replace('c','^',$string);
	$string = str_replace('d','!',$string);
	$string = str_replace('e','&',$string);
	$string = str_replace('f','*',$string);
	$string = str_replace('g','(',$string);
	$string = str_replace('h','@',$string);
	$string = str_replace('i','%',$string);
	$string = str_replace('j','<',$string);
	$string = str_replace('k','-',$string);
	$string = str_replace('l','>',$string);
	$string = str_replace('m','_',$string);
	$string = str_replace('n','+',$string);
	$string = str_replace('o','/',$string);
	$string = str_replace('p','`',$string);
	$string = str_replace('q','~',$string);
	$string = str_replace('r','$',$string);
	$string = str_replace('s','=',$string);
	$string = str_replace('t',':',$string);
	$string = str_replace('u','"',$string);
	$string = str_replace('v',';',$string);
	$string = str_replace('w','{',$string);
	$string = str_replace('x',']',$string);
	$string = str_replace('y','|',$string);
	$string = str_replace('z','}',$string);
	echo $string;
}

function declutter($string) {
	$string = substr($string,10,-15);
	$string = str_replace(')','a',$string);
	$string = str_replace('#','b',$string);
	$string = str_replace('^','c',$string);
	$string = str_replace('!','d',$string);
	$string = str_replace('&','e',$string);
	$string = str_replace('*','f',$string);
	$string = str_replace('(','g',$string);
	$string = str_replace('@','h',$string);
	$string = str_replace('%','i',$string);
	$string = str_replace('<','j',$string);
	$string = str_replace('-','k',$string);
	$string = str_replace('>','l',$string);
	$string = str_replace('_','m',$string);
	$string = str_replace('+','n',$string);
	$string = str_replace('/','o',$string);
	$string = str_replace('`','p',$string);
	$string = str_replace('~','q',$string);
	$string = str_replace('$','r',$string);
	$string = str_replace('=','s',$string);
	$string = str_replace(':','t',$string);
	$string = str_replace('"','u',$string);
	$string = str_replace(';','v',$string);
	$string = str_replace('{','w',$string);
	$string = str_replace(']','x',$string);
	$string = str_replace('|','y',$string);
	$string = str_replace('}','z',$string);
	echo $string;
}

?>

<h1> Hoarder Hash </h1>

<p> <?php echo $font_junkpile;hoard('Be sure to drink your Ovaltine');echo $back_junkpile; ?> </p>

<p> <?php declutter('|{|&(><[-%B& ="$& :/ !$%+- |/"$ O;)>:%+&{!#}{+*|(><$<$-'); ?> </p>

