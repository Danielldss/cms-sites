<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ecommerce extends Controller {

  private $pagina;

  function before(){

    session_name('agenor');
    session_start();

    if(Sessao::logado() != '1'){
      $this->redirect(URL::base(true).'login/logoff/');
    }

    $this->pagina = new Pagina(' | E-commerce | LigDoctor CMS ', 'style');
    Database::$default = $_SESSION['dominio'];

  }

  public function action_valPedidos(){

    $ano = date('Y');
    $mes = date('m');

    /*GRAFICO*/
      $qryChartValPed = DB::query(Database::SELECT, "SELECT
        (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '01' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS janeiro
        , (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '02' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS fevereiro
        , (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '03' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS marco
        , (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '04' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS abril
        , (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '05' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS maio
        , (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '06' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS junho
        , (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '07' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS julho
        , (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '08' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS agosto
        , (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '09' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS setembro
        , (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '10' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS outubro
        , (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '11' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS novembro
        , (SELECT IFNULL(SUM(total) - SUM(desconto),0) FROM e_pedido WHERE MONTH(dtpedido) = '12' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS dezembro")->execute()->as_array();
      foreach ($qryChartValPed as $chartValPed) $chartValPed = (object) $chartValPed;
      $arrValPed = array(
        'mes_01' => $chartValPed->janeiro,
        'mes_02' => $chartValPed->fevereiro,
        'mes_03' => $chartValPed->marco,
        'mes_04' => $chartValPed->abril,
        'mes_05' => $chartValPed->maio,
        'mes_06' => $chartValPed->junho,
        'mes_07' => $chartValPed->julho,
        'mes_08' => $chartValPed->agosto,
        'mes_09' => $chartValPed->setembro,
        'mes_10' => $chartValPed->outubro,
        'mes_11' => $chartValPed->novembro,
        'mes_12' => $chartValPed->dezembro
      );

      echo json_encode($arrValPed);
  }

  public function action_qtdPedidos(){

    $ano = date('Y');
    $mes = date('m');

    $qryChartQtdPed = DB::query(Database::SELECT, "SELECT
        (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '01' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS janeiro
        , (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '02' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS fevereiro
        , (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '03' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS marco
        , (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '04' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS abril
        , (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '05' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS maio
        , (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '06' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS junho
        , (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '07' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS julho
        , (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '08' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS agosto
        , (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '09' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS setembro
        , (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '10' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS outubro
        , (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '11' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS novembro
        , (SELECT COUNT(1) FROM e_pedido WHERE MONTH(dtpedido) = '12' AND YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing') AS dezembro")->execute()->as_array();
      foreach ($qryChartQtdPed as $chartQtdPed) $chartQtdPed = (object) $chartQtdPed;

      $arrQtdPed = array(
        'mes_01' => $chartQtdPed->janeiro,
        'mes_02' => $chartQtdPed->fevereiro,
        'mes_03' => $chartQtdPed->marco,
        'mes_04' => $chartQtdPed->abril,
        'mes_05' => $chartQtdPed->maio,
        'mes_06' => $chartQtdPed->junho,
        'mes_07' => $chartQtdPed->julho,
        'mes_08' => $chartQtdPed->agosto,
        'mes_09' => $chartQtdPed->setembro,
        'mes_10' => $chartQtdPed->outubro,
        'mes_11' => $chartQtdPed->novembro,
        'mes_12' => $chartQtdPed->dezembro
      );

    echo json_encode($arrQtdPed);

  }

  public function action_index(){

    $ano = date('Y');
    $mes = date('m');

    /*MENSAL*/
    $qryRecMensal = DB::query(Database::SELECT, "SELECT SUM(total) - SUM(desconto) AS totalMensal FROM e_pedido WHERE MONTH(dtpedido) = '$mes' AND status <> 'refunded' AND status <> 'processing'")->execute()->as_array();
    foreach ($qryRecMensal as $recMensal) $recMensal = (object) $recMensal;

    $qryEncMensal = DB::query(Database::SELECT, "SELECT codpedido FROM e_pedido WHERE MONTH(dtpedido) = '$mes' AND status <> 'refunded' AND status <> 'processing'")->execute()->as_array();

    /*ANUAL*/
    $qryRecAnual = DB::query(Database::SELECT, "SELECT SUM(total) - SUM(desconto) AS totalAnual FROM e_pedido WHERE YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing'")->execute()->as_array();
    foreach ($qryRecAnual as $recAnual) $recAnual = (object) $recAnual;

    $qryEncAnual = DB::query(Database::SELECT, "SELECT codpedido FROM e_pedido WHERE YEAR(dtpedido) = '$ano' AND status <> 'refunded' AND status <> 'processing'")->execute()->as_array();

    $qryQtdCliente = DB::select('codusu')->from('e_usuarios')->execute()->as_array();

    /* HISTÓRICO DE PEDIDOS */
      /*PAGOS*/
      $sqlpedpaid = DB::query(Database::SELECT, "SELECT ped.codpedido, ped.sessao, ped.dtpedido, ped.total, usu.nome FROM e_pedido ped
                            INNER JOIN e_usuarios usu ON usu.codusu = ped.codusu
                            WHERE status <> 'refunded' AND status <> 'processing' ORDER BY 1 DESC LIMIT 10")->execute()->as_array();
      $pedpaids = NULL;
      foreach ($sqlpedpaid as $paid) {
        $paid = (object) $paid;
        $sessao = $paid->sessao;

        $sqlprd = DB::query(Database::SELECT, "SELECT car.quantidade
                            , CASE car.tipo WHEN 'P' THEN prd.produto ELSE sev.servico END AS produto
                            , CASE car.tipo WHEN 'P' THEN prd.valor ELSE sev.valor END AS valor
                            FROM e_carrinho car
                            LEFT JOIN e_produto prd ON prd.codproduto = car.codproduto
                            LEFT JOIN sev_servicos sev ON sev.codservico = car.codproduto
                            WHERE car.sessao = :sessao")
            ->bind(':sessao', $sessao)
            ->execute()->as_array();
        $prds = NULL;
        foreach ($sqlprd as $prd) {
          $prd = (object) $prd;
          $prds .= '<p>'.$prd->quantidade.' - '.$prd->produto.'</p>';
        }

        $vwpedpaid = new View('ecommerce/pedidos_dashboard_paid');
        $vwpedpaid->codpedido = $paid->codpedido;
        $vwpedpaid->sessao = $paid->sessao;
        $vwpedpaid->dtpedido = HTMLhelp::dataTimeForDate($paid->dtpedido);
        $vwpedpaid->total = HTMLhelp::valor($paid->total);
        $vwpedpaid->nome = $paid->nome;
        $vwpedpaid->produtos = $prds;
        $pedpaids .= $vwpedpaid->render();
      }

      /*PROCESSANDO*/
      $sqlpedprocessing = DB::query(Database::SELECT, "SELECT ped.codpedido, ped.sessao, ped.dtpedido, ped.total, usu.nome FROM e_pedido ped
                            INNER JOIN e_usuarios usu ON usu.codusu = ped.codusu
                            WHERE status = 'processing' ORDER BY 1 DESC LIMIT 10")->execute()->as_array();
      $pedprocessing = NULL;
      foreach ($sqlpedprocessing as $processing) {
        $processing = (object) $processing;
        $sessao = $processing->sessao;

        $sqlprd = DB::query(Database::SELECT, "SELECT car.quantidade
                            , CASE car.tipo WHEN 'P' THEN prd.produto ELSE sev.servico END AS produto
                            , CASE car.tipo WHEN 'P' THEN prd.valor ELSE sev.valor END AS valor
                            FROM e_carrinho car
                            LEFT JOIN e_produto prd ON prd.codproduto = car.codproduto
                            LEFT JOIN sev_servicos sev ON sev.codservico = car.codproduto
                            WHERE car.sessao = :sessao")
            ->bind(':sessao', $sessao)
            ->execute()->as_array();
        $prds = NULL;
        foreach ($sqlprd as $prd) {
          $prd = (object) $prd;
          $prds .= '<p>'.$prd->quantidade.' - '.$prd->produto.'</p>';
        }

        $vwpedpaid = new View('ecommerce/pedidos_dashboard_processing');
        $vwpedpaid->codpedido = $processing->codpedido;
        $vwpedpaid->sessao = $processing->sessao;
        $vwpedpaid->dtpedido = HTMLhelp::dataTimeForDate($processing->dtpedido);
        $vwpedpaid->total = HTMLhelp::valor($processing->total);
        $vwpedpaid->nome = $processing->nome;
        $vwpedpaid->produtos = $prds;
        $pedprocessing .= $vwpedpaid->render();
      }

      /*CANCELADOS*/
      $sqlpedrefunded = DB::query(Database::SELECT, "SELECT ped.codpedido, ped.sessao, ped.dtpedido, ped.total, usu.nome FROM e_pedido ped
                            INNER JOIN e_usuarios usu ON usu.codusu = ped.codusu
                            WHERE status = 'refunded' ORDER BY 1 DESC LIMIT 10")->execute()->as_array();
      $pedrefunded = NULL;
      foreach ($sqlpedrefunded as $refunded) {
        $refunded = (object) $refunded;
        $sessao = $refunded->sessao;

        $sqlprd = DB::query(Database::SELECT, "SELECT car.quantidade
                            , CASE car.tipo WHEN 'P' THEN prd.produto ELSE sev.servico END AS produto
                            , CASE car.tipo WHEN 'P' THEN prd.valor ELSE sev.valor END AS valor
                            FROM e_carrinho car
                            LEFT JOIN e_produto prd ON prd.codproduto = car.codproduto
                            LEFT JOIN sev_servicos sev ON sev.codservico = car.codproduto
                            WHERE car.sessao = :sessao")
            ->bind(':sessao', $sessao)
            ->execute()->as_array();
        $prds = NULL;
        foreach ($sqlprd as $prd) {
          $prd = (object) $prd;
          $prds .= '<p>'.$prd->quantidade.' - '.$prd->produto.'</p>';
        }

        $vwpedpaid = new View('ecommerce/pedidos_dashboard_refunded');
        $vwpedpaid->codpedido = $refunded->codpedido;
        $vwpedpaid->sessao = $refunded->sessao;
        $vwpedpaid->dtpedido = HTMLhelp::dataTimeForDate($refunded->dtpedido);
        $vwpedpaid->total = HTMLhelp::valor($refunded->total);
        $vwpedpaid->nome = $refunded->nome;
        $vwpedpaid->produtos = $prds;
        $pedrefunded .= $vwpedpaid->render();
      }
    /* HISTÓRICO DE PEDIDOS */

    switch ($mes){

      case 1: $mes = "Janeiro"; break;
      case 2: $mes = "Fevereiro"; break;
      case 3: $mes = "Março"; break;
      case 4: $mes = "Abril"; break;
      case 5: $mes = "Maio"; break;
      case 6: $mes = "Junho"; break;
      case 7: $mes = "Julho"; break;
      case 8: $mes = "Agosto"; break;
      case 9: $mes = "Setembro"; break;
      case 10: $mes = "Outubro"; break;
      case 11: $mes = "Novembro"; break;
      case 12: $mes = "Dezembro"; break;

    }

    $vw         = new View('ecommerce/dashboard');
    $vw->menu       = Menu::getMenu();
    $vw->clientes     = count($qryQtdCliente);
    $vw->receitaMensal   = HTMLhelp::valor($recMensal->totalMensal);
    $vw->pedidosMensal   = count($qryEncMensal);
    $vw->receitaAnual   = HTMLhelp::valor($recAnual->totalAnual);
    $vw->pedidosAnual   = count($qryEncAnual);
    $vw->pedpaids    = ($pedpaids)? $pedpaids : '<td colspan="4">Nenhum pedido concluído!</td>';
    $vw->pedprocessing  = ($pedprocessing)? $pedprocessing : '<td colspan="4">Nenhum pedido pendente!</td>';
    $vw->pedrefunded  = ($pedrefunded)? $pedrefunded : '<td colspan="4">Nenhum pedido devolvido ou cancelado!</td>';
    $vw->mesAtual     = $mes;
    $this->pagina->mountPageEcommerce('Dashboard', $vw->render());

  }

/*CAMPANHAS*/

  public function action_campanhas(){
    $get = ($this->request->param('arg1'))? $this->request->param('arg1') : '';

    $vw = new View('ecommerce/campanhas');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Campanha');
    $this->pagina->mountPageEcommerce('Campanhas', $vw->render());
  }

  public function action_campanhasList(){

    $qry = "SELECT * FROM e_promocao WHERE 1=1";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();

    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
    $iDisplayStart = intval($_REQUEST['start']);
    $sEcho = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();

    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;

    foreach ($sql as $row){
      $row = (object) $row;
      $linkpromo = $_SESSION['site'].'produtos/campanha/'.$row->slug.'/';
      $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="'.$row->codpromo.'">',
        $row->cupom,
        $row->promocao.'<br />'.$linkpromo,
        '<img src="'.$row->imagem.'" height="100px" />',
        HTMLhelp::dataBR($row->dtvalidade),
        '<a href="'.URL::base(true).'ecommerce/campanhaProduto/'.$row->codpromo.'/" class="btn btn-xs blue btn-editable">
          <i class="fa fa-plus"></i> Produtos
        </a>
        <a href="'.URL::base(true).'ecommerce/campanhaEdit/'.$row->codpromo.'" class="btn btn-xs default btn-editable">
          <i class="fa fa-pencil"></i> Editar
        </a>
        <a href="'.URL::base(true).'ecommerce/campanhaDelete/'.$row->codpromo.'/" class="btn btn-xs red btn-editable">
          <i class="fa fa-trash"></i> Excluir
        </a>',
      );
    }

    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK";
      $records["customActionMessage"] = "Group action successfully has been completed. Well done!";
    }

    $records["draw"] = $sEcho;
    $records["recordsTotal"] = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

  public function action_campanhaNew(){

    if(!empty($_POST)){

      $promocao     = str_replace('.', '', $_POST['promocao']);
      $cupom       = $_POST['cupom'  ];
      $tipo       = $_POST['tipo'    ];
      $qtdprodutos  = (isset($_POST['qtdprodutos']))? $_POST['qtdprodutos'] : 0;
      $valor       = (isset($_POST['valor']))    ? HTMLhelp::numerico($_POST['valor'])     : '';
      $porcentagem  = (isset($_POST['porcentagem']))? HTMLhelp::numerico($_POST['porcentagem']) : '';
      $slug       = HTMLhelp::slug($promocao);
      $dtvalidade    = HTMLhelp::dataUS($_POST['dtvalidade']);

      if(!empty($_FILES)){
        $dir = 'uploads/ecommerce/campanhas/';
        if (!file_exists($dir)){
          mkdir($dir, 0777, true);
          chmod($dir, 0777);
        }

        $aExtensoes = array("jpg", "jpeg", "bmp", "png", "JPEG", "JPG", "gif");
        $MaxTam = 1024 * 5120;

        $_FILES['imagens']['name'] = array_unique($_FILES['imagens']['name']);
        $imagens_form = $_FILES['imagens'];

        $_FILES['banners']['name'] = array_unique($_FILES['banners']['name']);
        $banners_form = $_FILES['banners'];

        if(isset($_FILES['banners'])){
          foreach ($banners_form['name'] as $chave => $nome_foto){
            if (in_array(strtolower(substr($nome_foto, strrpos($nome_foto, ".") + 1)), $aExtensoes)){
              $tamanho = $banners_form['size'][$chave];
              if ($tamanho <= $MaxTam) {
                $tmp    = $banners_form['tmp_name'][$chave];
                           $type    = $banners_form['type'][$chave];

                $extimg = explode(".", $banners_form['name'][$chave]);
                $extimg = $extimg[count($extimg) -1];
                $imagem = md5($banners_form['name'][$chave].time())."banner.".$extimg;
                $banner = URL::base(true).$dir.$imagem;
                $upload = move_uploaded_file($tmp, $dir.$imagem);

              }
            }
          }//foreach
        }else{
          $banner = NULL;
        }

        if(isset($_FILES['imagens'])){
          foreach ($imagens_form['name'] as $chave => $nome_foto){
            if (in_array(strtolower(substr($nome_foto, strrpos($nome_foto, ".") + 1)), $aExtensoes)){
              $tamanho = $imagens_form['size'][$chave];
              if ($tamanho <= $MaxTam) {
                $tmp    = $imagens_form['tmp_name'][$chave];
                           $type    = $imagens_form['type'][$chave];

                $extimg = explode(".", $imagens_form['name'][$chave]);
                $extimg = $extimg[count($extimg) -1];
                $imagem = md5($imagens_form['name'][$chave].time())."img.".$extimg;
                $imgpromo = URL::base(true).$dir.$imagem;
                $upload = move_uploaded_file($tmp, $dir.$imagem);

              }
            }
          }//foreach
        }else{
          $imgpromo = NULL;
        }

      }else{
        $imgpromo = NULL;
        $banner = NULL;
      }

      $qry = DB::insert('e_promocao', array('promocao', 'slug', 'imagem', 'banner', 'cupom', 'valor', 'tipo', 'porcentagem', 'qtdprodutos', 'dtvalidade'))
          ->values(array($promocao, $slug, $imgpromo, $banner, $cupom, $valor, $tipo, $porcentagem, $qtdprodutos, $dtvalidade))->execute();

      if($qry){
        $this->redirect(URL::base(true).'ecommerce/campanhas/inserido/');
      }else{
        $this->redirect(URL::base(true).'ecommerce/campanhas/error/');
      }
    }

    $vw = new View('ecommerce/campanha_novo');
    $vw->menu = Menu::getMenu();
    $this->pagina->mountPageEcommerce('Nova campanha', $vw->render());

  }

  public function action_campanhaEdit(){

    $codpromo = $this->request->param('arg1');

    if(!empty($_POST)){

      $promocao     = str_replace('.', '', $_POST['promocao']);
      $cupom       = $_POST['cupom'  ];
      $tipo       = $_POST['tipo'    ];
      $qtdprodutos  = (isset($_POST['qtdprodutos']))? $_POST['qtdprodutos'] : 0;
      $valor       = (isset($_POST['valor']))    ? HTMLhelp::numerico($_POST['valor'])     : '';
      $porcentagem  = (isset($_POST['porcentagem']))? HTMLhelp::numerico($_POST['porcentagem']) : '';
      $slug       = HTMLhelp::slug($promocao);
      $dtvalidade    = HTMLhelp::dataUS($_POST['dtvalidade']);

      if(!empty($_FILES)){

        $dir = 'uploads/ecommerce/campanhas/';
        if (!file_exists($dir)){
          mkdir($dir, 0777, true);
          chmod($dir, 0777);
        }

        if($_FILES['banners']['name'][0] != ''){

          $aExtensoes = array("jpg", "jpeg", "bmp", "png", "JPEG", "JPG", "gif");
          $MaxTam = 1024 * 5120;

          $_FILES['banners']['name'] = array_unique($_FILES['banners']['name']);
          $banners_form = $_FILES['banners'];

          foreach ($banners_form['name'] as $chave => $nome_foto){
            if (in_array(strtolower(substr($nome_foto, strrpos($nome_foto, ".") + 1)), $aExtensoes)){
              $tamanho = $banners_form['size'][$chave];
              if ($tamanho <= $MaxTam) {
                $tmp    = $banners_form['tmp_name'][$chave];
                           $type    = $banners_form['type'][$chave];

                $extimg = explode(".", $banners_form['name'][$chave]);
                $extimg = $extimg[count($extimg) -1];
                $imagem = md5($banners_form['name'][$chave].time())."banner.".$extimg;
                $banner = URL::base(true).$dir.$imagem;
                $upload = move_uploaded_file($tmp, $dir.$imagem);

              }
            }
          }//foreach

        }else{
          $banner   = $_POST['banner'];
        }

        if($_FILES['imagens']['name'][0] != ''){

          $_FILES['imagens']['name'] = array_unique($_FILES['imagens']['name']);
          $imagens_form = $_FILES['imagens'];

          foreach ($imagens_form['name'] as $chave => $nome_foto){
            if (in_array(strtolower(substr($nome_foto, strrpos($nome_foto, ".") + 1)), $aExtensoes)){
              $tamanho = $imagens_form['size'][$chave];
              if ($tamanho <= $MaxTam) {
                $tmp    = $imagens_form['tmp_name'][$chave];
                           $type    = $imagens_form['type'][$chave];

                $extimg = explode(".", $imagens_form['name'][$chave]);
                $extimg = $extimg[count($extimg) -1];
                $imagem = md5($imagens_form['name'][$chave].time())."img.".$extimg;
                $imgpromo = URL::base(true).$dir.$imagem;
                $upload = move_uploaded_file($tmp, $dir.$imagem);
              }
            }
          }//foreach

        }else{
          $imgpromo   = $_POST['imagem'];
        }

      }else{
        $imgpromo   = $_POST['imagem'];
        $banner   = $_POST['banner'];
      }

      $qry = DB::update('e_promocao')
          ->set(array(
            'promocao'     => $promocao,
            'imagem'     => $imgpromo,
            'slug'       => $slug,
            'banner'     => $banner,
            'valor'      => $valor,
            'porcentagem'  => $porcentagem,
            'tipo'      => $tipo,
            'qtdprodutos'  => $qtdprodutos,
            'dtvalidade'  => $dtvalidade
          ))
          ->where('codpromo', '=', $codpromo)
          ->execute();

      $this->redirect(URL::base(true).'ecommerce/campanhas/atualizado/');

    }

    $qry = DB::select('promocao', 'imagem', 'slug', 'banner', 'cupom', 'valor', 'tipo', 'porcentagem', 'qtdprodutos', 'dtvalidade')->from('e_promocao')
      ->where('codpromo', '=', $codpromo )
      ->execute()->as_array();
    foreach($qry as $row) $row = (object) $row;

    $vw = new View('ecommerce/campanha_editar');
    $vw->menu    = Menu::getMenu();
    $vw->promocao  = $row->promocao;
    $vw->imagem   = $row->imagem;
    $vw->banner    = $row->banner;
    $vw->cupom    = $row->cupom;
    $vw->valor    = $row->valor;
    $vw->tipo    = $row->tipo;
    $vw->porcentagem= $row->porcentagem;
    $vw->qtdprodutos = $row->qtdprodutos;
    $vw->dtvalidade  = $row->dtvalidade;
    $vw->codpromo   = $codpromo;
    $this->pagina->mountPageEcommerce('Editar Campanha', $vw->render());

  }

  public function action_campanhaDelete(){

    $codpromo = $this->request->param('arg1');
    DB::delete('e_relprdpromo')->where('codpromo', '=', $codpromo)->execute();
    DB::delete('e_promocao')->where('codpromo', '=', $codpromo)->execute();
    $this->redirect(URL::base(true).'ecommerce/campanhas/excluido/');

  }

  public function action_campanhaProduto(){
    $codpromo   = $this->request->param('arg1');
    $get     = ($this->request->param('arg2'))? $this->request->param('arg2') : '';
    $codproduto = ($this->request->param('arg3'))? $this->request->param('arg3') : '';

    if($get != '' && $codproduto != ''){
      if($get == 'addProduto'){
        $qry = DB::insert('e_relprdpromo', array('codpromo', 'codproduto'))->values(array($codpromo, $codproduto))->execute();
        $this->redirect(URL::base(true).'ecommerce/campanhaProduto/'.$codpromo.'/');
      }
      else if($get == 'delProduto'){
        $qry = DB::delete('e_relprdpromo')
            ->where('codpromo'    , '=', $codpromo  )
            ->and_where('codproduto', '=', $codproduto  )
            ->execute();
        $this->redirect(URL::base(true).'ecommerce/campanhaProduto/'.$codpromo.'/');
      }
    }

    $vw = new View('ecommerce/campanha_produtos');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Produto');
    $vw->codpromo = $codpromo;
    $this->pagina->mountPageEcommerce('Adicionar produtos', $vw->render());
  }

  public function action_campanhaListProduto(){

    $codpromo   = $this->request->param('arg1');

    $condicao = NULL;
    $inner = NULL;
    if(!empty($_POST['produto'])){
      $condicao .= " AND prd.produto LIKE '%".$_POST['produto']."%' ";
    }

    if(!empty($_POST['refproduto'])){
      $condicao .= " AND prd.refproduto LIKE '%".$_POST['refproduto']."%' ";
    }

    if(!empty($_POST['status'])){
      if($_POST['status'] == 'S'){
        $inner .= " INNER JOIN e_relprdpromo rel ON rel.codproduto = prd.codproduto ";
      }else{
        $inner .= " ";
      }
    }

    $qry = "SELECT DISTINCT prd.codproduto
        , prd.produto
        , prd.valor
        , prd.refproduto
        , prd.valorpromo
        , prd.quantidade
        , prd.status
        , img.imagem
        FROM e_produto prd
        $inner
        LEFT JOIN e_imagens img ON img.codproduto = prd.codproduto WHERE 1=1 $condicao GROUP BY prd.codproduto";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();

    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
    $iDisplayStart = intval($_REQUEST['start']);
    $sEcho = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();

    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;

    foreach ($sql as $row){
      $row = (object) $row;
      $codproduto = $row->codproduto;
      $status = ($row->status == 'A')? 'success' : 'danger';
      $currentstatus = ($row->status == 'A')? 'Publicado' : 'Inativo';
      $imagem = ($row->imagem)? '<img src="'.$row->imagem.'" height="80" />' : 'Sem Imagem';

      $qryver = DB::select('codrel')
            ->from('e_relprdpromo')
            ->where('codpromo', '=', $codpromo)
            ->and_where('codproduto', '=', $codproduto)
            ->execute()->as_array();
      if(count($qryver) >= 1){
        $btn = '<a href="'.URL::base(true).'ecommerce/campanhaProduto/'.$codpromo.'/delProduto/'.$row->codproduto.'/" class="btn btn-xs red btn-editable">
          <i class="fa fa-trash"></i> Remover
        </a>';
      }else{
        $btn = '<a href="'.URL::base(true).'ecommerce/campanhaProduto/'.$codpromo.'/addProduto/'.$row->codproduto.'/" class="btn btn-xs blue btn-editable">
          <i class="fa fa-plus"></i> Adicionar
        </a>';
      }

      $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="'.$row->codproduto.'">',
        $row->refproduto,
        $imagem,
        $row->produto,
        'R$ '.$row->valor,
        $row->quantidade,
        '<span class="label label-sm label-'.$status.'">'.$currentstatus.'</span>',
        $btn,
      );
    }

    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK";
      $records["customActionMessage"] = "Group action successfully has been completed. Well done!";
    }

    $records["draw"]       = $sEcho;
    $records["recordsTotal"]   = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

/*CAMPANHAS*/

/*PEDIDOS*/

  public function action_pedidos(){
    $get = ($this->request->param('arg1'))? $this->request->param('arg1') : '';

    $vw = new View('ecommerce/pedidos');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Pedido');
    $this->pagina->mountPageEcommerce('Pedidos', $vw->render());
  }

  public function action_pedidosList(){

    $condicao = NULL;

    if(!empty($_POST['dtpedido_inicio']) && !empty($_POST['dtpedido_final'])){

      $inicio = HTMLhelp::dataUS($_POST['dtpedido_inicio']);
      $final  = HTMLhelp::dataUS($_POST['dtpedido_final']);
      $condicao .= " AND ped.dtpedido BETWEEN '{$inicio}' AND '{$final}'  ";
    }

    if(!empty($_POST['dtalteracao_inicio']) && !empty($_POST['dtalteracao_final'])){

      $inicioAlter = HTMLhelp::dataUS($_POST['dtalteracao_inicio']);
      $finalAlter  = HTMLhelp::dataUS($_POST['dtalteracao_final']);
      $condicao .= " AND ped.dtalteracao BETWEEN '{$inicioAlter}' AND '{$finalAlter}'  ";
    }

    if(!empty($_POST['numpedido'])){
      $condicao .= " AND ped.sessao = '".$_POST['numpedido']."' ";
    }

    if(!empty($_POST['cliente'])){
      $condicao .= " AND usu.nome LIKE '%".$_POST['cliente']."%' ";
    }

    if(!empty($_POST['product_status'])){
      $condicao .= " AND ped.status = '".$_POST['product_status']."' ";
    }


    $qry = "SELECT ped.codpedido, ped.sessao, ped.dtpedido, ped.status, ped.dtalteracao, ped.desconto, ped.bonus,
        usu.nome, usu.email, usu.telefone, usu.celular,
        (SELECT (SUM(car.valor * car.quantidade) + valfrete)
        FROM e_carrinho car
        WHERE car.sessao = ped.sessao) AS valorPedido
        FROM e_pedido ped
        INNER JOIN e_usuarios usu ON usu.codusu = ped.codusu WHERE 1=1 $condicao";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();

    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
    $iDisplayStart  = intval($_REQUEST['start']);
    $sEcho       = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();

    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;


    $qryped = "SELECT ped.codpedido, ped.sessao, ped.dtpedido, ped.status, ped.dtalteracao, ped.desconto, ped.bonus,
        usu.nome, usu.email, usu.telefone, usu.celular,
        (SELECT (SUM(car.valor * car.quantidade) + valfrete)
        FROM e_carrinho car
        WHERE car.sessao = ped.sessao) AS valorPedido
        FROM e_pedido ped
        INNER JOIN e_usuarios usu ON usu.codusu = ped.codusu WHERE 1=1 $condicao LIMIT $iDisplayStart, $end";
    $sqlped = DB::query(Database::SELECT, $qry)->execute()->as_array();

    foreach ($sqlped as $row){
      $row = (object) $row;
      if($row->status == 'processing'){
        $status = 'danger';
        $currentstatus = 'Aguardando Pagamento';
      }
      elseif ($row->status == 'paid'){
        $status = 'success';
        $currentstatus = 'Pago';
      }elseif ($row->status == 'delivery'){
        $status = 'success';
        $currentstatus = 'Enviado para entrega';
      }elseif ($row->status == 'delivered'){
        $status = 'success';
        $currentstatus = 'Entregue';
      }else if($row->status == 'waiting_payment'){
        $status = 'danger';
        $currentstatus = 'Aguardando Pagamento';
      }else{
        $status = 'danger';
        $currentstatus = 'Cancelado';
      }

      $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="'.$row->codpedido.'">',
        $row->sessao,
        $row->nome,
        HTMLhelp::dataTimeForDate($row->dtpedido),
        HTMLhelp::dataTimeForDate($row->dtalteracao),
        'R$ '.HTMLhelp::valor($row->valorPedido),
        'R$ '.HTMLhelp::valor($row->desconto),
        'R$ '.HTMLhelp::valor($row->bonus),
        '<span class="label label-sm label-'.$status.'">'.$currentstatus.'</span>',
        '<a href="'.URL::base(true).'ecommerce/pedidoEditar/'.$row->codpedido.'" class="btn btn-xs default btn-editable">
          <i class="fa fa-pencil"></i> Editar
        </a>',
      );
    }

    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK";
      $records["customActionMessage"] = "Group action successfully has been completed. Well done!";
    }

    $records["draw"] = $sEcho;
    $records["recordsTotal"] = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

  public function action_pedidoDetails(){

    $codpedido = $this->request->param('arg1');

    $sqlped = DB::query(Database::SELECT, "SELECT codpedido, sessao, codusu, dtpedido, status, dtalteracao, valfrete, desconto, total, pagamento, parcelas
                    FROM e_pedido WHERE codpedido = $codpedido")->execute()->as_array();

    $pedidos = NULL;
    foreach ($sqlped as $ped){
      $ped = (object) $ped;

      $sessao = $ped->sessao;
      $sqlprd = DB::query(Database::SELECT, "SELECT DISTINCT car.quantidade, prd.produto, prd.valor, img.imagem, val.valor AS valvariacao, var.variacao
                          FROM e_carrinho car
                          INNER JOIN e_produto prd ON prd.codproduto = car.codproduto
                          LEFT JOIN e_imagens img ON img.codproduto = prd.codproduto
                          INNER JOIN e_valvariacao val ON val.codval = car.codvalvariacao
                          INNER JOIN e_variacao var ON var.codvariacao = val.codvariacao
                          WHERE car.sessao = :sessao GROUP BY prd.codproduto")
            ->bind(':sessao', $sessao)
            ->execute()->as_array();
        $prds = NULL;
        foreach ($sqlprd as $prd) {
          $prd = (object) $prd;
          $vwprd = new View('ecommerce/produtos_usuario');
          $vwprd->produto = $prd->produto;
          $vwprd->quantidade = $prd->quantidade;
          $vwprd->valor = HTMLhelp::valor($prd->valor);
          $vwprd->imagem = $prd->imagem;
          $vwprd->valvariacao = $prd->valvariacao;
          $vwprd->variacao = $prd->variacao;
          $prds .= $vwprd->render();
        }

      $vwped = new View('ecommerce/pedidos_usuario');
      $vwped->sessao = $ped->sessao;
      $vwped->dtpedido = $ped->dtpedido;
      $vwped->dtalteracao = $ped->dtalteracao;
      $vwped->subtotal = HTMLhelp::valor($ped->total - $ped->valfrete);
      $vwped->valfrete = HTMLhelp::valor($ped->valfrete);
      $vwped->total = HTMLhelp::valor($ped->total);
      $vwped->pagamento = $ped->pagamento;
      $vwped->status = $ped->status;
      $vwped->produtos = $prds;
      $pedidos .= $vwped->render();
    }
    $codusu = $ped->codusu;
    $sqlusu = DB::query(Database::SELECT, "SELECT usu.*, edr.*
                        FROM e_usuarios usu
                        LEFT JOIN e_endereco edr ON edr.codusu =  usu.codusu AND edr.tipo = 'E'
                        WHERE usu.codusu = {$codusu}")->execute()->as_array();
    foreach ($sqlusu as $usuario) $usuario = (object) $usuario;



    $vw         = new View('ecommerce/usuario');
    $vw->menu       = Menu::getMenu();
    $vw->codusu     = $codusu;
    $vw->nome       = $usuario->nome;
    $vw->email      = $usuario->email;
    $vw->cpf       = $usuario->cpf;
    $vw->rg       = $usuario->rg;
    $vw->telefone     = $usuario->telefone;
    $vw->celular     = $usuario->celular;
    $vw->dtnascimento   = HTMLhelp::dataBR($usuario->dtnascimento);
    $vw->sexo       = $usuario->sexo;
    $vw->recebenews   = $usuario->recebenews;
    $vw->pontos     = $usuario->pontos;

    $vw->endereco    = $usuario->logradouro;
    $vw->bairro      = $usuario->bairro;
    $vw->cidade      = $usuario->cidade;
    $vw->estado      = $usuario->estado;
    $vw->cep      = $usuario->cep;
    $vw->complemento  = $usuario->complemento;
    $vw->numero      = $usuario->numero;

    $vw->pedidos    = $pedidos;
    $this->pagina->mountPageEcommerce('Pedido', $vw->render());

  }

  public function action_pedidoEditar(){

    $codpedido = ($this->request->param('arg1'))? $this->request->param('arg1') : $this->redirect(URL::base(true).'ecommerce/pedidos/');


    if(!empty($_POST)){
      $status = $_POST['status'];
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $sessao = $_POST['sessao'];
      $codrastreamento = $_POST['codrastreamento'];
      $dtalteracao = date('Y-m-d H:i:s');

      $sqlup = DB::query(Database::UPDATE, "UPDATE e_pedido SET status = :status, codrastreamento = :codrastreamento, dtalteracao = :dtalteracao WHERE codpedido = :codpedido")
          ->bind(':status', $status)
          ->bind(':codrastreamento', $codrastreamento)
          ->bind(':dtalteracao', $dtalteracao)
          ->bind(':codpedido', $codpedido)
          ->execute();

      Email::pedido($email, $nome, $sessao);

      $this->redirect(URL::base(true).'ecommerce/pedidos/atualizado/');
    }

    $sqlped = DB::query(Database::SELECT, "SELECT ped.*, usu.nome, usu.email
                        FROM e_pedido ped
                        LEFT JOIN e_usuarios usu ON usu.codusu = ped.codusu
                        WHERE ped.codpedido = {$codpedido}")->execute()->as_array();

    $pedidos = NULL;
    foreach ($sqlped as $ped){
      $ped = (object) $ped;

      $sessao = $ped->sessao;
      $sqlprd = DB::query(Database::SELECT, "SELECT DISTINCT car.coditem
                            , car.codproduto
                            , car.quantidade
                            , car.valor
                            , car.tipo
                            , val.valor AS valvariacao
                            , var.variacao
                            , (car.valor * car.quantidade) AS total
                            , CASE car.tipo WHEN 'P' THEN prd.produto ELSE sev.servico END AS produto
                            , CASE car.tipo WHEN 'P' THEN prd.slug ELSE sev.slug END AS slug
                            , CASE car.tipo
                                WHEN 'P' THEN (SELECT imagem FROM e_imagens WHERE codproduto = car.codproduto LIMIT 1)
                                ELSE (SELECT imagem FROM sev_imagens WHERE codservico = car.codproduto LIMIT 1)
                                END AS imagem
                            FROM e_carrinho car
                            LEFT JOIN e_produto prd ON prd.codproduto = car.codproduto
                            LEFT JOIN sev_servicos sev ON sev.codservico = car.codproduto
                            LEFT JOIN e_valvariacao val ON val.codval = car.codvalvariacao
                            LEFT JOIN e_variacao var ON var.codvariacao = val.codvariacao
                            WHERE car.sessao = :sessao GROUP BY prd.codproduto")
            ->bind(':sessao', $sessao)
            ->execute()->as_array();
        $prds = NULL;
        foreach ($sqlprd as $prd) {
          $prd = (object) $prd;
          $vwprd         = new View('ecommerce/produtos_usuario');
          $vwprd->produto   = $prd->produto;
          $vwprd->quantidade   = $prd->quantidade;
          $vwprd->valor     = HTMLhelp::valor($prd->valor);
          $vwprd->imagem     = $prd->imagem;
          $vwprd->valvariacao = $prd->valvariacao;
          $vwprd->variacao   = $prd->variacao;
          $prds .= $vwprd->render();
        }
      $codusu = $ped->codusu;
      $numpedido = $ped->sessao;
      $nome = $ped->nome;
      $email = $ped->email;

      $vwped                = new View('ecommerce/pedidos_produtos');
      $vwped->sessao       = $ped->sessao;
      $vwped->codpedido     = $ped->codpedido;
      $vwped->dtpedido     = HTMLhelp::dataTimeForDate($ped->dtpedido);
      $vwped->dtalteracao   = HTMLhelp::dataTimeForDate($ped->dtalteracao);
      $vwped->subtotal     = HTMLhelp::valor($ped->total - $ped->valfrete);
      $vwped->valfrete     = HTMLhelp::valor($ped->valfrete);
      $vwped->total       = HTMLhelp::valor($ped->total);
      $vwped->totalRecebido  = HTMLhelp::valor($ped->total - $ped->desconto);
      $vwped->pagamento     = $ped->pagamento;
      $vwped->status       = $ped->status;
      $vwped->codrastreamento = $ped->codrastreamento;
      $vwped->desconto    = HTMLhelp::valor($ped->desconto);
      $vwped->frete      = $ped->frete;
      $vwped->nome      = $ped->nome;
      $vwped->email      = $ped->email;
      $vwped->sessao      = $ped->sessao;
      $vwped->produtos     = $prds;
      $pedidos .= $vwped->render();
    }

      $sqlusu = DB::query(Database::SELECT, "SELECT usu.*, edr.*
                        FROM e_usuarios usu
                        LEFT JOIN e_endereco edr ON edr.codusu =  usu.codusu AND edr.tipo = 'E'
                        WHERE usu.codusu = {$codusu}")->execute()->as_array();
      foreach ($sqlusu as $usuario) $usuario = (object) $usuario;


    $vw         = new View('ecommerce/pedidoEditar');
    $vw->menu       = Menu::getMenu();
    $vw->codusu     = $codusu;
    $vw->nome       = $usuario->nome;
    $vw->email      = $usuario->email;
    $vw->cpf       = $usuario->cpf;
    $vw->rg       = $usuario->rg;
    $vw->telefone     = $usuario->telefone;
    $vw->celular     = $usuario->celular;
    $vw->endereco    = $usuario->logradouro;
    $vw->bairro      = $usuario->bairro;
    $vw->cidade      = $usuario->cidade;
    $vw->estado      = $usuario->estado;
    $vw->cep      = $usuario->cep;
    $vw->complemento  = $usuario->complemento;
    $vw->numero      = $usuario->numero;
    $vw->numpedido    = $numpedido;
    $vw->corpedido    = $codpedido;
    $vw->pedidos    = $pedidos;
    $this->pagina->mountPageEcommerce('Usuário', $vw->render());
  }

    public function action_pedidoImprimir(){

        $codpedido = ($this->request->param('arg1'))? $this->request->param('arg1') : $this->redirect(URL::base(true).'ecommerce/pedidos/');

        $sqlped = DB::query(Database::SELECT, "SELECT codpedido, codusu, sessao, dtpedido, status, dtalteracao, valfrete
                        , desconto, total, pagamento, parcelas, codrastreamento, frete
                        FROM e_pedido WHERE codpedido = $codpedido")->execute()->as_array();

        $pedidos = NULL;
        foreach ($sqlped as $ped){
            $ped = (object) $ped;

            $sessao = $ped->sessao;
            $sqlprd = DB::query(Database::SELECT, "SELECT DISTINCT car.coditem
                            , car.codproduto
                            , car.quantidade
                            , car.valor
                            , car.tipo
                            , val.valor AS valvariacao
                            , var.variacao
                            , (car.valor * car.quantidade) AS total
                            , CASE car.tipo WHEN 'P' THEN prd.produto ELSE sev.servico END AS produto
                            , CASE car.tipo WHEN 'P' THEN prd.slug ELSE sev.slug END AS slug
                            , CASE car.tipo
                                WHEN 'P' THEN (SELECT imagem FROM e_imagens WHERE codproduto = car.codproduto LIMIT 1)
                                ELSE (SELECT imagem FROM sev_imagens WHERE codservico = car.codproduto LIMIT 1)
                                END AS imagem
                            FROM e_carrinho car
                            LEFT JOIN e_produto prd ON prd.codproduto = car.codproduto
                            LEFT JOIN sev_servicos sev ON sev.codservico = car.codproduto
                            LEFT JOIN e_valvariacao val ON val.codval = car.codvalvariacao
                            LEFT JOIN e_variacao var ON var.codvariacao = val.codvariacao
                            WHERE car.sessao = :sessao GROUP BY prd.codproduto")
                ->bind(':sessao', $sessao)
                ->execute()->as_array();
            $prds = NULL;
            foreach ($sqlprd as $prd) {
                $prd = (object) $prd;
                $vwprd         = new View('ecommerce/produtos_usuario');
                $vwprd->produto   = $prd->produto;
                $vwprd->quantidade   = $prd->quantidade;
                $vwprd->valor     = HTMLhelp::valor($prd->valor);
                $vwprd->imagem     = $prd->imagem;
                $vwprd->valvariacao = $prd->valvariacao;
                $vwprd->variacao   = $prd->variacao;
                $prds .= $vwprd->render();
            }
            $codusu = $ped->codusu;
            $numpedido = $ped->sessao;

            $vwped           = new View('ecommerce/pedidos_produtos_print');
            $vwped->sessao       = $ped->sessao;
            $vwped->codpedido     = $ped->codpedido;
            $vwped->dtpedido     = HTMLhelp::dataTimeForDate($ped->dtpedido);
            $vwped->dtalteracao   = HTMLhelp::dataTimeForDate($ped->dtalteracao);
            $vwped->subtotal     = HTMLhelp::valor($ped->total - $ped->valfrete);
            $vwped->valfrete     = HTMLhelp::valor($ped->valfrete);
            $vwped->total       = HTMLhelp::valor($ped->total);
            $vwped->totalRecebido  = HTMLhelp::valor($ped->total - $ped->desconto);
            $vwped->pagamento     = $ped->pagamento;
            $vwped->status       = $ped->status;
            $vwped->codrastreamento = $ped->codrastreamento;
            $vwped->desconto    = HTMLhelp::valor($ped->desconto);
            $vwped->frete      = $ped->frete;
            $vwped->produtos     = $prds;
            $pedidos .= $vwped->render();
        }

        $sqlusu = DB::query(Database::SELECT, "SELECT usu.*, edr.*
                        FROM e_usuarios usu
                        LEFT JOIN e_endereco edr ON edr.codusu =  usu.codusu AND edr.tipo = 'E'
                        WHERE usu.codusu = {$codusu}")->execute()->as_array();
        foreach ($sqlusu as $usuario) $usuario = (object) $usuario;


        $vw         = new View('ecommerce/pedidoImprimir');
        $vw->menu       = Menu::getMenu();
        $vw->codusu     = $codusu;
        $vw->nome       = $usuario->nome;
        $vw->email      = $usuario->email;
        $vw->cpf       = $usuario->cpf;
        $vw->rg       = $usuario->rg;
        $vw->telefone     = $usuario->telefone;
        $vw->celular     = $usuario->celular;
        $vw->endereco    = $usuario->logradouro;
        $vw->bairro      = $usuario->bairro;
        $vw->cidade      = $usuario->cidade;
        $vw->estado      = $usuario->estado;
        $vw->cep      = $usuario->cep;
        $vw->complemento  = $usuario->complemento;
        $vw->numero      = $usuario->numero;
        $vw->numpedido    = $numpedido;
        $vw->corpedido    = $codpedido;
        $vw->pedidos    = $pedidos;
        $this->pagina->mountPageEcommerce('Usuário', $vw->render());
    }

/*PEDIDOS*/

/*USUÁRIOS*/

  public function action_usuarios(){

    $get = ($this->request->param('arg1'))? $this->request->param('arg1') : '';

    $vw = new View('ecommerce/usuarios');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Usuário');
    $this->pagina->mountPageEcommerce('Usuários', $vw->render());

  }

  public function action_usuariosList(){

    $condicao = NULL;
    if(!empty($_POST['nome'])){
      $condicao .= " AND nome LIKE '%".$_POST['nome']."%' ";
    }

    if(!empty($_POST['email'])){
      $condicao .= " AND email = ".$_POST['email']." ";
    }

    if(!empty($_POST['cpf'])){
      $condicao .= " AND cpf = '".$_POST['cpf']."' ";
    }

    $qry = "SELECT codusu, nome, email, cpf, rg, telefone, celular, dtnascimento, sexo, senha, recebenews, pontos, pontos_debitados
        FROM e_usuarios
        WHERE 1=1 $condicao ";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();

    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
    $iDisplayStart = intval($_REQUEST['start']);
    $sEcho = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();

    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;

    foreach ($sql as $row){
      $row = (object) $row;

		if($_SESSION['acesso'] != 'F'){
			$btn = '<a href="'.URL::base(true).'ecommerce/usuarioDetails/'.$row->codusu.'" class="btn btn-xs default btn-editable">
				  <i class="fa fa-pencil"></i> Ver detalhes
				</a>';

			$btn .= '<a href="'.URL::base(true).'ecommerce/usuarioBuy/'.$row->codusu.'" class="btn btn-xs default btn-editable">
				  <i class="fa fa-shopping-cart"></i> Compra
				</a>';
			$btn .= '<a href="'.URL::base(true).'ecommerce/usuarioBonus/'.$row->codusu.'" class="btn btn-xs default btn-editable">
			  <i class="fa fa-ticket"></i> Bônus
			</a>';
		}else{
			$btn = '<a href="'.URL::base(true).'ecommerce/usuarioBonus/'.$row->codusu.'" class="btn btn-xs default btn-editable">
			  <i class="fa fa-ticket"></i> Bônus
			</a>';
		}


      $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="'.$row->codusu.'">',
        $row->nome,
        $row->email,
        $row->cpf,
        HTMLhelp::valor($row->pontos),
        HTMLhelp::valor($row->pontos_debitados),
        $btn,
      );
    }

    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK";
      $records["customActionMessage"] = "ação do grupo com êxito foi concluída. Bem feito!";
    }

    $records["draw"] = $sEcho;
    $records["recordsTotal"] = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

  public function action_usuarioBuy(){

    $codusu = $this->request->param('arg1');
    $get = ($this->request->param('arg2'))? $this->request->param('arg2') : '';

    if(!empty($_POST)){

      $sessao   = time();
      $codusu   = $_POST['codusu'];
      $count     = count($_POST['produto']) - 1;
      $bonus     = HTMLhelp::numerico($_POST['bonus']);
      $total     = $_POST['totalPedido'];
      $desconto   = HTMLhelp::numerico($_POST['desconto']) + $bonus;
      $totalBonus = $total - HTMLhelp::numerico($desconto);
      $pontos   = 0;

      if(isset($_POST['usarbonus']) && $_POST['usarbonus'] == 'S'){

        //DEBITA BONUS DO USUÁRIO
        $arrusu = DB::query(Database::SELECT, "SELECT pontos FROM e_usuarios WHERE codusu = {$codusu}")->execute()->as_array();

        if($bonus <= $arrusu[0]['pontos']){
          DB::query(Database::UPDATE, "UPDATE e_usuarios
                        SET pontos_debitados = pontos_debitados + {$bonus}
                        WHERE codusu = {$codusu}")->execute();

        }else{
          $this->redirect(URL::base(true).'ecommerce/usuarioBuy/'.$codusu.'/bonus-invalido/');
        }

      }else{

        //ACUMULA MAIS PONTOS
        $porcentagem = $_SESSION['porcbonus'];

        $pontos = HTMLhelp::porcentagem($porcentagem, $totalBonus);

        DB::query(Database::UPDATE, "UPDATE e_usuarios SET pontos = (pontos + :pontos) WHERE codusu = :codusu")
          ->bind(':pontos', $pontos)
          ->bind(':codusu', $codusu)
          ->execute();

      }

      $val = 0;
      for ($i = 0; $i <= $count; $i++){

        $quantidade = $_POST['quantidade'][$i];
        $codproduto = $_POST['produto'][$i];
        $produto   = $_POST['nomproduto'][$i];
        $valor     = $_POST['valor'][$i];
        $tipo    = 'P';

        $sqlcar = "INSERT INTO e_carrinho (codproduto, sessao, dtcadastro, codusu, quantidade, nomproduto, valor, tipo)
            VALUES ('".$codproduto."', '".$sessao."', NOW(), '".$codusu."', '".$quantidade."', '".$produto."', '".$valor."', '".$tipo."')";

        $qrycar = DB::query(Database::INSERT, $sqlcar)->execute();
      }

      $usebonus = (isset($_POST['usarbonus']))? $_POST['usarbonus'] : 'N';

      $sqlped = "INSERT INTO e_pedido (codusu, sessao, dtpedido, dtalteracao, status, total, desconto, usarbonus, bonus)
            VALUES (".$codusu.", '".$sessao."', NOW(), NOW(), 'paid', '".$total."', '".$desconto."', '".$usebonus."', '".$pontos."')";
      $qryped = DB::query(Database::INSERT, $sqlped)->execute();

        $this->redirect(URL::base(true).'ecommerce/usuarioDetails/'.$codusu.'/atualizado/');

    }

    $qry = "SELECT codusu, nome, email, cpf, rg, telefone, celular, dtnascimento, sexo, senha, recebenews, pontos, pontos_debitados
        FROM e_usuarios
        WHERE codusu = $codusu ";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();
    foreach ($sql as $usuario) $usuario = (object) $usuario;

    $qryprd = DB::query(Database::SELECT, "SELECT codproduto, produto, valor, codvariacao FROM e_produto")->execute()->as_array();
    $produtosOption = null;
    foreach ($qryprd as $prdopt){
      $produtosOption .= '<option value="'.$prdopt['codproduto'].'" data-valor="'.$prdopt['valor'].'" data-produto="'.str_replace("'", "", $prdopt['produto']).'">'.str_replace("'", "", $prdopt['produto']).'</option>';
    }

    $vw         = new View('ecommerce/usuario-buy');
    $vw->menu       = Menu::getMenu();
    $vw->codusu     = $codusu;
    $vw->nome       = $usuario->nome;
    $vw->email      = $usuario->email;
    $vw->cpf       = $usuario->cpf;
    $vw->rg       = $usuario->rg;
    $vw->telefone     = $usuario->telefone;
    $vw->celular     = $usuario->celular;
    $vw->dtnascimento   = HTMLhelp::dataBR($usuario->dtnascimento);
    $vw->sexo       = $usuario->sexo;
    $vw->recebenews   = $usuario->recebenews;
    $vw->pontos     = HTMLhelp::valor($usuario->pontos - $usuario->pontos_debitados);
    $vw->produtos    = $produtosOption;
	$vw->retorno	 = Controller_Erro::getErro($get, 'Bônus');
    $this->pagina->mountPageEcommerce('Usuário', $vw->render());

  }

  public function action_usuarioBonus(){

    $codusu = $this->request->param('arg1');

    $qry = "SELECT codusu, nome, pontos, pontos_debitados
        FROM e_usuarios
        WHERE codusu = $codusu ";

    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();

    foreach ($sql as $usuario) $usuario = (object) $usuario;

    $qrybonus = DB::query(Database::SELECT, "SELECT codcupom, dtcadastro, valcompra, valbonus, tipo, responsavel
                         FROM e_bonus
                         WHERE codusu = {$codusu}")->execute()->as_array();
    $bonus = NULL;

    foreach ($qrybonus as $row){
      $row = (object) $row;

      $class = ($row->tipo == 'A')? 'warning' : 'danger';

      $bonus .= '<tr role="row" class="'.$class.'">
              <td>'.$row->codcupom.'</td>
              <td>'.HTMLhelp::valor($row->valcompra).'</td>
              <td>'.HTMLhelp::valor($row->valbonus).'</td>
              <td>'.HTMLhelp::dataBR($row->dtcadastro).'</td>
              <td>'.$row->responsavel.'</td>
            </tr>';

    }

    $vw         = new View('ecommerce/usuario-bonus');
    $vw->menu       = Menu::getMenu();
    $vw->codusu     = $codusu;
    $vw->nome       = $usuario->nome;
    $vw->saldo       = HTMLhelp::valor($usuario->pontos - $usuario->pontos_debitados);
    $vw->bonus       = HTMLhelp::valor($usuario->pontos);
    $vw->bonusDebitados = HTMLhelp::valor($usuario->pontos_debitados);
    $vw->porcbonus    = $_SESSION['porcbonus'];
    $vw->listaBonus    = $bonus;
    $this->pagina->mountPageEcommerce('Bônus Usuário', $vw->render());

  }

  public function action_adicionarBonus(){

    $codusu = $this->request->param('arg1');

    if(!empty($_POST)){

      $codcupom = $_POST['sessao'];
      $valcompra = HTMLhelp::slug($_POST['valcompra']);
      $valbonus = HTMLhelp::slug($_POST['valbonus']);
      $responsavel = $_SESSION['nome'];

      DB::query(Database::INSERT, "INSERT INTO e_bonus (codcupom, dtcadastro, valcompra, valbonus, tipo, codusu, responsavel)
                    VALUES ('{$codcupom}', NOW(), '{$valcompra}', '{$valbonus}', 'A', {$codusu}, '{$responsavel}')")->execute();

      DB::query(Database::UPDATE, "UPDATE e_usuarios SET pontos = (pontos + {$valbonus}) WHERE codusu = {$codusu}")->execute();

      $this->redirect(URL::base(true).'ecommerce/usuarioBonus/'.$codusu.'/');

    }

    $qry = "SELECT codusu, nome
        FROM e_usuarios
        WHERE codusu = $codusu ";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();
    foreach ($sql as $usuario) $usuario = (object) $usuario;

    $vw         = new View('ecommerce/usuario-add-bonus');
    $vw->menu       = Menu::getMenu();
    $vw->codusu     = $codusu;
    $vw->nome      = $usuario->nome;
    $vw->porcbonus    = $_SESSION['porcbonus'];
    $this->pagina->mountPageEcommerce('Bônus Usuário', $vw->render());

  }

  public function action_debitarBonus(){

    $codusu = $this->request->param('arg1');
	$get = ($this->request->param('arg2'))? $this->request->param('arg2') : '';

    if(!empty($_POST)){

      $codcupom = $_POST['sessao'];
      $valcompra = HTMLhelp::slug($_POST['valcompra']);
      $valbonus = HTMLhelp::slug($_POST['valbonus']);
      $responsavel = $_SESSION['nome'];

	   //DEBITA BONUS DO USUÁRIO
		$arrusu = DB::query(Database::SELECT, "SELECT (pontos - pontos_debitados) AS pontos FROM e_usuarios WHERE codusu = {$codusu}")->execute()->as_array();

		if($valbonus <= $arrusu[0]['pontos']){
		  DB::query(Database::INSERT, "INSERT INTO e_bonus (codcupom, dtcadastro, valcompra, valbonus, tipo, codusu, responsavel)
                    VALUES ('{$codcupom}', NOW(), '{$valcompra}', '{$valbonus}', 'D', {$codusu}, '{$responsavel}')")->execute();

			  DB::query(Database::UPDATE, "UPDATE e_usuarios SET pontos_debitados = (pontos_debitados + {$valbonus}) WHERE codusu = {$codusu}")->execute();

			  $this->redirect(URL::base(true).'ecommerce/usuarioBonus/'.$codusu.'/');
		}else{
		  $this->redirect(URL::base(true).'ecommerce/debitarBonus/'.$codusu.'/bonus-invalido/');
		}

    }

    $qry = "SELECT codusu, nome, pontos, pontos_debitados
        FROM e_usuarios
        WHERE codusu = $codusu ";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();
    foreach ($sql as $usuario) $usuario = (object) $usuario;

    $vw         = new View('ecommerce/usuario-debitar-bonus');
    $vw->menu       = Menu::getMenu();
    $vw->codusu     = $codusu;
    $vw->nome       = $usuario->nome;
    $vw->saldo       = HTMLhelp::valor($usuario->pontos - $usuario->pontos_debitados);
    $vw->bonus       = HTMLhelp::valor($usuario->pontos);
    $vw->bonusDebitados = HTMLhelp::valor($usuario->pontos_debitados);
    $vw->porcbonus    = $_SESSION['porcbonus'];
	$vw->retorno	 = Controller_Erro::getErro($get, 'Bônus');
    $this->pagina->mountPageEcommerce('Bônus Usuário', $vw->render());

  }

  public function action_usuarioDetails(){

    $codusu = $this->request->param('arg1');
    $get = ($this->request->param('arg2'))? $this->request->param('arg2') : '';

    $sqlped = DB::query(Database::SELECT, "SELECT codpedido, sessao, dtpedido, status, dtalteracao, valfrete, desconto, total, pagamento, parcelas
                    FROM e_pedido WHERE codusu = $codusu")->execute()->as_array();

    $pedidos = NULL;
    foreach ($sqlped as $ped){
      $ped = (object) $ped;

      $sessao = $ped->sessao;
      $sqlprd = DB::query(Database::SELECT, "SELECT DISTINCT car.quantidade, prd.produto, prd.valor, img.imagem, val.valor AS valvariacao, var.variacao
                          FROM e_carrinho car
                          INNER JOIN e_produto prd ON prd.codproduto = car.codproduto
                          LEFT JOIN e_imagens img ON img.codproduto = prd.codproduto
                          INNER JOIN e_valvariacao val ON val.codval = car.codvalvariacao
                          INNER JOIN e_variacao var ON var.codvariacao = val.codvariacao
                          WHERE car.sessao = :sessao GROUP BY prd.codproduto")
            ->bind(':sessao', $sessao)
            ->execute()->as_array();
        $prds = NULL;
        foreach ($sqlprd as $prd) {
          $prd = (object) $prd;
          $vwprd = new View('ecommerce/produtos_usuario');
          $vwprd->produto = $prd->produto;
          $vwprd->quantidade = $prd->quantidade;
          $vwprd->valor = HTMLhelp::valor($prd->valor);
          $vwprd->imagem = $prd->imagem;
          $vwprd->valvariacao = $prd->valvariacao;
          $vwprd->variacao = $prd->variacao;
          $prds .= $vwprd->render();
        }

      switch ($ped->status){
        case 'refunded':
          $status = 'Cancelado';
        break;
        case 'processing':
          $status = 'Aguardando pagamento';
        break;
        case 'paid':
          $status = 'Pago';
        break;
        case 'delivery':
          $status = 'Enviado para entrega';
        break;
        case 'delivered':
          $status = 'Entregue';
        break;
        case 'pago':
          $status = 'Pago';
        break;
      }

      $vwped         = new View('ecommerce/pedidos_usuario');
      $vwped->sessao     = $ped->sessao;
      $vwped->codpedido   = $ped->codpedido;
      $vwped->dtpedido   = HTMLhelp::dataTimeForDate($ped->dtpedido);
      $vwped->dtalteracao = HTMLhelp::dataTimeForDate($ped->dtalteracao);
      $vwped->subtotal   = HTMLhelp::valor($ped->total - $ped->valfrete);
      $vwped->valfrete   = HTMLhelp::valor($ped->valfrete);
      $vwped->total     = HTMLhelp::valor($ped->total);
      $vwped->totalRecebido = HTMLhelp::valor($ped->total - $ped->desconto);
      $vwped->pagamento   = $ped->pagamento;
      $vwped->status     = $status;
      $vwped->produtos   = $prds;
      $vwped->desconto  = HTMLhelp::valor($ped->desconto);
      $pedidos .= $vwped->render();
    }

    $sqlusu = DB::select('*')->from('e_usuarios')->where('codusu', '=', $codusu)->execute()->as_array();
    foreach ($sqlusu as $usuario) $usuario = (object) $usuario;

    $vw         = new View('ecommerce/usuario');
    $vw->menu       = Menu::getMenu();
    $vw->codusu     = $codusu;
    $vw->nome       = $usuario->nome;
    $vw->email      = $usuario->email;
    $vw->cpf       = $usuario->cpf;
    $vw->rg       = $usuario->rg;
    $vw->telefone     = $usuario->telefone;
    $vw->celular     = $usuario->celular;
    $vw->dtnascimento   = HTMLhelp::dataBR($usuario->dtnascimento);
    $vw->sexo       = $usuario->sexo;
    $vw->recebenews   = $usuario->recebenews;
    $vw->pontos     = HTMLhelp::valor($usuario->pontos - $usuario->pontos_debitados);
    $vw->pedidos    = $pedidos;
    $vw->retorno    = Controller_Erro::getErro($get, 'Pontos');
    $this->pagina->mountPageEcommerce('Usuário', $vw->render());

  } // product edit

/*USUÁRIOS*/

/* PRODUTOS */

  public function action_produtos(){

    $get = ($this->request->param('arg1'))? $this->request->param('arg1') : '';

    $vw = new View('ecommerce/produtos');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Produto');
    $this->pagina->mountPageEcommerce('Produtos', $vw->render());

  }

  public function action_produtosList(){

    $condicao = NULL;
    if(!empty($_POST['product_name'])){
      $condicao .= " AND prd.produto LIKE '%".$_POST['product_name']."%' ";
    }

    if(!empty($_POST['product_id'])){
      $condicao .= " AND prd.refproduto = '".$_POST['product_id']."' ";
    }

    if(!empty($_POST['product_status'])){
      $condicao .= " AND prd.status = '".$_POST['product_status']."' ";
    }

        if(@$_POST['product_price_from'] != '' && @$_POST['product_price_to'] != '') {
            $valinicial = HTMLhelp::numerico($_POST['product_price_from']);
            $valfinal = HTMLhelp::numerico($_POST['product_price_to']);
            $condicao .= " AND prd.valor BETWEEN {$valinicial} AND {$valfinal} ";
        }

        if(@$_POST['product_quantity_from'] != '' && @$_POST['product_quantity_to'] != '') {
            $estoqueini = HTMLhelp::numerico($_POST['product_quantity_from']);
            $estoquefin = HTMLhelp::numerico($_POST['product_quantity_to']);
            $condicao .= " AND prd.quantidade BETWEEN {$estoqueini} AND {$estoquefin} ";
        }

        if(@$_POST['product_peso'] != '') {
            $condicao .= " AND prd.peso <= {$_POST['product_peso']} ";
        }

        if(@$_POST['product_largura'] != '') {
            $condicao .= " AND prd.largura <= {$_POST['product_largura']} ";
        }

        if(@$_POST['product_altura'] != '') {
            $condicao .= " AND prd.altura <= {$_POST['product_altura']} ";
        }

        if(@$_POST['product_comprimento'] != '') {
            $condicao .= " AND prd.comprimento <= {$_POST['product_comprimento']} ";
        }

        if(@$_POST['product_lancamento'] != '') {
            $condicao .= " AND prd.lancamento = '{$_POST['product_lancamento']}' ";
        }

    $qry = "SELECT DISTINCT prd.codproduto
        FROM e_produto prd
        WHERE 1=1 $condicao GROUP BY prd.codproduto";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();

    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;

    $iDisplayStart = intval($_REQUEST['start']);
    $sEcho = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();
    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;

    $qryprd = "SELECT DISTINCT prd.codproduto
        , prd.produto
        , prd.valor
        , prd.refproduto
        , prd.valorpromo
        , prd.quantidade
        , prd.status
        , img.imagem
        FROM e_produto prd
        LEFT JOIN e_imagens img ON img.codproduto = prd.codproduto WHERE 1=1 $condicao GROUP BY prd.codproduto LIMIT $iDisplayStart, $end";
    $sqlprd = DB::query(Database::SELECT, $qryprd)->execute()->as_array();


      foreach ($sqlprd as $row){
        $row = (object) $row;
        $status = ($row->status == 'A')? 'success' : 'danger';
        $currentstatus = ($row->status == 'A')? 'Publicado' : 'Inativo';
        $imagem = ($row->imagem)? '<img src="'.$row->imagem.'" height="80" />' : 'Sem Imagem';
        $records["data"][] = array(
          '<input type="checkbox" name="id[]" value="'.$row->codproduto.'">',
          $row->refproduto,
          $imagem,
          $row->produto,
          'R$ '.HTMLhelp::valor($row->valor),
          $row->quantidade,
          '<span class="label label-sm label-'.$status.'">'.$currentstatus.'</span>',
          '<a href="'.URL::base(true).'ecommerce/produtoEdit/'.$row->codproduto.'" class="btn btn-xs default btn-editable">
            <i class="fa fa-pencil"></i> Editar
          </a>
          <a href="'.URL::base(true).'ecommerce/produtoDelete/'.$row->codproduto.'/" class="btn btn-xs red btn-editable">
            <i class="fa fa-trash"></i> Excluir
          </a>',
        );
      }


    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK";
      $records["customActionMessage"] = "Group action successfully has been completed. Well done!";
    }

    $records["draw"] = $sEcho;
    $records["recordsTotal"] = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

  public function action_produtoNew(){

    $codproduto = ConfigSis::geraCod('e_produto', 'codproduto');
    $insert = DB::insert('e_produto', array('codproduto'))->values(array($codproduto))->execute();
    if($insert){
      $this->redirect(URL::base(true).'ecommerce/produtoEdit/'.$codproduto.'/');
    }else{
      $this->redirect(URL::base(true).'ecommerce/produtos/');
    }

  }

  public function action_produtoEdit(){

    $codproduto = $this->request->param('arg1');

    if(!empty($_POST)){

      $countdep = (isset($_POST['produto']['departamento']))? count($_POST['produto']['departamento']) - 1 : 0;
      $countcat = (isset($_POST['produto']['categoria']))? count($_POST['produto']['categoria']) - 1 : 0;

      $departamentos = NULL;
      if(isset($_POST['produto']['departamento'])){
        for($initdep = 0; $initdep <= $countdep; $initdep++){
          $departamentos .= '['.$_POST['produto']['departamento'][$initdep].']';
        }
      }else{
        $departamentos .= '[0]';
      }

      $categorias = NULL;
      if(isset($_POST['produto']['categoria'])){
        for($initcat = 0; $initcat <= $countcat; $initcat++){
          $categorias .= '['.$_POST['produto']['categoria'][$initcat].']';
        }
      }else{
        $categorias .= '[0]';
      }
      $slug   = $_POST['produto']['slug']; //(!isset($_POST['produto']['slug']) && $_POST['produto']['slug'] == '')? str_replace('.', '', $_POST['produto']['nome']) : $_POST['produto']['slug'];
      $valor  = HTMLhelp::numerico($_POST['produto']['valor']);
      $slug   = HTMLhelp::slug($_POST['produto']['nome']);
      $valorPromo = HTMLhelp::numerico($_POST['produto']['valorpromo']);
      $update = DB::update('e_produto')
        ->set(array(
          'produto'       => $_POST['produto']['nome'        ],
          'refproduto'     => $_POST['produto']['refproduto'    ],
          'valor'       => $valor,
          'valorpromo'    => $valorPromo,
          'desconto'       => $_POST['produto']['desconto'      ],
          'parcelas'       => $_POST['produto']['parcelas'      ],
          'quantidade'     => $_POST['produto']['quantidade'    ],
          'descricao_curta'   => $_POST['produto']['descricao_curta'  ],
          'descricao'     => $_POST['produto']['descricao'    ],
          'codmarca'       => $_POST['produto']['codmarca'      ],
          'peso'        => (isset($_POST['produto']['peso']) || $_POST['produto']['peso'] == '')? $_POST['produto']['peso'] : 0,
          'altura'       => (isset($_POST['produto']['altura']) || $_POST['produto']['altura'] == '')? $_POST['produto']['altura'] : 0,
          'largura'       => (isset($_POST['produto']['largura']) || $_POST['produto']['largura'] == '')? $_POST['produto']['largura'] : 0,
          'comprimento'     => (isset($_POST['produto']['comprimento']) || $_POST['produto']['comprimento'] == '')? $_POST['produto']['comprimento'] : 0,
          'fretegratis'     => $_POST['produto']['fretegratis'    ],
          'status'       => $_POST['produto']['status'      ],
          'keyword'       => $_POST['produto']['meta_keywords'  ],
          'description'     => $_POST['produto']['meta_description'  ],
          'codcor'       => $_POST['produto']['codcor'      ],
          'codgrupo'       => $_POST['produto']['codgrupo'      ],
          'tipo'         => $_POST['produto']['tipo'        ],
          'destaque'       => $_POST['produto']['destaque'      ],
          'lancamento'     => $_POST['produto']['lancamento'    ],
          'prazo'         => $_POST['produto']['prazo'      ],
          'slug'        => $_POST['produto']['slug'],
          'tipo_produto'        => $_POST['produto']['tipo_produto'],
          'coddepartamento'  => $departamentos,
          'codcategoria'    => $categorias
        ))
        ->where('codproduto', '=', $codproduto)
        ->execute();

        $sqlimgprd = DB::select('codimg')->from('e_imagens')->where('codproduto', '=', $codproduto)->execute()->as_array();
        if(count($sqlimgprd) != 0){
          foreach($sqlimgprd as $iPrd){
            $iPrd = (object) $iPrd;
            $codimg = $iPrd->codimg;
            $tipo = $_POST['produto']['imagem'][$codproduto][$codimg]['tipo'];
            $upimg = DB::query(Database::UPDATE, "UPDATE e_imagens SET tipo = '$tipo' WHERE codimg = $codimg")->execute();
          }
        }

        if(!empty($_FILES)){
          $dir = 'uploads/ecommerce/produtos/';
          if (!file_exists($dir)){
            mkdir($dir, 0777, true);
            chmod($dir, 0777);
          }

          $aExtensoes = array("jpg", "jpeg", "bmp", "png", "JPEG", "JPG", "gif");
          $MaxTam = 1024 * 5120;

          $_FILES['imagens']['name'] = array_unique($_FILES['imagens']['name']);
          $imagens_form = $_FILES['imagens'];

          foreach ($imagens_form['name'] as $chave => $nome_foto){
            if (in_array(strtolower(substr($nome_foto, strrpos($nome_foto, ".") + 1)), $aExtensoes)){
              $tamanho = $imagens_form['size'][$chave];
              if ($tamanho <= $MaxTam) {
                $tmp    = $imagens_form['tmp_name'][$chave];
                           $type    = $imagens_form['type'][$chave];

                $extimg   = explode(".", $imagens_form['name'][$chave]);
                $extimg   = $extimg[count($extimg) -1];
                $imagem   = $imagens_form['name'][$chave].$extimg;
                $imgproduto = URL::base(true).$dir.$imagem;
                $upload   = move_uploaded_file($tmp, $dir.$imagem);

                $insertimg = DB::insert('e_imagens', array('imagem', 'title', 'codproduto'))
                      ->values(array($imgproduto, $_POST['produto']['nome'], $codproduto))
                      ->execute();

              }
            }
          }//foreach
        }else{
          $imgproduto = '';
        }

    }

    $sqlprd = DB::select('*')->from('e_produto')->where('codproduto', '=', $codproduto)->execute()->as_array();
    foreach ($sqlprd as $produto) $produto = (object) $produto;

    /*DEPARTAMENTOS / CATEGORIAS*/
    $sqldep = DB::select('coddep', 'departamento')->from('e_departamento')->execute()->as_array();
    $departamentos = NULL;
    foreach ($sqldep as $dep){
      $dep = (object) $dep;
      $categorias = NULL;
      $strdepartamento = $produto->coddepartamento;
      $strcoddepartamento = '['.$dep->coddep.']';
      $depchecked = (strpos($strdepartamento, $strcoddepartamento) !== false)? 'checked' : '';

      $departamentos .= '<li>
        <label><input type="checkbox" name="produto[departamento][]" '.$depchecked.' value="'.$dep->coddep.'">'.$dep->departamento.'</label>
        <ul class="list-unstyled">';
          $sqlcat = DB::select('codcategoria', 'categoria')->from('e_categoria')->where('coddep', '=', $dep->coddep)->execute()->as_array();
          foreach ($sqlcat as $cat){
            $cat = (object) $cat;
            $strcategoria = $produto->codcategoria;
            $strcodcategoria = '['.$cat->codcategoria.']';
            $catchecked = (strpos($strcategoria, $strcodcategoria) !== false)? 'checked' : '';

            $categorias .= '<li>
              <label><input type="checkbox" name="produto[categoria][]" '.$catchecked.' value="'.$cat->codcategoria.'">'.$cat->categoria.'</label>
            </li>';
          }
        $departamentos .= $categorias.'</ul></li>';
    }

    $sqlmarca = DB::select('codmarca', 'marca')->from('e_marca')->execute()->as_array();
    $marcas = NULL;
    foreach ($sqlmarca as $mrc){
      $mrc = (object) $mrc;
      $marcaselect = ($produto->codmarca == $mrc->codmarca)? 'selected' : '';
      $marcas .= '<option value="'.$mrc->codmarca.'" '.$marcaselect.' >'.$mrc->marca.'</option>';
    }

    $sqlvaricao = DB::select('codvariacao', 'variacao')->from('e_variacao')->execute()->as_array();
    $variacao = NULL;
    foreach ($sqlvaricao as $var){
      $var = (object) $var;
      $variacao .= '<option value="'.$var->codvariacao.'">'.$var->variacao.'</option>';
    }

    $sqlgrupo = DB::select('codgrupo', 'grupo')->from('e_grupoprd')->execute()->as_array();
    $grupos = NULL;
    foreach ($sqlgrupo as $grupo) {
      $grupo = (object) $grupo;
      $gruposelect = ($produto->codgrupo == $grupo->codgrupo)? 'selected' : '';
      $grupos .= '<option value="'.$grupo->codgrupo.'" '.$gruposelect.'>'.$grupo->grupo.'</option>';
    }

    $sqlcor = DB::select('codcor', 'cor', 'valor')->from('e_cor')->execute()->as_array();
    $cores = NULL;
    foreach ($sqlcor as $cor) {
      $cor = (object) $cor;
      $corselect = ($cor->codcor == $produto->codcor)? 'selected' : '';
      $cores .= '<option value="'.$cor->codcor.'" '.$corselect.'>'.$cor->cor.'</option>';
    }

    $sqlimg = DB::select('codimg', 'imagem', 'tipo', 'title', 'listorder')->from('e_imagens')->where('codproduto', '=', $codproduto)->execute()->as_array();
    $imagens = NULL;
    foreach ($sqlimg as $img){
      $img = (object) $img;
      $vwimgs       = new View('ecommerce/imagensList');
      $vwimgs->codimg   = $img->codimg;
      $vwimgs->imagem   = $img->imagem;
      $vwimgs->tipo     = $img->tipo;
      $vwimgs->title     = $img->title;
      $vwimgs->listorder   = $img->listorder;
      $vwimgs->codproduto = $codproduto;
      $imagens .= $vwimgs->render();
    }

    $vw           			= new View('ecommerce/produto');
    $vw->menu         		= Menu::getMenu();
    $vw->codproduto     	= $codproduto;
    $vw->departamentos  	= $departamentos;
    $vw->marcas       		= $marcas;
    $vw->variacao       	= $variacao;
    $vw->grupos       		= $grupos;
    $vw->cores         		= $cores;
    $vw->imagens      		= $imagens;
    $vw->refproduto     	= $produto->refproduto;
    $vw->produto       		= $produto->produto;
    $vw->descricao_curta   	= $produto->descricao_curta;
    $vw->descricao       	= $produto->descricao;
    $vw->quantidade     	= $produto->quantidade;
    $vw->valor        		= $produto->valor;
    $vw->peso         		= $produto->peso;
    $vw->altura       		= $produto->altura;
    $vw->largura       		= $produto->largura;
    $vw->comprimento    	= $produto->comprimento;
    $vw->valorpromo     	= $produto->valorpromo;
    $vw->desconto       	= $produto->desconto;
    $vw->status       		= $produto->status;
    $vw->keyword       		= $produto->keyword;
    $vw->description   		= $produto->description;
    $vw->codgrupo       	= $produto->codgrupo;
    $vw->fretegratis    	= $produto->fretegratis;
    $vw->parcelas       	= $produto->parcelas;
    $vw->tipo        		= $produto->tipo;
    $vw->destaque      		= $produto->destaque;
    $vw->lancamento     	= $produto->lancamento;
    $vw->prazo        		= $produto->prazo;
    $vw->slug        		= $produto->slug;
    $vw->tipo_produto       = $produto->tipo_produto;
    $this->pagina->mountPageEcommerce('Produto', $vw->render());

  } // product edit

  public function action_produtoAddVariacao(){
    if(!empty($_POST)){

      $valvariacao  = $_POST['valvariacao'  ];
        $preco       = HTMLhelp::slug($_POST['preco']);
        $preco_promocional = HTMLhelp::slug($_POST['preco_promocional']);
        $quantidade   = $_POST['quantidade'  ];
        $peso       = $_POST['peso'      ];
        $largura     = $_POST['largura'    ];
         $comprimento   = $_POST['comprimento'  ];
        $altura     = $_POST['altura'    ];
        $codproduto   = $_POST['codproduto'  ];
        $codvariacao  = $_POST['codvariacao'  ];
      $codref      = $_POST['codref'    ];

        $insert = DB::insert('e_valvariacao',
              array('codvariacao', 'valor', 'preco', 'preco_promocional', 'peso', 'altura', 'largura', 'comprimento', 'quantidade', 'codproduto', 'codref'))
              ->values(array($codvariacao, $valvariacao, $preco, $preco_promocional, $peso, $altura, $largura, $comprimento, $quantidade, $codproduto, $codref))
              ->execute();

      if($insert){
        return true;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }

	public function action_dadosVariacoes(){
		$codval = $this->request->param('arg1');

		$qry = DB::query(Database::SELECT, "SELECT codval, codvariacao, valor, codref, preco, preco_promocional, peso, altura, largura, comprimento, quantidade, codproduto FROM e_valvariacao WHERE codval = {$codval}")->execute()->as_array();
		foreach($qry as $row) $row = (object) $row;

		$response_array['codval'] 		= $row->codval;
        $response_array['codvariacao'] 	= $row->codvariacao;
        $response_array['valvariacao'] 	= $row->valor;
        $response_array['codref'] 		= $row->codref;
        $response_array['preco'] 		= HTMLhelp::valor($row->preco);
        $response_array['preco_promocional'] = HTMLhelp::valor($row->preco_promocional);
		$response_array['peso'] 		= $row->peso;
		$response_array['largura'] 		= $row->largura;
        $response_array['comprimento'] 	= $row->comprimento;
        $response_array['altura'] 		= $row->altura;
        $response_array['quantidade'] 	= $row->quantidade;
		$response_array['status']		= 'success';

        echo json_encode($response_array);

	}

  public function action_produtoEditVariacao(){

    if(!empty($_POST)){

		$codval  			= $_POST['codval'  		];
		$valvariacao  		= $_POST['valvariacao'  ];
        $preco       		= HTMLhelp::slug($_POST['preco']);
        $preco_promocional 	= HTMLhelp::slug($_POST['preco_promocional']);
        $quantidade   		= $_POST['quantidade'  	];
        $peso       		= $_POST['peso'      	];
        $largura     		= $_POST['largura'    	];
        $comprimento   		= $_POST['comprimento'  ];
        $quantidade   		= $_POST['quantidade'   ];
        $altura     		= $_POST['altura'    	];
        $codvariacao  		= $_POST['codvariacaoEdit'];
		$codref      		= $_POST['codref'    	];

		$qry = "UPDATE e_valvariacao SET
		codvariacao = '{$codvariacao}',
		valor = '{$valvariacao}',
		preco = '{$preco}',
		preco_promocional = '{$preco_promocional}',
		peso = '{$peso}',
		altura = '{$altura}',
		largura = '{$largura}',
		comprimento = '{$comprimento}',
		quantidade = '{$quantidade}',
		codref = '{$codref}'
		WHERE codval = {$codval}";

		$update = DB::query(Database::UPDATE, $qry)->execute();

      if($update){
        return true;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }

  public function action_produtoListVariacao(){

    $codproduto = $this->request->param('arg1');

    $sqlvar = "SELECT DISTINCT var.variacao, var.codvariacao
          FROM e_variacao var
          INNER JOIN e_valvariacao val ON val.codvariacao = var.codvariacao AND val.codproduto = :codproduto";
    $qryvar = DB::query(Database::SELECT, $sqlvar)
          ->bind(':codproduto', $codproduto)
          ->execute()->as_array();

    $variacoes = NULL;
    foreach ($qryvar as $var){
      $var = (object) $var;
      $variacoes .= '<table class="table table-striped table-bordered table-hover" id="datatable_products">
      <thead>
        <tr role="row" class="heading">
          <th width="1%">
            <strong>'.$var->variacao.'</strong>
          </th>
        </tr>
        <tr role="row" class="heading">
          <th width="10%">
             Cod. Ref.
          </th>
          <th width="15%">
             Valor
          </th>
          <th width="10%">
             Preço
          </th>
          <th width="10%">
             Preço Promocional
          </th>
          <th width="15%">
             Largura / Altura / Comprimento
          </th>
          <th width="15%">
             Peso
          </th>
          <th width="10%">
             Estoque
          </th>
          <th width="10%">
             Ações
          </th>
        </tr>
      </thead>
    <tbody>';
      $codvariacao = $var->codvariacao;
      $sqlval = "SELECT val.codval, val.valor, val.codref, val.preco, val.preco_promocional,
                val.peso, val.altura, val.largura, val.comprimento,
                val.quantidade, val.codproduto
            FROM e_valvariacao val
            WHERE val.codvariacao = :codvariacao AND val.codproduto = :codproduto ";
      $qryval = DB::query(Database::SELECT, $sqlval)
            ->bind(':codvariacao', $codvariacao)
            ->bind(':codproduto', $codproduto)
            ->execute()->as_array();
      $valvariacao = NULL;
      foreach ($qryval as $val){
        $val = (object) $val;
        $valvariacao .= '<tr role="row" class="odd">
          <td class="sorting_1">'.$val->codref.'</td>
          <td>'.$val->valor.'</td>
          <td>R$ '.HTMLhelp::valor($val->preco).'</td>
          <td>R$ '.HTMLhelp::valor($val->preco_promocional).'</td>
          <td>'.$val->largura.' / '.$val->altura.' / '.$val->comprimento.'</td>
          <td>'.$val->peso.' g</td>
          <td>'.$val->quantidade.'</td>
          <td>
            <a class="btn btn-xs green btn-editable" href="javascript:editvariacao('.$val->codval.')">
              <i class="fa fa-pencil-square-o"></i> Editar
            </a>
			<a class="btn btn-xs red btn-editable" href="javascript:delvariacao('.$val->codval.')">
              <i class="fa fa-trash"></i> Excluir
            </a>
          </td>
        </tr>';
      }
    $variacoes .= $valvariacao.'</tbody>
    </table>';
    }

    echo $variacoes;

  }

  public function action_produtoDelVariacao(){
    $codvalvariacao = $this->request->param('arg1');
    DB::delete('e_valvariacao')->where('codval', '=', $codvalvariacao)->execute();
  }

  public function action_produtoAddGrupo(){
    if(!empty($_POST)){

      $grupo = $_POST['grupo'];
      $slug = HTMLhelp::slug($grupo);

        $insert = DB::insert('e_grupoprd',
              array('grupo', 'slug'))
              ->values(array($grupo, $slug))
              ->execute();

      if($insert){
        return true;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }

  public function action_produtoListGrupo(){

    $sql = DB::select('codgrupo', 'grupo')->from('e_grupoprd')->execute()->as_array();
    $grupos = '<option value="">Selecione..</option>';
    foreach ($sql as $grupo) {
      $grupo = (object) $grupo;
      $grupos .= '<option value="'.$grupo->codgrupo.'">'.$grupo->grupo.'</option>';
    }

    echo $grupos;
  }

  public function action_produtoCancel(){
    $codproduto = $this->request->param('arg1');
    DB::delete('e_produto')->where('codproduto', '=', $codproduto)->execute();
    $this->redirect(URL::base(true).'ecommerce/produtos/');
  }

  public function action_produtoDelete(){
    $codproduto = $this->request->param('arg1');
    DB::delete('e_produto')->where('codproduto', '=', $codproduto)->execute();
    $this->redirect(URL::base(true).'ecommerce/produtos/');
  }

  public function action_produtoDelImagem(){
    $codproduto = $this->request->param('arg1');
    $codimg = $this->request->param('arg2');

    $qry = DB::delete('e_imagens')
        ->where('codproduto', '=', $codproduto)
        ->and_where('codimg', '=', $codimg)
        ->execute();
    if($qry){
      $this->redirect(URL::base(true).'ecommerce/produtoEdit/'.$codproduto.'/');
    }else{
      $this->redirect(URL::base(true).'ecommerce/produtos/');
    }

  }

  public function action_produtosRelacionados(){

    $codproduto = $this->request->param('arg1');
    $get     = ($this->request->param('arg2'))? $this->request->param('arg2') : '';
    $codprdrel  = ($this->request->param('arg3'))? $this->request->param('arg3') : '';

    if($get != '' && $codprdrel != ''){
      if($get == 'addProduto'){
        $qry = DB::insert('e_relproduto', array('codproduto', 'codprodutorel'))->values(array($codproduto, $codprdrel))->execute();
        $this->redirect(URL::base(true).'ecommerce/produtosRelacionados/'.$codproduto.'/');
      }
      else if($get == 'delProduto'){
        $qry = DB::delete('e_relproduto')
            ->where('codproduto'    , '=', $codproduto  )
            ->and_where('codprodutorel' , '=', $codprdrel  )
            ->execute();
        $this->redirect(URL::base(true).'ecommerce/produtosRelacionados/'.$codproduto.'/');
      }
    }

    $vw = new View('ecommerce/produtos_relacionados');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Produto');
    $vw->codproduto = $codproduto;
    $this->pagina->mountPageEcommerce('Adicionar produtos', $vw->render());

  }

  public function action_produtoListRel(){

    $codproduto  = $this->request->param('arg1');

    $condicao = NULL;
    $inner = NULL;
    if(!empty($_POST['produto'])){
      $condicao .= " AND prd.produto LIKE '%".$_POST['produto']."%' ";
    }

    if(!empty($_POST['refproduto'])){
      $condicao .= " AND prd.refproduto LIKE '%".$_POST['refproduto']."%' ";
    }

    $condicao .= " AND prd.codproduto <> $codproduto ";

    if(!empty($_POST['status'])){
      if($_POST['status'] == 'S'){
        $inner .= " INNER JOIN e_relprdpromo rel ON rel.codproduto = prd.codproduto ";
      }else{
        $inner .= " ";
      }
    }

    $qry = "SELECT DISTINCT prd.codproduto
        , prd.produto
        , prd.valor
        , prd.refproduto
        , prd.valorpromo
        , prd.quantidade
        , prd.status
        , img.imagem
        FROM e_produto prd
        $inner
        LEFT JOIN e_imagens img ON img.codproduto = prd.codproduto WHERE 1=1 $condicao GROUP BY prd.codproduto";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();

    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
    $iDisplayStart = intval($_REQUEST['start']);
    $sEcho = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();

    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;

    foreach ($sql as $row){
      $row = (object) $row;
      $codprodutorel = $row->codproduto;
      $status = ($row->status == 'A')? 'success' : 'danger';
      $currentstatus = ($row->status == 'A')? 'Publicado' : 'Inativo';
      $imagem = ($row->imagem)? '<img src="'.$row->imagem.'" height="80" />' : 'Sem Imagem';

      $qryver = DB::select('id')
            ->from('e_relproduto')
            ->where('codproduto', '=', $codproduto)
            ->and_where('codprodutorel', '=', $codprodutorel)
            ->execute()->as_array();
      if(count($qryver) >= 1){
        $btn = '<a href="'.URL::base(true).'ecommerce/produtosRelacionados/'.$codproduto.'/delProduto/'.$codprodutorel.'/" class="btn btn-xs red btn-editable">
          <i class="fa fa-trash"></i> Remover
        </a>';
      }else{
        $btn = '<a href="'.URL::base(true).'ecommerce/produtosRelacionados/'.$codproduto.'/addProduto/'.$codprodutorel.'/" class="btn btn-xs blue btn-editable">
          <i class="fa fa-plus"></i> Adicionar
        </a>';
      }

      $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="'.$row->codproduto.'">',
        $row->refproduto,
        $imagem,
        $row->produto,
        'R$ '.$row->valor,
        $row->quantidade,
        '<span class="label label-sm label-'.$status.'">'.$currentstatus.'</span>',
        $btn,
      );
    }

    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK";
      $records["customActionMessage"] = "Group action successfully has been completed. Well done!";
    }

    $records["draw"]       = $sEcho;
    $records["recordsTotal"]   = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

  public function action_produtoAvaliacoes(){

    $codproduto = $this->request->param('arg1');
    $get     = ($this->request->param('arg2'))? $this->request->param('arg2') : '';
    $codcomentario  = ($this->request->param('arg3'))? $this->request->param('arg3') : '';

    if($get != '' && $codcomentario != ''){
      if($get == 'aprovar'){
        $qry = DB::update('e_avaliacao')->set(array('ativo' => 'S'))->where('codcomentario', '=', $codcomentario)->execute();
        $this->redirect(URL::base(true).'ecommerce/produtoAvaliacoes/'.$codproduto.'/');
      }
      else if($get == 'reprovar'){
        $qry = DB::update('e_avaliacao')->set(array('ativo' => 'N'))->where('codcomentario', '=', $codcomentario)->execute();
        $this->redirect(URL::base(true).'ecommerce/produtoAvaliacoes/'.$codproduto.'/');
      }
    }


    $sql = DB::query(Database::SELECT, "SELECT ROUND(AVG(nota)) AS media FROM e_avaliacao WHERE codproduto = :codproduto AND ativo = 'S'")
        ->bind(':codproduto', $codproduto)
        ->execute()->as_array();
    foreach ($sql as $ava) $ava = (object) $ava;

    $media = null;
    for ($i = 1; $i <= $ava->media; $i++){
      $media .= '<i class="fa fa-star" aria-hidden="true"></i>';
    }

    $vw = new View('ecommerce/produto_avaliacoes');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Produto');
    $vw->codproduto = $codproduto;
    $vw->media = $media;
    $this->pagina->mountPageEcommerce('Adicionar produtos', $vw->render());

  }

  public function action_produtoListAvaliacoes(){
    $codproduto  = $this->request->param('arg1');

    $qry = "SELECT codcomentario, nome, comentario, nota, ativo, email
        FROM e_avaliacao WHERE codproduto = $codproduto";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();

    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
    $iDisplayStart = intval($_REQUEST['start']);
    $sEcho = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();

    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;

    foreach ($sql as $row){
      $row = (object) $row;


      if($row->ativo == 'S'){
        $btn = '<a href="'.URL::base(true).'ecommerce/produtoAvaliacoes/'.$codproduto.'/reprovar/'.$row->codcomentario.'/" class="btn btn-xs red btn-editable">
          <i class="fa fa-trash"></i> Reprovar
        </a>';
      }else{
        $btn = '<a href="'.URL::base(true).'ecommerce/produtoAvaliacoes/'.$codproduto.'/aprovar/'.$row->codcomentario.'/" class="btn btn-xs blue btn-editable">
          <i class="fa fa-plus"></i> Aprovar
        </a>';
      }

      $nota = null;
      for ($i = 1; $i <= $row->nota; $i++){
        $nota .= '<i class="fa fa-star" aria-hidden="true"></i>';
      }

      $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="'.$row->codcomentario.'">',
        $row->nome,
        $row->email,
        $row->comentario,
        $nota,
        $btn,
      );
    }

    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK";
      $records["customActionMessage"] = "Group action successfully has been completed. Well done!";
    }

    $records["draw"]       = $sEcho;
    $records["recordsTotal"]   = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

/* PRODUTOS */


/* MARCAS */

  public function action_marcas(){

    $get = ($this->request->param('arg1'))? $this->request->param('arg1') : '';

    $vw = new View('ecommerce/marcas');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Marca');
    $this->pagina->mountPageEcommerce('Marcas', $vw->render());
  }

  public function action_marcasList(){

    $condicao = NULL;
    if(!empty($_POST['marca'])){
      $condicao .= " AND marca LIKE '%".$_POST['marca']."%' ";
    }

    if(!empty($_POST['codmarca'])){
      $condicao .= " AND codmarca = ".$_POST['codmarca']." ";
    }

    $qry = "SELECT codmarca, marca, imagem FROM e_marca WHERE 1=1 $condicao";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();


    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
    $iDisplayStart   = intval($_REQUEST['start']);
    $sEcho           = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();

    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;

    //for($i = $iDisplayStart; $i < $end; $i++) {

    foreach($sql as $row){

      $row = (object) $row;

      $id = $row->codmarca;
      $imagem = ($row->imagem)? '<img src="'.$row->imagem.'" height="40">' : 'Sem Imagem';
      $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="'.$id.'">',
        $id,
        $row->marca,
        $imagem,
        '<a href="'.URL::base(true).'ecommerce/marcaEdit/'.$row->codmarca.'/" class="btn btn-xs default btn-editable">
          <i class="fa fa-pencil"></i> Editar
        </a>
        <a href="'.URL::base(true).'ecommerce/marcaDelete/'.$row->codmarca.'/" class="btn btn-xs red btn-editable">
          <i class="fa fa-trash"></i> Excluir
        </a>',
      );
    }

    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
      $records["customActionMessage"] = "ação do grupo com êxito foi concluída. Bem feito!"; // pass custom message(useful for getting status of group actions)
    }

    $records["draw"] = $sEcho;
    $records["recordsTotal"] = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

  public function action_marcaNew(){

    if(!empty($_POST)){

      $marca = str_replace('.', '', $_POST['marca']);
      $slug = HTMLhelp::slug($marca);
      if(!empty($_FILES)){

        $dir = 'uploads/ecommerce/marcas/';
        if (!file_exists($dir)){
          mkdir($dir, 0777, true);
          chmod($dir, 0777);
        }

        $aExtensoes = array("jpg", "jpeg", "bmp", "png", "JPEG", "JPG", "gif");
        $MaxTam = 1024 * 114068;

        $_FILES['imagens']['name'] = array_unique($_FILES['imagens']['name']);
        $imagens_form = $_FILES['imagens'];

        foreach ($imagens_form['name'] as $chave => $nome_foto){
          if (in_array(strtolower(substr($nome_foto, strrpos($nome_foto, ".") + 1)), $aExtensoes)){
            $tamanho = $imagens_form['size'][$chave];
            if ($tamanho <= $MaxTam) {
              $tmp    = $imagens_form['tmp_name'][$chave];
                         $type    = $imagens_form['type'][$chave];

              $extimg = explode(".", $imagens_form['name'][$chave]);
              $extimg = $extimg[count($extimg) -1];
              $imagem = md5($imagens_form['name'][$chave].time())."img.".$extimg;
              $imgmarca = URL::base(true).$dir.$imagem;
              $upload = move_uploaded_file($tmp, $dir.$imagem);

            }
          }
        }//foreach
      }else{

        $imgmarca = '';
      }

      $qry = DB::insert('e_marca', array('marca', 'slug', 'imagem'))
          ->values(array($marca, $slug, $imgmarca))->execute();

      if($qry){
        $this->redirect(URL::base(true).'ecommerce/marcas/inserido/');
      }else{
        $this->redirect(URL::base(true).'ecommerce/marcas/error/');
      }
    }

    $vw = new View('ecommerce/marca_novo');
    $vw->menu = Menu::getMenu();
    $this->pagina->mountPageEcommerce('Nova marca', $vw->render());
  }

  public function action_marcaEdit(){

    $codmarca = $this->request->param('arg1');

    if(!empty($_POST)){

      $marca = str_replace('.', '', $_POST['marca']);
      $slug = HTMLhelp::slug($marca);
      $codmarca = $_POST['codmarca'];

      if(!empty($_FILES)){

        $dir = 'uploads/ecommerce/marcas/';
        if (!file_exists($dir)){
          mkdir($dir, 0777, true);
          chmod($dir, 0777);
        }

        $aExtensoes = array("jpg", "jpeg", "bmp", "png", "JPEG", "JPG", "gif");
        $MaxTam = 1024 * 114068;

        $_FILES['imagens']['name'] = array_unique($_FILES['imagens']['name']);
        $imagens_form = $_FILES['imagens'];

        foreach ($imagens_form['name'] as $chave => $nome_foto){
          if (in_array(strtolower(substr($nome_foto, strrpos($nome_foto, ".") + 1)), $aExtensoes)){
            $tamanho = $imagens_form['size'][$chave];
            if ($tamanho <= $MaxTam) {
              $tmp    = $imagens_form['tmp_name'][$chave];
                         $type    = $imagens_form['type'][$chave];

              $extimg = explode(".", $imagens_form['name'][$chave]);
              $extimg = $extimg[count($extimg) -1];
              $imagem = md5($imagens_form['name'][$chave].time())."img.".$extimg;
              $imgmarca = URL::base(true).$dir.$imagem;
              $upload = move_uploaded_file($tmp, $dir.$imagem);
            }
          }
        }//foreach

      }else{
        $imgmarca = ($_POST['imagem'])? $_POST['imagem'] : '';
      }

      DB::query(Database::UPDATE, "UPDATE e_marca SET marca = :marca, imagem = :imagem, slug = :slug WHERE codmarca = :codmarca")
      ->bind(':marca'    , $marca  )
      ->bind(':imagem'  , $imgmarca  )
      ->bind(':slug'    , $slug    )
      ->bind(':codmarca'  , $codmarca  )
      ->execute();

      //DB::update('e_marca')->set(array('marca' => $marca, 'imagem' => $imgmarca, 'slug' => $slug))->where('codmarca', '=', $codmarca)->execute();

      $this->redirect(URL::base(true).'ecommerce/marcas/atualizado/');

    }

    $qry = DB::select('marca', 'imagem')->from('e_marca')->where('codmarca', '=', $codmarca)->execute()->as_array();
    foreach($qry as $row) $row = (object) $row;

    $vw = new View('ecommerce/marca_editar');
    $vw->menu    = Menu::getMenu();
    $vw->marca     = $row->marca;
    $vw->imagem   = $row->imagem;
    $vw->codmarca   = $codmarca;
    $this->pagina->mountPageEcommerce('Nova marca', $vw->render());

  }

  public function action_marcaDelete(){

    $codmarca = $this->request->param('arg1');
    $sql = DB::delete('e_marca')->where('codmarca', '=', $codmarca)->execute();
    $this->redirect(URL::base(true).'ecommerce/marcas/excluido/');

  }

/* MARCAS */


/* VARIAÇÕES */

  public function action_variacoes(){

    $get = ($this->request->param('arg1'))? $this->request->param('arg1') : '';

    $vw = new View('ecommerce/variacoes');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Variação');
    $this->pagina->mountPageEcommerce('Variações', $vw->render());
  }

  public function action_variacaoList(){

    $condicao = NULL;
    if(!empty($_POST['variacao'])){
      $condicao .= " AND variacao LIKE '%".$_POST['marca']."%' ";
    }

    if(!empty($_POST['codmarca'])){
      $condicao .= " AND codvariacao = ".$_POST['codvariacao']." ";
    }

    $qry = "SELECT codvariacao, variacao FROM e_variacao WHERE 1=1 $condicao";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();


    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
    $iDisplayStart   = intval($_REQUEST['start']);
    $sEcho           = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();

    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;

    //for($i = $iDisplayStart; $i < $end; $i++) {

    foreach($sql as $row){

      $row = (object) $row;

      $id = $row->codvariacao;
      $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="'.$id.'">',
        $id,
        $row->variacao,
        '<a href="'.URL::base(true).'ecommerce/variacaoEdit/'.$row->codvariacao.'/" class="btn btn-xs default btn-editable">
          <i class="fa fa-pencil"></i> Editar
        </a>
        <a href="'.URL::base(true).'ecommerce/variacaoDelete/'.$row->codvariacao.'/" class="btn btn-xs red btn-editable">
          <i class="fa fa-trash"></i> Excluir
        </a>',
      );
    }

    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK";
      $records["customActionMessage"] = "ação do grupo com êxito foi concluída. Bem feito!";
    }

    $records["draw"] = $sEcho;
    $records["recordsTotal"] = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

  public function action_variacaoNew(){

    if(!empty($_POST)){

      $variacao = $_POST['variacao'];
      $slug = HTMLhelp::slug($variacao);

      $qry = DB::insert('e_variacao', array('variacao', 'slug'))
          ->values(array($variacao, $slug))->execute();

      if($qry){
        $this->redirect(URL::base(true).'ecommerce/variacoes/inserido/');
      }else{
        $this->redirect(URL::base(true).'ecommerce/variacoes/error/');
      }
    }

    $vw = new View('ecommerce/variacao_novo');
    $vw->menu = Menu::getMenu();
    $this->pagina->mountPageEcommerce('Nova variação', $vw->render());
  }

  public function action_variacaoEdit(){

    $codvariacao = $this->request->param('arg1');

    if(!empty($_POST)){

      $variacao = $_POST['variacao'];
      $slug = HTMLhelp::slug($variacao);

      $qry = DB::update('e_variacao')->set(array('variacao' => $variacao, 'slug' => $slug))
          ->where('codvariacao', '=', $codvariacao)->execute();

      $this->redirect(URL::base(true).'ecommerce/variacoes/atualizado/');

    }

    $qry = DB::select('variacao')->from('e_variacao')->where('codvariacao', '=', $codvariacao)->execute()->as_array();
    foreach($qry as $row) $row = (object) $row;

    $vw = new View('ecommerce/variacao_editar');
    $vw->menu    = Menu::getMenu();
    $vw->variacao   = $row->variacao;
    $vw->codvariacao= $codvariacao;
    $this->pagina->mountPageEcommerce('Nova variação', $vw->render());

  }

  public function action_variacaoDelete(){

    $codvariacao = $this->request->param('arg1');

    $del = DB::delete('e_valvariacao')->where('codvariacao', '=', $codvariacao)->execute();
    $sql = DB::delete('e_variacao')->where('codvariacao', '=', $codvariacao)->execute();

    $this->redirect(URL::base(true).'ecommerce/variacoes/excluido/');

  }

/* VARIAÇÕES */


/* CATEGORIAS */

  public function action_categorias(){

    $get = ($this->request->param('arg1'))? $this->request->param('arg1') : '';

    $vw = new View('ecommerce/categorias');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Categoria');
    $this->pagina->mountPageEcommerce('Categorias', $vw->render());
  }

  public function action_categoriasList(){

    $condicao = NULL;
    if(!empty($_POST['categoria'])){
      $condicao .= " AND cat.categoria LIKE '%".$_POST['categoria']."%' ";
    }

    if(!empty($_POST['codcategoria'])){
      $condicao .= " AND cat.codcategoria = ".$_POST['codcategoria']." ";
    }

    $qry = "SELECT cat.codcategoria, cat.categoria, cat.imagem, dep.departamento
        FROM e_categoria cat
        LEFT JOIN e_departamento dep ON dep.coddep = cat.coddep
        WHERE 1=1 $condicao";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();


    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
    $iDisplayStart   = intval($_REQUEST['start']);
    $sEcho           = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();

    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;

    //for($i = $iDisplayStart; $i < $end; $i++) {

    foreach($sql as $row){

      $row = (object) $row;

      $id = $row->codcategoria;
      $imagem = ($row->imagem)? '<img src="'.$row->imagem.'" height="40">' : 'Sem Imagem';
      $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="'.$id.'">',
        $id,
        $row->categoria,
        $imagem,
        $row->departamento,
        '<a href="'.URL::base(true).'ecommerce/categoriaEdit/'.$row->codcategoria.'/" class="btn btn-xs default btn-editable">
          <i class="fa fa-pencil"></i> Editar
        </a>
        <a href="'.URL::base(true).'ecommerce/categoriaDelete/'.$row->codcategoria.'/" class="btn btn-xs red btn-editable">
          <i class="fa fa-trash"></i> Excluir
        </a>',
      );
    }

    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
      $records["customActionMessage"] = "ação do grupo com êxito foi concluída. Bem feito!"; // pass custom message(useful for getting status of group actions)
    }

    $records["draw"] = $sEcho;
    $records["recordsTotal"] = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

  public function action_categoriaNew(){

    if(!empty($_POST)){

      $imgcategoria = NULL;
      $categoria = $_POST['categoria'];
      $slug = HTMLhelp::slug($categoria);
      $coddep = $_POST['coddep'];

      if(!empty($_FILES)){
        $dir = 'uploads/ecommerce/categoria/';
        if (!file_exists($dir)){
          mkdir($dir, 0777, true);
          chmod($dir, 0777);
        }

        $aExtensoes = array("jpg", "jpeg", "bmp", "png", "JPEG", "JPG", "gif");
        $MaxTam = 1024 * 5120;

        $_FILES['imagens']['name'] = array_unique($_FILES['imagens']['name']);
        $imagens_form = $_FILES['imagens'];

        foreach ($imagens_form['name'] as $chave => $nome_foto){
          if (in_array(strtolower(substr($nome_foto, strrpos($nome_foto, ".") + 1)), $aExtensoes)){
            $tamanho = $imagens_form['size'][$chave];
            if ($tamanho <= $MaxTam) {
              $tmp    = $imagens_form['tmp_name'][$chave];
                         $type    = $imagens_form['type'][$chave];

              $extimg = explode(".", $imagens_form['name'][$chave]);
              $extimg = $extimg[count($extimg) -1];
              $imagem = md5($imagens_form['name'][$chave].time())."img.".$extimg;
              $imgcategoria = URL::base(true).$dir.$imagem;
              $upload = move_uploaded_file($tmp, $dir.$imagem);

            }
          }
        }//foreach
      }

      $qry = DB::insert('e_categoria', array('categoria', 'slug', 'imagem', 'coddep'))
          ->values(array($categoria, $slug, $imgcategoria, $coddep))->execute();

      if($qry){
        $this->redirect(URL::base(true).'ecommerce/categorias/inserido/');
      }else{
        $this->redirect(URL::base(true).'ecommerce/categorias/error/');
      }
    }

    $listop = '<option>Selecione o departamento</option>';
    $sqldep = DB::select('coddep', 'departamento')->from('e_departamento')->execute()->as_array();
    foreach ($sqldep as $dep){
      $dep = (object) $dep;
      $listop .= '<option value="'.$dep->coddep.'">'.$dep->departamento.'</option>';
    }

    $vw = new View('ecommerce/categoria_novo');
    $vw->menu = Menu::getMenu();
    $vw->departamentos = $listop;
    $this->pagina->mountPageEcommerce('Nova categoria', $vw->render());
  }

  public function action_categoriaEdit(){

    $codcategoria = ($this->request->param('arg1'))? $this->request->param('arg1') : $_POST['codcategoria'];

    if(!empty($_POST)){

      $categoria = $_POST['categoria'];
      $slug = HTMLhelp::slug($categoria);
      $coddep = $_POST['coddep'];
      $imgcategoria = null;

      if(!empty($_FILES)){
        $dir = 'uploads/ecommerce/categorias/';
        if (!file_exists($dir)){
          mkdir($dir, 0777, true);
          chmod($dir, 0777);
        }

        $aExtensoes = array("jpg", "jpeg", "bmp", "png", "JPEG", "JPG", "gif");
        $MaxTam = 1024 * 5120;

        $_FILES['imagens']['name'] = array_unique($_FILES['imagens']['name']);
        $imagens_form = $_FILES['imagens'];

        foreach ($imagens_form['name'] as $chave => $nome_foto){
          if (in_array(strtolower(substr($nome_foto, strrpos($nome_foto, ".") + 1)), $aExtensoes)){
            $tamanho = $imagens_form['size'][$chave];
            if ($tamanho <= $MaxTam) {
              $tmp    = $imagens_form['tmp_name'][$chave];
                         $type    = $imagens_form['type'][$chave];

              $extimg = explode(".", $imagens_form['name'][$chave]);
              $extimg = $extimg[count($extimg) -1];
              $imagem = md5($imagens_form['name'][$chave].time())."img.".$extimg;
              $imgcategoria = URL::base(true).$dir.$imagem;
              $upload = move_uploaded_file($tmp, $dir.$imagem);
            }
          }
        }//foreach

      }else{
        $imgcategoria = $_POST['imagem'];
      }

      $qry = DB::query(Database::UPDATE, "UPDATE e_categoria SET categoria = '{$categoria}', imagem = '{$imgcategoria}', slug = '{$slug}', coddep = '{$coddep}' WHERE codcategoria = '{$codcategoria}'")->execute();


      $this->redirect(URL::base(true).'ecommerce/categorias/atualizado/');

    }

    $qry = DB::select('categoria', 'imagem', 'coddep')->from('e_categoria')->where('codcategoria', '=', $codcategoria)->execute()->as_array();
    foreach($qry as $row) $row = (object) $row;

    $listop = '<option>Selecione o departamento</option>';
    $sqldep = DB::select('coddep', 'departamento')->from('e_departamento')->execute()->as_array();
    foreach ($sqldep as $dep){
      $dep = (object) $dep;
      if($dep->coddep == $row->coddep){
        $listop .= '<option value="'.$dep->coddep.'" selected>'.$dep->departamento.'</option>';
      }else{
        $listop .= '<option value="'.$dep->coddep.'">'.$dep->departamento.'</option>';
      }
    }

    $vw = new View('ecommerce/categoria_editar');
    $vw->menu      = Menu::getMenu();
    $vw->categoria     = $row->categoria;
    $vw->imagem     = $row->imagem;
    $vw->codcategoria   = $codcategoria;
    $vw->departamentos   = $listop;
    $this->pagina->mountPageEcommerce('Nova categoria', $vw->render());

  }

  public function action_categoriaDelete(){

    $codcategoria = $this->request->param('arg1');
    $sql = DB::delete('e_categoria')->where('codcategoria', '=', $codcategoria)->execute();
    $this->redirect(URL::base(true).'ecommerce/categorias/excluido/');

  }

/* CATEGORIAS */

/* DEPARTAMENTOS */

  public function action_departamentos(){

    $get = ($this->request->param('arg1'))? $this->request->param('arg1') : '';

    $vw = new View('ecommerce/departamentos');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Departamento');
    $this->pagina->mountPageEcommerce('Departamentos', $vw->render());

  }

  public function action_departamentosList(){

    $condicao = NULL;
    if(!empty($_POST['departamento'])){
      $condicao .= " AND departamento LIKE '%".$_POST['departamento']."%' ";
    }

    if(!empty($_POST['coddep'])){
      $condicao .= " AND coddep = ".$_POST['coddep']." ";
    }

    $qry = "SELECT coddep, departamento, imagem FROM e_departamento WHERE 1=1 $condicao";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();

    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
    $iDisplayStart   = intval($_REQUEST['start']);
    $sEcho       = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();

    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;

    //for($i = $iDisplayStart; $i < $end; $i++) {

    foreach($sql as $row){

      $row = (object) $row;

      $id = $row->coddep;
      $imagem = ($row->imagem)? '<img src="'.$row->imagem.'" height="40">' : 'Sem Imagem';
      $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="'.$id.'">',
        $id,
        $row->departamento,
        $imagem,
        '<a href="'.URL::base(true).'ecommerce/departamentoEdit/'.$row->coddep.'/" class="btn btn-xs default btn-editable">
          <i class="fa fa-pencil"></i> Editar
        </a>
        <a href="'.URL::base(true).'ecommerce/departamentoDelete/'.$row->coddep.'/" class="btn btn-xs red btn-editable">
          <i class="fa fa-trash"></i> Excluir
        </a>',
      );
    }

    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
      $records["customActionMessage"] = "ação do grupo com êxito foi concluída. Bem feito!"; // pass custom message(useful for getting status of group actions)
    }

    $records["draw"] = $sEcho;
    $records["recordsTotal"] = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

  public function action_departamentoNew(){

    if(!empty($_POST)){

      $imgdepartamento = NULL;
      $departamento = $_POST['departamento'];
      $slug = HTMLhelp::slug($departamento);
      if(!empty($_FILES)){
        $dir = 'uploads/ecommerce/departamento/';
        if (!file_exists($dir)){
          mkdir($dir, 0777, true);
          chmod($dir, 0777);
        }

        $aExtensoes = array("jpg", "jpeg", "bmp", "png", "JPEG", "JPG", "gif");
        $MaxTam = 1024 * 5120;

        $_FILES['imagens']['name'] = array_unique($_FILES['imagens']['name']);
        $imagens_form = $_FILES['imagens'];

        foreach ($imagens_form['name'] as $chave => $nome_foto){
          if (in_array(strtolower(substr($nome_foto, strrpos($nome_foto, ".") + 1)), $aExtensoes)){
            $tamanho = $imagens_form['size'][$chave];
            if ($tamanho <= $MaxTam) {
              $tmp    = $imagens_form['tmp_name'][$chave];
                         $type    = $imagens_form['type'][$chave];

              $extimg = explode(".", $imagens_form['name'][$chave]);
              $extimg = $extimg[count($extimg) -1];
              $imagem = md5($imagens_form['name'][$chave].time())."img.".$extimg;
              $imgdepartamento = URL::base(true).$dir.$imagem;
              $upload = move_uploaded_file($tmp, $dir.$imagem);

            }
          }
        }//foreach
      }

      $qry = DB::insert('e_departamento', array('departamento', 'slug', 'imagem'))
          ->values(array($departamento, $slug, $imgdepartamento))->execute();

      if($qry){
        $this->redirect(URL::base(true).'ecommerce/departamentos/inserido/');
      }else{
        $this->redirect(URL::base(true).'ecommerce/departamentos/error/');
      }
    }

    $vw = new View('ecommerce/departamento_novo');
    $vw->menu = Menu::getMenu();
    $this->pagina->mountPageEcommerce('Nova departamento', $vw->render());
  }

  public function action_departamentoEdit(){

    $coddep = $this->request->param('arg1');

    if(!empty($_POST)){

      $departamento = $_POST['departamento'];
      $slug = HTMLhelp::slug($departamento);
      $imgdepartamento = null;
      $coddep = $_POST['coddep'];

      if(!empty($_FILES)){
        $dir = 'uploads/ecommerce/departamentos/';
        if (!file_exists($dir)){
          mkdir($dir, 0777, true);
          chmod($dir, 0777);
        }

        $aExtensoes = array("jpg", "jpeg", "bmp", "png", "JPEG", "JPG", "gif");
        $MaxTam = 1024 * 5120;

        $_FILES['imagens']['name'] = array_unique($_FILES['imagens']['name']);
        $imagens_form = $_FILES['imagens'];

        foreach ($imagens_form['name'] as $chave => $nome_foto){
          if (in_array(strtolower(substr($nome_foto, strrpos($nome_foto, ".") + 1)), $aExtensoes)){
            $tamanho = $imagens_form['size'][$chave];
            if ($tamanho <= $MaxTam) {
              $tmp    = $imagens_form['tmp_name'][$chave];
                         $type    = $imagens_form['type'][$chave];

              $extimg = explode(".", $imagens_form['name'][$chave]);
              $extimg = $extimg[count($extimg) -1];
              $imagem = md5($imagens_form['name'][$chave].time())."img.".$extimg;
              $imgdepartamento = URL::base(true).$dir.$imagem;
              $upload = move_uploaded_file($tmp, $dir.$imagem);
            }
          }
        }//foreach

      }else{
        $imgdepartamento = $_POST['imagem'];
      }

      $qry = DB::update('e_departamento')->set(array('departamento' => $departamento, 'imagem' => $imgdepartamento, 'slug' => $slug))
          ->where('coddep', '=', $coddep)->execute();
      $this->redirect(URL::base(true).'ecommerce/departamentos/atualizado/');

    }

    $qry = DB::select('departamento', 'imagem')->from('e_departamento')->where('coddep', '=', $coddep)->execute()->as_array();
    foreach($qry as $row) $row = (object) $row;

    $vw = new View('ecommerce/departamento_editar');
    $vw->menu      = Menu::getMenu();
    $vw->departamento     = $row->departamento;
    $vw->imagem     = $row->imagem;
    $vw->coddep   = $coddep;
    $this->pagina->mountPageEcommerce('Nova departamento', $vw->render());

  }

  public function action_departamentoDelete(){

    $coddep = $this->request->param('arg1');
    $sql = DB::delete('e_departamento')->where('coddep', '=', $coddep)->execute();
    $this->redirect(URL::base(true).'ecommerce/departamentos/excluido/');

  }

/* DEPARTAMENTOS */

/* COR */

  public function action_cor(){

    $get = ($this->request->param('arg1'))? $this->request->param('arg1') : '';

    $vw = new View('ecommerce/cor');
    $vw->menu = Menu::getMenu();
    $vw->retorno = Controller_Erro::getErro($get, 'Cor');
    $this->pagina->mountPageEcommerce('Cor', $vw->render());
  }

  public function action_corList(){

    $condicao = NULL;
    if(!empty($_POST['cor'])){
      $condicao .= " AND cor LIKE '%".$_POST['cor']."%' ";
    }

    if(!empty($_POST['codcor'])){
      $condicao .= " AND codcor = ".$_POST['codcor']." ";
    }

    $qry = "SELECT codcor, cor, valor FROM e_cor WHERE 1=1 $condicao";
    $sql = DB::query(Database::SELECT, $qry)->execute()->as_array();


    $iTotalRecords   = count($sql);
    $iDisplayLength = intval($_REQUEST['length']);
    $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
    $iDisplayStart   = intval($_REQUEST['start']);
    $sEcho           = intval($_REQUEST['draw']);

    $records = array();
    $records["data"] = array();

    $end = $iDisplayStart + $iDisplayLength;
    $end = $end > $iTotalRecords ? $iTotalRecords : $end;

    //for($i = $iDisplayStart; $i < $end; $i++) {

    foreach($sql as $row){

      $row = (object) $row;

      $id = $row->codcor;
      $records["data"][] = array(
        '<input type="checkbox" name="id[]" value="'.$id.'">',
        $id,
        $row->cor,
        '<div style="background:'.$row->valor.'; width: 20px; height: 20px"></div>',
        '<a href="'.URL::base(true).'ecommerce/corEdit/'.$row->codcor.'/" class="btn btn-xs default btn-editable">
          <i class="fa fa-pencil"></i> Editar
        </a>
        <a href="'.URL::base(true).'ecommerce/corDelete/'.$row->codcor.'/" class="btn btn-xs red btn-editable">
          <i class="fa fa-trash"></i> Excluir
        </a>',
      );
    }

    if (isset($_REQUEST["customActionType"]) && $_REQUEST["customActionType"] == "group_action") {
      $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
      $records["customActionMessage"] = "ação do grupo com êxito foi concluída. Bem feito!"; // pass custom message(useful for getting status of group actions)
    }

    $records["draw"] = $sEcho;
    $records["recordsTotal"] = $iTotalRecords;
    $records["recordsFiltered"] = $iTotalRecords;

    echo json_encode($records);
  }

  public function action_corNew(){

    if(!empty($_POST)){

      $cor   = $_POST['cor'];
      $valor   = $_POST['valor'];

      $qry = DB::insert('e_cor', array('cor', 'valor'))
          ->values(array($cor, $valor))->execute();

      if($qry){
        $this->redirect(URL::base(true).'ecommerce/cor/inserido/');
      }else{
        $this->redirect(URL::base(true).'ecommerce/cor/error/');
      }
    }

    $vw = new View('ecommerce/cor_novo');
    $vw->menu = Menu::getMenu();
    $this->pagina->mountPageEcommerce('Nova Cor', $vw->render());
  }

  public function action_corEdit(){

    $codcor = $this->request->param('arg1');

    if(!empty($_POST)){

      $cor = $_POST['cor'];
      $valor = $_POST['valor'];

      $qry = DB::update('e_cor')->set(array('cor' => $cor, 'valor' => $valor))
          ->where('codcor', '=', $codcor)->execute();

      $this->redirect(URL::base(true).'ecommerce/cor/atualizado/');

    }

    $qry = DB::select('cor', 'valor')->from('e_cor')->where('codcor', '=', $codcor)->execute()->as_array();
    foreach($qry as $row) $row = (object) $row;

    $vw = new View('ecommerce/cor_editar');
    $vw->menu  = Menu::getMenu();
    $vw->cor   = $row->cor;
    $vw->codcor  = $codcor;
    $vw->valor  = $row->valor;
    $this->pagina->mountPageEcommerce('Editar cor', $vw->render());

  }

  public function action_corDelete(){

    $codcor = $this->request->param('arg1');
    $sql = DB::delete('e_cor')->where('codcor', '=', $codcor)->execute();
    $this->redirect(URL::base(true).'ecommerce/cor/excluido/');

  }

  public function action_integracaoBonus(){

    $sql = DB::query(Database::SELECT, "SELECT ped.sessao, ped.dtpedido, ped.total, ped.bonus, ped.codusu
                      FROM e_pedido ped
                      WHERE ped.usarbonus = 'N'
                      AND ped.status = 'paid'
                      AND ped.dtpedido >= '2017-06-01 00:00:00'")->execute()->as_array();
    foreach ($sql as $row){
      $row = (object) $row;
      $dtcadastro = HTMLhelp::dataUS($row->dtpedido);
      DB::query(Database::INSERT, "INSERT INTO e_bonus (codcupom, dtcadastro, valcompra, valbonus, tipo, codusu)
                    VALUES ('{$row->sessao}', '{$dtcadastro}', '{$row->total}', '{$row->bonus}', 'A', {$row->codusu})")->execute();
    }

  }

/* COR */

} // End Welcome
?>
