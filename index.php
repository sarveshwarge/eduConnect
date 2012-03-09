<?php
include ("classes/includes.php");
UtilClass::requireLogin(ABS_PATH."/index.php");
$html=new HtmlHeads();
$user=new User($_SESSION['id']);
$html->putHead();
$talks=new Talks("","",0);
$content=$talks->getTalkUpdateForm();
$content.=$talks->getFormattedTalks();
$layout=new LayoutStruct($content);
//$talk=new Talk(1);
//$layout=new LayoutStruct($talk->getFormattedTalk());

$layout->addWidget($user->getProfileWidget());
$layout->addWidget($user->getStatusPaneWidget());
$layout->putFrame();
?>