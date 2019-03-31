

<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

$produitC=new ProduitC();
if (isset($_POST["idproduit"])){
    $produitC->supprimerProduit($_POST["idproduit"]);
    header('Location:  Gproduit.php');
}

?>
	