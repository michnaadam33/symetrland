var density = 975; //w 60stopniach kg/m3


var changeZOM1 = function () {
    var hz = $(this).val();
    var vh = getVhZom1(hz);
    var tempZom = $("#temp-zom-1").val();
    var volumeD = vhToVt(vh, tempZom);
    var volumeM = dm3Tom3(volumeD);
    var weightK = m3ToKg(volumeM);
    var weightT = kgToT(weightK);

    $('#row-zom-1 .volumeM').html(volumeM.toFixed(2));
    $('#row-zom-1 .volumeD').html(volumeD.toFixed(2));
    $('#row-zom-1 .weightT').html(weightT.toFixed(3));
    $('#row-zom-1 .weightK').html(weightK.toFixed(3));

    changeSum();
};
var changeZOM2 = function () {
    var hz = $(this).val();
    var vh = getVhZom2(hz);
    var tempZom = $("#temp-zom-2").val();
    var volumeD = vhToVt(vh, tempZom);
    var volumeM = dm3Tom3(volumeD);
    var weightK = m3ToKg(volumeM);
    var weightT = kgToT(weightK);

    $('#row-zom-2 .volumeM').html(volumeM.toFixed(2));
    $('#row-zom-2 .volumeD').html(volumeD.toFixed(2));
    $('#row-zom-2 .weightT').html(weightT.toFixed(3));
    $('#row-zom-2 .weightK').html(weightK.toFixed(3));

    changeSum();
};
var changeZOM3 = function () {
    var hz = $(this).val();
    var vh = getVhZom3(hz);
    var tempZom = $("#temp-zom-3").val();
    var volumeD = vhToVt(vh, tempZom);
    var volumeM = dm3Tom3(volumeD);
    var weightK = m3ToKg(volumeM);
    var weightT = kgToT(weightK);

    $('#row-zom-3 .volumeM').html(volumeM.toFixed(2));
    $('#row-zom-3 .volumeD').html(volumeD.toFixed(2));
    $('#row-zom-3 .weightT').html(weightT.toFixed(3));
    $('#row-zom-3 .weightK').html(weightK.toFixed(3));

    changeSum();
};


$('#value-zom-1').change(changeZOM1);
$('#value-zom-2').change(changeZOM2);
$('#value-zom-3').change(changeZOM3);
$("#temp").change(function () {
    temp = $("#temp").val();
    $( ".value-zom" ).trigger( "change" );
});
$(".temp-zom").change(function () {
    $( ".value-zom" ).trigger( "change" );
});
var changeSum = function changeSum() {
    var sum = 0.0;
    $('.volumeM').each(function () {
        sum += parseFloat($(this).html());
    });
    $('#row-sum .volumeMSum').html(sum.toFixed(2));

    var sum = 0.0;
    $('.volumeD').each(function () {
        sum += parseFloat($(this).html());
    });
    $('#row-sum .volumeDSum').html(sum.toFixed(2));

    var sum = 0.0;
    $('.weightT').each(function () {
        sum += parseFloat($(this).html());
    });
    $('#row-sum .weightTSum').html(sum.toFixed(3));

    var sum = 0.0;
    $('.weightK').each(function () {
        sum += parseFloat($(this).html());
    });
    $('#row-sum .weightKSum').html(sum.toFixed(3));
};
function m3ToKg(m3) {
    return m3*density;
}

function kgToT(kg) {
    return kg*0.001;
}

function dm3Tom3(dm3) {
    return dm3*0.001;
}

function vhToVt(vh, temp) { //Obliczanie z uwzględnieniem temperatury
    return vh * (1+((0.000033)*(temp-20)));
}
function getVhZom1(hz) {
    if(hz>10000){
        alertShow("Za duży pomiar Zom1!");
        return 0;
    }
    if(hz == 10000){
        return 1017551;
    }else if (hz>=8980){
        return 915620 + ((hz-8980)*100.9125);
    }else if (hz>=7480){
        return 764485 + ((hz-7480)*100.7565);
    }else if (hz>=5980){
        return 612676 + ((hz-5980)*101.2058);
    }else if (hz>=4480){
        return 461728 + ((hz-4480)*100.6323);
    }else if (hz>=2980){
        return 309742 + ((hz-2980)*101.3241);
    }else if (hz>=1480){
        return 157785 + ((hz-1480)*101.3047);
    }else if (hz>=1030){
        return 111932 + ((hz-1030)*101.8950);
    }else if (hz>=430){
        return 53101 + ((hz-430)*98.0517);
    }else if (hz>=10){
        return 10600 + ((hz-10)*101.1926);
    }
    alertShow("Za mały pomiar Zom1!");
    return 0;
}
function getVhZom2(hz) {
    if(hz>10000){
        alertShow("Za duży pomiar Zom2!");
        return 0;
    }
    if(hz == 10000){
        return 1024166;
    }else if (hz>=8980){
        return 920753 + ((hz-8980)*101.3850);
    }else if (hz>=7480){
        return 769057 + ((hz-7480)*101.1306);
    }else if (hz>=5980){
        return 616954 + ((hz-5980)*101.4022);
    }else if (hz>=4480){
        return 465151 + ((hz-4480)*101.2022);
    }else if (hz>=2980){
        return 312562 + ((hz-2980)*101.7259);
    }else if (hz>=1480){
        return 160645 + ((hz-1480)*101.2780);
    }else if (hz>=1030){
        return 114901 + ((hz-1030)*101.6536);
    }else if (hz>=430){
        return 56214 + ((hz-430)*97.8103);
    }else if (hz>=1){
        return 12900 + ((hz-1)*100.9660);
    }
    alertShow("Za mały pomiar Zom2!");
    return 0;
}
function getVhZom3(hz) {
    if(hz>11570){
        alertShow("Za duży pomiar Zom3!");
        return 0;
    }
    if(hz == 11570){
        return 2253126;
    }else if (hz>=10060){
        return 1962593 + ((hz-10060)*192.4054);
    }else if (hz>=8730){
        return 1707301 + ((hz-8730)*191.9491);
    }else if (hz>=7230){
        return 1419685 + ((hz-7230)*191.7441);
    }else if (hz>=5730){
        return 1131606 + ((hz-5730)*192.0524);
    }else if (hz>=3980){
        return 794478 + ((hz-3980)*192.6450);
    }else if (hz>=2000){
        return 412542 + ((hz-2000)*192.8967);
    }else if (hz>=1100){
        return 238915 + ((hz-1100)*192.9191);
    }else if (hz>=500){
        return 125470 + ((hz-500)*189.0757);
    }else if (hz>=0){
        return 29300 + (hz*192.3391);
    }
    alertShow("Za mały pomiar Zom3!");
    return 0;
}

function alertShow(msg) {
    $('#alert p').html(msg);
    $('#alert').show();
}