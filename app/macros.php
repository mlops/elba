<?php

Form::macro('textfield', function($name, $label)
{ 
return "<div class='form-group'><label for='{$name}'>{$label}&ensp;</label><input type='text' name='{$name}' id='{$name}'></div>";
});

HTML::macro('flash_message', function(){
    $alerts = array();
    $alert_types = array('danger', 'success', 'warning', 'info');
    foreach ($alert_types as $type) {
        if(Session::has($type)) {
            array_push($alerts, '<div class="alert alert-' . $type . ' alert-dismissable">');
            array_push($alerts, '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>');
            array_push($alerts, Session::get($type));
            array_push($alerts,'</div>');
        }
    }
    return implode("", $alerts);
});

