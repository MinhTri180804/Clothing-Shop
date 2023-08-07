<?php
class Controller
{
    public function model($model)
    {
        if (file_exists(_DIR_ROOT . '/app/model/' . $model . '.php')) {
            require_once _DIR_ROOT . '/app/model/' . $model . '.php';
            if (class_exists($model)) {
                $result = new $model();
                return $result;
            }
        }
        return false;
    }
    public function render($view, $data = [])
    {   
        extract($data);
        if (file_exists(_DIR_ROOT . '/app/view/' . $view . '.php')) {
            require_once _DIR_ROOT . '/app/view/' . $view . '.php';
        } else {
            echo 'View not found';
        }
    }

    public function getData()
    {
        $data_product = [
            'product_men' => [
                [
                    'id' => 1,
                    'name' => 'Áo Sơmi Nam Trắng',
                    'price' => 80,
                    'descriptions' => "Áo sơmi nam trắng kiểu dáng mới, phong cách thanh lịch và lịch sự.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-01.jpg',
                ],
                [
                    'id' => 2,
                    'name' => 'Áo Sơmi Nam Xanh',
                    'price' => 65,
                    'descriptions' => "Áo sơmi nam xanh cổ điển với các sọc màu trắng, tạo điểm nhấn độc đáo.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-02.jpg',
                ],
                [
                    'id' => 3,
                    'name' => 'Áo Sơmi Nam Đỏ',
                    'price' => 72,
                    'descriptions' => "Áo sơmi nam đỏ nổi bật với kiểu dáng phóng khoáng, phù hợp với nhiều dịp.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-03.jpg',
                ],
                [
                    'id' => 4,
                    'name' => 'Áo Sơmi Nam Xám',
                    'price' => 90,
                    'descriptions' => "Áo sơmi nam xám đậm với chất liệu cao cấp, giữ ấm mùa thu đông.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-01.jpg',
                ],
                [
                    'id' => 5,
                    'name' => 'Áo Sơmi Nam Vàng',
                    'price' => 78,
                    'descriptions' => "Áo sơmi nam màu vàng tươi sáng, phối hợp dễ dàng với nhiều trang phục.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-02.jpg',
                ],
                [
                    'id' => 6,
                    'name' => 'Áo Sơmi Nam Đen',
                    'price' => 95,
                    'descriptions' => "Áo sơmi nam đen lịch lãm và trang nhã, phù hợp với cả dịp đặc biệt.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-03.jpg',
                ],
                [
                    'id' => 7,
                    'name' => 'Áo Sơmi Nam Xanh Lá',
                    'price' => 70,
                    'descriptions' => "Áo sơmi nam màu xanh lá cây tươi mới, dễ dàng kết hợp với quần jean.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-01.jpg',
                ],
                [
                    'id' => 8,
                    'name' => 'Áo Sơmi Nam Cam',
                    'price' => 85,
                    'descriptions' => "Áo sơmi nam màu cam nổi bật, thể hiện phong cách cá tính.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-02.jpg',
                ],
                [
                    'id' => 9,
                    'name' => 'Áo Sơmi Nam Hồng',
                    'price' => 68,
                    'descriptions' => "Áo sơmi nam màu hồng nhẹ nhàng, phù hợp với những buổi gặp gỡ bạn bè.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-03.jpg',
                ],
                [
                    'id' => 10,
                    'name' => 'Áo Sơmi Nam Nâu',
                    'price' => 75,
                    'descriptions' => "Áo sơmi nam màu nâu trầm ấm, phù hợp cho mùa đông.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-01.jpg',
                ],
                [
                    'id' => 11,
                    'name' => 'Áo Sơmi Nam Tím',
                    'price' => 82,
                    'descriptions' => "Áo sơmi nam màu tím quyến rũ, tạo sự nổi bật cho người mặc.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-02.jpg',
                ],
                [
                    'id' => 12,
                    'name' => 'Áo Sơmi Nam Kem',
                    'price' => 73,
                    'descriptions' => "Áo sơmi nam màu kem nhẹ nhàng, thích hợp cho những dịp thư giãn.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'men-03.jpg',
                ],
            ],

            'product_women' => [
                [
                    'id' => 1,
                    'name' => 'Đầm nữ Trắng',
                    'price' => 120,
                    'description' => "Đầm nữ trắng thanh lịch và nữ tính, phù hợp cho các dịp dạo phố và tiệc tùng.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-01.jpg',
                ],
                [
                    'id' => 2,
                    'name' => 'Áo khoác nữ Màu Đỏ',
                    'price' => 65,
                    'description' => "Áo khoác nữ màu đỏ sành điệu và cá tính, giữ ấm mùa đông.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-02.jpg',
                ],
                [
                    'id' => 3,
                    'name' => 'Quần jeans nữ Xanh',
                    'price' => 72,
                    'description' => "Quần jeans nữ màu xanh cổ điển và dễ phối đồ, phong cách thời trang hàng ngày.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-03.jpg',
                ],
                [
                    'id' => 4,
                    'name' => 'Váy nữ Xám',
                    'price' => 90,
                    'description' => "Váy nữ màu xám đẹp và duyên dáng, thích hợp cho nhiều dịp khác nhau.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-01.jpg',
                ],
                [
                    'id' => 5,
                    'name' => 'Áo thun nữ Vàng',
                    'price' => 78,
                    'description' => "Áo thun nữ màu vàng tươi sáng và thoải mái, phối hợp dễ dàng với các trang phục khác.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-02.jpg',
                ],
                [
                    'id' => 6,
                    'name' => 'Đồ bơi nữ Đen',
                    'price' => 95,
                    'description' => "Đồ bơi nữ màu đen trẻ trung và năng động, phù hợp cho nhiều hoạt động thể thao.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-03.jpg',
                ],
                [
                    'id' => 7,
                    'name' => 'Áo sơmi nữ Xanh Lá',
                    'price' => 70,
                    'description' => "Áo sơmi nữ màu xanh lá cây tươi mới, dễ dàng kết hợp với quần jean.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-01.jpg',
                ],
                [
                    'id' => 8,
                    'name' => 'Vest nữ Cam',
                    'price' => 85,
                    'description' => "Vest nữ màu cam nổi bật và trang nhã, thích hợp cho các dịp đặc biệt.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-02.jpg',
                ],
                [
                    'id' => 9,
                    'name' => 'Áo len nữ Hồng',
                    'price' => 68,
                    'description' => "Áo len nữ màu hồng nhẹ nhàng và dễ thương, phù hợp cho những ngày se lạnh.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-03.jpg',
                ],
                [
                    'id' => 10,
                    'name' => 'Đầm nữ Nâu',
                    'price' => 75,
                    'description' => "Đầm nữ màu nâu tinh tế và lịch sự, thích hợp cho các buổi tiệc và sự kiện.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-01.jpg',
                ],
                [
                    'id' => 11,
                    'name' => 'Áo sơmi nữ Tím',
                    'price' => 82,
                    'description' => "Áo sơmi nữ màu tím quyến rũ và đằm thắm, thể hiện phong cách riêng của bạn.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-02.jpg',
                ],
                [
                    'id' => 12,
                    'name' => 'Áo khoác nữ Kem',
                    'price' => 73,
                    'description' => "Áo khoác nữ màu kem nhẹ nhàng và ấm áp, dễ dàng kết hợp với nhiều trang phục khác nhau.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'women-03.jpg',
                ],
            ],


            'product_children' => [
                [
                    'id' => 1,
                    'name' => 'Áo thun trẻ em Xanh',
                    'price' => 35,
                    'description' => "Áo thun trẻ em màu xanh pastel dễ thương và thoải mái, phù hợp cho các hoạt động ngoài trời.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-01.jpg',
                ],
                [
                    'id' => 2,
                    'name' => 'Quần jean trẻ em Xám',
                    'price' => 45,
                    'description' => "Quần jean trẻ em màu xám trẻ trung và cá tính, dễ dàng kết hợp với áo thun.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-02.jpg',
                ],
                [
                    'id' => 3,
                    'name' => 'Đầm trẻ em Hồng',
                    'price' => 55,
                    'description' => "Đầm trẻ em màu hồng nhẹ nhàng và duyên dáng, thích hợp cho các buổi tiệc và dịp đặc biệt.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-03.jpg',
                ],
                [
                    'id' => 4,
                    'name' => 'Áo khoác trẻ em Vàng',
                    'price' => 60,
                    'description' => "Áo khoác trẻ em màu vàng tươi sáng và ấm áp, giữ ấm mùa đông cho bé.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-01.jpg',
                ],
                [
                    'id' => 5,
                    'name' => 'Váy trẻ em Xanh Lá',
                    'price' => 50,
                    'description' => "Váy trẻ em màu xanh lá cây với hoạ tiết dễ thương, phù hợp cho bé gái.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-02.jpg',
                ],
                [
                    'id' => 6,
                    'name' => 'Áo sơmi trẻ em Trắng',
                    'price' => 40,
                    'description' => "Áo sơmi trẻ em màu trắng cổ điển và lịch sự, phù hợp cho cả bé trai và bé gái.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-03.jpg',
                ],
                [
                    'id' => 7,
                    'name' => 'Áo len trẻ em Đỏ',
                    'price' => 48,
                    'description' => "Áo len trẻ em màu đỏ ấm áp và đáng yêu, giữ ấm cho bé trong mùa đông.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-01.jpg',
                ],
                [
                    'id' => 8,
                    'name' => 'Quần thể thao trẻ em Cam',
                    'price' => 42,
                    'description' => "Quần thể thao trẻ em màu cam năng động và phong cách, dễ dàng vận động.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-02.jpg',
                ],
                [
                    'id' => 9,
                    'name' => 'Áo hoodie trẻ em Xám',
                    'price' => 55,
                    'description' => "Áo hoodie trẻ em màu xám với thiết kế trẻ trung và thời thượng, phù hợp cho bé trai và bé gái.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-03.jpg',
                ],
                [
                    'id' => 10,
                    'name' => 'Áo thun trẻ em Nâu',
                    'price' => 38,
                    'description' => "Áo thun trẻ em màu nâu trẻ trung và dễ thương, phù hợp cho bé gái.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-01.jpg',
                ],
                [
                    'id' => 11,
                    'name' => 'Quần short trẻ em Tím',
                    'price' => 35,
                    'description' => "Quần short trẻ em màu tím thời trang và thoải mái, phù hợp cho mùa hè.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-02.jpg',
                ],
                [
                    'id' => 12,
                    'name' => 'Vest trẻ em Kem',
                    'price' => 60,
                    'description' => "Vest trẻ em màu kem trang nhã và lịch sự, phù hợp cho bé trai trong các dịp đặc biệt.",
                    'color' => ['White, Red, Green, Blue'],
                    'imgUrl' => '' . _IMG_BASE_PATH . 'kid-03.jpg',
                ],
            ],
        ];

        return $data_product;
    }
}
