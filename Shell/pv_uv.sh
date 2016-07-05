#!/bin/bash

date=`date +%d/%b/%Y`
log=/usr/local/nginx/logs/access.log

grep "$date" $log|awk '{print $1}'|sort|uniq -c|awk 'BEGIN{print "IP\t\t\tVisit Times\n----------"}{printf "%-25s" "%-10s\n",$2,$1;PV=PV+$1}END{print "----------";print "Today is PV: "PV; print "Today is UV: "NR}'
