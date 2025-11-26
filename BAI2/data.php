<?php
$t=@file_get_contents(__DIR__.'/Quiz.txt');$quizs=[];
foreach(array_filter(array_map('trim',preg_split("/\r\n\r\n|\n\n/",$t))) as $b){$l=preg_split('/\r\n|\r|\n/',$b);$quizs[]=['cauhoi'=>$l[0]??'','A'=>substr($l[1]??'',3),'B'=>substr($l[2]??'',3),'C'=>substr($l[3]??'',3),'D'=>substr($l[4]??'',3),'dapan'=>trim(str_ireplace('ANSWER:','',$l[5]??''))];}
?>
<?php
$quizs = [
[
    'cauhoi' => 'Thành phần nào sau đây KHÔNG phải là một thành phần giao diện người dùng (UI) trong Android?',
    'A' => 'TextView',
    'B' => 'Button',
    'C' => 'Service',
    'D' => 'ImageView',
    'dapan' => 'C'
],
[
    'cauhoi' => 'Layout nào thường được sử dụng để sắp xếp các thành phần UI theo chiều dọc hoặc chiều ngang?',
    'A' => 'RelativeLayout',
    'B' => 'LinearLayout',
    'C' => 'FrameLayout',
    'D' => 'ConstraintLayout',
    'dapan' => 'B'
]
]
?>