<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Chưa được phê duyệt, vui lòng .',
    'active_url' => 'URL không hợp .',
    'after' => 'Vui lòng chọn sau ngày :date.',
    'after_or_equal' => 'Vui lòng chọn từ ngày :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'Vui lòng nhập đúng định dạng mảng.',
    'before' => 'Vui lòng chọn trước ngày :date.',
    'before_or_equal' => 'Vui lòng chọn trước hoặc đến ngày :date.',
    'between' => [
        'numeric' => 'Giá trị phải thuộc khoảng :min đến :max.',
        'file' => 'Kích thước tệp phải thuộc khoảng :min đến :max kilobytes.',
        'string' => 'Giá trị phải thuộc khoảng :min đến :max ký tự.',
        'array' => 'Giá trị phải thuộc khoảng :min and :max.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => ':attribute không hợp lệ.',
    'date_equals' => 'Vui lòng chon đúng ngày :date.',
    'date_format' => 'Ngày không hợp lệ',
    'different' => 'Hai giá trị phải khác nhau, vui lòng thử lại.',
    'digits' => 'Vui lòng nhập đúng :digits chữ .',
    'digits_between' => 'Phải thuộc khoảng :min đến :max chữ số.',
    'dimensions' => 'Ảnh không hợp .',
    'distinct' => 'ã tồn tại.',
    'email' => 'Địa chỉ email không hợp lệ.',
    'ends_with' => 'The :attribute must end with one of the following: :values',
    'exists' => 'Giá trị không hợp lệ hoặc đã tồn tại.',
    'file' => 'Vui lòng chọn tệp.',
    'filled' => 'Không hợp lệ vui lòng thử lại.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'Vui lòng chọn ảnh.',
    'in' => 'Giá trị đã chọn không hợp .',
    'in_array' => 'Không tồn tại trong :other.',
    'integer' => 'Vui lòng nhập số nguyên.',
    'ip' => 'Địa chỉ Ip không hợp lệ.',
    'ipv4' => 'Ipv4 không hợp lệ.',
    'ipv6' => 'IPv6 không hợp lệ.',
    'json' => 'Đinh dạng JSON không hợp .',
    'lt' => [
        'numeric' => 'Giá trị phải nhỏ hơn :value.',
        'file' => 'Kích thước tệp phải nhỏ  :value hơn kilobytes.',
        'string' => 'Không được phép vượt quá :value ký tự.',
        'array' => 'Giá trị không được nhiều hơn :value vật phẩm.',
    ],
    'lte' => [
        'numeric' => 'Giá trị phải nhỏ hơn hoặc bằng :value.',
        'file' => 'Kích thước tệp không được phép vượt quá :value kilobytes.',
        'string' => 'Không được vượt quá :value ký tự.',
        'array' => 'Giá trị không được nhiều hơn :value vật phẩm.',
    ],
    'max' => [
        'numeric' => 'Giá trị không được phép lớn hơn :max.',
        'file' => 'Kích thước tệp không được phép vượt quá :max kilobytes.',
        'string' => 'Không được vượt quá :max ký tự.',
        'array' => 'Giá trị không được nhiều hơn :max vật phẩm.',
    ],
    'mimes' => 'Vui lòng chọn chon đinh dạng sau cho tệp :values.',
    'mimetypes' => 'Vui lòng chọn chon đinh dạng sau cho tệp :values.',
    'min' => [
        'numeric' => 'Giá không được phép nhỏ hơn :min.',
        'file' => 'Kích thước tệp không được phép nhỏ hơn :min kilobytes.',
        'string' => 'Giá trị tối thiểu phải là :min ký tự.',
        'array' => 'Giá trị tối thiểu :min vật phẩm.',
    ],
    'not_in' => 'Giá trị không hợp lệ.',
    'not_regex' => 'Giá trị không hợp lệ.',
    'numeric' => 'Sai định dạng vui lòng nhập số.',
    'password' => 'Mật Khẩu Không chính xác.',
    'present' => ':attribute không tồn tại.',
    'regex' => 'Giá trị không hợp lệ.',
    'required' => 'Không được để trống vui lòng thử lại.',
    'required_if' => 'Không được để trống vui lòng thử lại.',
    'required_unless' => 'Không được để trống vui lòng thử lại.',
    'required_with' => 'Không được để trống vui lòng thử lại.',
    'required_with_all' => 'Không được để trống vui lòng thử lại.',
    'required_without' => 'Không được để trống vui lòng thử lại.',
    'required_without_all' => 'Không được để trống vui lòng thử lại.',
    'same' => 'Không khớp nhau vui lòng thử lại.',
    'size' => [
        'numeric' => 'Giá trị phải là :size.',
        'file' => 'Giá trị phải là :size kilobytes.',
        'string' => 'Giá trị phải là :size characters.',
        'array' => 'Giá trị phải là :size vật phẩm.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'Vui lòng nhập chuỗi.',
    'timezone' => 'Múi giờ không hợp lệ.',
    'unique' => 'Đã tồn tại vui lòng thử lại.',
    'uploaded' => 'Upload không thành công.',
    'url' => 'Đường dẫn không hợp lệ.',
    'uuid' => 'UUID không hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
