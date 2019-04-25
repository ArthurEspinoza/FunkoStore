<?php
session_start();
include('config.php');
require('fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(60,10,'Comprobante de Pago',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}
$conn = getDB();
$idUser = $_SESSION['idUsuario'];
$item = $_SESSION['item'];
$datosItem = $conn->prepare('SELECT * FROM funko where nombre=:nombre');
$datosItem->bindParam(':nombre',$item,PDO::PARAM_STR);
$datosItem->execute();
$resultado = $datosItem->fetch(PDO::FETCH_ASSOC);
$precio = $resultado['precio'];
$idFunko = $resultado['idfunko'];
$queryUsuario = $conn->prepare('SELECT nombre,correo FROM usuario where idusuario = :idU');
$queryUsuario->bindParam(':idU',$idUser,PDO::PARAM_INT);
$queryUsuario->execute();
$resultadosU = $queryUsuario->fetch(PDO::FETCH_ASSOC);
$queryCompra = $conn->prepare('SELECT fecha from infoCompra WHERE compra_idusuario = :idU AND funko_idfunko = :idF');
$queryCompra->bindParam(':idU',$idUser,PDO::PARAM_INT);
$queryCompra->bindParam(':idF',$idFunko,PDO::PARAM_INT);
$queryCompra->execute();
$resultadosC = $queryCompra->fetch(PDO::FETCH_ASSOC);
//Mensajes
$primerMensaje = 'El usuario '.$resultadosU['nombre'].' con correo '.$resultadosU['correo'];
$segundoMensaje = "Funko: ".$item." por un precio de ".$precio;
$tercerMensaje = 'En la fecha: '.$resultadosC['fecha'];
//Generación del PDF
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',14);
$pdf->Cell(40,10,utf8_decode($primerMensaje));
$pdf->Ln(10);
$pdf->Cell(40,10,utf8_decode('acaba de realiza la compra del siguiente articulo:'));
$pdf->Ln(20);
$pdf->Cell(40, 10,utf8_decode($segundoMensaje));
$pdf->Ln(30);
$pdf->Cell(40, 10,utf8_decode($tercerMensaje));
$pdf->Output();

?>