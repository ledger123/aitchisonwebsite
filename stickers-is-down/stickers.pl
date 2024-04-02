#!/usr/bin/perl

use CGI::Simple;
use DBIx::Simple;
use CGI::FormBuilder;

my $db = DBIx::Simple->connect( 'DBI:mysql:database=aitchison_stickers;host=', 'aitchison', 'Drybbig3' );
my $cgi = new CGI::Simple;

my $page = $cgi->param('page');
$page = 'stickers' if !$page;

print $cgi->header;

my $title;
if ( $page eq 'stickers' ) {
    $title = 'Apply for Car Stickers';
}

print qq|
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>$title</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h1>$title</h1>
|;

if ( $page eq 'stickers' ) {
    &stickers;
}

1;

#---------------------------------------------------------------------------------------------------
sub stickers {

     $row->{request_date} = $db->query('SELECT current_date')->list;
     $row->{sticker_num} = '1';

    #-----------------------------------------------
    # DB FORM
    #-----------------------------------------------
    my @form1flds =
      qw(request_date requestor_name requestor_email relation_with_student sticker_num car_num1 car_num2 school_num1 school_num2 school_num3 school_num4 school_num5 driver1_name driver1_relation driver2_name driver2_relation driver3_name driver3_relation driver4_name driver4_relation driver5_name driver5_relation);
    my @form1hidden = qw(path login action sessionid id);
    my $form1       = CGI::FormBuilder->new(
        method   => 'post',
        table    => 1,
        fields   => \@form1flds,
        required => [qw(request_date)],
        validate => { email => 'EMAIL' },
        options  => { sticker_num => [qw(1 2)], },
        labels   => {
            request_date          => 'Date',
            requestor_name        => 'Requestor Name',
            requestor_email       => 'Requestor Email',
            relation_with_student => 'Relation with student',
            sticker_num           => 'Number of stickers',
            car_num1              => 'Car1 Registration #',
            car_num2              => 'Car2 Registration #',
            school_num1           => 'School Number 1',
            school_num2           => 'School Number 2',
            school_num3           => 'School Number 3',
            school_num4           => 'School Number 4',
            school_num5           => 'School Number 5',
            driver1_name          => 'Name of Driver 1',
            driver1_relation      => 'Relationship',
            driver2_name          => 'Name of Driver 2',
            driver2_relation      => 'Relationship',
            driver3_name          => 'Name of Driver 3',
            driver4_relation      => 'Relationship',
            driver4_name          => 'Name of Driver 4',
            driver4_relation      => 'Relationship',
            driver5_name          => 'Name of Driver 5',
            driver5_relation      => 'Relationship',
        },
        submit     => [qw(Save)],
        values     => $row,
        params     => $cgi,
        stylesheet => 1,
        keepextras => [qw(page)],
    );

    $form1->field(name => 'sticker_num', type => 'select');
    $form1->field(name => 'request_date', type => 'static');
    print qq|
   <h3>Notes</h3>
   <ol>
   <li>Charges for 1st car sticker are Rs: 600 and for 2nd car sticker are Rs: 400</li>
   <li>This amount will be charged in fee bill</li>
   <li>In case of any questions or queries, please contact Security Department, Aitchison College, Lahore</li>
   </ol>
<div><a href="https://www.aitchison.edu.pk/newsandevents-testlink.php?id=316">Principal's Letter - Important information for Car Stickers</a></div>
<div><a href="https://aitchison.edu.pk/ac-parking-policy27072017.php">Plese click here to view car stickers policy.</a></div>
|;

    if ( $form1->submitted ) {
    } else {
    print $form1->render;
    }

    #-----------------------------------------------
    # DATA BASE PROCESSING
    #-----------------------------------------------
    my $data = $form1->fields;
    $data->{id} *= 1;

    my $errormsg;
    if ( $form1->submitted ) {
       delete $data->{id};
	if ($data->{school_num1}){
	    my $count = $db->query('SELECT SUM(sticker_num) FROM car_stickers WHERE school_num1 = ?', $data->{school_num1})->list;
	    $errormsg = '<h3>Duplicate request ....</h3>' if $count > 2;

	    ($data->{std_name1}, $data->{std_class1}, $data->{status1}) = 
		$db->query('SELECT std_name, class, status FROM ac_students WHERE sch_num = ?', $data->{school_num1})->list;
	    $errormsg .= '<h3>Incorrect school number 1. Click back button to correct ....</h3> ' if !$data->{std_name1};
	}	
	if ($data->{school_num2}){
	    ($data->{std_name2}, $data->{std_class2}, $data->{status2}) = 
		$db->query('SELECT std_name, class, status FROM ac_students WHERE sch_num = ?', $data->{school_num2})->list;
	    $errormsg .= '<h3>Incorrect school number 2. Click back button to correct ....</h3> ' if !$data->{std_name2};
	}	
	if ($data->{school_num3}){
	    ($data->{std_name3}, $data->{std_class3}, $data->{status3}) = 
		$db->query('SELECT std_name, class, status FROM ac_students WHERE sch_num = ?', $data->{school_num3})->list;
	    $errormsg .= '<h3>Incorrect school number 3. Click back button to correct ....</h3> ' if !$data->{std_name3};
	}	
	if ($data->{school_num4}){
	    ($data->{std_name4}, $data->{std_class4}, $data->{status4}) = 
		$db->query('SELECT std_name, class, status FROM ac_students WHERE sch_num = ?', $data->{school_num4})->list;
	    $errormsg .= '<h3>Incorrect school number 4. Click back button to correct ....</h3> ' if !$data->{std_name4};
	}	
	if ($data->{school_num5}){
	    ($data->{std_name5}, $data->{std_class5}, $data->{status5}) = 
		$db->query('SELECT std_name, class, status FROM ac_students WHERE sch_num = ?', $data->{school_num5})->list;
	    $errormsg .= '<h3>Incorrect school number 5. Click back button to correct ....</h3> ' if !$data->{std_name5};
	}
	if ($errormsg){
		print $errormsg;
	} else {
    		print $form1->confirm;
       		$db->insert( 'car_stickers', $data );
       		print qq| Sticker request saved \n |;
	}
    }

    print qq|</body></html>|;
}

#########
### EOF
#########

