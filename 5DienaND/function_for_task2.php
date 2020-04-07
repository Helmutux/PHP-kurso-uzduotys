<?php
function daugyba($number)
{
$rows = array();
echo "<table>";
for($j=0; $j<=$number; $j++){   
    if($j==0){
    print('<tr>');
    for($i=0; $i<=$number; $i++){
        array_push($rows,$i);
        print('<td class="red">'.$rows[$i].'</td>');
    }
    print('</tr>');
    }
    else
    {
    print('<tr>');
    print("<td class=\"red\">$j</td>");
    for($i=1; $i<=$number; $i++){
        $tmp=$i*$j;
        print('<td>'.$tmp.'</td>');
    }
    print('</tr>');//uzdarau eilute su tr tag'u
    }
    }
    echo "</tr></table>";//uzdarau lentele table tag'u. Daugybos lentele suformuota
    echo "<br>";
    echo "<hr>";
}
?>