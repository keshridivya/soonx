<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'frontend';
$route['product-thumbnail/(:any)'] = 'frontend/productThumbnail/$1';
$route['wishlist'] = 'frontend/wishlist';
$route['shop/(:any)/(:any)'] = 'frontend/shop/$1/$2';
$route['cart'] = 'frontend/cart';
$route['checkout'] = 'frontend/checkout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*front*/



/*admin*/
$route['admin'] = 'admin/index';
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/process_login'] = 'admin/process_login';

$route['admin/category'] = 'admin/category';
$route['admin/addCategory'] = 'admin/addCategory';
$route['admin/editCategory'] = 'admin/editCategory';
$route['admin/categorydelete'] = 'admin/categorydelete';

$route['admin/attributes'] = 'admin/attributes';
$route['admin/addattributes'] = 'admin/addattributes';
$route['admin/addattributes'] = 'admin/addattributes';
$route['admin/attributesdelete'] = 'admin/attributesdelete';

$route['admin/title'] = 'admin/title';
$route['admin/addtitle'] = 'admin/addtitle';
$route['admin/addtitle'] = 'admin/addtitle';
$route['admin/titledelete'] = 'admin/titledelete';

$route['admin/subcategory'] = 'admin/subcategory';
$route['admin/addsubcategory'] = 'admin/addSubCategory';
$route['admin/editsubcategory/(:any)'] = 'admin/editsubcategory/$1';
$route['admin/subcategorydelete'] = 'admin/subcategorydelete';

$route['admin/product'] = 'admin/product';
$route['admin/addproducts'] = 'admin/addproducts';
$route['admin/editproduct/(:any)'] = 'admin/editproduct/$1';
$route['admin/productdelete'] = 'admin/productdelete';

$route['admin/brand'] = 'admin/brand';
$route['admin/addbrand'] = 'admin/addbrand';
$route['admin/brandelete'] = 'admin/brandelete';
$route['admin/editbrand/(:any)'] = 'admin/editbrand/$1';

$route['admin/offerslider'] = 'admin/offerslider';
$route['admin/addofferslider'] = 'admin/addofferslider';
$route['admin/offersliderdelete'] = 'admin/offersliderdelete';
$route['admin/editofferslider/(:any)'] = 'admin/editofferslider/$1';

/*vendor*/
$route['backend'] = 'backend/index';
