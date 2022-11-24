<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Líneas de idioma de validación
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados 
    | utilizados por la clase de validador.
    | Algunas de estas reglas tienen múltiples versiones tales como las de tamaño.
    | Siéntase libre de modificar cada uno de estos mensajes aquí.
    |
    */
   
    'accepted'        => 'El :attribute debe ser aceptado.',
    'accepted_if'     => 'El :attribute debe aceptarse cuando :other es :value.',
    'active_url'      => 'El :attribute no es una URL válida.',
    'after'           => 'El :attribute debe ser una fecha posterior :date.',
    'after_or_equal'  => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'           => 'El :attribute solo debe contener letras.',
    'alpha_dash'      => 'El :attribute solo debe contener letras,números, guiones y guiones bajos.',
    'alpha_num'       => 'El :attribute solo debe contener letras y numeros.',
    'array'           => 'El :attribute debe ser una matriz.',
    'before'          => 'El :attribute debe ser una fecha anterior :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array'   => 'El :attribute debe tener entre :min y :max de elementos.',
        'file'    => 'El :attribute debe estar entre :min y :max de kilobytes.',
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'string'  => 'El :attribute debe estar entre :min y :max de caracteres.',
    ],
    'boolean'           => 'El :attribute el campo debe ser verdadero o falso.',
    'confirmed'         => 'El :attribute la confirmación no coincide.',
    'current_password'  => 'La contraseña es incorrecta.',
    'date'              => 'El :attribute no es una fecha válida.',
    'date_equals'       => 'El :attribute debe ser una fecha igual a :date.',
    'date_format'       => 'El :attribute no coincide con el formato :format.',
    'declined'          => 'El :attribute debe ser rechazado.',
    'declined_if'       => 'El :attribute debe rechazarse cuando :other es :value.',
    'different'         => 'El :attribute y :other debe ser diferente.',
    'digits'            => 'El :attribute debe ser :digits digits.',
    'digits_between'    => 'El :attribute debe ser entre :min y :max digits.',
    'dimensions'        => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct'          => 'El :attribute el campo tiene un valor duplicado.',
    'doesnt_end_with'   => 'El :attribute no puede terminar con uno de los following: :values.',
    'doesnt_start_with' => 'El :attribute may not start with one of the following: :values.',
    'email'             => 'El :attribute  debe ser una dirección de correo electrónico válida.',
    'ends_with'         => 'El :attribute debe terminar con uno de los following: :values.',
    'enum'              => 'El :attribute seleccionado  es inválido.',
    'exists' => 'El seleccionado :attribute es inválido.',
    'file'   => 'El :attribute debe ser un archivo.',
    'filled' => 'El :attribute el campo debe tener un valor.',
    'gt'                   => [
        'numeric' => 'El campo :attribute debe ser mayor a :value.',
        'file'    => 'El archivo :attribute debe pesar más de :value kilobytes.',
        'string'  => 'El campo :attribute debe contener más de :value caracteres.',
        'array'   => 'El campo :attribute debe contener más de :value elementos.',
    ],
    'gte'                  => [
        'numeric' => 'El campo :attribute debe ser mayor o igual a :value.',
        'file'    => 'El archivo :attribute debe pesar :value o más kilobytes.',
        'string'  => 'El campo :attribute debe contener :value o más caracteres.',
        'array'   => 'El campo :attribute debe contener :value o más elementos.',
    ],
    'image'       => 'El campo :attribute debe ser una imagen.',
    'in'          => 'El campo :attribute es inválido.',
    'in_array'    => 'El campo :attribute no existe en :other.',
    'integer'     => 'El campo :attribute debe ser un número entero.',
    'ip'          => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4'        => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6'        => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json'        => 'El campo :attribute debe ser una cadena de texto JSON válida.',
    'lt' => [
        'numeric' => 'El campo :attribute debe ser menor a :value.',
        'file'    => 'El archivo :attribute debe pesar menos de :value kilobytes.',
        'string'  => 'El campo :attribute debe contener menos de :value caracteres.',
        'array'   => 'El campo :attribute debe contener menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => 'El campo :attribute debe ser menor o igual a :value.',
        'file'    => 'El archivo :attribute debe pesar :value o menos kilobytes.',
        'string'  => 'El campo :attribute debe contener :value o menos caracteres.',
        'array'   => 'El campo :attribute debe contener :value o menos elementos.',
    ],
    'max' => [
        'numeric' => 'El campo :attribute no debe ser mayor a :max.',
        'file'    => 'El archivo :attribute no debe pesar más de :max kilobytes.',
        'string'  => 'El campo :attribute no debe contener más de :max caracteres.',
        'array'   => 'El campo :attribute no debe contener más de :max elementos.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres.',
        'array'   => 'El campo :attribute debe contener al menos :min elementos.',
    ],
    'not_in'               => 'El campo :attribute seleccionado es inválido.',
    'not_regex'            => 'El formato del campo :attribute es inválido.',
    'numeric'              => 'El campo :attribute debe ser un número.',
    'password'             => 'La contraseña es incorrecta.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato del campo :attribute es inválido.',
    'required'             => 'El campo :attribute es obligatorio.',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los campos :values están presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'starts_with'          => 'El campo :attribute debe comenzar con uno de los siguientes valores: :values',
    'string'               => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone'             => 'El campo :attribute debe ser una zona horaria válida.',
    'unique'               => 'El valor del campo :attribute ya está en uso.',
    'uploaded'             => 'El campo :attribute no se pudo subir.',
    'url'                  => 'El formato del campo :attribute es inválido.',
    'uuid'                 => 'El campo :attribute debe ser un UUID válido.',

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
            'rule-name'  => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];