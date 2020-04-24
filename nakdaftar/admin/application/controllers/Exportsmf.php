<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Exportsmf extends MY_Controller {
    // construct
    public function __construct() {
        parent::__construct();
        // load model
        $this->load->model('Export_modelsmf', 'export');
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
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Gender'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Tiket');        
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Kaunter'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'State'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Postcode'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Country'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('M1', 'Company'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('N1', 'Industry'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('O1', 'Status'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('P1', 'Working'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('Q1', 'Hope'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('R1', 'Funnel'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('S1', 'Interest'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('T1', 'Experience'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('U1', 'Investment');
        $objPHPExcel->getActiveSheet()->SetCellValue('V1', 'Kehadiran');
        $objPHPExcel->getActiveSheet()->SetCellValue('W1', 'Income'); 
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->no_siri);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->nric);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->name);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->phone);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->email);
            $objPHPExcel->getActiveSheet()->SetCellValue('F'. $rowCount, $list->size); 
            $objPHPExcel->getActiveSheet()->SetCellValue('G'. $rowCount, $list->gender); 
            $objPHPExcel->getActiveSheet()->SetCellValue('H'. $rowCount, $list->tiket);        
            $objPHPExcel->getActiveSheet()->SetCellValue('I'. $rowCount, $list->kaunter); 
            $objPHPExcel->getActiveSheet()->SetCellValue('J'. $rowCount, $list->state); 
            $objPHPExcel->getActiveSheet()->SetCellValue('K'. $rowCount, $list->postcode); 
            $objPHPExcel->getActiveSheet()->SetCellValue('L'. $rowCount, $list->country); 
            $objPHPExcel->getActiveSheet()->SetCellValue('M'. $rowCount, $list->company); 
            $objPHPExcel->getActiveSheet()->SetCellValue('N'. $rowCount, $list->industry); 
            $objPHPExcel->getActiveSheet()->SetCellValue('O'. $rowCount, $list->status); 
            $objPHPExcel->getActiveSheet()->SetCellValue('P'. $rowCount, $list->working); 
            $objPHPExcel->getActiveSheet()->SetCellValue('Q'. $rowCount, $list->hope); 
            $objPHPExcel->getActiveSheet()->SetCellValue('R'. $rowCount, $list->funnel); 
            $objPHPExcel->getActiveSheet()->SetCellValue('S'. $rowCount, $list->interest); 
            $objPHPExcel->getActiveSheet()->SetCellValue('T'. $rowCount, $list->experience); 
            $objPHPExcel->getActiveSheet()->SetCellValue('U'. $rowCount, $list->investment);
            $objPHPExcel->getActiveSheet()->SetCellValue('V'. $rowCount, $list->kehadiran);
            $objPHPExcel->getActiveSheet()->SetCellValue('W'. $rowCount, $list->income); 
            $rowCount++;
        }
        ////////////////////////////////////xlsx////////////////
        $filename = "SMF Excel2007 ". date("Y-m-d").".xlsx";
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
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Gender'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Tiket');        
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Kaunter'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'State'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Postcode'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Country'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('M1', 'Company'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('N1', 'Industry'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('O1', 'Status'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('P1', 'Working'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('Q1', 'Hope'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('R1', 'Funnel'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('S1', 'Interest'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('T1', 'Experience'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('U1', 'Investment');
        $objPHPExcel->getActiveSheet()->SetCellValue('V1', 'Kehadiran');
        $objPHPExcel->getActiveSheet()->SetCellValue('W1', 'Income'); 
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->no_siri);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->nric);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->name);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->phone);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->email);
            $objPHPExcel->getActiveSheet()->SetCellValue('F'. $rowCount, $list->size); 
            $objPHPExcel->getActiveSheet()->SetCellValue('G'. $rowCount, $list->gender); 
            $objPHPExcel->getActiveSheet()->SetCellValue('H'. $rowCount, $list->tiket);        
            $objPHPExcel->getActiveSheet()->SetCellValue('I'. $rowCount, $list->kaunter); 
            $objPHPExcel->getActiveSheet()->SetCellValue('J'. $rowCount, $list->state); 
            $objPHPExcel->getActiveSheet()->SetCellValue('K'. $rowCount, $list->postcode); 
            $objPHPExcel->getActiveSheet()->SetCellValue('L'. $rowCount, $list->country); 
            $objPHPExcel->getActiveSheet()->SetCellValue('M'. $rowCount, $list->company); 
            $objPHPExcel->getActiveSheet()->SetCellValue('N'. $rowCount, $list->industry); 
            $objPHPExcel->getActiveSheet()->SetCellValue('O'. $rowCount, $list->status); 
            $objPHPExcel->getActiveSheet()->SetCellValue('P'. $rowCount, $list->working); 
            $objPHPExcel->getActiveSheet()->SetCellValue('Q'. $rowCount, $list->hope); 
            $objPHPExcel->getActiveSheet()->SetCellValue('R'. $rowCount, $list->funnel); 
            $objPHPExcel->getActiveSheet()->SetCellValue('S'. $rowCount, $list->interest); 
            $objPHPExcel->getActiveSheet()->SetCellValue('T'. $rowCount, $list->experience); 
            $objPHPExcel->getActiveSheet()->SetCellValue('U'. $rowCount, $list->investment);
            $objPHPExcel->getActiveSheet()->SetCellValue('V'. $rowCount, $list->kehadiran);
            $objPHPExcel->getActiveSheet()->SetCellValue('W'. $rowCount, $list->income); 
            $rowCount++;
        }
        ///////////////////////////xls//////
        $filename = "SMF Excel2005 ". date("Y-m-d").".xls";
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
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Gender'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Tiket');        
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Kaunter'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'State'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Postcode'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Country'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('M1', 'Company'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('N1', 'Industry'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('O1', 'Status'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('P1', 'Working'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('Q1', 'Hope'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('R1', 'Funnel'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('S1', 'Interest'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('T1', 'Experience'); 
        $objPHPExcel->getActiveSheet()->SetCellValue('U1', 'Investment');
        $objPHPExcel->getActiveSheet()->SetCellValue('V1', 'Kehadiran');
        $objPHPExcel->getActiveSheet()->SetCellValue('W1', 'Income'); 
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->no_siri);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->nric);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->name);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->phone);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->email);
            $objPHPExcel->getActiveSheet()->SetCellValue('F'. $rowCount, $list->size); 
            $objPHPExcel->getActiveSheet()->SetCellValue('G'. $rowCount, $list->gender); 
            $objPHPExcel->getActiveSheet()->SetCellValue('H'. $rowCount, $list->tiket);        
            $objPHPExcel->getActiveSheet()->SetCellValue('I'. $rowCount, $list->kaunter); 
            $objPHPExcel->getActiveSheet()->SetCellValue('J'. $rowCount, $list->state); 
            $objPHPExcel->getActiveSheet()->SetCellValue('K'. $rowCount, $list->postcode); 
            $objPHPExcel->getActiveSheet()->SetCellValue('L'. $rowCount, $list->country); 
            $objPHPExcel->getActiveSheet()->SetCellValue('M'. $rowCount, $list->company); 
            $objPHPExcel->getActiveSheet()->SetCellValue('N'. $rowCount, $list->industry); 
            $objPHPExcel->getActiveSheet()->SetCellValue('O'. $rowCount, $list->status); 
            $objPHPExcel->getActiveSheet()->SetCellValue('P'. $rowCount, $list->working); 
            $objPHPExcel->getActiveSheet()->SetCellValue('Q'. $rowCount, $list->hope); 
            $objPHPExcel->getActiveSheet()->SetCellValue('R'. $rowCount, $list->funnel); 
            $objPHPExcel->getActiveSheet()->SetCellValue('S'. $rowCount, $list->interest); 
            $objPHPExcel->getActiveSheet()->SetCellValue('T'. $rowCount, $list->experience); 
            $objPHPExcel->getActiveSheet()->SetCellValue('U'. $rowCount, $list->investment);
            $objPHPExcel->getActiveSheet()->SetCellValue('V'. $rowCount, $list->kehadiran);
            $objPHPExcel->getActiveSheet()->SetCellValue('W'. $rowCount, $list->income); 
            $rowCount++;
        }

        //////////////////////csv////////////////////
        $filename = "SMF CSV ". date("Y-m-d").".csv";///////this for name file and date
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'csv'); 
        // $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'xlsx'); 
        $objWriter->save('php://output'); 
    }
     
}