<?php namespace Lovata\OrdersShopaholic\Classes\Store\Order;

use Lovata\Toolbox\Classes\Store\AbstractStoreWithTwoParam;

use Lovata\OrdersShopaholic\Models\Order;

/**
 * Class SortingListStore
 * @package Lovata\OrdersShopaholic\Classes\Store\Order
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
class PaymentMethodListStore extends AbstractStoreWithTwoParam
{
    protected static $instance;

    /**
     * Get ID list from database
     * @return array
     */
    protected function getIDListFromDB() : array
    {
        if (empty($this->sAdditionParam)) {
            $arElementIDList = (array) Order::getByPaymentMethod($this->sValue)->lists('id');
        } else {
            $arElementIDList = (array) Order::getByUser($this->sAdditionParam)->getByPaymentMethod($this->sValue)->lists('id');
        }

        return $arElementIDList;
    }
}
