#!/bin/sh
# Generated from 'run-import-XMLfeed.sh.in' on Mon Dec 17 19:19:07 UTC 2018.
#
# Part of the DOMjudge Programming Contest Jury System and licenced
# under the GNU GPL. See README and COPYING for details.
#
# This script does the two things needed to import from an XML feed:
# - Grab the feed with cURL and pipe it into getFeed.pl
# - Run import-XMLfeed
# It starts both inside a screen.

ETCDIR="/opt/domjudge/domserver/etc"

MYDIR=$(dirname $0)

eval $(cat "$ETCDIR/import-forwardfeed.yaml" | \
	sed -n '/^[[:space:]]*\(url\|user\|pass\):/{s/^[[:space:]]*\([a-z]*\):[[:space:]]*\(.*\)/\1=\2/;p}')

if [ -z "$url" ]; then
	echo "Could not parse url from '$ETCDIR/import-forwardfeed.yaml'."
	exit 1
fi

# Start a screen session and create two windows inside it, then
# connect to the screen.

echo -n "Starting a screen with two windows in it"
screen -d -m -S import-XMLfeed.$$

screen -S import-XMLfeed.$$ -p0 -X stuff "curl -kN -u ${user:+'$user:$pass'} '$url' | '$MYDIR/getFeed.pl'\n"

for i in `seq 3`; do
	echo -n .
	sleep 1
done
echo

screen -S import-XMLfeed.$$ -X screen 1
screen -S import-XMLfeed.$$ -p1 -X stuff "'$MYDIR/import-XMLfeed'\n"

screen -r import-XMLfeed.$$
