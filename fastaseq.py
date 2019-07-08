import sys
var1=sys.argv[1]
extractid=open('scriptoutput/'+var1+'_mergeall.txt',"r")
ext=open('scriptoutput/extractids.txt','w')
readids=extractid.read()
readline=readids.split("\n")
tempvar=[]
for x in readline:
	if x != "":
		splitcol=x.split('\t')
		#print(splitcol)
		tempvar.append(splitcol[1])
tempvar1=set(tempvar)
for x in tempvar1:
	ext.write(x[1:]+"\n")		

