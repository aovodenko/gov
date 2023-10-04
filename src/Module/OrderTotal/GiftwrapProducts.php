<?php
  namespace App\Module\OrderTotal;

  use Symfony\Component\HttpFoundation\RequestStack;
  use Doctrine\Persistence\ManagerRegistry;
  use App\Entity\CustomersBasket;
  use App\Entity\Currencies;
  use App\Entity\Configuration;
  use App\Entity\GiftwrapOptions;

  class GiftwrapProducts
  {
    protected $requestStack;
    protected $entityManager;
    protected $customersBasket;

    public $code = 'ot_giftwrap_products';
    public $title = 'Gift Wrap';
    public $description = 'Order Gift Wrap Cost';
    public $giftwrap_selected = false;
    public $output = [];
    public $enabled;
    public $sort_order;

    public function __construct(RequestStack $requestStack, ManagerRegistry $doctrine)
    {
      $this->requestStack = $requestStack;
      $this->entityManager = $doctrine->getManager();

      $repository = $this->entityManager->getRepository(Configuration::class);
      $this->enabled = $repository->getConfigParam('MODULE_ORDER_TOTAL_GIFTWRAP_PRODUCTS_STATUS');
      $this->sort_order = $repository->getConfigParam('MODULE_ORDER_TOTAL_GIFTWRAP_PRODUCTS_SORT_ORDER');
    }

    public function process()
    {
       $currency = $this->entityManager->getRepository(Currencies::class)->getCurrentCurrency();
       $customersBasketRepository = $this->entityManager->getRepository(CustomersBasket::class);
       $giftwrap_options_collection = $this->entityManager->getRepository(GiftwrapOptions::class)->getGiftwrapOptionsCollection() ?: [];

       $products = $customersBasketRepository->getProducts();

       $total = 0;

       foreach($products as $product) {
         if ($product->getCustomersBasketGiftwrapSelected()){
           $total += $product->getCustomersBasketQuantity() * $giftwrap_options_collection[$product->getGiftwrapId()];
           $this->giftwrap_selected = true;
         }
       }

       $this->output[] = [
         'title' => $this->title . ':',
         'text'  => $currency->format($total),
         'value' => $total,
      ];
    }

  }
