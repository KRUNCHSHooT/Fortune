<?php

declare(strict_types=1);
namespace KRUNCHSHooT\Fortune;

use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\item\Item;
use pocketmine\block\Block;
use pocketmine\item\enchantment\Enchantment;

class FortuneListener implements Listener {

	/**@var Fortune */
	private $plugin;
	
	/**
	* FortuneListener constructor
	* @param Fortune $plugin
	*/
	public function __construct(Fortune $plugin){
		$this->plugin = $plugin;
	}
	
	/**
	* @param BlockBreakEvent $event
	*
	*/
	public function onBreak(BlockBreakEvent $event) : void{
		$player = $event->getPlayer();
		$item = $event->getItem();
		$block = $event->getBlock();
		
		if($this->plugin->disableWorlds($player->getLevelNonNull()->getFolderName()) != true){
			if($block->getId() == Block::LEAVES){
				if(mt_rand(1, 200) >= 190){
					//if you destroy leaves will drop the apple with 5% chance (with no Enchantment)
					$event->setDrops([Item::get(Item::APPLE)]);
				}
			}
			if($item->getEnchantmentLevel(Enchantment::FORTUNE) > 0){
				$chance = mt_rand(1, 100);
				$add = 0;
				switch($block->getId()){
					case Block::COAL_ORE:
						if($item->getEnchantmentLevel(Enchantment::FORTUNE) == 1){
							if($chance >= 1 && $chance <= 66){
								$add = 1;
							} else {
								$add = 2;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 2){
							if($chance >= 1 && $chance <= 50){
								$add = 1;
							} elseif($chance >= 51 && $chance <= 75){
								$add = 2;
							} else {
								$add = 3;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 3){
							if($chance >= 1 && $chance <= 40){
								$add = 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = 3;
							} else {
								$add = 4;
							}
						} else {
							$lvl = $item->getEnchantmentLevel(Enchantment::FORTUNE);
							if($chance >= 1 && $chance <= 20){
								$add = 1;
							} elseif($chance >= 1 && $chance <= 40){
								$add = round($lvl / 4) + 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = round($lvl / 4) + 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = round($lvl / 4) + 3;
							} else {
								$add = round($lvl / 4) + 4;
							}
						}
						$event->setDrops([Item::get(Item::COAL, 0, 1 * $add)]);
					break;
					case Block::DIAMOND_ORE:
						if($item->getEnchantmentLevel(Enchantment::FORTUNE) == 1){
							if($chance >= 1 && $chance <= 66){
								$add = 1;
							} else {
								$add = 2;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 2){
							if($chance >= 1 && $chance <= 50){
								$add = 1;
							} elseif($chance >= 51 && $chance <= 75){
								$add = 2;
							} else {
								$add = 3;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 3){
							if($chance >= 1 && $chance <= 40){
								$add = 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = 3;
							} else {
								$add = 4;
							}
						} else {
							$lvl = $item->getEnchantmentLevel(Enchantment::FORTUNE);
							if($chance >= 1 && $chance <= 20){
								$add = 1;
							} elseif($chance >= 1 && $chance <= 40){
								$add = round($lvl / 4) + 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = round($lvl / 4) + 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = round($lvl / 4) + 3;
							} else {
								$add = round($lvl / 4) + 4;
							}
						}
						$event->setDrops([Item::get(Item::DIAMOND, 0, 1 * $add)]);
					break;
					case Block::LAPIS_ORE:
						if($item->getEnchantmentLevel(Enchantment::FORTUNE) == 1){
							if($chance >= 1 && $chance <= 66){
								$add = 1;
							} else {
								$add = 2;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 2){
							if($chance >= 1 && $chance <= 50){
								$add = 1;
							} elseif($chance >= 51 && $chance <= 75){
								$add = 2;
							} else {
								$add = 3;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 3){
							if($chance >= 1 && $chance <= 40){
								$add = 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = 3;
							} else {
								$add = 4;
							}
						} else {
							$lvl = $item->getEnchantmentLevel(Enchantment::FORTUNE);
							if($chance >= 1 && $chance <= 20){
								$add = 1;
							} elseif($chance >= 1 && $chance <= 40){
								$add = round($lvl / 4) + 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = round($lvl / 4) + 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = round($lvl / 4) + 3;
							} else {
								$add = round($lvl / 4) + 4;
							}
						}
						$event->setDrops([Item::get(Item::DYE, 4, rand(2, 6) * $add)]);
					break;
					case Block::REDSTONE_ORE:
						if($item->getEnchantmentLevel(Enchantment::FORTUNE) == 1){
							if($chance >= 1 && $chance <= 66){
								$add = 1;
							} else {
								$add = 2;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 2){
							if($chance >= 1 && $chance <= 50){
								$add = 1;
							} elseif($chance >= 51 && $chance <= 75){
								$add = 2;
							} else {
								$add = 3;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 3){
							if($chance >= 1 && $chance <= 40){
								$add = 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = 3;
							} else {
								$add = 4;
							}
						} else {
							$lvl = $item->getEnchantmentLevel(Enchantment::FORTUNE);
							if($chance >= 1 && $chance <= 20){
								$add = 1;
							} elseif($chance >= 1 && $chance <= 40){
								$add = round($lvl / 4) + 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = round($lvl / 4) + 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = round($lvl / 4) + 3;
							} else {
								$add = round($lvl / 4) + 4;
							}
						}
						$event->setDrops([Item::get(Item::REDSTONE_DUST, 0, rand(4, 8) * $add)]);
					break;
					case Block::EMERALD_ORE:
						if($item->getEnchantmentLevel(Enchantment::FORTUNE) == 1){
							if($chance >= 1 && $chance <= 66){
								$add = 1;
							} else {
								$add = 2;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 2){
							if($chance >= 1 && $chance <= 50){
								$add = 1;
							} elseif($chance >= 51 && $chance <= 75){
								$add = 2;
							} else {
								$add = 3;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 3){
							if($chance >= 1 && $chance <= 40){
								$add = 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = 3;
							} else {
								$add = 4;
							}
						} else {
							$lvl = $item->getEnchantmentLevel(Enchantment::FORTUNE);
							if($chance >= 1 && $chance <= 20){
								$add = 1;
							} elseif($chance >= 1 && $chance <= 40){
								$add = round($lvl / 4) + 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = round($lvl / 4) + 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = round($lvl / 4) + 3;
							} else {
								$add = round($lvl / 4) + 4;
							}
						}
						$event->setDrops([Item::get(Item::EMERALD, 0, 1 * $add)]);
					break;
					case Block::LEAVES:
						$lvl = $item->getEnchantmentLevel(Enchantment::FORTUNE);
						$get = 200 - $lvl * 20;
						if(rand(0, 200) >= $get){
							if($get < 0){
								$event->setDrops([Item::get(Item::APPLE)]);
							} else {
								$event->setDrops([Item::get(Item::APPLE)]);
							}
						}
					break;
					case Block::NETHER_QUARTZ_ORE:
						if($item->getEnchantmentLevel(Enchantment::FORTUNE) == 1){
							if($chance >= 1 && $chance <= 66){
								$add = 1;
							} else {
								$add = 2;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 2){
							if($chance >= 1 && $chance <= 50){
								$add = 1;
							} elseif($chance >= 51 && $chance <= 75){
								$add = 2;
							} else {
								$add = 3;
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 3){
							if($chance >= 1 && $chance <= 40){
								$add = 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = 3;
							} else {
								$add = 4;
							}
						} else {
							$lvl = $item->getEnchantmentLevel(Enchantment::FORTUNE);
							if($chance >= 1 && $chance <= 20){
								$add = 1;
							} elseif($chance >= 1 && $chance <= 40){
								$add = round($lvl / 4) + 1;
							} elseif($chance >= 41 && $chance <= 60){
								$add = round($lvl / 4) + 2;
							} elseif($chance >= 61 && $chance <= 80){
								$add = round($lvl / 4) + 3;
							} else {
								$add = round($lvl / 4) + 4;
							}
						}
						$event->setDrops([Item::get(Item::NETHER_QUARTZ, 0, rand(4, 8) * $add)]);
					break;
					case Block::GRAVEL:
						if($item->getEnchantmentLevel(Enchantment::FORTUNE) == 1){
							if($chance >= 1 && $chance <= 14){
								$event->setDrops([Item::get(Item::FLINT)]);
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 2){
							if($chance >= 1 && $chance <= 25){
								$event->setDrops([Item::get(Item::FLINT)]);
							}
						} elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 3){
							if($chance >= 1 && $chance <= 100){
								$event->setDrops([Item::get(Item::FLINT)]);
							}
						} else {
							$event->setDrops([Item::get(Item::FLINT)]);
						}
					break;
					case Block::GLOWSTONE:
					    if($item->getEnchantmentLevel(Enchantment::FORTUNE) == 1){
					        if($chance >= 1 && $chance <= 25){
					            $add = 1;
					        } elseif($chance >= 26 && $chance <= 44){
					            $add = 2;
					        } elseif($chance >= 45 && $chance <= 63){
					            $add = 3;
					        } elseif($chance >= 64 && $chance <= 82){
					            $add = 4;
					        } elseif($chance >= 83 && $chance <= 100){
					            $add = 4;
					        }
					    } elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 2){
					        if($chance >= 1 && $chance <= 20){
					            $add = 1;
					        } elseif($chance >= 21 && $chance <= 36){
					            $add = 2;
					        } elseif($chance >= 37 && $chance <= 52){
					            $add = 3;
					        } elseif($chance >= 53 && $chance <= 68){
					            $add = 4;
					        } elseif($chance >= 69 && $chance <= 84){
					            $add = 4;
					        } elseif($chance >= 84 && $chance <= 100){
					            $add = 4;
					        }
					    } elseif($item->getEnchantmentLevel(Enchantment::FORTUNE) == 3){
					        if($chance >= 1 && $chance <= 17){
					            $add = 1;
					        } elseif($chance >= 18 && $chance <= 31){
					            $add = 2;
					        } elseif($chance >= 32 && $chance <= 45){
					            $add = 3;
					        } elseif($chance >= 46 && $chance <= 59){
					            $add = 4;
					        } elseif($chance >= 60 && $chance <= 73){
					            $add = 4;
					        } elseif($chance >= 74 && $chance <= 87){
					            $add = 4;
					        } elseif($chance >= 88 && $chance <= 100){
					            $add = 4;
					        }
					    } else {
					        $lvl = $item->getEnchantmentLevel(Enchantment::FORTUNE);
					        if($chance >= 1 && $chance <= 17){
					            $add = 1;
					        } elseif($chance >= 18 && $chance <= 31){
					            $add = round($lvl / 4) + 2;
					        } elseif($chance >= 32 && $chance <= 45){
					            $add = round($lvl / 4) + 3;
					        } elseif($chance >= 46 && $chance <= 59){
					            $add = round($lvl / 4) + 4;
					        } elseif($chance >= 60 && $chance <= 73){
					            $add = round($lvl / 4) + 4;
					        } elseif($chance >= 74 && $chance <= 87){
					            $add = round($lvl / 4) + 4;
					        } elseif($chance >= 88 && $chance <= 100){
					            $add = round($lvl / 4) + 4;
					        }
					    }
					    $event->setDrops([Item::get(Item::GLOWSTONE_DUST, 0, rand(2, 4) * $add)]);
					break;
                                        //TODO: Melon
                                        //TODO: Sea Lantern
				}
			}
		}
	}
}
