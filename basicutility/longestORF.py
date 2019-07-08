from Bio import SeqIO
import re
import sys
filename = sys.argv[1]
out = sys.argv[2]
minorf = int(sys.argv[3])
records = SeqIO.parse(filename, 'fasta')
outputfile=open(out,'w')
z=1;
for record in records:
    for strand, seq in (1, record.seq), (-1, record.seq.reverse_complement()):
        for frame in range(3):
            index = frame
            while index < len(record) - 6:
                match = re.match('(ATG(?:\S{3})*?T(?:AG|AA|GA))', str(seq[index:]))
                if match:
                    orf = match.group()
                    index += len(orf)
                    if len(orf) > minorf:
                        pos = str(record.seq).find(orf) + 1 
                        outputfile.write(orf+"\t{}\t{}\t{}\t{}\n".format\
                           (len(orf), strand, pos, record.id))
			z=z+1;
                else: index += 3
