<?php
/**
* 2010-2020 Webkul.
*
* NOTICE OF LICENSE
*
* All right is reserved,
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
*/

class WkRoomSearchBlockAutoCompleteSearchModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        $this->context = Context::getContext();
        $result = array();
        $this->display_column_left = false;
        $this->display_column_right = false;
        $search_data = Tools::getValue('to_search_data');
        $city_cat_id = Tools::getValue('hotel_city_cat_id');
        $obj_htl_info = new HotelBranchInformation();
        if (isset($search_data) && $search_data) {
            $return_data = $obj_htl_info->getHotelCategoryTree($search_data);
            if ($return_data) {
                $html = '';
                foreach ($return_data as $value) {
                    $html .= '<li value="'.$value['id_category'].'" tabindex="-1" class="search_result_li">'.
                    $value['name'].'</li>';
                }
                $result['status'] = 'success';
                $result['data'] = $html;
            }
        } elseif (isset($city_cat_id) && $city_cat_id) {
            error_log('---------------------selected item --------------');
            error_log(print_r($city_cat_id,true));
            error_log('---------------------selected item --------------');
            $cat_ids = Category::getAllCategoriesName($city_cat_id);
            error_log('---------------------getAllCategoriesName --------------');
            error_log(print_r($cat_ids,true));
            error_log('---------------------getAllCategoriesName --------------');
            if ($cat_ids) {
                $html = '';
                foreach ($cat_ids as $value) {
                    error_log('XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXXXXx');
                    if ($hotel_info = $obj_htl_info->hotelBranchInfoAndHotelImagesByCategoryId($value['id_category'])) {
                        error_log('---------------------hotelBranchInfoByCategoryId --------------');
                        error_log(print_r($hotel_info,true));
                        error_log('---------------------hotelBranchInfoByCategoryId --------------');
                        $maxOrderDate = HotelOrderRestrictDate::getMaxOrderDate($hotel_info[0]['id']);
                        $maxOrderDate = date('Y-m-d', strtotime($maxOrderDate));
                        $html .= '<li tabindex="-1" class="search_result_li" data-id-hotel="'.$hotel_info[0]['id'].'" data-hotel-cat-id="'.
                        $hotel_info[0]['id_category'].'" data-max_order_date="'.$maxOrderDate.'">'.
                        $hotel_info[0]['hotel_name'].'</li>';
                        // $html1 .= '<li tabindex="-1" class="search_result_li" data-id-hotel="'.$hotel_info[0]['id'].'" data-hotel-cat-id="'.
                        // $hotel_info[0]['id_category'].'" data-max_order_date="'.$maxOrderDate.'">'.
                        // $hotel_info[0]['hotel_name'].' - '.$hotel_info[0]['description'].'</li>';
                    }
                }

                $obj_hotel_branch = new HotelBranchInformation();
                $hotel_info_by_id = $obj_hotel_branch->getHotelImages("1");
                $d='';
                error_log('qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq');
                error_log( print_r($hotel_info_by_id,true));
                error_log('ssssssssssssssssssssssssssssssssssssssssssssssssssss');
                // foreach ($hotel_info as $value) {
                //     error_log(print_r((_PS_MODULE_DIR_.'hotelreservationsystem/views/img/hotel_img/'.$value['hotel_image_id']),true));
                //     $value['hotel_image_id'] = _PS_MODULE_DIR_.'hotelreservationsystem/views/img/hotel_img/'.$value['hotel_image_id'];
                //     error_log(print_r($value['hotel_image_id'],true));
                //   }
                 // $image_dir_path = _PS_MODULE_DIR_.'hotelreservationsystem/views/img/hotel_img/'.($key+1).'/';
                    // foreach ($hotel_info_by_id as $key => $value) {
                    //     $d .= $value['hotel_image_id'];
                    // }
                // $hotel_info_by_id = $obj_hotel_branch->hotelBranchesInfo(false, 2, 1, $hotel_id);
                
                $this->context->smarty->assign(
                    array(
                        'imageName' => $hotel_info
                        )
                );
                $html3 = $this->context->smarty->fetch(
                    _PS_MODULE_DIR_.$this->module->name.
                    '/views/templates/hook/hotelDisplayBlock.tpl'
                );

                $result['status'] = 'success';
                $result['data'] = $html;
                // $result['display']= $html1;
                $result['hotel']= $html3;

              
            } else {
                $result['status'] = 'failed2';
            }
        } else {
            $result['status'] = 'failed3';
        }
        die(Tools::jsonEncode($result));
    }
}
