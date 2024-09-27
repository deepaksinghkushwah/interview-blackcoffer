<?php

use classes\DB;

include('config.php');
$link = DB::getInstance();
$charts = [];

$countries = [];
$records = $link->query("SELECT count(*) as total, country FROM `coffer` where country != '' GROUP BY country HAVING total < 20");
while ($res = $records->fetch_object()) {
  $data[] = $res->total;
  $countries[] = $res->country;
}
$chart = [
  'chart' => [
    'type' => 'line',
    'height' => 110,
    'sparkline' => [
      'enabled' => true
    ]    
  ],
  'series' => [
    ['name' => 'Countries','data' => $data,]
  ],
  'xaxis' => ['type' => 'category','categories' => $countries]
];
$charts['items']['countries'] = $chart;
unset($chart);
unset($data);
unset($countries);

$regions = [];
$records = $link->query("SELECT count(*) as total, region FROM `coffer` where region != '' GROUP BY region HAVING total < 20");
while ($res = $records->fetch_object()) {
  $data[] = $res->total;
  $regions[] = $res->region;
}
$chart = [
  'chart' => [
    'type' => 'bar',
    'height' => 110,
    'sparkline' => [
      'enabled' => true
    ]    
  ],
  'series' => [
    ['name' => 'Region','data' => $data,]
  ],
  'xaxis' => ['type' => 'category','categories' => $regions]
];
$charts['items']['regions'] = $chart;
unset($chart);
unset($data);
unset($regions);

$cities = [];
$records = $link->query("SELECT count(*) as total, `city` FROM `coffer` where city != '' GROUP BY city");
while ($res = $records->fetch_object()) {
  $data[] = $res->total;
  $cities[] = $res->city;
}
$chart = [
  'chart' => [
    'type' => 'area',
    'height' => 110,
    'sparkline' => [
      'enabled' => true
    ]    
  ],
  'series' => [
    ['name' => 'City','data' => $data,]
  ],
  'xaxis' => ['type' => 'category','categories' => $cities]
];
$charts['items']['cities'] = $chart;
unset($chart);
unset($data);
unset($cities);


$sources = [];
$records = $link->query("SELECT count(*) as total, `source` FROM `coffer` where `source` != '' GROUP BY `source`  limit 0,50");
while ($res = $records->fetch_object()) {
  $data[] = (int)$res->total;
  $sources[] = $res->source;
}
$chart = [
  'chart' => [
    'type' => 'donut',
    'height' => 300         
  ],
  'series' => $data,
  'labels' => $sources,
];
$charts['items']['sources'] = $chart;
unset($chart);
unset($data);
unset($sources);



// sector wise
$records = $link->query("SELECT COUNT(*) as `total`, `sector` FROM `coffer`  WHERE sector != '' GROUP BY `sector` ORDER BY `sector` ASC");
while ($res = $records->fetch_object()) {
  $data[] = ['x' => ucwords($res->sector), 'y' => $res->total];
}
$chart = [
  'chart' => [
    'type' => 'bar',
    'height' => '400px'
  ],
  'series' => [
    ['data' => $data]
  ],
  'xaxis' => ['type' => 'category']
];
$charts['items']['sectors'] = $chart;
unset($chart);
unset($data);


// topic wise
$records = $link->query("SELECT COUNT(*) as `total`, `topic` FROM `coffer` WHERE topic != '' GROUP BY `topic` HAVING total > 10 ORDER BY `topic` ASC;");
while ($res = $records->fetch_object()) {
  $data[] = ['x' => ucwords($res->topic), 'y' => $res->total];
}
$chart = [
  'chart' => [
    'type' => 'bar',
    'stacked' => true,
    'height' => '400px'
  ],
  'plotOptions' => [
    'bar' => [
      'horizontal' => true
    ],
    'dataLabels' => [
      'enable' => true,
      'position' => 'top'
    ]
  ],
  'series' => [
    ['data' => $data]
  ],
  'xaxis' => ['type' => 'category']
];
$charts['items']['topics'] = $chart;
unset($chart);
unset($data);




// overall
$records = $link->query("SELECT SUM(relevance) as relevance, SUM(intensity) as intensity, topic FROM `coffer` WHERE topic !='' group by topic");
$categories = [];
$series = [];
while ($res = $records->fetch_object()) {
  // $relevance = $link->query("SELECT SUM(relevance) as relevance, SUM(intensity) as intensity FROM `coffer` WHERE `topic` = '" . $res->topic . "'");
  // $object = $relevance->fetch_object();
   if ($res->intensity >= 10 || $res->relevance >= 10) {
    continue;
  } else {
    $series[] = ['name' => ucwords($res->topic), 'data' => [$res->relevance, $res->intensity]];
  }
}
$chart = [
  'series' => $series,
  'chart' => [
    'type' => 'bar',
    'height' => '400px',
    'stacked' => true,
  ],
  "plotOptions" => [
    'bar' => [
      'horizontal' => true,
    ],
  ],
  'fill' => ['opacity' => 1],
  'legend' => [
    'horizontalAlign' => 'left',
    'position' => 'top'
  ],
  'stroke' => [
    'width' => 1,
    'color' => ['$fff']
  ],
  'xaxis' => ['categories' => ['Relevance', 'Intensity']],
];
$charts['items']['overall'] = $chart;
unset($chart);
unset($data);






header('Content-Type: application/json');
echo json_encode($charts);
