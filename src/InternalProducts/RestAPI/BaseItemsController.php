<?php

declare(strict_types=1);

namespace OWC\OpenPub\InternalProducts\RestAPI;

use OWC\OpenPub\Base\RestAPI\Controllers\ItemController as BaseItemController;
use OWC\OpenPub\InternalProducts\Foundation\Plugin;
use OWC\OpenPub\InternalProducts\Interfaces\ItemController;
use WP_REST_Request;

/*
* Facade that controls the retrieval of the internal OpenPub items from the base plugin.
*/
class BaseItemsController implements ItemController
{
    public function __construct(Plugin $plugin)
    {
        $this->baseController = new BaseItemController($plugin);
    }

    public function getItems(WP_REST_Request $request): array
    {
        return $this->baseController->getItems($request);
    }

    public function getItem(WP_REST_Request $request)
    {
        return $this->baseController->getItem($request);
    }

    public function getItemBySlug(WP_REST_Request $request): array
    {
        return $this->baseController->getItemBySlug($request);
    }

    public function getActiveItems(WP_REST_Request $request)
    {
        return $this->baseController->getActiveItems($request);
    }
}
