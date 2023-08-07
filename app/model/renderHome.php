<?php
// data


;

function render($opject, $data_product)
{
}
function renderListProduct($opject, $data_product)
{
    $render_list_products = '';
    foreach ($data_product['product_' . $opject . ''] as $item) {
        extract($item);
        $render_list_products .= '
        <li class="product">
                    <img src="' . $imgUrl . '" alt="" class="w-[100%]">
                    <div class="info-product flex justify-between pt-[10px] items-center gap-3">
                        <div class="info__product-name truncate">
                            ' . $name . '
                        </div>

                        <div class="info__product-feedback flex justify-center items-center gap-1">
                            <div class="star"><i class="fa fa-star"></i></div>
                            <div class="star"><i class="fa fa-star"></i></div>
                            <div class="star"><i class="fa fa-star"></i></div>
                            <div class="star"><i class="fa fa-star"></i></div>
                            <div class="star"><i class="fa fa-star"></i></div>
                        </div>
                    </div>
                    <div class="price text-[#ccc] font-bold text-[25px] uppercase">
                        $' . $price . '
                    </div>

                    <div class="btns flex gap-1">
                        <button class="py-[10px] w-[100%] border-[1px] border-black uppercase text-[12px] hover:bg-black hover:text-white font-medium">Thêm giỏ hàng</button>
                        <button class="py-[10px] w-[100%] border-[1px] border-black uppercase text-[12px] hover:bg-black hover:text-white font-medium">Mua</button>
                    </div>
                </li>
        ';
    }
    echo $render_list_products;
}
