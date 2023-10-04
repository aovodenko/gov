<?php
namespace App\Service;

use App\Entity\HeadertagsDefault;
use App\Entity\HeadertagsPages;
use App\Entity\Configuration;
use Symfony\Component\HttpFoundation\RequestStack;
use Doctrine\Persistence\ManagerRegistry;

class Headertags
{
    protected $requestStack;
    protected $entityManager;

    public function __construct(RequestStack $requestStack, ManagerRegistry $doctrine) {
        $this->requestStack = $requestStack;
        $this->entityManager = $doctrine->getManager();
    }

    public function generate(): array
    {
        $request = $this->requestStack->getCurrentRequest();
        $route = $request->get('_route');

        $route = $route == 'categories' ? 'home' : $route;

        $headertagsDefault = $this->entityManager->getRepository(HeadertagsDefault::class)->findOneByCached([
            'languageId' => 1
        ]);

        $headertagsPages = $this->entityManager->getRepository(HeadertagsPages::class)->findOneByCached([
            'route' => $route,
            'languageId' => 1
        ]);

        $headertags = [];

        switch ($route) {
            case 'home':
            case 'categories':
                $headertags['title'] = $headertagsPages->getPagesHeadTitleTag() ? $headertagsPages->getPagesHeadTitleTag() : $headertagsDefault->getDefaultTitle();
                $headertags['desc'] = $headertagsPages->getPagesHeadDescTag() ? $headertagsPages->getPagesHeadDescTag() : $headertagsDefault->getDefaultDescription();
                $headertags['keywords'] = $headertagsPages->getPagesHeadKeywordsTag() ? $headertagsPages->getPagesHeadKeywordsTag() : $headertagsDefault->getDefaultKeywords();

                break;
        }

        $headertags['meta_language'] = $headertagsDefault->getMetaLanguage() ? explode(',', $request->server->get('HTTP_ACCEPT_LANGUAGE'))[0] : 0;
        $headertags['meta_google'] = $headertagsDefault->getMetaGoogle() ? 1 : 0;
        $headertags['meta_noodp'] = $headertagsDefault->getMetaNoodp() ? 1 : 0;
        $headertags['meta_noydir'] = $headertagsDefault->getMetaNoydir() ? 1 : 0;
        $headertags['meta_revisit'] = $headertagsDefault->getMetaRevisit() ? 1 : 0;
        $headertags['meta_robots'] = $headertagsDefault->getMetaRobots() ? 1 : 0;
        $headertags['meta_unspam'] = $headertagsDefault->getMetaUnspam() ? 1 : 0;
        $headertags['meta_replyto'] = $headertagsDefault->getMetaReplyto() ? $this->entityManager->getRepository(Configuration::class)->getConfigParam('STORE_OWNER_EMAIL_ADDRESS') : '';

        return $headertags;
    }
}
