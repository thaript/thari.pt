<?php 
@system("clear");
date_default_timezone_set('Asia/Manila');
$b="\033[1;35m";
$red="\033[1;31m";
$green="\033[1;32m";
$puti="\033[1;37m";
print "
[35m---------------------------[32m
$b
╭━╮╭━┳━━━┳━━━┳━━━┳━━━┳╮╱╭┳━╮╱╭╮
┃┃╰╯┃┃╭━━┫╭━╮┃╭━╮┃╭━╮┃┃╱┃┃┃╰╮┃┃
┃╭╮╭╮┃╰━━┫┃╱╰┫┃╱┃┃╰━╯┃┃╱┃┃╭╮╰╯┃
┃┃┃┃┃┃╭━━┫┃╭━┫╰━╯┃╭╮╭┫┃╱┃┃┃╰╮┃┃
┃┃┃┃┃┃╰━━┫╰┻━┃╭━╮┃┃┃╰┫╰━╯┃┃╱┃┃┃
╰╯╰╯╰┻━━━┻━━━┻╯╱╰┻╯╰━┻━━━┻╯╱╰━╯
╭━━━┳╮╱╭┳━━━━┳━━━╮╭━━━━┳━━━┳━━━┳╮
┃╭━╮┃┃╱┃┃╭╮╭╮┃╭━╮┃┃╭╮╭╮┃╭━╮┃╭━╮┃┃
┃┃╱┃┃┃╱┃┣╯┃┃╰┫┃╱┃┃╰╯┃┃╰┫┃╱┃┃┃╱┃┃┃
┃╰━╯┃┃╱┃┃╱┃┃╱┃┃╱┃┃╱╱┃┃╱┃┃╱┃┃┃╱┃┃┃╱╭╮
┃╭━╮┃╰━╯┃╱┃┃╱┃╰━╯┃╱╱┃┃╱┃╰━╯┃╰━╯┃╰━╯┃
╰╯╱╰┻━━━╯╱╰╯╱╰━━━╯╱╱╰╯╱╰━━━┻━━━┻━━━╯ :[31mLION NATION$b |
[35m---------------------------[32m
AUTHOR    :[34m
████████╗██╗░░██╗░█████╗░██████╗░██╗░░░██████╗░████████╗
╚══██╔══╝██║░░██║██╔══██╗██╔══██╗██║░░░██╔══██╗╚══██╔══╝
░░░██║░░░███████║███████║██████╔╝██║░░░██████╔╝░░░██║░░░
░░░██║░░░██╔══██║██╔══██║██╔══██╗██║░░░██╔═══╝░░░░██║░░░
░░░██║░░░██║░░██║██║░░██║██║░░██║██║██╗██║░░░░░░░░██║░░░
░░░╚═╝░░░╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚═╝╚═╝╚═╝╚═╝░░░░░░░░╚═╝░░░[32m
YOUTUBE   :[34mTech world
[32m
DESCRIPTION   :[31mThis file is make by thari.pt for the dialog megarun game[32m
[32m
WARNING:[31m USE AT YOUR OWN RISK - IF YOU WANT TO STOP SCRIPT - goto ur phone setting and applications downloaded apps termux and force stop (please do this after every 2hours because they will detect and ban you) [32m
[32m
";

"""
print(name, "")


try:
    f = open("auth.txt", "r")
    auth = f.read()
    f.close 
except:
    wr = str(input("\033[1;0;40mPaste Your Auth here :- "))
    f = open("auth.txt", "w")
    f.write(wr)
    f.close
    f = open("auth.txt", "r")
    auth = f.read()
    f.close

try:
    f = open("url.txt", "r")
    f = open("url.txt", "r")
    url1 = f.read()
    f.close
except:
    wr = str(input("Paste Your URL here :- "))
    f = open("url.txt", "w")
    f.write(wr)
    f.close
    f = open("url.txt", "r")
    url1 = f.read()
    f.close

try:
    f = open("ua.txt", "r")
    f = open("ua.txt", "r")
    url1 = f.read()
    f.close
except:
    wr = str(input("Paste Your User Agent here :- "))
    f = open("ua.txt", "w")
    f.write(wr)
    f.close
    f = open("ua.txt", "r")
    ua = f.read()
    f.close

try:
    import requests


except ImportError:
    print('%s Requests isn\'t installed, installing now.')
    os.system('pip3 install requests')
    print('%s Requests has been installed.')
    os.system('clear')
    import requests

def main():
    os.system("clear")
    print(name,"\n")
    s = int(input("\033[1;0;40mEnter Amount - "))
echo $green."Login";
$ar=0;$is=5;while($ar<$is){
sleep(1);
$ar++;
echo ".";
}
sleep(6);
echo $green."success"."\n\n";

while (true){
$log = "url.txt";
$data ="";
$curl = curl_init();
curl_setopt_array($curl, array(
curl_setopt_array($curl, array(
   CURLOPT_PORT => "443",
  CURLOPT_URL => "$log",
  CURLOPT_RETURNTRANSFER => false,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 6,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array("Authorization:"auth.txt"","User-Agent:"ua.txt"","Connection:Keep-Alive","Accept-Encoding:gzip","Content-Length:0",

    )

));

$damang = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$js = json_decode($damang,true);
$xu=$js["response"]["0"]["newtotalbid"];
echo "$green balance:$b"."$xu"."\n";

sleep(300);

}
