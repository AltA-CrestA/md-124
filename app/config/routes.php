<?php
return array(
    'projects/1' => 'catalog/ajax', // actionAjax в CatalogController
    'projects/([a-z]+)/([0-9]+)' => 'catalog/projectView/$1/$2', // actionCategory в CatalogController
    'projects/([a-z]+)' => 'catalog/category/$1', // actionCategory в CatalogController
    'projects' => 'catalog/index', // actionIndex в CatalogController

    'ajax' => 'site/ajax', // actionAjax в SiteController
    'reviews' => 'site/review', // actionReview в SiteController
    'contacts/ajax' => 'site/form', // actionForm в SiteController
    'contacts' => 'site/contact', // actionContact в SiteController
    '[?]yclid=([0-9]+)' => 'site/index', // Для Яндекс Direct
    '^/*$' => 'site/index', // actionIndex в SiteController
);