<?php

include("TemplateParser.php");

$profile = new TemplateParser("profile.tpl");
$data = array("username"=>"user_one", 
                     "name"=>"Ben",
                     "age"=>"33",
                     "location"=>"Egypt");

$profile->set_data($data);

echo $profile->output();