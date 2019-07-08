input_file=open("hairpin.fa","r");
output_file=open("filteredhairpin.txt","w");
read_input=input_file.read();
array_one=read_input.split(">");
array_three=[];
array_two=[];
for x in range(1,len(array_one)):
	temp_one=array_one[x].split('\n');	
	var_one="".join(temp_one[1:]);	
	array_three=temp_one[0].split(" ");		
	#x=x.replace('\n',' ');
	string_one=array_three[0]+"\t"+array_three[1]+"\t"+var_one+"\n";
	array_two.append(string_one);
for x in array_two:
	output_file.write(x);

