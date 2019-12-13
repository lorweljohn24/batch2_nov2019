<?
$Comic = ‘Batman’;
$ScienceFiction = ‘Dreaming Void’;
$Fantasy = ‘American Gods’;
$Horror = ‘Frankenstein’;

$arrBooks2 = compact (‘Comic’, ‘ScienceFiction’, ‘Fantasy’, ‘Horror’);

foreach ($arrBooks2 as $key => $value) {
print  "$value is an example of a $key book.<br>\n";
}
?>

Batman is an example of a Comic book.
Dreaming Void is an example of a ScienceFiction book.
American Gods is an example of a Fantasy book.
Frankenstein is an example of a Horror book.