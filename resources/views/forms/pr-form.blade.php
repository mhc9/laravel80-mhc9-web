<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>บันทึกขอสนับสนุน</title>

        <style>
            @font-face {
                font-family: "THSarabunNew";
                font-style: normal;
                font-weight: normal;
                src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format("truetype");
            }

            @font-face {
                font-family: "THSarabunNew";
                font-style: normal;
                font-weight: bold;
                src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format("truetype");
            }

            @font-face {
            font-family: "THSarabunNew";
                font-style: italic;
                font-weight: normal;
                src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format("truetype");
            }

            @font-face {
                font-family: "THSarabunNew";
                font-style: italic;
                font-weight: bold;
                src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format("truetype");
            }
        </style>
        <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}">
    </head>
    <body>
    <!-- ==================================== PAGE 1 ==================================== -->
    <?php
        $principle = 'ด้วย '.$requisition->division->name . ' ' . $requisition->division->department->name . ' มีความประสงค์จะ' . (($requisition->order_type_id == 1) ? 'ซื้อ' : '') . $requisition->category->name;

        if($requisition->reason != '') {
            $principle .= ' เพื่อ' . $requisition->reason;
        } else {
            $principle .= ' เพื่อใช้ในการดำเนินงานภายในศูนย์สุขภาพจิตที่ 9';
        }

        $principle .= ' โดยใช้เงินงบประมาณปี ' . $requisition->year . ' ' . 'ตามแผนงานพื้นฐาน' . $requisition->budget->name;
        $principle .= ' รวมจำนวนเงินทั้งสิ้น' . ' ' . number_format($requisition->net_total) . ' บาท (' . baht_text($requisition->net_total) . ') รายละเอียดตามเอกสารแนบ';

        $reason = '';
        
        if($requisition->reason != '') {
            $reason .= ' เพื่อ' . $requisition->reason;
        } else {
            $reason .= ' เพื่อใช้ในการดำเนินงานภายในศูนย์สุขภาพจิตที่ 9';
        }
    
        $reason .= ' ปีงบประมาณ ' . $requisition->year . ' พร้อมทั้งขอเสนอชื่อแต่งตั้งผู้รับผิดชอบ หรือคณะกรรมการตรวจรับพัสดุ (กรณีวงเงินไม่เกิน 100,000 บาท) ดังต่อไปนี้';
    ?>
        <div class="memo-container">
            <div class="memo-header">
                <div class="logo-krut">
                    <img src="{{ public_path('img/krut.jpg') }}" alt="krut" />
                </div>
                <h2>บันทึกข้อความ</h2>
            </div>
            <div class="content">
                <?php $committeeHeight = 0; ?>

                <table style="width: 100%;">
                    <tr>
                        <td colspan="4">
                            <div class="content-header">
                                <span class="content__header-topic">ส่วนราชการ</span>
                                <div class="content__header-text" style="width: 87%;">
                                    <span style="margin: 0 0 0 1px;">
                                        {{ $requisition->division->name }} {{ $requisition->division->department->name }}
                                    </span>
                                    <span style="margin: 0">{{ thainumDigit('ศูนย์สุขภาพจิตที่ 9') }}</span>
                                    <span style="margin: 0;">
                                            โทร {{ thainumDigit('0 4425 6729') }}
                                    </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="width: 50%;">
                            <div class="content-header">
                                <span class="content__header-topic">ที่</span>
                                <div class="content__header-text" style="width: 94%;">
                                    <span style="margin: 0 5px;">{{ thainumDigit($requisition->pr_no) }}</span>
                                </div>
                            </div>
                        </td>
                        <td colspan="2">
                            <div class="content-header">
                                <span class="content__header-topic">วันที่</span>
                                <div class="content__header-text" style="width: 88%;">
                                    <span style="margin: 0 10px;">
                                        @if ($requisition)
                                            {{ thainumDigit(convDbDateToLongThDate($requisition->pr_date)) }}
                                        @else
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ thainumDigit(convDbDateToLongThMonth(date('Y-m-d'))) }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="content-header">
                                <span class="content__header-topic">เรื่อง</span>
                                <div class="content__header-text" style="width: 94%;">
                                    <span>{{ thainumDigit($requisition->topic) }}</span>
                                </div>
                            </div>
                            <div style="margin: 0; padding: 0;">
                                <span style="font-size: 20px; margin-right: 5px;">เรียน</span>
                                <span>ผู้อำนวยการ{{ thainumDigit('ศูนย์สุขภาพจิตที่ 9') }}</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="memo-paragraph-content">
                                {{ thainumDigit($principle) }}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p class="memo-paragraph-content">
                                เหตุผลและความจำเป็นที่ต้องจัดซื้อจัดจ้าง
                            </p>
                            <div class="memo-paragraph-content-level1">
                                {{ thainumDigit($reason) }}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div style="margin: 0;">
                                <p class="memo-paragraph-content">
                                    ผู้กำหนดร่างขอบเขตของงานหรือรายละเอียดคุณลักษณะเฉพาะ
                                </p>
                                <p class="memo-paragraph-content-level1">
                                    {{ $requisition->requester->prefix->name . $requisition->requester->firstname . $requisition->requester->lastname }}
                                    <span style="margin: 0 0 0 5px; padding: 0;">
                                        ตำแหน่ง {{ $requisition->requester->position->name . $requisition->requester->level->name }}
                                    </span>
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div style="margin: 0;">
                                <p class="memo-paragraph-content">
                                    ผู้ตรวจรับพัสดุ
                                </p>
                                @foreach($requisition->committees as $committee)
                                    <p class="memo-paragraph-content-level1">
                                        {{ $committee->employee->prefix->name . $committee->employee->firstname . $committee->employee->lastname }}
                                        <span style="margin: 0 0 0 5px; padding: 0;">
                                            ตำแหน่ง {{ $committee->employee->position->name . $committee->employee->level->name }}
                                        </span>
                                    </p>
                                @endforeach
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="padding-top: 5px;">
                            <p class="memo-paragraph-content">
                                จึงเรียนมาเพื่อโปรดพิจารณา หากเห็นชอบขอได้โปรดอนุมัติหลักการให้จัดซื้อจัดจ้างพัสดุ ตามรายการดังกล่าวข้างต้น และแต่งตั้งกรรมการดำเนินการตามที่เสนอ
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2" style="padding-top: 10px;">
                            <div style="text-align: center; width: 100%; height: 80px;">
                                <div style="text-align: center;">
                                    <p style="margin: 0;">
                                        <span class="dot">(ผู้ขอ)......................................................</span>
                                    </p>
                                    <p style="margin: 0;">
                                        ( {{ $requisition->requester->prefix->name . $requisition->requester->firstname . $requisition->requester->lastname }} )
                                    </p>
                                    <p style="margin: 0;">
                                        <span>{{ $requisition->requester->position->name . $requisition->requester->level->name }}</span>
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p style="margin: 0;">
                                เรียน  อธิบดีกรมสุขภาพจิต
                            </p>
                            <p style="margin: 0 0 0 30px;">
                                งานพัสดุ ได้ตรวจสอบความถูกต้องของเอกสารเรียบร้อยแล้ว จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2" style="padding-top: 10px;">
                            <div style="text-align: center; width: 100%; height: 80px;">
                                <div style="text-align: center;">
                                    <p style="margin: 0;">
                                        <span class="dot">......................................................</span>
                                    </p>
                                    <p style="margin: 0;">
                                        (......................................................)
                                    </p>
                                    <p style="margin: 0;">
                                        <span>นักวิชาการพัสดุ</span>
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p style="margin: 0;">
                                เรียน อธิบดีกรมสุขภาพจิต
                            </p>
                            <p style="margin: 0 0 20px 30px;">
                                - เพื่อโปรดพิจารณาอนุมัติ
                            </p>
                            <div style="width: 100%; height: 105px;">
                                <div style="text-align: center;">
                                    <p style="margin: 0;">
                                        <span class="dot">......................................................</span>
                                    </p>
                                    <p style="margin: 0;">
                                        (......................................................)
                                    </p>
                                    <p style="margin: 0;">
                                        <span>หัวหน้าเจ้าหน้าที่</span>
                                    </p>
                                    <p style="margin: 0;">
                                        <span>วันที่.................................................</span>
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td colspan="2" style="padding-top: 40px;">
                            <div style="text-align: center; width: 100%; height: 140px;">
                                <p style="margin: 0 0 35px 0;">
                                    <span style="margin: 0;">[&nbsp;&nbsp;] อนุมัติ</span>
                                    <span style="margin: 20px;">[&nbsp;&nbsp;] ไม่อนุมัติ</span>
                                </p>
                                <div style="text-align: center;">
                                    <p style="margin: 0;">
                                        ( {{ thainumDigit('นางสาวศิริลักษณ์ แก้วเกียรติพงษ์') }} )
                                    </p>
                                    <p style="margin: 0;">
                                        ผู้อำนวยการ{{ thainumDigit('ศูนย์สุขภาพจิตที่ 9') }}
                                    </p>
                                    <p style="margin: 0;">
                                        <span>วันที่.................................................</span>
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <p class="print-options">พิมพ์จากระบบ WPM เมื่อ {{ date('Y-m-d H:i:s') }}</p>
        </div>


        <div class="page-break"></div>
    <!-- ==================================== END PAGE 1 ==================================== -->

    <!-- ==================================== PAGE 2 ==================================== -->
        <div class="container">
            <div class="memo-header">
                <h2>รายละเอียดที่ขอ{{ ($requisition->order_type_id == 1) ? 'ซื้อ' : 'จ้าง' }}</h2>
            </div>
            <div class="content">
                <?php $committeeHeight = 0; ?>

                <table style="width: 100%;">
                    <?php $row = 0; ?>
                    <?php $restRow = 0; ?>
                    <?php $total = 0; ?>
                    <?php $tableHeight = 0; ?>
                    <?php $haveRowOvered = 0; ?>
                    <?php $nextBullet = 0; ?>
                    <?php $page = 1; ?>

                    <!-- ========================================= รายการน้อยกว่า 12 รายการ ===================================== -->
                    @if (count($requisition->details) <= 12)
                        <tr>
                            <td colspan="4">
                                <div class="table-container">
                                    <table style="width: 100%;" class="table" border="1">
                                        <tr style="font-size: 14pt;">
                                            <th style="width: 5%; text-align: center;">ลำดับ</th>
                                            <th style="text-align: center;">รายการ</th>
                                            <th style="width: 10%; text-align: center;">จำนวนหน่วย</th>
                                            <th style="width: 15%; text-align: center;">ราคาต่อหน่วย</th>
                                            <th style="width: 15%; text-align: center;">ราคารวม</th>
                                        </tr>
                                        @foreach($requisition->details as $detail)
                                            <?php $total += (float)$detail->sum_price; ?>
                                            <tr>
                                                <td style="text-align: center;">{{ thainumDigit(++$row) }}</td>
                                                <td>
                                                    <div class="support__detail-item">
                                                        <span style="margin: 0">
                                                            {{ thainumDigit($detail->item->name) }}
                                                        </span>

                                                        @if($detail->description != '')
                                                            <p class="item__desc-text">
                                                                - {{ thainumDigit($detail->description) }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td style="text-align: center;">
                                                    {{ thainumDigit(number_format($detail->amount)) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    {{ thainumDigit(number_format($detail->price, 2)) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    {{ thainumDigit(number_format($detail->total, 2)) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td style="text-align: center; font-weight: bold; padding: 1px 0;" colspan="4">
                                                รวมเป็นเงินทั้งสิ้น
                                            </td>
                                            <td style="text-align: right; padding: 1px 0;">
                                                {{ thainumDigit(number_format($requisition->net_total, 2)) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                    <!-- ========================================= รายการมากกว่า 12 รายการ ===================================== -->
                    <!-- @else -->
                        <tr>
                            <td colspan="4">
                                <!-- <div class="table-container">
                                    <table style="width: 100%;" class="table" border="1">
                                        <tr style="font-size: 16px;">
                                            <th style="width: 5%; text-align: center;">ลำดับ</th>
                                            <th style="text-align: center;">รายการ</th>
                                            <th style="width: 10%; text-align: center;">จำนวนหน่วย</th>
                                            <th style="width: 15%; text-align: center;">ราคาต่อหน่วย</th>
                                            <th style="width: 15%; text-align: center;">ราคารวม</th>
                                        </tr>
                                        @foreach($requisition->details as $detail)
                                            @if ($row < 12)
                                                <tr style="min-height: 20px;">
                                                    <td style="text-align: center;">{{ thainumDigit(++$row) }}</td>
                                                    <td>
                                                        <div class="support__detail-item">
                                                            <span style="margin: 0">
                                                                {{ thainumDigit($detail->item->name) }}
                                                            </span>

                                                            @if($detail->description != '')
                                                                <p class="item__desc-text">
                                                                    - {{ thainumDigit($detail->description) }}
                                                                </p>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ thainumDigit(number_format($detail->amount)) }}
                                                    </td>
                                                    <td style="text-align: right;">
                                                        {{ thainumDigit(number_format($detail->price, 2)) }}
                                                    </td>
                                                    <td style="text-align: right;">
                                                        {{ thainumDigit(number_format($detail->total, 2)) }}
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </table>
                                </div> -->

                                <!-- ############################ Pagination ############################ -->
                                <div style="height: 20px;"></div>
                                <p class="next-paragraph">/{{ thainumDigit(++$row) }}...</p>
                                <!-- ############################ Pagination ############################ -->

                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">

                                <!-- ############################ Pagination ############################ -->
                                <p class="page-number">- {{ thainumDigit(++$page) }} -</p>
                                <!-- ############################ Pagination ############################ -->

                                <!-- <table style="width: 100%;" class="table" border="1">
                                    @foreach($requisition->details as $detail)
                                        <?php ++$restRow; ?>
                                        @if ($restRow > 12 && $restRow < 28)
                                            <?php $total += (float)$detail->sum_price; ?>
                                            <tr style="min-height: 20px;">
                                                <td style="width: 5%; text-align: center;">{{ thainumDigit($restRow) }}</td>
                                                <td>
                                                    <div class="support__detail-item">
                                                        <span style="margin: 0">
                                                            {{ thainumDigit($detail->item->name) }}
                                                        </span>

                                                        @if($detail->description != '')
                                                            <p class="item__desc-text">
                                                                - {{ thainumDigit($detail->description) }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td style="text-align: center;">
                                                    {{ thainumDigit(number_format($detail->amount)) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    {{ thainumDigit(number_format($detail->price, 2)) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    {{ thainumDigit(number_format($detail->total, 2)) }}
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                    @if(count($requisition->details) > 12 && count($requisition->details) <= 28)
                                        <tr>
                                            <td style="text-align: center; font-weight: bold;" colspan="4">
                                                รวมเป็นเงินทั้งสิ้น
                                            </td>
                                            <td style="text-align: right;">
                                                {{ thainumDigit(number_format($requisition->net_total, 2)) }}
                                            </td>
                                        </tr>
                                    @endif
                                </table> -->

                                <!-- ############################ Pagination ############################ -->
                                <!-- @if(count($requisition->details) > 28)
                                    <p class="next-paragraph">/{{ thainumDigit(28) }}...</p>
                                @endif -->
                                <!-- ############################ End Pagination ############################ -->
                            </td>
                        </tr>

                        <!-- ========================================= รายการมากกว่า 28 รายการขึ้นไป ===================================== -->
                        <!-- @if (count($requisition->details) > 28)
                            <?php $restRow = 0; ?>
                            <tr>
                                <td colspan="4">
                                    <p class="page-number">- {{ thainumDigit(++$page) }} -</p>

                                    <table style="width: 100%;" class="table" border="1">
                                        @foreach($requisition->details as $detail)
                                            <?php ++$restRow; ?>
                                            @if ($restRow >= 28)
                                                <?php $total += (float)$detail->sum_price; ?>
                                                <tr style="min-height: 20px;">
                                                    <td style="width: 5%; text-align: center;">{{ thainumDigit($restRow) }}</td>
                                                    <td>
                                                        <div class="support__detail-item">
                                                            <span style="margin: 0">
                                                                {{ thainumDigit($detail->item->name) }}
                                                            </span>

                                                            @if($detail->description != '')
                                                                <p class="item__desc-text">
                                                                    - {{ thainumDigit($detail->description) }}
                                                                </p>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ thainumDigit(number_format($detail->amount)) }}
                                                    </td>
                                                    <td style="text-align: right;">
                                                        {{ thainumDigit(number_format($detail->price, 2)) }}
                                                    </td>
                                                    <td style="text-align: right;">
                                                        {{ thainumDigit(number_format($detail->total, 2)) }}
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                        <tr>
                                            <td style="text-align: center; font-weight: bold;" colspan="4">
                                                รวมเป็นเงินทั้งสิ้น
                                            </td>
                                            <td style="text-align: right;">
                                                {{ thainumDigit(number_format($requisition->net_total, 2)) }}
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        @endif -->
                        <!-- ========================================= End รายการมากกว่า 28 รายการขึ้นไป ===================================== -->
                    @endif
                    <!-- ========================================= End รายการมากกว่า 12 รายการ ===================================== -->
                    <tr>
                        <td colspan="4" style="padding-top: 20px;">
                            <div style="position: relative; text-align: center; width: 100%; height: 80px;">
                                <div style="text-align: center;">
                                    <p style="margin: 0;">
                                        <span class="dot">ลงชื่อ......................................................</span>
                                    </p>
                                    <p style="margin: 0;">
                                        ( {{ $requisition->requester->prefix->name . $requisition->requester->firstname . $requisition->requester->lastname }} )
                                    </p>
                                    <p style="margin: 0;">
                                        <span>{{ $requisition->requester->position->name . $requisition->requester->level->name }}</span>
                                    </p>
                                </div>
                                <div style="position: absolute; text-align: left; top: 0; left: 50%; margin-left: 110px;">
                                    ผู้กำหนดร่างขอบเขตของงาน<br />
                                    หรือรายละเอียดคุณลักษณะเฉพาะ
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <p class="print-options">พิมพ์จากระบบ WPM เมื่อ {{ date('Y-m-d H:i:s') }}</p>
        </div>
    <!-- ==================================== END PAGE 2 ==================================== -->
    </body>
</html>