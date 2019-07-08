from Bio import SeqIO
import sys;
idsent=sys.argv[1]
file_to_read=sys.argv[2]
input_file = open(file_to_read,'r')
output_file = open('scriptoutput/onclickseq'+idsent+".txt",'w')
temp=[]
temp.append(idsent)
for key in SeqIO.parse(input_file, 'fasta'):
    entry_name = key.name
    if key.name in temp: #Here you can list several IDs
	output_file.write(">"+idsent + '\n')
        output_file.write(str(key.seq[0:]) + '\n') 
output_file.close()
input_file.close()
