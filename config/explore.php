<?php

return [
  "qfq" =>
  [
    [
      "name" => "Par statut",
      "url" => "#",
      "class" => "col-6",
      "entries" => [
        ["name" => "projet (21)", "url" => "/?statut=projet", "class" => "col-12" ],
        ["name" => "préproduction (2)", "url" => "/?statut=preproduction", "class" => "col-12" ],
        ["name" => "production", "url" => "/?statut=production", "class" => "col-12" ],
        ["name" => "postproduction", "url" => "/?statut=postproduction", "class" => "col-12" ],
        ["name" => "terminé", "url" => "/?statut=termine", "class" => "col-12" ],
        ["name" => "en recherche de co-producteurs", "url" => "/?statut=recherche", "class" => "col-12" ]
      ]
    ]
  ],
  "colnum" => [
    [
      "name" => "par clientèle cible",
      "url" => "#",
      "class" => "col-6",
      "entries" => [
        ["name" => "jeunesse", "url" => "/production/?clientele=jeunesse", "class" => "col-12" ],
        ["name" => "scolaire", "url" => "/production/?clientele=scolaire", "class" => "col-12" ],
        ["name" => "grand public", "url" => "/production/?clientele=grand-public", "class" => "col-12" ],
        ["name" => "adultes", "url" => "/production/?clientele=adultes", "class" => "col-12" ],
        ["name" => "professionnels", "url" => "/production/?clientele=professionnels", "class" => "col-12" ]
      ]
    ]
  ]
];
