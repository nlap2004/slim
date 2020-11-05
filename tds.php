<?php
error_reporting(0);
session_start();
//color
$res="\033[0m";
$red="\033[0;31m";
$green="\033[0;32m";
$yellow="\033[0;33m";
$white= "\033[0;37m";  
//config
$banner="\r
\033[0;32m               
           \033[1;92m
                    __  ___        _   ____          
                   \033[95m/  |/  /____   / | / / /___ _____ 
                 \033[94m / /|_/ / ___/  /  |/ / / __ `/ __ \
                 \033[31m/ /  / / /     / /|  / / /_/ / /_/ /
                \033[0;33m/_/  /_/_/     /_/ |_/_/\__,_/ .___/ 
                                        \033[95m/_/      
	 \n\n";
{echo $green."\033[1;32mVào Tool Thành Công \n$ress";
sleep(1);
@system('clear');
$listnv = [];
echo $white."\n\n";
echo $green."\033[1;33mUsernameTDS: $yellow\033[1;32m";
$_SESSION["username"]=trim(fgets(STDIN));
echo $green."\033[1;33mPassword TDS: $yellow\033[1;32m";
$_SESSION['password']=trim(fgets(STDIN));
echo "cookie 1:\n";
$a = trim(fgets(STDIN));
echo "cookie 2:\n";
$b = trim(fgets(STDIN));
$array = array($a,$b,$c);
$cookie= $array[array_Rand($array, 1)];
echo"$res\n";
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
$login =array('username' => $_SESSION['username'],'password' => $_SESSION['password'],'submit' => ' Đăng Nhập');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
$source=curl_exec($ch);
curl_close($ch);
$tk = $_SESSION["username"];
$mk = $_SESSION['password'];
#get_token
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
	$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
}else{
	exit($red."Mã cookie die!!");
}
@system('clear');
echo"\033[1;31m                    ██████╗ ██╗   ██╗██╗   ██╗\n";
echo"\033[1;32m                    ██╔══██╗██║   ██║╚██╗ ██╔╝\n";
echo"\033[1;33m                    ██║  ██║██║   ██║ ╚████╔╝ \n";
echo"\033[1;34m                    ██║  ██║██║   ██║  ╚██╔╝  \n";
echo"\033[1;36m                    ██████╔╝╚██████╔╝   ██║   \n";
echo"\033[1;31m                    ╚═════╝  ╚═════╝    ╚═╝   \n";
echo"\033[1;36m                            \033[1;41m•Tool TDS Của Trần Quang Duy• \n";
if ($source != 1 && $source != ''){
	echo $white."\033[1;37m================================================================\n\n";
	echo $green."\033[1;31m[\033[1;32m✓\033[1;31m] \033[1;32mChọn nhiệm vụ \n\n";
	$user = $_SESSION["username"];
	echo $white."\033[1;31m[\033[1;32m✓\033[1;31m] \033[1;32mNhiệm vụ like (y/n): $green\033[1;33m";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'like');
		echo $white."\033[1;31m[\033[1;32m✓\033[1;31m] \033[1;32mDelay like : $green\033[1;33m";
		$_SESSION['delaylike']=trim(fgets(STDIN));
		if($_SESSION['delaylike'] < 0)
		{exit($red."[1;31mTối Thiểu Giây\n");}
	}
	echo $white."\033[1;31m[\033[1;32m✓\033[1;31m] \033[1;32mNhiệm vụ sub (y/n): $green\033[1;33m"; 
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'sub');
		echo $white."\033[1;31m[\033[1;32m✓\033[1;31m] \033[1;32mDelay sub : $green\033[1;33m";
		$_SESSION['delaysub']=trim(fgets(STDIN));
		if($_SESSION['delaysub'] < 0)
		{exit($red."[1;31mTối Thiểu Giây\n");}
	}
	echo $white."\033[1;31m[\033[1;32m✓\033[1;31m] \033[1;32mNhiệm vụ page (y/n): $green\033[1;33m";
	if (trim(fgets(STDIN)) == 'y'){
		array_push($listnv,'page');
		echo $white."\033[1;31m[\033[1;32m✓\033[1;31m] \033[1;32mDelay page : $green\033[1;33m";
		$_SESSION['delaypage']=trim(fgets(STDIN));
		if($_SESSION['delaypage'] < 0)
		{exit($red."[1;31mTối Thiểu Giây\n");}
	}
	
	if (count($listnv) == 0){exit($red."\033[1;31mPhải chọn ít nhất 1 nhiệm vụ");}
	
	echo $white."\033[1;31m[\033[1;32m✓\033[1;31m] \033[1;32mThời gian nghỉ tránh bị block : $green\033[1;33m";
	$_SESSION['j']=trim(fgets(STDIN));
	if($_SESSION['j'] < 0)
	{exit($red."\033[1;31mtối thiểu 1 giây trở lên\n\n");}
	echo $white."\033[1;31m[\033[1;32m✓\033[1;31m] \033[1;32mSố job chạy : $green\033[1;33m";
	$_SESSION['i']=trim(fgets(STDIN));
	if($_SESSION['i'] < 1)
	{exit($red."Tối Thiểu 1 Lần\n\n");}
}else{
	exit($red."\033[1;31mĐăng nhập thất bại");
}
@system('clear');
echo"$lon\n";
echo $banner;
echo"\033[1;36m                           \033[1;41m•Bản Quyền Của Trần Ngọc Anh •\n";
echo $white."\033[1;37m================================================================\n\n";;
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mYoutube :\033[1;32m Quang Duy Official \n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mZalo liên hệ :\033[1;32m 0975567702\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mTên Tài Khoản : \033[1;35m$user\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mĐang Tool Cho ID : \033[1;35m$idfb\n";
$xu = file_get_contents('https://traodoisub.com/scr/test3.php?user='.$user);
echo $white."\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mSố Xu Hiện Tại Của Bạn Là : \033[1;32m".$xu." XU \n";
echo $white."\033[1;37m================================================================\n\n";
$h = datnick($user,$idfb);
if ($h == '1'){
		$i=1;
		while ($i <= $_SESSION['i']){
			$rand = $listnv[array_rand($listnv,1)];
			if ($rand == 'like'){
				$list = getnv('like',$user);
				foreach ($list  as $id) {
					$g = like($access_token,$id,$cookie);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."\033[1;31mĐã bị block \n");
					}
					date_default_timezone_set('Asia/Ho_Chi_Minh');
$ti = date('H:i');
					$s = nhantien('like',$id);
					if ($s == 2){$stt=$stt+1;$xu = $xu + 300; echo "\033[1;37m~\033[1;31m[\033[1;33m$stt\033[1;31m]●\033[1;31m[\033[1;33m$ti\033[1;31m]$white$green \033[1;31m[\033[1;32mLIKE\033[1;31m] \033[1;37m=> $green\033[1;33m".$id."$green\033[1;31m ● \033[1;32m+300 \033[1;31m● $green\033[1;32m".$xu." \033[1;32mXU \033[1;31m●" ;}
					else{echo $red."\033[1;37m~\033[1;31m[\033[1;33m$stt\033[1;31m]●\033[1;31m[\033[1;33m$ti\033[1;31m]$white$green \033[1;31m[LIKE] => \033[1;31mThất Bại ID:\033[1;31m".$id.$green;}
					echo "\n";
					sleep($_SESSION['delaylike']);
					}
			}else if($rand == 'sub'){
				$list = getnv('follow',$user);
				foreach ($list  as $id) {
					$g = follow($access_token,$id,$cookie);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."\033[1;31mĐã bị block \n");
					}
					$s = nhantien('sub',$id);
					date_default_timezone_set('Asia/Ho_Chi_Minh');
$ti = date('H:i');
					if ($s == 2){$stt=$stt+1;$xu = $xu + 600;echo "\033[1;37m~\033[1;31m[\033[1;33m$stt\033[1;31m]●\033[1;31m[\033[1;33m$ti\033[1;31m]$white$green \033[1;31m[\033[1;32mFOLLOW\033[1;31m] \033[1;37m=> $green\033[1;33m".$id."$green \033[1;31m● \033[1;32m+600$whit \033[1;31m● $green\033[1;32m".$xu." \033[1;32mXU \033[1;31m●" ;}
					else{echo $red."\033[1;37m~\033[1;31m[\033[1;33m$stt\033[1;31m]●\033[1;31m[\033[1;33m$ti\033[1;31m]$white \033[1;31m[FOLLOW] => \033[1;31mThất Bại ID:\033[1;31m".$id.$green;}
					echo "\n";
					sleep($_SESSION['delaysub']);
				}
			}else if($rand == 'page'){
				$list = getnv('likepage',$user);
				foreach ($list  as $id) {
					page($id,$cookie);
					$s = nhantien('page',$id);
					date_default_timezone_set('Asia/Ho_Chi_Minh');
$ti = date('H:i');
					if ($s == 2){$stt=$stt+1;$xu = $xu + 600; echo "\033[1;37m~\033[1;31m[\033[1;33m$stt\033[1;31m]●\033[1;31m[\033[1;33m$ti\033[1;31m]$white$green \033[1;31m[\033[1;32mPAGE\033[1;31m] \033[1;37m=> $green\033[1;33m".$id."$green \033[1;31m● \033[1;32m+600 \033[1;31m● $green\033[1;32m".$xu." \033[1;32mXU \033[1;31m●" ;}
					else{echo $red."\033[1;37m~\033[1;31m[\033[1;33m$stt\033[1;31m]●\033[1;31m[\033[1;33m$ti\033[1;31m]$white \033[1;31m[PAGE] => Thất Bại ID:".$id.$green;}
					echo "\n";
					sleep($_SESSION['delaypage']);
				}
			}
		echo $red."\033[1;36mNghỉ ".$_SESSION['j']." \033[1;36mgiây:";
		for ($x = 0; $x <= $_SESSION['j']; $x++) {
		  echo $green."\033[1;36m•";
		  sleep(1);
		}
		echo "\n";
		}
}else{exit($red."\033[1;31mCấu hình thất bại, vui lòng thêm id::\033[1;31m".$idfb." vào cấu hình");}
}else{exit($red."\033[1;31mCookie die!!");}
}
function follow($access_token,$id,$cookie){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/subscribers');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function like($access_token,$id,$cookie){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function cmt($access_token,$id,$cookie,$msg){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('message' => $msg,'access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}
function page($id,$cookie){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if (explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0]){
		$get = explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0];
		$link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$id.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($ch);
	}	
	curl_close($ch);
}
function camxuc($id,$type,$cookie){
	$ch = curl_init();
	if(strpos($id,'_')){
		$uid = explode('_',$id, 2);
		$id2 = 'story.php?story_fbid='.$uid[1].'&id='.$uid[0];
	}else{
		$id2 = $id;
	}
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id2);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
		$get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
	}else{
		$get = $id2;
	}
	$link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cx = curl_exec($ch);
	$haha = explode('<a href="',$cx);
	if ($type == 'LOVE'){
		$haha2 = explode('" style="display:block"',$haha[2])[0];
	}else if ($type == 'WOW'){
		$haha2 = explode('" style="display:block"',$haha[5])[0];
	}else if ($type == 'HAHA'){
		$haha2 = explode('" style="display:block"',$haha[4])[0];
	}else if ($type == 'SAD'){
		$haha2 = explode('" style="display:block"',$haha[6])[0];
	}else{
		$haha2 = explode('" style="display:block"',$haha[7])[0];
	}
	$link2 = html_entity_decode($haha2);	
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	curl_close($ch);
}
function getnv($loai,$user){
	$list = file_get_contents('https://traodoisub.com/scr/api_job.php?chucnang='.$loai.'&user='.$user);
	return json_decode($list);
}
function datnick($user,$id){
	$xxx = file_get_contents('https://traodoisub.com/scr/api_dat.php?user='.$user.'&idfb='.$id);
	return $xxx;
}
function nhantien($loai,$id){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantien'.$loai.'.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$tdsxu=array('id' => $id);
	curl_setopt($ch, CURLOPT_POST,count($tdsxu));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
	curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
	$xu=curl_exec($ch);
	curl_close($ch);
	return $xu;
}
function nhantiencx($loai,$id){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantiencx.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$tdsxu=array('id' => $id, 'loaicx' => $loai);
	curl_setopt($ch, CURLOPT_POST,count($tdsxu));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
	curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
	$xu=curl_exec($ch);
	curl_close($ch);
	return $xu;
}

