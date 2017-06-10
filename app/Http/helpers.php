<?php

	function bookPossibility($av) {
        
        $pos = strpos($av, '|');
        
        if($pos === false) {

        	$pos = strpos($av, 'Sprzedane');

        	if($pos === false) {

        		echo "<span class=orange> $av </span>";
        		return;
        	}
            
            echo "<span class=red> $av </span>";
            return;

        }

        $strings = explode('|', $av);
        $strings[0] = "<span class='green'>". $strings[0] ."</span>";
        $strings[1] = "<a href='kontakt'>" . $strings[1] . "</a>";

        echo $strings[0] . " | " . $strings[1];

        }