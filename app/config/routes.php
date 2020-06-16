<?php
return array(
    'projects/1' => 'catalog/ajax', // actionAjax в CatalogController
    'projects/([a-z]+)' => 'catalog/category/$1', // actionCategory в CatalogController
    'projects' => 'catalog/index', // actionIndex в CatalogController

    'ajax' => 'site/ajax', // actionAjax в SiteController
    'contacts/ajax' => 'site/form', // actionForm в SiteController
    'contacts' => 'site/contact', // actionContact в SiteController
    '^/*$' => 'site/index', // actionIndex в SiteController
);