<a href="?page=albums">Voltar Para Os Albums</a>


<h1>Musicas do Álbum <?=$_GET['album'] ?></h1>

<a href="?page=new_music&album=<?=$_GET['album'] ?>" class="btn btn-success">Cadastrar Nova Música</a>


<hr>

<?php 
    $album = $_GET['album'];
    $musics =  getMusic($album);

foreach($musics as $music):

?>
<div class="col-12">
    <audio src="<?= $music?>" controls></audio>
</div>

<?php 

endforeach

?>
