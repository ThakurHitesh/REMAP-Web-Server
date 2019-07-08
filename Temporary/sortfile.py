import csv
import sys
var=sys.argv[1]
outfile=open("scriptoutput/"+var+"_sortedmergeall.txt","w")
from operator import itemgetter
reader = csv.reader(open("scriptoutput/"+var+"_mergeall.txt"), delimiter="\t")
for line in sorted(reader, key=itemgetter(1)):
    outfile.write(line[0]+"\t"+line[1]+"\t"+line[2]+"\t"+line[3]+"\t"+line[4]+"\n")
