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

    'accepted'             => 'O :attribute deve ser aceito.',
    'accepted_if'          => 'O :attribute deve ser aceito quando :other for :value.',
    'active_url'           => 'O :attribute deve ser uma URL válida.',
    'after'                => 'O :attribute deve ser uma data posterior a :date.',
    'after_or_equal'       => 'O :attribute deve ser uma data posterior ou igual a :date.',
    'alpha'                => 'O :attribute só pode conter letras.',
    'alpha_dash'           => 'O :attribute só pode conter letras, números e traços.',
    'alpha_num'            => 'O :attribute só pode conter letras e números.',
    'array'                => 'O :attribute deve ser uma matriz.',
    'ascii'                => 'O :attribute deve conter somente caracteres alfanuméricos.',
    'before'               => 'O :attribute deve ser uma data anterior :date.',
    'before_or_equal'      => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => 'O :attribute deve ser entre :min e :max.',
        'file'    => 'O :attribute deve ser entre :min e :max kilobytes.',
        'string'  => 'O :attribute deve ser entre :min e :max caracteres.',
        'array'   => 'O :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => 'O :attribute deve ser verdadeiro ou falso.',
    'can'                  => 'O :attribute contém valores não autorizado.',
    'confirmed'            => 'O :attribute de confirmação não confere.',
    'contains'             => 'O :attribute está faltando um valor obrigatório.',
    'current_password'     => 'A senha está incorreta.',
    'date'                 => 'O :attribute deve ser uma data válida.',
    'date_equals'          => 'O :attribute deve ser uma data igual a :date.',
    'date_format'          => 'O :attribute não corresponde ao formato :format.',
    'decimal'              => 'O :attribute deve ter :decimal casas decimais.',
    'declined'             => 'O :attribute deve ser recusado.',
    'declined_if'          => 'O :attribute deve ser recusado quando :other for :value.',
    'different'            => 'Os  :attribute e :other devem ser diferentes.',
    'digits'               => 'O :attribute deve ter :digits dígitos.',
    'digits_between'       => 'O :attribute deve ter entre :min e :max dígitos.',
    'dimensions'           => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct'             => 'O :attribute tem um valor duplicado.',
    'doesnt_end_with'      => 'O :attribute não pode terminar com um dos seguintes: :values.',
    'doesnt_start_with'    => 'O :attribute não pode começar com um dos seguintes: :values.',
    'email'                => 'O :attribute deve ser um endereço de e-mail válido.',
    'ends_with'            => 'O :attribute deve terminar com um dos seguintes: :values',
    'enum'                 => 'O :attribute selecionado é inválido.',
    'exists'               => 'O :attribute não foi localizado em nossa base de dados.',
    'extensions'           => 'O :attribute deve conter uma das seguintes extensões: :values.',
    'file'                 => 'O :attribute deve ser um arquivo.',
    'filled'               => 'O :attribute deve ter um valor.',
    'gt' => [
        'numeric' => 'O :attribute deve ser maior que :value.',
        'file'    => 'O :attribute deve ser maior que :value kilobytes.',
        'string'  => 'O :attribute deve ser maior que :value caracteres.',
        'array'   => 'O :attribute deve conter mais de :value itens.',
    ],
    'gte' => [
        'numeric' => 'O :attribute deve ser maior ou igual a :value.',
        'file'    => 'O :attribute deve ser maior ou igual a :value kilobytes.',
        'string'  => 'O :attribute deve ser maior ou igual a :value caracteres.',
        'array'   => 'O :attribute deve conter :value itens ou mais.',
    ],
    'hex_color'            => 'O :attribute deve ser uma cor hexadecimal válida.',
    'image'                => 'O :attribute deve ser uma imagem.',
    'in'                   => 'O :attribute selecionado é inválido.',
    'in_array'             => 'O :attribute não existe em :other.',
    'integer'              => 'O :attribute deve ser um número inteiro.',
    'ip'                   => 'O :attribute deve ser um endereço de IP válido.',
    'ipv4'                 => 'O :attribute deve ser um endereço IPv4 válido.',
    'ipv6'                 => 'O :attribute deve ser um endereço IPv6 válido.',
    'json'                 => 'O :attribute deve ser uma string JSON válida.',
    'list' => 'O :attribute deve ser uma lista.',
    'lowercase' => 'O :attribute deve estar em letras minúsculas.',
    'lt' => [
        'numeric' => 'O :attribute deve ser menor que :value.',
        'file'    => 'O :attribute deve ser menor que :value kilobytes.',
        'string'  => 'O :attribute deve ser menor que :value caracteres.',
        'array'   => 'O :attribute deve conter menos de :value itens.',
    ],
    'lte' => [
        'numeric' => 'O :attribute deve ser menor ou igual a :value.',
        'file'    => 'O :attribute deve ser menor ou igual a :value kilobytes.',
        'string'  => 'O :attribute deve ser menor ou igual a :value caracteres.',
        'array'   => 'O :attribute não deve conter mais que :value itens.',
    ],
    'mac_address' => 'O :attribute deve ser um MAC address válido.',
    'max' => [
        'numeric' => 'O :attribute não pode ser superior a :max.',
        'file'    => 'O :attribute não pode ser superior a :max kilobytes.',
        'string'  => 'O :attribute não pode ser superior a :max caracteres.',
        'array'   => 'O :attribute não pode ter mais do que :max itens.',
    ],
    'max_digits'           => 'O :attribute não pode ser superior a :max dígitos',
    'mimes'                => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute deve ser pelo menos :min.',
        'file'    => 'O :attribute deve ter pelo menos :min kilobytes.',
        'string'  => 'O :attribute deve ter pelo menos :min caracteres.',
        'array'   => 'O :attribute deve ter pelo menos :min itens.',
    ],
    'missing'              => 'O :attribute deve estar ausente.',
    'missing_if'           => 'O :attribute deve estar ausente quando :other for :value.',
    'missing_unless'       => 'O :attribute deve estar ausente, a menos que :other seja :value.',
    'missing_with'         => 'O :attribute não deve estar presente quando houver :values.',
    'missing_with_all'     => 'O :attribute deve estar ausente quando :values estiverem presentes.',
    'min_digits'           => 'O :attribute deve ter pelo menos :min dígitos',
    'not_in'               => 'O :attribute selecionado é inválido.',
    'multiple_of'          => 'O :attribute deve ser um múltiplo de :value.',
    'not_regex'            => 'O :attribute possui um formato inválido.',
    'numeric'              => 'O :attribute deve ser um número.',
    'password' => [
        'letters'          => 'O :attribute deve conter pelo menos uma letra.',
        'mixed'            => 'O :attribute deve conter pelo menos uma letra maiúscula e uma letra minúscula.',
        'numbers'          => 'O :attribute deve conter pelo menos um número.',
        'symbols'          => 'O :attribute deve conter pelo menos um símbolo.',
        'uncompromised'    => 'A senha que você inseriu em :attribute está em um vazamento de dados.'
            . ' Por favor escolha uma senha diferente.',
    ],
    'present'              => 'O :attribute deve estar presente.',
    'present_if'           => 'O :attribute deve estar presente quando :other for :value.',
    'present_unless'       => 'O :attribute deve estar presente, a menos que :other seja :value.',
    'present_with'         => 'O :attribute deve estar presente quando :values estiver presente.',
    'present_with_all'     => 'O :attribute deve estar presente quando :values estiverem presentes.',
    'regex'                => 'O :attribute tem um formato inválido.',
    'required'             => 'O :attribute é obrigatório.',
    'required_array_keys'  => 'O :attribute deve conter entradas para: :values.',
    'required_if'          => 'O :attribute é obrigatório quando :other for :value.',
    'required_if_accepted' => 'O :attribute é obrigatório quando :other for aceito.',
    'required_if_declined' => 'O :attribute é obrigatório quando :other for recusado.',
    'required_unless'      => 'O :attribute é obrigatório exceto quando :other for :values.',
    'required_with'        => 'O :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'prohibited'           => 'O :attribute é proibido.',
    'prohibited_if'        => 'O :attribute é proibido quando :other for :value.',
    'prohibited_unless'    => 'O :attribute é proibido exceto quando :other for :values.',
    'prohibits'            => 'O :attribute proíbe :other de estar presente.',
    'same'                 => 'Os  :attribute e :other devem corresponder.',
    'size'                 => [
        'numeric' => 'O :attribute deve ser :size.',
        'file'    => 'O :attribute deve ser :size kilobytes.',
        'string'  => 'O :attribute deve ser :size caracteres.',
        'array'   => 'O :attribute deve conter :size itens.',
    ],
    'starts_with'          => 'O :attribute deve começar com um dos seguintes valores: :values',
    'string'               => 'O :attribute deve ser uma string.',
    'timezone'             => 'O :attribute deve ser uma zona válida.',
    'unique'               => 'O :attribute já está sendo utilizado.',
    'uploaded'             => 'Ocorreu uma falha no upload do :attribute.',
    'uppercase'            => 'O :attribute deve conter letras maiúsculas.',
    'url'                  => 'O :attribute tem um formato inválido.',
    'ulid'                 => 'O :attribute deve ser um ULID válido.',
    'uuid'                 => 'O :attribute deve ser um UUID válido.',

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
        'address'                => 'endereço',
        'age'                    => 'idade',
        'attended_meeting'       => 'encontro presencial',
        'birth_date'             => 'data de nascimento',
        'blood_type'             => 'tipo sanguíneo',
        'body'                   => 'conteúdo',
        'category'               => 'categoria',
        'cell'                   => 'célula',
        'city'                   => 'cidade',
        'contact'                => 'contato telefônico',
        'company_name'           => 'razão social',
        'complement'             => 'complemento',
        'country'                => 'país',
        'current_password'       => 'senha atual',
        'date'                   => 'data',
        'day'                    => 'dia',
        'description'            => 'descrição',
        'end_date'               => 'data de término',
        'excerpt'                => 'resumo',
        'first_name'             => 'primeiro nome',
        'gender'                 => 'gênero',
        'hour'                   => 'hora',
        'last_name'              => 'sobrenome',
        'marital_status'         => 'estado civil',
        'message'                => 'mensagem',
        'minute'                 => 'minuto',
        'mobile'                 => 'celular',
        'modality'               => 'modalidade',
        'month'                  => 'mês',
        'name'                   => 'nome',
        'nationality'            => 'nacionalidade',
        'neighborhood'           => 'bairro',
        'network_experience'     => 'tempo de experiência na rede',
        'number'                 => 'número',
        'password'               => 'senha',
        'password_confirmation'  => 'confirmação da senha',
        'phone'                  => 'telefone',
        'profession_id'          => 'profissão',
        'second'                 => 'segundo',
        'sending_reflection'     => 'envio do fichamento',
        'sending_exercises'      => 'envio da atividade em grupo',
        'sex'                    => 'sexo',
        'start_date'             => 'data de início',
        'state'                  => 'estado',
        'street'                 => 'rua',
        'subject'                => 'assunto',
        'text'                   => 'texto',
        'time'                   => 'hora',
        'title'                  => 'título',
        'username'               => 'usuário',
        'workload'               => 'carga horária',
        'year'                   => 'ano',
        'zipcode'                => 'cep',
    ],

];
