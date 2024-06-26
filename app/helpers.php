<?php

use Intervention\Image\ImageManagerStatic as Image;

const MONTH_LONG_NAMES = [
    '01' => 'มกราคม',
    '02' => 'กุมภาพันธ์',
    '03' => 'มีนาคม',
    '04' => 'เมษายน',
    '05' => 'พฤษภาคม',
    '06' => 'มิถุนายน',
    '07' => 'กรกฎาคม',
    '08' => 'สิงหาคม',
    '09' => 'กันยายน',
    '10' => 'ตุลาคม',
    '11' => 'พฤศจิกายน',
    '12' => 'ธันวาคม',
];

const MONTH_SHORT_NAMES = [
    '01' => 'ม.ค.',
    '02' => 'ก.พ.',
    '03' => 'มี.ค.',
    '04' => 'เม.ย',
    '05' => 'พ.ค.',
    '06' => 'มิ.ย.',
    '07' => 'ก.ค.',
    '08' => 'ส.ค.',
    '09' => 'ก.ย.',
    '10' => 'ต.ค.',
    '11' => 'พ.ย.',
    '12' => 'ธ.ค.',
];

static $PAPER_SIZES = array(
    "4a0" => array(0, 0, 4767.87, 6740.79),
    "2a0" => array(0, 0, 3370.39, 4767.87),
    "a0" => array(0, 0, 2383.94, 3370.39),
    "a1" => array(0, 0, 1683.78, 2383.94),
    "a2" => array(0, 0, 1190.55, 1683.78),
    "a3" => array(0, 0, 841.89, 1190.55),
    "a4" => array(0, 0, 595.28, 841.89),
    "a5" => array(0, 0, 419.53, 595.28),
    "a6" => array(0, 0, 297.64, 419.53),
    "a7" => array(0, 0, 209.76, 297.64),
    "a8" => array(0, 0, 147.40, 209.76),
    "a9" => array(0, 0, 104.88, 147.40),
    "a10" => array(0, 0, 73.70, 104.88),
    "b0" => array(0, 0, 2834.65, 4008.19),
    "b1" => array(0, 0, 2004.09, 2834.65),
    "b2" => array(0, 0, 1417.32, 2004.09),
    "b3" => array(0, 0, 1000.63, 1417.32),
    "b4" => array(0, 0, 708.66, 1000.63),
    "b5" => array(0, 0, 498.90, 708.66),
    "b6" => array(0, 0, 354.33, 498.90),
    "b7" => array(0, 0, 249.45, 354.33),
    "b8" => array(0, 0, 175.75, 249.45),
    "b9" => array(0, 0, 124.72, 175.75),
    "b10" => array(0, 0, 87.87, 124.72),
    "c0" => array(0, 0, 2599.37, 3676.54),
    "c1" => array(0, 0, 1836.85, 2599.37),
    "c2" => array(0, 0, 1298.27, 1836.85),
    "c3" => array(0, 0, 918.43, 1298.27),
    "c4" => array(0, 0, 649.13, 918.43),
    "c5" => array(0, 0, 459.21, 649.13),
    "c6" => array(0, 0, 323.15, 459.21),
    "c7" => array(0, 0, 229.61, 323.15),
    "c8" => array(0, 0, 161.57, 229.61),
    "c9" => array(0, 0, 113.39, 161.57),
    "c10" => array(0, 0, 79.37, 113.39),
    "ra0" => array(0, 0, 2437.80, 3458.27),
    "ra1" => array(0, 0, 1729.13, 2437.80),
    "ra2" => array(0, 0, 1218.90, 1729.13),
    "ra3" => array(0, 0, 864.57, 1218.90),
    "ra4" => array(0, 0, 609.45, 864.57),
    "sra0" => array(0, 0, 2551.18, 3628.35),
    "sra1" => array(0, 0, 1814.17, 2551.18),
    "sra2" => array(0, 0, 1275.59, 1814.17),
    "sra3" => array(0, 0, 907.09, 1275.59),
    "sra4" => array(0, 0, 637.80, 907.09),
    "letter" => array(0, 0, 612.00, 792.00),
    "legal" => array(0, 0, 612.00, 1008.00),
    "ledger" => array(0, 0, 1224.00, 792.00),
    "tabloid" => array(0, 0, 792.00, 1224.00),
    "executive" => array(0, 0, 521.86, 756.00),
    "folio" => array(0, 0, 612.00, 936.00),
    "commercial #10 envelope" => array(0, 0, 684, 297),
    "catalog #10 1/2 envelope" => array(0, 0, 648, 864),
    "8.5x11" => array(0, 0, 612.00, 792.00),
    "8.5x14" => array(0, 0, 612.00, 1008.0),
    "11x17" => array(0, 0, 792.00, 1224.00),
);

const FONT_SIZES = [
    'xs'    => 'font-size: 0.75rem; line-height: 1rem;',
    'sm'    => 'font-size: 0.875rem; line-height: 1.25rem;',
    'base'  => 'font-size: 1rem; line-height: 1.5rem;',
    'lg'    => 'font-size: 1.125rem; line-height: 1.75rem;',
    'xl'    => 'font-size: 1.25rem; line-height: 1.75rem;',
];

function uploadFile($file, $destPath)
{
    $filename = '';
    if ($file) {
        $filename = date('mdYHis') . uniqid(). '.' .$file->getClientOriginalExtension();

        $file->move($destPath, $filename);
    }

    return $filename;
}

function uploadThumbnail($img, $destPath)
{
    $img_name = '';
    if ($img) {
        $img_name = date('mdYHis') . uniqid(). '.' .$img->getClientOriginalExtension();

        $img_resized = Image::make($img->getRealPath());
        $img_resized->resize(300, null, function($constraint) {
            $constraint->aspectRatio();
        });
        $img_resized->save(public_path($destPath. '/' .$img_name));
    }

    return $img_name;
}

function convDbDateToThDate($dbDate)
{
    if(empty($dbDate)) return '';

    $arrDate = explode('-', $dbDate);

    return $arrDate[2]. '/' .$arrDate[1]. '/' .((int)$arrDate[0] + 543);
}

function convThDateToDbDate($dbDate)
{
    if(empty($dbDate)) return '';

    $arrDate = explode('/', $dbDate);

    return ((int)$arrDate[2] - 543). '-' .$arrDate[1]. '-' .$arrDate[0];
}

function calcBudgetYear($sdate)
{
    $budgetYear = date('Y') + 543;
    list($day, $month, $year) = explode('/', $sdate);

    if ((int)$month >= 10) {
        $budgetYear = (int)$year + 1;
    } else {
        $budgetYear = (int)$year;
    }

    return $budgetYear;
}

function getShortMonth($monthDigits)
{
    return MONTH_SHORT_NAMES[$monthDigits];
}

function convDbDateToLongThDate($dbDate)
{
    if(empty($dbDate)) return '';

    $arrDate = explode('-', $dbDate);

    return (int)$arrDate[2]. ' ' .MONTH_LONG_NAMES[$arrDate[1]]. ' ' .((int)$arrDate[0] + 543);
}

function convDbDateToLongThMonth($dbDate)
{
    if(empty($dbDate)) return '';

    $arrDate = explode('-', $dbDate);

    return MONTH_LONG_NAMES[$arrDate[1]]. ' ' .((int)$arrDate[0] + 543);
}

/**
 * $renderType should be 'preview' | 'download'
 */
function renderPdf($view, $data, $paper = null, $renderType = 'preview')
{
    $pdf = PDF::loadView($view, $data);

    /** Set font directory */
    // $pdf->setOption('fontDir', public_path('/fonts'));

    if ($paper) {
        $pdf->setPaper($paper['size'], $paper['orientation']);
    }

    /** แบบนี้จะ stream มา preview */
    if ($renderType == 'preview') {
        return $pdf->stream();
    }

    /** แบบนี้จะดาวโหลดเลย */
    return $pdf->download(date('dmY').'-'.uniqid().'.pdf');
}

function thainumDigit($num){
    return str_replace(
        array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
        array( "o" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),
        $num
    );
}

function currencyToNumber($currency) {
    if ($currency == '') return 0;

    return str_replace(',', '', $currency);
}

const BAHT_TEXT_NUMBERS = array('ศูนย์', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า');
const BAHT_TEXT_UNITS = array('', 'สิบ', 'ร้อย', 'พัน', 'หมื่น', 'แสน', 'ล้าน');
const BAHT_TEXT_ONE_IN_TENTH = 'เอ็ด';
const BAHT_TEXT_TWENTY = 'ยี่';
const BAHT_TEXT_INTEGER = 'ถ้วน';
const BAHT_TEXT_BAHT = 'บาท';
const BAHT_TEXT_SATANG = 'สตางค์';
const BAHT_TEXT_POINT = 'จุด';

/**
 * Convert baht number to Thai text
 * @param double|int $number
 * @param bool $include_unit
 * @param bool $display_zero
 * @return string|null
 */
function baht_text($number, $include_unit = true, $display_zero = true)
{
    if (!is_numeric($number)) {
        return null;
    }

    $log = floor(log($number, 10));
    if ($log > 5) {
        $millions = floor($log / 6);
        $million_value = pow(1000000, $millions);
        $normalised_million = floor($number / $million_value);
        $rest = $number - ($normalised_million * $million_value);
        $millions_text = '';
        for ($i = 0; $i < $millions; $i++) {
            $millions_text .= BAHT_TEXT_UNITS[6];
        }
        return baht_text($normalised_million, false) . $millions_text . baht_text($rest, true, false);
    }

    $number_str = (string)floor($number);
    $text = '';
    $unit = 0;

    if ($display_zero && $number_str == '0') {
        $text = BAHT_TEXT_NUMBERS[0];
    } else for ($i = strlen($number_str) - 1; $i > -1; $i--) {
        $current_number = (int)$number_str[$i];

        $unit_text = '';
        if ($unit == 0 && $i > 0) {
            $previous_number = isset($number_str[$i - 1]) ? (int)$number_str[$i - 1] : 0;
            if ($current_number == 1 && $previous_number > 0) {
                $unit_text .= BAHT_TEXT_ONE_IN_TENTH;
            } else if ($current_number > 0) {
                $unit_text .= BAHT_TEXT_NUMBERS[$current_number];
            }
        } else if ($unit == 1 && $current_number == 2) {
            $unit_text .= BAHT_TEXT_TWENTY;
        } else if ($current_number > 0 && ($unit != 1 || $current_number != 1)) {
            $unit_text .= BAHT_TEXT_NUMBERS[$current_number];
        }

        if ($current_number > 0) {
            $unit_text .= BAHT_TEXT_UNITS[$unit];
        }

        $text = $unit_text . $text;
        $unit++;
    }

    if ($include_unit) {
        $text .= BAHT_TEXT_BAHT;

        $satang = explode('.', number_format($number, 2, '.', ''))[1];
        $text .= $satang == 0
            ? BAHT_TEXT_INTEGER
            : baht_text($satang, false) . BAHT_TEXT_SATANG;
    } else {
        $exploded = explode('.', $number);
        if (isset($exploded[1])) {
            $text .= BAHT_TEXT_POINT;
            $decimal = (string)$exploded[1];
            for ($i = 0; $i < strlen($decimal); $i++) {
                $text .= BAHT_TEXT_NUMBERS[$decimal[$i]];
            }
        }
    }

    return $text;
}

function isRenderWardInsteadDepart($departId) {
    return in_array($departId, ['19','20','68']);
}

/** ตรวจสอบคณะกรรมการการขอสนับสนุน */
function committeeNumber($committees, $type) {
    $number = 0;

    foreach($committees as $committee) {
        if($committee->committee_type_id == $type) {
            $number++;
        }
    }

    return $number;
}

// function exportExcel($fileName, $view, $data, $options)
// {
//     return \Excel::create($fileName, function($excel) use ($view, $data, $options) {
//         $excel->sheet('sheet1', function($sheet) use ($view, $data, $options)
//         {
//             $sheet->loadView($view, [
//                 'data' => $data,
//                 'options' => $options
//             ]);                
//         });
//     })->download();
// }

const SUFFIX_TIME = array(
	"th" => array(
		"time" => array(
			"Seconds"   => " วินาทีที่แล้ว",
			"Minutes"   => " นาทีที่แล้ว",
			"Hours"     => " ชั่วโมงที่แล้ว"
		),
		"day" => array(
			"Yesterday" => "เมื่อวาน เวลา ",
			"Monday"    => "วันจันทร์ เวลา ",
			"Tuesday"   => "วันอังคาร เวลา ",
			"Wednesday"	=> "วันพุธ เวลา ",
			"Thursday"  => "วันพฤหัสบดี เวลา ",
			"Friday"    => "วันศุกร์ เวลา ",
			"Saturday"  => "วันวันเสาร์ เวลา ",
			"Sunday"    => "วันอาทิตย์ เวลา ",
		)
	),
	"en" => array(
		"time"=>array(
			"Seconds"   => " seconds ago",
			"Minutes"   => " minutes ago",
			"Hours"     => " hours ago"
		),
		"day" => array(
			"Yesterday" => "Yesterday at ",
			"Monday"    => "Monday at ",
			"Tuesday"   => "Tuesday at ",
			"Wednesday"	=> "Wednesday at ",
			"Thursday"  => "Thursday at ",
			"Friday"    => "Friday at ",
			"Saturday"  => "Saturday at ",
			"Sunday"    => "Sunday at ",
		)
	)
);

const DATE_THAI = array(
	// Day
	"l" => array(	// Full day
		"Monday"    => "วันจันทร์",
		"Tuesday"   => "วันอังคาร",
		"Wednesday"	=> "วันพุธ",
		"Thursday"  => "วันพฤหัสบดี",
		"Friday"    => "วันศุกร์",
		"Saturday"  => "วันวันเสาร์",
		"Sunday"    => "วันอาทิตย์",
	),
	"D" => array(	// Abbreviated day
		"Monday"    => "จันทร์",
		"Tuesday"   => "อังคาร",
		"Wednesday"	=> "พุธ",
		"Thursday"  => "พฤหัส",
		"Friday"    => "ศุกร์",
		"Saturday"  => "วันเสาร์",
		"Sunday"    => "อาทิตย์",
	),
	
	// Month
	"F" => array(	// Full month
		"January"   => "มกราคม",
		"February"  => "กุมภาพันธ์",
		"March"     => "มีนาคม",
		"April"     => "เมษายน",
		"May"       => "พฤษภาคม",
		"June"      => "มิถุนายน",
		"July"      => "กรกฎาคม",
		"August"    => "สิงหาคม",
		"September" => "กันยายน",
		"October"   => "ตุลาคม",
		"November"  => "พฤศจิกายน",
		"December"  => "ธันวาคม"
	),
	"M" => array(	// Abbreviated month
		"January"   => "ม.ค.",
		"February"  => "ก.พ.",
		"March"     => "มี.ค.",
		"April"     => "เม.ย.",
		"May"       => "พ.ค.",
		"June"      => "มิ.ย.",
		"July"      => "ก.ค.",
		"August"    => "ส.ค.",
		"September" => "ก.ย.",
		"October"   => "ต.ค.",
		"November"  => "พ.ย.",
		"December"  => "ธ.ค."
	)
);

function timeSince($Format, $Timestamp, $Language = "en", $TimeText = true )
{
	// global $SUFFIX_TIME, $DATE_THAI;

	if( date("Ymd", $Timestamp) >= date("Ymd", (time()-345600)) && $TimeText) // Less than 3 days.
    {
		$TimeStampAgo = (time()-$Timestamp);
		
		if(($TimeStampAgo < 86400)) // Less than 1 day.
		{
			
			$TimeDay = "time"; // Use array time
			
			if($TimeStampAgo < 60) // Less than 1 minute.
			{
				$Return = (time() - $Timestamp);
				$Values = "Seconds";
			}
			else if($TimeStampAgo < 3600) // Less than 1 hour.
			{
				$Return = floor( (time() - $Timestamp)/60 );
				$Values = "Minutes";
			}
			else // Less than 1 day.
			{
				$Return = floor( (time() - $Timestamp)/3600 );
				$Values = "Hours";
			}
			
		}
		else if($TimeStampAgo < 172800) // Less than 2 day.
		{
			$Return = date("H:i", $Timestamp);
			$TimeDay = "day";
			$Values = "Yesterday";
		}
		else // More than 2 hours..
		{
			$Return = date("H:i", $Timestamp);
			$TimeDay = "day";
			$Values = date("l", $Timestamp);
		}
		
		if($TimeDay == "time")
			$Return .= SUFFIX_TIME[$Language][$TimeDay][$Values];
		else if($TimeDay == "day")
			$Return = SUFFIX_TIME[$Language][$TimeDay][$Values] . $Return;
		
		return $Return;
	}
	else
	{
		if($Language == "en")
		{
			return date($Format, $Timestamp);
		}
		else if($Language == "th")
		{
			$Format = str_replace("l", "|1|", $Format);
			$Format = str_replace("D", "|2|", $Format);
			$Format = str_replace("F", "|3|", $Format);
			$Format = str_replace("M", "|4|", $Format);
			$Format = str_replace("y", "|x|", $Format);
			$Format = str_replace("Y", "|X|", $Format);

			$DateCache = date($Format, $Timestamp);
			
			$AR1 = array ("", "l", "D", "F", "M");
			$AR2 = array ("", "l", "l", "F", "F");

            $StrCache = '';

			for($i=1; $i<=4; $i++)
			{
				if(strstr($DateCache, "|". $i ."|"))
				{
					$split = explode("|". $i ."|", $DateCache);
					for($j=0; $j < count($split)-1; $j++)
					{
						$StrCache .= $split[$j];
						$StrCache .= DATE_THAI[$AR1[$i]][date($AR2[$i], $Timestamp)];
					}

					$StrCache .= $split[count($split)-1];
					$DateCache = $StrCache;
					$StrCache = "";

					empty($split);
				}
			}

			if(strstr($DateCache, "|x|"))
            {
                $split = explode("|x|", $DateCache); 
                
                for($i=0; $i<count($split)-1; $i++)
                {
                    $StrCache .= $split[$i];
                    $StrCache .= substr(((int)date("Y", $Timestamp)+543), -2);
                }
                $StrCache .= $split[count($split)-1];
                $DateCache = $StrCache;
                $StrCache = "";
                empty($split);
            }

            if(strstr($DateCache, "|X|"))
            {
                $split = explode("|X|", $DateCache); 

                for($i=0; $i<count($split)-1; $i++)
                {
                    $StrCache .= $split[$i];
                    $StrCache .= ((int)date("Y", $Timestamp)+543);
                }
                $StrCache .= $split[count($split)-1];
                $DateCache = $StrCache;
                $StrCache = "";
                empty($split);
            }

            $Return = $DateCache;

			return $Return;
		}
	}
}

date_default_timezone_set("Asia/Bangkok");   //India time (GMT+5:30) 

function facebookTimeAgo($timestamp)
{
    $time_ago   = strtotime($timestamp);
    $current_time = time();
    $time_difference = $current_time - $time_ago;
    $seconds    = $time_difference;
    $minutes    = round($seconds / 60);           // value 60 is seconds
    $hours      = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec
    $days       = round($seconds / 86400);          //86400 = 24 * 60 * 60;
    $weeks      = round($seconds / 604800);          // 7*24*60*60;
    $months     = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60
    $years      = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60

    if ($seconds <= 60) {
        return "Just Now";
    } else if ($minutes <= 60) {
        
        if ($minutes == 1) {
            return "1 minute ago";
        } else {
            return "$minutes minutes ago";
        }

    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "an hour ago";
        } else {
            return "$hours hrs ago";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            return "yesterday";
        } else {
            return "$days days ago";
        }
    } else if ($weeks <= 4.3) //4.3 == 52/12
    {
    if ($weeks == 1) {
            return "a week ago";
        } else {
            return "$weeks weeks ago";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "a month ago";
        } else {
            return "$months months ago";
        }
    } else {
        if ($years == 1) {
            return "one year ago";
        } else {
            return "$years years ago";
        }
    }
}

function readCSV($csvFile, $delimiter = ",")
{
    $file_handle = fopen($csvFile, 'r');
    while ($csvRow = fgetcsv($file_handle, null, $delimiter)) {
        $line_of_text[] = $csvRow;
    }

    fclose($file_handle);

    return $line_of_text;
}
