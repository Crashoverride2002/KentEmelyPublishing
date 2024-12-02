#
#<?php die("Forbidden."); ?>

2024-10-15 08:13:12 ERROR vmError: Tried to load controller &quot;featured&quot; on base path &quot;/var/www/html/KentEmelyPublishing/components/com_virtuemart&quot;. No File available VirtuemartControllerFeatured&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/components/com_virtuemart/virtuemart.php(126): vmError()
#1 /var/www/html/KentEmelyPublishing/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once(&#039;...&#039;)
#2 /var/www/html/KentEmelyPublishing/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#3 /var/www/html/KentEmelyPublishing/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher-&gt;dispatch()
#4 /var/www/html/KentEmelyPublishing/libraries/src/Application/SiteApplication.php(218): Joomla\CMS\Component\ComponentHelper::renderComponent()
&lt;/pre&gt;
2024-10-15 08:15:25 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;http://192.168.1.156:82/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/shopfunctions.php(1111): ShopFunctions::checkSafePathBase()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcrypt.php(322): ShopFunctions::getSafePathFor()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcrypt.php(236): vmCrypt::getEncryptSafepath()
&lt;/pre&gt;
2024-10-15 08:15:25 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/ratings.php(638): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2024-10-15 08:15:25 ERROR vmError: Cannot encrypt, cannot find create key file without path&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcrypt.php(281): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcrypt.php(219): vmCrypt::_createKeyFile()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcrypt.php(31): vmCrypt::_getKey()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/ratings.php(678): vmCrypt::encrypt()
#4 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/ratings.php(642): VirtueMartModelRatings-&gt;show()
&lt;/pre&gt;
2024-10-15 08:16:09 ERROR vmError: Warning, the Safe Path is not configured yet. Use this link to the &lt;a href=&#039;http://192.168.1.156:82/administrator/index.php?option=com_virtuemart&amp;view=updatesmigration&amp;show_spwizard=1&#039; &gt;setup wizard&lt;/a&gt;&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/shopfunctions.php(1277): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/views/orders/view.html.php(331): ShopFunctions::checkSafePathBase()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(126): VirtuemartViewOrders-&gt;display()
#3 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VmController-&gt;display()
&lt;/pre&gt;
2024-10-15 08:44:32 ERROR vmError: Empty slug product with id 1, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(1276): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/KentEmelyPublishing/components/com_virtuemart/helpers/cart.php(2385): VirtueMartModelProduct-&gt;getProduct()
#3 /var/www/html/KentEmelyPublishing/components/com_virtuemart/helpers/cart.php(2414): VirtueMartCart::getProduct()
&lt;/pre&gt;
2024-10-15 08:44:32 ERROR vmError: The product is no longer available; cart getProduct is empty&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/components/com_virtuemart/helpers/cart.php(2387): vmError()
#1 /var/www/html/KentEmelyPublishing/components/com_virtuemart/helpers/cart.php(2414): VirtueMartCart::getProduct()
#2 /var/www/html/KentEmelyPublishing/components/com_virtuemart/controllers/cart.php(94): VirtueMartCart-&gt;prepareCartData()
#3 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VirtueMartControllerCart-&gt;display()
&lt;/pre&gt;
2024-10-15 08:44:32 ERROR vmError: The product is no longer available; prepareCartData virtuemart_product_id is empty&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/components/com_virtuemart/helpers/cart.php(2417): vmError()
#1 /var/www/html/KentEmelyPublishing/components/com_virtuemart/controllers/cart.php(94): VirtueMartCart-&gt;prepareCartData()
#2 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VirtueMartControllerCart-&gt;display()
#3 /var/www/html/KentEmelyPublishing/components/com_virtuemart/virtuemart.php(133): Joomla\CMS\MVC\Controller\BaseController-&gt;execute()
&lt;/pre&gt;
2024-10-24 12:13:02 ERROR vmError: vmTable store insertObject #__virtuemart_category_categories Duplicate entry &#039;3&#039; for key &#039;books_virtuemart_category_categories.category_child_id&#039; INSERT INTO `books_virtuemart_category_categories`
(`category_parent_id`,`category_child_id`,`ordering`) VALUES 
(&#039;2&#039;,&#039;3&#039;,&#039;0&#039;)&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(1349): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(2034): VmTable-&gt;store()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(1969): VmTable-&gt;bindChecknStoreNoLang()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/category.php(801): VmTable-&gt;bindChecknStore()
#4 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(178): VirtueMartModelCategory-&gt;store()
#5 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/controllers/category.php(43): VmController-&gt;save()
#6 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VirtuemartControllerCategory-&gt;save()
&lt;/pre&gt;
2024-10-24 12:13:16 ERROR vmError: vmTable store insertObject #__virtuemart_category_categories Duplicate entry &#039;4&#039; for key &#039;books_virtuemart_category_categories.category_child_id&#039; INSERT INTO `books_virtuemart_category_categories`
(`category_parent_id`,`category_child_id`,`ordering`) VALUES 
(&#039;2&#039;,&#039;4&#039;,&#039;0&#039;)&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(1349): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(2034): VmTable-&gt;store()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(1969): VmTable-&gt;bindChecknStoreNoLang()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/category.php(801): VmTable-&gt;bindChecknStore()
#4 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(178): VirtueMartModelCategory-&gt;store()
#5 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/controllers/category.php(43): VmController-&gt;save()
#6 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VirtuemartControllerCategory-&gt;save()
&lt;/pre&gt;
2024-10-24 12:31:24 ERROR vmError: Attention product is parent, please delete the children first&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(3185): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(217): VirtueMartModelProduct-&gt;remove()
#2 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VmController-&gt;remove()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/virtuemart.php(77): Joomla\CMS\MVC\Controller\BaseController-&gt;execute()
&lt;/pre&gt;
2024-10-24 12:31:24 ERROR vmError: Product could not be deleted.&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(227): vmError()
#1 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VmController-&gt;remove()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/virtuemart.php(77): Joomla\CMS\MVC\Controller\BaseController-&gt;execute()
#3 /var/www/html/KentEmelyPublishing/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:33:50 ERROR vmError: Attention product is parent, please delete the children first&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(3185): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(217): VirtueMartModelProduct-&gt;remove()
#2 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VmController-&gt;remove()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/virtuemart.php(77): Joomla\CMS\MVC\Controller\BaseController-&gt;execute()
&lt;/pre&gt;
2024-10-24 12:33:50 ERROR vmError: Product could not be deleted.&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(227): vmError()
#1 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VmController-&gt;remove()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/virtuemart.php(77): Joomla\CMS\MVC\Controller\BaseController-&gt;execute()
#3 /var/www/html/KentEmelyPublishing/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:34:07 ERROR vmError: Attention product is parent, please delete the children first&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(3185): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(217): VirtueMartModelProduct-&gt;remove()
#2 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VmController-&gt;remove()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/virtuemart.php(77): Joomla\CMS\MVC\Controller\BaseController-&gt;execute()
&lt;/pre&gt;
2024-10-24 12:34:07 ERROR vmError: Product could not be deleted.&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(227): vmError()
#1 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VmController-&gt;remove()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/virtuemart.php(77): Joomla\CMS\MVC\Controller\BaseController-&gt;execute()
#3 /var/www/html/KentEmelyPublishing/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:34:15 ERROR vmError: Attention product is parent, please delete the children first&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(3185): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(217): VirtueMartModelProduct-&gt;remove()
#2 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VmController-&gt;remove()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/virtuemart.php(77): Joomla\CMS\MVC\Controller\BaseController-&gt;execute()
&lt;/pre&gt;
2024-10-24 12:34:15 ERROR vmError: Product could not be deleted.&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(227): vmError()
#1 /var/www/html/KentEmelyPublishing/libraries/src/MVC/Controller/BaseController.php(730): VmController-&gt;remove()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/virtuemart.php(77): Joomla\CMS\MVC\Controller\BaseController-&gt;execute()
#3 /var/www/html/KentEmelyPublishing/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:35:19 ERROR vmError: Empty slug product with id 4, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/customfields.php(559): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/KentEmelyPublishing/administrator/templates/vmadmin/html/com_virtuemart/product/product_edit_custom.php(43): VirtueMartModelCustomfields-&gt;displayProductCustomfieldBE()
#3 /var/www/html/KentEmelyPublishing/libraries/src/MVC/View/HtmlView.php(416): include(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:35:19 ERROR vmError: Empty slug product with id 7, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/customfields.php(559): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/KentEmelyPublishing/administrator/templates/vmadmin/html/com_virtuemart/product/product_edit_custom.php(43): VirtueMartModelCustomfields-&gt;displayProductCustomfieldBE()
#3 /var/www/html/KentEmelyPublishing/libraries/src/MVC/View/HtmlView.php(416): include(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:35:19 ERROR vmError: Empty slug product with id 8, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/customfields.php(559): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/KentEmelyPublishing/administrator/templates/vmadmin/html/com_virtuemart/product/product_edit_custom.php(43): VirtueMartModelCustomfields-&gt;displayProductCustomfieldBE()
#3 /var/www/html/KentEmelyPublishing/libraries/src/MVC/View/HtmlView.php(416): include(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:35:52 ERROR vmError: Empty slug product with id 4, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/customfields.php(559): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/KentEmelyPublishing/administrator/templates/vmadmin/html/com_virtuemart/product/product_edit_custom.php(43): VirtueMartModelCustomfields-&gt;displayProductCustomfieldBE()
#3 /var/www/html/KentEmelyPublishing/libraries/src/MVC/View/HtmlView.php(416): include(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:35:52 ERROR vmError: Empty slug product with id 7, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/customfields.php(559): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/KentEmelyPublishing/administrator/templates/vmadmin/html/com_virtuemart/product/product_edit_custom.php(43): VirtueMartModelCustomfields-&gt;displayProductCustomfieldBE()
#3 /var/www/html/KentEmelyPublishing/libraries/src/MVC/View/HtmlView.php(416): include(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:35:52 ERROR vmError: Empty slug product with id 8, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/customfields.php(559): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/KentEmelyPublishing/administrator/templates/vmadmin/html/com_virtuemart/product/product_edit_custom.php(43): VirtueMartModelCustomfields-&gt;displayProductCustomfieldBE()
#3 /var/www/html/KentEmelyPublishing/libraries/src/MVC/View/HtmlView.php(416): include(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:36:13 ERROR vmError: Empty slug product with id 4, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/customfields.php(559): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/KentEmelyPublishing/administrator/templates/vmadmin/html/com_virtuemart/product/product_edit_custom.php(43): VirtueMartModelCustomfields-&gt;displayProductCustomfieldBE()
#3 /var/www/html/KentEmelyPublishing/libraries/src/MVC/View/HtmlView.php(416): include(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:36:13 ERROR vmError: Empty slug product with id 7, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/customfields.php(559): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/KentEmelyPublishing/administrator/templates/vmadmin/html/com_virtuemart/product/product_edit_custom.php(43): VirtueMartModelCustomfields-&gt;displayProductCustomfieldBE()
#3 /var/www/html/KentEmelyPublishing/libraries/src/MVC/View/HtmlView.php(416): include(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:36:13 ERROR vmError: Empty slug product with id 8, entries exists for language? en-GB&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(1759): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/customfields.php(559): VirtueMartModelProduct-&gt;getProductSingle()
#2 /var/www/html/KentEmelyPublishing/administrator/templates/vmadmin/html/com_virtuemart/product/product_edit_custom.php(43): VirtueMartModelCustomfields-&gt;displayProductCustomfieldBE()
#3 /var/www/html/KentEmelyPublishing/libraries/src/MVC/View/HtmlView.php(416): include(&#039;...&#039;)
&lt;/pre&gt;
2024-10-24 12:59:01 ERROR vmError: vmTable store updateObject Column &#039;virtuemart_shoppergroup_id&#039; cannot be null UPDATE `books_virtuemart_product_prices` SET `virtuemart_product_id`=&#039;9&#039;,`virtuemart_shoppergroup_id`=NULL,`product_price`=&#039;195&#039;,`override`=NULL,`product_override_price`=NULL,`product_tax_id`=NULL,`product_discount_id`=NULL,`product_currency`=NULL,`product_price_publish_up`=NULL,`product_price_publish_down`=NULL,`price_quantity_start`=NULL,`price_quantity_end`=NULL,`modified_on`=&#039;2024-10-24 12:59:01&#039;,`modified_by`=&#039;107&#039; WHERE `virtuemart_product_price_id` = &#039;5&#039;&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(1337): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(2034): VmTable-&gt;store()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(2918): VmTable-&gt;bindChecknStoreNoLang()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(2809): VirtueMartModelProduct-&gt;updateXrefAndChildTables()
#4 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(2852): VirtueMartModelProduct-&gt;store()
#5 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(178): VirtueMartModelProduct-&gt;store()
#6 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/controllers/product.php(72): VmController-&gt;save()
&lt;/pre&gt;
2024-10-24 12:59:01 ERROR vmError: vmTable store updateObject Column &#039;virtuemart_shoppergroup_id&#039; cannot be null UPDATE `books_virtuemart_product_prices` SET `virtuemart_product_id`=&#039;10&#039;,`virtuemart_shoppergroup_id`=NULL,`product_price`=&#039;195&#039;,`override`=NULL,`product_override_price`=NULL,`product_tax_id`=NULL,`product_discount_id`=NULL,`product_currency`=NULL,`product_price_publish_up`=NULL,`product_price_publish_down`=NULL,`price_quantity_start`=NULL,`price_quantity_end`=NULL,`modified_on`=&#039;2024-10-24 12:59:01&#039;,`modified_by`=&#039;107&#039; WHERE `virtuemart_product_price_id` = &#039;6&#039;&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(1337): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(2034): VmTable-&gt;store()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(2918): VmTable-&gt;bindChecknStoreNoLang()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(2809): VirtueMartModelProduct-&gt;updateXrefAndChildTables()
#4 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(2852): VirtueMartModelProduct-&gt;store()
#5 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(178): VirtueMartModelProduct-&gt;store()
#6 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/controllers/product.php(72): VmController-&gt;save()
&lt;/pre&gt;
2024-10-24 12:59:01 ERROR vmError: vmTable store updateObject Column &#039;virtuemart_shoppergroup_id&#039; cannot be null UPDATE `books_virtuemart_product_prices` SET `virtuemart_product_id`=&#039;11&#039;,`virtuemart_shoppergroup_id`=NULL,`product_price`=&#039;195&#039;,`override`=NULL,`product_override_price`=NULL,`product_tax_id`=NULL,`product_discount_id`=NULL,`product_currency`=NULL,`product_price_publish_up`=NULL,`product_price_publish_down`=NULL,`price_quantity_start`=NULL,`price_quantity_end`=NULL,`modified_on`=&#039;2024-10-24 12:59:01&#039;,`modified_by`=&#039;107&#039; WHERE `virtuemart_product_price_id` = &#039;7&#039;&lt;pre&gt;#0 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(1337): vmError()
#1 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmtable.php(2034): VmTable-&gt;store()
#2 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(2918): VmTable-&gt;bindChecknStoreNoLang()
#3 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(2809): VirtueMartModelProduct-&gt;updateXrefAndChildTables()
#4 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/models/product.php(2852): VirtueMartModelProduct-&gt;store()
#5 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/helpers/vmcontroller.php(178): VirtueMartModelProduct-&gt;store()
#6 /var/www/html/KentEmelyPublishing/administrator/components/com_virtuemart/controllers/product.php(72): VmController-&gt;save()
&lt;/pre&gt;