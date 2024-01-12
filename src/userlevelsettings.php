<?php
/**
 * PHPMaker 2024 User Level Settings
 */
namespace PHPMaker2024\prj_membership;

/**
 * User levels
 *
 * @var array<int, string>
 * [0] int User level ID
 * [1] string User level name
 */
$USER_LEVELS = [["-2","Anonymous"],
    ["0","Default"]];

/**
 * User level permissions
 *
 * @var array<string, int, int>
 * [0] string Project ID + Table name
 * [1] int User level ID
 * [2] int Permissions
 */
$USER_LEVEL_PRIVS = [["{2118A31F-9792-4A53-A578-DD31894048F9}employees","-2","0"],
    ["{2118A31F-9792-4A53-A578-DD31894048F9}employees","0","0"],
    ["{2118A31F-9792-4A53-A578-DD31894048F9}home.php","-2","72"],
    ["{2118A31F-9792-4A53-A578-DD31894048F9}home.php","0","8"],
    ["{2118A31F-9792-4A53-A578-DD31894048F9}audittrail","-2","0"],
    ["{2118A31F-9792-4A53-A578-DD31894048F9}audittrail","0","0"],
    ["{2118A31F-9792-4A53-A578-DD31894048F9}userlevelpermissions","-2","0"],
    ["{2118A31F-9792-4A53-A578-DD31894048F9}userlevels","-2","0"]];

/**
 * Tables
 *
 * @var array<string, string, string, bool, string>
 * [0] string Table name
 * [1] string Table variable name
 * [2] string Table caption
 * [3] bool Allowed for update (for userpriv.php)
 * [4] string Project ID
 * [5] string URL (for OthersController::index)
 */
$USER_LEVEL_TABLES = [["employees","employees","employees",true,"{2118A31F-9792-4A53-A578-DD31894048F9}","employeeslist"],
    ["home.php","home","Home",true,"{2118A31F-9792-4A53-A578-DD31894048F9}","home"],
    ["audittrail","audittrail","audittrail",true,"{2118A31F-9792-4A53-A578-DD31894048F9}","audittraillist"],
    ["userlevelpermissions","userlevelpermissions","userlevelpermissions",true,"{2118A31F-9792-4A53-A578-DD31894048F9}","userlevelpermissionslist"],
    ["userlevels","userlevels","userlevels",true,"{2118A31F-9792-4A53-A578-DD31894048F9}","userlevelslist"]];
