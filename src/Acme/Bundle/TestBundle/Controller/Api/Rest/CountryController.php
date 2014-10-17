<?php
namespace Acme\Bundle\TestBundle\Controller\Api\Rest;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\Rest\Util\Codes;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Oro\Bundle\AddressBundle\Entity\Country;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;

/**
 * Rest controller for country.
 *
 * @Rest\NamePrefix("acme_api_rest_country_")
 */
class CountryController extends FOSRestController
{
    /**
     * Delete country.
     *
     * @Rest\Delete("/{iso2Code}")
     * @ParamConverter("country", options={"iso2Code": "iso2Code"})
     * @ApiDoc(description="Delete country.", resource=true)
     *
     * @param Country $country
     * @return Response
     */
    public function deleteAction(Country $country)
    {
        return $this->handleView(
            $this->view(null, Codes::HTTP_NO_CONTENT)
        );
    }
}
