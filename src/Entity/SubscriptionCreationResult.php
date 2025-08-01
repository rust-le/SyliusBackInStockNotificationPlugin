<?php

declare(strict_types=1);

namespace Webgriffe\SyliusBackInStockNotificationPlugin\Entity;


final class SubscriptionCreationResult
{
    public function __construct(
        public readonly ?SubscriptionInterface $subscription,
        public readonly array $errors = [],
    ) {
    }

    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }
}
