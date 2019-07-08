#!/usr/bin/perl

use strict;
use warnings;
open(my $fh, '>', 'basicutility/Scriptout/resultss.txt');
my %seqs;
$/ = "\n>"; # read fasta by sequence, not by lines

while (<>) {
    s/>//g;
    my ($seq_id, @seq) = split (/\n/, $_);
    my $seq = uc(join "", @seq); # rebuild sequence as a single string
    my $len = length $seq;
    my $numA = $seq =~ tr/A//; # removing A's from sequence returns total counts
    my $numC = $seq =~ tr/C//;
    my $numG = $seq =~ tr/G//;
    my $numT = $seq =~ tr/T//;
    my $numN = $seq =~ tr/N//;
    my $GC = ((( $numG + $numC )/ $len ) * 100);
    my $GC = sprintf '%.2f', $GC;
    my $AT = ((( $numA + $numT )/ $len ) * 100);  
    my $AT = sprintf '%.2f', $AT;	
    print $fh "$seq_id\t$len\t$numA\t$numC\t$numG\t$numT\t$numN\t$GC\t$AT\n";
}
