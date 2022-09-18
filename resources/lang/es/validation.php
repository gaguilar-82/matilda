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

    'accepted'        => 'El valor de :attribute debe ser aceptado.',
    'active_url'      => 'El valor de :attribute no es una URL válida.',
    'after'           => 'El valor de :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'  => 'El valor de :attribute debe ser una fecha posterior o igual :date.',
    'alpha'           => 'El valor de :attribute solo debe contener letras.',
    'alpha_dash'      => 'El valor de :attribute solo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num'       => 'El valor de :attribute solo debe contener letras y números.',
    'array'           => 'El valor de :attribute debe ser un conjunto.',
    'before'          => 'El valor de :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El valor de :attribute debe ser una fecha anterior or igual a :date.',
    'between'         => [
        'numeric' => 'El valor de :attribute debe estar entre :min y :max.',
        'file'    => 'El valor de :attribute debe estar :min y :max kilobytes.',
        'string'  => 'El valor de :attribute debe tener entre :min y :max caracteres.',
        'array'   => 'El valor de :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean'        => 'El valor de :attribute debe ser verdadero o falso.',
    'confirmed'      => 'El valor de confirmación de :attribute no coincide.',
    'date'           => 'El valor de :attribute no es una fecha válida.',
    'date_equals'    => 'El valor de :attribute debe ser una fecha igual a :date.',
    'date_format'    => 'El valor de :attribute no coincide con el formato :format.',
    'different'      => 'El valor de :attribute y :other deben ser distintos.',
    'digits'         => 'El valor de :attribute debe tener :digits dígitos.',
    'digits_between' => 'El valor de :attribute debe tener entre :min y :max dígitos.',
    'dimensions'     => 'El valor de :attribute tiene dimensiones de imagen inválidas.',
    'distinct'       => 'El valor de :attribute tiene elementos duplicados.',
    'email'          => 'El valor de :attribute no contiene un email válido.',
    'restore_email'  => 'El correo o la compañía no son válidas',
    'ends_with'      => 'El contenido de :attribute debe terminar con alguno de los siguientes valores: :values.',
    'exists'         => 'valor elegido para :attribute no es válido.',
    'file'           => 'El contenido de :attribute debe ser un archivo.',
    'filled'         => 'El valor de :attribute no puede ser vacío.',
    'gt'             => [
        'numeric' => 'El valor de :attribute debe ser mayor a :value.',
        'file'    => 'El tamaño de :attribute debe ser mayor a :value kilobytes.',
        'string'  => 'El valor de :attribute debe ser mayor a :value caracteres.',
        'array'   => 'El valor de :attribute debe tener más de :value elementos.',
    ],
    'gte' => [
        'numeric' => 'El valor de :attribute debe ser mayor o igual a :value.',
        'file'    => 'El tamaño de :attribute debe ser mayor o igual a :value kilobytes.',
        'string'  => 'El valor de :attribute debe ser mayor o igual a :value caracteres.',
        'array'   => 'El valor de :attribute debe tener al menos :value elementos.',
    ],
    'image'    => 'El contenido de :attribute debe ser una imagen.',
    'in'       => 'El valor seleccionado de :attribute no es válido.',
    'in_array' => 'El valor de :attribute field does not exist in :other.',

    'integer'  => 'El valor de :attribute debe ser un número.',
    'ip'       => 'El valor de :attribute debe ser una dirección IP válida.',
    'ipv4'     => 'El valor de :attribute debe ser una dirección IPv4 válida.',
    'ipv6'     => 'El valor de :attribute debe ser una dirección IPv6 válida.',
    'json'     => 'El valor de :attribute debe ser una cadena JSON válida.',
    'lt'       => [
        'numeric' => 'El valor de :attribute debe ser menor a :value.',
        'file'    => 'El tamaño de :attribute debe ser menor de :value kilobytes.',
        'string'  => 'El valor de :attribute debe ser menor a :value caracteres.',
        'array'   => 'El valor de :attribute debe tener menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => 'El valor de :attribute debe ser menor o igual a :value.',
        'file'    => 'El tamaño de :attribute debe ser menor o igual a :value kilobytes.',
        'string'  => 'El valor de :attribute debe ser menor o igual a :value caracteres.',
        'array'   => 'El valor de :attribute no debe tener más de :value elementos.',
    ],
    'max' => [
        'numeric' => 'El valor de :attribute no debe ser mayor a :max.',
        'file'    => 'El tamaño de :attribute no debe ser mayor a :max kilobytes.',
        'string'  => 'El valor de :attribute no debe ser mayor a :max caracteres.',
        'array'   => 'El valor de :attribute no debe tener más de :max elementos.',
    ],
    'mimes'     => 'El valor de :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El valor de :attribute debe ser un archivo de tipo: :values.',
    'min'       => [
        'numeric' => 'El valor de :attribute debe ser al menos :min.',
        'file'    => 'El tamaño de :attribute debe ser al menos de :min kilobytes.',
        'string'  => 'El valor de :attribute debe contener al menos :min caracteres.',
        'array'   => 'El valor de :attribute debe tener al menos :min elementos.',
    ],
    'multiple_of'          => 'El valor de :attribute debe ser un múltiplo de :value.',
    'not_in'               => 'El valor de :attribute es inválido.',
    'not_regex'            => 'El formato de :attribute es inválido.',
    'numeric'              => 'El valor de :attribute debe ser un número.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato de :attribute es inválido.',
    'required'             => 'El valor de :attribute es obligatorio.',
    'required_if'          => 'El valor de :attribute es obligatorio cuando :other es :value.',
    'required_unless'      => 'El valor de :attribute es obligatorio a menos que :other esté en :values.',
    'required_with'        => 'El valor de :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El valor de :attribute es obligatorio cuando :values está presente.',
    'required_without'     => 'El valor de :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El valor de :attribute es obligatorio cuando ninguno de :values estén presentes.',
    'same'                 => 'El valor de :attribute debe coincidir con :other.',
    'size'                 => [
        'numeric' => 'El valor de :attribute debe ser :size.',
        'file'    => 'El valor de :attribute debe tener :size kilobytes.',
        'string'  => 'El valor de :attribute debe tener :size caracteres.',
        'array'   => 'El valor de :attribute debe contener :size elementos.',
    ],
    'starts_with' => 'El contenido de :attribute debe iniciar con alguno de los siguientes valores: :values',
    'string'      => 'El valor de :attribute debe ser una cadena de caracteres.',
    'timezone'    => 'El valor de :attribute debe ser una zona válida.',
    'unique'      => 'El valor de :attribute ya está en uso.',
    'uploaded'    => 'El contenido :attribute ha fallado al subirse.',
    'url'         => 'El formato de :attribute es inválido.',
    'uuid'        => 'El valor de :attribute debe ser un UUID válido.',
    'values'      => [
        'is_payer' => [
            true  => 'verdadero',
            false => 'falso'
        ]
    ],

    // Custom rules
    'email_full' => 'El valor de :attribute no es válido.',
    'postcode'   => 'El valor de :attribute no es válido.',
    'rfc_number' => 'El valor de :attribute no es válido.',
    'tag'        => 'El valor de :attribute no es válido.',
    'date_iso'   => 'El valor de :attribute no es válido.',
    'money'      => 'El valor de :attribute no es una cantidad válida.',

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

    'attributes' => [
        'title'             => 'título',
        'body'              => 'descripción',
        'published_at'      => 'fecha de publicación',
        'expired_at'        => 'fecha de expiración',
        'url'               => 'enlace de apoyo',
        'groups'            => 'grupos',
        'is_featured'       => 'destacada',
        'date'              => 'fecha',
        'groups'            => 'grupos',
        'phone'             => 'teléfono',
        'empty'             => 'vacío',
        'name'              => 'nombre',
        'fiscal_regime'     => 'régimen fiscal',
        'address'           => 'dirección',
        'tax_zip_code'      => 'código postal',
        'is_payer'          => 'pagador',
        'is_provider'       => 'proveedor',
        'interest_rate'     => 'tasa de interés',
        'description'       => 'descripción',
        'amount'            => 'monto',
        'reference'         => 'número de referencia',
        'email'             => 'correo electrónico',
        'pdf_invoice'       => 'archivo PDF',
        'xml_invoice'       => 'archivo XML',
        'delete_reason'     => 'motivo de eliminación',
        'rejection_reason'  => 'motivo de rechazo',
        'guarantee_rate'    => 'aforo',
        'contacts.0.email'  => 'correo electrónico',
        'contacts.1.email'  => 'correo electrónico',
        'contacts.2.email'  => 'correo electrónico',
        'contacts.3.email'  => 'correo electrónico',
        'contacts.4.email'  => 'correo electrónico',
        'users.0.email'     => 'correo electrónico',
        'users.1.email'     => 'correo electrónico',
        'users.2.email'     => 'correo electrónico',
        'users.3.email'     => 'correo electrónico',
        'users.4.email'     => 'correo electrónico',
    ],
];
