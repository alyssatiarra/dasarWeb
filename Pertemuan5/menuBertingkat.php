<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "submenu" => [
            [
                "nama" => "Wisata",
                "submenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertigkat (array $menu){
    echo "<ul>";
    foreach ($menu as $key => $item){
        echo "<li> {$item['nama']}</li>";
        if (isset ($item ['submenu']) && is_array($item['submenu'])){
            tampilkanMenuBertigkat($item['submenu']);
        }
    }
    echo "</ul>";
}
tampilkanMenuBertigkat($menu);
?>