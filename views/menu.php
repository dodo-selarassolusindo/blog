<?php

namespace PHPMaker2024\prj_membership;

// Navbar menu
$topMenu = new Menu("navbar", true, true);
$topMenu->addMenuItem(2, "mi_home", $Language->menuPhrase("2", "MenuText"), "home", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}home.php'), false, false, "", "", true, false);
$topMenu->addMenuItem(6, "mi_news", $Language->menuPhrase("6", "MenuText"), "news", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}news.php'), false, false, "", "", true, false);
$topMenu->addMenuItem(1, "mi_employees", $Language->menuPhrase("1", "MenuText"), "employeeslist", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}employees'), false, false, "", "", true, false);
$topMenu->addMenuItem(5, "mi_userlevels", $Language->menuPhrase("5", "MenuText"), "userlevelslist", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}userlevels'), false, false, "", "", true, false);
$topMenu->addMenuItem(4, "mi_userlevelpermissions", $Language->menuPhrase("4", "MenuText"), "userlevelpermissionslist", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}userlevelpermissions'), false, false, "", "", true, false);
$topMenu->addMenuItem(3, "mi_audittrail", $Language->menuPhrase("3", "MenuText"), "audittraillist", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}audittrail'), false, false, "", "", true, false);
echo $topMenu->toScript();

// Sidebar menu
$sideMenu = new Menu("menu", true, false);
$sideMenu->addMenuItem(2, "mi_home", $Language->menuPhrase("2", "MenuText"), "home", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}home.php'), false, false, "", "", true, true);
$sideMenu->addMenuItem(6, "mi_news", $Language->menuPhrase("6", "MenuText"), "news", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}news.php'), false, false, "", "", true, true);
$sideMenu->addMenuItem(1, "mi_employees", $Language->menuPhrase("1", "MenuText"), "employeeslist", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}employees'), false, false, "", "", true, true);
$sideMenu->addMenuItem(5, "mi_userlevels", $Language->menuPhrase("5", "MenuText"), "userlevelslist", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}userlevels'), false, false, "", "", true, true);
$sideMenu->addMenuItem(4, "mi_userlevelpermissions", $Language->menuPhrase("4", "MenuText"), "userlevelpermissionslist", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}userlevelpermissions'), false, false, "", "", true, true);
$sideMenu->addMenuItem(3, "mi_audittrail", $Language->menuPhrase("3", "MenuText"), "audittraillist", -1, "", AllowListMenu('{2118A31F-9792-4A53-A578-DD31894048F9}audittrail'), false, false, "", "", true, true);
echo $sideMenu->toScript();
