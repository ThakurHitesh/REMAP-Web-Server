import sys;
var1=sys.argv[1];

mrnaresult=open("scriptoutput/"+var1+"_results.txt","r");
output=open("scriptoutput/"+var1+"_mergeall.txt","w");
reading1=mrnaresult.read();
eachline1=reading1.split("\n");
for x in range(0,len(eachline1)-1,2):
	tempstring="";	
	tempstring=tempstring+eachline1[x]+eachline1[x+1];
	output.write(tempstring+"\n");
output.close();

