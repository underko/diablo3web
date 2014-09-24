<?php
        $f = fopen("http://eu.battle.net/d3/en/rankings/season/1/rift-dh", "r");
               
        $acc_name_array = array();
        $rift_rank = array();
        $size = 4096;

        if ($f) 
        {
                while (($line = fgets($f, $size)) !== false) {
                        if (strpos($line, '<strong class="battletag">') !== false)
                        {
                                fgets($f, $size); fgets($f, $size);
                                $acc_name_array[] = fgets($f, $size);
                        }
                       
                        if (strpos($line, '<td class="cell-RiftLevel" >') !== false)
                        {
                                $rift_rank[] = fgets($f, $size);
                        }              
                }

                if (!feof($f)) {
                        echo "Error: unexpected fgets() fail\n";
                }

                $histogram = array();
                $total = 0;

                foreach($rift_rank as $rr) {$histogram[$rr] = 0;}

                foreach($rift_rank as $rr)
                {
                        $histogram[$rr] += 1;
                        $total += $rr;
                       
                }
                       
                echo 'First rift lvl:   '.$rift_rank[0].'<br>';
                echo 'Average rift lvl: '.$total/count($rift_rank).'<br>';
                echo 'Last rift lvl:    '.$rift_rank[count($rift_rank) - 1].'<br><br>';

                $rift_rank = array_unique($rift_rank);

                echo 'Histogram'.'<br>';
                foreach($rift_rank as $value)
                {
                        echo '> '.$value.': '.$histogram[$value].'<br>';
                }
                
                fclose($f);
        }
?>