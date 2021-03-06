<?php
if(!defined('checkaccess')){die('Direct access not permitted');}

// ### GENERAL FOR INVERTER #1
$INVNAME1="Aurora";
// ### SPECS
$PLANT_POWER1=4600;
$PHASE1=false;
$CORRECTFACTOR1=0.99;
$STRING1=2;
$PASSO1=9999999;
$SR1='no';

// #### PROTOCOL
$PORT1='/dev/solar';
$PROTOCOL1='aurora';
$DAEMONMODE1=false;
$ADR1=2;
$COMOPTION1='-Y10 -l10';
$SYNC1=true;
$SKIPMONITORING1=false;
$LOGCOM1=true;

// ### FRONT PAGE
$YMAX1=4500;
$YINTERVAL1=1000;
$PRODXDAYS1=20;

// ### INFO DETAILS
$PANELS11="10 Aleo S_18 230W Orientation: 90°, Pente: 45°";
$PANELS21="10 Aleo S_18 230W Orientation: 90°, Pente: 45°";

// ### DASHBOARD
$ARRAY1_POWER1=2300;
$ARRAY2_POWER1=2300;
$ARRAY3_POWER1=0;
$ARRAY4_POWER1=0;

// ### EXPECTED PRODUCTION
$EXPECT1_1=72.5;
$EXPECT2_1=125;
$EXPECT3_1=288;
$EXPECT4_1=420;
$EXPECT5_1=484;
$EXPECT6_1=495;
$EXPECT7_1=497;
$EXPECT8_1=415;
$EXPECT9_1=313;
$EXPECT10_1=199;
$EXPECT11_1=89;
$EXPECT12_1=60.5;

// ### NOTIFICATION
$EMAIL1="";
$REPORT1=false;
$PUSHO1=false;
$POUKEY1='abc123';

// ### ALARMS AND WARNINGS
$AWPOOLING1=5;
$DIGESTMAIL1=30;
$FILTER1="W011,W001,E011";
$SENDALARMS1=false;
$SENDMSGS1=false;
$NORESPM1=false;
$LOGMAW1=false;
$VGRIDUT1=208;
$VGRIDT1=250;
$VGRIDTM1=false;
$RISOT1=7;
$RISOTM1=false;
$ILEAKT1=15;
$ILEAKTM1=false;

$cfgver=1493967540;
?>
