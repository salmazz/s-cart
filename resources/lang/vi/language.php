<?php
// resources/lang/vi/shop.php

return [
    'all_product'       => 'Tất cả sản phẩm',
    'cart'              => [
        'over'  => 'Sản phẩm :item vượt quá số lượng cho phép.',
        'exist' => 'Sản phẩm đã tồn tại trong :instance',
    ],

    'order'             => [
        'success' => 'Đơn hàng thành công',
    ],

    'coupon'            => [
        'invalid'   => 'Mã giảm giá không hợp lệ!',
        'over'      => 'Mã giảm giá vượt quá số lần sử dụng!',
        'used'      => 'Bạn đã sử dụng mã này rồi!',
        'undefined' => 'Lỗi không xác định!',
        'not_allow' => 'Bạn không thể sử Point ở đây!',
        'value'     => 'Mã giảm giá có giá trị :value cho đơn hàng này!',
    ],
    'my_profile'        => 'Trang quản lý cá nhân',
    'notfound'          => 'Không tìm thấy dữ liệu',
    'empty_product'     => 'Không có sản phẩm nào!',
    'empty_entry'       => 'Không có bài viết nào!',
    'not_found'         => 'Dữ liệu không tồn tại!',
    'no_data'           => 'Không có dữ liệu!',
    'cart_title'        => 'Giỏ hàng',
    'wishlist'          => 'Sản phẩm yêu thích',
    'add_to_wishlist'   => 'Yêu thích',
    'add_to_cart'       => 'Thêm vào giỏ hàng',
    'compare'           => 'So sánh sản phẩm',
    'add_to_compare'    => 'So sánh',
    'for_got_password'  => 'Quên mật khẩu',
    'login'             => 'Đăng nhập',
    'search'            => 'Tìm kiếm',
    'account'           => 'Tài khoản',
    'logout'            => 'Đăng xuất',
    'home'              => 'Trang chủ',
    'blog'              => 'Blog',
    'contact'           => 'Liên hệ',
    'about'             => 'Giới thiệu',
    'shop'              => 'Cửa hàng',
    'category'          => 'Danh mục',
    'brands'            => 'Nhãn hiệu',
    'maintenance'       => 'Xin lỗi, website đang bảo trì',
    'features_items'    => 'Sản phẩm nổi bật',
    'recommended_items' => 'Sản phẩm đề xuất',
    'thank_contact'     => 'Cảm ơn bạn. Chúng tôi sẽ liên hệ sớm nhất có thể!',
    'date_available'    => 'Ngày bán',
    'default_available' => 'Mặc đính, cho phép mua từ ngày đăng bán.',
    'contact_form'      => [
        'title'   => 'Form liên hệ',
        'info'    => 'Thông tin liên hệ',
        'name'    => 'Tên của bạn',
        'email'   => 'Email',
        'phone'   => 'Số điện thoại',
        'subject' => 'Yêu cầu',
        'content' => 'Nội dung chi tiết',
        'message' => 'Tin nhắn của bạn',
        'submit'  => 'Gửi đi',
    ],
    'search_form'       => [
        'keyword' => 'Từ khóa tìm kiếm',
    ],

    'admin'             => [
        'paypal_client_id'             => 'Client ID',
        'paypal_secret'                => 'Secret',
        'paypal_mode'                  => 'Paypal mode',
        'paypal_log'                   => 'Bật log',
        'paypal_path_log'              => 'Đường dẫn file log (trong storage)',
        'paypal_status'                => 'Kích hoạt module Paypal',
        'paypal_currency'              => 'Đơn vị tiền tệ',
        'paypal_order_status_success'  => 'Status order khi thành công',
        'paypal_order_status_faild'    => 'Status order khi thất bại',
        'not_empty'                    => 'Không được để trống!',
        'search_order'                 => 'Số order, email, phone hoặc tên',
        'only_numeric'                 => 'Vui lòng nhập số!',
        'order_year'                   => 'Đơn hàng trong năm',
        'order_month'                  => 'Đơn hàng trong tháng',
        'dashboard'                    => 'Trang tổng quan',
        'total_product'                => 'Thống kê sản phẩm',
        'total_order'                  => 'Thống kê đơn hàng',
        'total_customer'               => 'Thống kê khách hàng',
        'new_customer'                 => 'Khách hàng mới',
        'hot_product'                  => 'Sản phẩm Hot',
        'new_product'                  => 'Sản phẩm mới nhất',
        'list_product'                 => 'Danh sách sản phẩm',
        'relation_product'             => 'Sản phẩm liên quan',
        'enable_https'                 => 'Sử dụng https',
        'enable_log_admin'             => 'Bật log Admin',
        'enable_watermark'             => 'Chèn logo khi upload ảnh',
        'use_coupon'                   => 'Sử dụng coupon',
        'use_shipping'                 => 'Sử dụng shipping',
        'show_date_available'          => 'Hiển thị ngày cho phép mua',
        'product_buy_out_of_stock'     => 'Cho phép mua vượt stock, kể cả đã hết hàng',
        'product_display_out_of_stock' => 'Hiển thị sản phẩm đã hết hàng',
        'product_preorder'             => 'Cho phép đặt hàng trước',
        'smtp_mode'                    => 'Sử dụng SMTP',
        'smtp_port'                    => 'Cổng SMTP',
        'smtp_security'                => 'Bảo mật SMTP',
        'smtp_password'                => 'Mật khẩu SMTP',
        'smtp_user'                    => 'User SMTP',
        'smtp_host'                    => 'Server SMTP',
        'shop_allow_guest'             => 'Mua hàng không cần đăng nhập',
        'field_config'                 => 'Tên chức năng',
        'use_mode'                     => 'Chế độ',
        'config_control'               => 'Bảng điều khiển cấu hình',
        'site_status'                  => 'Bật/Tắt website',
        'config_paypal'                => 'Cấu hình Paypal',
        'config_email'                 => 'Cấu hình Email SMTP',
        'config_display'               => 'Cấu hình số item hiển thị trên trang',
        'info_global'                  => 'Thông tin chung website',
        'cms_news'                     => 'Quản lý tin tức',
        'cms_page'                     => 'Quản lý các trang',
        'cms_name'                     => 'Tên bài viết',
        'cms_content'                  => 'Bài viết',
        'cms_category'                 => 'Danh mục CMS',
        'product_manager'              => 'Quản lý sản phẩm',
        'product_name'                 => 'Tên sản phẩm',
        'product_type'                 => 'Loại sản phẩm',
        'product_info'                 => 'Thông tin sản phẩm',
        'order_manager'                => 'Quản lý đơn hàng',
        'price_cost'                   => 'Giá cost',
        'price'                        => 'Giá bán',
        'stock'                        => 'Số lượng',
        'sku'                          => 'Mã hàng',
        'shop_category'                => 'Danh mục sản phẩm',
        'special_price_manager'        => 'Quản lý giá đặc biệt',
        'special_price'                => 'Giá khuyến mãi',
        'date_start'                   => 'Ngày bắt đầu',
        'date_end'                     => 'Ngày kết thúc',
        'product'                      => 'Sản phẩm',
        'parent_category'              => 'Danh mục cha',
        'name'                         => 'Tên',
        'page_name'                    => 'Tên trang',
        'image'                        => 'Hình ảnh',
        'sub_image'                    => 'Hình ảnh phụ',
        'sort'                         => 'Thứ tự sắp xếp',
        'status'                       => 'Trạng thái',
        'content'                      => 'Nội dung',
        'keyword'                      => 'Từ khóa',
        'description'                  => 'Mô tả',
        'title'                        => 'Tiêu đề',
        'comment'                      => 'Ghi chú',
        'discount_percent'             => 'Phần trăm giảm',
        'origin_price'                 => 'Giá gốc',
        'last_modify'                  => 'Lần cuối chỉnh sửa',
        'created_at'                   => 'Tạo lúc',
        'language_manager'             => 'Quản lý ngôn ngữ',
        'banner_manager'               => 'Quản lý banner',
        'shipping_manager'             => 'Quản lý vận chuyển',
        'promotion_manager'            => 'Quản lý Promotion',
        'analytic'                     => 'Thống kê',
        'report'                       => 'Báo cáo',
        'access_denied'                => 'Hành động từ chối!',
        'access_denied_msg'            => 'Bạn không thể khóa ngôn ngữ này vì nó đang là mặc định. Phải thay đổi ngôn ngữ mặc định trước.',
    ],
    'order'             => [
        'title'                 => 'Đơn hàng',
        'customer_name'         => 'Tên khách hàng',
        'customer'              => 'Khách hàng',
        'sub_total'             => 'Tiền hàng',
        'shipping_price'        => 'Tiền vận chuyển',
        'free_shipping'         => 'Miễn phí vận chuyện',
        'discount'              => 'Giảm giá',
        'total'                 => 'Tổng tiền',
        'order_total'           => 'Tổng đơn hàng',
        'received'              => 'Đã nhận',
        'balance'               => 'Còn lại',
        'status'                => 'Trạng thái',
        'shipping_address'      => 'Địa chỉ nhận hàng',
        'shipping_address1'     => 'Địa chỉ nhà',
        'shipping_address2'     => 'Quận/Huyện, Thành Phố',
        'shipping_name'         => 'Tên người nhận',
        'shipping_phone'        => 'Số điện thoại',
        'note'                  => 'Ghi chú',
        'order_detail'          => 'Chi tiết đơn hàng',
        'order_status'          => 'Trạng thái đơn hàng',
        'order_payment_status'  => 'Trạng thái thanh toán',
        'order_shipping_status' => 'Trạng thái vận chuyển',
        'order_note'            => 'Ghi chú đơn hàng',
        'order_history'         => 'Lịch sử đơn hàng',
        'history_staff'         => 'Nhân viên',
        'history_content'       => 'Nội dung',
        'history_time'          => 'Thời gian',
        'select_product'        => 'Vui lòng chọn sản phẩm',
        'select_customer'       => 'Vui lòng chọn khách hàng',
        'add_more'              => 'Thêm nhiều hơn',
        'search_keyword'        => 'Tìm từ khóa',
    ],

    'product'           => [
        'sku'          => 'Mã hàng',
        'sku_validate' => 'SKU chỉ được dùng các chữ số, chữ cái không dấu và dấu -',
        'name'         => 'Tên sản phẩm',
        'price'        => 'Giá bán',
        'quantity'     => 'Số lượng',
        'total_price'  => 'Tổng số tiền',
        'attribute'    => 'Thuộc tính',
        'add_product'  => 'Thêm sản phẩm',
        'edit_product' => 'Chỉnh sửa sản phẩm',

    ],
    'promotion'         => [
        'code'        => 'Mã coupon',
        'value'       => 'Giá trị',
        'type'        => 'Loại',
        'description' => 'Mô tả',
        'maximum'     => 'Số lần dùng tối đa',
        'used'        => 'Đã dùng',
        'expire'      => 'Hết hạn',
        'history'     => 'Lịch sử',
    ],
];
