<?php
declare(strict_types=1);

namespace App\Bonsai\Domain\Date;

use Jaybizzle\Seasons;

class Season
{
    private string $value;

    private const WINTER = 'winter';
    private const SPRING = 'spring';
    private const SUMMER = 'summer';
    private const AUTUMN = 'autumn';

    /**
     * Seasons.
     *
     * @var array
     */
    private $seasons = [
        'Winter',
        'Spring',
        'Summer',
        'Autumn',
    ];

    /**
     * Month/Season map.
     *
     * @var array
     */
    public $monthRange = [
        0 => [12, 1, 2],
        1 => [3, 4, 5],
        2 => [6, 7, 8],
        3 => [9, 10, 11],
    ];


    /**
     * Parse date, return season.
     *
     * @param  string
     * @return string
     */
    public static function get($date = null)
    {
        return $this->seasons[(int) (($this->getMonth($date) % 12) / 3)];
    }

    public static function createFromDate(\DateTimeInterface $dateTime): static
    {
        $season = new static();

        $seasons = new Seasons();
        $calculatedSeason = $seasons->get($dateTime);
        $season->value = $calculatedSeason;

        return $season;
    }

    public static function spring(): self
    {
        $obj = new static();
        $obj->value = self::SPRING;
        return $obj;
    }

    public static function autumn(): self
    {
        $obj = new static();
        $obj->value = self::AUTUMN;
        return $obj;
    }

    public function equals(Season $other): bool
    {
        return $this->value === $other->value;
    }
}


