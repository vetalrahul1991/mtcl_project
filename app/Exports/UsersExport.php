<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select([
            'first_name',
            'middle_name',
            'surname',
            'mobile_number',
            'date_of_birth',
            'district',
            'city',
            'zone',
            'playing_role',
            'batting_handedness',
            'preferred_bowling_style',
            'preferred_batting_order',
            'email',
            'payment_screenshot',
            'created_at'
        ])->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'First Name',
            'Middle Name',
            'Surname',
            'Mobile',
            'DOB',
            'District',
            'City',
            'Zone',
            'Playing Role',
            'Batting Handedness',
            'Bowling Style',
            'Batting Order',
            'Email',
            'Payment Screenshot',
            'Created',
        ];
    }
}
