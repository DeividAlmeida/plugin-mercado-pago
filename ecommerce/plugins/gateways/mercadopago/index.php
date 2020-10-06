<?php 
header('Access-Control-Allow-Origin: *');
require_once('../../../../includes/funcoes.php');
require_once('../../../../database/config.database.php');
require_once('../../../../database/config.php');
$read =  DBRead('ecommerce_mercadopago','*', "WHERE id = '1'")[0];
$mercadopago = DBRead('ecommerce_plugins','*', "WHERE nome = 'mercadopago'")[0];
?>

    <div class="card">
        <div class="card-header white">
        <strong>Configurar Meio de Pagamento</strong>
    </div>
    <div class="card-body">        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="usuario">Token de Acesso:</label>
                    <input type="text" name="token" id="token" class="form-control" placeholder="Coloque o seu access token" value="<?php echo $read['token']; ?>">
                </div>
            </div>
        </div>
    </div>

<script>
function mercadopago(){
    let m = new XMLHttpRequest();
    let c = document.getElementById('token').value;
    m.open("GET", "?mercadopago&token="+c);
    m.send();
    m.onload = () => {swal("Informações de pagamento Atualizadas!", "Informações de pagamento atualizadas com sucesso!", "success");}
}
</script>