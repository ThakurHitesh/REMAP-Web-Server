#!usr/bin/perl

# $f=$ARGV[0]; #Command line argument, give name of transcript file, example : perl sc.pl PKS-15_transcripts.fasta
$f = $ARGV[0];
$database = $ARGV[1];
$token = $ARGV[2];

@array=split(/\//,$f);
open(FH,$database) or die "cannot open file"; #input mirna file, contains mirna from the selected plants
open(FH1,$f) or die "cannot open file1";

open (WH,">scriptoutput/".$token."$array[-1]_results.txt"); #Output file in the format "transcript.fasta results.txt"

@arr=<FH>;
@art=<FH1>;

print "Size of mirna file : ".$#arr."\n";
print "Size of transcript file :".$#art."\n";
$count=0;
foreach $s(@arr)
{
 print "current : ".$count."\n";
 $count++;
 #print $s;getc;
 #if($count%1000==0){print "current=$count\n";}
 if($s =~ /^>/){chomp($curt=$s);}
 else
 {
  @seq=();
  chomp($mir=$s);
  $mir =~ tr/U/T/;  #### replacing U with T
  $mirv= reverse($mir); #### reverse 
  #print $mir;getc;
  foreach $str(@art)
  {
   #print $str;getc;
   if($str =~ /^>/){$cur=$str;}
   else
   {
    if($str =~ /$mir/)   ### Searching for exact match through regex
    {
     my @matches;
     @positionF=();
     while ($str =~ /$mir/g) {
	@temp=();
	push @matches, $1;
        my $startpositionF = $-[0]+1;
        my $endpositionF=length($mir)+$startpositionF-1;
	#print $startpositionF."\n";	
	push @temp,"(";	
	push @temp,$startpositionF;
	push @temp,",";
	push @temp,$endpositionF;
	push @temp,")";
	#print @temp;
	print "\n";	
	push @positionF,@temp;
     }
     print "Found $curt---$cur"; 
     #print WH $curt."\t".$cur."\t".$mir."\t"."+1"."\t"."(".$startpositionF.",".$endpositionF.")"."\n";
     print WH $curt."\t".$cur."\t".$mir."\t"."+1"."\t";
     print WH @positionF;
     print WH "\n";	
    }
    if($str =~ /$mirv/)  ### Same search for the reverse string
    {
     my @matches;
     @positionR=();
     while ($str =~ /$mirv/g) {
	@temp=();
	push @matches, $1;
        my $startpositionR = $-[0]+1;
        my $endpositionR=length($mirv)+$startpositionR-1;
	#print $startpositionF."\n";	
	push @temp,"(";	
	push @temp,$startpositionR;
	push @temp,",";
	push @temp,$endpositionR;
	push @temp,")";
	#print @temp;
	print "\n";	
	push @positionR,@temp;
     }	
     my $startpositionR = index($str,$mirv) + 1;
     my $endpositionR=length($mirv)+$startpositionR-1;
     print "Found $curt---$cur";
     #print WH $curt."\t".$cur."\t".$mirv."\t"."-1"."\t"."(".$startpositionR.",".$endpositionR.")"."\n";
     print WH $curt."\t".$cur."\t".$mirv."\t"."-1"."\t";
     print WH @positionR;
     print WH "\n";
    }
   }
  }
 }
}

 
