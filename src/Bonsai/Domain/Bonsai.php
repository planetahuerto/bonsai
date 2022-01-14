<?php

namespace App\Bonsai\Domain;

final class Bonsai
{

    private BonsaiType $type;

    public function __construct(BonsaiType $type)
    {
        $this->type = $type;
    }

    public static function elm(): self
    {
        return new self(new ElmType());
    }

    public static function apple(): self
    {
        return new self(new AppleType());
    }

    public static function olive(): self
    {
        return new self(new OliveType());
    }

    public static function ficus(): self
    {
        return new self(new FicusType());
    }

    /**
     * @return BonsaiType
     */
    public function type(): BonsaiType
    {
        return $this->type;
    }

    public function waterPeriodicity($month): string
    {
        return $this->type->water($month);
    }

}
