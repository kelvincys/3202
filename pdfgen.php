<?php
	include_once ('TCPDF/tcpdf.php');
	require_once('TCPDF/config/tcpdf_config.php');
	session_start();
	$username = $_SESSION["username"];
	$serviceid = $_SESSION["serviceid"];
	include("dbtools.inc.php");
  	$link = create_connection();
  	$sql = "SELECT service_name,price FROM service WHERE service_id = $serviceid";
  	$result = execute_sql($link, "moment", $sql) or die(mysqli_error($link));
	while($row = mysqli_fetch_assoc($result)){
	   $servicename = $row["service_name"];
	   $price = $row["price"];

	}
	// create new PDF document

	class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo

        $image_file = K_PATH_IMAGES.'icon.png';
        $this->SetTextColor(255, 132, 156);
        $this->Image($image_file, 10, 10, 34, 17, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, ' Moment Event Purchase Reciept ', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

  
}


	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	// set document information
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Moment');
	$pdf->SetTitle('Reciept');
	$pdf->SetSubject('TCPDF Tutorial');
	$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

	// set default header data
	$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 021', PDF_HEADER_STRING);

	// set header and footer fonts
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	// set auto page breaks
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	// set image scale factor
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	// set some language-dependent strings (optional)
	if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	    require_once(dirname(__FILE__).'/lang/eng.php');
	    $pdf->setLanguageArray($l);
	}

	// ---------------------------------------------------------

	// set font
	$pdf->SetFont('helvetica', '', 9);

	// add a page
	$pdf->AddPage();
	// create some HTML content
	$html = 'Dear '.$username."<br>Thank you for purchasing '".$servicename."' <br>Amount: $". $price."<br>Our staff will contact you soon. <br>If you have any enquiries you can contact: moment3202@gmail.com <br>Contact Number: 0412228055<br>Location: 855 Stanley Street, Woolloongabba, QLD 4102 <br>Wish you have a nice day!" ;

	// output the HTML content
	$pdf->writeHTML($html, true, 0, true, 0);

	// reset pointer to the last page
	$pdf->lastPage();

	// ---------------------------------------------------------

	//Close and output PDF document
	$pdf->Output('reciept.pdf', 'I');

?>
