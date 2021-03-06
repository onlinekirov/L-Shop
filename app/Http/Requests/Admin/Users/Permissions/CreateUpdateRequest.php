<?php
declare(strict_types = 1);

namespace App\Http\Requests\Admin\Users\Permissions;

use Illuminate\Foundation\Http\FormRequest;

class CreateUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:1|max:64'
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributes(): array
    {
        return [
            'name' => __('content.admin.users.roles.create_permission_dialog.name')
        ];
    }
}
