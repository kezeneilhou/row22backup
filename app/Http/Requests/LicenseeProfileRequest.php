<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LicenseeProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
              'licensee_type' => 'required',
              'licensee_gst' => 'required',
              'licensee_pan' => 'required',
              'licensee_tan' => 'required',
              'dot_reg_no' => 'required',
              'dot_reg_date' => 'required',
              'dot_reg_expiry' => 'required',
              'auth_id_proof_type' => 'required',
              'auth_id_proof_no' => 'required',
              'ho_address' => 'required',
              'ho_pin' => 'required',
              'ho_state' => 'required',
              'ho_district' => 'required',
              'ho_mobile' => 'required',
              'ho_email' => 'required',
              'so_address' => 'required',
              'so_pin' => 'required',
              'so_state' => 'required',
              'so_district' => 'required',
              'so_mobile' => 'required',
              'so_email' => 'required',
              'dot_license' => 'required|file|mimes:pdf,jpg,jpeg|max:2048',
              'id_proof' => 'required|file|mimes:pdf,jpg,jpeg|max:2048',
              'auth_letter' => 'required|file|mimes:pdf,jpg,jpeg|max:2048',
        ];

    }

    public function messages()
    {
      return [
            'dot_license.mimes' => 'DoT License only PDF, JPG, JPEG allowed',
            'dot_license.max' => 'DoT License Filesize max 2MB allowed',
            'id_proof.mimes' => 'ID Proof only PDF, JPG, JPEG allowed',
            'id_proof.max' => 'ID Proof Filesize max 2MB allowed',
            'auth_letter.mimes' => 'Authorization Letter only PDF, JPG, JPEG allowed',
            'auth_letter.max' => 'Authorization Letter Filesize max 2MB allowed',
      ];
    }
}
