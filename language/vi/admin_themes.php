<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @Language Tiếng Việt
 * @License CC BY-SA (http://creativecommons.org/licenses/by-sa/4.0/)
 * @Createdate Mar 04, 2010, 03:22:00 PM
 */

if( ! defined( 'NV_ADMIN' ) or ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$lang_translator['author'] = 'VINADES.,JSC (contact@vinades.vn)';
$lang_translator['createdate'] = '04/03/2010, 15:22';
$lang_translator['copyright'] = '@Copyright (C) 2012 VINADES.,JSC. All rights reserved';
$lang_translator['info'] = '';
$lang_translator['langtype'] = 'lang_module';

$lang_module['blocks'] = 'Quản lý block';
$lang_module['change_func_name'] = 'Thay đổi tên gọi của function &ldquo;%1$s&rdquo; thuộc module &ldquo;%2$s&rdquo;';
$lang_module['bl_list_title'] = 'Các block ở &ldquo;%1$s&rdquo; của function &ldquo;%2$s&rdquo;';
$lang_module['add_block_title'] = 'Thêm block vào &ldquo;%1$s&rdquo; của function &ldquo;%2$s&rdquo; thuộc module &ldquo;%3$s&rdquo;';
$lang_module['edit_block_title'] = 'Sửa block &ldquo;%1$s&rdquo; tại &ldquo;%2$s&rdquo; của function &ldquo;%3$s&rdquo; thuộc module &ldquo;%4$s&rdquo;';
$lang_module['block_add'] = 'Thêm block';
$lang_module['block_edit'] = 'Sửa block';
$lang_module['block_title'] = 'Tên block';
$lang_module['block_link'] = 'URL của tên block';
$lang_module['block_file_path'] = 'Lấy nội dung từ file';
$lang_module['block_global_apply'] = 'Áp dụng cho tất cả';
$lang_module['block_type_theme'] = 'Block của giao diện';
$lang_module['block_select_type'] = '-=Hãy chọn dạng=-';
$lang_module['block_tpl'] = 'Template';
$lang_module['block_pos'] = 'Vị trí';
$lang_module['block_groupbl'] = 'Thuộc nhóm';
$lang_module['block_leavegroup'] = 'Tách ra khỏi nhóm và tạo nhóm mới';
$lang_module['block_group_notice'] = 'Lưu ý: <br />Nếu thay đổi một block thuộc 1 nhóm thì sẽ thay đổi toàn bộ các block khác thuộc nhóm đó. <br/>Nếu không muốn thay đổi các block khác cùng nhóm thì hãy tách block ra thành nhóm mới bằng cách đánh dấu vào mục <em>Tách ra khỏi nhóm và tạo nhóm mới</em>.';
$lang_module['block_group_block'] = 'Nhóm';
$lang_module['block_no_more_func'] = 'Nếu check chọn Bỏ ra khỏi nhóm thì chỉ được chọn 1 function';
$lang_module['block_no_func'] = 'Hãy chọn ít nhất là 1 function';
$lang_module['block_limit_func'] = 'Nếu xác nhận bỏ nhóm thì chỉ được chỉ định 1 function cho cho 1 blocks';
$lang_module['block_func'] = 'Khu vực';
$lang_module['block_nums'] = 'Số block thuộc nhóm';
$lang_module['block_count'] = 'block';
$lang_module['block_func_list'] = 'Các function';
$lang_module['blocks_by_funcs'] = 'Quản lý block theo function';
$lang_module['block_yes'] = 'Có';
$lang_module['block_active'] = 'Kích hoạt';
$lang_module['block_group'] = 'Ai có quyền xem';
$lang_module['block_module'] = 'Hiển thị ở module';
$lang_module['block_all'] = 'Tất cả các module';
$lang_module['block_confirm'] = 'Chấp nhận';
$lang_module['block_default'] = 'Mặc định';
$lang_module['block_exp_time'] = 'Ngày hết hạn';
$lang_module['block_sort'] = 'Sắp xếp';
$lang_module['block_change_pos_warning'] = 'Nếu thay đổi vị trí block này sẽ thay đổi toàn bộ vị trí của các block khác thuộc cùng nhóm ';
$lang_module['block_change_pos_warning2'] = 'Bạn có chắc muốn thay đổi vị trí?';
$lang_module['block_error_nogroup'] = 'Hãy chọn ít nhất 1 nhóm';
$lang_module['block_error_noblock'] = 'Hãy chọn ít nhất 1 block';
$lang_module['block_error_nsblock'] = 'Chưa chọn block hoặc tên block không hợp lệ';
$lang_module['block_delete_confirm'] = 'Bạn có chắc muốn xóa tất cả block được chọn. Nếu xóa việc này sẽ không thể phục hồi được?';
$lang_module['block_delete_per_confirm'] = 'Bạn có chắc muốn xóa block này không?';
$lang_module['block_add_success'] = 'Thêm thành công!';
$lang_module['block_update_success'] = 'Cập nhật thành công!';
$lang_module['block_checkall'] = 'Chọn tất cả';
$lang_module['block_uncheckall'] = 'Bỏ chọn tất cả';
$lang_module['block_delete_success'] = 'Xóa thành công';
$lang_module['block_error_nomodule'] = 'Hãy chọn ít nhất 1 module';
$lang_module['error_empty_content'] = 'Block chưa được kết nối với file, khối quảng cáo hoặc chưa có nội dung';
$lang_module['block_type'] = 'Chọn kiểu block';
$lang_module['block_file'] = 'File';
$lang_module['block_html'] = 'HTML';
$lang_module['block_typehtml'] = 'Dạng HTML';
$lang_module['functions'] = 'Chức năng';
$lang_module['edit_block'] = 'Sửa block';
$lang_module['block_function'] = 'Hãy chọn function';
$lang_module['add_block_module'] = 'Áp dụng cho module';
$lang_module['add_block_all_module'] = 'Tất cả các module';
$lang_module['add_block_select_module'] = 'Chọn module';
$lang_module['block_layout'] = 'Chọn layout';
$lang_module['block_select'] = 'Chọn block';
$lang_module['block_check'] = 'Check';
$lang_module['block_select_module'] = 'Chọn module';
$lang_module['block_select_function'] = 'Chọn function';
$lang_module['block_error_fileconfig_title'] = 'Lỗi file cấu hình giao diện';
$lang_module['block_error_fileconfig_content'] = 'File cấu hình của giao diện không đúng hoặc không tồn tại. Hãy kiểm tra lại trong thư mục theme của bạn';
$lang_module['autoinstall'] = 'Cài đặt theme';
$lang_module['autoinstall_theme_install'] = 'Cài đặt theme';
$lang_module['autoinstall_method_none'] = 'Hãy lựa chọn: ';
$lang_module['autoinstall_method_install'] = 'Cài đặt theme lên hệ thống';
$lang_module['autoinstall_method_packet'] = 'Đóng gói theo tên theme';
$lang_module['autoinstall_method_packet_module'] = 'Đóng gói theme theo module';
$lang_module['autoinstall_continue'] = 'Tiếp tục';
$lang_module['back'] = 'Quay lại';
$lang_module['autoinstall_error_nomethod'] = 'Hãy chọn 1 kiểu cài đặt để tiếp tục !';
$lang_module['autoinstall_theme_select_file'] = 'Hãy chọn gói để cài đặt: ';
$lang_module['autoinstall_theme_error_nofile'] = 'Lỗi: Hãy chọn file để tiến hành cài đặt';
$lang_module['autoinstall_theme_error_filetype'] = 'Lỗi: File cài đặt phải là định dạng file zip hoặc gz';
$lang_module['autoinstall_theme_error_createfile'] = 'Lỗi: không thể lưu đệm danh sách file. Hãy kiểm tra lại hoặc chmod thư mục tmp';
$lang_module['autoinstall_theme_uploadedfile'] = 'Hệ thống đã tải lên file: ';
$lang_module['autoinstall_theme_uploadedfilesize'] = 'Dung lượng: ';
$lang_module['autoinstall_theme_uploaded_filenum'] = 'Tổng số file + folder: ';
$lang_module['autoinstall_theme_error_warning_fileexist'] = 'Danh sách hiện có trên hệ thống:';
$lang_module['autoinstall_theme_checkfile_notice'] = 'Để tiếp tục quá trình cài đặt, click vào KIỂM TRA hệ thống sẽ tự động kiểm tra tính tương thích';
$lang_module['autoinstall_theme_checkfile'] = 'KIỂM TRA !';
$lang_module['autoinstall_theme_installdone'] = 'TIẾN HÀNH CÀI ĐẶT...';
$lang_module['autoinstall_theme_error_downloaded'] = 'Lỗi: Không tìm thấy file đã download';
$lang_module['autoinstall_theme_error_invalidfile'] = 'Lỗi: File zip không hợp lệ';
$lang_module['autoinstall_theme_error_invalidfile_back'] = 'Quay lại';
$lang_module['autoinstall_package_processing'] = ' Xin chờ quá trình thực hiện hoàn thành...';
$lang_module['autoinstall_theme_error_uploadfile'] = 'Lỗi: không thể upload file lên hệ thống. Hãy kiểm tra lại hoặc chmod thư mục tmp';
$lang_module['autoinstall_theme_unzip_abort'] = 'Việc cài đặt tự động không thể tiếp tục do host không hỗ trợ.';
$lang_module['autoinstall_theme_permission_folder'] = 'Việc cài đặt tự động không thể tiếp tục hệ thống không tạo được các thư mục';
$lang_module['autoinstall_theme_success_setupblocks'] = 'Quá trình cài đặt thành công. Hệ thống sẽ tự động chuyển bạn sang trang quản lý block của  giao diện.';
$lang_module['autoinstall_theme_success_setuplayout'] = 'Quá trình cài đặt thành công. Hệ thống sẽ tự động chuyển bạn sang trang thiết lập layout cho giao diện.';
$lang_module['autoinstall_theme_error_movefile'] = 'Việc cài đặt tự động không thể tiếp tục do host không hỗ trợ di chuyển các file sau khi giải nén';
$lang_module['autoinstall_theme_cantunzip'] = 'Lỗi không thể giải nén. Hãy kiểm tra lại chmod các thư mục.';
$lang_module['autoinstall_theme_unzip_filelist'] = 'Danh sách file đã giải nén';
$lang_module['autoinstall_theme_unzip_setuppage'] = 'Đến trang quản lý theme.';
$lang_module['autoinstall_package_select'] = 'Chọn theme để đóng gói';
$lang_module['autoinstall_package_noselect'] = 'Hãy chọn 1 theme để đóng gói';
$lang_module['autoinstall_package_module_select'] = 'Chọn module để đóng gói';
$lang_module['autoinstall_package_noselect_module'] = 'Hãy chọn 1 module để đóng gói theme';
$lang_module['autoinstall_method_theme_none'] = 'Hãy chọn theme';
$lang_module['autoinstall_method__module_none'] = 'Hãy chọn module';
$lang_module['autoinstall_package_noselect_module_theme'] = 'Bắt buộc phải chọn theme và tên module để đóng gói';
$lang_module['setup_layout'] = 'Thiết lập layout';
$lang_module['setup_module'] = 'Module';
$lang_module['setup_select_layout'] = 'Chọn layout';
$lang_module['setup_updated_layout'] = 'Thiết lập layout thành công!';
$lang_module['setup_error_layout'] = 'Không thể thực hiện lệnh thiết lập layout';
$lang_module['setup_save_layout'] = 'Lưu tất cả thay đổi';
$lang_module['theme_manager'] = 'Quản lý giao diện';
$lang_module['theme_recent'] = 'Danh sách giao diện hiện có';
$lang_module['theme_created_by'] = 'thiết kế bởi';
$lang_module['theme_created_website'] = 'ghé thăm website của tác giả';
$lang_module['theme_created_folder'] = 'Các file + thư mục nằm trong:';
$lang_module['theme_created_position'] = 'Các vị trí thiết kế trong theme:';
$lang_module['theme_created_activate'] = 'Kích hoạt sử dụng';
$lang_module['theme_created_activate_layout'] = 'Lỗi: Bạn cần thiết lập layout cho giao diện này trước khi kích hoạt';
$lang_module['theme_created_delete'] = 'Xóa khỏi hệ thống';
$lang_module['theme_created_current_use'] = 'Giao diện đang sử dụng';
$lang_module['theme_created_delete_theme'] = 'Bạn có chắc muốn xóa toàn bộ gói theme ';
$lang_module['theme_created_delete_theme_success'] = 'Đã xóa thành công theme ra khỏi hệ thống !';
$lang_module['theme_created_delete_theme_unsuccess'] = 'Có lỗi trong quá trình xóa file !';
$lang_module['theme_created_delete_current_theme'] = 'Bạn không thể xóa theme hiện tại hệ thống đang sử dụng !';
$lang_module['theme_created_delete_module_theme'] = 'Bạn không thể xóa theme vì đang sử dụng cho module: %s, bạn cần cấu hình lại các module đó.';
$lang_module['block_front_delete_error'] = 'Lỗi: không thể xóa block, hãy kiểm tra lại quyền của bạn';
$lang_module['block_front_outgroup_success'] = 'Block đã được bỏ ra khỏi nhóm thành công và nằm trong nhóm ';
$lang_module['block_front_outgroup_cancel'] = 'Hiện tại chỉ có duy nhất 1 block nằm trong nhóm này do đó không cần bỏ ra khỏi nhóm';
$lang_module['block_front_outgroup_error_update'] = 'Có lỗi trong quá trình cập nhật dữ liệu';
$lang_module['xcopyblock'] = 'Sao chép block';
$lang_module['xcopyblock_to'] = ' sang theme ';
$lang_module['xcopyblock_from'] = ' từ theme ';
$lang_module['xcopyblock_position'] = 'Chọn vị trí';
$lang_module['xcopyblock_process'] = 'Sao chép';
$lang_module['xcopyblock_no_position'] = 'Hãy chọn ít nhất 1 vị trí để sao chép';
$lang_module['xcopyblock_notice'] = 'Khi thực hiện, hệ thống sẽ xóa các block đã tồn tại ở theme đích, vui lòng chờ cho các tiến trình thực hiện thành công.';
$lang_module['xcopyblock_success'] = 'Quá trình sao chép thành công !';
$lang_module['block_weight'] = 'Thiết lập lại vị trí các block';
$lang_module['block_weight_confirm'] = 'Bạn có chắc chắn thiết lập lại vị trí các block, khi đó các thiết lập theo các function sẽ bị thiết lập lại';
$lang_module['autoinstall_theme_error_warning_overwrite'] = 'Thông báo: Gói giao diện bạn cài đặt đã tồn tại các file, bạn có chắc chắn thực hiện tiếp quá trình cài đặt để ghi đè các file này';
$lang_module['autoinstall_theme_overwrite'] = 'Thực hiện';

$lang_module['config'] = 'Thiết lập giao diện';
$lang_module['config_not_exit'] = 'Giao diện %s không có chức năng cấu hình';