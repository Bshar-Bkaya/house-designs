<?php

namespace App\Http\Requests\Api\Admin\Account\Password;

use App\Services\ApiResponseService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ChangePasswordRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
   */
  public function rules(): array
  {
    return [
      'password' => ["required", "min:8"]
    ];
  }

  protected function failedValidation(Validator $validator)
  {
    throw new HttpResponseException(
      ApiResponseService::errorMsgResponse($validator->errors()->first())
    );
  }
}
