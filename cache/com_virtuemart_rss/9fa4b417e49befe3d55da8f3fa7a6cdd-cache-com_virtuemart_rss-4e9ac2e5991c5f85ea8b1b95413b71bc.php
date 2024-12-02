<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:5:{i:0;O:8:"stdClass":3:{s:4:"link";s:94:"https://virtuemart.net/news/vmbasic-the-new-virtuemart-native-bootstrap-5-template-and-layouts";s:5:"title";s:67:"VmBasic, the new VirtueMart native Bootstrap 5 template and layouts";s:11:"description";s:7672:"<h3>New Template vmBasic</h3>
<p>The new template is written by Spyros Petrakis and is kept simple to enable easy modification. It works fast out of the box and is written fully in Bootstrap 5. Mobile ready and simple to configure. Natively supported OPC.</p>
<p>The new layout system of VirtueMart allows you to use different bootstrap layouts and this now comes into play. The layout files of the vmBasic are integrated in the core as files with the prefix bs5-, meaning these basic layouts can easily be used in any other bootstrap 5 templates. This means VirtueMart has arrived in the Bootstrap 5 world finally. Special Virtuemart css classes are reduced, so it is also easier to learn. This should increase the out of the box useablity of templates for VirtueMart. The Bootstrap 5 layout is set for Joomla 5 automatically. Existing layout overrides are kept.</p>
<p><img class="float-none" style="display: block; margin-left: auto; margin-right: auto;" src="https://virtuemart.net/images/stories/news/vmBasic_featured_2024-08-23.jpg" width="693" height="446" /></p>
<h3>Rough times behind, calm waters ahead, let's sail into the future.</h3>
<p>The last few years have been characterised by constant changes in the software environment of VirtueMart. Yeah, I know, I have written this often already, but it really had a massive impact from j3 to j4 to j4.2 to mysql strict mode to php8.0 to php8.2 to bootstrap 5. The errors for the mysql strict mode and PHP8.2 were unpleasant to find. The prior big advantage to use PHP was the simple type juggling, but that has become much stricter and as a result we had to remove a lot small inconsistences in the code. For example, before it was allowed to initialise a variable with false (boolean) and to set it later to "all" (string). Now it must be initialised as string directly. The mysql strict mode created similar problems. Storing of strings formed as integer like "7" were stored correctly before, but now it must be a correct integer. </p>
<p>This created a lot of work, but the mysql strict mode existed for years and the new strict php types just follow developer languages like Java or C, so there are no hidden surprises. After our changes these modernisations should now be catered for. Joomla 5 will be supported the next 3 years at least. There is no release date yet for PHP 9 and the known changes are mostly covered (PHP8 Warnings will become fatals, so we did our homework already to 98%). The development for Bootstrap 6 has not even started yet (officially) and they say a new version would take at least 5 years. This means these problems cannot appear again in this massive way. This is good news especially for shops who were forced to frequently update their template over the last years.</p>
<p style="text-align: center;"><a class="btn btn-primary" href="//dev.virtuemart.net/attachments/download/1378/com_virtuemart.4.2.18.11050_package_or_extract.zip">DOWNLOAD VirtueMart 4.2.18<br />NOW</a></p>
<h4>Interesting new features for shopowners</h4>
<ul>
<li>New bootstrap 5 frontend template (vmbasic)</li>
<li>Moved vmbasic bs5 views and assets in the core folders</li>
<li>Frontend Template system checks now also in media/templates/site/yourTemplate/com_virtuemart... for ressources, this means common joomla 5 templates should work as expected (by VirtuePlanet.com)</li>
<li>Added storing and loading of user addresss to cart for native OPC </li>
<li>New media type webp by vdweb.cz and alxgan https://forum.virtuemart.net/index.php?topic=151601.0 and tagarrison (fancybox)</li>
<li>Enhanced feature recommend a friend, ask a question, call for price, there is now a new option, which allows to use this function only as customer who already bought</li>
</ul>
<h4>Enhancements (or fixes)</h4>
<ul>
<li>Enhanced the user switcher (started with a bug in some templates)</li>
<li>Userfields in the array can now be accessed by name, this makes it a lot easier to controll a form or output of an address</li>
<li>Added manufacturer and manufacturer images for category views with set manufacturerId cart view,</li>
<li>Added "text/csv" to safe mime types. So we can use the vm file uploader also for csv files</li>
<li>Enhanced autochecker of the cart to work also with text fields (for the native OPC)</li>
<li>Enhancements for multi image uploading and enhanced image recognition by a community member</li>
<li>Changed loading of user data in the backend, loaded before only BT form, it checks now for published, but not cart attributs</li>
<li>Added language switcher and vendor module to public svn</li>
<li>Function deleteOldPendingOrder changed rules, it deletes P and U state now, if an orderId is given in the cart.</li>
<li>It is possible to set an OrderId for the cart</li>
<li>Enhanced PayPal Checkout; Button loader with asnchron fetch</li>
<li>Enhanced PayPal Checkout; Disabled trigger plgVmOnUpdateOrderPayment completly. Problem, doing a partial refund on PayPal sets the R Order status, which triggers this function, which does a complete refund.</li>
<li>PayPal removed old debugs, cleaned debug mode, less logging</li>
<li>HandlePaymentUserCancel sets the order status now on P NOT C anylonger.</li>
<li>Enhanced the invoice download button. Appears now also if the pdf is not rendered (because it is then rendered for the download)</li>
<li>Enhanced info messages if safe path is missing</li>
<li>Fixed display of shipment/payment in order/invoice, if something went wrong (fallback to method name)</li>
<li>Enhancement for xml update files</li>
</ul>
<h4>Fixes</h4>
<ul>
<li>vDispatcher adjusted to Joomla 5 by stAn of RuposTel, this means that the recaptcha works again for joomla 5 and also other j4/j5 plugin</li>
<li>Fix for the styling of invalid checkboxes and tos on checkout page.</li>
<li>Fixing the "customer_notified" record broke the comments in the mail.</li>
<li>Fixes for userfields display</li>
<li>vmURI urlencode replacement for PHP8 created a loop accidently</li>
<li>#__virtuemart_order_histories table, increased order_status_code to char 3</li>
<li>Removed js note in cart "unreachable code"</li>
<li>userfields enhanced function getUserFields, added switch to give query (without ordering by)</li>
<li>userfields $_fld-&gt;type == 'webaddress' returns an URL as &lt;a&gt; html element</li>
<li>spwizard added function_exists('str_contains') for people using php 7</li>
<li>Fixed dragndrop for the product view product sorting (by AH)</li>
<li>Important fix, so that editing an order executes the same filters, actions for userfields like coming from the cart</li>
<li>Important fix for storing of customfields. Due accidently using the same variable name, it could happen, that the wrong customfield was set</li>
<li>during the foreach loop on the looped array.</li>
<li>VmUploader shows for admins a complete path and for users just the file name after successful upload</li>
<li>Smaller fix in mediahandler to prevent folders used as image</li>
<li>Enhanced the vmtable, addloggable directly adds setInteger enhanced product table, added variables to be cast to integer</li>
<li>Removed old arrays in userfields</li>
<li>Invoice_locked should be fixed. Considers the object/array problem now </li>
<li>Fix for category dropdown as tree</li>
<li>fixed product model getNeighborProducts if there is no extra "where", can happen if a shop shows only productdetails </li>
<li>Increased varchars of column layout of the product table</li>
</ul>
<p style="text-align: center;"><a class="btn btn-primary" href="//dev.virtuemart.net/attachments/download/1378/com_virtuemart.4.2.18.11050_package_or_extract.zip">DOWNLOAD VirtueMart 4.2.18<br />NOW</a></p>";}i:1;O:8:"stdClass":3:{s:4:"link";s:60:"https://virtuemart.net/news/11000-committs-virtuemart-4-2-12";s:5:"title";s:33:"11000 committs, VirtueMart 4.2.12";s:11:"description";s:6412:"<p>[Hotfix Update 4.2.12]<br />There was a problem with creation of invoices. The Locking boolean was not correctly set and/or wrongly read. At least we know what we have todo next to prevent coding traps. </p>
<p><br />The focus of this release was to identify and fix bugs. In addition, we added small enhancements for the Joomla 4/5 GUI. Tooltips should work again and opening a VM view in the backend opens the VM menu and minimises the joomla one.<br />We also invested a lot time in the routing process. It may be necessary to remove setting the itemid per layout file.</p>
<p>Please check this link for details  https://dev.virtuemart.net/projects/virtuemart/repository/virtuemart/revisions/10996.</p>
<p style="text-align: center;"><a class="btn btn-primary" href="https://extensions.virtuemart.net/support/virtuemart-supporter-membership-bronze-detail">DOWNLOAD VirtueMart 4.2.8 with the Membership<br />NOW</a></p>
<p>All tables are changed to InnoDB. VirtueMart used before a mixed set. Tables which are most time just read were MyIsam and tables which are often read and write (like orders) used InnoDB. MyIsam has not been developed further for years and InnoDB has become faster for all tasks (don't pin me down to "all" of them). The provided server configurations won't pay attention to MyIsam (reserved RAM, for example), so now it seems the best time to switch to InnoDB for all VM tables.</p>
<p><br />We also worked with PayPal Checkout. The merchant onboarding process is sometimes not finished. We found out, that this is caused by popup blockers of the browsers, even without extra popup blocker plugins.</p>
<p>Housekeeping wise, despite all my personal efforts, the email server was still not running right. Reseting password did not work, so I enlisted the aid of our server admin and it is now fixed. Emails were received again at strict hosters. It turned out, everyting in our domain space was configured without www, except the email server. The fix broke emails a day before Easter and unfortunately the holidays meant that we did not identify the issue until a week later. This is software, the idea "Let's do it right, lets update anything" can result in some setbacks.</p>
<p><br />Thanks to our membership, we could contract Spirous Petrakis of yourgeek.gr and the next release will have a new Bootstrap 5 native VirtueMart template by Petrakis. This is no vaporware, the template will be offered to the core team for beta testing right after the release. Offering it to early would have delayed this important maintenance release.</p>
<p>Another result of the VM membership subscription is the multi image upload written by the team of 911websiterepair.com. It simplifies adding media, if you do not want to manipulate the existing one. But make sure that you store your product first!</p>
<h3>General enhanced features</h3>
<ul>
<li>Multi file image upload by 911websiterepair</li>
<li>Classes for userfields by Gerald DWP</li>
<li>Updated product module with option "any product" (by community input)</li>
<li>Enhanced translation for custom drop down by GJC</li>
<li>changed MyISAM to InnoDB</li>
</ul>
<h3>Fixes for Joomla 4/5 and PHP8.2</h3>
<ul>
<li>Fixed seo link of products, category was missing</li>
<li>Opening a VirtueMart backend view minimises the joomla menu automatically. There is an hidden config to disable it.</li>
<li>Fixed tooltips in j5</li>
<li>Updates for TcPDF for PHP8.2</li>
<li>Added full path for vmvalidator to ensure loading in joomla 5</li>
<li>Added lost empty option for select product detail layout in product edit</li>
<li>Revenue, added VendorInformation for interval products </li>
</ul>
<h3>Fixes</h3>
<ul>
<li>Fixes for router to prevent unecessary "result" in the link and added more views to the whitelist</li>
<li>Fixed router problems in j4, correct use of the preprocess. itemids are set correctly, removed unecessary or wrong Itemids from the layouts</li>
<li>CouponHandler fixed foreach for allowed products, allowed categories</li>
<li>Javascript, replaced all "delegate" against "on"</li>
<li>Fixed that dropdown could not be used to add the same option twice</li>
<li>Fixed removeable and draggable enhanced css</li>
<li>Important fixes in the cart to ensure that the individual cart is correctly linked in the carts array</li>
<li>fixed update of carts</li>
<li>Model category, function getParents uses now a language depended cache</li>
<li>Added itemid to pagination links</li>
<li>Fixed manual installation of "shipping advanced"</li>
<li>Small fixes for mediahandler, removed unecessary loads</li>
<li>Fixed closeBtn to showCloseButton of fancybox</li>
<li>Fixed checkFilterDir if given filterDir is empty</li>
<li>Model users, send registration email only, if mail is active</li>
<li>Fix for customfield Multichild in BE</li>
<li>Fixed multichild variant with radios</li>
<li>Fix for storing shipment address as guest</li>
<li>Better check to allow shopper change, if already switched</li>
<li>Fixed multichild variant with radios</li>
<li>CalculationHelper added order by for loading rules</li>
<li>added missing help icons and other minors for backend views</li>
<li>Structural core fixes Important fix in VmModel function getData, uses reset if an array of ids is given Important fix for VmController</li>
<li>function getStrByAcl, uses now the unfiltered POST data</li>
<li>added vmJsApi::writeJS to correct places.</li>
<li>calculationHelper added order by for loading rules</li>
</ul>
<p>and a lot adjustments for php8.2, removed unused or dangerous code</p>
<h3>For developers</h3>
<ul>
<li>orderdone view has now the orderId</li>
<li>getPluginMethods with new $userId dependence</li>
<li>product Model added importVMPlugins to begin of function sortSearchListQuery</li>
<li>added register of vmrouterHelper for autoloading cart helper</li>
<li>Layout orderdone now set by cart-&gt;layout</li>
<li>enhanced Exception message if sending of email fails</li>
</ul>
<h4>PayPal Checkout</h4>
<ul>
<li>PayPal Checkout enhanced merchant onboarding. Added notice to disable popup blockers</li>
<li>Minor fixes for PayPal  function updateStatusForOneOrder called by PayPal now with triggers</li>
</ul>
<p style="text-align: center;"><a class="btn btn-primary" href="https://extensions.virtuemart.net/support/virtuemart-supporter-membership-bronze-detail">DOWNLOAD VirtueMart 4.2.8 with the Membership<br />NOW</a></p>";}i:2;O:8:"stdClass":3:{s:4:"link";s:51:"https://virtuemart.net/news/virtuemart-for-joomla-5";s:5:"title";s:23:"VirtueMart for Joomla 5";s:11:"description";s:7864:"<p>Joomla 5 is the new long term release of Joomla. Surprisingly it was very easy to adjust VirtueMart 4 for Joomla 5. This was planned as the christmas release, but now it has become a Happy New Year release with some delay.</p>
<h4>Project development through Membership</h4>
<p>Sören, the founder of VirtueMart, helped me to update the entire infrastructure of the VirtueMart project (with Membership fundings). Our infrastructure, email server, svn, redmine, forum and our websites were quite outdated. So it was time to update everything. We now have a new redmine (web-based project management software) for dev.virtuemart.net and the forum and mail server have also been updated. I have been working on the latter for weeks to configure it with DMARC, SPF, DKIM, reverse DNS and so on. Finally, I moved all pages to the web host hetzner and updated all virtuemart.net pages to Joomla 5, with the exception of demo.virtuemart.net. Any of our virtuemart.net pages are running now with the new template of <a href="https://www.virtueplanet.com/joomla-templates/vp-neoteric" target="_blank" rel="noopener">Neoteric</a> of VirtuePlanet, with extra customisations (with Membership fundings) <br />But a new native BS5 template is already in the pipeline. If all goes well, we will soon have a new VirtueMart-native BS5 template that will be used as the new template for the core, on the demo and of course with Joomla 5! So we did a great step to ensure a great lifetime for the project (with Membership fundings).</p>
<h4>Core testing</h4>
<p>The testing team was really very active. PayPal Checkout was tested very thoroughly. The new plugin works now also in the old redirect mode, but with the new API. This means a merchant can provide his users the new way with the enhanced PayPal (Express) button, or the old way, just using the cart checkout button in the same cart. The new unbranded Alternative Payment options available for different countries are also very interesting in special for Europeans.<br /><br />The core got updated for Joomla 5, of course it still needs the compatibility plugin. This was surprisingly easy. So I decided to use joomla 5 for new vm pages. Also updating a joomla 4 vm shop to joomla 5 is very easy (just check the languages!). Abhishek of VirtuePlanet donated code for minified css files and for the new child templates in joomla 5. Some shops run already since weeks on Joomla 5. Good Work Joomla!</p>
<p>GJC tested inheriting of parent properties and found a severe bug, which prevented that properties with _ were inherited, but this was only intended for the properties beginning with _.<br />Next important fix is in the cart, some redirects lead to the orderdone function. But this should be only done by the payment plugin. Only the plugin knows, if the payment was successfull</p>
<p style="text-align: center;"><a class="btn btn-primary" href="https://extensions.virtuemart.net/support/virtuemart-supporter-membership-bronze-detail">DOWNLOAD VirtueMart 4.2.6 with the Membership<br />NOW</a></p>
<h3>Features and Fixes:</h3>
<h4>General core</h4>
<ul>
<li>Important fix for "private" values starting with _</li>
<li>Abhishek integrated children templates and new setPath function by Abhishek (VirtuePlanet), which works with the new child template and with minified files</li>
<li>Very important cart fix, never use the layout orderdone for redirects in the function checkoutData</li>
<li>new Feature "set Real Image Size" in the IMG tag directly. This helps lazy loading and prevents jumping of the images loading the page</li>
<li>Fix for overrides of layouts with BS prefix. All developers should prefer getBaseLayout over getLayout</li>
<li>enhanced message if membership server cannot be reached</li>
<li>Tools GDPR tab; removed deletion of files by mdate or cdate. If someone moves the files, then the dates are updated and so this idea does not work safely</li>
<li>GDPR- removing invoices needs at least 3 in years</li>
<li>Log view, added an option to download or to delete a file</li>
<li>Changed getInvoiceFolder system, so that we can work in future with folders per year. The last problem is to either write a fallback system or tool which copies the data or both</li>
<li>Put more invoice functions to the right place the model, proxy functions for BC are there.</li>
<li>Little fix to prevent strange calls to controllers</li>
<li>user model stores value block in admin</li>
<li>removed old db-&gt;getErrorMsg(), raiseError and so on</li>
<li>Enhanced the functions getPluginCustomData and getPluginProductDataCustom</li>
<li>Removed minors like "Deprecated: Creation of dynamic property is deprecated" or null not allowed</li>
<li>some minors, removed outdated code, added default value, etc</li>
<li>Updated links to docs</li>
</ul>
<p> </p>
<ul>
<li>Enhanced installer script in j5 style for tcPDF by Stefan</li>
<li>Changed the "creator" and such stuff for tcpdf, should now work with given version (not VirtueMart 2 anylonger!)</li>
</ul>
<h4>Compatibility PHP8.x, Joomla 4/5</h4>
<ul>
<li>Multivariant radioboxes Javascript for Joomla 4</li>
<li>shopfunctions.php JPath::clean added check for empty</li>
<li>added joomla trigger to vmview onBeforeDisplay and onAfterDisplay</li>
<li>For Joomla 5, replaced uppercase Select with select</li>
<li>a try catch for getVarsToPushByXML (thx stAn)</li>
<li>JVM_VERSION works now also with version numbers with suffixes (-elts Version)</li>
<li>enhanced xml of modules for single installation (thx Stefan)</li>
<li>tcpdf.php, added if not empty and is array check, Small fixes for the install of TcPDF</li>
</ul>
<h4>Plugins</h4>
<ul>
<li>authorize.net increased size of authorizenet_response_account_number</li>
<li>PayPal Checkout, added PayPal developer mode to PayPal, which enables the sandbox</li>
<li>PayPal Checkout, enhanced form, added autocomplete off</li>
<li>PayPal Checkout, getPayPalAccessToken is only executed if the minimal data is available</li>
<li>PayPal Checkout, fixed return link if no button is used</li>
<li>PayPal Checkout, fixes to prevent js errors if no button is used</li>
<li>PayPal Checkout, checkout without button is more robust</li>
<li>PayPal Checkout, Unuseable products are greyed, but selectable</li>
<li>PayPal Checkout, replaced all cUrl against VmConnector::getHttp</li>
<li>PayPal Checkout, if capture is unsucessful block checkout</li>
<li>PayPal Checkout, admin js adjusted to grey out options on j4/j5</li>
<li>PayPal Checkout, changing login data overwrites it for all payments, sandbox is seperate</li>
<li>PayPal Checkout, message if you are already logged in</li>
</ul>
<h4>Important for developers and templaters</h4>
<ul>
<li>Fix for overrides of layouts with BS prefix. <span style="color: rgb(224, 62, 45);">All developers should prefer function getBaseLayout over getLayout</span></li>
<li>add to cart works now also with given data as POST.</li>
<li>Given ordernumber of the cart is used for the order</li>
<li>$cart-&gt;couponCode to $cart-&gt;cartData['couponCode'], $cart-&gt;couponCode is for internal use of the cart. The reason is that we must check the coupon on any update. So the value in cartData is the entered coupon and the value of the cart is the selected coupon. To clear both values, we have a new function clearCoupon</li>
<li>removed confusing doubled virtuemart_product_id inputs. Check revision 10944 and compare it with your template.</li>
<li>Multivariants with children. Replaced the js to use data-cvsel instead of the class cvselection. Check your override sublayouts/customfield.php</li>
<li>Somehow the automaticSelectedShipment switched into the template and changes the rendering of a shipment plugin. This was also for payment plugin and already removed. Templaters pay attention to the new code, thank you ( I know it was this strange way for years)</li>
</ul>";}i:3;O:8:"stdClass":3:{s:4:"link";s:72:"https://virtuemart.net/news/virtuemart-4-2-including-new-paypal-checkout";s:5:"title";s:44:"VirtueMart 4.2 including new PayPal Checkout";s:11:"description";s:3372:"<p>Yes a new mayor sub version as it would be sub number 24 already. On the other hand, this version works now very well on Joomla 3 and of course Joomla 4.3 and PHP8.2. So most things have settled in 4.0.22 and compared to last autumn we had almost no bugs to fix. So this stability should also be reflected in the version number and therefore 4.2!<br />Some have already noticed, after years of maintaining our root server on our own, our developer server went down. But thanks to our members, we can leave the do-it-yourself attitude and have our infrastructure repaired and maintained by a professional team in the future.<br />So there is no feature and bug fix list this time available. I thank our members for their patience and for the forum moderators for the good job keeping my back free. Of course, I will now focus more on the community again.</p>
<p><img src="https://virtuemart.net/images/partners/PayPal/PayPal_trusted_cp.png" alt="goAheadPayLater" width="558" height="201" style="display: block; margin-left: auto; margin-right: auto;" /></p>
<h3>PayPal Checkout</h3>
<p>VirtueMart and PayPal has always been a strong combination. Almost every VirtueMart store used PayPal. PayPal has been VirtueMart's first Platinum Partner for 10 years now. Their steady commissions have supported the funding of the VM project since years. The plugin was revised several times and got new features like SmartButtons, but still on the old API. Our provided plugin became an oldtimer.</p>
<p>The VirtueMart Team and PayPal are very proud to release the new PayPal Checkout Plugin working with the PayPal REST API V2. <br />You can expect a perfect seamless integration with VirtueMart, all workflows are combined. Just trust the buttons.</p>
<p>The new plugin also introduces Venmo for US merchants. Very interesting for European merchants are the "Country-specific payment methods", which allow local payments. Customers can use their addresses stored at PayPal or provide a new shipping address.</p>
<p>Advanced Credit Card works with 3Dsecure to protect the merchant and the customer. Credit card information is entered in a high-tech secured box and no sensitive data is processed on the shop server.</p>
<p>Read more about the PayPal features here&nbsp;<a href="https://virtuemart.net/partners/our-partners/987-platinum-partner"><img src="https://virtuemart.net/images/partners/PayPal/PayPal_logo.png" alt="PayPal logo" width="293" height="78" /></a></p>
<h4>Simple Configuration</h4>
<p>Simply use the convenient merchant onboarding provided in VirtueMart. Just click on the merchant Onboarding button in the paymentmethod edit view. Use the login in the popup and let PayPal configure the basics of the plugin for you. The connection to the iStraxx UG (haftungsbeschränkt) is, in opposite to some other shop systems, without any granted rights. It is just for the convenience.</p>
<p style="text-align: center;"><a href="https://virtuemart.net/releases/com_virtuemart.4.2.0.10905_package_or_extract.zip" class="btn btn-primary">DOWNLOAD VirtueMart 4.2.0<br /> NOW</a></p>
<footer>
<p><span style="font-size: 8pt;">18 Morning Consult - The 15 Most Trusted Brands Globally. March 2021. Morning Consult surveyed over 330,000 consumers across 10 international markets to provide a global view on the current state of consumer trust across brands</span></p>
</footer>";}i:4;O:8:"stdClass":3:{s:4:"link";s:89:"https://virtuemart.net/news/bugfix-release-4-0-20-compatible-joomla-4-3-and-php8-2-mysql8";s:5:"title";s:63:"Bugfix Release 4.0.20, compatible Joomla 4.3 and PHP8.2, MySQL8";s:11:"description";s:3737:"<p>It's been a busy few weeks since our last release.</p>
<h3>Thanks to our new support members</h3>
<p>Funding by membership is progressing towards the way I hoped it would. If the trend goes on I will be able to spend much more time on VM core development. More important, however, is the possibility of financing infrastructure upgrades or paying developers for a specific task.</p>
<p>From our side, there is still a lot of work to be done.&nbsp;<br />I updated the module displaying the purchased license, whilst still far from perfect, it represents a good initial step.</p>
<h3>Apologies for the delay in answering our support tickets</h3>
<p>There was a siginificant short term increase in support tickets, in the main these were focussed on very similar root problems.<br />Answering all tickets immediately would have cost a lot of time, so I used this time to solve the issues and to present the solution as quickly as possible. This approach was the best way of utilising development time and testing, but has taken longer than expected.</p>
<h3>The dilemma I faced</h3>
<p>Of the problems reported, two were having negative impacts on the operation of our customers platforms and lead to impacts on multiple touchpoints within the VirtueMart component.</p>
<p>Most significant in terms of impact was the registered user experience when trying to login and the report of "cannot use joomla login module". This was due to how Joomla 4 now handles the GET, POST and REQUEST data, which impacts all page calls. This issue lead us to discover that the Joomla 4 implementation of VirtueMart 4 was unexpectedly less than optimal. Joomla 3 handles this area differently and was not impacted. I trust that this problem is now resolved.</p>
<p>Secondly were reports of vendors not being able to use the frontend administration. Obviously very challenging for some of our businesses and resulting in a lot of vendors updating their extensions.Investigating that problem I noticed a big quirk due an old pattern. I just checked it, it is there since we have vmmodel (Mai/2011). This pattern tries to recieve the id for the model in the constructor. Prior the router just used own queries, but new optimisations use the category model to reduce the sql. Remember the router is just finding the GET data, while just calling a model tries to use the GET data, which is not there yet. Removing this lead to a cascade of problems, easy to solve, but needed again a lot of testing and any bug was "serious" directly (cannot register, cannot store user,...)</p>
<p>Both problems lead all the time to "strange" bugs and had to be cleaned up asap.</p>
<h3>Rapid development of Joomla, PHP and VirtueMart</h3>
<p>The software development and support wheel is turning fast at the moment.</p>
<p>Support for PHP 8.2.xx is progressing fast. In the last weeks approx 40 new commits were made in the repository as you can see here: <a href="https://dev.virtuemart.net/projects/virtuemart/repository/revisions">https://dev.virtuemart.net/projects/virtuemart/repository/revisions.</a><br />Significant effort has been expended and I hope you can see that the project is moving forward and is on the right path. We anticipate that we are nearing the point where we will be back to a 6-8 month release cycle.</p>
<p style="text-align: center;"><a href="https://extensions.virtuemart.net/support/virtuemart-supporter-membership-bronze-detail" class="btn btn-primary">DOWNLOAD VirtueMart 4.0.20 with the Membership<br /> NOW</a></p>
<p>The joomla updater for VirtueMart works, but you need at least version 4.0.14. Just download the core one time manually from the <a href="https://extensions.virtuemart.net/my-orders-downloads">Order/Download</a> page.</p>";}}s:6:"output";s:0:"";}