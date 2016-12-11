<?php
	function getStardate(){
      $offset = 2000;
      $seconds_per_stardate = 31449.6;
      return time() / $seconds_per_stardate + $offset;
    }

    function nicetime($date) {
        if(empty($date)) {
            return " - ";
        }
        
        $periods         = array("segundo", "minuto", "hora", "día", "semana", "mes", "año", "decada");
        $lengths         = array("60","60","24","7","4.35","12","10");

        $now             = time();
        $unix_date       = strtotime($date);
        
        if(empty($unix_date)) {    
            return "No hay dato";
        }

        if($now > $unix_date) {    
            $difference     = $now - $unix_date;
            $tense         = "Hace";
        } else {
            $difference     = $unix_date - $now;
            $tense         = "from now";
        }
        
        for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
            $difference /= $lengths[$j];
        }
        
        $difference = round($difference);
        
        if($difference != 1) {
            $periods[$j].= "s";
        }
        
        return "{$tense} $difference $periods[$j]";
    }
?>