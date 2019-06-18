<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StockValue
 * @package App
 * @property int $id
 * @property int $company_id
 * @property int $time
 * @property float $value
 */
class StockValue extends Model
{
    protected $fillable = [
        'company_id',
        'time',
        'value',
    ];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return StockValue
     */
    public function setId(int $id): StockValue
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId(): int
    {
        return $this->company_id;
    }

    /**
     * @param int $company_id
     * @return StockValue
     */
    public function setCompanyId(int $company_id): StockValue
    {
        $this->company_id = $company_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @param int $time
     * @return StockValue
     */
    public function setTime(int $time): StockValue
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return StockValue
     */
    public function setValue(float $value): StockValue
    {
        $this->value = $value;
        return $this;
    }
}
