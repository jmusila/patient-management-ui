<?php

namespace Domain\UserManagement\DataTransferObjects;

use Illuminate\Contracts\Support\Arrayable;

class UserData implements Arrayable
{
    public function __construct(
        public string $first_name,
        public string|null $middle_name,
        public string $last_name,
        public string $national_id_number,
        public string $gender,
        public string $type,
        public string $address,
        public string $phone_number,
        public string $date_of_birth,
        public string $email,
        public string $password,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            first_name: data_get($data, 'first_name'),
            middle_name: data_get($data, 'middle_name'),
            last_name: data_get($data, 'last_name'),
            national_id_number: data_get($data, 'national_id_number'),
            gender: data_get($data, 'gender'),
            type: data_get($data, 'type'),
            address: data_get($data, 'address'),
            phone_number: data_get($data, 'phone_number'),
            date_of_birth: data_get($data, 'date_of_birth'),
            email: data_get($data, 'email'),
            password: data_get($data, 'password'),
        );
    }

    public function toArray(): array
    {
        return (array) $this;
    }
}