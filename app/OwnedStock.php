<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OwnedStock
 * @package App
 * @property int $id
 * @property int $holding_id
 * @property int $company_id
 * @property int $quantity
 * @property float $value
 * @property Holding $holding
 * @property Company $company
 */
class OwnedStock extends Model
{
    protected $fillable = [
        'holding_id',
        'company_id',
        'quantity',
        'value'
    ];

    public function holding(): BelongsTo
    {
        return $this->belongsTo(Holding::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
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
     * @return OwnedStock
     */
    public function setId(int $id): OwnedStock
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getHoldingId(): int
    {
        return $this->holding_id;
    }

    /**
     * @param int $holding_id
     * @return OwnedStock
     */
    public function setHoldingId(int $holding_id): OwnedStock
    {
        $this->holding_id = $holding_id;
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
     * @return OwnedStock
     */
    public function setCompanyId(int $company_id): OwnedStock
    {
        $this->company_id = $company_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return OwnedStock
     */
    public function setQuantity(int $quantity): OwnedStock
    {
        $this->quantity = $quantity;
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
     * @return OwnedStock
     */
    public function setValue(float $value): OwnedStock
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return Holding
     */
    public function getHolding(): Holding
    {
        return $this->holding;
    }

    /**
     * @param Holding $holding
     * @return OwnedStock
     */
    public function setHolding(Holding $holding): OwnedStock
    {
        $this->holding = $holding;
        return $this;
    }

    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }

    /**
     * @param Company $company
     * @return OwnedStock
     */
    public function setCompany(Company $company): OwnedStock
    {
        $this->company = $company;
        return $this;
    }
}
