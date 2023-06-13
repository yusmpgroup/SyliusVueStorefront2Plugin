<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace BitBag\SyliusVueStorefront2Plugin\DataGenerator\Factory;

use BitBag\SyliusWishlistPlugin\Entity\WishlistInterface;
use Sylius\Component\Core\Model\ChannelInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

final class WishlistFactory
{
    private FactoryInterface $wishlistFactory;

    public function __construct(
        FactoryInterface $wishlistFactory,
    ) {
        $this->wishlistFactory = $wishlistFactory;
    }

    public function entityName(): string
    {
        return 'Wishlist';
    }

    public function create(
        string $uuid,
        string $windowsPlatformToken,
        ChannelInterface $channel
    ): WishlistInterface {
        /** @var WishlistInterface $wishlist */
        $wishlist = $this->wishlistFactory->createNew();
        $wishlist->setName('Wishlist ' . $uuid);
        $wishlist->setChannel($channel);
        $wishlist->setToken($windowsPlatformToken);

        return $wishlist;
    }
}
