<?php
return array(
    'projects/([a-z]+)' => 'catalog/category/$1', // actionCategory в CatalogController
    'projects' => 'catalog/index', // actionIndex в CatalogController

    'contacts/ajax' => 'site/ajax', // actionAjax в SiteController
    'contacts' => 'site/contact', // actionContact в SiteController
    '^/*$' => 'site/index', // actionIndex в SiteController
);