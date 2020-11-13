<?php
	include '../formulario/formulario.php';
	include '../bancodedados/dataBase.php';
	include '../../dependencias/dompdf/autoload.inc.php';
	include '../valor/valor.php';

	use Dompdf\Dompdf;  
	$pdf = new Dompdf();
	$valor = new Valor();
	$formulario = new Formulario($_POST['nome'], $_POST['cpf'], $_POST['telefone'], $_POST['endereco'], $_POST['descricao']);
	$data = date("d/m/Y");
	
	//$dataBase = new DataBase();
	//$linkBd = $dataBase->conexaoBd();
	//$dataBase->inserirDados($formulario->getNome(), $formulario->getCpf(), $formulario->getTelefone(), $formulario->getEndereco(), $formulario->getDescricao(), $linkBd);
	
		//Cotrole Numero OS
	$fileOpen = fopen("../../dependencias/gerador_os/numero_os.txt", "r");
	$file = fread($fileOpen, filesize("../../dependencias/gerador_os/numero_os.txt"));

	$nomeEmpresa = $valor->getNomeEmpresa();
	$cnpj = $valor->getCnpj();
	$endereco = $valor->getEndereco();
	$logo = $valor->getLogo();
	$telefone = $valor->getTelefone();

	$pdf->loadHtml("<html>

						<head>
							<link href='../../dependencias/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
							<link href='../../css/pdf.css' rel='stylesheet'>
						</head>

						<body>

							<div >
								<img src='$logo' id='logo'/>
							</div>
							<h2>
								$nomeEmpresa
							</h2>
							

							<table class='table table-bordered'>

								<tr>
									<td colspan='4' class='barra'>
										<h4>
											Prestação de Serviço
										</h4>
									</td>
									<td>
										<h4>
											OS Nº: $file
										</h4>
									</td>
								</tr>
								<tr>
									<td>
										<h4>
											Cliente
										</h4>
										<td colspan='4'>
											<h4>
											$_POST[nome]
											</h4>
										</td>
									</td>
								</tr>
								<tr>
									<td>
										<h4>
											Telefone
										</h4>
									</td>
									<td>
										<h4>
											$_POST[telefone]
										</h4>
									</td>
									<td>
										<h4>
											CPF
										</h4>
									</td>
									<td colspan='2'>
										<h4>
											$_POST[cpf]
										</h4>
									</td>
								</tr>
								<tr>
									<td>
										<h4>
											Endereço
										</h4>
									</td>
									<td colspan='4'>
										<h4>
											$_POST[endereco]
										</h4>
									</td>
								</tr>
							</table>

							<table class='table table-bordered'>
								<tr>
									<td class='barra'>
										<h4>
											Defeito/Reclamaçao
										</h4>
									</td>
								</tr>
								<tr>
									<td>
										$_POST[descricao]
									</td>
								</tr>
							</table>

							<table class='table table-bordered'>
								<tr>
									<td class='barra'>
										<h4>
											Serviço Executado no Local
										</h4>
									</td>
								</tr>
								<tr>
									<td>
										$_POST[executado]
									</td>
								</tr>
							</table>

							<table class='table table-bordered'>
								<tr>
									<td class='barra'>
										<h4>
											Valor Total
										</h4>
									</td>
									<td class='barra'>
										<h4>
											Data emitida
										</h4>
									</td>
								</tr>
								<tr>
									<td>
										$_POST[valorTotal]
									</td>
									<td>
										$data
									</td>
								</tr>
							</table>

							<br><br><br><br>
							
							<table class='' id='ass'>
								<tr>
									<td>
										__________________________________________
									</td>
									<td style='margin-left: 50px;'>
										__________________________________________
									</td>
								</tr>
								<tr>
									<td>
										Cliente
									</td>
									<td style='margin-left: 50px;'>
										Prestador
									</td>
								</tr>
							</table>

							<br><br><br><br><br>
							<h5>
								CNPJ: $cnpj - $endereco / $telefone
							</h5>
						</body>

					</html>");
    $pdf->setPaper('A4', '');
    $pdf->render();
	$pdf->stream("'$file'_OS-".$_POST['nome'], array('Attachment' => 0));
	
	//Atualiza Nomero OS
	$newFile = $file + 1;
	$fileOpen = fopen("../../dependencias/gerador_os/numero_os.txt", "w") or die ("Impossível abrir o arquivo");
	fwrite($fileOpen, $newFile);
	fclose($fileOpen);
?>