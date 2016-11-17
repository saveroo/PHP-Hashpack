#!/usr/bin/php
<?php
pertamax();
global $bn;
global $salah;
$salah = "[-]Please select the available module\n";
while (1){
		module();
		fwrite(STDOUT, "[X]Module~# ");
		$modtype = trim(fgets(STDIN));
	if($modtype == 1){
		module();
		fwrite(STDOUT, "[X]MD5Module~# ");
		$cli = trim(fgets(STDIN));
	if($cli == 1){
		fwrite(STDOUT, "\n[+]DictionaryAttack Module Selected\n");
		fwrite(STDOUT, "[X]Md5Hash~# ");
		$hash = trim(fgets(STDIN));
		if(ereg("([0-9a-f]{32})", $hash))
		{
			fwrite(STDOUT, "[X]Wordlist~# ");
				$list = trim(fgets(STDIN));
				if(preg_match("/txt/",$list) && is_file($list)){
					mulai();
					cocokin($hash,$list);
					exit;
				}else{
					print "[-]File Must Be TXT";
				}
		}else{
		fwrite(STDOUT, "\n[X]Invalid hash inputted\n\n");
		}
	}else
	if($cli == 2){
		die('[-]I said soon!');
	}else
	if($cli == 3){
		fwrite(STDOUT, "\n[+]Bruteforce Module Selected\n");
		fwrite(STDOUT, "[X]Md5Hash~# ");
		$hash= trim(fgets(STDIN));
		define('HASH', "".$hash."");
		$bego = "md5";
		if(ereg("([0-9a-f]{32})", $hash))
		{
			brutusinfo();
			fwrite(STDOUT,"[+]Warning!! more combination will take more and more! time\n\n");
			fwrite(STDOUT,"[X]CharCombination~# ");
			$chr = trim(fgets(STDIN));
		switch($chr){
			case 1:
				$kombinasi = 'abcdefghijklmnopqrstuvwxyz';break;
			case 2:
				$kombinasi = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';break;
			case 3:
				$kombinasi = '0123456789';break;
			case 4:
				$kombinasi = '^&*()+=-_\/\'";:,.<>?~`!@#$% ';break;
			case 5:
				$kombinasi = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ^&*()+=-_\/\'";:,.<>?~`!@#$% ';break;
			case 6:
				fwrite(STDOUT,"[X]CustomChars~# ");
				$kombinasi = trim(fgets(STDIN));break;
			}
			if($chr <= 6){
			fwrite(STDOUT,"[X]CharLength~# ");
			$charpanjang = trim(fgets(STDIN));
			$panjangkombinasi = strlen($kombinasi);
			fwrite(STDOUT,"[-]HashToBrute~# ".HASH."\n");
			fwrite(STDOUT,"[+]Please Wait!!\n");
			for($tm = 1;$tm < $charpanjang+1;$tm++){
			print "[+]Trying length ".$tm."\n";
			brutal($tm, 0, '');
			}
			fwrite(STDOUT,"\n[-]Sorry dude result not found! Try another combination\n");
			exit;
			}
		}else{
			unset($bn);
			fwrite(STDOUT, "\n[X]Invalid hash inputted\n\n");
		}
	}else
	if($cli == 4){
			fwrite(STDOUT, "[+]MD5Hash Generator Module Selected\n\n");
			fwrite(STDOUT, "[X]SaveToFile(If Yes Type Filename)~# ");
		$simpen = trim(fgets(STDIN));
			fwrite(STDOUT, "\n[-](y) for indefinitely (n) for single word\n");
			fwrite(STDOUT, "[X]Store Indefinitley(y/n)~# ");
		$ampemati = trim(fgets(STDIN));
		if(!empty($simpen)){
			fwrite(STDOUT, "\n[+]Example ':::' = (test:::098f6bcd4621d373cade4e832627b4f6)\n");
			fwrite(STDOUT, "[X]Separator~# ");
		$pemisah = trim(fgets(STDIN));}
			fwrite(STDOUT, "\n[+]Infoz Type 'keluar' to exit\n");
			fwrite(STDOUT, "[X]StringToCalculate~# ");
		$hash = trim(fgets(STDIN));
			itunghash($ampemati,$simpen,$hash);
	}else{
		unset($modtype);
		print $salah;
		}
	}elseif($modtype == 2){
		module();
			fwrite(STDOUT, "[X]SHA1Module~# ");
			$cli = trim(fgets(STDIN));
		if($cli == 1){
			fwrite(STDOUT, "\n[+]DictionaryAttack Module Selected\n");
			fwrite(STDOUT, "[X]SHA1Hash~# ");
			$hash = trim(fgets(STDIN));
			if(ereg("([0-9a-f]{5,40})", $hash))
			{
				fwrite(STDOUT, "[X]Wordlist~/# ");
					$list = trim(fgets(STDIN));
					if(preg_match("/txt/",$list) && is_file($list)){
						mulai();
						cocokin($hash,$list);
						exit;
					}else{
						print "[-]File Must Be .TXT";
					}
			}else{
			fwrite(STDOUT, "\n[X]Invalid hash inputted\n\n");
			}
		}
		if($cli == 3){
			fwrite(STDOUT, "\n[+]Bruteforce Module Selected\n");
		fwrite(STDOUT, "[X]Sha1Hash~# ");
		$hash= trim(fgets(STDIN));
		define('HASH', "".$hash."");
		$bego = "sha1";
		if(ereg("([0-9a-f]{5,40})", $hash))
		{
			brutusinfo();
			fwrite(STDOUT,"[+]Warning!! more combination will take more and more! time\n\n");
			fwrite(STDOUT,"[X]CharCombination ");
			$chr = trim(fgets(STDIN));
		switch($chr){
			case 1:
				$kombinasi = 'abcdefghijklmnopqrstuvwxyz';break;
			case 2:
				$kombinasi = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';break;
			case 3:
				$kombinasi = '0123456789';break;
			case 4:
				$kombinasi = '^&*()+=-_\/\'";:,.<>?~`!@#$% ';break;
			case 5:
				$kombinasi = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ^&*()+=-_\/\'";:,.<>?~`!@#$% ';break;
			case 6:
				fwrite(STDOUT,"[X]CustomChars ");
				$kombinasi = trim(fgets(STDIN));break;
			}
			if($chr <= 6){
			fwrite(STDOUT,"[X]CharLength ");
			$charpanjang = trim(fgets(STDIN));
			$panjangkombinasi = strlen($kombinasi);
			fwrite(STDOUT,"[-]HashToBrute ".HASH."\n");
			fwrite(STDOUT,"[+]Please Wait!!\n");
			for($tm = 1;$tm < $charpanjang+1;$tm++){
			print "[+]Trying Length ".$tm."\n";
			brutal($tm, 0, '');
			}
			fwrite(STDOUT,"\n[-]Sorry dude result not found! Try another combination\n");
			exit;
			}
		}else{
			fwrite(STDOUT, "\n[X]Invalid hash inputted\n\n");
		}
		}
		if($cli == 4){
				fwrite(STDOUT, "[+]SHA1Hash Generator Module Selected\n\n");
				fwrite(STDOUT, "[X]SaveToFile(If Yes Type Filename)~# ");
			$simpen = trim(fgets(STDIN));
				fwrite(STDOUT, "\n[-](y) for indefinitely (n) for single word\n");
				fwrite(STDOUT, "[X]Store Indefinitley(y/n)~# ");
			$ampemati = trim(fgets(STDIN));
			if(!empty($simpen)){
				fwrite(STDOUT, "\n[+]Example ':::' = (test:::a94a8fe5ccb19ba61c4c0873d391e987982fbbd3)\n");
				fwrite(STDOUT, "[X]Separator~# ");
			$pemisah = trim(fgets(STDIN));}
				fwrite(STDOUT, "\n[+]Infoz Type 'keluar' to exit\n");
				fwrite(STDOUT, "[X]StringToCalculate~# ");
			$hash = trim(fgets(STDIN));
				itunghash($ampemati,$simpen,$hash);
		}else{
			unset($modtype);
			print $salah;
			}
	}



	elseif($modtype == 3){
			module();
				fwrite(STDOUT, "[X]MysqlModule~# ");
				$cli = trim(fgets(STDIN));
		if($cli == 1){
				fwrite(STDOUT, "\n[+]DictionaryAttack Module Selected\n");
				fwrite(STDOUT, "[X]MysqlHash~# ");
				$hash = trim(fgets(STDIN));
			if(ereg("([0-9a-f]{16})", $hash))
				{
				fwrite(STDOUT, "[X]Wordlist~# ");
				$list = trim(fgets(STDIN));
				if(preg_match("/txt/",$list) && is_file($list)){
					mulai();
					cocokin($hash,$list);
					exit;
				}else{
					print "[-]File Must Be TXT";
					}
				}else{
			fwrite(STDOUT, "\n[X]Invalid hash inputted\n\n");}
		}else
		if($cli == 3){
					fwrite(STDOUT, "\n[+]Bruteforce Module Selected\n");
					fwrite(STDOUT, "[X]MysqlHash~# ");
					$hash= trim(fgets(STDIN));
					define('HASH', "".$hash."");
					$bego = "md5";
					if(ereg("([0-9a-f]{16})", $hash))
					{
						brutusinfo();
						fwrite(STDOUT,"[+]Warning!! more combination will take more and more! time\n\n");
						fwrite(STDOUT,"[X]CharCombination ");
						$chr = trim(fgets(STDIN));
					switch($chr){
				case 1:
					$kombinasi = 'abcdefghijklmnopqrstuvwxyz';break;
				case 2:
					$kombinasi = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';break;
				case 3:
					$kombinasi = '0123456789';break;
				case 4:
					$kombinasi = '^&*()+=-_\/\'";:,.<>?~`!@#$% ';break;
				case 5:
					$kombinasi = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ^&*()+=-_\/\'";:,.<>?~`!@#$% ';break;
				case 6:
					fwrite(STDOUT,"[X]CustomChars ");
					$kombinasi = trim(fgets(STDIN));break;
				}
			if($chr <= 6){
			fwrite(STDOUT,"[X]CharLength ");
			$charpanjang = trim(fgets(STDIN));
			$panjangkombinasi = strlen($kombinasi);
			fwrite(STDOUT,"[-]HashToBrute ".HASH."\n");
			fwrite(STDOUT,"[+]Please Wait!!\n");
			for($tm = 1;$tm < $charpanjang+1;$tm++){
			print "[+]Trying Length ".$tm."\n";
			brutal($tm, 0, '');
			}
			fwrite(STDOUT,"\n[-]Sorry dude result not found! Try another combination\n");
			exit;
			}
				}
		}else
		if($cli == 4){
			fwrite(STDOUT, "[+]MYSQLHash Generator Module Selected\n\n");
				fwrite(STDOUT, "[X]SaveToFile(If Yes Type Filename)~# ");
			$simpen = trim(fgets(STDIN));
				fwrite(STDOUT, "\n[-](y) for indefinitely (n) for single word\n");
				fwrite(STDOUT, "[X]Store Indefinitley(y/n)~# ");
			$ampemati = trim(fgets(STDIN));
			if(!empty($simpen)){
				fwrite(STDOUT, "\n[+]Example ':::' = (test:::a94a8fe5ccb19ba61c4c0873d391e987982fbbd3)\n");
				fwrite(STDOUT, "[X]Separator~# ");
			$pemisah = trim(fgets(STDIN));}
				fwrite(STDOUT, "\n[+]Infoz Type 'keluar' to exit\n");
				fwrite(STDOUT, "[X]StringToCalculate~# ");
			$hash = trim(fgets(STDIN));
				itunghash($ampemati,$simpen,$hash);}else{print$salah;unset($modtype);}
	}elseif($modtype == 4){
			fwrite(STDOUT, "\n[+]CountList Module Selected\n");
			fwrite(STDOUT, "[X]Wordlist~# ");
			$list = trim(fgets(STDIN));
			cekfile($list);
			unset($modtype);
			}else{
			unset($modtype);
			print $salah;
			}
			keluar();
	}

function keluar(){
			global $cli,$modtype,$hash,$pemisah,$ampemati,$simpen,$charpanjang;
			switch(array($cli,$modtype,$hash,$pemisah,$ampemati,$simpen,$charpanjang)){
			case 'keluar':
			die('bye');
			break;
			}
				}
function cekfile($namafile){
	error_reporting(0);
	print "\n[-]Checkingfile\n";
	if(file_exists($namafile)){
		print "[+]File exists\n";
		print "[+]Counting file!! Please wait a moment!\n\n";
		itung();
	}else{
		print "[-]File doesnt exists dood\n";
		return 0;
	}
}
function itunghash($ampemati,$simpen,$hash){
	global $modtype;
	global $pemisah;
	$fp = fopen($simpen,'a+');
	switch($modtype){
		case 1:
		case 2:
		case 3:
			switch($modtype){
			case 1:
			$hasil = md5($hash);
			break;
			case 2:
			$hasil = sha1($hash);
			break;
			case 3:
			$hasil = msl($hash);
			break;}
			if(empty($simpen)){
			if($ampemati == 'n'){
				fwrite(STDOUT, "[-]Result: ".$hasil."\n");
				exit;}
			else
				if($ampemati == 'y'){
				fwrite(STDOUT, "[-]Result: ".$hasil."\n");
				fwrite(STDOUT, "[X]StrintToCalculate~# ");
			if($hash == "keluar"){
				exit;
			}else{
				$hash = trim(fgets(STDIN));
				itunghash($ampemati,$simpen,$hash);}
			}else{fwrite(STDOUT, "[-]Unkn0wn command\n");}
			}
			elseif($simpen != ''){
			if($ampemati == "n"){
				fwrite($fp, "".$hash.":".$hasil."\r\n");
				fwrite(STDOUT, "[-]Result: ".$hasil."\n");
				exit;
			}else
			if($ampemati == "y"){
				fwrite($fp, "".$hash.":".$hasil."\r\n");
				fwrite(STDOUT, "[-]Result: ".$hasil."\n[-]Done! saved to '".$simpen."'\n");
				fwrite(STDOUT, "[X]StrintToCalculate~# ");
				fclose($fp);
			if($hash == "keluar"){
				exit;
			}else{
				$hash = trim(fgets(STDIN));
				itunghash($ampemati,$simpen,$hash);}
			}else{print"[-]unkn0wn Command\n";}
			}
			break;
		}
	}
function kombinasi(){
	global $chr;
	switch($chr){
			case 1:
				$kombinasi = 'abcdefghijklmnopqrstuvwxyz';break;
			case 2:
				$kombinasi = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';break;
			case 3:
				$kombinasi = '0123456789';break;
			case 4:
				$kombinasi = '^&*()+=-_\/\'";:,.<>?~`!@#$% ';break;
			case 5:
				$kombinasi = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ^&*()+=-_\/\'";:,.<>?~`!@#$% ';break;
			case 6:
				fwrite(STDOUT,"[X]CustomChars~# ");
				$kombinasi = trim(fgets(STDIN));break;
			}
}
function itung(){
	global $list;
	$cnt = count(file($list));
	fwrite(STDOUT,"\n##Selected Wordlist ($list)\n");
	fwrite(STDOUT,"##Has\n");
	fwrite(STDOUT,"##($cnt) Word in it\n");
}
function pertamax(){
fwrite(STDOUT, "
#HashPack [Alpha] by on3love
#only support MD5(32)
#not support MD5(salt) and MD5(16)

#only support SHA1(5,40) and lowercase a94a8fe5ccb19ba61c4c0873d391e987982fbbd3
#not support SHA1(40+) and uppercase A94A8FE5CCB19BA61C4C0873D391E987982FBBD3 (you need to manually lower the case ATM)

#only support mysql(16) 378b243e220ca493
#not support mysql(v5) *94BDCEBE19083CE2A1F959FD02F964C7AF4CFC29

#[X]AvailableModule
    MD5 Module:
     [+]Dictionary(2 auto combination)
     [-]Distributor(soon)
     [+]Bruteforce
     [+]DB Generator
    SHA1 Module:
     [+]Dictionary(2 auto combination)
     [-]Distributor(soon)
     [+]Bruteforce
     [+]DB Generator
	MYSQL Module:
	 [+]Dictionary(2 auto combination)
     [-]Distributor(soon)
     [+]Bruteforce
     [+]DB Generator
     ###############
");

}
function msl($passStr){
        $nr=0x50305735;
        $nr2=0x12345671;
        $add=7;
        $charArr = preg_split("//", $passStr);

        foreach ($charArr as $char) {
                if (($char == '') || ($char == ' ') || ($char == '\t')) continue;
                $charVal = ord($char);
                $nr ^= ((($nr & 63) + $add) * $charVal) + ($nr << 8);
                $nr &= 0x7fffffff;
                $nr2 += ($nr2 << 8) ^ $nr;
                $nr2 &= 0x7fffffff;
                $add += $charVal;
        }

        return sprintf("%08x%08x", $nr, $nr2);
}
function module(){
	global $modtype,$cli;
	switch ($modtype){
	case 1:
	$bn = "\n";
	$bn.= "##########MD5MODULE#############\n";
	$bn.= "## HashPack[Beta] By On3love  ##\n";
	$bn.= "## Available module:          ##\n";
	$bn.= "## 1 = MD5 Dictionary Cracker ##\n";
	$bn.= "## 2 = MD5 Distributor(notyet)##\n";
	$bn.= "## 3 = MD5 Bruteforce         ##\n";
	$bn.= "## 4 = MD5 DB Generator       ##\n";
	$bn.= "## Press CTRL+C to exit       ##\n";
	$bn.= "################################\n\n";
	fwrite(STDOUT, $bn);
	break;
	case 2:
	$bn = "\n";
	$bn.= "############SHA1MODULE###########\n";
	$bn.= "## HashPack[Beta] By On3love   ##\n";
	$bn.= "## Available module:           ##\n";
	$bn.= "## 1 = SHA1 Dictionary Cracker ##\n";
	$bn.= "## 2 = SHA1 Distrubtor(notyet) ##\n";
	$bn.= "## 3 = SHA1 Bruteforce         ##\n";
	$bn.= "## 4 = SHA1 DB Generator       ##\n";
	$bn.= "## Press CTRL+C to exit        ##\n";
	$bn.= "#################################\n\n";
	fwrite(STDOUT, $bn);
	break;
	case 3:
	$bn = "\n";
	$bn.= "###########MYSQLMODULE############\n";
	$bn.= "## HashPack[Beta] By On3love    ##\n";
	$bn.= "## Available module:            ##\n";
	$bn.= "## 1 = MySQL Dictionary Cracker ##\n";
	$bn.= "## 2 = MySQL Distrubtor(notyet) ##\n";
	$bn.= "## 3 = MySQL Bruteforce         ##\n";
	$bn.= "## 4 = MySQL DB Generator       ##\n";
	$bn.= "## Press CTRL+C to exit         ##\n";
	$bn.= "##################################\n\n";
	fwrite(STDOUT, $bn);
	break;
	default:
	$bn = "\n";
	$bn.= "################################\n";
	$bn.= "## HashPack[Beta] By On3love  ##\n";
	$bn.= "## Available module:          ##\n";
	$bn.= "## 1 = MD5   Module           ##\n";
	$bn.= "## 2 = SHA1  Module           ##\n";
	$bn.= "## 3 = MySQL Module           ##\n";
	$bn.= "## 4 = CountWordlist          ##\n";
	$bn.= "## Press CTRL+C to exit       ##\n";
	$bn.= "################################\n\n";
	fwrite(STDOUT, $bn);
	break;
	}
}
function brutusinfo(){
	$bn = "###############################\n";
	$bn.= "## HashPack[Beta] By On3love ##\n";
	$bn.= "## Character Combination:    ##\n";
	$bn.= "## 1 = lowercase             ##\n";
	$bn.= "## 2 = uppercase             ##\n";
	$bn.= "## 3 = number                ##\n";
	$bn.= "## 4 = symbol                ##\n";
	$bn.= "## 5 = all(1,2,3,4)          ##\n";
	$bn.= "## 6 = custom                ##\n";
	$bn.= "###############################\n\n";
	fwrite(STDOUT, $bn);
}
function mulai(){
	global $hash,$list,$cli;
	$sr = "###########################################################\n";
	$sr.= "## Matching this hash \"$hash\" \n";
	$sr.= "## Wordlist selected \"$list\"                           \n";
	$sr.= "###########################################################\n\n";
	fwrite(STDOUT, $sr);
}
function jembot(){
	global $modtype;
	global $hash;
	switch($modtype){
	case 1:
		md5($hash);
		break;
	case 2:
		sha1($hash);
		break;
	case 3:
		msl($hash);
		break;
	}
}
function brutals($hash)
{
	global $modtype,$bego;
	switch($modtype){
	case 1:
	case 2:
	if (hash($bego, $hash) == HASH) {
		fwrite(STDOUT,"[-]w00t w00t!! Mission success\r\n");
		fwrite(STDOUT,"[-]Result: ".$hash."\r\n");
		exit;
	}
	break;
	case 3:
	if (msl($hash) == HASH) {
		fwrite(STDOUT,"[-]w00t w00t!! Mission success\r\n");
		fwrite(STDOUT,"[-]Result: ".$hash."\r\n");
		exit;
	}
	break;
	}
}
function brutal($width, $position, $base_string){
	global $modtype,$kombinasi,$panjangkombinasi;
	for ($i = 0; $i < $panjangkombinasi; ++$i) {
		if ($position  < $width - 1) {
			brutal($width,$position+1,$base_string.$kombinasi[$i]);
		}
		brutals($base_string.$kombinasi[$i]);
	}
}
function cocokin($hash,$list){
	global $modtype;
	$file = @fopen($list,'r') or die ("No Wordlist Selected");
	switch($modtype){
	case 1:
	case 2:
	case 3:
		while(!feof ($file)){
		$cocok = fgets($file, 4096);
		 switch($modtype){
		case 1:
			$cocok1= md5(trim($cocok));
			$cocok2= md5(trim(strtolower($cocok)));
			$cocok3= md5(trim(strtoupper($cocok)));
			break;
		case 2:
			$cocok1= sha1(trim($cocok));
			$cocok2= sha1(trim(strtolower($cocok)));
			$cocok3= sha1(trim(strtoupper($cocok)));
			break;
		case 3:
			$cocok1= msl(trim($cocok));
			$cocok2= msl(trim(strtolower($cocok)));
			$cocok3= msl(trim(strtoupper($cocok)));
			break;
			}
			if(($hash) == $cocok1
						||$cocok2
						||$cocok3){
			$result = $cocok;
				switch($hash){
				case "$cocok1":
				fwrite(STDOUT, "[-]w00tw00t!! Mission success!\n");
				fwrite(STDOUT, "[-]Result(normal): $result\n");
				break;
				case "$cocok2":
				fwrite(STDOUT, "[-]w00tw00t!! Mission success!\n");
				fwrite(STDOUT, "[-]Result(lowercase): ".strtolower($result)."\n");
				case "$cocok3":
				fwrite(STDOUT, "[-]w00tw00t!! Mission success!\n");
				fwrite(STDOUT, "[-]Result(UPPERCASE): ".strtoupper($result)."\n");
				break;
				}
				@fclose($file);
				break;
		}elseif(feof($file) && $hash != $varlist){
				fwrite(STDOUT, "[-]Result: NotFound\n");
				fwrite(STDOUT, "[-]Sorry bro! try another list\n");
				}
			}
		break;
		}
	}

?>
