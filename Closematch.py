# Function to find all close matches of 
# input string in given list of possible strings 
from difflib import get_close_matches 
import sys
query=sys.argv[1]
from fuzzywuzzy import process
choices=[]
file_input=open("Precompile/filteredhairpin.txt","r")
file_output=open("scriptoutput/stemloop.txt","w")
reading_file=file_input.read()
array_one=reading_file.split("\n")	
for x in array_one:
	array_two=x.split("\t")
	choices.append(array_two[0])
bestmatch=process.extractOne(query, choices)
#print(bestmatch[0])
index=[ i for i, word in enumerate(array_one) if word.startswith(bestmatch[0]+'\t') ]
array_rna=array_one[int(index[0])].split("\t")
file_output.write(array_rna[2])
