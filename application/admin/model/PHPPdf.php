<?php
namespace app\admin\model;

class PHPPdf
{
	//pdf生成
	public static function pdf($header=[],$data=[],$fileName='PdfFile'){
		set_time_limit(120);
		if(empty($header) || empty($data)) $this->error("导出的数据为空！");
		vendor("tcpdf.tcpdf");
		$pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);//新建pdf文件
		//设置文件信息
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor("Author");
		$pdf->SetTitle("PHP输出示例-2018");
		$pdf->SetSubject('TCPDF Tutorial');
		$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
		//设置页眉页脚
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'http://www.aliyun.com','Copyright © 2015-2018 by linzening, Ltd. All Rights reserved',array(66,66,66), array(0,0,0));
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);//设置默认等宽字体
		$pdf->SetMargins(PDF_MARGIN_LEFT, 24, PDF_MARGIN_RIGHT);//设置页面边幅
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);//设置纸张头部
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);//设置纸张底部
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);//设置自动分页符
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		$pdf->setLanguageArray(['a_meta_charset'=>'UTF-8','a_meta_dir'=>'ltr','a_meta_language'=>'en','w_page'=>date("Y-m-d").'  page']);
		$pdf->SetFont('droidsansfallback', '');
		$pdf->AddPage();

		$pdf->SetFillColor(245, 245, 245);
		$pdf->SetTextColor(0);
		$pdf->SetDrawColor(66, 66, 66);
		$pdf->SetLineWidth(0.3);
		$pdf->SetFont('droidsansfallback', '',9);
		// Header
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; ++$i) {
			$pdf->Cell(180/$num_headers, 8, $header[$i], 1, 0, 'C', 1);
		}
		$pdf->Ln();

		// 填充数据
		$fill = 0;
		foreach($data as $list) {
		//每頁重复表格标题行
			if(($pdf->getPageHeight()-$pdf->getY())<($pdf->getBreakMargin()+2)){
				$pdf->SetFillColor(245, 245, 245);
				$pdf->SetTextColor(0);
				$pdf->SetDrawColor(66, 66, 66);
				$pdf->SetLineWidth(0.3);
				$pdf->SetFont('droidsansfallback', '',9);
				// Header
				for($i = 0; $i < $num_headers; ++$i) {
					$pdf->Cell(180/$num_headers, 8, $header[$i], 1, 0, 'C', 1);
				}
				$pdf->Ln();
			}
			// Color and font restoration
			$pdf->SetFillColor(245, 245, 245);
			$pdf->SetTextColor(40);
			$pdf->SetLineWidth(0.1);
			$pdf->SetFont('droidsansfallback', '');
			$i=0;
			foreach($list as $key=>$row){
				// $pdf->Cell($head_width[$i], 6, $row, 'LR', 0, 'C', $fill);
				$pdf->MultiCell(180/$num_headers, 6, $row, $border=1, $align='C',$fill, $ln=0, $x='', $y='',  $reseth=true, $stretch=0,$ishtml=false, $autopadding=true, $maxh=0, $valign='C', $fitcell=true);
				$i++;
			}
			$pdf->Ln();
			$fill=!$fill;
		}
		$showType= 'I';//PDF输出的方式。I，在浏览器中打开；D，以文件形式下载；F，保存到服务器中；S，以字符串形式输出；E：以邮件的附件输出。
		$pdf->Output("{$fileName}-".time().".pdf", $showType);
		exit;
	}
}