<?php

namespace APP\controllers\Admin;
use APP\Models\Stores;


Class Store{

    public static function add($store)
    {
        $store_name     = filter_var($store['store_name'],FILTER_SANITIZE_STRING);
        $store_url      = filter_var($store['store_url'],FILTER_SANITIZE_STRING);
        $store_status   = filter_var($store['store_status'],FILTER_SANITIZE_STRING);
        $store_ck       = filter_var($store['store_ck'],FILTER_SANITIZE_STRING);
        $store_cs       = filter_var($store['store_cs'],FILTER_SANITIZE_STRING);
       
        // Store::create()
        print_r($store);

    }
}