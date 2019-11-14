# Checkout Message

### This module is bascially provide the functionality for display the "Payment/Order/Shipping" related note/message on checkout page only for customer prospective.

In this module we have used one static block *checkout-msg* identifier named, which having message content.

This static block is automatically created while module is installed into our magento project.

## Installation Steps:

Step : 1 `php bin/magento module:enable Jmcharadva_CheckoutMsg`

Step : 2 `php bin/magento setup:upgrade`

Step : 3 `php bin/magento setup:di:compile`

Step : 4 `php bin/magento setup:static-content:deploy`

Step : 5 `php bin/magento cache:flush`


After above steps goto your checkout page. You can see one message at top of Checkout steps.

#### Note : 
  1) If you want to change message *Content > Blocks* You can see  "checkout-msg" Block.

  2) If you want to modify or change in css of this message, we have created it's own css. Perform your changes on below location.
  *app/code/Jmcharadva/CheckoutMsg/view/frontend/web/css/checkoutmsg.css*

