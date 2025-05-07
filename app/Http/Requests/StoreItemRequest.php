<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest {


    public function authorization(): bool {
        return true;
    }

    public function rule(): array {
        return [
            'name' => ['required'],
            'description' => ['required']
        ];
    }
}