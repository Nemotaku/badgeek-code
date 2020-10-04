<?
$avatar = getAvatar($user->id);
if($avatar):
?>
<img src="<?=base_url($avatar)?>"/>
<br/>
<br/>
<?endif;?>
Username : <?= $user->username ?><br/>
Email : <?= $user->email ?><br/>
Last Login : <?= date('Y-m-d H:m', $user->last_login) ?><br/>

<br/>

Podcasteur : <?= strpos($user->groups_id, '3') !== false ? 'oui' : 'non' ?><br/>
Poditeur : <?= strpos($user->groups_id, '2') !== false ? 'oui' : 'non' ?><br/>
Admin : <?= strpos($user->groups_id, '1') !== false ? 'oui' : 'non' ?><br/>

<br/>

<?php if ($user->active) :?>
    <a 
        href="<?= base_url("admin/users/deactivate/" . $user->id); ?>" 
        class="btn btn-danger"
    >
        Desactiver le compte
    </a>
    <br/>
    <br/>
<?php else :?>
    <a 
        href="<?= base_url("admin/users/activate/" . $user->id); ?>" 
        class="btn btn-info"
    >
        Activer le compte
    </a>
    <br/>
    <br/>
<?php endif ;?>