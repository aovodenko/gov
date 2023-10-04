<?php
namespace App\Service;

use App\Repository\ConfigurationRepository;
use App\Service\CountryDetector;
use App\Entity\Configuration;

class ShippingBanner
{
    protected $configurationRepository;
    protected $countryDetector;

    public function __construct(ConfigurationRepository $configurationRepository, CountryDetector $countryDetector)
    {
        $this->configurationRepository = $configurationRepository;
        $this->countryDetector = $countryDetector;
    }

    public function generate(): array
    {
        $module_order_total_shipping_free_shipping = $this->configurationRepository->getConfigParam('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING') ?: '';
        $module_order_total_shipping_free_shipping_over = $this->configurationRepository->getConfigParam('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER') ?: '';

        $eu_countries_codes_array = [
          'AT' => 'Austria',
          'BE' => 'Belgium',
          'CY' => 'Cyprus',
          'EE' => 'Estonia',
          'FI' => 'Finland',
          'FR' => 'France',
          'DE' => 'Germany',
          'GR' => 'Greece',
          'IT' => 'Italy',
          'LU' => 'Luxembourg',
          'NL' => 'Netherlands',
          'PT' => 'Portugal',
          'SK' => 'Slovakia',
          'SI' => 'Slovenia',
          'ES' => 'Spain',
        ];

        $country_code = $this->countryDetector->getCountryCode();

        switch(true){
          case in_array($country_code, ['US']):
            if($module_order_total_shipping_free_shipping == 'true' && $module_order_total_shipping_free_shipping_over == 1){
              $data = [
                'title' => "FREE U.S. SHIPPING - ALL ORDERS",
                'amount' => '',
              ];
            }
            else{
              $data = [
                'title' => "FREE U.S. SHIPPING OVER ",
                'amount' => $module_order_total_shipping_free_shipping_over,
              ];
            }

            break;

          case in_array($country_code, ['AU']):
            $data = [
              'title' => "Shipping to Australia starts at AU$ 10.87",
              'amount' => '',
            ];

            break;

          case in_array($country_code, ['CA']):
            $data = [
              'title' => "Shipping to Canada starts at C$ 7.20",
              'amount' => '',
            ];

            break;

          case in_array($country_code, ['GB']):
            $data = [
              'title' => "Shipping to the UK starts at &pound;6.05",
              'amount' => '',
            ];

            break;

          case in_array($country_code, array_keys($eu_countries_codes_array)):
            $data = [
              'title' => "Shipping to " . $eu_countries_codes_array[$country_code] . " starts at &euro; 7.56",
              'amount' => '',
            ];

            break;

          default:
            $data = [
              'title' => "International shipping starts at $ 7.20",
              'amount' => '',
            ];
        }

        return $data;
    }
}
