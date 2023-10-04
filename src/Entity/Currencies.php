<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currencies
 */
#[ORM\Table(name: 'currencies')]
#[ORM\Entity(repositoryClass: 'App\Repository\CurrenciesRepository')]
class Currencies
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'currencies_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $currenciesId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'title', type: 'string', length: 32, nullable: false)]
    private $title;

    /**
     * @var string
     */
    #[ORM\Column(name: 'code', type: 'string', length: 3, nullable: false, options: ['fixed' => true])]
    private $code;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'symbol_left', type: 'string', length: 12, nullable: true)]
    private $symbolLeft;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'symbol_right', type: 'string', length: 12, nullable: true)]
    private $symbolRight;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'decimal_point', type: 'string', length: 1, nullable: true, options: ['fixed' => true])]
    private $decimalPoint;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'thousands_point', type: 'string', length: 1, nullable: true, options: ['fixed' => true])]
    private $thousandsPoint;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'decimal_places', type: 'string', length: 1, nullable: true, options: ['fixed' => true])]
    private $decimalPlaces;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'value', type: 'decimal', precision: 14, scale: 4, nullable: true)]
    private $value;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'last_updated', type: 'datetime', nullable: true)]
    private $lastUpdated;

    public function getCurrenciesId(): ?int
    {
        return $this->currenciesId;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getSymbolLeft(): ?string
    {
        return $this->symbolLeft;
    }

    public function setSymbolLeft(?string $symbolLeft): self
    {
        $this->symbolLeft = $symbolLeft;

        return $this;
    }

    public function getSymbolRight(): ?string
    {
        return $this->symbolRight;
    }

    public function setSymbolRight(?string $symbolRight): self
    {
        $this->symbolRight = $symbolRight;

        return $this;
    }

    public function getDecimalPoint(): ?string
    {
        return $this->decimalPoint;
    }

    public function setDecimalPoint(?string $decimalPoint): self
    {
        $this->decimalPoint = $decimalPoint;

        return $this;
    }

    public function getThousandsPoint(): ?string
    {
        return $this->thousandsPoint;
    }

    public function setThousandsPoint(?string $thousandsPoint): self
    {
        $this->thousandsPoint = $thousandsPoint;

        return $this;
    }

    public function getDecimalPlaces(): ?string
    {
        return $this->decimalPlaces;
    }

    public function setDecimalPlaces(?string $decimalPlaces): self
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getLastUpdated(): ?\DateTimeInterface
    {
        return $this->lastUpdated;
    }

    public function setLastUpdated(?\DateTimeInterface $lastUpdated): self
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    public function display_price($products_price, $quantity = 1, $itemscope_markup = false)
    {
      return $this->format($products_price * $quantity, $itemscope_markup);
    }

    public function format($number, $itemscope_markup = false)
    {
      if($this->getSymbolLeft() == 'J'){
        $symbol_left = '&pound;';
      }
      else if($this->getSymbolLeft() == '€'){
        $symbol_left = '&#128;';
      }
      else{
        $symbol_left = $this->getSymbolLeft();
      }

      $format_string = $symbol_left .
        ($itemscope_markup ? '<span itemprop="price">' : '') .
        number_format($this->round($number * $this->getValue(), $this->getDecimalPlaces()), $this->getDecimalPlaces(), $this->getDecimalPoint(), $this->getThousandsPoint()) .
        ($itemscope_markup ? '</span>' : '') . $this->getSymbolRight() .
        ($itemscope_markup ? '<span itemprop="priceCurrency" style="display: none;">' . $this->getCode() . '</span>' : '')
      ;

      return $format_string;
    }

    protected function round($number, $precision)
    {
      if (strpos($number, '.') && (strlen(substr($number, strpos($number, '.') + 1)) > $precision)){
        $number = substr($number, 0, strpos($number, '.') + 1 + $precision + 1);

        if (substr($number, -1) >= 5) {
            if ($precision > 1) {
              $number = substr($number, 0, -1) + ('0.' . str_repeat(0, $precision-1) . '1');
            }
            elseif ($precision == 1){
              $number = substr($number, 0, -1) + 0.1;
            }
            else{
              $number = substr($number, 0, -1) + 1;
            }
        }
        else{
          $number = substr($number, 0, -1);
        }
      }

      return $number;
    }

}
