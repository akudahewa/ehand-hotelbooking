{*
* 2010-2020 Webkul.
*
* NOTICE OF LICENSE
*
* All rights is reserved,
* Please go through this link for complete license : https://store.webkul.com/license.html
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to newer
* versions in the future. If you wish to customize this module for your
* needs please refer to https://store.webkul.com/customisation-guidelines/ for more information.
*
*  @author    Webkul IN <support@webkul.com>
*  @copyright 2010-2020 Webkul IN
*  @license   https://store.webkul.com/license.html
*}

<div class="input-group col-lg-5">
{assign var=val value=0}
{foreach $imageName as $hotelDisplay }
{assign var=val value=$val+1}
 <span>{$hotelDisplay.hotel_name}</span>
  <span>{$hotelDisplay.description}</span>
  <img src="{$link->getMediaLink("/hotelcommerce/modules/hotelreservationsystem/views/img/hotel_img/`$hotelDisplay.hotel_image_id|escape:'htmlall':'UTF-8'`.jpg")}" class="interiorImg" alt="{$hotelDisplay.hotel_image_id|escape:'htmlall':'UTF-8'}">
{/foreach}
 <button type="submit" class="btn btn-default button button-medium exclusive" name="search_room_submit" 
   id="{$hotelDisplay.hotel_name|replace:' ':''}">
    <span>{l s='Search Now11' mod='wkroomsearchblock'}</span>
    </button>
</div>
