<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Institute;
use App\Models\Vacancy;
use App\Models\City;

class VacanciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = collect([
            [
                'name' => 'Google Indonesia',
                'logo' => 'google.png',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'city' => 'Jakarta',
                'vacancies' => [
                    'name' => 'Senior UI & UX Designer',
                    'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that',
                    'type' => 'Full Time',
                    'salary' => '14.000.000',
                    'qualification' => 'D3, S1',
                    'year' => '4'
                ]
            ],
            [
                'name' => 'AirBnb Inc',
                'logo' => 'airbnb.png',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'city' => 'Jakarta',
                'vacancies' => [
                    'name' => 'Front End Developer',
                    'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that',
                    'type' => 'Part Time',
                    'salary' => '9.000.000',
                    'qualification' => 'S1',
                    'year' => '2'
                ]
            ],
            [
                'name' => 'Unilever Indonesia',
                'logo' => 'unilever.jpg',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'city' => 'Tanggerang',
                'vacancies' => [
                    'name' => 'Product Designer',
                    'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that',
                    'type' => 'Remote',
                    'salary' => '7.000.000',
                    'qualification' => '',
                    'year' => '1'
                ]
            ],
            [
                'name' => 'Aqua by Danone',
                'logo' => 'aqua.png',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'city' => 'Bekasi',
                'vacancies' => [
                    'name' => 'Head of Digital Markering',
                    'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that',
                    'type' => 'Full Time',
                    'salary' => '',
                    'qualification' => '',
                    'year' => '2'
                ]
            ],
            [
                'name' => 'PepsiCo',
                'logo' => 'pepsi.png',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'city' => 'Bekasi',
                'vacancies' => [
                    'name' => 'UI & UX Mobile Designer',
                    'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that',
                    'type' => 'Full Time',
                    'salary' => '5.000.000',
                    'qualification' => 'D3, S1',
                    'year' => '1'
                ]
            ],
            [
                'name' => 'KFC Indonesia',
                'logo' => 'kfc.png',
                'overview' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'city' => 'Bandung',
                'vacancies' => [
                    'name' => 'Senior Back End Developer',
                    'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that',
                    'type' => 'Remote',
                    'salary' => '14.000.000',
                    'qualification' => '',
                    'year' => '5'
                ]
            ],
        ]);

        foreach ($datas as $data) {
            $institute = Institute::firstOrCreate([
                'name' => $data['name'],
                'logo' => $data['logo'],
                'overview' => $data['overview'],
                'city_id' => City::where('name', $data['city'])->first()->id
            ]);

            $institute->vacancy()->firstOrCreate($data['vacancies']);
        }
    }
}
