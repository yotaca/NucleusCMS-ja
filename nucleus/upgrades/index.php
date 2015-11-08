<?php
/*
 * Nucleus: PHP/MySQL Weblog CMS
 * Copyright (C) 2003-2015 The Nucleus Group　Japan (http://japan.nucleuscms.org/)
 * Copyright (C) 2002-2013 The Nucleus Group  (http://nucleuscms.org/)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * (see nucleus/documentation/index.html#license for more info)
 */

include('upgrade.functions.php');

load_upgrade_lang();

// check if logged in etc
if (!$member->isLoggedIn()) {
	upgrade_showLogin('index.php');
}

if (!$member->isAdmin()) {
	upgrade_error(_UPG_TEXT_ONLY_SUPER_ADMIN);
}

$echo = array();
$echo[] = '<h1>'  . _UPG_TEXT_UPGRADE_SCRIPTS . '</h1>';
$echo[] = _UPG_TEXT_NOTE01NEW;
$echo[] = '<p>' . _UPG_TEXT_NOTE02 . '</p>';

// calculate current version
if     (!upgrade_checkinstall(250)) $current = 200;
elseif (!upgrade_checkinstall(300)) $current = 250;
elseif (!upgrade_checkinstall(310)) $current = 300;
elseif (!upgrade_checkinstall(320)) $current = 310;
elseif (!upgrade_checkinstall(330)) $current = 320;
elseif (!upgrade_checkinstall(331)) $current = 330;
elseif (!upgrade_checkinstall(340)) $current = 331;
elseif (!upgrade_checkinstall(350)) $current = 340;
elseif (!upgrade_checkinstall(360)) $current = 350;
elseif (!upgrade_checkinstall(370)) $current = 360;
elseif (!upgrade_checkinstall(371)) $current = 370;
else                                $current = 371;

if ($current == 371)
	$echo[] = '<p class="ok">' . _UPG_TEXT_NO_AUTOMATIC_UPGRADES_REQUIRED . '</p>';
else {
	if (phpversion() < '5.0.0') {
		$echo[] = '<p class="deprecated">' . _UPG_TEXT_WARN_DEPRECATED_PHP4_STOP .'</p>';
	}
	$echo[] = sprintf('<p class="warning"><a href="upgrade.php?from=%s">%s</a></p>', $current , _UPG_TEXT_CLICK_HERE_TO_UPGRADE);
    $echo[] = '<div class="note">';
    $echo[] = sprintf('<b>%s:</b> %s' , _UPG_TEXT_NOTE50_WARNING , _UPG_TEXT_NOTE50_MAKE_BACKUP);
    $echo[] = '</div>';
}


$from = intGetVar('from');
if (!$from) $from = $current;

$sth = array();
if($from < 330) $sth[] = upgrade_manual_atom1_0(); // atom feed supports 1.0 and blogsetting is added
if($from < 340) $sth[] = upgrade_manual_340();     // Need to be told of recommended .htaccess files for the media and skins folders.
if($from < 350) $sth[] = upgrade_manual_350();     // Need to be told of deprecation of PHP4 support and two new plugins
if($from < 366) $sth[] = upgrade_manual_366();

$sth = trim(join('',$sth));
if (!empty($sth)) {
    $echo[] = '<h1>' . _UPG_TEXT_NOTE50_MANUAL_CHANGES .'</h1>';
    $echo[] = '<p>' . _UPG_TEXT_NOTE50_MANUAL_CHANGES_01 .'</p>';
    $echo[] = $sth;
}

upgrade_head();
echo join("\n",$echo);
upgrade_foot();

function upgrade_todo($ver) {
	return upgrade_checkinstall($ver) ? '(<span class="ok">'. _UPG_TEXT_60_INSTALLED .'</span>)' : "(<span class='warning'>". _UPG_TEXT_60_NOT_INSTALLED ."</span>)";
}

function upgrade_manual_atom1_0() {
	// atom 1.0
	$query = sprintf('SELECT sddesc FROM %s WHERE sdname="feeds/atom"',sql_table('skin_desc'));
	$res = sql_query($query);
	
	$echo = array();
	while ($o = sql_fetch_object($res)) {
		if ($o->sddesc=='Atom 0.3 weblog syndication') {
			$echo[] = '<h2>Atom 1.0</h2>';
			$echo[] = '<p>' . _UPG_TEXT_ATOM1_01 . '</p>';
			$echo[] = '<p>' . _UPG_TEXT_ATOM1_02 . '</p>';
			$echo[] = '<p>' . _UPG_TEXT_ATOM1_03 . '</p>';
		}
	}

	// default skin
	$query = sprintf('SELECT tdnumber FROM %s WHERE tdname="default/index"',sql_table('template_desc'));
	$res = sql_query($query);
	$tdnumber = 0;
	$o = sql_fetch_object($res);
	$tdnumber = $o->tdnumber;
	if (0<$tdnumber){
		$query = sprintf("SELECT tpartname FROM %s WHERE tdesc=%s AND tpartname='BLOGLIST_LISTITEM'",sql_table('template'),$tdnumber);
		$res = sql_query($query);
		if (!sql_fetch_object($res)) {
			$echo[] = '<h2>' . _UPG_TEXT_ATOM1_04 . '</h2>';
			$echo[] = '<p>' . _UPG_TEXT_ATOM1_05 . '</p>';
			$echo[] = '<p>' . _UPG_TEXT_ATOM1_06 . '</p>';
			$echo[] = '<p>' . _UPG_TEXT_ATOM1_07 . '</p>';
		}
	}
	return !empty($echo) ? join("\n",$echo) : '';
}

function upgrade_manual_340() {
	$echo[] = '<h2>' . sprintf(_UPG_TEXT_CHANGES_NEEDED_FOR_NUCLEUS , '3.4') . '</h2>';
	$echo[] = '<p>' . _UPG_TEXT_V340_01 . '</p>';
	$echo[] = '<p>';
	$echo[] = _UPG_TEXT_V340_02 . '：';
	$echo[] = '<ul>';
	$echo[] = '<li><a href="../../extra/htaccess/media/readme.ja.txt">extra/htaccess/media/readme.ja.txt</a></li>';
	$echo[] = '<li><a href="../../extra/htaccess/skins/readme.ja.txt">extra/htaccess/skins/readme.ja.txt</a></li>';
	$echo[] = '</ul>';
	$echo[] = '</p>';
	return join("\n",$echo);
}

function upgrade_manual_350() {
	if (5<=phpversion()) return '';
	$echo[] = '<h2>'. _UPG_TEXT_V350_01_IMPORTANT .'</h2>';
	$echo[] = '<p>' . _UPG_TEXT_WARN_PHP_IS_OLD . '</p>';
	return join("\n",$echo);
}

function upgrade_manual_366() {
	$content = @file_get_contents('../../action.php');
	if(strpos($content,'=&')===false) return '';
	$echo[] = '<h2>' . _UPG_TEXT_V366_01 . '</h2>';
	$echo[] = '<p>' . _UPG_TEXT_V366_02_UPDATE_ACTION_PHP .'</p>';
	return join("\n",$echo);
}
