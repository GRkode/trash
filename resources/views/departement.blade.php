@extends('layouts.app')

@section('ban')
    <h2>Départements</h2>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 p-5">
            <div class="map-region">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:amcharts="http://amcharts.com/ammap" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 800 1630">
                    <g>
                        <a xlink:href="{{route('departement.poub', ['id'=>19])}}" data-toggle="tooltip" data-placement="top" title="Donga" id="BJ-DO" >
                            <path class="land" d="M346.18,627.33L151.81,647.59L147.24,761.71L217.26,878.93L220.23,1007.32L278.04,1000.42L368.29,1035.53L372.88,957.89L331.22,926.92L335.51,875.09L314.57,842.02L319.74,806.76L353.01,797.38L364.22,726.26L343.24,686.98L346.18,627.33z"/>
                        </a>
                        <a xlink:href="{{route('departement.poub', ['id'=>14])}}" data-toggle="tooltip" data-placement="top" title="Atakora" id="BJ-AK" >
                            <path class="land" d="M326.31,257.01L218.77,268.38L176.68,245.82L148.29,294.84L97.66,302.46L103.6,327.41L78.62,333.73L92.1,364.02L57.59,350.14L52.89,378.2L36.83,373.27L0.25,534.75L151.81,647.59L346.18,627.33L391.84,600.04L369.66,529.77L388.57,498.9L390.66,408.7L414.86,381.92L326.31,257.01z"/>
                        </a>
                        <a xlink:href="{{route('departement.poub', ['id'=>21])}}" data-toggle="tooltip" data-placement="top" title="Mono" id="BJ-MO" >
                            <path class="land" d="M223.46,1629.68L319.11,1610.69L328.44,1500.85L215.54,1497.19L265.74,1613.11L223.46,1629.68z"/>
                        </a>
                        <a xlink:href="{{route('departement.poub', ['id'=>23])}}" data-toggle="tooltip" data-placement="top" title="Plateau" id="BJ-PL" >
                            <path class="land" d="M508.8,1251.48L451.77,1251.34L433.41,1312.43L461.03,1377.29L457.45,1425.81L477.28,1513.31L509.1,1553.74L528.21,1298.9L508.8,1251.48z"/>
                        </a>
                        <a xlink:href="{{route('departement.poub', ['id'=>24])}}" data-toggle="tooltip" data-placement="top" title="Zou" id="BJ-ZO" >
                            <path class="land" d="M433.41,1312.43L293.57,1260.77L224.29,1260.94L224.4,1283.5L294.45,1405.21L344.13,1445.15L422.33,1444.82L457.45,1425.81L461.03,1377.29L433.41,1312.43z"/>
                        </a>
                        <a xlink:href="{{route('departement.poub', ['id'=>22])}}" data-toggle="tooltip" data-placement="top" title="Ouémé" id="BJ-OU" >
                            <path class="land" d="M457.45,1425.81L422.33,1444.82L443.82,1582.11L448.07,1594.64L505.21,1589.3L509.1,1553.74L477.28,1513.31L457.45,1425.81z"/>
                        </a>
                        <a xlink:href="{{route('departement.poub', ['id'=>18])}}" data-toggle="tooltip" data-placement="top" title="Couffo" id="BJ-KO" >
                            <path class="land" d="M344.13,1445.15L294.45,1405.21L224.4,1283.5L225.03,1424.87L200.66,1426.14L215.54,1497.19L328.44,1500.85L344.13,1445.15z"/>
                        </a>
                        <a xlink:href="{{route('departement.poub', ['id'=>20])}}" data-toggle="tooltip" data-placement="top" title="Littoral" id="BJ-LI" >
                            <path class="land" d="M448.07,1594.64L443.82,1582.11L415.82,1597.65L448.07,1594.64z"/>
                        </a>
                        <a xlink:href="{{route('departement.poub', ['id'=>15])}}" data-toggle="tooltip" data-placement="top" title="Atlantique" id="BJ-AQ" >
                            <path class="land" d="M443.82,1582.11L422.33,1444.82L344.13,1445.15L328.44,1500.85L319.11,1610.69L415.82,1597.65L443.82,1582.11z"/>
                        </a>
                        <a xlink:href="{{route('departement.poub', ['id'=>17])}}" data-toggle="tooltip" data-placement="top" title="Collines" id="BJ-CO" >
                            <path class="land" d="M510.18,959.32L372.88,957.89L368.29,1035.53L278.04,1000.42L220.23,1007.32L224.29,1260.94L293.57,1260.77L433.41,1312.43L451.77,1251.34L508.8,1251.48L510.18,959.32z"/>
                        </a>
                        <a xlink:href="{{route('departement.poub', ['id'=>13])}}" data-toggle="tooltip" data-placement="top" title="Alibori" id="BJ-AL" >
                            <path class="land" d="M541.72,0L418.46,43.35L441,111.71L421.28,119.99L397,195.02L326.31,257.01L414.86,381.92L390.66,408.7L388.57,498.9L799.75,469.08L771.89,422.24L769.83,341.6L703.91,260.22L737.17,186.93L541.72,0z"/>
                        </a>
                        <a xlink:href="{{route('departement.poub', ['id'=>16])}}" data-toggle="tooltip" data-placement="top" title="Borgou" id="BJ-BO" >
                            <path class="land" d="M510.18,959.32L522.19,884.13L601.93,874.1L616.62,778.75L668.35,727.43L666.88,687.96L715.52,676.12L735.37,649.16L755.64,596.97L730.93,560.23L751.64,520.58L786.88,523.07L799.75,469.08L388.57,498.9L369.66,529.77L391.84,600.04L346.18,627.33L343.24,686.98L364.22,726.26L353.01,797.38L319.74,806.76L314.57,842.02L335.51,875.09L331.22,926.92L372.88,957.89L510.18,959.32z"/>
                        </a>
                    </g>
                </svg>
            </div>
        </div>
    </div>
@endsection
