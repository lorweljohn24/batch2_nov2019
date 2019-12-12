
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
87
88
89
90
91
92
93
94
95
96
97
98
99
100
101
102
103
104
105
106
107
108
109
110
111
112
113
114
115
116
117
<?php
session_start();
//You can customize your captcha settings here
 
$captcha_code = '';
$captcha_image_height = 50;
$captcha_image_width = 130;
$total_characters_on_image = 6;
 
//The characters that can be used in the CAPTCHA code.
//avoid all confusing characters and numbers (For example: l, 1 and i)
$possible_captcha_letters = 'bcdfghjkmnpqrstvwxyz23456789';
$captcha_font = 'monofont.ttf';
 
$random_captcha_dots = 50;
$random_captcha_lines = 25;
$captcha_text_color = "0x142864";
$captcha_noise_color = "0x142864";
 
 
$count = 0;
while ($count < $total_characters_on_image) { 
$captcha_code .= substr(
 $possible_captcha_letters,
 mt_rand(0, strlen($possible_captcha_letters)-1),
 1);
$count++;
}
 
$captcha_font_size = $captcha_image_height * 0.65;
$captcha_image = @imagecreate(
 $captcha_image_width,
 $captcha_image_height
 );
 
/* setting the background, text and noise colours here */
$background_color = imagecolorallocate(
 $captcha_image,
 255,
 255,
 255
 );
 
$array_text_color = hextorgb($captcha_text_color);
$captcha_text_color = imagecolorallocate(
 $captcha_image,
 $array_text_color['red'],
 $array_text_color['green'],
 $array_text_color['blue']
 );
 
$array_noise_color = hextorgb($captcha_noise_color);
$image_noise_color = imagecolorallocate(
 $captcha_image,
 $array_noise_color['red'],
 $array_noise_color['green'],
 $array_noise_color['blue']
 );
 
/* Generate random dots in background of the captcha image */
for( $count=0; $count<$random_captcha_dots; $count++ ) {
imagefilledellipse(
 $captcha_image,
 mt_rand(0,$captcha_image_width),
 mt_rand(0,$captcha_image_height),
 2,
 3,
 $image_noise_color
 );
}
 
/* Generate random lines in background of the captcha image */
for( $count=0; $count<$random_captcha_lines; $count++ ) {
imageline(
 $captcha_image,
 mt_rand(0,$captcha_image_width),
 mt_rand(0,$captcha_image_height),
 mt_rand(0,$captcha_image_width),
 mt_rand(0,$captcha_image_height),
 $image_noise_color
 );
}
 
/* Create a text box and add 6 captcha letters code in it */
$text_box = imagettfbbox(
 $captcha_font_size,
 0,
 $captcha_font,
 $captcha_code
 ); 
$x = ($captcha_image_width - $text_box[4])/2;
$y = ($captcha_image_height - $text_box[5])/2;
imagettftext(
 $captcha_image,
 $captcha_font_size,
 0,
 $x,
 $y,
 $captcha_text_color,
 $captcha_font,
 $captcha_code
 );
 
/* Show captcha image in the html page */
// defining the image type to be shown in browser widow
header('Content-Type: image/jpeg'); 
imagejpeg($captcha_image); //showing the image
imagedestroy($captcha_image); //destroying the image instance
$_SESSION['captcha'] = $captcha_code;
 
function hextorgb ($hexstring){
  $integar = hexdec($hexstring);
  return array("red" => 0xFF & ($integar >> 0x10),
               "green" => 0xFF & ($integar >> 0x8),
               "blue" => 0xFF & $integar);
    }
?>