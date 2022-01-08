<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8' />
  <title>Points on a map</title>
  <meta name='viewport' content='width=device-width, initial-scale=1' />
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
  <style>
    body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }

    .geocoder {
      position: absolute;
      z-index: 1;
      width: 100%;
      left: 50%;
      margin-left: -25%;
      top: 10px;
    }

    .mapboxgl-ctrl-geocoder {
      min-width: 100%;
    }

    h3 {
      background-color: rgba(0, 255, 0, 0.3);
    }

    p {

    }
  </style>

</head>
<body>
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">

  <div id='map'></div>


  <script>
    // The value for 'accessToken' begins with 'pk...'
    mapboxgl.accessToken = 'pk.eyJ1Ijoid2luc3Rvbm1jZ2VlIiwiYSI6ImNrdGZsaGFzbDA5ZTkydm9pb3hpcTltN2UifQ.iaFejEop2PfzE1vqtNYyQA'; 
    const map = new mapboxgl.Map({
      container: 'map',
      // Replace YOUR_STYLE_URL with your style URL.
      style: 'mapbox://styles/winstonmcgee/cky2lbgs23ecu14pg8qv5gc2e', 
      center: [120.866928, 14.280600],
      zoom: 15
    });

    const customData = {

        "features": [
        {
          "type": "Feature",
          "properties": {
            "title": "Alfamart - Inocencio",
            "description": "Alfamart is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.877585,
            14.252291
            ],
            "type": "Point"
          },
          "id": "0074dacc4538fc2471793201ef1ab266"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Conchu Elementary School",
            "description": "Conchu Elementary School is a public school at Brgy. Conchu, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.882786,
            14.260594
            ],
            "type": "Point"
          },
          "id": "0108afe418a04a67a76c9b5e9bcd6203"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "South Star Drug",
            "description": "South Star Drug is a drug store that offers a variety of products such as medicines and groceries."
          },
          "geometry": {
            "coordinates": [
            120.868165,
            14.281785
            ],
            "type": "Point"
          },
          "id": "0289a3a2ce4768b0b9f3b8db36369206"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Lapidario Elementary School",
            "description": "Lapidario Elementary School is a public school at Lapidario."
          },
          "geometry": {
            "coordinates": [
            120.867135,
            14.271703
            ],
            "type": "Point"
          },
          "id": "05da443d9839bf8815791d5d61843594"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Manuel V. Santiago Medical Center",
            "description": "MV Santiago Medical Center is a private hospital located at Brgy. De Ocampo, Trece Martires city."
          },
          "geometry": {
            "coordinates": [
            120.866203,
            14.294187
            ],
            "type": "Point"
          },
          "id": "0acfa33339bdbe3ff91bd2c9f8d58776"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Camp Melencio C. De Sagun",
            "description": "Camp Melencio C. De Sagun is a police department."
          },
          "geometry": {
            "coordinates": [
            120.874385,
            14.291919
            ],
            "type": "Point"
          },
          "id": "0c6a92f957d007c62d7f025a3f0b97ff"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Amore International College",
            "description": "Amore International College is a private school."
          },
          "geometry": {
            "coordinates": [
            120.872737,
            14.271298
            ],
            "type": "Point"
          },
          "id": "0d0c787a5c446fb1c75ad9f6157deb64"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Cabuco Barangay Hall",
            "description": "Cabuco Barangay Hall is a government community facility where meetings and important activities and events are usually held.barangay hall where in "
          },
          "geometry": {
            "coordinates": [
            120.844625,
            14.279029
            ],
            "type": "Point"
          },
          "id": "0dd0bfe59dc551d93fc03cb4219a77b0"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Provincial Government of Cavite",
            "description": "The provincial government of Cavite has a colorful history. During the greater part of the Spanish regime, the provincial administration was handled by the alcalde mayor, who was the representative of the governor and captain-general in Manila. As the alter ego of the Chief executive of the country, the alcalde mayor exercised over all executive, judicial, and legislative functions within his jurisdiction. He was a petty captain-general because he held under his orders the armed forces of the province for purposes of defense and maintenance of peace and order. By the Decree of June 25, 1847, the title of alcalde mayor in Cavite was changed to a politico-military governor. He was also tripped of judicial functions."
          },
          "geometry": {
            "coordinates": [
            120.8667,
            14.27984
            ],
            "type": "Point"
          },
          "id": "0f9571b5526107c281969955f0a5f306"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Tradition Homes",
            "description": "Tradition Homes is a subdivision located at Brgy. Inocencio, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.874943,
            14.263169
            ],
            "type": "Point"
          },
          "id": "0fe559ac293ad3221e4bc9c16c6753ee"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Shell",
            "description": "Shell is a gas station that sells fuel for vehicles."
          },
          "geometry": {
            "coordinates": [
            120.887013,
            14.28055
            ],
            "type": "Point"
          },
          "id": "12b964f704d280d034c5a8b223555745"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Waltermart - Trece Martires",
            "description": "Waltermart - Trece Martires is a shopping mall with restaurants and groceries."
          },
          "geometry": {
            "coordinates": [
            120.870602,
            14.280248
            ],
            "type": "Point"
          },
          "id": "172178a6c38c75701bc498cf25637238"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires City Fire Station",
            "description": "Trece Martires City Fire Station is where firefighters wait until they are called to put out a fire."
          },
          "geometry": {
            "coordinates": [
            120.868384,
            14.280469
            ],
            "type": "Point"
          },
          "id": "18a53ad3bf2c551391cdfb1d39b2b120"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Sampaguita Church",
            "description": "Sampaguita Church is a church located at Brgy. inocencio, Trece Martires City."
          },
          "geometry": {
            "coordinates": [
            120.872827,
            14.261745
            ],
            "type": "Point"
          },
          "id": "1b359d39b097b160b938de672f4fb487"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Department of Education, Trece Martires",
            "description": "Department of Education. Schools Division Office of Cavite City"
          },
          "geometry": {
            "coordinates": [
            120.867794,
            14.278408
            ],
            "type": "Point"
          },
          "id": "1d9ac2cecf9f313eaca471f502dce577"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Philippine Statistics Authority Trece Martires City",
            "description": "The PSA  shall primarily be responsible for all national censuses and surveys, sectoral statistics, community-based statistics, consolidation of selected administrative recording systems, and compilation of accounts in Trece Martires"
          },
          "geometry": {
            "coordinates": [
            120.866831,
            14.27927
            ],
            "type": "Point"
          },
          "id": "1de3736cbcee51db2a4bdb7ce3fd0220"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "7-Eleven - Perez",
            "description": "7-Eleven is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.890312,
            14.28201
            ],
            "type": "Point"
          },
          "id": "1e2c13a76b9c790967ad066f3668d5e1"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Ben's Halo-halo",
            "description": "Ben's Halo-halo is a food business that offers halo halo and other foods."
          },
          "geometry": {
            "coordinates": [
            120.867945,
            14.288304
            ],
            "type": "Point"
          },
          "id": "2211f16226a785923106ffd736274a45"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Aguado",
            "description": "Barangay in Trece Martires"
          },
          "geometry": {
            "coordinates": [
            120.865235,
            14.256919
            ],
            "type": "Point"
          },
          "id": "221659964df19d3bbe5b7ce0c8f9a478"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Korea-Philippines Friendship Medical Arts Center",
            "description": "It is a medical arts center of the hospital."
          },
          "geometry": {
            "coordinates": [
            120.870419,
            14.276068
            ],
            "type": "Point"
          },
          "id": "23a3c18b244a1e9dfaa84ffeb9b93bc1"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires Capitol Park",
            "description": "Capitol Park is a park in Trece Martires. Capitol Park is situated nearby to Department of Public Works and Highways, and close to Cavite Provincial Capitol."
          },
          "geometry": {
            "coordinates": [
            120.866114,
            14.280052
            ],
            "type": "Point"
          },
          "id": "2a15b00c28795a80ad65fbd2f8ec4bb9"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Public Market- Trece Martires",
            "description": "Public Market- Trece Martires is a public market containing small vendors that sells different groceries and products."
          },
          "geometry": {
            "coordinates": [
            120.867827,
            14.282443
            ],
            "type": "Point"
          },
          "id": "2f045e6db649492f7cbad13db0e7bf63"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Gen. Emilio Aguinaldo Memorial Hospital",
            "description": "General Emilio Aguinaldo Memorial Hospital is a Korea-Philippines Friendship Hospital located in Trece Martires Cavite."
          },
          "geometry": {
            "coordinates": [
            120.869538,
            14.276253
            ],
            "type": "Point"
          },
          "id": "301d83fcc8459936b455e7d0725d3d75"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires City National High School",
            "description": "A public national high school in Trece Martires"
          },
          "geometry": {
            "coordinates": [
            120.864598,
            14.280209
            ],
            "type": "Point"
          },
          "id": "3485b555dabb665231db78fd76fb4a5e"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Luciano Elementary School",
            "description": "Luciano Elementary School is a public school."
          },
          "geometry": {
            "coordinates": [
            120.86861,
            14.278004
            ],
            "type": "Point"
          },
          "id": "3787340f8e3aaf674d3dbdbade2f7a70"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Agricultural Training Institute Region IV-A",
            "description": "It is mandated to train agricultural extension workers and their beneficiaries and lead in the delivery of e-Extension services for agriculture and fisheries in the region."
          },
          "geometry": {
            "coordinates": [
            120.867498,
            14.273625
            ],
            "type": "Point"
          },
          "id": "37dcefcf2fe6e7a0c507bfbdde7dc557"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Dei Gracia Academy",
            "description": "Dei Gracia Academy is a private school in Cabuco, Trece Martires City."
          },
          "geometry": {
            "coordinates": [
            120.852305,
            14.276397
            ],
            "type": "Point"
          },
          "id": "39f442ef943721a918dcce793a78694f"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Hugo Perez Elementary School",
            "description": "Hugo Perez Elementary School is a public school located at Brgy Perez, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.891953,
            14.278955
            ],
            "type": "Point"
          },
          "id": "3a95abc954448706909a702d7f012f60"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Kingdom Hall of Jehovahs Witnesses",
            "description": "Kingdom Hall of Jehovahs Witnesses is a church located at Conchu, Trece."
          },
          "geometry": {
            "coordinates": [
            120.879349,
            14.279633
            ],
            "type": "Point"
          },
          "id": "3a96fc7e36e913df65539817228488cb"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "7-Eleven",
            "description": "7-Eleven is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.868855,
            14.28012
            ],
            "type": "Point"
          },
          "id": "3c0983fad5a8fa21d6a0e1275622d4a7"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Kumpares",
            "description": "Kumpares is a food restaurant that offers pares as main dishes."
          },
          "geometry": {
            "coordinates": [
            120.869665,
            14.278531
            ],
            "type": "Point"
          },
          "id": "3e86b1b624237aa7497fef67e32ab202"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Alfamart - Aguado",
            "description": "Alfamart is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.866409,
            14.254166
            ],
            "type": "Point"
          },
          "id": "40112dc54f6efe7e1a7440815c88a92e"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Lapidario Brgy. Center",
            "description": "Lapidario Brgy. Center is a barangay hall of Lapidario."
          },
          "geometry": {
            "coordinates": [
            120.866372,
            14.273744
            ],
            "type": "Point"
          },
          "id": "408536bdfc265fd60617afa775154c38"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "St. Jude Parish School",
            "description": "St. Jude Parish School is a catholic school at Trece Martires City."
          },
          "geometry": {
            "coordinates": [
            120.869353,
            14.281989
            ],
            "type": "Point"
          },
          "id": "408a5a63120aea32722b77fccca959e3"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "SMDC Hope Residences - Trece Martires",
            "description": "SMDC Hope Residences - Trece Martires is a condominium unit."
          },
          "geometry": {
            "coordinates": [
            120.865627,
            14.280538
            ],
            "type": "Point"
          },
          "id": "459b427bd6db676aca17f05dfd41a02c"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Jetti",
            "description": "Jetti is a gas station that sells fuel for vehicles."
          },
          "geometry": {
            "coordinates": [
            120.86922,
            14.278617
            ],
            "type": "Point"
          },
          "id": "46c7c880ada8679ff0c316f1d29ab632"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Luciano Public Cemetery",
            "description": "It is public cemetery located in Luciano, Trece Martires City."
          },
          "geometry": {
            "coordinates": [
            120.870376,
            14.272716
            ],
            "type": "Point"
          },
          "id": "48f71f66be524667054f9c6f1457fb77"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Kangahan Elementary School",
            "description": "Kangahan Elementary School is a public school located in Cabuco, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.848516,
            14.280123
            ],
            "type": "Point"
          },
          "id": "4b4e4373ec314437df5bf4d6e500c0e7"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "PS Bank",
            "description": "PS Bank is a bank for money transactions,"
          },
          "geometry": {
            "coordinates": [
            120.871962,
            14.280568
            ],
            "type": "Point"
          },
          "id": "4bc44a50f2d4e9105864ef4e4f6a822c"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "NSN Enterprises- Trece",
            "description": "NSN Enterprises- Trece is a shopping mall."
          },
          "geometry": {
            "coordinates": [
            120.868153,
            14.28186
            ],
            "type": "Point"
          },
          "id": "4c0b901deed6b8a91dff8c10b2436e6b"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Jollibee Trece Martires",
            "description": "Jollibee Trece Martires is a fast food restaurant."
          },
          "geometry": {
            "coordinates": [
            120.868236,
            14.281573
            ],
            "type": "Point"
          },
          "id": "4cc1db9b3da914aaeb2096a3bc837f51"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "La Paz Homes",
            "description": "La Paz Homes is a subdivision located at Brgy. Cabezas, Trece"
          },
          "geometry": {
            "coordinates": [
            120.890267,
            14.269914
            ],
            "type": "Point"
          },
          "id": "506b02f09745ea251245d1addf3f8240"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires Police Station",
            "description": "Trece Martires Police Station is a police headquarters"
          },
          "geometry": {
            "coordinates": [
            120.877129,
            14.282569
            ],
            "type": "Point"
          },
          "id": "580bda3a558a1dad28743dd76d1bd119"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Beverly Homes",
            "description": "Beverly Homes is a subdivision located at Brgy. Perez, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.888887,
            14.284826
            ],
            "type": "Point"
          },
          "id": "5816d03781b2994c2773e4eefaf0241b"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Puregold Jr.",
            "description": "Puregold Jr. is a grocery mart in Brgy. Perez, Trece"
          },
          "geometry": {
            "coordinates": [
            120.889635,
            14.282373
            ],
            "type": "Point"
          },
          "id": "58d9e2aecc724d309d1a44c43de1d20c"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Alfamart - Luciano",
            "description": "Alfamart is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.869358,
            14.278407
            ],
            "type": "Point"
          },
          "id": "5c05d05aaf124ef6365fd2db9fc53409"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "ERS Maternity & Pediatric Care Clinic",
            "description": "ERS Maternity & Pediatric Care Clinic is a clinic for Maternity and Pediatrics.."
          },
          "geometry": {
            "coordinates": [
            120.869385,
            14.277674
            ],
            "type": "Point"
          },
          "id": "5e9fa89d6d6364e9f4000bf0dabf466e"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "The Generika Drug Store",
            "description": "The Generika Drug Store is a drug store located at Brgy. Perez, Trece."
          },
          "geometry": {
            "coordinates": [
            120.890801,
            14.282498
            ],
            "type": "Point"
          },
          "id": "6028787dd981fe24e699cfd1eedcaf5b"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "PLDT - Trece Martires",
            "description": "PLDT - Trece Martires is a telecommunication that offers digital services for internet connection needs."
          },
          "geometry": {
            "coordinates": [
            120.868352,
            14.280807
            ],
            "type": "Point"
          },
          "id": "6200700d6b2a251f33002f867fd58ece"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Cavite Provincial Jail",
            "description": "Prisoners are held in this City Jail."
          },
          "geometry": {
            "coordinates": [
            120.866458,
            14.274121
            ],
            "type": "Point"
          },
          "id": "63e6d68593d7ea78aa39c86e0e45ee78"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Eugenio Cabezas National High School",
            "description": "Eugenio Cabezas National High School is a public school located at Brgy. Cabezas, Trece Martires."
          },
          "geometry": {
            "coordinates": [
            120.89604,
            14.261844
            ],
            "type": "Point"
          },
          "id": "6447b32296fb7df53f8048c946cf6521"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Philhealth ",
            "description": "PhilHealth implements the National Health Insurance Program that aims to provide Filipinos with financial assistance and access to affordable health services. It covers hospital costs, subsidy for room and boarding, medicine, and professional services."
          },
          "geometry": {
            "coordinates": [
            120.881691,
            14.28042
            ],
            "type": "Point"
          },
          "id": "690c0c31c6d7925ac798242270ad7735"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Green Forbes City",
            "description": "Green Forbes City is a subdivision located at Brgy, Perez, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.888891,
            14.286757
            ],
            "type": "Point"
          },
          "id": "6aa4178dcc21d167cbe8caa2611ae5d2"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Mercury Drug",
            "description": "Mercury Drug is the leading trusted and caring drugstore in the Philippines."
          },
          "geometry": {
            "coordinates": [
            120.868856,
            14.280566
            ],
            "type": "Point"
          },
          "id": "70060b1c275554485c96f2c141d2f6d5"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires Forest Park",
            "description": "Forest Park Trece Martires is one of the popular Tour Agency located in Marcus High way Brgy Luciano ,Trece Martires"
          },
          "geometry": {
            "coordinates": [
            120.869554,
            14.27399
            ],
            "type": "Point"
          },
          "id": "70d350aadb8bc83272300a320fb7a331"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Luzon Development Bank",
            "description": "Luzon Development Bank provide banking services to cater to the needs of agricultural and industrial enterprises."
          },
          "geometry": {
            "coordinates": [
            120.868898,
            14.280234
            ],
            "type": "Point"
          },
          "id": "712e639cb01fa55c65666f09701c47d3"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Seaoil - Trece Martires",
            "description": "Seaoil - Trece Martires is a gas station for vehicle fuels."
          },
          "geometry": {
            "coordinates": [
            120.873545,
            14.270664
            ],
            "type": "Point"
          },
          "id": "72e7e91205b3905bde6a4bd32208cc53"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Heavenly Garden Memorial Park",
            "description": "HEAVENLY GARDEN MEMORIAL PARK is a cemetery located in Trece Martires City."
          },
          "geometry": {
            "coordinates": [
            120.874336,
            14.303734
            ],
            "type": "Point"
          },
          "id": "74c8256b2bd4169ab9b42bad435dcf58"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Korea-Philippines Friendship Hospital",
            "description": "Korea-Philippines Friendship Hospital is one of the hospital of Cavite."
          },
          "geometry": {
            "coordinates": [
            120.870507,
            14.275645
            ],
            "type": "Point"
          },
          "id": "76194e7872c49957f909fefcc48e5a2d"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "SM City Trece Martires",
            "description": "Trece Martires SM Mall for shopping, entertainment, theatres, etc."
          },
          "geometry": {
            "coordinates": [
            120.865941,
            14.281583
            ],
            "type": "Point"
          },
          "id": "78a9ae8711d75b2272f07e1279e0a4f2"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Aliang Elementary School",
            "description": "Aliang Elementary School is a public school located at Brgy. Gregorio, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.871313,
            14.2877
            ],
            "type": "Point"
          },
          "id": "791331accaffb44f0b12341cd7615613"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Cavite Provincial Gymnasium - Trece Martires",
            "description": "Cavite Provincial Gymnasium is a community center in Trece Martires."
          },
          "geometry": {
            "coordinates": [
            120.867706,
            14.281031
            ],
            "type": "Point"
          },
          "id": "7ad01828f898e8b74b1b84655c1bd839"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Petron",
            "description": ""
          },
          "geometry": {
            "coordinates": [
            120.8775,
            14.252626
            ],
            "type": "Point"
          },
          "id": "7ba9aaf298f16ddb0fe9104b1d4b00b5"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Monument of the Thirteen Martyrs of Cavite",
            "description": "The Monument of the Thirteen Martyrs of Cavite is a monument werein Filipino patriots in Cavite, Philippines were executed by musketry on September 12, 1896, for cooperating with the Katipunan during the Philippine Revolution against Spain."
          },
          "geometry": {
            "coordinates": [
            120.870705,
            14.28092
            ],
            "type": "Point"
          },
          "id": "7c4229e3d44a3d0c48805bbc9a15c4cd"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires City Senior High School",
            "description": "Trece Martires City Senior High School is a public school for Senior High School located at Brgy. Gregorio, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.876362,
            14.282969
            ],
            "type": "Point"
          },
          "id": "7d0446eba591899b353f2a66dd1e087f"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Barangay Hall Inocencio",
            "description": "Barangay Hall Inocencio is a government community facility where meetings and important activities and events are usually held.barangay hall where in "
          },
          "geometry": {
            "coordinates": [
            120.877398,
            14.253948
            ],
            "type": "Point"
          },
          "id": "7e6e62865fe5ae0bc0a8e8d6151dd209"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Registry of Deeds, Region 4,Trece Martirez",
            "description": "When there is a transaction involving the title, be it sale, mortgage, or any transaction that requires annotation, pursuant to Sections 54 and 57 of PD 1529, the Office of the Register of Deeds through its Records Officer is required to find the title to ascertain that it still exists because when it cannot be found, the office has to recommend the filing in court of a petition for the reconstitution of the lost title before any transaction can be had thereon."
          },
          "geometry": {
            "coordinates": [
            120.868419,
            14.278935
            ],
            "type": "Point"
          },
          "id": "7f123a6548d2c312eb6215bbd9307638"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Sherwood Hills Golf Club",
            "description": "Sherwood Hills Golf Club is a golf club located at  Brgy. Cabezas, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.892205,
            14.256622
            ],
            "type": "Point"
          },
          "id": "8092eb3d63787aec536741d39e7045b4"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Department of Labor and Employment",
            "description": "The DOLE is the national government agency mandated to formulate and implement policies and programs, and serve as the policy-advisory arm of the Executive Branch in the field of labor and employment."
          },
          "geometry": {
            "coordinates": [
            120.88207,
            14.280329
            ],
            "type": "Point"
          },
          "id": "818ad9b05be61a9bc582709fd8b224c9"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Chowking",
            "description": "Fastfood Restaurant"
          },
          "geometry": {
            "coordinates": [
            120.868004,
            14.281995
            ],
            "type": "Point"
          },
          "id": "84e58bee3b8fac9bebf238de25ec2e3b"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Alpha Gym",
            "description": "Alpha Gym is a fitness center."
          },
          "geometry": {
            "coordinates": [
            120.868084,
            14.284436
            ],
            "type": "Point"
          },
          "id": "85fa648a139809167b35b63115a6f9a6"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Bagong Pook Elementary School",
            "description": "Bagong Pook Elementary School is a public elementary school located in Barangay Inocencio, Trece Martires."
          },
          "geometry": {
            "coordinates": [
            120.876543,
            14.261516
            ],
            "type": "Point"
          },
          "id": "86d0feebdcbe66cadde749eb5c263495"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Cavite State University - Trece Martires City Campus",
            "description": "Cavite State University - Trece Martires City Campus is a state college located at  Brgy. Osorio, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.876185,
            14.283184
            ],
            "type": "Point"
          },
          "id": "87b99f989f6b3921e51420efe2a75192"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Puregold San Agustin",
            "description": "Puregold San Agustin is a shopping center for groceries in Trece Martires "
          },
          "geometry": {
            "coordinates": [
            120.871774,
            14.280887
            ],
            "type": "Point"
          },
          "id": "88b7b8962f68c16be93bbbf84cf8fff3"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Tower Mall - Trece Martires",
            "description": "Mall for eat/drink"
          },
          "geometry": {
            "coordinates": [
            120.867661,
            14.281712
            ],
            "type": "Point"
          },
          "id": "8d2805a00706ea4e5d2562a0961d5f06"
        },
        {
          "type": "Feature",
          "properties": {
            "place_name": "Lapidario, Trece Martires City, Cavite, Philippines",
            "title": "Lapidario",
            "description": "Barangay in Trece Martires"
          },
          "geometry": {
            "coordinates": [
            120.87,
            14.26
            ],
            "type": "Point"
          },
          "id": "8d9a689ccf4aaa97fe406db75667da32"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Jesus The Blessed King International Ministries Inc.",
            "description": "Places Of Worship in Marcius Ave, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.868298,
            14.273923
            ],
            "type": "Point"
          },
          "id": "902b1069a4c8d8999016bd3702a227f7"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Heavenly Garden Memorial Park",
            "description": "Heavenly Garden Memorial Park is a cemetery located at Brgy. Osorio, Trece Martires"
          },
          "geometry": {
            "coordinates": [
            120.879762,
            14.280161
            ],
            "type": "Point"
          },
          "id": "908ffa6ee32ca9c3715b25fe7016944b"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "BJMP Trece Martires City Jail",
            "description": "BJMP Trece Martires City Jail is a city jail of prisoners of Trece Maritres"
          },
          "geometry": {
            "coordinates": [
            120.876647,
            14.282421
            ],
            "type": "Point"
          },
          "id": "92a93c29c07690c6fa0ce06ed54f44cd"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Funeraria Mabini",
            "description": "Funeraria Mabini provides funeral serivices."
          },
          "geometry": {
            "coordinates": [
            120.874816,
            14.267411
            ],
            "type": "Point"
          },
          "id": "92d68517f0febcee7e76e9da0c756d42"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "8-Ten Fuel",
            "description": "8-Ten Fuel is a gas station that sells fuel for vehicles."
          },
          "geometry": {
            "coordinates": [
            120.868734,
            14.279572
            ],
            "type": "Point"
          },
          "id": "9d6c00f26b31035619cf6da21ad74c9c"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires City National High School - Conchu Annex",
            "description": "Trece Martires City National High School - Conchu Annex is a public school located at Brgy. Conchu, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.883391,
            14.245392
            ],
            "type": "Point"
          },
          "id": "a18053801ceefe519efd07b478d306a1"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires City Elementary School",
            "description": "Trece Martires City Elementary School is a public school in Trece."
          },
          "geometry": {
            "coordinates": [
            120.868689,
            14.287257
            ],
            "type": "Point"
          },
          "id": "a473698edd5c0d82a7dd07da67c27dda"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Aguado Elementary School",
            "description": "Aguado Elementary School"
          },
          "geometry": {
            "coordinates": [
            120.864676,
            14.256628
            ],
            "type": "Point"
          },
          "id": "a4aaf1d68afc1153837dcbaa6b418a1b"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Red Ribbon - Trece Martires",
            "description": "Red Ribbon is a bakeshop which produces cakes and pastries."
          },
          "geometry": {
            "coordinates": [
            120.86818,
            14.281983
            ],
            "type": "Point"
          },
          "id": "a9da26756dc0e8086c6f938caf45b6b1"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Lapidario Elementary School",
            "description": "Lapidario Elementary School is a public school at Lapidario."
          },
          "geometry": {
            "coordinates": [
            120.86621,
            14.271996
            ],
            "type": "Point"
          },
          "id": "ae180b4c15ff7c5a187e38ecffe46c67"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "JRS Express - Trece Martires",
            "description": "JRS Express - Trece Martires is a logistics service providers in the Philippines."
          },
          "geometry": {
            "coordinates": [
            120.869103,
            14.27968
            ],
            "type": "Point"
          },
          "id": "b127895f11c561588be1454c3e2318a6"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Bureau of Internal Revenue - Revenue District Office No. 54A-Trece Martirez",
            "description": "Administers and enforces internal revenue laws including the assessment and collection of all internal revenue taxes, charges and fees from taxpayers within the region's jurisdiction, as well as ensures proper and effective implementation of National Office's policies and programs within the Regional Office."
          },
          "geometry": {
            "coordinates": [
            120.868422,
            14.279915
            ],
            "type": "Point"
          },
          "id": "b14e247526c538e0320c1652acc2334c"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Brocks Burger",
            "description": "Brocks Burger is a food business that offers burgers."
          },
          "geometry": {
            "coordinates": [
            120.86972,
            14.278196
            ],
            "type": "Point"
          },
          "id": "b326f0e04acca6fe9c210d001a502cb0"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Cavite Center for Mental Health",
            "description": "Cavite Center for Mental Health is a public hospital. "
          },
          "geometry": {
            "coordinates": [
            120.86922,
            14.277187
            ],
            "type": "Point"
          },
          "id": "b571dc67916486aa817280cddd4dcc1e"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires City Hall",
            "description": "The Trece Martires City Hall is the official seat of government of the City of Trece Martires"
          },
          "geometry": {
            "coordinates": [
            120.870347,
            14.281255
            ],
            "type": "Point"
          },
          "id": "b66b849c95f0739978f4bd94fbd3e2b8"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Betterlife Trading",
            "description": "Hardware store"
          },
          "geometry": {
            "coordinates": [
            120.871202,
            14.281059
            ],
            "type": "Point"
          },
          "id": "b693a2c5985e6380e4ba5fc34df9378a"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "7-Eleven - De Ocampo",
            "description": "7-Eleven is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.866398,
            14.294094
            ],
            "type": "Point"
          },
          "id": "b6ae9bbc2b3a79b035283b171bc3a6ce"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Mayang Falls",
            "description": "Mayang Falls Tourist Attraction"
          },
          "geometry": {
            "coordinates": [
            120.887762,
            14.250863
            ],
            "type": "Point"
          },
          "id": "b71116302435d29f4e60e70907449075"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Cavite Government Center Building",
            "description": "The central government building of Trece Martires "
          },
          "geometry": {
            "coordinates": [
            120.867053,
            14.279321
            ],
            "type": "Point"
          },
          "id": "ba82fa42d36865000f653ea1b97616ca"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Luis Aguado National High School",
            "description": "Luis Aguado National High School is a public school located at Brgy. Aguado, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.867819,
            14.252932
            ],
            "type": "Point"
          },
          "id": "bcedc2d99268c6c861d546c2cc8a2abd"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Sustamina Meatshop - Luciano",
            "description": "Sustamina Meatshop - Luciano is a  meatshop and supermarket."
          },
          "geometry": {
            "coordinates": [
            120.866598,
            14.273779
            ],
            "type": "Point"
          },
          "id": "be5a09c68b0744a9bc44674c346dfb28"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Reginaville 2000",
            "description": "Reginaville 200 is a subdivision located at Brgy. Inocencio, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.879057,
            14.252807
            ],
            "type": "Point"
          },
          "id": "c3e1fcb41281c098ddd56ccd3805c7f9"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "BDO - Trece Martires ",
            "description": "BDO - Trece Martires is a bank for money transactions,"
          },
          "geometry": {
            "coordinates": [
            120.868219,
            14.281906
            ],
            "type": "Point"
          },
          "id": "c647b121d4be285231db2d856e8848c4"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires People's Park",
            "description": "Premier sports and recreational destination in the city. Includes a gymnasium, outdoor amphitheater, grand plaza, bike lanes, jogger's lane, skate park, children's playground, outdoor fitness area and an outdoor dining area. "
          },
          "geometry": {
            "coordinates": [
            120.859395,
            14.283541
            ],
            "type": "Point"
          },
          "id": "c9b1e2508be8d286905c9a815741cf00"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Francisco Osorio National High School",
            "description": "Francisco Osorio National High School is a public school located at Brgy. Osorio, Trece Martires."
          },
          "geometry": {
            "coordinates": [
            120.88001,
            14.292007
            ],
            "type": "Point"
          },
          "id": "ca6c690fa664efb33c3171edd1a69435"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Shell",
            "description": "Shell is a gas station that sells fuel for vehicles."
          },
          "geometry": {
            "coordinates": [
            120.869286,
            14.282398
            ],
            "type": "Point"
          },
          "id": "cb76e66334084a7e78780b005e170d1b"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Amore Leisure Park",
            "description": "Amore Leisure Park is a private resort located at Brgy. Aguado, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.866261,
            14.250578
            ],
            "type": "Point"
          },
          "id": "cceb70b7f589f218ba6132cc9be8c36c"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Alfamart - Perez",
            "description": "Alfamart is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.890579,
            14.282383
            ],
            "type": "Point"
          },
          "id": "ccfb2d5546f0f66c462aab5082b47f91"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires City College",
            "description": "City college of trece martires"
          },
          "geometry": {
            "coordinates": [
            120.871605,
            14.27342
            ],
            "type": "Point"
          },
          "id": "cd4dac3507a82afe7400895b71228f33"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Imus Metro Electric Bike",
            "description": "Bicycle store"
          },
          "geometry": {
            "coordinates": [
            120.871124,
            14.281112
            ],
            "type": "Point"
          },
          "id": "ce050027685180a98f38cf0d6414142f"
        },
        {
          "type": "Feature",
          "properties": {
            "place_name": "Conchu, Trece Martires City, Cavite, Philippines",
            "title": "Conchu",
            "description": "Suburb in Trece Martires"
          },
          "geometry": {
            "coordinates": [
            120.88,
            14.25
            ],
            "type": "Point"
          },
          "id": "d07545c2310b21a914895a69784013cd"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Colegio de Amore",
            "description": "Colegio de Amore is a college school of Amore."
          },
          "geometry": {
            "coordinates": [
            120.873437,
            14.271431
            ],
            "type": "Point"
          },
          "id": "d398d906910db0394cf62e0657900058"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Department of Environment and Natural Resources (DENR) - PENRO Cavite",
            "description": "The DENR is mandated to be the primary agency responsible for the conservation, management, development, and proper use of the country's environment and natural resources."
          },
          "geometry": {
            "coordinates": [
            120.876529,
            14.282666
            ],
            "type": "Point"
          },
          "id": "d4a164caf561f4438e37d83e6bb642a5"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Alfamart ",
            "description": "Alfamart is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.872916,
            14.271741
            ],
            "type": "Point"
          },
          "id": "d4d104f75819ae4e7eaccd89756a0078"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "7-Eleven - San Agustin",
            "description": "7-Eleven is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.868555,
            14.282025
            ],
            "type": "Point"
          },
          "id": "d890bd9586b9016d917753698133d952"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Super8 ",
            "description": "Super8 is a convenience store for groceries, etc."
          },
          "geometry": {
            "coordinates": [
            120.870886,
            14.27479
            ],
            "type": "Point"
          },
          "id": "dbb5e58f0fa52a632ebc8f7bd6a516c2"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "7-Eleven",
            "description": "7-Eleven is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.868249,
            14.281378
            ],
            "type": "Point"
          },
          "id": "dc12ebf871af78e968605cbec9ecc90d"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Palawit Elementary School",
            "description": "Palawit Elementary School is a public school located at Brgy. Cabezas, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.896155,
            14.261549
            ],
            "type": "Point"
          },
          "id": "dca279290614e8f249ee6b975bbc1817"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Karlaville Park Homes",
            "description": "Karlaville Park Homes is a subdivision located at Brgy. Perez, Trece Martires"
          },
          "geometry": {
            "coordinates": [
            120.888167,
            14.275986
            ],
            "type": "Point"
          },
          "id": "e45d8b09af17c872e2d686192ba93777"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Notre Dame Academy",
            "description": "Notre Dame of Trece Martires is a private school located at Trece Martires City, Cavite. "
          },
          "geometry": {
            "coordinates": [
            120.849527,
            14.282168
            ],
            "type": "Point"
          },
          "id": "e4f771a57164edacea6d7615f6cab982"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Dunkin' Donuts",
            "description": "Dunkin' Donuts offers donuts, coffee and beverages."
          },
          "geometry": {
            "coordinates": [
            120.868215,
            14.281706
            ],
            "type": "Point"
          },
          "id": "eaa87fa18fba66f9d7bb66679db7c6be"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "7-Eleven - Luciano",
            "description": "7-Eleven is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.871056,
            14.274879
            ],
            "type": "Point"
          },
          "id": "ed606c801f51ccbb34f8b3fa53c21641"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Landbank - Trece Martires",
            "description": "Landbank - Trece Martires is a universal bank for money transactions,"
          },
          "geometry": {
            "coordinates": [
            120.868915,
            14.280005
            ],
            "type": "Point"
          },
          "id": "ee13a80949266f11957418b6a2a0b412"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Treceño Medical Pavillion",
            "description": "Treceño Medical Pavilion is a health clinic in Trece Martires."
          },
          "geometry": {
            "coordinates": [
            120.869982,
            14.276653
            ],
            "type": "Point"
          },
          "id": "ef1f01cedf89d0e450c5688eabc6c288"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "St. Thomas Becket Academy",
            "description": "St. Thomas Becket Academy is a private school in Brgy. Inocencio, Trece Martires."
          },
          "geometry": {
            "coordinates": [
            120.877663,
            14.252101
            ],
            "type": "Point"
          },
          "id": "f04691b1d0487fe8f5e7084a4eaae851"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Alfamart ",
            "description": "Alfamart is a convenience store for food, snacks, drinks and more."
          },
          "geometry": {
            "coordinates": [
            120.877035,
            14.260619
            ],
            "type": "Point"
          },
          "id": "f04e4b483d57c0e956ce5b423f517756"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Kapilya ng Birhen ng Santo Rosario",
            "description": "Kapilya ng Birhen ng Santo Rosario is a church located at Brgy. Perez, Trece Martires"
          },
          "geometry": {
            "coordinates": [
            120.890593,
            14.268038
            ],
            "type": "Point"
          },
          "id": "f0c3c1366bc4fcfc50eb3a18f1c69098"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Trece Martires City National High School - Cabezas Annex",
            "description": "It is an annex school from Trece Martires City National High School located at Brgy. Cabezas, Trece Martires City"
          },
          "geometry": {
            "coordinates": [
            120.896035,
            14.262186
            ],
            "type": "Point"
          },
          "id": "f24667e10f673368c5068dcede4972e8"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Sustamina",
            "description": "Sustamina is a meat shop located at Trece Martires."
          },
          "geometry": {
            "coordinates": [
            120.86829,
            14.284509
            ],
            "type": "Point"
          },
          "id": "f3ffca3d8a02721e03255072e9e38009"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Saint Jude Parish Church",
            "description": "Saint Jude Parish Church is a Catholic Church located at San Agustin, Trece Martires city."
          },
          "geometry": {
            "coordinates": [
            120.869711,
            14.281788
            ],
            "type": "Point"
          },
          "id": "f66288f3206a2da0c06d41312220579d"
        },
        {
          "type": "Feature",
          "properties": {
            "title": "Pepen Prints",
            "description": "Pepen Prints offers a services for printing needs."
          },
          "geometry": {
            "coordinates": [
            120.870933,
            14.281387
            ],
            "type": "Point"
          },
          "id": "fd7026a36d1618061d06bbda06db3e42"
        }
        ],
        "type": "FeatureCollection"
      };


      function forwardGeocoder(query) {
          const matchingFeatures = [];
          for (const feature of customData.features) {
          // Handle queries with different capitalization
          // than the source data by calling toLowerCase().
          if (
            feature.properties.title
            .toLowerCase()
            .includes(query.toLowerCase())
            ) {

          feature['place_name'] = `${feature.properties.title}`;
          feature['center'] = feature.geometry.coordinates;
          feature['place_type'] = ['park'];
          matchingFeatures.push(feature);
      }
    }
    return matchingFeatures;
  }


      map.on('click', (event) => {
      // If the user clicked on one of your markers, get its information.
      const features = map.queryRenderedFeatures(event.point, {
        layers: ['trece-3-tileset'] // replace with your layer name
      });
      if (!features.length) {
        return;
      }
      const feature = features[0];

      const popup = new mapboxgl.Popup({ offset: [0, -15] })
      .setLngLat(feature.geometry.coordinates)
      .setHTML(
        `<h3 >${feature.properties.title}</h3><p>${feature.properties.description}</p>`
        )
      .addTo(map);
    });


      map.addControl(
        new MapboxGeocoder({
          accessToken: mapboxgl.accessToken,
          localGeocoder: forwardGeocoder,
          zoom: 14,
          placeholder: 'Search Trece Martires',
          mapboxgl: mapboxgl
        })
        );
      </script> 
    </body>
    </html>
