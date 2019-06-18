<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * Class Holding
 * @package App
 * @property int $id
 * @property string $name
 * @property float $money
 * @property int $maxStockType
 * @property int $analysisDataAmount
 * @property string $timePeriod
 * @property int $exchangePeriod
 * @property int $currentStockValueIndex
 * @property Collection $ownedStocks
 */
class Holding extends Model
{
    protected $fillable = [
        'name',
        'money',
        'maxStockType',
        'analysisDataAmount',
        'timePeriod',
        'exchangePeriod',
        'currentStockValueIndex',
    ];

    public function __construct(array $attributes = [])
    {
        $this->name = "Default";
        $this->money = 1000000;
        $this->maxStockType = 3;
        $this->analysisDataAmount = 20;
        $this->timePeriod = '1W';
        $this->exchangePeriod = 5; // If time period is '1W' then 5 means 2 exchanges per day
        $this->currentStockValueIndex = $this->analysisDataAmount; // First stock value after analysis data

        parent::__construct($attributes);
    }

    public function ownedStocks(): HasMany
    {
        return $this->hasMany(OwnedStock::class);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Holding
     */
    public function setId(int $id): Holding
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Holding
     */
    public function setName(string $name): Holding
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getMoney(): float
    {
        return $this->money;
    }

    /**
     * @param float $money
     * @return Holding
     */
    public function setMoney(float $money): Holding
    {
        $this->money = $money;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxStockType(): int
    {
        return $this->maxStockType;
    }

    /**
     * @param int $maxStockType
     * @return Holding
     */
    public function setMaxStockType(int $maxStockType): Holding
    {
        $this->maxStockType = $maxStockType;
        return $this;
    }

    /**
     * @return int
     */
    public function getAnalysisDataAmount(): int
    {
        return $this->analysisDataAmount;
    }

    /**
     * @param int $analysisDataAmount
     * @return Holding
     */
    public function setAnalysisDataAmount(int $analysisDataAmount): Holding
    {
        $this->analysisDataAmount = $analysisDataAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimePeriod(): string
    {
        return $this->timePeriod;
    }

    /**
     * @param string $timePeriod
     * @return Holding
     */
    public function setTimePeriod(string $timePeriod): Holding
    {
        $this->timePeriod = $timePeriod;
        return $this;
    }

    /**
     * @return int
     */
    public function getExchangePeriod(): int
    {
        return $this->exchangePeriod;
    }

    /**
     * @param int $exchangePeriod
     * @return Holding
     */
    public function setExchangePeriod(int $exchangePeriod): Holding
    {
        $this->exchangePeriod = $exchangePeriod;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getOwnedStocks(): Collection
    {
        return $this->ownedStocks;
    }

    /**
     * @return int
     */
    public function getCurrentStockValueIndex(): int
    {
        return $this->currentStockValueIndex;
    }

    /**
     * @param int $currentStockValueIndex
     * @return Holding
     */
    public function setCurrentStockValueIndex(int $currentStockValueIndex): Holding
    {
        $this->currentStockValueIndex = $currentStockValueIndex;
        return $this;
    }
}
