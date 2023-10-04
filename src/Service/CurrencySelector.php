<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\CountryDetector;

class CurrencySelector {

    protected $requestStack;
    protected $entityManager;
    protected $countryDetector;

    public function __construct(RequestStack $requestStack, ManagerRegistry $doctrine, CountryDetector $countryDetector) {
        $this->requestStack = $requestStack;
        $this->entityManager = $doctrine->getManager();
        $this->countryDetector = $countryDetector;
    }

    public function generate(): array {
        $session = $this->requestStack->getSession();

        $currency_selector = [
            'title' => '',
            'title_1' => '',
            'title_2' => '',
            'currentURL4USD' => '',
            'currentURL4Others' => '',
            'current_currency' => 'USD',
            'current_sign' => '$',
            'currency_img' => 'us.png',
            'currency_full_name' => 'US Dollar',
            'current_country_flag' => true,
        ];

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

        switch (true) {
            case in_array($country_code, ['US']):
                $currency_selector = array_merge($currency_selector, [
                    'title' => 'International shipping starts at $ 7.20',
                    'title_1' => 'FREE SHIPPING',
                    'title_2' => 'On All Orders *',
                    'current_currency' => 'USD',
                    'current_sign' => '$',
                    'currency_img' => 'us.png',
                    'currency_full_name' => 'US Dollar',
                    'current_country_flag' => false,
                ]);

                break;

            case in_array($country_code, ['AU']):
                $currency_selector = array_merge($currency_selector, [
                    'title' => '',
                    'title_1' => 'Shipping to Australia',
                    'title_2' => 'Starts at AU$ 10.87',
                    'current_currency' => 'AUD',
                    'current_sign' => 'AU$',
                    'currency_img' => 'au.png',
                    'currency_full_name' => 'Australian dollar',
                ]);

                break;

            case in_array($country_code, ['CA']):
                $currency_selector = array_merge($currency_selector, [
                    'title' => '',
                    'title_1' => 'Shipping to Canada',
                    'title_2' => 'Starts at C$ 7.20',
                    'current_currency' => 'CAD',
                    'current_sign' => 'C$',
                    'currency_img' => 'ca.png',
                    'currency_full_name' => 'Canadian dollar',
                ]);

                break;

            case in_array($country_code, ['GB']):
                $currency_selector = array_merge($currency_selector, [
                    'title' => '',
                    'title_1' => 'Shipping to the UK',
                    'title_2' => 'Starts at &pound;6.05',
                    'current_currency' => 'GBP',
                    'current_sign' => '&pound;',
                    'currency_img' => 'gb.png',
                    'currency_full_name' => 'Pound sterling',
                ]);

                break;

            case in_array($country_code, ['JP']):
                $currency_selector = array_merge($currency_selector, [
                    'title' => '',
                    'title_1' => 'SHIPPPING TO JAPAN',
                    'title_2' => 'STARTS AT &yen;1,100',
                    'current_currency' => 'JPY',
                    'current_sign' => '&yen;',
                    'currency_img' => 'jp.png',
                    'currency_full_name' => 'Japanese Yen',
                ]);

                break;

            case in_array($country_code, array_keys($eu_countries_codes_array)):
                $currency_selector = array_merge($currency_selector, [
                    'title' => '',
                    'title_1' => 'Shipping to ' . $eu_countries_codes_array[$country_code],
                    'title_2' => 'Starts at &euro; 7.56',
                    'current_currency' => 'EUR',
                    'current_sign' => '&euro;',
                    'currency_img' => 'eu.png',
                    'currency_full_name' => 'Euro',
                ]);

                break;

            default:
                $currency_selector = array_merge($currency_selector, [
                    'title' => '',
                    'title_1' => 'International shipping',
                    'title_2' => 'Starts at $ 7.20',
                    'current_currency' => 'USD',
                    'current_sign' => '$',
                    'currency_img' => 'us.png',
                    'currency_full_name' => 'US Dollar',
                    'current_country_flag' => false,
                ]);

                break;
        }

        if (!$session->get('currency_selected')) {
            $query = $this->entityManager->createQuery('
            SELECT
              c
            FROM
              App\Entity\Currencies c
            WHERE
              c.code = :code
            ')
            ->setParameter('code', $currency_selector['current_currency'])
            ;

            $query->enableResultCache();

            $currencies = $query->getResult();

            if ($currencies) {
                $session->set('currency', $currencies[0]->getCode());
            } else {
                $session->set('currency', $session->get('currency'));
            }
        }

        if ($currency_selector['current_country_flag']) {
            $currentURL4USD = http_build_query(array_merge($_GET, ['currency' => 'USD']));

            $currentURL4Others = http_build_query(array_merge($_GET, ['currency' => $currency_selector['current_currency']]));

            $currency_selector = array_merge($currency_selector, [
                'currentURL4USD' => $currentURL4USD,
                'currentURL4Others' => $currentURL4Others,
            ]);
        }

        return $currency_selector;
    }

}
