<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Exportmmd extends MY_Controller {
    // construct
    public function __construct() {
        parent::__construct();
        // load model
        $this->load->model('Export_modelmmd', 'export');
    }    
 
    // public function index() {
    //     $data['export_list'] = $this->export->exportList();
    //     $this->load->view('export', $data);
    //     //$this->load->view('export');
    // }
    // create xlsx
    public function generateXlsx() {
        //////////////////////this csv/////////////
        //// create file name
        //$fileName = 'data-'.time().'.xls';  
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->export->exportList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'No Siri');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Nric');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Phone');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Email');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Size'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Tiket');         
        $objPHPExcel->getActiveSheet()->SetCellValue('V1', 'Kehadiran');
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->no_siri);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->nric);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->name);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->phone);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->email);
            $objPHPExcel->getActiveSheet()->SetCellValue('F'. $rowCount, $list->size);  
            $objPHPExcel->getActiveSheet()->SetCellValue('H'. $rowCount, $list->tiket);        
            $objPHPExcel->getActiveSheet()->SetCellValue('V'. $rowCount, $list->kehadiran); 
            $rowCount++;
        }
        ////////////////////////////////////xlsx////////////////
        $filename = "MMD Excel2007 ". date("Y-m-d").".xlsx";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        $objWriter->save('php://output');
    }

    public function generateXls() {
        //////////////////////this csv/////////////
        //// create file name
        //$fileName = 'data-'.time().'.xls';  
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->export->exportList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'No Siri');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Nric');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Phone');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Email');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Size'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Tiket');         
        $objPHPExcel->getActiveSheet()->SetCellValue('V1', 'Kehadiran');
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->no_siri);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->nric);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->name);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->phone);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->email);
            $objPHPExcel->getActiveSheet()->SetCellValue('F'. $rowCount, $list->size);  
            $objPHPExcel->getActiveSheet()->SetCellValue('H'. $rowCount, $list->tiket);        
            $objPHPExcel->getActiveSheet()->SetCellValue('V'. $rowCount, $list->kehadiran); 
            $rowCount++;
        }
        ///////////////////////////xls//////
        $filename = "MMD Excel2005 ". date("Y-m-d").".xls";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        $objWriter->save('php://output');
    }

    public function generateCsv() {
        //////////////////////this csv/////////////
        //// create file name
        //$fileName = 'data-'.time().'.xls';  
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $this->load->library('excel');
        $listInfo = $this->export->exportList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'No Siri');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Nric');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Phone');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Email');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Size'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Tiket');         
        $objPHPExcel->getActiveSheet()->SetCellValue('V1', 'Kehadiran');
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->no_siri);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->nric);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->name);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->phone);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->email);
            $objPHPExcel->getActiveSheet()->SetCellValue('F'. $rowCount, $list->size);  
            $objPHPExcel->getActiveSheet()->SetCellValue('H'. $rowCount, $list->tiket);        
            $objPHPExcel->getActiveSheet()->SetCellValue('V'. $rowCount, $list->kehadiran); 
            $rowCount++;
        }

        //////////////////////csv////////////////////
        $filename = "MMD CSV ". date("Y-m-d").".csv";///////this for name file and date
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'csv'); 
        // $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'xlsx'); 
        $objWriter->save('php://output'); 
    }
     
}