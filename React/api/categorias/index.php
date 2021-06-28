<?php
     
        require '/var/www/html/vendor/autoload.php';
        $uri="mongodb://localhost";
        $client= new MongoDB\Client($uri);
        $dbCategoriasHeader = $client->piñufle->Categorias->find();
        $catHeader = array();
        foreach ($dbCategoriasHeader as $entryHeader) {
                $name = $entryHeader["name"];
                $ida = $entryHeader["_id"]->__toString();
                $xd= array("id"=>$ida,"name"=>$name);

                $catHeader[]=$xd;

        };

        $json = json_encode($catHeader);
        echo($json);


?>
