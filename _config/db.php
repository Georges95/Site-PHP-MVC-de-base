<?php

$DB = new DB(DATABASE_HOST, DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
$DB->setFetchMode(PDO::FETCH_ASSOC);