<?php

declare(strict_types=1);
namespace KRUNCHSHooT\Fortune;

use pocketmine\plugin\PluginBase;
use pocketmine\item\enchantment\Enchantment;

class Fortune extends PluginBase {

	public static $inDisableWorlds;
	
	public function onEnable(){
		$this->getLogger()->info("Fortune Plugin has been successfully registered");
		$this->getServer()->getPluginManager()->registerEvents(new FortuneListener($this), $this);
		self::$inDisableWorlds = (array) $this->getConfig()->get("disableworlds");
	}
	
	public function onLoad(){
		$this->getLogger()->info("currently registering enchantment fortune...");

		Enchantment::registerEnchantment(new Enchantment(Enchantment::FORTUNE, "Fortune", Enchantment::RARITY_UNCOMMON, Enchantment::SLOT_DIG, Enchantment::SLOT_HOE, 3));
		
		if(!file_exists($this->getDataFolder())){
			@mkdir($this->getDataFolder());
			$this->saveResource("config.yml");
		}
	}
	
	public function disableWorlds(string $world) : bool {
		return in_array($world, self::$inDisableWorlds);
	}
}