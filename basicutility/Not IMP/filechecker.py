import sys
filename = sys.argv[1]
outname = sys.argv[2]
inputfile = open(filename,"r")
outputfile = open(outname,"w")
readfile = inputfile.read()
readfile = readfile.upper()
countA = 0
countT = 0
countG = 0
countC = 0
countA = readfile.count("A")
countT = readfile.count("T")
countG = readfile.count("G")
countC = readfile.count("C")
arrayseq = readfile.split("\n")
onlyseq = " ".join(arrayseq[1:])
tlength = len(onlyseq.strip())
freq = ((countA+countT+countG+countC)/float(tlength))*100
if(freq > 50):
	outputfile.write("Nucleotide")
else:
	outputfile.write("Protein")
 
