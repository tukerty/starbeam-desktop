<?php
// Подключаем класс для работы с excel
require_once('Classes/PHPExcel.php');
// Подключаем класс для вывода данных в формате excel
require_once('Classes/PHPExcel/Writer/Excel5.php');
 include ('db.php');
define("PRICE_FORMAT", PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1. "[\$ руб.-419]");
$ids=$_POST['ids'];

// Создаем объект класса PHPExcel
$xls = new PHPExcel();
// Устанавливаем индекс активного листа
$xls->setActiveSheetIndex(0);
// Получаем активный лист
$sheet = $xls->getActiveSheet();
// Подписываем лист
$sheet->setTitle('Смета на сайт');

// Вставляем текст в ячейку A1
$imagePath = dirname ( __FILE__ ) . '/images/logo_site.png';


if (file_exists($imagePath)) {
    $logo = new PHPExcel_Worksheet_Drawing();
    $logo->setPath($imagePath);
    $logo->setCoordinates("A1");
    $logo->setOffsetX(0);
    $logo->setOffsetY(0);
    $sheet->getRowDimension(1)->setRowHeight(107);
    $logo->setWorksheet($sheet);
}
$sheet->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->getStyle('A1')->getFill()->getStartColor()->applyFromArray(array('rgb' => '000000'));
$sheet->getColumnDimension('A')->setWidth(80);
$sheet->getColumnDimension('B')->setWidth(30);
// Объединяем ячейки
$sheet->mergeCells('A1:B1');


// Выравнивание текста
$sheet->getStyle('A1')->getAlignment()->setHorizontal(
PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$i=2;
$pos=serialize($ids);
$type=1;
$result4= mysqli_query($cnt,"INSERT INTO download_xls (positions,type) VALUES ('$pos','$type')");
$result5= mysqli_query($cnt,"SELECT * FROM download_xls WHERE positions='$pos'");
$row5=mysqli_fetch_array($result5);
$my_id=$row5['id'];
$result= mysqli_query($cnt,"SELECT * FROM categories ORDER BY cat_prio");
while($row=mysqli_fetch_array($result))
{
    $sheet->setCellValueByColumnAndRow(
        0,
        $i,
        $row['cat_name']);
    $i1='A'.$i;

    $sheet->getStyle($i1)->getAlignment()->setWrapText(true);
    $sheet->getStyle($i1)->getFont()->setSize(15);
    $sheet->getStyle($i1)->getFont()->setBold(true);
    $sheet->getStyle($i1)->applyFromArray(
        array(
            'borders' => array(
                'top' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THICK,
                    'color' => array('rgb' => '000000')
                ),
                'bottom' => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
                    'color' => array('rgb' => '000000')
                )

            )
        )
    );
    $i1='B'.$i;
    $sheet->getStyle($i1)->applyFromArray(
        array(
            'borders' => array(
                'top' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THICK,
                    'color' => array('rgb' => '000000')
                ),
                'bottom' => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
                    'color' => array('rgb' => '000000')
                )

            )
        )
    );
    $i+=1;
    $result1= mysqli_query($cnt,"SELECT * FROM smeta WHERE category='$row[cat_id]' ORDER BY prio");
    while($row1=mysqli_fetch_array($result1))
    {
        if (in_array($row1['id'],$ids )){
            $sheet->setCellValueByColumnAndRow(
                0,
                $i,
                $row1['name']);
            $i1='A'.$i;
            $sheet->getStyle($i1)->getAlignment()->setIndent(1);
            $sheet->getStyle($i1)->getFont()->setSize(12);
            $sheet->getStyle($i1)->getAlignment()->setWrapText(true);
            $sheet->getStyle($i1)->getFont()->setBold(true);
            $sheet->getStyle($i1)->applyFromArray(
                array(
                    'borders' => array(
                        'top' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => array('rgb' => '000000')
                        )
                    )
                )
            );
            $sheet->setCellValueByColumnAndRow(
                1,
                $i,
                $row1['cost']);
            $i1='B'.$i;
            $sheet->getStyle($i1)->getFont()->setSize(13);
            $sheet->getStyle($i1)->getFont()->setBold(true);
            $sheet->getStyle($i1)->getNumberFormat()->setFormatCode(PRICE_FORMAT);
            $sheet->getStyle($i1)->applyFromArray(
                array(
                    'borders' => array(
                        'top' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => array('rgb' => '000000')
                        )
                    )
                )
            );
            $i+=1;
            if (!empty($row1['descr'])){
                $sheet->setCellValueByColumnAndRow(
                    0,
                    $i,
                    $row1['descr']);

                $i1='A'.$i;
                $sheet->getStyle($i1)->getAlignment()->setIndent(2);
                $sheet->getStyle($i1)->getAlignment()->setWrapText(true);
                $i+=1;
            }
        }
    }
}
$sheet->setCellValueByColumnAndRow(
    0,
    $i,
    'Итого:');
$i1='A'.$i;
$sheet->getStyle($i1)->getFont()->setSize(15);
$sheet->getStyle($i1)->getFont()->setBold(true);
$sheet->getStyle($i1)->applyFromArray(
    array(
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THICK,
                'color' => array('rgb' => '000000')
            )

        )
    )
);
$f='=SUM(B3:B'.($i-1).')';
$sheet->setCellValueByColumnAndRow(
    1,
    $i,
    $f);
$i1='B'.$i;
$sheet->getStyle($i1)->getNumberFormat()->setFormatCode(PRICE_FORMAT);
$sheet->getStyle($i1)->getFont()->setSize(15);
$sheet->getStyle($i1)->getFont()->setBold(true);
$sheet->getStyle($i1)->applyFromArray(
    array(
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THICK,
                'color' => array('rgb' => '000000')
            )

        )
    )
);

// Выводим HTTP-заголовки


// Выводим содержимое файла

$objWriter = new PHPExcel_Writer_Excel5($xls);
$objWriter->save('xls/estimate'.$my_id.'.xls');
echo 'xls/estimate'.$my_id.'.xls';