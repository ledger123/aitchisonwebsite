<?php
	include("phpinclude/main.php");
	$title="Aitchison : Famous Aitchisonians";
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("phpinclude/headercontrol.php");  ?>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title;?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/> 
    <!-- Bootstrap progressbar  --> 
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <!-- Lato for Title -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
   <!-- END PRELOADER -->

   <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
   <!-- END SCROLL TOP BUTTON -->

    <!-- Start header -->
    <?php 
        include("phpinclude/header.php");
    ?>
    <!-- End header -->
  <!-- Start login modal window -->
  <?php 
  	include("phpinclude/login_modal_window.php");
  ?>
  <!-- End login modal window -->
  <!-- BEGIN MENU -->
  <?php 
  	include("phpinclude/menuarea.php");
  ?>
  <!-- END MENU -->   
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Famous Aitchisonians</h2>
              
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
               <!-- <li><a href="#">Home</a></li>
                <li class="active">Feature</li>-->
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
  <!-- Start Feature -->
  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <!--<h2 class="title"></h2>
            <span class="line"></span>-->
            <?php /*?><p align="justify">Aitchison College&rsquo;s focus on building character and devotion to duty shines through in success stories in almost every sphere of human activity. A brief list includes: former President Sardar Farooq Ahmad Khan Leghari, former Prime Ministers Malik Feroz Khan Noon, Mir Zafarullah Khan Jamali, Imran Khan, various provincial Chief Ministers and Governors, and former Speaker of the National Assembly, Sardar Ayaz Sadiq, Ministerial appointments Shah Mahmood Qureshi, Pervez Khattack and Hashim Jawan Bakht. Renowned lawyers Justice Mansoor Ali Shah (Supreme Court), Tariq Khawaja Raheem, Aitzaz Ahsan and Salman Akram Raja will all vouch for the influence Aitchison had in shaping them. Celebrities like Yousuf Salahuddin (impresario extraordinaire), Nawab Iftikhar Ali Khan Pataudi (Indian Cricket Team Captain), and Ejazul Hasan (Pakistan’s leading senior artist), and Sayed Babar Ali (business leader and philanthropist) once wore the College blazer.</p>
            <p align="justify">Their example sets a high bar that serves to motivate Aitchisonians to strive for the extraordinary. It speaks volumes for the School&rsquo;s ability to draw the best out each of its students.</p><?php */?>
			  <h2 class="titile" style="color: black;">Distinguished Old Boys</h2>
			<?php /*?><div>
				<table class="table table-bordered" style="margin-top:15px;width:100%;">
<thead>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
	<th scope="row" colspan="3" style="text-align: center;">Politicians</th>
</tr>
<tr style="background-color:#0C1B76;color:#fff;height:auto;">
	<th scope="row" colspan="3" style="text-align: center;">Prime Ministers</th>
</tr>	
<tr style="background-color:#0F0456;color:#fff;height:auto;">
	<th scope="row" style="text-align: center;">Sr.</th>
	<th scope="row" style="text-align: center;">Name</th>
	<th style="text-align: center;">AC  Tenure</th></tr>
</thead>
<tbody>
<tr>
<td nowrap="" style="text-align: center;">1</td>
<td nowrap="" style="text-align: left;">Maharaja Sir Bhupinder Singh (Late)</td>
<td nowrap="" style="text-align: center;">1904-1908</td>	
</tr>
<tr>
  <td nowrap="" style="text-align: center;">2</td>
  <td nowrap="" style="text-align: left;">Maharaja Sir Yadavinder Singh </td>
  <td nowrap="" style="text-align: center;">1927-1930</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">3</td>
  <td nowrap="" style="text-align: left;">Malik Sir  Feroze Khan Noon</td>
  <td nowrap="" style="text-align: center;">1906 -1912</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">4</td>
  <td nowrap="" style="text-align: left;"> Mir Zafarullah Khan Jamali (Late)</td>
  <td nowrap="" style="text-align: center;">1960-1961</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">5</td>
  <td nowrap="" style="text-align: left;">Imran Ahmed Khan Niazi</td>
  <td nowrap="" style="text-align: center;">1960 - 1969</td>
</tr>
<tr style="background-color:#0C1B76;color:#fff;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Presidents</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">6</td>
  <td nowrap="" style="text-align: left;">Sardar Farooq    Ahmad Khan Leghari (Late)</td>
  <td nowrap="" style="text-align: center;">1949 -1958</td>
</tr>
<tr style="background-color:#0C1B76;color:#fff;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Chief Minister</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">7</td>
  <td nowrap="" style="text-align: left;">Sir Sikandar Hayat Khan (Late)</td>
  <td nowrap="" style="text-align: center;">&nbsp;</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">8</td>
  <td nowrap="" style="text-align: left;">Nawab    Akbar Khan Bugti (Late)</td>
  <td nowrap="" style="text-align: center;">1941-1944</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">9</td>
  <td nowrap="" style="text-align: left;">Nawab    Zulfiqar Ali Khan Magsi</td>
  <td nowrap="" style="text-align: center;">1961-1971</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">10</td>
  <td nowrap="" style="text-align: left;">Ameer    Haider Khan Hoti</td>
  <td nowrap="" style="text-align: center;">1981-1990</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">11</td>
  <td nowrap="" style="text-align: left;">Pervez    Khan Khattak</td>
  <td nowrap="" style="text-align: center;">1962-1969</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">12</td>
  <td nowrap="" style="text-align: left;">Lt.    Col. Malik Khizar Hayat Tiwana </td>
  <td nowrap="" style="text-align: center;">1908-1916</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">13</td>
  <td nowrap="" style="text-align: left;">Major    General (R)&nbsp;Khurshid Ali Khan (Late)</td>
  <td nowrap="" style="text-align: center;">1940-1949</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">14</td>
  <td nowrap="" style="text-align: left;">Nawab    Sadiq Hussain Qureshi  (Late)</td>
  <td nowrap="" style="text-align: center;">1937-1939</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">15</td>
  <td nowrap="" style="text-align: left;">Mian    Muhammad Afzal Hayat  (Punjab)</td>
  <td nowrap="" style="text-align: center;">1948-1958</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">16</td>
  <td nowrap="" style="text-align: left;">Dost    Muhammad Khosa  (Punjab)</td>
  <td nowrap="" style="text-align: center;">1979-1992</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">17</td>
  <td nowrap="" style="text-align: left;">Mir    Jam Ghulam Qadir Khan (Late)</td>
  <td nowrap="" style="text-align: center;">1936-1938</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">18</td>
  <td nowrap="" style="text-align: left;">Mir    Taj Mohammad Jamali (Late)</td>
  <td nowrap="" style="text-align: center;">1953-1962</td>
</tr>
<tr style="background-color:#0C1B76;color:#fff;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Governors</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">19</td>
  <td nowrap="" style="text-align: left;">General&nbsp;Nawab&nbsp;Sir    Sadiq Muhammad Khan V Abbasi (Late) </td>
  <td nowrap="" style="text-align: center;">1915 - 1921</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">20</td>
  <td nowrap="" style="text-align: left;">Nawab    Malik Amir Muhammad Khan (Late) </td>
  <td nowrap="" style="text-align: center;">1920    - 1928</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">21</td>
  <td nowrap="" style="text-align: left;">Nawab    Mohammad Abbas Abbasi (Late)</td>
  <td nowrap="" style="text-align: center;">1934-1941</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">22</td>
  <td nowrap="" style="text-align: left;">Harcharan    Singh Brar (Late)</td>
  <td nowrap="" style="text-align: center;">1937-1943</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">23</td>
  <td nowrap="" style="text-align: left;">Amir-ud-din    Ahmad Khan (Late)</td>
  <td nowrap="" style="text-align: center;">1926    - 1929</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">24</td>
  <td nowrap="" style="text-align: left;">Sardar    Zulfiqar Ali Khosa</td>
  <td nowrap="" style="text-align: center;">1946-1954</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">25</td>
  <td nowrap="" style="text-align: left;">Khawaja    Ahmad Tariq Rahim </td>
  <td nowrap="" style="text-align: center;">1949-1960</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">26</td>
  <td nowrap="" style="text-align: left;">Makhdoom    Syed Ahmed Mehmood</td>
  <td nowrap="" style="text-align: center;">1971-1981</td>
</tr>
<tr style="background-color:#0C1B76;color:#fff;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Speaker    National Assembly of Pakistan</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">27</td>
  <td nowrap="" style="text-align: left;">Syed    Fakhar Imam</td>
  <td nowrap="" style="text-align: center;">1950-1955</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">28</td>
  <td nowrap="" style="text-align: left;"> Chaudhry Aitzaz Ahsan</td>
  <td nowrap="" style="text-align: center;">1954-1963</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">29</td>
  <td nowrap="" style="text-align: left;">Chaudhry    Hamid Nasir Chattha </td>
  <td nowrap="" style="text-align: center;">1955-1962</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">30</td>
  <td nowrap="" style="text-align: left;">Sardar    Ayaz Sadiq</td>
  <td nowrap="" style="text-align: center;">1971-1972</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">31</td>
  <td nowrap="" style="text-align: left;">Jan    Muhammad Khan Jamali</td>
  <td nowrap="" style="text-align: center;">1961-1972</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">32</td>
  <td nowrap="" style="text-align: left;">Sardar    Akhtar Mengal</td>
  <td nowrap="" style="text-align: center;">&nbsp;</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Prominent Lawyers</th>
</tr>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">33</td>
  <td nowrap="" style="text-align: left;">Justice    S. S. Sodhi</td>
  <td nowrap="" style="text-align: center;">1942-1947</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">34</td>
  <td nowrap="" style="text-align: left;">Abubakr    I. Chundgrigar</td>
  <td nowrap="" style="text-align: center;">1951-1955</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">35</td>
  <td nowrap="" style="text-align: left;">Jawwad    Sajjad Khawaja</td>
  <td nowrap="" style="text-align: center;">1960-1967</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">36</td>
  <td nowrap="" style="text-align: left;">JusticeSyed    Mansoor Ali Shah</td>
  <td nowrap="" style="text-align: center;">1968-1980</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">37</td>
  <td nowrap="" style="text-align: left;">Justice    Umar Ata Bandial  </td>
  <td nowrap="" style="text-align: center;">1964-1975</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">38</td>
  <td nowrap="" style="text-align: left;">Justice    Yahya Afridi </td>
  <td nowrap="" style="text-align: center;">1976-1982</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">39</td>
  <td nowrap="" style="text-align: left;">Justice    Munib Akhtar</td>
  <td nowrap="" style="text-align: center;">1973-1981</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">40</td>
  <td nowrap="" style="text-align: left;">Waleed    Iqbal</td>
  <td nowrap="" style="text-align: center;">1973-1984</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">41</td>
  <td nowrap="" style="text-align: left;">Muhamad    Yusuf Khan Khattak ( Late)</td>
  <td nowrap="" style="text-align: center;">&nbsp;</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">42</td>
  <td nowrap="" style="text-align: left;">Ali    Sibtain Fazli</td>
  <td nowrap="" style="text-align: center;">1960-1969</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">43</td>
  <td nowrap="" style="text-align: left;">Sardar    Muhammad Iqbal</td>
  <td nowrap="" style="text-align: center;">1974</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">44</td>
  <td nowrap="" style="text-align: left;">Sardar    Gurbakhsh Singh (Late)</td>
  <td nowrap="" style="text-align: center;">1926-1933</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">45</td>
  <td nowrap="" style="text-align: left;">Khan    Abdul Majid Khan Tarin (Late)</td>
  <td nowrap="" style="text-align: center;">&nbsp;</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">46</td>
  <td nowrap="" style="text-align: left;"> Rafay Alam</td>
  <td nowrap="" style="text-align: center;">1981-1993</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Pakistan's Leading Artist (International Level)</th>
</tr>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">47</td>
  <td nowrap="" style="text-align: left;">Armaghan    Shaan Shahid</td>
  <td nowrap="" style="text-align: center;">1977-1985</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">48</td>
  <td nowrap="" style="text-align: left;">Sarmad    Sultan Khoosat&nbsp;</td>
  <td nowrap="" style="text-align: center;">1985-1995</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">49</td>
  <td nowrap="" style="text-align: left;">Syed    Fahd Hussain</td>
  <td nowrap="" style="text-align: center;">1980-1986</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">50</td>
  <td nowrap="" style="text-align: left;">Mubasher    Lucman</td>
  <td nowrap="" style="text-align: center;">1972-1978</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">51</td>
  <td nowrap="" style="text-align: left;">Hassan    Waqas Rana</td>
  <td nowrap="" style="text-align: center;">&nbsp;</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">52</td>
  <td nowrap="" style="text-align: left;">Jahan-e-Khalid</td>
  <td nowrap="" style="text-align: center;">1992-2004</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">53</td>
  <td nowrap="" style="text-align: left;"> Mansoor Ali Khan </td>
  <td nowrap="" style="text-align: center;">1985-1995</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">54</td>
  <td nowrap="" style="text-align: left;">Kamran    Shahid</td>
  <td nowrap="" style="text-align: center;">Sep1968-October1968</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">55</td>
  <td nowrap="" style="text-align: left;">Yawar    Hayat Khan (Late)</td>
  <td nowrap="" style="text-align: center;">1950-1959</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Musicians (International Level)</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">56</td>
  <td nowrap="" style="text-align: left;">Ali    Aziz Sethi </td>
  <td nowrap="" style="text-align: center;"> 1997-2002</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">57</td>
  <td nowrap="" style="text-align: left;">Taimoor    Moeen Salahuddin Mooroo</td>
  <td nowrap="" style="text-align: center;">1990-2001</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">58</td>
  <td nowrap="" style="text-align: left;">Farhad    Humayun</td>
  <td nowrap="" style="text-align: center;">1984-1994</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">59</td>
  <td nowrap="" style="text-align: left;">Haider    Rehman</td>
  <td nowrap="" style="text-align: center;">1999-2001</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">60</td>
  <td nowrap="" style="text-align: left;">Mansoor    Lashari</td>
  <td nowrap="" style="text-align: center;">1999-2011</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">61</td>
  <td nowrap="" style="text-align: left;">Omar    Mukhtar</td>
  <td nowrap="" style="text-align: center;">2002-2014</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Interational  / National    Sportsman</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">62</td>
  <td nowrap="" style="text-align: left;">Nawab    Mohammad Iftikhar Ali Khan Siddiqui Pataudi (Late)</td>
  <td nowrap="" style="text-align: center;">1919-1926</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">63</td>
  <td nowrap="" style="text-align: left;">Raja    Bhalindra Singh (Late)</td>
  <td nowrap="" style="text-align: center;">1930-1936</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">64</td>
  <td nowrap="" style="text-align: left;">Ahmad    Humayun Zaman Khan (Late)</td>
  <td nowrap="" style="text-align: center;">1944    -1952</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">65</td>
  <td nowrap="" style="text-align: left;">Syed&nbsp;Zulfiqar&nbsp;Ali    Shah&nbsp;Bokhari (Late)</td>
  <td nowrap="" style="text-align: center;">1942-1949</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">66</td>
  <td nowrap="" style="text-align: left;">Ahmad    Javed Zaman Khan</td>
  <td nowrap="" style="text-align: center;">1947-1957</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">67</td>
  <td nowrap="" style="text-align: left;">Majid    Jahangir Khan</td>
  <td nowrap="" style="text-align: center;">1960-1964</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">68</td>
  <td nowrap="" style="text-align: left;">Imran    Khan</td>
  <td nowrap="" style="text-align: center;">1960-1969</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">69</td>
  <td nowrap="" style="text-align: left;">Rameez    Hasan Raja</td>
  <td nowrap="" style="text-align: center;">1976-1978</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">70</td>
  <td nowrap="" style="text-align: left;">Wahab    Riaz </td>
  <td nowrap="" style="text-align: center;">1990-1998</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">71</td>
  <td nowrap="" style="text-align: left;">Bazid    Khan</td>
  <td nowrap="" style="text-align: center;">1995-1997</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">72</td>
  <td nowrap="" style="text-align: left;">Javed Burki</td>
  <td nowrap="" style="text-align: center;">&nbsp;</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Hockey</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">73</td>
  <td nowrap="" style="text-align: left;">Saiyed    Mohammed Jaffer (Late)</td>
  <td nowrap="" style="text-align: center;">1919-1928</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">74</td>
  <td nowrap="" style="text-align: left;">Qasim    Zia</td>
  <td nowrap="" style="text-align: center;">1967-1979</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">75</td>
  <td nowrap="" style="text-align: left;">Hassan    Sardar</td>
  <td nowrap="" style="text-align: center;">1974-1976</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">76</td>
  <td nowrap="" style="text-align: left;">Ijaz    Ahmad</td>
  <td nowrap="" style="text-align: center;">1977-1988</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">77</td>
  <td nowrap="" style="text-align: left;">Ayaz    Mahmood</td>
  <td nowrap="" style="text-align: center;">1978-1979</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Tennis</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">78</td>
  <td nowrap="" style="text-align: left;">Jamil    Ahmad</td>
  <td nowrap="" style="text-align: center;">1966-1978</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">79</td>
  <td nowrap="" style="text-align: left;">Rashid    Ahmad Malik</td>
  <td nowrap="" style="text-align: center;">1978-1979</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">80</td>
  <td nowrap="" style="text-align: left;">Haseeb    Aslam</td>
  <td nowrap="" style="text-align: center;">1981-1983</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Athletics</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">81</td>
  <td nowrap="" style="text-align: left;">Azhar    Husain (Late)</td>
  <td nowrap="" style="text-align: center;">1948-1955</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">82</td>
  <td nowrap="" style="text-align: left;">Aminullah    Khan Raisani</td>
  <td nowrap="" style="text-align: center;">1962-1970</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">83</td>
  <td nowrap="" style="text-align: left;">Salman    Iqbal Butt</td>
  <td nowrap="" style="text-align: center;">1966-1977</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">84</td>
  <td nowrap="" style="text-align: left;">Arif    Husain</td>
  <td nowrap="" style="text-align: center;">1974-1987</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Golf</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">85</td>
  <td nowrap="" style="text-align: left;">Tariq    Sayeed Saigol</td>
  <td nowrap="" style="text-align: center;">1956-1967</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Football</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">86</td>
  <td nowrap="" style="text-align: left;">Makhdoom    Syed Faisal Saleh Hayat</td>
  <td nowrap="" style="text-align: center;">1960-1970</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Squash</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">87</td>
  <td nowrap="" style="text-align: left;">Malik    Amjad Ali Noon</td>
  <td nowrap="" style="text-align: center;">1962-1973</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Swimming</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">88</td>
  <td nowrap="" style="text-align: left;">Asif    Amin Arshad</td>
  <td nowrap="" style="text-align: center;">1977-1979</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">89</td>
  <td nowrap="" style="text-align: left;">Bilal    Amir Bux</td>
  <td nowrap="" style="text-align: center;">1980-1989</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">90</td>
  <td nowrap="" style="text-align: left;">Aftab    Arshad</td>
  <td nowrap="" style="text-align: center;">1970-1982</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Riding</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">91</td>
  <td nowrap="" style="text-align: left;">Prince    Malik Ata</td>
  <td nowrap="" style="text-align: center;">1952    - 1963</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Business Leader (Entrepreneur)</th>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">92</td>
  <td nowrap="" style="text-align: left;">Naranjan    Singh Gill</td>
  <td nowrap="" style="text-align: center;">1918-1922</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">93</td>
  <td nowrap="" style="text-align: left;">Sayed    Babar Ali</td>
  <td nowrap="" style="text-align: center;">1934    - 1943</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">94</td>
  <td nowrap="" style="text-align: left;">Syed    Muhammad Mohsin</td>
  <td nowrap="" style="text-align: center;">1938-1948</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">95</td>
  <td nowrap="" style="text-align: left;">Major&nbsp;Narindar    Saroop&nbsp;</td>
  <td nowrap="" style="text-align: center;">1946-1947</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">96</td>
  <td nowrap="" style="text-align: left;">Shahzada    Alam Monnoo</td>
  <td nowrap="" style="text-align: center;">1948-1953</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">97</td>
  <td nowrap="" style="text-align: left;">Riaz    A. Gul</td>
  <td nowrap="" style="text-align: center;">1951-1961</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">98</td>
  <td nowrap="" style="text-align: left;">Nadeem    Ahmad Mumtaz</td>
  <td nowrap="" style="text-align: center;">1958-1970</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">99</td>
  <td nowrap="" style="text-align: left;">Iqbal    Zafaruddin Ahmed</td>
  <td nowrap="" style="text-align: center;">1958-1963</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">100</td>
  <td nowrap="" style="text-align: left;">Azam    Jamil</td>
  <td nowrap="" style="text-align: center;">1962-1964</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">101</td>
  <td nowrap="" style="text-align: left;">Qais    Rehman</td>
  <td nowrap="" style="text-align: center;">1966-1979</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">102</td>
  <td nowrap="" style="text-align: left;">Aamir    H. Shirazi</td>
  <td nowrap="" style="text-align: center;">1971-1979</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">103</td>
  <td nowrap="" style="text-align: left;">Usman    Haq</td>
  <td nowrap="" style="text-align: center;">1971-1980</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">104</td>
  <td nowrap="" style="text-align: left;">Humayun    Mazhar</td>
  <td nowrap="" style="text-align: center;">1974-1979</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">105</td>
  <td nowrap="" style="text-align: left;">Omar    Saeed </td>
  <td nowrap="" style="text-align: center;">1975-1987</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">106</td>
  <td nowrap="" style="text-align: left;">Taimur    Dawood</td>
  <td nowrap="" style="text-align: center;">1979-1991</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">107</td>
  <td nowrap="" style="text-align: left;">Mahmud    Yar Hiraj </td>
  <td nowrap="" style="text-align: center;">1994</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">108</td>
  <td nowrap="" style="text-align: left;">Ahsan    Suhail Mannan</td>
  <td nowrap="" style="text-align: center;">1987-1998</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">109</td>
  <td nowrap="" style="text-align: left;">Luqman    Ali Afzal</td>
  <td nowrap="" style="text-align: center;">1983-1997</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">110</td>
  <td nowrap="" style="text-align: left;">Ali    Salman Siddique</td>
  <td nowrap="" style="text-align: center;">1983-1995</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">111</td>
  <td nowrap="" style="text-align: left;">Nauman    Ahmed Khan</td>
  <td nowrap="" style="text-align: center;">1985-1995</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">112</td>
  <td nowrap="" style="text-align: left;">Adnan    Ahmed Khan&nbsp;</td>
  <td nowrap="" style="text-align: center;">1985-1993</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">113</td>
  <td nowrap="" style="text-align: left;">Osman    Khalid Waheed </td>
  <td nowrap="" style="text-align: center;">1987-1988</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">114</td>
  <td nowrap="" style="text-align: left;">Adil    K. Sattar</td>
  <td nowrap="" style="text-align: center;">1988-1992</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">115</td>
  <td nowrap="" style="text-align: left;"> Ahmed Khan </td>
  <td nowrap="" style="text-align: center;">1989-1997</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">116</td>
  <td nowrap="" style="text-align: left;">Sufi    Muhammad Farrukh Amin</td>
  <td nowrap="" style="text-align: center;">1999-2001</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">117</td>
  <td nowrap="" style="text-align: left;"> Usman Hamid Malik, </td>
  <td nowrap="" style="text-align: center;">1982-1994</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">118</td>
  <td nowrap="" style="text-align: left;">Awais    Karal </td>
  <td nowrap="" style="text-align: center;">1982-1994</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">119</td>
  <td nowrap="" style="text-align: left;">Atif    Aslam Bajwa</td>
  <td nowrap="" style="text-align: center;">1976</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">120</td>
  <td nowrap="" style="text-align: left;">Yasser    Usman Toor</td>
  <td nowrap="" style="text-align: center;">1981-1993</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">121</td>
  <td nowrap="" style="text-align: left;">Faraan    Ahmed Irfan</td>
  <td nowrap="" style="text-align: center;">1991-    2000</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">122</td>
  <td nowrap="" style="text-align: left;">Nauman    Ahmed Khawaja</td>
  <td nowrap="" style="text-align: center;">1995</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">123</td>
  <td nowrap="" style="text-align: left;"> Faisal Dawood </td>
  <td nowrap="" style="text-align: center;">1983-1995</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">124</td>
  <td nowrap="" style="text-align: left;">Yousuf    Abdullah</td>
  <td nowrap="" style="text-align: center;">&nbsp;</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">125</td>
  <td nowrap="" style="text-align: left;">Syed    Shahid Ali</td>
  <td nowrap="" style="text-align: center;">1954-1963</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">126</td>
  <td nowrap="" style="text-align: left;">Omer    Khayyam Sheikh</td>
  <td nowrap="" style="text-align: center;">1975-1982</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">127</td>
  <td nowrap="" style="text-align: left;">Sarmad    Yousaf</td>
  <td nowrap="" style="text-align: center;">1999-2011</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">128</td>
  <td nowrap="" style="text-align: left;">Muhammed    Ali </td>
  <td nowrap="" style="text-align: center;">&nbsp;</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">129</td>
  <td nowrap="" style="text-align: left;">Muhammad    Tarique S.Saigol</td>
  <td nowrap="" style="text-align: center;">1956-1967</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">130</td>
  <td nowrap="" style="text-align: left;">Muhammad    Nasim Saigol</td>
  <td nowrap="" style="text-align: center;">1943-1953</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">131</td>
  <td nowrap="" style="text-align: left;">Amir    Hafeez Ibrahim</td>
  <td nowrap="" style="text-align: center;">1980-1987</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">132</td>
  <td nowrap="" style="text-align: left;">Adnan    Asad</td>
  <td nowrap="" style="text-align: center;">1963-1970</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">133</td>
  <td nowrap="" style="text-align: left;">Syed    Shehryar Ali</td>
  <td nowrap="" style="text-align: center;">1983-1990</td>
</tr>
<tr>
  <td nowrap="" style="text-align: center;">134</td>
  <td nowrap="" style="text-align: left;">Iftikhar    H. Shirazi</td>
  <td nowrap="" style="text-align: center;">1970-1979</td>
</tr>
<tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
  <th scope="row" colspan="3" style="text-align: center;">Armed Forces</th>
</tr>
  <tr>
    <td nowrap="" style="text-align: center;">135</td>
    <td nowrap="" style="text-align: left;">Major    General Nawab Sir Umar Hayat Khan Tiwana (Late)</td>
    <td nowrap="" style="text-align: center;">1888-1893</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">136</td>
    <td nowrap="" style="text-align: left;">General&nbsp;Nawab&nbsp;Sir Sadiq Muhammad Khan V    Abbasi (Late)</td>
    <td nowrap="" style="text-align: center;">1915    - 1921</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">137</td>
    <td nowrap="" style="text-align: left;">Maj.    General Sardar Harnarain Singh (Late)</td>
    <td nowrap="" style="text-align: center;">1921-1923</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">138</td>
    <td nowrap="" style="text-align: left;">Major    Gen. R. Nawabzada Sher Ali Khan Patudi (Late)</td>
    <td nowrap="" style="text-align: center;">1922-1925</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">139</td>
    <td nowrap="" style="text-align: left;">Col.    Syed Muhammad Hassan (Late)</td>
    <td nowrap="" style="text-align: center;">1922-1928</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">140</td>
    <td nowrap="" style="text-align: left;">Major    K. Nar-Narain Singh (Late)</td>
    <td nowrap="" style="text-align: center;">1927-1935</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">141</td>
    <td nowrap="" style="text-align: left;">Brig.    Man Mohan Singh Bedi (Late)</td>
    <td nowrap="" style="text-align: center;">1929-1933</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">142</td>
    <td nowrap="" style="text-align: left;">Major    Gen. Kirpal Singh Randhawa (Late)</td>
    <td nowrap="" style="text-align: center;">1942-1947</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">143</td>
    <td nowrap="" style="text-align: left;">Brig.    Ahmed Fuad</td>
    <td nowrap="" style="text-align: center;">1947-1957</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">144</td>
    <td nowrap="" style="text-align: left;"> Lt. Gen. (R) Alam Jan Mahsud (Late)</td>
    <td nowrap="" style="text-align: center;">1948    - 1951</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">145</td>
    <td nowrap="" style="text-align: left;">Lt.    Gen. (R) Ali Kuli Khan Khattak</td>
    <td nowrap="" style="text-align: center;">1951-1959</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">146</td>
    <td nowrap="" style="text-align: left;"> H.E.&nbsp;Badr&nbsp;ud&nbsp;Deen Maj.(R)    (Late)</td>
    <td nowrap="" style="text-align: center;">1951-1960</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">147</td>
    <td nowrap="" style="text-align: left;">Kamran    Baig Barcha</td>
    <td nowrap="" style="text-align: center;">2008-2016</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">148</td>
    <td nowrap="" style="text-align: left;">Maj.    General Asfand Yar Pataudi</td>
    <td nowrap="" style="text-align: center;">1970-1979</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">149</td>
    <td nowrap="" style="text-align: left;">Abdus    Saleem Khan </td>
    <td nowrap="" style="text-align: center;">&nbsp;</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">150</td>
    <td nowrap="" style="text-align: left;">Babur    W. Malik </td>
    <td nowrap="" style="text-align: center;">&nbsp;</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">151</td>
    <td nowrap="" style="text-align: left;">Major    General&nbsp;Nawabzada Sher Ali Khan of&nbsp;Pataudi</td>
    <td nowrap="" style="text-align: center;"></td>
  </tr>
  <tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
    <th scope="row" colspan="3" style="text-align: center;">Civil Awards Recipients</th>
  </tr>			    
  <tr>
    <td nowrap="" style="text-align: center;">152</td>
    <td nowrap="" style="text-align: left;">Ch.Mueen    Afzal</td>
    <td nowrap="" style="text-align: center;">1954-1958</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">153</td>
    <td nowrap="" style="text-align: left;">Mian    Ijaz ul Hassan </td>
    <td nowrap="" style="text-align: center;">1948-1957</td>
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">154</td>
    <td nowrap="" style="text-align: left;">Nauman    Niaz&nbsp;</td>
    <td nowrap="" style="text-align: center;">1988-2000</td>
  </tr>  
  <tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
	 <th scope="row" colspan="3" style="text-align: center;">National Poet / Writers</th>    
  </tr>
  <tr>
    <td nowrap="" style="text-align: center;">155</td>
    <td nowrap="" style="text-align: left;">Shahryar    Rashed (Late)</td>
    <td nowrap="" style="text-align: center;">1957-1959</td>
  </tr>
  <tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
    <th scope="row" colspan="3" style="text-align: center;">Doctors</th>
  </tr>
  <tr>
    <td align="center">156</td>
    <td nowrap="" style="text-align: left;">Dr.Mumraiz    Salik Naqshband</td>
    <td nowrap="" style="text-align: center;">1988-1999</td>
  </tr>
  <tr>
    <td align="center">157</td>
    <td nowrap="" style="text-align: left;">Dr.Mohammad    Ali Ayaz Sadiq</td>
    <td nowrap="" style="text-align: center;">1985-1997</td>
  </tr>
  <tr>
    <td align="center">158</td>
    <td nowrap="" style="text-align: left;">Dr.Omar    Chughtai</td>
    <td nowrap="" style="text-align: center;">1979-1991</td>
  </tr>
  <tr>
    <td align="center">159</td>
    <td nowrap="" style="text-align: left;">Usman    Saeed Khokhar </td>
    <td nowrap="" style="text-align: center;">1986-1997</td>
  </tr>
  <tr>
    <td align="center">160</td>
    <td nowrap="" style="text-align: left;">Asim    Saeed khokhar </td>
    <td nowrap="" style="text-align: center;">1980-1991</td>
  </tr>
  <tr>
    <td align="center">161</td>
    <td nowrap="" style="text-align: left;">Dr.  Naeem Zafar Khan Rehmani</td>
    <td nowrap="" style="text-align: center;">&nbsp;</td>
  </tr>
  <tr style="background-color:#ffcc36;color:#0F0456;height:auto;">
    <th scope="row" colspan="3" style="text-align: center;">Architect</th>
  </tr>
  <tr>
    <td align="center">162</td>
    <td nowrap="" style="text-align: left;">Kamil    Khan Mumtaz</td>
    <td nowrap="" style="text-align: center;">1952-1957</td>
  </tr>
  <tr>
    <td align="center">163</td>
    <td nowrap="" style="text-align: left;">Habib    Fida Ali (Late)</td>
    <td nowrap="" style="text-align: center;">1954-1956</td>
  </tr>
  <tr>
    <td align="center">164</td>
    <td nowrap="" style="text-align: left;">Raees    Faheem Ahsan Jamil</td>
    <td nowrap="" style="text-align: center;">1973-1980</td>
  </tr>
</tbody>
</table>  
			</div><?php */?>  
		<!--started addition on 09-05-2023-->
		<style>
		.col_left{
			text-align: left;
		}
		.col_center{
			text-align: center;
		}
		.col_right{
			text-align: right;
		}
	</style>
<div class="table-responsive">
	<?php $control=1;?>
<table class="table table-bordered" style="margin-top:15px;width:100%;">
 <tr style="background-color:#0F0456;color:#fff;height:auto; text-align: center; font-weight: bold;">
  <th scope="row" style="text-align: center;">Sr.</th>
  <th scope="row" style="text-align: center;">Name</th>
  <th scope="row" style="text-align: center;">AC Tenure</th>
 </tr>
 
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Prime Ministers</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Sardar  Bahadur Sir Sundar Singh Majithia (Late)</td>
  <td class="col_center">1887-1893</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Maharaja  Sir Bhupinder Singh (Late)</td>
  <td class="col_center">1904-1908</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Malik  Sir Feroze Khan Noon (Late)</td>
  <td class="col_center">1906-1911</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Maharaja  Sir Yadavinder Singh </td>
  <td class="col_center">1927-1930</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mir  Zafarullah Khan Jamali (Late)</td>
  <td class="col_center">1960-1961</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Imran Ahmed Khan Niazi</td>
  <td class="col_center">1960-1969</td>
 </tr>	
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">President</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Farooq Ahmad Khan Leghari (Late)</td>
  <td class="col_center">1949  -1958</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Chief Ministers</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Lt.  Col. Malik Khizar Hayat Tiwana (Late)</td>
  <td class="col_center">1908-1916</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mir  Jam Ghulam Qadir Khan (Late)</td>
  <td class="col_center">1936-1938</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Nawab  Sadiq Hussain Qureshi (Late)</td>
  <td class="col_center">1937-1939</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Nawab  Akbar Khan Bugti (Late)</td>
  <td class="col_center">1941-1944</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mian  Muhammad Afzal Hayat (Late)</td>
  <td class="col_center">1948-1958</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Sir  Sikandar Hayat Khan (Late)</td>
  <td class="col_center">1952-1959</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mir  Taj Mohammad Jamali (Late)</td>
  <td class="col_center">1953-1962</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Nawab  Zulfiqar Ali Khan Magsi</td>
  <td class="col_center">1961-1971</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Pervez Khan Khattak</td>
  <td class="col_center">1962-1969</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Ameer Haider Khan Hoti</td>
  <td class="col_center">1981-1990</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Governors</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Nawab  Malik Amir Muhammad Khan (Late) </td>
  <td class="col_center">1920  - 1928</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Amir-ud-din Ahmad Khan (Late)</td>
  <td class="col_center">1926  - 1929</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Nawab  Mohammad Abbas Abbasi (Late)</td>
  <td class="col_center">1934-1941</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Harcharan Singh Brar (Late)</td>
  <td class="col_center">1937-1943</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Sardar  Zulfiqar Ali Khosa</td>
  <td class="col_center">1946-1954</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Khawaja  Ahmad Tariq Rahim </td>
  <td class="col_center">1949-1960</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Speakers National Assembly of Pakistan</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed  Fakhar Imam</td>
  <td class="col_center">1950-1955</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Chaudhry  Aitzaz Ahsan</td>
  <td class="col_center">1954-1963</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Chaudhry  Hamid Nasir Chattha </td>
  <td class="col_center">1955-1962</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Jan  Muhammad Khan Jamali</td>
  <td class="col_center">1961-1972</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Sardar  Ayaz Sadiq</td>
  <td class="col_center">1971-1972</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Armed Forces</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Maj.  Gen. Nawab Sir Umar Hayat Khan Tiwana</td>
  <td class="col_center">1888-1893</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Lt. Gen.  Sadiq-ur-Rashid Ibrahim Abbasi (Late)</td>
  <td class="col_center">1915-1921</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Maj. G. Sardar  Harnarain Singh (Late)</td>
  <td class="col_center">1921-1923</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Major  Gen. Sardar Har-Narain Singh (Late)</td>
  <td class="col_center">1921-1923</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Maj.  Gen. R. Nawabzada Sher Ali khan Patudi (Late)</td>
  <td class="col_center">1922-1925</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Col.  Syed Muhammad Hassan (Late)</td>
  <td class="col_center">1922-1928</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Maj. K. Narain  Singh (Late)</td>
  <td class="col_center">1927-1935</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Brig. Man Mohan  Singh Bedi (Late)</td>
  <td class="col_center">1929-1933</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Major  General ® Khurshid Ali Khan (Late)</td>
  <td class="col_center">1940-1949</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Major  Gen. Kirpal Singh Randhawa (Late)</td>
  <td class="col_center">1942-1947</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Brig.  Ahmed Fuad (Late)</td>
  <td class="col_center">1947-1957</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Lt.  Gen. (R) Alam Jan Mahsud (Late)</td>
  <td class="col_center">1948-1951</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Lt.  Gen. ® Ali Kuli Khan Khattak </td>
  <td class="col_center">1951-1959</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">H.E.&nbsp;Badr&nbsp;ud&nbsp;Deen  Maj. (R) (Late)</td>
  <td class="col_center">1951-1960</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Maj.  Gen. Sahibzada Asfand Yar Pataudi</td>
  <td class="col_center">1970-1979</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Captain  Kamran Baig Barcha</td>
  <td class="col_center">2008-2016</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">National Awards Recipients</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Maj.  Gen. Nawab Sir Umar Hayat Khan Tiwana <br>
   (Indian Jidballi Medal)</td>
  <td class="col_center">1888-1893</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Lt. Gen.  Sadiq-ur-Rashid Ibrahim Abbasi (Late)<br>
   (Nishan-e-Pakistan / Hilaal-e-Imtiaz)</td>
  <td class="col_center">1915-1921</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Maj. G. Sardar  Harnarain Singh (Late) <br>
   (Padma Bhushan)</td>
  <td class="col_center">1921-1923</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Maj.  Gen. R. Nawabzada Sher Ali khan Patudi (Late)<br>
   (Hilaal-e-Jurat)</td>
  <td class="col_center">1922-1925</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Col.  Syed Muhammad Hassan (Late) <br>
   (Sitara-i-Pakistan)</td>
  <td class="col_center">1922-1928</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Major  General ® Khurshid Ali Khan (Late) <br>
   (Hilal-i-Imtiaz)</td>
  <td class="col_center">1940-1949</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mian  Ejaz Ul Hassan <br>
   (Pride of Performance)</td>
  <td class="col_center">1948-1957</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Lt.  Gen. ® Ali Kuli Khan Khattak <br>
   (Hilal-i-Imtiaz/3 Star Ranks General Officer)</td>
  <td class="col_center">1951-1959</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Kamil Khan Mumtaz <br>
   (Tamgha-e-Imtiaz)</td>
  <td class="col_center">1952-1957</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Mueen Afzal <br>
   (Hilal-i-Imtiaz)</td>
  <td class="col_center">1954-1958</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Waqar Ahmed Malik <br>
   (Sitara-i-Imtiaz)</td>
  <td class="col_center">1959-1969</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Imran Ahmed Khan Niazi <br>
   (Hilal-i-Imtiaz)</td>
  <td class="col_center">1960-1969</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Shan Shahid <br>
   (Pride of Performance)</td>
  <td class="col_center">1977-1985</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  M. Luqman Ali Afzal <br>
   (Pride of Performance)</td>
  <td class="col_center">1983-1997</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Nauman Niaz <br>
   (Tamgha-e-Imtiaz)</td>
  <td class="col_center">1984-1986</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Sarmad Sultan Khosat <br>
   (Pride of Performance)</td>
  <td class="col_center">1985-1995</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Umar Saif <br>
   (Sitara-i-Imtiaz)</td>
  <td class="col_center">1988-1995</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Architects</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Kamil Khan Mumtaz</td>
  <td class="col_center">1952-1957</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Habib Fida Ali (Late)</td>
  <td class="col_center">1954-1956</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Faheem Ahsan Jamil</td>
  <td class="col_center">1973-1980</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Reza Ali Dada</td>
  <td class="col_center">1977-1989</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  M. Umar Hassan Ch.</td>
  <td class="col_center">1980-1992</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Pakistan's Leading Artists</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Yawar Hayat Khan (Late)</td>
  <td class="col_center">1950-1959</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mian  Ejaz Ul Hassan</td>
  <td class="col_center">1948-1957</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Kamran Shahid</td>
  <td class="col_center">Sep1968-October1968</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Shan Shahid</td>
  <td class="col_center">1977-1985</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed  Fahd Hussain</td>
  <td class="col_center">1980-1986</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Farhad Humayun (Late)</td>
  <td class="col_center">1984-1994</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Nauman Niaz</td>
  <td class="col_center">1984-1986</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Mansoor Ali Khan </td>
  <td class="col_center">1985-1995</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Sarmad Sultan Khosat</td>
  <td class="col_center">1985-1995</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Salman Ali Toor</td>
  <td class="col_center">1989-2002</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Jahan-e-Khalid</td>
  <td class="col_center">1992-2004</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Musicians (International Level)</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Taimoor Moeen Salahuddin Mooroo</td>
  <td class="col_center">1990-2001</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Ali Aziz Sethi </td>
  <td class="col_center">1997-2002</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Haider Rehman</td>
  <td class="col_center">1999-2001</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Mansoor Lashari</td>
  <td class="col_center">1999-2011</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Omar Mukhtar</td>
  <td class="col_center">2002-2014</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Medicine</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr. Yusuf Kamal Mirza</td>
  <td class="col_center">1953-1954</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Dr. Naeem Zafar  Khan Rehman</td>
  <td class="col_center">1969-1976</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Dr.  Asif Bashir</td>
  <td class="col_center">1976-1986</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Dr.Omar  Chughtai</td>
  <td class="col_center">1979-1991</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Asim Saeed Khokhar </td>
  <td class="col_center">1980-1991</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Dr.  Mohammad Ali Ayaz Sadiq</td>
  <td class="col_center">1985-1997</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Usman Saeed Khokhar </td>
  <td class="col_center">1986-1997</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Dr.Mumraiz  Salik Naqshband</td>
  <td class="col_center">1988-1999</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;"> Writers</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Shahryar Rashed (Late)</td>
  <td class="col_center">1957-1959</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr. Shahbaz Ali  Taseer</td>
  <td class="col_center">1996-1999</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Prominent Lawyers</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Sardar  Gurbakhsh Singh (Late)</td>
  <td class="col_center">1926-1933</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Khan  Abdul Majid Khan </td>
  <td class="col_center">1939-1939</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Abubakr I. Chundgrigar (Late)</td>
  <td class="col_center">1951-1955</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Jawwad Sajjad Khawaja</td>
  <td class="col_center">1960-1967</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Ali Sibtain Fazli</td>
  <td class="col_center">1960-1969</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Justice  Umar Ata Bandial  </td>
  <td class="col_center">1964-1975</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Justice  Syed Mansoor Ali Shah</td>
  <td class="col_center">1968-1980</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Justice  Munib Akhtar</td>
  <td class="col_center">1973-1981</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.Waleed  Iqbal</td>
  <td class="col_center">1973-1984</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Justice  Yahya Afridi </td>
  <td class="col_center">1976-1982</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Rafay Alam</td>
  <td class="col_center">1981-1993</td>
 </tr>
 <tr style="background-color:#0F0456;color:#fff;height:auto; text-align: center; font-weight: bold;">
  <th scope="row" colspan="3" style="text-align: center;">Interational / National Sportsmen</th>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Athletics</th>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Azhar Husain (Late)</td>
  <td class="col_center">1948-1955</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Aminullah Khan Raisani</td>
  <td class="col_center">1962-1970</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Salman Iqbal Butt</td>
  <td class="col_center">1966-1977</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Arif Husain</td>
  <td class="col_center">1974-1987</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Cricketers </th>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Nawab  Mohammad Iftikhar Ali Khan Siddiqui Pataudi (Late)</td>
  <td class="col_center">1919-1926</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Raja  Bhalindra Singh (Late)</td>
  <td class="col_center">1930-1936</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed&nbsp;Zulfiqar&nbsp;Ali  Shah&nbsp;Bokhari (Late)</td>
  <td class="col_center">1942-1949</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed  Iftikhar Ali Shah Bukhari (Late)</td>
  <td class="col_center">1944-1952</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Ahmad Humayun Zaman Khan (Late)</td>
  <td class="col_center">1944  -1952</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed  Iftikhar Ali Bukhari (Late)</td>
  <td class="col_center">1944-1952</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Ahmad Javed Zaman Khan</td>
  <td class="col_center">1947-1957</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Imran Ahmed Khan Niazi</td>
  <td class="col_center">1960-1969</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Majid Jahangir Khan</td>
  <td class="col_center">1960-1964</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Rameez Hasan Raja</td>
  <td class="col_center">1976-1978</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Wahab Riaz </td>
  <td class="col_center">1990-1998</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Bazid Khan</td>
  <td class="col_center">1995-1997</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Footballer</th>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Makhdoom  Syed Faisal Saleh Hayat</td>
  <td class="col_center">1960-1970</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Golfer</th>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.Tariq Sayeed Saigol</td>
  <td class="col_center">1956-1967</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Hockey Olympian </th>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed  Mohammed Jaffer (Late)</td>
  <td class="col_center">1919-1928</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Qasim Zia</td>
  <td class="col_center">1967-1979</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Hassan Sardar</td>
  <td class="col_center">1974-1976</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Ijaz Ahmad</td>
  <td class="col_center">1977-1988</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Ayaz Mahmood</td>
  <td class="col_center">1978-1979</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Riders</th>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Prince  Malik Ata</td>
  <td class="col_center">1952  - 1963</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Squash Player</th>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Malik  Amjad Ali Noon</td>
  <td class="col_center">1962-1973</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Swimmers</th>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Aftab Arshad</td>
  <td class="col_center">1970-1982</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Bilal Amir Bux</td>
  <td class="col_center">1980-1989</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Asif Amin Arshad</td>
  <td class="col_center">1977-1979</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Tennis Players </th>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Jamil Ahmad (Late)</td>
  <td class="col_center">1966-1978</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Rashid Ahmad Malik</td>
  <td class="col_center">1978-1979</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Haseeb Aslam</td>
  <td class="col_center">1981-1983</td>
 </tr>
 <tr style="background-color:#ffcc36;color:#0F0456;height:auto;text-align: center; font-weight: 500;">
  <th scope="row" colspan="3" style="text-align: center;">Business Leaders (Entrepreneur)</th>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Naranjan Singh Gill</td>
  <td class="col_center">1918-1922</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed  Babar Ali</td>
  <td class="col_center">1934-1943</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed  Mohammad Mohsin (Late)</td>
  <td class="col_center">1938-1948</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Muhammad Nasim Saigol</td>
  <td class="col_center">1943-1953</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Major&nbsp;Narindar  Saroop&nbsp;</td>
  <td class="col_center">1946-1947</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Shahzada  Alam Monnoo (Late)</td>
  <td class="col_center">1948-1953</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Riaz A. Gul (Late)</td>
  <td class="col_center">1951-1961</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed  Shahid Ali</td>
  <td class="col_center">1954-1963</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Tarique Saeed Saigol</td>
  <td class="col_center">1956-1967</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Nadeem Ahmad Mumtaz (Late)</td>
  <td class="col_center">1958-1970</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Iqbal Zafaruddin Ahmed</td>
  <td class="col_center">1958-1963</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Waqar Ahmed Malik</td>
  <td class="col_center">1959-1969</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Azam Jamil</td>
  <td class="col_center">1962-1964</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Adnan Asad</td>
  <td class="col_center">1963-1970</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Atif Aslam Bajwa</td>
  <td class="col_center">1964-1976</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Qais Rehman</td>
  <td class="col_center">1966-1979</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed  Iftikhar H. Shirazi</td>
  <td class="col_center">1970-1979</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed  Aamir H. Shirazi</td>
  <td class="col_center">1971-1979</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Usman Haq</td>
  <td class="col_center">1971-1980</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Humayun Mazhar</td>
  <td class="col_center">1974-1979</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Omer Khayyam Sheikh</td>
  <td class="col_center">1975-1982</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Omar Saeed </td>
  <td class="col_center">1975-1987</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Taimur Dawood</td>
  <td class="col_center">1979-1991</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Amir Hafeez Ibrahim</td>
  <td class="col_center">1980-1987</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Yasser Usman Toor</td>
  <td class="col_center">1981-1993</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Usman Hamid Malik </td>
  <td class="col_center">1982-1994</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Awais Kharal </td>
  <td class="col_center">1982-1994</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Nauman Ahmed Khawaja</td>
  <td class="col_center">1982-1994</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  M. Luqman Ali Afzal</td>
  <td class="col_center">1983-1997</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Syed  Shehryar Ali</td>
  <td class="col_center">1983-1990</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Faisal Dawood</td>
  <td class="col_center">1983-1995</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Ali Salman Siddique</td>
  <td class="col_center">1983-1995</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Adnan Ahmed Khan&nbsp;</td>
  <td class="col_center">1985-1993</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Mahmud Yar Hiraj </td>
  <td class="col_center">1985-1994</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Nauman Ahmed Khan</td>
  <td class="col_center">1985-1995</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Osman Khalid Waheed </td>
  <td class="col_center">1987-1988</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Ahsan Suhail Mannan</td>
  <td class="col_center">1987-1998</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Umar Saif</td>
  <td class="col_center">1988-1995</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Adil K. Sattar</td>
  <td class="col_center">1988-1992</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Ahmed Khan </td>
  <td class="col_center">1989-1997</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Faraan Ahmed Irfan</td>
  <td class="col_center">1991-2000</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Sufi  Muhammad Farrukh Amin</td>
  <td class="col_center">1999-2001</td>
 </tr>
 <tr>
  <td class="col_center"><?php echo $control; $control=$control+1;?></td>
  <td class="col_left">Mr.  Sarmad Yousaf</td>
  <td class="col_center">1999-2011</td>
 </tr>
</table>
</div>	

		<!--Ended   addition on 09-05-2023-->
          </div>
        </div>
      <!--  <div class="col-md-12">
          <div class="feature-content">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/1.jpg" alt="pic" >
                  <h4 class="feat-title">Imran Khan</h4>
                  <p>Chairman of the Pakistan Tehreek-e-Insaf (PTI) political party, former cricketer, philanthropist and former chancellor of the University of Bradford.</p>
                </div>
              </div>
              
               <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/2.jpg">
                  <h4 class="feat-title">Syed Babar Ali</h4>
                  <p>Industrialist, philanthropist, former Finance Minister of Pakistan and Pro-chancellor of the Lahore University of Management Sciences.</p>
                </div>
              </div>
              
               <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/3.jpg" alt="pic" >
                  <h4 class="feat-title">Shah Mahmood Qureshi </h4>
                  <p>Politician, agriculturist and parliamentarian, currently serving as the Vice-chairman and deputy parliamentary leader of the Pakistan Tehreek-e-Insaf political party </p>
                </div>
              </div>
              
               <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/4.jpg" alt="pic" >
                  <h4 class="feat-title">Dr. Umar Saif </h4>
                  <p>Computer scientist, entrepreneur and Vice Chancellor of the Information Technology University.</p>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/5.jpg" alt="pic" >
                  <h4 class="feat-title">Pervez Khan Khattak  </h4>
                  <p>Pakistani politician, currently serving as the Chief Minister of Khyber Pakhtunkhwa .</p>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/6.jpg" alt="pic" >
                  <h4 class="feat-title">Sardar Ayaz Sadiq </h4>
                  <p>Senior leader of the PML (N) political party, speaker of the National Assembly of Pakistan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </section>
  <!-- End Feature -->
  <!-- Start footer -->
  <?php 
  	include("phpinclude/footer.php");
  ?>
  <!-- End footer -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- Slick Slider -->
    <script type="text/javascript" src="assets/js/slick.js"></script>    
    <!-- mixit slider -->
    <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->        
    <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
   <!-- counter -->
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/jquery.counterup.js"></script>
    <!-- Wow animation -->
    <script type="text/javascript" src="assets/js/wow.js"></script> 
    <!-- progress bar   -->
    <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
    
   
    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>