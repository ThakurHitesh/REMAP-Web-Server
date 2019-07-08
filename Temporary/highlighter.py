import re

COLOR = ['red']
inputfile=open("seqfile.fa","r");
outputfile=open("highlighted.html","w");
text=inputfile.read();
regex = re.compile(r"(AATTGGCC)", re.I)
#print(text);
i = 0; output = "<html>"
for m in regex.finditer(text):
    output += "".join([text[i:m.start()],
                       "<strong><span style='color:%s'>" % COLOR[m.lastindex-1],
                       text[m.start():m.end()],
                       "</span></strong>"])
    i = m.end()
outputfile.write("".join([output, text[m.end():], "</html>"]))
