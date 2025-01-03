<?php

namespace Database\Seeders;

use App\Models\Anuncio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnuncioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anuncio = [
            [
                "titulo" => "Notebook Dell Inspiron 1",
                    "slug"=> "notebook-notebook-dell-inspiron-1",
                    "preco"=> 3801.4,
                    "negociavel"=> 1,
                    "descricao"=> "Notebook Dell Inspiron, processador Intel i5, 8GB RAM, 512GB SSD.",
                    "contato"=> "contato1@exemplo.com",
                    "views"=> 155,
                    "user_id"=> 1,
                    "estado_id"=> 18,
                    "categoria_id"=> 2
            ],
            [
                "titulo" => "Notebook HP Pavilion 2",
                    "slug"=> "notebook-notebook-hp-pavilion-2",
                    "preco"=> 2398.29,
                    "negociavel"=> 0,
                    "descricao"=> "Notebook HP Pavilion, processador Intel i5, 8GB RAM, 512GB SSD.",
                    "contato"=> "contato2@exemplo.com",
                    "views"=> 376,
                    "user_id"=> 1,
                    "estado_id"=> 15,
                    "categoria_id"=> 1
            ],
            [
                "titulo"=> "Notebook Lenovo ThinkPad 3",
                    "slug"=> "notebook-notebook-lenovo-thinkpad-3",
                    "preco"=> 2418.62,
                    "negociavel"=> 0,
                    "descricao"=>
                    "Notebook Lenovo ThinkPad, processador Intel i5, 8GB RAM, 512GB SSD.", "contato"=>
                    "contato3@exemplo.com",
                    "views"=> 436,
                    "user_id"=> 1,
                    "estado_id"=> 8,
                "categoria_id"=> 1
            ],
            [
                "titulo" => "Notebook Acer Aspire 4",
                    "slug" => "notebook-notebook-acer-aspire-4",
                    "preco" => 4236.59,
                    "negociavel" => 1,
                    "descricao" => "Notebook Acer Aspire, processador Intel i5, 8GB RAM, 512GB SSD.",
                    "contato" => "contato4@exemplo.com",
                    "views" => 391,
                    "user_id" => 1,
                    "estado_id" => 3,
                    "categoria_id" => 4
            ],
            [
                "titulo" => "Notebook Asus VivoBook 5",
                "slug" => "notebook-notebook-asus-vivobook-5",
                "preco" => 2297.92,
                "negociavel" => 0,
                "descricao" => "Notebook Asus VivoBook, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato5@exemplo.com",
                "views" => 75,
                "user_id" => 1,
                "estado_id" => 1,
                "categoria_id" => 2
            ],
            [
                "titulo" => "Notebook MacBook Pro 6",
                    "slug" => "notebook-notebook-macbook-pro-6",
                    "preco" => 3518.98,
                    "negociavel" => 0,
                    "descricao" => "Notebook MacBook Pro, processador Intel i5, 8GB RAM, 512GB SSD.",
                    "contato" => "contato6@exemplo.com",
                    "views" => 374,
                    "user_id" => 1,
                    "estado_id" => 20,
                    "categoria_id" => 4
            ],
            [
                "titulo" => "Notebook Samsung Book 7",
                "slug" => "notebook-notebook-samsung-book-7",
                "preco" => 3538.65,
                "negociavel" => 1,
                "descricao" => "Notebook Samsung Book, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato7@exemplo.com",
                "views" => 136,
                "user_id" => 1,
                "estado_id" => 10,
                "categoria_id" => 2
            ],
            [
                "titulo" => "Notebook Microsoft Surface 8",
                "slug" => "notebook-notebook-microsoft-surface-8",
                "preco" => 2752.93,
                "negociavel" => 1,
                "descricao" => "Notebook Microsoft Surface, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato8@exemplo.com",
                "views" => 182,
                "user_id" => 1,
                "estado_id" => 7,
                "categoria_id" => 3
            ],
            [
                "titulo" => "Notebook Toshiba Satellite 9",
                "slug" => "notebook-notebook-toshiba-satellite-9",
                "preco" => 3826.88,
                "negociavel" => 1,
                "descricao" => "Notebook Toshiba Satellite, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato9@exemplo.com",
                "views" => 145,
                "user_id" => 1,
                "estado_id" => 5,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook LG Gram 10",
                "slug" => "notebook-notebook-lg-gram-10",
                "preco" => 4584.12,
                "negociavel" => 1,
                "descricao" => "Notebook LG Gram, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato10@exemplo.com",
                "views" => 51,
                "user_id" => 1,
                "estado_id" => 11,
                "categoria_id" => 3
            ],
            [
                "titulo" => "Notebook Dell Inspiron 11",
                "slug" => "notebook-notebook-dell-inspiron-11",
                "preco" => 2764.96,
                "negociavel" => 1,
                "descricao" => "Notebook Dell Inspiron, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato11@exemplo.com",
                "views" => 334,
                "user_id" => 1,
                "estado_id" => 8,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook HP Pavilion 12",
                "slug" => "notebook-notebook-hp-pavilion-12",
                "preco" => 2460.2,
                "negociavel" => 0,
                "descricao" => "Notebook HP Pavilion, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato12@exemplo.com",
                "views" => 438,
                "user_id" => 1,
                "estado_id" => 15,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook Lenovo ThinkPad 13",
                "slug" => "notebook-notebook-lenovo-thinkpad-13",
                "preco" => 3711.87,
                "negociavel" => 0,
                "descricao" => "Notebook Lenovo ThinkPad, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato13@exemplo.com",
                "views" => 156,
                "user_id" => 1,
                "estado_id" => 17,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook Acer Aspire 14",
                "slug" => "notebook-notebook-acer-aspire-14",
                "preco" => 2196.52,
                "negociavel" => 0,
                "descricao" => "Notebook Acer Aspire, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato14@exemplo.com",
                "views" => 108,
                "user_id" => 1,
                "estado_id" => 10,
                "categoria_id" => 4
            ],
            [
                "titulo" => "Notebook Asus VivoBook 15",
                "slug" => "notebook-notebook-asus-vivobook-15",
                "preco" => 3797.92,
                "negociavel" => 1,
                "descricao" => "Notebook Asus VivoBook, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato15@exemplo.com",
                "views" => 160,
                "user_id" => 1,
                "estado_id" => 18,
                "categoria_id" => 5
            ],
            [
                "titulo" => "Notebook MacBook Pro 16",
                "slug" => "notebook-notebook-macbook-pro-16",
                "preco" => 4527.88,
                "negociavel" => 1,
                "descricao" => "Notebook MacBook Pro, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato16@exemplo.com",
                "views" => 290,
                "user_id" => 1,
                "estado_id" => 22,
                "categoria_id" => 2
            ],
            [
                "titulo" => "Notebook Samsung Book 17",
                "slug" => "notebook-notebook-samsung-book-17",
                "preco" => 4621.82,
                "negociavel" => 0,
                "descricao" => "Notebook Samsung Book, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato17@exemplo.com",
                "views" => 176,
                "user_id" => 1,
                "estado_id" => 8,
                "categoria_id" => 2
            ],
            [
                "titulo" => "Notebook Microsoft Surface 18",
                "slug" => "notebook-notebook-microsoft-surface-18",
                "preco" => 2758.52,
                "negociavel" => 1,
                "descricao" => "Notebook Microsoft Surface, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato18@exemplo.com",
                "views" => 415,
                "user_id" => 1,
                "estado_id" => 5,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook Toshiba Satellite 19",
                "slug" => "notebook-notebook-toshiba-satellite-19",
                "preco" => 4502.02,
                "negociavel" => 1,
                "descricao" => "Notebook Toshiba Satellite, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato19@exemplo.com",
                "views" => 203,
                "user_id" => 1,
                "estado_id" => 5,
                "categoria_id" => 5
            ],
            [
                "titulo" => "Notebook LG Gram 20",
                "slug" => "notebook-notebook-lg-gram-20",
                "preco" => 2622.29,
                "negociavel" => 1,
                "descricao" => "Notebook LG Gram, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato20@exemplo.com",
                "views" => 365,
                "user_id" => 1,
                "estado_id" => 22,
                "categoria_id" => 3
            ],
            [
                "titulo" => "Notebook Dell Inspiron 21",
                "slug" => "notebook-notebook-dell-inspiron-21",
                "preco" => 2788.14,
                "negociavel" => 1,
                "descricao" => "Notebook Dell Inspiron, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato21@exemplo.com",
                "views" => 117,
                "user_id" => 1,
                "estado_id" => 25,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook HP Pavilion 22",
                "slug" => "notebook-notebook-hp-pavilion-22",
                "preco" => 4971.22,
                "negociavel" => 1,
                "descricao" => "Notebook HP Pavilion, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato22@exemplo.com",
                "views" => 74,
                "user_id" => 1,
                "estado_id" => 16,
                "categoria_id" => 3
            ],
            [
                "titulo" => "Notebook Lenovo ThinkPad 23",
                "slug" => "notebook-notebook-lenovo-thinkpad-23",
                "preco" => 2495.66,
                "negociavel" => 0,
                "descricao" => "Notebook Lenovo ThinkPad, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato23@exemplo.com",
                "views" => 308,
                "user_id" => 1,
                "estado_id" => 23,
                "categoria_id" => 4
            ],
            [
                "titulo" => "Notebook Acer Aspire 24",
                "slug" => "notebook-notebook-acer-aspire-24",
                "preco" => 3642.91,
                "negociavel" => 1,
                "descricao" => "Notebook Acer Aspire, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato24@exemplo.com",
                "views" => 61,
                "user_id" => 1,
                "estado_id" => 3,
                "categoria_id" => 5
            ],
            [
                "titulo" => "Notebook Asus VivoBook 25",
                "slug" => "notebook-notebook-asus-vivobook-25",
                "preco" => 3707.09,
                "negociavel" => 0,
                "descricao" => "Notebook Asus VivoBook, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato25@exemplo.com",
                "views" => 477,
                "user_id" => 1,
                "estado_id" => 15,
                "categoria_id" => 2
            ],
            [
                "titulo" => "Notebook MacBook Pro 26",
                "slug" => "notebook-notebook-macbook-pro-26",
                "preco" => 2777.83,
                "negociavel" => 1,
                "descricao" => "Notebook MacBook Pro, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato26@exemplo.com",
                "views" => 395,
                "user_id" => 1,
                "estado_id" => 22,
                "categoria_id" => 2
            ],
            [
                "titulo" => "Notebook Samsung Book 27",
                "slug" => "notebook-notebook-samsung-book-27",
                "preco" => 4390.28,
                "negociavel" => 1,
                "descricao" => "Notebook Samsung Book, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato27@exemplo.com",
                "views" => 286,
                "user_id" => 1,
                "estado_id" => 13,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook Microsoft Surface 28",
                "slug" => "notebook-notebook-microsoft-surface-28",
                "preco" => 4508.05,
                "negociavel" => 0,
                "descricao" => "Notebook Microsoft Surface, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato28@exemplo.com",
                "views" => 474,
                "user_id" => 1,
                "estado_id" => 25,
                "categoria_id" => 5
            ],
            [
                "titulo" => "Notebook Toshiba Satellite 29",
                "slug" => "notebook-notebook-toshiba-satellite-29",
                "preco" => 2499.74,
                "negociavel" => 1,
                "descricao" => "Notebook Toshiba Satellite, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato29@exemplo.com",
                "views" => 328,
                "user_id" => 1,
                "estado_id" => 11,
                "categoria_id" => 5
            ],
            [
                "titulo" => "Notebook LG Gram 30",
                "slug" => "notebook-notebook-lg-gram-30",
                "preco" => 3502.35,
                "negociavel" => 1,
                "descricao" => "Notebook LG Gram, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato30@exemplo.com",
                "views" => 214,
                "user_id" => 1,
                "estado_id" => 24,
                "categoria_id" => 4
            ],
            [
                "titulo" => "Notebook Dell Inspiron 31",
                "slug" => "notebook-notebook-dell-inspiron-31",
                "preco" => 4978.95,
                "negociavel" => 0,
                "descricao" => "Notebook Dell Inspiron, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato31@exemplo.com",
                "views" => 207,
                "user_id" => 1,
                "estado_id" => 23,
                "categoria_id" => 2
            ],
            [
                "titulo" => "Notebook HP Pavilion 32",
                "slug" => "notebook-notebook-hp-pavilion-32",
                "preco" => 4242.03,
                "negociavel" => 1,
                "descricao" => "Notebook HP Pavilion, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato32@exemplo.com",
                "views" => 216,
                "user_id" => 1,
                "estado_id" => 7,
                "categoria_id" => 3
            ],
            [
                "titulo" => "Notebook Lenovo ThinkPad 33",
                "slug" => "notebook-notebook-lenovo-thinkpad-33",
                "preco" => 2153.78,
                "negociavel" => 0,
                "descricao" => "Notebook Lenovo ThinkPad, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato33@exemplo.com",
                "views" => 84,
                "user_id" => 1,
                "estado_id" => 10,
                "categoria_id" => 2
            ],
            [
                "titulo" => "Notebook Acer Aspire 34",
                "slug" => "notebook-notebook-acer-aspire-34",
                "preco" => 2254.09,
                "negociavel" => 1,
                "descricao" => "Notebook Acer Aspire, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato34@exemplo.com",
                "views" => 325,
                "user_id" => 1,
                "estado_id" => 10,
                "categoria_id" => 3
            ],
            [
                "titulo" => "Notebook Asus VivoBook 35",
                "slug" => "notebook-notebook-asus-vivobook-35",
                "preco" => 4556.87,
                "negociavel" => 0,
                "descricao" => "Notebook Asus VivoBook, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato35@exemplo.com",
                "views" => 131,
                "user_id" => 1,
                "estado_id" => 7,
                "categoria_id" => 5
            ],
            [
                "titulo" => "Notebook MacBook Pro 36",
                "slug" => "notebook-notebook-macbook-pro-36",
                "preco" => 2592.72,
                "negociavel" => 1,
                "descricao" => "Notebook MacBook Pro, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato36@exemplo.com",
                "views" => 102,
                "user_id" => 1,
                "estado_id" => 8,
                "categoria_id" => 5
            ],
            [
                "titulo" => "Notebook Samsung Book 37",
                "slug" => "notebook-notebook-samsung-book-37",
                "preco" => 3056.43,
                "negociavel" => 0,
                "descricao" => "Notebook Samsung Book, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato37@exemplo.com",
                "views" => 475,
                "user_id" => 1,
                "estado_id" => 12,
                "categoria_id" => 3
            ],
            [
                "titulo" => "Notebook Microsoft Surface 38",
                "slug" => "notebook-notebook-microsoft-surface-38",
                "preco" => 4454.56,
                "negociavel" => 0,
                "descricao" => "Notebook Microsoft Surface, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato38@exemplo.com",
                "views" => 414,
                "user_id" => 1,
                "estado_id" => 22,
                "categoria_id" => 2
            ],
            [
                "titulo" => "Notebook Toshiba Satellite 39",
                "slug" => "notebook-notebook-toshiba-satellite-39",
                "preco" => 3501.37,
                "negociavel" => 0,
                "descricao" => "Notebook Toshiba Satellite, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato39@exemplo.com",
                "views" => 16,
                "user_id" => 1,
                "estado_id" => 24,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook LG Gram 40",
                "slug" => "notebook-notebook-lg-gram-40",
                "preco" => 3934.37,
                "negociavel" => 0,
                "descricao" => "Notebook LG Gram, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato40@exemplo.com",
                "views" => 149,
                "user_id" => 1,
                "estado_id" => 22,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook Dell Inspiron 41",
                "slug" => "notebook-notebook-dell-inspiron-41",
                "preco" => 4120.93,
                "negociavel" => 1,
                "descricao" => "Notebook Dell Inspiron, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato41@exemplo.com",
                "views" => 460,
                "user_id" => 1,
                "estado_id" => 3,
                "categoria_id" => 5
            ],
            [
                "titulo" => "Notebook HP Pavilion 42",
                "slug" => "notebook-notebook-hp-pavilion-42",
                "preco" => 4831.86,
                "negociavel" => 0,
                "descricao" => "Notebook HP Pavilion, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato42@exemplo.com",
                "views" => 412,
                "user_id" => 1,
                "estado_id" => 24,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook Lenovo ThinkPad 43",
                "slug" => "notebook-notebook-lenovo-thinkpad-43",
                "preco" => 3690.98,
                "negociavel" => 0,
                "descricao" => "Notebook Lenovo ThinkPad, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato43@exemplo.com",
                "views" => 11,
                "user_id" => 1,
                "estado_id" => 15,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook Acer Aspire 44",
                "slug" => "notebook-notebook-acer-aspire-44",
                "preco" => 4414.79,
                "negociavel" => 1,
                "descricao" => "Notebook Acer Aspire, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato44@exemplo.com",
                "views" => 79,
                "user_id" => 1,
                "estado_id" => 26,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook Asus VivoBook 45",
                "slug" => "notebook-notebook-asus-vivobook-45",
                "preco" => 3457.58,
                "negociavel" => 1,
                "descricao" => "Notebook Asus VivoBook, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato45@exemplo.com",
                "views" => 481,
                "user_id" => 1,
                "estado_id" => 2,
                "categoria_id" => 3
            ],
            [
                "titulo" => "Notebook MacBook Pro 46",
                "slug" => "notebook-notebook-macbook-pro-46",
                "preco" => 3174.46,
                "negociavel" => 0,
                "descricao" => "Notebook MacBook Pro, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato46@exemplo.com",
                "views" => 150,
                "user_id" => 1,
                "estado_id" => 27,
                "categoria_id" => 4
            ],
            [
                "titulo" => "Notebook Samsung Book 47",
                "slug" => "notebook-notebook-samsung-book-47",
                "preco" => 2559.52,
                "negociavel" => 0,
                "descricao" => "Notebook Samsung Book, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato47@exemplo.com",
                "views" => 364,
                "user_id" => 1,
                "estado_id" => 12,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook Microsoft Surface 48",
                "slug" => "notebook-notebook-microsoft-surface-48",
                "preco" => 3185.61,
                "negociavel" => 0,
                "descricao" => "Notebook Microsoft Surface, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato48@exemplo.com",
                "views" => 286,
                "user_id" => 1,
                "estado_id" => 9,
                "categoria_id" => 1
            ],
            [
                "titulo" => "Notebook Toshiba Satellite 49",
                "slug" => "notebook-notebook-toshiba-satellite-49",
                "preco" => 2547.25,
                "negociavel" => 1,
                "descricao" => "Notebook Toshiba Satellite, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato49@exemplo.com",
                "views" => 181,
                "user_id" => 1,
                "estado_id" => 8,
                "categoria_id" => 5
            ],
            [
                "titulo" => "Notebook LG Gram 50",
                "slug" => "notebook-notebook-lg-gram-50",
                "preco" => 4652.97,
                "negociavel" => 1,
                "descricao" => "Notebook LG Gram, processador Intel i5, 8GB RAM, 512GB SSD.",
                "contato" => "contato50@exemplo.com",
                "views" => 339,
                "user_id" => 1,
                "estado_id" => 9,
                "categoria_id" => 3
            ]

        ];

        Anuncio::insert($anuncio);
    }
}
