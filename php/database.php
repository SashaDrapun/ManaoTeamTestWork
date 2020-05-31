<?php
        if(!file_exists('../database.xml')){
            $doc = new DomDocument('1.0'); 
            $users = $doc->appendChild($doc->createElement('users'));  
            $user = $users->appendChild($doc->createElement('user'));  
            $doc->formatOutput = true; 
            $doc->save('../database.xml'); 
            $doc = simplexml_load_file('../database.xml');
        }
        $doc = simplexml_load_file('../database.xml');
?>