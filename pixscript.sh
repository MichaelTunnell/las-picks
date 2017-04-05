#!/bin/bash
### Takes an episode url as an argument and saves it locally in /tmp
### Uses uncessarily complicated combinations of grep, awk, tail, and cut
### To store runs linux, desktop app pick, and spotlight pick name and URL
### Could also do the Android pick if it was included in show notes
### 
### creates a new git branch of the repository
### adds the picks in the proper format
###
### TODO: Probably better written in perl, awk, python, or just about anything else really
### TODO: Could also be written with more error checking
### Author - Zach Villers zachvatwork@gmail.com
### License - DWTFYW v2

ep_url=$1
[[ $ep_url == "" ]] && echo 'Please specify a url of a show as http://jupiter...html' && exit 1

### curl the episode, do a bit of checking. Store the title, ep num, and date

curl $1 >> /tmp/"$(date "+%m%d%y")"show.html
curl_ep=/tmp/"$(date "+%m%d%y")"show.html
### echo $curl_ep ### Uncomment for debugging

ep_title=$(head -n10 $curl_ep | grep title | sed 's/<title>//g' | cut -d'<' -f1)
### echo $ep_title ###

for string in $ep_title
do
	[[ $string = [0-9]* ]] && ep_num=$string
done
### echo $ep_num
ep_date=$(grep "Posted on" $curl_ep | cut -d'>' -f3 | cut -d'<' -f1 | head -n1)
### echo $ep_date

test_RL=$(grep -m 1 -C 2 "Runs Linux" $curl_ep | wc -l)
### echo $test_RL
if [ $test_RL > 1 ]
then
	runL_pick_url=$(grep -m 1 -C 2 "Runs Linux" $curl_ep  | awk '/href=/ { print $2 }' | cut -d">" -f1)
	runL_pick_name=$(grep -m 1 -C 2 "Runs Linux" $curl_ep | cut -d'>' -f3  | tail -n1 | cut -d'<' -f1)
fi

test_DA=$(grep -m 1 -C 2 "Desktop App Pick" $curl_ep | wc -l)
### echo $test_DA
if [ $test_DA > 1 ]
then
	deskapp_pick_url=$(grep -m 1 -C 2 "Desktop App Pick" $curl_ep | awk '/href=/ { print $2 }' | cut -d">" -f1)
	deksapp_pick_name=$(grep -m 1 -C 2 "Desktop App Pick" $curl_ep | cut -d'>' -f3  | tail -n1 | cut -d'<' -f1)
fi


test_SL=$(grep -m 1 -C 2 "Spotlight" $curl_ep | wc -l)
### echo $test_SL
if [ $test_SL > 1 ]
then
	spot_pick_url=$(grep -m 1 -C 2 "Spotlight" $curl_ep | awk '/href=/ { print $2 }' | cut -d">" -f1)
	spot_pick_name=$(grep -m 1 -C 2 "Spotlight" $curl_ep | cut -d'>' -f3  | tail -n1 | cut -d'<' -f1)
fi

### uncomment below and add some tests as above if you want to do Android picks. Change the first grep appropriately

#android_pick_url=$(grep -m 1 -C 2 "Runs Linux" /tmp/022916show.html | awk '/href=/ { print $2 }' | cut -d">" -f1)
#android_pick_name=$(grep -m 1 -C 2 "Runs Linux" /tmp/022916show.html | cut -d'>' -f3  | tail -n1 | cut -d'<' -f1)

today=$(date "+%m%d%y")
wd=$(echo $(echo $PWD | rev |cut -d'/' -f1) | rev)
if [ $wd = "site" ]
then
	git checkout -b $today
	sed -i '$d' data.php
	echo "deleted end char"
	cat<<- EOF >> data.php
	


	// "Episode $ep_num"
	\$data[$ep_num]['title'] = "$ep_title";
	\$data[$ep_num]['url'] = "$ep_url";
	\$data[$ep_num]['date'] = "$ep_date";
	
	\$data[$ep_num]['runslinux']['pick'][0]['name'] = "$runL_pick_name";
	\$data[$ep_num]['runslinux']['pick'][0]['url'] = "$runL_pick_url";
	
	\$data[$ep_num]['desktopapp']['pick'][0]['name'] = "$deskapp_pick_name";
	\$data[$ep_num]['desktopapp']['pick'][0]['url'] = "$deskapp_pick_url";
	
	\$data[$ep_num]['spotlight']['pick'][0]['name'] = "$spot_pick_name";
	\$data[$ep_num]['spotlight']['pick'][0]['url'] = "$spot_pick_url";
	
	?>
	EOF
fi

### The above here doc adds the information to the data file.
### It should not do anything desctructive
exit 0
