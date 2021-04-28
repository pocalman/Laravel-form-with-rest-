<?php
// nécessaire pour faire fonctionner certaines icones de differentes versions de fontawesome
// il faut rajouter "fab" à la fin du nom de l'icone ("n") pour remplacer la master class fa par fab.
    if(isset($n) && preg_match('/fab$/', $n) > 0) {
        $master_class = 'fab';
    }
    else {
        $master_class = 'fa';
    }
?>
<i class="{{$master_class}} fa-{{$n ?? 'question-circle'}} {{$class ?? ''}}" aria-hidden="true"></i>