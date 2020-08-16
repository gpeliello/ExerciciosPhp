<?php 
namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução nessa classe.
 *
 * Depois disso:
 * - Crie um PR no github com seu código
 * - Veja o resultado da correção automática do seu código
 * - Commit até os testes passarem
 * - Passou tudo, melhore a cobertura dos testes
 * - Ficou satisfeito, envie seu exercício para a gente! <3
 *
 * Boa sorte :D
 */

  
?>
<form action="resolucao.php" method="get">
    Mensagem: <input type="text" mensagem = "text">  
    <br>  
    <select name="length">
      <option value=8>Maximo 8 caracteres</option>
      <option value=10>Maximo 10 caracteres</option>
      <option value=8>Maximo 12 caracteres</option>
    </select>
    <button> Enviar</button>
  </form>
  <br>
  
  <?
  $text = $_GET("text");
  $length = $_GET("length");
  $tamanhoOG = count($text);
  class Resolucao implements TextWrapInterface {
  
  /**
   * {@inheritdoc}
   *
   * Apague o conteúdo do método abaixo e escreva sua própria implementação,
   * nós colocamos esse mock para poder rodar a análise de cobertura dos
   * testes unitários.
   */    
  public function textWrap(string $text, int $length): array {  
    
    $subtext = explode(" ", $text);
    $limite = $length;
    if ($length === 8) {
      for ($limite; $limite<count($subtext);){
        if (mb_strlen($subtext[$limite]) <= $limite){
          return $subtext;
        }
        elseif(mb_strlen($subtext[$limite]) >= $limite){
          $cut.="\n".$subtext[$limite];           
          $big = $length - mb_strlen($subtext).'\n';
        }
        else(mb_strlen($text)> $length) {
          $procura_espaço=stripos($subtext, ' ', $length)
          (str_replace($procura_espaço, "\n", $subtext ))
        }
      ;
    if ($length === 10) {
      for ($limite; $limite<count($subtext);){
        if (mb_strlen($subtext[$limite]) <= $limite){
          return $subtext;
        }
        elseif(mb_strlen($subtext[$limite]) >= $limite){
          $cut.="\n".$subtext[$limite];           
          $big = $length - mb_strlen($subtext).'\n';
        }
        else(mb_strlen($text)> $length){
          $procura_espaço=stripos($subtext, ' ', $length)
          (str_replace($procura_espaço, "\n", $subtext ))
          
        };
    }
    if ($length === 12) {
      for ($limite; $limite<count($subtext);){
        if (mb_strlen($subtext[$limite]) <= $limite){
          return $subtext;
        }
        elseif(mb_strlen($subtext[$limite]) >= $limite){
          $cut.="\n".$subtext[$limite];           
          $big = $length - mb_strlen($subtext).'\n';
        }
        else(mb_strlen($text)> $length){
          $procura_espaço=stripos($text, ' ', $length)
          (str_replace($procura_espaço, "\n", $subtext))
        };
    }
}