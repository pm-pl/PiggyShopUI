<?php

declare(strict_types=1);

namespace DaPigGuy\PiggyShopUI\shops;

use pocketmine\item\Item;

/**
 * Class ShopItem
 * @package DaPigGuy\PiggyShopUI\shops
 */
class ShopItem
{
    /** @var Item */
    public $item;
    /** @var int */
    public $buyPrice;
    /** @var bool */
    public $canSell;
    /** @var int */
    public $sellPrice;

    /**
     * ShopItem constructor.
     * @param Item $item
     * @param int $buyPrice
     * @param bool $canSell
     * @param int $sellPrice
     */
    public function __construct(Item $item, int $buyPrice, bool $canSell, int $sellPrice)
    {
        $this->item = $item;
        $this->buyPrice = $buyPrice;
        $this->canSell = $canSell;
        $this->sellPrice = $sellPrice;
    }

    /**
     * @return Item
     */
    public function getItem(): Item
    {
        return $this->item;
    }

    /**
     * @param Item $item
     */
    public function setItem(Item $item): void
    {
        $this->item = $item;
    }

    /**
     * @return int
     */
    public function getBuyPrice(): int
    {
        return $this->buyPrice;
    }

    /**
     * @param int $buyPrice
     */
    public function setBuyPrice(int $buyPrice): void
    {
        $this->buyPrice = $buyPrice;
    }

    /**
     * @return bool
     */
    public function isCanSell(): bool
    {
        return $this->canSell;
    }

    /**
     * @param bool $canSell
     */
    public function setCanSell(bool $canSell): void
    {
        $this->canSell = $canSell;
    }

    /**
     * @return int
     */
    public function getSellPrice(): int
    {
        return $this->sellPrice;
    }

    /**
     * @param int $sellPrice
     */
    public function setSellPrice(int $sellPrice): void
    {
        $this->sellPrice = $sellPrice;
    }

    /**
     * @return array
     */
    public function serialize(): array
    {
        return ["item" => $this->item->jsonSerialize(), "buyPrice" => $this->buyPrice, "canSell" => $this->canSell, "sellPrice" => $this->sellPrice];
    }
}