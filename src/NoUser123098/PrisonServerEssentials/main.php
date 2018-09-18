<?php
namespace NoUser123098\PrisonServerEssentials;

use pocketmine\level\Level;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\level\Position;
use pocketmine\level\Level;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\permission\DefaultPermissions;
use pocketmine\utils\UUID;

class main extends PluginBase{
    private $config;
    private $permission;
    const NOT_FOUND = null;
    const INVALID_NAME = -1;
    const ALREADY_EXISTS = 0;
    const SUCCESS = 1;
    private $loadGroups = false;
    private $msg;
    private $provider;
    private $userDateMgr;
    private $attachments = [], $groups = [], $defaultPermissions = [];
}
?>
