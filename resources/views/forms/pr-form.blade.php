<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>บันทึกขอสนับสนุน</title>
        <link rel="stylesheet" href="{{ asset('/css/pdf.css') }}">
    </head>
    <body>
        <div class="memo-container-narrow">
            <div class="memo-header-narrow">
                <div class="logo-krut">
                    <img src="{{ asset('/img/krut.jpg') }}" alt="krut" />
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
                                    <span style="margin: 0 5px;">
                                        {{ 'กลุ่มงานการพยาบาลด้านการควบคุมและป้องกันการติดเชื้อฯ' }}
                                    </span>
                                    <span style="margin: 0 1px;">โรงพยาบาลเทพรัตน์นครราชสีมา</span>
                                    <span style="margin: 0 1px;">
                                            โทร {{ thainumDigit('1234') }}
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
                                    <span style="margin: 0 5px;">{{ thainumDigit('สธ 0300') }}</span>
                                </div>
                            </div>
                        </td>
                        <td colspan="2">
                            <div class="content-header">
                                <span class="content__header-topic">วันที่</span>
                                <div class="content__header-text" style="width: 88%;">
                                    <span style="margin: 0 10px;">
                                        {{ '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.thainumDigit(convDbDateToLongThMonth(date('Y-m-d'))) }}
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
                                    <span>.................</span>
                                </div>
                            </div>
                            <div style="margin: 0; padding: 0;">
                                <span style="font-size: 20px;">เรียน</span>
                                <span>ผู้อำนวยการ</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p class="memo-paragraph-content">
                                ด้วย ................. มีความประสงค์ขอให้ดำเนินการซื้อ / จ้าง ดังนี้
                            </p>
                        </td>
                    </tr>

                    <?php $row = 0; ?>
                    <?php $restRow = 0; ?>
                    <?php $total = 0; ?>
                    <?php $tableHeight = 0; ?>
                    <?php $haveRowOvered = 0; ?>
                    <?php $nextBullet = 0; ?>
                    <?php $page = 1; ?>

                    <!-- ========================================= รายการน้อยกว่า 12 รายการ ===================================== -->
                    <!-- @if (count($requisition->details) <= 12) -->
                        <tr>
                            <td colspan="4">
                                <div class="table-container">
                                    <table style="width: 100%;" class="table" border="1">
                                        <!-- <tr style="font-size: 16px;">
                                            <th style="width: 5%; text-align: center;">ลำดับ</th>
                                            <th style="text-align: center;">รายการ</th>
                                            <th style="width: 10%; text-align: center;">จำนวนหน่วย</th>
                                            <th style="width: 15%; text-align: center;">ราคาต่อหน่วย</th>
                                            <th style="width: 15%; text-align: center;">ราคารวม</th>
                                        </tr>
                                        @foreach($requisition->details as $detail)
                                            <?php //$total += (float)$detail->sum_price; ?>
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
                                        @endforeach
                                        <tr>
                                            <td style="text-align: center; font-weight: bold;" colspan="4">
                                                รวมเป็นเงินทั้งสิ้น
                                            </td>
                                            <td style="text-align: right;">
                                                {{ thainumDigit(number_format($requisition->net_total, 2)) }}
                                            </td>
                                        </tr> -->
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <!-- ############################ Pagination ############################ -->
                        <!-- @if(count($requisition->details) == 12)
                            <tr>
                                <td colspan="4">
                                    <div style="height: 20px;"></div>
                                    <p class="next-paragraph">/เหตุผลและความจำเป็น...</p>
                                </td>
                            </tr>
                        @endif -->
                        <!-- ############################ Pagination ############################ -->

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

                    <!-- @endif -->
                    <!-- ========================================= End รายการมากกว่า 12 รายการ ===================================== -->

                    <!-- <tr>
                        <td colspan="4">
                            <span>เหตุผลและความจำเป็น</span>
                            <span style="margin: 0 0 0 5px;" class="text-val-dot">
                                {{ thainumDigit($requisition->reason) }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            พร้อมนี้ได้ส่งข้อมูลประกอบการดำเนินการมาด้วย คือ
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div style="margin: 0;">
                                ๑. รายชื่อคณะกรรมการกำหนดคุณลักษณะเฉพาะวัสดุหรือครุภัณฑ์ (กรณีงานซื้อ)/คณะกรรมการจัดทำร่างขอบเขตงาน (กรณีงานจ้าง)
                                <ul class="committee-lists">
                                    <li class="committee-list">
                                        ๑.......................
                                        <span style="margin: 0 0 0 5px; padding: 0;">
                                            ตำแหน่ง .......................
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div style="margin: 0;">
                                ๒. รายชื่อคณะกรรมการพิจารณาผลการประกวดราคา
                                <ul class="committee-lists">
                                    <li class="committee-list">
                                        ๑.......................
                                        <span style="margin: 0 0 0 5px; padding: 0;">
                                            ตำแหน่ง .......................
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div style="margin: 0;">
                                ๓. รายชื่อคณะกรรมการตรวจรับพัสดุ
                                <ul class="committee-lists">
                                    <li class="committee-list">
                                        ๑.......................
                                        <span style="margin: 0 0 0 5px; padding: 0;">
                                            ตำแหน่ง .......................
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p style="margin: 0;">
                                ๔.  ชื่อผู้ขาย ข้อมูลร้านค้า/ข้อมูลสินค้า/ราคาสินค้า ตามที่แนบ  จำนวน............แผ่น
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p style="margin: 0;">
                                ๕.  รายละเอียดคุณลักษณะเฉพาะพัสดุ/ร่างขอบเขตงาน/แบบแปลน/ใบปริมาณงาน ตามที่แนบ จำนวน............แผ่น
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p style="margin: 0 0 10px;">
                                ๖.  รายชื่อผู้ประสานงาน
                                <span style="margin: 0;">
                                    <span class="text-val-dot p5">.......................</span>
                                    ตำแหน่ง <span class="text-val-dot p5">.......................</span> 
                                    โทร <span class="text-val-dot p5">.......................</span>
                                </span>
                            </p>
                            <p style="margin: 0 0 0 80px;">
                                จึงเรียนมาเพื่อพิจารณา หากเห็นชอบโปรดอนุมัติ
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center; padding-top: 10px;">
                            <p style="margin: 0;">
                                หัวหน้ากลุ่มงาน<span class="dot">......................................................</span>
                            </p>
                            <p style="margin: 0;">
                                (.......................)
                            </p>
                            <p style="margin: 0;">
                                <span>ตำแหน่ง.......................</span>
                            </p>
                        </td>
                    </tr> -->
                </table>

                <!-- <div style="text-align: center; position: absolute;">
                    <p style="margin: 0 0 20px 0;">
                        <span style="margin: 0;">[&nbsp;&nbsp;] อนุมัติ</span>
                        <span style="margin: 20px;">[&nbsp;&nbsp;] ไม่อนุมัติ</span>
                    </p>
                    <p style="margin: 0;">
                        ( นายชวศักดิ์  กนกกันฑพงษ์ )
                    </p>
                    <p style="margin: 0;">
                        ผู้อำนวยการโรงพยาบาลเทพรัตน์นครราชสีมา
                    </p>
                </div> -->
            </div>
            <p class="print-options">พิมพ์จากระบบ E-Plan เมื่อ {{ date('Y-m-d H:i:s') }}</p>
        </div>
    </body>
</html>