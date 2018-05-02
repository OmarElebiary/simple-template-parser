<?php

include("TemplateParser.php");

$profile = new TemplateParser("profile.tpl");
$data = array("username"=>"user_one", 
                     "name"=>"Ben",
                     "email"=>"ben@example.com",
                     "location"=>"Egypt");

$profile->set_data($data);

echo $profile->output();