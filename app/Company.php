<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * Class Company
 * @package App
 * @property int $id
 * @property string $name
 * @property string $code
 * @property Collection $stockValues
 */
class Company extends Model
{
    protected $fillable = [
        'name',
        'code',
    ];

    public function stockValues(): HasMany
    {
        return $this->hasMany(StockValue::class);
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
     * @return Company
     */
    public function setId(int $id): Company
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
     * @return Company
     */
    public function setName(string $name): Company
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Company
     */
    public function setCode(string $code): Company
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getStockValues(): Collection
    {
        return $this->stockValues;
    }

    /**
     * @param Collection $stockValues
     * @return Company
     */
    public function setStockValues(Collection $stockValues): Company
    {
        $this->stockValues = $stockValues;
        return $this;
    }
}
