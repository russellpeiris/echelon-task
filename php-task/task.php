// function test_odd($var)
//   {
//   return($var & 1);
//   }

// $a1=array(1,3,2,3,4);
// print_r(array_filter($a1,"test_odd"));

// $cars = array("Volvo", "BMW", "Toyota");
// sort($cars);

<?php

$articles = [
    ["title" => "Sri Lanka’s economy update", "category" => "Business", "published_date" => "2025-02-01"],
    ["title" => "Stock market trends", "category" => "Finance", "published_date" => "2025-02-03"],
    ["title" => "New investment policies", "category" => "Business", "published_date" => "2025-02-02"],
    ["title" => "Tourism growth in 2025", "category" => "Travel", "published_date" => "2025-02-04"],
    ["title" => "Real estate market boom", "category" => "Business", "published_date" => "2025-01-28"],
    ["title" => "Foreign trade agreements", "category" => "Economy", "published_date" => "2025-01-25"],
    ["title" => "Tech startups in Sri Lanka", "category" => "Technology", "published_date" => "2025-01-30"],
    ["title" => "Small business tax changes", "category" => "Business", "published_date" => "2025-02-03"],
    ["title" => "Banking sector reforms", "category" => "Finance", "published_date" => "2025-02-02"],
    ["title" => "Gold prices fluctuate", "category" => "Finance", "published_date" => "2025-01-29"],
    ["title" => "Oil price hike impacts economy", "category" => "Economy", "published_date" => "2025-01-31"],
    ["title" => "Export sector growth", "category" => "Business", "published_date" => "2025-01-26"],
    ["title" => "New tax policies for 2025", "category" => "Business", "published_date" => "2025-01-27"],
    ["title" => "Infrastructure development projects", "category" => "Economy", "published_date" => "2025-02-03"],
    ["title" => "Tourism boost with new airline routes", "category" => "Travel", "published_date" => "2025-02-02"],
    ["title" => "Cryptocurrency regulations in Sri Lanka", "category" => "Finance", "published_date" => "2025-02-01"],
    ["title" => "Investment in renewable energy", "category" => "Business", "published_date" => "2025-01-24"],
    ["title" => "Sri Lanka’s trade deficit narrows", "category" => "Economy", "published_date" => "2025-01-29"],
    ["title" => "Tech exports reach new heights", "category" => "Technology", "published_date" => "2025-01-23"],
    ["title" => "Hotel industry sees record bookings", "category" => "Travel", "published_date" => "2025-01-30"]
];

function filterArray($category, $array) {

    $filteredArray = array_filter($array, function($item) use ($category) {
        return $item['category'] == $category;
    });

    usort($filteredArray, function($a, $b) {
        return strtotime($a['published_date']) - strtotime($b['published_date']);
    });

    return $filteredArray;
}

$businessArticles = filterArray('Business', $articles);
print_r($businessArticles);
?>