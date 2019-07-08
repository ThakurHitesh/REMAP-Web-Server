#!/usr/local/bin/perl
$f = $ARGV[0];
$o = $ARGV[1];
open (FASTAFILE, $f);
open (FASTAOUT, '>',$o);
$sequence = ' ';
$Ccount = 0;
$Gcount = 0;
$identifier = ' ';
$filedata="";
while ($line = <FASTAFILE>) {
    chomp $line;
    $filedata=$filedata.$line."\n";
    
    if ( $line =~ /^>/ ) {
        $identifier = $line;
    } elsif ( $line =~ /^\./ ) {
        next;
    } elsif ( $line =~ /^\(/ ) {
    }else {
        $sequence = uc $line;
    }
}

$sequencelength = length ($sequence);

@nucleotides = split ( '' , $sequence );

foreach $nuc (@nucleotides) {
    if ( $nuc eq 'G') {
        $Gcount = $Gcount + 1;
    } elsif ( $nuc eq 'C') {
        $Ccount = $Ccount + 1;
    }
}

$GCcontent = ((( $Gcount + $Ccount )/ $sequencelength ) * 100);

close (FASTAFILE);
print FASTAOUT $filedata;
my $places = 2;
my $factor = 10**$places;
$GCcontent = int($GCcontent * $factor) / $factor;
print FASTAOUT "Total GC content : ", "$GCcontent\n";


