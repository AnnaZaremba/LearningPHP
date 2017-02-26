<?
$od = "1";
$do = "100";

for($od; $od<=$do; $od++) {
    $pierwsza = TRUE;
    if($od<=1) {
        $pierwsza = FALSE;
    }
    for($i=2; $i<$od; $i++) {
        if($pierwsza) {
            if($od % $i == 0) {
                $pierwsza = FALSE;
            }
        }
    }
    if($pierwsza) {
        echo "$od <br />";
    }
}